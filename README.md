# <img src="https://github.com/marek-guran/zbierka-uloh-wd1/assets/26904790/1e5fdb7e-0fe8-4be7-a7b2-50fe8dfc552f" alt="" height="64"> K dispozícii na

[ZBIERKA](https://wd1.site/)

# Inštalácia
### Potrebné veci:
- Docker, Docker compose
- Stiahnuté súbory stránky
### Discord webhook je alerting, keď sa niekto pripojí na web server (môže sa tam dať napríklad písmeno 'a' na preskočenie)

1. Otvorte priečinok s www súbormi stránky a otvorte terminál
2. Spustite príkaz (ak nemáte používateľa v skupine docker, tak pridajte pred príkaz `sudo`)
   - Ak chcete zmeniť porty, tak najskôr upravte install.sh
   - Defaultne porty: 10000 (http) a 10001 (https) pre WEB, 3306 pre DB, 10003 pre PHP My Admin 
```bash
bash install.sh
```
### Po úspešnej inštalácii bez žiadnych chýb:
1. Prejdite na stránku: adresa-ip-zariadenia:10003
2. Prihláste sa do PHP My Admin
3. Vytvorte databázu s názvom zbierka
4. Importujte tabuľky z priečinka zaloha-db/zbierka.sql cez horné menu import
5. Hotovo
