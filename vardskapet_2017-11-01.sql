# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# V�rd: 127.0.0.1 (MySQL 5.5.42)
# Databas: vardskapet
# Genereringstid: 2017-11-01 18:03:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Tabelldump signups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `signups`;

CREATE TABLE `signups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` tinytext,
  `signupdate` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `signups` WRITE;
/*!40000 ALTER TABLE `signups` DISABLE KEYS */;

INSERT INTO `signups` (`id`, `email`, `signupdate`)
VALUES
	(1,NULL,'2017-10-30 13:26:32'),
	(2,NULL,'2017-10-30 13:27:03'),
	(3,NULL,'2017-10-30 13:27:05'),
	(4,'asdasd@asdasd.com','2017-10-30 13:27:18'),
	(5,NULL,'2017-10-30 13:27:37'),
	(6,'asdas@asdasd.com','2017-10-30 13:27:54'),
	(7,'asdas@asda2sd.com','2017-10-30 13:28:42'),
	(8,'asdasda@asdas222d.com','2017-10-30 13:29:20');

/*!40000 ALTER TABLE `signups` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_commentmeta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_commentmeta`;

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_comments`;

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10)),
  KEY `woo_idx_comment_type` (`comment_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_comments` WRITE;
/*!40000 ALTER TABLE `wp_comments` DISABLE KEYS */;

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`)
VALUES
	(1,1,'A WordPress Commenter','wapuu@wordpress.example','https://wordpress.org/','','2017-09-07 10:00:47','2017-09-07 10:00:47','Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.',0,'1','','',0,0),
	(2,28,'WooCommerce','','','','2017-09-11 12:37:29','2017-09-11 10:37:29','Stripe no longer supports API requests made with TLS 1.0. Please initiate HTTPS connections with TLS 1.2 or later. You can learn more about this at https://stripe.com/blog/upgrading-tls.',0,'1','WooCommerce','order_note',0,0),
	(3,28,'WooCommerce','','','','2017-09-11 14:42:45','2017-09-11 12:42:45','Unpaid order cancelled - time limit reached. Order status changed from Pending payment to Cancelled.',0,'1','WooCommerce','order_note',0,0);

/*!40000 ALTER TABLE `wp_comments` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_links
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_links`;

