-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 06:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestforexvps`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `meta_desc` text COLLATE utf8mb4_unicode_ci,
  `views` bigint(20) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `uptime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_center` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpanel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `database` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backup` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_transfer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guarantee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_21_034842_create_article_categories_table', 1),
(4, '2019_06_21_174850_create_articles_table', 1),
(5, '2019_06_23_125726_create_settings_table', 1),
(6, '2020_01_28_155731_create_reviews_table', 1),
(7, '2020_01_30_174525_create_pricings_table', 1),
(8, '2020_01_31_153218_create_features_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pri_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disc_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bandwidth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transfer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` text COLLATE utf8mb4_unicode_ci,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pros` text COLLATE utf8mb4_unicode_ci,
  `cons` text COLLATE utf8mb4_unicode_ci,
  `key_features` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `meta_desc` text COLLATE utf8mb4_unicode_ci,
  `views` bigint(20) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `slug`, `sub_title`, `short_desc`, `description`, `logo_path`, `thumb_path`, `rating`, `ref_link`, `pros`, `cons`, `key_features`, `order`, `meta_keyword`, `meta_desc`, `views`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Forex VPS', 'forex-vps', NULL, 'FOREXVPS.NET is one of the leading Forex VPS providers&nbsp;out there. It’s an absolute reliable &amp; stable hosting company which is providing quality &amp;&nbsp;fastest&nbsp;hosting&nbsp;solutions to Forex trader community from 2013. They have a strong refund policy (7 day money-back guarantee), price is also reasonable,&nbsp;top quality servers&nbsp;with&nbsp;great infrastructure and a good knowledge base.&nbsp;This company has a great reputation for their 24*7 live and technical support. Their response rate is good enough &amp; will respond to you right away. To provide extra facility, they offer a ticketing option which will allow you to inform them whenever you face any issue while running your server. <br>', '<p>FOREXVPS.NET is one of the leading Forex VPS providers out there. It?s an absolute reliable &amp; stable hosting company which is providing quality &amp; fastest hosting solutions to Forex trader community from 2013. They have a strong refund policy (7 day money-back guarantee), price is also reasonable, top quality servers with great infrastructure and a good knowledge base. This company has a great reputation for their 24*7 live and technical support. Their response rate is good enough &amp; will respond to you right away. To provide extra facility, they offer a ticketing option which will allow you to inform them whenever you face any issue while running your server. <br></p>\n', NULL, 'forexvps_logo_1581176584.png', '5', 'https://www.forexvps.net/', '<ul><li>Very authoritative brand, into the business for many years</li><li>Great server infrastructure, provides enterprise level hardware\'s</li><li>Strong refund policy</li><li>Personal control panel to manage your servers</li><li>Powerful backup manager<br></li></ul>', '<ul><li>Price is a little higher, though they provide 25% off per new order.</li><li>There may be latency issues for some brokers, but this amount is very low.<br></li></ul>', '<ul><li>Root access to manage your servers online</li><li>All servers come with optimized 1Gb/s network interface </li><li>Power backup manager available</li><li>100% up-time server guarantee</li><li>Trading execution period- 1 millisecond<br></li></ul>', 1, NULL, NULL, 0, 1, 1, 1, '2020-02-05 11:05:56', '2020-02-10 10:32:31'),
(2, 'FXVM', 'fxvm', NULL, '<p>Fast, safe and accurate. FXVM is a great brand to have a great experience in your trading career. To get faster connection &amp; execution speed, this service can be the ultimate choice for you. Servers are built on SSD enabled storage that’s why you are getting faster computing speed &amp; your connection won,t loss, optimized for all operating systems, latency optimized as a result no slippage issue occurs, made of automated Power Backup System &amp; your documents are always safe. This brand is also reliable &amp; into the business for many years, trustworthy over it,s community, their service packages are offered at a reasonable price, support team is knowledgeable &amp; always active to respond to you.<br></p>', '<p>Fast, safe and accurate. FXVM is a great brand to have a great experience in your trading career. To get faster connection &amp; execution speed, this service can be the ultimate choice for you. Servers are built on SSD enabled storage that?s why you are getting faster computing speed &amp; your connection won,t loss, optimized for all operating systems, latency optimized as a result no slippage issue occurs, made of automated Power Backup System &amp; your documents are always safe. This brand is also reliable &amp; into the business for many years, trustworthy over it,s community, their service packages are offered at a reasonable price, support team is knowledgeable &amp; always active to respond to you.<br></p>\n', NULL, 'fxvm_logo_1581176621.png', '4.7', 'https://fxvm.net/', '<ul><li>Great up-time &amp; highly latency optimized servers</li><li>A credible brand</li><li>Multiple data center locations</li><li>User - friendly interface<br></li></ul>', '<ul><li>Only 3 day money back guarantee</li><li>Price is a little higher<br></li></ul>', '<ul><li>Lightning Fast SSD</li><li>Dedicated IP Address</li><li>Automatic Backups</li><li>Optimized for MT4/MT5</li><li>Setup Time- 5 minutes</li><li>Several Equinix data centers around the world</li><li>User-friendly interface</li><li>Optimized network infrastructure<br></li></ul>', 2, NULL, NULL, 0, 1, 1, 1, '2020-02-07 11:38:27', '2020-02-10 10:34:40'),
(3, 'RouterHosting', 'routerhosting', NULL, '<p>ROUTERHOSTING founded in 2008 started their journey with a clear and specific goal- “making Hosting services simpler &amp; more affordable”. This brand is into the business for about 12 years now and has been one of the most reliable &amp; secure brands to the trader community with 10,000+ users. They are highly focused on customers needs and meet them perfectly in an accurate way. This company owns 15 data centers around the globe &amp; most of them are situated in major financial areas. Most importantly, they provide very cheap rated VPS, best uptime guarantee, full Root Access &amp; feature-rich control panel, 99.99% SLA guaranteed, super fast RAID10 solid state drives, easy &amp; instant set-up &amp; active in minutes, DDOS Protection. You will also find a great customer support team who is always active to solve issues of their clients or receive inquiries 24/7 to help them out.<br></p>', '<p>ROUTERHOSTING founded in 2008 started their journey with a clear and specific goal- ?making Hosting services simpler &amp; more affordable?. This brand is into the business for about 12 years now and has been one of the most reliable &amp; secure brands to the trader community with 10,000+ users. They are highly focused on customers needs and meet them perfectly in an accurate way. This company owns 15 data centers around the globe &amp; most of them are situated in major financial areas. Most importantly, they provide very cheap rated VPS, best uptime guarantee, full Root Access &amp; feature-rich control panel, 99.99% SLA guaranteed, super fast RAID10 solid state drives, easy &amp; instant set-up &amp; active in minutes, DDOS Protection. You will also find a great customer support team who is always active to solve issues of their clients or receive inquiries 24/7 to help them out.<br></p>\n', NULL, 'routerhosting_logo_1581177929.png', '4.5', 'https://www.routerhosting.com/', '<ul><li>15 Data centers around the globe</li><li>Full Root Access &amp; feature-rich control panel</li><li>99.99% SLA guaranteed</li><li>Reliable brand with 10,000+ users</li><li>12 Years into the business<br></li></ul>', '<ul><li>Only 7days money back guarantee</li><li>Response rate could be better<br></li></ul>', '<ul><li>Pure SSD drives and quality hardware</li><li>Powerful 2GB DDR4 RAM VPS servers</li><li>Available in 15 locations </li><li>Pure SSD NVMe storage</li><li>Full root access </li><li>99.996% proven availability<br></li></ul>', 3, NULL, NULL, 0, 1, 1, 1, '2020-02-07 11:42:42', '2020-02-10 10:35:59'),
(4, 'VPS Server', 'vps-server', NULL, '<p>VPSSERVER.COM, founded in 2015,&nbsp;is a symbol of&nbsp;reliability to it’s community. This brand has gained fame over the Forex market&nbsp;within a short period&nbsp;for great customer support &amp; server infrastructure. They have&nbsp;a&nbsp;significant technical team of&nbsp;certified experts 24/7 hotline&nbsp;available &amp;&nbsp;have a minimum 5 years’ of experience. Their pricing packages are high though comparatively other Brands existed out there, along with great customer support they provide&nbsp;a feature rich customizable control panel with managed VPS, 14 data centers&nbsp;located around the globe, servers are built on&nbsp;Intel E5&nbsp;processors &amp; 3-way storage replication that’s why you get the best possible&nbsp;speed. Besides, you are getting pure SSD storage, DDOS protection,&nbsp;set-up time only 15minutes, full root access to simplify your administrative tasks &amp; save your important time&nbsp;it typically takes to manage your VPS.&nbsp;On the total, it\'s a grand Brand to go with.<br></p>', '<p>VPSSERVER.COM, founded in 2015, is a symbol of reliability to it?s community. This brand has gained fame over the Forex market within a short period for great customer support &amp; server infrastructure. They have a significant technical team of certified experts 24/7 hotline available &amp; have a minimum 5 years? of experience. Their pricing packages are high though comparatively other Brands existed out there, along with great customer support they provide a feature rich customizable control panel with managed VPS, 14 data centers located around the globe, servers are built on Intel E5 processors &amp; 3-way storage replication that?s why you get the best possible speed. Besides, you are getting pure SSD storage, DDOS protection, set-up time only 15minutes, full root access to simplify your administrative tasks &amp; save your important time it typically takes to manage your VPS. On the total, it\'s a grand Brand to go with.<br></p>\n', NULL, 'vpsserver_logo_1581177993.png', '4.5', 'https://www.vpsserver.com/', '<ul><li>Great customer support &amp; server infrastructure</li><li>Feature rich customizable control panel</li><li>14 Data centers&nbsp;located </li><li>Full root access</li><li>50k+ Active users</li><li>Pure SSD storage<br></li></ul>', '<ul><li>Pricing is quite high</li><li>Support could be better<br></li></ul>', '<ul><li>Live back-ups without reboot</li><li>Quick, easy firewall setup</li><li>Per-built Forex templates</li><li>24/7 uptime for automatic trading</li><li>13 VPS server location worldwide</li><li>Fastest NVMe VPS</li><li>Fast reliable 40Gbit network with high-end Intel E5-269X processors</li><li>Feature rich panel<br></li></ul>', 4, NULL, NULL, 0, 1, 1, 1, '2020-02-07 11:50:33', '2020-02-10 10:37:01'),
(5, 'Cheap Forex VPS', 'cheap-forex-vps', NULL, '<p>CHEAP-FOREX-VPS.COM majorly known as an affordable service provider with some cheaper rated VPS packages, quality products, prominent services and a considerable refund policy. This Brand provides 5 day money-back guarantee, fast and stable OS windows server 2008 64bit &amp; ultra fast SSD drives &amp; uptime 99.9% to prevent failures and downtime with 24/7 monitoring. As mentioned, they offer some cheaper packages which starts from only $3.73 &amp; perfect to continue if you need a quality service with a low price. They also have a professional support team 24/7 active &amp; offer ultra fast SSD drives, dedicated IP address for each trader, dedicated resources with high performance and stability, Dual Quad Core 5430 + Raid 10 SSD Disks so your data remains safe. Their staff are MT4 trained, able to assist you to set up your VPS and trading platforms on it. They give you full administrative access to your VPS &amp; each VPS contains full administrative access over RDP (Remote Desktop) which gives you full administrative control for installing software that you need for trading. This platform is fully redundant, supports MetaTrader, all EAs, and is designed to be fully compatible with most Forex brokers. <br></p>', '<p>CHEAP-FOREX-VPS.COM majorly known as an affordable service provider with some cheaper rated VPS packages, quality products, prominent services and a considerable refund policy. This Brand provides 5 day money-back guarantee, fast and stable OS windows server 2008 64bit &amp; ultra fast SSD drives &amp; uptime 99.9% to prevent failures and downtime with 24/7 monitoring. As mentioned, they offer some cheaper packages which starts from only $3.73 &amp; perfect to continue if you need a quality service with a low price. They also have a professional support team 24/7 active &amp; offer ultra fast SSD drives, dedicated IP address for each trader, dedicated resources with high performance and stability, Dual Quad Core 5430 + Raid 10 SSD Disks so your data remains safe. Their staff are MT4 trained, able to assist you to set up your VPS and trading platforms on it. They give you full administrative access to your VPS &amp; each VPS contains full administrative access over RDP (Remote Desktop) which gives you full administrative control for installing software that you need for trading. This platform is fully redundant, supports MetaTrader, all EAs, and is designed to be fully compatible with most Forex brokers. <br></p>\n', NULL, 'cheap-forex-vps_logo_1581178014.png', '4.2', 'https://www.cheap-forex-vps.com/', '<ul><li>Only from $3.73 only</li><li>Strong refund policy</li><li>Guaranteed uptime 99.9%</li><li>Dedicated IP,s with high performance and stability</li><li>Full administrative access<br></li></ul>', '<ul><li>5 Days money back guarantee</li><li>Poorly designed user interface<br></li></ul>', '<ul><li>Ultra fast SSD Drives</li><li>Fully redundant platform</li><li>Fast and stable OS Windows Server 2008 64bit</li><li>More then 99.99% uptime SLA</li><li>Dedicated resources, high performance, stability by Hyper-V platform</li><li>Full administrative access<br></li></ul>', 5, NULL, NULL, 0, 1, 1, 1, '2020-02-07 11:56:42', '2020-02-10 10:38:28'),
(6, 'LinkUpHost', 'linkuphost', NULL, '<p>LINKUPHOST, already 9+ Years active on the market, a clear lead in pricing and performance, highest in service quality with robust and failure-free service delivery, hosting services sold 10,000+, happy customers 98.6%, a reliable &amp; easy-to-use cloud platform, 4 data center with enterprise-level reliability, security, and performance standards can be a great fit to fulfill your hosting demand. Besides, they will provide you a top-tier service delivery with a minimum of 99.95% uptime guaranteed, 30 day money-back guarantee, free setup, data-center bandwidth 30 Gbps, hosted in data center tier-4, high speed backbone network, DDOS protection, dedicated IP, mt4/mt5 pre-installed into their VPS system. Their support team specialists are always on hand to answer your questions and customers trust them through their delivery of world class service and support.<br></p>', '<p>LINKUPHOST, already 9+ Years active on the market, a clear lead in pricing and performance, highest in service quality with robust and failure-free service delivery, hosting services sold 10,000+, happy customers 98.6%, a reliable &amp; easy-to-use cloud platform, 4 data center with enterprise-level reliability, security, and performance standards can be a great fit to fulfill your hosting demand. Besides, they will provide you a top-tier service delivery with a minimum of 99.95% uptime guaranteed, 30 day money-back guarantee, free setup, data-center bandwidth 30 Gbps, hosted in data center tier-4, high speed backbone network, DDOS protection, dedicated IP, mt4/mt5 pre-installed into their VPS system. Their support team specialists are always on hand to answer your questions and customers trust them through their delivery of world class service and support.<br></p>\n', NULL, 'linkuphost.com_1581178135.png', '4.0', 'http://linkuphost.com/', '<ul><li>9+ Years active</li><li>Happy customers 98.6%, 10k+ user base</li><li>30 Day money-back guarantee</li><li>Free setup</li><li>Data-center bandwidth 30 Gbps<br></li></ul>', '<ul><li>Pricing is quite high</li><li>Servers could be a little bit faster<br></li></ul>', '<ul><li>SSD enabled disk space</li><li>Unlimited bandwidth</li><li>Forex ready systems</li><li>Enterprise-level reliability, security, and performance </li><li>Cloud environment with enterprise-level connectivity</li><li>A minimum of 99.95% Uptime Guaranteed<br></li></ul>', 6, NULL, NULL, 0, 1, 1, 1, '2020-02-07 12:00:28', '2020-02-10 10:42:24'),
(7, 'Trading Fx VPS', 'trading-fx-vps', NULL, '<p>TRADINGFXVPS aims to provide traders with the dependable VPS solution. This company is an efficient, knowledgeable, and affordable vps service provider whose server infrastructures are built on first-class equipment from Hewlett Packard, Dell, Intel &amp; IBM. All of their VPS are hosted on a powerful, reliable high-end server, servers are equipped with SSD RAID10 disk array built on high-speed SAS and SSD drives. They use SATA drives for high-speed access to information with 10-20 times faster than most hosting providers. They are able to guarantee 100% uptime across your VPS system, servers are located in four geographically separate Data Centers, 30 days full refund with no question asked, 24×7 on-site monitoring, DDoS secured and full Redundancy server, 1ms latency to more than 100 brokers worldwide, encryption of data with consistent security practices, supports all platforms, plan starting at $25/m, a rich knowledge base, 7 days trial plan starting from $3.99. They have a great support team too, which consists of computer security, networking and system administration who are always active to support their customers 24/7. On the total, it’s a great brand to continue with.<br></p>', '<p>TRADINGFXVPS aims to provide traders with the dependable VPS solution. This company is an efficient, knowledgeable, and affordable vps service provider whose server infrastructures are built on first-class equipment from Hewlett Packard, Dell, Intel &amp; IBM. All of their VPS are hosted on a powerful, reliable high-end server, servers are equipped with SSD RAID10 disk array built on high-speed SAS and SSD drives. They use SATA drives for high-speed access to information with 10-20 times faster than most hosting providers. They are able to guarantee 100% uptime across your VPS system, servers are located in four geographically separate Data Centers, 30 days full refund with no question asked, 24&times;7 on-site monitoring, DDoS secured and full Redundancy server, 1ms latency to more than 100 brokers worldwide, encryption of data with consistent security practices, supports all platforms, plan starting at $25/m, a rich knowledge base, 7 days trial plan starting from $3.99. They have a great support team too, which consists of computer security, networking and system administration who are always active to support their customers 24/7. On the total, it?s a great brand to continue with.<br></p>\n', NULL, 'tradingfxvps_logo_1581178160.png', '3.9', 'https://tradingfxvps.com/', '<ul><li>30 Days full refund with no question asked</li><li>DDOS secured and full Redundancy server</li><li>1ms latency to more than 100 brokers worldwide</li><li>A great &amp; highly experienced support team, customer support is satisfying</li><li>Infrastructures are built on first-class equipment<br></li></ul>', '<ul><li>Pricing is quite high</li><li>Should have provided root access<br></li></ul>', '<ul><li>Focused on high performance and redundancy</li><li>3-Way storage replication </li><li>Full administrative access</li><li>100% up-time server</li><li>SSD enabled disk space<br></li></ul>', 7, NULL, NULL, 0, 1, 1, 1, '2020-02-07 12:04:40', '2020-02-10 10:50:34'),
(8, 'MyForexVPS', 'myforexvps', NULL, '<p>MYFOREXVPS, a reliable brand, started their journey in 2012. They have gained credibility to their customers by their quality service &amp; products for the last 8 years. They provide first-class server equipment for smoothing your trading experience &amp; deliver the best machine as much as possible, best available virtualization technology - VMware, prevent slippage and re-quotes providing ultra low latencies as low as 1 millisecond &amp; give you a real time market accessible. All of their servers are running on enterprise-class SSD storage. They have 3 data centers available in major financial areas &amp; have secured 99.99% uptime, provide dedicated IP address to every customer, give you the full control panel over your VPS using, a strong knowledge base, instant VPS activation, plan starts from only $12.99. A dedicated customer support team employed 24/7 to monitor your systems &amp; response to you instantly if you face any issue.<br></p>', '<p>MYFOREXVPS, a reliable brand, started their journey in 2012. They have gained credibility to their customers by their quality service &amp; products for the last 8 years. They provide first-class server equipment for smoothing your trading experience &amp; deliver the best machine as much as possible, best available virtualization technology - VMware, prevent slippage and re-quotes providing ultra low latencies as low as 1 millisecond &amp; give you a real time market accessible. All of their servers are running on enterprise-class SSD storage. They have 3 data centers available in major financial areas &amp; have secured 99.99% uptime, provide dedicated IP address to every customer, give you the full control panel over your VPS using, a strong knowledge base, instant VPS activation, plan starts from only $12.99. A dedicated customer support team employed 24/7 to monitor your systems &amp; response to you instantly if you face any issue.<br></p>\n', NULL, 'myforexvps_logo_1581178194.png', '3.7', 'https://www.myforexvps.com/', '<ul><li>Reliable brand, into the business for many years</li><li>Gained credibility with service &amp; products</li><li>Enterprise-class SSD storage</li><li>Full control panel</li><li>Starts from only $12.99<br></li></ul>', '<ul><li>Only 3 data centers available</li><li>Response rate could be better<br></li></ul>', '<ul><li>Prevents slippage and requotes with latencies as low as 1 millisecond</li><li>Enterprise-class SSD storage, which is numerous times faster than SATA/SAS drives</li><li>Dedicated IP address per user</li><li>Unmetered data traffic</li><li>Administrative access to your VPS </li><li>Secured 99.9999% uptime <br></li></ul>', 8, NULL, NULL, 0, 1, 1, 1, '2020-02-07 12:08:30', '2020-02-10 10:43:33'),
(9, 'FX VPS', 'fx-vps', NULL, '<p>FXVPS.BIZ was established around a goal- \"to create a highly professional trade environment for clients across industries”. This company is developed by a knowledgeable and exceptional trade team. Their servers clock in at 0.38ms latency, provides 100% uptime as per their Service Level Agreement(SLA), 24/7 customer support, trading optimized servers &amp; technical expertise, pricing package starts from $19.99, set-up time 20-60 minutes, 7 data centers around the globe, dedicated IP address per user, a strong knowledge base, all servers located in financial data centers. The most impressive thing is- they deliver ultra low latency right away fast execution speed for your Forex trading.<br></p>', '<p>FXVPS.BIZ was established around a goal- \"to create a highly professional trade environment for clients across industries?. This company is developed by a knowledgeable and exceptional trade team. Their servers clock in at 0.38ms latency, provides 100% uptime as per their Service Level Agreement(SLA), 24/7 customer support, trading optimized servers &amp; technical expertise, pricing package starts from $19.99, set-up time 20-60 minutes, 7 data centers around the globe, dedicated IP address per user, a strong knowledge base, all servers located in financial data centers. The most impressive thing is- they deliver ultra low latency right away fast execution speed for your Forex trading.<br></p>\n', NULL, 'fxvps_logo_1581178217.png', '3.5', 'https://fxvps.biz/', '<ul><li>Servers clock in at 0.38ms latency</li><li>Provides 100% uptime by SLA</li><li>Fully trading optimized servers, dedicated to forex trading</li><li>Delivers ultra low latency</li><li>Dedicated IP address per user<br></li></ul>', '<ul><li>Set-up time duration might be lower</li><li>Pricing is quite high<br></li></ul>', '<ul><li>As fast as 0.38ms trade execution</li><li>100% server uptime guarantee </li><li>Servers and ISPs provide uninterrupted connectivity </li><li>Trading optimized for all trading platforms</li><li>Lightning Fast SSD<br></li></ul>', 9, NULL, NULL, 0, 1, 1, 1, '2020-02-07 12:11:36', '2020-02-10 10:41:37'),
(10, 'VPSForexTrader', 'vpsforextrader', NULL, '<p>VPSForexTrader.com founded in 2011, has been successfully offering VPS server solutions to a range of personal and enterprise clients for many years &amp; they are always on a single goal- “paying total concentration to their customers &amp; make them happy with their services”. They own 2 data centers which are located in the Netherlands, USA &amp; these data centers guarantee all of their customers a redundant high-capacity, stable and reliable power supply. They are using Cisco hardware kits besides their new agreement with HP for your virtualized servers, that’s why you are having a trading friendly infrastructure. This brand owns a good amount of technical people employed who are in their customer support team to continue helping their customers to the highest level possible. Besides, they ensure stability, 30 day’s money-back guarantee, no service termination policy, flexible upgrades with no data loss, pricing starts from only $14.99 and many more.<br></p>', '<p>VPSForexTrader.com founded in 2011, has been successfully offering VPS server solutions to a range of personal and enterprise clients for many years &amp; they are always on a single goal- ?paying total concentration to their customers &amp; make them happy with their services?. They own 2 data centers which are located in the Netherlands, USA &amp; these data centers guarantee all of their customers a redundant high-capacity, stable and reliable power supply. They are using Cisco hardware kits besides their new agreement with HP for your virtualized servers, that?s why you are having a trading friendly infrastructure. This brand owns a good amount of technical people employed who are in their customer support team to continue helping their customers to the highest level possible. Besides, they ensure stability, 30 day?s money-back guarantee, no service termination policy, flexible upgrades with no data loss, pricing starts from only $14.99 and many more.<br></p>\n', NULL, 'vpsforextrader_logo_1581178264.png', '3.2', 'https://www.vpsforextrader.com/', '<ul><li>Reliable brand, into the business for many years</li><li>30 Day’s money-back guarantee</li><li>No service termination policy</li><li>Flexible upgrades with no data loss</li><li>Great infrastructures with high-performance hardware\'s<br></li></ul>', '<ul><li>Only 2 data centers available</li><li>Servers could be more faster<br></li></ul>', '<ul><li>Built on quad router multi-gigabit network</li><li>A redundant high-capacity, stable and reliable power supply available </li><li>All data floors are maintained at a constant 21°C ± 2°C</li><li>Fast SSD drives and quality hardware</li><li>100% up-time server<br></li></ul>', 10, NULL, NULL, 0, 1, 1, 1, '2020-02-07 12:14:44', '2020-02-10 10:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `logo_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_two` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` text COLLATE utf8mb4_unicode_ci,
  `contact_mail` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `keywords`, `logo_path`, `favicon_path`, `phone_one`, `phone_two`, `email_one`, `email_two`, `contact_address`, `contact_mail`, `footer_text`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Best Forex VPS', NULL, NULL, 'logo.png', 'favicon.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020', 1, 1, 1, '2020-02-06 10:48:57', '2020-02-06 11:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Supper Admin', 'admin@mail.com', NULL, '$2y$10$uW.qzjfXyhN46bZkwTauduSkg.kZkdF1iX6BC7WNOIJOm29t0akoq', 'C61ujWidb1KyTrlucjU9RRDFgeqLgHnuyVJzpLl5ILLNIXG85E2tVooph9zr', '2020-02-02 10:55:07', '2020-02-02 10:55:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_categories_title_unique` (`title`),
  ADD UNIQUE KEY `article_categories_slug_unique` (`slug`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `features_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricings_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reviews_title_unique` (`title`),
  ADD UNIQUE KEY `reviews_slug_unique` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `article_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pricings`
--
ALTER TABLE `pricings`
  ADD CONSTRAINT `pricings_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
