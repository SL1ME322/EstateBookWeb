create database [EstateBookFinal]
go

use [EstateBookFinal]
go

CREATE TABLE [dbo].[Estate_Images]
(
    [ID_Estate_Images] int not null identity(1,1),
    [Main_Image] bit not null,
    [Image1] nvarchar(max) not null,

    Constraint [PK_Estate_Images] Primary Key([ID_Estate_Images])
    )
    go

    INSERT INTO [dbo].[Estate_Images] ([Main_Image], [Image1])
    VALUES (1, 'Путь к изображению 1'),
(0, 'Путь к изображению 2'),
(0, 'Путь к изображению 2'),
(0, 'Путь к изображению 2'),
(0, 'Путь к изображению 2')
    go


BEGIN TRY
BEGIN TRANSACTION;
INSERT INTO [dbo].[Estate_Images] ([Main_Image], [Image1])
VALUES (1, 'Путь к изображению 1'),
    (0, 'Путь к изображению 2'),
    (0, 'Путь к изображению 3'),
    (0, 'Путь к изображению 4'),
    (0, 'Путь к изображению 5');
COMMIT;
END TRY
BEGIN CATCH
ROLLBACK;
    PRINT 'Error: ' + ERROR_MESSAGE();
END CATCH;

CREATE TABLE [dbo].[User]
(
    [ID_User] int not null identity(1,1),
    [Name] varchar(50)  null,
    [Surname] varchar(50)  null,
    [Middle_Name] varchar(50) null,
    [Login] varchar(50)  null,
    [Password] varchar(255)  null,
    [Avatar] varchar(max) null,
    [Phone] varchar(20) null,
    [Location] varchar(300) null,
    [Description] varchar(max) null,
    [Average_Mark] float null,
    [Registration_Date] datetime  null,
    Constraint [PK_User] Primary Key([ID_User])
    );
go

select * from [dbo].[Users]
    go
select * from [dbo].[Tag]
    go
--INSERT INTO [dbo].[User] (
--    [Login],
--    [Password]
--)
--VALUES (
--    'anna',
--    'пароль123'
--),
--(
--    'peter',
--    'пароль456'
--),
--(
--    'test',
--    '$2y$10$NmrOO8LQW2FF6TUu.wj0H.wigt3NYRZs9BWq1WYxWckH5n5pS9r.W'
--)
--go

SELECT * FROM [dbo].[Estate] WHERE Ad_Name LIKE '1'
    go

SELECT * FROM [dbo].[User]
    go
SELECT * FROM [dbo].[Tag]
    go
SELECT * FROM [dbo].[Estate]
    go

SELECT * FROM [dbo].[Estate_Images]
    go

create  table [dbo].[Estate]
(

/*Общие хар-ки */
    [ID_Estate] int not null identity(1,1),
    [Ad_Name] varchar(100) not null,
    [Location] varchar(300) not null,
    [Price] int not null,
    [Price_For_Month] int not null,
    [Mortgage_Price] int not null,
    [Area] int not null,
    [House_Area] int not null,
    [Metro_Station] varchar(70) null,
    [Train_Station] varchar(1000) not null,
    [Description] varchar(1000) not null,
    [Ad_Date] datetime not null,
    [Building_Date] date not null,
    [Status] varchar(70) not null,
    [Estate_Rating] int  null,
    [Estate_Type] varchar(100)  null,
    [Estate_Images_ID] int not null,
    [User_ID] int not null,
    /*Коммерческая недвижимость*/
    [Renovation] varchar(70)  null,
    [Room_Amount] int  null,
    [Purpose] varchar(1000)  null,
    [Possible_Purpose] varchar(1000)  null,
    [Adress] varchar(1000) not null,
    [Floor_Amount] int  null,
    [Floor] int  null,
    [Entrance] varchar(100)  null,

    Constraint [PK_Estate] Primary Key([ID_Estate]),
    constraint [FK_Estate_Image] foreign key (Estate_Images_ID)
    references [dbo].[Estate_Images] ([ID_Estate_Images]),
    constraint [FK_Estate_User] foreign key ([User_ID])
    references [dbo].[User] ([ID_User]),
    )
    go

    INSERT INTO [dbo].[Estate] (
    [Ad_Name],
    [Location],
    [Price],
    [Price_For_Month],
    [Mortgage_Price],
    [Area],
    [House_Area],
    [Metro_Station],
    [Train_Station],
    [Description],
    [Ad_Date],
    [Building_Date],
    [Status],
    [Estate_Rating],
    [Estate_Images_ID],
    [User_ID],
    [Renovation], -- Added column
    [Room_Amount], -- Added column
    [Purpose], -- Added column
    [Possible_Purpose], -- Added column
    [Adress], -- Corrected the column name
    [Floor_Amount], -- Added column
    [Floor], -- Added column
[Entrance] -- Added column
)
    VALUES (
               N'Уютная квартира у реки',
               N'Москва, Центральный район',
               2500000,
               50000,
               1200000,
               100,
               70,
               N'Станция метро "Центральная"',
               N'Ближайшая станция поезда "Центральная"',
               N'Просторная и светлая квартира с видом на реку.',
               '2023-09-04 08:11:11',
               '2020-01-01',
               N'Активно',
               5,
               1,
               2,
               NULL, -- Renovation
               NULL, -- Room_Amount
               NULL, -- Purpose
               NULL, -- Possible_Purpose
               N'Москва, Центральный район, ул. Центральная, дом 1', -- Address
               NULL, -- Floor_Amount
               NULL, -- Floor
               NULL -- Entrance
           ),
