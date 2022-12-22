CREATE DATABASE IF NOT EXISTS `l2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `l2`;
-- MySQL dump 10.13  Distrib 8.0.30, for macos12 (x86_64)
--
-- Host: localhost    Database: l2
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE = @@TIME_ZONE */;
/*!40103 SET TIME_ZONE = '+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0 */;
/*!40101 SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES = @@SQL_NOTES, SQL_NOTES = 0 */;

--
-- Table structure for table `menu_item`
--

DROP TABLE IF EXISTS `menu_item`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_item`
(
    `id_item`  int unsigned NOT NULL AUTO_INCREMENT,
    `name`     varchar(45)  NOT NULL,
    `price`    int          NOT NULL,
    `recepie`  text         NOT NULL,
    `picture`  varchar(255) DEFAULT NULL,
    `place_id` int          NOT NULL,
    PRIMARY KEY (`id_item`),
    UNIQUE KEY `id_UNIQUE` (`id_item`),
    KEY `place_id_idx` (`place_id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 11
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_item`
--

LOCK TABLES `menu_item` WRITE;
/*!40000 ALTER TABLE `menu_item`
    DISABLE KEYS */;
INSERT INTO `menu_item`
VALUES (2, 'Оладьи из нута', 230,
        'Кинзу измельчить. Отварить нут до мягкого состояния. Воду слить. Переложить нут в чашу блендера, взбить. Добавить к нуту нутовую муку, сухари, измельчённую кинзу, соль и немного воды, все взбить. Воду добавлять понемногу, чтобы образовалась достаточно плотная масса. Дать массе немного постоять.',
        'nute.jpg', 1),
       (4, 'Салат свекольный с кунжутом', 130,
        '                    Свеклу промыть, очистить, измельчить на терке. Поместить тертую свеклу в миску, полить лимонным соком, посолить, поперчить, перемешать.                ',
        'salad.jpg', 2),
       (5, 'Суп овощной', 320,
        'Картофель вымыть, очистить и нарезать средними кубиками. Морковь вымыть, очистить и измельчить на тёрке. Лук репчатый очистить и измельчить.',
        'soup.jpg', 3),
       (9, 'Кротовуха', 999,
        '                    лучше не знать                ',
        '45c48cce2e2d7fbdea1afc51c7c6ad26jpg', 1);
/*!40000 ALTER TABLE `menu_item`
    ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `place`
(
    `id`         int unsigned NOT NULL AUTO_INCREMENT,
    `place_name` varchar(45)  NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 4
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `place`
--

LOCK TABLES `place` WRITE;
/*!40000 ALTER TABLE `place`
    DISABLE KEYS */;
INSERT INTO `place`
VALUES (1, 'test_place_1'),
       (2, 'test_place_2'),
       (3, 'test_place_3');
/*!40000 ALTER TABLE `place`
    ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user`
(
    `id`            int NOT NULL AUTO_INCREMENT,
    `fio`           varchar(20) DEFAULT NULL,
    `email`         varchar(50) DEFAULT NULL,
    `password`      varchar(60) DEFAULT NULL,
    `vk`            varchar(50) DEFAULT NULL,
    `blood_type`    varchar(10) DEFAULT NULL,
    `rhesus_factor` varchar(10) DEFAULT NULL,
    `sex`           varchar(30) DEFAULT NULL,
    `address`       varchar(45) DEFAULT NULL,
    `birthday`      datetime    DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id` (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 7
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user`
    DISABLE KEYS */;
INSERT INTO `user`
VALUES (6, 'zxccczxc', 'clicker.heroes.acg@gmail.com', 'penis1488', 'dasdasd',
        'aa', '+', 'Female', 'asdasdasdas', '2022-12-07 00:00:00');
/*!40000 ALTER TABLE `user`
    ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE = @OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE = @OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES = @OLD_SQL_NOTES */;

-- Dump completed on 2022-12-22  2:55:12
