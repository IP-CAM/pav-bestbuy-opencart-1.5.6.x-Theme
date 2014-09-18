<?php 
$query['pavsliderlayer'][] = "
CREATE TABLE `oc_pavoslidergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
"; 

$query['pavsliderlayer'][] = "
CREATE TABLE `oc_pavosliderlayers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `params` text NOT NULL,
  `layersparams` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
"; 


$query['pavsliderlayer'][] ="
INSERT INTO `oc_pavoslidergroups` (`id`, `title`, `params`) VALUES
(2, 'Slideshow', 'a:28:{s:5:\"title\";s:9:\"Slideshow\";s:5:\"delay\";s:4:\"9000\";s:9:\"fullwidth\";s:9:\"fullwidth\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:3:\"547\";s:12:\"touch_mobile\";s:1:\"1\";s:13:\"stop_on_hover\";s:1:\"0\";s:12:\"shuffle_mode\";s:1:\"0\";s:14:\"image_cropping\";s:1:\"1\";s:11:\"shadow_type\";s:1:\"0\";s:14:\"show_time_line\";s:1:\"0\";s:18:\"time_line_position\";s:3:\"top\";s:16:\"background_color\";s:7:\"#d9d9d9\";s:6:\"margin\";s:1:\"0\";s:7:\"padding\";s:1:\"0\";s:16:\"background_image\";s:1:\"0\";s:14:\"background_url\";s:0:\"\";s:14:\"navigator_type\";s:6:\"bullet\";s:16:\"navigator_arrows\";s:16:\"verticalcentered\";s:16:\"navigation_style\";s:5:\"round\";s:17:\"offset_horizontal\";s:1:\"0\";s:15:\"offset_vertical\";s:1:\"0\";s:14:\"show_navigator\";s:1:\"1\";s:20:\"hide_navigator_after\";s:3:\"200\";s:15:\"thumbnail_width\";s:3:\"100\";s:16:\"thumbnail_height\";s:2:\"50\";s:16:\"thumbnail_amount\";s:1:\"5\";s:17:\"hide_screen_width\";s:0:\"\";}');
"; 
	

