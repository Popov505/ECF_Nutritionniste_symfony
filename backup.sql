-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: ECF_nutritionniste
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `allergens`
--

DROP TABLE IF EXISTS `allergens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allergens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `allergen_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allergens`
--

LOCK TABLES `allergens` WRITE;
/*!40000 ALTER TABLE `allergens` DISABLE KEYS */;
INSERT INTO `allergens` VALUES (1,'oeuf'),(2,'lait'),(3,'moutarde'),(4,'arachide'),(5,'crustac├®'),(6,'poisson'),(7,'s├®same'),(8,'soja'),(9,'sulfite'),(10,'noix'),(11,'bl├®');
/*!40000 ALTER TABLE `allergens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_lastname` varchar(60) NOT NULL,
  `contact_firstname` varchar(60) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Rogue','Severus','06 01 02 03 24','ouvelle recette de gambas','severus.rogue@poudlard.com','Bonjour. Pourriez-vous ├®crire une recette de gambas au curry sans gluten, svp?'),(2,'Mcgonagall','Minerva','06 05 06 07 18','P├ótes ├á la bolognaise','minerva.mcgonagall@poudlard.com','Ayant un r├®gime sans sel, j\'ai test├® la recette de p├ótes ├á la bolognaise mais sans mettre de sel mais c\'est moins bon. C\'est normal?'),(3,'Black','Sirius','06 05 16 27 18','Demande d\'inscription','sirius.black@poudlard.com','Bonjour, comment fait-on pour s\'inscrire?'),(4,'Dumbledore','Albus','07 08 09 10 11','Gigots vegan','albus.dumbledore@poudlard.com','J\'ai beau chercher, je ne trouve pas de recette de gigot vegan. Pourriez-vous m\'envoyer le lien de la recette, svp?'),(5,'Longdubas','Neville','07 09 08 07 06','Recette d\'anguille grill├®e','neville.longdubas@poudlard.com','Bonjour,\r\nConnaitriez-vous une recette d\'anguille grill├®e?');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diets`
--

DROP TABLE IF EXISTS `diets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diet_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diets`
--

