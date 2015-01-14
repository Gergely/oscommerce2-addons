<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'hu_HU'
// on FreeBSD 4.0 I use 'hu_hu.ISO_8859-2'
// this may not work under win32 environments..
@setlocale(LC_TIME, array('hu_HU.UTF-8', 'hu_HU.UTF8', 'hun_hun'));

define('DATE_FORMAT_SHORT', '%Y. %m. %d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%Y %B %d, %A'); // this is used for strftime()
define('DATE_FORMAT', 'Y/m/d'); // this is used for date()
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

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'HUF');
// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="hu"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Regisztráció');
define('HEADER_TITLE_MY_ACCOUNT', 'Személyes beállítások');
define('HEADER_TITLE_CART_CONTENTS', 'Kosár tartalma');
define('HEADER_TITLE_CHECKOUT', 'Megrendelés');
define('HEADER_TITLE_TOP', 'Főoldal');
define('HEADER_TITLE_CATALOG', 'Katalógus');
define('HEADER_TITLE_LOGOFF', 'Kijelentkezés');
define('HEADER_TITLE_LOGIN', 'Bejelentkezés');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'lapletöltés');

// text for gender
define('MALE', 'Férfi');
define('FEMALE', 'Nő');
define('MALE_ADDRESS', '');
define('FEMALE_ADDRESS', '');

// text for date of birth example
define('DOB_FORMAT_STRING', 'YYYY/MM/DD');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Szállítási információ');
define('CHECKOUT_BAR_PAYMENT', 'Fizetési információk');
define('CHECKOUT_BAR_CONFIRMATION', 'Megerősítés');
define('CHECKOUT_BAR_FINISHED', 'Kész!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Kérem válasszon');
define('TYPE_BELOW', 'Írja ide');

// javascript messages
define('JS_ERROR', 'Hiba történt az űrlap feldolgozásakkor!\n\nKérjük módosítsa a következőket:\n\n');

define('JS_REVIEW_TEXT', '* Az \'Ismertető szövegének\' legalább ' . REVIEW_TEXT_MIN_LENGTH . ' karaktert kell tartalmaznia.\n');
define('JS_REVIEW_RATING', '* Osztályozni kell az ismertetődben szereplő terméket.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Kérem válasszon fizetési módot.\n');

define('JS_ERROR_SUBMITTED', 'Az űrlapot átvettük. Kérem nyomjon egy OK gombot és várjon amíg a folyamat befelyeződik.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Hiba! Nem választott fizetési módot! Kérem válasszon fizetési módot.');

define('CATEGORY_COMPANY', 'Cégadatok');
define('CATEGORY_PERSONAL', 'Személyes adatok');
define('CATEGORY_ADDRESS', 'Cím');
define('CATEGORY_CONTACT', 'Elérhetőségi információk');
define('CATEGORY_OPTIONS', 'Opciók');
define('CATEGORY_PASSWORD', 'Az Ön jelszava');

