# MySQL-Front Dump 2.4
#
# Host: localhost   Database: dbjatra
#--------------------------------------------------------
# Server version 5.1.41


#
# Table structure for table 'admin'
#

CREATE TABLE IF NOT EXISTS admin (
  idadmin int(11) NOT NULL DEFAULT '0' ,
  username char(20) ,
  password char(32) ,
  namaterang char(30) ,
  PRIMARY KEY (idadmin)
);



#
# Dumping data for table 'admin'
#
INSERT INTO admin VALUES("1", "admin", "21232f297a57a5a743894a0e4a801fc3", "administrator");


#
# Table structure for table 'akun'
#

CREATE TABLE IF NOT EXISTS akun (
  noakun char(5) NOT NULL DEFAULT '' ,
  nama char(40) ,
  alamat text ,
  kontak char(15) ,
  noktp char(20) ,
  username char(15) ,
  password char(32) ,
  aktif char(1) ,
  PRIMARY KEY (noakun)
);



#
# Dumping data for table 'akun'
#
INSERT INTO akun VALUES("A001", "Yohan Neskent", "Padang", "0813634256272", "29000837373", "yohan", "22c22895822830f4f128cd72863c08a2", "Y");


#
# Table structure for table 'armada'
#

CREATE TABLE IF NOT EXISTS armada (
  noarmada char(3) NOT NULL DEFAULT '' ,
  nopol char(10) ,
  namaarmada char(30) ,
  PRIMARY KEY (noarmada)
);



#
# Dumping data for table 'armada'
#
INSERT INTO armada VALUES("001", "BA 3637 ED", "Jatra 001");
INSERT INTO armada VALUES("002", "BA 8373 EF", "Jatra 002");


#
# Table structure for table 'jadwal'
#

CREATE TABLE IF NOT EXISTS jadwal (
  nojadwal char(10) NOT NULL DEFAULT '' ,
  tanggal date ,
  jam time ,
  kodetrayek char(2) ,
  noarmada char(3) ,
  tampilkan char(1) ,
  PRIMARY KEY (nojadwal)
);



#
# Dumping data for table 'jadwal'
#
INSERT INTO jadwal VALUES("140223001", "2014-02-23", "12:00:00", "01", "", "Y");
INSERT INTO jadwal VALUES("140223002", "2014-02-27", "12:00:00", "01", "001", "Y");


#
# Table structure for table 'kursi'
#

CREATE TABLE IF NOT EXISTS kursi (
  nokursi char(6) NOT NULL DEFAULT '' ,
  noarmada char(3) ,
  PRIMARY KEY (nokursi)
);



#
# Dumping data for table 'kursi'
#
INSERT INTO kursi VALUES("001-01", "001");
INSERT INTO kursi VALUES("001-02", "001");
INSERT INTO kursi VALUES("001-03", "001");
INSERT INTO kursi VALUES("001-04", "001");
INSERT INTO kursi VALUES("001-05", "001");
INSERT INTO kursi VALUES("001-06", "001");
INSERT INTO kursi VALUES("001-07", "001");
INSERT INTO kursi VALUES("001-08", "001");
INSERT INTO kursi VALUES("001-09", "001");
INSERT INTO kursi VALUES("001-10", "001");
INSERT INTO kursi VALUES("001-11", "001");
INSERT INTO kursi VALUES("001-12", "001");
INSERT INTO kursi VALUES("001-13", "001");
INSERT INTO kursi VALUES("001-14", "001");
INSERT INTO kursi VALUES("001-15", "001");
INSERT INTO kursi VALUES("001-16", "001");
INSERT INTO kursi VALUES("001-17", "001");
INSERT INTO kursi VALUES("001-18", "001");
INSERT INTO kursi VALUES("001-19", "001");
INSERT INTO kursi VALUES("001-20", "001");
INSERT INTO kursi VALUES("001-21", "001");
INSERT INTO kursi VALUES("001-22", "001");
INSERT INTO kursi VALUES("001-23", "001");
INSERT INTO kursi VALUES("001-24", "001");
INSERT INTO kursi VALUES("001-25", "001");
INSERT INTO kursi VALUES("001-26", "001");
INSERT INTO kursi VALUES("001-27", "001");
INSERT INTO kursi VALUES("001-28", "001");
INSERT INTO kursi VALUES("001-29", "001");
INSERT INTO kursi VALUES("001-30", "001");
INSERT INTO kursi VALUES("002-01", "002");
INSERT INTO kursi VALUES("002-02", "002");
INSERT INTO kursi VALUES("002-03", "002");
INSERT INTO kursi VALUES("002-04", "002");
INSERT INTO kursi VALUES("002-05", "002");
INSERT INTO kursi VALUES("002-06", "002");
INSERT INTO kursi VALUES("002-07", "002");
INSERT INTO kursi VALUES("002-08", "002");
INSERT INTO kursi VALUES("002-09", "002");
INSERT INTO kursi VALUES("002-10", "002");
INSERT INTO kursi VALUES("002-11", "002");
INSERT INTO kursi VALUES("002-12", "002");
INSERT INTO kursi VALUES("002-13", "002");
INSERT INTO kursi VALUES("002-14", "002");
INSERT INTO kursi VALUES("002-15", "002");
INSERT INTO kursi VALUES("002-16", "002");
INSERT INTO kursi VALUES("002-17", "002");
INSERT INTO kursi VALUES("002-18", "002");
INSERT INTO kursi VALUES("002-19", "002");
INSERT INTO kursi VALUES("002-20", "002");
INSERT INTO kursi VALUES("002-21", "002");
INSERT INTO kursi VALUES("002-22", "002");
INSERT INTO kursi VALUES("002-23", "002");
INSERT INTO kursi VALUES("002-24", "002");
INSERT INTO kursi VALUES("002-25", "002");
INSERT INTO kursi VALUES("002-26", "002");
INSERT INTO kursi VALUES("002-27", "002");
INSERT INTO kursi VALUES("002-28", "002");
INSERT INTO kursi VALUES("002-29", "002");
INSERT INTO kursi VALUES("002-30", "002");


#
# Table structure for table 'pemesanan'
#

CREATE TABLE IF NOT EXISTS pemesanan (
  notran char(7) NOT NULL DEFAULT '' ,
  tanggal date ,
  noakun char(5) ,
  nojadwal char(10) ,
  biayabarang double ,
  notransfer char(20) ,
  PRIMARY KEY (notran)
);



#
# Dumping data for table 'pemesanan'
#


#
# Table structure for table 'trayek'
#

CREATE TABLE IF NOT EXISTS trayek (
  kode char(2) NOT NULL DEFAULT '' ,
  keterangan char(30) ,
  PRIMARY KEY (kode)
);



#
# Dumping data for table 'trayek'
#
INSERT INTO trayek VALUES("01", "Jambi-Padang");
INSERT INTO trayek VALUES("02", "Padang-Jambi");
