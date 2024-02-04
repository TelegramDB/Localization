<?php return [

    "start" => "\u{1F44B} Ласкаво просимо до ТелеграмDB Search Bot.

Цей бот дозволяє вам шукати публічні канали та групи, а також переглядати, в яких публічних чатах знаходиться або був користувач, використовуючи базу даних, яка постійно оновлюється з <b>більш ніж 250 мільйонами чатів і більш ніж 900 мільйонами користувачів!</b>

Використовуйте наші вбудовані запити, щоб отримати деталі користувача з іменами користувачів та ID.

\u{1F193} <b>Безкоштовне управління:</b>
/resolve [ID або ім'я] - <code>Розв'язати ім'я користувача або ID</code>
/search [ім'я] - <code>Пошук груп та каналів</code>
/group [ім'я] - <code>Пошук груп</code>
/channel [ім'я] - <code>Пошук каналів</code>
/bot [ім'я] - <code>Пошук ботів</code>

\u{1F4B2} <b>Преміум управління:</b>
/where [ID або ім'я] - <code>Пошук груп користувача</code>
/member [ID або ім'я] - <code>Асоціації груп користувачів</code>
/near [ID або ім'я] - <code>Пошук груп навколо користувача (використовуйте спільні групи)</code>
/credits - <code>Купити кредити</code>

\u{2139} <b>Інші команди:</b>
/faq - <code>Часті запитання</code>
/language - <code>Виберіть мову</code>
/referral - <code>Посилання запрошення</code>
/support - <code>Чат підтримки</code>
/stats - <code>Показати статистику</code>
/terms - <code>Умови та положення</code>
/cancel - <code>Скасувати команду</code>

Для будь-яких сумнівів чи питань, ввійдіть в @tgdbchat",
    "faq"   => "<b>Як це працює?</b>
Цей бот базується на базі даних, яка містить <u>публічні</u> групи та користувачів, зібрані з TelegramDB.

<b>Чи маєте ви дійсно всі групи?</b>
Ні, відстежувати всі групи Telegram було б неможливо: у нас тільки частина груп <u>публічних</u> на Telegram.

<b>Скільки даних у вас є?</b>
Перевірте https://telegramdb.org/stats, щоб побачити останні дані.

<b>Як працює near?</b>
Він бере список усіх членів усіх груп користувача, якого ви шукаєте, і присвоює оцінку кожному користувачеві.
Чим більше груп є у користувача, тим вищий бал він отримує.
Якщо група невелика, оцінка має більше значення, ніж у великій групі.

<b>Скільки коштує where? </b>
Перед тим, як сплатити за перегляд результатів, бот покаже вам, скільки там результатів і скільки це коштує.

Базова ціна для команди /where становить <b>3 кредити</b>.
Крім того, за кожні 40 результатів вам додатково буде коштувати 1 кредит.

Приклад:
100 результатів коштують 5 кредитів
3 базова ціна + 2 (100/40 = 2.5)

Ціна для команди /members обчислюється за такою формулою: <code>3+0,6x^0,8</code>.
X – кількість результатів, округлена в меншу сторону.

приклад:
100 досягнень коштують 26 кредитів

<b>Як мені можна запросити видалення чату з бота?</b>
Надішліть електронну пошту на webmaster@telegramdb.org, вказавши як тему \"<code>chat deletion request</code>\", надаючи ID/ім'я користувача чату та короткий опис причини, чому чат повинен бути видаленим.

<b>Майте на увазі, що</b> результати можуть також включати групи, в яких користувач був присутнім раніше, тому запам'ятайте, що користувач може бути доданий до цієї групи іншою особою без його згоди.",

    "terms"                                 => "Умови та Положення",
    "support"                               => "Приєднуйтеся до @tgdbchat або напишіть @tgdb_support для підтримки.",
    "block"                                 => "Ваш аккаунт був тимчасово заблокований. Щоб бути розблокованим, зв'яжіться з підтримкою за допомогою /support.",
    "flood warn"                            => "Ви надсилаєте занадто багато повідомлень. Будь ласка, зачекайте кілька хвилин, перш ніж надсилати ще.",
    "where header"                          => "Результати ",
    "btn credits"                           => "%credits% %bonus% кредити - %price%€",
    "btn pay crypto"                        => "Розраховуйтеся криптовалютами",
    "you have x credits"                    => "{0}У вас немає кредитів.|{1}У вас %count% кредит.|]1,Inf[У вас %count% кредитів.",
    "pay crypto"                            => "Якщо вам потрібно заплатити криптовалютою, зв'яжіться з @tgdb_support (мінімум 15€)",
    "send username for where"               => "Відправте ім'я користувача або ID людини, яку ви хочете знайти:",
    "0 credits"                             => "У вас недостатньо кредитів для виконання пошуку.\nУ вас 0 кредитів.\nВи можете купити їх за допомогою /credits",
    "not enough credits"                    => "{0}У вас недостатньо кредитів для виконання пошуку.\nВам потрібно %price% кредитів, але у вас їх немає.\nВи можете купити їх за допомогою /credits
|{1}У вас недостатньо кредитів для виконання пошуку.\nВам потрібно %price% кредитів, але у вас тільки %count% кредит.\nВи можете купити їх за допомогою /credits
|]1,Inf[У вас недостатньо кредитів для виконання пошуку.\nВам потрібно %price% кредитів, але у вас тільки %count% кредитів.\nВи можете купити їх за допомогою /credits",
    "click to continue"                     => "Натисніть тут для підтвердження",
    "where results"                         => "{1}Цей пошук поверне вам групу, де знаходиться/знаходився користувач.\n\nКористувач: %user_title% %user_id%\nВартість пошуку: %price%\nВаші кредити: %credits%|]1,Inf[Цей пошук поверне вам %count% груп, де знаходиться/знаходився користувач.\n\nКористувач: %user_title% %user_id%\nВартість пошуку: %price%\nВаші кредити: %credits%",

    // commands
    "command help"                          => "Повідомлення допомоги",
    "command credits"                       => "Купити кредити",
    "command where"                         => "Пошук груп користувача",
    "command resolve"                       => "Розв'язати ім'я користувача або ID",
    "command search"                        => "Пошук груп та каналів",
    "command group"                         => "Пошук груп",
    "command channel"                       => "Пошук каналів",
    "command bot"                           => "Пошук ботів",
    "command faq"                           => "Часті питання",
    "command terms"                         => "Умови та Положення",
    "command support"                       => "Чат підтримки",
    "command stats"                         => "Показати статистику",
    "command cancel"                        => "Скасувати команду",
    "command language"                      => "Вибрати мову",
    "command referral"                      => "Посилання запрошення",
    "command members"                       => "Асоціації груп користувачів",
    "command near"                          => "Пошук груп навколо користувача",

    // credit transaction
    "transaction title"                     => "%credits% TGDB кредити",
    "transaction description"               => "Використовуйте ці кредити для пошуку в базі даних",
    "transaction success"                   => "Ви витратили %credits_spend% кредитів на цей пошук.\nЗараз у вас залишилося %credits_left% кредитів.",
    // payments (eur)
    "payment in progress"                   => "Оплата в процесі... Я чекаю на оплату.",
    "payment cannot continue"               => "Оплата не може продовжуватися.",
    "payment success"                       => "Оплата успішно виконана.\nВам було додано %credits% кредитів.",

    // errors
    "error no results"                      => "Немає результатів для цього пошуку.",
    "error where resolve no results"        => "Не вдалося знайти шуканого користувача.",
    "error where no results"                => "Вибачте, пошук не знайшов жодної групи для цього користувача.",
    "error search no results"               => "На жаль, пошук не дав результатів.",
    "error where params"                    => "Помилка в параметрах",
    "error where input"                     => "Помилка в вводі",
    "error where search yourself"           => "Ви не можете шукати себе.",
    "error where search only users"         => "Ви можете шукати тільки користувачів.",
    "error where invalid input"             => "Помилка, недійсне ім'я користувача або ID.\nПам'ятайте, що ви можете шукати тільки користувачів.",
    "error invalid input"                   => "Помилка, недійсне ім'я користувача або ID",
    "error backend offline"                 => "Помилка, backend offline.\nБудь ласка, зв'яжіться з підтримкою за допомогою /support",
    "error user not found"                  => "Помилка, користувач не знайдено",
    "error button invalid"                  => "Помилка, недійсна кнопка",
    "error button already press"            => "Помилка, кнопка вже натиснута",
    "error button expired"                  => "Помилка, термін дії кнопки закінчився",
    "error button user invalid"             => "Помилка, кнопка, яку ви натиснули, не була створена вами",
    "error transaction still in progress"   => "Помилка, операція все ще виконується, будь ласка, зачекайте доки вона завершиться перед тим, як здійснювати інші пошуки.\nЯкщо проблема не зникне, зв'яжіться з підтримкою за допомогою /support",
    "error cant use credits"                => "Помилка, неможливо використати кредити, спробуйте пізніше.\nЯкщо проблема не зникне, зв'яжіться з підтримкою за допомогою /support",
    "error showing results"                 => "Виникла помилка при відображенні результатів, кредити були повернені.\nБудь ласка, зв'яжіться з підтримкою за допомогою /support",
    "error showing results account blocked" => "Виникла помилка при відображенні результатів, кредити були повернені.\nНажаль, ця помилка відбувалася занадто багато разів і ваш обліковий запис був тимчасово заблокований.\nЩоб бути розблокованим, зв'яжіться з підтримкою за допомогою /support",
    "error payment success no credits"      => "Платіж успішно виконано.\nАле кредити не були додані (%credits% кредитів).\nБудь ласка, зверніться до служби підтримки за допомогою /support",
    "error contact support"                 => "Сталася помилка.\nБудь ласка, зв'яжіться з підтримкою за допомогою /support",
    "error try later"                       => "Сталася помилка.\n Будь ласка, спробуйте пізніше",
    "error backend floodwait"               => "Помилка, бекенд зайнятий.\nБудь ласка, спробуйте пізніше.",
    "error timeout"                         => "Помилка, пошук зайняв занадто багато часу, бекенд може бути вимкнений.\nСпробуйте пізніше.",

    "query already done"                        => "<b>Ти вже здійснив ту ж саму пошуку нещодавно.</b>\nВи впевнені, що хочете продовжити?",


    // stats
    "hour ago"                                  => "годину тому",
    "hours ago"                                 => "годин тому",
    "minutes ago"                               => "хвилин тому",
    "less than 1 minute"                        => "менше ніж 1 хвилину тому",
    "stats"                                     => "<b>Останнє оновлення:</b> <code>%time_str%</code>\n<b>Чат:</b> <code>%chat%</code>\n<b>Групи:</b> <code>%groups%</code>\n<b>Користувачів:</b> <code>%user%</code>\n<b>Бот:</b> <code>%bot%</code>\n<b>Асоціації груп користувачів:</b> <code>%members%</code>\n\nБільше статистики: https://www.telegramdb.org/stats",


    // inline
    "inline no input"                           => "Немає результатів!",
    "inline no input desc"                      => "Введіть ім'я користувача або ID, щоб отримати результати.",
    "inline resolve no title"                   => "Немає імені",
    "inline resolve title"                      => "%title%",
    "inline resolve desc"                       => "%id%",
    "inline resolve error title"                => "Помилка",
    "inline resolve error desc"                 => "Помилка, недійсне ім'я користувача або ID.",
    "inline resolve error text"                 => "Помилка, недійсне ім'я користувача або ID.",
    "try inline"                                => "Спробуйте inline",


    // pay api
    "error pay_api offline"                     => "Помилка, неможливо під'єднатися до сервера кредитів, спробуйте пізніше.",
    "error pay_api offline revert transactions" => "Помилка, не вдалося відобразити результати, та повернення кредитів не вдалося, зв'яжіться зі службою підтримки за допомогою /support",

    // format output
    "user"                                      => "Користувач",
    "supergroup"                                => "Супергрупа",
    "basicgroup"                                => "Базова Група",
    "channel"                                   => "Канал",
    "supergrouporchannel"                       => "Супергрупа або Канал",
    "group"                                     => "Група",
    "bot"                                       => "Бот",
    "type"                                      => "Тип",
    "title"                                     => "Назва",
    "username"                                  => "Ім'я користувача",
    "description"                               => "Опис",
    "dc"                                        => "DC",

    "hidden forward" => "Неможливо відобразити інформацію пересланого повідомлення, можливо налаштування конфіденційності користувача мешкають це.",

    "search header1"           => "<b>Пошук:</b> <code>%query%</code>\n",
    "search header2"           => "{0}Ніяких результатів.|{1}%count%%plus% результат:|]1,Inf[%count%%plus% результати:",
    "send username for search" => "Напишіть мені, що ви хочете шукати.",

    // language
    "lang"                     => "\u{1F1EC}\u{1F1E7} Choose your language\n\u{1F1EE}\u{1F1F9} Scegli la tua lingua\n\u{1F1FA}\u{1F1E6} Виберіть свою мову\n\u{1F1E8}\u{1F1F3} 选择你的语言\n\u{1F1EE}\u{1F1F7} زبان را انتخاب کنید \n\u{1F1F8}\u{1F1E6} اختر لغتك",

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

    // Add below the language you are translating as above


    "cancel empty" => "Немає активної команди, яку можна було б відмінити.",
    "cancel type"  => "Команда %type% була скасована.",

    "maintenance"                 => "Бот находится на техобслуживании, эта команда недоступна.\nПопробуйте позже.\n\nЯкщо ви хочете отримувати сповіщення, коли він буде знову доступний, приєднуйтесь до нашого каналу:\nhttps://t.me/tgdatabase",
    "payment blocked maintenance" => "Бот в режимі обслуговування, платежі недоступні.\nСпробуйте пізніше.\n\nЯкщо ви хочете отримувати сповіщення, коли він буде знову доступний, приєднуйтесь до нашого каналу:\nhttps://t.me/tgdatabase",
    "answercb pay"                => "Надіслати рахунок-фактуру",
    "answercb pay maintenance"    => "обслуговування",
    "credits"                     => "кредити",

    "inline maintenance"      => "обслуговування",
    "inline maintenance desc" => "Технічне обслуговування, команда недоступна.\nБудь ласка, спробуйте пізніше.",

    "command pvt"     => "Щоб скористатися цією командою, напишіть мені в приватний чат.",
    "command btn pvt" => "Почати чат",

    "command not available for chat" => "Команда недоступна для тих, хто пише як канал або як анонімний адміністратор.",

    "search more"            => "Показати більше результатів",
    "search pre"             => "Ця дослідження дасть вам %n_results% результатів\n\nЗапит: %query%\nВартість дослідження: %price%\nВаші кредити: %credits%",
    "search more no credits" => "Щоб отримати більше результатів, вам потрібно кредити.\nЩоб купити їх, наберіть /credits",

    "start invalid" => "Неправильний параметр",


    "ref invalid"         => "Реферал, який ви намагаєтеся використовувати, недійсний.",
    "ref self"            => "Ви не можете використовувати свій власний реферал.",
    "ref already used"    => "Ви вже використали реферал, не можете використовувати інші.",
    "ref promo max usage" => "Цей реферал вже використовувався занадто багатьма людьми, однак, ви зможете отримати %credits% безкоштовних кредитів при вашому першому покупці завдяки цьому рефералу.",
    "ref already created" => "Ви вже створили свій власний реферал, не можете використовувати інші.",
    "ref had credits"     => "Ви вже використали бот, ви не можете використовувати цей реферал, але ви можете запросити друга за допомогою вашого рефералу, виконайте /referral та надішліть йому посилання.",
    "ref promo finished"  => "На жаль, акція завершена, однак, ви зможете отримати %credits% безкоштовних кредитів при вашому першому покупці завдяки цьому рефералу.",
    "ref promo pay ok"    => "Ви успішно використали реферал, при вашому першому покупці будуть додані %credits% кредитів.",
    "ref lock"            => "Ви використовуєте занадто багато рефералів, спробуйте пізніше.",
    "ref voip"            => "Ми виявили, що ви використовуєте вторинний обліковий запис для викупу реферала.",

    "ref ok redeemed"     => "Ви успішно використали реферал, вам було додано %credits% кредитів.",
    "ref ok used"         => "Користувач використав ваш реферал, вам було додано %credits% кредитів.",
    "ref ok error api"    => "Реферал дійсний, але не вдалося додати кредити, спробуйте пізніше, якщо помилка виникає знову, зверніться до служби підтримки за допомогою /support",
    "ref ok generated"    => "Ваш реферал був створений, надішліть його своїм друзям, і ви обидва отримаєте %credits% кредитів, коли запрошений здійснить перший покупку.\n\nПосилання запрошення: https://t.me/%username%?start=%ref%",
    "ref error generated" => "На жаль, ви не можете створювати посилання запрошення, якщо ви ніколи не здійснювали покупок.",

    "search no free uses" => "Ви вичерпали свій щоденний безкоштовний пошук. Ви можете придбати кредити, щоб розблокувати більше пошуків.",

    "csv caption info"                        => "Ви можете відкрити цей файл як текст, електронну таблицю або імпортувати його в Maltego за допомогою Імпорт → Імпорт експортованої таблиці.",
    "send username for members"               => "Відправте ім'я користувача або ID, для якого ви хочете отримати асоціації груп користувачів:",
    "members results"                         => "{1}Цей пошук поверне користувача з групи.\n\nКористувач: %group_title% %group_id%\nВартість пошуку: %price%\nВаші кредити: %credits%|]1,Inf[Цей пошук поверне до %count% учасників групи.\n\nКористувач: %group_title% %group_id%\nМаксимальна вартість пошуку: %price%\nВаші кредити: %credits%",
    "error members search only public groups" => "Ви можете шукати тільки публічні групи.",
    "error members search only groups"        => "Ви можете шукати тільки групи.",
    "error members no results"                => "На жаль, пошук не дав результатів.",
    "floodwait members"                       => "Вибачте, ви зробили забагато запитів, спробуйте пізніше.",
    "btn members"                             => "%members% результатів - %price% кредитів",

    "near no groups" => "Для виконання цієї команди не вистачає груп.",
    "near time" => "Час завантаження: ",
    "near results" => "Цей пошук знайде користувачів, близьких до користувача.\nСусідні користувачі будуть обчислені за допомогою груп %count%, в яких він/вона перебуває/перебувала.\n\nКористувач: %user_title% %user_id% \nВартість пошуку: %price% \nВаші кредити: %credits%",
    "near wait" => "Дочекайтеся виконання команди, це може зайняти кілька хвилин...",
    "near not accurate" => "Для цього користувача знайдено мало груп, результати можуть бути неточними!",
    "error near max commands" => "Цією командою користується дуже багато користувачів, будь ласка, спробуйте ще раз за кілька хвилин.",
    "error near max commands from same user" => "Ця команда обмежена, дочекайтеся завершення виконання попередньої.",

    "command similar" => "Ви хотіли виконати %command%?",
];