define('ENTRY_COMPANY', 'A cég neve:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Neme:');
define('ENTRY_GENDER_ERROR', '&nbsp;<strong><font color="#FF0000">Válasszon nemet!</font></strong>');
define('ENTRY_GENDER_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_FIRST_NAME', 'Keresztnév:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<strong><font color="#FF0000">A Vezetéknévnek legalább ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' karakterből kell állnia!</font></strong>');
define('ENTRY_FIRST_NAME_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_LAST_NAME', 'Vezetéknév:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<strong><font color="#FF0000">A keresztnévnek legalább  ' . ENTRY_LAST_NAME_MIN_LENGTH . ' karakterből kell állnia!</font></strong>');
define('ENTRY_LAST_NAME_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_DATE_OF_BIRTH', 'Születési dátum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<strong><font color="#FF0000">A Születési dátumnak Év/Hó/Nap elrendezésű karaktereket kell tartalmaznia!</font></strong> (Pl. 1970/09/16)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '(év/hó/nap pl.: 1970/09/16)');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail cím:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<strong><font color="#FF0000">Az e-amil címnek legalább ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' karakterből kell állnia!</font></strong>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<strong><font color="#FF0000">Úgy látszik, az Ön E-mail címe érvénytelen karaktereket tartlamaz, vagy hibás e-mail címet adott meg!</font></strong>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<strong><font color="#FF0000">A megadott e-mail cím már létezik az adatbázisunkban!</font></strong>');
define('ENTRY_EMAIL_ADDRESS_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_STREET_ADDRESS', 'Utca, házszám:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<strong><font color="#FF0000">Az utca, házszám adatainak legalább ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' karakterből kell állnia!</font></strong>');
define('ENTRY_STREET_ADDRESS_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_SUBURB', 'Kerület:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Irányítószám:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<strong><font color="#FF0000">Az irányítószámnak legalább ' . ENTRY_POSTCODE_MIN_LENGTH . ' karaktert kell tartalmaznia!</font></strong>');
define('ENTRY_POST_CODE_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_CITY', 'Város:');
define('ENTRY_CITY_ERROR', '&nbsp;<strong><font color="#FF0000">A város nevének legalább ' . ENTRY_CITY_MIN_LENGTH . ' karaktert kell tartalmaznia!</font></strong>');
define('ENTRY_CITY_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_STATE', 'Megye:');
define('ENTRY_STATE_ERROR', '&nbsp;<strong><font color="#FF0000">A Megye nevének minimum ' . ENTRY_STATE_MIN_LENGTH . ' karaktert kell tartalmaznia!</font></strong>');
define('ENTRY_STATE_ERROR_SELECT', 'Kérjük, válasszon legördülő menüből.');
define('ENTRY_STATE_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_COUNTRY', 'Ország:');
define('ENTRY_COUNTRY_ERROR', '&nbsp;<strong><font color="#FF0000">Nem választotta ki az országot!</font></strong>');
define('ENTRY_COUNTRY_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonszám:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<strong><font color="#FF0000">A telefonszámnak legalább ' . ENTRY_TELEPHONE_MIN_LENGTH . ' karaktert kell tartalmaznia!</font></strong>');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_FAX_NUMBER', 'Fax szám:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Hírlevél:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Felíratkozva');
define('ENTRY_NEWSLETTER_NO', 'Nincs felíratkozva');
define('ENTRY_PASSWORD', 'Jelszó:');
define('ENTRY_PASSWORD_ERROR', '&nbsp;<strong><font color="#FF0000">A jelszónak legalább ' . ENTRY_PASSWORD_MIN_LENGTH . ' karaktert kell tartalmaznia!</font></strong>');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '&nbsp;<strong><font color="#FF0000">A két jelszó nem egyezik!</font></strong>');
define('ENTRY_PASSWORD_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_PASSWORD_CONFIRMATION', 'Jelszó megerősítés:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_PASSWORD_CURRENT', 'Jelenlegi jelszó:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'A jelszónak legalább ' . ENTRY_PASSWORD_MIN_LENGTH . ' karaktert kell tartalmaznia.');
define('ENTRY_PASSWORD_NEW', 'Új jelszó:');
define('ENTRY_PASSWORD_NEW_TEXT', '&nbsp;<strong><font color="#FF0000">*</font></strong>');
define('ENTRY_PASSWORD_NEW_ERROR', 'Az új jelszónak legalább ' . ENTRY_PASSWORD_MIN_LENGTH . ' karaktert kell tartalmaznia.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '&nbsp;<strong><font color="#FF0000">A két jelszó nem egyezik!</font></strong>');
define('PASSWORD_HIDDEN', '--REJTETT--');

define('FORM_REQUIRED_INFORMATION', '&nbsp;<strong><font color="#FF0000">*</font></strong> &nbsp;<strong><font color="#FF0000">Kötelezően kitöltendő adat!</font></strong>');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Talált Oldalak:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Megjelenítve <strong>%d</strong>-től <strong>%d</strong>-ig (összesen <strong>%d</strong> termék)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Megjelenítve <strong>%d</strong>-től <strong>%d</strong>-ig (összesen <strong>%d</strong> megrendelés)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Megjelenítve <strong>%d</strong>-től <strong>%d</strong>-ig (összesen <strong>%d</strong> ismertető)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Megjelenítve <strong>%d</strong>-től <strong>%d</strong>-ig (összesen <strong>%d</strong> új termék)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Megjelenítve <strong>%d</strong>-től <strong>%d</strong>-ig (összesen <strong>%d</strong> akció)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Első lap');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Előző lap');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Következő lap');
define('PREVNEXT_TITLE_LAST_PAGE', 'Utolsó lap');
define('PREVNEXT_TITLE_PAGE_NO', '%d lap');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Az előző %d lap');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'A következő %d lap');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;Első');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Előző]');
define('PREVNEXT_BUTTON_NEXT', '[Következő&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'UTOLSÓ&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Cím hozzáadása');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Címjegyzék');
define('IMAGE_BUTTON_BACK', 'Vissza');
define('IMAGE_BUTTON_BUY_NOW', 'Kosárba');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Cím cseréje');
define('IMAGE_BUTTON_CHECKOUT', 'Pénztárba');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Megrendelés megerősítése');
define('IMAGE_BUTTON_CONTINUE', 'Folytatás');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Vásárlás folytatása');
define('IMAGE_BUTTON_DELETE', 'Törlés');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Saját adatok szerkesztése');
define('IMAGE_BUTTON_HISTORY', 'Eddigi megrendelések');
define('IMAGE_BUTTON_LOGIN', 'Bejelentkezés');
define('IMAGE_BUTTON_IN_CART', 'A kosárba');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Értesítések');
define('IMAGE_BUTTON_QUICK_FIND', 'Gyorskeresés');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Értesítések törlése');
define('IMAGE_BUTTON_REVIEWS', 'Vélemények');
define('IMAGE_BUTTON_SEARCH', 'Keresés');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Vásárlási lehetőségek');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Mondd el egy barátodnak');
define('IMAGE_BUTTON_UPDATE', 'Frissítés');
define('IMAGE_BUTTON_UPDATE_CART', 'A kosár tartalmának frissítése');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Írja meg véleményét!');