(
    N'Дом с садом',
    N'Санкт-Петербург, Периферийный район',
    3500000,
    60000,
    2000000,
    200,
    150,
    N'Ближайшая станция метро "Периферийная"',
    N'Ближайшая станция поезда "Периферийная"',
    N'Уютный дом с большим садом и гаражом.',
    '2023-09-05',
    '2019-02-01',
    N'Активно',
    4,
    2,
    2,
    NULL, -- Renovation
    NULL, -- Room_Amount
    NULL, -- Purpose
    NULL, -- Possible_Purpose
    N'Санкт-Петербург, Периферийный район, ул. Периферийная, дом 2', -- Address
    NULL, -- Floor_Amount
    NULL, -- Floor
    NULL -- Entrance
),
(
    N'Очень длинное название поместья очень крутое оно да ага круто супер здоровор ураааааааааа',
    N'Санкт-Петербург, Периферийный район',
    3500000,
    60000,
    2000000,
    200,
    150,
    N'Ближайшая станция метро "Периферийная"',
    N'Ближайшая станция поезда "Периферийная"',
    N'Уютный дом с большим садом и гаражом.',
    '2023-09-05',
    '2019-02-01',
    N'Активно',
    4,
    2,
    2,
    NULL, -- Renovation
    NULL, -- Room_Amount
    NULL, -- Purpose
    NULL, -- Possible_Purpose
    N'Санкт-Петербург, Периферийный район, ул. Периферийная, дом 3', -- Address
    NULL, -- Floor_Amount
    NULL, -- Floor
    NULL -- Entrance
);
go



INSERT INTO [dbo].[Estate] (
    [Ad_Name],
    [Location],
    [Price],
    [Price_For_Month],
    [Mortgage_Price],
    [Area],
    [House_Area],
    [Metro_Station],
    [Train_Station],
    [Description],
    [Ad_Date],
    [Building_Date],
    [Status],
    [Estate_Rating],
    [Estate_Images_ID],
	[User_ID]

)
VALUES (
    N'Уютная квартира у реки',
    N'Москва, Центральный район',
    2500000,
    50000,  -- Corrected the data type to int
    1200000,
    100,
    70,
    N'Станция метро "Центральная"',
    N'Ближайшая станция поезда "Центральная"',
    N'Просторная и светлая квартира с видом на реку.',
    '2023-09-04 08:11:11',
    '2020-01-01',
    N'Активно',
    5,
    1,
	2
),
(
    N'Дом с садом',
    N'Санкт-Петербург, Периферийный район',
    3500000,
    60000,  -- Corrected the data type to int
    2000000,
    200,
    150,
    N'Ближайшая станция метро "Периферийная"',
    N'Ближайшая станция поезда "Периферийная"',
    N'Уютный дом с большим садом и гаражом.',
    '2023-09-05',
    '2019-02-01',
    N'Активно',
    4,
    2,
	2

),
(
    N'Очень длинное название поместья очень крутое оно да ага круто супер здоровор ураааааааааа',
    N'Санкт-Петербург, Периферийный район',
    3500000,
    60000,  -- Corrected the data type to int
    2000000,
    200,
    150,
    N'Ближайшая станция метро "Периферийная"',
    N'Ближайшая станция поезда "Периферийная"',
    N'Уютный дом с большим садом и гаражом.',
    '2023-09-05',
    '2019-02-01',
    N'Активно',
    4,
    2,
	2
)
go


