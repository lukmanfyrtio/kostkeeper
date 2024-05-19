CREATE DATABASE IF NOT EXISTS kost_management;
USE kost_management;

CREATE TABLE penghuni_kost (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_penghuni VARCHAR(100) NOT NULL,
    nomor_kamar VARCHAR(10) NOT NULL,
    tanggal_masuk DATE NOT NULL,
    kontak VARCHAR(15),
    catatan TEXT
);

-- Contoh memasukkan data ke dalam tabel penghuni_kost
INSERT INTO penghuni_kost (nama_penghuni, nomor_kamar, tanggal_masuk, kontak, catatan)
VALUES 
('Ahmad Pratama', 'A101', '2023-01-10', '081234567890', 'Pembayaran lancar'),
('Budi Santoso', 'B202', '2023-02-15', '081298765432', '-'),
('Chandra Wijaya', 'A103', '2023-03-20', '081276543210', 'Pembayaran terlambat'),
('Dian Kusuma', 'B204', '2023-04-25', '081254321098', 'Mengajukan pindah'),
('Eka Sari', 'A105', '2023-05-30', '081232165478', '-');
