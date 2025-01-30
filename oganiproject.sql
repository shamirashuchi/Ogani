-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oganiproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `user_id`, `name`, `description`, `image`, `status`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 4, 'North Country Smokehouse', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/brand-images/435505.png', 1, 2, 'Accepted', '2024-05-25 06:57:36', NULL),
(2, 4, '365 Everyday Value by Whole Foods', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/brand-images/218934.jpg', 1, 2, 'Accepted', '2024-05-25 06:57:46', NULL),
(3, 5, 'Hormel Natural Choice', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/brand-images/430570.png', 1, 2, 'Accepted', '2024-05-25 06:57:54', NULL),
(4, 4, 'Hillshire Farm', '“Indulge in the rich, creamy taste of our artisanal gourmet chocolate truffles. Each truffle is handcrafted using only the finest ingredients, including', 'upload/brand-images/305490.png', 1, 0, 'Requested', '2024-05-25 07:47:26', NULL),
(5, 5, 'Oscar Mayer', '“Indulge in the rich, creamy taste of our artisanal gourmet chocolate truffles. Each truffle is handcrafted using only the finest ingredients, including', 'upload/brand-images/363617.png', 1, 0, 'Requested', '2024-05-25 07:50:42', NULL),
(6, 4, '365 Everyday Value', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups,', 'upload/brand-images/18133.png', 1, 0, 'Requested', '2024-05-25 11:04:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('2587b8e082a7874f36b249efb2685f3d', 'i:1;', 1718108121),
('2587b8e082a7874f36b249efb2685f3d:timer', 'i:1718108121;', 1718108121),
('35920fda892b566e4e133dd60b87ac3b', 'i:1;', 1716657959),
('35920fda892b566e4e133dd60b87ac3b:timer', 'i:1716657959;', 1716657959),
('3683d0db0cec67de0265164b435b03fc', 'i:1;', 1716614065),
('3683d0db0cec67de0265164b435b03fc:timer', 'i:1716614065;', 1716614065),
('4220a713c2a4397e8913d71de8a93a49', 'i:1;', 1716599469),
('4220a713c2a4397e8913d71de8a93a49:timer', 'i:1716599469;', 1716599469),
('79a0ff770df9fbbb82b1dcb90bd9e3e5', 'i:1;', 1716601842),
('79a0ff770df9fbbb82b1dcb90bd9e3e5:timer', 'i:1716601842;', 1716601842),
('9480bfe5c42dc22a36b100bfb64f34e8', 'i:1;', 1716613476),
('9480bfe5c42dc22a36b100bfb64f34e8:timer', 'i:1716613476;', 1716613476),
('9525618194d107e87165e72e057f43cb', 'i:1;', 1716657878),
('9525618194d107e87165e72e057f43cb:timer', 'i:1716657878;', 1716657878),
('a75c1f49f05bedc6dd45df8b4cd031f8', 'i:1;', 1716601063),
('a75c1f49f05bedc6dd45df8b4cd031f8:timer', 'i:1716601063;', 1716601063),
('acde254809da91efd52d1d812025f243', 'i:1;', 1716600343),
('acde254809da91efd52d1d812025f243:timer', 'i:1716600343;', 1716600343),
('d4bea880f209b235a822632bb48fad47', 'i:1;', 1716600722),
('d4bea880f209b235a822632bb48fad47:timer', 'i:1716600722;', 1716600722),
('e9944e006f99839b6188381da35e09fd', 'i:1;', 1716657722),
('e9944e006f99839b6188381da35e09fd:timer', 'i:1716657722;', 1716657722),
('ecc586492f91f778cea96402247bc70e', 'i:1;', 1716598912),
('ecc586492f91f778cea96402247bc70e:timer', 'i:1716598912;', 1716598912),
('eee4af16e93b7a41fd1ff848f74cc948', 'i:1;', 1716613612),
('eee4af16e93b7a41fd1ff848f74cc948:timer', 'i:1716613612;', 1716613612);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `description`, `image`, `status`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 2, 'Fresh Meat', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups, stews, and curries, our curry paste is versatile and easy to use. Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', 'upload/category-images/341007.png', 1, 2, 'Accepted', '2024-05-25 06:42:10', NULL),
(2, 2, 'vegetable', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/category-images/401401.png', 1, 2, 'Accepted', '2024-05-25 06:42:19', NULL),
(3, 2, 'Fruit &Nut gift', 'and easy to use. Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with', 'upload/category-images/438940.png', 1, 2, 'Accepted', '2024-05-25 06:42:28', NULL),
(4, 2, 'Fresh Berries', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/category-images/77164.png', 1, 2, 'Accepted', '2024-05-25 06:42:34', NULL),
(5, 2, 'Butter & Eggs', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/category-images/465932.png', 1, 2, 'Accepted', '2024-05-25 06:42:40', NULL),
(6, 2, 'Oatmeal', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/category-images/271715.png', 1, 2, 'Accepted', '2024-05-25 06:42:46', NULL),
(7, 2, 'Fresh Onion', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices,', 'upload/category-images/415381.png', 1, 1, 'Seen', '2024-05-25 07:34:09', NULL),
(8, 3, 'Fastfood', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/category-images/103120.png', 1, 1, 'Seen', '2024-05-25 07:37:42', NULL),
(9, 2, 'Winter foods', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/category-images/493608.jpg', 1, 1, 'Seen', '2024-05-25 10:59:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `cost` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` text DEFAULT NULL,
  `blood_group` text DEFAULT NULL,
  `nid` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `date_of_birth`, `blood_group`, `nid`, `address`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Raju', 'raju@gmail.com', '01767116056', '$2y$12$GmkwwHKleAEoVe2qE.UQ/e1cosucqDH2C6JDMRYH9DOmXG1qXZBue', NULL, NULL, NULL, NULL, NULL, 1, '2024-05-24 22:44:29', '2024-05-24 22:44:29'),
(2, 'Nirupoma', 'nirupoma@gmail.com', '01767116089', '$2y$12$LXeT83d4sMVCHpHELpscduzx/imwEvTaCCgnpNBBboYGlBnu4v1xC', NULL, NULL, NULL, NULL, NULL, 1, '2024-05-24 22:45:16', '2024-05-24 22:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '7ab73645-b10f-455e-87cc-7c35f426df08', 'database', 'default', '{\"uuid\":\"7ab73645-b10f-455e-87cc-7c35f426df08\",\"displayName\":\"App\\\\Notifications\\\\AdminNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:8;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:35:\\\"App\\\\Notifications\\\\AdminNotification\\\":2:{s:11:\\\"\\u0000*\\u0000follower\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:10;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"id\\\";s:36:\\\"37d67dcc-a090-477e-bbba-7c8604d8de53\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:9:\\\"broadcast\\\";}}\"}}', 'RuntimeException: Notification is missing toArray method. in I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php:73\nStack trace:\n#0 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php(40): Illuminate\\Notifications\\Channels\\BroadcastChannel->getData(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#1 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(148): Illuminate\\Notifications\\Channels\\BroadcastChannel->send(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#2 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(106): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'ca20e986-455c-4...\', Object(App\\Notifications\\AdminNotification), \'broadcast\')\n#3 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#4 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(101): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#5 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#6 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(119): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#7 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#8 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#13 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#14 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#15 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#17 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#18 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#19 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#21 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#22 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#23 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#24 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#27 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#28 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#29 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#30 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#31 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#32 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(212): Illuminate\\Container\\Container->call(Array)\n#33 I:\\we\\ogani\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(1049): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(318): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(169): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1183): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 I:\\we\\ogani\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#41 {main}', '2024-05-25 00:37:19'),
(2, '4c078f1b-72c7-4e1e-a8ef-d29f48c936e4', 'database', 'default', '{\"uuid\":\"4c078f1b-72c7-4e1e-a8ef-d29f48c936e4\",\"displayName\":\"App\\\\Notifications\\\\AdminNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:9;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:35:\\\"App\\\\Notifications\\\\AdminNotification\\\":2:{s:11:\\\"\\u0000*\\u0000follower\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:11;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"id\\\";s:36:\\\"3aa75a3f-b8c7-4991-9e14-c65e15e19992\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:9:\\\"broadcast\\\";}}\"}}', 'RuntimeException: Notification is missing toArray method. in I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php:73\nStack trace:\n#0 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php(40): Illuminate\\Notifications\\Channels\\BroadcastChannel->getData(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#1 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(148): Illuminate\\Notifications\\Channels\\BroadcastChannel->send(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#2 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(106): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'13b74976-8278-4...\', Object(App\\Notifications\\AdminNotification), \'broadcast\')\n#3 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#4 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(101): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#5 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#6 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(119): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#7 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#8 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#13 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#14 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#15 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#17 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#18 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#19 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#21 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#22 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#23 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#24 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#27 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#28 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#29 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#30 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#31 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#32 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(212): Illuminate\\Container\\Container->call(Array)\n#33 I:\\we\\ogani\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(1049): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(318): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(169): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1183): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 I:\\we\\ogani\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#41 {main}', '2024-05-25 00:37:20'),
(3, '02c22d95-a8dd-4a86-a949-5dc74fc2138b', 'database', 'default', '{\"uuid\":\"02c22d95-a8dd-4a86-a949-5dc74fc2138b\",\"displayName\":\"App\\\\Notifications\\\\AdminNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:8;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:35:\\\"App\\\\Notifications\\\\AdminNotification\\\":2:{s:11:\\\"\\u0000*\\u0000follower\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:12;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"id\\\";s:36:\\\"9bf398fa-bdf7-4256-8d8c-4845d5ef78b4\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:9:\\\"broadcast\\\";}}\"}}', 'RuntimeException: Notification is missing toArray method. in I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php:73\nStack trace:\n#0 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php(40): Illuminate\\Notifications\\Channels\\BroadcastChannel->getData(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#1 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(148): Illuminate\\Notifications\\Channels\\BroadcastChannel->send(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#2 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(106): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'923fe595-e1e8-4...\', Object(App\\Notifications\\AdminNotification), \'broadcast\')\n#3 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#4 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(101): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#5 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#6 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(119): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#7 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#8 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#13 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#14 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#15 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#17 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#18 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#19 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#21 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#22 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#23 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#24 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#27 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#28 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#29 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#30 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#31 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#32 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(212): Illuminate\\Container\\Container->call(Array)\n#33 I:\\we\\ogani\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(1049): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(318): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(169): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1183): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 I:\\we\\ogani\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#41 {main}', '2024-05-25 00:37:20'),
(4, '5eb40bd2-a03f-4dbe-a720-7753ae7b4c3d', 'database', 'default', '{\"uuid\":\"5eb40bd2-a03f-4dbe-a720-7753ae7b4c3d\",\"displayName\":\"App\\\\Notifications\\\\AdminNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:8;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:35:\\\"App\\\\Notifications\\\\AdminNotification\\\":2:{s:11:\\\"\\u0000*\\u0000follower\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:13;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"id\\\";s:36:\\\"e14d98e4-1aba-47f9-aebd-552658b69f18\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:9:\\\"broadcast\\\";}}\"}}', 'RuntimeException: Notification is missing toArray method. in I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php:73\nStack trace:\n#0 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php(40): Illuminate\\Notifications\\Channels\\BroadcastChannel->getData(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#1 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(148): Illuminate\\Notifications\\Channels\\BroadcastChannel->send(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#2 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(106): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'5502c54b-0b9a-4...\', Object(App\\Notifications\\AdminNotification), \'broadcast\')\n#3 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#4 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(101): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#5 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#6 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(119): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#7 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#8 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#13 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#14 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#15 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#17 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#18 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#19 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#21 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#22 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#23 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#24 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#27 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#28 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#29 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#30 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#31 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#32 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(212): Illuminate\\Container\\Container->call(Array)\n#33 I:\\we\\ogani\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(1049): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(318): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(169): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1183): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 I:\\we\\ogani\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#41 {main}', '2024-05-25 00:37:20'),
(5, '9462958f-9e7d-416b-aa3b-af7e29eb2d15', 'database', 'default', '{\"uuid\":\"9462958f-9e7d-416b-aa3b-af7e29eb2d15\",\"displayName\":\"App\\\\Notifications\\\\AdminNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:8;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:35:\\\"App\\\\Notifications\\\\AdminNotification\\\":2:{s:11:\\\"\\u0000*\\u0000follower\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:12;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"id\\\";s:36:\\\"3cf8a1d3-9d91-4deb-8a67-6f33409ae724\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:9:\\\"broadcast\\\";}}\"}}', 'RuntimeException: Notification is missing toArray method. in I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php:73\nStack trace:\n#0 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\Channels\\BroadcastChannel.php(40): Illuminate\\Notifications\\Channels\\BroadcastChannel->getData(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#1 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(148): Illuminate\\Notifications\\Channels\\BroadcastChannel->send(Object(App\\Models\\User), Object(App\\Notifications\\AdminNotification))\n#2 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(106): Illuminate\\Notifications\\NotificationSender->sendToNotifiable(Object(App\\Models\\User), \'10078ed1-8925-4...\', Object(App\\Notifications\\AdminNotification), \'broadcast\')\n#3 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Notifications\\NotificationSender->Illuminate\\Notifications\\{closure}()\n#4 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\NotificationSender.php(101): Illuminate\\Notifications\\NotificationSender->withLocale(NULL, Object(Closure))\n#5 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\ChannelManager.php(54): Illuminate\\Notifications\\NotificationSender->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#6 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Notifications\\SendQueuedNotifications.php(119): Illuminate\\Notifications\\ChannelManager->sendNow(Object(Illuminate\\Database\\Eloquent\\Collection), Object(App\\Notifications\\AdminNotification), Array)\n#7 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Notifications\\SendQueuedNotifications->handle(Object(Illuminate\\Notifications\\ChannelManager))\n#8 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#13 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#14 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#15 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Notifications\\SendQueuedNotifications), false)\n#17 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#18 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#19 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Notifications\\SendQueuedNotifications))\n#21 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#22 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#23 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#24 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#25 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#26 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#27 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#28 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#29 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#30 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#31 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#32 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(212): Illuminate\\Container\\Container->call(Array)\n#33 I:\\we\\ogani\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#34 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#35 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(1049): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(318): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 I:\\we\\ogani\\vendor\\symfony\\console\\Application.php(169): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 I:\\we\\ogani\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1183): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 I:\\we\\ogani\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#41 {main}', '2024-05-25 00:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `investment_amount` decimal(10,2) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `message` text DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `customer_id`, `product_id`, `message`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 10, 2, 1, 'hi', 0, 'Requested', '2024-05-25 10:46:55', NULL),
(2, 10, 2, 1, 'How You processed the meat?', 0, 'Requested', '2024-05-25 10:47:32', NULL),
(5, 10, 2, 1, 'Sorry i can not tell you', 1, 'Requested', NULL, NULL),
(6, NULL, 1, 1, 'hi', 0, 'Requested', '2024-05-25 10:53:29', NULL),
(7, 10, 2, 1, 'ok', 0, 'Requested', '2024-05-28 13:25:16', NULL),
(8, 10, 2, 1, 'Can you tell some details?', 0, 'Requested', '2024-06-11 18:12:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_28_081806_add_two_factor_columns_to_users_table', 1),
(5, '2024_03_28_081847_create_personal_access_tokens_table', 1),
(6, '2024_03_31_054514_create_categories_table', 1),
(7, '2024_04_01_051153_create_sub_categories_table', 1),
(8, '2024_04_01_053844_create_brands_table', 1),
(9, '2024_04_02_131344_create_units_table', 1),
(10, '2024_04_02_134543_create_products_table', 1),
(11, '2024_04_02_134751_create_product_images_table', 1),
(12, '2024_04_13_184147_create_sessions_table', 1),
(13, '2024_04_13_184543_create_password_reset_tokens_table', 1),
(14, '2024_04_13_214125_create_update_categories_table', 1),
(15, '2024_04_19_122915_create_customers_table', 1),
(16, '2024_04_19_123503_create_orders_table', 1),
(17, '2024_04_19_123912_create_order_details_table', 1),
(18, '2024_04_22_031959_create_couriers_table', 1),
(19, '2024_04_28_053534_create_update_sub_categories_table', 1),
(20, '2024_04_28_053612_create_update_brands_table', 1),
(21, '2024_04_28_053704_create_update_units_table', 1),
(22, '2024_05_01_024126_create_update_products_table', 1),
(23, '2024_05_01_024220_create_update_product_images_table', 1),
(24, '2024_05_08_050222_create_sellers_table', 1),
(25, '2024_05_08_051712_create_investors_table', 1),
(26, '2024_05_11_005158_create_notifications_table', 1),
(27, '2024_05_22_185517_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('37d67dcc-a090-477e-bbba-7c8604d8de53', 'App\\Notifications\\AdminNotification', 'App\\Models\\User', 8, '{\"user_id\":10,\"user_name\":\"Bithi\"}', NULL, '2024-05-25 00:37:19', '2024-05-25 00:37:19'),
('3aa75a3f-b8c7-4991-9e14-c65e15e19992', 'App\\Notifications\\AdminNotification', 'App\\Models\\User', 9, '{\"user_id\":11,\"user_name\":\"Mihir\"}', NULL, '2024-05-25 00:37:20', '2024-05-25 00:37:20'),
('3cf8a1d3-9d91-4deb-8a67-6f33409ae724', 'App\\Notifications\\AdminNotification', 'App\\Models\\User', 8, '{\"user_id\":12,\"user_name\":\"Himi\"}', NULL, '2024-05-25 00:37:20', '2024-05-25 00:37:20'),
('9bf398fa-bdf7-4256-8d8c-4845d5ef78b4', 'App\\Notifications\\AdminNotification', 'App\\Models\\User', 8, '{\"user_id\":12,\"user_name\":\"Himi\"}', NULL, '2024-05-25 00:37:20', '2024-05-25 00:37:20'),
('e14d98e4-1aba-47f9-aebd-552658b69f18', 'App\\Notifications\\AdminNotification', 'App\\Models\\User', 8, '{\"user_id\":13,\"user_name\":\"shimu\"}', NULL, '2024-05-25 00:37:20', '2024-05-25 00:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL DEFAULT 0,
  `order_total` double NOT NULL,
  `tax_total` double NOT NULL,
  `shipping_total` double NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_date` text DEFAULT NULL,
  `delivery_timestamp` text DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_date` text DEFAULT NULL,
  `payment_timestamp` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'BDT',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `courier_id`, `order_total`, `tax_total`, `shipping_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_status`, `delivery_date`, `delivery_timestamp`, `payment_method`, `payment_status`, `payment_date`, `payment_timestamp`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 2860, 360, 100, '2024-05-25', '1716595200', 'Pending', 'Indira', 'Pending', NULL, NULL, 'Online', 'Pending', NULL, NULL, '665174c72a886', 'BDT', NULL, NULL),
(2, 1, 0, 3550, 450, 100, '2024-05-25', '1716595200', 'Pending', 'Indira', 'Pending', NULL, NULL, 'Online', 'Pending', NULL, NULL, '665187550b95c', 'BDT', NULL, NULL),
(3, 1, 0, 3550, 450, 100, '2024-05-25', '1716595200', 'Pending', 'Indira', 'Pending', NULL, NULL, 'Cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-05-25 01:18:12', '2024-05-25 01:18:12'),
(4, 2, 0, 1250, 150, 100, '2024-05-28', '1716854400', 'Pending', 'Indira', 'Pending', NULL, NULL, 'Cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-05-27 22:53:03', '2024-05-27 22:53:03'),
(5, 2, 0, 4700, 600, 100, '2024-05-28', '1716854400', 'Pending', 'Indira', 'Pending', NULL, NULL, 'Cash', 'Pending', NULL, NULL, NULL, 'BDT', '2024-05-28 01:53:08', '2024-05-28 01:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_code`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Dried Meat', '23428', 600, 4, '2024-05-24 23:19:03', '2024-05-24 23:19:03'),
(2, 2, 2, 'Dried Meat', '23428', 600, 5, '2024-05-25 00:38:13', '2024-05-25 00:38:13'),
(3, 3, 2, 'Dried Meat', '23428', 600, 5, '2024-05-25 01:18:12', '2024-05-25 01:18:12'),
(4, 4, 1, 'Sausages', '8765', 1000, 1, '2024-05-27 22:53:03', '2024-05-27 22:53:03'),
(5, 5, 1, 'Sausages', '8765', 1000, 4, '2024-05-28 01:53:09', '2024-05-28 01:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_manager_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `regular_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `stock_amount` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `featured_status` tinyint(4) NOT NULL DEFAULT 0,
  `trending_status` tinyint(4) NOT NULL DEFAULT 0,
  `sales_count` int(11) NOT NULL DEFAULT 0,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `product_manager_id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `short_description`, `long_description`, `meta_title`, `meta_description`, `regular_price`, `selling_price`, `stock_amount`, `status`, `featured_status`, `trending_status`, `sales_count`, `hit_count`, `image`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 10, 8, 1, 1, 1, 1, 'Sausages', '8765', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'Writing great, high-converting product descriptions for food products involves several key elements:\r\n\r\nHighlighting the key features and benefits of the product: This includes the ingredients used, nutritional value, and any unique selling points such as being organic, gluten-free, or handcrafted.\r\nUsing descriptive and compelling language: Use words that evoke emotion and create a sense of desire for the product. Avoid using overly technical or scientific language.\r\nIncluding clear and detailed product information: This includes the weight, size, and any other relevant information about the product.\r\nUsing high-quality images: Images should be clear, high-resolution, and show the product in an appetizing way.\r\nCreating a sense of urgency or scarcity: Use phrases like “limited time offer” or “while supplies last” to create a sense of urgency and encourage customers to buy.\r\nMentioning any certifications or awards the product has received, if any.\r\nUsing customer reviews or testimonials: Include quotes from satisfied customers to build trust and credibility.\r\nOptimizing for SEO: Use relevant keywords and phrases in your product description to improve visibility and search engine rankings.', 'Meat', 'your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', 400, 1000, 10, 1, 0, 0, 0, 0, 'upload/product-images/1716599297.png', 2, 'Accepted', '2024-05-25 07:25:05', NULL),
(2, 11, 9, 1, 1, 3, 1, 'Dried Meat', '23428', 'your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups, stews, and curries, our curry paste is versatile and easy to use.', 'Meat', 'Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', 200, 600, 10, 1, 0, 0, 0, 0, 'upload/product-images/1716599742.jpg', 2, 'Accepted', '2024-05-25 07:31:15', NULL),
(3, 12, 8, 3, 3, 2, 1, 'Berries', '3421', 'Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups, stews, and curries, our curry paste is versatile and easy to use. Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', 'Orange', 'Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', 300, 600, 10, 1, 0, 0, 0, 0, 'upload/product-images/1716599996.png', 2, 'Accepted', '2024-05-25 07:25:17', NULL),
(4, 13, 8, 3, 4, 2, 1, 'Berries', '8765', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups, stews, and curries, our curry paste is versatile and easy to use. Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', 'Berries', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass', 200, 400, 10, 1, 0, 0, 0, 0, 'upload/product-images/1716600197.png', 2, 'Accepted', '2024-05-25 07:25:24', NULL),
(5, 12, 8, 1, 5, 1, 4, 'chicken', '7689', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups,', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups, stews, and curries, our curry paste is versatile and easy to use. Just add your choice of protein and vegetables for a delicious and authentic Thai meal. Experience the taste of true Thai cuisine with our authentic curry paste.”', '“Introduce you', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices,', 900, 100, 20, 1, 0, 0, 0, 0, 'upload/product-images/1716614130.png', 0, 'Requested', '2024-05-25 11:15:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/product-other-images/3798.png', '2024-05-24 19:08:17', '2024-05-24 19:08:17'),
(2, 1, 'upload/product-other-images/266.png', '2024-05-24 19:08:17', '2024-05-24 19:08:17'),
(3, 1, 'upload/product-other-images/4327.png', '2024-05-24 19:08:17', '2024-05-24 19:08:17'),
(4, 1, 'upload/product-other-images/616.png', '2024-05-24 19:08:17', '2024-05-24 19:08:17'),
(5, 1, 'upload/product-other-images/2485.png', '2024-05-24 19:08:17', '2024-05-24 19:08:17'),
(6, 1, 'upload/product-other-images/564.png', '2024-05-24 19:08:17', '2024-05-24 19:08:17'),
(7, 2, 'upload/product-other-images/1884.jpg', '2024-05-24 19:15:43', '2024-05-24 19:15:43'),
(8, 2, 'upload/product-other-images/3836.png', '2024-05-24 19:15:43', '2024-05-24 19:15:43'),
(9, 2, 'upload/product-other-images/2929.png', '2024-05-24 19:15:43', '2024-05-24 19:15:43'),
(10, 2, 'upload/product-other-images/486.png', '2024-05-24 19:15:43', '2024-05-24 19:15:43'),
(11, 2, 'upload/product-other-images/2843.png', '2024-05-24 19:15:43', '2024-05-24 19:15:43'),
(12, 3, 'upload/product-other-images/1323.png', '2024-05-24 19:19:56', '2024-05-24 19:19:56'),
(13, 3, 'upload/product-other-images/4337.png', '2024-05-24 19:19:56', '2024-05-24 19:19:56'),
(14, 3, 'upload/product-other-images/4739.png', '2024-05-24 19:19:57', '2024-05-24 19:19:57'),
(15, 3, 'upload/product-other-images/1635.png', '2024-05-24 19:19:57', '2024-05-24 19:19:57'),
(16, 3, 'upload/product-other-images/4885.png', '2024-05-24 19:19:57', '2024-05-24 19:19:57'),
(17, 3, 'upload/product-other-images/4900.png', '2024-05-24 19:19:57', '2024-05-24 19:19:57'),
(18, 4, 'upload/product-other-images/3954.png', '2024-05-24 19:23:17', '2024-05-24 19:23:17'),
(19, 4, 'upload/product-other-images/2182.png', '2024-05-24 19:23:17', '2024-05-24 19:23:17'),
(20, 4, 'upload/product-other-images/2674.png', '2024-05-24 19:23:17', '2024-05-24 19:23:17'),
(21, 4, 'upload/product-other-images/3803.png', '2024-05-24 19:23:17', '2024-05-24 19:23:17'),
(22, 4, 'upload/product-other-images/320.png', '2024-05-24 19:23:17', '2024-05-24 19:23:17'),
(23, 4, 'upload/product-other-images/3460.png', '2024-05-24 19:23:17', '2024-05-24 19:23:17'),
(24, 5, 'upload/product-other-images/897.png', '2024-05-24 23:15:30', '2024-05-24 23:15:30'),
(25, 5, 'upload/product-other-images/4980.png', '2024-05-24 23:15:30', '2024-05-24 23:15:30'),
(26, 5, 'upload/product-other-images/4994.png', '2024-05-24 23:15:30', '2024-05-24 23:15:30'),
(27, 5, 'upload/product-other-images/2237.png', '2024-05-24 23:15:30', '2024-05-24 23:15:30'),
(28, 5, 'upload/product-other-images/4880.png', '2024-05-24 23:15:30', '2024-05-24 23:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AiLE97I3teFT8w0SAVjW6dJqoiJrFjlnYry10Rga', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoialRoOFFRRUhBajk1TXFydVZRYnl0WGpUSklSbDR0RzREQ0hYYlA2cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8vYWRtaW4tYXNzZXRzL2Fzc2V0cy9pbWFnZXMvZWNvbW1lcmNlLzQuanBnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEwO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJGhnTy9ZYjUyUnUwZHRqRDhtLldhYWVZVEx0cTRWeXFxT0FxMmdEcFREWURjMWZybS5YRUV5Ijt9', 1718111418);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `user_id`, `category_id`, `name`, `description`, `image`, `status`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 2, 1, 'Processed meats', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/sub-category-images/22572.png', 1, 2, 'Accepted', '2024-05-25 06:48:58', NULL),
(2, 2, 1, 'Unprocessed-meat', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/sub-category-images/19561.png', 1, 2, 'Accepted', '2024-05-25 06:49:17', NULL),
(3, 2, 3, 'Orange', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/sub-category-images/212481.png', 1, 2, 'Accepted', '2024-05-25 06:49:11', NULL),
(4, 2, 3, 'Banana', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/sub-category-images/377851.png', 1, 2, 'Accepted', '2024-05-25 06:49:23', NULL),
(5, 3, 1, 'vegetable', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 'upload/sub-category-images/433818.png', 1, 1, 'Seen', '2024-05-25 07:38:58', NULL),
(6, 2, 1, 'Meat', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups,', 'upload/sub-category-images/417951.jpg', 1, 0, 'Requested', '2024-05-25 11:01:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `user_id`, `name`, `code`, `description`, `status`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 6, 'kg', '1234', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 1, 2, 'Accepted', '2024-05-25 07:02:30', NULL),
(2, 7, 'lb', '2344', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', 1, 2, 'Accepted', '2024-05-25 07:02:38', NULL),
(3, 6, 'kg', '234', '“Indulge in the rich, creamy taste of our artisanal gourmet chocolate truffles. Each truffle is handcrafted using only the finest ingredients, including', 1, 0, 'Requested', '2024-05-25 07:54:04', NULL),
(4, 6, '4kg', '12390', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai herbs and spices, including lemongrass, ginger, and chili peppers. Perfect for use as a base for soups,', 1, 0, 'Requested', '2024-05-25 11:09:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `update_brands`
--

CREATE TABLE `update_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `old_value` text NOT NULL,
  `new_value` text NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_brands`
--

INSERT INTO `update_brands` (`id`, `user_id`, `brand_id`, `field`, `old_value`, `new_value`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 4, 1, 'image', 'upload/brand-images/435505.png', '/brand/directory/243302.png', 0, 'Requested', '2024-05-25 07:48:11', NULL),
(2, 5, 2, 'name', '365 Everyday Value by Whole Foods', '365 Everyday Value by Whol', 0, 'Requested', '2024-05-25 07:51:08', NULL),
(3, 5, 2, 'image', 'upload/brand-images/218934.jpg', '/brand/directory/27259.png', 0, 'Requested', '2024-05-25 07:51:09', NULL),
(4, 4, 1, 'image', 'upload/brand-images/435505.png', '/brand/directory/11210.png', 0, 'Requested', '2024-05-25 11:05:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `update_categories`
--

CREATE TABLE `update_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `old_value` text DEFAULT NULL,
  `new_value` text DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_categories`
--

INSERT INTO `update_categories` (`id`, `user_id`, `category_id`, `field`, `old_value`, `new_value`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 2, 1, 'name', 'Fresh Meat', 'Fresh', 1, 'Seen', '2024-05-25 07:35:08', NULL),
(2, 2, 1, 'image', 'upload/category-images/341007.png', '/upload/directory/141230.png', 1, 'Seen', '2024-05-25 07:35:09', NULL),
(3, 3, 2, 'name', 'vegetable', 'Vegetables', 1, 'Seen', '2024-05-25 07:38:07', NULL),
(4, 2, 1, 'image', 'upload/category-images/341007.png', '/upload/directory/311727.png', 0, 'Requested', '2024-05-25 11:00:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `update_products`
--

CREATE TABLE `update_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_manager_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `old_value` text DEFAULT NULL,
  `new_value` text DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_products`
--

INSERT INTO `update_products` (`id`, `user_id`, `product_manager_id`, `product_id`, `field`, `old_value`, `new_value`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 13, 8, 1, 'image', 'upload/product-images/1716599297.png', '/updateproduct/directory/119323.png', 0, 'Requested', '2024-05-25 09:49:48', NULL),
(2, 13, 8, 1, 'regular_price', '400', '300', 0, 'Requested', '2024-05-25 09:50:44', NULL),
(3, 13, 9, 2, 'meta_title', 'Meat', 'Meats', 0, 'Requested', '2024-05-25 09:51:15', NULL),
(4, 13, 9, 2, 'code', '23428', '23344', 0, 'Requested', '2024-05-25 09:51:57', NULL),
(5, 13, 9, 2, 'category_id', '1', '2', 0, 'Requested', '2024-05-25 09:52:37', NULL),
(7, 13, 8, 4, 'selling_price', '400', '100', 0, 'Requested', '2024-05-25 09:53:32', NULL),
(8, 13, 8, 3, 'sub_category_id', '3', '4', 0, 'Requested', '2024-05-25 09:54:19', NULL),
(9, 13, 8, 2, 'unit_id', '1', '2', 0, 'Requested', '2024-05-25 23:26:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `update_product_images`
--

CREATE TABLE `update_product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_manager_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_product_images`
--

INSERT INTO `update_product_images` (`id`, `product_id`, `product_manager_id`, `user_id`, `image`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 1, 8, 13, 'upload/product-other-images/464.jpg', 0, 'Requested', '2024-05-25 09:48:53', NULL),
(2, 1, 8, 13, 'upload/product-other-images/3629.png', 0, 'Requested', '2024-05-25 09:48:53', NULL),
(3, 1, 8, 13, 'upload/product-other-images/4780.png', 0, 'Requested', '2024-05-25 09:48:53', NULL),
(4, 1, 8, 13, 'upload/product-other-images/1893.png', 0, 'Requested', '2024-05-25 09:48:53', NULL),
(5, 1, 8, 13, 'upload/product-other-images/3277.png', 0, 'Requested', '2024-05-25 09:48:53', NULL),
(6, 2, 9, 12, 'upload/product-other-images/4085.jpg', 0, 'Requested', '2024-05-25 11:16:16', NULL),
(7, 2, 9, 12, 'upload/product-other-images/567.png', 0, 'Requested', '2024-05-25 11:16:16', NULL),
(8, 2, 9, 12, 'upload/product-other-images/1728.png', 0, 'Requested', '2024-05-25 11:16:16', NULL),
(9, 2, 9, 12, 'upload/product-other-images/4267.png', 0, 'Requested', '2024-05-25 11:16:16', NULL),
(10, 2, 9, 12, 'upload/product-other-images/468.png', 0, 'Requested', '2024-05-25 11:16:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `update_sub_categories`
--

CREATE TABLE `update_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `old_value` text NOT NULL,
  `new_value` text NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_sub_categories`
--

INSERT INTO `update_sub_categories` (`id`, `user_id`, `category_id`, `sub_category_id`, `field`, `old_value`, `new_value`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 3, 3, 3, 'name', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is ma', 1, 'Seen', '2024-05-25 07:39:47', NULL),
(2, 3, 3, 3, 'image', 'upload/sub-category-images/212481.png', '/sub-upload/directory/182793.png', 1, 'Seen', '2024-05-25 07:39:47', NULL),
(3, 2, 1, 2, 'name', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is made with a blend of traditional Thai', '“Introduce your taste buds to the bold and unique flavors of our authentic Thai curry paste. Our curry paste is', 0, 'Requested', '2024-05-25 11:02:05', NULL),
(4, 2, 1, 2, 'image', 'upload/sub-category-images/19561.png', '/sub-upload/directory/206937.png', 0, 'Requested', '2024-05-25 11:02:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `update_units`
--

CREATE TABLE `update_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `old_value` text NOT NULL,
  `new_value` text NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0,
  `action` varchar(255) NOT NULL DEFAULT 'Requested',
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_units`
--

INSERT INTO `update_units` (`id`, `user_id`, `unit_id`, `field`, `old_value`, `new_value`, `flag`, `action`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 6, 1, 'name', 'kg', 'lb', 0, 'Requested', '2024-05-25 07:54:24', NULL),
(2, 6, 2, 'name', 'lb', 'kg', 0, 'Requested', '2024-05-25 11:10:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `custom_created_at` datetime DEFAULT NULL,
  `custom_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `custom_created_at`, `custom_updated_at`) VALUES
(1, 'Ali', 'Ali@gmail.com', 'Admin', NULL, '$2y$12$9M6R0z7io3x9QUMtSdqK2.HAPTyGtIZFH/EeiVIRd/JL5LeeBgTsy', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/245096.jpg', '2024-05-25 06:10:09', NULL),
(2, 'Shamira', 'shamira170201032@gmail.com', 'Category Manager', NULL, '$2y$12$XIi320eg/uFhkA6K8ocYOu2bG79Tcs/7jiwcpRMLBRyd7kZ/ZYdZC', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/221615.jpg', '2024-05-25 06:11:20', NULL),
(3, 'sabila', 'sabila@gmail.com', 'Category Manager', NULL, '$2y$12$lLdUX8RWLYQhj29AbkDRh./ekuwpDpEyHMHb0.zuLoMexUH9CPFZS', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/68296.jpg', '2024-05-25 06:12:04', NULL),
(4, 'Saleheen', 'Saleheen@gmail.com', 'Brand Manager', NULL, '$2y$12$hF/BKgfoFhCWzvidC2IM2OkHBfpmU6jkZZy.OnsWAfFocd1zKzalC', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/75307.jpg', '2024-05-25 06:12:56', NULL),
(5, 'Ashik', 'Ashik@gmail.com', 'Brand Manager', NULL, '$2y$12$jYvxDT/15VfyFRn7svQLou.x.FbqzzCtXFmnaGxdZCn4UBxJ0atFy', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/91576.jpg', '2024-05-25 06:13:42', NULL),
(6, 'Noshin', 'Noshin@gmail.com', 'Unit Manager', NULL, '$2y$12$1lato3IQMKBL/N92/N4bYuT23zmbzsJIGNoTow45Jxx79low2lESy', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/43134.jpg', '2024-05-25 06:14:46', NULL),
(7, 'Nila', 'nila@gmail.com', 'Unit Manager', NULL, '$2y$12$nHhMDVEiUs12F.5q4zEmguSifhf0yD2/UAOwknc1XcmzGMcp9j.qy', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/411994.jpg', '2024-05-25 06:15:27', NULL),
(8, 'Antora', 'Antora@gmail.com', 'Product Manager', NULL, '$2y$12$w4Ntx.UZtPy5qP6yRD6h/OLR6gAdmgx8bCHDvIUoAEyghycAtYIjS', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/420353.jpg', '2024-05-25 06:17:47', NULL),
(9, 'Rumpa', 'Rumpa@gmail.com', 'Product Manager', NULL, '$2y$12$PX1wznnROnWS3TLRDNb0jO0EULf8FCucT0uKIkRzWIgJYOhDVfxSK', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/143177.jpg', '2024-05-25 06:18:34', NULL),
(10, 'Bithi', 'bithi@gmail.com', 'Employee', NULL, '$2y$12$hgO/Yb52Ru0dtjD8m.WaaeYTLtq4VyqqOAq2gDpTDYDc1frm.XEEy', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/399122.jpg', '2024-05-25 06:20:02', NULL),
(11, 'Mihir', 'mihir@gmail.com', 'Employee', NULL, '$2y$12$iZWxApwdCatY.s8YcT2xuuI.lJJSbrf4lNpgspdchSNe7KRs0vkFO', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/132593.jpg', '2024-05-25 06:21:00', NULL),
(12, 'Himi', 'himi@gmail.com', 'Employee', NULL, '$2y$12$NLOd34ToQwPSsr9cDGu2Eu/RWbOAvddoB1V7qHbzS1nng0Q2fdjki', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/89743.jpg', '2024-05-25 06:22:18', NULL),
(13, 'shimu', 'shimu@gmail.com', 'Employee', NULL, '$2y$12$/Gw8ntaT33gWhDNXLND7NOX6g7QhD2MQP2s0pAmmtWDPmtzyTxEzK', NULL, NULL, NULL, NULL, NULL, 'upload/user-images/120707.jpg', '2024-05-25 06:23:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couriers_name_unique` (`name`),
  ADD UNIQUE KEY `couriers_email_unique` (`email`),
  ADD UNIQUE KEY `couriers_mobile_unique` (`mobile`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `investors_email_unique` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_brands`
--
ALTER TABLE `update_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_categories`
--
ALTER TABLE `update_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_products`
--
ALTER TABLE `update_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_product_images`
--
ALTER TABLE `update_product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_sub_categories`
--
ALTER TABLE `update_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_units`
--
ALTER TABLE `update_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `update_brands`
--
ALTER TABLE `update_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `update_categories`
--
ALTER TABLE `update_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `update_products`
--
ALTER TABLE `update_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `update_product_images`
--
ALTER TABLE `update_product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `update_sub_categories`
--
ALTER TABLE `update_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `update_units`
--
ALTER TABLE `update_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
