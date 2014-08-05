#
# * Questo script SQL effettua l'aggiornamento del core della struttura del database di Zen Cart da v1.5.1 a v1.5.2
# *
# * @package Installer
# * @access private
# * @copyright Copyright 2005-2014 Zen Cart Italia Development Team
# * @copyright Portions Copyright 2003-2014 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @version GIT: $Id: Author: Spike00 30-07-2014 New in v1.5.3 $
#

############ IMPORTANT INSTRUCTIONS ###############
#
# * Zen Cart uses the zc_install/index.php program to do database upgrades
# * This SQL script is intended to be used by running zc_install
# * It is *not* recommended to simply run these statements manually via any other means
# * ie: not via phpMyAdmin or via the Install SQL Patch tool in Zen Cart admin
# * The zc_install program catches possible problems and also handles table-prefixes automatically
# *
# * To use the zc_install program to do your database upgrade:
# * a. Upload the NEWEST zc_install folder to your server
# * b. Surf to zc_install/index.php via your browser
# * c. On the System Inspection page, scroll to the bottom and click on Database Upgrade
# *    NOTE: do NOT click on the "Install" button, because that will erase your database.
# * d. On the Database Upgrade screen, you will be presented with a list of checkboxes for
# *    various Zen Cart versions, with the recommended upgrades already pre-selected.
# * e. Verify the checkboxes, then scroll down and enter your Zen Cart Admin username
# *    and password, and then click on the Upgrade button.
# * f. If any errors occur, you will be notified.  Some warnings can be ignored.
# * g. When done, you will be taken to the Finished page.
#
#####################################################

# Set store to Down-For-Maintenance mode.  Must reset manually via admin after upgrade is done.
#UPDATE configuration set configuration_value = 'true' where configuration_key = 'DOWN_FOR_MAINTENANCE';

# Clear out active customer sessions
TRUNCATE TABLE whos_online;
TRUNCATE TABLE db_cache;
TRUNCATE TABLE sessions;

ALTER TABLE sessions MODIFY COLUMN sesskey varchar(255) NOT NULL default '';
ALTER TABLE whos_online MODIFY COLUMN session_id varchar(255) NOT NULL default '';

#ISO Updates:
UPDATE countries SET countries_name = 'Libya' WHERE countries_iso_code_3 = 'LBY';
UPDATE countries SET countries_name = 'Palestine, State of' WHERE countries_iso_code_3 = 'PSE';
INSERT INTO countries (countries_id, countries_name, countries_iso_code_2, countries_iso_code_3, address_format_id) VALUES (246,'South Sudan','SS','SSD','1');

UPDATE configuration set configuration_group_id = 6 where configuration_key in ('PRODUCTS_OPTIONS_TYPE_SELECT', 'UPLOAD_PREFIX', 'TEXT_PREFIX');

UPDATE configuration SET configuration_description = 'Questo deve corrispondere alla cartella specificata nel file configure.php' WHERE configuration_key = 'SESSION_WRITE_DIRECTORY';

UPDATE configuration set configuration_title = 'Memorizza Page Parse Time', configuration_description = 'Memorizza (in un file di log) il tempo richiesto per restituire una pagina.' WHERE configuration_key = 'STORE_PAGE_PARSE_TIME';
UPDATE configuration set configuration_title = 'Log - Cartella di destinazione', configuration_description = 'Cartella e filename del log page parse time.' WHERE configuration_key = 'STORE_PAGE_PARSE_TIME_LOG';
UPDATE configuration set configuration_title = 'Log - Formato Data', configuration_description = 'Il formato della data nel Log.' WHERE configuration_key = 'STORE_PARSE_DATE_TIME_FORMAT';
UPDATE configuration set configuration_title = 'Visualizza Page Parse Time', configuration_description = 'Visualizza il Page Parse Time nella parte inferiore di ogni pagina.<br />Non &egrave; necessario memorizzare i tempi per visualizzarli nel Catalogo.' WHERE configuration_key = 'DISPLAY_PAGE_PARSE_TIME';
UPDATE configuration set configuration_title = 'Memorizza le query sql', configuration_description = 'Salva (log) le query al db su files contenuti nella cartella /logs/. ATTENZIONE, USARE CON CAUTELA. Può degradare seriamente le performance del sito e esaurire rapidamente lo spazio disponibile.<br><strong>Attivando questa impostazione si rende il sito NON CONFORME alle regole PCI DSS, invalidando così qualsiasi certificazione.' WHERE configuration_key = 'STORE_DB_TRANSACTIONS';

UPDATE configuration set configuration_title = 'Abilita invio e-mail in HTML?', configuration_description = 'Invia le e-mail in formato HTML se il ricevente ha acconsentito nelle sue preferenze.' WHERE configuration_key = 'EMAIL_USE_HTML';
UPDATE configuration set configuration_title = 'Formato Email Admin?', configuration_description = 'Per favore seleziona il formato delle email Admin extra (Nota: per selezionare HTML, deve essere attiva l\'opzione di invio mail in HTML).' WHERE configuration_key = 'ADMIN_EXTRA_EMAIL_FORMAT';

INSERT INTO address_format VALUES (7, '$firstname $lastname$cr$streets$cr$city $state $postcode$cr$country','$city $state / $country');
UPDATE countries set address_format_id = 7 where countries_iso_code_3 = 'AUS';
UPDATE countries set address_format_id = 5 where countries_iso_code_3 in ('BEL', 'NLD', 'SWE');
ALTER TABLE countries ADD status tinyint(1) DEFAULT '1';

