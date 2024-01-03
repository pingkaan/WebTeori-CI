/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `stock` int(10) NOT NULL,
  `category` enum('clothes','pants','shoes') NOT NULL DEFAULT 'clothes',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(6, '2023-12-30-150356', 'App\\Database\\Migrations\\Users', 'default', 'App', 1703956263, 1);
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(7, '2023-12-30-160322', 'App\\Database\\Migrations\\Product', 'default', 'App', 1703956263, 1);


INSERT INTO `product` (`id`, `name`, `price`, `image`, `stock`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Supreme', 11111, '1703956296_8a6c5e63882c48847ff6.jpg', 100, 'shoes', '2023-12-30 17:11:36', '2023-12-30 17:42:43');
INSERT INTO `product` (`id`, `name`, `price`, `image`, `stock`, `category`, `created_at`, `updated_at`) VALUES
(3, 'Supreme 2', 121241, '1703956439_4e181e98896ab90da824.jpg', 12131, 'clothes', '2023-12-30 17:13:59', '2023-12-30 17:47:48');
INSERT INTO `product` (`id`, `name`, `price`, `image`, `stock`, `category`, `created_at`, `updated_at`) VALUES
(4, 'Supreme 4', 11111, '1703958200_202a28b8f011f1aa424e.jpg', 1000, 'shoes', '2023-12-30 17:40:48', '2023-12-30 17:43:20');

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'DANU DWIKI LAKSANA', 'd2laksana.dev@gmail.com', '$2y$10$rFUj7NvYlBMNseuaSTbCEOHECYWtKCH.AMcll45tSP.FvMX3v1Jeq', '2023-12-30 17:48:40', '2023-12-30 17:48:40');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;