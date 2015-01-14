<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Bejelentkezés');
define('NAVBAR_TITLE_2', 'Elfelejtett jelszó');

define('HEADING_TITLE', 'Elfelejtettem a jelszavam !');

define('TEXT_MAIN', 'Ha elfelejtette a jelszavát, adja meg az e-mail címét és emailben elküldjük a további biztonsági tennivalókat jelszava megváltoztatásához.');

define('TEXT_PASSWORD_RESET_INITIATED', 'Tekintse meg az elküldött levelet. A leírás tartalmaz egy linket, mely 24 óráig, vagy addig él, amíg megváltoztatja a jelszavát.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Hiba: Ilyen e-mail cím nincs az adatbázisban, próbálja újra.');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Új jelszó');
define('EMAIL_PASSWORD_RESET_BODY', 'Új jeszót kértek erről a címről: ' . tep_get_ip_address() . '.' . "\n\n" . 'Kérem kövesse ezt a személyes linket jelszava biztonságos megváltoztatásához:' . "\n\n" . '%s' . "\n\n" . 'A link felhasználhatósága 24 órán belül automatikusan illetve jelszava megváltoztatása után azonnal megszűnik.' . "\n\n" . 'Amennyiben kérdése van keresse ügyfélszolgálatunkat emailben: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Hiba: A jelszó kérő linket már elküldtük. Kérem próbálja meg %s perc múlva.');
?>