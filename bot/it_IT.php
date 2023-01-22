<?php
return [
    "start" => "\u{1F44B} Benvenuto su TelegramDB Search Bot.
    
Questo bot ti consente di cercare canali e gruppi pubblici, e di vedere in quali chat pubbliche si trova o è stato un utente, utilizzando un database costantemente aggiornato con <b>oltre 200 milioni di chat e oltre 600 milioni di utenti!</b>

Usa il bot in modalità inline per ottenere informazioni di utente tramite username o ID.

\u{1F193} <b>Comandi gratuiti:</b>
/resolve [id o username] - <code>Risolve un username o ID</code>
/search [nome] - <code>Cerca gruppi e canali</code>
/group [nome] - <code>Cerca gruppi</code>
/channel [nome] - <code>Cerca canali</code>

\u{1F4B2} <b>Comandi premium:</b>
/where [id o username] - <code>Cerca i gruppi di un utente</code>
/credits - <code>Compra crediti</code>

\u{2139} <b>Altri comandi:</b>
/faq - <code>Domande frequenti</code>
/language - <code>Scegli la lingua</code>
/support - <code>Chat di supporto</code>
/stats - <code>Mostra le statistiche</code>
/terms - <code>Termini e condizioni</code>
/cancel - <code>Annulla il comando</code>

Per qualsiasi dubbio o domanda, entra in @tgdbchat",
    /*"help" => "Questo bot ti consente di cercare canali e gruppi pubblici, e di vedere in quali chat pubbliche si trova o e' stato un utente, utilizzando un database costantemente aggiornato con oltre 150 milioni di chat e oltre 500 milioni di utenti!

Comandi:
/credits - Compra crediti
/where [id o username] - Cerca i gruppi di un utente
/search [nome] - Cerca gruppi e canali
/group [nome] - Cerca gruppi
/channel [nome] - Cerca canali
/faq - Domande frequenti
/terms - Termini e condizioni
/support - Link alla nostra chat
/cancel - Annulla il comando

Per qualsiasi dubbio o domanda, entra in @tgdbchat",*/
    "faq"   => "<b>Come funziona?</b>
Questo bot si appoggia a un database che contiene gruppi <u>pubblici</u> e utenti, crawlati da TelegramDB.

<b>Avete davvero tutti i gruppi?</b>
No, tenere traccia di tutti i gruppi di Telegram sarebbe impossibile: abbiamo solo una parte dei gruppi <u>pubblici</u> su Telegram.

<b>Quanti dati avete?</b>
Controlla https://telegramdb.org/stats per vedere gli ultimi dati.

<b>Quanto costa?</b>
Prima di pagare per vedere i risultati, il bot ti farà vedere quanti risultati ci sono e quanto costano.

Il prezzo base per il comando /where è di <b>3 crediti</b>.
Inoltre ogni 40 risultati, ti verrà a costare 1 credito in più.

Esempio:
100 risultati costano 5 crediti
3 prezzo base + 2 (100/40 = 2.5)

<b>Come posso richiedere l'eliminazione di una chat dal bot?</b>
Invia una email a webmaster@telegramdb.org, specificando come oggetto \"<code>chat deletion request</code>\", fornendo l'id/username della chat e una breve spiegazione del motivo per cui la chat debba essere rimossa.

<b>Tieni presente che</b> i risultati possono includere anche gruppi in cui l'utente era presente in passato, quindi ricorda che un utente potrebbe essere stato aggiunto a quel gruppo da un'altra persona senza la sua approvazione.",

    "terms"                          => "Termini e condizioni",
    "support"                        => "Unisciti a @tgdbchat o scrivi a @tgdb_support per il supporto.",
    "block"                          => "Il tuo account è stato temporaneamente bloccato. Per essere sbloccato, contatta il supporto con /support.",
    "flood warn"                     => "Stai mandando troppi messaggi. Si prega di attendere un po' prima di inviarne altri.",
    "where header"                   => "Risultati di ",
    "btn credits"                    => "%credits% %bonus% crediti - %price%€",
    "btn pay crypto"                 => "Paga con criptovalute",
    "you have x credits"             => "{0}Non hai crediti.|{1}Hai %count% credito.|]1,Inf[Hai %count% crediti.",
    "pay crypto"                     => "Se hai bisogno di pagare con le crypto, contatta @tgdb_support (min 15€)",
    "send username for where"        => "Manda l'username o l'id della persona che vuoi cercare:",
    "0 credits"                      => "Non hai abbastanza crediti per fare la ricerca.\nHai 0 crediti.\nPuoi comprarli con /credits",
    "not enough credits"             => "{0}Non hai abbastanza crediti per fare la ricerca.\nHai bisogno di %price% crediti, ma non hai crediti.\nPuoi comprarli con /credits
|{1}Non hai abbastanza crediti per fare la ricerca.\nHai bisogno di %price% crediti, ma hai solo %count% credito.\nPuoi comprarli con /credits
|]1,Inf[Non hai abbastanza crediti per fare la ricerca.\nHai bisogno di %price% crediti, ma hai solo %count% crediti.\nPuoi comprarli con /credits",
    "click to continue"              => "Clicca qui per confermare",
    "where results"                  => "{1}Questa ricerca ti restituirà un gruppo in cui è/è stato l'utente.\n\nUtente: %user_title% %user_id%\nCosto ricerca: %price%\nI tuoi crediti: %credits%|]1,Inf[Questa ricerca ti restituirà %count% gruppi in cui è/è stato l'utente.\n\nUtente: %user_title% %user_id%\nCosto ricerca: %price%\nI tuoi crediti: %credits%",

    // commands
    "command help"                   => "Messaggio di aiuto",
    "command credits"                => "Compra crediti",
    "command where"                  => "Cerca i gruppi di un utente",
    "command resolve"                => "Risolve un username o un id",
    "command search"                 => "Cerca gruppi e canali",
    "command group"                  => "Cerca gruppi",
    "command channel"                => "Cerca canali",
    "command bot"                    => "Cerca bot",
    "command faq"                    => "Domande frequenti",
    "command terms"                  => "Termini e condizioni",
    "command support"                => "Chat di supporto",
    "command stats"                  => "Mostra statistiche",
    "command cancel"                 => "Annulla il comando",
    "command language"               => "Scegli la lingua",
    "command referral"               => "Link di invito",

    // credit transaction
    "transaction title"              => "%credits% TGDB crediti",
    "transaction description"        => "Usa questi crediti per fare ricerche nel database",
    "transaction success"            => "Hai speso %credits_spend% crediti per questa ricerca.\nOra hai %credits_left% crediti rimasti.",
    // payments (eur)
    "payment in progress"            => "Pagamento in corso... Sto aspettando il pagamento.",
    "payment cannot continue"        => "Il pagamento non può continuare.",
    "payment success"                => "Pagamento eseguito con successo.\nTi sono stati aggiunti %credits% crediti.",

    // errors
    "error no results"               => "Non ci sono risultati per questa ricerca.",
    "error where resolve no results" => "Non è stato possibile trovare l'utente cercato.",
    "error where no results"         => "Spiacenti, la ricerca non ha trovato gruppi per questo utente.",
    "error search no results"        => "Spiacenti, la ricerca non ha dato risultati.",

    "error where params"            => "Error nei parametri",
    "error where input"             => "Error nel input",
    "error where search yourself"   => "Non puoi cercare te stesso.",
    "error where search only users" => "Puoi cercare solo utenti.",
    "error where invalid input"     => "Errore, username o id non valido.\nRicordati che puoi cercare solo utenti.",


    "error invalid input"                   => "Errore, username o id non valido",
    "error backend offline"                 => "Errore, backend offline.\nPer favore, contatta il supporto con /support",
    "error user not found"                  => "Errore, utente non trovato",
    "error button invalid"                  => "Errore, bottone non valido",
    "error button already press"            => "Errore, bottone già premuto",
    "error button expired"                  => "Errore, bottone scaduto",
    "error button user invalid"             => "Errore, il bottone che hai premuto non è stato generato da te",
    "error transaction still in progress"   => "Errore, operazione ancora in corso, per favore attendi che finisca prima di fare altre ricerche.\nSe il problema persiste, contattata il supporto con /support",
    "error cant use credits"                => "Errore, impossibile usare i crediti, riprova più tardi.\nSe il problema persiste, contattata il supporto con /support",
    "error showing results"                 => "C'è stato un errore nel mostrare i risultati, I crediti ti sono stati rimborsati.\nPer favore, contatta il supporto con /support",
    "error showing results account blocked" => "C'è stato un errore nel mostrare i risultati, I crediti ti sono stati rimborsati.\nPurtroppo questo errore è successo troppe volte e il tuo account è stato temporaneamente bloccato.\nPer essere sbloccato, contatta il supporto con /support",
    "error payment success no credits"      => "Pagamento eseguito con successo.\nMa i crediti non sono stati aggiunti (%credits% crediti).\nPer favore, contatta il supporto con /support",
    "error contact support"                 => "C'è stato un errore.\nPer favore, contatta il supporto con /support",
    "error try later"                       => "C'è stato un errore.\nPer favore, riprova più tardi",
    "error backend floodwait"               => "Errore, il backend è occupato.\nPer favore, riprova più tardi.",
    "error timeout"                         => "Errore, la ricerca ha impiegato troppo tempo, il backend potrebbe essere offline.\nRiprova più tardi.",


    "query already done"                        => "<b>Hai già fatto la stessa ricerca poco tempo fa.</b>\nSei sicuro di voler proseguire?",


    // stats
    "hour ago"                                  => "ora fa",
    "hours ago"                                 => "ore fa",
    "minutes ago"                               => "minuti fa",
    "less than 1 minute"                        => "meno di 1 minuto fa",
    "stats"                                     => "<b>Ultimo aggiornamento:</b> <code>%time_str%</code>\n<b>Chat:</b> <code>%chat%</code>\n<b>Gruppi:</b> <code>%groups%</code>\n<b>Utenti:</b> <code>%user%</code>\n<b>Bot:</b> <code>%bot%</code>\n<b>Associazioni utente-gruppo:</b> <code>%members%</code>\n\nPiù statistiche: https://www.telegramdb.org/stats",


    // inline
    "inline no input"                           => "Nessun risultato!",
    "inline no input desc"                      => "Scrivi un username o id per ottenere risultati.",
    "inline resolve no title"                   => "Nessun nome",
    "inline resolve title"                      => "%title%",
    "inline resolve desc"                       => "%id%",
    "inline resolve error title"                => "Errore",
    "inline resolve error desc"                 => "Errore, username o id non validi/non trovati.",
    "inline resolve error text"                 => "Errore, username o id non validi/non trovati.",
    "try inline"                                => "Provami inline",


    // pay api
    "error pay_api offline"                     => "Errore, impossibile connettersi al server dei crediti, riprova più tardi.",
    "error pay_api offline revert transactions" => "Errore, non è stato possibile mostrare i risultati, ed è fallito il rimborso dei crediti, contatta il supporto con /support",

    // format output
    "user"                                      => "Utente",
    "supergroup"                                => "SuperGruppo",
    "basicgroup"                                => "GruppoBasic",
    "channel"                                   => "Canale",
    "supergrouporchannel"                       => "SuperGruppo o Canale",
    "group"                                     => "Gruppo",
    "bot"                                       => "Bot",
    "type"                                      => "Tipo",
    "title"                                     => "Titolo",
    "username"                                  => "Username",
    "description"                               => "Descrizione",
    "dc"                                        => "DC",

    "hidden forward" => "Impossibile mostrare le informazioni del messaggio inoltrato, le impostazioni della privacy del utente potrebbero impedirlo.",

    "search header1"           => "<b>Ricerca:</b> <code>%query%</code>\n",
    "search header2"           => "{0}Nessun risultato.|{1}%count%%plus% risultato:|]1,Inf[%count%%plus% risultati:",
    "send username for search" => "Scrivimi quello che vuoi cercare.",

    // language
    "lang"        => "\u{1F1EC}\u{1F1E7} Choose your language\n\u{1F1EE}\u{1F1F9} Scegli la tua lingua\n\u{1F1FA}\u{1F1E6} Виберіть свою мову\n\u{1F1E8}\u{1F1F3} 选择你的语言",

    "lang en"     => "\u{1F1EC}\u{1F1E7} English",
    "lang set en" => "Language changed to English.",

    "lang it"     => "\u{1F1EE}\u{1F1F9} Italiano",
    "lang set it" => "Lingua cambiata in Italiano.",

    "lang ua"     => "\u{1F1FA}\u{1F1E6} Українська",
    "lang set ua" => "Мову змінено на українську.",

    "lang cn"     => "\u{1F1E8}\u{1F1F3} 中国",
    "lang set cn" => "语言改为中文。",
    // Add below the language you are translating as above



    "cancel empty" => "Non c'è alcun comando attivo da annullare.",
    "cancel type"  => "Il comando %type% è stato annullato.",

    "maintenance"                 => "Il bot è in manutenzione, questo comando non è disponibile.\nRiprova più tardi.",
    "payment blocked maintenance" => "Il bot è in manutenzione, i pagamenti non sono disponibili.\nRiprova più tardi.",
    "answercb pay"                => "Invio fattura",
    "answercb pay maintenance"    => "Manutenzione",
    "credits"                     => "crediti",

    "inline maintenance"      => "Manutenzione",
    "inline maintenance desc" => "Manutenzione, comando non è disponibile.\nRiprova più tardi.",

    "command pvt"     => "Per usare questo comando, avviami in chat privata.",
    "command btn pvt" => "Avvia chat",

    "command not available for chat" => "Comando non disponibile per chi scrive come canale o come admin anonimo.",

    "search more"            => "Mostra più risultati",
    "search pre"             => "Questa ricerca ti darà %n_results% risultati\n\nQuery: %query%\nCosto ricerca: %price%\nI tuoi crediti: %credits%",
    "search more no credits" => "Per avere più risultati hai bisogno di crediti.\nPer comprarli fai /credits",

    "start invalid" => "Parametro non corretto",


    "ref_invalid"         => "Il referral che stai provando a usare non è valido.",
    "ref_self"            => "Non puoi usare il tuo stesso referral.",
    "ref_already_used"    => "Hai già utilizzato un referral, non puoi usarne altri.",
    "ref_promo_max_usage" => "Questo referral è già stato usato da troppe persone, tuttavia, potrai ottenere %credits% crediti gratuiti, sul tuo primo acquisto grazie a questo referral.",
    "ref_already_created" => "Hai già creato un tuo referral, non puoi riscattarne altri.",
    "ref_had_credits"     => "Avendo già usato il bot, non puoi riscattare questo referral, ma puoi invitare un amico con il tuo referral, ti basterà fare /referral e inviargli il link.",
    "ref_promo_finished"  => "Siamo spiacenti, ma la promo è terminata, tuttavia, potrai ottenere %credits% crediti gratuiti, sul tuo primo acquisto grazie a questo referral.",
    "ref_promo_pay_ok"    => "Hai riscattato correttamente il referral, al tuo primo acquisto ti verranno aggiunti %credits% crediti.",
    "ref_lock"            => "Stai usando troppi referral, riprova più tardi.",

    "ref_ok_redeemed"     => "Hai riscattato correttamente il referral, ti sono stati aggiunti %credits% crediti.",
    "ref_ok_used"         => "Un utente ha usato il tuo referral, ti sono stati aggiunti %credits% crediti.",
    "ref_ok_error_api"    => "Il referral è valido, ma non è stato possibile aggiungere i crediti, riprova più tardi, se l'errore persiste, contatta il supporto con /support",
    "ref_ok_generated"    => "Il tuo referral è stato generato, invialo ai tuoi amici, e riceverete entrambi %credits% crediti quando l'invitato effettuerà il primo acquisto.\n\nLink di invito: https://t.me/%username%?start=%ref%",
    "ref_error_generated" => "Mi dispiace, ma non puoi generare link di invito se non hai mai effettuato un acquisto.",
];