LOCK TABLES `diets` WRITE;
/*!40000 ALTER TABLE `diets` DISABLE KEYS */;
INSERT INTO `diets` VALUES (1,'v├®g├®tarien'),(2,'flexitarien'),(3,'anticholest├®rol'),(4,'sans sel'),(5,'sans gluten'),(6,'sans lactose'),(7,'hypocalorique');
/*!40000 ALTER TABLE `diets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20240229175843','2024-02-29 18:58:51',51),('DoctrineMigrations\\Version20240229180410','2024-02-29 19:04:14',13),('DoctrineMigrations\\Version20240301085920','2024-03-01 09:59:25',18),('DoctrineMigrations\\Version20240301090924','2024-03-01 10:09:27',9),('DoctrineMigrations\\Version20240301091141','2024-03-01 10:11:44',10),('DoctrineMigrations\\Version20240301091832','2024-03-01 10:19:07',10),('DoctrineMigrations\\Version20240301094925','2024-03-01 10:49:33',12),('DoctrineMigrations\\Version20240301100443','2024-03-01 11:04:46',31),('DoctrineMigrations\\Version20240301111853','2024-03-01 12:18:56',7),('DoctrineMigrations\\Version20240301115054','2024-03-01 12:50:58',164),('DoctrineMigrations\\Version20240301115443','2024-03-01 12:54:47',109),('DoctrineMigrations\\Version20240305095143','2024-03-05 10:51:47',14),('DoctrineMigrations\\Version20240305095358','2024-03-05 10:54:01',9),('DoctrineMigrations\\Version20240305095629','2024-03-05 10:56:32',8),('DoctrineMigrations\\Version20240305100246','2024-03-05 11:02:49',19),('DoctrineMigrations\\Version20240305101632','2024-03-05 11:16:37',29),('DoctrineMigrations\\Version20240305102009','2024-03-05 11:20:12',10),('DoctrineMigrations\\Version20240306161034','2024-03-06 17:10:37',91),('DoctrineMigrations\\Version20240307175443','2024-03-07 18:55:26',14),('DoctrineMigrations\\Version20240307180300','2024-03-07 19:03:02',7),('DoctrineMigrations\\Version20240308110342','2024-03-08 12:03:46',11),('DoctrineMigrations\\Version20240311152936','2024-03-11 16:29:42',28);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opinions`
--

DROP TABLE IF EXISTS `opinions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opinions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opinion_message` longtext NOT NULL,
  `opinion_rate` int(11) NOT NULL,
  `opinion_is_validated` tinyint(1) DEFAULT NULL,
  `opinion_users_id` int(11) DEFAULT NULL,
  `opinion_recipes_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BEAF78D09D513894` (`opinion_users_id`),
  KEY `IDX_BEAF78D0663983B3` (`opinion_recipes_id`),
  CONSTRAINT `FK_BEAF78D0663983B3` FOREIGN KEY (`opinion_recipes_id`) REFERENCES `recipes` (`id`),
  CONSTRAINT `FK_BEAF78D09D513894` FOREIGN KEY (`opinion_users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinions`
--

LOCK TABLES `opinions` WRITE;
/*!40000 ALTER TABLE `opinions` DISABLE KEYS */;
INSERT INTO `opinions` VALUES (1,'Cette recette est extraordinaire',5,1,2,10),(2,'Pas mal mais le repas revient cher',3,1,3,12),(3,'Le m├®lange est immonde, j\'ai vomi!!',1,0,2,8),(22,'Cette salade est d├®licieuse. J\'ai rajout├® une fondue de poireaux pour plus de go├╗ts.',5,0,4,1),(23,'J\'ai remplac├® la roquette par de l\'iceberg pour plus de croquant',4,0,4,2),(24,'Recette g├®niale, je me suis r├®gal├®',4,0,2,1);
/*!40000 ALTER TABLE `opinions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_title` varchar(255) NOT NULL,
  `recipe_description` varchar(255) DEFAULT NULL,
  `recipe_prep_duration` int(11) DEFAULT NULL,
  `recipe_rest_duration` int(11) DEFAULT NULL,
  `recipe_cook_duration` int(11) DEFAULT NULL,
  `recipe_ingredient` longtext NOT NULL,
  `recipe_step` longtext NOT NULL,
  `recipe_is_public` tinyint(1) NOT NULL,
  `recipe_image_name` varchar(255) DEFAULT NULL,
  `recipe_image_size` int(11) DEFAULT NULL,
  `recipe_image_updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `recipe_source` varchar(255) NOT NULL,
  `recipe_image_source` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (1,'Salade de chou blanc ├á la japonaise','Fameuse salade croquante de chou, vinaigr├®e-sucr├®e, dÔÇÖinspiration japonaise et vietnamienne.',10,260,0,'<div>1 petit chou blanc ou ┬¢ dÔÇÖun gros&nbsp;</div><div>graines de s├®same blanc grill├® (ou du gomasio)</div><div>300 ml de vinaigre de riz (├á d├®faut utiliser du vinaigre de cidre)&nbsp;</div><div>3 cuil. ├á soupe de sucre roux</div><div>sel fin</div><div>2 cuil. ├á soupe de nuoc-m├ón&nbsp;</div><div>3 cuil. ├á soupe dÔÇÖhuile neutre (tournesol ou autre)</div><div>1 cuil. ├á th├® de sauce soja</div>','<div>Coupez le chou tr├¿s fin : je lÔÇÖai fait au couteau, lÔÇÖid├®al cÔÇÖest de le faire avec une mandoline pour quÔÇÖil soit encore plus fin.&nbsp;<br>Disposez-le dans un grand saladier, recouvrez-le dÔÇÖeau froide, ajoutez une cuiller├®e ├á soupe de sel, m├®langez et laissez tremper 20 minutes.<br>La marinade<br>Versez le vinaigre dans un bol, ajoutez le sucre et une pinc├®e de sel et fouettez l├®g├¿rement avec une fourchette pour ├®mulsionner le tout.<br>Egouttez bien le chou. S├®cher le saladier et y remettre le chou.<br>Verser la marinade sur le chou et m├®langez bien. LÔÇÖid├®al est de m├®langer avec les mains ├á ce que le chou soit bien enrob├® de marinade.<br>Laissez mariner minimum 1 heure, possiblement 4 heures, comme jÔÇÖai fait. Cette ├®tape est fondamentale : gr├óce ├á cette marinade ├á base de vinaigre et sucre, le chou ramollit tout en restant croquant. Il va rendre de lÔÇÖeau et, chose importante, il devient plus digeste. Pour rendre son eau il a besoin de mariner longuement, voil├á pourquoi il vaut mieux pr├®voir 4 heures.<br>La salade<br>Au bout de ce temps, ├®gouttez le chou en le pressant tr├¿s fort entre vos mains, une poign├®e apr├¿s lÔÇÖautre, jusquÔÇÖ├á ce quÔÇÖil rende compl├¿tement son jus qui est ├á jeter, tout comme la marinade. Une fois bien ├®goutt├®, disposez le chou dans un autre saladier.<br>Assaisonnez la salade de chou avec la vinaigrette, pr├®par├®e en ├®mulsionnant dans un bol le nuoc-m├ón, lÔÇÖhuile et la sauce soja. Saupoudrez de s├®same grill├® et servez.</div>',1,'salade-chou-65eae0e3c2ce0212183343.jpg',235468,'2024-03-08 10:56:51','https://www.cuisine-libre.org/salade-de-chou-blanc-a-la-japonaise','Image par Max Franke de Pixabay'),(2,'Salade de roquette au vinaigre balsamique','La roquette a un go├╗t prononc├®, qui appr├®cie un assaisonnement doux',15,0,0,'<div>500 g de salade roquette<br>1 c. caf├® de moutarde ancienne<br>1 c. soupe de vinaigre balsamique<br>1 c. soupe dÔÇÖhuile dÔÇÖolive vierge extra</div>','<div>Jeter les feuilles ab├«m├®es ou fan├®es.<br>Couper les tiges si elles sont grosses.<br>Garder les feuilles tendres pour la salade.&nbsp;<br>Laver soigneusement sous lÔÇÖeau froide. ├ëgoutter. Essorer.<br>Pr├®parer la vinaigrette au fond du saladier, en m├®langeant moutarde et vinaigre.&nbsp;<br>Ajouter lÔÇÖhuile et ├®mulsionner.<br>Ajouter la roquette. M├®langer juste avant de servir</div>',0,'salade-roquette-65eae0f1226ca411824837.jpg',253367,'2024-03-08 10:57:05','https://www.cuisine-libre.org/salade-de-roquette','Image par Joanna Wielgosz de Pixabay'),(3,'Salade de champignons de Paris au parmesan','Une salade rapide, l├®g├¿re et fra├«che',15,0,0,'<div>200 g de champignons de Paris<br>1 ├®chalote<br>1 gousse dÔÇÖail<br>2 c. ├á soupe dÔÇÖhuile dÔÇÖolive vierge<br>1 c. ├á soupe de vinaigre balsamique<br>parmesan (en copeaux ou r├óp├®)<br>1/2 citron<br>sel<br>poivre</div>','<div>Nettoyer les champignons de Paris : les peler et enlever le pied.&nbsp;<br>Les couper en lamelles et les disposer dans un saladier.<br>Peler et ├®mincer lÔÇÖ├®chalote.<br>La m├®langer aux champignons.<br>Dans un ramequin ├á part, pr├®parer la vinaigrette : m├®langer huile dÔÇÖolive et vinaigre balsamique.&nbsp;<br>Comme les champignons vont boire tr├¿s vite la vinaigrette, la diluer avec 4 cuill├¿res ├á soupe dÔÇÖeau.&nbsp;<br>Peler lÔÇÖail, lÔÇÖ├®mincer et lÔÇÖajouter ├á la vinaigrette.&nbsp;<br>R├®server.<br>Juste avant le service, bien m├®langer la vinaigrette avec les champignons.&nbsp;<br>Verser progressivement en m├®langeant pour que tous les champignons soient parfum├®s.&nbsp;<br>Ajouter le parmesan et le jus du demi citron.&nbsp;<br>Servir</div>',1,'salade-champignons-65eae103f182e051961009.jpg',106634,'2024-03-08 10:57:23','https://www.cuisine-libre.org/salade-de-champignons-de-paris-au-parmesan','Image par -Rita-­ƒæ®ÔÇì­ƒì│ und ­ƒôÀ mit ÔØñ de Pixabay'),(4,'Salade argentine de c┼ôurs de palmier','Recette facile de salade',15,0,0,'<div>1 bo├«te de c┼ôurs de palmier, ├®goutt├®s, en rondelles<br>1 grappe de tomates cerises, coup├®es en deux<br>1 avocat pel├® et coup├® en d├¿s<br>1 c. ├á soupe de jus de citron vert<br>1 c. ├á soupe de jus dÔÇÖorange frais<br>┬╝ tasse dÔÇÖhuile dÔÇÖolive extra vierge<br>sel, poivre<br>oignons verts hach├®s<br>coriandre fra├«che cisel├®e</div>','<div>Dans le bol de service, m├®langer les jus, le sel, le poivre et lÔÇÖhuile.&nbsp;<br>Ajouter les oignons verts et la coriandre.<br>Ajouter les c┼ôurs de palmier, les tomates et lÔÇÖavocat.&nbsp;<br>M├®langer d├®licatement pour enrober</div>',0,'salade-argentine-65eae1159f881040836890.jpg',119382,'2024-03-08 10:57:41','https://www.cuisine-libre.org/salade-argentine-de-coeurs-de-palmier','Image par Bernadette Wurzinger de Pixabay'),(5,'Mamaliga (polenta roumaine)',NULL,5,30,0,'<div>2 tasses de semoule (ou farine tamis├®e) de ma├»s<br>4 ├á 5 tasses dÔÇÖeau<br>sel<br>beurre</div>','<div>Mettre lÔÇÖeau ├á chauffer dans un chaudron en fonte ou tch├»aoune. Saler et saupoudrer dÔÇÖun peu de semoule.<br>D├¿s le premier bouillon, ajouter la semoule en pluie, progressivement, tout en fouettant. Cesser de verser lorsque la mamaliga commence ├á ├®paissir mais continuer de fouetter constamment pour que le m├®lange reste lisse, pendant environ 20 minutes ├á petits bouillons, jusquÔÇÖ├á ce que tout le liquide ait ├®t├® absorb├® et quÔÇÖelle soit bien cuite.<br>Pour v├®rifier la cuisson, planter un b├óton rond (le manche dÔÇÖune cuill├¿re en bois) au milieu de la pr├®paration, en le faisant tourner sur lui-m├¬me : sÔÇÖil en ressort sec, la mamaliga est cuite. Sinon, poursuivre la cuisson.<br>├Ç lÔÇÖaide dÔÇÖune cuill├¿re en bois ramener la mamaliga des bords vers le milieu. Lisser et tasser la mamaliga en tapotant sur le dessus.<br>Renverser la mamaliga sur une planche en bois ou sur une assiette. Humecter de beurre fondu pour ├®viter quÔÇÖelle ne s├¿che en surface. Servir ti├¿de, en quartiers coup├®s au fil ├á beurre ou au couteau</div>',1,'mamaliga-65eae12199d18829780805.jpg',183540,'2024-03-08 10:57:53','https://www.cuisine-libre.org/mamaliga-polenta-roumaine','Image par Bernadette Wurzinger de Pixabay'),(6,'Soupe japonaise Gen Ma├»','Soupe traditionnelle du matin, dans les temples zen',20,60,120,'<div>125 g de riz rond (semi complet ou complet)<br>1 belle carotte<br>1 petit navet<br>1 petit poireau<br>1 branche de c├®leri (ajustez en fonction des l├®gumes que vous avez, chou, betterave, etc.)<br>4 bols dÔÇÖeau environ</div>','<div>Faites tremper le riz dans lÔÇÖeau ti├¿de (1h minimum pour du riz complet).<br>Dans une casserole, faites chauffer 4 bons bols dÔÇÖeau. ├Ç ├®bullition, ajoutez le riz et son eau de trempage et continuez la cuisson ├á feu plut├┤t fort.<br>Attendez que le riz soit tr├¿s cuit (les grains doivent ├¬tre bien ├®clat├®s). CÔÇÖest plus long avec du riz complet.<br>Ajoutez vos l├®gumes d├®coup├®s, saupoudrez dÔÇÖherbes aromatiques, et lorsque ├ºa bout de nouveau, r├®duisez le feu le plus possible. Remuez de temps en temps. Laissez sur le feu, 1h, 2h ou plus (traditionnellement, cette soupe cuit une nuit enti├¿re ├á feu tr├¿s doux).<br>Servez agr├®ment├® dÔÇÖun trait dÔÇÖhuile de s├®same, de gomasio, de paillettes de nori (algue s├®ch├®e), de piment, germes de bl├®, sauce soja, tamari, etc. suivant votre inspiration</div>',0,'soupe-japonaise-65eae1302e3e1555303715.jpg',297671,'2024-03-08 10:58:08','https://www.cuisine-libre.org/soupe-japonaise-gen-mai','Image par Frank from 5 AM Ramen de Pixabay'),(7,'Pasta alla carbonara','Recette traditionnelle des p├ótes ├á la carbonara, tr├¿s populaire dans la cuisine italienne, aussi bien dans les familles que dans les restaurants. ├Ç base de p├ótes, dÔÇÖ┼ôufs et de poivre noir fra├«chement moulu.',5,NULL,15,'<div>600 g de p├ótes italiennes s├¿ches [*] longues : spaghetti, linguine, rigatoni, bucatiniÔÇª<br>6 jaunes dÔÇÖ┼ôuf<br>250 g de guanciale (joue de porc) ou pancetta arrotolata affumicata (lard de poitrine roul├® et fum├®)<br>150 g de pecorino romano (ou parmesan)<br>poivre noir au moulin</div>','<div>Faire cuire les p├ótes al dente, dans une grande casserole dÔÇÖeau bouillante sal├®e, le temps indiqu├® sur le paquet, ├á bouillons continus.|Pendant ce temps, casser les ┼ôufs dans un bol en ne gardant que les jaunes. Ajouter le parmesan fra├«chement r├óp├®, poivrer. Battre le tout ├á la fourchette jusquÔÇÖ├á ce que la sauce soit cr├®meuse, presque mousseuse.|D├®barrasser le porc de sa peau et le tailler en d├¿s de 1 cm de c├┤t├®. Faire revenir ├á la po├¬le, sans ajouter de mati├¿re grasse. Quand ils sont bien color├®s, ├®teindre le feu et enlever la graisse.|Une fois cuites, ├®goutter les p├ótes rapidement, mais pas trop : il faut toujours garder un peu dÔÇÖeau pour les p├ótes en sauce, lÔÇÖ├®quivalent de 2 cuiller├®es. Verser aussit├┤t les p├ótes dans un saladier, avec les ┼ôufs battus et remuer sans arr├¬t pendant une minute, pour bien enrober les p├ótes : les ┼ôufs vont cuire un peu au contact des p├ótes chaudes et la pr├®paration ne doit pas sÔÇÖass├®cher. Ajouter le porc dor├®. M├®langer d├®licatement.|Servir aussit├┤t, dans des assiettes creuses, avec un peu de parmesan suppl├®mentaire et un tour de moulin ├á poivre.</div>',1,'pasta-carbonara-65eae13e48e35884467733.jpg',180741,'2024-03-08 10:58:22','https://www.cuisine-libre.org/pasta-alla-carbonara','Image par takedahrs de Pixabay'),(8,'Pilaf express au chorizo','Un plat unique, tr├¿s simple, facile ├á pr├®parer pour les grandes tabl├®es',15,0,30,'<div>4 kg de riz rond ├á pa├½lla ou ├á risotto<br>2 kg de saucissons de chorizo doux<br>2 kg de carottes<br>10 oignons<br>10 cubes de bouillon d├®shydrat├® de volaille<br>eau chaude</div>','<div>Couper le chorizo en rondelles. Le faire suer doucement au fond de la marmite, sans ajouter de mati├¿re grasse : le chorizo va rendre son gras, inutile dÔÇÖen ajouter ! Il ne doit pas noircir.<br>Peler et ├®mincer les oignons. Les faire revenir avec le chorizo, jusquÔÇÖ├á ce quÔÇÖils soient translucides.<br>Ajouter le riz. Remuer quelques instants, pour enrober tous les grains. Quand ils commencent ├á devenir translucides, ajouter le bouillon, pr├®alablement d├®lay├® dans un bol dÔÇÖeau chaude.<br>├ëplucher les carottes et les couper en rondelles, pas trop ├®paisses. Les ajouter. M├®langer. Couvrir et laisser cuire ├á feu doux.<br>Le tout doit prendre la belle couleur orang├®e du chorizo</div>',0,'pilaf-chorizo-65eae14ab00d9133274097.jpg',108566,'2024-03-08 10:58:34','https://www.cuisine-libre.org/pilaf-express-au-chorizo','Image par joanne heo de Pixabay'),(9,'G├óteau ├á la banane et p├®pites de chocolat (sans lactose)',NULL,10,60,60,'<div>3 bananes m├╗res (+ 1 banane pour le d├®cor)<br>2 ┼ôufs<br>80 g dÔÇÖhuile neutre (p├®pin de raisin ou nÔÇÖimporte quelle huile d├®sodoris├®e)<br>210 g farine<br>1/2 sachet de levure chimique<br>1 pinc├®e de sel<br>50 g cassonade<br>120 g chocolat noir cors├®</div>','<div>Pr├®chauffer le four ├á 160┬░C.<br>Mixer les 3 bananes avec les ┼ôufs et lÔÇÖhuile (ou ├®craser les bananes ├á la fourchette et m├®langer aux ┼ôufs et lÔÇÖhuile).<br>Ajouter : la farine, la levure chimique, le sel et la cassonade. M├®langer au fouet.<br>Concasser le chocolat en grosses p├®pites et les incorporer ├á la p├óte.<br>Verser la pr├®paration dans un moule ├á cake.<br>Trancher dans sa longueur la banane d├®corative. La disposer joliment sur cake puis enfourner pendant 1h. V├®rifiez la cuisson en pointant un couteau dedans : la lame doit ressortir s├¿che.<br>Laisser refroidir sur une grille</div>',1,'gateau-banane-65eae1586ac0c907594631.jpg',97182,'2024-03-08 10:58:48','https://www.cuisine-libre.org/gateau-a-la-banane-et-pepites-de-chocolat-sans-lactose','Image par Hans de Pixabay'),(10,'Tarte aux pommes, p├óte lev├®e',NULL,60,NULL,30,'<div>125 g de beurre<br>250 g de farine<br>1 pinc├®e de sel<br>15 g de levure de boulanger<br>5 g de sucre<br>1 ┼ôuf<br>1 tasse de lait<br>4 pommes Canada (ou dÔÇÖautres fruits de saison)</div>','<div>Diluer la levure avec le lait ti├¿de et le sucre dans une tasse.<br>M├®langer lÔÇÖensemble des ingr├®dients afin dÔÇÖobtenir une p├óte lisse et souple.<br>├ëtaler la p├óte dans un grand moule ├á tarte, pr├®alablement huil├®, en lÔÇÖ├®crasant avec le plat de la main et en la repoussant progressivement vers le bord.<br>Placer le moule au-dessus dÔÇÖune source de chaleur douce (35┬░C) afin de faire lever la p├óte pendant 30 ├á 45 minutes. La p├óte doit avoir doubl├® de volume.<br>Couper les pommes en lamelles et les mettre d├®licatement sur la p├óte sans lÔÇÖ├®craser.<br>Faire cuire entre 180 et 200┬░C pendant 25 ├á 30 minutes jusquÔÇÖ├á ce que les bords soient dor├®s</div>',0,'tarte-pommes-65eae1690330f615703910.jpg',252758,'2024-03-08 10:59:05','https://www.cuisine-libre.org/tarte-aux-pommes-pate-levee','Image par Hans de Pixabay'),(11,'G├óteau de Car├¬me (pitta nistissimi)',NULL,15,0,45,'<div>3 tasses de farine tout usage<br>┬¢ tasse de poudre dÔÇÖamandes<br>2 c. ├á caf├® de poudre ├á lever<br>1 c. ├á caf├® de bicarbonate de soude<br>1 tasse de jus dÔÇÖorange<br>zeste dÔÇÖorange r├óp├®<br>1 c. ├á caf├® de cannelle<br>┬╝ c. ├á caf├® de girofle moulue<br>┬¥ de tasse dÔÇÖhuile dÔÇÖolive ti├¿de<br>1 tasse de sucre<br>┬¢ tasse de raisins de Corinthe<br>┬¢ tasse de raisins de Smyrne<br>┬¢ tasse de noix hach├®es<br>┬¢ tasse dÔÇÖOuzo (facultatif)<br>├®claboussure dÔÇÖeau de rose<br>sucre glace</div>','<div>Diluez le bicarbonate de soude dans le jus dÔÇÖorange.|Tamisez la farine avec les amandes moulues, le zeste et les ├®pices. M├®langez bien.|Dans un grand bol, battez ensemble lÔÇÖhuile chaude, le sucre et le jus dÔÇÖorange.|Ajoutez le m├®lange de farine et m├®langez bien.|Ajoutez les fruits secs et les noix hach├®es, un shot dÔÇÖOuzo et une ├®claboussure dÔÇÖeau de rose. M├®langez bien.|Versez la p├óte dans un moule huil├® et farin├® de 22 x 32 cm et cuisez ├á four moyen pendant 45 minutes.|Laissez refroidir 5 minutes hors du four avant de d├®mouler d├®licatement. Une fois le g├óteau refroidi, transf├®rez dans un plat de service et saupoudrez de sucre glace</div>',1,'gateau-careme-65eae175921de216861029.jpg',268943,'2024-03-08 10:59:17','https://www.cuisine-libre.org/gateau-de-careme-pitta-nistissimi','Image par PeKu Publications de Pixabay'),(12,'Broy├® du Poitou',NULL,30,0,25,'<div>225 g de farine<br>100 g de sucre<br>125 g de beurre<br>8 g de sel<br>1 jaune dÔÇÖ┼ôuf</div>','<div>Verser tous les ingr├®dients dans un grand saladier.<br>P├®trir ├á la main jusquÔÇÖ├á obtention dÔÇÖune p├óte lisse.<br>├ëtaler la p├óte pour obtenir un cercle dÔÇÖenviron un centim├¿tre dÔÇÖ├®paisseur.<br>Dorer (un jaune dÔÇÖ┼ôuf, une pinc├®e de sel, quelques gouttes dÔÇÖeau ti├¿de) au pinceau.<br>D├®corer en tra├ºant des lignes avec une fourchette.<br>Faire cuire environ 15 ou 20 minutes ├á 190┬░C.<br>Sortez-le lorsque la couleur (dor├®e) est ├á votre go├╗t</div>',0,'broye-poitou-65eae1831666b965327906.jpg',165989,'2024-03-08 10:59:31','https://www.cuisine-libre.org/broye-du-poitou','Image par Daria-Yakovleva de Pixabay'),(13,'Biscuit au miel dÔÇÖOstara',NULL,15,0,45,'<div>100 g de miel<br>100 g de farine<br>50 g de beurre<br>Ôàö dÔÇÖun sachet de levure<br>1 ┼ôuf</div>','<div>Pr├®chauffer le four ├á 150┬░C/300┬░F.<br>Beurrer un moule de 22 cm de diam├¿tre. Tapisser de farine.<br>Mettre ├á chauffer le miel dans la casserole. Retirer lorsquÔÇÖil est tout juste ti├¿de. M├®langer avec le beurre et lÔÇÖ┼ôuf battu.<br>M├®langer la levure et la farine dans le chaudron.<br>Verser le m├®lange de miel, dÔÇÖ┼ôuf et de beurre. Bien m├®langer.<br>Verser la p├óte dans le moule.<br>Enfourner et cuire 45 min.<br>Attendre 5 min avant de d├®mouler sur une grille</div>',1,'gateau-miel-65eae193dda9c808466270.jpg',144461,'2024-03-08 10:59:47','https://www.cuisine-libre.org/biscuit-au-miel-d-ostara','Image par -Rita-­ƒæ®ÔÇì­ƒì│ und ­ƒôÀ mit ÔØñ de Pixabay');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes_allergens`
--

DROP TABLE IF EXISTS `recipes_allergens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipes_allergens` (
  `recipes_id` int(11) NOT NULL,
  `allergens_id` int(11) NOT NULL,
  PRIMARY KEY (`recipes_id`,`allergens_id`),
  KEY `IDX_EF93A5DAFDF2B1FA` (`recipes_id`),
  KEY `IDX_EF93A5DA711662F1` (`allergens_id`),
  CONSTRAINT `FK_EF93A5DA711662F1` FOREIGN KEY (`allergens_id`) REFERENCES `allergens` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EF93A5DAFDF2B1FA` FOREIGN KEY (`recipes_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes_allergens`
--

LOCK TABLES `recipes_allergens` WRITE;
/*!40000 ALTER TABLE `recipes_allergens` DISABLE KEYS */;
INSERT INTO `recipes_allergens` VALUES (1,6),(1,8),(2,3),(5,2),(7,1),(7,2),(9,1),(9,11),(10,1),(10,2),(11,10),(11,11),(12,1),(12,2),(12,11),(13,1),(13,2),(13,11);
/*!40000 ALTER TABLE `recipes_allergens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes_diets`
--

DROP TABLE IF EXISTS `recipes_diets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipes_diets` (
  `recipes_id` int(11) NOT NULL,
  `diets_id` int(11) NOT NULL,
  PRIMARY KEY (`recipes_id`,`diets_id`),
  KEY `IDX_2FC6AAF3FDF2B1FA` (`recipes_id`),
  KEY `IDX_2FC6AAF39B4CB3A8` (`diets_id`),
  CONSTRAINT `FK_2FC6AAF39B4CB3A8` FOREIGN KEY (`diets_id`) REFERENCES `diets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FC6AAF3FDF2B1FA` FOREIGN KEY (`recipes_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes_diets`
--

LOCK TABLES `recipes_diets` WRITE;
/*!40000 ALTER TABLE `recipes_diets` DISABLE KEYS */;
INSERT INTO `recipes_diets` VALUES (1,1),(1,2),(1,3),(1,5),(1,6),(1,7),(2,1),(2,2),(2,3),(2,4),(2,5),(2,6),(2,7),(3,1),(3,2),(3,5),(3,6),(3,7),(4,1),(4,2),(4,5),(4,6),(4,7),(5,1),(5,2),(6,1),(6,2),(6,3),(6,4),(6,5),(6,6),(6,7),(7,2),(8,2),(8,5),(8,6),(9,1),(9,2),(9,6),(10,1),(10,2),(11,1),(11,2),(11,4),(11,6),(12,1),(12,2),(13,1),(13,2),(13,4);
/*!40000 ALTER TABLE `recipes_diets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `user_lastname` varchar(60) NOT NULL,
  `user_firstname` varchar(60) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sandrine.coupart@poudlard.com','[\"ROLE_ADMIN\"]','$2y$13$32zB4ytXZQH5eIeC2kT52ux1KTHVK8N0huwi7zWF5myUS5ky6BAbu','coupart','sandrine','06 01 02 03 04'),(2,'ronald.weasley@poudlard.com','[]','$2y$13$TRRfA1SrVU4nl7Wqwhay.u6lg372mjA6O2eFsi33pi4J7BeDOnR02','weasley','ronald','06 05 06 07 08'),(3,'luna.lovegood@poudlard.com','[]','$2y$13$b8YeCyvNEDIcCxnAXaY5FuGLMFU92oHagTziLLAjDtt2x5iymJ9FC','lovegood','luna','06 09 08 07 06'),(4,'hermione.granger@poudlard.com','[]','$2y$13$eDjWu4xkwvRzRFzGzQ6w7OPvfI5Que7rJ8hRFrnHhBZWt482qCjrS','granger','hermione','06 08 07 06 05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_allergens`
--

DROP TABLE IF EXISTS `users_allergens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_allergens` (
  `users_id` int(11) NOT NULL,
  `allergens_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`allergens_id`),
  KEY `IDX_18AE55567B3B43D` (`users_id`),
  KEY `IDX_18AE555711662F1` (`allergens_id`),
  CONSTRAINT `FK_18AE55567B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_18AE555711662F1` FOREIGN KEY (`allergens_id`) REFERENCES `allergens` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_allergens`
--

LOCK TABLES `users_allergens` WRITE;
/*!40000 ALTER TABLE `users_allergens` DISABLE KEYS */;
INSERT INTO `users_allergens` VALUES (2,1),(3,11),(4,1);
/*!40000 ALTER TABLE `users_allergens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_diets`
--

DROP TABLE IF EXISTS `users_diets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_diets` (
  `users_id` int(11) NOT NULL,
  `diets_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`diets_id`),
  KEY `IDX_C78AAFEF67B3B43D` (`users_id`),
  KEY `IDX_C78AAFEF9B4CB3A8` (`diets_id`),
  CONSTRAINT `FK_C78AAFEF67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C78AAFEF9B4CB3A8` FOREIGN KEY (`diets_id`) REFERENCES `diets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_diets`
--

LOCK TABLES `users_diets` WRITE;
/*!40000 ALTER TABLE `users_diets` DISABLE KEYS */;
INSERT INTO `users_diets` VALUES (2,2);
/*!40000 ALTER TABLE `users_diets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-19 15:43:39
