<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Adminisztrátorok');

define('TABLE_HEADING_ADMINISTRATORS', 'Adminisztrátorok');
define('TABLE_HEADING_HTPASSWD', 'Védve htpasswd-vel');
define('TABLE_HEADING_ACTION', 'Művelet');

define('TEXT_INFO_INSERT_INTRO', 'Írd be az új adminisztrátort és az adatait');
define('TEXT_INFO_EDIT_INTRO', 'Írd be a változásokat');
define('TEXT_INFO_DELETE_INTRO', 'Biztos törlöd ezt az adminisztrátort?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Új adminisztrátor');
define('TEXT_INFO_USERNAME', 'Felhasználói név:');
define('TEXT_INFO_NEW_PASSWORD', 'Új jelszó:');
define('TEXT_INFO_PASSWORD', 'Jelszó:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD', 'Védve htaccess/htpasswd');

define('ERROR_ADMINISTRATOR_EXISTS', 'HIBA! Már van ilyen admnisztrátor');

define('HTPASSWD_INFO', '<strong>Emelt szintű htaccess/htpasswd biztonsági védelem</strong><p>Engedélyezze a htaccess/htpasswd biztonsági réteget, és a kijelölt adminisztrátort és annak jelszavát automatikusan hozzáaddja a htpasswd fájlhoz  amikor frissíti a kijelölt adminisztrátor jelszavát, vagy új adminisztrátort hoz létre.</p><p><strong>Figyelem!</strong>, ha az emelt biztonsági védelmet jelentő réteget aktiválod és hosszab ideig nem tudsz belépni a webáruház adminisztrációs felületére, akkor hajtsd végre az alábbi változtatásokat, és keresd fel tárhelyszolgáltatód a htaccess/htpasswd emelt biztonsági védelem aktiválásához:</p><p><u><strong>1. Szerkeszd ezt a fájlt:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Távolítsd el belőle az alábbi sorokat ha léteznek:</p><p><i>%s</i></p><p><u><strong>2. Töröld a következő fájlt:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<strong>Emelt szintű htaccess/htpasswd biztonsági védelem</strong><p>A webáruház adminisztrációs felülete emelt szintű htaccess/htpasswd biztonsági védelemmel van ellátva.</p>');
define('HTPASSWD_PERMISSIONS', '<strong>Emelt szintű htaccess/htpasswd biztonsági védelem</strong><p>A webáruház adminisztrációs felülete NINCS ellátva htaccess/htpasswd emelt szintű biztonsági védelemmel!</p><p>A következő fájloknak írhatóaknak kell lenniük a htaccess/htpasswd biztonsági réteg aktiválásához:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Frissítsd ezt az oldalt miután beállítottad a fájlok helyes jogosoultságait (Chmod)</p>');
?>
