-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2024 pada 09.45
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_augmentedreality_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
(1, 'user1@gmail.com', 'user1one'),
(2, 'user2@gmail.com', 'user2two');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_kuis`
--

CREATE TABLE `tb_hasil_kuis` (
  `id_hasil` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `skor` int(100) NOT NULL,
  `waktu_submit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil_kuis`
--

INSERT INTO `tb_hasil_kuis` (`id_hasil`, `nama_siswa`, `skor`, `waktu_submit`) VALUES
(1, 'Alvin', 91, '2024-07-23 06:50:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(50) NOT NULL,
  `isi_materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `judul_materi`, `isi_materi`) VALUES
(1, 'Pernapasan pada Hewan', 'Seperti manusia, hewan juga bernapas untuk mengambil oksigen dan membuang karbon dioksida. Namun, sistem pernapasan pada hewan berbeda dari manusia. Bahkan, sistem pernapasan pada hewan pun berbeda-beda sesuai jenisnya.'),
(2, 'Sistem Pernapasan pada Cacing Tanah', '1. Alat dan Sistem Pernapasan pada Cacing Tanah (Vermes)\r\n\r\n		Cacing tidak mempunyai alat pernapasan khusus, cacing bernapas melalui permukaan kulit. Kulit cacing selalu basah dan berlendir untuk memudahkan penyerapan oksigen dari udara. Oleh karena itu, cacing menyukai tempat lembap untuk menjaga supaya kulit tubuhnya selalu basah dan berlendir.\r\n\r\n		Di bawah permukaan kulit cacing yang tipis, terdapat pembuluh udara. Saat udara masuk melalui kulit, oksigen diikat oleh darah. Pada darah cacing terkandung hemoglobin sehingga mampu mengikat oksigen. Oksigen yang diikat oleh hemoglobin lalu diedarkan ke seluruh tubuh. Zat sisa pembakaran berupa karbon dioksida dan uap air dikeluarkan dari tubuh juga melalui permukaan kulit.'),
(3, 'Sistem Pernapasan pada Serangga (Insekta)', '2. Alat dan Sistem Pernapasan pada Serangga (Insekta)\r\n\r\n		Seperti hewan lain, serangga bernapas dengan mengisap oksigen dan melepaskan karbon dioksida. Namun, alat pernapasan serangga berbeda dengan hewan lain. Alat pernapasan serangga berupa trakea, yaitu sistem tabung yang memiliki banyak percabangan di dalam tubuh. Percabangan trakea disebut trakeola. Trakea mengedarkan oksigen langsung ke semua sel tubuh dan organ serta menyerap karbon dioksida dari semua sel tubuh untuk dibuang.\r\n\r\n		Udara memasuki trakea melalui pori-pori kecil di permukaan tubuh serangga yang disebut spirakel. Selanjutnya udara beredar melalui pembuluh udara kecil. Sel-sel tubuh mengambil oksigen langsung dari pembuluh udara kecil itu. Karbon dioksida dari sel akan mengalir ke trakeola, lalu dibuang melalui lubang spirakel.'),
(4, 'Sistem Pernapasan pada Ikan', '3. Alat dan Sistem Pernapasan pada Ikan (Pisces)\r\n\r\n		Semua makhluk hidup, termasuk ikan, memerlukan oksigen supaya tetap hidup. Pengambilan oksigen ini melalui proses pernapasan yang melibatkan organ pernapasan. Ikan bernapas dengan organ khusus mirip saringan yang disebut insang. Insang berbentuk lembaran tipis berwarna merah muda dan selalu lembap.\r\n\r\n		Insang terdapat tepat di belakang rongga mulut pada kedua sisi kepala ikan. Biasanya insang dilindungi oleh selaput atau rangka yang disebut tutup insang (operkulum). Di balik tutup insang ini terdapat empat deret insang yang saling tumpang tindih. Pada insang terdapat pembuluh darah halus. Pembuluh darah itu dapat menyerap oksigen yang terkandung dalam air dan melepaskan karbon dioksida dari darah. Insang juga berfungsi sebagai alat pengeluaran garam-garam dan sebagai penyaring makanan.\r\n\r\n		Untuk memperoleh cukup oksigen, mulut ikan dan insang bekerja bersama-sama seperti pompa isap air. Pertama-tama tutup insang menutup. Secara bersamaan mulut terbuka dan dinding mulut mengembang. Saat itulah air terisap masuk. Kedua, rongga mulut menyempit dan mulut menutup. Secara bersamaan tutup insang terbuka. Akibatnya air keluar dari mulut dan melewati insang. Saat itulah oksigen dari dalam air terserap dan karbon dioksida dikeluarkan.'),
(5, 'Sistem Pernapasan pada Hewan Amfibi', '4. Alat dan Sistem Pernapasan pada Hewan Amfibi \r\n\r\n		Katak termasuk hewan amfibi, yaitu hewan yang hidup di darat dan di air. Saat masih berupa kecebong, katak hidup di dalam air dan bernapas menggunakan insang. Insang kecebong terletak di luar tubuhnya dan terdiri atas lembaran-lembaran kulit halus mengandung kapiler darah.\r\n\r\n		Setelah berumur 9 hari, kecebong bernapas menggunakan insang dalam. Insang dalam akan menyusut seiring mulai berfungsinya paru-paru dan katak muda pun tumbuh menjadi katak dewasa. Katak dewasa bernapas menggunakan paru-paru dan permukaan kulit. \r\n		\r\n		Di dalam paru-paru terdapat banyak gelembung udara yang sangat kecil, berselaput, dan penuh dengan kapiler darah. Di dalam gelembung udara, oksigen diserap dan karbon dioksida dikeluarkan. Selain dengan paru-paru, katak juga bernapas melalui kulit. Permukaan kulit katak selalu basah agar memudahkan penyerapan oksigen dari udara.'),
(6, 'Sistem Pernapasan pada Reptil', '5. Alat dan Sistem Pernapasan pada Reptil\r\n\r\n		Hewan yang termasuk jenis reptil di antaranya ialah ular, kadal, cecak, buaya, dan biawak. Reptil bernapas mengunakan paru-paru. Udara masuk melalui hidung, lalu ke batang tenggorokan, lalu ke paru-paru.\r\n\r\n		Paru-paru reptil terletak di dalam rongga dada dan dilindungi oleh tulang rusuk. Paru-paru reptil sederhana dengan beberapa lipatan dinding yang dapat memperbesar permukaan paru-paru. Namun, paru-paru kadal dan buaya lebih kompleks dengan beberapa belahan dan bertekstur seperti spons.\r\n\r\n		Pada reptil yang sering berkubang di air seperti buaya, lubang hidungnya dapat ditutup selama menyelam. Dengan begitu air tidak akan masuk ke dalam paru-paru.'),
(7, 'Sistem Pernapasan pada Burung', '6. Alat dan Sistem Pernapasan pada Burung (Aves)\r\n\r\n		Burung bernapas dengan sepasang paru-paru. Paru-paru burung terletak di dalam rongga dada. Udara yang mengandung oksigen masuk melalui lubang hidung pada pangkal paruh sebelah atas. Selanjutnya udara masuk ke pembuluh udara yang disebut trakea. Dari trakea, udara sebagian masuk ke paru-paru dan sebagian lagi masuk ke kantong udara.\r\n\r\n		Burung menghirup udara sebanyak-banyaknya saat tidak terbang. Sebaliknya, saat terbang, burung tidak menghirup udara. Udara diembuskan dari kantong udara ke paru-paru.\r\n\r\n		Kantong udara burung berfungsi sebagai tempat menyimpan udara. Saat tidak terbang, burung menghirup udara sebanyak-banyaknya. Udara yang dihirup itu kemudian disimpan dalam kantong udara. Saat terbang, burung tidak menghirup udara melainkan mengambil dari kantong udara. Kantong udara juga membantu burung saat terbang, membantu mencegah hilangnya panas tubuh yang terlalu besar, dan memperkeras suara.'),
(8, 'Sistem Pernapasan pada Mamalia', '7. Alat dan Sistem Pernapasan pada Mamalia\r\n\r\n		Mamalia adalah jenis hewan yang menyusui anaknya. Ada dua jenis mamalia, yaitu mamalia darat dan mamalia air. Mamalia darat misalnya kambing, sapi, kerbau, dan kuda. Mamalia air misalnya paus, duyung, dan \r\nlumba-lumba. \r\n\r\n		Alat pernapasan mamalia darat terdiri atas hidung, pangkal tenggorok, batang tenggorok, dan paru-paru. Pada mamalia air, hidungnya dilengkapi dengan katup. Saat mamalia tersebut menyelam, katup akan menutup. Sebaliknya, saat mamalia tersebut muncul ke permukaan air, katup terbuka. Saat itulah mamalia air tersebut akan menghirup oksigen serta mengeluarkan karbon dioksida dan uap air.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `pilihan_a` text NOT NULL,
  `pilihan_b` text NOT NULL,
  `pilihan_c` text NOT NULL,
  `pilihan_d` text NOT NULL,
  `index_opsi_jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `soal`, `jawaban`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `index_opsi_jawaban`) VALUES
(1, 'Serangga bernapas menggunakan...', 'B', 'Insang', 'Trakea', 'Paru-paru', 'Kulit', 2),
(2, 'Sistem pernapasan ikan adalah...', 'A', 'Insang', 'Trakea', 'Paru-paru', 'Kulit', 1),
(3, 'Hewan yang termasuk kedalam jenis hewan amfibi yaitu...', 'C', 'Ular', 'Kuda', 'Katak', 'Ikan', 3),
(4, 'Jenis hewan yang menyusui anaknya disebut...', 'D', 'Amfibi', 'Reptil', 'Air', 'Mamalia', 4),
(5, 'Hewan yang termasuk mamalia darat, kecuali...', 'B', 'Kambing', 'Ular', 'Kerbau', 'Sapi', 2),
(6, 'Hewan yang termasuk mamalia air, kecuali...', 'C', 'Lumba-Lumba', 'Berang-Berang Laut', 'Hiu', 'Singa Laut', 3),
(7, 'Ketika mamalia air sedang menyelam maka katup akan...', 'B', 'Terbuka', 'Tertutup', 'Terbuka dan tertutup', 'Semua jawaban salah', 2),
(8, 'Ketika mamalia air muncul ke permukaan air maka katup akan...', 'C', 'Terbuka dan tertutup', 'Tertutup', 'Terbuka', 'Semua jawaban salah', 3),
(9, 'Ketika burung sedang terbang di udara maka burung akan...', 'B', 'Menghirup sedikit udara', 'Tidak menghirup udara', 'Menghirup udara secukupnya', 'Menghirup udara sebanyak-banyaknya', 2),
(10, 'Ketika burung sedang tidak terbang maka burung akan...', 'C', 'Menghirup udara secukupnya', 'Menghirup sedikit udara', 'Menghirup udara sebanyak-banyaknya', 'Tidak menghirup udara', 3),
(11, 'Berikut alat pernapasan pada burung :\r\n1. Lubang Hidung Pada Pangkal Paruh Atas\r\n2. Pembuluh Darah (Trakea)\r\n3. Sebagian Masuk Ke Paru – Paru dan Sebagian Masuk Ke Kantong Udara\r\nSusunan alat pernapasan pada burung yang benar adalah\r\n...', 'A', '1-2-3', '3-2-1', '1-3-2', '2-1-3', 1),
(12, 'Fungsi kantong udara pada burung, kecuali...', 'A', 'Membantu menghilangkan panas tubuh', 'Sebagai tempat menyimpan udara', 'Membantu burung saat terbang', 'Memperkeras suara', 1),
(13, 'Ketika kantong udara burung terisi disebut dengan...', 'C', 'Inflasi', 'Ekshalasi', 'Inhalasi', 'Ekskresi', 3),
(14, 'Ketika kantong udara burung kosong dan paru - paru terisi disebut dengan...', 'B', 'Ekskresi', 'Ekshalasi', 'Inflasi', 'Inhalasi', 2),
(15, 'Hewan akan menghirup udara berupa...', 'D', 'Uap', 'Karbon dioksida', 'Hidrogen', 'Oksigen', 4),
(16, 'Hewan akan mengeluarkan udara berupa...', 'A', 'Karbon dioksida', 'Oksigen', 'Uap', 'Hidrogen', 1),
(17, 'Hewan yang termasuk reptil, kecuali...', 'D', 'Cicak', 'Buaya', 'Biawak', 'Katak', 4),
(18, 'Insang pada ikan berbentuk lembaran tipis yang berwarna...', 'B', 'Merah', 'Merah muda', 'Biru', 'Kuning', 2),
(19, 'Udara yang memasuki trakea melalui pori - pori kecil di permukaan tubuh serangga disebut dengan...', 'D', 'Trakea', 'Trakeola', 'Spiral', 'Spirakel', 4),
(20, 'Fungsi permukaan kulit katak selalu basah adalah untuk memudahkan penyerapan...', 'D', 'Oksigen dari darat dan air', 'Oksigen dari darat', 'Oksigen dari air', 'Oksigen dari udara', 4),
(21, 'Katak muda bernafas dengan menggunakan...', 'B', 'Trakea', 'Insang dalam', 'Insang luar', 'Paru-paru', 2),
(22, 'Berikut alat pernapasan pada mamalia darat :\r\n1. Batang Tenggorok\r\n2. Hidung\r\n3. Paru - Paru\r\n4. Pangkal Tenggorok\r\nSusunan alat pernapasan pada mamalia darat yang benar adalah…', 'D', '1-2-3-4', '4-3-2-1', '1-3-2-4', '2-4-1-3', 4),
(23, 'Berikut alat pernapasan pada reptil :\r\n1. Hidung\r\n2. Paru - Paru \r\n3. Batang Tenggorok\r\nSusunan alat pernapasan pada reptil yang benar adalah\r\n...', 'C', '1-2-3', '3-2-1', '1-3-2', '2-1-3', 3),
(24, 'Ketika hewan reptil sedang menyelam di air maka lubang hidungnya akan...', 'A', 'Tertutup', 'Terbuka', 'Terbuka dan tertutup', 'Semua jawaban salah', 1),
(25, 'Berikut mekanisme pertumbuhan pada katak :\r\n1. Katak Dewasa\r\n2. Katak Muda\r\n3. Kecebong\r\nSusunan mekanisme pertumbuhan pada katak yang benar adalah...', 'B', '1-2-3', '3-2-1', '1-3-2', '2-1-3', 2),
(26, 'Cacing bernapas melalui...', 'C', 'Insang', 'Paru - paru', 'Permukaan kulit', 'Trakea', 3),
(27, 'Kulit cacing selalu basah dan berlendir untuk memudahkan...', 'B', 'Penyerapan karbon dioksda dari udara', 'Penyerapan oksigen dari udara', 'Mengeluarkan oksigen', 'Mengeluarkan karbon dioksida', 2),
(28, 'Cacing menyukai tempat lembap untuk menjaga supaya kulit tubuhnya selalu...', 'A', 'Basah dan berlendir', 'Kering dan berlendir', 'Basah dan kering', 'Berlendir', 1),
(29, 'Di bawah permukaan kulit cacing yang tipis, terdapat...', 'D', 'Kapiler', 'Vermes', 'Hemoglobin', 'Pembuluh darah', 4),
(30, 'Pada darah cacing terkandung hemoglobin sehingga mampu...', 'C', 'Melepas karbon dioksida', 'Melepas oksigen', 'Mengikat oksigen', 'Mengikat zat sisa', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `tb_hasil_kuis`
--
ALTER TABLE `tb_hasil_kuis`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_kuis`
--
ALTER TABLE `tb_hasil_kuis`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
