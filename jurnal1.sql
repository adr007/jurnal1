-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2019 at 03:29 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal1`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `metode` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author2` varchar(200) NOT NULL,
  `author3` varchar(200) NOT NULL,
  `abstrak` text NOT NULL,
  `tgl` date NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `judul`, `metode`, `author`, `author2`, `author3`, `abstrak`, `tgl`, `file`) VALUES
(7, 'RANCANG BANGUN SISTEM INFORMASI PENGOLAHAN KUESIONER BERBASIS WEB PADA JURUSAN TEKNIK INFORMATIKA UNIVERSITAS HALU OLEO', 8, 'RAVIQ GANDHU LAHADI', 'Budi Dharmawan', 'Riki Ramadhan', '<p>Pengukuran kinerja dan eligibilitas merupakan salah satu cara yang digunakan untuk meningkatkan kualitas suatu lembaga. Data untuk pengukuran ini umumnya diambil dengan menggunakan angket atau kuesioner. Kuesioner adalah teknik pengumpulan data yang dilakukan dengan cara memberikan seperangkat pertanyaan atau pernyataan kepada orang lain yang dijadikan responden untuk dijawab. Meskipun terlihat mudah, teknik pengumpulan data melalui kuesioner cukup sulit dilakukan jika respondennya cukup besar. Selain itu, pemrosesan dan interpretasi data yang sering dilakukan secara manual juga menyebabkan metode ini membutuhkan waktu yang lama untuk diselesaikan.</p>\r\n\r\n<p>Jurusan Teknik Informatika, Universitas Halu Oleo telah sering menggunakan kuesioner dalam pengumpulan data dengan tujuan untuk peningkatan kualitas dan pengukuran kecenderungan mahasiswa. Khususnya dalam hal peningkatan kualitas, data yang dibutuhkan diantaranya adalah untuk mengukur kinerja dosen, kinerja staff, kualitas fasilitas kampu, pelayanan mahasiswa, kualitas mata kuliah, dll. Penelitian ini akan mengembangkan sebuah perangkat lunak yang dapat digunakan untuk pengolahan data kuesioner. Output yang dihasilkan dari aplikasi ini adalah berupa: ukuran pemusatan data (rata-rata, median, modus, varian, persentasi peritem); dan interpretasi visual (diagram batang, garis, dan lingkaran).</p>\r\n\r\n<p>Kata Kunci: Kuesioner, Penilaian, Sistem Informasi, <em>Scoring</em></p>\r\n', '2019-10-17', 'komponen/file/jurnal_2019-10-17_3710.pdf'),
(8, 'IMPLEMENTASI DEEP LEARNING DENGAN METODE CONVOLUTIONAL NEURAL NETWORK UNTUK IDENTIFIKASI OBJEK SECARA REAL TIME BERBASIS ANDROID', 1, 'Indra Fransiskus Alam', 'Artono Dwi R', 'Agus Priyogo', '<p><strong>IMPLEMENTASI <em>DEEP LEARNING  </em>DENGAN METODE <em>CONVOLUTIONAL NEURAL NETWORK </em>UNTUK IDENTIFIKASI OBJEK SECARA <em>REAL TIME </em>BERBASIS ANDROID</strong></p>\r\n\r\n<p>Perkembangan kecerdasan buatan atau artificial Intelligence saat ini telah mengalami perubahan yang signifikan. Hal tersebut mendasari lahirnya metode untuk mengatasi deteksi objek secara real time dengan akurasi yang tinggi. Pada dasarnya <em>Deep Learning </em>adalah implementasi konsep dasar dari <em>Machine Learning </em>yang menerapkan algoritma pintar dengan lapisan yang lebih banyak antara lapisan masukan dan lapisan keluaran. <em>Convolutional Neural Network </em>(CNN) merupakan salah satu metode <em>Deep learning </em>(DL) yang dapat digunakan untuk mendeteksi dan mengenali sebuah objek pada sebuah citra digital. Kemampuan CNN di klaim sebagai model terbaik untuk memecahkan permasalahan <em>object detection </em>dan <em>object recognition </em>karena merupakan pengembangan dari metode <em>backpropagation </em>dan tidak memerlukan komputasi yang besar dalam prosesnya.</p>\r\n\r\n<p>Hasil yang didapatkan pada penelitian ini bahwa aplikasi android dapat berjalan baik dengan akurasi sebesar 92,33?pat dilihat dari hasil pengujian dengan menggunakan metode 10-<em>fold cross validation</em>, semua menu yang ada dapat berjalan dan penyebutan label objek sesuai untuk pengenalan dan klasifikasi citra. Perhitungan <em>precision </em>dan <em>recall </em>memiliki nilai yang baik, masing-masing sebesar 97,51?n 94,33%. Pada proses klasifikasi, objek yang tidak terdapat pada <em>dataset</em> yang telah dijadikan model oleh sistem akan bernilai <em>null </em>atau tidak dikenali, khususnya pada citra objek tangkapan kamera android yang memiliki banyak benda dan saling berdekatan.</p>\r\n\r\n<p><strong>Kata kunci </strong>— <em>Deep Learning, Convolutional Neural Network, AutoML</em>, <em>Text-to-speech</em></p>\r\n', '2019-10-17', 'komponen/file/jurnal_2019-10-17_5319.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `id` int(11) NOT NULL,
  `metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metode`
--

INSERT INTO `metode` (`id`, `metode`) VALUES
(1, 'Seismik'),
(2, 'Grafitasi'),
(3, 'Magnetik'),
(4, 'Resistifitas'),
(5, 'Polarisasi Terinduksi'),
(6, 'Potensial Diri'),
(7, 'Elektromagnetik'),
(8, 'Radar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `true_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `tlp`, `password`, `true_pass`) VALUES
(1, 'admin', 'Administrator', 'artono.dr@gmail.com', '0822934226252', '$2y$10$Ql/SZRCs/AUEWS84npofT.8CJQUMBsAzW4B10u9kUCMwERmDnpsUO', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
