<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Nov 15 22:47:00 2012 -0500 Modified in v1.5.2 LaVale $
 */

define('HEADING_TITLE', 'Rispedisci Password');

define('TEXT_ADMIN_EMAIL', 'Indirizzo Email Admin: ');

define('TEXT_BUTTON_REQUEST_RESET', 'richiedi reset');
define('TEXT_BUTTON_LOGIN', 'login');
define('TEXT_BUTTON_CANCEL', 'cancella');

define('ERROR_WRONG_EMAIL', '<p>Inserito un indirizzo Email errato.</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>Attenzione!</p>');
define('MESSAGE_PASSWORD_SENT', '<p>Grazie. Se l\'indirizzo email inserito corrisponde a quello di un account amministratore del nostro database, allora verrà inviata una nuova password a quell\'indirizzo email.<br />Leggi attentamente quell\'email e poi premi "login" qui sotto per effettuare il login con la nuova password temporanea.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'La modifica da te chiesta');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Una nuova Password è stata chiesta da %s.' . "\n\n" . 'La tua nuova Password è:' . "\n\n   %s\n\nTi verrà chiesto di inserire una nuova password appena effettuato il login.\n\nQuesta password temporanea scade tra 24 ore.\n\n\n");