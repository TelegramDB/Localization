# TelegramDB
**TelegramDB** è un servizio che ti consente di cercare canali, gruppi e i loro membri.

[![Membri](/stats/members.svg?hl=it)](/stats)
[![Chat](/stats/chats.svg?hl=it)](/stats)
[![Gruppi](/stats/groups.svg?hl=it)](/stats)
[![Utenti](/stats/users.svg?hl=it)](/stats)
[![Bot](/stats/bots.svg?hl=it)](/stats)

Tramite il nostro [bot](https://www.tgdb.org/bot) su Telegram è possibile cercare, sfruttando il nostro database, tutti i gruppi pubblici in cui è stato un utente.

Il bot funge anche da **motore di ricerca**, puoi cercare filtrando per gruppi e canali, e ottenere molti più risultati rispetto a una normale ricerca su Telegram.

## Perché TelegramDB?
Il nostro scopo è rendere più **semplice** e **immediato** l'accesso a tutte le informazioni utili presenti su Telegram.

## Come usare TelegramDB?
Tramite [tgdb_bot](https://www.tgdb.org/bot) puoi utilizzare il nostro servizio.

### 🆓 Funzioni gratuite
- **/search** permette di usare parole chiave per cercare gruppi e canali.
	Se invece vuoi filtrare solo gruppi o canali, puoi usare i corrispettivi comandi /group e /channel.
- **/resolve** permette di convertire l'id e l'username di un utente, gruppo o canale.

### ⭐️ Funzioni premium
- **/where** permette di ottenere una lista di gruppi in cui è stato un utente.
- **search avanzato**: Tramite l'utilizzo di crediti è possibile estendere le funzioni del comando /search e ottenere più risultati, ed esportarli in csv.
### Come utilizzare le funzioni premium?
Per poter usufruire delle funzioni premium, dovrai acquistare dei **crediti**.
La procedura d'acquisto sarà effettuata tramite il bot, usando il comando /credits.
È possibile pagare facilmente grazie al sistema integrato su Telegram.

Le ricerche premium, rispetto a quelle gratuite, presentano un maggior numero di risultati.

Le ricerche degli utenti, invece, hanno un prezzo base per essere eseguite, il costo è proporzionale al numero dei risultati ottenuti.

Visualizzerai sempre un'anteprima del costo e del numero dei risultati che otterrai prima di spendere i crediti.

#### 🔎 **search**
- Gratis: 20 risultati
- Prezzo base: 0 crediti
- Ogni 40 risultati: 1 credito

#### 🌍 **where**
- Gratis: Numero di gruppi in cui è presente un utente. (fino a 5 al giorno se non possiedi crediti)
- Prezzo base: 3 crediti
- Ogni 40 risultati: 1 credito


## Screenshot
![Canali](/static/media/screen/channel.webp){width=200}
![Comandi](/static/media/screen/commands.webp){width=200}
![Crediti](/static/media/screen/credits.webp){width=200}
![Gruppi](/static/media/screen/group.webp){width=200}
![Ricerca](/static/media/screen/search.webp){width=200}
![Ricerca pre](/static/media/screen/where_pre.webp){width=200}
![Ricerca link](/static/media/screen/where_link.webp){width=200}
![Ricerca completata](/static/media/screen/where_done.webp){width=200}

## Argomenti tecnici
### Soluzioni personalizzate
Per riuscire a essere sempre al passo con gli update mensili di Telegram, abbiamo creato un sistema per serializzare e supportare tutte le nuove funzionalità senza dover cambiare la struttura del database o aggiornare i dati.
### Crawler
Per tenere i dati sempre aggiornati e in costante aumento abbiamo dei crawler distruibiti alla ricerca di nuovi gruppi e canali.

## Come puoi contribuire al progetto
### Apri una discussione
Se hai qualche domanda o hai da proporci qualche idea su come migliorare il progetto, sentiti libero di aprire una discussione [qui](https://github.com/TelegramDB/TelegramDB/discussions) su GitHub.
### Partecipa alla nostra community su telegram
- Bot: [tgdb_bot](https://www.tgdb.org/bot)
- Canale News: [@tgdatabase](https://t.me/tgdatabase)
- Gruppo di supporto/discussione: [@tgdbchat](https://t.me/tgdbchat)
- Account di supporto: [@tgdb_support](https://t.me/tgdb_support) (se possibile, contattaci sul gruppo)
### Aiutaci nella localizzazione
Puoi aiutarci a tradurre queste linee guida, oppure a localizzare il bot e il sito nella tua lingua.
Per farlo, contattaci su Telegram, oppure apri una discussione.
### Segnalarci gruppi/canali non presenti nel database
Saremo felici di aggiungere canali e gruppi pubblici al nostro database, segnalandoceli ci aiuti a crescere e migliorare.


## Politiche sui contenuti (illegali/DMCA/GDPR)
**Vi ricordiamo che non siamo affiliati in nessun modo con Telegram** e di non contattare il loro supporto, in caso i dati siano presenti solo sulle nostre piattaforme.

I contenuti presenti sulle nostre piattaforme, sono ottenuti direttamente da Telegram, crawlando gruppi e canali __pubblici__ accessibili da chiunque.

Non applichiamo alcun tipo di filtro sui dati raccolti da Telegram, pertanto potrebbero essere di natura illegale, contenere incitamento all'odio e alla violenza o propaganda terroristica; è possibile anche che violino il diritto d'autore o la proprietà intellettuale.

Accettiamo inoltre l'eliminazione dei dati personali nel pieno rispetto del GDPR, in quanto i nostri server si trovano in territorio Europeo.

Per eliminare i contenuti ti consigliamo, come prima cosa, di controllare se sono ancora presenti su Telegram, in questo caso, procedete a contattare il loro supporto, in seguito all'eliminazione da parte di Telegram, procedete a contattarci.

Nel caso in cui Telegram non vi risponda, o per qualsiasi altro motivo sia necessario rimuovere i contenuti dalla nostra piattaforma, saremo a vostra disposizione per eliminarli.

### Come richiedere l'eliminazione
Inviate un'email a webmaster@telegramdb.org, specificando come oggetto "chat deletion request", fornendo l'id/username della chat e una breve spiegazione del motivo per cui la chat debba essere rimossa.

### Dati che possiamo raccogliere
Raccogliamo i dati minimi sulle transazioni finanziarie a scopo di convalida, rimborso e debug.

A volte possiamo raccogliere alcuni dati comportamentali e di interazione con i nostri servizi al solo scopo di migliorare le prestazioni tecniche e del prodotto.

Non vendiamo mai a terzi i dati personali delle persone e abbiamo anche rigorose politiche interne di monitoraggio dei log che ci impongono di giustificare il motivo dell'accesso.
