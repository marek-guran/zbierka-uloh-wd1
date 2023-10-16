# K dispozícii na
http://wd1.site/ (ak mi ISP nezmení IP)

# Pridať
- Príklady
- Ďalšie

# Inštalácia - automatická
### Potrebné veci:
- Docker
- Stiahnuté súbory stránky
### Discord webhook je alerting pre prípad DDOS útoku (môže sa tam dať napríklad písmeno 'a' na preskočenie)
```bash
#!/bin/bash

# Nastavenie Discord webhook URL
read -p "Enter Discord webhook URL: " DISCORD_WEBHOOK_URL

# Nastavenie učiteľského hesla
read -p "Enter teacher password: " TEACHER_PASSWORD

# Kde sa nachádajú súbory stránky
read -p "Enter the location of web files (e.g., /var/www/html): " WEB_FILES_LOCATION

# Nainstalujte a spustite Docker kontajner s pouzitim specifikovaneho umiestnenia web suborov
docker run --name zbierka-web -d -p 10000:80 -e DISCORD_WEBHOOK_URL="$DISCORD_WEBHOOK_URL" -e TEACHER_PASSWORD="$TEACHER_PASSWORD" -v "$WEB_FILES_LOCATION":/var/www/html php:apache

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

# Inštalácia libzip-dev a povolenie zip pluginu
docker exec -it zbierka-web bash -c 'apt-get update && apt-get install -y libzip-dev && docker-php-ext-install zip'

# Reštartovať kontajner
docker restart zbierka-web

# Dať práva k zbierke, aby mohol web server ukladať súbory
sudo chmod -R 777 "$WEB_FILES_LOCATION"

echo "Installation and configuration completed."
```

# Inštalácia - manuálna (discord webhook je alerting pre prípad DDOS útoku)
```bash
docker run --name zbierka-web -d -p 10000:80 -e DISCORD_WEBHOOK_URL="https://your.discord.webhook.url" -e TEACHER_PASSWORD="your_teacher_password" -v /home/pi/zbierka/:/var/www/html php:apache
```

# Nastavenie 404.php
```bash
docker cp zbierka-web:/etc/apache2/sites-available/000-default.conf /home/pi/
```
Pridať do súboru:
```conf
ErrorDocument 404 /404.php
```
```bash
docker cp /home/pi/000-default.conf zbierka-web:/etc/apache2/sites-available/000-default.conf
```

# Nastavenie php.ini
```bash
docker cp zbierka-web:/usr/local/etc/php/php.ini-production /home/pi/
```
Otvoriť súbor a zmeniť:
```ini
post_max_size = 30M
upload_max_filesize = 30M
extension=zip (odstrániť symbol ;)
```
```bash
docker cp /home/pi/php.ini-production zbierka-web:/usr/local/etc/php/php.ini
```
```bash
docker exec -it zbierka-web bash
apt-get update
apt-get install -y libzip-dev
docker-php-ext-install zip
```
Reštartovať Kontajner