select * from [dbo].[Estate]
    GO

select * from [dbo].[Users]
    GO

select * from [dbo].[Estate] order by [ID_Estate] offset 0 Rows fetch next 1 rows only


INSERT INTO [dbo].[User] (
    [Name],
    [Surname],
    [Middle_Name],
    [Login],
    [Password],
    [Avatar],
    [Phone],
    [Location],
    [Description],
    [Average_Mark],
[Registration_Date]
)
VALUES (
    N'Анна',
    N'Иванова',
    N'Петровна',
    'anna',
    'пароль123',
    'url_аватара_1',
    '123456789',
    N'Москва',
    N'Профессиональный агент по недвижимости',
    4.8,
    '2019-02-01'
    ),
    (
    N'Петр',
    N'Сидоров',
    N'Иванович',
    'peter',
    'пароль456',
    'url_аватара_2',
    '987654321',
    N'Санкт-Петербург',
    N'Опытный риэлтор',
    4.5,
    '2019-02-01'
    ),
    (
    N'Петр',
    N'Сидоров',
    N'Иванович',
    'test',
    '$2y$10$NmrOO8LQW2FF6TUu.wj0H.wigt3NYRZs9BWq1WYxWckH5n5pS9r.W',
    'url_аватара_2',
    '987654321',
    N'Санкт-Петербург',
    N'Опытный риэлтор',
    4.5,
    '2019-02-01'
    )
    go

select * from [User];
select * from [Users];
select * from [role];
select * from [Estate];

create table [dbo].[Notification] (

    [ID_Notification] int not null identity(1,1),
    [Notification_Header] varchar (300) not null,
    [Notification_Text] varchar (300) not null,
    [Notification_Link] varchar(300) not null,
    [Notification_Flag] varchar(300) not null,
    [Notification_Date] datetime not null,
    [User_ID] int null,

    constraint [PK_Notification] primary key clustered
([ID_Notification] ASC) on [PRIMARY],
    constraint [FK_Notification_User] foreign key ([User_ID])
    references [dbo].[User] ([ID_User]),

    )
    go

--INSERT INTO [dbo].[Notification] (
--    [Notification_Header],
--    [Notification_Text],
--    [Notification_Link],
--    [Notification_Flag],
--    [Notification_Date],
--    [User_ID]
--)
--VALUES
--(
--    N'Новое объявление 1',
--    N'Посмотрите новое объявление о продаже квартиры в центре Москвы.',
--    '/estate/1',
--    'unread',
--    '2023-09-08T08:33:33',
--    1
--),
--(
--    N'Снижение цены 1',
--    N'Цена на дом садом в Петербурге снижена на 10%!',
--    '/estate/3',
--    'unread',
--    '2023-09-09T08:33:33',
--    2
--),
--(
--    N'Новое объявление 2',
--    N'Уютная квартира в старом городе.',
--    '/estate/4',
--    'unread',
--    '2023-09-08T08:33:33',
--   1
--),
--(
--    N'Снижение цены 2',
--    N'Специальное предложение: скидка на дом с озером!',
--    '/estate/5',
--    'unread',
--    '2023-09-08T08:33:33',
--    1
--),
--(
--    N'Новое объявление 3',
--    N'Квартира в новом жилом комплексе.',
--    '/estate/6',
--    'unread',
--    '2023-09-08T08:33:33',
--    1
--)
--go

