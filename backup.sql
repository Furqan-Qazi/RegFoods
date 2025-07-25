/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - resturant
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`resturant` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `resturant`;

/*Table structure for table `billing_addresses` */

DROP TABLE IF EXISTS `billing_addresses`;

CREATE TABLE `billing_addresses` (
  `billing_addresse_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) NOT NULL,
  `apartment_suite` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `additional_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`billing_addresse_id`),
  KEY `billing_addresses_user_id_foreign` (`user_id`),
  CONSTRAINT `billing_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `billing_addresses` */

insert  into `billing_addresses`(`billing_addresse_id`,`user_id`,`first_name`,`last_name`,`company_name`,`street_address`,`apartment_suite`,`city`,`state`,`zip`,`phone`,`email`,`additional_info`,`created_at`,`updated_at`) values 
(2,2,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this is our order','2025-07-01 16:49:50','2025-07-01 16:49:50'),
(3,2,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this is our order','2025-07-01 16:52:13','2025-07-01 16:52:13'),
(4,2,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this is our order','2025-07-01 16:53:39','2025-07-01 16:53:39'),
(5,2,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this is our order','2025-07-01 16:54:23','2025-07-01 16:54:23'),
(6,2,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this is our order','2025-07-01 16:54:55','2025-07-01 16:54:55'),
(7,2,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this is our order','2025-07-01 16:57:57','2025-07-01 16:57:57'),
(8,2,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this is our order','2025-07-01 17:03:01','2025-07-01 17:03:01'),
(9,4,'krisha','maraj','onlinecare','98PJ+PP3, Block - I Phase 1 Qasimabad, Hyderabad Hyderabad',NULL,'98PJ+PP3, Block - I Phase 1 Qasimabad, Hyderabad Hyderabad','hyderabad','best','03160307062','furqanqazi899@gmail.com','plzzz come early','2025-07-01 17:07:37','2025-07-01 17:07:37'),
(10,NULL,'lozer','shoy','taj international','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','hyderabad','best','03160307062','furqanqazi899@gmail.com','if need for address call me','2025-07-03 16:22:55','2025-07-03 16:22:55'),
(11,NULL,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','tt','2025-07-07 15:15:49','2025-07-07 15:15:49'),
(12,NULL,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this','2025-07-08 10:17:04','2025-07-08 10:17:04'),
(13,NULL,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','peshwar','best','03160307062','furqanqazi899@gmail.com','this','2025-07-08 10:42:21','2025-07-08 10:42:21'),
(14,NULL,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','hi','best','03160307062','furqanqazi899@gmail.com','te','2025-07-08 10:44:14','2025-07-08 10:44:14'),
(15,NULL,'furqan','qazi','dreamer','house/e/29 hyderabad','QASimabad','house/e/29 hyderabad','hyderabad','best','03160307062','furqanqazi899@gmail.com','grfDsdfddf','2025-07-08 10:47:20','2025-07-08 10:47:20'),
(16,NULL,'sheikh','qazi','dreamer','house/e/29 hyderabad','s','house/e/29 hyderabad','s','best','03160307062','furqanqazi899@gmail.com','s','2025-07-09 16:28:25','2025-07-09 16:28:25'),
(17,NULL,'zain','qazi','dreamer','house/e/29 hyderabad','f','house/e/29 hyderabad','ff','best','03160307062','furqanqazi899@gmail.com','dss','2025-07-09 16:30:44','2025-07-09 16:30:44'),
(18,3,'rizwan','qazi','online','house/e/29 hyderabad','3','house/e/29 hyderabad','hyderabad','best','03160307062','rizwan@gmail.com','we are waiting','2025-07-10 13:14:43','2025-07-10 13:14:43'),
(19,3,'mubashir','qazi','zk','house/56/pakistan','6','house/56/pakistan','quetta','best','03160307062','furqanqazi899@gmail.com','we need extra sauce','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(20,NULL,'salmanaaa','qazi','dreamer','house/e/29 hyderabad','s','house/e/29 hyderabad','hyderabad','best','03160307062','furqanqazi899@gmail.com','sdss','2025-07-15 17:22:50','2025-07-15 17:22:50'),
(21,NULL,'furqan','qazi','dreamer','house/e/29 hyderabad','s','house/e/29 hyderabad','s','best','03160307062','furqanqazi899@gmail.com','dsadsd','2025-07-16 10:51:37','2025-07-16 10:51:37'),
(22,15,'shah','rana','tenco','house/e/29 latifabad','6','house/e/29 latifabad','karachi','best','03160307062','furqanqazi899@gmail.com','we need fast deleivery and plz take extra sauce','2025-07-16 13:49:34','2025-07-16 13:49:34'),
(23,14,'sona','rahib','besto','house/e/29 hyderabad','3','house/e/29 hyderabad','burj','best','03160307062','furqanqazi899@gmail.com','we need','2025-07-16 14:37:04','2025-07-16 14:37:04'),
(24,NULL,'Glenna','Sellers','Mcdonald Bowman LLC','Minus ut aliquip adi','Necessitatibus offic','Provident voluptas','Maxime velit incidid','64664','+1 (158) 157-8208','jalyd@mailinator.com','Omnis facilis dolore','2025-07-16 16:07:55','2025-07-16 16:07:55'),
(25,17,'zohaib','qazi','now','house/33','1','house/33','qaziabad','best','03160307062','mzohaib91@gmail.com','we are waiting you','2025-07-18 16:52:36','2025-07-18 16:52:36');

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `blog_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `item_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  UNIQUE KEY `blogs_slug_unique` (`slug`),
  KEY `blogs_user_id_foreign` (`user_id`),
  KEY `blogs_item_id_foreign` (`item_id`),
  CONSTRAINT `blogs_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE,
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`blog_id`,`user_id`,`item_id`,`title`,`slug`,`content`,`image`,`created_at`,`updated_at`) values 
(5,4,1,'Biryani is a flavorful, mixed rice dish popular in South Asia,','biryani-is-a-flavorful-mixed-rice-dish-popular-in-south-asia','AI Overview\r\nBiryani is a flavorful, mixed rice dish popular in South Asia, known for its fragrant rice, aromatic spices, and choice of meat (like chicken, lamb, or goat) or vegetables. It\'s a beloved dish with numerous regional variations, each boasting unique flavor profiles and preparation styles. From the spicy Hyderabadi biryani t','1751645738.jpg','2025-07-17 16:15:38','2025-07-04 16:15:38'),
(6,3,2,'So a vegetarian pizza is the same as a vegan pizza','so-a-vegetarian-pizza-is-the-same-as-a-vegan-pizza','Vegetable pizza, a delicious and customizable dish, is a popular choice for those seeking a flavorful and healthy meal. It typically features a baked dough base topped with tomato sauce, mozzarella cheese, and an array of colorful vegetables like bell peppers, onions, mushrooms, and olives. Many variations exist, with some even incorpo','1751645830.jpg','2025-07-04 16:17:10','2025-07-04 16:17:10'),
(9,4,5,'Vegetable Sushi Recipe You’ll Love in 15 Minutes\"','vegetable-sushi-recipe-youll-love-in-15-minutes','Cook the sushi rice and let it cool slightly. Add a bit of rice vinegar, sugar, and salt for flavor\r\nPlace a sheet of nori on a bamboo sushi mat. Spread a thin layer of rice evenly on top.','1751895793.jpg','2025-07-16 13:43:13','2025-07-07 13:43:13'),
(11,2,7,'Perfects Ending to Any Meal','perfects-ending-to-any-meal','Whether you\'re ending a romantic dinner or celebrating with friends, Chocolate Lava Cake makes every occasion extra special. Pair it with vanilla ice cream or fresh berries for the perfect balance.','1751900176.jpg','2025-07-13 14:56:16','2025-07-10 15:18:45'),
(12,2,8,'Irresistible Zinger Burger','irresistible-zinger-burger','Each Zinger Burger comes stacked with lettuce, mayo, and a juicy chicken breast fillet that\'s crispy on the outside and tender on the inside. It’s a powerful combination of flavor and texture that makes its a favorite.','1751900351.jpg','2025-07-21 14:59:11','2025-07-10 15:12:05'),
(13,4,9,'To prevent your Biryani from becoming sticky or mushy,','to-prevent-your-biryani-from-becoming-sticky-or-mushy','To prevent your Biryani from becoming sticky or mushy, make sure the rice is not fully cooked before layering with the Biryani masala, meat and vegetables. It can then finish cooking in the oven for twenty minutes or so. Every meat dish tastes better when it\'s left to marinate overnight.','1751928067.jpg','2025-07-27 22:41:07','2025-07-07 22:41:07'),
(14,3,12,'Indulge in the Richness of Chocolate Fudge Ice Cream','indulge-in-the-richness-of-chocolate-fudge-ice-cream','With its creamy texture, rich cocoa flavor, and swirls of thick fudge, it offers a perfect escape on a sunny day or after a meal. Whether in a cone, cup, or layered in a sundae, it melts your worries away with every scoop.','1751928863.jpg','2025-07-30 22:54:23','2025-07-07 22:54:23');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`category_id`,`name`,`created_at`,`updated_at`) values 
(1,'biryani','2025-07-01 16:26:49','2025-07-01 16:26:49'),
(2,'pizza','2025-07-01 16:26:58','2025-07-01 16:26:58'),
(3,'roll','2025-07-01 16:27:06','2025-07-01 16:27:06'),
(4,'ice cream','2025-07-01 16:27:14','2025-07-01 16:27:14'),
(5,'sandwitch','2025-07-01 16:27:34','2025-07-01 16:27:34'),
(6,'zinger','2025-07-07 18:32:32','2025-07-07 18:32:35'),
(7,'sweet','2025-07-07 18:32:53','2025-07-07 18:32:58'),
(8,'Pasta','2025-07-07 18:34:32','2025-07-07 18:34:33'),
(9,'Sushi','2025-07-07 18:34:43','2025-07-15 14:38:03');

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `contact_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contact_id`),
  KEY `contacts_user_id_foreign` (`user_id`),
  CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contacts` */

insert  into `contacts`(`contact_id`,`user_id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) values 
(1,NULL,'furqan qazi','furqanqazi899@gmail.com','03160307062','mail','websolutionus1@gmail.com\r\n\r\nexample@gmail.com','2025-07-01 16:24:03','2025-07-01 16:24:03'),
(2,2,'jofer','jofer549@gmail.com','03160307062','job','i want job plzz contact to me','2025-07-01 17:33:44','2025-07-01 17:33:44');

