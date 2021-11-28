-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 02:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id_user_1` int(11) NOT NULL,
  `id_user_2` int(11) NOT NULL,
  `berteman` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id_game` int(11) NOT NULL,
  `id_publisher` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `harga` int(12) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id_game`, `id_publisher`, `name`, `harga`, `deskripsi`, `tanggal_rilis`, `gambar`) VALUES
(1, 1, 'Assassin\'s Creed Valhalla', 619000, 'Become Eivor, a Viking raider raised to be a fearless warrior, and lead your clan from icy desolation in Norway to a new home amid the lush farmlands of ninth-century England. Find your settlement and conquer this hostile land by any means to earn a place in Valhalla.\r\n\r\nEngland in the age of the Vikings is a fractured nation of petty lords and warring kingdoms. Beneath the chaos lies a rich and untamed land waiting for a new conqueror. Will it be you?', '2020-11-10', 'https://cdn.europosters.eu/image/1300/posters/assassin-s-creed-valhalla-raid-i96340.jpg'),
(2, 1, 'Far Cry 6', 1239000, 'Play as Dani Rojas, a local Yaran and become a guerrilla fighter to liberate the nation.\r\nWelcome to Yara, a tropical paradise frozen in time. Far Cry 6 immerses players into the adrenaline-filled world of a modern-day guerrilla revolution. \r\n\r\nJoin the revolution and push back against the oppressive regime of dictator Antón Castillo and his teenage son Diego, brought to life by Hollywood stars Giancarlo Esposito (The Mandalorian, Breaking Bad) and Anthony Gonzalez (Coco).\r\nPlaying as Dani Rojas, immerse yourself in the journey of a military dropout turned guerrilla revolutionary. To even the odds against Antón’s military, you’ll have to adopt the Resolver philosophy, employing an arsenal of unique and surprising new weapons, vehicles and animal companions to ignite a revolutionary movement that will burn the tyrannical regime to the ground.', '2021-10-06', 'https://image.api.playstation.com/vulcan/img/rnd/202106/0722/4MxzDZKZwtEWyMWZghvwd7bQ.jpg'),
(3, 2, 'Forza Horizon 5', 699000, 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars. Begin Your Horizon Adventure today and add to your Wishlist!', '2021-11-05', 'https://s2.gaming-cdn.com/images/products/8701/orig/forza-horizon-5-pc-xbox-one-xbox-series-xs-pc-xbox-one-xbox-serie-x-s-game-microsoft-store-cover.jpg'),
(4, 3, 'Ghostrunner', 612999, 'Ghostrunner is a hardcore FPP slasher packed with lightning-fast action, set in a grim, cyberpunk megastructure. Climb Dharma Tower, humanity’s last shelter, after a world-ending cataclysm. Make your way up from the bottom to the top, confront the tyrannical Keymaster, and take your revenge.\r\n\r\nThe streets of this tower city are full of violence. Mara the Keymaster rules with an iron fist and little regard for human life.\r\n\r\nAs resources diminish, the strong prey on the weak and chaos threatens to consume what little order remains. The decisive last stand is coming. A final attempt to set things right before mankind goes over the edge of extinction.\r\n\r\nAs the most advanced blade fighter ever created, you’re always outnumbered but never outclassed. Slice your enemies with a monomolecular katana, dodge bullets with your superhuman reflexes, and employ a variety of specialized techniques to\r\nprevail.', '2020-10-27', 'https://assets.mycast.io/posters/ghostrunner-fan-casting-poster-72330-large.jpg?1608327768'),
(5, 5, 'Kena: Bridge of Spirits', 216000, 'Kena, a young Spirit Guide, travels to an abandoned village in search of the sacred mountain shrine.  She struggles to uncover the secrets of this forgotten community hidden in an overgrown forest where wandering spirits are trapped.', '2021-08-24', 'https://i.pinimg.com/originals/91/e8/cc/91e8ccbb9b52288bec31e15f5ea3e659.png'),
(7, 6, 'Grand Theft Auto: The Trilogy – The Definitive Edition', 829000, 'Three iconic cities, three epic stories. Play the genre-defining classics of the original Grand Theft Auto Trilogy: Grand Theft Auto III, Grand Theft Auto: Vice City and Grand Theft Auto: San Andreas updated for a new generation, now with across-the-board enhancements including brilliant new lighting and environmental upgrades, high-resolution textures, increased draw distances, Grand Theft Auto V-style controls and targeting, and much more, bringing these beloved worlds to life with all new levels of detail.', '2021-11-11', 'https://m.media-amazon.com/images/M/MV5BYjBkMTI3ZmYtMTk1Zi00Y2QxLTk2NDUtZGE3MWM5YzlkM2ZhXkEyXkFqcGdeQXVyMTA0MTM5NjI2._V1_.jpg'),
(8, 7, 'Sherlock Holmes Chapter One Deluxe Edition', 649999, 'Before he was the world\'s greatest detective, Sherlock Holmes was a brilliant rebel itching to prove himself. When an old wound compels him back to the Mediterranean shore where his mother died, it seems like the perfect opportunity to do just that—but beneath the vibrant urban veneer of Cordona, the rhythm of island life strikes a more ominous beat. Crime and corruption, a twisted sense of justice and morality.. These are just a few stumbling-blocks in Sherlock\'s quest for truth.', '2021-11-16', 'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_SherlockHolmesChapterOneDeluxeEdition_Frogwares_Bundles_S2_1200x1600-3d9a857b0c4cdddc01dcb692d57436ef');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `gambar`) VALUES
(1, 'Adventure', 'https://i.pinimg.com/originals/55/74/03/557403fb6cd94aeb6e6a7407c704b666.gif'),
(2, 'Racing', 'https://media2.giphy.com/media/PF5UAWl27jm8ATVsSW/giphy-downsized-large.gif'),
(3, 'Adult', 'https://c.tenor.com/ftDAZSm3nqQAAAAC/lewd-anime.gif'),
(4, 'War', 'https://64.media.tumblr.com/93d054deabe68bdb3017cb7e140133e0/b9427c9bde177883-75/s400x600/a3b9e3cb030d82a211e6c80fbe3641a5a926823c.gifv');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_games`
--

