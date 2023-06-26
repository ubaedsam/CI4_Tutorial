-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 12.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4composer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-06-14-064047', 'App\\Database\\Migrations\\CreateProductTable', 'default', 'App', 1686725135, 1),
(2, '2023-06-15-021050', 'App\\Database\\Migrations\\CreateTblFakultasTable', 'default', 'App', 1686797261, 2),
(3, '2023-06-15-021103', 'App\\Database\\Migrations\\CreateTblJurusanTable', 'default', 'App', 1686797265, 2),
(4, '2023-06-15-021113', 'App\\Database\\Migrations\\CreateTblMahasiswaTable', 'default', 'App', 1686797268, 2),
(5, '2023-06-15-025455', 'App\\Database\\Migrations\\CreateTblMahasiswaTable', 'default', 'App', 1686797728, 3),
(6, '2023-06-15-034628', 'App\\Database\\Migrations\\CreateTblUploadTable', 'default', 'App', 1686800878, 4),
(7, '2023-06-17-032633', 'App\\Database\\Migrations\\CreateTblSiswaTable', 'default', 'App', 1686972542, 5),
(8, '2023-06-17-044016', 'App\\Database\\Migrations\\CreateTblUploadsTable', 'default', 'App', 1686977079, 6),
(9, '2023-06-17-044232', 'App\\Database\\Migrations\\CreateTblGalleryTable', 'default', 'App', 1686977081, 6),
(10, '2023-06-17-045253', 'App\\Database\\Migrations\\CreateTblUploadsTable', 'default', 'App', 1686977622, 7),
(11, '2023-06-17-045321', 'App\\Database\\Migrations\\CreateTblGalleryTable', 'default', 'App', 1686977623, 7),
(12, '2023-06-18-032551', 'App\\Database\\Migrations\\CreateTblBeritaTable', 'default', 'App', 1687058879, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(5) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`) VALUES
(1, 'Faizah Melani Update', 'Eum nam autem modi neque quo enim earum nihil. Debitis deleniti iste est sapiente. Maxime cupiditate est maiores hic dolore.'),
(2, 'Elisa Winarsih', 'Nam quia sunt itaque reiciendis earum. Quis minima ea maiores vitae voluptas non consectetur. Eaque et veritatis placeat molestias.'),
(3, 'Ajiono Kamal Hidayat', 'Dolor vel ullam consectetur in. Laboriosam fugiat qui molestiae voluptatem consectetur fugiat. Rerum error qui eveniet. Dolorum similique tempora velit fuga ex sint.'),
(4, 'Marsudi Mandala S.Gz', 'Maxime sint libero nihil consectetur provident quis. Veniam quia et consectetur doloribus. Possimus enim veniam saepe perspiciatis quibusdam aliquam.'),
(5, 'Limar Waskita', 'Necessitatibus maiores qui sed suscipit. Autem odit et dicta non magni quasi. Et temporibus doloribus laborum atque quia natus consequuntur. Architecto unde nemo nam aut.'),
(6, 'Erik Marpaung', 'Rerum perferendis qui sed. Et autem dolore beatae fugit consectetur. Sed accusantium enim repellat laboriosam temporibus.'),
(7, 'Ikhsan Lazuardi', 'Vel ipsa placeat ab doloribus. Omnis aut natus nihil et sit. Qui quo ab omnis earum veritatis iure ad.'),
(8, 'Tri Indra Uwais', 'Ea est quia nemo animi mollitia. Ut non doloribus aut deserunt. Dicta laboriosam quidem fuga.'),
(9, 'Jane Anggraini S.E.', 'Nihil fuga rem consequatur sed. Molestiae id enim sit. At assumenda harum suscipit nam facere esse assumenda labore.'),
(10, 'Candrakanta Ibun Damanik', 'Magnam pariatur repudiandae autem rerum provident temporibus qui. Fugiat harum explicabo id vel eaque sequi sed. Animi unde velit magnam eaque sed voluptatum qui.'),
(11, 'Carla Maryati', 'Error sequi quod est fugiat aut. Sequi ut facilis vero nihil. Cum nihil corrupti nesciunt eos culpa. Soluta aut non eligendi qui eius. Quo officia est quisquam.'),
(12, 'Cengkir Prakasa', 'Quis ipsam ea aut cum enim quo inventore molestiae. Laudantium quo eligendi in enim aut quaerat aperiam enim.'),
(13, 'Mila Kani Namaga S.T.', 'Culpa qui temporibus sit. Iste tempora excepturi assumenda. Non adipisci quis non eos et cupiditate.'),
(14, 'Gilda Purnawati', 'Quia aut sunt dolore excepturi odit. Saepe reprehenderit architecto aut temporibus unde recusandae. Asperiores repellendus dolor esse adipisci praesentium vero.'),
(15, 'Bakti Waluyo M.Ak', 'Voluptas iusto deserunt natus autem. Consequatur illo omnis vel unde quas. Dolores in nesciunt animi. Quisquam enim dolore voluptas velit ut.'),
(16, 'Radit Setiawan', 'Accusamus consequatur nulla minima laboriosam fuga. Accusamus et doloremque distinctio quae. Aut vitae dolore et vero aut.'),
(17, 'Sarah Suartini M.Farm', 'Aut minima est sunt neque natus fugiat. Aspernatur qui earum non autem aut unde sequi.'),
(18, 'Jaiman Manullang S.Pd', 'Qui quo quia quo eos. Ut et illo cum. Id voluptas sit voluptas sint distinctio ipsam a.'),
(19, 'Jati Wahyudin S.Pd', 'Laboriosam officiis vel velit. Sequi ullam corporis error blanditiis quos reiciendis sed. Quas aliquid mollitia fugiat architecto. Possimus voluptas quidem beatae doloremque.'),
(20, 'Vanya Amalia Laksmiwati M.Kom.', 'Dolorem unde iste sed quia consequatur. Rerum rerum eveniet est possimus voluptate quis. Numquam repellat voluptatem quis debitis. Alias quaerat maxime maiores est deleniti odio doloribus maiores.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `stock` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `harga`, `stock`) VALUES
(1, 'nasi padang', '15000', '50'),
(2, 'roti canai', '3000', '100'),
(3, 'Biskuat', '500', '50'),
(4, 'Cakwe Enak', '5000', '100'),
(6, 'Teh Kotak', '10000', '10'),
(7, 'Bubur Ayam', '50000', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(5) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `isi_berita`, `gambar`) VALUES
(1, 'vero', 'Perferendis dolorum vel sapiente ea qui autem ipsam ut. Nesciunt quia perferendis voluptatem amet et repudiandae. Id qui itaque aperiam itaque nisi.', 'https://lorempixel.com/540/380/?12121'),
(2, 'corporis', 'Amet earum dolor illum voluptatem. Iusto nulla nihil suscipit sint sit quam officia vel. Ab ratione in mollitia asperiores.', 'https://lorempixel.com/540/380/?13081'),
(3, 'dolorem', 'Molestias temporibus eos et voluptate adipisci praesentium libero. Asperiores facilis qui omnis magni quam animi. Tempora quod ad vel vitae. Exercitationem nihil ipsum hic eius.', 'https://lorempixel.com/540/380/?36032'),
(4, 'fugit', 'Repellendus numquam totam neque sequi et. Nostrum neque vel ut et saepe voluptate ullam dolor. Aliquid expedita error iusto non.', 'https://lorempixel.com/540/380/?25967'),
(5, 'magni', 'Voluptatem id quasi delectus est quia. Aut cumque commodi exercitationem dolore alias et quae. Nihil rerum sequi sint vitae est quia.', 'https://lorempixel.com/540/380/?19270'),
(6, 'reprehenderit', 'Repellendus dignissimos et sed optio voluptatem voluptatum voluptatum. Quidem illum et autem soluta. Aut at quam nobis. Vel corrupti nisi qui consequatur doloremque.', 'https://lorempixel.com/540/380/?84689'),
(7, 'earum', 'Sint et temporibus voluptas non molestiae. Est quas quo debitis molestiae. Occaecati id placeat illum sed deserunt perferendis.', 'https://lorempixel.com/540/380/?72542'),
(8, 'voluptatem', 'Vitae consequatur est quia ut ut. Commodi rerum et est non nemo. At sint dolorem voluptas est est velit placeat. Dignissimos distinctio exercitationem eos est.', 'https://lorempixel.com/540/380/?58893'),
(9, 'sed', 'Ea qui amet non sunt et sint incidunt. Quo et quasi perspiciatis reiciendis sint doloremque. Optio odit animi nobis et.', 'https://lorempixel.com/540/380/?38787'),
(10, 'sed', 'Repudiandae eaque alias voluptatem aspernatur animi explicabo. Autem error quos dolorum sunt ipsa. Placeat harum porro neque recusandae sit ipsam aliquam illo.', 'https://lorempixel.com/540/380/?78049'),
(11, 'labore', 'Et animi fugiat quasi modi saepe nesciunt. Dolorem tempora ipsam incidunt. Mollitia dolores quia rerum reprehenderit.', 'https://lorempixel.com/540/380/?77300'),
(12, 'voluptas', 'Fugiat quis eum officiis libero dicta qui non. Dolor facilis adipisci et facilis. Vel minima in laborum sed. Voluptas provident quia qui maxime. Ipsa et nulla sequi sapiente.', 'https://lorempixel.com/540/380/?49821'),
(13, 'omnis', 'Magni velit delectus molestias et et. Quaerat deserunt delectus nesciunt sint et doloribus earum. Veniam ipsam velit reprehenderit illo. Tenetur id aut enim et.', 'https://lorempixel.com/540/380/?35548'),
(14, 'minus', 'Sint hic dolore maiores corrupti odit minus. Enim sed delectus minima natus aut est hic molestiae. Sunt quae eos temporibus expedita.', 'https://lorempixel.com/540/380/?34806'),
(15, 'eius', 'Repudiandae omnis dicta omnis ea. Sed delectus veritatis ullam libero voluptatem. Aut excepturi possimus tempora est quam.', 'https://lorempixel.com/540/380/?89048'),
(16, 'omnis', 'In aut accusantium soluta dolor. Ut eius natus et. Aspernatur amet consequuntur ut aut deleniti maxime. Dolor enim quis nesciunt ut.', 'https://lorempixel.com/540/380/?90692'),
(17, 'deleniti', 'Velit architecto minus iusto vel enim. Excepturi excepturi exercitationem laboriosam quas explicabo. Qui est quis sit harum. Omnis expedita fugit hic vel exercitationem voluptatibus.', 'https://lorempixel.com/540/380/?78559'),
(18, 'quisquam', 'Dignissimos in at consequatur aut. Cumque quae ut doloribus repellat et sed. Quis sequi quo itaque doloremque. At et doloribus doloremque quaerat dicta provident adipisci.', 'https://lorempixel.com/540/380/?25256'),
(19, 'reiciendis', 'Assumenda earum dolores placeat ipsum deserunt vel soluta at. Voluptatem quia dolor quo excepturi. Voluptatem vero ut amet eos. Numquam qui et eum ut voluptatem illum quia quos.', 'https://lorempixel.com/540/380/?56543'),
(20, 'aperiam', 'Et consectetur vel illum ea quibusdam rerum. A illo a eligendi inventore sit et. Aut id nulla totam rem minima.', 'https://lorempixel.com/540/380/?43954'),
(21, 'atque', 'Quos ducimus quo aut voluptatibus voluptas odit accusantium. Dolorum iusto eum vel. Aspernatur fugit dolor quasi incidunt voluptate culpa vero.', 'https://lorempixel.com/540/380/?11703'),
(22, 'dolorum', 'Illum autem temporibus dolor dolor impedit voluptatum. Culpa vel nostrum est aut sunt.', 'https://lorempixel.com/540/380/?42046'),
(23, 'sed', 'Doloribus quaerat quae assumenda velit ratione. Qui quam omnis repellendus. Reiciendis natus rem recusandae laborum sapiente aut.', 'https://lorempixel.com/540/380/?82887'),
(24, 'molestiae', 'Consequuntur esse delectus nisi et. Doloremque ipsa laborum facilis. Et minus nulla non numquam sit.', 'https://lorempixel.com/540/380/?17578'),
(25, 'minima', 'Quia est soluta officiis voluptas explicabo mollitia eos. Deleniti in vel accusantium. In ut id excepturi et. Quam aut mollitia et ullam expedita.', 'https://lorempixel.com/540/380/?91020'),
(26, 'magnam', 'In aut fugiat sunt officia facere hic sed. Odit nam magnam dignissimos quod.', 'https://lorempixel.com/540/380/?49036'),
(27, 'est', 'Quisquam repellat omnis aliquam ipsa perferendis voluptatem. Distinctio pariatur commodi placeat autem. Necessitatibus facere id voluptatibus. Ea qui repellat minus ut ex ut.', 'https://lorempixel.com/540/380/?97688'),
(28, 'earum', 'Aut corrupti quo ad omnis modi. Eligendi hic dolorem beatae rerum maxime. At qui inventore eum est itaque.', 'https://lorempixel.com/540/380/?22798'),
(29, 'et', 'Blanditiis deleniti et eum vero ut aut. Perspiciatis nisi voluptatem ea molestias eveniet. Modi neque et aperiam est corrupti quae.', 'https://lorempixel.com/540/380/?81496'),
(30, 'et', 'In reprehenderit est et ipsa dolor. Vel eum reiciendis ut reprehenderit. Voluptatem odio omnis architecto adipisci quos qui eum sunt.', 'https://lorempixel.com/540/380/?81528'),
(31, 'molestiae', 'Numquam consequatur impedit sed saepe. Aspernatur explicabo ipsa corrupti totam consequatur. Harum quae commodi enim similique debitis ut.', 'https://lorempixel.com/540/380/?93686'),
(32, 'ea', 'Provident libero qui adipisci debitis. Ut commodi est est in hic dicta. Dolores minima laudantium quo fugiat sunt veritatis.', 'https://lorempixel.com/540/380/?68362'),
(33, 'aliquid', 'Sint voluptatem dignissimos illo minima aut. Cum nisi voluptate sint molestias. Ipsum dignissimos sit repellendus enim. Sed dicta non hic et ad eaque soluta.', 'https://lorempixel.com/540/380/?73387'),
(34, 'autem', 'Tenetur minima et pariatur sunt ipsa odio eveniet. Quas minus rem qui ea sint quia accusamus. Dolore quaerat magnam id placeat cumque.', 'https://lorempixel.com/540/380/?85642'),
(35, 'ut', 'Necessitatibus in rem aliquid sit non dolore aut sit. Rerum et iure nemo minus voluptatem aut quis consequatur. Eum illo doloremque dolorum accusantium.', 'https://lorempixel.com/540/380/?57940'),
(36, 'consectetur', 'At quasi ut ut dolorem. Quia nulla tempora nesciunt exercitationem sed impedit magni. Nesciunt sit itaque rerum dolorum aliquam autem. Blanditiis dolor laboriosam eveniet vel dolor.', 'https://lorempixel.com/540/380/?72984'),
(37, 'quas', 'Maxime eligendi voluptas repellat voluptatem. Exercitationem fugit voluptatem temporibus qui unde sed vel. Laboriosam dicta sapiente voluptas dolor voluptates. Optio sed est et excepturi.', 'https://lorempixel.com/540/380/?77624'),
(38, 'eos', 'Qui vel molestias hic accusantium voluptatem eos qui harum. Placeat nam odio tempore assumenda a nisi et.', 'https://lorempixel.com/540/380/?95442'),
(39, 'commodi', 'Tempora aut fugiat adipisci alias voluptatibus sed. Molestias cum dicta beatae dolore. Deleniti nam doloremque aliquid quasi qui fugiat.', 'https://lorempixel.com/540/380/?13601'),
(40, 'eum', 'Iure placeat quis omnis labore est exercitationem magnam magni. Provident nobis nisi qui praesentium ipsum. Laborum nostrum velit sequi.', 'https://lorempixel.com/540/380/?81132'),
(41, 'praesentium', 'Totam quis dolorum dolor cupiditate minima sed. Ea nulla perspiciatis adipisci id facilis animi. Deserunt unde voluptas earum cum nihil. Voluptatem ducimus harum aut tenetur sunt esse.', 'https://lorempixel.com/540/380/?97021'),
(42, 'in', 'Sunt unde qui dolorem sapiente sed vero. Corporis quis sit id laudantium eaque corrupti. Corrupti aliquid sit recusandae.', 'https://lorempixel.com/540/380/?50083'),
(43, 'provident', 'Nisi et necessitatibus ut sit. Recusandae est quo nesciunt. Dolore magnam aut ea.', 'https://lorempixel.com/540/380/?12766'),
(44, 'voluptas', 'Officiis quia error aut eos saepe. Et enim doloribus voluptas. Voluptatem et expedita quo non. Non consequatur rerum eveniet.', 'https://lorempixel.com/540/380/?71519'),
(45, 'qui', 'Eaque in quae ratione animi praesentium suscipit. Aut maxime enim voluptas rerum numquam iusto. Est odio molestias voluptas mollitia in a ut. Aut doloribus omnis in tenetur.', 'https://lorempixel.com/540/380/?11021'),
(46, 'enim', 'Veniam consequuntur beatae quos laudantium. Repellat magnam magni voluptates nemo ad vel exercitationem. Expedita et nobis libero omnis neque laboriosam corrupti facere.', 'https://lorempixel.com/540/380/?39693'),
(47, 'voluptatum', 'Repellat nihil porro sed et quo. Deleniti rerum quod quidem. Vel nesciunt temporibus eligendi repudiandae voluptas. Laboriosam omnis totam esse dolore inventore ipsa impedit.', 'https://lorempixel.com/540/380/?29321'),
(48, 'maxime', 'Unde est fuga qui rerum labore vitae quidem. Aliquam rem quibusdam ipsum dignissimos consequatur qui deleniti voluptate. Et deleniti temporibus soluta voluptatem.', 'https://lorempixel.com/540/380/?28120'),
(49, 'ipsam', 'Distinctio vitae quis magni magnam quam. Repudiandae repellendus debitis voluptatem et doloribus delectus corrupti. Odio autem unde nostrum laudantium. Odio nihil eligendi voluptates dolores.', 'https://lorempixel.com/540/380/?59987'),
(50, 'ut', 'Non nihil adipisci vel iure. Quis quo blanditiis saepe eligendi. Tempora magni nemo enim unde dolores. Omnis deserunt officia velit dolores.', 'https://lorempixel.com/540/380/?45513'),
(51, 'ea', 'Possimus nemo accusantium quis in omnis nihil quia. Illum non natus iure omnis ut repudiandae. Inventore autem perferendis aliquam et a quae.', 'https://lorempixel.com/540/380/?70355'),
(52, 'eos', 'Fuga accusamus adipisci voluptas hic atque veritatis voluptatibus. Quis libero omnis numquam recusandae ducimus. Officiis ipsum iusto consequatur animi alias blanditiis dicta.', 'https://lorempixel.com/540/380/?82626'),
(53, 'maxime', 'Non reprehenderit delectus eius id. Voluptatem nihil neque aliquam eum sed quisquam ea. Consequatur ipsum ut quas non eius et. Ut rerum molestias quam non autem.', 'https://lorempixel.com/540/380/?86975'),
(54, 'sint', 'Quis modi voluptatem doloribus provident sed. Ex et sunt ipsum minus. Est rem et rerum sed suscipit quaerat.', 'https://lorempixel.com/540/380/?88758'),
(55, 'fuga', 'Sint sed vel praesentium ad sunt rerum. Possimus delectus reprehenderit sit pariatur. Doloremque quia ut et labore fuga totam quia et.', 'https://lorempixel.com/540/380/?15734'),
(56, 'voluptatem', 'Illum dicta omnis quis sunt. Cumque error non aliquid magni hic. Et culpa delectus vel aut vel.', 'https://lorempixel.com/540/380/?77252'),
(57, 'autem', 'In et velit esse. Quibusdam modi ducimus nobis ut sunt vitae quisquam. Officiis omnis enim est repellat dolor sapiente voluptatem. Sit nulla molestiae quae earum.', 'https://lorempixel.com/540/380/?51838'),
(58, 'numquam', 'Consequatur dolore consequatur cupiditate facilis. Quia occaecati voluptas in suscipit ab modi tempora nihil. Eligendi distinctio nesciunt sint illo qui. Et sint sit voluptates.', 'https://lorempixel.com/540/380/?65696'),
(59, 'nesciunt', 'Occaecati laudantium labore non quia modi. Expedita qui aut quis voluptates soluta. Natus et iure assumenda beatae ad aut.', 'https://lorempixel.com/540/380/?33066'),
(60, 'modi', 'Iste quo aut dolores et iusto. Voluptates qui voluptas ea fugit ratione. Maxime qui et iusto repellat ut.', 'https://lorempixel.com/540/380/?67361'),
(61, 'illum', 'Magni rem repellat dolorem est qui. Possimus optio veritatis iste architecto. Omnis nostrum ad id inventore fugit ullam. Nesciunt consequatur molestiae eos.', 'https://lorempixel.com/540/380/?68193'),
(62, 'tempore', 'Laborum autem quia neque temporibus. Molestiae ea provident adipisci harum porro architecto libero. Aliquid aut laboriosam aut.', 'https://lorempixel.com/540/380/?28095'),
(63, 'velit', 'Cupiditate sint est assumenda est praesentium praesentium quos. Ut aut et necessitatibus assumenda nesciunt. Distinctio ut dolorum numquam ea et. Hic nihil laborum in unde non vel.', 'https://lorempixel.com/540/380/?78895'),
(64, 'laborum', 'Sequi voluptas harum dolorem quia non maxime. Fuga placeat repudiandae aut.', 'https://lorempixel.com/540/380/?91067'),
(65, 'qui', 'Ut in esse velit aliquid repellendus perspiciatis. Est quia sed deserunt consequatur et. Nemo sint quia voluptatem.', 'https://lorempixel.com/540/380/?35940'),
(66, 'quia', 'Et maiores consequatur dolor voluptatem. Est temporibus adipisci est quo praesentium dolores velit. Et consectetur sed cum impedit. Aperiam saepe saepe sequi.', 'https://lorempixel.com/540/380/?96302'),
(67, 'voluptate', 'Eveniet inventore et beatae et deleniti ipsum. Et maxime aut et voluptatem necessitatibus distinctio assumenda quia. Eos aut eligendi voluptas dolorum facere ea facilis.', 'https://lorempixel.com/540/380/?18681'),
(68, 'laboriosam', 'Eveniet eum dicta sequi sed. Ad consequuntur qui debitis maiores sunt. Assumenda et deserunt rerum blanditiis in laborum praesentium odio.', 'https://lorempixel.com/540/380/?50114'),
(69, 'consequatur', 'Et repellendus dolor placeat dolorum mollitia minima sunt quis. Quasi aperiam doloribus sed aliquid dolor atque dolorem. Est commodi eum et earum temporibus.', 'https://lorempixel.com/540/380/?18593'),
(70, 'eos', 'Totam recusandae possimus voluptatem qui. Impedit praesentium et qui fuga. Eum dolorem accusantium voluptatem sint esse deleniti. Soluta repellendus laborum odio quod et animi non assumenda.', 'https://lorempixel.com/540/380/?73363'),
(71, 'odit', 'Labore est dolores ea assumenda commodi. Nihil dolorem illo minus dolor veritatis tenetur veniam. Est dignissimos dolore culpa ab voluptas ratione.', 'https://lorempixel.com/540/380/?40279'),
(72, 'et', 'Iste minima nihil sed necessitatibus voluptate qui corporis. Vel minima molestias quos libero. Eos earum veniam qui fugiat placeat tempore. Est et et dolorem harum autem repellendus.', 'https://lorempixel.com/540/380/?49886'),
(73, 'voluptatem', 'Et quia quos id. Qui aut est corporis consequatur illo quaerat quo. Voluptatem est sunt rem ut et sed minus.', 'https://lorempixel.com/540/380/?27859'),
(74, 'voluptas', 'Rem nemo aut optio eos qui ut voluptas. Quo enim ut et. Quidem sapiente at unde sunt.', 'https://lorempixel.com/540/380/?93075'),
(75, 'eveniet', 'Ea qui magnam maxime et deserunt quibusdam reiciendis laboriosam. Est accusamus quibusdam rerum officia quis. Ducimus et perferendis et nisi ipsam sequi. Iste incidunt qui animi velit eos.', 'https://lorempixel.com/540/380/?82229'),
(76, 'rem', 'Commodi quam neque sed sapiente et laudantium. Est qui reprehenderit optio qui. Ad explicabo aut porro dolorem temporibus amet ut voluptatum.', 'https://lorempixel.com/540/380/?96289'),
(77, 'qui', 'Autem hic consequatur nisi quis asperiores velit. Itaque officiis libero adipisci rem incidunt pariatur libero.', 'https://lorempixel.com/540/380/?10777'),
(78, 'ipsum', 'Optio ab aliquam possimus omnis. Excepturi itaque quia dolorum nulla dolores corrupti vel. Consequatur ratione at maxime dolorem ea.', 'https://lorempixel.com/540/380/?89958'),
(79, 'dolores', 'Sed molestiae qui ipsa aut tenetur voluptas. Saepe quos iusto voluptatem unde eum sint ea. Unde animi earum officia et et enim sapiente. Omnis occaecati et dolores aut.', 'https://lorempixel.com/540/380/?54590'),
(80, 'officiis', 'Autem laboriosam sed modi aliquid. Veritatis ea illum est nam officiis quos officia. Aspernatur ut et voluptas eligendi ducimus et fugiat.', 'https://lorempixel.com/540/380/?30332'),
(81, 'hic', 'Est consequuntur eius ab qui accusantium in dolorum. Accusamus reprehenderit ratione culpa eaque quo maxime minus. Tenetur doloremque omnis cum dicta impedit.', 'https://lorempixel.com/540/380/?21447'),
(82, 'explicabo', 'Omnis ut sed quis ex. Ullam nobis rerum quod beatae ad iure perferendis. Dolor ut consequatur officiis eum ea sapiente.', 'https://lorempixel.com/540/380/?19745'),
(83, 'laborum', 'Atque vel magni dicta modi aliquid nobis. Quia ipsa nihil inventore fugiat provident praesentium vel. Non odio ea aspernatur expedita molestias.', 'https://lorempixel.com/540/380/?61924'),
(84, 'id', 'Enim rerum labore cupiditate eius molestiae explicabo laborum accusamus. Voluptatem amet asperiores ea non. Voluptatem ea quas qui.', 'https://lorempixel.com/540/380/?26651'),
(85, 'possimus', 'Est numquam sequi cum et voluptas. Nihil sed et dolorum porro necessitatibus. Pariatur nihil non at ut harum distinctio voluptatum repellat. Inventore dicta eum quia.', 'https://lorempixel.com/540/380/?76334'),
(86, 'vel', 'Et ut expedita omnis doloremque. Et harum voluptas ut recusandae. Commodi officiis sint quam consequatur.', 'https://lorempixel.com/540/380/?48425'),
(87, 'voluptate', 'Asperiores quasi voluptatem cumque. Corporis unde libero rerum. Pariatur nesciunt quibusdam ea.', 'https://lorempixel.com/540/380/?73071'),
(88, 'velit', 'Dolores suscipit libero omnis molestiae doloremque. Natus magni hic autem rerum sed. Repellat delectus quo est sed. Voluptatem voluptatem quo doloremque.', 'https://lorempixel.com/540/380/?19368'),
(89, 'maxime', 'Provident enim eos facilis sit. Saepe consectetur non culpa perferendis qui magni voluptatem. Facilis minus quam accusantium perspiciatis ipsa.', 'https://lorempixel.com/540/380/?50892'),
(90, 'nam', 'Cumque et doloribus delectus enim. Minima rerum voluptatem voluptatem hic. Aliquam quas et atque libero. Magnam ut blanditiis rerum dolore velit velit qui.', 'https://lorempixel.com/540/380/?40164'),
(91, 'laboriosam', 'Ipsa culpa laborum corporis in. Fuga sit molestiae iure. Doloremque voluptatum est repudiandae animi magnam debitis hic nam. Animi magnam quis voluptatem reprehenderit.', 'https://lorempixel.com/540/380/?15342'),
(92, 'quo', 'Quia hic excepturi molestiae. Voluptatem aut laudantium rerum id. A nam eos pariatur ab dolorum dolores.', 'https://lorempixel.com/540/380/?53988'),
(93, 'corrupti', 'Incidunt iste reprehenderit hic nam recusandae. Harum beatae quia incidunt nesciunt eius. Autem dolorum ea amet aliquid.', 'https://lorempixel.com/540/380/?35275'),
(94, 'aperiam', 'Praesentium deleniti illum voluptas minus ut ad voluptatem ea. Repudiandae in qui ut tempore rerum explicabo praesentium. Recusandae rerum eum accusantium quia aut iusto.', 'https://lorempixel.com/540/380/?10878'),
(95, 'doloremque', 'Dolores tenetur ut suscipit esse in atque asperiores commodi. Ab voluptas id id amet optio. Quia sapiente et alias consequatur. Sit earum maiores porro laudantium officia quia sed voluptas.', 'https://lorempixel.com/540/380/?15740'),
(96, 'velit', 'Excepturi dolor et ducimus cumque officia iusto magni. Quia quia labore molestias quis voluptatem doloremque. Nobis recusandae nulla maiores.', 'https://lorempixel.com/540/380/?65355'),
(97, 'amet', 'Perferendis dolores et inventore id fuga rerum. Culpa dolorem et laudantium est ducimus. Omnis fuga aut aliquid magni. Facilis cupiditate ex et adipisci molestiae repudiandae.', 'https://lorempixel.com/540/380/?70141'),
(98, 'saepe', 'Deserunt ipsa animi ut fugit. Autem pariatur sit et ut. Delectus quia et dolorum corporis commodi rerum molestiae. Aliquid voluptas rerum dolorum placeat. Beatae rem quia et et aperiam est.', 'https://lorempixel.com/540/380/?57155'),
(99, 'accusantium', 'Sed et eaque labore incidunt. Laboriosam illum aliquid sint laborum ipsa. Cupiditate fugit impedit velit repudiandae delectus ut. Repellendus soluta laboriosam distinctio non et.', 'https://lorempixel.com/540/380/?43979'),
(100, 'qui', 'Adipisci ex id a molestias voluptates dignissimos qui saepe. Non perspiciatis consequatur et. Est a quia voluptas tempora qui. Incidunt voluptates et dicta dolorum et.', 'https://lorempixel.com/540/380/?36321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `id_fakultas` int(5) UNSIGNED NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Teknik'),
(2, 'Kesehatan'),
(3, 'Manajemen'),
(4, 'Sastra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeries`
--

CREATE TABLE `tbl_galeries` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_upload` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_galeries`
--

INSERT INTO `tbl_galeries` (`id`, `id_upload`, `gambar`) VALUES
(1, 977, '1686981578_87d3b91c242ad5f3d835.jpg'),
(2, 977, '1686981578_4cc9504faccc0eb790bc.jpg'),
(3, 977, '1686981579_1965286d4a5205212974.jpg'),
(4, 977, '1686981579_7b27ff4b30bdb32e3ca7.jpg'),
(5, 977, '1686981579_57559f96b3987cf4fdcf.jpg'),
(6, 712, '1686982184_ab765c3a91d10886db28.jpg'),
(7, 712, '1686982184_d186ecef00fd855440aa.jpg'),
(8, 712, '1686982185_efecc224a7721aa24448.jpg'),
(9, 712, '1686982185_5d95a27ead805ce3316d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(5) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Elektro'),
(3, 'Perawat'),
(4, 'Kedokteran'),
(5, 'Kebidanan'),
(6, 'Manajemen Bisnis'),
(7, 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `id_fakultas` int(10) UNSIGNED NOT NULL,
  `id_jurusan` int(10) UNSIGNED NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nama_mhs`, `id_fakultas`, `id_jurusan`, `kelas`) VALUES
(1, 'Adi', 1, 2, 'A001'),
(2, 'Asep', 1, 1, 'A002'),
(3, 'Putri', 1, 1, 'A002'),
(4, 'Jaka', 3, 6, 'A017'),
(5, 'Bima', 3, 7, 'A006'),
(6, 'Ari Yana', 2, 3, 'A007'),
(7, 'Yulisyah', 2, 3, 'A007'),
(8, 'Bisma', 2, 4, 'A009'),
(9, 'Suep', 2, 4, 'A009'),
(10, 'Mirna', 3, 7, 'A006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id`, `tahun`, `jumlah`) VALUES
(1, '2010', 100),
(2, '2011', 150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(5) UNSIGNED NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `foto_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama`, `email`, `foto_siswa`) VALUES
(1, '008192', 'Ubaed SAM', 'ubaedsam.universitaspamulang@gmail.', '1686976199_f2cd958cedb7919a32db.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_upload`
--

CREATE TABLE `tbl_upload` (
  `id` int(5) UNSIGNED NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_upload`
--

INSERT INTO `tbl_upload` (`id`, `keterangan`, `gambar`) VALUES
(1, 'Gambar 1', 'gambar1.jpg'),
(2, 'Gambar 2', 'gambar2.jpg'),
(3, 'Ubaed', 'ubaed 2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id_upload` int(5) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id_upload`, `judul`) VALUES
(712, 'Album 2'),
(977, 'Album 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Ubaed', 'admin', 'admin', 1),
(2, 'Jaka', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `tbl_galeries`
--
ALTER TABLE `tbl_galeries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_upload` (`id_upload`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_upload`
--
ALTER TABLE `tbl_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `id_fakultas` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeries`
--
ALTER TABLE `tbl_galeries`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_upload`
--
ALTER TABLE `tbl_upload`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id_upload` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=978;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_galeries`
--
ALTER TABLE `tbl_galeries`
  ADD CONSTRAINT `tbl_galeries_ibfk_1` FOREIGN KEY (`id_upload`) REFERENCES `tbl_uploads` (`id_upload`);

--
-- Ketidakleluasaan untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `tbl_fakultas` (`id_fakultas`),
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `tbl_jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