$query['pavsliderlayer'][] = "
INSERT INTO `oc_pavosliderlayers` (`id`, `title`, `parent_id`, `group_id`, `params`, `layersparams`, `image`, `status`, `position`) VALUES
(3, 'image slideshow1', 0, 2, 'a:16:{s:2:\"id\";s:1:\"3\";s:15:\"slider_group_id\";s:1:\"2\";s:12:\"slider_title\";s:16:\"image slideshow1\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:6:\"random\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:1:\"3\";s:12:\"slider_image\";s:24:\"data/slider/slider01.jpg\";}', 'O:8:\"stdClass\":1:{s:6:\"layers\";a:5:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:19:\"large_text bg_black\";s:13:\"layer_caption\";s:22:\"Curabitur tempus velit\";s:15:\"layer_animation\";s:3:\"lft\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"139\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"400\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:42:\"Velit in leo tempus velit in leo fermentum\";s:15:\"layer_animation\";s:3:\"lfr\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"218\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"800\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:20:\"Quis tincidunt lorem\";s:15:\"layer_animation\";s:3:\"lfl\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"261\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1200\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:28:\"medium_text tp-button orange\";s:13:\"layer_caption\";s:8:\"Show Now\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"334\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1600\";}i:4;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:5;s:13:\"layer_content\";s:19:\"data/icon-price.png\";s:10:\"layer_type\";s:5:\"image\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:17:\"Your Image Here 5\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutQuad\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"139\";s:10:\"layer_left\";s:3:\"764\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2000\";}}}', 'data/slider/slider01.jpg', 1, 1),
(7, 'image slideshow2', 0, 2, 'a:16:{s:2:\"id\";s:1:\"7\";s:15:\"slider_group_id\";s:1:\"2\";s:12:\"slider_title\";s:16:\"image slideshow2\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:6:\"random\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:1:\"7\";s:12:\"slider_image\";s:24:\"data/slider/slider02.jpg\";}', 'O:8:\"stdClass\":1:{s:6:\"layers\";a:5:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:19:\"large_text bg_black\";s:13:\"layer_caption\";s:22:\"Curabitur tempus velit\";s:15:\"layer_animation\";s:3:\"lft\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:2:\"87\";s:10:\"layer_left\";s:3:\"534\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"400\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:42:\"Velit in leo tempus velit in leo fermentum\";s:15:\"layer_animation\";s:3:\"lfr\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"166\";s:10:\"layer_left\";s:3:\"650\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"800\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:20:\"Quis tincidunt lorem\";s:15:\"layer_animation\";s:3:\"lfl\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"212\";s:10:\"layer_left\";s:3:\"794\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1200\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:28:\"medium_text tp-button orange\";s:13:\"layer_caption\";s:8:\"Show Now\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"275\";s:10:\"layer_left\";s:3:\"844\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1600\";}i:4;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:5;s:13:\"layer_content\";s:19:\"data/icon-price.png\";s:10:\"layer_type\";s:5:\"image\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:17:\"Your Image Here 5\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutQuad\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"158\";s:10:\"layer_left\";s:3:\"139\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2000\";}}}', 'data/slider/slider02.jpg', 1, 1),
(8, 'image slideshow3', 0, 2, 'a:16:{s:2:\"id\";s:1:\"8\";s:15:\"slider_group_id\";s:1:\"2\";s:12:\"slider_title\";s:16:\"image slideshow3\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:6:\"random\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:1:\"8\";s:12:\"slider_image\";s:24:\"data/slider/slider03.jpg\";}', 'O:8:\"stdClass\":1:{s:6:\"layers\";a:5:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:19:\"large_text bg_black\";s:13:\"layer_caption\";s:22:\"Curabitur tempus velit\";s:15:\"layer_animation\";s:3:\"lft\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"111\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"400\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:42:\"Velit in leo tempus velit in leo fermentum\";s:15:\"layer_animation\";s:3:\"lfr\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"195\";s:10:\"layer_left\";s:3:\"113\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"800\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:20:\"Quis tincidunt lorem\";s:15:\"layer_animation\";s:3:\"lfl\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"239\";s:10:\"layer_left\";s:3:\"261\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1200\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:28:\"medium_text tp-button orange\";s:13:\"layer_caption\";s:8:\"Show Now\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"309\";s:10:\"layer_left\";s:3:\"308\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1600\";}i:4;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:5;s:13:\"layer_content\";s:19:\"data/icon-price.png\";s:10:\"layer_type\";s:5:\"image\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:17:\"Your Image Here 5\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutQuad\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"157\";s:10:\"layer_left\";s:3:\"772\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2000\";}}}', 'data/slider/slider03.jpg', 1, 1),
(9, 'image slideshow4', 0, 2, 'a:16:{s:2:\"id\";s:1:\"9\";s:15:\"slider_group_id\";s:1:\"2\";s:12:\"slider_title\";s:16:\"image slideshow4\";s:13:\"slider_status\";s:1:\"1\";s:17:\"slider_transition\";s:6:\"random\";s:11:\"slider_slot\";s:1:\"7\";s:15:\"slider_rotation\";s:1:\"0\";s:15:\"slider_duration\";s:3:\"700\";s:12:\"slider_delay\";s:1:\"0\";s:11:\"slider_link\";s:0:\"\";s:16:\"slider_thumbnail\";s:0:\"\";s:15:\"slider_usevideo\";s:1:\"0\";s:14:\"slider_videoid\";s:0:\"\";s:16:\"slider_videoplay\";s:1:\"0\";s:9:\"slider_id\";s:1:\"9\";s:12:\"slider_image\";s:24:\"data/slider/slider04.jpg\";}', 'O:8:\"stdClass\":1:{s:6:\"layers\";a:5:{i:0;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:1;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:19:\"large_text bg_black\";s:13:\"layer_caption\";s:22:\"Curabitur tempus velit\";s:15:\"layer_animation\";s:3:\"lft\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"139\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"400\";}i:1;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:2;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:42:\"Velit in leo tempus velit in leo fermentum\";s:15:\"layer_animation\";s:3:\"lfr\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"218\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:3:\"800\";}i:2;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:3;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:31:\"small_text bg_black border_left\";s:13:\"layer_caption\";s:20:\"Quis tincidunt lorem\";s:15:\"layer_animation\";s:3:\"lfl\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"261\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1200\";}i:3;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:4;s:13:\"layer_content\";s:0:\"\";s:10:\"layer_type\";s:4:\"text\";s:11:\"layer_class\";s:28:\"medium_text tp-button orange\";s:13:\"layer_caption\";s:8:\"Show Now\";s:15:\"layer_animation\";s:3:\"lfb\";s:12:\"layer_easing\";s:11:\"easeOutExpo\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"334\";s:10:\"layer_left\";s:1:\"0\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"1600\";}i:4;a:20:{s:16:\"layer_video_type\";s:7:\"youtube\";s:14:\"layer_video_id\";s:0:\"\";s:18:\"layer_video_height\";s:3:\"200\";s:17:\"layer_video_width\";s:3:\"300\";s:17:\"layer_video_thumb\";s:0:\"\";s:8:\"layer_id\";i:5;s:13:\"layer_content\";s:19:\"data/icon-price.png\";s:10:\"layer_type\";s:5:\"image\";s:11:\"layer_class\";s:0:\"\";s:13:\"layer_caption\";s:17:\"Your Image Here 5\";s:15:\"layer_animation\";s:12:\"randomrotate\";s:12:\"layer_easing\";s:13:\"easeInOutQuad\";s:11:\"layer_speed\";s:3:\"350\";s:9:\"layer_top\";s:3:\"169\";s:10:\"layer_left\";s:3:\"740\";s:13:\"layer_endtime\";s:1:\"0\";s:14:\"layer_endspeed\";s:3:\"300\";s:18:\"layer_endanimation\";s:4:\"auto\";s:15:\"layer_endeasing\";s:7:\"nothing\";s:10:\"time_start\";s:4:\"2000\";}}}', 'data/slider/slider04.jpg', 1, 1);
"; 

		$query['pavmegamenu'][]  = "	
