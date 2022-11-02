
CREATE DATABASE IF NOT EXISTS `pijarcamp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pijarcamp`;

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL auto_increment,
  `namaproduk` varchar(100) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `harga` int(40) NOT NULL,
  `jumlah` int(40) NOT NULL,
  PRIMARY KEY  (`id`)
);