create table [dbo].[User_Review](
    [ID_User_Review] int not null identity(1,1),
    [Review_Mark] int not null,
    [Review_Text] varchar(300),
    [Agency_Reciever_ID] int null,
    [User_Reviewer_ID] int null,
    [User_Reciever_ID] int null,
    constraint [PK_User_Review] primary key clustered
([ID_User_Review] ASC) on [PRIMARY],
    constraint [FK_User_Reciever] foreign key ([User_Reciever_ID])
    references [dbo].[User] ([ID_User]),
    constraint [FK_User_Reviewer] foreign key ([User_Reviewer_ID])
    references [dbo].[User] ([ID_User]),

    )
    go



--INSERT INTO [dbo].[User_Review] (
--    [Review_Mark],
--    [Review_Text],
--    [Agency_Reciever_ID],
--    [User_Reviewer_ID],
--    [User_Reciever_ID]
--)
--VALUES
--(
--    5,
--    N'Отличный агент, всегда помогает найти лучшие варианты.',
--    NULL,
--    2,
--    1
--),
--(
--    4,
--    N'Сделка прошла гладко, но немного долго.',
--    NULL,
--    1,
--    2
--),
--(
--    5,
--    N'Профессиональный риэлтор, рекомендую!',
--    NULL,
--    1,
--    1
--),
--(
--    4,
--    N'Все хорошо, но цена могла бы быть ниже.',
--    NULL,
--    1,
--    1
--),
--(
--    5,
--    N'Отличное обслуживание, рекомендую агента!',
--    NULL,
--   1 ,
--    1
--);
--go


create table [dbo].[Chat] (
    [ID_Chat] int not null identity(1,1),
    [Message] varchar (300) not null,
    [Agency_ID] int not null,
    [User_ID] int not null,
    [User2_ID] int not null,
    constraint [PK_Chat] primary key clustered
([ID_Chat] ASC) on [PRIMARY],
    constraint [FK_Chat_User1] foreign key ([User_ID])
    references [dbo].[User] ([ID_User]),
    constraint [FK_Chat_User2] foreign key ([User2_ID])
    references [dbo].[User] ([ID_User]),

    )
    go
--INSERT INTO [dbo].[Chat] (
--    [Message],
--    [Agency_ID],
--    [User_ID],
--    [User2_ID]
--)
--VALUES
--(
--    N'Здравствуйте! Хочу узнать больше о квартире 1.',
--    1,
--    1,
--    2
--),
--(
--    N'Добрый день! Какие есть варианты в вашем районе?',
--    1,
--    1,
--    1
--),
--(
--    N'Здравствуйте! Расскажите о доме с озером.',
--    1,
--    1,
--   1
--),
--(
--    N'Добрый день! Есть ли квартиры с мебелью?',
--    1,
--    1,
--    1
--),
--(
--    N'Здравствуйте! Подскажите про квартиру в новом комплексе.',
--    1,
--    1,
--    1
--);

select * from [dbo].[Estate]
    go


create table [dbo].[Declined_Ad] (

    [ID_Declined_Ad] int not null identity(1,1),
    [Reason] varchar (300) not null,
    [Estate_ID] int not null,
    [Moderator_ID] int not null,
    constraint [PK_Declined_Ad] primary key clustered
([ID_Declined_Ad] ASC) on [PRIMARY],
    constraint [FK_Declined_Ad_Estate] foreign key ([Estate_ID])
    references [dbo].[Estate] ([ID_Estate]),

    )
    go

--INSERT INTO [dbo].[Declined_Ad] (
--    [Reason],
--    [Estate_ID],
--    [Moderator_ID]
--)
--VALUES
--(
--    N'Недостоверная информация в объявлении 1.',
--    1,
--    1
--),
--(
--    N'Нарушение правил размещения объявлений 1.',
--    1,
--    2
--),
--(
--    N'Недостоверная информация в объявлении 2.',
--    1,
--    1
--),
--(
--    N'Нарушение правил размещения объявлений 2.',
--    1,
--    1
--),
--(
--    N'Недостоверная информация в объявлении 3.',
--    1,
--    1
--);

