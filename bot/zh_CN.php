<?php
return [
    "start" => "\u{1F44B} <i>欢迎来到TelegramDB搜索机器人。</i>
    
这个机器人可以让你找到公共频道和群组，并通过不断更新的数据库查看用户正在或已经参加的公共聊天记录 <b>拥有2亿多聊天记录和9亿多用户！</b>。

使用我们的内联查询，从用户名和ID中获取用户详情。

\u{1F193} <b>自由的命令。</b>
/resolve [id或username] - <code>解决一个用户名或ID</code>
/search [name] - <code>搜索群组和频道</code>
/group [name] - <code>搜索群组</code>  
/channel [name] - <code>搜索频道</code>
/bot [name] - <code>搜索机器人</code>

\u{1F4B2} <b>高级命令:</b>
/where [id或username] - <code>查找用户所在的群组</code>
/members [id或username] - <code>查看群组成员</code>
/near [id或username] - <code>查找用户附近的组（使用常用组）</code>
/credits - <code>购买积分</code>

\u{2139} <b>其他命令:</b>
/faq - <code>常见问答</code>
/language - <code>选择语言</code>
/referral - <code>推荐链接</code>
/support - <code>联系支持</code>
/stats - <code>显示统计信息</code>
/terms - <code>条件和协议</code>
/cancel - <code>取消当前操作</code>

更多信息或疑问加入 @tgdbchat",
    "faq"   => "<b>它是如何工作的?</b>
机器人查询包含 <u>公开的</u> 群组和用户, 由TelegramDB爬取.

<b>你真的追踪得到所有群组吗？</b>
不，追踪得到所有群组是不可能的: 我们在Telegram上只有一部分 <u>公开的</u> 群组.

<b>你有多少数据?</b>
点击 https://telegramdb.org/stats 去查看最新的数据.

<b>附近是如何工作的？</b>
它获取搜索用户所有群组的所有成员列表，并为每个用户分配一个分数。
用户出现的群组越多，得分就越高。
如果群组规模较小，得分就会比大型群组高。

<b>费用是多少？</b>
在付费查看结果之前，机器人会告诉你有多少结果，以及它需要多少钱。

/where 命令的基础价格为 <b>3 积分</b>.
此外，每40个结果成本增加1个积分。

示例:
100 结果需要 5 个积分
3 基础价格 + 2 (100/40 = 2.5)

/members 命令的价格使用以下公式计算：<code>3+0.6x^0.8</code>。
X 是结果数，向下舍入。

例子：
100 个成就需要 26 个学分

<b>我如何从机器人结果中删除一个会话?</b>
发送电子邮件给网站管理员@telegramdb.org, 用 \"<code>删除会话请求</code>\" 作为主题, 提供会话 id/用户名, 和一个简短的解释为什么聊天必须删除。

<b>请注意</b> 结果还可能包括用户过去曾参加过的群组，因此必须注意，用户可能已在未经其批准的情况下被另一个人添加到该群组中。",

    "terms"                          => "条件和协议",
    "support"                        => "加入 @tgdbchat 或者写给 @tgdb_support 以寻求支持。",
    "block"                          => "您的帐户被暂时冻结。若要解冻，使用 /support 联系技术支持。",
    "flood warn"                     => "你发送的信息太多了，请稍后再发。",
    "where header"                   => "结果为 ",
    "btn credits"                    => "%credits% %bonus% 积分 - %price%€ （欧元）",
    "btn pay crypto"                 => "使用加密货币支付",
    "you have x credits"             => "{0}你没有积分.|{1}你有 %count% 个积分.|]1,Inf[你有 %count% 个积分.",
    "pay crypto"                     => "如果你需要用加密货币支付, 联系 @tgdb_support (最少 15€ 欧元)",
    "send username for where"        => "发送你想搜索的用户名或id:",
    "0 credits"                      => "你没有足够的积分去搜索。\n你有 0 个积分.\n用 /credits 买它",
    "not enough credits"             => "{0}你没有足够的积分去搜索。\n你需要 %price% 积分, 但是你没有。\n用 /credits 买它
|{1}你没有足够的积分去搜索。\n你需要 %price% 积分，但是你只有 %count% 积分。\n用 /credits 买它
|]1,Inf[你没有足够的积分去搜索。\n你需要 %price% 积分, 但是你只有 %count% 积分。\n用 /credits 买它",
    "click to continue"              => "点击这里继续",
    "where results"                  => "{1}此搜索将会返回一个此用户 在/在过 的群组.\n\n用户: %user_title% %user_id%\n搜索花费: %price%\n你的积分: %credits%|]1,Inf[此搜索将会返回你 %count% 个此用户 在/在过 的群组.\n\n用户: %user_title% %user_id%\n搜索花费: %price%\n你的积分: %credits%",

    // 命令
    "command help"                   => "帮助信息",
    "command credits"                => "购买积分",
    "command where"                  => "查找用户所在的群组",
    "command resolve"                => "解析用户名或id",
    "command search"                 => "按名称搜索群组和频道",
    "command group"                  => "搜索群组",
    "command channel"                => "搜索频道",
    "command bot"                    => "搜索机器人",
    "command faq"                    => "常见问答",
    "command terms"                  => "条件和协议",
    "command support"                => "联系支持",
    "command stats"                  => "显示统计信息",
    "command cancel"                 => "取消当前操作",
    "command language"               => "选择语言",
    "command referral"               => "推荐链接",
    "command members"                => "查看群组成员",
    "command near"                   => "查找用户附近的组",

    // 信用交易
    "transaction title"              => "%credits% TGDB 积分",
    "transaction description"        => "使用这些积分搜索数据库",
    "transaction success"            => "你在这个搜索上花费了 %credits_spend% 积分。\n你还有%credits_left% 积分。",
    // 付款 (eur)
    "payment in progress"            => "付款进行中…等待付款。",
    "payment cannot continue"        => "无法继续支付。",
    "payment success"                => "成功支付。\n你已经收到 %credits% 积分.",

    // 错误
    "error no results"               => "此搜索没有结果。",
    "error where resolve no results" => "找不到您要找的用户。",
    "error where no results"         => "对不起，搜索没有找到该用户的群组。",
    "error search no results"        => "对不起，您的搜索没有结果。",

    "error where params"            => "参数错误",
    "error where input"             => "输入错误",
    "error where search yourself"   => "你不能搜索你自己。",
    "error where search only users" => "你只能搜索用户。",
    "error where invalid input"     => "错误，用户名或id无效。\n记住，你只能搜索用户。",

    "error invalid input"                   => "错误，用户名或id无效。",
    "error backend offline"                 => "错误，后端离线",
    "error user not found"                  => "错误，用户未找到",
    "error button invalid"                  => "错误，无效按钮",
    "error button already press"            => "错误，按钮已按下",
    "error button expired"                  => "错误，按钮已过时",
    "error button user invalid"             => "错误，您按下的按钮不是由您生成的",
    "error transaction still in progress"   => "错误，操作仍在进行中，请等待它完成后再进行其他查询。\n如果问题仍然存在，请通过 /support 联系技术支持",
    "error cant use credits"                => "错误，无法使用积分，请稍后再试。\n如果问题仍然存在，请通过 /support 联系技术支持",
    "error showing results"                 => "结果显示错误，你的积分被退还了。\n请通过 /support 联系技术支持",
    "error showing results account blocked" => "结果显示错误，你的积分被退还了。\n不幸的是，这个错误经常发生，您的帐户已被暂时暂停。\n去解封, 请通过 /support 联系技术支持",
    "error payment success no credits"      => "成功支付\n但是积分不能被增加 (%credits% 积分)。\n请通过 /support 联系技术支持",
    "error contact support"                 => "出现了一个错误\n请通过 /support 联系技术支持",
    "error try later"                       => "出现了一个错误\n请稍后再试",
    "error backend floodwait"               => "错误，后端繁忙\n请稍后再试",
    "error timeout"                         => "错误，搜索时间过长，后端可能离线。\n请稍后再试",


    "query already done"                        => "<b>你之前已经做过同样的搜索了。</b>\n你确定要继续吗?",


    // 状态
    "hour ago"                                  => "一小时前",
    "hours ago"                                 => "几小时前",
    "minutes ago"                               => "几分钟前",
    "less than 1 minute"                        => "少于1分钟前",
    "stats"                                     => "<b>最新更新:</b> <code>%time_str%</code>\n<b>会话:</b> <code>%chat%</code>\n<b>群组:</b> <code>%groups%</code>\n<b>用户:</b> <code>%user%</code>\n<b>机器人:</b> <code>%bot%</code>\n<b>用户-群组 联系:</b> <code>%members%</code>\n\n更多状态信息: https://www.telegramdb.org/stats",


    // 内联
    "inline no input"                           => "无结果!",
    "inline no input desc"                      => "请给我写一个用户名或id来获得结果。",
    "inline resolve no title"                   => "无标题",
    "inline resolve title"                      => "%title%",
    "inline resolve desc"                       => "%id%",
    "inline resolve error title"                => "错误",
    "inline resolve error desc"                 => "错误，用户名或id无效/未找到。",
    "inline resolve error text"                 => "错误，用户名或id无效/未找到。",
    "try inline"                                => "试试内联",


    // 支付 api
    "error pay_api offline"                     => "错误，无法连接到信用服务器，请稍后再试。",
    "error pay_api offline revert transactions" => "错误，无法显示结果，信用退款失败，请用 /support 联系技术支持",

    // 输出格式
    "user"                                      => "用户",
    "supergroup"                                => "超群",
    "basicgroup"                                => "基础群",
    "channel"                                   => "频道",
    "supergrouporchannel"                       => "超群 或者 频道",
    "group"                                     => "群组",
    "bot"                                       => "机器人",
    "type"                                      => "类型",
    "title"                                     => "标题",
    "username"                                  => "用户名",
    "description"                               => "描述",
    "dc"                                        => "DC",
    "members"                                   => "成员",

    "hidden forward" => "无法显示所转发邮件的信息，用户的隐私设置可能会阻止它。",

    "search header1"               => "🔍 <code>%query%</code>",
    "search header2"               => "{0}没有结果。|{1}%count% 结果|]1,Inf[大约 %total% 结果",
    "search header2 without about" => "{0}没有结果。|{1}%count% 结果|]1,Inf[%total% 结果",
    "send username for search"     => "写给我你要找的东西",

    // language
    "lang"                     => "\u{1F1EC}\u{1F1E7} Choose your language\n\u{1F1EE}\u{1F1F9} Scegli la tua lingua\n\u{1F1FA}\u{1F1E6} Виберіть свою мову\n\u{1F1E8}\u{1F1F3} 选择你的语言\n\u{1F1EE}\u{1F1F7} زبان را انتخاب کنید \n\u{1F1F8}\u{1F1E6} اختر لغتك\n\u{1F1EB}\u{1F1F7} Choisissez votre langue",

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


    "cancel empty" => "没有要取消的活动命令。",
    "cancel type"  => " %type% 命令已被取消。",

    "maintenance"                 => "此机器人当前处于维护模式，此命令不可用。\n请稍后再试。\n\n如果您想知道何时再次推出，请加入我们的频道：\nhttps://t.me/tgdatabase。",
    "payment blocked maintenance" => "这个机器人目前处于维护模式，无法支付。\n请稍后再试。\n\n如果您想知道何时再次推出，请加入我们的频道：\nhttps://t.me/tgdatabase。",
    "answercb pay"                => "发送发票",
    "answercb pay maintenance"    => "维护",
    "credits"                     => "积分",

    "inline maintenance"      => "维护",
    "inline maintenance desc" => "维护，命令不可用。\n请稍后再试。",

    "command pvt"     => "要使用该命令，请使用私密聊天。",
    "command btn pvt" => "开始聊天",

    "command not available for chat" => "命令对于以频道或匿名管理员身份写入的用户不可用。",

    "search more"            => "展示更多结果",
    "search pre"             => "此搜索会给你 %n_results% 个结果\n\n查询: %query%\n搜索花费: %price%\n你的积分: %credits%",
    "search more no credits" => "为了获得更多的结果，你需要积分。\n用 /credits 买它",

    "start invalid" => "不正确的参数",


    "ref invalid"         => "您尝试使用推荐无效。",
    "ref self"            => "您不能使用自己的推荐链接。",
    "ref already used"    => "您已经使用了推荐链接。",
    "ref promo max usage" => "此推荐已被太多人使用，但是，在您通过此推荐首次购买时，您可以获得 %credits% 免费积分。",
    "ref already created" => "您已经创建了推荐链接。",
    "ref had credits"     => "已经使用机器人后，您无法兑换此推荐，但您可以用您的推荐邀请朋友，只要点击 /referral 然后发给他们链接。",
    "ref promo finished"  => "对不起，促销活动已经结束，但是，在您通过此推荐首次购买时，您可以获得 %credits% 免费积分。",
    "ref promo pay ok"    => "您已经成功兑换了推荐，%credits% 积分将添加到您的首次购买中。",
    "ref lock"            => "您已经使用了太多推荐链接，请稍后再试。",
    "ref voip"            => "我们发现您在使用二级账户兑换推荐。",

    "ref ok redeemed"     => "您已经正确的兑换了推荐，%credits% 积分将被添加您",
    "ref ok used"         => "一个用户使用了您的推荐, %credits% 积分将被添加给您",
    "ref ok error api"    => "推荐有效，但无法添加积分，请稍后重试，如果错误仍然存在，请通过 /support 联系技术支持。",
    "ref ok generated"    => "您的推荐已生成，请将其发送给您的朋友们，当受邀者进行第一次购买时，你们都会收到 %credits% 积分。\n\n推荐链接: https://t.me/%username%?start=%ref%",
    "ref error generated" => "抱歉，如果您从未购买过，则无法生成邀请链接。",

    "search no free uses" => "您已达到每日搜索上限。请使用 /support 联系技术支持以获取更多信息，或明天再试。",

    "csv caption info"                        => "您可以以文本、电子表格形式打开该文件，或使用导入 → 导入导出的表格将其导入 Maltego。",
    "send username for members"               => "发送你想搜索的用户名或id:",
    "members results"                         => "{1}该搜索将返回该组中的一个用户。\n\n用户: %group_title% %group_id%\n搜索花费: %price%\n你的积分: %credits%|]1,Inf[此搜索将返回最多 %count% 个群组成员。\n\n用户: %group_title% %group_id%\n最大搜索成本: %price%\n你的积分: %credits%",
    "error members search only public groups" => "你只能搜索公开群组的成员。",
    "error members search only groups"        => "你只能搜索群组的成员。",
    "error members no results"                => "对不起，您的搜索没有结果。",
    "floodwait members"                       => "抱歉，您的请求过多，请稍后重试。",
    "btn members"                             => "%members% 个成员 - %price% 积分",

    "near no groups"                         => "没有足够的组来使用此命令。",
    "near time"                              => "加载时间：",
    "near results"                           => "这种搜索会找到与用户相近的用户。\n邻近用户将按他/她所在/曾所在的组的 %count% 计算。\n\n用户： %user_title% %user_id%\n搜索成本：%price\n您的学分： %credits%",
    "near results info"                      => "所谓 \"近 \"是指 Telegram 社区之间的虚拟距离，而不是用户之间的物理距离。",
    "near wait"                              => "等待命令执行，可能需要几分钟时间",
    "near not accurate"                      => "为该用户找到的组很少，可能会显示不准确的结果！",
    "error near max commands"                => "太多用户正在使用此命令，请几分钟后再试。",
    "error near max commands from same user" => "这条命令是有限制的，请等待它执行完前一条命令。",

    "command similar" => "您想执行 %command% 命令吗？",

    "footer where"   => "用户是哪些组的成员？",
    "footer near"    => "附近有哪些用户？",
    "footer members" => "成员有哪些？",

    "btn search"              => "%n_res% 结果 - %price% 积分",
    "footer search truncated" => "结果已被截断，要查看完整结果，请参阅 CSV 文件。",

];
