﻿CREATE TABLE `pmb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) NOT NULL,
  `nama_panggilan` varchar(15) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `jenkel` varchar(10) NULL,
  `agama` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp_rumah` int(15) NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `alamat_ortu` varchar(50) NULL,
  `no_hp` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `status_kerja` varchar(15) NOT NULL,
  `nama_perusahaan` varchar(25) NULL,
  `status_kawin` varchar(15) NOT NULL,
  `prog_study` varchar(15) NOT NULL,
  `ukuran_jaket` varchar(2) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

