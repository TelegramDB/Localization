<?php
return [
    "start" => "\u{1F44B} <i>Welcome to TelegramDB Search Bot.</i>
    
This bot allows you to find public channels and groups, and see what public chats a user is in, or has been in, using a constantly updated database <b>with 200+ million chats and 600+ million users!</b>

Use our inline queries to get user details from usernames and IDs.

\u{1F193} <b>Free commands:</b>
/resolve [id or username] - <code>Resolve a username or ID</code>
/search [name] - <code>Search for groups and channel</code>
/group [name] - <code>Search for groups</code>  
/channel [name] - <code>Search for channels</code>

\u{1F4B2} <b>Premium commands:</b>
/where [id or username] - <code>Find groups in which a user is present</code>
/credits - <code>Buy credits</code>

\u{2139} <b>Other commands:</b>
/faq - <code>Frequently Asked Questions</code>
/language - <code>Choose the language</code>
/referral - <code>Referral link</code>
/support - <code>Support chat</code>
/stats - <code>Show statistics</code>
/terms - <code>Terms and conditions</code>
/cancel - <code>Cancel current operation</code>

For any info or doubts join @tgdbchat",
    /*"help"  => "Use this bot to check which groups users are in.

Commands:
/credits - Buy credits
/where [id or username] - Find groups in which a user is present
/search [name] - Search for groups and channel
/group [name] - Search for groups
/channel [name] - Search for channels
/faq - Frequently Asked Questions
/terms - Terms and conditions
/support - Support chat
/cancel - Cancel current operation

For any info or doubts join @tgdbchat",*/
    "faq"   => "<b>How does it work?</b>
The bot queries a database containing <u>public</u> groups and users, crawled by TelegramDB.

<b>Do you really track all groups?</b>
No, tracking all groups would be impossible: we have only a part of the <u>public</u> groups on Telegram.

<b>How much data do you have?</b>
Check https://telegramdb.org/stats to see the latest data.

<b>How much does it cost?</b>
Before paying to see the results, the bot will show you how many results are there, and how much does it cost.

The base price for the /where command is <b>3 credits</b>.
In addition, every 40 results the cost increases by 1 credit.

Example:
100 results cost 5 credits
3 base price + 2 (100/40 = 2.5)

<b>How can I delete a chat from the bot results?</b>
Send an email to webmaster@telegramdb.org, with \"<code>chat deletion request</code>\" as the subject, provide the chat id/username, and a short explanation of why the chat must be removed.

<b>Please note that</b> the results can also include groups in which the user was present in the past, so it must be noted that a user may have been added to that group by another person without their approval.",

    "terms"                          => "Terms and Conditions",
    "support"                        => "Join @tgdbchat or write to @tgdb_support for support.",
    "block"                          => "Your account is temporarily blocked. To get unblocked, contact support with /support.",
    "flood warn"                     => "You are sending too many messages. Please wait a bit before sending more.",
    "where header"                   => "Results for ",
    "btn credits"                    => "%credits% %bonus% credits - %price%???",
    "btn pay crypto"                 => "Pay with cryptocurrencies",
    "you have x credits"             => "{0}You have no credits.|{1}You have %count% credit.|]1,Inf[You have %count% credits.",
    "pay crypto"                     => "If you need to pay with crypto, contact @tgdb_support (min 15???)",
    "send username for where"        => "Send username or id of whoever you want to search for:",
    "0 credits"                      => "You don't have enough credits to search.\nYou have 0 credits.\nBuy them with /credits",
    "not enough credits"             => "{0}You don't have enough credits to search.\nYou need %price% credits, but you have no credits.\nBuy them with /credits
|{1}You don't have enough credits to search.\nYou need %price% credits, but you only have %count% credit.\nBuy them with /credits
|]1,Inf[You don't have enough credits to search.\nYou need %price% credits, but you only have %count% credits.\nBuy them with /credits",
    "click to continue"              => "Click here to continue",
    "where results"                  => "{1}This search will return you one group where the user is/was.\n\nUser: %user_title% %user_id%\nSearch cost: %price%\nYour credits: %credits%|]1,Inf[This search will return you %count% groups where the user is/was.\n\nUser: %user_title% %user_id%\nSearch cost: %price%\nYour credits: %credits%",

    // commands
    "command help"                   => "Help message",
    "command credits"                => "Buy credits",
    "command where"                  => "Find groups in which a user is present",
    "command resolve"                => "Resolves a username or id",
    "command search"                 => "Search for groups and channel by name",
    "command group"                  => "Search for groups",
    "command channel"                => "Search for channels",
    "command bot"                    => "Search for bots",
    "command faq"                    => "Frequently asked questions",
    "command terms"                  => "Terms and conditions",
    "command support"                => "Support chat",
    "command stats"                  => "Show statistics",
    "command cancel"                 => "Cancel current operation",
    "command language"               => "Choose the language",
    "command referral"               => "Referral link",

    // credit transaction
    "transaction title"              => "%credits% TGDB credits",
    "transaction description"        => "Use these credits to search the database",
    "transaction success"            => "You have spent %credits_spend% credits on this search.\nYou have %credits_left% credits left.",
    // payments (eur)
    "payment in progress"            => "Payment in progress... Waiting for payment.",
    "payment cannot continue"        => "Payment cannot continue.",
    "payment success"                => "Payment successful.\nYou have received %credits% credits.",

    // errors
    "error no results"               => "There are no results for this search.",
    "error where resolve no results" => "The user you were looking for could not be found.",
    "error where no results"         => "Sorry, the search found no groups for this user.",
    "error search no results"        => "Sorry, your search returned no results.",

    "error where params"            => "Error in parameters",
    "error where input"             => "Error in input",
    "error where search yourself"   => "You cannot search for yourself.",
    "error where search only users" => "You can only search for users.",
    "error where invalid input"     => "Error, username or id invalid.\nRemember that you can only search for users.",

    "error invalid input"                   => "Error, username or id invalid",
    "error backend offline"                 => "Error, backend offline",
    "error user not found"                  => "Error, user not found",
    "error button invalid"                  => "Error, invalid button",
    "error button already press"            => "Error, button already pressed",
    "error button expired"                  => "Error, button expired",
    "error button user invalid"             => "Error, the button you pressed was not generated by you",
    "error transaction still in progress"   => "Error, operation still in progress, please wait for it to finish before doing other queries.\nIf the problem persists, please contact support via /support",
    "error cant use credits"                => "Error, unable to use credits, please try again later.\nIf the problem persists, please contact support via /support",
    "error showing results"                 => "There was an error showing the results, your credits were refunded.\nPlease, contact support via /support",
    "error showing results account blocked" => "There was an error showing the results, your credits were refunded.\nUnfortunately, this error has occurred too often and your account has been temporarily suspended.\nTo get unblocked, please contact support via /support",
    "error payment success no credits"      => "Payment successful.\nBut credits could not be added (%credits% credits).\nPlease, contact support with /support.",
    "error contact support"                 => "An error occurred.\nPlease, contact support with /support",
    "error try later"                       => "An error occurred.\nPlease, try again later",
    "error backend floodwait"               => "Error, backend is busy.\nPlease, try again later.",
    "error timeout"                         => "Error, the search took too long, the backend may be offline.\nPlease try again later.",


    "query already done"                        => "<b>You already did the same search a while ago.</b>\nAre you sure you want to continue?",


    // stats
    "hour ago"                                  => "hour ago",
    "hours ago"                                 => "hours ago",
    "minutes ago"                               => "minutes ago",
    "less than 1 minute"                        => "less than 1 minute ago",
    "stats"                                     => "<b>Last update:</b> <code>%time_str%</code>\n<b>Chats:</b> <code>%chat%</code>\n<b>Groups:</b> <code>%groups%</code>\n<b>Users:</b> <code>%user%</code>\n<b>Bots:</b> <code>%bot%</code>\n<b>User-Group associations:</b> <code>%members%</code>\n\nMore stats: https://www.telegramdb.org/stats",


    // inline
    "inline no input"                           => "No results!",
    "inline no input desc"                      => "Please, write me a username or id to get results.",
    "inline resolve no title"                   => "No title",
    "inline resolve title"                      => "%title%",
    "inline resolve desc"                       => "%id%",
    "inline resolve error title"                => "Error",
    "inline resolve error desc"                 => "Error, username or id invalid/not found.",
    "inline resolve error text"                 => "Error, username or id invalid/not found.",
    "try inline"                                => "Try me inline",


    // pay api
    "error pay_api offline"                     => "Error, unable to connect to the credit server, please try again later.",
    "error pay_api offline revert transactions" => "Error, results could not be shown, and credit refund failed, please contact support with /support",

    // format output
    "user"                                      => "User",
    "supergroup"                                => "SuperGroup",
    "basicgroup"                                => "BasicGroup",
    "channel"                                   => "Channel",
    "supergrouporchannel"                       => "SuperGroup or Channel",
    "group"                                     => "Group",
    "bot"                                       => "Bot",
    "type"                                      => "Type",
    "title"                                     => "Title",
    "username"                                  => "Username",
    "description"                               => "Description",
    "dc"                                        => "DC",

    "hidden forward" => "Unable to show info of the forwarded message, the user's privacy settings may prevent it.",

    "search header1"           => "<b>Search:</b> <code>%query%</code>\n",
    "search header2"           => "{0}No result.|{1}%count%%plus% result:|]1,Inf[%count%%plus% results:",
    "send username for search" => "Write me what you want to search.",

    // language
    "lang"        => "\u{1F1EC}\u{1F1E7} Choose your language\n\u{1F1EE}\u{1F1F9} Scegli la tua lingua\n\u{1F1FA}\u{1F1E6} ???????????????? ???????? ????????\n\u{1F1E8}\u{1F1F3} ??????????????????",

    "lang en"     => "\u{1F1EC}\u{1F1E7} English",
    "lang set en" => "Language changed to English.",

    "lang it"     => "\u{1F1EE}\u{1F1F9} Italiano",
    "lang set it" => "Lingua cambiata in Italiano.",

    "lang ua"     => "\u{1F1FA}\u{1F1E6} ????????????????????",
    "lang set ua" => "???????? ?????????????? ???? ????????????????????.",

    "lang cn"     => "\u{1F1E8}\u{1F1F3} ??????",
    "lang set cn" => "?????????????????????",
    // Add below the language you are translating as above



    "cancel empty" => "There is no active command to cancel.",
    "cancel type"  => "The %type% command has been cancelled.",

    "maintenance"                 => "This bot is currently in maintenance mode, this command is not available.\nPlease, try again later.",
    "payment blocked maintenance" => "This bot is currently in maintenance mode, payments are not available.\nPlease, try again later.",
    "answercb pay"                => "Sending invoice",
    "answercb pay maintenance"    => "Maintenance",
    "credits"                     => "credits",

    "inline maintenance"      => "Maintenance",
    "inline maintenance desc" => "Maintenance, command is not available.\nPlease, try again later.",

    "command pvt"     => "To use this command, use private chat.",
    "command btn pvt" => "Start chat",

    "command not available for chat" => "Command not available for those who write as a channel or as an anonymous admin.",

    "search more"            => "Show more results",
    "search pre"             => "This search will give you %n_results% results\n\nQuery: %query%\nSearch cost: %price%\nYour credits: %credits%",
    "search more no credits" => "To get more results you need credits.\nBuy them with /credits",

    "start invalid" => "Incorrect parameter",


    "ref_invalid"         => "The referral you are trying to use is invalid.",
    "ref_self"            => "You can't use your own referral link.",
    "ref_already_used"    => "You have already used a referral link.",
    "ref_promo_max_usage" => "This referral has already been used by too many people, however, you can get %credits% free credits, on your first purchase through this referral.",
    "ref_already_created" => "You have already created a referral link.",
    "ref_had_credits"     => "Having already used the bot, you cannot redeem this referral, but you can invite a friend with your referral, just do /referral and send them the link.",
    "ref_promo_finished"  => "Sorry, but the promo has ended, however, you can get %credits% free credits, on your first purchase through this referral.",
    "ref_promo_pay_ok"    => "You have successfully redeemed the referral, %credits% credits will be added to your first purchase.",
    "ref_lock"            => "You are using too many referrals, try again later.",

    "ref_ok_redeemed"     => "You redeemed the referral correctly, %credits% credits were added.",
    "ref_ok_used"         => "A user used your referral, %credits% credits were added to you.",
    "ref_ok_error_api"    => "The referral is valid, but the credits could not be added, try again later, if the error persists, contact support with /support",
    "ref_ok_generated"    => "Your referral has been generated, send it to your friends, and you will both receive %credits% credits when the invitee makes the first purchase.\n\nReferral link: https://t.me/%username%?start=%ref%",
    "ref_error_generated" => "Sorry, but you cannot generate invitation links if you have never made a purchase.",

];