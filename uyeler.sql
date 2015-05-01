
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `kadi` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci AUTO_INCREMENT=36 ;

INSERT INTO `uyeler` (`uye_id`, `kadi`, `sifre`) VALUES
(1, 'cihan', 'cihan');