define('SMALL_IMAGE_BUTTON_DELETE', 'Törlés');
define('SMALL_IMAGE_BUTTON_EDIT', 'Szerkesztés');
define('SMALL_IMAGE_BUTTON_VIEW', 'Részletek');

define('ICON_ARROW_RIGHT', 'tovább');
define('ICON_CART', 'A kosár');
define('ICON_ERROR', 'Hiba');
define('ICON_SUCCESS', 'Kész');
define('ICON_WARNING', 'Figyelem');

define('TEXT_GREETING_PERSONAL', 'Üdvözöljük a Webáruházban, kedves  <span class="greetUser">%s!</span> Szeretné látni, hogy milyen  <a href="%s"><u>új termékekkel</u></a> bővült a kínálatunk?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<strong>Ha Ön nem  %s, kérjük <a href="%s"><u>jelentkezzen be</u></a> a sajét jelszavával.</strong>');
define('TEXT_GREETING_GUEST', 'Üdvözöljük kedves <span class="greetUser">Vendégünk!</span><br /> <a href="%s"><u>Bejelentkezéshez kattintson ide</u></a>. <br />Ha még nincs jelszava <a href="%s"><u>itt regisztrálhatja magát.</u></a>');

define('TEXT_SORT_PRODUCTS', 'A termékek rendezése ');
define('TEXT_DESCENDINGLY', 'csökkenő sorrendben: ');
define('TEXT_ASCENDINGLY', 'növekvő sorrendben: ');
define('TEXT_BY', '');

define('TEXT_REVIEW_BY', 'írta %s');
define('TEXT_REVIEW_WORD_COUNT', '%s szó');
define('TEXT_REVIEW_RATING', 'Osztályzat: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Dátum: %s');
define('TEXT_NO_REVIEWS', 'Nincs vélemény a termékről.');

define('TEXT_NO_NEW_PRODUCTS', 'Sajnos nincsenek új termékek.');

define('TEXT_UNKNOWN_TAX_RATE', 'Ismeretlen adókulcs');

define('TEXT_REQUIRED', '<span class="errorText">Szükséges</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><strong><strong>TEP ERROR:</strong> Nem sikerült a levél küldése a megadott SMTP szerverrel. Ellenőrizze a beállításait.</strong></font>');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'A kártyához beírt lejárati dátum érvénytelen.<br />Kérlek ellenőrizd és írd be újra.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'A beírt kártyaszám érvénytelen.<br />Kérlek ellenőrizd és írd be újra.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'A beírt kártyaszám első négy száma: %s'."\n". 'Ha a szám jó, a kártyát nem tudjuk elfogadni.'."\n". 'Ha hibás, írd be újra a jót.');

// message for required inputs
define('FORM_REQUIRED_INPUT', '<span class="glyphicon glyphicon-asterisk form-control-feedback inputRequirement"></span>');
// search placeholder
define('TEXT_SEARCH_PLACEHOLDER', 'Keressen...');
// reviews
define('REVIEWS_TEXT_RATED', '%s átlag <cite title="%s">%s</cite> alapján');
define('REVIEWS_TEXT_AVERAGE', '%s visszajelzés alapán az értékelések átlaga %s');

// product notifications
define('PRODUCT_SUBSCRIBED', '%s hozzáadva az értesítési listájához');
define('PRODUCT_UNSUBSCRIBED', '%s eltávolítva az értesítési listáról');
define('PRODUCT_ADDED', '%s már a kosarában van');
define('PRODUCT_REMOVED', '%s eltávolítva a kosarából');



?>