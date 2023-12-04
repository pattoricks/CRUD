-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for latihan
CREATE DATABASE IF NOT EXISTS `latihan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `latihan`;

-- Dumping structure for table latihan.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table latihan.buku: ~10 rows (approximately)
INSERT INTO `buku` (`id`, `gambar`, `judul`, `tipe`, `warna`, `harga`) VALUES
	(1, 'buku1.jpg', 'komik naruto', 'komik', 'white', 15000.00),
	(2, 'buku2.jpg', 'komik aot', 'komik', 'black', 250000.00),
	(3, 'buku3.jpg', 'komik one piece', 'komik', 'white', 2000000.00),
	(4, 'buku4.jpg', 'komik demon', 'komik', 'red', 300000.00),
	(5, 'buku5.jpg', 'komik jujutsu', 'komik', 'black', 350000.00),
	(6, 'buku6.jpg', 'komik tsubatsa', 'komik', 'white', 4000000.00),
	(7, 'buku7.jpg', 'Komik classroom', 'komik', 'white', 450000.00),
	(8, 'buku8.jpg', 'komik doraemon', 'komik', 'black', 500000.00),
	(9, 'buku9.jpg', 'komik spy', 'komik', 'white', 550000.00),
	(10, 'buku10.jpg', 'komik boruto', 'komik', 'black', 600000.00);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
