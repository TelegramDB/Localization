<?php
return [
    "start" => "\u{1F44B} <i>به ربات TelegramDB خوش آمدید.</i>
    
    این ربات به شما امکان می‌دهد کانال‌ها و گروه‌های عمومی را بیابید و ببینید کاربر در چه گفتکو های عمومی قرار دارد یا در آن بوده است، با استفاده از پایگاه‌داده‌ای که دائماً به‌روز می‌شود <b>با بیش از ۲۰۰ میلیون گفت و گو و بیش از ۶۰۰ میلیون کاربر!</b>

ازدستورات درون خطی ما برای دریافت اطلاعات کاربر از نام کاربری و شناسه استفاده کنید.

\u{1F193} <b>:دستورات رایگان</b>
/resolve [id or username] - <code>شرح دادن نام کاربری یا آیدی</code>
/search [name] - <code>جستجو برای کانال ها و گروه ها</code>
/group [name] - <code>چستجو برای گروه ها</code>  
/channel [name] - <code>جستجو برای کانال ها</code>

\u{1F4B2} <b>:دستورات ویژه</b>
/where [id or username] - <code>پیدا کردن گروه هایی که کاربر در آنها حضور دارد</code>
/credits - <code>خرید اعتبار</code>

\u{2139} <b>:دیگر دستورات</b>
/faq - <code>سوالات متداول</code>
/language - <code>انتخاب زبان</code>
/referral - <code>رفرال لینک</code>
/support - <code>Support chat</code>
/stats - <code>نمایش وضعیت</code>
/terms - <code>شرایط و ظوابط</code>
/cancel - <code>لغو عملیات فعلی</code>

برای هر اطلاعات یا شک و تردید به @tgdbchat بپیوندید",
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
    "faq"   => "<b>چگونه کار می کند؟</b>
یک رباتی است که داده های گروه ها  و کاربران را در گروه های عمومی جمع آوری می کند .

<b>آیا می توانید همه گروه هارا ردیابی کنید ؟</b>
خیر، چنین کاری غیر ممکن است ما فقط بخشی از گروه های عمومی را میتوانیم ردیابی کنیم.

<b>چه مقدار اطلاعات دارید ؟</b>
تااز وضعیتمان مطلع شوید https://telegramdb.org/stats چک کنید 

<b>چقدر قیمتش میشه ؟</b>
قبل از پرداخت هزینه برای دیدن نتایج، ربات به شما نشان می دهد که چند نتیجه وجود دارد و هزینه آن چقدر است.

قیمت پایه دستور /where <b>3 اعتبار</b> است.
علاوه بر این، به ازای هر 40 نتیجه هزینه اش 1 اعتبار افزایش می یابد.

مثال:
صد نتیجه ، 5 اعتبار هزینه دارد 
سه اعتبار قیمت پایه + 2 (100/40 = 2.5)

<b>چگونه می توانم یک گفت و گو را از نتایج ربات حذف کنم؟</b>
ارسال ایمیل به webmaster@telegramdb.org ، با \"<code>درخواست حذف چت</code>\" به عنوان موضوع ، شناسه چت/نام کاربری را ارائه دهید و توضیح کوتاهی در مورد اینکه چرا چت باید حذف شود.

<b> لطفا توجه داشته باشید که </b> نتایج همچنین می تواند شامل گروه هایی باشد که کاربر در گذشته در آن حضور داشته است ، بنابراین باید توجه داشت که ممکن است یک کاربر بدون تایید شخص دیگری به آن گروه اضافه شده باشد.",

    "terms"                          => "شرایط و ظوابط",
    "support"                        => "برای پشتیبانی به @tgdbchat بپیوندید یا به @tgdbsupport بنویسید.",
    "block"                          => "حساب شما به طور موقت مسدود شده است. برای رفع انسداد ، با پشتیبانی /support تماس بگیرید.",
    "flood warn"                     => "شما پیام های زیادی می فرستید. لطفا قبل از ارسال بیشتر کمی صبر کنید.",
    "where header"                   => "نتایج برای ",
    "btn credits"                    => "%credits% %bonus% credits - %price%€",
    "btn pay crypto"                 => "پرداخت با ارزهای رمزنگاری شده",
    "you have x credits"             => "{0}You have no credits.|{1}You have %count% credit.|]1,Inf[You have %count% credits.",
    "pay crypto"                     => "اگر نیاز به پرداخت با رمزارز ها دارید ، با @tgdbsupport تماس بگیرید (حداقل 15€)",
    "send username for where"        => "نام کاربری یا شناسه هر کسی که می خواهید جستجو کنید را ارسال کنید:",
    "0 credits"                      => "شما اعتبار کافی برای جستجو ندارید.\شما 0 اعتبار دارید.\ آنها را با /credits خریداری کنید",
    "not enough credits"             => "{0}You don't have enough credits to search.\nYou need %price% credits, but you have no credits.\nBuy them with /credits
|{1}You don't have enough credits to search.\nYou need %price% credits, but you only have %count% credit.\nBuy them with /credits
|]1,Inf[You don't have enough credits to search.\nYou need %price% credits, but you only have %count% credits.\nBuy them with /credits",
    "click to continue"              => "برای ادامه مطلب اینجا کلیک کنید",
    "where results"                  => "{1}This search will return you one group where the user has been.\n\nUser: %user_title% %user_id%\nSearch cost: %price%\nYour credits: %credits%|]1,Inf[This search will return you %count% groups where the user has been.\n\nUser: %user_title% %user_id%\nSearch cost: %price%\nYour credits: %credits%",

    // commands
    "command help"                   => "پیام کمک",
    "command credits"                => "خرید اعتبارات",
    "command where"                  => "گروه هایی را پیدا کنید که کاربر در آنها حضور دارد",
    "command resolve"                => "نام کاربری یا شناسه را حل می کند",
    "command search"                 => "جستجو گروه ها و کانال ها بر اساس نام",
    "command group"                  => "جستجوی گروه ها",
    "command channel"                => "جستجو در کانال ها",
    "command bot"                    => "جستجوی ربات ها",
    "command faq"                    => "سوالات متداول",
    "command terms"                  => "شرایط و ظوابط",
    "command support"                => "گفت گو پشتیبانی",
    "command stats"                  => "نمایش وضعیت",
    "command cancel"                 => "لغو عملیات فعلی",
    "command language"               => "انتخاب زبان",
    "command referral"               => "رفرال لینک",

    // credit transaction
    "transaction title"              => "%credits% TGDB اعتبار",
    "transaction description"        => "از این اعتبارات برای جستجوی پایگاه داده استفاده کنید",
    "transaction success"            => "You have spent %credits_spend% credits on this search.\nYou have %credits_left% credits left.",
    // payments (eur)
    "payment in progress"            => "پرداخت در حال انجام.. در انتظار پرداخت.",
    "payment cannot continue"        => "پرداخت نمی تواند ادامه یابد.",
    "payment success"                => "پرداخت موفق.\شما %credits% اعتبارات را دریافت کرده اید.",

    // errors
    "error no results"               => "نتیجه ای در مورد این جستجو یافت نشد.",
    "error where resolve no results" => "کاربری که دنبالش بودید پیدا نشد.",
    "error where no results"         => "متاسفم ، جستجو هیچ گروه برای این کاربر پیدا نکرد.",
    "error search no results"        => "متاسفم ، جستجو شما نتیجه ای نداد.",

    "error where params"            => "خطا در پارامترها",
    "error where input"             => "خطا در ورودی",
    "error where search yourself"   => "شما نمی توانید خودتان را جستجو کنید.",
    "error where search only users" => "شما فقط می توانید برای کاربران جستجو کنید.",
    "error where invalid input"     => "خطا ، نام کاربری یا شناسه نامعتبر.\nبه یاد داشته باشید که فقط می توانید کاربران را جستجو کنید.",

    "error invalid input"                   => "خطا ، نام کاربری یا آیدی نامعتبر",
    "error backend offline"                 => "خطا ، بک اند آفلاین",
    "error user not found"                  => "خطا ، کاربر یافت نشد",
    "error button invalid"                  => "خطا ، دکمه نامعتبر",
    "error button already press"            => "خطا ، دکمه قبلا فشار داده شده است",
    "error button expired"                  => "خطا ، دکمه منقضی شده است",
    "error button user invalid"             => "خطا ، دکمه ای که فشار دادید توسط یوتیوب تولید نشده است",
    "error transaction still in progress"   => "خطا ، عملیات هنوز در حال انجام است ، لطفا قبل از انجام سوالات دیگر صبر کنید تا تمام شود.\nIf مشکل همچنان ادامه دارد ، لطفا از طریق /support با پشتیبانی تماس بگیرید",
    "error cant use credits"                => "خطا ، قادر به استفاده از اعتبارات نیست ، لطفا بعدا دوباره امتحان کنید.\if مشکل همچنان ادامه داشته باشد ، لطفا از طریق /support با پشتیبانی تماس بگیرید",
    "error showing results"                 => "خطایی در نمایش نتایج وجود داشت ، اعتبارات شما بازپرداخت شد.\لطفا از طریق /support با پشتیبانی تماس بگیرید",
    "error showing results account blocked" => "خطایی در نمایش نتایج وجود داشت ، اعتبارات شما بازپرداخت شد.\ متاسفانه ، این خطا خیلی زیاد رخ داده و حساب شما به طور موقت تعلیق شده است.\برای باز کردن مسدود شدن ، لطفا از طریق /support با پشتیبانی تماس بگیرید",
    "error payment success no credits"      => "پرداخت موفق.\اما اعتبارات نمی توانستند اضافه شوند (%credits% credits).\ لطفا با پشتیبانی /support تماس بگیرید .",
    "error contact support"                 => "یک خطا رخ داده است.\لطفا با پشتیبانی /support تماس بگیرید",
    "error try later"                       => "یک خطا رخ داده است.\ لطفا بعدا دوباره امتحان کنید",
    "error backend floodwait"               => "خطا ، backend مشغول است.\ لطفا بعدا دوباره امتحان کنید .",
    "error timeout"                         => "خطا ، جستجو خیلی طول کشید ،بک اند ممکن است آفلاین باشد.\لطفا بعدا دوباره امتحان کنید.",


    "query already done"                        => "<b>شما قبلاً همین جستجو را چندی پیش انجام دادید.</b>\nآیا مطمئن هستید که می‌خواهید ادامه دهید؟،",


    // stats
    "hour ago"                                  => "ساعتی قبل",
    "hours ago"                                 => "ساعت ها پیش",
    "minutes ago"                               => "دقایقی پیش",
    "less than 1 minute"                        => "کمتر از یک دقیقه پیش",
    "stats"                                     => "<b>آخرین آپدیت</b> <code>%time_str%</code>\n<b>:چت ها</b> <code>%chat%</code>\n<b>:گروه ها</b> <code>%groups%</code>\n<b>Users:</b> <code>%user%</code>\n<b>Bots:</b> <code>%bot%</code>\n<b>User-Group associations:</b> <code>%members%</code>\n\nMore stats: https://www.telegramdb.org/stats",

    // inline
    "inline no input"                           => "بدون نتیجه!",
    "inline no input desc"                      => "لطفا، برای دریافت نتایج نام کاربری یا آیدی را برایم بفرست",
    "inline resolve no title"                   => "بدون عنوان",
    "inline resolve title"                      => "%title%",
    "inline resolve desc"                       => "%id%",
    "inline resolve error title"                => "خطا",
    "inline resolve error desc"                 => "خطا، نام کاربری یا آیدی شما نا موجود یا نادرست است/",
    "inline resolve error text"                 => "خطا، نام کاربری یا آیدی شما نا موجود یا نادرست است/",
    "try inline"                                => "ربات را بصورت درون خط یا این لاین امتحان کن",


    // pay api
    "error pay_api offline"                     => "خطا ، قادر به اتصال به سرور اعتباری نیست ، لطفا بعدا دوباره امتحان کنید.",
    "error pay_api offline revert transactions" => "خطا ، نتایج نمی تواند نشان داده شود ، و بازپرداخت اعتبار شکست خورده است ، لطفا با پشتیبانی /supportی تماس بگیرید",

    // format output
    "user"                                      => "کاربر",
    "supergroup"                                => "سوپر گروه",
    "basicgroup"                                => "گروه ساده",
    "channel"                                   => "کانال",
    "supergrouporchannel"                       => "سوپر گروه یا کانال",
    "group"                                     => "گروه",
    "bot"                                       => "بات",
    "type"                                      => "نوع",
    "title"                                     => "عنوان",
    "username"                                  => "نام کاربر",
    "description"                               => "توضیحات",
    "dc"                                        => "DC",

    "hidden forward" => "عدم توانایی در نمایش اطلاعات پیام ارسال شده ، تنظیمات حریم خصوصی کاربر ممکن است از آن جلوگیری کند.",

    "search header1"           => "<b>جستجو:</b> <code>%query%</code>\n",
    "search header2"           => "{0}بدون نتیجه.|{1}%count%%plus% نتایج:|]1,Inf[%count%%plus% نتایج:",
    "send username for search" => "آنچه را که می خواهید جستجو کنید بنویسید.",

    // language
    "lang"                     => "\u{1F1EC}\u{1F1E7} Choose your language\n\u{1F1EE}\u{1F1F9} Scegli la tua lingua\n\u{1F1FA}\u{1F1E6} Виберіть свою мову\n\u{1F1E8}\u{1F1F3} 选择你的语言\n\u{1F1EE}\u{1F1F7}زبان را انتخاب کنید",

    "lang en"     => "\u{1F1EC}\u{1F1E7} English",
    "lang set en" => "Language changed to English.",

    "lang it"     => "\u{1F1EE}\u{1F1F9} Italiano",
    "lang set it" => "Lingua cambiata in Italiano.",

    "lang ua"     => "\u{1F1FA}\u{1F1E6} Українська",
    "lang set ua" => "Мову змінено на українську.",

    "lang cn"     => "\u{1F1E8}\u{1F1F3} 中国",
    "lang set cn" => "语言改为中文。",

    "lang fa"     => "\u{1F1EE}\u{1F1F7} فارسی",
    "lang set fa" => "زبان به فارسی تغییر نمود.",

    // Add below the language you are translating as above


    "cancel empty" => "هیچ دستور فعالی برای لغو وجود ندارد.",
    "cancel type"  => "The %type% command has been cancelled.",

    "maintenance"                 => "این ربات در حال حاضر در حالت تعمیر و نگهداری است، این دستور در دسترس نیست.\nلطفاً بعداً دوباره امتحان کنید.\n\nاگر می خواهید زمانی که دوباره در دسترس خواهد بود به شما اطلاع داده شود، به کانال ما بپیوندید:\nhttps://t.me/tgdatabase",
    "payment blocked maintenance" => "این ربات در حال حاضر در حالت تعمیر و نگهداری است، پرداخت‌ها در دسترس نیست.\nلطفاً بعداً دوباره امتحان کنید.\n\nاگر می‌خواهید زمانی که دوباره در دسترس خواهد بود به شما اطلاع داده شود، به کانال ما بپیوندید:\nhttps://t.me/tgdatabase",
    "answercb pay"                => "ارسال فاکتور",
    "answercb pay maintenance"    => "تعمیرات",
    "credits"                     => "اعتبارات",

    "inline maintenance"      => "تعمیرات",
    "inline maintenance desc" => "تعمیرات، فرمان در دسترس نیست.\nلطفا بعدا دوباره امتحان کنید.",

    "command pvt"     => "برای استفاده از این دستور از آن در گفتگوی خصوصی استفاده کنید.",
    "command btn pvt" => "شروع گفت و گو",

    "command not available for chat" => "فرمان برای کسانی که به عنوان یک کانال یا به عنوان یک ادمین ناشناس می نویسند در دسترس نیست.",

    "search more"            => "نمایش نتایج بیشتر",
    "search pre"             => "This search will give you %n_results% results\n\nQuery: %query%\nSearch cost: %price%\nYour credits: %credits%",
    "search more no credits" => "برای دریافت نتایج بیشتر به اعتبار نیاز دارید.\nآنها را با /credits بخرید",

    "start invalid" => "پارامتر اشتباه",


    "ref_invalid"         => "رفرالی که می‌خواهید استفاده کنید نامعتبر است.",
    "ref_self"            => "شما نمی توانید از لینک رفرال خود استفاده کنید.",
    "ref_already_used"    => "شما قبلاً از رفرال لینک استفاده کرده اید.",
    "ref_promo_max_usage" => "این رفرال قبلاً توسط افراد زیادی استفاده شده است، با این حال، شما می‌توانید در اولین خرید خود از طریق این رفرال، %Credits% اعتبار رایگان دریافت کنید.",
    "ref_already_created" => "شما قبلاً یک لینک رفرال ایجاد کرده اید.",
    "ref_had_credits"     => "با استفاده از ربات، نمی‌توانید این رفرال را پس‌خرید کنید، اما می‌توانید یک دوست را با معرفی خود دعوت کنید، فقط /referral را انجام دهید و لینک را برای آنها ارسال کنید.",
    "ref_promo_finished"  => "متأسفیم، اما تبلیغات به پایان رسیده است، با این حال، می توانید %credits% اعتبار رایگان را در اولین خرید خود از طریق این رفرال دریافت کنید.",
    "ref_promo_pay_ok"    => "شما با موفقیت از رفرال استفاده کردید، %credits% اعتبار به اولین خرید شما اضافه خواهد شد.",
    "ref_lock"            => "شما از رفرال های زیادی استفاده می کنید، بعداً دوباره امتحان کنید.",
    "ref_voip"            => "ما متوجه شدیم که شما از یک حساب ثانویه برای استفاده از رفرال استفاده می کنید.",

    "ref_ok_redeemed"     => "شما رفرال را به درستی پس‌خرید کردید، %credits% اعتبار اضافه شد.",
    "ref_ok_used"         => "کاربری از رفرال شما استفاده کرد، %credits% اعتبار به شما اضافه شد.",
    "ref_ok_error_api"    => "رفرال معتبر است، اما اعتبارات اضافه نشد، بعداً دوباره امتحان کنید، اگر خطا ادامه داشت، با پشتیبانی با /support تماس بگیرید",
    "ref_ok_generated"    => "ارجاع شما ایجاد شده است، آن را برای دوستان خود ارسال کنید و زمانی که دعوت کننده اولین خرید را انجام داد، هر دوی شما %credits% اعتبار دریافت خواهید کرد. Referral link: https://t.me/%username%?start=%ref%",
    "ref_error_generated" => "متأسفیم، اما اگر هرگز خریدی نکرده اید، نمی توانید لینک های دعوت ایجاد کنید.",

    "temp_not_available" => "این دستور در حال حاضر در دسترس نیست.\n\nاگر می‌خواهید از زمان عرضه مجدد مطلع شوید، به کانال ما بپیوندید:\nhttps://t.me/tgdatabase",

    "search no free uses" => "شما جستجوهای رایگان روزانه خود را تمام کرده اید. برای باز کردن قفل جستجوهای بیشتر می توانید اعتبار خریداری کنید.",
];
