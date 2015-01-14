<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Banner Menedzser');

define('TABLE_HEADING_BANNERS', 'Bannerek');
define('TABLE_HEADING_GROUPS', 'Csoportok');
define('TABLE_HEADING_STATISTICS', 'Letöltés / Benyomások');
define('TABLE_HEADING_STATUS', 'Státusz');
define('TABLE_HEADING_ACTION', 'Műveletek');

define('TEXT_BANNERS_TITLE', 'Banner neve:');
define('TEXT_BANNERS_URL', 'Banner URL címe:');
define('TEXT_BANNERS_GROUP', 'Banner csoport:');
define('TEXT_BANNERS_NEW_GROUP', ', vagy adja meg az új banner csoport nevét');
define('TEXT_BANNERS_IMAGE', 'Képfájl:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', vagy adja meg a helyi képfájl nevét.');
define('TEXT_BANNERS_IMAGE_TARGET', 'kép útvonala (Mentési útvonal):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML szöveg:');
define('TEXT_BANNERS_EXPIRES_ON', 'Érvényességi idő:');
define('TEXT_BANNERS_OR_AT', ', vagy at');
define('TEXT_BANNERS_IMPRESSIONS', 'benyomások/letöltések.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Ütemezés:');
define('TEXT_BANNERS_BANNER_NOTE', '<strong>Megjegyzés a bannerhez:</strong><ul><li>Vagy képet, vagy HTML szöveget használhat a bannereknél - mindkettőt nem.</li><li>HTML A szöveg priorítást élvez a képpel szemben.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<strong>Megjegyzés a képhez:</strong><ul><li>Írhatónak kell lennie a kép könyvtárának!</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<strong>Megjegyzés a lejárati időhöz:</strong><ul><li>CSak egy mezőt kell kitölteni a kettő közül.</li><li>Ha a banner lejárati idejét ne mkívánja meghatározni, akkor hagyja üresen mindkét mezőt!</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<strong>Megjegyzés a feladat ütemezéshez:</strong><ul><li>Ha a feladatütemezés aktív, akkor a banner a megadott időpontban jelenik meg, ellenkező esetben nem jelenik meg a látogatói oldalakon a reklámcsík.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'hozzáadás dátuma:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Feladatütemezve: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Lejárat ideje: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Lejárat : <strong>%s</strong> letöltéskor');
define('TEXT_BANNERS_STATUS_CHANGE', 'Státusz változás: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Előző 3 nap');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banner letöltése');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banner benyomása');

define('TEXT_INFO_DELETE_INTRO', 'Biztos, hogy eltávlítja a bannert a rendszerből?');
define('TEXT_INFO_DELETE_IMAGE', 'Banner törlése');

define('SUCCESS_BANNER_INSERTED', 'Siekres feladat: A banner sikeresen bekerült az adatbázisba.');
define('SUCCESS_BANNER_UPDATED', 'Siekres feladat: Bannerinformációk frissítése megtörtént.');
define('SUCCESS_BANNER_REMOVED', 'Siekres feladat: Banner siekresen eltávolítva a rendszerből.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Success: A bannerhez tartozó adatok módosítása siekresen megtörtént.');

define('ERROR_BANNER_TITLE_REQUIRED', 'HIBA!: Banner nevét meg kell adnia!');
define('ERROR_BANNER_GROUP_REQUIRED', 'HIBA!:: Banner csoport nevét meg kell adnia.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'HIBA!: A célkönyvtár nem létezik: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'HIBA!: A célkönyvtár nem írható: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'HIBA!: A kép nem létezik.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'HIBA!: A képet nem lehet törölni.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'HIBA!: Ismeretlen zászló információ.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'HIBA!: A Graphs könyvtár nem létezik! Hozza létre a a \'graphs\' önyvtáron belül az\'images\' könyvtárat!');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'HIBA!: A Graphs könyvtár nem írható!');
?>
