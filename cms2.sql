-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2024 at 09:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraosel` int NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraosel`, `judul`, `foto`) VALUES
(20, 'hemat', '20241215112629.jpg'),
(21, 'promo bank', '20241216003558.jpg'),
(22, '1212', '20241216003823.jpg'),
(23, '1212 susu', '20241216003904.jpg'),
(24, 'formula 1212', '20241216003940.jpg'),
(25, 'khaft cheese', '20241216004029.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`) VALUES
(5, 'dalam 12', '20241216005150.jpg'),
(6, 'Foto depan', '20241214173934.jpg'),
(7, 'Belakang Kasir', '20241214174247.jpg'),
(8, 'Kasir', '20241214174352.jpg'),
(9, 'Lorong Barat', '20241214174613.jpg'),
(10, 'Belakang Kasir 2', '20241214174754.jpg'),
(11, 'Dalam Toko', '20241214174907.jpg'),
(12, 'Foto Depan', '20241214175011.jpg'),
(13, 'Foto Dalam Belakang', '20241214175107.jpg'),
(14, 'Lorong Tengah', '20241214175148.jpg'),
(15, 'Depan Kasir', '20241214175249.jpg'),
(16, 'Kasir', '20241214175345.jpg'),
(17, 'TB Dalam', '20241214175458.jpg'),
(18, 'TB Depan', '20241214175547.jpg'),
(19, 'dalam 12', '20241215110219.jpg'),
(20, 'Dalam Kasir 2', '20241214175729.jpg'),
(21, 'Toko Banguan Depan', '20241215111904.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(18, 'Mie Instan'),
(19, 'Buavita'),
(20, 'Susu'),
(21, 'Buah'),
(22, 'Sikat Gigi'),
(24, 'Skincare'),
(25, 'Make up'),
(26, 'Keju');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `tiktok` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `x` varchar(200) NOT NULL,
  `telegram` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `facebook`, `instagram`, `tiktok`, `email`, `alamat`, `no_wa`, `youtube`, `x`, `telegram`) VALUES
(1, ' cms rifqi', 'UD Sri WIdodo adalah tempat belanja  UD Sri Widodo; salah satu inovasi dari UD Sri Widodo berupa one stop online store yang menyediakan berbagai macam produk dalam satu situs untuk memenuhi semua kebutuhan konsumen.', 'https://www.facebook.com/rifqi.pratama.1610', 'instagram.com/rfq1prtm/', 'rifqiptm', 'udsriwidodo175@gmail.com', 'dukuh, ngargoyoso', '081233754204', 'link yt', 'aa', 'teleaa');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `id_toko` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `harga`, `barcode`, `keterangan`, `foto`, `slug`, `id_kategori`, `id_toko`, `tanggal`, `username`) VALUES
(26, 'Nabati Richeese Mi Instant Soto Mi 75G', 'Rp 2.400', '8993175557139', 'Deskripsi produk\r\nNabati Richeese Mi Instant Soto Mi 75G adalah mi instan dengan rasa soto mi yang lezat. Produk ini dikemas dalam ukuran 75 gram dan sangat praktis untuk dinikmati sebagai makanan ringan atau hidangan utama. Dengan bahan-bahan berkualitas dan proses pengolahan yang baik, mi instan ini memberikan pengalaman kuliner yang berbeda dan nikmat.\r\n\r\nPLU :\r\n20130561', '20241210123727.jpg', 'Nabati-Richeese-Mi-Instant-Soto-Mi-75G', '18', '2', '2024-12-10', 'rifqi'),
(27, 'Indomie Mie Goreng Premium Korean Fiery Chikin 94G', 'Rp 4.900', '20135990', 'Indomie Rasa Korean Fiery Chikin : Ramyeon goreng rasa ayam pedas ala korea, yang pedas, manis, asin dan gurih dengan aroma khas ayam goreng korea.', '20241210124112.jpg', 'Indomie-Mie-Goreng-Premium-Korean-Fiery-Chikin-94G', '18', '2', '2024-12-10', 'rifqi'),
(29, 'Nabati Richeese Mi Instant Ramen Keju Pedas Fire Level 3 67G', 'Rp 2.600', '20125610', 'Richeese Ramen Keju Pedas Pertama dengan pilihan level pedas dan rasa Signature yang khas dari Richeese Factory.', '20241210124357.jpg', 'Nabati-Richeese-Mi-Instant-Ramen-Keju-Pedas-Fire-Level-3-67G', '18', '2', '2024-12-10', 'rifqi'),
(31, 'Nabati Richeese Mi Goreng Pedas Richicken 77G', 'Rp 2.800', '20128056', 'Mi goreng pedas richicken dengan fire chilli 3 tabur extra hot, pertama dengan pilihan level pedas khas Richeese Factory.', '20241210124700.jpg', 'Nabati-Richeese-Mi-Goreng-Pedas-Richicken-77G', '18', '2', '2024-12-10', 'rifqi'),
(32, 'Nabati Richeese Mi Instant Ramen Keju Pedas Fire Level 5 67G', 'Rp 2.800', '20126950', 'Richeese Ramen Keju Pedas Pertama dengan pilihan level pedas dan rasa Signaature yang khas dari Richeese Factory. Kejunya wah, pedasnya Hah', '20241210124839.jpg', 'Nabati-Richeese-Mi-Instant-Ramen-Keju-Pedas-Fire-Level-5-67G', '18', '2', '2024-12-10', 'rifqi'),
(33, 'Buavita Guava 500Ml', 'Rp 11.900', '8997027030315', 'Deskripsi Produk\r\nMinuman jus yang dibuat dari jus buah asli dengan lebih banyak kandungan buah sehingga memberikan anda kebaikan buah asli.\r\n\r\nCara Penggunaan :\r\nKocok sebelum diminum, lebih enak jika diminum dingin.\r\n\r\nCara Penyimpanan :\r\nSimpan dalam pendingin.', '20241210143648.jpg', 'Buavita-Guava-500Ml', '19', '2', '2024-12-10', 'rifqi'),
(34, 'Buavita Juice Slim Apple 245mL', 'Rp 7.500', '8997027031930', 'Deskripsi Produk\r\nMinuman jus yang dibuat dari jus buah asli dengan lebih banyak kandungan buah sehingga memberikan anda kebaikan buah asli.\r\n\r\nCara Penggunaan :\r\nKocok dahulu sebelum diminum. Sajikan dingin lebih nikmat.\r\n\r\nKomposisi :\r\nAir, sari buah apel, sukrosa, perisa apel, pengatur keasaman asam sitrat dan natrium sitrat, vitamin C, garam, pewarna caramel, vitamin A.', '20241210143835.jpg', 'Buavita-Juice-Slim-Apple-245mL', '19', '2', '2024-12-10', 'rifqi'),
(36, 'Buavita Juice Slim Lychee 245mL', 'Rp 7.500', '8997027031947', 'Deskripsi Produk\r\nMinuman jus yang dibuat dari jus buah asli dengan lebih banyak kandungan buah sehingga memberikan anda kebaikan buah asli.\r\n\r\nPLU :\r\n10007974', '20241210144753.jpg', 'Buavita-Juice-Slim-Lychee-245mL', '19', '2', '2024-12-10', 'rifqi'),
(37, 'Buavita Jus Buah Asli Mangga 245mL', 'Rp 7.500', '8997027031954', 'Deskripsi Produk\r\nJus dalam kemasan\r\n\r\nCara Penyimpanan :\r\nSimpan dilemari pendingin.\r\n\r\nKomposisi :\r\nSari buah mangga, sukrosa, perisa mangga, vitamin C, pemantap, pewarna alami anato (CI 75120).\r\n\r\nOther Details :\r\nMinuman sari buah rasa mangga\r\n\r\nTakaran Per Kemasan :\r\nSajian per kemasan : 1\r\n\r\nTakaran Per Serving :\r\nEnergi total 110kkal, energi dari lemak 0kkal. % AKG: Lemak total 0g, protein 0g, karbohidrat total 27g, serat pangan 1g, gula 26g, natrium 25mg, kalium 50mg. Vitamin A 14%, Vitamin C 80%, vitamin D3 20%, vitamin E 30%, Vitamin B1 11%, Vitamin B2 14%, Vitamin B3 20%, Vitamin B5 270mg, vitamin B6 14%, vitamin B12 16%, biotin 2.2mcg, inositol 0.8mg, kolin 0.3mg, kalsium 2%, zat besi 9%, klorida 215mg, tembaga 25mcg, mangan 0.8mcg.\r\n\r\nTakaran Saji :\r\nTakaran saji : 250mL\r\n\r\nPLU :\r\n10007973', '20241210145141.jpg', 'Buavita-Jus-Buah-Asli-Mangga-245mL', '19', '2', '2024-12-10', 'rifqi'),
(38, 'Buavita Jus Buah Jambu 245mL', 'Rp 7.500', '8997027031961', 'Deskripsi Produk\r\nMinuman sari buah jambu dengan vitamin A dan C\r\n\r\nCara Penggunaan :\r\nKocok sebelum diminum\r\n\r\nCara Penyimpanan :\r\nDianjurkan agar menyimpan Buavita dalam pendingin.\r\n\r\nKomposisi :\r\nair, buah jambu, sukrosa, perisa jambu, vitamin C, Garam, pewarna alami Karmin (CI 73015), pengatur keasaman asam sitrat, pemantap nabati, vitamin A.\r\n\r\nPerhatian :\r\nIsinya terjamin selama kemasan tidak bocor dan tidak kembung.\r\n\r\nTakaran Per Kemasan :\r\nTakaran per kemasan : 1\r\n\r\nTakaran Per Serving :\r\nEnergi total 130kkal, Energi dari lemak 0kkal. Lemak total 0g, Protein 0g, Karbohidrat total 33g, serat pangan 2g, gula 20g, Natrium 55mg, Kalium 105mg. % AKG : vitamin A 60%, vitamin C 115%, vitamin B1 10%, vitamin B2 8%, vitamin B3 6%, vitamin B6 15%.\r\n\r\nTakaran Saji :\r\ntakaran saji 250mL\r\n\r\nPLU :\r\n10007970', '20241210145305.jpg', 'Buavita-Jus-Buah-Jambu-245mL', '19', '2', '2024-12-10', 'rifqi'),
(41, 'Diabetasol Susu Formula Diabetes Almond Oat 570G', 'Rp 144.900', '', 'Deskripsi Produk Diabetasol hadir untuk melengkapi pola makan 3J, 1 gelas Diabetasol mengandung 250 kkal yang setara dengan kebutuhan Jumlah kalori sarapan pagi atau selingan malam untuk membantu mengatur Jadwal makanan Anda. Diabetasol juga diformulasikan khusus dengan nutrisi seimbang yang dapat memenuhi Jenis nutrisi diabetisi setiap hari.', '20241216005926.jpg', 'Diabetasol-Susu-Formula-Diabetes-Almond-Oat-570G', '20', '2', '2024-12-16', 'user'),
(42, 'Diabetasol Susu Formula Diabetes Vita Digest Cappuccino 170G', 'Rp 51.100', '', 'Deskripsi Produk\r\nDiabetol susu formula diabetes with vita digest cappucino box. Diabetasol susu formula diabetes vita digets pro rasa cappucino. Pangan diet khusus untuk diabetes.\r\n\r\nCara Penanganan :\r\nHabiskan isinya dalam waktu kurang dari 1 tahun.\r\n\r\nCara Penggunaan :\r\nTuangkan 4 sendok takar 60g secara bertahap ke dalam 200ml air matang hangat sambil diaduk perlahan-lahan hingga larut.\r\n\r\nCara Penyimpanan :\r\nSetelah dibuka, tutuplah sachet dengan rapat. Simpan di tempat yang sejuk, kering dan bersih.\r\n\r\nKomposisi :\r\nMaltodekstrin, minyak nabati (mengandung antioksidan), kaseinat, dekstrin, protein whey, isomaltulosa, inulin, pemanis alami sorbitol, pengemulsi lesitin kedelai, pewarna makanan karamel, perisa identik alami kopi, artifisial butterscotch, pemanis buatan sukralosa, mineral, dan vitamin.\r\n\r\nOther Details :\r\nDiabetasol susu formula diabetes vita digets pro rasa cappucino. Pangan diet khusus untuk diabetes.\r\n\r\nPerhatian :\r\nJangan dikonsumsi jika terjadi perubahan yang mencolok pada bau, rasa atau warna.\r\n\r\nTakaran Per Kemasan :\r\nSajian per kemasan : 3\r\n\r\nTakaran Per Serving :\r\nEnergi total 260kkal, energi dari lemak 70kkal, lemak total 11g, lemak jenuh 7g, lemak tidak jenuh tunggal 3.5g, lemak tidak jenuh ganda 2.5g, lemak trans 0g, kolesterol 0mg, protein 16g, karbohidrat total 13g, serat pangan 14g, inulin 2g, laktosa 0.5g, sorbitol 1.7g, natrium 5mg, kalium 5mg.\r\n\r\nTakaran Saji :\r\nTakaran saji: 60g\r\n\r\nPLU :\r\n20012690', '20241216010138.jpg', 'Diabetasol-Susu-Formula-Diabetes-Vita-Digest-Cappuccino-170G', '20', '2', '2024-12-16', 'user'),
(43, 'Diabetasol Susu Formula Diabetes Cappuccino 570G', 'Rp 144.900', '', 'Deskripsi Produk\r\nDiabetasol susu formula diabetes cappucino.\r\n\r\nCara Penanganan :\r\nHabiskan isinya dalam waktu kurang dari 1 tahun.\r\n\r\nCara Penggunaan :\r\nTuangkan 4 sendok takar 60g secara bertahap ke dalam 200ml air matang hangat sambil diaduk perlahan-lahan hingga larut.\r\n\r\nCara Penyimpanan :\r\nSetelah dibuka, tutuplah sachet dengan rapat. Simpan di tempat yang sejuk, kering dan bersih.\r\n\r\nKomposisi :\r\nMaltodekstrin, minyak nabati (mengandung antioksidan), kaseinat, dekstrin, protein whey, isomaltulosa, inulin, pemanis alami sorbitol, pengemulsi lesitin kedelai, pewarna makanan karamel, perisa identik alami kopi, artifisial butterscotch, pemanis buatan sukralosa, mineral, dan vitamin.\r\n\r\nOther Details :\r\nDiabetasol special nutrition for diabetic vita digest. Pangan diet khusus untuk diabetes rasa kapucino.\r\n\r\nPerhatian :\r\nJangan dikonsumsi jika terjadi perubahan yang mencolok pada bau, rasa atau warna.\r\n\r\nTakaran Per Kemasan :\r\nSajian per kemasan : 10.5\r\n\r\nTakaran Per Serving :\r\nEnergi total 260kkal, energi dari lemak 70kkal, lemak total 11g, lemak jenuh 7g, lemak tidak jenuh tunggal 3.5g, lemak tidak jenuh ganda 2.5g, lemak trans 0g, kolesterol 0mg, protein 16g, karbohidrat total 13g, serat pangan 14g, inulin 2g, laktosa 0.5g, sorbitol 1.7g, natrium 5mg, kalium 5mg.\r\n\r\nTakaran Saji :\r\nTakaran saji: 60g\r\n\r\nPLU :\r\n20079894', '20241216010324.jpg', 'Diabetasol-Susu-Formula-Diabetes-Cappuccino-570G', '20', '2', '2024-12-16', 'user'),
(44, 'Entrasol Active Susu Bubuk Chocolate 150g', 'Rp 30.200', '', 'Deskripsi Produk\r\nEntrasol active susu bubuk chocolate\r\n\r\nCara Penggunaan :\r\nLarutkan 3 sendok makan ( 35g) entrasol active kedalam 200ml air matang hangat, aduk hingga larut rata dan siap untuk di minum.\r\n\r\nCara Penyimpanan :\r\nSimpan di tempat yang sejuk, kering dan bersih.\r\n\r\nKomposisi :\r\nSusu bubuk skim, susu bubuk full krim, gula, bubuk coklat, minyak nabati, konsentrat protein whey, perisa identik alami, malatodekstrin, ekstrak buah zaitun, pemanis buatan sukralosa, mineral dan vitamin.\r\n\r\nOther Details :\r\nEntrasol high calcium milk active pro-fit chocolate, minuman susu bubuk rasa cokelat.\r\n\r\nPerhatian :\r\nJangan dikonsumsi jika terjadi perubahan yang mencolok pada bau, rasa atau warna.\r\n\r\nTakaran Per Kemasan :\r\nSajian per kemasan: 5\r\n\r\nTakaran Per Serving :\r\nEnergi total 140kkal, energi dari lemak 30kkal, energi dari lemak jenuh 15kkal, lemak total 3.5g, lemak jenuh 1g, lemak trans 0g, kolesterol 0mg, protein 9g, karbohidrat total 18g, gula 9g, serat pangan 1g, natrium 120mg, kalium 575mg, Vit A 30%, Vit C 30%, Vit D3 25%, Vit E 15%, Vit B1 75%, Vit B2 65%, niasin 35%, Vit B6 80%, Vit B12 10%, asam folat 20%, kalsium 60%, besi 30%, fosfor 50%, magnesium 30%, seng 20%, yodium 20%, selenium 40%.\r\n\r\nTakaran Saji :\r\nTakaran saji: 35g\r\n\r\nPLU :\r\n20073510', '20241216010540.jpg', 'Entrasol-Active-Susu-Bubuk-Chocolate-150g', '20', '2', '2024-12-16', 'user'),
(45, 'Entrasol Susu Steril 180mL', 'Rp 9.900', '', 'Deskripsi Produk\r\nEntrasol Can merupakan susu steril dengan ekstrak buah zaitun. Terbuat dari susu segar pilihan yang berkualitas, melalui proses sterilisasi yang dipadukan dengan kebaikan ekstrak buah zaitun. Konsumsi Entrasol Can setiap hari untuk menjaga daya tahan tubuh dan kesehatan jantung.\r\n\r\nPLU :\r\n20133805', '20241216010803.jpg', 'Entrasol-Susu-Steril-180mL', '20', '2', '2024-12-16', 'user'),
(46, 'Formula Sikat Gigi Discovery Promo 2+1 Extreme Clean', 'Rp 28.300', '', 'Deskripsi Produk\r\nFormula sikat gigi discovery 2+1 extrme clean inovasi pertama di dunia dengan 85 lubang bulu. Bulu 2x lebih rapat sehingga 2x lebih efektif membersihkan plak.\r\n\r\nOther Details :\r\nGagang sikat dilapisi karet sehingga mantap dipegang dan tidak licin.\r\n\r\nPLU :\r\n20022015', '20241216011640.jpg', 'Formula-Sikat-Gigi-Discovery-Promo-2+1-Extreme-Clean', '22', '2', '2024-12-16', 'user'),
(47, 'Anggur Muscat Hijau Import', 'Rp 34.900', '', 'Deskripsi Produk\r\nAnggur memiliki kandungan zat gizi yang baik bagi tubuh. Green Anggur Shine Muscat Premium juga memiliki manfaat yang tidak kalah dengan jenis biasanya, manfaat yang utama, yaitu mampu meningkatkan daya penglihatan. Anggur ini memiliki kandungan vitamin A termasuk karotenoid Lutein dan Zeaxanthin yang sudah dikenal mampu menjaga penglihatan dengan baik.\r\n\r\nOther Details :\r\nANGGUR SHINE MUSCAT PREMIUM PACK\r\n\r\nPLU :\r\n20130892', '20241216011949.jpg', 'Anggur-Muscat-Hijau-Import', '21', '3', '2024-12-16', 'user'),
(48, 'Apel Fuji Sun Sweet', 'Rp 14.000', '', 'Deskripsi Produk\r\nPengiriman dalam waktu 1 jam hanya berlaku untuk pengiriman EXPRESS & Pengiriman reguler disesuaikan dengan slot yang dipilih\r\n\r\nOther Details :\r\nMembantu mengurangi berat badan\r\n\r\nPLU :\r\n20068532', '20241216012123.jpg', 'Apel-Fuji-Sun-Sweet', '21', '3', '2024-12-16', 'user'),
(49, 'Formula Sikat Gigi Silver Ptotector3\'s Diamond Medium', 'Rp 12.400', '', 'Deskripsi Produk\r\nSikat gigi Formula yang dirancang khusus untuk merawat kebersihan dan kesehatan gigi secara optimal. Dengan bulu sikat medium dan ujung kepala sikat mengecil yang mampu menjangkau dan membersihkan hingga gigi paling belakang. Gagangnya yang ergonomis nyaman digenggam sehingga memberi kenyamanan saat menggosok gigi. Hadir dalam kemasan hemat isi 3 sikat gigi yang lebih ekonomis untuk seluruh keluarga. Bantu rawat gigi keluarga Anda selalu bersih dan sehat menggunakan Formula Sikat Gigi Silver Protector Diamond 3s.\r\n\r\nOther Details :\r\nFormula sikat gigi silver protector diamond pack Sikat gigi formula dengan ujung kepala sikat mengecil dan membersihkan hingga paling belakang.\r\n\r\nPerhatian :\r\nGanti sikat gigi anda maksimal 3 bulan sekali.\r\n\r\nPLU :\r\n10005836', '20241216012150.jpg', 'Formula-Sikat-Gigi-Silver-Ptotector3\'s-Diamond-Medium', '22', '2', '2024-12-16', 'user'),
(51, 'Formula Pasta Gigi Action Protect Family 160G', 'Rp 13.200', '', 'Deskripsi Produk\r\nFormula pasta gigi aksi action protector/family.\r\n\r\nKomposisi :\r\nAqua, calcium carbonate, sorbitol, hydrated silicia, sodium lauryl sulfate, flavor, sodium carboxymethylcellulose, sodium monofluorophospate, sodium phosphate, sodium saccharin, dmdm hydratoin.\r\n\r\nOther Details :\r\nFormula protective solutions pasta gigi action protector double fresh, pencegah gigi berlubang. Gratis sikat gigi formula advanced oral protection & care.\r\n\r\nPLU :\r\n10016785', '20241216012353.jpg', 'Formula-Pasta-Gigi-Action-Protect-Family-160G', '22', '2', '2024-12-16', 'user'),
(52, 'Jeruk Keprok Mandarin Baby Santang', 'Rp 31.400', '', 'Deskripsi Produk\r\nJeruk kaya dengan vitamin C dan antioksidan yang meningkatkan sistem kekebalan tubuh dan membantu melawan infeksi dan flu. Jeruk mengandung phytochemicals yang melawan agen penyebab kanker\r\n\r\nBerat :\r\n900 GR - 1,1 KG\r\n\r\nOther Details :\r\nBUAH IMPORT FRESH DAN SEGAR\r\n\r\nPLU :\r\n10007668', '20241216012409.jpg', 'Jeruk-Keprok-Mandarin-Baby-Santang', '21', '3', '2024-12-16', 'user'),
(54, 'Formula Pembersih Lidah', 'Rp 10.700', '', 'Deskripsi Produk\r\nFormula Tongue Cleaner Pembersih Lidah merupakan alat pembersih lidah berbahan berkualitas yang didesain ringan dan ergonomic, sehingga nyaman digunakan serta mudah di bawa kemana saja.\r\n\r\nPLU :\r\n10024222', '20241216012643.jpg', 'Formula-Pembersih-Lidah', '22', '2', '2024-12-16', 'user'),
(55, 'Formula Sikat Gigi Platinum Protector Disc Extreme Clean Soft', 'Rp 14.300', '', 'Deskripsi Produk\r\nInovasi pertama di dunia dengan 85 lubang bulu 2x lebih rapat sehingga 2x lebih efektif membersihkan plak. Bulu halus lebih efektif membersihkan sisa makanan di kantong gusi. Gagang sikat dilapisi karet sehingga mantap dipegang dan tidak licin.\r\n\r\nOther Details :\r\nFormula dengan cara pandang baru, menghadirkan rangkaian terlengkap produk perawatan dan perlindungan mulut dan gigi yang mutakhir.\r\n\r\nPLU :\r\n10032483', '20241216012920.jpg', 'Formula-Sikat-Gigi-Platinum-Protector-Disc-Extreme-Clean-Soft', '22', '2', '2024-12-16', 'user'),
(56, 'Garnier Micellar Cleansing Water Pink 400Ml', 'Rp 125.000', '', 'Deskripsi Produk\r\nPEMBERSIH WAJAH ALL-IN-1 UNTUK KULIT NORMAL CENDERUNG SENSITIF/nGarnier Micellar Water merupakan inovasi pembersih wajah terkini dengan kandungan molekul Micelles yang mampu mengangkat kotoran dan minyak seperti magnet, tanpa perlu dibilas./nTektsturnya ringan seperti air, lembut membersihkan kotoran dan make-up dari wajah, mata, dan bibir tanpa menimbulkan iritasi. Diformulasikan agar tidak lengket di wajah, tidak berminyak, dan tanpa parfum: cocok untuk semua jenis kulit termasuk kulit sensitif.\r\n\r\nCara Penggunaan :\r\nUsapkan/sapukan oada wajah, mata dan bibir dengan kapas tanpa menggosoknya. Tidak perlu dibilas.\r\n\r\nOther Details :\r\nGarnier skin naturals micellar cleansing water, menghapus makeup + membersihkan + menyegarkan tanpa bilas. Untuk wajah, mata, bibir tanpa parfum.\r\n\r\nPLU :\r\n20107171', '20241216012928.jpg', 'Garnier-Micellar-Cleansing-Water-Pink-400Ml', '24', '3', '2024-12-16', 'user'),
(57, 'Garnier Sakura Glow Hyaluron Super Whip 100mL', 'Rp 42.500', '', 'Deskripsi Produk\r\nMembersihkan wajah secara lembut mengangkat minyak berlebih, kotoran dan make up ringan non-waterproof tanpa menjadikan kulit kering. Dengan formula lembut sesuai untuk kulit sensitif Ekstrak Sakura membantu membuat kulit tampak cerah merona dan Hyaluron Serum membuat kulit lebih lembab dan glowing. Kulit tampak lebih glowing merona dari 3 hari pertama Busa lembut 50%* lebih padat membersihkan pori-pori secara menyeluruh.\r\n\r\nCara Penggunaan :\r\nPada telapak tangan yang basah, keluarkan produk secukupnya (kurang lebih 2 cm).\r\n\r\nPerhatian :\r\nHindari area mata.\r\n\r\nPLU :\r\n20098268', '20241216013044.jpg', 'Garnier-Sakura-Glow-Hyaluron-Super-Whip-100mL', '24', '3', '2024-12-16', 'user'),
(58, 'Garnier Skin Nat.Sakura Glow Serum Cream Spf30 20Ml', 'Rp 41.500', '', 'Deskripsi Produk\r\nDiperkaya dengan hyaluron untuk kulit terasa halus, lembut dan tampak glowing dalam 7 hari. Dengan SPF 30 PA+++ untuk perlindungan dari paparan sinar matahari.\r\n\r\nCara Penggunaan :\r\nOleskan secara merata pada wajah dan leher yang sudah dibersihkan.\r\n\r\nOther Details :\r\nKulit cerah merona\r\n\r\nPLU :\r\n20090447', '20241216013155.jpg', 'Garnier-Skin-Nat.Sakura-Glow-Serum-Cream-Spf30-20Ml', '24', '3', '2024-12-16', 'user'),
(59, 'Garnier Skin Natural Serum Mask Sakura White 28G', 'Rp 28.500', '', 'Deskripsi Produk\r\nGarnier skin naturals serum mask sakura white.\r\n\r\nCara Penggunaan :\r\n1. Buka lipatan masker, gunakan pada wajah yang sudah dibersihkan dengan lapisan pelindung berwarna birumenghadap keluar. 2. Lepas lapisan pelindung, sesuaikan masker dengan bentuk wajah mu. 3. Biarkan masker menutrisi kulitmu selama 15 menit. 4. Lepaskan masker, pijat perlahan cairan serum yang tersisa atau bersihkan dengan kapas wajah.\r\n\r\nOther Details :\r\nTissue mask generasi baru, tiap lembarnya menutrisi wajah dengan 1 minggu kadar konsentrasi serum. Sangant inovatif, masker ekstra tipis ini diperkaya dengan kandungan ekstrak sakura untuk kulit cerah merona & hyaluronic acid, zat aktif yang melembabkan.\r\n\r\nPLU :\r\n20087292', '20241216013330.jpg', 'Garnier-Skin-Natural-Serum-Mask-Sakura-White-28G', '24', '3', '2024-12-16', 'user'),
(61, 'Garnier Booster Serum Sakura White Hyaluron 7.5Ml', 'Rp 17.500', '', 'Deskripsi Produk\r\nIngin kulit glowing, halus dan bercahaya dalam 7 hari? Pakai Garnier Sakura Glow 30X Hyaluron Booster Serum! Inovasi terbaru dari Garnier untuk newborn glowing skin dalam 7 hari^! Diperkaya dengan Ekstrak Sakura dan 30x Hyaluron serum, cukup 3 tetes, kulit langsung terasa halus dan lembap. Pakai setiap pagi dan malam hari dengan rangkaian Garnier Sakura Glow Hyaluron lainnya untuk hasil yang lebih optimal.\r\n\r\nKomposisi :\r\nAQUA/WATER, BUTYLENEGLYCOL, PEG/PPG/POLYBUTYLENEGLYCOL - 8/5/3 GLYCERIN, NIACINAMIDE, GLYCERIN, METHYL GLUCETH-20, Cl 14700/RED 4, CARBOMER, TRIETHANOLAMINE, PARFUM/FRAGRANCE, SODIUM HYALURONATE, PHENOXYETHANOL, PRUNUS YEDOENSIS LEAF EXTRACT, LIMONENE, CAPRYLGLYCOL, CITRONELLOL, BIOSACCHARIDE GUM-1, POLYSORBATE 20, HEXYL CINNAMAL. (F.I.L. C246248/1).\r\n\r\nOther Details :\r\n30X Hyaluron untuk melembapkan dengan intensif. Ekstrak Sakura untuk kulit tampak lebih cerah\r\n\r\nPLU :\r\n20105060', '20241216013819.jpg', 'Garnier-Booster-Serum-Sakura-White-Hyaluron-7.5Ml', '24', '3', '2024-12-16', 'user'),
(62, 'Maybelline Mascara Hypercurl Waterproof 9.2Ml', 'Rp 92.500', '', 'Deskripsi Produk\r\nMakeup tanpa maskara tidak akan terasa lengkap! Maybelline Volum Express Hyper Curl Mascara Waterproof membuat bulu mata 4X lebih lentik natural, tanpa penjepit. Maskara ini paling tepat digunakan oleh kamu yang memiliki bulu mata pendek dan lurus, juga sangat cocok digunakan oleh pemula. Keunggulan : 1. Membuat 4X tampak lebih tebal. 2. Melentikkan secara natural.3. Smudge Proof. 4. Waterproof.\r\n\r\nCara Penggunaan :\r\nCara Pemakaian:\r\n\r\nOther Details :\r\nMaskara waterproof untuk bulu mata 4X lebih lentik natural, tanpa penjepit. Tahan hingga 24 jam*\r\n\r\nPLU :\r\n20056601', '20241216013940.jpg', 'Maybelline-Mascara-Hypercurl-Waterproof-9.2Ml', '25', '3', '2024-12-16', 'user'),
(63, 'Maybelline Super Stay Ink Vinyl 60 Mischievous 4.2mL', 'Rp 126.500', '', 'Deskripsi Produk\r\nTint kini dalam teknologi Superstay Lip paling transferproof & tahan lama dengan Vinyl 1. SHAKE = Kocokkemasanminimal 5detik. 2. SWIPE = Aplikasikandandiamkanhingabenar-benarkering. 3. 16 JAM PIGMENTED = Vinyl look yang trendy tanpa transfer\r\n\r\nPLU :\r\n20127807', '20241216014128.jpg', 'Maybelline-Super-Stay-Ink-Vinyl-60-Mischievous-4.2mL', '25', '3', '2024-12-16', 'user'),
(64, 'Maybelline Tattoo Brow 36H Pigment Pencil Natural Brown 0.25g', 'Rp 125.000', '', 'Deskripsi Produk\r\nBARU! Pensil alis mekanik yang waterproof dan tahan hingga 36 jam. Membuat alis natural & tahan lama sekarang menjadi lebih mudah. Inovasi baru produk pensil alis yang tahan lama hingga 36 jam. Tidak hanya waterproof, Maybelline Tattoo Brow Pencil juga smudgeproof, transferproof bahkan di cuaca panas & berkeringat sekalipun! Produk ini juga sudah dilengkapi dengan spoolie yang halus sehingga memudahkan proses aplikasi. Kini membentuk, mengisi dan merapikan alis untuk mendapatkan hasil yang natural menjadi mudah hanya dengan 1 produk saja!\r\n\r\nPLU :\r\n20125081', '20241216014249.jpg', 'Maybelline-Tattoo-Brow-36H-Pigment-Pencil-Natural-Brown-0.25g', '25', '3', '2024-12-16', 'user'),
(65, 'Maybelline Hyper Sharp Extreme Liner Ultra Black 0.4g', 'Rp 141.000', '', 'Deskripsi Produk\r\nVersi Baru! Maybelline Hypersharp Extreme Eyeliner. Eyeliner liquid waterproof dengan ujung kuas presisi 0.01mm yang tahan hingga 36 jam!\r\n\r\nPLU :\r\n20125080\r\nProduk Serupa', '20241216014413.jpg', 'Maybelline-Hyper-Sharp-Extreme-Liner-Ultra-Black-0.4g', '25', '3', '2024-12-16', 'user'),
(66, 'Maybelline Fit Me Matte+Poreless Powder 120 Classic Ivory 6G', 'Rp 37.750', '', 'Deskripsi Produk\r\nCompact powder dengan oil control formula yang mampu menahan minyak selama 12 jam.Kulit terasa halus, tampak cerah, dan terlindungi dari paparan sinar matahari dengan SPF 28 dan PA +++. Tersedia dalam enam pilihan warna. Cocok untuk semua jenis kulit.Sapukan pada wajah dan leher secara merata dengan spons.\r\n\r\nPLU :\r\n20101926', '20241216014607.jpg', 'Maybelline-Fit-Me-Matte+Poreless-Powder-120-Classic-Ivory-6G', '25', '3', '2024-12-16', 'user'),
(67, 'Kraft Keju All in 1 Box 150g', 'Rp 12.700', '', 'Deskripsi Produk\r\nKraft all in one rasa keju yang ringan, dengan tekstur yang keras menjadikannya lebih mudah diparut dan diiris,cocok untuk dimasak dan dipanggang.\r\n\r\nPLU :\r\n20110249', '20241216015218.jpg', 'Kraft-Keju-All-in-1-Box-150g', '26', '3', '2024-12-16', 'user'),
(68, 'Kraft Cheese Quick Melt Mozza 165G', 'Rp 26.400', '', 'Deskripsi Produk\r\nKini Anda tak perlu lagi membeli keju mozarella yang mahal dan terkadang rasanya justru kurang nendang. Hadir untuk Anda KRAFT Quick Melt Mozza sebagai keju cepat leleh dengan fungsi dan rasa seperti keju mozarella.Membuat aneka sajian dengan tambahan keju.\r\n\r\nCara Penyimpanan :\r\nMasukkan lemari es setelah dibuka.\r\n\r\nKomposisi :\r\nAir, keju cheddar, minyak nabati, padatan susu, pengemulsi; garam fosfat, mono & digliserida, garam mineral, maltodesktrin, pengatur keasaman; asam laktat, gula, pengawet; kaliun sorbat, Vit A, Vit B, mengandung susu.\r\n\r\nOther Details :\r\nKraft cheese quick melt mozza, keju cheddar olahan cepat leleh .\r\n\r\nTakaran Per Kemasan :\r\nSajian per kemasan : 6\r\n\r\nTakaran Per Serving :\r\nEnergi total 100kkal, energi dari lemak 60kkal, lemak total 7g, lemak jenuh 4.5g, protein 5g, karbohidrat total 4g, gula, 1g, natrium 370mg, Vit A 40%, kalsium 20%.\r\n\r\nTakaran Saji :\r\nTakaran saji : 30g\r\n\r\nPLU :\r\n20023912', '20241216015423.jpg', 'Kraft-Cheese-Quick-Melt-Mozza-165G', '26', '3', '2024-12-16', 'user'),
(69, 'Pro Chiz Keju Gold 160G', 'Rp 12.900', '', 'Deskripsi Produk\r\nhalus dan mudah untuk parut. Ini tidak mudah terbakar selama pembakaran, dan itu unggul dalam rasa. Cocok untuk keperluan rumah tangga atau outlet jasa makanan kecil .\r\n\r\nCara Penyimpanan :\r\nSimpan di suhu ruang. Bila kemasan sudah dibuka, simpan di lemari pendingin.\r\n\r\nKomposisi :\r\nAir, keju cheddar, pengental pati modifikasi asam, minyak nabati, pengemulsi, garam, pengatur keasaman asam laktat, perisa alami keju, pengawet, susu bubuk tanpa lemak, pewarna anato CI75120.\r\n\r\nOther Details :\r\nProchiz gold cheddar processed cheddar cheese, Keju cheddar olahan, lebih mudah diparut.\r\n\r\nPLU :\r\n20058306', '20241216020517.jpg', 'Pro-Chiz-Keju-Gold-160G', '26', '3', '2024-12-16', 'user'),
(70, 'Strawberry Fresh', 'Rp 22.900', '', 'Deskripsi Produk\r\nStrawberry juga mengandung vitamin dan mineral, seperti vitamin C, mangan, folat, dan potasium. Menurut sebuah penelitian, jika lansia yang memiliki risiko penyakit jantung mengonsumsi buah ini dapat meningkatkan kolesterol HDL (baik), tekanan darah, dan fungsi trombosit darahnya.\r\n\r\nBerat :\r\nBERAT PRODUK : 250 Gram\r\n\r\nOther Details :\r\nSTRAWBERRY FRESH\r\n\r\nPLU :\r\n10008251', '20241216020826.jpg', 'Strawberry-Fresh', '21', '3', '2024-12-16', 'user'),
(71, 'Mangga Harum Manis', 'Rp 18.800', '', 'Deskripsi Produk\r\nDaging mangga harum manis berwarna kuning cerah kejinggaan dengan rasa yang manis. Selain rasanya yang nikmat, buah mangga harum manis ternyata memiliki beragam manfaat bagi tubuh baik untuk melancarkan pencernaan, menurunkan kadar kolesterol dan bisa digunakan sebagai masker kecantikan untuk mencerahkan wajah dan membuat wajah menjadi lebih segar.\r\n\r\nPLU :\r\n10038011', '20241216021007.jpg', 'Mangga-Harum-Manis', '21', '3', '2024-12-16', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama`, `email`, `telepon`, `isi_saran`, `tanggal`) VALUES
(7, 'rifqi', 'rifqitama3@gmail.com', '081233754204', 'tambahkan produk yang kurang', '2024-12-16 02:48:17'),
(8, 'rifqi', 'rifqitama3@gmail.com', '08', 'isi saran', '2024-12-16 04:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int NOT NULL,
  `nama_toko` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`) VALUES
(2, 'toko kelontong'),
(3, 'alfa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(59, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(60, 'konstributor', 'konstributor', 'c4f1f00c170a5ec3d3f21179ad06da7f', 'Konstributor'),
(62, 'tama', 'rifqi pratama', '407b056f5e6197a948b7f836567fb63d', 'admin'),
(63, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Konstributor'),
(64, 'rifqi', 'rifqi pratama', '72561baf6079c338cc2dd68e98d52055', 'Konstributor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraosel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraosel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
