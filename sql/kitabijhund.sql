-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 11:00 AM
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
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `name`, `slug`, `status`, `created`, `updated`) VALUES
(6, 'Number System', 'number-system', 1, '2018-02-03 22:41:10', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `chapters_subjects`
--

CREATE TABLE `chapters_subjects` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('bkfobqvnjs6k49vamudlg6eds6a2u16v', '::1', 1509176948, '__ci_last_regenerate|i:1509176916;error|s:22:\"<p>Incorrect Login</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('gqpu3eemcnrt9h4e6itfnmdqnav0fid1', '::1', 1509176914, '__ci_last_regenerate|i:1509176914;'),
('dgt2r12ur9cmcgtdi3cs98jr6vk39om8', '127.0.0.1', 1508066541, '__ci_last_regenerate|i:1508066356;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('53jne9rv26un2lkrfjvfktnc3l87rahk', '127.0.0.1', 1508065881, '__ci_last_regenerate|i:1508065841;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('id7dgu4jalu2rji3v1vr41g3f821nthb', '127.0.0.1', 1508065333, '__ci_last_regenerate|i:1508065272;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('6dru4hc4vrdsmk27q215ijp42mproif5', '127.0.0.1', 1508064972, '__ci_last_regenerate|i:1508064911;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('ln4fvc912trieopjg00oqesm0drud199', '127.0.0.1', 1508064906, '__ci_last_regenerate|i:1508064608;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('njgvfbepd470agcpa4uhilkh4456j40g', '127.0.0.1', 1508064487, '__ci_last_regenerate|i:1508064287;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('hjaop7f65gp7p8g4re2b6f8uai5rejqn', '127.0.0.1', 1508064255, '__ci_last_regenerate|i:1508063972;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('v1vpvb3p5fgei35ln6k31bifjb2qkdhn', '127.0.0.1', 1508063928, '__ci_last_regenerate|i:1508063639;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('jg8f06agqo7j32prc1e4dc7f3o2tkgvg', '127.0.0.1', 1508063398, '__ci_last_regenerate|i:1508063236;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('399meerd0qteub9mfpfh46oclej5pvgc', '127.0.0.1', 1508063221, '__ci_last_regenerate|i:1508062922;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('6s7j8l432470hdtvfni9dhc8pnpcukaq', '127.0.0.1', 1508062751, '__ci_last_regenerate|i:1508062577;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('qv3t5ht2u9cq6v0p3i1i0eaf55pddln4', '127.0.0.1', 1508062564, '__ci_last_regenerate|i:1508062265;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('dq7tv0is7gci719tv01se9efjfjnc6a5', '127.0.0.1', 1508062201, '__ci_last_regenerate|i:1508061912;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('ltggpptsqqgfnkbo1aaiqf9ji6tb6521', '127.0.0.1', 1508061619, '__ci_last_regenerate|i:1508061602;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('rpll7f5ro9mqi915tvvns1citbbup7im', '127.0.0.1', 1508061252, '__ci_last_regenerate|i:1508061244;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('ndb82agc4dfc8fheefnei9tefl2sf4kk', '127.0.0.1', 1508061205, '__ci_last_regenerate|i:1508060907;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('gok54fauu3m63n2o3929tl9st2k076fj', '127.0.0.1', 1508060791, '__ci_last_regenerate|i:1508060520;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('rgdt7ol87i0mj1cdtail65872n0gugcj', '127.0.0.1', 1508060431, '__ci_last_regenerate|i:1508060174;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('6j4cfqr1dvdf4pq14bvq24bccaabipe5', '127.0.0.1', 1508059960, '__ci_last_regenerate|i:1508059781;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('bfn7iji7urcdn73hr0n1m06n0hsig2ok', '127.0.0.1', 1508059242, '__ci_last_regenerate|i:1508059063;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('hdirtgikdgm3cuffshda7b0n6seu7ggu', '127.0.0.1', 1508059022, '__ci_last_regenerate|i:1508058750;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('dshvd4fncafms25909ojmr7petq36r45', '127.0.0.1', 1508058475, '__ci_last_regenerate|i:1508058366;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('4lq9kqtubnbet8rlfm6bce9tr5obtp2t', '127.0.0.1', 1508045893, '__ci_last_regenerate|i:1508045864;identity|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508045577\";last_check|i:1508045710;username|s:5:\"admin\";'),
('1eg8fr3anmtm2mglk1b2uq81ug16vn7n', '127.0.0.1', 1508045814, '__ci_last_regenerate|i:1508045559;identity|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508045577\";last_check|i:1508045710;username|s:5:\"admin\";'),
('ahsql4n0oevjd2t3ncaamd5n2b3d3ot1', '127.0.0.1', 1508044652, '__ci_last_regenerate|i:1508044486;error|s:22:\"<p>Incorrect Login</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('gjs68nlbf5oe692gt1vovljutk2ttihm', '127.0.0.1', 1508045553, '__ci_last_regenerate|i:1508045258;'),
('713nfi0aqrg7nco0moe1qr3rkvbu67vq', '127.0.0.1', 1508044256, '__ci_last_regenerate|i:1508043976;'),
('8smi6bb0blk5ui61q1scrlohh2i9evjo', '127.0.0.1', 1508043557, '__ci_last_regenerate|i:1508043260;'),
('5u4jjupmb3l9rn592letladtkjd4c62o', '127.0.0.1', 1508043975, '__ci_last_regenerate|i:1508043783;'),
('ejbb4moiup7d3ahvkckb2q0gc12vl4h3', '127.0.0.1', 1508042750, '__ci_last_regenerate|i:1508042478;'),
('mb3cr8bl3phpk1n28vennttvvhtam1uj', '127.0.0.1', 1508042965, '__ci_last_regenerate|i:1508042928;'),
('cdl84qq9nf0bcoe92pco7jjnnad353o3', '127.0.0.1', 1508041234, '__ci_last_regenerate|i:1508041197;'),
('u8ju7on1i0igfv1u18c4f02ijj01njic', '127.0.0.1', 1508041939, '__ci_last_regenerate|i:1508041752;'),
('o9fqdus88g51srkoc4eial1g198rkjlj', '127.0.0.1', 1508042372, '__ci_last_regenerate|i:1508042077;'),
('pu65emojmkppbao3pbafkq0nnb3hsci3', '127.0.0.1', 1508058341, '__ci_last_regenerate|i:1508058054;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;success|s:35:\"Email Template updted successfully.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('6004e5b3607ab28de9db1105430022db563f38ee', '127.0.0.1', 1508040824, '__ci_last_regenerate|i:1508040659;'),
('goghvhk8a5q50f0hjfpmp8tke4n6grui', '127.0.0.1', 1508057622, '__ci_last_regenerate|i:1508057423;'),
('95767pb1np0nu5r2mlc6nj53dt65h6gf', '127.0.0.1', 1508058047, '__ci_last_regenerate|i:1508057752;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508051059\";last_check|i:1508057838;'),
('nu2efcg62c9oerq9g5s1sobks7pgo2oc', '127.0.0.1', 1508056962, '__ci_last_regenerate|i:1508056741;'),
('6j68fcfl6pa80jfmdilufhg4c3sfbsr3', '127.0.0.1', 1508057196, '__ci_last_regenerate|i:1508057056;'),
('icq9i4lnrdlvgd9glo4gg00c9dqtiub4', '127.0.0.1', 1508054700, '__ci_last_regenerate|i:1508054493;'),
('637jnu5v9kl04itckcbi49nti4tlflrs', '127.0.0.1', 1508054465, '__ci_last_regenerate|i:1508054183;success|s:32:\"<p>Password Reset Email Sent</p>\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('oj42450mjgvfajsgiqs134i8l396k0bf', '127.0.0.1', 1508054119, '__ci_last_regenerate|i:1508053834;message|s:32:\"<p>Password Reset Email Sent</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('jsv626ihul0452nqb5rbf8m1mspfo7gj', '127.0.0.1', 1508053789, '__ci_last_regenerate|i:1508053513;message|s:32:\"<p>Password Reset Email Sent</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('q4b7vd4u9je4i1n8bcv4839qcvpl0n6e', '127.0.0.1', 1508053050, '__ci_last_regenerate|i:1508052787;error|s:45:\"<p>##forgot_password_identity_not_found##</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('vahlcna67fscpibekol4ge5deoqjc3ub', '127.0.0.1', 1508051077, '__ci_last_regenerate|i:1508051072;'),
('535t9ugfh5vij40nm56qsdde21rqut02', '127.0.0.1', 1508051808, '__ci_last_regenerate|i:1508051527;'),
('64knkcbl9pd2eh1n71tn12cg0ovj07du', '127.0.0.1', 1508052137, '__ci_last_regenerate|i:1508051840;'),
('8rlgk91is3bb2kmglt87u9u420lcv93a', '127.0.0.1', 1508050236, '__ci_last_regenerate|i:1508050192;message|s:22:\"<p>Incorrect Login</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('jpb06jeseh4hp39adku7rh5s2mv5a99r', '127.0.0.1', 1508049804, '__ci_last_regenerate|i:1508049784;error|s:22:\"<p>Incorrect Login</p>\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),
('chmmfrn7sipeifbl564i7g11opc6hcv9', '127.0.0.1', 1508052416, '__ci_last_regenerate|i:1508052143;message|s:45:\"<p>##forgot_password_identity_not_found##</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('2uda9keah8efp6ddl8dgenv1lohpfuq2', '127.0.0.1', 1508050642, '__ci_last_regenerate|i:1508050642;'),
('gon9ak60t21n3g08jkm88qnleqd8i823', '127.0.0.1', 1508048776, '__ci_last_regenerate|i:1508048518;'),
('2577matp9lfbddnkmufmlo7i866q4mqj', '127.0.0.1', 1508049118, '__ci_last_regenerate|i:1508048821;'),
('e03dspdo0l40qp69d1fvihnk2b13rg2p', '127.0.0.1', 1508049433, '__ci_last_regenerate|i:1508049138;identity|s:5:\"admin\";username|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508048445\";last_check|i:1508049426;'),
('csdjagul5ofngjk2hvdioptihojser7l', '127.0.0.1', 1508048302, '__ci_last_regenerate|i:1508048031;identity|s:5:\"admin\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1508045577\";last_check|i:1508045710;username|s:5:\"admin\";'),
('87ef658a171c5d63d353e788b89fb05bae0fb331', '::1', 1510393241, '__ci_last_regenerate|i:1510393147;'),
('5aea7dac3995c17e2aab7b0f20c1844cb76e5615', '::1', 1510394060, '__ci_last_regenerate|i:1510394049;'),
('c0522d5612bfe9390c87bae6f3b99ef4ec5e8199', '::1', 1510399960, '__ci_last_regenerate|i:1510399960;'),
('lmgn6kln6f3rhal5hbheci0l87ahkfk9', '::1', 1510400637, '__ci_last_regenerate|i:1510400637;'),
('8be4b8fe69adb3eab125a64f1a947768cd002bb5', '::1', 1510415604, '__ci_last_regenerate|i:1510415355;'),
('288c7667299c8e84c55cd88b60d7f6a3c49917c4', '127.0.0.1', 1512207219, '__ci_last_regenerate|i:1512207219;');

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
(1, 'about us', 'test wert', 'about-us', '<p>New Advertise Message on Footig .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-:Post Message information:-<br />\r\n<br />\r\n<strong>First Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>{{firstname}}<br />\r\n<strong>Email&nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; &nbsp; </strong>{{email}}<br />\r\n<strong>Phone&nbsp; &nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{contactno}}<br />\r\n<strong>Address:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{address}}<br />\r\n<strong>message &nbsp;&nbsp; :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{message}}</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thank you for using Footing,<br />\r\n<strong>The Footing Team</strong><br />\r\n<br />\r\nif you need any type of support or have comments . feel free to <a href=\"http://footig.com\">contact our Customer Service Team</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '{{asdas}},{{asdsad}}', '2015-09-17 14:12:32', '2017-12-25 04:20:36', 1),
(2, 'User Signup', 'Signup mail', 'signup', '<p>Hi ~name~,</p>\r\n\r\n<p>You have successfully registered on dagamechanger.com.</p>\r\n\r\n<p>Please <a href=\"~site_url~\">click here</a> to activate your dagamechanger.com account</p>\r\n\r\n<p>Thank you</p>', NULL, '2015-09-28 11:55:53', NULL, 1),
(3, 'Resend activation mail', 'account activation', 'resend-activation-mail', '<p>Hi ~name~,</p>\r\n\r\n<p>You have successfully registered on MTGOStock.</p>\r\n\r\n<p>Please <a href=\"~site_url~\">click here</a> to activate your mtgo account</p>\r\n\r\n<p>Thank you</p>', NULL, '2015-09-28 12:48:39', '2016-03-02 18:09:21', 1),
(4, 'Forgot Password', 'forgot password', 'admin-forgot-password', '<p>Hi ~name~,</p>\r\n\r\n<p>Your password is reset successfully, please click here to create new password.</p>\r\n\r\n<p>Please <a href=\"~site_url~\">click here</a> to create new password.</p>\r\n\r\n<p>Thank you</p>', '{{dsfsdfsf}},{{sdfsf}}', '2015-09-28 17:37:15', '2016-03-03 18:01:00', 1),
(5, 'Order email', 'Order placed successfully', 'order-email', '<p>Hi ~name~,</p>\r\n\r\n<p>You have purchase ~gallery_title~</p>\r\n\r\n<p>You have been succefully placed your order your tanrsaction id is ~transaction_id~.</p>\r\n\r\n<p>Please click here to download <a href=\"~download_link~\">click here</a>Download.</p>\r\n\r\n<p>Thank you</p>', NULL, '2015-09-28 17:37:15', '2016-03-03 17:51:58', 1),
(6, 'testn', 'sdfds', 'testn', '<p>sdfsddsasddas</p>', NULL, '2016-03-03 12:22:20', '2016-03-03 17:52:27', 1);

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
  `category` int(11) DEFAULT NULL,
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
(5, '20 May 2017 - Current Affairs', '20-may-2017-current-affairs', '1. Mumbai Indians created history by becoming the first team to win the IPL for a record three times, when they beat Rising Pune Supergiant, the team they had lost to thrice earlier in the tournament, by one run in the final in Hyderabad on Sunday night. MI defended a modest 130-run target on the back of a magnificent bowling effort from Mitchell Johnson who, playing his fifth game of the season, successfully defended 11 off the last over and finished with 3/26 to outshine an equally impressive knock from Steve Smith (51). This is also the first time since 2008 that a team finishing first in the Points Table has lifted the trophy.\r\n\r\n2. May 21stÂ is observed asÂ Anti-Terrorism DayÂ in the memory of former Indian PM Mr Rajiv Gandhi who passed away on this day. On this day in theÂ year 1991,Â former Indiaâ€™sÂ PM Rajiv GandhiÂ was killed brutally by terrorist attacks. Rajiv Gandhi, the former Prime Minister of India, while conducting an election campaign in Sriperumbudur (located near Chennai) in Tamil Nadu was assassinated by a suicide bomber on 21 May 1991.Â He was 46 years of age.Â Along with him, the bombing also took the lives of 18 other citizens and seriously injured 43. This tragedy was blamed on the members of the Sri Lankan militant organisation,Â LTTE (Liberation Tigers of Tamil Elam).', NULL, '<p>1. Mumbai Indians created history by becoming the first team to win the IPL for a record three times, when they beat Rising Pune Supergiant, the team they had lost to thrice earlier in the tournament, by one run in the final in Hyderabad on Sunday night. MI defended a modest 130-run target on the back of a magnificent bowling effort from Mitchell Johnson who, playing his fifth game of the season, successfully defended 11 off the last over and finished with 3/26 to outshine an equally impressive knock from Steve Smith (51). This is also the first time since 2008 that a team finishing first in the Points Table has lifted the trophy.<br />\r\n<br />\r\n2. May 21st&Acirc;&nbsp;is observed as&Acirc;&nbsp;Anti-Terrorism Day&Acirc;&nbsp;in the memory of former Indian PM Mr Rajiv Gandhi who passed away on this day. On this day in the&Acirc;&nbsp;year 1991,&Acirc;&nbsp;former India&acirc;&euro;&trade;s&Acirc;&nbsp;PM Rajiv Gandhi&Acirc;&nbsp;was killed brutally by terrorist attacks. Rajiv Gandhi, the former Prime Minister of India, while conducting an election campaign in Sriperumbudur (located near Chennai) in Tamil Nadu was assassinated by a suicide bomber on 21 May 1991.&Acirc;&nbsp;He was 46 years of age.&Acirc;&nbsp;Along with him, the bombing also took the lives of 18 other citizens and seriously injured 43. This tragedy was blamed on the members of the Sri Lankan militant organisation,&Acirc;&nbsp;LTTE (Liberation Tigers of Tamil Elam).</p>', 1, 'ss', 'ss', '2018-02-04 09:11:46', NULL, 1),
(7, 'The HTML Helper file contains functions that assist in working with HTML.', 'the-html-helper-file-contains-functions-that-assist-in-working-with-html', 'sf', NULL, '<p>sdf</p>', 2, 'sdf', 'sdfs', '2018-02-10 08:56:12', NULL, 1),
(8, 'REET ecaa ff', 'reet-ecaa-ff', 'dfd', NULL, '<p>dfg</p>', 5, 'dfg', 'dfgdgd', '2018-02-10 09:01:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_alerts_categories`
--

CREATE TABLE `form_alerts_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_alerts_categories`
--

INSERT INTO `form_alerts_categories` (`id`, `name`, `slug`, `status`) VALUES
(1, 'MCST', 'mcst', 1),
(2, 'SSC', 'ssc-1', 1),
(5, 'REET 2018', 'reet-2018', 1);

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
(1, '127.0.0.1', 'pawanbamboli@gmail.com', 1518250185);

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
(2, 'About us this is about us oage this is about us oage', 'about-us-this-is-about-us-oage-this-is-about-us-oage', 'sdssd', '2017-11-21 00:00:00', 'under_construction.jpg', '<p>sdfsfs</p>', 'sdf', 'fdsf', '2018-01-26 13:23:51', '2018-01-27 11:38:01', 1),
(3, 'हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', 'हम-आपक-बचच-और-ककष-1-2-3-4-5-6-7-8-9-10-11', 'हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 और 12 के विद्यार्थियों के लिए विभिन्न प्रकार के निबंध उपलब्ध करा रहे हैं| इस प्रकार के निबंध आपके बच्चों और विद्यार्थियों की अतिरिक्त पाठ्यक्रम गतिविधियों जैसे: निबंध लेखन, बहस और विचार-विमर्श में बहुत सहायक हो सकती है|', '2018-01-27 00:00:00', '1388406166mid-right-add.png', '<p>हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 और 12 के विद्यार्थियों के लिए विभिन्न प्रकार के निबंध उपलब्ध करा रहे हैं| इस प्रकार के निबंध आपके बच्चों और विद्यार्थियों की अतिरिक्त पाठ्यक्रम गतिविधियों जैसे: निबंध लेखन, बहस और विचार-विमर्श में बहुत सहायक हो सकती है|</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/education-essay-in-hindi/\"><strong>शिक्षा पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/education-essay-in-hindi/\">शिक्षा पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/my-school-essay-in-hindi/\">मेरा स्कूल पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/importance-of-education-essay-in-hindi/\">शिक्षा का महत्व पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/newspaper-essay-in-hindi/\">समाचार पत्र पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-my-dream-in-hindi/\">मेरा सपना पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-brain-drain-in-hindi/\">प्रतिभा पलायन पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-ideal-student-in-hindi/\">आदर्श विद्यार्थी पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/essay-on-career-in-hindi/\">करियर पर निबंध</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong><a href=\"http://www.hindikiduniya.com/essay/animals/\">जानवर पर निबंध</a></strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/cow-essay-in-hindi/\">गाय पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/elephant-essay-in-hindi/\">हाथी पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/tiger-essay-in-hindi/\">बाघ पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/dog-essay-in-hindi/\">कुत्ते पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-my-pet-animal-in-hindi/\">मेरा पालतू जानवर पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/essay-on-my-pet-cat-in-hindi/\">मेरी पालतू बिल्ली पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-my-pet-dog-in-hindi/\">मेरा पालतू कुत्ता पर निबंध</a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/sports-essay-in-hindi/\"><strong>खेल पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/sports-essay-in-hindi/\">खेल पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/importance-of-sports-essay-in-hindi/\">खेल के महत्व पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/cricket-essay-in-hindi/\">क्रिकेट पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/hockey-essay-in-hindi/\">हॉकी पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/football-essay-in-hindi/\">फुटबॉल पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/adventure-essay-in-hindi/\">रोमांच पर निबंध</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/science-technology-essay-in-hindi/\"><strong>विज्ञान और तकनीकी पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/science-technology-essay-in-hindi/\">विज्ञान और तकनीकी पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/computer-essay-in-hindi/\">कंप्यूटर पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/internet-essay-in-hindi/\">इंटरनेट पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/globalization-essay-in-hindi/\">ग्लोबलाइजेशन पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-uses-of-internet-in-hindi/\">इंटरनेट का उपयोग पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-disadvantages-of-internet-in-hindi/\">इंटरनेट के नुकसान पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-wonder-of-science-in-hindi/\">विज्ञान के चमत्कार पर निबंध</a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/india-essay-in-hindi/\"><strong>भारत पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/india-essay-in-hindi/\">भारत पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/digital-india-essay-in-hindi/\">डिजिटल इंडिया पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/indian-culture-essay-in-hindi/\">भारतीय संस्कृति पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/unity-in-diversity-essay-in-hindi/\">विविधता में एकता पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/national-flag-essay-in-hindi/\">राष्ट्रीय ध्वज़ पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/ek-bharat-shreshtha-bharat-essay-in-hindi/\">एक भारत श्रेष्ठ भारत पर निबन्ध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/jan-dhan-yojana-essay-in-hindi/\">जन धन योजना पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/start-up-india-stand-up-india-essay-in-hindi/\">स्टार्ट अप इंडिया स्टैंड अप इंडिया पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/nationalism-essay-hindi/\">राष्ट्रवाद पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/make-in-india-essay-in-hindi/\">मेक इन इंडिया पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/city-life-vs-village-life-essay-in-hindi/\">शहरी जीवन बनाम ग्रामीण जीवन पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/democracy-in-india-essay-in-hindi/\">लोकतंत्र पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/india-of-my-dreams-essay-in-hindi/\">मेरे सपनों का भारत पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/essay-on-fundamental-rights-in-hindi/\">मौलिक अधिकारों पर निबंध</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/social-issues-awareness-essay-in-hindi/\"><strong>सामाजिक मुद्दे और सामाजिक जागरूकता पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/child-labour-essay-in-hindi/\">बाल मजदूरी पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/corruption-essay-in-hindi/\">भ्रष्टाचार पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/women-empowerment-essay-in-hindi/\">महिला सशक्तिकरण पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/beti-bachao-beti-padhao-essay-in-hindi/\">बेटी बचाओ बेटी पढ़ाओ पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/female-foeticide-essay-in-hindi/\">भ्रूण हत्या पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/poverty-essay-in-hindi/\">गरीबी पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/swachh-bharat-abhiyan-essay-in-hindi/\">स्वच्छ भारत अभियान पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/cleanliness-essay-in-hindi/\">स्वच्छता पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/bal-swachhta-abhiyan-essay-in-hindi/\">बाल स्वच्छता अभियान पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/national-integration-essay-in-hindi/\">राष्ट्रीय एकीकरण पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/terrorism-essay-in-hindi/\">आतंकवाद पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/road-safety-essay-in-hindi/\">सड़क सुरक्षा पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/intolerance-essay-in-hindi/\">असहिष्णुता पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/save-water-essay-in-hindi/\">जल बचाओ पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/rain-water-harvesting-essay-in-hindi/\">वर्षा जल संचयन पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/sugamya-bharat-abhiyan-essay-in-hindi/\">सुगम्य भारत अभियान पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/save-girl-child-essay-in-hindi/\">बेटी बचाओ पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/cashless-india-essay-hindi/\">&nbsp;कैशलेस इंडिया पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/caste-system-essay-hindi/\">जाति व्यवस्था पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/adult-education-essay-hindi/\">प्रौढ़ शिक्षा पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/women-safety-in-india-essay-in-hindi/\">महिलाओं की सुरक्षा पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/women-education-in-india-essay-in-hindi/\">महिला शिक्षा पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/status-of-women-in-india-essay-in-hindi/\">महिलाओं की स्थिति पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/violence-against-women-in-india-essay/\">महिलाओं के विरुद्ध हिंसा पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/role-of-women-in-society-essay-in-hindi/\">महिलाओं की समाज में भूमिका पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/peace-and-harmony-essay-in-hindi/\">शांति और सदभाव पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/human-rights-essay-hindi/\">मानव अधिकारों पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/farmer-suicides-essay-hindi/\">किसानों की आत्महत्या पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/unemployment-essay/\">बेरोजगारी पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/organ-donation-essay-hindi/\">अंगदान पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/black-money-essay-hindi/\">काले धन पर निबंध</a></td>\r\n			<td>&nbsp;<a href=\"http://www.hindikiduniya.com/essay/essay-on-dowry-system-in-hindi/\">दहेज़ प्रथा पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-girl-education-in-hindi/\">लड़कियों की शिक्षा पर निबंध</a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/festivals-essay-in-hindi/\"><strong>त्योहारों पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/holi-essay-in-hindi/\">होली पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/christmas-essay-in-hindi/\">क्रिसमस पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/dussehra-essay-in-hindi/\">दशहरा पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/diwali-essay-in-hindi/\">दिपावली पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/ganesh-chaturthi-essay-in-hindi/\">गणेश चतुर्थी पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/durga-puja-essay-in-hindi/\">दुर्गा पूजा पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-vaisakhi-in-hindi/\">बैसाखी पर निबंध</a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/events-essay-in-hindi/\"><strong>विभिन्न उत्सवों पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/republic-day-essay-in-hindi/\">गणतंत्र दिवस पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/independence-day-essay-in-hindi/\">स्वतंत्रता दिवस पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/mothers-day-essay-in-hindi/\">मातृ दिवस पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/childrens-day-essay-in-hindi/\">बाल दिवस पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/gandhi-jayanti-essay-in-hindi/\">गाँधी जयंती पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/teachers-day-essay-in-hindi/\">शिक्षक दिवस पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/world-environment-day-essay-in-hindi/\">विश्व पर्यावरण दिवस पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-hindi-diwas-in-hindi/\">हिंदी दिवस पर निबंध</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/people-essay-in-hindi/\"><strong>महान व्यक्तियों पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/mahatma-gandhi-essay-in-hindi/\">महात्मा गांधी पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/subhas-chandra-bose-essay-in-hindi/\">सुभाष चन्द्र बोस पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/jawaharlal-nehru-essay-in-hindi/\">जवाहर लाल नेहरु पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/sarvepalli-radhakrishnan-essay-in-hindi/\">डॉ सर्वपल्ली राधाकृष्णन पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/rabindranath-tagore-essay-in-hindi/\">रबिन्द्रनाथ टैगोर पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/apj-abdul-kalam-essay-in-hindi/\">ए.पी.जे. अब्दुल कलाम पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/mother-teresa-essay-in-hindi/\">मदर टेरेसा पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/sri-aurobindo-essay-in-hindi/\">अरविन्द घोष पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/swami-vivekananda-essay-in-hindi/\">स्वामी विवेकानंद पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/essay-on-bhagat-singh-in-hindi/\">भगत सिंह पर निबंध</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/relationships-essay-in-hindi/\"><strong>रिश्तो पर निबंध</strong></a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/mother-essay-in-hindi/\">माँ पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/my-father-essay-in-hindi/\">पिता पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/my-family-essay-in-hindi/\">मेरा परिवार पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/friendship-essay-in-hindi/\">दोस्ती पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/myself-essay-in-hindi/\">स्वयं पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/teacher-essay-in-hindi/\">शिक्षक पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/my-best-friend-essay-in-hindi/\">मेरा अच्छा दोस्त पर निबंध</a></td>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/my-favourite-teacher-essay-in-hindi/\">मेरे प्रिय अध्यापक पर निबंध</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"http://www.hindikiduniya.com/essay/grandparents-essay-in-hindi/\">दादा-दादी पर निबंध</a></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', 'हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', '2018-01-26 13:31:49', '2018-01-27 11:37:06', 1),
(4, 'Additionally, in order to add attributes to the heading tag such as HTML classes, ids or inline styles', 'additionally-in-order-to-add-attributes-to-the-heading-tag-such-as-html-classes-ids-or-inline-styles', 'trrty', '2018-01-31 00:00:00', 'client-image.jpg', '<p>rtyr</p>', 'rty', 'rtyr', '2018-01-26 16:29:27', '2018-02-03 23:15:49', 1),
(6, '20 May 2017 - Current Affairs', '20-may-2017-current-affairs', '1. Mumbai Indians created history by becoming the first team to win the IPL for a record three times, when they beat Rising Pune Supergiant, the team they had lost to thrice earlier in the tournament, by one run in the final in Hyderabad on Sunday night. MI defended a modest 130-run target on the back of a magnificent bowling effort from Mitchell Johnson who, playing his fifth game of the season, successfully defended 11 off the last over and finished with 3/26 to outshine an equally impressive knock from Steve Smith (51). This is also the first time since 2008 that a team finishing first in the Points Table has lifted the trophy.\r\n\r\n2. May 21stÂ is observed asÂ Anti-Terrorism DayÂ in the memory of former Indian PM Mr Rajiv Gandhi who passed away on this day. On this day in theÂ year 1991,Â former Indiaâ€™sÂ PM Rajiv GandhiÂ was killed brutally by terrorist attacks. Rajiv Gandhi, the former Prime Minister of India, while conducting an election campaign in Sriperumbudur (located near Chennai) in Tamil Nadu was assassinated by a suicide bomber on 21 May 1991.Â He was 46 years of age.Â Along with him, the bombing also took the lives of 18 other citizens and seriously injured 43. This tragedy was blamed on the members of the Sri Lankan militant organisation,Â LTTE (Liberation Tigers of Tamil Elam).', '2018-02-04 00:00:00', NULL, '<p>1. Mumbai Indians created history by becoming the first team to win the IPL for a record three times, when they beat Rising Pune Supergiant, the team they had lost to thrice earlier in the tournament, by one run in the final in Hyderabad on Sunday night. MI defended a modest 130-run target on the back of a magnificent bowling effort from Mitchell Johnson who, playing his fifth game of the season, successfully defended 11 off the last over and finished with 3/26 to outshine an equally impressive knock from Steve Smith (51). This is also the first time since 2008 that a team finishing first in the Points Table has lifted the trophy.</p>\r\n\r\n<p>2. May 21st&Acirc; is observed as&Acirc; Anti-Terrorism Day&Acirc; in the memory of former Indian PM Mr Rajiv Gandhi who passed away on this day. On this day in the&Acirc; year 1991,&Acirc; former India&acirc;&euro;&trade;s&Acirc; PM Rajiv Gandhi&Acirc; was killed brutally by terrorist attacks. Rajiv Gandhi, the former Prime Minister of India, while conducting an election campaign in Sriperumbudur (located near Chennai) in Tamil Nadu was assassinated by a suicide bomber on 21 May 1991.&Acirc; He was 46 years of age.&Acirc; Along with him, the bombing also took the lives of 18 other citizens and seriously injured 43. This tragedy was blamed on the members of the Sri Lankan militant organisation,&Acirc; LTTE (Liberation Tigers of Tamil Elam).</p>', '', '', '2018-02-04 09:14:13', NULL, 1);

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
(59, 'About us this is about us oage this is about us oage', 'about-us-this-is-about-us-oage-this-is-about-us-oage', '<p>this is about us owwwage</p>', '', '', '2017-12-03 13:16:40', '2018-01-26 04:46:54', 1),
(60, 'Home', 'home', '<p>home pagessss</p>', '', '', '2017-12-03 13:18:36', '2017-12-23 05:31:53', 0),
(61, 'Term And Conditions', 'term-and-conditions', '<p>lorem ipsum is simpl resr here</p>', '', '', '2017-12-09 09:29:12', NULL, 1),
(62, 'Term $ # &', 'term', '<p>this is term ans conditions page &amp;</p>', 'mmas, &', '', '2017-12-23 14:31:59', '2017-12-23 09:24:25', 1),
(63, 'yguhg hg &', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(65, 'हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', 'हम-आपक-बचच-और-ककष-1-2-3-4-5-6-7-8-9-10-11', '<p>हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11</p>', 'हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', 'हम आपके बच्चों और कक्षा 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11', '2018-01-26 13:38:17', NULL, 1);

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
(50, 'form_articles-category-index', 'Form Alert Category Listing', 'Form Alerts', 6),
(51, 'form_articles-category-add', 'Form Alert Category Add', 'Form Alerts', 7),
(52, 'form_articles-category-edit', 'Form Alert Category Edit', 'Form Alerts', 8),
(53, 'form_articles-category-delete', 'Form Alert Category Delete', 'Form Alerts', 9),
(54, 'form_articles-category-status', 'Form Alert Category Status', 'Form Alerts', 10);

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
(2, 'Site Email', 'site_email', 'text', '', 'motilalsoni@gmail.com', 1, 'trim|required|valid_email', '2013-04-07 23:24:28', 1),
(7, 'Default Meta Description', 'default_meta_description', 'textarea', NULL, 'All users cards ss dd', 0, 'trim|required|min_length[70]|max_length[160]', '2014-05-02 08:45:18', 1),
(8, 'Default meta keyworkds (comma seperated)', 'default_meta_keywords', 'textarea', NULL, 'Buy, Sell, Trade,mtgo, magic online, magic the gathering online, cards, collection, tickets, ix, store, shop, auctions', 0, 'trim|required', '2014-05-02 08:46:07', 1),
(9, 'Default Meta Author', 'default_meta_author', 'text', NULL, 'Amit Yadav', 0, 'trim', '2014-05-02 08:50:39', 1);

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
(10, 'Quantitative Aptitude', 'quantitative-aptitude', 1, '2018-02-03 22:33:32', NULL),
(11, 'Political Science', 'political-science', 1, '2018-02-03 22:33:55', NULL),
(12, 'Chemistry', 'chemistry', 1, '2018-02-03 22:36:59', NULL);

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

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$X.wo1a1ctWWqF/tiLCx.wubIZsXlKjpxjZNsHwi0ooBkuxL1Muple', NULL, 'admin@admin.com', '', '41OxdsvwogkRPa7YoTUUku1b6c8113ad4e2f5ac2', 1508057752, NULL, 1268889823, 1518250191, 1, 'Amit', 'Yadav', 'ADMIN', '0'),
(2, '127.0.0.1', NULL, '$2y$08$wQclqGSuDs6ha.ImfqjcDOp8H8M8HEKbTPDjv2CG1WRTOjGd9BCui', NULL, 'motilalsoni@gmail.com', NULL, NULL, NULL, NULL, 1514189309, NULL, 1, 'motilal', 'soni', NULL, '9024978491'),
(3, '127.0.0.1', NULL, '$2y$08$X.wo1a1ctWWqF/tiLCx.wubIZsXlKjpxjZNsHwi0ooBkuxL1Muple', NULL, 'mohit@gmail.com', NULL, NULL, NULL, NULL, 1514189657, 1517714511, 1, 'Mohit', 'Soni', NULL, '123654789'),
(5, '127.0.0.1', NULL, '$2y$08$RkW9FzddQUrtbpMzO6Z2gOqJyeT3EEEeaW8zf4fljnK6UaVShNKNu', NULL, 'pawanbamboli@gmail.com', NULL, NULL, NULL, NULL, 1514191227, NULL, 1, 'Pawan', 'Soni', NULL, '123654789');

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
(6, 5, 3);

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
(19, 5, 33, '2018-02-10 08:08:58'),
(20, 5, 34, '2018-02-10 08:08:58'),
(21, 5, 35, '2018-02-10 08:08:58'),
(22, 5, 36, '2018-02-10 08:08:58'),
(23, 5, 37, '2018-02-10 08:08:58'),
(24, 5, 50, '2018-02-10 08:08:58'),
(25, 5, 51, '2018-02-10 08:08:58'),
(26, 5, 52, '2018-02-10 08:08:58'),
(27, 5, 53, '2018-02-10 08:08:58'),
(28, 5, 54, '2018-02-10 08:08:58');

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
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `udx_slug` (`slug`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `chapters_pages`
--
ALTER TABLE `chapters_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chapters_subjects`
--
ALTER TABLE `chapters_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `form_alerts`
--
ALTER TABLE `form_alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `form_alerts_categories`
--
ALTER TABLE `form_alerts_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_permissions`
--
ALTER TABLE `users_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
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