ALTER TABLE paypal_payment_status_history MODIFY pending_reason varchar(32) default NULL;

ALTER TABLE sessions MODIFY sesskey varchar(255) NOT NULL default '';
ALTER TABLE whos_online MODIFY session_id varchar(255) NOT NULL default '';
ALTER TABLE admin_menus MODIFY menu_key VARCHAR(255) NOT NULL DEFAULT '';
ALTER TABLE admin_pages MODIFY page_key VARCHAR(255) NOT NULL DEFAULT '';
ALTER TABLE admin_pages MODIFY main_page VARCHAR(255) NOT NULL DEFAULT '';
ALTER TABLE admin_pages MODIFY page_params VARCHAR(255) NOT NULL DEFAULT '';
ALTER TABLE admin_pages MODIFY menu_key VARCHAR(255) NOT NULL DEFAULT '';
ALTER TABLE admin_profiles MODIFY profile_name VARCHAR(255) NOT NULL DEFAULT '';
ALTER TABLE admin_pages_to_profiles MODIFY page_key varchar(255) NOT NULL default '';

ALTER TABLE admin MODIFY admin_pass VARCHAR( 255 ) NOT NULL DEFAULT '';
ALTER TABLE admin MODIFY prev_pass1 VARCHAR( 255 ) NOT NULL DEFAULT '';
ALTER TABLE admin MODIFY prev_pass2 VARCHAR( 255 ) NOT NULL DEFAULT '';
ALTER TABLE admin MODIFY prev_pass3 VARCHAR( 255 ) NOT NULL DEFAULT '';
ALTER TABLE admin MODIFY reset_token VARCHAR( 255 ) NOT NULL DEFAULT '';
ALTER TABLE customers MODIFY customers_password VARCHAR( 255 ) NOT NULL DEFAULT '';

UPDATE configuration set configuration_description = 'Inserisci il tempo in secondi.<br />Massimo consentito &egrave; 900 in ossequio ai requisiti PCI.<br /> Default=900<br />Esempio: 900= 15 min <br /><br />Nota: Troppo pochi secondi possono dare come conseguenza problemi di timeout ad esempio durante l\'inserimento/modifica dei prodotti', use_function = '', set_function = '' where configuration_key = 'SESSION_TIMEOUT_ADMIN';
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('PA-DSS - Abilitare il timeout della sessione di admin?', 'PADSS_ADMIN_SESSION_TIMEOUT_ENFORCED', '1', 'La conformità alla certificazione PA-DSS prevede che le sessioni di login in admin scadano dopo 15 minuti di inattività. <strong>Se si rimuove il timeout, il sito diventa NON CONFORME alle regole PA-DSS, invalidando così la certificazione.</strong>', 1, 30, now(), now(), NULL, 'zen_cfg_select_drop_down(array(array(\'id\'=>\'0\', \'text\'=>\'Non-Compliant\'), array(\'id\'=>\'1\', \'text\'=>\'On\')),');
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('PA-DSS - Abilitare regole sulla efficacia delle password?', 'PADSS_PWD_EXPIRY_ENFORCED', '1', 'La conformità alla certificazione PA-DSS prevede che le password di admin debbano essere modificate ogni 90 giorni e che non sia possibile utilizzare le 4 precedenti password. <strong>Se si disabilitano queste regole, il sito diventa NON CONFORME alle regole PA-DSS, invalidando così la certificazione.</strong>', 1, 30, now(), now(), NULL, 'zen_cfg_select_drop_down(array(array(\'id\'=>\'0\', \'text\'=>\'Non-Compliant\'), array(\'id\'=>\'1\', \'text\'=>\'On\')),');
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('Mostrare, in admin, se il prodotto è linkato in altre categorie?', 'SHOW_CATEGORY_PRODUCTS_LINKED_STATUS', 'true', 'Mostrare, in admin, se il prodotto è linkato in altre categorie?', '1', '19', 'zen_cfg_select_option(array(\'true\', \'false\'), ', now());

#############

#### VERSION UPDATE STATEMENTS
## THE FOLLOWING 2 SECTIONS SHOULD BE THE "LAST" ITEMS IN THE FILE, so that if the upgrade fails prematurely, the version info is not updated.
##The following updates the version HISTORY to store the prior version info (Essentially "moves" the prior version info from the "project_version" to "project_version_history" table
#NEXT_X_ROWS_AS_ONE_COMMAND:3
INSERT INTO project_version_history (project_version_key, project_version_major, project_version_minor, project_version_patch, project_version_date_applied, project_version_comment)
SELECT project_version_key, project_version_major, project_version_minor, project_version_patch1 as project_version_patch, project_version_date_applied, project_version_comment
FROM project_version;

## Now set to new version
UPDATE project_version SET project_version_major='1', project_version_minor='5.3', project_version_patch1='', project_version_patch1_source='', project_version_patch2='', project_version_patch2_source='', project_version_comment='Version Update 1.5.1->1.5.3', project_version_date_applied=now() WHERE project_version_key = 'Zen-Cart Main';
UPDATE project_version SET project_version_major='1', project_version_minor='5.3', project_version_patch1='', project_version_patch1_source='', project_version_patch2='', project_version_patch2_source='', project_version_comment='Version Update 1.5.1->1.5.3', project_version_date_applied=now() WHERE project_version_key = 'Zen-Cart Database';

#####  END OF UPGRADE SCRIPT