CREATE TABLE `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_postmeta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_postmeta`;

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`)
VALUES
	(7,10,'_wc_review_count','0'),
	(8,10,'_wc_rating_count','a:0:{}'),
	(9,10,'_wc_average_rating','0'),
	(10,10,'_edit_last','1'),
	(11,10,'_edit_lock','1504785145:1'),
	(12,11,'_wp_attached_file','woocommerce_uploads/2017/09/5i13KQL-Imgur.gif'),
	(13,11,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:500;s:6:\"height\";i:409;s:4:\"file\";s:45:\"woocommerce_uploads/2017/09/5i13KQL-Imgur.gif\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:25:\"5i13KQL-Imgur-150x150.gif\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/gif\";}s:6:\"medium\";a:4:{s:4:\"file\";s:25:\"5i13KQL-Imgur-300x245.gif\";s:5:\"width\";i:300;s:6:\"height\";i:245;s:9:\"mime-type\";s:9:\"image/gif\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:25:\"5i13KQL-Imgur-180x180.gif\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:9:\"image/gif\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:25:\"5i13KQL-Imgur-300x300.gif\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/gif\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
	(14,10,'_sku',''),
	(15,10,'_regular_price','100'),
	(16,10,'_sale_price',''),
	(17,10,'_sale_price_dates_from',''),
	(18,10,'_sale_price_dates_to',''),
	(19,10,'total_sales','0'),
	(20,10,'_tax_status','taxable'),
	(21,10,'_tax_class',''),
	(22,10,'_manage_stock','no'),
	(23,10,'_backorders','no'),
	(24,10,'_sold_individually','no'),
	(25,10,'_weight',''),
	(26,10,'_length',''),
	(27,10,'_width',''),
	(28,10,'_height',''),
	(29,10,'_upsell_ids','a:0:{}'),
	(30,10,'_crosssell_ids','a:0:{}'),
	(31,10,'_purchase_note',''),
	(32,10,'_default_attributes','a:0:{}'),
	(33,10,'_virtual','yes'),
	(34,10,'_downloadable','yes'),
	(35,10,'_product_image_gallery',''),
	(36,10,'_download_limit','-1'),
	(37,10,'_download_expiry','-1'),
	(38,10,'_stock',NULL),
	(39,10,'_stock_status','instock'),
	(40,10,'_downloadable_files','a:1:{s:32:\"803ecd3ee42eb264aae134b1edc028a4\";a:4:{s:2:\"id\";s:32:\"803ecd3ee42eb264aae134b1edc028a4\";s:4:\"name\";s:8:\"test fil\";s:4:\"file\";s:65:\"/wp-content/uploads/woocommerce_uploads/2017/09/5i13KQL-Imgur.gif\";s:13:\"previous_hash\";s:0:\"\";}}'),
	(41,10,'_product_version','3.1.2'),
	(42,10,'_price','100'),
	(45,13,'_edit_last','1'),
	(46,13,'_edit_lock','1505124406:1'),
	(47,13,'_wp_page_template','default'),
	(48,15,'_edit_last','1'),
	(49,15,'_wp_page_template','welcoming.php'),
	(50,15,'_edit_lock','1509375441:1'),
	(51,17,'_edit_last','1'),
	(52,17,'_wp_page_template','default'),
	(53,17,'_edit_lock','1505124461:1'),
	(54,19,'_edit_last','1'),
	(55,19,'_wp_page_template','default'),
	(56,19,'_edit_lock','1505311467:1'),
	(57,21,'_edit_last','1'),
	(58,21,'_wp_page_template','default'),
	(59,21,'_edit_lock','1508168181:1'),
	(63,25,'_edit_last','1'),
	(64,25,'_wp_page_template','blog.php'),
	(65,25,'_edit_lock','1509449076:1'),
	(68,28,'_order_key','wc_order_59b66767cf27f'),
	(69,28,'_customer_user','1'),
	(70,28,'_payment_method','stripe'),
	(71,28,'_payment_method_title','Credit Card (Stripe)'),
	(72,28,'_transaction_id',''),
	(73,28,'_customer_ip_address','::1'),
	(74,28,'_customer_user_agent','mozilla/5.0 (macintosh; intel mac os x 10_10_5) applewebkit/537.36 (khtml, like gecko) chrome/60.0.3112.101 safari/537.36'),
	(75,28,'_created_via','checkout'),
	(76,28,'_date_completed',''),
	(77,28,'_completed_date',''),
	(78,28,'_date_paid',''),
	(79,28,'_paid_date',''),
	(80,28,'_cart_hash','9da825ded7489fa2ea524d4322dd5d67'),
	(81,28,'_billing_first_name','Emil'),
	(82,28,'_billing_last_name','Jönsson'),
	(83,28,'_billing_company',''),
	(84,28,'_billing_address_1','Awadasdsd'),
	(85,28,'_billing_address_2',''),
	(86,28,'_billing_city','Stockholm'),
	(87,28,'_billing_state',''),
	(88,28,'_billing_postcode','12234'),
	(89,28,'_billing_country','SE'),
	(90,28,'_billing_email','emil.jonsson@reformact.se'),
	(91,28,'_billing_phone','0729620441'),
	(92,28,'_shipping_first_name',''),
	(93,28,'_shipping_last_name',''),
	(94,28,'_shipping_company',''),
	(95,28,'_shipping_address_1',''),
	(96,28,'_shipping_address_2',''),
	(97,28,'_shipping_city',''),
	(98,28,'_shipping_state',''),
	(99,28,'_shipping_postcode',''),
	(100,28,'_shipping_country',''),
	(101,28,'_order_currency','SEK'),
	(102,28,'_cart_discount','0'),
	(103,28,'_cart_discount_tax','0'),
	(104,28,'_order_shipping','0'),
	(105,28,'_order_shipping_tax','0'),
	(106,28,'_order_tax','0'),
	(107,28,'_order_total','100.00'),
	(108,28,'_order_version','3.1.2'),
	(109,28,'_prices_include_tax','no'),
	(110,28,'_billing_address_index','Emil Jönsson  Awadasdsd  Stockholm  12234 SE emil.jonsson@reformact.se 0729620441'),
	(111,28,'_shipping_address_index','        '),
	(112,28,'_shipping_method',''),
	(113,28,'_stripe_card_id','tok_1B0pIBERQagdrTk4Ky9LxStK'),
	(114,1,'_edit_lock','1509449329:1'),
	(115,5,'_edit_lock','1508241108:1'),
	(116,1,'_edit_last','1'),
	(117,5,'_edit_last','1'),
	(118,5,'_wp_page_template','default'),
	(119,6,'_edit_lock','1508163215:1'),
	(120,6,'_edit_last','1'),
	(121,6,'_wp_page_template','default'),
	(122,4,'_edit_lock','1505311584:1'),
	(123,4,'_edit_last','1'),
	(124,7,'_edit_lock','1505311649:1'),
	(125,7,'_edit_last','1'),
	(126,7,'_wp_page_template','default'),
	(127,39,'_edit_last','1'),
	(128,39,'_wp_page_template','default'),
	(129,39,'_edit_lock','1508162944:1'),
	(130,42,'_edit_last','1'),
	(131,42,'_wp_page_template','save-signup.php'),
	(132,42,'_edit_lock','1509369659:1'),
	(133,45,'_edit_last','1'),
	(136,45,'_edit_lock','1509449319:1'),
	(137,47,'_edit_last','1'),
	(140,47,'_edit_lock','1509449313:1'),
	(141,49,'_edit_last','1'),
	(144,49,'_edit_lock','1509449302:1'),
	(145,51,'_edit_last','1'),
	(148,51,'_edit_lock','1509461371:1');

/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_posts`;

CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
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
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_posts` WRITE;
/*!40000 ALTER TABLE `wp_posts` DISABLE KEYS */;

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`)
VALUES
	(1,1,'2017-09-07 10:00:47','2017-09-07 08:00:47','[:en]Welcome to WordPress. This is your first post. Edit or delete it, then start writing![:sv]Svensk text![:]','[:en]Hello world![:sv]Hej världen![:]','','publish','open','open','','hello-world','','','2017-10-31 12:28:49','2017-10-31 11:28:49','',0,'http://localhost:8888/?p=1',0,'post','',1),
	(4,1,'2017-09-07 11:41:01','2017-09-07 11:41:01','','[:en]Products[:sv]Produkter[:]','','publish','closed','closed','','shop','','','2017-09-13 16:08:46','2017-09-13 14:08:46','',0,'http://localhost:8888/shop/',0,'page','',0),
	(5,1,'2017-09-07 11:41:01','2017-09-07 11:41:01','[woocommerce_cart]','[:en]Cart[:sv]Kundvagn[:]','','publish','closed','closed','','cart','','','2017-09-13 16:06:20','2017-09-13 14:06:20','',0,'http://localhost:8888/cart/',0,'page','',0),
	(6,1,'2017-09-07 11:41:01','2017-09-07 11:41:01','[woocommerce_checkout]','[:en]Checkout[:sv]Kassa[:]','','publish','closed','closed','','checkout','','','2017-09-13 16:08:23','2017-09-13 14:08:23','',0,'http://localhost:8888/checkout/',0,'page','',0),
	(7,1,'2017-09-07 11:41:01','2017-09-07 11:41:01','[woocommerce_my_account]','[:en]My account[:sv]Mitt konto[:]','','publish','closed','closed','','my-account','','','2017-09-13 16:09:02','2017-09-13 14:09:02','',0,'http://localhost:8888/my-account/',0,'page','',0),
	(10,1,'2017-09-07 11:54:34','2017-09-07 11:54:34','test','test','test','publish','open','closed','','test','','','2017-09-07 11:54:34','2017-09-07 11:54:34','',0,'http://localhost:8888/?post_type=product&#038;p=10',0,'product','',0),
	(11,1,'2017-09-07 11:54:05','2017-09-07 11:54:05','','5i13KQL - Imgur','','inherit','open','closed','','5i13kql-imgur','','','2017-09-07 11:54:05','2017-09-07 11:54:05','',10,'/wp-content/uploads/woocommerce_uploads/2017/09/5i13KQL-Imgur.gif',0,'attachment','image/gif',0),
	(13,1,'2017-09-11 12:08:56','2017-09-11 10:08:56','Body','Vad är värdskap?','','publish','closed','closed','','vad-ar-vardskap','','','2017-09-11 12:08:56','2017-09-11 10:08:56','',0,'http://localhost:8888/?page_id=13',0,'page','',0),
	(14,1,'2017-09-11 12:08:56','2017-09-11 10:08:56','Body','Vad är värdskap?','','inherit','closed','closed','','13-revision-v1','','','2017-09-11 12:08:56','2017-09-11 10:08:56','',13,'http://localhost:8888/2017/09/11/13-revision-v1/',0,'revision','',0),
	(15,1,'2017-09-11 12:09:14','2017-09-11 10:09:14','','[:en]Art of Welcoming[:sv]Konsten att välkomna[:]','','publish','closed','closed','','art-of-welcoming','','','2017-09-13 16:06:36','2017-09-13 14:06:36','',0,'http://localhost:8888/?page_id=15',0,'page','',0),
	(16,1,'2017-09-11 12:09:14','2017-09-11 10:09:14','','Art of Welcoming','','inherit','closed','closed','','15-revision-v1','','','2017-09-11 12:09:14','2017-09-11 10:09:14','',15,'http://localhost:8888/2017/09/11/15-revision-v1/',0,'revision','',0),
	(17,1,'2017-09-11 12:09:29','2017-09-11 10:09:29','','Våra tjänster + Hitta rätt produkt','','publish','closed','closed','','vara-tjanster-hitta-ratt-produkt','','','2017-09-11 12:09:29','2017-09-11 10:09:29','',0,'http://localhost:8888/?page_id=17',0,'page','',0),
	(18,1,'2017-09-11 12:09:29','2017-09-11 10:09:29','','Våra tjänster + Hitta rätt produkt','','inherit','closed','closed','','17-revision-v1','','','2017-09-11 12:09:29','2017-09-11 10:09:29','',17,'http://localhost:8888/2017/09/11/17-revision-v1/',0,'revision','',0),
	(19,1,'2017-09-11 12:10:10','2017-09-11 10:10:10','','[:en]Lectures[:sv]Föreläsningar[:]','','publish','closed','closed','','forelasningar','','','2017-09-13 16:06:49','2017-09-13 14:06:49','',0,'http://localhost:8888/?page_id=19',0,'page','',0),
	(20,1,'2017-09-11 12:10:10','2017-09-11 10:10:10','','Föreläsningar','','inherit','closed','closed','','19-revision-v1','','','2017-09-11 12:10:10','2017-09-11 10:10:10','',19,'http://localhost:8888/2017/09/11/19-revision-v1/',0,'revision','',0),
	(21,1,'2017-09-11 12:10:25','2017-09-11 10:10:25','','[:en]Contact / About us[:sv]Kontakt / Om oss[:]','','publish','closed','closed','','kontakt-om-oss','','','2017-09-13 16:07:18','2017-09-13 14:07:18','',0,'http://localhost:8888/?page_id=21',0,'page','',0),
	(22,1,'2017-09-11 12:10:25','2017-09-11 10:10:25','','Kontakt / Om oss','','inherit','closed','closed','','21-revision-v1','','','2017-09-11 12:10:25','2017-09-11 10:10:25','',21,'http://localhost:8888/2017/09/11/21-revision-v1/',0,'revision','',0),
	(25,1,'2017-09-11 12:11:26','2017-09-11 10:11:26','','[:en]Blog[:sv]Blogg[:]','','publish','closed','closed','','blog','','','2017-09-13 16:06:58','2017-09-13 14:06:58','',0,'http://localhost:8888/?page_id=25',0,'page','',0),
	(26,1,'2017-09-11 12:11:26','2017-09-11 10:11:26','','Blog','','inherit','closed','closed','','25-revision-v1','','','2017-09-11 12:11:26','2017-09-11 10:11:26','',25,'http://localhost:8888/2017/09/11/25-revision-v1/',0,'revision','',0),
	(28,1,'2017-09-11 12:37:27','2017-09-11 10:37:27','','Order &ndash; September 11, 2017 @ 12:37 PM','','wc-cancelled','open','closed','order_59b66767cfa0f','order-sep-11-2017-1037-am','','','2017-09-11 14:42:45','2017-09-11 12:42:45','',0,'http://localhost:8888/?post_type=shop_order&#038;p=28',0,'shop_order','',2),
	(29,1,'2017-09-11 15:20:37','2017-09-11 13:20:37','[:en]Welcome to WordPress. This is your first post. Edit or delete it, then start writing![:sv]Svensk text![:]','[:en]Hello world![:sv]Hej världen![:]','','inherit','closed','closed','','1-revision-v1','','','2017-09-11 15:20:37','2017-09-11 13:20:37','',1,'http://localhost:8888/2017/09/11/1-revision-v1/',0,'revision','',0),
	(30,1,'2017-09-13 16:06:20','2017-09-13 14:06:20','[woocommerce_cart]','[:en]Cart[:sv]Kundvagn[:]','','inherit','closed','closed','','5-revision-v1','','','2017-09-13 16:06:20','2017-09-13 14:06:20','',5,'http://localhost:8888/2017/09/13/5-revision-v1/',0,'revision','',0),
	(31,1,'2017-09-13 16:06:36','2017-09-13 14:06:36','','[:en]Art of Welcoming[:sv]Konsten att välkomna[:]','','inherit','closed','closed','','15-revision-v1','','','2017-09-13 16:06:36','2017-09-13 14:06:36','',15,'http://localhost:8888/2017/09/13/15-revision-v1/',0,'revision','',0),
	(32,1,'2017-09-13 16:06:49','2017-09-13 14:06:49','','[:en]Lectures[:sv]Föreläsningar[:]','','inherit','closed','closed','','19-revision-v1','','','2017-09-13 16:06:49','2017-09-13 14:06:49','',19,'http://localhost:8888/2017/09/13/19-revision-v1/',0,'revision','',0),
	(33,1,'2017-09-13 16:06:58','2017-09-13 14:06:58','','[:en]Blog[:sv]Blogg[:]','','inherit','closed','closed','','25-revision-v1','','','2017-09-13 16:06:58','2017-09-13 14:06:58','',25,'http://localhost:8888/2017/09/13/25-revision-v1/',0,'revision','',0),
	(34,1,'2017-09-13 16:07:18','2017-09-13 14:07:18','','[:en]Contact / About us[:sv]Kontakt / Om oss[:]','','inherit','closed','closed','','21-revision-v1','','','2017-09-13 16:07:18','2017-09-13 14:07:18','',21,'http://localhost:8888/2017/09/13/21-revision-v1/',0,'revision','',0),
	(35,1,'2017-09-13 16:08:23','2017-09-13 14:08:23','[woocommerce_checkout]','[:en]Checkout[:sv]Kassa[:]','','inherit','closed','closed','','6-revision-v1','','','2017-09-13 16:08:23','2017-09-13 14:08:23','',6,'http://localhost:8888/2017/09/13/6-revision-v1/',0,'revision','',0),
	(36,1,'2017-09-13 16:08:46','2017-09-13 14:08:46','','[:en]Products[:sv]Produkter[:]','','inherit','closed','closed','','4-revision-v1','','','2017-09-13 16:08:46','2017-09-13 14:08:46','',4,'http://localhost:8888/2017/09/13/4-revision-v1/',0,'revision','',0),
	(37,1,'2017-09-13 16:09:02','2017-09-13 14:09:02','[woocommerce_my_account]','[:en]My account[:sv]Mitt konto[:]','','inherit','closed','closed','','7-revision-v1','','','2017-09-13 16:09:02','2017-09-13 14:09:02','',7,'http://localhost:8888/2017/09/13/7-revision-v1/',0,'revision','',0),
	(39,1,'2017-10-16 16:11:26','2017-10-16 14:11:26','','[:en]Our Services[:sv]Våra tjänster[:]','','publish','closed','closed','','our-services','','','2017-10-16 16:11:26','2017-10-16 14:11:26','',0,'http://localhost:8888/?page_id=39',0,'page','',0),
	(40,1,'2017-10-16 16:11:26','2017-10-16 14:11:26','','[:en]Our Services[:sv]Våra tjänster[:]','','inherit','closed','closed','','39-revision-v1','','','2017-10-16 16:11:26','2017-10-16 14:11:26','',39,'http://localhost:8888/2017/10/16/39-revision-v1/',0,'revision','',0),
	(41,1,'2017-10-30 14:18:10','0000-00-00 00:00:00','','Auto Draft','','auto-draft','open','open','','','','','2017-10-30 14:18:10','0000-00-00 00:00:00','',0,'http://localhost:8888/?p=41',0,'post','',0),
	(42,1,'2017-10-30 14:19:23','2017-10-30 13:19:23','','[:en]Save Signup[:]','','publish','closed','closed','','save-signup','','','2017-10-30 14:23:07','2017-10-30 13:23:07','',0,'http://localhost:8888/?page_id=42',0,'page','',0),
	(43,1,'2017-10-30 14:19:23','2017-10-30 13:19:23','','[:en]Save Signup[:]','','inherit','closed','closed','','42-revision-v1','','','2017-10-30 14:19:23','2017-10-30 13:19:23','',42,'http://localhost:8888/2017/10/30/42-revision-v1/',0,'revision','',0),
	(44,1,'2017-10-31 11:38:57','0000-00-00 00:00:00','','Auto Draft','','auto-draft','closed','closed','','','','','2017-10-31 11:38:57','0000-00-00 00:00:00','',0,'http://localhost:8888/?post_type=acf&p=44',0,'acf','',0),
	(45,1,'2017-10-31 12:10:35','2017-10-31 11:10:35','[:en]test[:]','[:en]test[:]','','publish','open','open','','test','','','2017-10-31 12:28:39','2017-10-31 11:28:39','',0,'http://localhost:8888/?p=45',0,'post','',0),
	(46,1,'2017-10-31 12:10:35','2017-10-31 11:10:35','[:en]test[:]','[:en]test[:]','','inherit','closed','closed','','45-revision-v1','','','2017-10-31 12:10:35','2017-10-31 11:10:35','',45,'http://localhost:8888/2017/10/31/45-revision-v1/',0,'revision','',0),
	(47,1,'2017-10-31 12:10:44','2017-10-31 11:10:44','[:en]test[:]','[:en]test[:]','','publish','open','open','','test-2','','','2017-10-31 12:28:33','2017-10-31 11:28:33','',0,'http://localhost:8888/?p=47',0,'post','',0),
	(48,1,'2017-10-31 12:10:44','2017-10-31 11:10:44','[:en]test[:]','[:en]test[:]','','inherit','closed','closed','','47-revision-v1','','','2017-10-31 12:10:44','2017-10-31 11:10:44','',47,'http://localhost:8888/2017/10/31/47-revision-v1/',0,'revision','',0),
	(49,1,'2017-10-31 12:10:53','2017-10-31 11:10:53','[:en]teststtss[:]','[:en]test[:]','','publish','open','open','','test-3','','','2017-10-31 12:28:22','2017-10-31 11:28:22','',0,'http://localhost:8888/?p=49',0,'post','',0),
	(50,1,'2017-10-31 12:10:53','2017-10-31 11:10:53','[:en]teststtss[:]','[:en]test[:]','','inherit','closed','closed','','49-revision-v1','','','2017-10-31 12:10:53','2017-10-31 11:10:53','',49,'http://localhost:8888/2017/10/31/49-revision-v1/',0,'revision','',0),
	(51,1,'2017-10-31 12:11:04','2017-10-31 11:11:04','[:en]test 4[:]','[:en]test 4[:]','','publish','open','open','','test-4','','','2017-10-31 12:28:10','2017-10-31 11:28:10','',0,'http://localhost:8888/?p=51',0,'post','',0),
	(52,1,'2017-10-31 12:11:04','2017-10-31 11:11:04','[:en]test 4[:]','[:en]test 4[:]','','inherit','closed','closed','','51-revision-v1','','','2017-10-31 12:11:04','2017-10-31 11:11:04','',51,'http://localhost:8888/2017/10/31/51-revision-v1/',0,'revision','',0);

