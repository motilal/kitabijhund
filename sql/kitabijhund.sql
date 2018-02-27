-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 03:11 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitabijhund`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `name`, `slug`, `status`, `created`, `updated`) VALUES
(8, 'Basic', 'basic', 1, '2018-02-14 21:38:06', NULL),
(9, 'Political Science', 'political-science', 1, '2018-02-25 13:51:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chapters_pages`
--

CREATE TABLE `chapters_pages` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `question_answer` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapters_pages`
--

INSERT INTO `chapters_pages` (`id`, `chapter_id`, `title`, `slug`, `content`, `question_answer`) VALUES
(5, 8, 'Basic', 'basic', '<h2>Defination</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Biology is the science of life forms and living process. Aristotle is known as the father of biology.</p>\r\n\r\n<p>Parts of Biology:</p>\r\n\r\n<ol>\r\n	<li>Botany</li>\r\n	<li>Zoology</li>\r\n</ol>\r\n\r\n<h2>Botany</h2>\r\n\r\n<p>The branch of biology which deals with the study of&nbsp;<strong>plants</strong>&nbsp;is known as botany. &nbsp;Theophrastus is known as the father of botany</p>\r\n\r\n<h2>Zoology</h2>\r\n\r\n<p>The branch of biology which deals with the study of&nbsp;<strong>animals</strong>&nbsp;is known as zoology.</p>\r\n\r\n<h2>Some Common Terms</h2>\r\n\r\n<ol>\r\n	<li>Anatomy: This branch of biology deals with the internal structure and organisation of animals.</li>\r\n	<li>Biodiversity: &nbsp;Biodiversity&nbsp;refers to the variety of life. It studies the number of species in an ecosystem or on earth.</li>\r\n	<li>Biotechnology: This deals with the use of living systems and organisms to develop or make biological products. Biotechnology&nbsp;related to cellular and biomolecular processes to develop technologies and products that help improve our lives and the health of our planet.</li>\r\n	<li>Cell Biology: Also known as cytology. This deals with the study of cell</li>\r\n	<li>DNA (Deoxyribo Nucleic Acid): It is the carrier of genetic information. &nbsp;DNA is a molecule that contains the instructions an organism needs to develop, live and reproduce. These instructions are found inside every cell, and are passed down from parents to their children.</li>\r\n	<li>Ecology: The study of environment and its intersection with organisms is known as ecology.</li>\r\n	<li>Gene: The Functional and structural unit of inheritance is known as gene</li>\r\n	<li>Histology: This is the study of anatomy of cells and tissues of plants and animals.</li>\r\n	<li>Physiology: &nbsp;This deals with the function and activities of living organisms</li>\r\n	<li>Virology: This deals with the study of viruses.</li>\r\n</ol>', '');

-- --------------------------------------------------------

--
-- Table structure for table `chapters_subjects`
--

CREATE TABLE `chapters_subjects` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapters_subjects`
--