create table [dbo].[Watch_Later_Estates]
(
    [ID_Watch_Later_Estates] int not null identity(1,1),
    [Estate_ID] int not null,
    [User_ID] int not null,
    constraint [PK_Watch_Later_Estates] primary key clustered
([ID_Watch_Later_Estates] ASC) on [PRIMARY],
    constraint [FK_Watch_Later_Estates_Estate] foreign key ([Estate_ID])
    references [dbo].[Estate] ([ID_Estate]),
    constraint [FK_Watch_Later_Estates_User] foreign key ([User_ID])
    references [dbo].[User] ([ID_User]),
    )
    go

--INSERT INTO [dbo].[Watch_Later_Estates] (
--    [Estate_ID],
--    [User_ID]
--)
--VALUES
--(
--    1,
--    1
--),
--(
--    1,
--    1
--),
--(
--    1,
--    1
--),
--(
--    1,
--    1
--),
--(
--    1,
--    1
--);

create table [dbo].[Favourite_Estates]
(
    [ID_Favourite_Estates] int not null identity(1,1),
    [Estate_ID] int not null,
    [User_ID] int not null,
    constraint [PK_Favourite_Estates] primary key clustered
([ID_Favourite_Estates] ASC) on [PRIMARY],
    constraint [FK_Favourite_Estates_Estate] foreign key ([Estate_ID])
    references [dbo].[Estate] ([ID_Estate]),
    constraint [FK_Favourite_Estates_User] foreign key ([User_ID])
    references [dbo].[User] ([ID_User]),
    )
    go

--INSERT INTO [dbo].[Favourite_Estates] (
--    [Estate_ID],
--    [User_ID]
--)
--VALUES
--(
--    1,
--    1
--),
--(
--    1,
--    1
--),
--(
--    1,
--    2
--),
--(
--    1,
--    1
--),
--(
--   1,
--    1
--);

create table [dbo].[Tag]
(
    [ID_Tag] int not null identity(1,1),
    [Tag_Name] varchar(300) not null,
    constraint [PK_Tag] primary key clustered
([ID_Tag] ASC) on [PRIMARY]
    )
    go

    INSERT INTO [dbo].[Tag] (
[Tag_Name]
)
    VALUES
(
    N'Близко к метро'
),
(
    N'С ремонтом'
),
(
    N'С видом на воду'
),
(
    N'Большой участок'
),
(
    N'Мебель включена'
)
    go

select * from [dbo].[Users]
    go
select * from [dbo].[Estate]
    go
create table [dbo].[Tag_And_Estate]
(
    [ID_Tag_And_Estate] int not null identity(1,1),
    [Estate_ID] int not null,
    [Tag_ID] int not null,
    constraint [PK_Tag_And_Estate] primary key clustered
([ID_Tag_And_Estate] ASC) on [PRIMARY],
    constraint [FK_Tag_And_Estate_Estate] foreign key ([Estate_ID])
    references [dbo].[Estate] ([ID_Estate]),
    constraint [FK_Tag_And_Estate_Tag] foreign key ([Tag_ID])
    references [dbo].[Tag] ([ID_Tag]),
    )
    go

--INSERT INTO [dbo].[Tag_And_Estate] (
--    [Estate_ID],
--    [Tag_ID]
--)
--VALUES
--(
--    1,
--    1
--),
--(
--    1,
--    2
--),
--(
--    1,
--    1
--),
--(
--    1,
--    1
--),
--(
--    1,
--    1
--);

create table [dbo].[User_History_Watched] (

    [ID_User_History_Watched] int not null identity(1,1),

    [Estate_ID] int not null,
    [User_ID] int not null,

    constraint [PK_User_History_Watched] primary key clustered
([ID_User_History_Watched] ASC) on [PRIMARY],
    constraint [FK_User_History_Watched_Estate] foreign key ([Estate_ID])
    references [dbo].[Estate] ([ID_Estate]),
    constraint [FK_User_History_Watched_User] foreign key ([User_ID])
    references [dbo].[User] ([ID_User]),

    )
    go

select * from [Estate]
    go





select * from EstateView;
select * from [dbo].[User];


-- Create a view for Estate table
CREATE OR ALTER VIEW EstateView
AS
SELECT
    e.*,
    u.[Login] AS [User_Login],
    u.[Registration_Date] AS [User_Registration_Date]
FROM
    [dbo].[Estate] e
    JOIN
    [dbo].[User] u ON e.[User_ID] = u.[ID_User];
GO

