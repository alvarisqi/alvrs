CREATE DATABASE perpus;

USE perpus;

CREATE TABLE member (
    id_member INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_member VARCHAR(250) NOT NULL,
    nomor_member VARCHAR(15) NOT NULL,
    alamat TEXT(500) NOT NULL,
    tgl_mendaftar DATETIME NOT NULL,
    tgl_terakhir_bayar DATE NOT NULL  
);

CREATE TABLE peminjaman(
    id_peminjaman INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tgl_pinjam DATE NOT NULL,
    tgl_kembali DATE NOT NULL
);

CREATE TABLE buku(
    id_buku INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    judul_buku VARCHAR(250) NOT NULL,
    penulis VARCHAR(250) NOT NULL,
    penerbit VARCHAR(250) NOT NULL,
    tahun_terbit INT NOT NULL
);


INSERT INTO member (id_member, nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES 
(1, 'Pramudia FItrian Alvarisqi', '08228116xxx', 'Samping tetangga', '2022-01-12 12:12:12', '2022-05-05');

INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit) VALUES
(1, 'Aku dan kamu bukan kita', 'Edward', 'EIGA', 2022);

INSERT INTO peminjaman (id_peminjaman, tgl_pinjam, tgl_kembali) VALUES
(1, '2022-01-01', '2022-05-01');