<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Adatbázis mentése');

define('TABLE_HEADING_TITLE', 'Cím');
define('TABLE_HEADING_FILE_DATE', 'Dátum');
define('TABLE_HEADING_FILE_SIZE', 'Méret');
define('TABLE_HEADING_ACTION', 'Műveletek');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Új adatmentés');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Helyi adatmentés');
define('TEXT_INFO_NEW_BACKUP', 'Adatmentés közben kérem ne adjon ki más parancsot az oldalon, mert adatmentési hiba következhet be!');
define('TEXT_INFO_UNPACK', '<br /><br />(atchív fájlból való kicsomagolás után)');
define('TEXT_INFO_RESTORE', 'Nem vonható vissza a művelet.<br /><br />Az adatmentés ideje függ az adatbázis méretétől!<br /><br />Ha használja a mySQL klienst, akkor így mentheti le az adatbázist:<br /><br />Pl.:<br /><br /><strong>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </strong> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Nem vonható vissza a művelet.<br /><br />Az adatmentés ideje függ az adatbázis méretétől!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'A fölteni kívánt sql fájl tartalmának (text) adatokat kell tartalmaznia!');
define('TEXT_INFO_DATE', 'Dátum:');
define('TEXT_INFO_SIZE', 'Méret:');
define('TEXT_INFO_COMPRESSION', 'Tömörítési lehetőségek:');
define('TEXT_INFO_USE_GZIP', 'GZIP');
define('TEXT_INFO_USE_ZIP', 'ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Nincs tömörítés (egyszerű SQL fájl)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Csak letöltés (nem tárolja a szerveren a mentett fájlt!)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Javaslolt adatátvitel HTTPS kapcsoalttal');
define('TEXT_DELETE_INTRO', 'Biztosan törli a a mentett adatokat?');
define('TEXT_NO_EXTENSION', 'Nem');
define('TEXT_BACKUP_DIRECTORY', 'Adatmentés könyvtára:');
define('TEXT_LAST_RESTORATION', 'Utolsó helyreállítása:');
define('TEXT_FORGET', '(<u>elfelejtett</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'HIBA!: Nem létezik az adatmentés könyvtára. Adja meg a configure.php fájlban!');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'HIBA!: Nem írható az adatbázis mentés köyvtára - CHMOD 777-nek kell lennie!');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'HIBA!: Fájlelérési hiba!');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Sikeres feladat: Az utolsó visszaThe last restoration date has been cleared.');
define('SUCCESS_DATABASE_SAVED', 'Sikeres feladat: Az adatbázis mentése siekresen megtörtént.');
define('SUCCESS_DATABASE_RESTORED', 'Sikeres feladat: Az adatbázis visszaállítása siekresen megtörtént.');
define('SUCCESS_BACKUP_DELETED', 'Sikeres feladat: Az adatbázis mentése törölve.');
?>