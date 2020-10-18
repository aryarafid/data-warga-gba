-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for app_gba
CREATE DATABASE IF NOT EXISTS `app_gba` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `app_gba`;

-- Dumping structure for table app_gba.anggota_keluarga_unused
CREATE TABLE IF NOT EXISTS `anggota_keluarga_unused` (
  `no_kk_ak` char(16) NOT NULL,
  `nik_anggota_1` char(16) DEFAULT NULL,
  `nik_anggota_2` char(16) DEFAULT NULL,
  `nik_anggota_3` char(16) DEFAULT NULL,
  `nik_anggota_4` char(16) DEFAULT NULL,
  `nik_anggota_5` char(16) DEFAULT NULL,
  `nik_anggota_6` char(16) DEFAULT NULL,
  PRIMARY KEY (`no_kk_ak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table app_gba.anggota_keluarga_unused: ~5 rows (approximately)
/*!40000 ALTER TABLE `anggota_keluarga_unused` DISABLE KEYS */;
INSERT INTO `anggota_keluarga_unused` (`no_kk_ak`, `nik_anggota_1`, `nik_anggota_2`, `nik_anggota_3`, `nik_anggota_4`, `nik_anggota_5`, `nik_anggota_6`) VALUES
	('111111111111111', '222222222222222', '', '', '', '', ''),
	('111111111111112', '222222222222223', '', '', '', '', ''),
	('111111111111113', '222222222222224', '', '', '', '', ''),
	('111111111111114', '222222222222225', '', '', '', '', ''),
	('111111111111115', '222222222222226', '', '', '', '', '');
/*!40000 ALTER TABLE `anggota_keluarga_unused` ENABLE KEYS */;

-- Dumping structure for table app_gba.data_individu
CREATE TABLE IF NOT EXISTS `data_individu` (
  `nik` char(50) NOT NULL,
  `no_kk` char(50) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` char(11) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `jenis_pekerjaan` varchar(50) DEFAULT NULL,
  `status_perkawinan` varchar(50) DEFAULT NULL,
  `hub_dlm_keluarga` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `no_paspor` char(50) DEFAULT NULL,
  `no_kitas_kitap` char(50) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nik`),
  KEY `FK_data_individu_data_kk` (`no_kk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table app_gba.data_individu: ~7 rows (approximately)
/*!40000 ALTER TABLE `data_individu` DISABLE KEYS */;
INSERT INTO `data_individu` (`nik`, `no_kk`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jenis_pekerjaan`, `status_perkawinan`, `hub_dlm_keluarga`, `kewarganegaraan`, `no_paspor`, `no_kitas_kitap`, `nama_ayah`, `nama_ibu`) VALUES
	('222222222222222', '111111111111111', 'Immanuel Thakii', 'Laki-laki', 'Butaj?ra', '1956-11-11', 'islam', 'sarjana', 'swasta', 'kawin', 'ayah', 'indonesia', '', '', 'Gan Trebbett', 'Trina Coltart'),
	('222222222222223', '111111111111112', 'Kayne Melior', 'Laki-laki', 'Ibshaw?y', '1987-02-01', 'islam', 'sarjana', 'swasta', 'kawin', 'ayah', 'indonesia', '', '', 'Mattie Lauks', 'Conway Josefs'),
	('222222222222224', '111111111111113', 'Lorens Savatier', 'Laki-laki', 'Dambulla', '1980-11-11', 'islam', 'sarjana', 'swasta', 'kawin', 'ayah', 'indonesia', '', '', 'Ingra Hornig', 'Luca Palatini'),
	('222222222222225', '111111111111114', 'Catharina Fergie', 'Laki-laki', 'Tanghua', '1965-10-10', 'islam', 'sarjana', 'swasta', 'kawin', 'ayah', 'indonesia', '', '', 'Carmina Ciobutaro', 'Oberon Shillabear'),
	('222222222222226', '111111111111115', 'Harriett Gwillyam', 'Laki-laki', 'Imider', '1973-12-12', 'islam', 'sarjana', 'swasta', 'kawin', 'ayah', 'indonesia', '', '', 'Christos Wanka', 'Elspeth Josse'),
	('222222222222227', '111111111111115', 'Jermaine Cole', 'Laki-laki', 'Forest Hills', '0000-00-00', 'protestan', 'sarjana', 'wirausaha', 'belum kawin', 'anak', 'indonesia', NULL, NULL, 'Harriet Gwillyam', 'Melissa Cole'),
	('222222222222228', '111111111111115', 'Josh L', 'Laki-laki', 'Atlanta', '1996-06-04', 'Protestan', 'Sarjana', 'Wirausaha', 'Lajang', 'Anak', 'Indonesia', '', '', 'Bryan W', 'Karesha L'),
	('222222222222230', '111111111111119', 'Sosa Ad', 'Laki-laki', 'Bolivia', '2020-07-01', 'Protestan', 'Sarjana', 'Wirausaha', 'Lajang', 'Anak', 'Indonesia', '', '', 'Bryan Ww', 'Karesha Ldd');
/*!40000 ALTER TABLE `data_individu` ENABLE KEYS */;

-- Dumping structure for table app_gba.data_kk
CREATE TABLE IF NOT EXISTS `data_kk` (
  `no_kartu_keluarga` char(16) NOT NULL,
  `nik_kepala_keluarga` char(16) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `rt` int(11) DEFAULT NULL,
  `rw` int(11) DEFAULT NULL,
  `desa_kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten_kota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  PRIMARY KEY (`no_kartu_keluarga`),
  KEY `FK_data_kk_data_individu` (`nik_kepala_keluarga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table app_gba.data_kk: ~6 rows (approximately)
/*!40000 ALTER TABLE `data_kk` DISABLE KEYS */;
INSERT INTO `data_kk` (`no_kartu_keluarga`, `nik_kepala_keluarga`, `alamat`, `rt`, `rw`, `desa_kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `tanggal_keluar`) VALUES
	('111111111111111', '222222222222222', 'Griya Banyumanik Asri no 1', 11, 2, 'Banyumanik', 'Banyumanik', 'Semarang', 'Jawa Tengah', '50264', '2011-11-11'),
	('111111111111112', '222222222222223', 'Griya Banyumanik Asri no 2', 11, 2, 'Banyumanik', 'Banyumanik', 'Semarang', 'Jawa Tengah', '50264', '2022-01-09'),
	('111111111111113', '222222222222224', 'Griya Banyumanik Asri no 3', 11, 2, 'Banyumanik', 'Banyumanik', 'Semarang', 'Jawa Tengah', '50264', '2001-11-11'),
	('111111111111114', '222222222222225', 'Griya Banyumanik Asri no 4', 11, 2, 'Banyumanik', 'Banyumanik', 'Semarang', 'Jawa Tengah', '50264', '2001-11-10'),
	('111111111111115', '222222222222226', 'Griya Banyumanik Asri no 5', 11, 2, 'Banyumanik', 'Banyumanik', 'Semarang', 'Jawa Tengah', '50264', '2000-11-11'),
	('111111111111116', '222222222222227', 'Griya Banyumanik Asri no 7', 11, 2, 'Banyumanik', 'Banyumanik', 'Semarang', 'Jawa Tengah', '50264', '2020-07-28');
/*!40000 ALTER TABLE `data_kk` ENABLE KEYS */;

-- Dumping structure for table app_gba.user_level
CREATE TABLE IF NOT EXISTS `user_level` (
  `user_id` int(1) NOT NULL,
  `username` varchar(5) DEFAULT NULL,
  `password` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table app_gba.user_level: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_level` DISABLE KEYS */;
INSERT INTO `user_level` (`user_id`, `username`, `password`) VALUES
	(0, 'guest', 'guest'),
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `user_level` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