CREATE TABLE `kategori_games` (
  `id_game` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_games`
--

INSERT INTO `kategori_games` (`id_game`, `id_kategori`) VALUES
(1, 1),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 2),
(4, 4),
(4, 3),
(4, 1),
(5, 1),
(7, 2),
(7, 1),
(7, 3),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `lama_bermain` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membayar`
--

CREATE TABLE `membayar` (
  `id_tagihan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `tervalidasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id_publishers` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ceo` varchar(255) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id_publishers`, `name`, `ceo`, `location`) VALUES
(1, 'Ubisoft', 'Yves Guillemot', 'Montreuil, Perancis'),
(2, 'Xbox Game Studios', 'Bill Gates', 'Redmond, Washington, United States'),
(3, 'All In! Games', 'Piotr Zygadlo', 'Paris'),
(5, 'Ember Lab', 'Mike and Josh Grier', 'Orange, California, United States of America '),
(6, 'Rockstar Games', 'Dan Houser and Sam Houser ', 'New York, New York, United States'),
(7, 'Frogwares', 'Dublin, Ireland', 'Wael Amr');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profil_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD KEY `id_user_1` (`id_user_1`),
  ADD KEY `id_user_2` (`id_user_2`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`),
  ADD KEY `id_publisher` (`id_publisher`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_games`
--
ALTER TABLE `kategori_games`
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `membayar`
--
ALTER TABLE `membayar`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id_publishers`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id_publishers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`id_user_1`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`id_user_2`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id_publisher`) REFERENCES `publishers` (`id_publishers`);

--
-- Constraints for table `kategori_games`
--
ALTER TABLE `kategori_games`
  ADD CONSTRAINT `kategori_games_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`),
  ADD CONSTRAINT `kategori_games_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD CONSTRAINT `koleksi_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`),
  ADD CONSTRAINT `koleksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `membayar`
--
ALTER TABLE `membayar`
  ADD CONSTRAINT `membayar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `membayar_ibfk_2` FOREIGN KEY (`id_tagihan`) REFERENCES `tagihan` (`id_tagihan`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
