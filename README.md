# K dispozícii na
http://91.148.38.245/ (ak mi ISP nezmení IP)

# Pridať
- Príklady
- Nástroje (programy s návodom na inštaláciu pre WD1)
- Ďalšie

# Inštalácia
```bash
docker run --name zbierka-web -d -p 10000:80 -e DISCORD_WEBHOOK_URL="https://your.discord.webhook.url" -e TEACHER_PASSWORD="your_teacher_password" -v /home/pi/zbierka/:/var/www/html php:apache
```

# Nastavenie 404.php
```bash
docker cp zbierka-web:/etc/apache2/sites-available/000-default.conf /home/pi/
```
ErrorDocument 404 /404.php (Pridať do súboru)
```bash
docker cp /home/pi/ zbierka-web:/etc/apache2/sites-available/000-default.conf
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
