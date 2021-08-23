# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.22)
# Database: phptraining
# Generation Time: 2021-08-19 08:54:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table login
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;

INSERT INTO `login` (`id`, `username`, `pwd`)
VALUES
	(1,'adminnew','admin123'),
	(2,'vaibhav','deepak123');

/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `address` text,
  `username` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `address`, `username`, `pwd`)
VALUES
	(1,'Leo','Navarro','cubilia.Curae@euplacerat.org','16620201 9300','2527 Sagittis Rd.',NULL,NULL),
	(2,'Upton','Romero','erat.vitae.risus@rutrummagna.co.uk','16720328 3739','Ap #241-7337 Diam. Rd.',NULL,NULL),
	(3,'Brody','Elliott','erat@Maecenasiaculis.net','16731112 6481','3370 Scelerisque, St.',NULL,NULL),
	(4,'Ali','Hayes','mauris@Crassedleo.ca','16830512 9119','Ap #257-562 Et Ave',NULL,NULL),
	(5,'Quamar','Bowman','lorem@nibhlaciniaorci.co.uk','16141111 0412','P.O. Box 759, 9404 Sodales Street',NULL,NULL),
	(6,'Odysseus','Guthrie','mi@Sedmolestie.ca','16751117 9611','P.O. Box 425, 8849 Fusce St.',NULL,NULL),
	(7,'Leroy','Huber','ultricies.adipiscing@erat.org','16360604 0537','8331 Dolor Road',NULL,NULL),
	(8,'Marvin','Sykes','diam.dictum.sapien@luctus.co.uk','16460221 3169','308-5646 Malesuada Ave',NULL,NULL),
	(9,'Chadwick','Mcdaniel','luctus@dictum.org','16880826 7168','5032 Libero. Rd.',NULL,NULL),
	(10,'Carter','Wallace','egestas@tinciduntnunc.co.uk','16770909 0976','P.O. Box 849, 3276 Egestas Av.',NULL,NULL),
	(11,'Dieter','Leon','rhoncus.Proin@nulla.co.uk','16051002 4995','Ap #445-6605 Auctor St.',NULL,NULL),
	(12,'Murphy','Norman','dis@malesuadafames.net','16330426 0593','Ap #236-291 Nibh Rd.',NULL,NULL),
	(13,'Malcolm','Flynn','eu@vitae.co.uk','16001116 5487','233-2060 In, Road',NULL,NULL),
	(14,'Jelani','Gill','tempus.eu@diam.net','16981209 8086','Ap #229-6714 Lorem, Avenue',NULL,NULL),
	(15,'Ronan','Vasquez','ut.pharetra.sed@enim.net','16341025 3847','P.O. Box 154, 6839 Donec St.',NULL,NULL),
	(16,'Paki','Stephens','egestas.a@acfermentum.net','16100413 5602','3269 Nec Road',NULL,NULL),
	(17,'Jamal','Bridges','nunc@magnaaneque.edu','16570511 5219','Ap #345-6059 Quis Ave',NULL,NULL),
	(18,'Rashad','Morales','morbi@dolordolor.ca','16350717 6778','754-6894 Suspendisse Av.',NULL,NULL),
	(19,'Jerry','Puckett','at.velit@magna.edu','16260327 1129','Ap #634-2726 Amet, Rd.',NULL,NULL),
	(20,'Hoyt','Alford','Pellentesque.habitant@vulputatemauris.co.uk','16560606 5265','P.O. Box 480, 6746 Libero Ave',NULL,NULL),
	(21,'Conan','Gay','magna@atlibero.net','16300217 4872','481-4348 Sem Street',NULL,NULL),
	(22,'Armand','Bentley','et.risus.Quisque@Vivamussit.org','16150716 4216','6151 Vivamus Street',NULL,NULL),
	(23,'Brandon','Osborne','sit@cursusvestibulum.com','16400704 1843','P.O. Box 697, 1613 Gravida St.',NULL,NULL),
	(24,'Barry','Daugherty','torquent.per@Seddictum.org','16010610 1298','632 Mauris Avenue',NULL,NULL),
	(25,'Kadeem','Winters','Sed.nulla@duiFuscealiquam.edu','16080705 9522','468-9963 Tempor Ave',NULL,NULL),
	(26,'Carson','Benson','ullamcorper.magna@nullaInteger.com','16920901 3755','8455 Odio Rd.',NULL,NULL),
	(27,'Tanner','Martin','sed@faucibusorciluctus.co.uk','16250826 2538','598 Quis, Rd.',NULL,NULL),
	(28,'Kibo','Chaney','augue.id.ante@anteipsumprimis.co.uk','16211124 6605','P.O. Box 633, 558 Ac Road',NULL,NULL),
	(29,'Walker','Mcleod','Aliquam.vulputate.ullamcorper@feugiat.co.uk','16560915 8026','9877 Velit Road',NULL,NULL),
	(30,'Talon','Castillo','dictum.Phasellus.in@Curabiturvel.net','16060213 0221','P.O. Box 705, 5990 Nibh. Avenue',NULL,NULL),
	(31,'Simon','Peck','ornare.egestas.ligula@vitae.com','16860223 9033','967-1942 Congue Av.',NULL,NULL),
	(32,'Deacon','Sandoval','faucibus.orci.luctus@malesuada.ca','16510615 4452','Ap #863-6087 Aliquet, Av.',NULL,NULL),
	(33,'Basil','Burke','est.Nunc@mauriseu.edu','16980130 9973','420-663 In Road',NULL,NULL),
	(34,'Aidan','Coffey','urna.suscipit@Morbimetus.ca','16661227 6359','Ap #231-4653 Etiam Ave',NULL,NULL),
	(35,'Reuben','Adams','interdum.Sed@Mauris.co.uk','16111005 1768','326-6283 Amet, Rd.',NULL,NULL),
	(36,'Clayton','Ortiz','volutpat.nunc@ullamcorpernislarcu.co.uk','16671116 1510','8471 Ullamcorper Rd.',NULL,NULL),
	(37,'Lev','Schroeder','luctus@ornare.com','16110102 8791','349-1321 Montes, Road',NULL,NULL),
	(38,'Abbot','Langley','vehicula@ligulaelitpretium.edu','16830204 9401','P.O. Box 716, 5864 Vitae, St.',NULL,NULL),
	(39,'Abel','Acosta','id.magna.et@dictummi.com','16640716 5619','P.O. Box 416, 6276 Tellus, St.',NULL,NULL),
	(40,'Holmes','Ashley','diam.nunc@anteNunc.org','16110620 7036','P.O. Box 686, 5040 Aenean St.',NULL,NULL),
	(41,'Caesar','Mcconnell','at.fringilla.purus@Cras.net','16081126 6410','Ap #191-5118 Interdum St.',NULL,NULL),
	(42,'Merrill','Peterson','et@hendrerita.ca','16430722 7555','9748 Justo. St.',NULL,NULL),
	(43,'Charles','Hamilton','quis.diam@ullamcorper.net','16070530 8260','486-868 Nec, St.',NULL,NULL),
	(44,'Nero','Wilcox','Duis@Proinvelarcu.org','16360520 9166','2220 Ipsum. Av.',NULL,NULL),
	(45,'Gabriel','Pratt','elementum.dui@faucibusutnulla.net','16570701 7959','9016 Dolor St.',NULL,NULL),
	(46,'Owen','Nunez','erat.nonummy.ultricies@loremlorem.co.uk','16190523 4116','P.O. Box 803, 3477 In Road',NULL,NULL),
	(47,'Brady','Foreman','volutpat.Nulla@lacinia.org','16660509 6699','1505 Vitae, Avenue',NULL,NULL),
	(48,'Eagan','Mcintyre','ante.ipsum@ac.net','16021006 7880','9917 Tempor Av.',NULL,NULL),
	(49,'Porter','Wilson','eu@viverraMaecenasiaculis.net','16010916 8542','585-7335 Nonummy Avenue',NULL,NULL),
	(50,'Quentin','Wyatt','augue@posuere.com','16500402 4856','P.O. Box 273, 2162 Enim. Avenue',NULL,NULL),
	(51,'Harlan','Curry','consectetuer@egetnisidictum.co.uk','16860528 0364','P.O. Box 834, 4619 Feugiat Ave',NULL,NULL),
	(52,'Garrison','Chase','mollis@purusNullamscelerisque.com','16581023 0291','9208 Pede St.',NULL,NULL),
	(53,'Finn','Bauer','pulvinar.arcu.et@amet.co.uk','16271107 5339','Ap #238-4342 Ornare, Road',NULL,NULL),
	(54,'Cruz','Ford','nec@atnisi.ca','16720730 5637','Ap #169-3443 Proin Av.',NULL,NULL),
	(55,'Kyle','Howe','aliquam.enim@nibhQuisquenonummy.org','16440726 2098','P.O. Box 374, 4644 Sagittis Rd.',NULL,NULL),
	(56,'Garth','Harris','ipsum.Curabitur.consequat@lorem.org','16381122 9339','P.O. Box 625, 4627 Tortor. St.',NULL,NULL),
	(57,'Zachary','Clemons','ac.turpis.egestas@quisarcu.net','16941111 4870','Ap #427-8587 Ipsum St.',NULL,NULL),
	(58,'Addison','Clark','Mauris.quis.turpis@etrutrumnon.edu','16620219 4897','147-6343 Magna. Ave',NULL,NULL),
	(59,'Ignatius','Aguirre','a@nonmassa.org','16951106 2953','873-252 Quis, St.',NULL,NULL),
	(60,'Rudyard','Newton','non@eget.net','16231205 0632','P.O. Box 263, 4889 Euismod Ave',NULL,NULL),
	(61,'Damian','Daniel','est.arcu.ac@incursus.co.uk','16060106 2995','Ap #244-9524 Ipsum Ave',NULL,NULL),
	(62,'Griffin','Hammond','Suspendisse@dictum.com','16131012 1585','192 In Avenue',NULL,NULL),
	(63,'Donovan','Macias','et.nunc.Quisque@mattis.com','16540319 5661','Ap #753-8140 Sit Av.',NULL,NULL),
	(64,'Coby','Allison','mi.tempor@rutrummagnaCras.co.uk','16530626 2568','7365 Semper Rd.',NULL,NULL),
	(65,'Ryan','Monroe','torquent.per@malesuada.co.uk','16450208 0106','P.O. Box 560, 8174 Pede. St.',NULL,NULL),
	(66,'Kato','Holden','sit.amet@vitaemaurissit.net','16371001 3362','707-9680 Nullam St.',NULL,NULL),
	(67,'Palmer','Peters','nibh.vulputate.mauris@Sedeu.co.uk','16450827 9595','8362 Quam, St.',NULL,NULL),
	(68,'Phelan','Riddle','euismod.in.dolor@egestasurna.edu','16941130 9975','P.O. Box 652, 3199 A, Street',NULL,NULL),
	(69,'Alvin','Herman','mauris.sagittis@miAliquamgravida.org','16711023 5392','Ap #411-8098 Blandit Avenue',NULL,NULL),
	(70,'Jacob','Howell','Sed.eu.eros@anteblanditviverra.co.uk','16590510 4849','P.O. Box 160, 850 Augue Ave',NULL,NULL),
	(71,'Igor','Hopper','tincidunt@etmalesuada.co.uk','16240716 4371','354-7227 Non Street',NULL,NULL),
	(72,'Fritz','Bentley','in.felis@tempor.net','16530604 2150','P.O. Box 897, 8807 Varius Street',NULL,NULL),
	(73,'Christopher','Mendez','lectus@ac.edu','16270506 3739','817-1592 In Avenue',NULL,NULL),
	(74,'Herrod','Roth','Sed.molestie.Sed@malesuada.co.uk','16871012 6270','Ap #848-3476 Sociis Street',NULL,NULL),
	(75,'Bert','Cook','vel.arcu@commodo.net','16110404 1213','3920 Sed St.',NULL,NULL),
	(76,'Cyrus','Higgins','magnis.dis@loremipsum.edu','16500102 2713','8872 Curabitur Av.',NULL,NULL),
	(77,'Berk','Griffin','at.pede.Cras@duiaugue.ca','16830722 8216','6805 Aenean St.',NULL,NULL),
	(78,'Avram','Carney','pulvinar@consectetuer.net','16680511 7071','P.O. Box 701, 5670 Odio Av.',NULL,NULL),
	(79,'James','Mayo','orci.Donec@semegestas.com','16850323 2756','Ap #391-4665 Semper Rd.',NULL,NULL),
	(80,'Lucian','Dunlap','posuere@nunc.ca','16270126 0255','635-2079 Amet, Av.',NULL,NULL),
	(81,'August','Guerrero','aliquet@sitamet.org','16410918 9540','Ap #170-5181 Nec Rd.',NULL,NULL),
	(82,'Harrison','Blanchard','nibh@ligula.net','16060816 7664','P.O. Box 863, 8345 Sit Rd.',NULL,NULL),
	(83,'Damian','Schroeder','hymenaeos.Mauris.ut@imperdiet.co.uk','16340315 1925','9412 Lacinia Road',NULL,NULL),
	(84,'Talon','Griffin','sem.molestie.sodales@acfacilisis.ca','16930507 8926','820-8022 Enim, St.',NULL,NULL),
	(85,'Cameron','Gardner','gravida.non@orciadipiscingnon.org','16351124 0529','784-8459 Hendrerit Avenue',NULL,NULL),
	(86,'Kyle','Leonard','tortor@massaIntegervitae.ca','16190310 0715','P.O. Box 342, 5400 Ac Street',NULL,NULL),
	(87,'Ivan','Oneill','Integer.aliquam@felispurus.co.uk','16500311 3163','659-4741 Eu Rd.',NULL,NULL),
	(88,'Ahmed','Mercer','venenatis@AliquamnislNulla.net','16870830 1125','Ap #311-8975 Quam, St.',NULL,NULL),
	(89,'Ezekiel','Harvey','Cras.convallis.convallis@Quisquenonummyipsum.org','16031117 7224','P.O. Box 194, 2056 Velit Street',NULL,NULL),
	(90,'Abel','Soto','magna.et.ipsum@scelerisquesedsapien.edu','16210918 9387','P.O. Box 282, 2511 Eu Street',NULL,NULL),
	(91,'Lucius','Horn','Quisque.ornare.tortor@molestie.ca','16260617 9501','Ap #264-5832 Accumsan Ave',NULL,NULL),
	(92,'Jin','Mayo','lorem.eu@sempertellusid.com','16310606 9374','Ap #382-8260 Dis Street',NULL,NULL),
	(93,'Hunter','Cochran','Curabitur@eget.edu','16880521 4643','643-1104 Vel, Street',NULL,NULL),
	(94,'Jerry','Ramsey','sagittis@rutrumeuultrices.com','16190512 7393','Ap #648-2421 Mollis. Road',NULL,NULL),
	(95,'Myles','Noel','at.fringilla@lacusAliquamrutrum.co.uk','16310728 9138','835-9082 Odio Ave',NULL,NULL),
	(96,'Tarik','Workman','quis@sed.co.uk','16070328 3440','543 Sapien, Street',NULL,NULL),
	(97,'Roth','Curtis','Cum.sociis.natoque@sagittisaugue.net','16161004 3414','P.O. Box 287, 5196 Leo. Avenue',NULL,NULL),
	(98,'Harding','Boone','diam.at.pretium@eudolor.ca','16150724 3093','8957 Curabitur Ave',NULL,NULL),
	(99,'Ira','Duke','Morbi.accumsan@atpretiumaliquet.net','16770426 4303','Ap #801-3005 Risus. Av.',NULL,NULL),
	(100,'Damon','Hill','in@cursusNuncmauris.net','16401219 1484','906-4896 Semper Avenue',NULL,NULL),
	(101,'Deepak','Yadav','deepak@gmail.com','19767994372','2527 dehu alandi Rd. moshi pune 412105',NULL,NULL),
	(102,'Octavia','Baird','mauris.Morbi@feugiat.org','16940826 4225','P.O. Box 343, 1146 Metus. Road',NULL,NULL),
	(103,'Kaitlin','Leblanc','adipiscing@metus.org','16580125 3302','Ap #190-3227 Aliquet Avenue',NULL,NULL),
	(104,'Scarlet','Moses','nulla.In.tincidunt@justofaucibus.net','16460426 0093','262-5849 Magna. St.',NULL,NULL),
	(105,'Kirestin','Williamson','penatibus.et.magnis@Craseget.com','16140404 3364','P.O. Box 834, 7324 Duis Av.',NULL,NULL),
	(106,'Mariko','Estrada','risus.In.mi@apurusDuis.net','16851218 1937','Ap #444-9774 Mauris Av.',NULL,NULL),
	(107,'Kaden','Evans','convallis.ligula@gravida.edu','16980928 2859','Ap #129-436 Quam Rd.',NULL,NULL),
	(108,'Christen','Kent','nec@magnisdisparturient.org','16630124 3835','P.O. Box 944, 8636 Phasellus Street',NULL,NULL),
	(109,'Wynne','Cook','aliquet.vel.vulputate@laoreet.ca','16430413 7203','135-4176 Sed Street',NULL,NULL),
	(110,'Aurora','Chambers','sagittis.Nullam@Aeneanegetmetus.ca','16211213 0709','P.O. Box 946, 7071 Arcu. Street',NULL,NULL),
	(111,'Nola','Palmer','gravida.nunc.sed@orciDonec.edu','16910823 7257','Ap #646-1368 Et Rd.',NULL,NULL),
	(112,'Rashmi','Sate','rashmi@feugiat.org','16940826 4225','P.O. Box 343, 1146 Metus. Road',NULL,NULL),
	(114,'Vijay','Yadav','vijay@gmail.com','9767994372','Dehu Alandi Road',NULL,NULL),
	(115,'Sachin','Tendulkar','sachin@gmail.com','9767994372','B2-303,WoodsVille Phase I,Borahadewadi,Gat No 97,Moshi',NULL,NULL),
	(116,'Umesh','Yadav','umesh.7178@gmail.com','9767994372','Dehu Alandi Road',NULL,NULL),
	(117,'Manish','Yadav','manish.7178@gmail.com','9767994372','Dehu Alandi Road','manish','manish123'),
	(118,'Priya','Yadav','priya.7178@gmail.com','9767994372','Dehu Alandi Road','priya','48467d2cc726e8847fbc51f5b0bdc1d1'),
	(119,'Nilam','Jadhav','nilam@gmail.com','9767994371','dfdf asdfdsafsadfsadf asdfasdfasdfasd\r\nasdfasdfsadfasd asdfsadf','nilam','bab1ef28b83e3b13934ab50a54b20549'),
	(120,'Deepak New','Yadav','deep.7178@gmail.com','9767994372','Dehu Alandi Road','deepak','3b8f9fa2e58b5e835028f1dafc2de1fa');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
