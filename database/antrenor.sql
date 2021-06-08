-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2021, 12:41:25
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `antrenor`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aidat`
--

CREATE TABLE `aidat` (
  `aidat_no` int(11) NOT NULL,
  `antrenor_no` int(11) NOT NULL,
  `sporcu_no` int(11) NOT NULL,
  `sene` varchar(50) NOT NULL,
  `ocak` tinyint(1) NOT NULL,
  `subat` tinyint(1) NOT NULL,
  `mart` tinyint(1) NOT NULL,
  `nisan` tinyint(1) NOT NULL,
  `mayis` tinyint(1) NOT NULL,
  `haziran` tinyint(1) NOT NULL,
  `temmuz` tinyint(1) NOT NULL,
  `agustos` tinyint(1) NOT NULL,
  `eylul` tinyint(1) NOT NULL,
  `ekim` tinyint(1) NOT NULL,
  `kasim` tinyint(1) NOT NULL,
  `aralik` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `aidat`
--

INSERT INTO `aidat` (`aidat_no`, `antrenor_no`, `sporcu_no`, `sene`, `ocak`, `subat`, `mart`, `nisan`, `mayis`, `haziran`, `temmuz`, `agustos`, `eylul`, `ekim`, `kasim`, `aralik`) VALUES
(3, 1, 1, '2021', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(4, 1, 2, '2021', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(5, 1, 1, '2020', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(19, 1, 3, '2021', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(20, 1, 2, '2020', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(21, 1, 3, '2020', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(35, 1, 65, '2021', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(44, 1, 78, '2021', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `antrenman`
--

CREATE TABLE `antrenman` (
  `id` int(11) NOT NULL,
  `sporcu_no` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `yay_turu` varchar(50) NOT NULL,
  `atis_mesafesi` varchar(50) NOT NULL,
  `toplam_puan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `antrenman`
--

INSERT INTO `antrenman` (`id`, `sporcu_no`, `tarih`, `yay_turu`, `atis_mesafesi`, `toplam_puan`) VALUES
(1, 1, '2021-06-07', 'Klasik', '60', 350),
(2, 1, '2021-06-08', 'Klasik', '60', 360),
(3, 1, '2021-06-09', 'Klasik', '60', 350),
(4, 1, '2021-06-10', 'Klasik', '60', 345),
(5, 1, '2021-06-11', 'Klasik', '60', 362),
(6, 1, '2021-06-12', 'Klasik', '60', 340),
(7, 2, '2021-06-07', 'Klasik', '60', 345),
(8, 2, '2021-06-08', 'Klasik', '60', 350),
(9, 2, '2021-06-09', 'Klasik', '60', 345),
(10, 2, '2021-06-10', 'Klasik', '60', 345),
(11, 2, '2021-06-11', 'Klasik', '60', 350),
(12, 2, '2021-06-12', 'Klasik', '60', 345),
(13, 3, '2021-06-07', 'Makarali', '50', 350),
(14, 3, '2021-06-08', 'Makarali', '50', 360),
(15, 3, '2021-06-09', 'Makarali', '50', 350),
(16, 3, '2021-06-10', 'Makarali', '50', 345),
(17, 3, '2021-06-11', 'Makarali', '50', 362),
(18, 3, '2021-06-12', 'Makarali', '50', 340),
(19, 4, '2021-06-07', 'Makarali', '50', 345),
(20, 4, '2021-06-08', 'Makarali', '50', 350),
(21, 4, '2021-06-08', 'Makarali', '50', 345),
(22, 4, '2021-06-09', 'Makarali', '50', 345),
(23, 4, '2021-06-10', 'Makarali', '50', 350),
(24, 4, '2021-06-11', 'Makarali', '50', 345),
(25, 5, '2021-05-24', 'Klasik', '60', 350),
(26, 5, '2021-05-25', 'Klasik', '60', 360),
(27, 5, '2021-06-08', 'Klasik', '60', 350),
(28, 5, '2021-06-09', 'Klasik', '60', 345),
(29, 5, '2021-06-10', 'Klasik', '60', 362),
(30, 5, '2021-06-11', 'Klasik', '60', 340),
(31, 5, '2021-06-12', 'Klasik', '60', 345),
(32, 6, '2021-05-25', 'Klasik', '60', 350),
(33, 6, '2021-05-26', 'Klasik', '60', 345),
(34, 6, '2021-05-27', 'Klasik', '60', 345),
(35, 6, '2021-05-28', 'Klasik', '60', 350),
(36, 6, '2021-05-29', 'Klasik', '60', 345),
(37, 7, '2021-05-24', 'Makarali', '50', 350),
(38, 7, '2021-05-25', 'Makarali', '50', 360),
(39, 7, '2021-05-26', 'Makarali', '50', 350),
(40, 7, '2021-05-27', 'Makarali', '50', 345),
(41, 7, '2021-05-28', 'Makarali', '50', 362),
(42, 7, '2021-05-29', 'Makarali', '50', 340),
(43, 8, '2021-05-24', 'Makarali', '50', 345),
(44, 8, '2021-05-25', 'Makarali', '50', 350),
(45, 8, '2021-05-26', 'Makarali', '50', 345),
(46, 8, '2021-05-27', 'Makarali', '50', 345),
(47, 8, '2021-05-28', 'Makarali', '50', 350),
(48, 8, '2021-05-29', 'Makarali', '50', 345);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `antrenman_atis`
--

