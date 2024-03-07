-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: db
-- Čas generovania: Št 07.Mar 2024, 17:33
-- Verzia serveru: 11.2.2-MariaDB-1:11.2.2+maria~ubu2204
-- Verzia PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `zbierka`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `CSS`
--

CREATE TABLE `CSS` (
  `id` int(11) NOT NULL,
  `kategoria` text NOT NULL,
  `nazov` text NOT NULL,
  `zadanie` longtext NOT NULL,
  `html` text NOT NULL,
  `css` text NOT NULL,
  `obrazok` text NOT NULL,
  `video` text NOT NULL,
  `visibleVysledok` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `CSS`
--

INSERT INTO `CSS` (`id`, `kategoria`, `nazov`, `zadanie`, `html`, `css`, `obrazok`, `video`, `visibleVysledok`) VALUES
(1, '1 Texty', '1.1 Texty', 'Vytvorte jednoduchú webovú stránku so samostatným css súborom, <strong>kde zmeníte veľkosť fontov, farbu textu</strong> podľa vlastného výberus nasledujúcimi časťami:<br><br><strong>Hlavička (Header)</strong> s názvom webovej stránky a navigačným menu.<br><strong>Hlavný obsah (Main)</strong> obsahujúci článok, 3 obrázky a vložené video z YouTube.<br><strong>Päta (Footer)</strong> s copyright informáciami.<br><br>Môžete sa inšpirovať obrázkom.', '../priklady/css/1.1 Texty/pr1.html', '../priklady/css/1.1 Texty/pr1.css', '../priklady/css/1.1 Texty/css-texty-pr1.png', '', ''),
(2, '2 Responzivita', '2.1 Karty a text', 'Vytvorte stránku na ktorej budete mať 2 karty, každá karta bude mať aspoň jeden obrázok a pod obrázkom text. Ako ďalšie vytvoríte 3 články a každý z nich bude mať vlastný názov. <br>\r\n<br>Vašou úlohou bude spraviť túto stránku, aby sa dala prehľadne prezerať na akejkoľvek veľkosti obrazovky. <br>\r\n<br>Môžete sa inšpirovať videom.', '../priklady/css/2.1 Karty a text/pr1.html', '../priklady/css/2.1 Karty a text/pr1.css', '', '../priklady/css/2.1 Karty a text/pr1.mp4', ''),
(3, '3 Média', '3.1 Multimediálna knižnica', 'Vytvorte a pekne nadizajnujte webstránku, ktorá funguje ako multimediálna knižnica. Táto knižnica by mala obsahovať: fotky (minimálne 6), videá (aspoň 2), audio nahrávku. Môžete sa  inšpirovať obrázkom.', '../priklady/css/3.1 Multimediálna knižnica/pr1.html', '../priklady/css/3.1 Multimediálna knižnica/pr1.css', '../priklady/css/3.1 Multimediálna knižnica/css-media-pr1.png', '', ''),
(4, '4 Formuláre', '4.1 Prihlásenie', 'Vytvorte jednoduchý prihlasovací formulár, ktorý pošle údaje zadané používateľom v adresnom riadku prehliadača. Formulár musí byť responzívny a moderne nadizajnovaný. Môžete sa inšpirovať obrázkom.', '../priklady/css/4.1 Prihlásenie/pr1.html', '../priklady/css/4.1 Prihlásenie/pr1.css', '../priklady/css/4.1 Prihlásenie/css-formulare-pr1.png', '', ''),
(5, '5 Tabuľky', '5.1 Známky', 'Vytvorte responzívnu tabuľku s aspoň štyrmi stĺpcami a štyrmi riadkami. Taktiež nezabudnite tabuľku vyplniť vašimi hodnotami.<br>\r\n<br><strong>Bonusová úloha:</strong> <br>Keď bude tabuľka zobrazená na malej obrazovke, schovajte posledný stĺpec.', '../priklady/css/5.1 Známky/pr1.html', '../priklady/css/5.1 Známky/pr1.css', '../priklady/css/5.1 Známky/css-tabulky-pr1.png', '', ''),
(6, '6 Flexbox', '6.1 Flexbox', 'Vytvorte webstránku, kde využijete CSS3 funkciu flexbox a zakomponujte na webstránku aj obrázok, ktorý je <strong>špecifikovaný priamo v css súbore.</strong>', '../priklady/css/6.1 Flexbox/pr1.html', '../priklady/css/6.1 Flexbox/pr1.css', '../priklady/css/6.1 Flexbox/css-flexbox-pr1.png', '', ''),
(7, '7 Grid', '7.1 Grid', 'Vytvorte stránku podľa obrázkovej šablóny, použite CSS3 funkciu: grid.', '../priklady/css/7.1 Grid/pr1.html', '../priklady/css/7.1 Grid/pr1.css', '../priklady/css/7.1 Grid/css-grid-pr1.png', '', ''),
(8, '8 Navigácia', '8.1 Header Menu', 'Vytvorte 2 webstránky na ktoré sa bude môcť používateľ prepínať pomocou navigačného menu a podľa toho, ktorá stránka <strong>je aktívna, vizuálne zmeňte navigačnú linku</strong> na menu ako je v zadaní aby používateľ vedel, kde sa práve nachádza. Môžete sa inšpirovať gifom.', '../priklady/css/8.1 Header Menu/pr1-pg1.html', '../priklady/css/8.1 Header Menu/pr1.css', '../priklady/css/8.1 Header Menu/css-menu-pr1.gif', '', ''),
(9, '9 Animácie', '9.1 Text', 'Vytvorte webstránku na ktorej bude podľa vášho výberu animovaný text. Pokúste sa vytvoriť aj iný efekt ako je vo videu v zadaní.', '../priklady/css/9.1 Text/pr1.html', '../priklady/css/9.1 Text/pr1.css', '', '../priklady/css/9.1 Text/text1.mp4', ''),
(10, '9 Animácie', '9.2 Lopta', 'Vytvorte webstránku na ktorej bude animovaná lopta, ktorá sa bude hýbať stále dookola po okraji obrazovky. Lopta nesmie zájsť mimo obrazovku.<br>\r\n<br>\r\n<strong>Bonusová úloha:</strong> Zmeňte trajektóriu lopty a na miesto pohybu po okraji obrazovky ju nechajte hýbať sa rôznymi smermi ale nesmie nikdy zájsť mimo obrazovky.', '../priklady/css/9.2 Lopta/pr2.html', '../priklady/css/9.2 Lopta/pr2.css', '', '../priklady/css/9.2 Lopta/lopta1.mp4', ''),
(11, '10 Transformácie', '10.1 Transformácie', 'Vytvorte webstránku, ktorá bude v strede obrazovky zobrazovať tlačidlo, ktoré po kliknutí používateľom spustí CSS3 funkciu nazývanou transformácia. Táto transformácia nám otvorí kartu, ktorá bude obsahovať podľa vášho výberu obrázok a pod ním text. Môžete sa inšpirovať podľa videa v zadaní a zmeniť aj farbu pozadia.', '../priklady/css/10.1 Transformácie/pr1.html', '../priklady/css/10.1 Transformácie/pr1.css', '', '../priklady/css/10.1 Transformácie/pr1.mp4', ''),
(12, '6 Flexbox', '6.2 Karty', 'Vytvorte responzívnu webstránku s kartami, kde využijete gradientné pozadie kariet. Karty musia obsahovať obrázok, text ku karte a tlačidlo. Karty zobrazujte pomocou flexboxu a tlačidlá nemusia robiť žiadnu funkciu navyše.', '../priklady/css/6.2 Karty/karty.html', '../priklady/css/6.2 Karty/karty.css', '', '../priklady/css/6.2 Karty/video.mp4', ''),
(13, '7 Grid', '7.2 Grid', 'Vytvorte pomocou priloženého obrázka webstránku, ktorá používa iba <strong>Grid Layout</strong>. Pokúste sa spraviť rovnakú stránku ale zmeňte jej obsah. Môžete do nej zakomponovať aj iné mediálne prvky ako obrázky. Použite aspoň minimálne 3 mediálne prvky na stránke.', '../priklady/css/7.2 Grid/grid-index.html', '../priklady/css/7.2 Grid/grid-index.css', '../priklady/css/7.2 Grid/grid2.png', '', ''),
(14, '8 Navigácia', '8.2 Sidebar Menu', 'Vytvorte webstránku na ktorej sa bude môcť používateľ navigovať namiesto tradičného Header Menu, pomocou navigácie na stránke vďaka bočného navigačného menu tzv. Sidebar Menu. Môžete sa inšpirovať obrázkom zo zadania.', '../priklady/css/8.2 Sidebar Menu/side-bar-pr.html', '../priklady/css/8.2 Sidebar Menu/sidebar.css', '../priklady/css/8.2 Sidebar Menu/obr.png', '', ''),
(15, '8 Navigácia', '8.3 Bottom Menu', 'Vytvorte webstránku, kde sa budete môcť navigovať pomocou menej tradičného vo webovom dizajne navigačným menu nazývaným po anglicky: Bottom Navigation Menu. (Je to navigačné menu ako býva napríklad na mobilných aplikáciách na spodku obrazovky)', '../priklady/css/8.3 Bottom Menu/bottom-navigation.html', '../priklady/css/8.3 Bottom Menu/bottom.css', '../priklady/css/8.3 Bottom Menu/obr.png', '', ''),
(16, '8 Navigácia', '8.4 Scrollbar', 'Pri tvorbe webstránok sa spravidla väčšinou zabúda na zakomponovaní vlastného dizajnu pre scrollbar. Pričom môže používateľovi spríjemniť návštevu vašej webovej stránky vďaka konzistentnému dizajnu. Pomocou CSS3 navrhnite a aplikujte vlastný dizajn scrollbaru.', '../priklady/css/8.4 Scrollbar/vlastny-scrollbar.html', '../priklady/css/8.4 Scrollbar/vlastny-scrollbar.css', '', '../priklady/css/8.4 Scrollbar/Scrollbar.mp4', ''),
(17, '1 Texty', '1.2 Obrázok ako farba', 'Pomocou CSS3 vytvorte webstránku na ktorej budete mať ľubovoľný text a na miesto farby, použite vami vybratý obrázok. Viď obrázok zadania.', '../priklady/css/1.2 Obrázok ako farba/obr-ako-text.html', '../priklady/css/1.2 Obrázok ako farba/obr-ako-text.css', '../priklady/css/1.2 Obrázok ako farba/obr.png', '', ''),
(18, '3 Média', '3.2 Rozmazanie', 'Pomocou HTML5 a CSS3 vytvorte webstránku na ktorej budete mať text a za ním ako pozadie obrázok. Tento obrázok musí byť rozmazaný a mať efekt ako na videu. Teda: Čím je viac priblížená webstránka, tým viac je obrázok rozmazaný a naopak.', '../priklady/css/3.2 Rozmazanie/rozm-obrazka.html', '../priklady/css/3.2 Rozmazanie/rozm-obrazka.css', '', '../priklady/css/3.2 Rozmazanie/video.mp4', ''),
(19, '2 Responzivita', '2.2 Navigačné menu', 'Vytvorte webovú stránku, ktorá bude obsahovať responzívne menu. To znamená, že ak máme mobilné zariadenie, tak na ňom nezobrazíme menu, ktoré je veľké a primárne navrhnuté pre počítače. Taktiež toto menu by malo používať <strong>anchor links,</strong> ktoré na kliknutie posunú používateľa na danú časť stránky. Viď. video.', '../priklady/css/2.2 Navigačné menu/menu-bez-js.html', '../priklady/css/2.2 Navigačné menu/menu-bez-js.css', '', '../priklady/css/2.2 Navigačné menu/video.mp4', ''),
(20, '4 Formuláre', '4.2 Žiaci', 'Pomocou CSS3 a HTML5 vytvorte webstránku na ktorej bude môcť používateľ nahrať obrázok, dve textové polia, jedno e-mailové pole a jedno veľké textové pole. Tlačidlo na nahrávanie obrázka musí mať váš vlastný dizajn. Viď. obrázok.', '../priklady/css/4.2 Žiaci/ziaci.html', '../priklady/css/4.2 Žiaci/ziaci.css', '../priklady/css/4.2 Žiaci/obrazok.png', '', ''),
(21, '5 Tabuľky', '5.2 Platy', 'Vašou úlohou je zreplikovať tabuľku z obrázku zo zadania. Obsah tabuľky nemusí byť rovnaký a dbajte na to aby ste zreplikovali celý hlavný dizajn tabuľky. Môžete si zmeniť aj farebnú schému podľa vášho výberu.', '../priklady/css/5.2 Platy/tabulka-platy.html', '../priklady/css/5.2 Platy/tabulka-platy.css', '../priklady/css/5.2 Platy/obrazok.png', '', ''),
(22, '10 Transformácie', '10.2 Štvorec', 'Vytvorte transformáciu, ktorá otočí o niekoľko stupňov vami vytvorený pomocou CSS3 geometrický tvar štvorec. Keď naň používateľ prejdete myšou, tak by sa mal otočiť okolo vlastnej osi o niekoľko stupňov a vrátiť sa do pôvodného stavu po odídení myše.', '../priklady/css/10.2 Štvorec/štvorec.html', '../priklady/css/10.2 Štvorec/štvorec.css', '', '../priklady/css/10.2 Štvorec/video.mp4', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `HTML`
--

CREATE TABLE `HTML` (
  `id` int(11) NOT NULL,
  `kategoria` text NOT NULL,
  `nazov` text NOT NULL,
  `zadanie` longtext NOT NULL,
  `html` text NOT NULL,
  `obrazok` text NOT NULL,
  `video` text NOT NULL,
  `visibleVysledok` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `HTML`
--

INSERT INTO `HTML` (`id`, `kategoria`, `nazov`, `zadanie`, `html`, `obrazok`, `video`, `visibleVysledok`) VALUES
(1, '1 Texty', '1.1 Texty', 'Podľa obrázkovej predlohy vytvorte jednoduchú webovú stránku, ktorá bude obsahovať:<br>\r\n<br>\r\n● Aspoň 3 nadpisy<br>\r\n● Jeden zoznam s aspoň 4-rmi elementami<br>\r\n● Jeden odkaz, ktorý po kliknutí presmeruje používateľa na inú webstránku<br>\r\n<br>\r\nMôžete sa inšpirovať obrázkom zo zadania.', '../priklady/html/1.1 Texty/text-pr1.html', '../priklady/html/1.1 Texty/text-pr1.png', '', ''),
(2, '1 Texty', '1.2 Texty', 'Vytvorte jednoduchú webstránku, ktorá bude obsahovať:<br>\r\n<br>\r\n● Minimálne 6 nadpisov a <strong>každý iný</strong><br>\r\n● Aspoň dva zoznamy<br>\r\n● Jeden odkaz na inú webovú stránku<br>\r\n● Jeden vložený text v block quotes<br>\r\n● Text, ktorý je v elemente, ktorý zachováva medzery<br>\r\n● Zvýraznený text<br>\r\n● Jednu breaking line<br>\r\n<br>\r\nMôžete sa inšpirovať obrázkom v zadaní.', '../priklady/html/1.2 Texty/text-pr2.html', '../priklady/html/1.2 Texty/text-pr2.png', '', ''),
(3, '2 Média', '2.1 Obrázky', 'Vytvorte nasledovnú webstránku, ktorá bude obsahovať:<br>\r\n<br>\r\n● Dva obrázky<br>\r\n● Jedno video importované z YouTube<br>\r\n● Jednu audio stopu/nahrávku, ktorá je uložená v priečinku s vašou stránkou<br>\r\n<br>\r\nMôžete sa inšpirovať obrázkom zo zadania.', '../priklady/html/2.1 Obrázky/media-pr1.html', '../priklady/html/2.1 Obrázky/media-pr1.png', '', ''),
(4, '3 Formuláre', '3.3 Formulár', 'Vytvorte formulár, kde využijete funkciu <strong>GET a POST:</strong><br>\r\n<br>\r\n● Formulár Kontaktujte nás pošle údaje pomocou funkcie <strong>GET</strong> a obsahuje jedno textové pole, ktoré si môže sám používateľ zväčšiť alebo zmenšiť<br>\r\n● Formulár Prihlásenie pošle údaje pomocou funkcie <strong>POST</strong><br>\r\n<br>\r\nMôžete sa inšpirovať obrázkom zo zadania.', '../priklady/html/3.3 Formulár/form-pr1.html', '../priklady/html/3.3 Formulár/form-pr1.png', '', ''),
(5, '4 Tabuľky', '4.1 Zamestnanci', 'Vytvorte tabuľku, ktorá bude obsahovať: mená zamestnancov, ich plat a ku každému pridajte obrázok.', '../priklady/html/4.1 Zamestnanci/tabulky-pr1.html', '../priklady/html/4.1 Zamestnanci/tabulky-pr1.png', '', ''),
(6, '5 Meta Údaje', '5.1 Popis', 'Peter si založil internetový obchod na ktorom predáva tlačiarne a nepáči sa mu ako vyzerajú výsledky na internetových vyhľadávačoch, ukazuje mu tam náhodný text z jeho webstránky. Vytvorte webovú stránku, ktorá obsahuje aspoň 3 produkty s cenami, niečo o Petrovom obchode a pridajte mu na stránku meta údaje aby si ho mohli zákazníci ľahšie nájsť.', '../priklady/html/5.1 Popis/meta-pr1.html', '../priklady/html/5.1 Popis/meta-pr1.png', '', ''),
(7, '6 Navigácia', '6.1 Anchor Links', 'Vytvorte dlhšiu webstránku, po ktorej bude môcť používateľ skákať kliknutím myši na navigačný link pomocou tzv. Anchor Links. Vytvorte aspoň 5 navigačných linkov ako v zadaní.', '../priklady/html/6.1 Anchor Links/navigacia-pr1.html', '../priklady/html/6.1 Anchor Links/navigacia-pr1.png', '', ''),
(8, '6 Navigácia', '6.2 Back To Top', 'Vytvorte webstránku na ktorej budete môcť pomocou linku späť na začiatok poslať používateľa späť na začiatok stránky, keď sa dostane na koniec stránky, aby nemusel manuálne scrollovať na začiatok stránky.', '../priklady/html/6.2 Back To Top/top.html', '', '../priklady/html/6.2 Back To Top/Moja dlhá stránka.mp4', ''),
(9, '3 Formuláre', '3.1 GET', 'Vytvorte prihlasovací formulár, ktorý pomocou funkcie GET pošle údaje, ktoré zadá používateľ do formulára. Tieto údaje by sa mali zobraziť na konci adresy webstránky za otáznikom.', '../priklady/html/3.1 GET/getform.html', '../priklady/html/3.1 GET/get.png', '', ''),
(10, '3 Formuláre', '3.2 POST', 'Vytvorte formulár, pomocou ktorého môže používateľ kontaktovať správcu webstránky. Formulár musí poslať všetky údaje pomocou funkcie POST. Tým pádom by sa mala ukázať chyba 405 (Not Allowed), ak nemáte nakonfigurovaný webový server aby posielal / prijímal POST požiadavky. V opačnom prípade by nemalo ukázať chybu a vyčistí formulár.', '../priklady/html/3.2 POST/post.html', '', '../priklady/html/3.2 POST/Kontaktujte nás.mp4', ''),
(11, '5 Meta Údaje', '5.2 Kľúčové Slová', 'Petrov obchod si už začínajú pomaly všímať ľudia. Ale ešte to nie je ono. Pridajte mu na stránku kľúčové slová aby sa ukázala jeho stránka vo vyhľadávačoch, keď ľudia hľadajú na internete iba pomocou slov.', '../priklady/html/5.2 Kľúčové Slová/keywords.html', '../priklady/html/5.2 Kľúčové Slová/obr.png', '', ''),
(12, '2 Média', '2.3 Webstránky na stránke', 'Pomocou HTML5 vytvorte webstránku, ktorá bude zobrazovať aspoň 3 webstránky viď. video. Nezabudnite, že niektoré stránky ako google.sk majú ochranu voči vkladaním ich webov na iné stránky.', '../priklady/html/2.3 Webstránky na stránke/stránky.html', '', '../priklady/html/2.3 Webstránky na stránke/video.mp4', ''),
(13, '7 Dáta', '7.1 Dátové Listy', 'Vytvorte webovú stránku na ktorej si bude môcť používateľ: vybrať druh svojho prehliadača, čas (tento čas by mal mať takisto nadefinované minimálne 3 manuálne časy a možnosť iné aby si mohol používateľ vybrať vlastný čas, ktorý nie je v ponuke), taktiež posuvník s nadefinovanými 4-mi hodnotami a možnosť si vybrať farbu (nadefinujte aspoň 4 farby a pridajte možnosť iné aby si používateľ mohol vybrať aj inú farbu zo všetkých možností).', '../priklady/html/7.1 Dátové Listy/dtlists.html', '', '../priklady/html/7.1 Dátové Listy/video.mp4', ''),
(14, '7 Dáta', '7.2 Meter', 'Vytvorte pomocou čistého HTML5 dátový typ, ktorý ukáže tzv. progress podľa vami zadanej hodnoty.', '../priklady/html/7.2 Meter/meter.html', '../priklady/html/7.2 Meter/obr.png', '', ''),
(15, '2 Média', '2.4 PDF', 'Vytvorte webstránku, ktorá bude zobrazovať vami vybratý PDF súbor uložený v priečinku s vašou webstránkou. Viď. video.', '../priklady/html/2.4 PDF/pdf-na-stranke.html', '', '../priklady/html/2.4 PDF/video.mp4', ''),
(16, '5 Meta Údaje', '5.3 Presmerovanie', 'Vytvorte jednoduchú webstránku, ktorá zobrazí text o presmerovaní a po určitom čase presmeruje používateľa na novú stránku. Viď. video.', '../priklady/html/5.3 Presmerovanie/presmeruj-ma.html', '', '../priklady/html/5.3 Presmerovanie/video.mp4', ''),
(17, '2 Média', '2.2 Stiahnutie', 'Vytvorte webstránku na ktorej budete mať stiahnuteľný ľubovoľný súbor, ktorý <strong>na kliknutie textu tento súbor stiahne (nesmie ho otvoriť v prehliadači).</strong> Viď. video.', '../priklady/html/2.2 Stiahnutie/stiahni.html', '', '../priklady/html/2.2 Stiahnutie/video.mp4', ''),
(18, '8 Detaily', '8.1 Chybové kódy', 'Vytvorte webovú stránku, ktorá obsahuje niekoľko textových odsekov s nadpismi, ale používateľ najskôr vidí iba tieto nadpisy a ich obsah je schovaný. Po kliknutí na nadpis alebo šípku, sa daný nadpis otvorí a zobrazí k nemu text. Viď. video.', '../priklady/html/8.1 Chybové kódy/chybne-kody.html', '', '../priklady/html/8.1 Chybové kódy/video.mp4', ''),
(19, '8 Detaily', '8.2 HTML5', 'Podľa predchádzajúceho príkladu <strong>8.1 Chybové kódy</strong> vytvorte teraz stránku, ktorá obsahuje rovnaký druh elementov ale teraz sa pokúste vložiť do vnútra elementov podkategórie. Viď. video.', '../priklady/html/8.2 HTML5/html5.html', '', '../priklady/html/8.2 HTML5/video.mp4', ''),
(20, '9 Interaktivita', '9.1 Upraviteľný Obsah', 'Vytvorte jednoduchú webstránku, na ktorej budete môcť upraviť textový obsah elementu, ktorý už obsahuje vami zadaný text a používateľ si ho bude môcť upraviť podľa svojho výberu ako je vidno na videu k zadaniu.', '../priklady/html/9.1 Upraviteľný Obsah/u-obsah.html', '', '../priklady/html/9.1 Upraviteľný Obsah/video.mp4', ''),
(21, '3 Formuláre', '3.4 Anketa', 'Pomocou funkcie <strong>GET</strong> vytvorte anketu. Obsah ankety je na vás ale musí obsahovať tzv. kruhové checkboxy.', '../priklady/html/3.4 Anketa/anketa.html', '', '../priklady/html/3.4 Anketa/video.mp4', ''),
(22, '10 Sémantika', '10.1 Sekcia', 'Bez použitia akýchkoľvek tagov ako definovanie DOCTYPE, head, body... Vytvorte sekciu stránky, ktorá bude obsahovať jeden nadpis a pod ním text.<br>\r\n<br>\r\n(Príklad bude dávať zmysel na poslednom príklade.)', '../priklady/html/10.1 Sekcia/section.html', '../priklady/html/10.1 Sekcia/obr-sekcia.png', '', ''),
(23, '10 Sémantika', '10.2 Článok', 'Bez použitia akýchkoľvek tagov ako definovanie DOCTYPE, head, body... Vytvorte vami ľubovoľne napísaný článok.<br>\r\n<br>\r\n(Príklad bude dávať zmysel na poslednom príklade.)', '../priklady/html/10.2 Článok/article.html', '../priklady/html/10.2 Článok/obr-článok.png', '', ''),
(24, '10 Sémantika', '10.3 Footer', 'Bez použitia akýchkoľvek tagov ako definovanie DOCTYPE, head, body... Vytvorte vami definovaný footer napríklad s copyrightom.<br>\r\n<br>\r\n(Príklad bude dávať zmysel na poslednom príklade.)', '../priklady/html/10.3 Footer/footer.html', '../priklady/html/10.3 Footer/obr-footer.png', '', ''),
(25, '10 Sémantika', '10.4 Spojenie', 'V predchádzajúcich príkladoch ste vytvorili 3 základné stránky bez použitia základných tagov/elementov. Teraz je vašou úlohou vytvoriť webstránku, ktorá tieto stránky zobrazí na sebe ako <strong>jednu</strong> stránku.<br>\r\n<br>\r\n<strong>Tip:</strong> Už ste sa stretli s týmto elementom s príkladom v kategórii média.', '../priklady/html/10.4 Spojenie/spojenie.html', '../priklady/html/10.4 Spojenie/obr-spojenie.png', '', ''),
(26, '4 Tabuľky', '4.2 Zvieratá', 'Vytvorte jednoduchú tabuľku na ktorej budete mať celkom tri stĺpce. Tieto stĺpce budú obsahovať: obrázok, text a audio nahrávku. Môžete sa inšpirovať obrázkom zadania.', '../priklady/html/4.2 Zvieratá/tab-zvierata.html', '../priklady/html/4.2 Zvieratá/obr.png', '', ''),
(27, '9 Interaktivita', '9.2 Prístupnosť', 'Prístupnosť webovej stránky je veľmi dôležitá vec, keď vieme, že webstránku bude navštevovať široké publikum ľudí. Preto by sme nemali zabúdať ani na zdravotne znevýhodnených.<br>\r\n<br>\r\nVytvorte webovú stránku, ktorá bude obsahovať čo najviac prístupného obsahu pre nevidiacich. <br>\r\n<br>\r\nNa otestovanie môžete použiť program NV Access, ktorý je prístupný zadarmo na: <a href=\"https://www.nvaccess.org/download/\" class=\"btn btn-primary\" role=\"button\" target=\"_blank\">NV Access</a>\r\n', '../priklady/html/9.2 Prístupnosť/accessibilty.html', '', '../priklady/html/9.2 Prístupnosť/video.mp4', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `JS`
--

CREATE TABLE `JS` (
  `id` int(11) NOT NULL,
  `kategoria` text NOT NULL,
  `nazov` text NOT NULL,
  `zadanie` longtext NOT NULL,
  `html` text NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  `jsonf` text NOT NULL,
  `kniznica` text NOT NULL,
  `dokumentacia` text NOT NULL,
  `obrazok` text NOT NULL,
  `video` text NOT NULL,
  `visibleVysledok` text NOT NULL DEFAULT '0',
  `downloadJs` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `JS`
--

INSERT INTO `JS` (`id`, `kategoria`, `nazov`, `zadanie`, `html`, `css`, `js`, `jsonf`, `kniznica`, `dokumentacia`, `obrazok`, `video`, `visibleVysledok`, `downloadJs`) VALUES
(1, '1 API', '1.1 Zobrazenie Textu z JSON súboru', 'V zadaní príkladu je súbor typu JSON (JavaScript Object Notation). Vašou úlohou je vytvoriť webstránku, ktorá zobrazí jeho obsah na karte hneď ako používateľ otvorí vašu webstránku. Viď. fotka.', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.html', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.css', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.js', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.json', '', '', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/js-api-pr1.png', '', '', '1'),
(2, '1 API', '1.2 Dáta na požiadanie', 'Ako v predchádzajúcom príklade máme priložený súbor typu JSON. Vytvorte webstránku, ktorá zobrazí jeho obsah na kliknutie tlačidla a aj ho skryje. Toto tlačidlo by malo meniť text podľa akcie, ktorú by malo vykonať. Môžete sa inšpirovať videom v zadaní.', '../priklady/js/1.2 Dáta na požiadanie/pr1.html', '../priklady/js/1.2 Dáta na požiadanie/pr1.css', '../priklady/js/1.2 Dáta na požiadanie/pr1.js', '../priklady/js/1.2 Dáta na požiadanie/pr1.json', '', '', '', '../priklady/js/1.2 Dáta na požiadanie/pr1.mp4', '', '1'),
(3, '3 Grafy', '3.1 Roky', 'Pomocou priloženého súboru JSON a knižnice vytvorte webstránku, ktorá zobrazí jeho obsah na grafe. Máte priloženú aj dokumentáciu ku knižnici, ktorú je potrebné si naštudovať aby ste vedeli ako pracovať s touto knižnicou. Môžete sa inšpirovať obrázkom v zadaní.', '../priklady/js/3.1 Roky/pr1.html', '../priklady/js/3.1 Roky/pr1.css', '../priklady/js/3.1 Roky/pr1.js', '../priklady/js/3.1 Roky/pr1.json', '../priklady/js/3.1 Roky/library-graphs.js', 'https://www.chartjs.org/docs/4.4.0/', '../priklady/js/3.1 Roky/js-grafy-pr1.png', '', '', '1'),
(4, '4 Navigácia', '4.1 Mobilné Menu', 'Pomocou JavaScriptu vytvorte webstránku s navigačným menu pre menšie obrazovky, ktoré funguje ako hamburger menu na mobilných aplikáciach. Môžete sa inšpirovať videom v zadaní.', '../priklady/js/4.1 Mobilné Menu/pr1.html', '../priklady/js/4.1 Mobilné Menu/pr1.css', '../priklady/js/4.1 Mobilné Menu/pr1.js', '', '', '', '', '../priklady/js/4.1 Mobilné Menu/pr1.mp4', '', '1'),
(5, '5 Správa CSS', '5.1 Svetlý a Tmavý režim', 'V dnešnej dobe je veľmi populárne, že sa stretneme s webstránkami, ktoré majú dve témy. Vašou úlohou je pomocou tlačidla na stránke umožniť používateľovi zmeniť tému stránky zo svetlej na tmavú. Môžete sa inšpirovať videom zo zadania.<br>\r\n<br>\r\n<strong>Bonusová úloha:</strong> Pokúste sa uložiť do cookies webstránky typ aktívnej témy aby si ju nemusel zakaždým používateľ nastavovať.', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.html', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.css', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.js', '', '', '', '', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.mp4', '', '1'),
(6, '6 Vyskakovacie okná', '6.1 Povoliť Cookies', 'Vytvorte vyskakovacie okno, ktoré si bude pýtať od používateľa aby prijal Cookies. Toto následne uložte do lokálneho úložiska, aby sa ho webstránka nabudúce nepýtala znovu jeho prijatie. Môžete sa inšpirovať videom v zadaní.', '../priklady/js/6.1 Povoliť Cookies/pr1.html', '../priklady/js/6.1 Povoliť Cookies/pr1.css', '../priklady/js/6.1 Povoliť Cookies/pr1.js', '', '', '', '', '../priklady/js/6.1 Povoliť Cookies/pr1.mp4', '', '1'),
(7, '7 Drag and Drop', '7.1 Kôš', 'Vytvorte stránku, na ktorej budete mať obrázok koša a budete môcť do neho pomocou funkcie drag and drop pretiahnuť elementy, ktoré potom zmiznú. Vždy, keď sa vloží niečo do koša, tak nech napíše nejaké slovo, ktoré zmizne po pár sekundách. Môžete sa inšpirovať videom v zadaní.', '../priklady/js/7.1 Kôš/pr1.html', '../priklady/js/7.1 Kôš/pr1.css', '../priklady/js/7.1 Kôš/pr1.js', '', '', '', '', '../priklady/js/7.1 Kôš/pr1.mp4', '', '1'),
(8, '8 Tabuľky', '8.1 Správa dát v tabuľke', 'Vytvorte webstránku s tabuľkou, do ktorej bude môcť používateľ pridávať, upravovať a mazať údaje. Pokúste sa navrhnúť vlastný dizajn stránky a jej rozloženie ako je vidno na videu v zadaní.', '../priklady/js/8.1 Správa dát v tabuľke/pr1.html', '../priklady/js/8.1 Správa dát v tabuľke/pr1.css', '../priklady/js/8.1 Správa dát v tabuľke/pr1.js', '', '', '', '', '../priklady/js/8.1 Správa dát v tabuľke/pr1.mp4', '', '1'),
(9, '9 Vyhľadávanie', '9.1 Vyhľadávanie na aktuálnej stránke', 'Každý poznáme vyhľadávacie okno na internetových obchodoch. Toto okno väčšinou čaká na potvrdenie vstupu stlačením tlačidla enter alebo tlačidla hľadať. Vytvorte webstránku, kde bude môcť používateľ hľadať pomocou vyhľadávacieho okna produkty vášho internetového obchodu ale miesto toho aby používateľ potvrdil vstup, hneď ukazujte v reálnom čase výsledky na aktuálnej stránke. Môžete sa inšpirovať videom v zadaní.', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.html', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.css', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.js', '', '', '', '', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.mp4', '', '1'),
(10, '10 Iné', '10.1 Kalkulačka', 'Pokúste sa vytvoriť jednoduchú webstránku, ktorá bude slúžiť ako kalkulačka. Kalkulačka by mala obsahovať základné funkcie ako: plus, mínus, delenie a násobenie. Nezabudnite ju pekne nadizajnovať aby sa vo vašom dizajne používateľ necítil stratene a vedel, že sa jedná o kalkulačku. Môžete sa inšpirovať videom zo zadania.', '../priklady/js/10.1 Kalkulačka/pr1.html', '../priklady/js/10.1 Kalkulačka/pr1.css', '../priklady/js/10.1 Kalkulačka/pr1.js', '', '', '', '', '../priklady/js/10.1 Kalkulačka/pr1.mp4', '', '1'),
(11, '10 Iné', '10.2 Hodiny', '<strong>Bez použitia AJAXu</strong> sa pokúste vytvoriť webstránku s hodinami, ktoré ukazujú aj sekundy, ktoré sa budú aktualizovať v <strong>reálnom čase.</strong> Môžete sa inšpirovať videom zo zadania.', '../priklady/js/10.2 Hodiny/pr1.html', '../priklady/js/10.2 Hodiny/pr1.css', '../priklady/js/10.2 Hodiny/pr1.js', '', '', '', '', '../priklady/js/10.2 Hodiny/pr1.mp4', '', '1'),
(12, '10 Iné', '10.3 Galéria', 'Vytvorte webstránku s témou galéria obrázkov. Táto galéria obrázkov je špeciálna tým, že sa budú prepínať obrázky na stlačenie tlačidla vpravo alebo vľavo. Môžete sa inšpirovať videom zo zadania.', '../priklady/js/10.3 Galéria/pr1.html', '../priklady/js/10.3 Galéria/pr1.css', '../priklady/js/10.3 Galéria/pr1.js', '', '', '', '', '../priklady/js/10.3 Galéria/pr1.mp4', '', '1'),
(13, '2 AJAX', '2.1 Čas a náhodný text', 'Pomocou priloženej knižnice vytvorte webstránku, na ktorej sa bude zobrazovať <strong>aktuálny čas, náhodná veta</strong> podľa vášho výberu <strong>(aspoň 5)</strong> a táto veta sa bude meniť každých <strong>10 sekúnd.</strong> Následne vytvorte <strong>odpočítavanie,</strong> ktoré bude ukazovať v <strong>reálnom čase,</strong> kedy sa bude meniť táto <strong>náhodná veta.</strong> Môžete sa inšpirovať videom.', '../priklady/js/2.1 Čas a náhodný text/cas-text.html', '../priklady/js/2.1 Čas a náhodný text/cas-text.css', '../priklady/js/2.1 Čas a náhodný text/script.js', '', '../priklady/js/2.1 Čas a náhodný text/jquery-3.7.1.js', 'https://api.jquery.com/', '', '../priklady/js/2.1 Čas a náhodný text/Video.mp4', '', '1'),
(14, '4 Navigácia', '4.2 Single Page', 'Pomocou vašich znalostí vytvorte webstránku, ktorá bude mať iba jednu HTML5 stránku ale bude obsahovať aspoň 3 stránky. Tj. webstránka nesmie presmerovať používateľa na inú stránku. Viď. video.', '../priklady/js/4.2 Single Page/index.html', '../priklady/js/4.2 Single Page/style.css', '../priklady/js/4.2 Single Page/script.js', '', '', '', '', '../priklady/js/4.2 Single Page/video.mp4', '', '1'),
(15, '2 AJAX', '2.2 Počasie (API)', 'Vytvorte webstránku o počasí, ktorá bude každých 60 sekúnd obnovovať údaje o počasí z priloženej dokumentácie.<br><br>\r\nAko prvé sa budete musieť zaregistrovať a získať <strong>zadarmo</strong> API kľúč a potom si zistiť ID mesta o ktorom chcete zistiť aktuálne informácie. Toto ID mesta získate taktiež pomocou prečítaní dokumentácie alebo z url, keď si otvoríte mesto na ich stránke.', '../priklady/js/2.2 Počasie (API)/počasie.html', '../priklady/js/2.2 Počasie (API)/počasie.css', '../priklady/js/2.2 Počasie (API)/script.js', '', '../priklady/js/2.2 Počasie (API)/jquery-3.7.1.js', 'https://openweathermap.org/api', '', '../priklady/js/2.2 Počasie (API)/video.mp4', '', '1'),
(16, '3 Grafy', '3.2 Šťastné Čísla', 'Pomocou priloženého <strong>JSON</strong> súboru a <strong>knižnice</strong> (spojený AJAX s Plotly) vytvorte graf ako je na videu k zadaniu. Pokúste sa použiť / preskúšať si aj iné typy grafov, ktoré táto knižnica ponúka.', '../priklady/js/3.2 Šťastné Čísla/šťastné-čísla.html', '../priklady/js/3.2 Šťastné Čísla/šťastné-čísla.css', '../priklady/js/3.2 Šťastné Čísla/script.js', '../priklady/js/3.2 Šťastné Čísla/data.json', '../priklady/js/3.2 Šťastné Čísla/plotly-ajax.js', 'https://plotly.com/javascript/', '', '../priklady/js/3.2 Šťastné Čísla/video.mp4', '', '1'),
(17, '5 Správa CSS', '5.2 Zmena farby pozadia', 'Vytvorte webovú stránku, ktorá bude na vstup používateľa meniť farbu pozadia ako je to viditeľné na videu v zadaní.<br><br>\r\n<strong>Bonusová úloha:</strong> Majte na stránke text a meňte jeho farbu aby bol vždy čitateľným ako na videu v zadaní.', '../priklady/js/5.2 Zmena farby pozadia/color-picker.html', '../priklady/js/5.2 Zmena farby pozadia/style.css', '../priklady/js/5.2 Zmena farby pozadia/color-picker.js', '', '', '', '', '../priklady/js/5.2 Zmena farby pozadia/video.mp4', '', '1'),
(18, '6 Vyskakovacie okná', '6.2 Poistka', 'Vytvorte vyskakovacie okno u obchodníka s autami. Toto okno by sa malo ukazovať používateľovi webstránky dookola v loope. Môžete sa inšpirovať videom v zadaní.', '../priklady/js/6.2 Poistka/poistka.html', '../priklady/js/6.2 Poistka/style.css', '../priklady/js/6.2 Poistka/script.js', '', '', '', '', '../priklady/js/6.2 Poistka/video.mp4', '', '1'),
(19, '7 Drag and Drop', '7.2 Umenie', 'Vytvorte webstránku, ktorá bude náhodne hodnotiť používateľom nahraté obrázky ako je vidno na obrázku v zadaní.', '../priklady/js/7.2 Umenie/umenie.html', '../priklady/js/7.2 Umenie/style.css', '../priklady/js/7.2 Umenie/script.js', '', '', '', '../priklady/js/7.2 Umenie/zadanie.gif', '', '', '1'),
(20, '8 Tabuľky', '8.2 Tabuľka z JSON súboru', 'Niekedy je potrebné rýchlo načítať údaje zo súboru a zobraziť ich v tabuľke. V tomto prípade máme priložený v zadaní JSON súbor, ktorý si je potrebné dobre pozrieť a podľa tohto priloženého súboru vytvorte webstránku, ktorá automaticky po nahratí používateľom vytvorí z tohto súboru plného údajov tabuľku ako je na videu v zadaní.', '../priklady/js/8.2 Tabuľka z JSON súboru/tabulka.html', '../priklady/js/8.2 Tabuľka z JSON súboru/style.css', '../priklady/js/8.2 Tabuľka z JSON súboru/script.js', '../priklady/js/8.2 Tabuľka z JSON súboru/súbor.json', '', '', '', '../priklady/js/8.2 Tabuľka z JSON súboru/video.mp4', '', '1'),
(21, '9 Vyhľadávanie', '9.2 Hľadanie Gifov', 'Pomocou <strong>GIPHY API</strong> (registrácia a API kľúč sú zadarmo) vytvorte webstránku na ktorej môže používateľ hľadať rôzne gify. V zadaní máte priloženú dokumentáciu k tejto vzdialenej API a je tam aj vysvetlené ako dostať API kľúč aby ste mohli posielať požiadavky na vzdialený server. Môžete sa inšpirovať videom zo zadania.', '../priklady/js/9.2 Hľadanie Gifov/gify.html', '../priklady/js/9.2 Hľadanie Gifov/style.css', '../priklady/js/9.2 Hľadanie Gifov/script.js', '', '', 'https://developers.giphy.com/docs/api#quick-start-guide', '', '../priklady/js/9.2 Hľadanie Gifov/video.mp4', '', '1');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `CSS`
--
ALTER TABLE `CSS`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `HTML`
--
ALTER TABLE `HTML`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `JS`
--
ALTER TABLE `JS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `CSS`
--
ALTER TABLE `CSS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pre tabuľku `HTML`
--
ALTER TABLE `HTML`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pre tabuľku `JS`
--
ALTER TABLE `JS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
