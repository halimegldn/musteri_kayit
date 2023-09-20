-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Eyl 2023, 11:36:50
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayit_bilgi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

CREATE TABLE `kayit` (
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `giris_tarihi` date NOT NULL,
  `oda_no` int(100) NOT NULL,
  `ek_bilgiler` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`ad`, `soyad`, `giris_tarihi`, `oda_no`, `ek_bilgiler`) VALUES
('Elon', 'Musk', '2021-03-12', 1234, 'Sigara içilmeyen oda'),
('Bill', 'Gates', '2022-07-01', 4386, 'Deniz tarafına bakan oda'),
('halime', 'gildan', '2002-07-02', 2029, 'doğaya bakan oda'),
('yakup', 'gldn', '2020-06-23', 9876, 'Yakupun odası');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
