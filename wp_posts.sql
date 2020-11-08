-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 12:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kids`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(14, 1, '2020-11-05 17:11:01', '2020-11-05 17:11:01', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->\n\n<!-- wp:paragraph -->\n<p>ok la</p>\n<!-- /wp:paragraph -->', 'game 1 level 1', '', 'publish', 'open', 'open', '', '14', '', '', '2020-11-08 10:27:10', '2020-11-08 10:27:10', '', 0, 'http://localhost/press/kid/?p=14', 0, 'post', '', 0),
(15, 1, '2020-11-05 17:10:54', '2020-11-05 17:10:54', '', '111', '', 'inherit', 'open', 'closed', '', '111', '', '', '2020-11-05 17:10:54', '2020-11-05 17:10:54', '', 14, 'http://localhost/press/kid/wp-content/uploads/2020/11/111-2.png', 0, 'attachment', 'image/png', 0),
(16, 1, '2020-11-05 17:11:01', '2020-11-05 17:11:01', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 1 level 1', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2020-11-05 17:11:01', '2020-11-05 17:11:01', '', 14, 'http://localhost/press/kid/2020/11/05/14-revision-v1/', 0, 'revision', '', 0),
(17, 1, '2020-11-05 17:11:45', '2020-11-05 17:11:45', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 2 level 1', '', 'publish', 'open', 'open', '', 'game-2-level-1', '', '', '2020-11-05 17:11:45', '2020-11-05 17:11:45', '', 0, 'http://localhost/press/kid/?p=17', 0, 'post', '', 0),
(18, 1, '2020-11-05 17:11:45', '2020-11-05 17:11:45', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 2 level 1', '', 'inherit', 'closed', 'closed', '', '17-revision-v1', '', '', '2020-11-05 17:11:45', '2020-11-05 17:11:45', '', 17, 'http://localhost/press/kid/2020/11/05/17-revision-v1/', 0, 'revision', '', 0),
(19, 1, '2020-11-05 17:12:35', '2020-11-05 17:12:35', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 3 level 1', '', 'publish', 'open', 'open', '', 'game-3-level-1', '', '', '2020-11-05 17:12:35', '2020-11-05 17:12:35', '', 0, 'http://localhost/press/kid/?p=19', 0, 'post', '', 0),
(20, 1, '2020-11-05 17:12:35', '2020-11-05 17:12:35', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 3 level 1', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2020-11-05 17:12:35', '2020-11-05 17:12:35', '', 19, 'http://localhost/press/kid/2020/11/05/19-revision-v1/', 0, 'revision', '', 0),
(21, 1, '2020-11-05 17:13:19', '2020-11-05 17:13:19', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 4 level 1', '', 'publish', 'open', 'open', '', 'game-4-level-1', '', '', '2020-11-05 17:13:19', '2020-11-05 17:13:19', '', 0, 'http://localhost/press/kid/?p=21', 0, 'post', '', 0),
(22, 1, '2020-11-05 17:13:19', '2020-11-05 17:13:19', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 4 level 1', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2020-11-05 17:13:19', '2020-11-05 17:13:19', '', 21, 'http://localhost/press/kid/2020/11/05/21-revision-v1/', 0, 'revision', '', 0),
(23, 1, '2020-11-05 17:13:50', '2020-11-05 17:13:50', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 5 level 1', '', 'publish', 'open', 'open', '', 'game-5-level-1', '', '', '2020-11-05 17:13:50', '2020-11-05 17:13:50', '', 0, 'http://localhost/press/kid/?p=23', 0, 'post', '', 0),
(24, 1, '2020-11-05 17:13:50', '2020-11-05 17:13:50', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 5 level 1', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2020-11-05 17:13:50', '2020-11-05 17:13:50', '', 23, 'http://localhost/press/kid/2020/11/05/23-revision-v1/', 0, 'revision', '', 0),
(25, 1, '2020-11-05 17:14:24', '2020-11-05 17:14:24', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 6 level 1', '', 'publish', 'open', 'open', '', 'game-6-level-1', '', '', '2020-11-05 17:14:24', '2020-11-05 17:14:24', '', 0, 'http://localhost/press/kid/?p=25', 0, 'post', '', 0),
(26, 1, '2020-11-05 17:14:24', '2020-11-05 17:14:24', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 6 level 1', '', 'inherit', 'closed', 'closed', '', '25-revision-v1', '', '', '2020-11-05 17:14:24', '2020-11-05 17:14:24', '', 25, 'http://localhost/press/kid/2020/11/05/25-revision-v1/', 0, 'revision', '', 0),
(27, 1, '2020-11-05 17:14:57', '2020-11-05 17:14:57', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 7 level 1', '', 'publish', 'open', 'open', '', 'game-7-level-1', '', '', '2020-11-05 17:14:57', '2020-11-05 17:14:57', '', 0, 'http://localhost/press/kid/?p=27', 0, 'post', '', 0),
(28, 1, '2020-11-05 17:14:57', '2020-11-05 17:14:57', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 7 level 1', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2020-11-05 17:14:57', '2020-11-05 17:14:57', '', 27, 'http://localhost/press/kid/2020/11/05/27-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2020-11-05 17:15:24', '2020-11-05 17:15:24', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 1 level 2', '', 'publish', 'open', 'open', '', 'game-1-level-2', '', '', '2020-11-05 17:15:24', '2020-11-05 17:15:24', '', 0, 'http://localhost/press/kid/?p=29', 0, 'post', '', 0),
(30, 1, '2020-11-05 17:15:24', '2020-11-05 17:15:24', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->', 'game 1 level 2', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2020-11-05 17:15:24', '2020-11-05 17:15:24', '', 29, 'http://localhost/press/kid/2020/11/05/29-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2020-11-05 18:02:12', '2020-11-05 18:02:12', '', 'page', '', 'publish', 'closed', 'closed', '', 'page', '', '', '2020-11-05 18:02:12', '2020-11-05 18:02:12', '', 0, 'http://localhost/press/kid/?page_id=31', 0, 'page', '', 0),
(32, 1, '2020-11-05 18:02:12', '2020-11-05 18:02:12', '', 'page', '', 'inherit', 'closed', 'closed', '', '31-revision-v1', '', '', '2020-11-05 18:02:12', '2020-11-05 18:02:12', '', 31, 'http://localhost/press/kid/2020/11/05/31-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2020-11-07 17:25:06', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2020-11-07 17:25:06', '0000-00-00 00:00:00', '', 0, 'http://localhost/press/kid/?p=33', 0, 'post', '', 0),
(34, 1, '2020-11-07 17:48:51', '2020-11-07 17:48:51', '', '1', '', 'publish', 'closed', 'closed', '', '1-2', '', '', '2020-11-07 17:48:51', '2020-11-07 17:48:51', '', 0, 'http://localhost/press/kid/?page_id=34', 0, 'page', '', 0),
(35, 1, '2020-11-07 17:48:51', '2020-11-07 17:48:51', '', '1', '', 'inherit', 'closed', 'closed', '', '34-revision-v1', '', '', '2020-11-07 17:48:51', '2020-11-07 17:48:51', '', 34, 'http://localhost/press/kid/2020/11/07/34-revision-v1/', 0, 'revision', '', 0),
(36, 1, '2020-11-08 10:15:50', '2020-11-08 10:15:50', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'game 1 level 1', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2020-11-08 10:15:50', '2020-11-08 10:15:50', '', 14, 'http://localhost/press/kid/2020/11/08/14-revision-v1/', 0, 'revision', '', 0),
(37, 1, '2020-11-08 10:16:00', '2020-11-08 10:16:00', '<!-- wp:html -->\n<iframe src=\"https://wanted5games.com/games/html5/balls-and-bricks-new-en-s-iga-cloud/index.html?pub=10\" class=\"wp-embed-frame \" frameborder=\"0\"></iframe>\n<!-- /wp:html -->\n\n<!-- wp:paragraph -->\n<p>ok la</p>\n<!-- /wp:paragraph -->', 'game 1 level 1', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2020-11-08 10:16:00', '2020-11-08 10:16:00', '', 14, 'http://localhost/press/kid/2020/11/08/14-revision-v1/', 0, 'revision', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
