#!/bin/bash

# Nastavenie Discord webhook URL
read -p "Enter Discord webhook URL: " DISCORD_WEBHOOK_URL

# Nastavenie učiteľského hesla
read -p "Enter teacher password: " TEACHER_PASSWORD

# Kde sa nachádajú súbory stránky
read -p "Enter the location of web files (e.g., /var/www/html): " WEB_FILES_LOCATION

# Nainstalujte a spustite Docker kontajner s pouzitim specifikovaneho umiestnenia web suborov
docker run --name zbierka-web -d -p 10000:80 -p 10001:443 -e DISCORD_WEBHOOK_URL="$DISCORD_WEBHOOK_URL" -e TEACHER_PASSWORD="$TEACHER_PASSWORD" -v "$WEB_FILES_LOCATION":/var/www/html --restart unless-stopped php:apache

# Nastavenie 404.php
docker cp zbierka-web:/etc/apache2/sites-available/000-default.conf /tmp/000-default.conf
echo 'ErrorDocument 404 /404.php' >> /tmp/000-default.conf
docker cp /tmp/000-default.conf zbierka-web:/etc/apache2/sites-available/000-default.conf

# Nastavenie php.ini
docker cp zbierka-web:/usr/local/etc/php/php.ini-production /tmp/php.ini-production
sed -i 's/post_max_size = 8M/post_max_size = 30M/' /tmp/php.ini-production
sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 30M/' /tmp/php.ini-production
sed -i 's/;extension=zip/extension=zip/' /tmp/php.ini-production
docker cp /tmp/php.ini-production zbierka-web:/usr/local/etc/php/php.ini

# Inštalácia libzip-dev a povolenie pluginov
docker exec -it zbierka-web bash -c 'apt-get update && apt-get install -y libzip-dev && docker-php-ext-install zip && docker-php-ext-install mysqli'

# Reštartovať kontajner
docker restart zbierka-web

# Dať práva k zbierke, aby mohol web server ukladať súbory
sudo chmod -R 777 "$WEB_FILES_LOCATION"

# Vytvoriť docker compose súbor
DOCKER_COMPOSE_FILE="$HOME/docker-compose.yml"
cat > "$DOCKER_COMPOSE_FILE" << EOF
version: '3.7'

services:

  db:
    image: mariadb
    container_name: zbierka-db
    ports:
      - 3306:3306
    environment:
      - PUID=1000
      - PGID=1000
      - TZ=Europe/Bratislava
      - MYSQL_ROOT_PASSWORD=$TEACHER_PASSWORD
      - MYSQL_DATABASE=zbierka
      - MYSQL_USER=admin
      - MYSQL_PASSWORD=$TEACHER_PASSWORD
    volumes:
      - /var/lib/mysql
    networks:
      - zbierka
    restart: unless-stopped
    
  phpmyadmin:
    image: phpmyadmin
    container_name: zbierka-phpmyadmin
    ports:
      - 10003:80
    environment:
      - PMA_HOST=db
      - MYSQL_ROOT_PASSWORD=$TEACHER_PASSWORD
    depends_on:
      - db
    networks:
      - zbierka
    restart: unless-stopped

networks:
  zbierka:
    name: Zbierka
EOF

# Spustiť docker compose
cd "$HOME"
docker-compose up -d

# Presuň web na rovnakú sieť
docker network connect Zbierka zbierka-web
docker restart zbierka-web

echo "Inštalácia bola dokončená."
echo ""
echo "Na dokončenie inštalácia, otvorte PHP My Admin a vytvorte databázu s názvom zbierka a obnovte tabuľky v adresári zaloha-db/zbierka.sql"