CREATE TABLE `oc_megamenu` (
  `megamenu_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_group` smallint(6) NOT NULL DEFAULT '2',
  `width` varchar(255) DEFAULT NULL,
  `submenu_width` varchar(255) DEFAULT NULL,
  `colum_width` varchar(255) DEFAULT NULL,
  `submenu_colum_width` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `colums` varchar(255) DEFAULT '1',
  `type` varchar(255) NOT NULL,
  `is_content` smallint(6) NOT NULL DEFAULT '2',
  `show_title` smallint(6) NOT NULL DEFAULT '1',
  `type_submenu` varchar(10) NOT NULL DEFAULT '1',
  `level_depth` smallint(6) NOT NULL DEFAULT '0',
  `published` smallint(6) NOT NULL DEFAULT '1',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position` int(11) unsigned NOT NULL DEFAULT '0',
  `show_sub` smallint(6) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(25) DEFAULT NULL,
  `privacy` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_type` varchar(25) DEFAULT 'top',
  `menu_class` varchar(25) DEFAULT NULL,
  `description` text,
  `content_text` text,
  `submenu_content` text,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  PRIMARY KEY (`megamenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
				
			";
			$query['pavmegamenu'][]  = "	
			CREATE TABLE `oc_megamenu_description` (
  `megamenu_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`megamenu_id`,`language_id`),
  KEY `name` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
					
					";
					
	$query['pavmegamenu'][] = "	DELETE FROM ".DB_PREFIX ."megamenu WHERE 1=1 ";
	$query['pavmegamenu'][] = "	DELETE FROM ".DB_PREFIX ."megamenu_description WHERE 1=1 ";
	$query['pavmegamenu'][] = "	
		INSERT INTO `oc_megamenu` (`megamenu_id`, `image`, `parent_id`, `is_group`, `width`, `submenu_width`, `colum_width`, `submenu_colum_width`, `item`, `colums`, `type`, `is_content`, `show_title`, `type_submenu`, `level_depth`, `published`, `store_id`, `position`, `show_sub`, `url`, `target`, `privacy`, `position_type`, `menu_class`, `description`, `content_text`, `submenu_content`, `level`, `left`, `right`) VALUES
(1, '', 0, 2, NULL, NULL, NULL, NULL, NULL, '1', '', 2, 1, '1', 0, 1, 0, 0, 0, NULL, NULL, 0, 'top', NULL, NULL, NULL, NULL, -5, 34, 47),
(20, 'data/icon-home.png', 1, 0, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 99, 0, '?route=common/home', NULL, 0, 'top', 'home', NULL, '', '', 0, 0, 0),
(21, '', 1, 0, NULL, NULL, NULL, '', '17', '1', 'category', 0, 1, 'menu', 0, 1, 0, 99, 0, 'Bike parts', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(22, '', 1, 0, NULL, NULL, NULL, 'col=12', '34', '1', 'category', 0, 0, 'menu', 0, 1, 0, 99, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(23, '', 1, 0, NULL, NULL, NULL, '', '61', '1', 'category', 0, 1, 'menu', 0, 1, 0, 99, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(24, '', 1, 0, NULL, NULL, NULL, '', '33', '1', 'category', 0, 1, 'menu', 0, 1, 0, 99, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(26, '', 40, 1, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 1, 0, '#', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(27, '', 40, 1, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 99, 0, '#', NULL, 0, 'top', '', NULL, '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', 0, 0, 0),
(28, '', 26, 0, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 5, 0, '#', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(31, '', 26, 0, NULL, NULL, NULL, '', '17', '1', 'category', 0, 1, 'menu', 0, 1, 0, 1, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(32, '', 26, 0, NULL, NULL, NULL, '', '33', '1', 'category', 0, 1, 'menu', 0, 1, 0, 2, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(33, '', 26, 0, NULL, NULL, NULL, '', '60', '1', 'category', 0, 1, 'menu', 0, 1, 0, 3, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(34, '', 26, 0, NULL, NULL, NULL, '', '34', '1', 'category', 0, 1, 'menu', 0, 1, 0, 4, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(35, '', 23, 0, NULL, NULL, NULL, '', '24', '1', 'category', 0, 1, 'menu', 0, 1, 0, 1, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(36, '', 23, 0, NULL, NULL, NULL, '', '18', '1', 'category', 0, 1, 'menu', 0, 1, 0, 2, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(37, '', 23, 0, NULL, NULL, NULL, '', '20', '1', 'category', 0, 1, 'menu', 0, 1, 0, 3, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(38, '', 23, 0, NULL, NULL, NULL, '', '51', '1', 'product', 0, 1, 'menu', 0, 1, 0, 4, 0, '', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(40, '', 22, 1, NULL, NULL, NULL, '', '', '2', 'url', 0, 0, 'menu', 0, 1, 0, 1, 0, '#', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0),
(41, '', 22, 0, NULL, NULL, NULL, '', '', '1', 'html', 0, 0, 'menu', 0, 1, 0, 99, 0, '', NULL, 0, 'top', '', NULL, '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;image/data/img_menu.jpg&quot; /&gt;&lt;/p&gt;\r\n', '', 0, 0, 0),
(42, '', 27, 0, NULL, NULL, NULL, '', '', '1', 'html', 0, 1, 'menu', 0, 1, 0, 99, 0, '', NULL, 0, 'top', '', NULL, '&lt;ul&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Curabitur tempus&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '', 0, 0, 0),
(44, '', 1, 0, NULL, NULL, NULL, '', '', '1', 'url', 0, 1, 'menu', 0, 1, 0, 99, 0, 'index.php?route=pavblog/blogs', NULL, 0, 'top', '', NULL, '', '', 0, 0, 0);
	";
	$query['pavmegamenu'][] = "	
INSERT INTO `oc_megamenu_description` (`megamenu_id`, `language_id`, `title`, `description`) VALUES
(1, 1, 'ROOT', 'Menu Root'),
(20, 3, 'Home', ''),
(21, 3, 'Footwear', ''),
(22, 3, 'Men', ''),
(22, 1, 'Men', ''),
(23, 1, 'Women', ''),
(26, 3, 'Nulla a odio', ''),
(26, 1, 'Nulla a odio', ''),
(26, 2, 'Nulla a odio', ''),
(27, 3, ' Sed quam lore', ''),
(28, 3, 'Siam eget arcu', ''),
(40, 1, 'Sodal lacinia', ''),
(40, 3, 'Sodal lacinia', ''),
(41, 3, 'Varius odio', ''),
(31, 1, 'Aenean placerat', ''),
(31, 3, 'Aenean placerat', ''),
(31, 2, 'Aenean placerat', ''),
(32, 3, 'Hendrerit libero', ''),
(32, 1, 'Hendrerit libero', ''),
(32, 2, 'Hendrerit libero', ''),
(33, 1, 'Luctus et eu', ''),
(33, 3, 'Luctus et eu', ''),
(33, 2, 'Luctus et eu', ''),
(34, 1, 'Cliquet lectus rutrum', ''),
(34, 3, 'Cliquet lectus rutrum', ''),
(34, 2, 'Cliquet lectus rutrum', ''),
(35, 1, 'Nullam aliquet ant', ''),
(35, 3, 'Nullam aliquet ant', ''),
(35, 2, 'Nullam aliquet ant', ''),
(36, 1, 'Pellentesque mauris', ''),
(36, 3, 'Pellentesque mauris', ''),
(36, 2, 'Pellentesque mauris', ''),
(37, 1, 'Quisque eu augue', ''),
(37, 3, 'Quisque eu augue', ''),
(37, 2, 'Quisque eu augue', ''),
(38, 2, 'Item page', ''),
(38, 1, 'Item page', ''),
(38, 3, 'Item page', ''),
(42, 3, 'Curabitur tempus', ''),
(42, 1, 'Curabitur tempus', ''),
(27, 1, ' Sed quam lore', ''),
(28, 1, 'Siam eget arcu', ''),
(20, 1, 'Home', ''),
(21, 1, 'Footwear', ''),
(23, 3, 'Women', ''),
(24, 1, 'Jewelry', ''),
(24, 3, 'Jewelry', ''),
(41, 1, 'Varius odio', ''),
(44, 3, 'Blog', ''),
(44, 1, 'Blog', '');
	";
?>