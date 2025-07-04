# TelegramDB
**TelegramDB** is a service that allows you to search for channels, groups and their members.

[![Members](/stats/members.svg?hl=uk)](/stats)
[![Chats](/stats/chats.svg?hl=uk)](/stats)
[![Groups](/stats/groups.svg?hl=uk)](/stats)
[![Users](/stats/users.svg?hl=uk)](/stats)
[![Bots](/stats/bots.svg?hl=uk)](/stats)

Through our [bot](https://www.tgdb.org/bot) on Telegram you can search, using our database, for all public groups in which a user has been.

The bot is also a **search engine**, you can search by filtering by groups and channels, and get many more results than a normal search on Telegram.

## Why TelegramDB?
We aim to make it **easier** and **straightforward** to access all the useful information on Telegram.

## How to use TelegramDB?
Through [tgdb_bot](https://www.tgdb.org/bot) you can use our service.

### 🆓 Free features.
- **/search** allows you to use keywords to search for groups and channels.
	If you want to filter only groups or channels instead, you can use the corresponding /group and /channel commands.
- **/resolve** allows you to convert the id and username of a user, group or channel.

### ⭐️ Premium functions.
- **/where** allows you to get a list of groups in which a user has been.
- **advanced search**: Through the use of credits, it is possible to extend the functions of the /search command and get more results, and export them to csv.
### How to use premium functions?
In order to use the premium functions, you will have to purchase **credits**.
The purchase procedure will be done through the bot, using the /credits command.
You can easily pay thanks to the built-in system on Telegram.

Premium searches, compared to free searches, have more results.

User searches, on the other hand, have a base price to be performed; the cost is proportional to the number of results obtained.

You will always preview the cost and the number of results you will get before you spend the credits.

#### 🔎 **search**
- Free: 20 results
- Base price: 0 credits
- Every 40 results: 1 credit

#### 🌍 **where**
- Free: Number of groups a user is in. (Up to 5 per day if you do not own credits)
- Base price: 3 credits
- Every 40 results: 1 credit


## Screenshots
![Channel](/static/media/screen/channel.webp){width=200}
![Commands](/static/media/screen/commands.webp){width=200}
![Credits](/static/media/screen/credits.webp){width=200}
![Group](/static/media/screen/group.webp){width=200}
![Search](/static/media/screen/search.webp){width=200}
![Where pre](/static/media/screen/where_pre.webp){width=200}
![Where link](/static/media/screen/where_link.webp){width=200}
![Where done](/static/media/screen/where_done.webp){width=200}

## Technical topics
### Custom solutions
To be able to keep up with Telegram's monthly updates, we created a system to serialize and support all new features without having to change the database structure or update the data.
### Crawler
In order to keep the data up-to-date and constantly increasing, we have distruibited crawlers looking for new groups and channels.

## How you can contribute to the project.
### Open a discussion.
If you have any questions or have any ideas on how to improve the project, feel free to open a discussion [here](https://github.com/TelegramDB/TelegramDB/discussions) on GitHub.
### Join our community on telegram.
- Bot: [tgdb_bot](https://www.tgdb.org/bot)
- News Channel: [@tgdatabase](https://t.me/tgdatabase)
- Support/discussion group: [@tgdbchat](https://t.me/tgdbchat)
- Support account: [@tgdb_support](https://t.me/tgdb_support) (if possible, contact us on the group)
### Help us with localization.
You can help us translate these guidelines, or localize the bot and the site in your language.
To do so, contact us on Telegram, or open a discussion.
### Report us groups/channels not in the database.
We will be happy to add public channels and groups to our database, reporting them will help us grow and improve the project.

## Content policies (illegal/DMCA/GDPR).
**Please note that we are not affiliated in any way with Telegram** and not to contact their support, in case the data is only present on our platforms.

The content on our platforms, are obtained directly from Telegram by crawling __public__ groups and channels accessible by anyone.

We do not apply any kind of filtering on the data collected by Telegram, so it may be illegal, contain incitement to hatred and violence or terrorist propaganda; it is also possible that it violates copyright or intellectual property.

We also accept the deletion of personal data in full compliance with the GDPR, as our servers are located on European territory.

To delete content we advise you, as a first step, to check whether it is still present on Telegram, in this case, proceed to contact their support, following the deletion by Telegram, proceed to contact us.

In case Telegram does not respond to you or for any other reason you need to remove content from our platform, we will be at your disposal to delete it.

### How to request deletion.
Send an email to webmaster@telegramdb.org, specifying "chat deletion request" as the subject, providing the chat id/username and a brief explanation of why the chat needs to be removed.

### Data we may collect
We collect a basic data on financial transactions for validation, reimbursement and debugging purposes.

Sometimes we may collect some behavioural and interaction data with our services for the sole purpose of technical and product performance improvement.

We never sell people’s personal information to third parties and we also have strict internal log monitoring policies that require us to justify the reason for access.
