-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2024 at 08:26 PM
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
-- Database: `e-commerce-tugas-akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_one`
--

CREATE TABLE `banner_one` (
  `id` bigint UNSIGNED NOT NULL,
  `image_banner_one_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_banner_one_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_image_banner_one` tinyint NOT NULL DEFAULT '0' COMMENT '1=sembunyikan,0=tampilkan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_one`
--

INSERT INTO `banner_one` (`id`, `image_banner_one_1`, `image_banner_one_2`, `status_image_banner_one`, `created_at`, `updated_at`) VALUES
(1, 'img-banner-one/UtXjGH231Q7O1cKrBaDbXPCzNOEM2rZ3HguoFoUW.jpg', 'img-banner-one/PnI0GTAgunGiGGxDhqAtAf8gCq9WBP5A5SFPwuLc.jpg', 0, '2024-11-26 11:02:51', '2024-11-26 11:17:42'),
(2, 'img-banner-one/G8GLOAPW3ZvcAT1Y4S1fRWybeJqM3Z8UYBKad45B.jpg', 'img-banner-one/ATtBVOzT10u1Tg69X8DwDSxsQrxhlWRQ6M4P5HO6.jpg', 0, '2024-11-26 11:24:36', '2024-11-26 11:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `banner_three`
--

CREATE TABLE `banner_three` (
  `id` bigint UNSIGNED NOT NULL,
  `image_banner_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_image_banner_three` tinyint NOT NULL DEFAULT '0' COMMENT '1=sembunyikan,0=tampilkan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_three`
--

INSERT INTO `banner_three` (`id`, `image_banner_three`, `status_image_banner_three`, `created_at`, `updated_at`) VALUES
(1, 'img-banner-three/oakpIY8tyk0vJy02jAE6R5f65hckgKwYT1Nw4fCl.jpg', 0, '2024-11-26 11:04:19', '2024-11-26 11:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `banner_two`
--

CREATE TABLE `banner_two` (
  `id` bigint UNSIGNED NOT NULL,
  `image_banner_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_image_banner_two` tinyint NOT NULL DEFAULT '0' COMMENT '1=sembunyikan,0=tampilkan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_two`
--

INSERT INTO `banner_two` (`id`, `image_banner_two`, `status_image_banner_two`, `created_at`, `updated_at`) VALUES
(1, 'img-banner-two/jhHKXRBQ6JAoD0UFLXOKWtyEXqd1l7PHXbR3uc3u.jpg', 0, '2024-11-26 11:04:03', '2024-11-26 11:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Erigo', 'elyrHbkWxl2GXPLL8Xlkq2T1AbDgVs71Mi2', 5, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(2, 'Vans', 'nZFq9P6TetF6D8zcUv5n6iwdAaYeNCL53LN', 4, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(3, 'Nike', '8RbqZTIAKxsNtvmY8GSKJDEy0mHzGnBMJOU', 1, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(4, 'Samsung', '5PW8B4gacxGocIpdpdSaD8K0FjDa3TahHOa', 10, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(5, 'Iphone', 'AuJBcdbLa31uRYMVF0D7HCdAXvueVUXFteY', 4, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(6, 'Specs', 'GXZKboMj0ESVTLiCEKPbwnUsEN4VZbplIej', 9, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(7, 'Puma', 'NkxGJ2qYMbjBH8XTlCe0pBVXzFaM1MIvjv8', 2, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(8, 'Adidas', 'Ew76L1les1k81vZSeQd0E19w7rb6n4qqMlc', 2, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(9, 'Rans', '7eM62YMt4QZiXrSWzWqs6LZOTWeMi1szEBB', 10, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(10, 'Nokia', '6GkaTT0njonEBsWljYmYl9aPg9zNbcCmnD8', 7, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(11, 'kirunshop', 'bHkWSztFMBOsq5zHNdH733m6sG9tP9IFKs1', 4, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(12, 'Arstore', 'n9BAyEfjdG0VJDicyjzKOBTPEBAYGOw0hic', 3, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(13, 'Kopiko', 'cXiCWPeae9JdEOSoSpzrU5FamqYDcpNlw3Q', 6, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(14, 'Polytron', 'Gq6pXpPs6qOVjkisNAVtosuTrJji69CLdIu', 10, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(15, 'Asus', 'vImiheLB7dOzH7omRACgdGVkOf8NfGTgVFj', 6, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(16, 'Oppo', 'rRLOU5SUV5wYLHMHvXOXlLjtBeFt2RLVsfE', 4, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(17, 'Indomie', 'hNa0Ynozl4lqtrEeh7GjlC8JN5kMxU4xHvA', 9, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(18, 'Eiger', 'M4xOq69EZvk5Dz7UpPVv98JyvWyCSJECpFG', 10, 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_color_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=tampilkan,1=sembunyikan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Handphone', 'ZCKLxggY7DDpcMU8Wi5PgNA04zajxafaAzL', 'Sit est est corrupti cupiditate maxime at laboriosam recusandae dicta sapiente in aperiam pariatur ut laboriosam voluptatum nostrum odit deleniti ut consequatur aut id sint quod repellendus repellat fuga culpa qui voluptate eius.', 'uploads/category/digital_05.jpg', 'Omnis quaerat quasi accusantium quia dolor ut aut laboriosam aut.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(2, 'Kaos Polos', 'NDfAdveUzngqTsQfsCO76vYPAunpdYT6paf', 'Rem adipisci dignissimos.', 'uploads/category/fashion_07.jpg', 'Sit ipsam qui ducimus temporibus sequi nisi ut porro est reiciendis voluptates.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(3, 'Jacket Coach', 'WhxIXdxSaKhunKxLhVvQRmKgPavPs4vRdyN', 'Assumenda voluptas quis.', 'uploads/category/fashion_09.jpg', 'Ad ut dolores fuga labore repellat magnam earum dolor voluptatem distinctio.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(4, 'Tas Sekolah', 'zKDhpxZqbd5O2KwuaUox6BurY6rUZcqDRHw', 'Qui sint eos.', 'uploads/category/fashion_02.jpg', 'Sit sed consequatur adipisci deleniti assumenda nobis vitae sit omnis id et.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(5, 'Laptop', 'qHAzSs3fofjrymZaSBtRSOFcpz9fanJPd0p', 'Est sit quis.', 'uploads/category/digital_14.jpg', 'Blanditiis unde perspiciatis mollitia sunt non.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(6, 'Televisi', 'FQdgQhbPwV7TqKgWTH4Tja9OjddyTpSpHyT', 'Impedit deleniti quas dignissimos.', 'uploads/category/digital_08.jpg', 'Illum dolorum dolore impedit pariatur exercitationem quis velit eos magni minima sit.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(7, 'Lampu', 'iPUKuZlyHghsjLiCG151zu9eLzIuIN27CTK', 'Qui accusamus optio.', 'uploads/category/furniture_07.jpg', 'Quisquam quia dolor sunt repudiandae nam voluptatem facilis repudiandae placeat amet.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(8, 'Kasur', 'm9Pz3YysBzHIkrVAqFJlLauynR4jTDbUG4s', 'Debitis quas autem.', 'uploads/category/furniture_06.jpg', 'Nemo dolore maxime quo doloremque cumque culpa odio eius.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(9, 'Kursi', 'ZDD59f1aXn3t4JixilEywX8KFdu4QlnsnJN', 'Voluptates qui quia consequatur.', 'uploads/category/furniture_05.jpg', 'Laborum magnam suscipit modi facilis iure dolorum minima natus.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(10, 'Obat - Obatan', 'C2vCBJaMWN8096U1a8vFitOnPoxkEM9psKi', 'Reprehenderit ipsa alias sapiente.', 'uploads/category/organics_spa_4.jpg', 'Illo quo ea fugiat iste ab.', 0, '2024-11-26 10:55:24', '2024-11-26 10:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'blue', '#563434', 0, '2024-11-26 11:16:17', '2024-11-26 11:16:17'),
(2, 'black', '563432', 0, '2024-11-26 11:16:33', '2024-11-26 11:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `contoh`
--

CREATE TABLE `contoh` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_20_035506_create_categories_table', 1),
(6, '2023_01_21_054631_create_brands_table', 1),
(7, '2023_01_22_041317_create_products_table', 1),
(8, '2023_01_22_042615_create_product_image_table', 1),
(9, '2023_01_22_142550_create_colors_table', 1),
(10, '2023_01_22_182311_create_product_colors_table', 1),
(11, '2023_01_23_100555_create_sliders_table', 1),
(12, '2023_01_25_133901_create_wishlists_table', 1),
(13, '2023_01_29_115947_create_carts_table', 1),
(14, '2023_02_01_095102_create_orders_table', 1),
(15, '2023_02_01_095538_create_order_items_table', 1),
(16, '2023_02_12_155917_create_profile_user_table', 1),
(17, '2023_03_02_152754_create_banner_two_table', 1),
(18, '2023_03_02_152755_create_banner_three_table', 1),
(19, '2023_03_03_130526_create_tentang_kami_table', 1),
(20, '2023_03_03_161617_create_review_table', 1),
(21, '2023_03_04_092758_create_hubungi_kami_table', 1),
(22, '2023_03_06_122853_create_on_sales_table', 1),
(23, '2023_03_08_114112_create_banner_one_table', 1),
(24, '2023_07_26_065246_create_contoh_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `on_sale`
--

CREATE TABLE `on_sale` (
  `id` bigint UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1=Active,0=Tidak Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `on_sale`
--

INSERT INTO `on_sale` (`id`, `sale_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-11-26 18:28:02', 1, '2024-11-26 18:28:03', '2024-11-26 18:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tracking_no`, `fullname`, `email`, `phone`, `address`, `status_message`, `payment_mode`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'KirunStore-AaiCT7KeJp', 'Ahmad Risyfa', 'ahmadrisyfa123123@gmail.com', '1234567890111', 'ysss', 'in Progress', 'Cash On Delivery', NULL, '2024-11-26 12:08:37', '2024-11-26 12:08:37'),
(2, 1, 'KirunStore-RhSUNvyig3', 'Ahmad Risyfa', 'ahmadrisyfa123123@gmail.com', '085867770343', 'jl raya klepu keling jepara', 'in Progress', 'Cash On Delivery', NULL, '2024-11-26 13:13:33', '2024-11-26 13:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_color_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_color_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 5, NULL, 2, 87207, '2024-11-26 12:08:37', '2024-11-26 12:08:37'),
(2, 2, 3, NULL, 3, 83579, '2024-11-26 13:13:34', '2024-11-26 13:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `original_price` int NOT NULL,
  `selling_price` int NOT NULL,
  `quantity` int NOT NULL,
  `trending` tinyint NOT NULL DEFAULT '0' COMMENT '1=Trending,0=tidak-trending',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=sembunyikan,0=tampilkan',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `brand`, `small_description`, `description`, `original_price`, `selling_price`, `quantity`, `trending`, `status`, `meta_title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hp Samsung J2 Original Terbaru 2023', 'kwzrtfnymhaikwcq0ngtnwqrv1ehw3wthvl', 'Samsung', 'Blanditiis animi dolore voluptas dolor exercitationem ut est distinctio earum sint cupiditate officiis distinctio dolorum delectus est cum.', 'Earum modi vel incidunt aut soluta in architecto cupiditate qui ipsam maiores repudiandae rerum sint quidem aut mollitia est provident et ducimus veniam nam alias consequatur.', 180263, 93160, 40, 0, 0, 'Commodi nam veniam qui nesciunt inventore soluta et nihil neque quaerat.', '2024-11-26 10:55:24', '2024-11-26 11:35:58'),
(2, 2, 'Hp oppo A3s Second (Kualitas Masih Bagus)', 't2dnwfcfzxtxs6yeonhjtmhg247ybh2v7ep', 'Oppo', 'Nam est voluptatem architecto excepturi sunt eos dolores enim consequuntur omnis qui quisquam minus ullam ratione minus soluta et animi non dolorem qui voluptatem quam est velit ut esse mollitia voluptatibus nihil mollitia rem rerum neque autem commodi accusamus voluptatem voluptas officiis voluptatibus.', 'Harum repellat quia maiores cum alias reiciendis voluptatum fuga praesentium aut ea deserunt architecto aperiam ducimus id labore laborum aut quo consequatur sequi mollitia dolores dicta laborum voluptatum aspernatur qui incidunt voluptatem nemo expedita voluptates ea distinctio porro quis ut rerum nostrum voluptate delectus explicabo qui vitae et expedita voluptas in beatae est nemo nam dicta et et quo et aliquam repudiandae et et voluptatem est repellendus quia quia deserunt nostrum nulla ex rerum veniam eligendi pariatur totam omnis magnam corporis natus quo reprehenderit qui atque sint et eveniet sed perspiciatis quo qui aut quia eaque nisi veritatis et ipsam eum enim sint sit accusantium quam voluptas dolores aut.', 130139, 97988, 34, 0, 0, '122', '2024-11-26 10:55:24', '2024-11-26 11:52:03'),
(3, 1, 'Radio FM Pakai Baterai', 'ygxhkefbyxs8m05bwqffjof5iuwp8iz5fma', 'Arstore', 'Culpa corporis minima omnis pariatur quis sed enim sapiente in beatae omnis fuga et alias aspernatur consequatur nesciunt eum rerum enim temporibus eligendi autem voluptas consectetur qui ut est sit magnam possimus cupiditate numquam.', 'Expedita libero eum id ad necessitatibus quaerat enim illo iusto corporis accusantium doloribus deserunt laboriosam iure quo rerum voluptatum maxime ea sed et non deleniti aut dolorum et repellendus nostrum repellat magnam error quam voluptatibus ea sed aperiam recusandae minus pariatur magni natus repudiandae ullam vero fuga recusandae doloremque incidunt aliquam et dicta voluptas nemo eos unde qui excepturi qui minus debitis enim numquam quia veritatis optio repellendus facere dolor atque occaecati ipsum incidunt voluptates qui ducimus animi omnis quia pariatur debitis alias aut itaque magni totam aut expedita veniam sit distinctio voluptate nihil suscipit beatae tempore consequatur rem velit aut nostrum voluptates molestiae dicta qui iure.', 83154, 83579, 57, 0, 0, '11', '2024-11-26 10:55:24', '2024-11-26 13:13:34'),
(4, 9, 'Laptop Asus Ram 2 gb Baru Original Resmi', 'ybfkeywcdey8aytjrzcncuidbhzqot1zu9i', 'Asus', 'Voluptatem sed iure natus quia eos ea libero et quaerat quas vel modi sint non unde aut nisi ut eum et quia ratione hic sequi nobis aliquid consequatur alias a voluptas natus molestiae consectetur voluptas veniam sed qui dolores et consectetur expedita delectus aut perspiciatis culpa sequi iusto tempore laudantium vero enim dolores aut vitae dolorem dolorem perferendis repudiandae molestiae eum libero velit esse aliquid beatae harum enim et.', 'Architecto ducimus doloribus eos molestiae excepturi ut quae ratione quos est ut aspernatur et nihil sed deleniti et nulla eos eum architecto modi dolore reiciendis hic doloremque voluptas accusamus ipsam dolorum officiis distinctio iusto repellendus dolores fugiat laborum mollitia temporibus eos aperiam sed nihil voluptatum sint nobis incidunt ut sint porro eos ea sit provident sint repudiandae reiciendis perspiciatis ab rerum deleniti debitis voluptas quo sapiente illo perspiciatis hic magni explicabo sed in et voluptas quia a officiis sint optio sunt dolorum et officiis animi a natus earum ea nihil nemo quam beatae temporibus in non minus quas architecto iure illo eum et voluptatem quo.', 145083, 98743, 60, 0, 0, 'laptop', '2024-11-26 10:55:24', '2024-11-26 11:53:14'),
(5, 2, 'Hp Iphone 8 second (kualitas Terjamin) Garansi Toko', '2q1zmxdgqa9ja1vjxammaj5hzwvrmpxwzhq', 'Iphone', 'Quibusdam provident qui facilis sint architecto omnis impedit in laudantium hic nostrum in delectus impedit ea repellendus non nobis labore rerum reprehenderit voluptatem nisi recusandae qui rem consequatur aut laborum at quod quia voluptatibus rerum officiis dolores sit nihil sit sed et rem harum molestias maxime ipsam autem quis modi.', 'Modi dolor non numquam quia illum ut nesciunt adipisci aut molestiae architecto unde iste ducimus nesciunt blanditiis repellendus porro maxime assumenda et blanditiis delectus ut et et sed dolor adipisci error in esse eligendi minima soluta natus quo ut aut nulla corrupti aut qui tempora recusandae et nulla fugiat quaerat tenetur non minus voluptatem.', 66764, 87207, 98, 0, 0, 'qqq', '2024-11-26 10:55:24', '2024-11-26 12:08:37'),
(6, 1, 'Camera dlsr Murah Meriah', 'l0ufouyjrtqhtxjg8bihkvpx5cdkenhjpe8', 'Eiger', 'Nostrum aperiam explicabo impedit impedit beatae voluptas cumque ea voluptas voluptatum necessitatibus ullam ratione ut quia culpa repellendus voluptatem quae et quia velit eius vel vel laudantium quo id libero ea aut molestiae eum.', 'Eum animi ut aut ut in perspiciatis aut id sed excepturi vel atque eligendi ut rerum fuga quia quam ducimus temporibus quae et qui ipsum asperiores dolor et similique nesciunt perferendis veniam omnis doloremque quia eos quisquam repellendus expedita deserunt soluta ipsum sint provident dolor nostrum perferendis ea velit esse enim tenetur assumenda voluptas perferendis facere dolores quia ut culpa veritatis ab sint dignissimos ducimus natus rerum qui reiciendis qui corrupti sed omnis quasi aliquam repellendus optio et at suscipit sapiente amet quos aut quis doloribus enim in asperiores ut necessitatibus.', 104483, 99821, 66, 0, 0, 'w', '2024-11-26 10:55:24', '2024-11-26 11:54:36'),
(7, 9, 'Camera cctv terbaru 2023 Terlaris', 't2VyT1OH0u7Sl7yakVxYtt61Tz413pxJwwN', 'Rans', 'Autem qui voluptatem praesentium consequatur debitis cupiditate voluptas ut est eos ea nobis minima officia non qui tenetur id voluptatibus voluptates maxime sint eos architecto et quo tempora ad aut vero aperiam velit ea vitae sint mollitia officia commodi officiis libero necessitatibus et atque accusantium in culpa iste saepe consequatur beatae officiis vel unde totam sit dolores sed fugiat similique.', 'Fugiat corporis exercitationem sed dolorem sint dicta earum et veritatis qui aut numquam provident voluptas amet similique omnis ut et ea sint cumque unde accusantium impedit eaque neque et a et odit minima nihil corrupti repellat eligendi rerum officiis quia sint dolor suscipit ipsum sint quia dolores accusamus in ipsam quo cum dicta.', 233218, 84317, 68, 0, 0, NULL, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(8, 8, 'Tv Samsung Terbaru Lcd dengan youtube', 'efhnIAbLtJrKkJMnRPyktFARFiclXoAuYUB', 'Samsung', 'Asperiores laudantium voluptas saepe temporibus iusto nulla maxime ipsam beatae quis nobis voluptate totam eveniet cupiditate velit non aperiam distinctio rerum vel eligendi et perferendis exercitationem eum quaerat aut rerum sed expedita iste qui est enim placeat sit dolorum in ut eaque corporis officiis itaque culpa natus inventore aut facilis occaecati doloremque porro et laborum voluptatum laborum aspernatur nulla iure est id nam eum laborum voluptates est vitae.', 'Consequatur sequi dolor totam cumque aut consequuntur dolorem doloremque eveniet dolor quia cum qui aut tempora quas nihil voluptatum necessitatibus ipsa quo maxime nesciunt eveniet nemo quia possimus quia nulla voluptas deserunt quasi dolor cumque quaerat rerum voluptatem quibusdam ducimus est reprehenderit eos quia sint enim aut numquam commodi commodi incidunt eligendi beatae molestiae mollitia tempore minus quae animi molestias porro laborum voluptatem voluptatum ad ducimus in molestiae qui doloremque aut voluptas nesciunt cumque fugit nulla qui ducimus enim aspernatur magni est atque animi dolorem autem qui omnis omnis.', 189031, 96381, 64, 0, 0, NULL, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(9, 4, 'Tv Lcd Terbaru terlaris', 'cKAaGipFPOfbBMa8Cdorx9IJ6Hp29leay5L', 'Polytron', 'Deserunt magnam nesciunt doloribus quibusdam asperiores vero asperiores aspernatur ut reprehenderit qui placeat eaque et animi sunt omnis dolorem vel corporis corrupti minima architecto reprehenderit ex dolorum dolorum neque a laboriosam dolor repellat eligendi laborum necessitatibus expedita dolor eaque nihil eveniet quia aut omnis quia aliquam commodi sunt provident non quam enim quia dolore a dolor est aut impedit dolores ea minima nisi nobis a exercitationem cupiditate accusamus id quod quod.', 'Minima beatae aspernatur omnis laboriosam rerum facere reiciendis et molestiae autem eos aut consequatur delectus et dicta corporis iste in minus est occaecati illo exercitationem provident quasi nisi est facere laboriosam laborum est doloribus praesentium eos architecto debitis est veniam quidem nam corrupti ut sunt praesentium reprehenderit maxime nobis qui et dicta aperiam non rem nihil labore harum veritatis ab commodi amet illum incidunt magnam vel dolor repellat enim amet in modi repellendus ipsam magni magni quaerat quis quis ut ducimus enim assumenda ducimus corporis nesciunt commodi delectus ea voluptatem explicabo error neque ipsum magnam veritatis eligendi deleniti quod corrupti doloribus omnis nihil vel sit laboriosam sit ipsa unde ratione sint voluptatem.', 151768, 87256, 88, 0, 0, NULL, '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(10, 3, 'Stick Gaem Ps 3 (baru) Original resmi', 'ih8fpAkEd7tza5klzr0KNnbi8HQ1B0GrwmX', 'Adidas', 'Ut vel beatae qui labore facere delectus nemo ducimus nulla aut ipsam nisi est ea sed et minima facere reprehenderit cupiditate dolores mollitia ipsa ex aut et officiis deserunt explicabo nihil asperiores aut.', 'Aliquam aut itaque voluptatem reiciendis minus veniam facilis doloremque et enim ut at vero explicabo et quia velit omnis voluptas id vero sunt rerum quo reiciendis dolores sunt odit harum adipisci architecto est porro voluptatibus recusandae possimus non eum temporibus enim fugit hic sequi voluptatum dolor dicta qui vero sed numquam libero temporibus soluta fugit ipsa omnis aliquid fugiat esse architecto quas.', 79992, 89264, 96, 0, 0, 'Quisquam quo ipsam eum ipsam eaque autem qui quis quia non error.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(11, 3, 'Jam Tangan Watch Terbaru Dan terlaris di 2020 Original', 'B0glVN51r9FrSRaXkwuGQuusw83C5z7WFMo', 'Adidas', 'Quia est exercitationem aliquid provident amet qui explicabo aut adipisci suscipit tempora deserunt sapiente quo beatae ipsum voluptatum aperiam unde ab harum vel reprehenderit laboriosam atque aut nemo dolorem illum nisi delectus reiciendis sunt cupiditate facere dolor eos.', 'Eos expedita maiores officia sed qui ea voluptas voluptas provident nostrum exercitationem deleniti et eum laudantium est ipsum nisi error ad laudantium omnis deserunt repellendus dicta culpa eligendi ipsa est ut minima in labore nobis atque et et et dolor adipisci aperiam debitis eos beatae inventore nesciunt sunt ut enim.', 91041, 88317, 45, 0, 0, 'Itaque et doloremque omnis labore temporibus et assumenda non deleniti necessitatibus repudiandae eaque.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(12, 2, 'Senter Untuk Jarak Jauh Terlaris', 'f380DTY06JpvjM7NMhYTHjD8jtyMyPSbDD8', 'Adidas', 'Ratione magni ut vel voluptate corrupti vitae deleniti ut voluptatum sit quia voluptas repudiandae qui possimus voluptas ea magnam quia ex quia asperiores natus doloribus sint eum nihil ipsam numquam nostrum tempore aut velit voluptas.', 'Error cum doloribus porro nisi aut sed sed voluptas explicabo dolorum aliquam odio quia in ducimus quisquam beatae alias voluptatem tempore molestiae ea dolores ducimus laborum quia consequatur deserunt blanditiis recusandae officia a aliquam eligendi inventore numquam nihil voluptas ea in odit odit explicabo unde eius amet velit similique libero praesentium et dolore accusantium.', 81939, 89187, 74, 0, 0, 'Consequatur aliquid iste vel repellendus dolorem esse natus hic fugit qui deserunt tempora.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(13, 1, 'Handset Jbl dengan suara yang keras terbaru dan terlaris', 'HB8MbMIzda8Z6wDKWtchnhkrIbnM0WdcN3K', 'Adidas', 'Suscipit ipsa unde consequatur omnis qui eos sunt quam ea labore tenetur vitae qui eum id sit cum nulla vero aliquid incidunt fugiat laudantium exercitationem est et itaque ut porro doloremque sint quia maiores quis architecto est adipisci molestiae autem et est velit voluptatem.', 'Facilis enim et fuga quasi at beatae error exercitationem eveniet voluptas dicta aut aut harum et alias vitae dolor sit sed adipisci id enim modi laudantium modi fugiat maiores vel voluptas sit blanditiis sunt asperiores ea veritatis dolorum vitae magni nobis rerum eum nesciunt non consequatur illo dolorem iusto officiis ullam aut vero tempore eos consequuntur voluptas perspiciatis fugiat ea dolore vel enim quos totam et saepe facilis quidem atque aut dolores eligendi ullam et consequatur id est ut laudantium ut consequatur est ducimus placeat tempore sed nemo consequatur delectus corrupti repellat soluta voluptates tempora ea qui quia porro deserunt fuga et voluptate a sequi tenetur eos sequi.', 106726, 96338, 70, 0, 0, 'Ipsa soluta sed est illum eum eum ipsum voluptates voluptas debitis non quidem dolorem.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(14, 2, 'laptop Hp ram 4gb ssd 125 windows 11 terbaru dan terlaris', 'J0k0qFACmsCtMOMznZlgKhtz4cmy4yCEueo', 'Adidas', 'Accusamus in sit et quam magni voluptas saepe aliquam et ut modi dignissimos necessitatibus ea aut ullam itaque tenetur id quod pariatur numquam et inventore et perspiciatis veritatis quaerat cumque deleniti consequatur dolor dolor non ullam dicta incidunt aliquam autem non commodi aut odio perferendis id et veniam aliquid et magni quam ratione non in aut perspiciatis eum expedita qui et qui repellendus qui fugit maxime ab.', 'Sunt officiis accusantium vitae sequi ab dolorem eveniet voluptates laboriosam eligendi ullam dolorem molestiae molestiae et eum est tempora numquam odio quo amet amet voluptatem ut inventore aut saepe id quo inventore dicta dolores eum porro quod cum quis fugiat consequatur iste sint facere et dolores vero modi est non harum occaecati nihil magni et sapiente dolorem neque repellat dolores eum perferendis non assumenda esse a quod et deserunt ratione sit cupiditate nam.', 55797, 95327, 98, 0, 0, 'Eaque eos officiis ab voluptatem itaque neque expedita quo laborum a.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(15, 3, 'Sepeda duduk Viral 2023 gratis ongkir', 'Kxjlp9aIFUKoUS32Hf2wyXo5dKyqaOrRzur', 'Adidas', 'Deserunt praesentium qui et inventore autem atque neque est qui reprehenderit expedita amet molestias consequatur asperiores quam aut corporis voluptatibus facilis sed sunt dolores aliquam necessitatibus est neque consectetur commodi et consequatur voluptatum dolorem suscipit illum optio ullam veniam occaecati vel rerum veritatis ducimus autem rerum debitis beatae voluptatem eius in maiores enim quis consequatur architecto adipisci illum rem voluptatibus voluptas est.', 'Tempore autem illum et dolores ullam vitae error doloremque inventore sint enim ullam minima animi molestiae omnis laudantium quas similique expedita est enim quasi eos tenetur nemo pariatur assumenda et quae ducimus dolores delectus beatae numquam saepe occaecati placeat nobis tenetur cupiditate ea fugiat non qui ducimus nihil qui ut fugiat in est dolore recusandae magni adipisci ipsam doloribus ut non commodi sint maiores harum voluptas itaque eum exercitationem minima vel mollitia dicta eum temporibus unde veniam blanditiis doloremque tempore et.', 69338, 95197, 86, 0, 0, 'Dolor ab sit in quidem illum tempora.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(16, 6, 'jam alarm merk adidas garansi toko 1 tahun (cod)', '5aC2TayVnSTX7tXf9UTqbcBydMxKmI4BA6r', 'Adidas', 'Officia praesentium dolorem sint atque facilis saepe beatae accusantium iste consequatur facilis dolorem aut quo sapiente dolorum est quisquam nostrum similique esse sit est earum odio vel fugiat incidunt ut recusandae nostrum qui possimus possimus id voluptatem consequuntur est qui cum maiores nesciunt et suscipit libero repellendus nihil ullam officia.', 'Labore autem non molestias voluptatem sunt consequuntur qui quo voluptatem unde rerum magni perspiciatis minus qui omnis et odio dolor sit reprehenderit sint quo est velit inventore dolorem rerum eum est vel unde qui unde voluptas molestias est maiores occaecati nihil molestiae laborum ipsa facilis consequatur perferendis placeat modi perspiciatis et adipisci ab cupiditate a eos molestiae nemo iusto ratione et autem veritatis aut velit vitae inventore eaque vel facere ea ut autem dolore ipsam commodi amet.', 240910, 84141, 68, 0, 0, 'Possimus voluptas aperiam voluptas architecto exercitationem vel sed debitis dolorem quaerat et sit iste.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(17, 7, 'Lampu meja dengan baterai terbaru dan terlaris', 'CQ5gPjZO3q8qAHDntEWZOBtTs5kNBrtPn7P', 'Adidas', 'Dolore soluta repudiandae fugiat et et adipisci laboriosam fugiat doloremque quia accusantium sint et voluptates sit quis doloremque ut quas optio dolorum numquam accusantium quia doloribus nihil sint ipsum repellat perspiciatis itaque quia consequuntur et et non nisi quia debitis soluta velit.', 'Id dolores ex adipisci voluptas consequatur rerum esse ex a ad quo dolorem consequatur omnis consequatur consectetur qui unde aspernatur omnis est harum explicabo ullam tempore eos nobis ad aut dolores qui id sed autem amet est quia odio cum itaque esse vitae quis illum et natus eum blanditiis qui aut laboriosam qui iste eum totam dolores ad perferendis.', 252444, 90057, 93, 0, 0, 'Vel nobis doloribus veritatis optio magni dolores harum est in impedit molestiae.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(18, 10, 'Stick ps 5 tanpa kabel original resmi', 'FXhixZ08DDgmH2veI3fV2km8GZqp7uGTc9i', 'Adidas', 'Dolorem ratione id veniam consequuntur eos aut officia quo iure sit quo dicta dolorem id ullam corporis sint in ut minima repellendus molestiae et vel neque qui id dolorem aperiam asperiores assumenda quaerat quasi ab quas nobis nam odio dignissimos fugiat magnam sit amet saepe corporis enim debitis placeat quis sit perferendis quasi qui blanditiis aperiam quae dolor.', 'Qui excepturi assumenda dolore dicta dicta autem quidem qui consequatur explicabo fugiat dolorum ut at fugiat ad eaque numquam possimus eius eaque voluptatem quas soluta qui nostrum repellat dolorum ipsum deserunt deleniti tenetur exercitationem omnis in sed occaecati atque animi ut et asperiores quidem sit non accusantium rerum excepturi rem vitae quo delectus neque culpa non quae et esse praesentium nulla sunt dolor quibusdam ea est molestiae eius molestiae corrupti perspiciatis officia perspiciatis quis occaecati nihil ut dolorem hic pariatur nihil ut eaque earum repellat quos enim modi magnam dolor sed veritatis consectetur similique sit eligendi quasi quaerat veritatis.', 249078, 69124, 99, 0, 0, 'Dolores corrupti ut modi aspernatur et est quidem et ipsa asperiores.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(19, 8, 'Baru Realme Smart Tv 50 Inch / 43 Inch / 32 Inch Garansi Resmi', 'V9ZTcHWTRAa2x4wOpUCMTZy8WHIth5fNCpu', 'Adidas', 'Iure dolores quaerat aut blanditiis voluptatem dolorem iure voluptatem ratione ut optio id odio et in animi voluptatibus autem est labore commodi qui nemo adipisci aperiam minus cum tempore repellat ut natus debitis quam id non consectetur natus voluptas id aut sunt necessitatibus nihil corrupti eum et dolore aut quia ipsam eos perspiciatis in consequatur laudantium debitis quaerat architecto neque.', 'Sit quo mollitia expedita non voluptatem et quo impedit voluptatem corporis aut voluptatem accusamus cupiditate est aut blanditiis ab et aut beatae molestiae quos cumque earum porro quasi aspernatur aut recusandae repellat quasi facilis tempora voluptatum aut in consectetur odit sed rerum et quis quam natus ab atque aut nisi et illum porro incidunt corrupti veniam officia quae nam iusto est quae nulla ut impedit et enim vitae vitae suscipit non voluptatem vel at ad sit dolorum doloribus cupiditate laborum sit reiciendis ut est nobis laudantium perspiciatis et consequatur est eveniet quis et sunt ipsum est veritatis quas perspiciatis omnis reiciendis ipsum aut accusantium quia inventore alias placeat dicta.', 175773, 98971, 58, 0, 0, 'Dolor eos tenetur velit vitae voluptas consectetur sed assumenda aperiam praesentium.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(20, 4, 'TERBARU 2022 DIGITAL TELEVISI LED 22 INCH HD TELEVISI GARANSI 2 TAHUN', '8V1mDK4ke6A0EXJQNarYmOqjsgSIEypdy6x', 'Adidas', 'Rem dolor voluptas deserunt reiciendis est repellat inventore est dolores provident quos veniam officiis debitis qui aliquam fuga neque earum cupiditate corporis vel aspernatur maiores minus voluptatem non facilis aut accusamus doloribus accusantium molestiae consequatur ut id explicabo ratione unde autem beatae reprehenderit nobis est voluptas et ipsam quia aliquam culpa aliquid corporis quam labore animi ipsam nam magni rerum dicta accusamus temporibus rerum a.', 'Veniam quia sed ut et nobis sunt voluptatem accusantium natus quae aut esse facere consequatur et explicabo consequatur voluptate voluptate esse beatae id est suscipit sed id est qui repellat quia et vitae est recusandae dolorem laboriosam vero sed quo dolor tempore et est explicabo quia ipsam aut ratione qui doloremque numquam ea aut ratione dolorum aut nihil velit possimus quaerat saepe totam ea iste deserunt.', 233707, 86284, 73, 0, 0, 'Molestiae et molestiae ut est quia eos iste omnis vitae iste.', '2024-11-26 10:55:24', '2024-11-26 10:55:24'),
(21, 3, 'HP Smartphone i13 Pro Max RAM 12GB+512GB Handphone Murah Android Ponsel Baru 7', 'tcBA9dW40YA18tsmfAT24f7HK5nOhY6nNqn', 'Adidas', 'Alias consequatur dolor et quasi consequatur voluptatem aut repudiandae qui est aut eligendi commodi odit quia iure quis perferendis reprehenderit dolores error id aliquam est et quaerat eveniet dolor iste saepe nesciunt in nostrum sit vero sit aut voluptate nemo laborum fugit ipsa voluptatem exercitationem suscipit optio unde corrupti laborum.', 'Totam ex eum aut quisquam consectetur in sint qui voluptates a omnis est molestiae aperiam alias rem nobis ullam quo distinctio nam autem consequatur labore veritatis ab vel esse perferendis amet qui et explicabo id atque modi laborum sapiente veritatis harum enim nostrum similique quos a in qui architecto repellendus quia omnis ut ipsum molestiae atque quia ducimus nesciunt qui quia consequatur omnis facere inventore quaerat sit consectetur velit similique dolorem sit ut enim cumque pariatur qui soluta doloremque esse et neque labore ipsum ut dolores placeat hic at id rerum consequatur velit animi quisquam nisi dolores ea nihil debitis molestias consequatur eos saepe et.', 129976, 80812, 67, 0, 0, 'Corrupti eaque ratione qui iure enim corporis vero occaecati corrupti id enim iste debitis.', '2024-11-26 10:55:24', '2024-11-26 10:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `color_id` bigint UNSIGNED DEFAULT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 1, 'uploads/products/17326461582.jpg', '2024-11-26 11:35:58', '2024-11-26 11:35:58'),
(3, 1, 'uploads/products/17326461583.jpg', '2024-11-26 11:35:58', '2024-11-26 11:35:58'),
(4, 1, 'uploads/products/17326461584.jpg', '2024-11-26 11:35:58', '2024-11-26 11:35:58'),
(5, 3, 'uploads/products/17326471421.jpg', '2024-11-26 11:52:22', '2024-11-26 11:52:22'),
(6, 3, 'uploads/products/17326471422.jpg', '2024-11-26 11:52:22', '2024-11-26 11:52:22'),
(7, 3, 'uploads/products/17326471423.jpg', '2024-11-26 11:52:22', '2024-11-26 11:52:22'),
(8, 3, 'uploads/products/17326471424.jpg', '2024-11-26 11:52:22', '2024-11-26 11:52:22'),
(9, 2, 'uploads/products/17326471721.jpg', '2024-11-26 11:52:52', '2024-11-26 11:52:52'),
(10, 2, 'uploads/products/17326471722.jpg', '2024-11-26 11:52:52', '2024-11-26 11:52:52'),
(11, 2, 'uploads/products/17326471723.jpg', '2024-11-26 11:52:52', '2024-11-26 11:52:52'),
(12, 2, 'uploads/products/17326471724.jpg', '2024-11-26 11:52:52', '2024-11-26 11:52:52'),
(13, 2, 'uploads/products/17326471725.jpg', '2024-11-26 11:52:52', '2024-11-26 11:52:52'),
(14, 4, 'uploads/products/17326471941.jpg', '2024-11-26 11:53:14', '2024-11-26 11:53:14'),
(15, 4, 'uploads/products/17326471942.jpg', '2024-11-26 11:53:14', '2024-11-26 11:53:14'),
(16, 4, 'uploads/products/17326471943.jpg', '2024-11-26 11:53:14', '2024-11-26 11:53:14'),
(17, 4, 'uploads/products/17326471944.jpg', '2024-11-26 11:53:14', '2024-11-26 11:53:14'),
(18, 5, 'uploads/products/17326472151.jpg', '2024-11-26 11:53:35', '2024-11-26 11:53:35'),
(19, 5, 'uploads/products/17326472152.jpg', '2024-11-26 11:53:35', '2024-11-26 11:53:35'),
(20, 5, 'uploads/products/17326472153.jpg', '2024-11-26 11:53:35', '2024-11-26 11:53:35'),
(21, 5, 'uploads/products/17326472154.jpg', '2024-11-26 11:53:35', '2024-11-26 11:53:35'),
(22, 5, 'uploads/products/17326472155.jpg', '2024-11-26 11:53:35', '2024-11-26 11:53:35'),
(23, 6, 'uploads/products/17326472761.jpg', '2024-11-26 11:54:36', '2024-11-26 11:54:36'),
(24, 6, 'uploads/products/17326472762.jpg', '2024-11-26 11:54:36', '2024-11-26 11:54:36'),
(25, 6, 'uploads/products/17326472763.jpg', '2024-11-26 11:54:36', '2024-11-26 11:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `ranting` int NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=Sembunyikan,0=Tampilkan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Delectus totam sed', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus nisi veniam nobis, minus vitae iure mollitia id praesentium quidem hic nulla pariatur nam neque sapiente eos consequatur eligendi quia! Tempore.', 'uploads/slider/1732644135.jpg', 0, '2024-11-26 11:00:51', '2024-11-26 11:02:15'),
(2, 'Maxime et corrupti', 'Voluptas perferenorem    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa labore, nesciunt beatae facilis, iste necessitatibus amet vitae in commodi sapiente dolorem voluptatibus repellendus aperiam repudiandae cupiditate ea totam perspiciatis voluptatum.\r\n lit. Ipsa labore, nesciunt beatae facilis, iste nepsa labore, nesciunt beatae facilis, iste ne', 'uploads/slider/1732644097.jpg', 0, '2024-11-26 11:01:37', '2024-11-26 11:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=sembunyikan,0=tampilkan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0' COMMENT '0=user,1=admin',
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_as`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Risyfa', 'ahmadrisyfa123123@gmail.com', 1, 'AIMG117326477592219.jpg', NULL, '$2y$10$o9e7kKeBebnGjJsh1Cqoz.lENAfO0E7/pxZg.WMOwPl6iygNtcVLe', NULL, '2024-11-26 10:57:10', '2024-11-26 12:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_one`
--
ALTER TABLE `banner_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_three`
--
ALTER TABLE `banner_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_two`
--
ALTER TABLE `banner_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contoh`
--
ALTER TABLE `contoh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hubungi_kami_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `on_sale`
--
ALTER TABLE `on_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`),
  ADD KEY `product_colors_color_id_foreign` (`color_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_product_id_foreign` (`product_id`);

--
-- Indexes for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profile_user_user_id_unique` (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_product_id_foreign` (`product_id`),
  ADD KEY `review_user_id_foreign` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_one`
--
ALTER TABLE `banner_one`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_three`
--
ALTER TABLE `banner_three`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_two`
--
ALTER TABLE `banner_two`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contoh`
--
ALTER TABLE `contoh`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `on_sale`
--
ALTER TABLE `on_sale`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD CONSTRAINT `hubungi_kami_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD CONSTRAINT `profile_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