CREATE OR ALTER VIEW EstateView
AS
SELECT
    e.*,
    u.[Login] AS [User_Login],
    u.[Registration_Date] AS [User_Registration_Date],
    ei.[Image1] AS [Estate_Image1]
FROM
    [dbo].[Estate] e
    JOIN
    [dbo].[User] u ON e.[User_ID] = u.[ID_User]
    LEFT JOIN
    [dbo].[Estate_Images] ei ON e.[Estate_Images_ID] = ei.[ID_Estate_Images];
GO

CREATE VIEW UserView
AS
SELECT [Login], [Password], [Avatar], [Registration_Date]
        FROM [dbo].[User];
GO


select * from EstateView
    go
select * from [dbo].[User]
    go
-- Create a view for User table
CREATE VIEW UserView
AS
SELECT *
FROM [dbo].[User];
GO
-- Create a view for Estate_Images table
CREATE VIEW EstateImagesView
AS
SELECT *
FROM [dbo].[Estate_Images];
GO
-- Create a view for Notification table
CREATE VIEW NotificationView
AS
SELECT *
FROM [dbo].[Notification];
GO
-- Create a view for User_Review table
CREATE VIEW UserReviewView
AS
SELECT *
FROM [dbo].[User_Review];
GO
-- Create a view for Chat table
CREATE VIEW ChatView
AS
SELECT *
FROM [dbo].[Chat];
GO
-- Create a view for Declined_Ad table
CREATE VIEW DeclinedAdView
AS
SELECT *
FROM [dbo].[Declined_Ad];
GO
-- Create a view for Watch_Later_Estates table
CREATE VIEW WatchLaterEstatesView
AS
SELECT *
FROM [dbo].[Watch_Later_Estates];
GO
-- Create a view for Favourite_Estates table
CREATE VIEW FavouriteEstatesView
AS
SELECT *
FROM [dbo].[Favourite_Estates];
GO
-- Create a view for Tag table
CREATE VIEW TagView
AS
SELECT *
FROM [dbo].[Tag];
GO
-- Create a view for Tag_And_Estate table
CREATE VIEW TagAndEstateView
AS
SELECT *
FROM [dbo].[Tag_And_Estate];
GO
-- Create a view for User_History_Watched table
CREATE VIEW UserHistoryWatchedView
AS
SELECT *
FROM [dbo].[User_History_Watched];
GO

select * from [dbo].[User]
    go

select * from [dbo].[Estate]
    go
--cоздание логинов с паролями
CREATE LOGIN [Admin_Estate] WITH PASSWORD = 'password';
CREATE LOGIN [User_Estate] WITH PASSWORD = 'password2';
--cоздание пользователей
CREATE USER [Admin_Estate] FOR LOGIN [Admin_Estate];
CREATE USER [User_Estate] FOR LOGIN [User_Estate];
--выдача прав на селект пользователю
GRANT SELECT ON [dbo].[UserReviewView] TO [User_Estate];
GRANT SELECT ON [dbo].[ChatView] TO [User_Estate];
GRANT SELECT ON [dbo].[DeclinedAdView] TO [User_Estate];
GRANT SELECT ON [dbo].[WatchLaterEstatesView] TO [User_Estate];
GRANT SELECT ON [dbo].[FavouriteEstatesView] TO [User_Estate];
GRANT SELECT ON [dbo].[TagView] TO [User_Estate];
GRANT SELECT ON [dbo].[TagAndEstateView] TO [User_Estate];
GRANT SELECT ON [dbo].[UserHistoryWatchedView] TO [User_Estate];
--выдача прав на SELECT, INSERT, UPDATE, DELETE админу
GRANT SELECT ON [dbo].[User] TO [Admin_Estate];
GRANT SELECT, INSERT, UPDATE, DELETE ON [dbo].[Estate_Images] TO [Admin_Estate];
GRANT SELECT, INSERT, UPDATE, DELETE ON [dbo].[User] TO [Admin_Estate];
GRANT SELECT, INSERT, UPDATE, DELETE ON [dbo].[Estate] TO [Admin_Estate];
--удаление прав на таблицу user у пользователя
DENY INSERT, UPDATE, DELETE ON [dbo].[User] TO [User_Estate];
