-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: db
-- Čas generovania: Sun 10.Dec 2023, 11:19
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
(3, '3 Média', '3.1 Multimediálna knižnica', 'Vytvorte a pekne nadizajnujte multimediálnu knižnicu, kde budú fotky, videá, audio. Môžete sa  inšpirovať obrázkom.', '../priklady/css/3.1 Multimediálna knižnica/pr1.html', '../priklady/css/3.1 Multimediálna knižnica/pr1.css', '../priklady/css/3.1 Multimediálna knižnica/css-media-pr1.png', '', ''),
(4, '4 Formuláre', '4.1 Prihlásenie', 'Vytvorte jednoduchý formulár, ktorý pošle údaje zadané používateľom v adresnom riadku prehliadača. Formulár musí byť responzívny a moderne nadizajnovaný. Môžete sa inšpirovať obrázkom.', '../priklady/css/4.1 Prihlásenie/pr1.html', '../priklady/css/4.1 Prihlásenie/pr1.css', '../priklady/css/4.1 Prihlásenie/css-formulare-pr1.png', '', ''),
(5, '5 Tabuľky', '5.1 Známky', 'Vytvorte responzívnu tabuľku aspoň s tromi stĺpcami a štyrmi riadkami.<br>\r\n<br><strong>Bonusová úloha:</strong> <br>Keď bude tabuľka zobrazená na malej obrazovke, schovajte posledný stĺpec.', '../priklady/css/5.1 Známky/pr1.html', '../priklady/css/5.1 Známky/pr1.css', '../priklady/css/5.1 Známky/css-tabulky-pr1.png', '', ''),
(6, '6 Flexbox', '6.1 Flexbox', 'Vytvorte stránku, kde využijete flexbox a zakomponujete obrázok, ktorý je <strong>špecifikovaný v css súbore.</strong>', '../priklady/css/6.1 Flexbox/pr1.html', '../priklady/css/6.1 Flexbox/pr1.css', '../priklady/css/6.1 Flexbox/css-flexbox-pr1.png', '', ''),
(7, '7 Grid', '7.1 Grid', 'Vytvorte stránku podľa obrázkovej šablóny, použite grid.', '../priklady/css/7.1 Grid/pr1.html', '../priklady/css/7.1 Grid/pr1.css', '../priklady/css/7.1 Grid/css-grid-pr1.png', '', ''),
(8, '8 Navigácia', '8.1 Header Menu', 'Vytvorte 2 stránky na ktoré sa budete prepínať pomocou navigačného menu a podľa toho, ktorá stránka <strong>je aktívna vizuálne zmeňte navigačnú linku</strong> na menu aby používateľ vedel, kde sa práve nachádza. Môžete sa inšpirovať gifom.', '../priklady/css/8.1 Header Menu/pr1-pg1.html', '../priklady/css/8.1 Header Menu/pr1.css', '../priklady/css/8.1 Header Menu/css-menu-pr1.gif', '', ''),
(9, '9 Animácie', '9.1 Text', 'Vytvorte webstránku na ktorej bude podľa vášho výberu animovaný text. Pokúste sa vytvoriť aj iný efekt ako je vo videu.', '../priklady/css/9.1 Text/pr1.html', '../priklady/css/9.1 Text/pr1.css', '', '../priklady/css/9.1 Text/text1.mp4', ''),
(10, '9 Animácie', '9.2 Lopta', 'Vytvorte webstránku na ktorej bude animovaná lopta, ktorá sa bude hýbať stále dookola po okraji obrazovky. Lopta nesmie zájsť mimo obrazovku.', '../priklady/css/9.2 Lopta/pr2.html', '../priklady/css/9.2 Lopta/pr2.css', '', '../priklady/css/9.2 Lopta/lopta1.mp4', ''),
(11, '10 Transformácie', '10.1 Transformácie', 'Podľa videa sa pokúste vytvoriť podobnú transformáciu.', '../priklady/css/10.1 Transformácie/pr1.html', '../priklady/css/10.1 Transformácie/pr1.css', '', '../priklady/css/10.1 Transformácie/pr1.mp4', ''),
(12, '6 Flexbox', '6.2 Karty', 'Vytvorte responzívnu stránku s kartami, kde využijete gradientné pozadie kariet. Karty musia obsahovať obrázok, text ku karte a tlačidlo. Karty zobrazujte pomocou flexboxu.', '../priklady/css/6.2 Karty/karty.html', '../priklady/css/6.2 Karty/karty.css', '', '../priklady/css/6.2 Karty/video.mp4', ''),
(13, '7 Grid', '7.2 Grid', 'Vytvorte pomocou priloženého obrázka webstránku, ktorá používa iba <strong>Grid Layout</strong>. Pokúste sa spraviť rovnakú stránku ale zmeňte jej obsah.', '../priklady/css/7.2 Grid/grid-index.html', '../priklady/css/7.2 Grid/grid-index.css', '../priklady/css/7.2 Grid/grid2.png', '', ''),
(14, '8 Navigácia', '8.2 Sidebar Menu', 'Vytvorte webstránku na ktorej sa budete mať na miesto tradičného Header Menu navigáciu na stránke pomocou bočného menu tzv. Sidebar Menu.', '../priklady/css/8.2 Sidebar Menu/side-bar-pr.html', '../priklady/css/8.2 Sidebar Menu/sidebar.css', '../priklady/css/8.2 Sidebar Menu/obr.png', '', ''),
(15, '8 Navigácia', '8.3 Bottom Menu', 'Vytvorte stránku, kde sa budete môcť navigovať pomocou Bottom Navigation Menu. (Menu ako býva napríklad na mobilných aplikáciách)', '../priklady/css/8.3 Bottom Menu/bottom-navigation.html', '../priklady/css/8.3 Bottom Menu/bottom.css', '../priklady/css/8.3 Bottom Menu/obr.png', '', ''),
(16, '8 Navigácia', '8.4 Scrollbar', 'Pomocou CSS3 navrhnite a aplikujte vlastný scrollbar.', '../priklady/css/8.4 Scrollbar/vlastny-scrollbar.html', '../priklady/css/8.4 Scrollbar/vlastny-scrollbar.css', '', '../priklady/css/8.4 Scrollbar/Scrollbar.mp4', ''),
(17, '1 Texty', '1.2 Obrázok ako farba', 'Pomocou CSS3 vytvorte stránku na ktorej budete mať ľubovoľný text a na miesto farby, použite vami vybratý obrázok. Viď obrázok zadania.', '../priklady/css/1.2 Obrázok ako farba/obr-ako-text.html', '../priklady/css/1.2 Obrázok ako farba/obr-ako-text.css', '../priklady/css/1.2 Obrázok ako farba/obr.png', '', ''),
(18, '3 Média', '3.2 Rozmazanie', 'Pomocou HTML5 a CSS3 vytvorte webstránku na ktorej budete mať text a za ním ako pozadie obrázok. Tento obrázok musí byť rozmazaný a mať efekt ako na videu. Čím je viac priblížená webstránka, tým viac je obrázok rozmazaný a naopak.', '../priklady/css/3.2 Rozmazanie/rozm-obrazka.html', '../priklady/css/3.2 Rozmazanie/rozm-obrazka.css', '', '../priklady/css/3.2 Rozmazanie/video.mp4', ''),
(19, '2 Responzivita', '2.2 Navigačné menu', 'Vytvorte webovú stránku, ktorá bude obsahovať responzívne menu. To znamená, že ak máme mobilné zariadenie, tak na ňom nezobrazíme menu, ktoré je veľké a primárne navrhnuté pre počítače. Taktiež toto menu by malo používať <strong>anchor links,</strong> ktoré na kliknutie posunú používateľa na danú časť stránky. Viď. video.', '../priklady/css/2.2 Navigačné menu/menu-bez-js.html', '../priklady/css/2.2 Navigačné menu/menu-bez-js.css', '', '../priklady/css/2.2 Navigačné menu/video.mp4', ''),
(20, '4 Formuláre', '4.2 Žiaci', 'Pomocou CSS3 a HTML5 vytvorte webstránku na ktorej bude môcť používateľ nahrať obrázok, 2 textové polia, 1 e-mailové pole a jedno veľké textové pole. Tlačidlo na nahrávanie obrázka musí mať váš vlastný štýl. Viď. obrázok.', '../priklady/css/4.2 Žiaci/ziaci.html', '../priklady/css/4.2 Žiaci/ziaci.css', '../priklady/css/4.2 Žiaci/obrazok.png', '', ''),
(21, '5 Tabuľky', '5.2 Platy', 'Vašou úlohou je zreplikovať obrázok zadania. Obsah tabuľky nemusí byť rovnaký.', '../priklady/css/5.2 Platy/tabulka-platy.html', '../priklady/css/5.2 Platy/tabulka-platy.css', '../priklady/css/5.2 Platy/obrazok.png', '', ''),
(22, '10 Transformácie', '10.2 Štvorec', 'Vytvorte transformáciu, ktorá otočí o niekoľko stupňov vami vybratý geometrický tvar, keď naň prejdete myšou a vráti sa do pôvodného stavu po odídení myše.', '../priklady/css/10.2 Štvorec/štvorec.html', '../priklady/css/10.2 Štvorec/štvorec.css', '', '../priklady/css/10.2 Štvorec/video.mp4', '');

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
(3, '2 Média', '2.1 Média', 'Vytvorte nasledovnú webstránku, ktorá bude obsahovať:<br>\r\n<br>\r\n● Dva obrázky<br>\r\n● Jedno video importované z YouTube<br>\r\n● Jednu audio stopu/nahrávku, ktorá je uložená v priečinku s vašou stránkou<br>\r\n<br>\r\nMôžete sa inšpirovať obrázkom zo zadania.', '../priklady/html/2.1 Média/media-pr1.html', '../priklady/html/2.1 Média/media-pr1.png', '', ''),
(4, '3 Formuláre', '3.3 Formulár', 'Vytvorte formulár, kde využijete funkciu <strong>GET a POST:</strong><br>\r\n<br>\r\n● Formulár Kontaktujte nás pošle údaje pomocou funkcie <strong>GET</strong> a obsahuje jedno textové pole, ktoré si môže sám používateľ zväčšiť alebo zmenšiť<br>\r\n● Formulár Prihlásenie pošle údaje pomocou funkcie <strong>POST</strong><br>\r\n<br>\r\nMôžete sa inšpirovať obrázkom zo zadania.', '../priklady/html/3.3 Formulár/form-pr1.html', '../priklady/html/3.3 Formulár/form-pr1.png', '', ''),
(5, '4 Tabuľky', '4.1 Zamestnanci', 'Vytvorte tabuľku na ktorej budete mať mená zamestnancov, ich plat a ku každému pridajte obrázok.', '../priklady/html/4.1 Zamestnanci/tabulky-pr1.html', '../priklady/html/4.1 Zamestnanci/tabulky-pr1.png', '', ''),
(6, '5 Meta Údaje', '5.1 Popis', 'Peter si založil internetový obchod na ktorom predáva tlačiarne a nepáči sa mu ako vyzerajú výsledky na internetových prehliadačoch. Ukazuje mu tam náhodný text z jeho webstránky. Vytvorte webovú stránku, ktorá obsahuje aspoň 3 produkty s cenami, niečo o Petrovom obchode a pridajte mu na stránku meta údaje aby si ho mohli zákazníci ľahšie nájsť.', '../priklady/html/5.1 Popis/meta-pr1.html', '../priklady/html/5.1 Popis/meta-pr1.png', '', ''),
(7, '6 Navigácia', '6.1 Anchor Links', 'Vytvorte dlhšiu webstránku, po ktorej budete môcť skákať kliknutím na navigačný link pomocou tzv. Anchor Links.', '../priklady/html/6.1 Anchor Links/navigacia-pr1.html', '../priklady/html/6.1 Anchor Links/navigacia-pr1.png', '', ''),
(8, '6 Navigácia', '6.2 Back To Top', 'Vytvorte webstránku na ktorej budete môcť pomocou linku späť na začiatok poslať používateľa späť na vrch stránky.', '../priklady/html/6.2 Back To Top/top.html', '', '../priklady/html/6.2 Back To Top/Moja dlhá stránka.mp4', ''),
(9, '3 Formuláre', '3.1 GET', 'Vytvorte prihlasovací formulár, ktorý pomocou funkcie GET pošle údaje, ktoré zadá používateľ do formulára. Tieto údaje by sa mali zobraziť na konci adresy webstránky za otáznikom.', '../priklady/html/3.1 GET/getform.html', '../priklady/html/3.1 GET/get.png', '', ''),
(10, '3 Formuláre', '3.2 POST', 'Vytvorte formulár, pomocou ktorého môže užívateľ kontaktovať správcu webstránky. Formulár musí poslať všetky údaje pomocou funkcie POST. Tým pádom by sa mala ukázať chyba 405 (Not Allowed), ak nemáte nakonfigurovaný webový server aby posielal / prijímal POST požiadavky. V opačnom prípade by nemalo ukázať chybu a vyčistí formulár.', '../priklady/html/3.2 POST/post.html', '', '../priklady/html/3.2 POST/Kontaktujte nás.mp4', ''),
(11, '5 Meta Údaje', '5.2 Kľúčové Slová', 'Petrov obchod si už začínajú pomaly všímať ľudia. Ale ešte to nie je ono. Pridajte mu na stránku kľúčové slová aby sa ukázala jeho stránka vo vyhľadávačoch, keď ľudia hľadajú na internete iba pomocou slov.', '../priklady/html/5.2 Kľúčové Slová/keywords.html', '../priklady/html/5.2 Kľúčové Slová/obr.png', '', ''),
(12, '2 Média', '2.3 Webstránky na stránke', 'Pomocou HTML5 vytvorte webstránku, ktorá bude zobrazovať aspoň 3 webstránky viď. video. Nezabudnite, že niektoré stránky ako google.sk majú ochranu voči vkladaním ich webov na iné stránky.', '../priklady/html/2.3 Webstránky na stránke/stránky.html', '', '../priklady/html/2.3 Webstránky na stránke/video.mp4', ''),
(13, '7 Dáta', '7.1 Dátové Listy', 'Podľa videa vytvorte všetky 4 dátové listy.', '../priklady/html/7.1 Dátové Listy/dtlists.html', '', '../priklady/html/7.1 Dátové Listy/video.mp4', ''),
(14, '7 Dáta', '7.2 Meter', 'Vytvorte pomocou čistého HTML5 dátový typ, ktorý ukáže tzv. progress podľa vami zadanej hodnoty.', '../priklady/html/7.2 Meter/meter.html', '../priklady/html/7.2 Meter/obr.png', '', ''),
(15, '2 Média', '2.4 PDF', 'Vytvorte webstránku, ktorá bude zobrazovať PDF súbor uložený v priečinku s vašou webstránkou. Viď. video.', '../priklady/html/2.4 PDF/pdf-na-stranke.html', '', '../priklady/html/2.4 PDF/video.mp4', ''),
(16, '5 Meta Údaje', '5.3 Presmerovanie', 'Vytvorte jednoduchú webstránku, ktorá zobrazí text o presmerovaní a po určitom čase presmeruje používateľa na novú stránku. Viď. video.', '../priklady/html/5.3 Presmerovanie/presmeruj-ma.html', '', '../priklady/html/5.3 Presmerovanie/video.mp4', ''),
(17, '2 Média', '2.2 Stiahnutie', 'Vytvorte webstránku na ktorej budete mať stiahnuteľný ľubovoľný súbor, ktorý <strong>na kliknutie stiahne tento súbor (nesmie ho otvoriť v prehliadači).</strong> Viď. video.', '../priklady/html/2.2 Stiahnutie/stiahni.html', '', '../priklady/html/2.2 Stiahnutie/video.mp4', ''),
(18, '8 Detaily', '8.1 Chybové kódy', 'Vytvorte webovú stránku, ktorá obsahuje niekoľko textových odsekov s nadpismi ale používateľ najskôr vidí iba tieto nadpisy. Po kliknutí na nadpis alebo šípku sa daný nadpis otvorí a zobrazí k nemu text. Viď. video.', '../priklady/html/8.1 Chybové kódy/chybne-kody.html', '', '../priklady/html/8.1 Chybové kódy/video.mp4', ''),
(19, '8 Detaily', '8.2 HTML5', 'Podľa predchádzajúceho príkladu <strong>8.1 Chybové kódy</strong> vytvorte teraz stránku, ktorá obsahuje rovnaký druh elementov ale teraz sa pokúste vložiť do vnútra elementov pod kategórie. Viď. video.', '../priklady/html/8.2 HTML5/html5.html', '', '../priklady/html/8.2 HTML5/video.mp4', ''),
(20, '9 Interaktivita', '9.1 Upraviteľný Obsah', 'Vytvorte jednoduchú webstránku, na ktorej budete môcť upraviť textový obsah elementu ako je na videu k zadaniu.', '../priklady/html/9.1 Upraviteľný Obsah/u-obsah.html', '', '../priklady/html/9.1 Upraviteľný Obsah/video.mp4', ''),
(21, '3 Formuláre', '3.4 Anketa', 'Pomocou funkcie <strong>GET</strong> vytvorte anketu. Obsah ankety je na vás ale musí obsahovať tzv. guľaté checkboxy.', '../priklady/html/3.4 Anketa/anketa.html', '', '../priklady/html/3.4 Anketa/video.mp4', ''),
(22, '10 Sémantika', '10.1 Sekcia', 'Bez použitia akýchkoľvek tagov ako definovanie DOCTYPE, head, body... Vytvorte sekciu stránky, ktorá bude obsahovať jeden nadpis a pod ním text.', '../priklady/html/10.1 Sekcia/section.html', '../priklady/html/10.1 Sekcia/obr-sekcia.png', '', ''),
(23, '10 Sémantika', '10.2 Článok', 'Bez použitia akýchkoľvek tagov ako definovanie DOCTYPE, head, body... Vytvorte článok.', '../priklady/html/10.2 Článok/article.html', '../priklady/html/10.2 Článok/obr-článok.png', '', ''),
(24, '10 Sémantika', '10.3 Footer', 'Bez použitia akýchkoľvek tagov ako definovanie DOCTYPE, head, body... Vytvorte footer s copyrightom.', '../priklady/html/10.3 Footer/footer.html', '../priklady/html/10.3 Footer/obr-footer.png', '', ''),
(25, '10 Sémantika', '10.4 Spojenie', 'V predchádzajúcich príkladoch ste vytvorili 3 základné stránky bez použitia základných tagov/elementov. Teraz je vašou úlohou vytvoriť webstránku, ktorá tieto stránky zobrazí na sebe ako <strong>jednu</strong> stránku.', '../priklady/html/10.4 Spojenie/spojenie.html', '../priklady/html/10.4 Spojenie/obr-spojenie.png', '', ''),
(26, '4 Tabuľky', '4.2 Zvieratá', 'Vytvorte jednoduchú tabuľku na ktorej budete mať jeden stĺpec pre obrázok, text a audio. Môžete sa inšpirovať obrázkom zadania.', '../priklady/html/4.2 Zvieratá/tab-zvierata.html', '../priklady/html/4.2 Zvieratá/obr.png', '', ''),
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
(1, '1 API', '1.1 Zobrazenie Textu z JSON súboru', 'Pomocou priloženého súboru JSON vytvorte stránku, ktorá zobrazí jeho obsah. Viď. fotka.', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.html', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.css', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.js', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/pr1.json', '', '', '../priklady/js/1.1 Zobrazenie Textu z JSON súboru/js-api-pr1.png', '', '', '1'),
(2, '1 API', '1.2 Dáta na požiadanie', 'Pomocou priloženého súboru JSON vytvorte stránku, ktorá zobrazí jeho obsah na kliknutie tlačidla. Viď. video.', '../priklady/js/1.2 Dáta na požiadanie/pr1.html', '../priklady/js/1.2 Dáta na požiadanie/pr1.css', '../priklady/js/1.2 Dáta na požiadanie/pr1.js', '../priklady/js/1.2 Dáta na požiadanie/pr1.json', '', '', '', '../priklady/js/1.2 Dáta na požiadanie/pr1.mp4', '', '1'),
(3, '3 Grafy', '3.1 Roky', 'Pomocou priloženého súboru JSON a knižnice vytvorte stránku, ktorá zobrazí jeho obsah na grafe. Máte priloženú aj dokumentáciu ku knižnici. Viď. fotka.', '../priklady/js/3.1 Roky/pr1.html', '../priklady/js/3.1 Roky/pr1.css', '../priklady/js/3.1 Roky/pr1.js', '../priklady/js/3.1 Roky/pr1.json', '../priklady/js/3.1 Roky/library-graphs.js', 'https://www.chartjs.org/docs/4.4.0/', '../priklady/js/3.1 Roky/js-grafy-pr1.png', '', '', '1'),
(4, '4 Navigácia', '4.1 Mobilné Menu', 'Vytvorte navigačné menu pre menšie obrazovky, ktoré funguje ako hamburger menu na mobilných aplikáciach. Viď. video.', '../priklady/js/4.1 Mobilné Menu/pr1.html', '../priklady/js/4.1 Mobilné Menu/pr1.css', '../priklady/js/4.1 Mobilné Menu/pr1.js', '', '', '', '', '../priklady/js/4.1 Mobilné Menu/pr1.mp4', '', '1'),
(5, '5 Prepínanie CSS', '5.1 Svetlý a Tmavý režim', 'Pomocou tlačidla na stránke zmeňte tému stránky na tmavú. Viď. video.', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.html', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.css', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.js', '', '', '', '', '../priklady/js/5.1 Svetlý a tmavý režim/pr1.mp4', '', '1'),
(6, '6 Vyskakovacie okná', '6.1 Povoliť Cookies', 'Vytvorte vyskakovacie okno, ktoré si bude pýtať od používateľa aby prijal Cookies. Toto následne uložte do lokálneho úložiska, aby sa ho stránka nabudúce nepýtala znovu jeho prijatie. Viď. video.', '../priklady/js/6.1 Povoliť Cookies/pr1.html', '../priklady/js/6.1 Povoliť Cookies/pr1.css', '../priklady/js/6.1 Povoliť Cookies/pr1.js', '', '', '', '', '../priklady/js/6.1 Povoliť Cookies/pr1.mp4', '', '1'),
(7, '7 Drag and Drop', '7.1 Presun elementov do koša', 'Vytvorte stránku, na ktorej budete mať obrázok koša a budete môcť do neho pomocou funkcie drag and drop pretiahnuť elementy, ktoré potom zmiznú. Vždy, keď sa vloží niečo do koša, tak nech napíše nejaké slovo, ktoré zmizne po pár sekundách. Viď. video.', '../priklady/js/7.1 Presun elementov do koša/pr1.html', '../priklady/js/7.1 Presun elementov do koša/pr1.css', '../priklady/js/7.1 Presun elementov do koša/pr1.js', '', '', '', '', '../priklady/js/7.1 Presun elementov do koša/pr1.mp4', '', '1'),
(8, '8 Tabuľky', '8.1 Správa dát v tabuľke', 'Vytvorte tabuľku, do ktorej budete môcť pridávať, upravovať a mazať údaje. Viď. video.', '../priklady/js/8.1 Správa dát v tabuľke/pr1.html', '../priklady/js/8.1 Správa dát v tabuľke/pr1.css', '../priklady/js/8.1 Správa dát v tabuľke/pr1.js', '', '', '', '', '../priklady/js/8.1 Správa dát v tabuľke/pr1.mp4', '', '1'),
(9, '9 Vyhľadávanie', '9.1 Vyhľadávanie na aktuálnej stránke', 'Vytvorte stránku, kde budete môcť hľadať pomocou vyhľadávacieho okna produkty e-shopu. Viď. video.', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.html', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.css', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.js', '', '', '', '', '../priklady/js/9.1 Vyhľadávanie na aktuálnej stránke/pr1.mp4', '', '1'),
(10, '10 Iné', '10.1 Kalkulačka', 'Pokúste sa vytvoriť jednoduchú kalkulačku. Viď. video.', '../priklady/js/10.1 Kalkulačka/pr1.html', '../priklady/js/10.1 Kalkulačka/pr1.css', '../priklady/js/10.1 Kalkulačka/pr1.js', '', '', '', '', '../priklady/js/10.1 Kalkulačka/pr1.mp4', '', '1'),
(11, '10 Iné', '10.2 Hodiny', '<strong>Bez použitia AJAXu</strong> sa pokúste vytvoriť hodiny so sekundami, ktoré sa budú aktualizovať v <strong>reálnom čase.</strong> Viď. video.', '../priklady/js/10.2 Hodiny/pr1.html', '../priklady/js/10.2 Hodiny/pr1.css', '../priklady/js/10.2 Hodiny/pr1.js', '', '', '', '', '../priklady/js/10.2 Hodiny/pr1.mp4', '', '1'),
(12, '10 Iné', '10.3 Galéria', 'Vytvorte galériu obrázkov, kde sa budú prepínať obrázky na stlačenie tlačidla vpravo alebo vľavo. Viď. video.', '../priklady/js/10.3 Galéria/pr1.html', '../priklady/js/10.3 Galéria/pr1.css', '../priklady/js/10.3 Galéria/pr1.js', '', '', '', '', '../priklady/js/10.3 Galéria/pr1.mp4', '', '1'),
(13, '2 AJAX', '2.1 Čas a náhodný text', 'Pomocou priloženej knižnice vytvorte webstránku, na ktorej sa bude zobrazovať <strong>aktuálny čas, náhodná veta</strong> podľa vášho výberu <strong>(aspoň 5)</strong> a táto veta sa bude meniť každých <strong>10 sekúnd.</strong> Následne vytvorte <strong>odpočítavanie,</strong> ktoré bude ukazovať v <strong>reálnom čase,</strong> kedy sa bude meniť táto <strong>náhodná veta.</strong> Môžete sa inšpirovať videom.', '../priklady/js/2.1 Čas a náhodný text/cas-text.html', '../priklady/js/2.1 Čas a náhodný text/cas-text.css', '../priklady/js/2.1 Čas a náhodný text/script.js', '', '../priklady/js/2.1 Čas a náhodný text/jquery-3.7.1.js', 'https://api.jquery.com/', '', '../priklady/js/2.1 Čas a náhodný text/Video.mp4', '', '1'),
(14, '4 Navigácia', '4.2 Single Page', 'Pomocou vašich znalostí vytvorte webstránku, ktorá bude mať iba jednu HTML5 stránku ale bude obsahovať aspoň 3 stránky. Tj. stránka nesmie presmerovať používateľa na inú stránku. Viď. video.', '../priklady/js/4.2 Single Page/index.html', '../priklady/js/4.2 Single Page/style.css', '../priklady/js/4.2 Single Page/script.js', '', '', '', '', '../priklady/js/4.2 Single Page/video.mp4', '', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