/*!40000 ALTER TABLE `wp_posts` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_term_relationships
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_term_relationships`;

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_term_relationships` WRITE;
/*!40000 ALTER TABLE `wp_term_relationships` DISABLE KEYS */;

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`)
VALUES
	(1,16,0),
	(10,2,0),
	(45,16,0),
	(47,16,0),
	(49,16,0),
	(51,15,0),
	(51,16,0);

/*!40000 ALTER TABLE `wp_term_relationships` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_term_taxonomy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_term_taxonomy`;

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_term_taxonomy` WRITE;
/*!40000 ALTER TABLE `wp_term_taxonomy` DISABLE KEYS */;

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`)
VALUES
	(1,1,'category','',0,0),
	(2,2,'product_type','',0,1),
	(3,3,'product_type','',0,0),
	(4,4,'product_type','',0,0),
	(5,5,'product_type','',0,0),
	(6,6,'product_visibility','',0,0),
	(7,7,'product_visibility','',0,0),
	(8,8,'product_visibility','',0,0),
	(9,9,'product_visibility','',0,0),
	(10,10,'product_visibility','',0,0),
	(11,11,'product_visibility','',0,0),
	(12,12,'product_visibility','',0,0),
	(13,13,'product_visibility','',0,0),
	(14,14,'product_visibility','',0,0),
	(15,15,'category','',0,1),
	(16,16,'category','',0,5),
	(17,17,'category','',0,0);

