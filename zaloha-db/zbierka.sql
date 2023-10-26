-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: db
-- Čas generovania: Št 26.Okt 2023, 14:52
-- Verzia serveru: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- Verzia PHP: 8.2.11

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
(2, '1 Texty', '1.1 Texty', 'Vytvorte jednoduchú webovú stránku so samostatným css súborom, <strong>kde zmeníte veľkosť fontov, farbu textu</strong> podľa vlastného výberus nasledujúcimi časťami:<br><br><strong>Hlavička (Header)</strong> s názvom webovej stránky a navigačným menu.<br><strong>Hlavný obsah (Main)</strong> obsahujúci článok, 3 obrázky a vložené video z YouTube.<br><strong>Päta (Footer)</strong> s copyright informáciami.<br><br>Môžete sa inšpirovať obrázkom.', '../priklady/css/1.1 Texty/pr1.html', '../priklady/css/1.1 Texty/pr1.css', '../priklady/css/1.1 Texty/css-texty-pr1.png', '', ''),
(3, '2 Responzivita', '2.1 Responzivita', 'Vytvorte stránku na ktorej budete mať 2 karty, každá karta bude mať aspoň jeden obrázok a pod obrázkom text. Ako ďalšie vytvoríte 3 články a každý z nich bude mať vlastný názov. Vašou úlohou bude spraviť túto stránku, aby sa dala prehľadne prezerať na akejkoľvek veľkosti obrazovky. Môžete sa inšpirovať videom. Vytvorte stránku na ktorej budete mať 2 karty, každá karta bude mať aspoň jeden obrázok a pod obrázkom text. Ako ďalšie vytvoríte 3 články a každý z nich bude mať vlastný názov. Vašou úlohou bude spraviť túto stránku, aby sa dala prehľadne prezerať na akejkoľvek veľkosti obrazovky. Môžete sa inšpirovať videom.', '../priklady/css/2.1 Responzivita/pr1.html', '../priklady/css/2.1 Responzivita/pr1.css', '', '../priklady/css/2.1 Responzivita/pr1.mp4', ''),
(4, '3 Média', '3.1 Média', 'Vytvorte a pekne nadizajnujte multimediálnu knižnicu, kde budú fotky, videá, audio. Môžete sa  inšpirovať obrázkom.', '../priklady/css/3.1 Média/pr1.html', '../priklady/css/3.1 Média/pr1.css', '../priklady/css/3.1 Média/css-media-pr1.png', '', ''),
(5, '4 Formuláre', '4.1 Formuláre', 'Vytvorte jednoduchý formulár, ktorý pošle údaje zadané používateľom v adresnom riadku prehliadača. Formulár musí byť responzívny a moderne nadizajnovaný. Môžete sa inšpirovať obrázkom.', '../priklady/css/4.1 Formuláre/pr1.html', '../priklady/css/4.1 Formuláre/pr1.css', '../priklady/css/4.1 Formuláre/css-formulare-pr1.png', '', ''),
(6, '5 Tabuľky', '5.1 Tabuľky', 'Vytvorte responzívnu tabuľku aspoň s tromi stĺpcami a štyrmi riadkami. Bonusová úloha: Keď bude tabuľka zobrazená na malej obrazovke, skryte posledný stĺpec. Môžete sa inšpirovať obrázkom.', '../priklady/css/5.1 Tabuľky/pr1.html', '../priklady/css/5.1 Tabuľky/pr1.css', '../priklady/css/5.1 Tabuľky/css-tabulky-pr1.png', '', ''),
(7, '6 Flexbox', '6.1 Flexbox', 'Vytvorte stránku, kde využijete flexbox a zakomponujete obrázok, ktorý je špecifikovaný v css súbore a zistite aké to má výhody a nevýhody. Môžete sa inšpirovať obrázkom.', '../priklady/css/6.1 Flexbox/pr1.html', '../priklady/css/6.1 Flexbox/pr1.css', '../priklady/css/6.1 Flexbox/css-flexbox-pr1.png', '', ''),
(8, '7 Grid', '7.1 Grid', 'Vytvorte stránku podľa obrázkovej šablóny, použite grid.', '../priklady/css/7.1 Grid/pr1.html', '../priklady/css/7.1 Grid/pr1.css', '../priklady/css/7.1 Grid/css-grid-pr1.png', '', ''),
(9, '8 Navigácia', '8.1 Navigačné menu', 'Vytvorte 2 stránky na ktoré sa budete prepínať pomocou navigačného menu a podľa toho, ktorá stránka je aktívna vizuálne zmeňte navigačnú linku na menu aby používateľ vedel, kde sa práve nachádza. Môžete sa inšpirovať gifom.', '../priklady/css/8.1 Navigačné menu/pr1-pg1.html', '../priklady/css/8.1 Navigačné menu/pr1.css', '../priklady/css/8.1 Navigačné menu/css-menu-pr1.gif', '', ''),
(10, '9 Animácie', '9.1 Text', 'Vytvorte webstránku na ktorej bude podľa vášho výberu animovaný text. Pokúste sa vytvoriť aj iný efekt ako je vo videu.', '../priklady/css/9.1 Text/pr1.html', '../priklady/css/9.1 Text/pr1.css', '', '../priklady/css/9.1 Text/text1.mp4', ''),
(11, '9 Animácie', '9.2 Lopta', 'Vytvorte webstránku na ktorej bude animovaná lopta, ktorá sa bude hýbať stále dookola po okraji obrazovky. Lopta nesmie zájsť mimo obrazovku.', '../priklady/css/9.2 Lopta/pr2.html', '../priklady/css/9.2 Lopta/pr2.css', '', '../priklady/css/9.2 Lopta/lopta1.mp4', ''),
(12, '10 Transformácie', '10.1 Transformácie', 'Podľa videa sa pokúste vytvoriť podobnú transformáciu.', '../priklady/css/10.1 Transformácie/pr1.html', '../priklady/css/10.1 Transformácie/pr1.css', '', '../priklady/css/10.1 Transformácie/pr1.mp4', '');

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
(10, '1 Texty', '1.1 Texty', 'Vytvorte podobnú webstránku podľa obrázkovej predlohy.', '../priklady/html/1.1 Texty/text-pr1.html', '../priklady/html/1.1 Texty/text-pr1.png', '', ''),
(11, '1 Texty', '1.2 Texty', 'Vytvorte podobnú webstránku podľa obrázkovej predlohy.', '../priklady/html/1.2 Texty/text-pr2.html', '../priklady/html/1.2 Texty/text-pr2.png', '', ''),
(12, '2 Média', '2.1 Média', 'Vašou úlohou je vytvoriť webstránku s multimediálnymi prvkami. Dodržte nasledujúce inštrukcie na zahrnutie týchto prvkov do vášho HTML kódu:<br><br><strong>Obrázky:</strong><br>Pridajte aspoň dva obrázky na svoju webovú stránku.<br>Použite značku &lt;img&gt;, aby ste obrázky vložili do vášho HTML.<br>Pre každý obrázok uveďte atribút alt na poskytnutie alternatívneho textu.<br><br><strong>Videá:</strong><br>Vložte video na svoju webovú stránku. Môžete použiť online video hostingovú službu ako YouTube alebo Vimeo.<br>Na vloženie videa na svoju stránku použite značky &lt;iframe&gt; alebo &lt;video&gt;.<br>Uistite sa, že poskytnete krátky popis alebo titulok k videu.<br><br><strong>Ikona webovej stránky (Favicon):</strong><br>Vytvorte alebo nájdite malý obrázok, ktorý bude reprezentovať vašu webovú stránku. Tento obrázok bude použitý ako favicon, ktorý sa zobrazuje v kartách prehliadača.<br>Obrázok favicon uložte vo vhodnom formáte (.ico).<br><br><strong>Zvuk:</strong><br>Vložte na svoju webovú stránku zvukový element. Môžete použiť HTML5 značku &lt;audio&gt;.<br>Pridajte audio súbor (napríklad .mp3 alebo .ogg) do vášho projektu a odkážte sa naň vo vašom HTML kóde.<br>Poskytnite ovládanie pre prehrávanie a pozastavenie zvuku. Ak zariadenie nepodporuje túto funkcionalitu, napíšte používateľovi chybovú hlášku.', '../priklady/html/2.1 Média/media-pr1.html', '../priklady/html/2.1 Média/media-pr1.png', '', ''),
(13, '3 Formuláre', '3.1 Formuláre', 'Vašou úlohou je vytvoriť novú webovú stránku, ktorá obsahuje formuláre. Postupujte podľa nasledujúcich krokov:<br><br><strong>Názov stránky:</strong> Príklad 3<br><br><strong>Hlavička:</strong> Vložte nadpis úrovne 1 s názvom vašej stránky do hlavičky.<br><br><strong>Formulár 1:</strong> Kontaktujte nás:<br>Vytvorte formulár, ktorý umožní používateľom kontaktovať vás. Formulár by mal obsahovať tieto polia:<br>Meno a priezvisko (textové pole)<br>Email (textové pole pre email)<br>Správa (textové pole alebo textové pole s veľkým textovým obsahom)<br>Pridajte tlačidlo s textom \\\"Odoslať\\\". Po stlačení tlačidla by mali údaje z formulára byť odoslané na server.<br><br><strong>Formulár 2:</strong> Prihlásenie:<br>Vytvorte druhý formulár, ktorý slúži na prihlásenie používateľov. Formulár by mal obsahovať tieto polia:<br>Používateľské meno (textové pole)<br>Heslo (textové pole so skrytými znakmi)<br>Pridajte tlačidlo s textom \\\"Prihlásiť sa\\\".<br><br><strong>Päta stránky:</strong> Pridajte pätu stránky, ktorá obsahuje váš kontakt (napríklad emailovú adresu alebo telefónne číslo).<br><br><strong>Výsledná stránka by mala vyzerať približne takto:</strong>', '../priklady/html/3.1 Formuláre/form-pr1.html', '../priklady/html/3.1 Formuláre/form-pr1.png', '', ''),
(14, '4 Tabuľky', '4.1 Tabuľky', 'Vytvorte tabuľku podľa obrázka nižšie.', '../priklady/html/4.1 Tabuľky/tabulky-pr1.html', '../priklady/html/4.1 Tabuľky/tabulky-pr1.png', '', ''),
(15, '5 Meta Údaje', '5.1 Meta', 'Peter si založil internetový obchod na ktorom predáva tlačiarne a nepáči sa mu ako vyzerajú výsledky na internetových prehliadačoch. Ukazuje mu tam náhodný text z jeho webstránky. Vytvorte webovú stránku, ktorá obsahuje aspoň 3 produkty s cenami, niečo o Petrovom obchode a opravte mu meta údaje aby si ho mohli zákazníci lepšie všimnúť. <p><strong>Výsledná stránka by mala vyzerať približne takto:</strong></p>', '../priklady/html/5.1 Meta/meta-pr1.html', '../priklady/html/5.1 Meta/meta-pr1.png', '', ''),
(16, '6 Navigácia', '6.1 Navigácia', 'Vytvorte dlhšiu webstránku, po ktorej budete môcť skákať kliknutím na navigačný link.<p><strong>Výsledná stránka by mala vyzerať približne takto:</strong>', '../priklady/html/6.1 Navigácia/navigacia-pr1.html', '../priklady/html/6.1 Navigácia/navigacia-pr1.png', '', '');

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
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `CSS`
--
ALTER TABLE `CSS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pre tabuľku `HTML`
--
ALTER TABLE `HTML`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
