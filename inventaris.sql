-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project_inventaris
CREATE DATABASE IF NOT EXISTS `project_inventaris` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project_inventaris`;

-- Dumping structure for table project_inventaris.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `barang_id` int NOT NULL AUTO_INCREMENT,
  `barang_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project_inventaris.barang: ~0 rows (approximately)
DELETE FROM `barang`;
INSERT INTO `barang` (`barang_id`, `barang_nama`) VALUES
	(1, 'ac'),
	(2, 'kipas');

-- Dumping structure for table project_inventaris.barang_keluar
CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id` int DEFAULT NULL,
  `bk_jumlah_keluar` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project_inventaris.barang_keluar: ~0 rows (approximately)
DELETE FROM `barang_keluar`;
INSERT INTO `barang_keluar` (`id`, `bk_jumlah_keluar`) VALUES
	(1, 8);

-- Dumping structure for table project_inventaris.barang_masuk
CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `id` int DEFAULT NULL,
  `bm_jumlah` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project_inventaris.barang_masuk: ~0 rows (approximately)
DELETE FROM `barang_masuk`;
INSERT INTO `barang_masuk` (`id`, `bm_jumlah`) VALUES
	(1, 4);

-- Dumping structure for table project_inventaris.pinjam
CREATE TABLE IF NOT EXISTS `pinjam` (
  `id` int DEFAULT NULL,
  `pinjam_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project_inventaris.pinjam: ~0 rows (approximately)
DELETE FROM `pinjam`;
INSERT INTO `pinjam` (`id`, `pinjam_status`) VALUES
	(1, 'dipinjam'),
	(2, 'dikembalikan');

-- Dumping structure for table project_inventaris.suplier
CREATE TABLE IF NOT EXISTS `suplier` (
  `id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project_inventaris.suplier: ~0 rows (approximately)
DELETE FROM `suplier`;
INSERT INTO `suplier` (`id`) VALUES
	(1);

-- Dumping structure for table project_inventaris.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(50) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_level` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_foto` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table project_inventaris.user: ~5 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_level`, `user_password`, `user_foto`) VALUES
	(1, 'aku', 'aku', 'administrator', '202cb962ac59075b964b07152d234b70', 'kjdad'),
	(2, 'koe', 'koe', 'administrator', '202cb962ac59075b964b07152d234b70', 'kjadd'),
	(3, 'aa', 'aa', 'administrator', '202cb962ac59075b964b07152d234b70', 'https://perpustakaan.smkn2depoksleman.sch.id/lib/minigalnano/createthumb.php?filename=images%2Fdocs%2Fcover_selena.jpg&width=120'),
	(4, 'a', 'a', 'manajemen', '202cb962ac59075b964b07152d234b70', '643984325_sad.jpg'),
	(5, 'a', 'a', '47bce5c74f589f4867dbd57e9ca9f808', '1674278143_LOGO-SMK-N-2-DEPOK-SLEMAN.png', 'administrator');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