/*!40000 ALTER TABLE `wp_term_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_termmeta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_termmeta`;

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_terms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_terms`;

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_terms` WRITE;
/*!40000 ALTER TABLE `wp_terms` DISABLE KEYS */;

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`)
VALUES
	(1,'Uncategorized','uncategorized',0),
	(2,'simple','simple',0),
	(3,'grouped','grouped',0),
	(4,'variable','variable',0),
	(5,'external','external',0),
	(6,'exclude-from-search','exclude-from-search',0),
	(7,'exclude-from-catalog','exclude-from-catalog',0),
	(8,'featured','featured',0),
	(9,'outofstock','outofstock',0),
	(10,'rated-1','rated-1',0),
	(11,'rated-2','rated-2',0),
	(12,'rated-3','rated-3',0),
	(13,'rated-4','rated-4',0),
	(14,'rated-5','rated-5',0),
	(15,'Respect','respect',0),
	(16,'Dignity','dignity',0),
	(17,'Consideration','consideration',0);

/*!40000 ALTER TABLE `wp_terms` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_usermeta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_usermeta`;

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`)
VALUES
	(1,1,'nickname','admin'),
	(2,1,'first_name','Emil'),
	(3,1,'last_name','Jönsson'),
	(4,1,'description',''),
	(5,1,'rich_editing','true'),
	(6,1,'comment_shortcuts','false'),
	(7,1,'admin_color','fresh'),
	(8,1,'use_ssl','0'),
	(9,1,'show_admin_bar_front','true'),
	(10,1,'locale',''),
	(11,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),
	(12,1,'wp_user_level','10'),
	(13,1,'dismissed_wp_pointers',''),
	(14,1,'show_welcome_panel','1'),
	(16,1,'wp_user-settings','libraryContent=browse&mfold=o&hidetb=0'),
	(17,1,'wp_user-settings-time','1504778451'),
	(18,1,'wp_dashboard_quick_press_last_post_id','41'),
	(19,1,'community-events-location','a:1:{s:2:\"ip\";s:2:\"::\";}'),
	(20,1,'_woocommerce_persistent_cart_1','a:1:{s:4:\"cart\";a:1:{s:32:\"d3d9446802a44259755d38e6d163e820\";a:9:{s:10:\"product_id\";i:10;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:1;s:10:\"line_total\";i:100;s:13:\"line_subtotal\";i:100;s:8:\"line_tax\";i:0;s:17:\"line_subtotal_tax\";i:0;s:13:\"line_tax_data\";a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}}}}'),
	(21,1,'last_update','1505126247'),
	(22,1,'billing_first_name','Emil'),
	(23,1,'billing_last_name','Jönsson'),
	(24,1,'billing_address_1','Awadasdsd'),
	(25,1,'billing_city','Stockholm'),
	(26,1,'billing_postcode','12234'),
	(27,1,'billing_country','SE'),
	(28,1,'billing_email','emil.jonsson@reformact.se'),
	(29,1,'billing_phone','0729620441'),
	(30,1,'shipping_method',''),
	(32,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
	(33,1,'metaboxhidden_nav-menus','a:4:{i:0;s:21:\"add-post-type-product\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-product_cat\";i:3;s:15:\"add-product_tag\";}'),
	(34,1,'closedpostboxes_page','a:1:{i:0;s:20:\"qtranxs-meta-box-lsb\";}'),
	(35,1,'metaboxhidden_page','a:3:{i:0;s:10:\"postcustom\";i:1;s:16:\"commentstatusdiv\";i:2;s:9:\"authordiv\";}'),
	(36,1,'session_tokens','a:1:{s:64:\"5e97543ad42ce4d83fbe473489803f09e0a541cce45a9100eab27dec5240b225\";a:4:{s:10:\"expiration\";i:1509731601;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36\";s:5:\"login\";i:1509558801;}}'),
	(37,1,'wp_tablepress_user_options','{\"user_options_db_version\":35,\"admin_menu_parent_page\":\"middle\",\"message_first_visit\":true}'),
	(38,1,'managetablepress_listcolumnshidden','a:1:{i:0;s:22:\"table_last_modified_by\";}');

/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_users`;

