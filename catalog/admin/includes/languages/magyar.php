<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_ALL, array('hu_HU.UTF-8', 'hu_HU.UTF8', 'hun_hun'));
define('DATE_FORMAT_SHORT', '%Y/%m/%d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%Y %B %d, %A'); // this is used for strftime()
define('DATE_FORMAT', 'Y/m/d'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'Y/m/d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', 'hu'); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'yy/mm/dd'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
  // from hungarian date format yyyy/mm/dd to yyyymmdd
    return substr($date, 0, 4) . substr($date, 5, 2) . substr($date, 8, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="hu"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', 'Webáruház adminisztráció');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Adminisztráció');
define('HEADER_TITLE_SUPPORT_SITE', 'Támogatás');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online katalógus');
define('HEADER_TITLE_ADMINISTRATION', 'Adminisztráció');

// text for gender
define('MALE', 'Férfi');
define('FEMALE', 'Nő');

// text for date of birth example
define('DOB_FORMAT_STRING', 'hh/nn/év');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION','Főbeállítások');
define('BOX_CONFIGURATION_MYSTORE','Webáruház beállítása');
define('BOX_CONFIGURATION_LOGGING','Naplózófájl beállítások');
define('BOX_CONFIGURATION_CACHE','Cache beállítások');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'Adminisztrátorok');
define('BOX_CONFIGURATION_STORE_LOGO', 'Áruház Logo');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modulok');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Katalógus');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Kategóriák/Termékek');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Termékek tulajdonságai');
define('BOX_CATALOG_MANUFACTURERS', 'Gyártók');
define('BOX_CATALOG_REVIEWS', 'Ismertetők');
define('BOX_CATALOG_SPECIALS', 'Akciók');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Érkező termékek');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Vásárlók');
define('BOX_CUSTOMERS_CUSTOMERS', 'Vásárlók');

// orders box text in includes/boxes/orders.php
define('BOX_HEADING_ORDERS', 'Megrendelések');
define('BOX_ORDERS_ORDERS', 'Megrendelések');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Helyek és Adók');
define('BOX_TAXES_COUNTRIES', 'Országok');
define('BOX_TAXES_ZONES', 'Megyék');
define('BOX_TAXES_GEO_ZONES', 'Adó-zónák');
define('BOX_TAXES_TAX_CLASSES', 'Adóosztályok');
define('BOX_TAXES_TAX_RATES', 'Adókulcsok');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Kimutatások, termékstatisztikák');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Megtekintett termékek');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Megvásárolt termékek');
define('BOX_REPORTS_ORDERS_TOTAL', 'Összes megrendelő kilistázása');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Segédeszközök');
define('BOX_TOOLS_ACTION_RECORDER', 'Művelet rögzítő');
define('BOX_TOOLS_BACKUP', 'Adatbázis mentés');
define('BOX_TOOLS_BANNER_MANAGER', 'Banner kezelő');
define('BOX_TOOLS_CACHE', 'Cache Vezérlés');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Nyelvi fájlok szerkesztése');
define('BOX_TOOLS_MAIL', 'Email küldése');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Hírlevél kezelés');
define('BOX_TOOLS_SEC_DIR_PERMISSIONS', 'Biztonság - Könyvtárak engedélyei (Chmod)');
define('BOX_TOOLS_SERVER_INFO', 'Szerverinfó');
define('BOX_TOOLS_VERSION_CHECK', 'Verzió ellenőrző');
define('BOX_TOOLS_WHOS_ONLINE', 'Ki olvas minket?');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Helymeghatározó');
define('BOX_LOCALIZATION_CURRENCIES', 'Pénznemek');
define('BOX_LOCALIZATION_LANGUAGES', 'Nyelvek');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Megrendelések állapota');

// javascript messages
define('JS_ERROR', 'A művelet közben hiba történt!\nKérlek javítsd a következőket:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Az új termék tulajdonságaiból hiányzik az ár\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* z új termék tulajdonságaiból hiányzik az ár előtag\n');

define('JS_PRODUCTS_NAME', '* Adj nevet az új terméknek!\n');
define('JS_PRODUCTS_DESCRIPTION', '* Adj leírást az új termékhez!\n');
define('JS_PRODUCTS_PRICE', '* Add meg az új termék árát!\n');
define('JS_PRODUCTS_WEIGHT', '* Add meg az új termék súlyát!\n');
define('JS_PRODUCTS_QUANTITY', '* Add meg az új termék darabszámát!\n');
define('JS_PRODUCTS_MODEL', '* Add meg az új termék adott modelljének adatát!\n');
define('JS_PRODUCTS_IMAGE', '* Add meg az új termék képét!\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Be kell állítanod az új termék árát!\n');

