SQLQuery: заполнение бд
-- Заполнение таблицы данными , каждая строка представляет из себя карточку товара с сайта , всего 5х4 (4 категории по 5 товаров)
-- 1. items with type = обувь (eng. shoes)
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('znSZNb0myk2XIOn4mWnUKg','FILA Sense Premium','6500','shoes','FILASensePremium.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('PT5KvR177U2nlxDQlluNdg','FILA Vibe','4759','shoes','FILAVibe.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('z1sZ9kmgo02cqlLybBu/bA','PUMA Scend Pro','6499','shoes','PUMAScendPro.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('5R+kG2IR7E6N17HBwyGh/w','PUMA Sky rocketLite','7500','shoes','PUMASkyrocketLite.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('RcB25rlaQUqVZatdVBKSIQ','PUMA SkyRocketLite black','5799','shoes','PUMASkyrocketLite_2.jpg');
-- 2. items with type = тренажер (eng. trainers)
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('1Gz9d6I8yEOZDKmDY2zahA','Torneo G-350','9125','trainers','Torneo G-350.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('P5mg8fw8xEewqbE23MbCAQ','KETTLER Air R1','42499','trainers','KETTLERAirR1.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('UyThYf+2+E6TsEd/hzdRHg','DentonStorm 3.0','43700','trainers','DentonStorm3.0.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('3PXX0tkf4kKZZWnyou8jRA','DentonStorm 1.0','37500','trainers','DentonStorm.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('eAgK3mE3C0+djN7+YgfmOg','KETTLER Rivo 4','53000','trainers','KETTLERRivo4.jpg');
-- 3. items with type = верхняя одежда (eng. ucloses)
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('2XdrH8jK+EimEDLJ3h2dfg','ColumbiaLabyrinthLoopHoodedJacket','2499','ucloses','ColumbiaLabyrinthLoopHoodedJacket.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('bnVUolu34k2qxGIa8PbgUw','Demix','4999','ucloses','Demix.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('n2udoIyb7USATC5YjfjSKQ','PUMA Coat 1.0','3450','ucloses','PUMA_xudi.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('bFONkpSqe0qw2f5u8PLJug','PUMA Coat 2.0','4299','ucloses','PUMA_xudi_2.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('8OzR9jODH06uzSkqj3AjfA','Outventure','4000','ucloses','Outventure.jpg');
-- 4. items with type = самокаты (eng. scooters)
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('xcTSbEuGPUyAifuSlWE18A','Globber GS900 Deluxe','12400','scooters','GlobberGS900Deluxe.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('eoMbV4pb4ka6athHuxW4pw','ReactionStunt 2.0','8700','scooters','ReactionStunt2.0.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('TWLTrCVnmUC7QCagVI5v8Q','ReactionStunt 3.0','9850','scooters','ReactionStunt3.0.jpg');
INSERT INTO `shop_items`(`id`, `caption`, `cost`, `type`, `image`) VALUES ('oL2hDD8du0q3Vt2yFY48Ow','ReactionStunt 4.0','11600','scooters','ReactionStunt4.0.jpg');

БазаДанных
Сервер: localhost
имя пользователя: roo
пароль: root
название_бд: krinyetski
sql_порт: 3306
имя_таблицы: shop_items

Для полноценной работы скачай OpenServer или XAMPP