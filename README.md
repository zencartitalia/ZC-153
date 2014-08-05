Zen Cart&reg; - L'arte dell'e-commerce
===============

Zen Cart&reg; è stata la prima applicazione web Open Source ad essere completamente certificata PA-DSS.

La versione 1.5.3 è stata sottoposta alla verifica per l'aggiornamento PA-DSS, ma sino a quando la validazione non sarà completata è possibile che ulteriori modifiche si rendano  necessarie. Così si è deciso di non tenere ulteriormente ferma la versione ma invece di porla in distribuzione in modo che la comunità possa beneficiare dei numerosi miglioramenti, correzioni di bug e maggiore sicurezza nello standard delle password.
Una nuova versione con un nuovo numero sarà distribuita non appena la certificazione sarà completata. 

Zen Cart&reg; è un software gratuito con supporto gratuito disponibile 24/7 da una community Zen-Cart® nel forum di supporto del sito a <http://www.zen-cart.it/forum/>

--------------------


Zen Cart&reg; v1.5.3
--------------------


Installazione
------------

L'installazione:

1. [Scarica Zen Cart&reg;](http://sourceforge.net/projects/zencart-italia/files)
2. Assicurarsi di verificare che l'hash MD5/SHA1 dello Zip corrisponda a quello postato pubblico.
  * I valori MD5/SHA1 per verificare lo zip di Sourceforge vengono visualizzati in [sito Zen Cart&reg;]  (http://www.zen-cart.it/) insieme alle [istruzioni su come verificare il file utilizzando i valori di hash]  (http://www.zen-cart.com/content.php?305).
3. Decomprimere il file zip scaricato
4. Tutto all'interno della cartella decompressa deve essere caricato nel server... 
   ad esempio in public_html o www o la cartella html (la cartella già presente sul vostro server web)
5. Nel browser, digitare l'indirizzo del tuo sito, come ad esempio: www.your_site.com (o se hai caricato in un altra cartella www.your_site.com/nomecartella)
6. Rinominare i file /includes/dist-configure.php e /admin/includes/dist-configure.php in "configure.php" e rendere i file scrivibili (in modo che il processo di installazione possa scriverne le informazioni di configurazione dopo che avrai risposto alle richieste nei vari passaggi).
7. Rendere anche le cartelle /cache e /logs scrivibili. (Verrà richiesto di rendere le cartelle scrivibili durante l'installazione) 
8. Seguire le istruzioni visualizzate nel browser per l'installazione. 

Questa è la versione abbreviata delle istruzioni di installazione!

For a MUCH more detailed set of installation instructions, see the [/docs/1.readme_installation.html](http://www.zen-cart.com/docs/1.readme_installation.html) file in your Zen Cart files.

Per istruzioni molto più dettagliata di installazione, vedere il file [/docs/1.readme_installation.html]  (http://www.zen-cart.com/docs/1.readme_installation.html) nel tuoi file Zen Cart.


# Procedura aggiornamento versione italiana #

 - - Il metodo per aggiornare uno Zen Cart versione ITA che invitiamo a seguire è - -

1. installare la nuova versione in una cartella "/-NUOVO"
2. copiare e riportare dati, file di lingua modificati, immagini ecc. fra i due store, "vecchio" e "nuovo".
3. esportare & importare fra i due database i clienti con indirizzi ed ordini;
4. effettuare un back-up preventivo del database e procedere con il bugfix A
5. da Strumenti > Installa patch SQL > eseguire la query "**bugfix_A.sql**" posta nella cartella
UPGRADE bugfix zone ITA v150 – **cartella da non caricare nello spazio web**!
6. Proseguire con tutta la parte del catalogo composta da categorie, articoli, attributi ecc;
comparando i due database sarà semplice vedere cosa c'è e cosa manca da trasferire.
7. verificare i dati / la sincronia fra i due store e testare tutto il nuovo ambiente.
8. sostituire i due store fra loro modificando dati e percorsi nei due file di configurazione e nel DB
(per il percorso della cache); Il vecchio spostandone i file entro una cartella /_OLD ed il nuovo
alzando i file dalla cartella "/-NUOVO" nella root o dove scelto.

**Nota**: per ottenere una perfetta sincronia dei dati dal punto 3 in poi sarà necessario **porre in manutenzione** lo store “vecchio” così da evitare la perdita di registrazioni / ordini, per il tempo necessario a concludere le operazioni dei restanti punti.
Se nel “vecchio” store sono (stati installati e sono) presenti moduli che hanno aggiunto voci alle tabelle di categoria, articoli ecc. detti moduli (aggiornati all'attuale versione) dovranno essere installati anche nella nuova 1.5 prima del trasferimento dei dati stessi così fra i due database da avere lo stesso numero di campi presenti e non ottenere errori.

*Per aggiornare la versione USA la procedura può essere differente e si rimanda alla documentazione allegata a quella distribuzione. La procedura indicata NON è comunque valida per aggiornamenti fra versioni linguistiche diverse.

# PROSSIMI PASSI #
Per **SICUREZZA** devi cambiare i permessi di scrittura, in sola lettura dei files configure.php posti in /admin/includes/ ed /includes/ prima di aprire il negozio al pubblico! Inoltre sarebbe opportuno rimuovere (invece che rinominare) la cartella /zc_install per evitare tentativi di re-installazione non autorizzati!

Dei segnali di **ATTENZIONE** saranno attivi fino a quando non saranno stati effettuati questi interventi.

## CONFIGURAZIONE ##
Con questa versione sono inserite nel negozio delle pagine di spiegazione passo passo, in ogni modo ti
invitiamo a leggere le **FAQ** - Domande Frequenti i **Manuali** e seguire il **Forum** di supporto al fine di configurare prima e predisporre dopo il tuo negozio nella maniera migliore e più veloce. Per domande, chiarimenti e supporto questo è il posto giusto, abbiamo un potente motore di ricerca per termini chiave, utilizzalo! E' molto importante che tu prenda visione della Documentazione posta nella cartella /docs presente nel tuo Sito.

## IMPORTANTE ##
Lo strumento più potente per la completa gestione e personalizzazione del TUO Sito è il **Developers Tool Kit**, posto nel Pannello di Amministrazione, in Strumenti. Sarà possibile usarlo per cercare quasi qualche cosa che potrà essere adattata o sostituita, in particolare il testo visualizzato sul Sito.
Per diventare esperti nella modifica o creazione di template, prendete visione di FAQ, articoli e manualistica presente nel Nostro Sito di supporto: [www.zen-cart.it](http://www.zen-cart.it).

## INFINE ##
In [www.zen-cart.com](http://www.zen-cart.com) oltre a trovare informazioni e supporto nel forum, vi è una sezione denominata Downloads. Al cui interno è posta una categoria 'Documentation', che contiene le ultime versioni di manuali e documentazione in Inglese per conoscere a fondo vari aspetti riguardanti funzionalità ed aspetti gestionali del tuo negozio.

Ulteriori informazioni e dettagli nelle F.A.Q. del Sito [www.zen-cart.it](http://www.zen-cart.com)

> Siamo felici che TU abbia scelto il sistema E-commerce Zen Cart. Ricorda che il Progetto fatto di questa distribuzione, il sito che la mantiene, la documentazione ed il forum di supporto vive grazie alla TUA DONAZIONE


PCI/PA-DSS Compliance
---------------------
__The [Implementation Guide](http://www.zen-cart.com/docs/implementation-guide-v153.pdf) should be followed for PCI Compliant implementation.__

Documentazione
-------------
Usando il browser apri il file [/docs/index.html](http://www.zen-cart.com/docs/index.html) pagina per i link alla documentazione e la [Guida di implementazione](http://www.zen-cart.com/docs/implementation-guide-v153.pdf).


Supporto
-------
Per assistenza gratuita, visitare il nostro sito di supporto: http://www.zen-cart.com/forum.php o http://www.zen-cart.it/forum/

Follow Us
---------
For news and updates about Zen Cart&reg;, follow us on [Twitter](http://twitter.com/zencart) and [Facebook](http://facebook.com/zencart)

Sign up for our free [Newsletter](http://visitor.constantcontact.com/d.jsp?m=1101879248585)

Subscribe to [Critical News Updates And Release Announcements](http://www.zen-cart.com/subscription.php?do=addsubscription&f=2)

&nbsp;  

*&copy;Copyright 2003-2014, Zen Cart&reg;. All rights reserved.*