define('JS_GENDER', '* Ki kell választanod az új termék \'fajtáját\'.\n');
define('JS_FIRST_NAME', '* A \'keresztnévnek\'' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakternek kell lennie legalább.\n');
define('JS_LAST_NAME', '* A \'családnévnek\'' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakternek kell lennie legalább.\n');
define('JS_DOB', '* A \'születési évnek\' a következő formátumban kell szerepelnie: év/hó/nap (year/month/day).\n');
define('JS_EMAIL_ADDRESS', '* Az \'E-Mail címnek\' legalább ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakternek kell lennie.\n');
define('JS_ADDRESS', '* A \'címnek\' legalább ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakternek kell lennie.\n');
define('JS_POST_CODE', '* Az \'irányítószámnak\' legalább ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakternek kell lennie.\n');
define('JS_CITY', '* A \'Városnak\' legalább ' . ENTRY_CITY_MIN_LENGTH . ' karakternek kell lennie.\n');
define('JS_STATE', '* Valamilyen \'országot\' választanod kell.\n');
define('JS_STATE_SELECT', '-- Válassz az alábbiak közül --');
define('JS_ZONE', '* \'Államot\' választanod kell.');
define('JS_COUNTRY', '* \'Országot\' választanod kell.\n');
define('JS_TELEPHONE', '* A \'telefonszámnak\' legalább ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakternek kell lennie.\n');
define('JS_PASSWORD', '* A \'jelszónak\' és a \'megerősítésnek\' legalább ' . ENTRY_PASSWORD_MIN_LENGTH . ' karakternek kell lennie.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Nincs ilyen számú rendelés: %s ');

define('CATEGORY_PERSONAL', 'Személyes');
define('CATEGORY_ADDRESS', 'Cím');
define('CATEGORY_CONTACT', 'Elérhetőség');
define('CATEGORY_COMPANY', 'Cég');
define('CATEGORY_OPTIONS', 'Opciók');

define('ENTRY_GENDER', 'Nem:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">kötelező</span>');
define('ENTRY_FIRST_NAME', 'Keresztnév:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">legalább ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakter</span>');
define('ENTRY_LAST_NAME', 'Vezetéknév:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">legalább ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakter</span>');
define('ENTRY_DATE_OF_BIRTH', 'Születési dátum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(pl. 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail cím:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">legalább ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakter</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Érvénytelen Email cím!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Ez az Email cím már foglalt!</span>');
define('ENTRY_COMPANY', 'Cég neve:');
define('ENTRY_STREET_ADDRESS', 'Utca, házszám:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">legalább ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakter</span>');
define('ENTRY_SUBURB', 'Kerület:');
define('ENTRY_POST_CODE', 'Irányítószám:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">legalább ' . ENTRY_POSTCODE_MIN_LENGTH . ' karakter</span>');
define('ENTRY_CITY', 'Város:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">legalább ' . ENTRY_CITY_MIN_LENGTH . ' karakter</span>');
define('ENTRY_STATE', 'Megye:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">kötelező</span>');
define('ENTRY_COUNTRY', 'Ország:');
define('ENTRY_COUNTRY_ERROR', 'Válasszon országot az Ország lenyíló menüből!');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonszám:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">legalább ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karakter</span>');
define('ENTRY_FAX_NUMBER', 'Faxszám:');
define('ENTRY_NEWSLETTER', 'Hírlevél:');
define('ENTRY_NEWSLETTER_YES', 'feliratkozás');
define('ENTRY_NEWSLETTER_NO', 'leiratkozás');

// images
define('IMAGE_ANI_SEND_EMAIL', 'E-Mail küldése');
define('IMAGE_BACK', 'Vissza');
define('IMAGE_BACKUP', 'Biztonsági Mentés');
define('IMAGE_CANCEL', 'Mégse');
define('IMAGE_CONFIRM', 'Megerősít');
define('IMAGE_COPY', 'Másol');
define('IMAGE_COPY_TO', 'Másol...');
define('IMAGE_DETAILS', 'Részletek');
define('IMAGE_DELETE', 'Töröl');
define('IMAGE_EDIT', 'Szerkeszt');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_EXPORT', 'Export');
define('IMAGE_ICON_STATUS_GREEN', 'Aktív');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Aktívvá tesz');
define('IMAGE_ICON_STATUS_RED', 'Inaktív');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Inaktívvá tesz');
define('IMAGE_ICON_INFO', 'Infó');
define('IMAGE_INSERT', 'Beszúr');
define('IMAGE_LOCK', 'Lezár');
define('IMAGE_MODULE_INSTALL', 'Modul telepítése');
define('IMAGE_MODULE_REMOVE', 'Modul letávolítása');
define('IMAGE_MOVE', 'Mozgat');
define('IMAGE_NEW_BANNER', 'Új Banner');
define('IMAGE_NEW_CATEGORY', 'Új Kategória');
define('IMAGE_NEW_COUNTRY', 'Új ország');
define('IMAGE_NEW_CURRENCY', 'Új pénznem');
define('IMAGE_NEW_FILE', 'Új fájl');
define('IMAGE_NEW_FOLDER', 'Új könyvtár');
define('IMAGE_NEW_LANGUAGE', 'Új nyelv');
define('IMAGE_NEW_NEWSLETTER', 'Új hírlevél');
define('IMAGE_NEW_PRODUCT', 'Új termék');
define('IMAGE_NEW_TAX_CLASS', 'Új adótípus');
define('IMAGE_NEW_TAX_RATE', 'Új adókulcs ');
define('IMAGE_NEW_TAX_ZONE', 'Új adó-zóna');
define('IMAGE_NEW_ZONE', 'Új zóna');
define('IMAGE_ORDERS', 'Megrendelések');
define('IMAGE_ORDERS_INVOICE', 'Számla');
define('IMAGE_ORDERS_PACKINGSLIP', 'Szállítólevél');
define('IMAGE_PREVIEW', 'Előnézet');
define('IMAGE_RESTORE', 'Visszaállít');
define('IMAGE_RESET', 'Töröl');
define('IMAGE_SAVE', 'Mentés');
define('IMAGE_SEARCH', 'Keres');
define('IMAGE_SELECT', 'Kiválaszt');
define('IMAGE_SEND', 'Küld');
define('IMAGE_SEND_EMAIL', 'Email küldés');
define('IMAGE_UNLOCK', 'Kinyit');
define('IMAGE_UPDATE', 'Frissít');
define('IMAGE_UPDATE_CURRENCIES', 'Az átváltási tábla frissítése');
define('IMAGE_UPLOAD', 'Feltölt');

define('ICON_CROSS', 'Hamis');
define('ICON_CURRENT_FOLDER', 'Aktuális könyvtár');
define('ICON_DELETE', 'Töröl');
define('ICON_ERROR', 'Hiba');
define('ICON_FILE', 'Fájl');
define('ICON_FILE_DOWNLOAD', 'Letöltés');
define('ICON_FOLDER', 'Könyvtár');
define('ICON_LOCKED', 'Lezárva');
define('ICON_PREVIOUS_LEVEL', 'Előző szint');
define('ICON_PREVIEW', 'Előnézet');
define('ICON_STATISTICS', 'Statisztikák');
define('ICON_SUCCESS', 'Sikeres');
define('ICON_TICK', 'Igaz');
define('ICON_UNLOCKED', 'Nyitva');
define('ICON_WARNING', 'Figyelem');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', '%s. lap a %d -ból');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> bannerből)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> országból)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> vásárlóból)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> pénznemből)');
define('TEXT_DISPLAY_NUMBER_OF_ENTRIES', 'Megjelenítve <strong>%d</strong> to <strong>%d</strong> (<strong>%d</strong> belépésből)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> nyelvekből)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> gyártóból)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> hírlevélből)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> rendelésből)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> rendelés státuszból)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> termékből)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> várható termékből)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> termék véleményből)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> speciális termékből)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> adó osztályból)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> adósávból)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> adórátából)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Megjelenítve <strong>%d</strong> - <strong>%d</strong> (of <strong>%d</strong> zónából)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'alapértelmezett');
define('TEXT_SET_DEFAULT', 'Beállítás alapértelmezettként');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Kötelező</span>');

define('TEXT_CACHE_CATEGORIES', 'Kategóriák ládája');
define('TEXT_CACHE_MANUFACTURERS', 'Gyártók ládája');
define('TEXT_CACHE_ALSO_PURCHASED', 'Beszerzési modul');

define('TEXT_NONE', '--üres--');
define('TEXT_TOP', 'Felső');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Hiba: %s célhely nem létezik.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Hiba: %s célhely nem írható.');
define('ERROR_FILE_NOT_SAVED', 'Hiba: A file feltöltése nem sikerült.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Hiba: A file tipus feltöltése tiltva.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Success: A file feltöltése sikerült.');
define('WARNING_NO_FILE_UPLOADED', 'Figyelem: A file nincs feltöltve.');
?>
