<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Feb 14 23:03:50 2013 -0500 Modified in v1.5.2 LaVale $
 */

define('MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE', 'Ritiro in Negozio');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION', 'Nessuna spedizione: ritira merce il Cliente in negozio');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_WAY', 'Nessuna spedizione: ritira la merce il Cliente');

// La riga che segue è per definire più sedi/metodi in base all'idioma. Viene utilizzato solo se il cliente ha selezionato una lingua diversa da quella predefinita del negozio.
// Il contenuto della define MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS dovrebbe essere lo stesso delle varie località inserite nelle impostazioni del modulo di spedizione da admin, ma con i nomi modificati.
// Formati accettati sono:
// "Località Uno, 5.00; Località Due, 3.50; Località Tre, 0.00"
// "Località Uno, Località Due, Località Tre"
// oppure lasciare vuoto se si vuole utilizzare lo stesso testo definito in Admin, indipendentemente dall'idioma.
// SUGGERIMENTO: Questa define in realtà dovrebbe essere lasciato vuoto per la lingua predefinita, altrimenti il settaggio in Admin non verrà mai usato.

define('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS', "");
