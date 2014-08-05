<?php
/**
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Mon Jul 1 14:52:11 2013 -0400 Modified in v1.5.2 $
 */
 
  define('HEADING_TITLE', 'Developers Tool Kit');
  define('TABLE_CONFIGURATION_TABLE', 'Vedi definizioni COSTANTI');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Eseguito</strong> aggiornamento per Products Price Sorter');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Errore:</strong> Non sono state rilevate Chiavi di Configurazione corrispondenti ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Errore:</strong> Non sono stati inseriti testi o Chiavi di Configurazione da ricercare ... Ricerca chiusa');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Aggiorna TUTTI i Products Price Sorter</strong><br />per poter elencare per prezzi impostati: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Cerca COSTANTE o defines File di Lingua</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Chiave o nome:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTE:</strong> Le COSTANTI sono scritte in maiuscolo.<br />Ricerche di File di lingua, funzioni, classi, ecc. vengono eseguite quando non &egrave; stato trovato niente nelle tabelle del database, se selezionati da men&ugrave; a discesa.');

  define('TABLE_TITLE_KEY', '<strong>Chiave:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titolo:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Descrizione:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Gruppo:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valore:</strong>');

  define('TEXT_LOOKUP_NONE', 'Nessuno');
  define('TEXT_INFO_SEARCHING', 'Ricerca in corso ');
  define('TEXT_INFO_FILES_FOR', ' file ... per: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Risultati trovati: ');

  define('TEXT_INFO_FILENAME', 'FILENAME: ');
  
  define('TEXT_LANGUAGE_LOOKUPS', 'Ricerche File di Lingua:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Tutti i file di lingua per ' . strtoupper($_SESSION['language']) . ' - Catalogo/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Tutti i principali file di lingua - Catalogo (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'All Current Selected Language Files - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Tutti i principali file di lingua - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'All Current Selected Language Files - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'All Current Selected Language files - Catalogo/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Ricerca Funzioni o parole all\'interno dei files delle Funzioni</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Ricerche File della Funzione:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Tutti i files delle Funzioni - Catalogo/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Tutti i files delle Funzioni - Catalogo');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Tutti i files delle Funzioni - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Ricerca Classi o parole all\'interno dei files delle Classi</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Ricerche File delle Classi:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Tutti i files delle Classi - Catalogo/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Tutti i files delle Classi files - Catalogo');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Tutti i files delle Classi - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Ricerca parole del Template</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Ricerche File del Template:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Tutti i files del Template - /templates /sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Tutti i files del Template - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Tutti i files del Template - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Tutti i files del Template - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Ricerca in Tutti i Files</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Ricerche in Tutti i Files:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Tutti i Files - Catalogo/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Tutti i Files - Catalogo');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Tutti i Files - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Nessuna modifica disponibile');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' or, HIDDEN');
  define('TEXT_SEARCH_ALL_FILES', 'Trova TUTTI file per: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Cerca nelle tabelle database di configurazione per: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Tipo File');
  define('TEXT_ALL_FILES_LOOKUP_PHP', 'solo .php');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php e .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', 'solo .css');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html e .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', 'solo .js');

  define('TEXT_CASE_SENSITIVE', 'Case Sensitive?');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Ricerca nei Settaggi/Chiavi di Configurazione</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Frase da cercare:</strong> (Cercher&agrave; nomi e descrizioni dei settaggi di configurazione e anche le configuration_keys in caso di corrispondenza esatta)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Sezione');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Gruppo');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Titolo');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Descrizione');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Valore');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Nome Chiave');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Modifica');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Nessuna chiave di configurazione trovata.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'chiave(i) di configurazione trovata(e).');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Inserire termini da cercare nelle impostazioni');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Cerca');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Cerca (ordinato per chiave)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Vedi Tutti');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Resetta');

