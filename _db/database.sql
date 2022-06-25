CREATE TABLE tb_users (
  user_id int(11) NOT NULL AUTO_INCREMENT,
  user_email varchar(50) NOT NULL,
  user_password varchar(100) NOT NULL,
  user_nama varchar(100) NOT NULL,
  user_alamat text NOT NULL,
  user_hp varchar(25) NOT NULL,
  user_pos varchar(5) NOT NULL,
  user_role tinyint(2) NOT NULL,
  user_aktif tinyint(2) NOT NULL,
  created_at varchar(10) NOT NULL,
  updated_at varchar(10) NOT NULL,
  PRIMARY KEY (user_id),
  UNIQUE KEY (user_email)
  );
  
CREATE TABLE tb_golongan (
  gol_id tinyint(3) NOT NULL AUTO_INCREMENT,
  gol_kode varchar(10) NOT NULL,
  gol_nama varchar(50) NOT NULL,
  created_at varchar(10) NOT NULL,
  updated_at varchar(10) NOT NULL,
  PRIMARY KEY (gol_id),
  UNIQUE KEY (gol_kode)
  );
  
CREATE TABLE tb_pelanggan (
  pel_id int(11) NOT NULL AUTO_INCREMENT,
  pel_id_gol tinyint(3) NOT NULL,
  pel_no varchar(20) NOT NULL,
  pel_nama varchar(50) NOT NULL,
  pel_alamat text NOT NULL,
  pel_hp varchar(20) NOT NULL,
  pel_ktp varchar(50) NOT NULL,
  pel_seri varchar(50) NOT NULL,
  pel_meteran int(11) NOT NULL,
  pel_aktif varchar(10) NOT NULL,
  pel_id_user int(11) NOT NULL,
  created_at varchar(10) NOT NULL,
  updated_at varchar(10) NOT NULL,
  PRIMARY KEY (pel_id),
  UNIQUE KEY (pel_no),
  FOREIGN KEY(pel_id_gol) REFERENCES tb_golongan(gol_id),
  FOREIGN KEY(pel_id_user) REFERENCES tb_users(user_id)
  );

  CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nama varchar(50) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  PRIMARY KEY (id)
  );
  
INSERT INTO `tb_golongan` (`gol_id`, `gol_kode`, `gol_nama`, `created_at`, `updated_at`) VALUES 
('1', 'G01', 'Zakiyah Khalilah Daulay', current_timestamp(), '2022-06-21 04:04:35.000000'), 
('2', 'G02', 'Khairil Anwar', current_timestamp(), '2022-06-21 04:04:35.000000'),
('3', 'G03', 'Mardhiyatul Hasanah', current_timestamp(), '2022-06-21 04:10:20.000000'), 
('4', 'G04', 'Muhammad Syi\'aruddin ', current_timestamp(), '2022-06-21 04:10:20.000000'), 
('5', 'G05', 'Nur Sayyidah', current_timestamp(), '2022-06-21 04:10:20.000000'), 
('6', 'G06', 'Dewi Ramadhani', current_timestamp(), '2022-06-21 04:10:20.000000');

INSERT INTO `tb_pelanggan` (`pel_id`, `pel_id_gol`, `pel_no`, `pel_nama`, `pel_alamat`, `pel_hp`, `pel_ktp`, `pel_seri`, `pel_meteran`, `pel_aktif`, `pel_id_user`, `created_at`, `updated_at`) VALUES 
('1', '1', 'P01', 'Zakiyah', 'Medan Johor', '082294783551', '-', '0009', '123221', 'Y', '1', current_timestamp(), '2022-06-21 12:02:30.000000'), 
('2', '2', 'P02', 'Khalilah', 'Medan Amplas', '087635241627', '-', '0008', '124638', 'Y', '1', current_timestamp(), '2022-06-21 12:02:30.000000'), 
('3', '3', 'P03', 'Annisa', 'Kisaran', '085273645327', '-', '0007', '243564', 'Y', '1', current_timestamp(), '2022-06-21 12:02:30.000000'), 
('4', '4', 'P04', 'Clara', 'Kota Pinang', '086473628163', '-', '-', '125374', 'Y', '1', current_timestamp(), '2022-06-21 12:02:30.000000'), 
('5', '5', 'P05', 'Rilahayu', 'Kutacane', '081354738253', '-', '0005', '235463', 'Y', '1', current_timestamp(), '2022-06-21 12:02:30.000000');

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'zakiyah', 'zakiyahkhalilah.28@gmail.com', 'zakiyah');