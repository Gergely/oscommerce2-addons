<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_CONTENT_PAYPAL_LOGIN_TITLE', 'Belépés PayPallal');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DESCRIPTION', 'Paypal belépés engedélyezése a Seamless PayPal express checkout használatához<br /><br /><img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&log_in" target="_blank" style="text-decoration: underline; font-weight: bold;">Online documentáció megtekintése (angol)</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">PayPal webszájt megtekintése (angol)</a>');

  define('MODULE_CONTENT_PAYPAL_LOGIN_TEMPLATE_TITLE', 'Belépés PayPal felhasználásával');
  define('MODULE_CONTENT_PAYPAL_LOGIN_TEMPLATE_CONTENT', 'Van PayPal számlája? Úgy, mint még soha biztonságosan beléphet és vásárolhat a PayPal felhasználásával!');
  define('MODULE_CONTENT_PAYPAL_LOGIN_TEMPLATE_SANDBOX', 'Teszt mód: a Sandbox server van kiválasztva.');

  define('MODULE_CONTENT_PAYPAL_LOGIN_ERROR_ADMIN_CURL', 'A modul csak cURL felhasználásával működik, amit a shop webszerver php.ini beállításaiban kell biztosítani.');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ERROR_ADMIN_CONFIGURATION', 'A modul addig nem lesz működőképes, amíg a felhasználói azonosító (Client ID) és a titkosító paraméter (Secret parameters) nincs beállítva. Kérem javítsa és állítsa be a paramétereket a modul használatához.');

  define('MODULE_CONTENT_PAYPAL_LOGIN_LANGUAGE_LOCALE', 'hu-hu');

  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_personal', 'Személyes adatok');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_address', 'Cím adatok');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_account', 'Regisztrációs adatok');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_checkout', 'Checkout Express');

  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_full_name', 'Teljes név');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_date_of_birth', 'Születési dátum');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_age_range', 'Életkor határ');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_gender', 'Neme');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_email_address', 'Email cím');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_street_address', 'Utca');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_city', 'Város');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_state', 'Megye');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_country', 'Ország');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_zip_code', 'Irányítószám');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_phone', 'Telefon');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_account_status', 'Regisztrációs állapot (verified)');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_account_type', 'Regisztrációs típus');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_account_creation_date', 'Regisztráció készítése');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_time_zone', 'Időzóna');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_locale', 'Lokalizáció');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_language', 'Nyelv');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_seamless_checkout', 'Seamless Checkout');

  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_LINK_TITLE', 'Test API Server Connection');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_TITLE', 'API Server Connection Test');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_GENERAL_TEXT', 'Testing connection to server..');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_BUTTON_CLOSE', 'Bezár');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_TIME', 'Connection Time:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_SUCCESS', 'Siker!');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_FAILED', 'Hiba! Ellenőrizze a biztonsági SSL azonosítási beállításokat és próbálja meg újra.');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_ERROR', 'Hiba keletkezett. Frissítse az oldalt , ellenőrizze a beállításait és próbálja meg újra.');

  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_LINK_TITLE', 'PayPal applikációs URL-ek megjelenítése');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_TITLE', 'PayPal Application URLs');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_RETURN_TEXT', 'Redirect/Return URL:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_PRIVACY_TEXT', 'Privacy Policy URL:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_TERMS_TEXT', 'User Agreement URL:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_BUTTON_CLOSE', 'Bezár');
?>
