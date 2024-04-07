<?php
return [
    "start" => "\u{1F44B} <i>Bienvenue sur le bot de recherche de TelegramDB.</i>
    
Ce robot vous permet de trouver des canaux et des groupes publics et de voir dans quels chats publics un utilisateur est ou a été impliqué, en utilisant une <b>base de données</b> constamment mise à jour avec <b>plus de 250 millions de chats et plus de 900 millions d'utilisateurs!</b>

Utilisez nos requêtes en ligne pour obtenir des informations sur les utilisateurs à partir des noms d'utilisateur et des identifiants.   

\u{1F193} <b>Commandes gratuites:</b>
/resolve [id ou username] - <code>Résoudre un nom d'utilisateur ou un identifiant</code>
/search [name] - <code>Recherche de groupes et de chaînes</code>
/group [name] - <code>Recherche de groupes</code>  
/channel [name] - <code>Recherche de chaînes</code>
/bot [name] - <code>Recherche de bot</code>

\u{1F4B2} <b>Commandes Premium:</b>
/where [id or username] - <code>Rechercher les groupes dans lesquels un utilisateur est présent</code>
/members [id or username] - <code>Rechercher les membres d'un groupe</code>
/near [id or username] - <code>Recherche de groupes à proximité d'un utilisateur (utilise les groupes communs)</code>
/credits - <code>Acheter des crédits</code>

\u{2139} <b>Autres commandes:</b>
/faq - <code>Questions fréquemment posées</code>
/language - <code>Choisissez la langue</code>
/referral - <code>Lien de référence</code>
/support - <code>Chat d'assistance</code>
/stats - <code>Voir les statistiques</code>
/terms - <code>Termes et conditions</code>
/cancel - <code>Annuler l'opération en cours</code>

Pour toute information ou doute, rejoignez @tgdbchat",
    /*"help"  => "Utilisez ce bot pour vérifier les groupes auxquels appartiennent les utilisateurs..

Commandes:
/credits - Acheter des crédits
/where [id ou username] - Rechercher les groupes dans lesquels un utilisateur est présent
/search [name] - Recherche de groupes et de chaînes
/group [name] - Recherche des groupes
/channel [name] - Recherche de chaînes
/faq - Questions fréquemment posées
/terms - Conditions d'utilisation
/support - Chat d'assistance
/cancel - Annuler l'opération en cours

Pour toute information ou doute, rejoignez @tgdbchat"",*/
    "faq"   => "<b>Comment cela fonctionne-t-il?</b>
Le robot interroge une base de données contenant des groupes et des utilisateurs <u>publics</u>, explorée par TelegramDB.

<b>Suivez-vous vraiment tous les groupes?</b>
Non, il serait impossible de suivre tous les groupes: nous ne disposons que d'une partie des groupes <u>public</u> sur Telegram.

<b>De combien de données disposez-vous?</b>
Consultez le site https://telegramdb.org/stats pour obtenir les données les plus récentes.

<b>Comment fonctionne l'approche?</b>
It takes the list of all members of all groups of the searched user and assigns a score to each user.
The more groups a user appears in, the higher the score goes up.
If the group is small, the score has more value than in a large group.

<b>Quel est le coût?</b>
Avant de payer pour voir les résultats, le bot vous indiquera le nombre de résultats disponibles et le coût de l'opération.

Le prix de base de la commande /where est de <b>3 crédits</b>.
En outre, tous les 40 résultats, le coût augmente de 1 crédit.

Exemple:
100 résultats coûtent 5 crédits
3 prix de base + 2 (100/40 = 2,5)

Le prix de la commande /members est calculé avec la formule suivante: <code>3+0.6x^0.8</code>.
X est le nombre de résultats, arrondi à l'unité inférieure.

Exemple:
100 résultats coûtent 26 crédits

<b>Comment supprimer un chat des résultats du bot?</b>
Envoyez un courriel à webmaster@telegramdb.org, avec pour objet \"<code>demande de suppression de chat</code>\", indiquez l'identifiant et le nom d'utilisateur du chat, et expliquez brièvement pourquoi le chat doit être supprimé.

<b>Veuillez noter que</b> les résultats peuvent également inclure des groupes dans lesquels l'utilisateur était présent dans le passé. Il faut donc tenir compte du fait qu'un utilisateur peut avoir été ajouté à ce groupe par une autre personne sans son approbation.",

    "terms"                                 => "Conditions générales d'utilisation",
    "support"                               => "Rejoignez @tgdbchat ou écrivez à @tgdb_support pour obtenir de l'aide.",
    "block"                                 => "Votre compte est temporairement bloqué. Pour le débloquer, contactez le support avec /support.",
    "flood warn"                            => "Vous envoyez trop de messages. Veuillez attendre un peu avant d'en envoyer d'autres.",
    "where header"                          => "Résultats pour ",
    "btn credits"                           => "%credits% %bonus% crédits - %price%€",
    "btn pay crypto"                        => "Payer avec des crypto-monnaies",
    "you have x credits"                    => "{0}Vous n'avez pas de crédits.|{1}Vous avez %count% de crédits.|]1,Inf[Vous avez %count% de crédits.",
    "pay crypto"                            => "Si vous avez besoin de payer en crypto, contactez @tgdb_support (min 15€)",
    "send username for where"               => "Envoyez le nom d'utilisateur ou l'identifiant de la personne que vous souhaitez rechercher:",
    "0 credits"                             => "Vous n'avez pas assez de crédits pour effectuer une recherche.\nVous avez 0 crédits.\nAchetez-les avec /credits",
    "not enough credits"                    => "{Vous n'avez pas assez de crédits pour effectuer une recherche.\nVous avez besoin de %price% crédits, mais vous n'avez pas de crédits.\NAchetez-les avec /credits
        
|{1}Vous n'avez pas assez de crédits pour chercher.\nVous avez besoin de %price% de crédits, mais vous n'avez que %count% de crédits.\nAchetez-les avec /credits

|]1,Inf[Vous n'avez pas assez de crédits pour effectuer une recherche.\nVous avez besoin de %price% crédits, mais vous n'avez que %count% crédits.\nAchetez-les avec /credits",
    "click to continue"                     => "Cliquez ici pour continuer",
    "where results"                         => "{Cette recherche vous renverra un groupe où l'utilisateur a été.\n\nUtilisateur: %user_title% %user_id%\nCoût de la recherche: %price%\nVos crédits: %credits%|]1,Inf[Cette recherche vous renverra %count% groupes où l'utilisateur a été.\nUtilisateur: %user_title% %user_id%\nCoût de la recherche: %price%\nVos crédits: %credits%",

    // commands
    "command help"                          => "Message d'aide",
    "command credits"                       => "Acheter des crédits",
    "command where"                         => "Rechercher les groupes dans lesquels un utilisateur est présent",
    "command resolve"                       => "Résout un nom d'utilisateur ou un identifiant",
    "command search"                        => "Recherche de groupes et de canaux par nom",
    "command group"                         => "Recherche de groupes",
    "command channel"                       => "Recherche de chaînes",
    "command bot"                           => "Recherche de bots",
    "command faq"                           => "Questions fréquemment posées",
    "command terms"                         => "Conditions d'utilisation",
    "command support"                       => "Chat d'assistance",
    "command stats"                         => "Afficher les statistiques",
    "command cancel"                        => "Annuler l'opération en cours",
    "command language"                      => "Choisir la langue",
    "command referral"                      => "Lien de référence",
    "command members"                       => "Rechercher les membres d'un groupe",
    "command near"                          => "Trouver des utilisateurs à proximité d'un utilisateur",

    // credit transaction
    "transaction title"                     => "%credits% Crédits TGDB",
    "transaction description"               => "Utilisez les crédits suivants pour effectuer une recherche dans la base de données",
    "transaction success"                   => "Vous avez dépensé %credits_spend% crédits pour cette recherche.\nIl vous reste %credits_left% de crédits.",
    // payments (eur)
    "payment in progress"                   => "Paiement en cours... En attente de paiement.",
    "payment cannot continue"               => "Le paiement ne peut se poursuivre.",
    "payment success"                       => "Paiement réussi.\nVous avez reçu %credits% crédits.",

    // errors
    "error no results"                      => "Il n'y a pas de résultats pour cette recherche.",
    "error where resolve no results"        => "L'utilisateur que vous recherchiez n'a pas pu être trouvé",
    "error where no results"                => "Désolé, la recherche n'a trouvé aucun groupe pour cet utilisateur",
    "error search no results"               => "Désolé, votre recherche n'a donné aucun résultat",
    "error where params"                    => "Erreur dans les paramètres",
    "error where input"                     => "Erreur d'entrée",
    "error where search yourself"           => "Vous ne pouvez pas vous chercher vous-même.",
    "error where search only users"         => "Vous ne pouvez rechercher que des utilisateurs.",
    "error where invalid input"             => "Erreur, le nom d'utilisateur ou l'identifiant n'est pas valide.\nN'oubliez pas que vous ne pouvez rechercher que des utilisateurs.",
    "error invalid input"                   => "Erreur, le nom d'utilisateur ou l'identifiant n'est pas valide",
    "error backend offline"                 => "Erreur, backend hors ligne",
    "error user not found"                  => "Erreur, utilisateur non trouvé",
    "error button invalid"                  => "Erreur, bouton invalide",
    "error button already press"            => "Erreur, bouton déjà enfoncé",
    "error button expired"                  => "Erreur, le bouton a expiré",
    "error button user invalid"             => "Erreur, le bouton sur lequel vous avez appuyé n'a pas été généré par vous",
    "error transaction still in progress"   => "Erreur, l'opération est toujours en cours, veuillez attendre qu'elle se termine avant d'effectuer d'autres requêtes.n Si le problème persiste, veuillez contacter le support via /support",
    "error cant use credits"                => "Erreur, impossible d'utiliser les crédits, veuillez réessayer plus tard.n Si le problème persiste, veuillez contacter l'assistance via /support",
    "error showing results"                 => "Une erreur s'est produite lors de l'affichage des résultats, vos crédits ont été remboursés. Veuillez contacter le service d'assistance via /support",
    "error showing results account blocked" => "Une erreur s'est produite lors de l'affichage des résultats, vos crédits ont été remboursés. Malheureusement, cette erreur s'est produite trop souvent et votre compte a été temporairement suspendu. Pour être débloqué, veuillez contacter l'assistance via /support.",
    "error payment success no credits"      => "Paiement réussi.\NMais les crédits n'ont pas pu être ajoutés (%credits% credits).\NVeuillez contacter l'assistance avec /support.",
    "error contact support"                 => "Une erreur s'est produite. Veuillez contacter l'assistance avec /support",
    "error try later"                       => "Une erreur s'est produite. Veuillez réessayer plus tard.",
    "error backend floodwait"               => "Erreur, le backend est occupé.\nVeuillez réessayer plus tard.",
    "error timeout"                         => "Erreur, la recherche a pris trop de temps, le backend est peut-être hors ligne.\nVeuillez réessayer plus tard.",

    "query already done"                        => "<b>You already did the same search a while ago.</b>\nAre you sure you want to continue?",

    // stats
    "hour ago"                                  => "une heure",
    "hours ago"                                 => "quelques heures",
    "minutes ago"                               => "quelques minutes",
    "less than 1 minute"                        => "il y a moins d'une minute",
    "stats"                                     => "<b>Dernière mise à jour:</b><code>%time_str%</code>\n<b>Chats</b>:<code>%chat%</code>\n<b>Groupes</b> <code>%groups%</code>\n<b>Utilisateurs</b>: <code>%user%</code>\n<b>Bots</b>: <code>%bot%</code>\n<b>Associations de groupes d'utilisateurs:</b> <code>%members%</code>\n\nPlus de statistiques: https://www.telegramdb.org/stats",

    // inline
    "inline no input"                           => "Aucun résultat !",
    "inline no input desc"                      => "Veuillez m'indiquer un nom d'utilisateur ou un identifiant pour obtenir des résultats.",
    "inline resolve no title"                   => "Pas de titre",
    "inline resolve title"                      => "%title%",
    "inline resolve desc"                       => "%id%",
    "inline resolve error title"                => "Erreur",
    "inline resolve error desc"                 => "Erreur, le nom d'utilisateur ou l'identifiant n'est pas valide ou n'a pas été trouvé.",
    "inline resolve error text"                 => "Erreur, le nom d'utilisateur ou l'identifiant n'est pas valide ou n'a pas été trouvé.",
    "try inline"                                => "Essayez-moi en ligne",


    // pay api
    "error pay_api offline"                     => "Erreur, impossible de se connecter au serveur de crédit, veuillez réessayer plus tard.",
    "error pay_api offline revert transactions" => "Erreur, les résultats n'ont pas pu être affichés, et le remboursement du crédit a échoué, veuillez contacter le support avec /support",

    // format output
    "user"                                      => "User",
    "supergroup"                                => "SuperGroupe",
    "basicgroup"                                => "Groupe de base",
    "channel"                                   => "Chaîne",
    "supergrouporchannel"                       => "SuperGroupe ou Canal",
    "group"                                     => "Groupe",
    "bot"                                       => "Bot",
    "type"                                      => "Type",
    "title"                                     => "Titre",
    "username"                                  => "Nom d'utilisateur",
    "description"                               => "Description",
    "dc"                                        => "DC",
    "members"                                   => "Les membres",

    "hidden forward" => "Impossible d'afficher les informations du message transféré, les paramètres de confidentialité de l'utilisateur peuvent l'empêcher.",

    "search header1"           => "<b>Recherche:</b> <code>%query%</code>\n",
    "search header2"           => "{0}No result.|{1}%count%%plus% result:|]1,Inf[%count%%plus% results:",
    "send username for search" => "Écrivez-moi ce que vous voulez rechercher.",

    // language
    "lang"                     => "\u{1F1EC}\u{1F1E7} Choose your language\n\u{1F1EE}\u{1F1F9} Scegli la tua lingua\n\u{1F1FA}\u{1F1E6} Виберіть свою мову\n\u{1F1E8}\u{1F1F3} 选择你的语言\n\u{1F1EE}\u{1F1F7} زبان را انتخاب کنید\n\u{1F1F8}\u{1F1E6} اختر لغتك\n\u{1F1EB}\u{1F1F7} Choisissez votre langue",

    "lang en"     => "\u{1F1EC}\u{1F1E7} English",
    "lang set en" => "Language changed to English.",

    "lang it"     => "\u{1F1EE}\u{1F1F9} Italiano",
    "lang set it" => "Lingua cambiata in Italiano.",

    "lang uk"     => "\u{1F1FA}\u{1F1E6} Українська",
    "lang set uk" => "Мову змінено на українську.",

    "lang zh"     => "\u{1F1E8}\u{1F1F3} 中国",
    "lang set zh" => "语言改为中文。",

    "lang fa"     => "\u{1F1EE}\u{1F1F7} فارسی",
    "lang set fa" => "زبان به فارسی تغییر نمود.",

    "lang ar"     => "\u{1F1F8}\u{1F1E6} العربية",
    "lang set ar" => "تم تغيير اللغة إلى العربية.",

    "lang fr"     => "\u{1F1EB}\u{1F1F7} Français",
    "lang set fr" => "La langue a été changée en français.",

    // Add below the language you are translating as above

    "cancel empty" => "Il n'y a pas de commande active pour annuler.",
    "cancel type"  => "La commande %type% a été annulée.",

    "maintenance"                 => "Ce bot est actuellement en mode maintenance, cette commande n'est pas disponible.\NVeuillez réessayer plus tard.\nSi vous souhaitez être informé(e) de sa disponibilité, rejoignez notre chaîne:\NCOPY00",
    "payment blocked maintenance" => "Ce bot est actuellement en mode maintenance, les paiements ne sont pas disponibles.\NVeuillez réessayer plus tard.\nSi vous souhaitez être informé(e) de sa disponibilité, rejoignez notre chaîne:\NCOPY00",
    "answercb pay"                => "Envoi de la facture",
    "answercb pay maintenance"    => "Maintenance",
    "credits"                     => "crédits",

    "inline maintenance"      => "Maintenance",
    "inline maintenance desc" => "Maintenance, la commande n'est pas disponible.\nS'il vous plaît, réessayez plus tard.",

    "command pvt"     => "Pour utiliser cette commande, utilisez le chat privé.",
    "command btn pvt" => "Démarrer la discussion",

    "command not available for chat" => "Commande non disponible pour ceux qui écrivent en tant que canal ou en tant qu'administrateur anonyme.",

    "search more"            => "Afficher plus de résultats",
    "search pre"             => "Cette recherche vous donnera %n_results% results\n\nQuery: %query%\nCoût de la recherche: %price%\nVos crédits: %credits%",
    "search more no credits" => "Pour obtenir plus de résultats, vous avez besoin de crédits.\nAchetez-les avec /credits",

    "start invalid" => "Paramètre incorrect",

    "ref invalid"         => "La référence que vous essayez d'utiliser n'est pas valide.",
    "ref self"            => "Vous ne pouvez pas utiliser votre propre lien de parrainage.",
    "ref already used"    => "Vous avez déjà utilisé un lien de parrainage.",
    "ref promo max usage" => "Ce parrainage a déjà été utilisé par trop de personnes, cependant, vous pouvez obtenir %credits% de crédits gratuits, lors de votre premier achat par le biais de ce parrainage.",
    "ref already created" => "Vous avez déjà créé un lien de parrainage.",
    "ref had credits"     => "Si vous avez déjà utilisé le bot, vous ne pouvez pas échanger ce parrainage, mais vous pouvez inviter un ami avec votre parrainage, il suffit de faire /referral et de lui envoyer le lien.",
    "ref promo finished"  => "Désolé, mais la promotion est terminée, cependant, vous pouvez obtenir %credits% de crédits gratuits, sur votre premier achat grâce à ce parrainage.",
    "ref promo pay ok"    => "Vous avez échangé avec succès le parrainage, %credits% crédits seront ajoutés à votre premier achat.",
    "ref lock"            => "Vous utilisez trop de références, réessayez plus tard.",
    "ref voip"            => "Nous avons détecté que vous utilisiez un compte secondaire pour échanger le parrainage.",

    "ref ok redeemed"     => "Vous avez correctement échangé le parrainage, %credits% crédits ont été ajoutés.",
    "ref ok used"         => "Un utilisateur a utilisé votre référence, %credits% crédits vous ont été ajoutés.",
    "ref ok error api"    => "La référence est valide, mais les crédits n'ont pas pu être ajoutés, réessayez plus tard, si l'erreur persiste, contactez le support avec /support",
    "ref ok generated"    => "Votre parrainage a été généré, envoyez-le à vos amis et vous recevrez tous les deux %credits% crédits lorsque l'invité effectuera son premier achat.\n\nLien de référence: https://t.me/%username%?start=%ref%",
    "ref error generated" => "Désolé, mais vous ne pouvez pas générer de liens d'invitation si vous n'avez jamais effectué d'achat.",

    "temp not available" => "Cette commande n'est pas disponible pour le moment.\n\nSi vous souhaitez être informé de la date à laquelle il sera à nouveau disponible, rejoignez notre chaîne:\nhttps://t.me/tgdatabase",

    "search no free uses" => "Vous avez atteint la limite de recherche quotidienne. Contactez l'assistance avec /support pour plus d'informations ou réessayez demain.",

    "csv caption info"                        => "Vous pouvez ouvrir ce fichier en tant que texte, feuille de calcul ou l'importer dans Maltego avec Import → Importation d'un tableau exporté.",
    "send username for members"               => "Envoyez le nom d'utilisateur ou l'identifiant du groupe que vous souhaitez rechercher:",
    "members results"                         => "{Cette recherche vous renverra un membre du groupe.\nGroupe: %group_title% %group_id%\nCoût de la recherche: %price%\nVos crédits: %credits%|]1,Inf[Cette recherche vous renverra jusqu'à %count% des membres du groupe.\nGroupe: %group_title% %group_id%\nCoût maximum de la recherche: %price%\nVos crédits: %credits%",
    "error members search only public groups" => "Vous ne pouvez rechercher que des membres de groupes publics.",
    "error members search only groups"        => "Vous ne pouvez rechercher que des membres de groupes.",
    "error members no results"                => "Désolé, votre recherche n'a trouvé aucun membre pour ce groupe.",
    "floodwait members"                       => "Désolé, vous avez fait trop de demandes, veuillez réessayer plus tard.",
    "btn members"                             => "%members% membres - %price% crédits",

    "near no groups"                         => "Il n'y a pas assez de groupes pour utiliser cette commande.",
    "near time"                              => "Temps de chargement: ",
    "near results"                           => "Cette recherche permet de trouver des utilisateurs proches de l'utilisateur.\nLes utilisateurs voisins seront calculés en fonction du nombre de groupes dans lesquels il/elle se trouve/a été.\n\nUtilisateur: %user_title% %user_id%\nCoût de la recherche: %price%\nVos crédits: %credits%",
    "near results info"                      => "Le terme proche fait référence à une distance virtuelle entre les communautés Telegram, et non à la distance physique entre les utilisateurs.",
    "near wait"                              => "Attendez l'exécution de la commande, cela peut prendre quelques minutes...",
    "near not accurate"                      => "Peu de groupes ont été trouvés pour cet utilisateur, les résultats peuvent être inexacts !",
    "error near max commands"                => "Cette commande est utilisée par un trop grand nombre d'utilisateurs, réessayez dans quelques minutes.",
    "error near max commands from same user" => "Cette commande est limitée ; attendez qu'elle ait fini d'exécuter la précédente.",

    "command similar" => "Voulez-vous exécuter la commande %command%?",

    "footer where"   => "De quels groupes l'utilisateur est-il membre?",
    "footer near"    => "Qui sont les utilisateurs proches?",
    "footer members" => "Qui sont les membres?",
];