CREATE TABLE `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_users` WRITE;
/*!40000 ALTER TABLE `wp_users` DISABLE KEYS */;

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`)
VALUES
	(1,'admin','$P$BmS6OP/xvq/62zVB2k4/ZDvCMZMNzJ0','admin','karlperemil@gmail.com','','2017-09-07 10:00:47','',0,'admin');

/*!40000 ALTER TABLE `wp_users` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_woocommerce_api_keys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_api_keys`;

CREATE TABLE `wp_woocommerce_api_keys` (
  `key_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_key` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_secret` char(43) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nonces` longtext COLLATE utf8mb4_unicode_ci,
  `truncated_key` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_access` datetime DEFAULT NULL,
  PRIMARY KEY (`key_id`),
  KEY `consumer_key` (`consumer_key`),
  KEY `consumer_secret` (`consumer_secret`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_attribute_taxonomies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_attribute_taxonomies`;

CREATE TABLE `wp_woocommerce_attribute_taxonomies` (
  `attribute_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_label` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_orderby` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_public` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`attribute_id`),
  KEY `attribute_name` (`attribute_name`(20))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_downloadable_product_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_downloadable_product_permissions`;

CREATE TABLE `wp_woocommerce_downloadable_product_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `download_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `order_key` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `downloads_remaining` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_granted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access_expires` datetime DEFAULT NULL,
  `download_count` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`permission_id`),
  KEY `download_order_key_product` (`product_id`,`order_id`,`order_key`(16),`download_id`),
  KEY `download_order_product` (`download_id`,`order_id`,`product_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_log`;

CREATE TABLE `wp_woocommerce_log` (
  `log_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `level` smallint(4) NOT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`log_id`),
  KEY `level` (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_order_itemmeta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_order_itemmeta`;

CREATE TABLE `wp_woocommerce_order_itemmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_item_id` bigint(20) unsigned NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `order_item_id` (`order_item_id`),
  KEY `meta_key` (`meta_key`(32))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_woocommerce_order_itemmeta` WRITE;
/*!40000 ALTER TABLE `wp_woocommerce_order_itemmeta` DISABLE KEYS */;

INSERT INTO `wp_woocommerce_order_itemmeta` (`meta_id`, `order_item_id`, `meta_key`, `meta_value`)
VALUES
	(1,1,'_product_id','10'),
	(2,1,'_variation_id','0'),
	(3,1,'_qty','1'),
	(4,1,'_tax_class',''),
	(5,1,'_line_subtotal','100'),
	(6,1,'_line_subtotal_tax','0'),
	(7,1,'_line_total','100'),
	(8,1,'_line_tax','0'),
	(9,1,'_line_tax_data','a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}');

/*!40000 ALTER TABLE `wp_woocommerce_order_itemmeta` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_woocommerce_order_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_order_items`;

CREATE TABLE `wp_woocommerce_order_items` (
  `order_item_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_item_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `order_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`order_item_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_woocommerce_order_items` WRITE;
/*!40000 ALTER TABLE `wp_woocommerce_order_items` DISABLE KEYS */;

INSERT INTO `wp_woocommerce_order_items` (`order_item_id`, `order_item_name`, `order_item_type`, `order_id`)
VALUES
	(1,'test','line_item',28);

/*!40000 ALTER TABLE `wp_woocommerce_order_items` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_woocommerce_payment_tokenmeta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_payment_tokenmeta`;

CREATE TABLE `wp_woocommerce_payment_tokenmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `payment_token_id` bigint(20) unsigned NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `payment_token_id` (`payment_token_id`),
  KEY `meta_key` (`meta_key`(32))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_payment_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_payment_tokens`;

CREATE TABLE `wp_woocommerce_payment_tokens` (
  `token_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gateway_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`token_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_sessions`;

CREATE TABLE `wp_woocommerce_sessions` (
  `session_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `session_key` char(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_expiry` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`session_key`),
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `wp_woocommerce_sessions` WRITE;
/*!40000 ALTER TABLE `wp_woocommerce_sessions` DISABLE KEYS */;

INSERT INTO `wp_woocommerce_sessions` (`session_id`, `session_key`, `session_value`, `session_expiry`)
VALUES
	(6,'1','a:19:{s:8:\"customer\";s:730:\"a:25:{s:2:\"id\";i:1;s:8:\"postcode\";s:5:\"12234\";s:4:\"city\";s:9:\"Stockholm\";s:9:\"address_1\";s:9:\"Awadasdsd\";s:7:\"address\";s:9:\"Awadasdsd\";s:9:\"address_2\";s:0:\"\";s:5:\"state\";s:0:\"\";s:7:\"country\";s:2:\"SE\";s:17:\"shipping_postcode\";s:0:\"\";s:13:\"shipping_city\";s:0:\"\";s:18:\"shipping_address_1\";s:0:\"\";s:16:\"shipping_address\";s:0:\"\";s:18:\"shipping_address_2\";s:0:\"\";s:14:\"shipping_state\";s:0:\"\";s:16:\"shipping_country\";s:2:\"SE\";s:13:\"is_vat_exempt\";b:0;s:19:\"calculated_shipping\";b:0;s:10:\"first_name\";s:4:\"Emil\";s:9:\"last_name\";s:8:\"Jönsson\";s:7:\"company\";s:0:\"\";s:5:\"phone\";s:10:\"0729620441\";s:5:\"email\";s:25:\"emil.jonsson@reformact.se\";s:19:\"shipping_first_name\";s:0:\"\";s:18:\"shipping_last_name\";s:0:\"\";s:16:\"shipping_company\";s:0:\"\";}\";s:4:\"cart\";s:305:\"a:1:{s:32:\"d3d9446802a44259755d38e6d163e820\";a:9:{s:10:\"product_id\";i:10;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:1;s:10:\"line_total\";i:100;s:13:\"line_subtotal\";i:100;s:8:\"line_tax\";i:0;s:17:\"line_subtotal_tax\";i:0;s:13:\"line_tax_data\";a:2:{s:5:\"total\";a:0:{}s:8:\"subtotal\";a:0:{}}}}\";s:15:\"applied_coupons\";s:6:\"a:0:{}\";s:23:\"coupon_discount_amounts\";s:6:\"a:0:{}\";s:27:\"coupon_discount_tax_amounts\";s:6:\"a:0:{}\";s:21:\"removed_cart_contents\";s:6:\"a:0:{}\";s:19:\"cart_contents_total\";i:100;s:5:\"total\";i:0;s:8:\"subtotal\";i:100;s:15:\"subtotal_ex_tax\";i:100;s:9:\"tax_total\";i:0;s:5:\"taxes\";s:6:\"a:0:{}\";s:14:\"shipping_taxes\";s:6:\"a:0:{}\";s:13:\"discount_cart\";i:0;s:17:\"discount_cart_tax\";i:0;s:14:\"shipping_total\";i:0;s:18:\"shipping_tax_total\";i:0;s:9:\"fee_total\";i:0;s:4:\"fees\";s:6:\"a:0:{}\";}',1509720156);

/*!40000 ALTER TABLE `wp_woocommerce_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Tabelldump wp_woocommerce_shipping_zone_locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_shipping_zone_locations`;

CREATE TABLE `wp_woocommerce_shipping_zone_locations` (
  `location_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `zone_id` bigint(20) unsigned NOT NULL,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`location_id`),
  KEY `location_id` (`location_id`),
  KEY `location_type_code` (`location_type`(10),`location_code`(20))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_shipping_zone_methods
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_shipping_zone_methods`;

CREATE TABLE `wp_woocommerce_shipping_zone_methods` (
  `zone_id` bigint(20) unsigned NOT NULL,
  `instance_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `method_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_order` bigint(20) unsigned NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`instance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_shipping_zones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_shipping_zones`;

CREATE TABLE `wp_woocommerce_shipping_zones` (
  `zone_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_order` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_tax_rate_locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_tax_rate_locations`;

CREATE TABLE `wp_woocommerce_tax_rate_locations` (
  `location_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_rate_id` bigint(20) unsigned NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`location_id`),
  KEY `tax_rate_id` (`tax_rate_id`),
  KEY `location_type_code` (`location_type`(10),`location_code`(20))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Tabelldump wp_woocommerce_tax_rates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wp_woocommerce_tax_rates`;

CREATE TABLE `wp_woocommerce_tax_rates` (
  `tax_rate_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tax_rate_country` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate_state` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tax_rate_priority` bigint(20) unsigned NOT NULL,
  `tax_rate_compound` int(1) NOT NULL DEFAULT '0',
  `tax_rate_shipping` int(1) NOT NULL DEFAULT '1',
  `tax_rate_order` bigint(20) unsigned NOT NULL,
  `tax_rate_class` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`tax_rate_id`),
  KEY `tax_rate_country` (`tax_rate_country`),
  KEY `tax_rate_state` (`tax_rate_state`(2)),
  KEY `tax_rate_class` (`tax_rate_class`(10)),
  KEY `tax_rate_priority` (`tax_rate_priority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
