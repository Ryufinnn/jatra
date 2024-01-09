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
  tglreg date ,
  PRIMARY KEY (noakun)
);



#
# Dumping data for table 'akun'
#
INSERT INTO akun VALUES("A001", "Yohan Neskent", "Padang", "0813634256272", "29000837373", "yohan", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A002", "Deasy Yusna", "Parak Laweh Padang", "84734343948", "9483488347387", "deasy", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A003", "Dehan", "Parak Laweh Padang", "9448943", "434344", "dehan", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A004", "yosi", "Parak Laweh Padang", "9505959", "430355", "yosi", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A005", "rani", "padang", "8494747", "3733637", "rani", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A006", "ellia nur gusti", "padang", "8757564", "37474839", "elli", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A007", "vigo", "padang", "9434948", "4934849", "vigo", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A008", "farel rey", "padang", "94934374", "498430", "farel", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A009", "risa", "padang", "948474", "837339", "risa", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A010", "evan", "padang", "635373", "3323233879", "evan", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A011", "deva", "jambi", "9736337", "5353637272", "deva", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A012", "erania", "jambi", "6376372", "63622526", "erania", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A013", "riyan", "padang", "7262627", "72626262", "riyan", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A014", "dona", "padang", "738373", "19000022", "dona", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A015", "regi", "7443939", "636333399", "8373738", "regi", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A016", "arnold", "jambi", "837383", "872728228", "arnold", "7f78f06d2d1262a0a222ca9834b15d9d", "Y", "2014-05-01");
INSERT INTO akun VALUES("A017", "jaja miharja", "pdang", "8767", "0292828", "jaja", "5f039c8ea27e9ffa2618f61e32bafc74", "Y", "2015-05-08");
INSERT INTO akun VALUES("A018", "girbran", "gadut padang", "839232320", "77001182822", "gibran", "e77d7674b9048d96055a1b72c7152f13", "Y", "2015-05-14");


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
INSERT INTO armada VALUES("001", "BA 3737 BE", "Jatra 001");


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
INSERT INTO detailpemesanan VALUES("T0001", "001-09");
INSERT INTO detailpemesanan VALUES("T0002", "001-04");
INSERT INTO detailpemesanan VALUES("T0003", "001-01");


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
INSERT INTO jadwal VALUES("150515001", "2015-05-15", "12:00:00", "02", "001", "90000", "Y");


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
INSERT INTO kursi VALUES("001-31", "001");
INSERT INTO kursi VALUES("001-32", "001");
INSERT INTO kursi VALUES("001-33", "001");
INSERT INTO kursi VALUES("001-34", "001");
INSERT INTO kursi VALUES("001-35", "001");
INSERT INTO kursi VALUES("001-36", "001");


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
  atasnama char(40) ,
  PRIMARY KEY (notran)
);



#
# Dumping data for table 'pemesanan'
#
INSERT INTO pemesanan VALUES("T0001", "2015-05-14", "A001", "150515001", "20000", "1", "Kota A", "50000", "40000", "Orang dan Barang", NULL);
INSERT INTO pemesanan VALUES("T0002", "2015-05-14", "A002", "150515001", "0", "0", "", "0", "0", "", NULL);
INSERT INTO pemesanan VALUES("T0003", "2015-05-14", "A015", "150515001", "0", "0", "", "0", "0", "Orang dan Barang", "Regi Rinaldi");


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
INSERT INTO trayek VALUES("02", "Padang-Jambi");
