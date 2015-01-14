<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Kibővített keresés');
define('NAVBAR_TITLE_2', 'Keresés eredményei');

define('HEADING_TITLE_1', 'Kibővített keresés');
define('HEADING_TITLE_2', 'A feltételeknek megfelelő termékek');

define('HEADING_SEARCH_CRITERIA', 'Keresési feltételek');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Keresés a termék leírásban');
define('ENTRY_CATEGORIES', 'Kategóriák:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Alkategóriákat is');
define('ENTRY_MANUFACTURERS', 'Gyártók:');
define('ENTRY_PRICE_FROM', 'Érték (-tól):');
define('ENTRY_PRICE_TO', 'Érték (-ig):');
define('ENTRY_DATE_FROM', 'Dátum (-tól):');
define('ENTRY_DATE_TO', 'Dátum (-ig):');

define('TEXT_SEARCH_HELP_LINK', '<u>Segítség</u> [?]');

define('TEXT_ALL_CATEGORIES', 'Minden kategória');
define('TEXT_ALL_MANUFACTURERS', 'Minden gyártó');

define('HEADING_SEARCH_HELP', 'Keresési segítség');
define('TEXT_SEARCH_HELP', 'A keresési kulcsszavak elválaszthatóak AND illetve OR kötőszavakkal.<br /><br />Például <u>Microsoft AND egér</u> azokat a keresési eredményeket fogja tartalmazni ahol mindkét szó egy szövegkörnyezetben előfordul. Egyébbként, ha <u>egér OR billentyűzet</u>, formátumot ad meg akkor minden olyan keresési eredményt megjelenít, ahol a szövegkörnyezetben vagy az egyik vagy a másik vagy egyszerre mindkét kulcsszó szerepel.<br /><br />Ha szövégrészre akar keresni, akkor a keresett kifejezést vagy szöveget idézőjelek közzé kell zárni.<br /><br />Például, <u>"notebook számítógép"</u> olyan keresési eredményeket fog megjeleníteni, ahol a szövegkörnyezetben a keresett kifejezés megtalálható.<br /><br />Természetesen lehetőség van a keresési kulcsszavak egybeágyazására. Például <u>Microsoft AND (billentyűzet OR egér OR "visual basic")</u> olyan keresési eredményeket fog megjeleníteni ahol a szövegkörnyezetben megtalálható vagy a billetnytűzet vagy az egér vagy a "visaul basic" kifejezések valamelyike, a Microsoft kifejezéssel együtt.<br /><br /><strong>A keresés eredményét nem befolyásolja az, hogy kis illetve nagy betűket használ, avagy keverve használja a kis és nagy betűket. Természetesen az OR illetve az AND kötőszavakat is írhatja kis illetve nagy betűvel, a példáknál csak a jobb áttekinthetőség kedvéért írtuk nagy betűvel.</strong>');
define('TEXT_CLOSE_WINDOW', '<u>Ablak bezárása</u> [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Cikkszám');
define('TABLE_HEADING_PRODUCTS', 'Termék név');
define('TABLE_HEADING_MANUFACTURER', 'Gyártó');
define('TABLE_HEADING_QUANTITY', 'Mennyiség');
define('TABLE_HEADING_PRICE', 'Nettó ár');
define('TABLE_HEADING_WEIGHT', 'Súly');
define('TABLE_HEADING_BUY_NOW', 'Megvétel');

define('TEXT_NO_PRODUCTS', 'Nincs olyan termék amely megfelelne a feltételeknek.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Legalább egy mezőt ki kell töltened.');
define('ERROR_INVALID_FROM_DATE', 'Helytelen dátum (-tól).');
define('ERROR_INVALID_TO_DATE', 'Helytelen dátum (-ig).');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Az dátum (-ig) -nak későbbre kell esni a másiknál.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Érték (-tól) számnak kell lennie.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Érték (-ig) számnak kell lennie.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Érték (-ig) nagyobbnak vagy egyenlőnek kell lennie a másiktól.');
define('ERROR_INVALID_KEYWORDS', 'Helytelen kulcsszó.');
?>