/*Table structure for table `coupons` */

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `coupon_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `type` enum('percentage','fixed') NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`coupon_id`),
  UNIQUE KEY `coupons_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `coupons` */

insert  into `coupons`(`coupon_id`,`code`,`type`,`value`,`expiry_date`,`is_active`,`created_at`,`updated_at`) values 
(1,'20','percentage',23.00,'2025-07-22',1,'2025-07-01 17:32:44','2025-07-01 17:32:44');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `feedbacks` */

DROP TABLE IF EXISTS `feedbacks`;

CREATE TABLE `feedbacks` (
  `feedback_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `feedbacks_user_id_foreign` (`user_id`),
  CONSTRAINT `feedbacks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `feedbacks` */

insert  into `feedbacks`(`feedback_id`,`user_id`,`name`,`email`,`feedback`,`created_at`,`updated_at`) values 
(1,NULL,'furqan qazi','furqanqazi899@gmail.com','this is again insert','2025-07-01 16:24:42','2025-07-01 16:24:42'),
(2,2,'jofer','jofer549@gmail.com','work of your resturant is good','2025-07-01 17:31:50','2025-07-01 17:31:50'),
(3,NULL,'furqan qazi','furqanqazi899@gmail.com','hey','2025-07-04 17:05:26','2025-07-04 17:05:26');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `item_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `items_category_id_foreign` (`category_id`),
  CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `items` */

insert  into `items`(`item_id`,`name`,`price`,`description`,`image`,`category_id`,`created_at`,`updated_at`) values 
(1,'chicken birynai',250.00,'Biryani is a flavorful, mixed rice dish popular in South Asia, known for its fragrant rice, aromatic spices, and choice of meat (like chicken, lamb, or goat) or vegetables. It\'','1751387365.jpg',1,'2025-07-01 16:29:25','2025-07-01 16:29:25'),
(2,'vagita',19.00,'Sometimes it\'s enjoyable to have your veggies in a fun and scrumptious form, so this is a version of a \'healthy\' pizza. You','1751387424.jpg',2,'2025-07-01 16:30:24','2025-07-01 16:30:24'),
(3,'pista ice cream',43.00,'\r\nPistachio ice cream or pistachio nut ice cream is an ice cream flavor made with pistachio nuts or flavoring','1751387501.jpg',4,'2025-07-01 16:31:41','2025-07-01 16:31:41'),
(4,'club',33.00,'A club sandwich or clubhouse sandwich, is a three-layer sandwich consisting of three slices of bread (traditionally toasted), sliced','1751387566.jpg',5,'2025-07-01 16:32:46','2025-07-01 16:32:46'),
(5,'Vegetable Sushi',12.00,'Load these vegetable sushi rolls up with a variety of vibrant veggies like crisp red pepper, cool cucumber, velvety avocado, and sweet mango','1751895605.jpg',9,'2025-07-07 13:40:05','2025-07-07 13:40:05'),
(6,'Creamy Alfredo Pasta',9.00,'Indulge in our rich and creamy Alfredo Pasta made with tender fettuccine, tossed in a velvety white sauce of parmesan cheese, garlic, and butter.','1751897751.jpg',8,'2025-07-07 14:15:51','2025-07-07 14:15:51'),
(7,'Chocolate Lava Cake',44.00,'One spoonful is all it takes to fall in love with our Chocolate Lava Cake. Treat yourself today!','1751900107.jpg',7,'2025-07-07 14:55:07','2025-07-07 14:55:07'),
(8,'hote zinger',21.00,'What sets the Zinger apart is its crunch. The seasoned chicken fillet is coated in a signature spicy batter and fried to perfection—giving you that mouthwatering crunch in every bite.','1751900290.jpg',6,'2025-07-07 14:58:10','2025-07-07 14:58:10'),
(9,'chicken birynai',1.00,'Mix yogurt, garlic, ginger, garam masala, turmeric, and salt together in a bowl. Add chicken breast; toss to coat evenly. Cover bowl and marinate chicken in the refrigerator, at least 1 hour','1751927741.jpg',1,'2025-07-07 22:35:41','2025-07-07 22:35:41'),
(10,'Margherita Pizza',2.00,'Margherita Pizza is a timeless Italian favorite, made with a thin crust, tangy tomato sauce, melted mozzarella cheese, and fresh basil leaves.','1751928504.jpg',2,'2025-07-07 22:48:24','2025-07-07 22:48:24'),
(11,'Chicken Mayo Roll',4.00,'Chicken Mayo Roll is a street food favorite known for its juicy grilled chicken, creamy mayonnaise, and fresh veggies all wrapped in a soft paratha or tortilla','1751928665.jpg',3,'2025-07-07 22:51:05','2025-07-07 22:51:05'),
(12,'Chocolate Fudge Ice Cream',5.00,'Chocolate Fudge Ice Cream is every dessert lover\'s dream','1751928836.jpg',4,'2025-07-07 22:53:56','2025-07-07 22:53:56');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_100000_create_password_reset_tokens_table',1),
(2,'2019_08_19_000000_create_failed_jobs_table',1),
(3,'2019_12_14_000001_create_personal_access_tokens_table',1),
(4,'2025_06_18_104551_create_roles_table',1),
(5,'2025_06_18_104854_create_users_table',1),
(6,'2025_06_18_125445_create_categories_table',1),
(7,'2025_06_18_125800_create_items_table',1),
(8,'2025_06_18_132752_create_orders_table',1),
(9,'2025_06_18_152827_create_billing_addresses_table',1),
(10,'2025_06_18_153130_create_contacts_table',1),
(11,'2025_06_18_154824_create_payment_details_table',1),
(12,'2025_06_18_155834_create_team_members_table',1),
(13,'2025_06_18_164303_create_order_items_table',1),
(14,'2025_06_18_164641_create_coupons_table',1),
(15,'2025_06_18_171848_create_blogs_table',1),
(16,'2025_06_18_172950_create_testimonials_table',1),
(17,'2025_06_19_160133_create_reviews_table',1),
(18,'2025_06_20_135341_create_feedbacks_table',1),
(19,'2025_06_20_163800_create_reservations_table',1),
(20,'2025_07_08_104014_make_user_id_nullable_in_orders_table',2);

/*Table structure for table `order_items` */

DROP TABLE IF EXISTS `order_items`;

CREATE TABLE `order_items` (
  `order_item_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `item_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_item_id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_item_id_foreign` (`item_id`),
  CONSTRAINT `order_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `order_items` */

insert  into `order_items`(`order_item_id`,`order_id`,`item_id`,`quantity`,`price`,`created_at`,`updated_at`) values 
(1,6,1,1,250.00,'2025-07-01 16:57:57','2025-07-01 16:57:57'),
(2,6,2,1,19.00,'2025-07-01 16:57:57','2025-07-01 16:57:57'),
(3,6,3,2,43.00,'2025-07-01 16:57:57','2025-07-01 16:57:57'),
(4,6,4,1,33.00,'2025-07-01 16:57:57','2025-07-01 16:57:57'),
(5,7,1,1,250.00,'2025-07-01 17:03:01','2025-07-01 17:03:01'),
(6,7,2,1,19.00,'2025-07-01 17:03:01','2025-07-01 17:03:01'),
(7,7,3,2,43.00,'2025-07-01 17:03:01','2025-07-01 17:03:01'),
(8,7,4,1,33.00,'2025-07-01 17:03:01','2025-07-01 17:03:01'),
(9,8,1,3,250.00,'2025-07-01 17:07:37','2025-07-01 17:07:37'),
(13,10,1,3,4.00,'2025-07-08 10:42:21','2025-07-08 10:42:21'),
(14,10,2,2,9.00,'2025-07-08 10:42:21','2025-07-08 10:42:21'),
(15,11,1,4,4.00,'2025-07-08 10:44:14','2025-07-08 10:44:14'),
(16,11,2,2,9.00,'2025-07-08 10:44:14','2025-07-08 10:44:14'),
(17,12,1,4,4.00,'2025-07-08 10:47:20','2025-07-08 10:47:20'),
(18,12,2,5,9.00,'2025-07-08 10:47:20','2025-07-08 10:47:20'),
(19,13,1,7,250.00,'2025-07-09 16:28:25','2025-07-09 16:28:25'),
(20,14,1,3,250.00,'2025-07-09 16:30:44','2025-07-09 16:30:44'),
(21,15,1,1,12.00,'2025-07-10 13:14:43','2025-07-10 13:14:43'),
(22,16,1,1,1.00,'2025-07-11 16:39:25','2025-07-11 16:39:25'),
(23,16,2,1,4.00,'2025-07-11 16:39:25','2025-07-11 16:39:25'),
(24,16,3,2,44.00,'2025-07-11 16:39:25','2025-07-11 16:39:25'),
(25,16,4,1,12.00,'2025-07-11 16:39:25','2025-07-11 16:39:25'),
(26,16,5,1,5.00,'2025-07-11 16:39:25','2025-07-11 16:39:25'),
(27,16,6,1,21.00,'2025-07-11 16:39:25','2025-07-11 16:39:25'),
(28,34,1,1,44.00,'2025-07-15 17:22:50','2025-07-15 17:22:50'),
(29,34,2,3,33.00,'2025-07-15 17:22:50','2025-07-15 17:22:50'),
(30,34,3,1,21.00,'2025-07-15 17:22:50','2025-07-15 17:22:50'),
(31,35,1,1,1.00,'2025-07-16 10:51:37','2025-07-16 10:51:37'),
(32,35,2,2,43.00,'2025-07-16 10:51:37','2025-07-16 10:51:37'),
(33,36,1,1,19.00,'2025-07-16 13:49:34','2025-07-16 13:49:34'),
(34,36,2,1,21.00,'2025-07-16 13:49:34','2025-07-16 13:49:34'),
(35,36,3,1,250.00,'2025-07-16 13:49:34','2025-07-16 13:49:34'),
(36,37,1,1,44.00,'2025-07-16 14:37:04','2025-07-16 14:37:04'),
(37,37,2,3,21.00,'2025-07-16 14:37:04','2025-07-16 14:37:04'),
(38,38,1,2,19.00,'2025-07-16 16:07:55','2025-07-16 16:07:55'),
(39,39,1,3,44.00,'2025-07-18 16:52:36','2025-07-18 16:52:36');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` enum('Pending','Completed','Cancelled') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`order_id`,`user_id`,`total_amount`,`status`,`created_at`,`updated_at`) values 
(1,2,388.00,'Completed','2025-07-18 16:49:50','2025-07-01 16:49:50'),
(2,2,388.00,'Completed','2025-07-02 16:52:13','2025-07-11 14:51:50'),
(4,2,388.00,'Completed','2025-07-11 16:54:23','2025-07-01 16:54:23'),
(5,2,388.00,'Completed','2025-07-12 16:54:55','2025-07-01 16:54:55'),
(6,2,388.00,'Completed','2025-07-30 16:57:57','2025-07-01 16:57:57'),
(7,2,388.00,'Completed','2025-07-15 17:03:01','2025-07-01 17:03:01'),
(8,4,750.00,'Completed','2025-07-20 17:07:37','2025-07-01 17:07:37'),
(10,NULL,30.00,'Completed','2025-07-24 10:42:21','2025-07-08 10:42:21'),
(11,NULL,34.00,'Completed','2025-07-04 10:44:14','2025-07-11 16:54:10'),
(12,NULL,61.00,'Completed','2025-07-13 10:47:20','2025-07-08 10:47:20'),
(13,NULL,1750.00,'Completed','2025-07-09 16:28:25','2025-07-09 16:28:25'),
(14,NULL,750.00,'Pending','2025-07-09 16:30:44','2025-07-09 16:30:44'),
(15,3,12.00,'Pending','2025-07-10 13:14:43','2025-07-11 14:45:18'),
(16,3,131.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(20,10,322.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(22,4,52.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(23,4,84.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(26,3,27.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(27,3,42.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(28,3,42.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(29,3,27.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(30,4,52.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(31,10,322.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(32,3,131.00,'Pending','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(33,3,12.00,'Pending','2025-07-10 13:14:43','2025-07-11 14:45:18'),
(34,NULL,164.00,'Completed','2025-07-15 17:22:50','2025-07-15 17:22:50'),
(35,NULL,87.00,'Completed','2025-07-16 10:51:37','2025-07-16 10:51:37'),
(36,15,290.00,'Completed','2025-07-16 13:49:34','2025-07-16 13:49:34'),
(37,14,107.00,'Completed','2025-07-16 14:37:04','2025-07-16 14:37:04'),
(38,NULL,38.00,'Completed','2025-07-16 16:07:55','2025-07-16 16:07:55'),
(39,17,132.00,'Completed','2025-07-18 16:52:36','2025-07-18 16:52:36');

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `payment_details` */

DROP TABLE IF EXISTS `payment_details`;

CREATE TABLE `payment_details` (
  `payment__id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `card_holder_name` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `payment_method` enum('visa','mastercard','paypal','stripe') NOT NULL DEFAULT 'stripe',
  `payment_status` enum('pending','paid','failed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payment__id`),
  KEY `payment_details_order_id_foreign` (`order_id`),
  CONSTRAINT `payment_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payment_details` */

insert  into `payment_details`(`payment__id`,`order_id`,`card_holder_name`,`card_number`,`country`,`payment_method`,`payment_status`,`created_at`,`updated_at`) values 
(1,7,'furqan qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-01 17:03:01','2025-07-01 17:03:01'),
(2,8,'krisha maraj','**** **** **** 4242','Pakistan','stripe','paid','2025-07-01 17:07:37','2025-07-01 17:07:37'),
(4,10,'furqan qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-08 10:42:21','2025-07-08 10:42:21'),
(5,11,'furqan qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-08 10:44:14','2025-07-08 10:44:14'),
(6,12,'furqan qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-08 10:47:20','2025-07-08 10:47:20'),
(7,13,'sheikh qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-09 16:28:25','2025-07-09 16:28:25'),
(8,14,'zain qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-09 16:30:44','2025-07-09 16:30:44'),
(9,15,'rizwan qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-10 13:14:43','2025-07-10 13:14:43'),
(10,16,'mubashir qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-11 16:39:25','2025-07-11 16:39:25'),
(11,34,'salmanaaa qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-15 17:22:50','2025-07-15 17:22:50'),
(12,35,'furqan qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-16 10:51:37','2025-07-16 10:51:37'),
(13,36,'shah rana','**** **** **** 4242','Pakistan','stripe','paid','2025-07-16 13:49:34','2025-07-16 13:49:34'),
(14,37,'sona rahib','**** **** **** 4242','Pakistan','stripe','paid','2025-07-16 14:37:04','2025-07-16 14:37:04'),
(15,38,'Glenna Sellers','**** **** **** 4242','Veniam ad quos elit','stripe','paid','2025-07-16 16:07:55','2025-07-16 16:07:55'),
(16,39,'zohaib qazi','**** **** **** 4242','Pakistan','stripe','paid','2025-07-18 16:52:36','2025-07-18 16:52:36');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `reservations` */

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `reservation_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `reservations_user_id_foreign` (`user_id`),
  CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `reservations` */

insert  into `reservations`(`reservation_id`,`user_id`,`name`,`email`,`phone`,`number_of_people`,`reservation_date`,`reservation_time`,`created_at`,`updated_at`) values 
(1,NULL,'furqan qazi','furqanqazi899@gmail.com','03160307062',1,'2025-07-23','08.00 am to 09.00 am','2025-07-01 16:23:03','2025-07-01 16:23:03'),
(2,NULL,'furqan qazi','furqanqazi899@gmail.com','03160307062',1,'2025-07-23','08.00 am to 09.00 am','2025-07-01 16:23:04','2025-07-01 16:23:04'),
(3,2,'jofer','jofer549@gmail.com','5422222307062',4,'2025-07-28','12.00 pm to 01.00 pm','2025-07-01 17:31:06','2025-07-01 17:31:06');

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `review_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`review_id`),
  KEY `reviews_user_id_foreign` (`user_id`),
  CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `reviews` */

insert  into `reviews`(`review_id`,`user_id`,`name`,`email`,`comment`,`created_at`,`updated_at`) values 
(1,2,'jofer','jofer549@gmail.com','Keep it clear and concise ','2025-07-01 17:30:39','2025-07-01 17:30:39'),
(2,NULL,'furqan qazi','furqanqazi899@gmail.com','thi sis fabulus idea','2025-07-08 16:26:22','2025-07-08 16:26:22'),
(3,3,'ram','ram859@gmail.com','i am here to check the','2025-07-08 16:30:40','2025-07-08 16:30:40'),
(4,NULL,'furqan qazi','furqanqazi899@gmail.com','wao','2025-07-08 17:30:26','2025-07-08 17:30:26');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_type` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `roles_role_type_unique` (`role_type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`role_type`,`is_active`) values 
(1,'admin',1),
(2,'user',1);

/*Table structure for table `team_members` */

DROP TABLE IF EXISTS `team_members`;

CREATE TABLE `team_members` (
  `team_member__id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`team_member__id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `team_members` */

insert  into `team_members`(`team_member__id`,`name`,`designation`,`image`,`created_at`,`updated_at`) values 
(1,'Ali','Chef','1751390857.jpg','2025-07-01 17:27:37','2025-07-01 17:27:37'),
(2,'Risha','waiter','1751390881.jpg','2025-07-01 17:28:01','2025-07-01 17:28:01'),
(3,'Nora','cook','1751390942.jpg','2025-07-01 17:29:02','2025-07-01 17:29:02'),
(4,'Lisa','waiter','1751390970.jpg','2025-07-01 17:29:30','2025-07-01 17:29:30'),
(5,'Dona','sciner chef','17513909.jpg',NULL,NULL);

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `testimonials_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`testimonials_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `testimonials` */

insert  into `testimonials`(`testimonials_id`,`name`,`image`,`message`,`created_at`,`updated_at`) values 
(1,'loraa','1752678372.jpg','Craving something truly divine?\r\nOur dishes are always on time.\r\nHot, fresh, and full of flavor,\r\nOne bite and you\'ll savor forever!','2025-07-16 15:06:12','2025-07-16 15:06:12'),
(2,'Dani','1752678615.jpg','Good food. Great mood.\r\nMade with love, served with attitude.\r\nFrom kitchen to your door,\r\nTaste that leaves you wanting more!','2025-07-16 15:10:15','2025-07-16 15:10:15'),
(3,'lizaa','1752678649.jpg','Every bite tells a story,\r\nFull of taste, love, and glory.\r\nNo need to wait or roam,\r\nJust order now from home!','2025-07-16 15:10:49','2025-07-16 15:10:49'),
(4,'troll','1752679044.jpg','Freshly cooked, just for you,\r\nWith flavors bold and aromas true.\r\nFood so good, you’ll smile wide,\r\nHappiness with every bite inside!','2025-07-16 15:17:24','2025-07-16 15:17:24'),
(5,'milina','1752679083.jpg','No need to cook or wait in line,\r\nGreat food is just one click in time.\r\nFrom spicy bites to something sweet,\r\nWe’ve got the meal you want to eat!','2025-07-16 15:18:03','2025-07-16 15:18:03');

/*Table structure for table `user_bonuses` */

DROP TABLE IF EXISTS `user_bonuses`;

CREATE TABLE `user_bonuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_bonuses` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`user_id`,`name`,`email`,`password`,`role_id`,`created_at`,`updated_at`) values 
(2,'jofer','jofer549@gmail.com','$2y$10$XXCBAyRRiSPvA6pxioAl1.nD9cZxSMvfez1HleYk0S7Rdci8l2lqy',1,'2025-07-17 16:20:27','2025-07-01 16:20:27'),
(3,'ram','ram859@gmail.com','$2y$10$5sgpZyuJvzWW/v5/U2rqZePsrPtWna4Rbj.6DbdLFQpa8cXo3p59K',1,'2025-07-09 16:20:53','2025-07-01 16:20:53'),
(4,'krisha','krisha8264@gmail.com','$2y$10$QVnEQ52SoIMhFrIB9S9rcuW.chOizhIpJcRvj3/gbRWl.n0PgZW9q',1,'2025-07-12 16:21:55','2025-07-01 16:21:55'),
(10,'salman','mallahsalman06@gmail.com','$2y$10$Z4TNhZgz7Fjk/BCxDbd/l.mB/8.fyEpFsEcjCE85uvG.DQgY7TMTa',2,'2025-07-29 17:51:09','2025-07-11 17:51:09'),
(14,'sona','sona08@gmail.com','$2y$10$Z4TNhZgz7Fjk/BCxDbd/l.mB/8.fyEpFsEcjCE85uvG.DQgY7TMTa',2,'2025-07-19 17:51:09','2025-07-11 17:51:09'),
(15,'shah','shah5408@gmail.com','$2y$10$Z4TNhZgz7Fjk/BCxDbd/l.mB/8.fyEpFsEcjCE85uvG.DQgY7TMTa',2,'2025-07-11 17:51:09','2025-07-11 17:51:09'),
(17,'zohaib','mzohaib91@gmail.com','$2y$10$cxRl3WMtGinq9I4sxCRGWOWAayKYjFSWBvt.Pkm8osJIWHUQsaSZO',2,'2025-07-16 16:19:07','2025-07-16 16:19:07'),
(18,'furqan qazi','furqanqazi899@gmail.com','$2y$10$s2ssEvWqW0oIkKU4XVkYPeaRNCaehwk4ilg4P1hvfiIBvYG7AduXa',2,'2025-07-16 16:19:58','2025-07-16 16:19:58');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