CREATE TABLE `antrenman_atis` (
  `id` int(11) NOT NULL,
  `antrenman_no` int(11) NOT NULL,
  `seri_no` int(11) NOT NULL,
  `ok_1` int(11) NOT NULL,
  `ok_2` int(11) NOT NULL,
  `ok_3` int(11) NOT NULL,
  `seri_toplam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `antrenman_atis`
--

INSERT INTO `antrenman_atis` (`id`, `antrenman_no`, `seri_no`, `ok_1`, `ok_2`, `ok_3`, `seri_toplam`) VALUES
(1, 1, 1, 9, 10, 7, 26),
(2, 1, 2, 9, 8, 9, 26),
(3, 1, 3, 10, 9, 7, 26),
(4, 1, 4, 9, 10, 9, 28),
(5, 1, 5, 10, 9, 7, 26),
(6, 1, 6, 9, 10, 9, 28),
(7, 1, 7, 10, 10, 9, 29),
(8, 1, 8, 8, 8, 9, 25),
(9, 1, 9, 10, 10, 9, 29),
(10, 1, 10, 8, 8, 9, 25),
(11, 1, 11, 10, 10, 9, 29),
(12, 1, 12, 8, 10, 10, 28),
(13, 2, 1, 10, 10, 10, 30),
(14, 2, 2, 10, 10, 10, 30),
(15, 2, 3, 10, 10, 10, 30),
(16, 2, 4, 10, 10, 10, 30),
(17, 2, 5, 10, 10, 10, 30),
(18, 2, 6, 10, 10, 10, 30),
(19, 2, 7, 10, 10, 10, 30),
(20, 2, 8, 10, 10, 10, 30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `antrenor`
--

CREATE TABLE `antrenor` (
  `antrenor_no` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `parola` varchar(10) NOT NULL,
  `ad` varchar(20) NOT NULL,
  `soyad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `antrenor`
--

INSERT INTO `antrenor` (`antrenor_no`, `email`, `parola`, `ad`, `soyad`) VALUES
(1, 'duygu_y', '123', 'Duygu', 'Yardımcıoğlu'),
(2, 'husna_s', '123', 'Hüsna', 'Sancak');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haftalik_puan`
--

CREATE TABLE `haftalik_puan` (
  `id` int(11) NOT NULL,
  `sporcu_no` int(11) NOT NULL,
  `yay_turu` varchar(11) NOT NULL,
  `atis_mesafesi` varchar(11) NOT NULL,
  `haftalik_puan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `haftalik_puan`
--

INSERT INTO `haftalik_puan` (`id`, `sporcu_no`, `yay_turu`, `atis_mesafesi`, `haftalik_puan`) VALUES
(1, 1, 'Klasik', '60', 351),
(2, 2, 'Klasik', '60', 346),
(4, 3, 'Makarali', '50', 351);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ok_bilgi`
--

CREATE TABLE `ok_bilgi` (
  `sporcu_no` int(11) NOT NULL,
  `ok_sayisi` varchar(100) NOT NULL,
  `ok_numarasi` varchar(100) NOT NULL,
  `uzunluk` varchar(100) NOT NULL,
  `malzeme` varchar(100) NOT NULL,
  `sapma` varchar(100) NOT NULL,
  `cap` varchar(100) NOT NULL,
  `agirlik` varchar(100) NOT NULL,
  `uc_agirligi` varchar(100) NOT NULL,
  `tuy` varchar(100) NOT NULL,
  `arkalik` varchar(100) NOT NULL,
  `kol_boyu` varchar(100) NOT NULL,
  `ok_notlar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ok_bilgi`
--

INSERT INTO `ok_bilgi` (`sporcu_no`, `ok_sayisi`, `ok_numarasi`, `uzunluk`, `malzeme`, `sapma`, `cap`, `agirlik`, `uc_agirligi`, `tuy`, `arkalik`, `kol_boyu`, `ok_notlar`) VALUES
(1, '   1111      ', '   00000      ', '   00000      ', '   00000      ', '   00000      ', '   00000      ', '   00000      ', '   00000      ', '   00000      ', '   00000      ', '   00000      ', '   00000      '),
(2, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(3, 'deneme', 'deneme', 'deneme', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(65, '   denemeeee  ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      ', '    deneme      '),
(78, '    0', '    0', '    0', '    0', '    0', '    0', '    0', '    0', '    0', '    0', '    0', '    0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sporcu`
--

CREATE TABLE `sporcu` (
  `sporcu_no` int(11) NOT NULL,
  `antrenor_no` int(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `tc_no` varchar(11) NOT NULL,
  `dogum_tarihi` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) NOT NULL,
  `tel_no` varchar(100) NOT NULL,
  `yas_grubu` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `detay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sporcu`
--

INSERT INTO `sporcu` (`sporcu_no`, `antrenor_no`, `ad`, `soyad`, `tc_no`, `dogum_tarihi`, `cinsiyet`, `tel_no`, `yas_grubu`, `kategori`, `detay`) VALUES
(1, 1, 'Begüm', 'Çelebi', '00000000000', '14.07.1996', 'Kadın', '05555005055', 'Büyükler', 'Klasik   ', 'Performans'),
(2, 1, 'Ayşe', 'Yılmaz', '00000000000', '14.07.1996', 'Kadın', '05055005050', 'Gençler', 'Klasik', 'Performans'),
(3, 1, 'Ali', 'Kaya', '00000000000', '14.07.1996', 'Erkek', '05505005555', 'Minikler', 'Makaralı', 'Kış Okulu'),
(4, 1, 'XXXXXXX', 'XXXXXXX', '11111111111', '01.01.2000', 'Erkek', '05005005050', ' Gençler', '  Makaralı', 'Performans');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yarisma`
--

CREATE TABLE `yarisma` (
  `yarisma_id` int(11) NOT NULL,
  `sporcu_no` int(11) NOT NULL,
  `yarisma_adi` varchar(50) NOT NULL,
  `tarih` varchar(50) NOT NULL,
  `siralama` varchar(50) NOT NULL,
  `madalya` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yarisma`
--

INSERT INTO `yarisma` (`yarisma_id`, `sporcu_no`, `yarisma_adi`, `tarih`, `siralama`, `madalya`) VALUES
(1, 1, '2020 Açık Hava Türkiye Şampiyonası', '20.03.2021', '17', 'YOK'),
(2, 1, '18 Mart Şehitler Türkiye Şampiyonası', '18.03.2017', '45', 'YOK'),
(3, 2, '2019 Açık Hava Türkiye Şampiyonası', '20.03.2019', '46', 'YOK'),
(4, 2, '18 Mart Şehitler Türkiye Şampiyonası', '18.03.2017', '32', 'YOK'),
(6, 49, 'qweqw', 'eqweqwe', 'qweqeq', 'VAR'),
(12, 1, '000', '000', '000', 'YOK'),
(13, 1, '111', '111', '111', '111'),
(14, 1, '000', '000', '000', '000'),
(15, 65, '000', '000', '000', '000'),
(16, 65, '111', '111', 'edtgd', 'dfgdfg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yay_bilgi`
--

CREATE TABLE `yay_bilgi` (
  `sporcu_no` int(11) NOT NULL,
  `ebat` varchar(100) NOT NULL,
  `cekis_agirligi` varchar(100) NOT NULL,
  `yay_sertligi` varchar(100) NOT NULL,
  `tiller` varchar(100) NOT NULL,
  `kiris_yuksekligi` varchar(100) NOT NULL,
  `limp` varchar(100) NOT NULL,
  `handle` varchar(100) NOT NULL,
  `nisangah` varchar(100) NOT NULL,
  `atis_mesafesi` varchar(100) NOT NULL,
  `stabilizer` varchar(100) NOT NULL,
  `kliker` varchar(100) NOT NULL,
  `berger` varchar(100) NOT NULL,
  `yay_notlar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yay_bilgi`
--

INSERT INTO `yay_bilgi` (`sporcu_no`, `ebat`, `cekis_agirligi`, `yay_sertligi`, `tiller`, `kiris_yuksekligi`, `limp`, `handle`, `nisangah`, `atis_mesafesi`, `stabilizer`, `kliker`, `berger`, `yay_notlar`) VALUES
(1, '   0000   ', '   00000', '   00000   ', '   00000   ', '   00000   ', '   00000   ', '   00000   ', '   00000   ', '   00000   ', '   00000   ', '   00000   ', '   00000   ', '   00000  1 '),
(2, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(3, 'deneme', 'deneme', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(65, '    denemeee  ', '    deneme', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme   ', '    deneme0   '),
(78, '   0', '  0', '   0', '   0', '   0', '   0', '   0', '   0', '   0', '   0', '   0', '   0', '   0');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aidat`
--
ALTER TABLE `aidat`
  ADD PRIMARY KEY (`aidat_no`),
  ADD KEY `sporcu_no` (`sporcu_no`);

--
-- Tablo için indeksler `antrenman`
--
ALTER TABLE `antrenman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sporcu_no` (`sporcu_no`);

--
-- Tablo için indeksler `antrenman_atis`
--
ALTER TABLE `antrenman_atis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `antrenman_no` (`antrenman_no`);

--
-- Tablo için indeksler `antrenor`
--
ALTER TABLE `antrenor`
  ADD PRIMARY KEY (`antrenor_no`);

--
-- Tablo için indeksler `haftalik_puan`
--
ALTER TABLE `haftalik_puan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sporcu_no` (`sporcu_no`);

--
-- Tablo için indeksler `ok_bilgi`
--
ALTER TABLE `ok_bilgi`
  ADD UNIQUE KEY `sporcu_no_2` (`sporcu_no`),
  ADD KEY `sporcu_no` (`sporcu_no`);

--
-- Tablo için indeksler `sporcu`
--
ALTER TABLE `sporcu`
  ADD PRIMARY KEY (`sporcu_no`);

--
-- Tablo için indeksler `yarisma`
--
ALTER TABLE `yarisma`
  ADD PRIMARY KEY (`yarisma_id`),
  ADD KEY `sporcu_no` (`sporcu_no`);

--
-- Tablo için indeksler `yay_bilgi`
--
ALTER TABLE `yay_bilgi`
  ADD UNIQUE KEY `sporcu_no_2` (`sporcu_no`),
  ADD KEY `sporcu_no` (`sporcu_no`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aidat`
--
ALTER TABLE `aidat`
  MODIFY `aidat_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `antrenman_atis`
--
ALTER TABLE `antrenman_atis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `antrenor`
--
ALTER TABLE `antrenor`
  MODIFY `antrenor_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `haftalik_puan`
--
ALTER TABLE `haftalik_puan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `sporcu`
--
ALTER TABLE `sporcu`
  MODIFY `sporcu_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Tablo için AUTO_INCREMENT değeri `yarisma`
--
ALTER TABLE `yarisma`
  MODIFY `yarisma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
