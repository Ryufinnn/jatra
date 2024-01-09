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
INSERT INTO akun VALUES("A002", "Deasy Yusna", "Parak Laweh Padang", "84734343948", "9483488347387", "deasy", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A003", "Dehan", "Parak Laweh Padang", "9448943", "434344", "dehan", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A004", "yosi", "Parak Laweh Padang", "9505959", "430355", "yosi", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A005", "rani", "padang", "8494747", "3733637", "rani", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A006", "ellia nur gusti", "padang", "8757564", "37474839", "elli", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A007", "vigo", "padang", "9434948", "4934849", "vigo", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A008", "farel rey", "padang", "94934374", "498430", "farel", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A009", "risa", "padang", "948474", "837339", "risa", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A010", "evan", "padang", "635373", "3323233879", "evan", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A011", "deva", "jambi", "9736337", "5353637272", "deva", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A012", "erania", "jambi", "6376372", "63622526", "erania", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A013", "riyan", "padang", "7262627", "72626262", "riyan", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A014", "dona", "padang", "738373", "19000022", "dona", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A015", "regi", "7443939", "636333399", "8373738", "regi", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");
INSERT INTO akun VALUES("A016", "arnold", "jambi", "837383", "872728228", "arnold", "5f4dcc3b5aa765d61d8327deb882cf99", "Y");


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
# Table structure for table 'detailpemesanan'
#

CREATE TABLE IF NOT EXISTS detailpemesanan (
  notran char(7) ,
  nokursi char(6) 
);



#
# Dumping data for table 'detailpemesanan'
#
INSERT INTO detailpemesanan VALUES("T0002", "001-04");
INSERT INTO detailpemesanan VALUES("T0001", "001-03");
INSERT INTO detailpemesanan VALUES("T0004", "001-22");


#
# Table structure for table 'jadwal'
#

CREATE TABLE IF NOT EXISTS jadwal (
  nojadwal char(10) NOT NULL DEFAULT '' ,
  tanggal date ,
  jam time ,
  kodetrayek char(2) ,
  noarmada char(3) ,
  harga double ,
  tampilkan char(1) ,
  PRIMARY KEY (nojadwal)
);



#
# Dumping data for table 'jadwal'
#
INSERT INTO jadwal VALUES("140223001", "2014-02-23", "12:00:00", "01", "", "85000", "N");
INSERT INTO jadwal VALUES("140223002", "2014-02-27", "12:00:00", "01", "001", "87000", "N");
INSERT INTO jadwal VALUES("140324001", "2014-03-24", "11:00:00", "02", "001", "90000", "N");
INSERT INTO jadwal VALUES("140405001", "2014-04-05", "12:00:00", "02", "002", "80000", "N");
INSERT INTO jadwal VALUES("140531001", "2014-05-31", "10:00:00", "02", "001", "100000", "Y");


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
  status char(1) ,
  pemberhentian char(50) ,
  panjar double ,
  kekurangan double ,
  kondisi char(40) ,
  PRIMARY KEY (notran)
);



#
# Dumping data for table 'pemesanan'
#
INSERT INTO pemesanan VALUES("T0001", "2014-05-31", "A001", "140531001", "10000", "1", "Sungai Penuh", "50000", "30000", "Orang dan Barang");
INSERT INTO pemesanan VALUES("T0002", "2014-05-31", "A002", "140531001", "0", "1", "", "0", "0", "Orang dan Barang");
INSERT INTO pemesanan VALUES("T0003", "2014-05-31", "A015", "140531001", "25000", "1", "", "0", "0", "Hanya Barang");
INSERT INTO pemesanan VALUES("T0004", "2014-05-31", "A005", "140531001", "20000", "1", "Sungai Penuh", "50000", "30000", "Orang dan Barang");


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
