-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 11:54 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dct_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `pageId` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `pageId`, `name`, `content`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'slider1-caption: A', 'Strategic Technology Partner', 'slider caption wording', NULL, '2018-04-06 08:31:37', '2018-10-03 03:26:14'),
(2, 1, 'slider1-caption: B', 'Business Intelligence and Analytics System', 'slider caption wording', NULL, '2018-04-06 08:33:07', '2018-10-03 03:40:28'),
(3, 1, 'slider2-caption: A', 'Building an IT Ecosystem', 'slider caption wording', NULL, '2018-04-06 08:37:51', '2018-10-03 03:28:26'),
(4, 1, 'slider2-caption: B', 'Business Intelligence and Analytics System', 'slider caption wording', NULL, '2018-04-06 08:39:06', '2018-10-03 03:31:51'),
(5, 1, 'slider3-caption: A', 'Service Delivery and Support', 'slider caption wording', NULL, '2018-04-06 08:41:50', '2018-10-03 03:37:07'),
(6, 1, 'slider3-caption: B', 'Business Intelligence and Analytics System', 'slider caption wording', NULL, '2018-04-06 08:44:26', '2018-10-03 03:38:07'),
(7, 1, 'ContentArea Left', 'Directcore Technologies', 'content area after slider', NULL, '2018-04-06 08:49:06', '2018-04-06 08:51:11'),
(8, 1, 'ContentArea Right', 'Building Smart Solutions', 'content area after slider', NULL, '2018-04-06 08:51:04', '2018-04-06 08:51:04'),
(9, 1, 'solutionA Title', 'IT Infrastructure', 'solution section left side', NULL, '2018-04-06 08:55:02', '2018-04-06 08:56:00'),
(10, 1, 'solution A: Content', 'We Plan, Build, Support, Manage, Improve, Innovate', 'content', NULL, '2018-04-06 08:58:17', '2018-04-27 10:22:16'),
(11, 1, 'Solution B Title', 'Security', 'content', NULL, '2018-04-06 08:59:33', '2018-04-06 08:59:48'),
(12, 1, 'Solution B Content', 'We Plan, Build, Support, Manage, Improve, Innovate', 'content', NULL, '2018-04-06 09:03:17', '2018-04-27 10:21:47'),
(13, 1, 'Solution C: title', 'Software', 'content', NULL, '2018-04-06 09:08:10', '2018-04-06 09:08:10'),
(14, 1, 'Solution C: content', 'We resell, customize, optimize, support & manage', 'content', NULL, '2018-04-06 09:08:54', '2018-04-27 10:20:59'),
(15, 1, 'Solution D: title', 'Mobile VAS', 'content', NULL, '2018-04-06 09:09:26', '2018-04-06 09:11:58'),
(16, 1, 'Solution D: content', 'We Plan, Build, Support, Manage, Improve, Innovate', 'content', NULL, '2018-04-06 09:09:55', '2018-04-27 10:20:08'),
(17, 1, 'product A content', 'Learning and Management Information System', 'content', NULL, '2018-04-06 09:14:31', '2018-10-03 04:56:30'),
(18, 1, 'Product B: content', 'Mobile Financial Services Platform', 'content', NULL, '2018-04-06 09:17:01', '2018-04-28 04:35:18'),
(19, 1, 'Product C: content', 'Property Search & Link Services', 'content', NULL, '2018-04-06 09:17:27', '2018-04-28 04:35:36'),
(20, 1, 'Product D Content', 'Premium Virtual Internet Services', 'content', NULL, '2018-04-06 09:18:18', '2018-04-28 04:36:02'),
(21, 2, 'banner Caption1', 'Who We Are', 'content', NULL, '2018-04-06 09:29:50', '2018-10-02 08:07:13'),
(22, 2, 'banner Caption2', 'We’re an award-winning Software Company based in Kenya', 'content', NULL, '2018-04-06 09:30:17', '2018-10-03 04:49:49'),
(23, 2, 'page tile', 'Hello, Welcome To Directcore', 'content', NULL, '2018-04-06 09:31:11', '2018-10-02 08:09:34'),
(24, 2, 'page sub title', 'Get To Know About Us', 'content', NULL, '2018-04-06 09:31:39', '2018-10-02 08:10:25'),
(25, 2, 'Feature content', 'Directcore Technologies is a technology company specializing in\r\nproviding IT and Telecoms products, solutions and services that\r\ntransform industries, markets and lives.\r\nWe use technology to turn ideas into value.\r\nWe plan, build, manage and support efficient, productive and\r\nsecure IT ecosystems that enable our customers to respond with\r\nagility to a rapidly changing competitive landscape', 'content', NULL, '2018-04-06 09:32:17', '2018-10-02 08:11:17'),
(26, 2, 'Mission Title', 'Our Mission', 'content', NULL, '2018-04-06 09:33:22', '2018-10-02 08:12:11'),
(27, 2, 'Mission Content', 'To provide innovative, secure and scalable ICT products, solutions and services that meet our customers\' current and future needs using professional teams and partners, and providing exponential growth for all stakeholders', 'content', NULL, '2018-04-06 09:34:01', '2018-10-03 03:54:31'),
(28, 2, 'our vision content', 'To be the PREFERRED IT and Telecoms solutions provider in Africa', 'content', NULL, '2018-04-06 09:34:47', '2018-10-03 03:55:35'),
(29, 2, 'Values title', 'Our Core Values', 'content', NULL, '2018-04-06 09:35:37', '2018-10-02 09:33:48'),
(30, 2, 'values Content', 'Perform our duties with Excellence<br/>\r\nAct with Integrity and Fairness in all our business transactions<br/>\r\nSet Exemplary Leadership in our work and business engagements', 'content', NULL, '2018-04-06 09:36:21', '2018-10-03 04:05:36'),
(31, 2, 'how it began', 'How It All Began!', 'content', NULL, '2018-04-06 09:40:13', '2018-04-27 09:27:05'),
(32, 2, 'how it began content', 'Directcore Technologies \r\nwas born in Kenya in the year 2012.', 'content', NULL, '2018-04-06 09:40:51', '2018-10-03 04:00:48'),
(33, 2, 'Who we are?', 'Who we are?', 'content', NULL, '2018-04-06 09:41:35', '2018-10-02 07:27:28'),
(34, 2, 'who we are content', 'Directcore Technologies is a limited liability company that was incorporated in Kenya in the year 2012. \r\nThe company is headquartered in Nairobi, Kenya and is led by highly professional and experienced IT experts with experience from various ICT fields.', 'content', NULL, '2018-04-06 09:42:00', '2018-10-03 04:34:01'),
(35, 2, 'What we do?', 'What we do?', 'content', NULL, '2018-04-06 09:42:24', '2018-04-06 09:42:24'),
(36, 2, 'what we do content', 'We specialize in providing proven IT solutions, project management, technical architecture, design and development of systems & infrastructure and software development capabilities. We appreciate that different industries operate within different environments, each with unique needs and priorities, and are structured to provide solutions for every market.', 'content', NULL, '2018-04-06 09:42:59', '2018-10-03 04:29:06'),
(37, 2, 'Why Directcore?', 'Why Directcore?', 'Content', NULL, '2018-04-06 09:43:21', '2018-10-03 04:37:20'),
(38, 2, 'Why Directcore :body', 'Our team is composed of dynamic and innovative specialists with deep knowledge in technical solutions development, solutions operationalization strategies, change management and projects delivery; drawing on a wealth of knowledge and experience to ensure highest quality of service.', 'content', NULL, '2018-04-06 09:43:57', '2018-10-03 04:38:28'),
(39, 2, 'Why we do it?', 'Why we do it?', 'content', NULL, '2018-04-06 09:44:35', '2018-10-03 04:40:54'),
(40, 2, 'Why we do it content', 'We love to use technology to turn ideas into value.', 'Content', NULL, '2018-04-06 09:45:20', '2018-10-03 04:40:34'),
(41, 3, 'banner caption 1', 'Our Products', 'caption', NULL, '2018-04-06 11:13:05', '2018-04-06 11:15:03'),
(42, 3, 'banner Caption2', 'We’re an award-winning software company based in Kenya.', 'content', NULL, '2018-04-06 11:15:30', '2018-05-04 09:35:04'),
(43, 3, 'AlanaContent', 'Learning and Management Information System', 'content', NULL, '2018-04-06 11:15:59', '2018-10-03 04:55:14'),
(44, 3, 'ultracity Content', 'Property Search & Link Services', 'content', NULL, '2018-04-06 11:16:22', '2018-04-28 04:46:41'),
(45, 3, 'Nexcom Content', 'Premium Virtual Internet Services', 'content', NULL, '2018-04-06 11:16:48', '2018-10-03 04:55:46'),
(46, 3, 'pesatel Content', 'Mobile Financial Services Platform', 'content', NULL, '2018-04-06 11:17:33', '2018-04-28 04:47:16'),
(47, 4, 'banner caption 1', 'Our Solutions', 'content', NULL, '2018-04-06 11:39:52', '2018-04-06 11:39:52'),
(48, 4, 'banner Caption2', 'We’re an award-winning software company based in Kenya.', 'content', NULL, '2018-04-06 11:40:23', '2018-05-04 08:51:28'),
(49, 4, 'page Tile', 'Solutions', 'content', NULL, '2018-04-06 11:40:50', '2018-05-04 08:50:23'),
(50, 4, 'Feature content', 'Our Services are the preferred technology partner for leading brands in Consumer, Retailer, SME and Enterprise segments for over 15 years. Headquartered in Nairobi, we have a strong presence in the Eastern Africa geographies and abroad.', 'content', NULL, '2018-04-06 11:41:08', '2018-10-03 05:36:29'),
(51, 4, 'solution 1 title', 'Mobile Solutions', 'content', NULL, '2018-04-06 11:41:55', '2018-10-03 05:12:55'),
(52, 4, 'solution 1 content', 'We Plan, Build, Support, Manage, Improve, Innovate<br/>\r\nBespoke Mobile Solutions<br/>\r\nMobile Banking Solutions<br/>\r\nMobile VAS Solutions<br/>\r\nMobile Integration Solutions', 'content', NULL, '2018-04-06 11:42:16', '2018-10-03 06:24:46'),
(53, 4, 'solution 2 title', 'Software', 'content', NULL, '2018-04-06 11:42:48', '2018-04-27 09:51:48'),
(54, 4, 'solution 2 content', 'We resell, customize, optimize, support & manage<br/>\r\nERP & CRM systems<br/>\r\nMFI & SACCO systems<br/>\r\nBusiness Collaboration systems<br/>\r\nBusiness Intelligence & Analytic systems<br/>\r\nDatabase Management systems<br/>\r\nOperating Systems & Applications', 'content', NULL, '2018-04-06 11:43:07', '2018-10-03 06:13:41'),
(55, 4, 'solution 3: title', 'IT Infrastructure', 'content', NULL, '2018-04-06 11:43:45', '2018-10-03 05:43:17'),
(56, 4, 'solution 3 content', 'We Plan, Build, Support, Manage, Improve, Innovate,<br/>\r\nIP Network Solutions<br/>\r\nManaged Network Services<br/>\r\nNetwork Communication Solutions<br/>\r\nDatacenter Solutions<br/>\r\nStorage Solutions', 'content', NULL, '2018-04-06 11:44:11', '2018-10-03 06:18:16'),
(57, 4, 'solution 4: title', 'Security', 'content', NULL, '2018-04-06 11:44:42', '2018-04-27 10:02:56'),
(58, 4, 'solution 4 content', 'We Plan, Build, Support, Manage, Improve, Innovate<br/>\r\nPhysical Security Solutions<br/>\r\nIP Network Security Solutions<br/>\r\nSoftware Security Solutions', 'content', NULL, '2018-04-06 11:45:16', '2018-10-03 06:23:54'),
(59, 5, 'banner caption 1', 'Contact Us', 'content', NULL, '2018-04-07 04:41:31', '2018-04-25 06:41:02'),
(60, 5, 'banner Caption2', 'Feel free to send us a message', 'content', NULL, '2018-04-07 04:41:52', '2018-04-25 06:41:27'),
(61, 5, 'Page Titlw', 'Contact Information', 'content', NULL, '2018-04-07 04:42:17', '2018-04-25 06:41:34'),
(62, 5, 'page content', 'Feel free to contact us for any questions or if you need any help or services.', 'content', NULL, '2018-04-07 04:42:41', '2018-04-25 06:42:13'),
(63, 5, 'Address content', '2nd Floor, Plaza 2000,\r\nMombasa Road, Nairobi,Kenya', 'content', NULL, '2018-04-07 04:43:34', '2018-04-28 04:49:39'),
(64, 5, 'Email content', 'info@directcore.com', 'content', NULL, '2018-04-07 04:43:52', '2018-04-28 04:49:00'),
(65, 5, 'Phone: Content', '+254 202 325 599', 'content', NULL, '2018-04-07 04:44:34', '2018-04-25 06:42:47'),
(66, 6, 'banner caption 1', 'Alana', 'content', NULL, '2018-04-07 04:55:35', '2018-05-08 06:15:49'),
(67, 6, 'banner caption 2', 'Reimagine and Transform your Institution', 'content', NULL, '2018-04-07 04:56:00', '2018-10-03 07:01:00'),
(68, 6, 'Page Tile', 'Alana', 'content', NULL, '2018-04-07 04:56:23', '2018-05-08 09:07:28'),
(69, 6, 'Sub Title', 'Learning and Management Information System (LMIS)', 'content', NULL, '2018-04-07 04:56:40', '2018-10-03 06:46:26'),
(70, 6, 'Feature content', 'Alana is a school management system that helps students and lectures to work in harmony. Alana has a dynamic workflow management module that allows it to be implemented in all educational levels from Kindergarten to University both public and private. Alana can be deployed on-premise for learning institutions with sufficient IT infrastructure, <br/>\r\nAlana Cloud, is for learning institutions without sufficient IT infrastructure or institutions which want to experience simplicity in management of the system. Apart from learning institutions, Alana can also be used for Corporate training.', 'content', NULL, '2018-04-07 04:57:37', '2018-10-03 10:25:41'),
(71, 6, 'product detail heading right', 'Alana School management System', 'content', NULL, '2018-04-07 05:01:52', '2018-05-08 08:50:23'),
(72, 6, 'ContentArea Right', 'Alana School management functionalities and features.', 'content', NULL, '2018-04-07 05:02:33', '2018-05-08 08:52:00'),
(73, 6, 'Student Portal', 'Student Portal', 'content', NULL, '2018-04-07 05:03:19', '2018-05-08 09:01:12'),
(74, 6, 'Student Portal - content', 'This allows student to  access information from the school administration and the lecturer.', 'content', NULL, '2018-04-07 05:03:50', '2018-05-08 09:01:25'),
(75, 6, 'Administration Portal', 'Administration Portal', 'content', NULL, '2018-04-07 05:04:16', '2018-05-08 09:02:09'),
(76, 6, 'Administration Portal - content', 'This portal allows the school faculty and administration to manage students information effectively.', 'content', NULL, '2018-04-07 05:04:37', '2018-05-08 09:04:15'),
(77, 6, 'Lecturer portal', 'Lecturer portal', 'content', NULL, '2018-04-07 05:05:16', '2018-05-08 09:02:29'),
(78, 6, 'Lecturer portal - content', 'This allows Lectures to communicate effectively with there students', 'content', NULL, '2018-04-07 05:06:19', '2018-05-08 09:03:49'),
(79, 6, 'Do More With Social Media', 'MP: Do More With Social Media', 'content', NULL, '2018-04-07 05:07:09', '2018-04-07 05:07:09'),
(80, 6, 'Hello, We Are Metrics', 'MP: Hello, We Are Metrics', 'content', NULL, '2018-04-07 05:07:31', '2018-04-07 05:07:31'),
(81, 6, 'Social Analytics', 'MP: Social Analytics', 'content', NULL, '2018-04-07 05:08:34', '2018-04-07 05:08:34'),
(82, 6, 'Social Analytics - content', 'MP: Metrics social media analytics give you an in-depth view of how well your social media efforts are being received ...', 'content', NULL, '2018-04-07 05:09:24', '2018-04-07 06:02:52'),
(83, 6, 'Security', 'MP: Security', 'content', NULL, '2018-04-07 05:09:43', '2018-04-07 05:09:43'),
(84, 6, 'Security - content', 'MP: Security is no joke. Reputations, assets, and financials are all at stake. Metrics secure logins, profile protections ...', 'content', NULL, '2018-04-07 05:10:08', '2018-04-07 05:10:08'),
(85, 6, 'Engagement', 'MP: Engagement', 'content', NULL, '2018-04-07 05:10:36', '2018-04-07 05:10:36'),
(86, 6, 'Engagement - content', 'MP: With the ability to manage all your social networks , we gives you a wide scope of your social media activity ...', NULL, NULL, '2018-04-07 05:11:10', '2018-04-07 05:11:10'),
(87, 6, 'Listening', 'MP: Listening', 'content', NULL, '2018-04-07 05:11:29', '2018-04-07 05:12:15'),
(88, 6, 'Listening - content', 'MP: What\'s your audience saying about your brand? Find out, engage them, and save the day with monitoring tools ...', 'content', NULL, '2018-04-07 05:12:05', '2018-04-07 05:12:05'),
(89, 6, 'Collaboration', 'MP: Collaboration', 'content', NULL, '2018-04-07 05:12:39', '2018-04-07 05:12:39'),
(90, 6, 'Collaboration - content', 'MP: Adding multiple Team Members makes the Social media management easy and being a voice for your brand ...', 'content', NULL, '2018-04-07 05:13:22', '2018-04-07 05:13:40'),
(91, 6, 'Web & Mobile Apps', 'MP: Web & Mobile Apps', 'content', NULL, '2018-04-07 05:14:10', '2018-04-07 05:14:10'),
(92, 6, 'Web & Mobile Apps -content', 'MP: Increase social reach and productivity with our App Directory - a collection of famous applications like Instagram ...', 'content', NULL, '2018-04-07 05:14:43', '2018-04-07 05:14:43'),
(93, 7, 'banner caption 1', 'Nexcom', 'netafrican', NULL, '2018-04-07 06:13:04', '2018-10-02 15:50:25'),
(94, 7, 'banner caption 2', 'Internet with a Difference', 'content', NULL, '2018-04-07 06:13:34', '2018-10-03 10:46:46'),
(95, 7, 'title', 'Nexcom', 'content', NULL, '2018-04-07 06:14:07', '2018-10-02 15:51:29'),
(96, 7, 'sub title', 'Virtual Internet Service platform', 'content', NULL, '2018-04-07 06:14:34', '2018-10-03 10:48:08'),
(97, 7, 'Feature content', 'Nexcom is a Virtual Internet Services platform which offers premium internet services to corporates and personalized on-demand internet services to consumers.\r\nNexcom offers internet unique experience to the subscribers, from unparalleled customer care to high quality of service availability.<br/>\r\nWith Nexcom, there is \"Internet with a Difference\"', 'content', NULL, '2018-04-07 06:14:51', '2018-10-03 10:45:26'),
(98, 7, 'ContentArea Left', 'Nexcom Solutions', 'content', NULL, '2018-04-07 06:15:18', '2018-10-02 15:53:00'),
(99, 7, 'ContentArea Right', 'Nexcom Solutions and Services', 'content', NULL, '2018-04-07 06:15:38', '2018-10-02 15:53:14'),
(100, 7, 'Internet', 'Internet', 'content', NULL, '2018-04-07 06:16:03', '2018-05-08 10:07:45'),
(101, 7, 'internet - content', 'Nexcom offers Fibre optic internet access to clients and business,', 'content', NULL, '2018-04-07 06:16:24', '2018-10-02 15:54:03'),
(102, 7, 'Security', 'Security', 'content', NULL, '2018-04-07 06:16:39', '2018-05-08 10:08:11'),
(103, 7, 'Security - Content', 'Nexcom also provides LAN and WAN network Security products and services according to the customers needs.', 'content', NULL, '2018-04-07 06:16:56', '2018-10-02 15:54:40'),
(104, 7, 'Networking', 'Networking', 'content', NULL, '2018-04-07 06:17:19', '2018-05-08 10:08:34'),
(105, 7, 'Networking - Content', 'We also provide business with internal networking connections.', 'content', NULL, '2018-04-07 06:17:46', '2018-05-08 10:14:39'),
(106, 7, 'Do More With Social Media', 'MP: Do More With Social Media', 'content', NULL, '2018-04-07 06:19:11', '2018-04-07 06:19:11'),
(107, 7, 'Hello, We Are Metrics', 'MP: Hello, We Are Metrics', 'content', NULL, '2018-04-07 06:19:28', '2018-04-07 06:19:28'),
(108, 7, 'Social Analytics', 'MP: Social Analytics', 'content', NULL, '2018-04-07 06:19:59', '2018-04-07 06:19:59'),
(109, 7, 'Social Analytics- content', 'MP: Metrics social media analytics give you an in-depth view of how well your social media efforts are being received ...', 'content', NULL, '2018-04-07 06:20:24', '2018-04-07 06:20:35'),
(110, 7, 'Security', 'Security', 'content', NULL, '2018-04-07 06:21:08', '2018-04-07 06:21:08'),
(111, 7, 'MP: Security', 'MP: Security is no joke. Reputations, assets, and financials are all at stake. Metrics secure logins, profile protections ...', 'content', NULL, '2018-04-07 06:21:49', '2018-04-07 06:21:49'),
(112, 7, 'Engagement', 'MP: Engagement', 'content', NULL, '2018-04-07 06:22:12', '2018-04-07 06:22:12'),
(113, 7, 'Engagement -content', 'MP: With the ability to manage all your social networks , we gives you a wide scope of your social media activity ...', 'content', NULL, '2018-04-07 06:22:59', '2018-04-07 06:22:59'),
(114, 7, 'Listening', 'MP: Listening', 'content', NULL, '2018-04-07 06:23:28', '2018-04-07 06:23:53'),
(115, 7, 'Listening - content', 'MP: What\'s your audience saying about your brand? Find out, engage them, and save the day with monitoring tools ...', 'content', NULL, '2018-04-07 06:24:50', '2018-04-07 06:24:50'),
(116, 7, 'Collaboration', 'MP: Collaboration', 'content', NULL, '2018-04-07 06:25:14', '2018-04-07 06:25:14'),
(117, 7, 'Collaboration - content', 'MP: Adding multiple Team Members makes the Social media management easy and being a voice for your brand ...', 'content', NULL, '2018-04-07 06:26:49', '2018-04-07 06:26:49'),
(118, 7, 'Web & Mobile Apps', 'MP: Web & Mobile Apps', 'content', NULL, '2018-04-07 06:27:12', '2018-04-07 06:27:12'),
(119, 7, 'Web & Mobile Apps content', 'Increase social reach and productivity with our App Directory - a collection of famous applications like Instagram ...', 'content', NULL, '2018-04-07 06:27:37', '2018-04-07 06:27:37'),
(120, 8, 'banner caption 1', 'Pesatel', 'content', NULL, '2018-04-07 06:48:09', '2018-05-08 09:25:49'),
(121, 8, 'banner caption 2', 'Mobile Financial Services and Value Add Services', 'content', NULL, '2018-04-07 06:48:37', '2018-10-03 10:51:34'),
(122, 8, 'title', 'Pesatel', 'content', NULL, '2018-04-07 06:49:07', '2018-05-08 09:26:04'),
(123, 8, 'subtitle', 'Mobile Financial Services and Value Add Services platform', 'content', NULL, '2018-04-07 06:49:44', '2018-10-03 10:53:15'),
(124, 8, 'Feature content', 'Pesatel platform is developed to provide robust and differentiated financial services, expand revenue streams, add a \"sticky\" element to product offering for Mobile Network Operators, Banks, Independent Mobile Money Service providers among others.<br/>\r\nPesatel uses USSD, STK, Mobile App, Web, IVR, ATMs, Card systems as the access channels to interact with the subscribers.', 'content', NULL, '2018-04-07 06:50:03', '2018-10-03 10:58:26'),
(125, 8, 'Pesatel Financial Management System', 'Pesatel Financial Management System', 'content', NULL, '2018-04-07 06:50:39', '2018-05-08 09:27:46'),
(126, 8, 'Pesatel Services and Features', 'Pesatel Services and Features', 'content', NULL, '2018-04-07 06:50:56', '2018-05-08 09:28:43'),
(127, 8, 'Sacco Management System', 'Sacco Management System', 'content', NULL, '2018-04-07 06:51:50', '2018-05-08 09:33:13'),
(128, 8, 'Sacco Management System - content', 'This allows Sacco Members and organisations to view and manage Sacco Service according to the Saccos policies and procedures in the organisation', 'content', NULL, '2018-04-07 06:52:08', '2018-10-04 06:02:30'),
(129, 8, 'Bulk Sms', 'Bulk Sms', 'content', NULL, '2018-04-07 06:53:23', '2018-05-08 09:33:34'),
(130, 8, 'Bulk Sms - content', 'This allows organisations to send messages to there members in bulk.', 'content', NULL, '2018-04-07 06:54:04', '2018-05-08 09:38:59'),
(131, 8, 'Disbursements', 'Disbursements', 'content', NULL, '2018-04-07 06:55:47', '2018-05-08 09:33:58'),
(132, 8, 'Disbursements - content', 'Pesatel allows organisations to send Disbursement to there members or clients in bulk.', 'content', NULL, '2018-04-07 06:57:05', '2018-05-08 09:40:48'),
(133, 8, 'Do More With Social Media', 'mp Do More With Social Media', 'content', NULL, '2018-04-07 06:57:42', '2018-04-07 06:57:42'),
(134, 8, 'Hello, We Are Metrics', 'mp Hello, We Are Metrics', 'content', NULL, '2018-04-07 06:58:04', '2018-04-07 06:58:04'),
(135, 8, 'Social Analytics', 'mp Social Analytics', 'content', NULL, '2018-04-07 06:58:32', '2018-04-07 06:58:32'),
(136, 8, 'Social Analytics - content', 'mp: Metrics social media analytics give you an in-depth view of how well your social media efforts are being received ...', 'content', NULL, '2018-04-07 06:58:58', '2018-04-07 06:58:58'),
(137, 8, 'Security', 'mp Security', 'content', NULL, '2018-04-07 06:59:43', '2018-04-07 06:59:43'),
(138, 8, 'Security - content', 'mp: Security is no joke. Reputations, assets, and financials are all at stake. Metrics secure logins, profile protections ...', 'content', NULL, '2018-04-07 07:00:04', '2018-04-07 07:00:04'),
(139, 8, 'Engagement', 'mp Engagement', 'content', NULL, '2018-04-07 07:00:46', '2018-04-07 07:00:46'),
(140, 8, 'Engagement - content', 'With the ability to manage all your social networks , we gives you a wide scope of your social media activity ...', 'content', NULL, '2018-04-07 07:01:05', '2018-04-07 07:01:05'),
(141, 8, 'Listening', 'mp Listening', 'content', NULL, '2018-04-07 07:01:24', '2018-04-07 07:01:24'),
(142, 8, 'Listening - content', 'mp What\'s your audience saying about your brand? Find out, engage them, and save the day with monitoring tools ...', 'content', NULL, '2018-04-07 07:01:49', '2018-04-07 07:01:49'),
(143, 8, 'Collaboration', 'mp Collaboration', 'content', NULL, '2018-04-07 07:02:04', '2018-04-07 07:02:04'),
(144, 8, 'Collaboration - content', 'mp: Adding multiple Team Members makes the Social media management easy and being a voice for your brand ...', 'content', NULL, '2018-04-07 07:02:22', '2018-04-07 07:02:22'),
(145, 8, 'Web & Mobile Apps', 'mp Web & Mobile Apps', 'content', NULL, '2018-04-07 07:02:46', '2018-04-07 07:02:46'),
(146, 8, 'Web & Mobile Apps -content', 'mp: Increase social reach and productivity with our App Directory - a collection of famous applications like Instagram ...', 'content', NULL, '2018-04-07 07:03:22', '2018-04-07 07:03:35'),
(147, 9, 'banner caption 1', 'Ultraciti', 'content', NULL, '2018-04-07 07:23:26', '2018-05-08 09:10:17'),
(148, 9, 'banner caption 2', 'Real Estate and property Platform', 'content', NULL, '2018-04-07 07:23:48', '2018-05-08 09:11:55'),
(149, 9, 'title', 'Ultraciti', 'content', NULL, '2018-04-07 07:24:22', '2018-05-08 09:10:06'),
(150, 9, 'sub title', 'Buyer Seller Platform', 'content', NULL, '2018-04-07 07:24:48', '2018-05-08 09:10:50'),
(151, 9, 'Feature content', 'Ultracity is a Real Esatate Systems that helps client and home owners interact and do business. it also also people find houses to rent and buy property.', 'content', NULL, '2018-04-07 07:25:08', '2018-05-08 06:29:02'),
(152, 9, 'ContentArea Right', 'Ultraciti, Land, Property, Platform', 'content', NULL, '2018-04-07 07:25:34', '2018-05-08 09:13:00'),
(153, 9, 'ContentArea Left', 'Ultraciti Features and Services', 'content', NULL, '2018-04-07 07:25:48', '2018-05-08 09:13:32'),
(154, 9, 'Buy Property', 'Buy Property', 'content', NULL, '2018-04-07 07:26:07', '2018-05-08 09:14:56'),
(155, 9, 'Buy Property - content', 'Ultraciti allows You to search, find and buy property that best suits you.', 'content', NULL, '2018-04-07 07:26:31', '2018-05-08 09:17:39'),
(156, 9, 'Sale Property', 'Sale Property', 'content', NULL, '2018-04-07 07:26:54', '2018-05-08 09:15:28'),
(157, 9, 'Sale Property - content', 'If you have a property that you want to sell, ultraciti will enable you to find suitable clients who will buy your property', 'content', NULL, '2018-04-07 07:27:12', '2018-05-08 09:19:48'),
(158, 9, 'Rent a House', 'Rent a House', 'content', NULL, '2018-04-07 07:27:35', '2018-05-08 09:20:41'),
(159, 9, 'Rent a House - property', 'Ultraciti will also allow you to find a house to rent according to you budget.', 'content', NULL, '2018-04-07 07:30:34', '2018-05-08 09:21:53'),
(160, 9, 'Do More With Social Media', 'mp: Do More With Social Media', 'content', NULL, '2018-04-07 07:31:16', '2018-04-07 07:31:16'),
(161, 9, 'Hello, We Are Metrics', 'MP: Hello, We Are Metrics', 'content', NULL, '2018-04-07 07:31:54', '2018-04-07 07:31:54'),
(162, 9, 'Social Analytics', 'MP: Social Analytics', 'content', NULL, '2018-04-07 07:32:52', '2018-04-07 07:32:52'),
(163, 9, 'Social Analytics - content', 'MP: Metrics social media analytics give you an in-depth view of how well your social media efforts are being received ...', 'content', NULL, '2018-04-07 07:33:29', '2018-04-07 07:33:29'),
(164, 9, 'Security', 'Security', 'content', NULL, '2018-04-07 07:33:52', '2018-04-07 07:34:04'),
(165, 9, 'Security - content', 'mp Security is no joke. Reputations, assets, and financials are all at stake. Metrics secure logins, profile protections ...', 'content', NULL, '2018-04-07 07:34:19', '2018-04-07 07:34:38'),
(166, 9, 'Engagement', 'MP: Engagement', 'content', NULL, '2018-04-07 07:37:32', '2018-04-07 07:37:32'),
(167, 9, 'Engagement - content', 'MP: With the ability to manage all your social networks , we gives you a wide scope of your social media activity ...', 'content', NULL, '2018-04-07 07:37:58', '2018-04-07 07:37:58'),
(168, 9, 'Listening', 'MP: Listening', 'content', NULL, '2018-04-07 07:38:15', '2018-04-07 07:38:15'),
(169, 9, 'Listening - content', 'MP: What\'s your audience saying about your brand? Find out, engage them, and save the day with monitoring tools ...', 'content', NULL, '2018-04-07 07:38:43', '2018-04-07 07:38:43'),
(170, 9, 'Collaboration', 'MP: Collaboration', 'content', NULL, '2018-04-07 07:38:58', '2018-04-07 07:38:58'),
(171, 9, 'Collaboration - content', 'MP: Adding multiple Team Members makes the Social media management easy and being a voice for your brand ...', 'content', NULL, '2018-04-07 07:39:18', '2018-04-07 07:39:18'),
(172, 9, 'Web & Mobile Apps', 'MP: Web & Mobile Apps', 'content', NULL, '2018-04-07 07:39:44', '2018-04-07 07:40:00'),
(173, 9, 'Web & Mobile Apps -content', 'MP: Increase social reach and productivity with our App Directory - a collection of famous applications like Instagram ...', 'content', NULL, '2018-04-07 07:40:30', '2018-04-07 07:40:30'),
(175, 10, 'banner caption 1', 'Mobile Solutions', 'content', NULL, '2018-04-09 02:59:37', '2018-10-03 05:26:27'),
(176, 10, 'banner caption 2', 'We’re an award-winning Software Company based in Kenya.', 'content', NULL, '2018-04-09 02:59:59', '2018-10-03 05:27:47'),
(177, 10, 'ContentArea Right', 'Choose your plan', 'content', NULL, '2018-04-09 03:00:23', '2018-10-03 06:18:06'),
(178, 10, 'ContentArea Left', 'Join Our Successful Customers', 'content', NULL, '2018-04-09 03:00:42', '2018-10-03 06:18:39'),
(179, 10, 'Mobile Solutions title', 'Bespoke Mobile Solutions', 'content', NULL, '2018-04-09 03:01:06', '2018-10-03 07:59:46'),
(180, 10, 'Bespoke solutions- content 1', 'Mobile Apps', 'content', NULL, '2018-04-09 03:01:48', '2018-10-03 08:14:30'),
(181, 10, 'Bespoke solutions - content 2', 'USSD Solutions', 'content', NULL, '2018-04-09 03:02:15', '2018-10-03 08:14:51'),
(182, 10, 'Bespoke solutions - content 3', 'SMS Solutions', 'content', NULL, '2018-04-09 03:02:34', '2018-10-03 08:15:06'),
(183, 10, 'Bespoke solutions - content 4', 'Integration Solutions', 'content', NULL, '2018-04-09 03:02:54', '2018-10-03 08:15:20'),
(184, 10, 'Bespoke solutions - content 5', 'IVR and Mobile Ads', 'content', NULL, '2018-04-09 03:03:24', '2018-10-03 08:15:34'),
(185, 10, 'Mobile Banking - title', 'Mobile Banking Solutions', 'content', NULL, '2018-04-09 03:03:50', '2018-10-03 08:04:41'),
(186, 10, 'Mobile Banking - content 1', 'Mobile Apps for Banks', 'content', NULL, '2018-04-09 03:04:09', '2018-10-03 08:05:48'),
(187, 10, 'Mobile Banking - content 2', 'SMS & USSD Banking Solutions', 'content', NULL, '2018-04-09 03:04:55', '2018-10-03 08:06:15'),
(188, 10, 'Mobile Banking - content 3', 'Agency Banking', NULL, NULL, '2018-04-09 03:05:18', '2018-10-03 08:06:47'),
(189, 10, 'Mobile Banking - content 4', 'Banking Integration Solutions', 'content', NULL, '2018-04-09 03:05:38', '2018-10-03 08:07:22'),
(190, 10, 'Mobile Banking - content 5', 'Bank Alerts and Notifications Solutions', 'content', NULL, '2018-04-09 03:06:36', '2018-10-03 08:07:57'),
(191, 10, 'Mobile VAS - title', 'Mobile VAS Solutions', 'content', NULL, '2018-04-09 03:07:15', '2018-10-03 08:09:01'),
(192, 10, 'Mobile VAS- Content 1', 'SMS Aggregation Gateway', 'content', NULL, '2018-04-09 03:07:42', '2018-10-03 08:09:39'),
(193, 11, 'banner Caption 1', 'IT Infrastructure', 'content', NULL, '2018-04-09 03:17:11', '2018-10-03 07:04:37'),
(194, 11, 'banner caption 2', 'We’re an award-winning Software Company based in Kenya.', 'content', NULL, '2018-04-09 03:17:46', '2018-10-03 08:17:40'),
(195, 11, 'IP Networks - title', 'IP Networks', 'content', NULL, '2018-04-09 03:18:07', '2018-10-03 07:28:44'),
(196, 11, 'IP Networks - content', 'Network Design,<br/>Transformation & Optimization<br/>\r\nCore Networking<br/>\r\nData Center Networking<br/>\r\nAccess Networking', 'content', NULL, '2018-04-09 03:18:24', '2018-10-03 08:21:25'),
(197, 11, 'Datacenter solutions - title', 'Datacenter Solutions', 'content', NULL, '2018-04-09 03:19:06', '2018-10-03 08:23:57'),
(198, 11, 'Datacenter Solutions- content', 'Design & Cabling<br/>\r\nFloor & Cooling<br/>\r\nFire Protection<br/>\r\nAccess Control System<br/>\r\nCCTV System', 'content', NULL, '2018-04-09 03:19:28', '2018-10-03 08:26:01'),
(199, 11, 'Managed Network- title', 'Managed Network Services', 'content', NULL, '2018-04-09 03:19:41', '2018-10-03 08:27:30'),
(200, 11, 'Managed Network  - content', 'WAN QoS & SLA Management<br/>\r\nServer Management<br/>\r\nDatacenter Network Support & Management<br/>\r\nLAN, PC & Telephony Support & Management', 'content', NULL, '2018-04-09 03:20:09', '2018-10-03 08:29:25'),
(201, 11, 'Network Communications - title', 'Network Communications', 'content', NULL, '2018-04-09 03:20:23', '2018-10-03 07:39:20'),
(202, 11, 'Network Communications - content', 'Datacenter Backbone Cabling<br/>\r\nStructured Cabling<br/>\r\nWireless, Fiber & VSAT Installations<br/>\r\nInstallation of Integrated Reception System (IRS)', 'content', NULL, '2018-04-09 03:20:40', '2018-10-03 08:31:48'),
(203, 11, 'Listening', 'MP: Listening', 'content', NULL, '2018-04-09 03:21:06', '2018-04-09 03:34:25'),
(204, 11, 'Organize your Campaigns', 'MP: Organize your Campaigns', 'content', NULL, '2018-04-09 03:21:26', '2018-04-09 03:21:26'),
(205, 11, 'Organize your Campaigns content', 'MP: View full Twitter conversation histories, customize contact records and share notes across your team in order to build a more complete customer profile.', 'content', NULL, '2018-04-09 03:21:50', '2018-04-09 03:21:50'),
(206, 11, 'Monitor All your Data', 'MP: Monitor All your Data', 'content', NULL, '2018-04-09 03:22:12', '2018-04-09 03:22:12'),
(207, 11, 'Monitor All your Data - content', 'MP: Dig into profile and post-level insights, as well as trends across messages and team responsiveness to better understand brand and team performance.', 'content', NULL, '2018-04-09 03:22:58', '2018-04-09 03:22:58'),
(208, 11, 'Quick & Easy Integrations', 'MP: Quick & Easy Integrations', 'content', NULL, '2018-04-09 03:23:21', '2018-04-09 03:23:21'),
(209, 11, 'Quick & Easy Integrations -Content', 'MP: Set up autonomous groups to organize internal teams and social proﬁle arrangements to make your unique organizational structure.', 'content', NULL, '2018-04-09 03:23:42', '2018-04-09 03:23:42'),
(210, 11, 'Listening - content', 'MP: What\'s your audience saying about your brand? Find out, engage them, and save the day with monitoring.', 'content', NULL, '2018-04-09 03:32:44', '2018-04-09 03:32:44'),
(211, 12, 'banner caption 1', 'Security', 'content', NULL, '2018-04-09 03:41:47', '2018-10-03 08:50:18'),
(212, 12, 'banner caption 2 - subtitle', 'We’re an award-winning Software Company based in Kenya.', 'content', NULL, '2018-04-09 03:42:25', '2018-10-03 08:53:36'),
(214, 12, 'Physical Security - title', 'Physical Security Solutions', 'content', NULL, '2018-04-09 03:44:17', '2018-10-03 09:06:00'),
(215, 12, 'Physical Security - content', 'CCTV & Surveillance systems<br/>\r\nAccess Controll System<br/>\r\nElectronic Alarm Systems<br/>\r\nElectronic Asset Tagging and <br/>\r\nGeo Fencing System', 'content', NULL, '2018-04-09 03:44:58', '2018-10-03 09:08:07'),
(216, 12, 'IP Network Security  - title', 'IP Network Security', 'content', NULL, '2018-04-09 03:45:29', '2018-10-03 09:15:22'),
(217, 12, 'IP Network Security - content', 'Firewalls & Unified Threat Management Systems (UTMs)<br/>\r\nData Leakage Protection Systems (DLPs)<br/>\r\nNetwork Access Control Systems<br/>\r\nNetwork Security, Audit and Management<br/>\r\nVirtual Private Networks (VPNs)', 'content', NULL, '2018-04-09 03:45:52', '2018-10-03 09:11:33'),
(218, 12, 'Software Security -title', 'Software Security', 'content', NULL, '2018-04-09 03:46:08', '2018-10-03 09:15:32'),
(219, 12, 'Software Security - content', 'Antivirus, Anti-Malware, Anti-Ransomware<br/>\r\nEnd-Point Security<br/>\r\nInternet Security<br/>\r\nContent Security', 'content', NULL, '2018-04-09 03:46:23', '2018-10-03 09:14:21'),
(220, 12, 'Storage - title', 'Storage security', 'content', NULL, '2018-04-09 03:46:36', '2018-10-03 09:17:23'),
(221, 12, 'Storage security - content', 'Storage Area Networks <br/>\r\nNetwork Attached Storage<br/>\r\nBackups<br/>\r\nDigitization<br/>\r\nArchiving', 'content', NULL, '2018-04-09 03:46:56', '2018-10-03 09:19:19'),
(222, 12, 'Listening', 'MP: Listening', 'content', NULL, '2018-04-09 03:47:09', '2018-04-09 03:47:09'),
(223, 12, 'Listening- content', 'MP: What\'s your audience saying about your brand? Find out, engage them, and save the day with monitoring.', 'content', NULL, '2018-04-09 03:47:37', '2018-10-03 09:00:49'),
(224, 12, 'Organize your Campaigns', 'MP: Organize your Campaigns', 'content', NULL, '2018-04-09 03:48:03', '2018-04-09 03:48:03'),
(225, 12, 'Organize your Campaigns - Content', 'MP: View full Twitter conversation histories, customize contact records and share notes across your team in order to build a more complete customer profile.', 'content', NULL, '2018-04-09 03:48:29', '2018-04-09 03:48:29'),
(226, 12, 'Monitor All your Data', 'MP:  Monitor All your Data', 'content', NULL, '2018-04-09 03:48:56', '2018-04-09 03:48:56'),
(227, 12, 'Monitor All your Data - content', 'MP: Dig into profile and post-level insights, as well as trends across messages and team responsiveness to better understand brand and team performance.', 'content', NULL, '2018-04-09 03:49:26', '2018-04-09 03:49:26'),
(228, 12, 'Quick & Easy Integrations', 'MP: Quick & Easy Integrations', 'content', NULL, '2018-04-09 03:49:46', '2018-04-09 03:49:46'),
(229, 12, 'Quick & Easy Integrations -Content', 'MP: Set up autonomous groups to organize internal teams and social proﬁle arrangements to make your unique organizational structure.', 'content', NULL, '2018-04-09 03:50:07', '2018-04-09 03:50:07'),
(230, 13, 'banner Caption 1', 'Software', 'content', NULL, '2018-04-09 04:01:33', '2018-10-03 08:10:40'),
(231, 13, 'banner caption 2 - subtitle', 'We’re an award-winning Software Company based in Kenya.', 'content', NULL, '2018-04-09 04:02:11', '2018-10-03 08:46:44'),
(232, 13, 'Operating Systems - title', 'Operating Systems & Applications', 'content', NULL, '2018-04-09 04:02:58', '2018-10-03 08:37:35'),
(233, 13, 'Operating Systems - content', 'Microsoft Windows Server<br/>\r\nMicrosoft Windows<br/>\r\nMicrosoft Office', 'content', NULL, '2018-04-09 04:03:19', '2018-10-03 08:38:46'),
(234, 13, 'BI & Analytic - title', 'BI  & Analytic Systems', 'content', NULL, '2018-04-09 04:04:00', '2018-10-03 08:40:33'),
(235, 13, 'BI & Analytic- content', 'Microsoft BI<br/>\r\nTibco Jaspersoft<br/>\r\nTibco Spotfire<br/>\r\nPentaho', 'content', NULL, '2018-04-09 04:04:32', '2018-10-03 08:41:38'),
(236, 13, 'Database Management - title', 'Database Management Systems', 'content', NULL, '2018-04-09 04:05:16', '2018-10-03 08:42:57'),
(237, 13, 'Database Management - content', 'Microsoft SQL<br/>\r\nOracle', 'content', NULL, '2018-04-09 04:05:37', '2018-10-03 08:43:30'),
(238, 13, 'MFI & SACCO - title', 'MFI & SACCO Systems', 'content', NULL, '2018-04-09 04:05:57', '2018-10-03 08:44:38'),
(239, 13, 'MFI & SACCO - content', 'Pesatel Core Banking<br/>\r\nMicrosoft Dynamics', 'content', NULL, '2018-04-09 04:06:23', '2018-10-03 08:45:28'),
(240, 13, 'Listening', 'MP: Listening', 'content', NULL, '2018-04-09 04:06:48', '2018-04-09 04:06:48'),
(241, 13, 'Listening - content', 'MP: What\'s your audience saying about your brand? Find out, engage them, and save the day with monitoring.', 'content', NULL, '2018-04-09 04:07:07', '2018-04-09 04:07:07'),
(242, 13, 'Organize your Campaigns', 'MP: Organize your Campaigns', 'content', NULL, '2018-04-09 04:07:29', '2018-04-09 04:07:29'),
(243, 13, 'Organize your Campaigns - Content', 'MP: View full Twitter conversation histories, customize contact records and share notes across your team in order to build a more complete customer profile.', 'content', NULL, '2018-04-09 04:07:55', '2018-04-09 04:07:55'),
(244, 13, 'Monitor All your Data', 'MP: Monitor All your Data', 'content', NULL, '2018-04-09 04:08:12', '2018-04-09 04:08:12'),
(245, 13, 'Monitor All your Data - content', 'MP: Dig into profile and post-level insights, as well as trends across messages and team responsiveness to better understand brand and team performance.', 'content', NULL, '2018-04-09 04:08:50', '2018-04-09 04:08:50'),
(246, 13, 'Quick & Easy Integrations', 'Quick & Easy Integrations', 'content', NULL, '2018-04-09 04:09:13', '2018-04-09 04:09:13'),
(247, 13, 'Quick & Easy Integrations -Content', 'MP: Set up autonomous groups to organize internal teams and social proﬁle arrangements to make your unique organizational structure.', 'content', NULL, '2018-04-09 04:09:33', '2018-04-09 04:09:33'),
(249, 4, 'Solution 5: title', 'Hardware', 'Hardware title', NULL, '2018-10-01 10:20:41', '2018-10-01 10:38:34'),
(250, 4, 'Solution 5: content', 'We supply value add ICT equipment<br/>\r\nComputing Solutions<br/>\r\nNetwork  Solutions\r\nPower Solutions<br/>\r\nUnified Communication and Collaboration (UCC) Solutions<br/>\r\nStorage Solutions<br/>\r\nSecurity Solutions', 'content', NULL, '2018-10-01 10:25:57', '2018-10-03 06:29:21'),
(251, 4, 'Content 6: title', 'Internet', 'content', NULL, '2018-10-02 02:29:57', '2018-10-02 02:29:57'),
(252, 4, 'Content 6: Content', 'We Plan, Build, Support, Manage, Improve and Innovate.', 'Content', NULL, '2018-10-02 02:32:52', '2018-10-02 02:32:52'),
(253, 10, 'Mobile VAS- Content 2', 'USSD Aggregation Gateway', 'content', NULL, '2018-10-03 06:48:49', '2018-10-03 08:10:09'),
(254, 10, 'Mobile VAS- Content 3', 'Airtime Recharge', 'content', NULL, '2018-10-03 06:50:14', '2018-10-03 08:10:54'),
(255, 10, 'Mobile VAS - Content 4', 'Premium Rate Services platform', 'content', NULL, '2018-10-03 06:50:51', '2018-10-03 08:11:27'),
(256, 10, 'Mobile VAS- Content 5', '_', 'content', NULL, '2018-10-03 06:51:39', '2018-10-03 08:16:01'),
(257, 14, 'Hardware title', 'Hardware', 'content', NULL, '2018-10-03 09:17:02', '2018-10-03 09:17:02'),
(258, 14, 'Subtitle', 'We’re an award-winning Software Company based in Kenya.', 'content', NULL, '2018-10-03 09:18:04', '2018-10-03 11:15:45'),
(259, 14, 'Computing Solutions -title', 'Computing Solutions', 'content', NULL, '2018-10-03 09:19:08', '2018-10-03 11:16:56'),
(260, 14, 'Computing Solutions -content', 'Servers<br/>\r\nCommercial Desktops<br/>\r\nCommercial Laptops<br/>\r\nExecutive Laptops<br/>\r\nSpecial Purpose Laptops', 'content', NULL, '2018-10-03 09:20:20', '2018-10-03 11:18:53'),
(261, 14, 'Network Solutions -title', 'Network Solutions', 'content', NULL, '2018-10-03 09:21:02', '2018-10-03 11:21:38'),
(262, 14, 'Network Solutions - content', 'Routers, Switches, Firewalls and UTMs<br/>\r\nLoadbalancers and Application Delivery Controllers (ADCs)<br/>\r\nNetwork Cables, Tools & Accessories<br/>\r\nServer Racks & Communication enclosures', 'content', NULL, '2018-10-03 09:21:43', '2018-10-03 11:22:56'),
(263, 14, 'UCC Solutions -title', 'UCC Solutions', 'content', NULL, '2018-10-03 09:22:25', '2018-10-03 11:24:41'),
(264, 14, 'UCC Solutions - content', 'IPBX<br/>\r\nIP Phones<br/>\r\nContact Centers', 'content', NULL, '2018-10-03 09:23:12', '2018-10-03 11:26:07'),
(265, 14, 'Security Solutions- title', 'Security Solutions', 'content', NULL, '2018-10-03 09:24:29', '2018-10-03 11:26:39'),
(266, 14, 'Security Solutions 4 - content', 'CCTV Cameras<br/>\r\nAccess Control Systems<br/>\r\nAlarm Systems<br/>', 'content', NULL, '2018-10-03 09:25:06', '2018-10-03 11:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_04_05_084739_create_pages_table', 2),
(6, '2018_04_05_090433_create_contents_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HomePage', 'Landing Page', NULL, 'website Landing Page', '2018-04-06 08:26:59', '2018-04-06 08:26:59'),
(2, 'About', 'about us page', NULL, 'anout us content', '2018-04-06 09:24:13', '2018-04-06 09:24:13'),
(3, 'Products', 'Products Page', NULL, 'This is the main products page', '2018-04-06 11:11:34', '2018-04-06 11:11:34'),
(4, 'Solutions', 'solution page', NULL, 'this is the offical solutions page', '2018-04-06 11:36:39', '2018-04-06 11:36:39'),
(5, 'Contact Page', 'Contact Pages', NULL, 'Official contact Page', '2018-04-06 11:59:25', '2018-04-06 11:59:25'),
(6, 'Alana', 'Alana product page', NULL, 'this is the page that show alana product in detail', '2018-04-07 04:53:50', '2018-10-03 06:53:11'),
(7, 'Nexcom', 'Nexcom Page', NULL, 'Nexcom Page', '2018-04-07 06:10:17', '2018-10-02 15:49:08'),
(8, 'Pesatel', 'pesatel page', NULL, 'Pesatel official page', '2018-04-07 06:47:20', '2018-05-08 06:16:09'),
(9, 'Ultracity', 'ultra city Page', NULL, 'ultracity page', '2018-04-07 07:22:38', '2018-04-07 07:22:38'),
(10, 'Mobile Solutions', 'Mobile Solutions Page', NULL, 'Official Mobile Solutions', '2018-04-09 02:59:13', '2018-10-03 05:27:15'),
(11, 'IT Infrustructure', 'IT Infrastructure', NULL, 'IT Infrastructure official page', '2018-04-09 03:16:32', '2018-10-03 06:34:59'),
(12, 'Security', 'Security Solution Page', NULL, 'Solution page', '2018-04-09 03:41:27', '2018-04-09 03:41:27'),
(13, 'Software', 'Software Page', NULL, 'Software Page', '2018-04-09 04:00:23', '2018-04-09 04:00:23'),
(14, 'Hardware', 'hardware page', NULL, 'content', '2018-10-03 09:15:56', '2018-10-03 09:15:56');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'config@directcore.com', '$2y$10$eXUDyGdashjM6x/in60tFuY1P57simjCk865JIPEpaO2ggS8Rf5V.', 'rcwKTDy99LIGH0Z5RKSoaxRA62sACugCGQvMrHbzmUNETLheVhmRAIiCpxRd', '2018-04-05 06:19:30', '2018-04-05 06:19:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
