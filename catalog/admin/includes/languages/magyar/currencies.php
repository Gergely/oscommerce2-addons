<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Pénznemek');

define('TABLE_HEADING_CURRENCY_NAME', 'Pénznem');
define('TABLE_HEADING_CURRENCY_CODES', 'Kód');
define('TABLE_HEADING_CURRENCY_VALUE', 'Érték');
define('TABLE_HEADING_ACTION', 'Műveletek');

define('TEXT_INFO_EDIT_INTRO', 'Adatok módosítása/hozzáadása');
define('TEXT_INFO_COMMON_CURRENCIES', '-- Közös pénznemek --');
define('TEXT_INFO_CURRENCY_TITLE', 'Valuta neve:');
define('TEXT_INFO_CURRENCY_CODE', 'Kód:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Pénznem baloldali szimboluma:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Pénznem jobb oldali szimboluma:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Decimális  pont:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Ezresek helyiértéke:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Váltó helyiérték :');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Utoljára módosítva:');
define('TEXT_INFO_CURRENCY_VALUE', 'Érték:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Kimeneti érték :');
define('TEXT_INFO_INSERT_INTRO', 'Adja meg az új pénznem nevét és a hozzá tartozó adatokat!');
define('TEXT_INFO_DELETE_INTRO', 'Biztos, hogy eltávolítja a kijelölt pénznemet a listából?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Új pénznem');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Pénznem szerkesztése');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Pénznem törlése');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . 'Beállítás alapértelmezettként (a pénznemek napi árgolyamát kézzel kell beállítani!)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Az árfolyamok frissítése %s (%s) siekresen megtörtént via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'HIBA!: Az alapértelmezett pénznem nem törölhető a rendszerből! Válasszon ki egy másik pénznemet alapértelmezettként, és próbálja újból!');
define('ERROR_CURRENCY_INVALID', 'HIBA!: Az árfolyamok frissítése %s (%s) nem sikerült  %s. Győzödjön meg róla, hogy érvényes kódot adott-e meg!');
define('WARNING_PRIMARY_SERVER_FAILED', 'Figyelem!: Az elsődleges árfolyamfrissítő szerver (%s) nem érhető el %s (%s) - próbálja meg a másodlagos szervert elérni.');
?>