INSERT INTO `chapters_subjects` (`id`, `chapter_id`, `subject_id`) VALUES
(3, 8, 16),
(4, 9, 21);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('vhf62l4l0eml4up4n3604hat8d127lt7', '127.0.0.1', 1519563438, '__ci_last_regenerate|i:1519563318;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519562542\";last_check|i:1519562589;'),
('irdpehm0fij2v713ku50mej87onlqecs', '127.0.0.1', 1519562883, '__ci_last_regenerate|i:1519562584;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519562542\";last_check|i:1519562589;'),
('21fjadqvj6mmt7v4qaqnenu1tcop6c8m', '127.0.0.1', 1519563149, '__ci_last_regenerate|i:1519562894;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519562542\";last_check|i:1519562589;'),
('3bnm9efq75v40qfampudnjis6d9ipfcg', '127.0.0.1', 1519563807, '__ci_last_regenerate|i:1519563696;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519562542\";last_check|i:1519562589;'),
('bs32umtfas3v34kqgcf6i2ke893st6g9', '127.0.0.1', 1519567139, '__ci_last_regenerate|i:1519566847;identity|s:15:\"mohit@gmail.com\";email|s:15:\"mohit@gmail.com\";user_id|s:1:\"3\";old_last_login|s:10:\"1519562557\";last_check|i:1519566850;_subadmin_allow_actions|a:14:{i:0;s:8:\"page-add\";i:1;s:10:\"page-index\";i:2;s:9:\"page-edit\";i:3;s:11:\"page-delete\";i:4;s:11:\"page-status\";i:5;s:21:\"email_templates-index\";i:6;s:20:\"email_templates-edit\";i:7;s:22:\"email_templates-status\";i:8;s:10:\"news-index\";i:9;s:8:\"news-add\";i:10;s:9:\"news-edit\";i:11;s:11:\"news-delete\";i:12;s:11:\"news-status\";i:13;s:13:\"chapter-index\";}_subadmin_allow_module|a:4:{i:0;s:4:\"page\";i:5;s:15:\"email templates\";i:8;s:4:\"news\";i:13;s:7:\"chapter\";}'),
('ojr4qjcuabkdmblj40ulcfnin2bup4ep', '127.0.0.1', 1519569171, '__ci_last_regenerate|i:1519568952;error|s:41:\"Temporarily Locked Out.  Try again later.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('1mj6fnh043nhh7uno09u1iuv5gf0kf47', '127.0.0.1', 1519567706, '__ci_last_regenerate|i:1519567407;error|s:22:\"<p>Incorrect Login</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('qg4objtfv28p5n575ivj51p0880h929n', '127.0.0.1', 1519568030, '__ci_last_regenerate|i:1519567759;error|s:48:\"<p>Temporarily Locked Out.  Try again later.</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('pl589398ja68o7jqaf4nvmq3luqjr2rt', '127.0.0.1', 1519568215, '__ci_last_regenerate|i:1519568103;error|s:41:\"Temporarily Locked Out.  Try again later.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('s14jb2g05gurvq5aujgou2nus07jscvl', '127.0.0.1', 1519568801, '__ci_last_regenerate|i:1519568627;error|s:41:\"Temporarily Locked Out.  Try again later.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('b0conl8k8crni8vdvk2dr0084r2803sn', '127.0.0.1', 1519572207, '__ci_last_regenerate|i:1519572167;identity|s:15:\"mohit@gmail.com\";email|s:15:\"mohit@gmail.com\";user_id|s:1:\"3\";old_last_login|s:10:\"1519566850\";last_check|i:1519572206;_subadmin_allow_actions|a:14:{i:0;s:8:\"page-add\";i:1;s:10:\"page-index\";i:2;s:9:\"page-edit\";i:3;s:11:\"page-delete\";i:4;s:11:\"page-status\";i:5;s:21:\"email_templates-index\";i:6;s:20:\"email_templates-edit\";i:7;s:22:\"email_templates-status\";i:8;s:10:\"news-index\";i:9;s:8:\"news-add\";i:10;s:9:\"news-edit\";i:11;s:11:\"news-delete\";i:12;s:11:\"news-status\";i:13;s:13:\"chapter-index\";}_subadmin_allow_module|a:4:{i:0;s:4:\"page\";i:5;s:15:\"email templates\";i:8;s:4:\"news\";i:13;s:7:\"chapter\";}'),
('5u6v74g7thq49eotln4836gol5u4t58v', '127.0.0.1', 1519572984, '__ci_last_regenerate|i:1519572685;'),
('61870ia07jjg66qtu88d11ldpnbdikjc', '127.0.0.1', 1519573031, '__ci_last_regenerate|i:1519573031;'),
('ti1vn8cb0esvb6l5ar8c6pdh2tnqhovi', '127.0.0.1', 1519573729, '__ci_last_regenerate|i:1519573586;success|s:25:\"Password Reset Email Sent\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('qv533vhkt1t4ko7rt9mgiu519h6rkppb', '127.0.0.1', 1519574148, '__ci_last_regenerate|i:1519573913;success|s:29:\"Password Successfully Changed\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('aapg6e93hbq0aieumonb78appk2uq9kd', '127.0.0.1', 1519574521, '__ci_last_regenerate|i:1519574374;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('fq22f2246g92qua00847ngtiahnnh547', '127.0.0.1', 1519575242, '__ci_last_regenerate|i:1519575145;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('u276nvv68qt1pb4n5id0rpgfvusa81u9', '127.0.0.1', 1519575956, '__ci_last_regenerate|i:1519575682;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('tsi8n41kk4nu2r84jgesev38j0qo9vpe', '127.0.0.1', 1519576233, '__ci_last_regenerate|i:1519576053;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('9trc47hkvq6690rnoudlf8kp5uou0i2d', '127.0.0.1', 1519577085, '__ci_last_regenerate|i:1519576812;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('al63b3336n9nvqlkm21jheoi6nni1k98', '127.0.0.1', 1519577432, '__ci_last_regenerate|i:1519577147;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('uq9r96922q3cm74luu9jfgbq81gsge9b', '127.0.0.1', 1519577557, '__ci_last_regenerate|i:1519577487;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('5kme8r6150mqn2quadm33n5pq1bq250t', '127.0.0.1', 1519578437, '__ci_last_regenerate|i:1519578182;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('5igq62e0e85pdl49tafre7ta7tc6n2eg', '127.0.0.1', 1519578842, '__ci_last_regenerate|i:1519578544;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;success|s:34:\"Site settings updated successfully\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('cq636sad3oj73l33gqdfgpvv1g40vcm0', '127.0.0.1', 1519579130, '__ci_last_regenerate|i:1519578845;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('2arveefja1dih6bvhl80nmqb88tci0d6', '127.0.0.1', 1519579472, '__ci_last_regenerate|i:1519579176;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('q1m1fnsqbrcc4vmp5s0foe0anlem42pg', '127.0.0.1', 1519579625, '__ci_last_regenerate|i:1519579478;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519572161\";last_check|i:1519574459;'),
('imrgg3c570aknkkeri77h58kvmhufg0u', '127.0.0.1', 1519582356, '__ci_last_regenerate|i:1519582134;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519574459\";last_check|i:1519581863;'),
('b1ao9ooi8jpi60amr6c3un64eoqvucf0', '127.0.0.1', 1519582086, '__ci_last_regenerate|i:1519581791;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519574459\";last_check|i:1519581863;'),
('js01uuo2im2gaupn6v5p7ogr6295svf5', '127.0.0.1', 1519582696, '__ci_last_regenerate|i:1519582443;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519574459\";last_check|i:1519581863;'),
('5sm2qs4np687vjvfnec4guh9abauisd1', '127.0.0.1', 1519583000, '__ci_last_regenerate|i:1519582766;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519574459\";last_check|i:1519581863;'),
('49vin7khc2kb57qiv9e5ho79563nsvn9', '127.0.0.1', 1519583748, '__ci_last_regenerate|i:1519583450;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519574459\";last_check|i:1519581863;'),
('to4n450eiccale731dqrlusu0epc22q9', '127.0.0.1', 1519583772, '__ci_last_regenerate|i:1519583758;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519574459\";last_check|i:1519581863;'),
('53ndhjj7320f3vhcmv5hjrkjkuhv2c6g', '127.0.0.1', 1519619965, '__ci_last_regenerate|i:1519619888;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('jm5ikbtrrob5rss0qljpj6mag3lc7r4r', '127.0.0.1', 1519620170, '__ci_last_regenerate|i:1519620170;'),
('q154av62kqtk6mt6nt34n262f4e352po', '127.0.0.1', 1519620170, '__ci_last_regenerate|i:1519620170;'),
('cr7fqinsmsdvdbor5crp1g05hmnfdbg2', '127.0.0.1', 1519621079, '__ci_last_regenerate|i:1519620782;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('nr0jsbl43jb3r6e99s9kfjsun2tosd1i', '127.0.0.1', 1519621398, '__ci_last_regenerate|i:1519621115;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('bmti60napl5mkrh3es4i2ph75i24kvsv', '127.0.0.1', 1519621578, '__ci_last_regenerate|i:1519621465;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('r4b1sji8ta81n5ci7i93u7lfvdnel8do', '127.0.0.1', 1519623158, '__ci_last_regenerate|i:1519623158;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('pp4pcb5v3ahodj3o9m3pv628gf2a4g76', '127.0.0.1', 1519623982, '__ci_last_regenerate|i:1519623849;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('55n9vopdfnta6dl3pgtjaitsr1e4f4cl', '127.0.0.1', 1519624558, '__ci_last_regenerate|i:1519624271;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('l88c3pe0mshpl91dtu8njkiciir74j34', '127.0.0.1', 1519624815, '__ci_last_regenerate|i:1519624590;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('5fds513daeb5pkljco0tpmmjh7ubecmg', '127.0.0.1', 1519625247, '__ci_last_regenerate|i:1519624960;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('9hltkg93i8ur539e5dnls2amhnta13le', '127.0.0.1', 1519625551, '__ci_last_regenerate|i:1519625271;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('o0va8en77102sr5j60rnlsq0cpvq76v2', '127.0.0.1', 1519625773, '__ci_last_regenerate|i:1519625587;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('07uhq70vdkq22oqk8a0si0132i1cog51', '127.0.0.1', 1519626270, '__ci_last_regenerate|i:1519626115;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('jggqvr259pk4fjl1o8eaem6nlk1c8a30', '127.0.0.1', 1519627876, '__ci_last_regenerate|i:1519627580;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('38chtlj0pddqnn5iffmgpbhl26ajg7c8', '127.0.0.1', 1519628132, '__ci_last_regenerate|i:1519627887;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('vh5a8ujpdn7384n5d33ha02kp7s5ifie', '127.0.0.1', 1519628526, '__ci_last_regenerate|i:1519628226;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('c00i7dor9b2t4sql19ljkm485ordepcd', '127.0.0.1', 1519628825, '__ci_last_regenerate|i:1519628529;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('n681cjapv1l727i3uo3tq6084ukn31ip', '127.0.0.1', 1519629117, '__ci_last_regenerate|i:1519628830;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('p8m1v8aej7rh292krbf5ua2ck9i4lfu1', '127.0.0.1', 1519630125, '__ci_last_regenerate|i:1519629133;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('90edror6t600cbr4kcl2tj59kp7mmo50', '127.0.0.1', 1519630419, '__ci_last_regenerate|i:1519630130;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('t5cvt3t1v3kh2pr7knggg89hk07atbha', '127.0.0.1', 1519630654, '__ci_last_regenerate|i:1519630488;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('k2m2l8ukqgm8t5ibudn82dd29843lr7n', '127.0.0.1', 1519631342, '__ci_last_regenerate|i:1519631042;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('lgo253q6grqb8cd8o498bcln1oetgu9a', '127.0.0.1', 1519631671, '__ci_last_regenerate|i:1519631374;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519581863\";last_check|i:1519619919;'),
('5dqeq4ap8kv40sv0p99no69shbacok8n', '127.0.0.1', 1519631935, '__ci_last_regenerate|i:1519631892;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('sr1c2ooakimbm3iguhjr9sjco6j2dige', '127.0.0.1', 1519632394, '__ci_last_regenerate|i:1519632382;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('2i4ej7s6201069vlmctph6lrob54maoc', '127.0.0.1', 1519633003, '__ci_last_regenerate|i:1519632728;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('se9nskq7rmps7qkennjr1doj1tup5m68', '127.0.0.1', 1519632743, '__ci_last_regenerate|i:1519632743;'),
('jls1hu6gog48h8n5ak35p0egddk22beh', '127.0.0.1', 1519632744, '__ci_last_regenerate|i:1519632743;'),
('vjhctcp2t0f1bqsil8pdbdpret67teg2', '127.0.0.1', 1519633349, '__ci_last_regenerate|i:1519633049;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('1hcf145ufn8p1goirufmcfrljavsrkc1', '127.0.0.1', 1519633528, '__ci_last_regenerate|i:1519633353;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('44gnjlefhb0i2ft04s4drmshem4afdn9', '127.0.0.1', 1519633924, '__ci_last_regenerate|i:1519633671;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('2233q6m29p5nm4mdavu41t1maacnh0ff', '127.0.0.1', 1519634246, '__ci_last_regenerate|i:1519634242;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('ru3ts32ievimojmu3veagu1odt3p436g', '127.0.0.1', 1519634920, '__ci_last_regenerate|i:1519634711;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('hhpofqcfmicgkrogv8bf78916dges68c', '127.0.0.1', 1519635358, '__ci_last_regenerate|i:1519635060;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('tuquo97si5i3npur1e67mdnu790hqf41', '127.0.0.1', 1519635591, '__ci_last_regenerate|i:1519635363;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('510v5fktsnrnaontimak920k0d4c1511', '127.0.0.1', 1519636151, '__ci_last_regenerate|i:1519635851;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('tojaai57m7onj4r9sc53oj8ken9aljnc', '127.0.0.1', 1519636227, '__ci_last_regenerate|i:1519636158;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('1strjfai2h5pjn8duj6botfqd0mihao4', '127.0.0.1', 1519636806, '__ci_last_regenerate|i:1519636531;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('oruac1bkrfnn1u1p0di0iupjp7ca9dfa', '127.0.0.1', 1519637122, '__ci_last_regenerate|i:1519636853;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('fqderq2qm13s1kqlmqa8uo0qqnas073a', '127.0.0.1', 1519637521, '__ci_last_regenerate|i:1519637256;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('mhnib2l8luetnrhf3ba56b9u2d1vliv6', '127.0.0.1', 1519643283, '__ci_last_regenerate|i:1519643230;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519619919\";last_check|i:1519631926;'),
('i8s5o1hmj7qbu5emvit7lnrmj72nr7jo', '127.0.0.1', 1519644651, '__ci_last_regenerate|i:1519644121;identity|s:15:\"mohit@gmail.com\";email|s:15:\"mohit@gmail.com\";user_id|s:1:\"3\";old_last_login|s:10:\"1519572206\";last_check|i:1519644218;_subadmin_allow_actions|a:14:{i:0;s:8:\"page-add\";i:1;s:10:\"page-index\";i:2;s:9:\"page-edit\";i:3;s:11:\"page-delete\";i:4;s:11:\"page-status\";i:5;s:21:\"email_templates-index\";i:6;s:20:\"email_templates-edit\";i:7;s:22:\"email_templates-status\";i:8;s:10:\"news-index\";i:9;s:8:\"news-add\";i:10;s:9:\"news-edit\";i:11;s:11:\"news-delete\";i:12;s:11:\"news-status\";i:13;s:13:\"chapter-index\";}_subadmin_allow_module|a:4:{i:0;s:4:\"page\";i:5;s:15:\"email templates\";i:8;s:4:\"news\";i:13;s:7:\"chapter\";}'),
('kpmdjiblis2mlglloavh0mic7o465ovi', '127.0.0.1', 1519644717, '__ci_last_regenerate|i:1519644698;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519644093\";last_check|i:1519644701;'),
('rpo7jil459sb9gp26cl08fd6nbr09026', '127.0.0.1', 1519645596, '__ci_last_regenerate|i:1519645398;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519644093\";last_check|i:1519644701;'),
('pt0ckjrgrs74hf76u8fdumf7fbmde0b8', '127.0.0.1', 1519645974, '__ci_last_regenerate|i:1519645708;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519644093\";last_check|i:1519644701;'),
('8l87nbbobi6dm9pthddkce5p8bfk5j30', '127.0.0.1', 1519646318, '__ci_last_regenerate|i:1519646022;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519644093\";last_check|i:1519644701;'),
('6d3ajvvs36lcifpfndjfnkei8grpu8jo', '127.0.0.1', 1519646634, '__ci_last_regenerate|i:1519646335;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519644093\";last_check|i:1519644701;'),
('qppfk6idlfm1a4o001ktbfj48n1t1i4k', '127.0.0.1', 1519646811, '__ci_last_regenerate|i:1519646658;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519644093\";last_check|i:1519644701;'),
('lkuoo8oub827ill8c8tss3cac9d11pfv', '127.0.0.1', 1519647420, '__ci_last_regenerate|i:1519647133;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1519644093\";last_check|i:1519644701;'),
('tplvmfg5nvagdpadi8j8lrogqp8dud9r', '127.0.0.1', 1519649172, '__ci_last_regenerate|i:1519648879;'),
('psuopk13mu171g7qf84ec9pnrkklvm5t', '127.0.0.1', 1519647677, '__ci_last_regenerate|i:1519647484;'),
('b7k859g4n4l36fi9kcu91ok7g96pop8h', '127.0.0.1', 1519649289, '__ci_last_regenerate|i:1519649263;'),
('jd8ab4va0u17sf166b05kjer7qa9rmfj', '127.0.0.1', 1519648020, '__ci_last_regenerate|i:1519647958;'),
('2qk30dcbcg02m9pifq59pm91p6v678eh', '127.0.0.1', 1519648857, '__ci_last_regenerate|i:1519648574;error|s:30:\"<p>two_step_authentication</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `slug`, `status`, `created`, `updated`) VALUES
(3, 'SSC', 'ssc', 1, '2018-02-14 21:27:33', NULL),
(4, 'Bank', 'bank', 1, '2018-02-14 21:27:47', '2018-02-25 12:20:47'),
(5, 'RBSC', 'rbsc', 1, '2018-02-25 04:18:06', NULL),
(6, 'RPSC', 'rpsc', 1, '2018-02-25 13:47:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text,
  `variable` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `title`, `subject`, `slug`, `body`, `variable`, `created`, `updated`, `status`) VALUES
(4, 'Forgot Password', 'forgot password', 'forgot-password', '<p>Dear User,</p>\r\n\r\n<p>Your password is reset successfully,&nbsp;</p>\r\n\r\n<p>Please <a href=\"{link}\">click here</a> to create new password.</p>\r\n\r\n<p>Thank you</p>\r\n\r\n<p><strong>Regards,</strong></p>\r\n\r\n<p><strong>Kitabi Jhund</strong></p>', '{link}', '2015-09-28 17:37:15', '2018-02-26 12:19:28', 1),
(6, 'Reset Password', 'Password Reset', 'reset-password', '<p>Dear User</p>\r\n\r\n<p>As per your request , Your password has been reset</p>\r\n\r\n<p>New Password : <strong>{password} </strong></p>\r\n\r\n<p>This is auto generated password. You are advised to change your password as per you convenience.</p>\r\n\r\n<p><strong>Regards,</strong></p>\r\n\r\n<p><strong>Kitabi Jhund</strong></p>\r\n\r\n<p>&nbsp;</p>', '{password}', '2016-03-03 12:22:20', '2018-02-26 12:20:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `flash_messages`
--

CREATE TABLE `flash_messages` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'Unknown',
  `order` int(11) NOT NULL DEFAULT '1',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flash_messages`
--

INSERT INTO `flash_messages` (`id`, `key`, `value`, `group`, `order`, `updated`) VALUES
(1, 'LinkExpired', 'Sorry! This link has been expired.', 'General', 1, '2018-02-22 09:00:06'),
(2, 'InvalidRequest', 'Invalid request.', 'General', 2, '2018-02-22 09:00:06'),
(3, 'PageUpdateSuccess', 'Page updted successfully.', 'Page', 1, '2018-02-22 09:00:06'),
(4, 'PageAddSuccess', 'Page added successfully.', 'Page', 2, '2018-02-22 09:00:06'),
(5, 'PageDeleteSuccess', 'Page deleted successfully.', 'Page', 3, '2018-02-22 09:00:06'),
(6, 'PageActiveSuccess', 'Page Active Successfully.', 'Page', 4, '2018-02-22 09:00:06'),
(7, 'PageInactiveSuccess', 'Page Inactive Successfully.', 'Page', 5, '2018-02-22 09:00:06'),
(8, 'SubadminUpdateSuccess', 'Subadmin updted successfully.', 'Subadmin', 1, '2018-02-22 09:00:06'),
(9, 'SubadminAddSuccess', 'Subadmin added successfully.', 'Subadmin', 2, '2018-02-22 09:00:06'),
(10, 'SubadminPermissionUpdateSuccess', 'Your Permission Update Success.', 'Subadmin', 3, '2018-02-22 09:00:06'),
(11, 'SubadminDeleteSuccess', 'Subadmin deleted successfully.', 'Subadmin', 4, '2018-02-22 09:00:06'),
(12, 'SubadminActiveSuccess', 'Subadmin Active Successfully.', 'Subadmin', 5, '2018-02-22 09:00:06'),
(13, 'SubadminInactiveSuccess', 'Subadmin Inactive Successfully.', 'Subadmin', 6, '2018-02-22 09:00:06'),
(14, 'NewsUpdateSuccess', 'News updted successfully.', 'News', 1, '2018-02-22 09:00:06'),
(15, 'NewsAddSuccess', 'News added successfully.', 'News', 2, '2018-02-22 09:00:06'),
(16, 'NewsDeleteSuccess', 'News deleted successfully.', 'News', 3, '2018-02-22 09:00:06'),
(17, 'NewsActiveSuccess', 'News Active Successfully.', 'News', 4, '2018-02-22 09:00:06'),
(18, 'NewsInactiveSuccess', 'News Inactive Successfully.', 'News', 5, '2018-02-22 09:00:06'),
(19, 'FormAlertUpdateSuccess', 'Form Alert updted successfully.', 'Form Alert', 1, '2018-02-22 09:00:06'),
(20, 'FormAlertAddSuccess', 'Form Alert added successfully.', 'Form Alert', 2, '2018-02-22 09:00:06'),
(21, 'FormAlertDeleteSuccess', 'Form Alert deleted successfully.', 'Form Alert', 3, '2018-02-22 09:00:06'),
(22, 'FormAlertActiveSuccess', 'Form Alert Active Successfully.', 'Form Alert', 4, '2018-02-22 09:00:06'),
(23, 'FormAlertInactiveSuccess', 'Form Alert Inactive Successfully.', 'Form Alert', 5, '2018-02-22 09:00:06'),
(24, 'SubjectUpdateSuccess', 'Subject updted successfully.', 'Subject', 1, '2018-02-22 09:00:06'),
(25, 'SubjectAddSuccess', 'Subject added successfully.', 'Subject', 2, '2018-02-22 09:00:06'),
(26, 'SubjectDeleteSuccess', 'Subject deleted successfully.', 'Subject', 3, '2018-02-22 09:00:06'),
(27, 'SubjectActiveSuccess', 'Subject Active Successfully.', 'Subject', 4, '2018-02-22 09:00:06'),
(28, 'SubjectInactiveSuccess', 'Subject Inactive Successfully.', 'Subject', 5, '2018-02-22 09:00:06'),
(29, 'ChapterUpdateSuccess', 'Chapter updted successfully.', 'Chapter', 1, '2018-02-25 02:02:04'),
(30, 'ChapterAddSuccess', 'Chapter added successfully.', 'Chapter', 2, '2018-02-22 09:00:06'),
(31, 'ChapterDeleteSuccess', 'Chapter deleted successfully.', 'Chapter', 3, '2018-02-22 09:00:06'),
(32, 'ChapterActiveSuccess', 'Chapter Active Successfully.', 'Chapter', 4, '2018-02-22 09:00:06'),
(33, 'ChapterInactiveSuccess', 'Chapter Inactive Successfully.', 'Chapter', 5, '2018-02-22 09:00:06'),
(34, 'ChapterPageUpdateSuccess', 'Chapter Page updted successfully.', 'Chapter', 6, '2018-02-22 09:00:06'),
(35, 'ChapterPageAddSuccess', 'Chapter Page added successfully.', 'Chapter', 7, '2018-02-22 09:00:06'),
(36, 'ChapterPageDeleteSuccess', 'Chapter Page deleted successfully.', 'Chapter', 8, '2018-02-22 09:00:06'),
(37, 'ChapterPageActiveSuccess', 'Chapter Page Active Successfully.', 'Chapter', 9, '2018-02-22 09:00:06'),
(38, 'ChapterPageInactiveSuccess', 'Chapter Page Inactive Successfully.', 'Chapter', 10, '2018-02-22 09:00:06'),
(39, 'SettingUpdateSuccess', 'Setting updted successfully.', 'Setting', 1, '2018-02-22 09:00:06'),
(40, 'PasswordChangeSuccess', 'Password changed successfully.', 'Setting', 2, '2018-02-22 09:00:06'),
(41, 'EmailTemplateUpdateSuccess', 'Email Template updted successfully.', 'Email Template', 1, '2018-02-22 09:00:06'),
(42, 'EmailTemplateAddSuccess', 'Email Template added successfully.', 'Email Template', 2, '2018-02-22 09:00:06'),
(43, 'EmailTemplateDeleteSuccess', 'Email Template deleted successfully.', 'Email Template', 3, '2018-02-22 09:00:06'),
(44, 'EmailTemplateActiveSuccess', 'Email Template Active Successfully.', 'Email Template', 4, '2018-02-22 09:00:06'),
(45, 'EmailTemplateInactiveSuccess', 'Email Template Inactive Successfully.', 'Email Template', 5, '2018-02-22 09:00:06'),
(46, 'PermissionUpdateSuccess', 'Permission updted successfully.', 'Permission', 1, '2018-02-22 09:00:06'),
(47, 'PermissionAddSuccess', 'Permission added successfully.', 'Permission', 2, '2018-02-22 09:00:06'),
(48, 'PermissionKeyExist', 'Permission key already exist.', 'Permission', 3, '2018-02-22 09:00:06'),
(49, 'PermissionDeleteSuccess', 'Permission deleted successfully.', 'Permission', 4, '2018-02-22 09:00:06'),
(50, 'CourseUpdateSuccess', 'Course updted successfully.', 'Course', 1, '2018-02-22 09:00:06'),
(51, 'CourseAddSuccess', 'Course added successfully.', 'Course', 2, '2018-02-22 09:00:06'),
(52, 'CourseDeleteSuccess', 'Course deleted successfully.', 'Course', 3, '2018-02-22 09:00:06'),
(53, 'CourseActiveSuccess', 'Course Active Successfully.', 'Course', 4, '2018-02-22 09:00:06'),
(54, 'CourseInactiveSuccess', 'Course Inactive Successfully.', 'Course', 5, '2018-02-22 09:00:06'),
(55, 'SubCourseUpdateSuccess', 'Sub Course updted successfully.', 'Sub Course', 1, '2018-02-22 09:00:06'),
(56, 'SubCourseAddSuccess', 'Sub Course added successfully.', 'Sub Course', 2, '2018-02-22 09:00:06'),
(57, 'SubCourseDeleteSuccess', 'Sub Course deleted successfully.', 'Sub Course', 3, '2018-02-22 09:00:06'),
(58, 'SubCourseActiveSuccess', 'Sub Course Active Successfully.', 'Sub Course', 4, '2018-02-22 09:00:06'),
(59, 'SubCourseInactiveSuccess', 'Sub Course Inactive Successfully.', 'Sub Course', 5, '2018-02-22 09:00:06'),
(60, 'FileNotExist', 'File Does not exist', 'General', 3, '2018-02-25 04:17:48'),
(62, 'ProfileUpdatedSuccess', 'Profile updated successfully.', 'Setting', 3, '2018-02-25 08:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `form_alerts`
--

CREATE TABLE `form_alerts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` text,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` text,
  `category` int(11) NOT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_alerts`
--

INSERT INTO `form_alerts` (`id`, `title`, `slug`, `short_description`, `image`, `description`, `category`, `meta_keywords`, `meta_description`, `created`, `updated`, `status`) VALUES
(8, 'RPSC 2nd Grade Teacher Recruitment 2018', 'rpsc-2nd-grade-teacher-recruitment-2018', 'Here is good news that the candidates, who have been waiting for too long for the results of their notification for RPSC 2nd Grade Teacher recruitment 2018, can finally now take a long and deep breath as the notification regarding the release of the notice has been out now. The expected exam date for RPSC 2nd grade Recruitment 2018. The latest news by RPSC for Syllabus, Eligibility, Result, cut off, No.of Posts, Qualification, Age Limit in this official PDF.', NULL, '<p><strong>RPSC 2nd Grade Teacher Recruitment 2018:</strong> Here is good news that the candidates, who have been waiting for too long for the results of their notification for RPSC 2nd Grade Teacher recruitment 2018, can finally now take a long and deep breath as the notification regarding the release of the notice has been out now.&nbsp;The expected exam date for RPSC&nbsp;2nd grade Recruitment 2018. The latest news by RPSC for Syllabus, Eligibility, Result, cut off, No.of Posts, Qualification, Age Limit in this official PDF.<img alt=\"\" src=\"http://www.kitabijhund.com/kitabijhund/asset/admin/plugin/ckfinder/userfiles/images/2nd-Grade-Recruitment-2018.jpg\" /></p>\r\n\r\n<p>Latest News in July 2018:&amp;nbsp;The real information by the Rajasthan Patrika and Dainik Bhaskar newspaper for the B.E.D Students on the RPSC Online Web Portal. Now you can apply for the application form at the following link. Interested candidates open the link and apply for the post and book the nearest center because after some time the main exam centers are filled after 2-3 days of starting of Apply Online for RPSC Second Grade.</p>', 4, 'RPSC 2nd Grade Teacher Recruitment 2018', 'RPSC 2nd Grade Teacher Recruitment 2018', '2018-02-10 09:51:57', NULL, 1),
(10, 'About us this is about us oage this is about us oage', 'about-us-this-is-about-us-oage-this-is-about-us-oage-1', 'Prime Minister Narendra Modi was conferred the \'Grand Collar of the State of Palestine\' by President of Palestine Mahmoud Abbas, recognising his key contribution to promote relations between India and Palestine', NULL, '<p>Prime Minister Narendra Modi was conferred the &#39;Grand Collar of the State of Palestine&#39; by President of Palestine Mahmoud Abbas, recognising his key contribution to promote relations between India and Palestine Prime Minister Narendra Modi was conferred the &#39;Grand Collar of the State of Palestine&#39; by President of Palestine Mahmoud Abbas, recognising his key contribution to promote relations between India and Palestine</p>', 3, 'ss', 'ss', '2018-02-26 08:04:06', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_alerts_categories`
--

CREATE TABLE `form_alerts_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_alerts_categories`
--

INSERT INTO `form_alerts_categories` (`id`, `name`, `slug`, `status`) VALUES
(1, 'REET 2018', 'reet-2018', 1),
(2, 'SSC', 'ssc', 1),
(3, 'Banking', 'banking', 1),
(4, 'RPSC', 'rpsc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'subadmin', 'Sub Admins');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(8, '127.0.0.1', 'amit', 1519567928),
(9, '127.0.0.1', 'amit', 1519568208),
(13, '127.0.0.1', 'amit@ddd.com', 1519568794),
(14, '127.0.0.1', 'amit', 1519569155),
(15, '127.0.0.1', 'amit', 1519572172);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `short_description` text CHARACTER SET utf8,
  `start_date` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `meta_keywords` text CHARACTER SET utf8,
  `meta_description` text CHARACTER SET utf8,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `short_description`, `start_date`, `image`, `description`, `meta_keywords`, `meta_description`, `created`, `updated`, `status`) VALUES
(8, 'Current affairs 31-01-2018', 'current-affairs-31-01-2018', '1.	Armies of India and Vietnam have begun a six-day-long military exercise in Jabalpur in Madhya Pradesh. The exercise named ‘VINBAX’ is the first military exercise between the two countries. Vietnam’s  Minister Nguyen Xuan Phuc was in New Delhi to participate in the India-ASEAN Commemorative summit and attend the Republic Day celebrations.', '2018-01-31 00:00:00', 'images(1).jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Armies of India and Vietnam have begun a six-day-long military exercise in Jabalpur in Madhya Pradesh. The exercise named &lsquo;VINBAX&rsquo; is the first military exercise between the two countries. Vietnam&rsquo;s &nbsp;Minister Nguyen Xuan Phuc was in New Delhi to participate in the India-ASEAN Commemorative summit and attend the Republic Day celebrations.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Rating agency CRISIL has revised its outlook on 18 public sector banks (PSBs) from &ldquo;negative&rdquo; to &ldquo;stable&rdquo; after the government announced bank-wise capital infusion and reform plans. Ashu Suyash is the MD and CEO of CRISIL. GurpreetGurpreet Chhatwal President of CRISIL. Its Headquarters in Mumbai. CRISIL- Credit Rating Information Services of India Limited.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Mobile payments company Paytm and Alibaba Group-owned AGTech Holdings Ltd have formed a joint venture to launch &#39;Gamepind&#39; a gaming platform aimed at mobile users in India.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indian-American Adobe CEO Shantanu Narayen has been elected as the Vice Chairman of the US-India Strategic and Partnership Forum. It is a new organisation set up to enhance business relations between India and the US.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>President Ram Nath Kovind launched the Pulse Polio programme for 2018 from Rashtrapati Bhavan, New Delhi, by administering polio drops to children below five years.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Assam Assembly is to introduce digital budget in its upcoming session, instead of the conventional printed booklet.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Assam Governor Prof. Jagdish Mukhi released a postage stamp in memory of eminent football player Dr. Talimeren Ao at Sports Authority of India (SAI) complex playground in Paltan Bazar, Guwahati, Assam.</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Information technology minister Ravi Shankar Prasad launched &lsquo;Stree Swabhiman&rsquo;, an initiative by CSC (Common Services Centres) on women&rsquo;s health and hygiene, in New Delhi.</p>\r\n\r\n<p>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Union Finance Minister, Arun Jaitley tabled the Economic Survey 2017-18 in Parliament. Economic Survey is a flagship annual document of the Ministry of Finance, Government of India. Indian economy is expected to grow between 7 per cent and 7.5 per cent in the next fiscal year i.e. April 1, 2018 &ndash; March 31, 2019. Economic Survey has revealed that average consumer price inflation based headline inflation declined to a six-year low of 3.3 per cent in 2017-18.</p>\r\n\r\n<p>10.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Thedo-Tibetan Border Police (ITBP) was named the best marching contingent in the paramilitary and auxiliary forces category at the Republic Day celebrations, in New Delhi.</p>\r\n\r\n<p>11.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Finland&rsquo;s incumbent President, Sauli Niinistowon &nbsp;has won second six-year term with an overwhelming 62.7% of the vote.</p>\r\n\r\n<p>12.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Daya Nath Singh, senior journalist, passed away following a short-term illness, at a hospital in Assam.</p>\r\n\r\n<p>13.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Dinesh Nandan Sahay, Chhattisgarh&rsquo;s first Governor passed away in Madhepura, Bihar.</p>', 'Current affairs, daily current affairs, current gk, current affairs today', 'vinbax, India and Vietnam, CRISIL rating, Adobe CEO Shantanu Narayen has been elected as the Vice Chairman, Pulse Polio programme', '2018-01-31 11:25:50', NULL, 1),
(9, 'Current affairs 01/02/2018', 'current-affairs-01022018', '1.	On January 30, 2018, Uttar Pradesh State Cabinet launched ‘Mukhya Mantri Awas Yojna Grameen’, a new scheme to construct houses in rural areas. Mukhyamantri Awas Yojana Gramin is for those who have not been covered under Pradhan Mantri Awas Yojna and those who are not beneficiaries of any other government housing schemes. UnderUnder this scheme, Rs 1.30 lakh financial aid', '2018-02-01 00:00:00', 'images(3).jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>On January 30, 2018, Uttar Pradesh State Cabinet launched &lsquo;Mukhya Mantri Awas Yojna Grameen&rsquo;, a new scheme to construct houses in rural areas. Mukhyamantri Awas Yojana Gramin is for those who have not been covered under Pradhan Mantri Awas Yojna and those who are not beneficiaries of any other government housing schemes. UnderUnder this scheme, Rs 1.30 lakh financial aid (for constructing houses) will be given to people residing in Naxal-affected areas of Uttar Pradesh and Rs 1.20 lakh to selected beneficiaries.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>On 30th January 2018, the Maharashtra state cabinet approved the introduction of Asmita (dignity), a scheme to provide sanitary pads to 7 lakh girls in government schools for Rs 5 a pack.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>India has ranked 42nd on the Economist Intelligence Unit&rsquo;s (EIU) Global Democracy Index 2017. This marks a drop by 10 spots as compared to 32nd rank last year. Topped by Norway.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Asian Development Bank (ADB) and Indian Government have signed USD 250 million loan agreement for construction of all-weather roads in five Indian states under Pradhan Mantri Gram Sadak Yojana. Funds procured through this loan will be used for construction of 6254 kilometres all-weather rural roads in West Bengal, Chhattisgarh, Assam, Madhya Pradesh and Odisha.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Prime Minister-appointed Group of Infrastructure, headed by Union Minister Nitin Gadkari constituted a high-level committee to look into procedures for sharing of infrastructure for utilities like water pipes and telecom cables.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indian Government and World Bank signed a $100 million loan agreement to promote rural economy in across 26 districts of Tamil Nadu (TN).</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Rewa Ultra Mega Solar Limited (RUMSL) and the World Bank signed USD 30 million loan agreement to develop solar power &nbsp;plants in Rewa and Mandsaur in Madhya Pradesh.</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Lt. Gen Anil Chauhan assumed charge as the new Director General of Military Operations (DGMO) of the Indian Army. Lt. Gen Anil Chauhan replaces Lt General A K Bhatt. Lt General A K &nbsp;will take charge of Srinagar-based 15 Corps.</p>\r\n\r\n<p>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Shailendra Kumar Joshi was named the Chief Secretary of Telangana.</p>\r\n\r\n<p>10.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indian Navy chief Admiral Sunil Lanba&rsquo;s wife Reena Lanba launched the third Scorpene class submarine Karanj at Mazagon Dock Shipbuilders Limited (MDL) in Mumbai, Maharashtra.</p>\r\n\r\n<div>&nbsp;</div>', 'Daily current affairs, current affairs today, today current affairs, gk today, today gk', '', '2018-02-01 11:16:03', NULL, 1),
(10, 'Budget 2018', 'budget-2018', 'Budget review\r\n\r\nAs per the FM in the Union Budget, India is expected to become the fifth largest economy very soon.', '2018-02-02 00:00:00', 'images(4).jpg', '<p>Budget review</p>\r\n\r\n<p>As per the FM in the Union Budget, India is expected to become the fifth largest economy very soon.&nbsp;</p>\r\n\r\n<p>The Growth rate is expected between 7.2-7.5% in the second half of 2017-18.</p>\r\n\r\n<p>Exports are expected to grow 15% in 2018.</p>\r\n\r\n<p>As per the FM, India is a Rs2.5 trillion economy.</p>\r\n\r\n<p>MSP to increase at least 1.5 times that of production cost.</p>\r\n\r\n<p>Minimum Support Price (MSP) of all crops shall increase to at least 1.5 times that of the production cost.&nbsp;</p>\r\n\r\n<p>The government will set up a fund of Rs 2,000 crore for developing agricultural markets.</p>\r\n\r\n<p>Our focus is on productive and gainful on-farm and non-farm employment for farmers and landless families, says Jaitley.</p>\r\n\r\n<p>MSP for Kharif cost will be 1.5 times the cost of production.</p>\r\n\r\n<p>As per the FM, APMCs will be linked with ENAM.&nbsp;</p>\r\n\r\n<p>The government will develop 22,000 Gramin agricultural markets.&nbsp;</p>\r\n\r\n<p>The cluster-model approach will be adopted for agricultural production.</p>\r\n\r\n<p>Allocation in food production sector doubled to Rs 1400 crore.</p>\r\n\r\n<p>Minimum Support Price shall be increased by 1.5 times. Operation Green will be launched for agriculture and the Minister allocates Rs500 crore for this.</p>\r\n\r\n<p>Agricultural corpus worth Rs 2000 crore will be set up. 470 APMCs have been connected to eNAM network, the rest to be connected by March 2018.</p>\r\n\r\n<p>A fund for the fishery, aquaculture development and animal husbandry will be set up with a total corpus to be Rs 10,000 crore. We will also allocate Rs 1290 crore for a bamboo mission, as it is green gold.&nbsp;</p>\r\n\r\n<p>In all, we are providing Rs 10 lakh crore to Rs 11 lakh crore as credit for agricultural activities.</p>\r\n\r\n<p>Jaitley proposes to increase the target of providing free LPG connections to 8 crore to poor women.</p>\r\n\r\n<p>Ujjwala Yojana, the free LPG connection scheme expanded to eight crore households.</p>\r\n\r\n<p>Six crore toilets have been built already, and in the next year, two crore additional toilets will be constructed.</p>\r\n\r\n<p>The government will provide 4 crore electricity connections to the poor under Saubhagya Yojana.</p>\r\n\r\n<p>Kisan credit card to be extended to fisheries,animal husbandry farmers.</p>\r\n\r\n<p>The government will establish a dedicated affordable housing fund.</p>\r\n\r\n<p>Loans to self-help groups will increase to Rs75,000 crore.</p>\r\n\r\n<p>Govt. allocated Rs5,750 crore to National Livelihood Mission and Rs2,600 crore to the groundwater irrigation scheme.</p>\r\n\r\n<p>Ayushman Bharat program discussed.</p>\r\n\r\n<p>Eklavya schools for tribal children.</p>\r\n\r\n<p>24 new government medical colleges.</p>\r\n\r\n<p>Government is implementing a comprehensive social security scheme.</p>\r\n\r\n<p>Govt. will initiate an integrated B-Ed programme for teachers.</p>\r\n\r\n<p>Government proposes to launch the Revitalising of Infrastructure and Systems of Education (RISE) by next year.&nbsp;</p>\r\n\r\n<p>Govt. proposed to set up two new full-fledged schools of planning and architecture.&nbsp;</p>\r\n\r\n<p>18 new schools of planning and architecture will be set up in the IITs and NITs.</p>\r\n\r\n<p>Rs. 1 lakh crore over 4 years for initiative for Infrastructure Devt. in education.</p>\r\n\r\n<p>2 major initiatives as part of Ayushman Bharat program.</p>\r\n\r\n<p>Eklavya schools to be open for tribal children.</p>\r\n\r\n<p>National health protection scheme to cover 10 cr poor families. Health cover of up to 5 lakh per family per year for poor &amp; vulnerable. National health protection scheme to benefit 50 crore people.</p>\r\n\r\n<p>24 new govt medical college &amp; hospitals.</p>\r\n\r\n<p>Rs. 600 crore for nutritional support to all TB patients.</p>\r\n\r\n<p>Rs. 1200 crore for health and wellness centres.</p>\r\n\r\n<p>Loans to women self-help groups of women to be increased to 75,000 cr by March 19.&nbsp;</p>\r\n\r\n<p>Govt. is launching a new national health protection scheme &ndash; Rashtriya Samaj Beema Yojana. This will have 50 crore beneficiaries and 10 crore families will get 5 lakh per year for their families to cover secondary and tertiary hospital expenses. This is the world&#39;s largest government-funded healthcare program.&nbsp;</p>\r\n\r\n<p>A Rs 600 crore corpus is being set up to help Tuberculosis patients. This will build a new India in 2022 and enhance productivity and will also generate lakhs of jobs for women.&nbsp;</p>\r\n\r\n<p>PM Jeevan Beema Yojana benefitted more than 2 crore families.&nbsp;</p>\r\n\r\n<p>Jan Dhan Yojana will be extended to all 60&nbsp;</p>', 'Budget 2018 review, budget', '', '2018-02-02 13:28:17', NULL, 1),
(11, 'Current affairs 02/02/2018', 'current-affairs-02022018', '1.	The Central Statistics Office (CSO) revised the gross domestic product (GDP) growth rate for 2015-16 to 8.2% from the earlier estimates of 8% and kept the 2016-17 growth unchanged at 7.1%. The real GDP or GDP at constant (2011-12) prices for the years 2016-17 and 2015-16 stand at Rs121.96 trillion and Rs113.86 trillion respectively, according to the CSO statement. Inn terms of real gross value added (GVA), it stated that the GVA at constant (2011-12) basic prices grew 7.1% in 2016- 17, as against a growth of 8.1% in 2015-16.', '2018-02-02 00:00:00', NULL, '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Central Statistics Office (CSO) revised the gross domestic product (GDP) growth rate for 2015-16 to 8.2% from the earlier estimates of 8% and kept the 2016-17 growth unchanged at 7.1%. The real GDP or GDP at constant (2011-12) prices for the years 2016-17 and 2015-16 stand at Rs121.96 trillion and Rs113.86 trillion respectively, according to the CSO statement. Inn terms of real gross value added (GVA), it stated that the GVA at constant (2011-12) basic prices grew 7.1% in 2016- 17, as against a growth of 8.1% in 2015-16.&nbsp;</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>7th India Energy Congress focusing on the theme &lsquo;Energy 4.0: Energy Transition Towards 2030&rsquo; &nbsp;begun in New Delhi on February 1, 2018. Indiadia Energy Congress is the flagship event of World Energy Council India (WEC India), which functions under the Union Power Ministry. 7th India Energy Congress has been jointly organised by Union Ministries of Power, Coal, New &amp; Renewable Energy, Petroleum &amp; Natural Gas, External Affairs and Department of Atomic Energy.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Andhra Pradesh Chief Minister Chandrababu Naidu laid the foundation stone for the Universal Peace Retreat Center of &lsquo;Prajapita Brahmakumari Eswariya University&rsquo; &nbsp;in Amaravati.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Union Home Ministry has sanctioned nearly Rs. 370 crore to Border Security Force (BSF) and the Indo-Tibetan Border Police (ITBP) to strengthen border infrastructure along Indo-Pak and Indo-China border.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indian Railways&rsquo; first high speed electric locomotive which can run at a maximum speed of 120 kmph will be launched in March 2018 during French President Emmanuel Macron&rsquo;s Indian visit.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Neelam Kapoor was appointed as Director General (DG) of Sports Authority of India (SAI).</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indian Olympic Association (IOA) named Vikram Singh Sisodia as the Chef-de-Mission for Commonwealth Games (CWG) that will be held in Gold Coast, Australia from April 4 to 15, 2018.</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>mCURA, a Health-tech startup, launched &lsquo;Smart OPD&rsquo;, India&rsquo;s first integrated mobility platform that reduces waiting time in counters and provides e-prescriptions.</p>\r\n\r\n<p>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>On 1st February 2018, the Indian Coast Guard celebrated its 41st Foundation Day.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs today, current affairs, today current affairs, gk today, daily current affairs', '', '2018-02-02 13:43:28', NULL, 1),
(12, 'Current affairs 03/02/2018', 'current-affairs-03022018', 'India has defeated Australia to lift the Under 19 World cup for the fourth time. The Men in Blue defeated the three-time champions Australia at Bay Oval, New Zealand. TheThe Australian team had set the target of  217 runs and was chased down easily by India. Manjot Kalra was the Hero of the match with his brilliant century.', '2018-02-03 00:00:00', 'images(6).jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The first two-day Global Investment Summit has been organized in Assam. The summit emphasises on promoting investments in the state and the North East. The conference was inaugurated by Prime Minister Narendra Modi. &nbsp;Businessmen like Ratan Tata and Mukesh Ambani are taking part in the Summit. Investor&#39;s from Bhutan, Bangladesh, Germany and Japan as well as ASEAN countries will attend the summit.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>External Affairs Minister (EAM) Sushma Swaraj has returned home after successful completion of the goodwill visit to Nepal. This was the first high-level visit from India after completion of historic three-tier elections in Nepal.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Union Minister for Finance and Corporate Affairs Mr Arun Jaitley launched CriSidEx, India&rsquo;s first sentiment index for micro and small enterprises ( MSEs) developed jointly by CRISIL &amp; SIDBI.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Alphabet has appointed John L. Hennessy as the new board chairman of the company. Hennessy has been on the board since 2004 and Lead Independent Director since 2007. He has replaced Eric Schmidt.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Shabnam Asthana was awarded the &#39;Times Power Women of the Year 2017&#39;- Pune for Global PR. The Times Group celebrated the invaluable contribution of women by introducing The Times Power Woman 2017 (Pune) awards.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>India has defeated Australia to lift the Under 19 World cup for the fourth time. The Men in Blue defeated the three-time champions Australia at Bay Oval, New Zealand. TheThe Australian team had set the target of &nbsp;217 runs and was chased down easily by India. Manjot Kalra was the Hero of the match with his brilliant century.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>India&rsquo;s leading squash player, Saurav Ghosal jumped five places to No. 14 to become the highest ranked Indian in the latest Professional Squash Association (PSA) rankings.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs, current affairs today, today current affairs, gk today, daily current affairs', '', '2018-02-06 09:54:16', NULL, 1),
(14, 'Current affairs 04/02/2018', 'current-affairs-04022018', '1.	World cancer Day is being observed today. The day is observed on 4th February every year to raise awareness about cancer, its treatment and  methods of its prevention. The primary goal of the day is to reduce the illness and related deaths by 2020. ViceVice President Venkaiah Naidu inaugurated a medical camp at Swarna Bharat Trust, Atkur in Andhra Pradesh organised on the occasion of World Cancer Day.', '2018-02-04 00:00:00', '12_cancer_7.jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>World cancer&nbsp;Day is being observed today. The day is observed on 4th February every year to raise awareness about cancer, its treatment and &nbsp;methods of its prevention. The primary goal of the day is to reduce the illness and related deaths by 2020. ViceVice President Venkaiah Naidu inaugurated a medical camp at Swarna Bharat Trust, Atkur in Andhra Pradesh organised on the occasion of World Cancer Day.&nbsp;</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>According to Union Budget 2018-19, the government will develop two defence industrial production corridors. Defence minister Nirmala Sitharaman announced that the first corridor will link Chennai and Bengaluru and will pass through Coimbatore and several other industrial clusters.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Maharashtra government has decided to set up a Transgender Welfare Board to protect their Constitutional and human rights. This will make Maharashtra the first Indian state to have such a board. An amount of ₹5 crore has also been set aside to provide education, housing, and employment for the transgender community.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> February 2 being observed as World Wetlands Day, the floating treatment wetland (FTW), a joint effort of Dhruvansh, the Hyderabad Metropolitan Development Authority and the Ranga Reddy district administration, supported by other organisations, was inaugurated in Hyderabad, Telangana. The India Book of Records recognised it as the largest FTW in the country.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Sri Lanka celebrated its 70th Independence Day today (4 February 2018). It was on this day in 1948 that Sri Lanka, then Ceylon, gained independence from 133 years of British colonial rule.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>According to the Economic Survey 2017-18, Maharashtra&rsquo;s has come out to be one of the largest states in terms of its economic size and prosperity gives it the largest share in India&rsquo;s exports and the goods and service tax (GST) base</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The change of name of apex indirect tax policy making body Central Board of Excise &amp; Customs (CBEC) to Central Board of Indirect Taxes and Customs (CBIC) is likely to happen by April after the budgetary exercise gets Parliament nod. In his budget speech for 2018-19, Finance Minister Arun Jaitley said with the roll out of GST the name of CBEC would be changed to CBIC.</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Star Indian shuttler P. V. Sindhu fell to fifth seeded Beiwen Zhang from the US in the women&rsquo;s singles final of the $350,000 India Open BWF World Tour Super 500 held in New Delhi.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs, current affairs today, today current affairs, gk today, daily gk, daily current affairs', '', '2018-02-06 10:05:17', NULL, 1),
(15, 'Current affairs 05/02/2018', 'current-affairs-05022018', '1. Cyprus President Nicos Anastasiades has won re-election for a second term. The official final result after a second-round run-off put the conservative incumbent on 55.99% of the vote, ahead of Communist-backed Stavros Malas on 44%', '2018-02-05 00:00:00', 'Nicos-Anastasiades-REUT.jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The First ever International Kala Mela was inaugurated by the Vice President of India, Shri M. Venkaiah Naidu in New Delhi.</p>\r\n\r\n<p>ii. The International Kala Mela has been organised by the Lalit Kala Akademi in partnership with IGNCA of the Ministry of Culture. More than 800 artists from across the world took part in the Festival.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Maharashtra government has approved Ghodazari in Chandrapur district as a new wildlife sanctuary in the state. The decision was taken at the 13th meeting of the Maharashtra State Board for Wildlife, chaired by Chief Minister Devendra Fadnavis.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Inland Waterways Authority of India (IWAI) has signed a project agreement with the World Bank for Jal Marg Vikas Project on river Ganga. The World Bank entered into a USD 375 million loan agreement with the Department of Economic Affairs, Union Ministry of Finance for Jal Marg Vikas Project (JMVP).</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Japan Aerospace Exploration Agency (JAXA) launched the world&rsquo;s smallest rocket with the ability to put a tiny satellite into orbit. The rocket lifted off from the Uchinoura Space Center. ItIt carried a microsatellite TRICOM-1R, a three-unit CubeSat weighing about 3 kilograms. This satellite launch was a re-flight of the TRICOM-1 mission, which was lost in SS-520&rsquo;s failure in 2017.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The President of Bangladesh, Abdul Hamid appointed Syed Mahmud Hossain as the new Chief Justice of the country. Justice Hossain is the 22nd chief justice of Bangladesh. President administered the oath of office to Justice Hossain.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Cyprus President Nicos Anastasiades has won re-election for a second term. The official final result after a second-round run-off put the conservative incumbent on 55.99% of the vote, ahead of Communist-backed Stavros Malas on 44%. Anastasiades has taken credit for steering the economy of Cyprus to recovery after it was plunged into crisis in 2013 by its exposure to debt-wracked Greece and fiscal slippage under a former left-wing administration.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indian cricketers Jasprit Bumrah and Harmanpreet Kaur as well India women&rsquo;s hockey team goalkeeper Savita Punia and shooter Heena Sidhu are among Forbes India 30 Under 30 list.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs, current affairs today, today current affairs, daily gk, daily current affairs', '', '2018-02-06 10:12:05', NULL, 1),
(16, 'Current affairs 06/02/2018', 'current-affairs-06022018', '1. External Affairs Minister Sushma Swaraj has left for her first official visit to Saudi Arabia. During the three-day visit, Mrs Swaraj will meet with the Saudi leadership to discuss bilateral, regional and global issues of mutual interest.', '2018-02-06 00:00:00', 'images1.jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>External Affairs Minister Sushma Swaraj has left for her first official visit to Saudi Arabia. During the three-day visit, Mrs Swaraj will meet with the Saudi leadership to discuss bilateral, regional and global issues of mutual interest.</p>\r\n\r\n<p>ii. She will also participate in the inauguration of the prestigious National Heritage and Culture Festival &lsquo;Janadriyah&rsquo;. India is the guest of honour country at the fest.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>India successfully test-fired the indigenously developed short-range nuclear capable Agni-I ballistic missile. The missile was fired from the Abdul Kalam Island off Odisha coast.</p>\r\n\r\n<p>ii. The test was conducted by the Strategic Force Command of the Indian Army. The range of Missile is 700 km. It was 18th version of Agni-I.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Ola and the Government of Assam have signed an MoU to pilot an app-based river taxi service in Guwahati. The river taxis will be machine-operated boats and users will be able to book the rides through Ola&#39;s app.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Uttar Pradesh State government in association with UNICEF has launched massive door to door campaign DASTAK to eradicate deadly Acute Encephalitis</p>\r\n\r\n<p>Syndrome (AES) and Japanise Encephalitis (JE) disease in the state.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Commerce and Industries Minister Mr Suresh Prabhu set off a series of nation-wide consultations with the industry on the proposed new Industrial Policy. The first consultation was held at Guwahati in February 2018.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Maldives president, Abdulla Yameen, has declared a state of emergency in the country as heavily armed troops stormed the country&rsquo;s top court and a former president Chief Justice Abdulla Saeed was arrested in a deepening political crisis.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Jerome H Powell was sworn in as the 16th Chairman of the Federal Reserve for a four-year term. Mr Powell has succeeded Janet Yellen, the first woman to lead the US central bank in its 100-year history.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs today, today current affairs, daily current affairs, gk today', '', '2018-02-13 07:27:47', NULL, 1),
(17, 'Current affairs 07/02/2018', 'current-affairs-07022018', '1. The US-based SpaceX has successfully launched the world\'s most powerful operational rocket Falcon Heavy towards Mars. The rocket, carrying a Tesla Roadster car, will revolve around the Sun in a way that will repeatedly bring it close to the Earth and Mars.', '2018-02-07 00:00:00', 'images_(1).jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The President of India Ram Nath Kovind inaugurated the 88th Mahamastakabhisheka Utsav of Lord Gomateshwara in Hassan district of Karnataka. Mahamastakabhisheka of Gommateshwara, who is also known as Bahubali takes place once in 12 years.&nbsp;</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>India successfully test-fired its indigenously developed nuclear capable Prithvi-II missile as part of a user trial by the Army from Integrated Test Range at Chandipur, in Odisha.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Andhra Pradesh government has decided to hold the first-of-its-kind, one-day Pelican Festival at the Atapaka Bird Sanctuary on Kolleru.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Google and National Council of Educational Research and Training (NCERT) signed a pact to integrate a course on &#39;Digital Citizenship and Safety&#39; in information and communication technology curriculum. It was signed on the occasion of Safer Internet Day (06th February).</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>External Affairs Minister Sushma Swaraj attended the opening ceremony of the 32nd Al Jana-driyah festival in Riyadh, Saudi Arabia. India has been invited as the Guest of Honour country for the festival.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The US-based SpaceX has successfully launched the world&#39;s most powerful operational rocket Falcon Heavy towards Mars. The rocket, carrying a Tesla Roadster car, will revolve around the Sun in a way that will repeatedly bring it close to the Earth and Mars.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Monetary Policy Committee (MPC) decided to keep the policy repo rate under the liquidity adjustment facility (LAF) unchanged at 6.0%.</p>\r\n\r\n<p>ii. Consequently, the Reverse Repo Rate (RRR) under the LAF remains at 5.75%, and the Marginal Standing Facility (MSF) rate and the Bank Rate at 6.25%.</p>\r\n\r\n<p>iii. GVA growth for 2017-18 is projected at 6.6%. GVA growth&nbsp;</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Kathakali maestro Madavoor Vasudevan Nair collapsed on stage and died while performing at Agasthyacodu Mahadeva Temple, Kerala. He was 89.</p>\r\n\r\n<p>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Indian women&#39;s cricket team pacer Jhulan Goswami has become the first woman in the world to take 200 wickets in ODI cricket.&nbsp;</p>\r\n\r\n<div>&nbsp;</div>', 'Daily current affairs, current affairs today, today current affairs, current affairs, gk today', '', '2018-02-13 07:34:34', NULL, 1),
(18, 'Current affairs 08/02/2018', 'current-affairs-08022018', '1.	The Fifth edition of South Asia Region Public Procurement Conference was held in New Delhi. It was hosted by Public Procurement Division (PPD) of Ministry of Finance and All India Management Association (AIMA).', '2018-02-08 00:00:00', 'download.jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Fifth edition of South Asia Region Public Procurement Conference was held in New Delhi. It was hosted by Public Procurement Division (PPD) of Ministry of Finance and All India Management Association (AIMA).</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Arunachal Pradesh Chief Minister Prema Khandu laid the foundation stone for Rhododendron Park in Tawang. He also carried out plantation drive of different varieties of Rhodos. Tawang is home to 50+ different varieties of Rhodos.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The first ever of its kind in the country chat-based job search mobile app &#39;Empzilla&#39; is being launched that will do away with existing limitations of employers and job seekers making selection process quick and cost-effective.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Business magazine Forbes has released its first-ever Crypto Rich List, comprising 20 wealthiest people in the cryptocurrency space. The list was topped by Ripple Co-founder Chris Larsen, who is estimated to have a crypto net worth of $7.5-8 billion.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Reserve Bank of India will link the base rate with the MCLR from 1st of April 2018 to ensure expeditious transmission of its policy rate to borrowers. The RBI had introduced the Marginal Cost of Funds based Lending Rates (MCLR) system with effect from 1st April 2016, the Central bank observed that a large proportion of bank loans continue to be linked to Base Rate.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Reserve Bank of India announced setting up ombudsman for addressing customer grievances in the non-banking finance companies. The rules will be laid out by the end of February 2018.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Actor John Mahoney passed away after a brief illness in Chicago, the USA. He was 77 years old. He was well-known for playing the title character in the &ldquo;Frasier&rdquo; show.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs, current affairs today, today current affairs, daily current affairs, gk today', '', '2018-02-13 08:01:41', NULL, 1),
(19, 'Current affairs 09/02/2018', 'current-affairs-09022018', '1.	Prime Minister Narendra Modi left for his three-nation visit to Palestine, the\r\n\r\nUnited Arab Emirates (UAE) and Oman.\r\n\r\nii. This is the first ever visit by an Indian Prime Minister to Palestine, and Prime Minister Modi\'s second visit to UAE and first to Oman.', '2018-02-09 00:00:00', 'download_(1).jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Prime Minister Narendra Modi left for his three-nation visit to Palestine, the</p>\r\n\r\n<p>United Arab Emirates (UAE) and Oman.</p>\r\n\r\n<p>ii. This is the first ever visit by an Indian Prime Minister to Palestine, and Prime Minister Modi&#39;s second visit to UAE and first to Oman.</p>\r\n\r\n<p>iii. Prime Minister would be addressing the Sixth World Government Summit being held in Dubai, UAE at which India has been extended &#39;Guest of Honour&#39; status.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>India has increased &ldquo;substantially&rdquo; its score in the International Intellectual Property (IP) Index, ranking 44th among 50 nations, according to the US Chambers of Commerce report. Last year, India ranked 43rd out of 45 countries in the Index.</p>\r\n\r\n<p>ii. The top 3 countries on the list are- The USA, The United Kingdom and Sweden.</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Defence Minister Nirmala Sitharaman has constituted a 13-member advisory committee to monitor and expedite capital acquisition projects for the modernisation of the armed forces. The committee will be headed by Vinay Sheel Oberoi, former secretary in the government</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The South Central Railway (SCR) has become the first railway zone in the country to complete 100% LED lighting at all the stations under its jurisdiction.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The National Highways Authority of India (NHAI) will start a pilot project called &quot;pay as you use&quot; on the Delhi-Mumbai Highway to study and implement the ability of the system in the country.&nbsp;</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Union Minister of State (IC) for Power and New &amp; Renewable Energy, Shri R.K Singh, launched a Web-based monitoring System and a Fly Ash mobile application named ASH TRACK</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The Competition Commission of India (CCI) has imposed a fine of around Rs. 136 crores on search engine major Google for unfair business practices in the Indian market for online search.</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>IndusInd Bank launched its new Sonic Identity, which is essentially a musical logo called &#39;MOGO&#39;, as part of its branding initiatives.</p>\r\n\r\n<p>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>PepsiCo Chairman and CEO Indra Nooyi has been appointed as the International Cricket Council&#39;s (ICC) first-ever independent female director. Nooyi will join the cricket body in June 2018 for a 2-year term.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs today, today current affairs, daily current affairs, current affairs daily', '', '2018-02-13 08:16:55', NULL, 1),
(20, 'Current affairs 10/02/2018', 'current-affairs-10022018', '1.	The first Khelo India School Games concluded in New Delhi with sports powerhouse Haryana topped the overall medal tally. The state won 102 medals which include 38 gold and 26 silver', '2018-02-10 00:00:00', 'images(7).jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The first Khelo India School Games concluded in New Delhi with sports powerhouse Haryana topped the overall medal tally. The state won 102 medals which include 38 gold and 26 silver.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>SBI Card, the country&#39;s second-largest credit card issuer, has appointed Hardayal Prasad as new Managing Director (MD) &amp; Chief Executive Officer (CEO) of the</p>\r\n\r\n<p>company.&nbsp;</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>NITI Aayog has released the &lsquo;Healthy States, Progressive India Report&rsquo;. Kerala, Punjab and Tamil Nadu have ranked top among the larger states in terms of overall performance. The report was released by NITI Aayog CEO Amitabh Kant.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>National Informatics Centre (NIC) has organized a three-day National Meet on Grassroot Informatics- VIVID 2018 at the India Habitat Centre, New Delhi. The Theme for VIVID 2018 is &ldquo;Cyber Security and Innovation&rdquo;.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Prime Minister Narendra Modi was conferred the &#39;Grand Collar of the State of Palestine&#39; by President of Palestine Mahmoud Abbas, recognising his key contribution to promote relations between India and Palestine</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Dubai witnessed 15% growth in tourist arrivals from India in 2017, hosting 2.1 million visitors, retaining top spot as the source market.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>National Payments Corporation of India (NPCI) appointed Biswamohan Mahapatra as non-executive chairman for two years with immediate effect.</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The 23rd Olympic Winter Games officially kicked off with a colourful ceremony at Pyeongchang in South Korea.&nbsp;</p>\r\n\r\n<p>9.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Eminent litterateur Chandrasekhar Rath passed away at the age of 89. He died of old age ailments. He was recently nominated for Padma Shri by the Union government this year for his contribution towards Odia literature.</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs today, daily current affairs, current affairs, today current affairs, gk today', '', '2018-02-13 08:24:18', NULL, 1),
(21, 'Current affairs 11/02/2018', 'current-affairs-11022018', '1.	 Direct tax collections grew by nearly 20 per cent between April and January this year with strong growth in both corporate and personal income tax receipts. According to official data released, net direct tax collections grew by 19.3 per cent up to January 2018 to Rs 6.95-lakh crore.', '2018-02-11 00:00:00', 'images(8).jpg', '<p>1.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Direct tax collections grew by nearly 20 per cent between April and January this year with strong growth in both corporate and personal income tax receipts. According to official data released, net direct tax collections grew by 19.3 per cent up to January 2018 to Rs 6.95-lakh crore.</p>\r\n\r\n<p>2.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Union Home Minister Rajnath Singh has launched the Centre for learning Sanskrit language in Gujarat University, Ahmedabad.&nbsp;</p>\r\n\r\n<p>3.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span> Mr Nitin Gadkari released India&rsquo;s first ever Highway Capacity Manual (HCM) in New Delhi. The manual is also known as Indo-HCM and it has been developed by CSIR &ndash; CRRI on the basis of an extensive, country-wide study of the traffic characteristics on different categories of roads like a single lane, two-lane, multi-lane urban roads, and the associated intersections on these roads.</p>\r\n\r\n<p>4.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Mumbai, India&#39;s financial capital is the 12th richest city in the world with a total wealth of $950 billion, according to a report by New World Wealth. The list was topped by New York as the richest city in the world.</p>\r\n\r\n<p>5.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>India and Palestine have signed six Memorandums of Understanding (MoU)s worth USD 40 million. &nbsp;This was welcomed by Palestinian President Mahmoud Abbas.</p>\r\n\r\n<p>6.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>ONGC (Oil and Natural Gas Corporation) Videsh Ltd and its partners have acquired a 10% in a large offshore oilfield Abu Dhabi National Oil Co.&rsquo;s (ADNOC) in Abu Dhabi for $600 million. It is the first time any Indian company has set foot in oil-rich Emirate.</p>\r\n\r\n<p>7.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>The country&rsquo;s largest lender SBI wrote off bad loans worth Rs 20,339 crore in 2016-17, the highest among all the public sector banks, which had a collective write off of Rs 81,683 crore for the fiscal. The data pertains to the period when the associate banks of SBI were not merged with it.</p>\r\n\r\n<p>8.<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Asma Jahangir, Pakistan&rsquo;s renowned human rights lawyer, social activist and an outspoken critic of the country&rsquo;s powerful military establishment, passed away of cardiac arrest. She was 66.&nbsp;</p>\r\n\r\n<div>&nbsp;</div>', 'Current affairs today, today current affairs, daily current affairs, current affairs daily, gk today', '', '2018-02-13 08:33:15', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `meta_keywords` text CHARACTER SET utf8,
  `meta_description` text CHARACTER SET utf8,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `description`, `meta_keywords`, `meta_description`, `created`, `updated`, `status`) VALUES
(1, 'About Us', 'about-us', '<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>', 'about us', 'about us', '2018-02-08 11:55:55', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'Unknown',
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `name`, `group`, `order`) VALUES
(1, 'page-index', 'Page Listing', 'Page', 1),
(2, 'page-add', 'Page Create', 'Page', 2),
(3, 'page-edit', 'Page Update', 'Page', 3),
(4, 'page-delete', 'Page Delete', 'Page', 4),
(21, 'email_templates-index', 'Email Template Listing', 'Email Templates', 1),
(22, 'email_templates-edit', 'Email Template Edit', 'Email Templates', 2),
(23, 'email_templates-status', 'Email Template Manage Status', 'Email Templates', 3),
(24, 'page-status', 'Page Status Change', 'Page', 5),
(28, 'news-index', 'News Listing', 'News', 1),
(29, 'news-add', 'News Create', 'News', 2),
(30, 'news-edit', 'News Edit', 'News', 3),
(31, 'news-delete', 'News Delete', 'News', 4),
(32, 'news-status', 'News Status Change', 'News', 5),
(33, 'form_alert-index', 'Form Alerts Listing', 'Form Alerts', 1),
(34, 'form_alert-add', 'Form Alerts Add', 'Form Alerts', 2),
(35, 'form_alert-edit', 'Form Alerts Edit', 'Form Alerts', 3),
(36, 'form_alert-delete', 'Form Alerts Delete', 'Form Alerts', 4),
(37, 'form_alert-status', 'Form Alerts Status', 'Form Alerts', 5),
(38, 'subject-index', 'Subject Listing', 'Subject', 1),
(39, 'subject-add', 'Subject Add', 'Subject', 2),
(40, 'subject-edit', 'Subject Edit', 'Subject', 3),
(41, 'subject-delete', 'Subject Delete', 'Subject', 4),
(42, 'subject-status', 'Subject Status', 'Subject', 5),
(44, 'settings-index', 'Site Setting', 'Settings', 1),
(45, 'chapter-index', 'Chapter Listing', 'Chapter', 1),
(46, 'chapter-add', 'Chapter Add', 'Chapter', 2),
(47, 'chapter-edit', 'Chapter Edit', 'Chapter', 3),
(48, 'chapter-delete', 'Chapter Delete', 'Chapter', 4),
(49, 'chapter-status', 'Chapter Status', 'Chapter', 5),
(50, 'form_alert-category-index', 'Form Article Category Listing', 'Form Alerts', 6),
(51, 'form_alert-category-add', 'Form Alert Category Add', 'Form Alerts', 7),
(52, 'form_alert-category-edit', 'Form Alert Category Edit', 'Form Alerts', 8),
(53, 'form_alert-category-delete', 'Form Alert Category Delete', 'Form Alerts', 9),
(54, 'form_alert-category-status', 'Form Alert Category Status', 'Form Alerts', 10),
(55, 'course-index', 'Course Listing', 'Course', 1),
(56, 'course-add', 'Course Add', 'Course', 2),
(57, 'course-edit', 'Course Edit', 'Course', 3),
(58, 'course-delete', 'Course Delete', 'Course', 4),
(59, 'course-status', 'Course Status', 'Course', 5),
(60, 'sub_course-index', 'Sub Course Index', 'Sub Course', 1),
(61, 'sub_course-add', 'Sub Course Add', 'Sub Course', 2),
(62, 'sub_course-edit', 'Sub Course Edit', 'Sub Course', 3),
(63, 'sub_course-delete', 'Sub Course Delete', 'Sub Course', 4),
(64, 'sub_course-status', 'Sub Course Status', 'Sub Course', 5);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `type` enum('text','textarea','select','radio') NOT NULL DEFAULT 'text',
  `select_items` text COMMENT 'Comma saprated value',
  `value` text,
  `is_required` tinyint(4) NOT NULL DEFAULT '0',
  `validation_rules` text,
  `created` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `field_name`, `type`, `select_items`, `value`, `is_required`, `validation_rules`, `created`, `status`) VALUES
(1, 'Site Title', 'site_title', 'text', '', 'Kitabi Jhund', 1, 'trim|required', '2013-04-07 23:23:25', 1),
(2, 'Site Email', 'site_email', 'text', '', 'motilalsoni@gmail.com1', 1, 'trim|required|valid_email', '2013-04-07 23:24:28', 1),
(7, 'Default Meta Description', 'default_meta_description', 'textarea', NULL, 'All users cards ss dd', 0, 'trim|required|min_length[70]|max_length[160]', '2014-05-02 08:45:18', 1),
(8, 'Default meta keyworkds (comma seperated)', 'default_meta_keywords', 'textarea', NULL, 'Buy, Sell, Trade,mtgo, magic online, magic the gathering online, cards, collection, tickets, ix, store, shop, auctions', 0, 'trim|required', '2014-05-02 08:46:07', 1),
(9, 'Default Meta Author', 'default_meta_author', 'text', NULL, 'Amit Yadav', 0, 'trim', '2014-05-02 08:50:39', 1),
(11, 'Contact Email', 'contact_email', 'text', NULL, 'support@kitabijhund.com', 0, 'trim', NULL, 1),
(12, 'Contact Phone', 'contact_phone', 'text', NULL, '+91 9024978493', 0, 'trim', NULL, 1),
(13, 'Contact Address', 'contact_address', 'textarea', NULL, '877 Filbert Street\r\nRewari, Alwar 301001', 0, 'trim', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `slug`, `status`, `created`, `updated`) VALUES
(16, 'Political Science', 'political-science', 1, '2018-02-14 21:37:03', '2018-02-26 05:54:34'),
(18, 'RTyu', 'rtyu-1', 1, '2018-02-25 04:44:39', '2018-02-25 10:16:36'),
(20, 'Jock', 'jock', 1, '2018-02-25 04:46:59', '2018-02-25 10:18:05'),
(21, 'Hindi', 'hindi', 1, '2018-02-25 13:51:04', '2018-02-26 05:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `subject_subcourses`
--

CREATE TABLE `subject_subcourses` (
  `id` int(11) NOT NULL,
  `sub_course_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_subcourses`
--

INSERT INTO `subject_subcourses` (`id`, `sub_course_id`, `subject_id`) VALUES
(2, 1, 18),
(5, 1, 16),
(6, 2, 18),
(8, 2, 20),
(9, 3, 16),
(10, 3, 21),
(11, 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `sub_courses`
--

CREATE TABLE `sub_courses` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_courses`
--

INSERT INTO `sub_courses` (`id`, `course_id`, `name`, `slug`, `status`, `created`, `updated`) VALUES
(1, 4, 'SSS', 'sss', 1, '2018-02-16 20:58:04', NULL),
(2, 3, 'Bank PO', 'bank-po', 1, '2018-02-19 20:21:17', '2018-02-19 13:21:30'),
(3, 5, '10th Class', '10th-class', 1, '2018-02-25 04:47:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `two_step_authentication` tinyint(1) NOT NULL DEFAULT '0',
  `authentication_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `two_step_authentication`, `authentication_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$DtNn/97d3CQ5dg0hwjLqM.1C6YIpVNmIcUMlEAIe8TyNEut80nKPO', NULL, 'admin@admin.com', '', NULL, 1519574412, NULL, 1, NULL, 1268889823, 1519647947, 1, 'Amit', 'Yadav', 'ADMIN', '9024978491'),
(2, '127.0.0.1', NULL, '$2y$08$njHn5resw7whKT4Svv6m.uWL//62ZJJ2jsIWI.Je4iZ9/NN/J/k8W', NULL, 'motilalsoni@gmail.com', NULL, '3aeQ17Jzttv6WWInzXZY1e5d0656d92deea61c82', 1519581796, NULL, 0, NULL, 1514189309, NULL, 1, 'motilal', 'soni', NULL, '9024978491'),
(3, '127.0.0.1', NULL, '$2y$08$KLxPDj0WA.o2expa8BcXae4rl/60UjcKzNpwhzlbk5LybK3lR6V5S', NULL, 'mohit@gmail.com', NULL, NULL, 1519574083, NULL, 0, NULL, 1514189657, 1519644218, 1, 'Mohit', 'Soni', NULL, '123654789'),
(5, '127.0.0.1', NULL, '$2y$08$RkW9FzddQUrtbpMzO6Z2gOqJyeT3EEEeaW8zf4fljnK6UaVShNKNu', NULL, 'pawanbamboli@gmail.com', NULL, NULL, NULL, NULL, 0, NULL, 1514191227, NULL, 1, 'Pawan', 'Soni', NULL, '123654789'),
(6, '127.0.0.1', NULL, '$2y$08$Fu/IsOR2w1mTmT1NvUCQHO.Un4tcU8jZGNgg5zBDrUwVgzBEQF0di', NULL, 'soniya@gmail.com', NULL, NULL, NULL, NULL, 1, NULL, 1519647455, NULL, 1, 'Soniya', 'Soni', NULL, '5269856987');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 3),
(6, 5, 3),
(7, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_permissions`
--

INSERT INTO `users_permissions` (`id`, `user_id`, `permission_id`, `created`) VALUES
(1, 3, 2, '2018-02-02 18:15:11'),
(2, 3, 1, '2018-02-04 03:20:13'),
(3, 3, 3, '2018-02-04 03:20:13'),
(4, 3, 4, '2018-02-04 03:20:13'),
(5, 3, 24, '2018-02-04 03:20:13'),
(6, 3, 21, '2018-02-04 03:20:13'),
(7, 3, 22, '2018-02-04 03:20:13'),
(8, 3, 23, '2018-02-04 03:20:13'),
(9, 3, 28, '2018-02-04 03:20:13'),
(10, 3, 29, '2018-02-04 03:20:13'),
(11, 3, 30, '2018-02-04 03:20:13'),
(12, 3, 31, '2018-02-04 03:20:13'),
(13, 3, 32, '2018-02-04 03:20:13'),
(18, 3, 45, '2018-02-04 03:21:21'),
(19, 5, 1, '2018-02-25 18:30:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters_pages`
--
ALTER TABLE `chapters_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapter_id` (`chapter_id`);

--
-- Indexes for table `chapters_subjects`
--
ALTER TABLE `chapters_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `topic_id` (`chapter_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `last_activity_idx` (`timestamp`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `udx_slug` (`slug`);

--
-- Indexes for table `flash_messages`
--
ALTER TABLE `flash_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_alerts`
--
ALTER TABLE `form_alerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `form_alerts_categories`
--
ALTER TABLE `form_alerts_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_subcourses`
--
ALTER TABLE `subject_subcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `sub_course_id` (`sub_course_id`);

--
-- Indexes for table `sub_courses`
--
ALTER TABLE `sub_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `chapters_pages`
--
ALTER TABLE `chapters_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `chapters_subjects`
--
ALTER TABLE `chapters_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `flash_messages`
--
ALTER TABLE `flash_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `form_alerts`
--
ALTER TABLE `form_alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `form_alerts_categories`
--
ALTER TABLE `form_alerts_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `subject_subcourses`
--
ALTER TABLE `subject_subcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sub_courses`
--
ALTER TABLE `sub_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_permissions`
--
ALTER TABLE `users_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters_pages`
--
ALTER TABLE `chapters_pages`
  ADD CONSTRAINT `chapters_pages_ibfk_1` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `chapters_subjects`
--
ALTER TABLE `chapters_subjects`
  ADD CONSTRAINT `chapters_subjects_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `chapters_subjects_ibfk_2` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `form_alerts`
--
ALTER TABLE `form_alerts`
  ADD CONSTRAINT `form_alerts_ibfk_1` FOREIGN KEY (`category`) REFERENCES `form_alerts_categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `subject_subcourses`
--
ALTER TABLE `subject_subcourses`
  ADD CONSTRAINT `subject_subcourses_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `subject_subcourses_ibfk_3` FOREIGN KEY (`sub_course_id`) REFERENCES `sub_courses` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sub_courses`
--
ALTER TABLE `sub_courses`
  ADD CONSTRAINT `sub_courses_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
