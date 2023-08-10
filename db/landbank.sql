-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 01:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `ID` int(10) NOT NULL,
  `task` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`ID`, `task`) VALUES
(1108, 'sss w Logged In On 2022-05-02 05:35:24'),
(1109, '  logged Out On 2022-05-02 05:36:36'),
(1107, '  logged Out On 2022-05-02 05:35:00'),
(1105, '  logged Out On 2022-05-02 05:34:17'),
(1106, 'sss w Logged In On 2022-05-02 05:34:22'),
(1103, '  logged Out On '),
(1104, 'sss w Logged In On '),
(1101, 'sss w Logged In On '),
(1102, 'sss w Logged In On '),
(1100, 'sss w Logged In On '),
(1099, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:30:59'),
(1098, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:29:28'),
(1097, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:25:35'),
(1096, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:21:36'),
(1095, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:19:39'),
(1094, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:16:04'),
(1093, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:15:25'),
(1092, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:13:36'),
(1091, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:12:02'),
(1090, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:11:23'),
(1089, 'Ndueso Walter Okorie Added New plot On 2022-04-30 05:09:09'),
(1088, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 05:01:44'),
(1087, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 04:56:59'),
(1086, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 04:51:13'),
(1085, 'Ndueso Walter Okorie Updated Plot On 2022-04-30 04:49:39'),
(1084, 'Ndueso Walter Okorie Deleted plot On 2022-04-30 04:43:53'),
(1083, 'Ndueso Walter Okorie Added New plot On 2022-04-30 04:43:24'),
(1082, 'Ndueso Walter Okorie Added New plot On 2022-04-30 04:07:44'),
(1081, 'Ndueso Walter Okorie Added New plot On 2022-04-30 04:07:44'),
(1080, 'Ndueso Walter Okorie Added New plot On 2022-04-30 04:06:58'),
(1079, 'Ndueso Walter Okorie Added New plot On 2022-04-30 04:06:58'),
(1078, 'Ndueso Walter Okorie Added New plot On 2022-04-30 04:06:03'),
(1077, 'Ndueso Walter Okorie Added New plot On 2022-04-30 04:06:03'),
(1076, 'Ndueso Walter Okorie Deleted plot On 2022-04-30 03:49:35'),
(1075, 'Ndueso Walter Okorie Deleted plot On 2022-04-30 03:49:30'),
(1074, 'Ndueso Walter Okorie Logged In On 2022-04-30 03:32:15'),
(1073, 'Ndueso Walter Okorie Added New plot On 2022-04-29 23:39:02'),
(1072, 'Ndueso Walter Okorie Added New plot On 2022-04-29 23:38:32'),
(1071, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:38:02'),
(1070, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:37:24'),
(1069, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:37:01'),
(1068, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:30:55'),
(1067, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:29:31'),
(1066, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:29:26'),
(1065, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:27:20'),
(1064, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:25:29'),
(1063, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:24:34'),
(1062, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:24:29'),
(1061, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:20:08'),
(1060, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:20:03'),
(1059, 'Ndueso Walter Okorie Deleted plot On 2022-04-29 23:19:55'),
(1058, 'Ndueso Walter Okorie Added New plot On 2022-04-29 22:51:07'),
(1057, 'Ndueso Walter Okorie Added New plot On 2022-04-29 22:50:11'),
(1056, 'Ndueso Walter Okorie Added New plot On 2022-04-29 22:46:52'),
(1055, 'Ndueso Walter Okorie Added New plot On 2022-04-29 22:46:10'),
(1054, 'Ndueso Walter Okorie Added New plot On 2022-04-29 22:44:27'),
(1053, 'Ndueso Walter Okorie Added New plot On 2022-04-29 22:40:43'),
(1052, 'Ndueso Walter Okorie Logged In On 2022-04-29 22:13:06'),
(1051, 'Ndueso Walter Okorie Updated Website On 2022-04-29 14:42:39'),
(1050, 'Ndueso Walter Okorie Logged In On 2022-04-29 14:41:57'),
(1049, 'Ndueso Walter Okorie logged Out On 2022-04-29 14:41:01'),
(1048, 'Ndueso Walter Okorie Logged In On 2022-04-29 14:40:52'),
(1047, 'Ndueso Walter Okorie Updated Estate On 2022-04-29 07:42:06'),
(1046, 'Ndueso Walter Okorie Updated Estate On 2022-04-29 07:41:43'),
(1045, 'Ndueso Walter Okorie Updated Estate On 2022-04-29 07:41:27'),
(1044, 'Ndueso Walter Okorie Updated Estate On 2022-04-29 07:40:37'),
(1043, 'Ndueso Walter Okorie Updated Estate On 2022-04-29 07:38:56'),
(1042, 'Ndueso Walter Okorie Deleted Estate On 2022-04-29 07:26:43'),
(1041, 'Ndueso Walter Okorie Added New Estate On 2022-04-29 07:25:52'),
(1040, 'Ndueso Walter Okorie Added New Estate On 2022-04-29 07:15:03'),
(1039, 'Ndueso Walter Okorie Added New Estate On 2022-04-29 07:14:30'),
(1038, 'Ndueso Walter Okorie Added New Estate On 2022-04-29 07:14:02'),
(1037, 'Ndueso Walter Okorie Added New User On 2022-04-29 06:01:29'),
(1036, 'Ndueso Walter Okorie Updated Website On 2022-04-29 05:22:14'),
(1035, 'Ndueso Walter Okorie Logged In On 2022-04-29 05:15:00'),
(1135, 'Ndueso Okorie Logged In On 2022-05-03 15:14:39'),
(1136, 'Ndueso Okorie Logged In On 2022-05-04 01:59:21'),
(1137, '  Updated his Profile On 2022-05-04 02:24:42'),
(1138, '  Updated his Profile On 2022-05-04 02:26:23'),
(1139, '  Updated his Profile On 2022-05-04 02:28:20'),
(1140, '  Updated his Profile On 2022-05-04 02:28:56'),
(1141, '  Updated his Profile On 2022-05-04 02:29:52'),
(1142, '  Updated his Profile On 2022-05-04 02:30:10'),
(1143, '  Updated his Profile On 2022-05-04 02:30:24'),
(1144, '  Updated his Profile On 2022-05-04 02:31:28'),
(1145, '  logged Out On 2022-05-04 02:33:39'),
(1146, 'Ndueso Okorie Logged In On 2022-05-04 02:33:44'),
(1147, '  logged Out On 2022-05-04 02:33:53'),
(1148, 'Ndueso Okorie Logged In On 2022-05-04 02:33:57'),
(1149, '  Updated his Profile On 2022-05-04 02:34:09'),
(1150, '  Updated his Profile On 2022-05-04 02:34:15'),
(1151, '  Updated his Profile On 2022-05-04 02:35:37'),
(1152, '  logged Out On 2022-05-04 02:35:59'),
(1153, 'Ndueso Okorie Logged In On 2022-05-04 02:36:03'),
(1154, '  Updated his Profile On 2022-05-04 02:37:52'),
(1155, '  Updated his Profile On 2022-05-04 02:39:21'),
(1156, '  logged Out On 2022-05-04 02:39:30'),
(1157, 'Ndueso ooooooo Logged In On 2022-05-04 02:39:34'),
(1158, 'Xavier Monday Updated his Profile On 2022-05-04 02:42:25'),
(1159, ' logged Out On 2022-05-04 02:42:33'),
(1160, 'Ndueso Walter Okorie Logged In On 2022-05-04 02:42:36'),
(1161, 'Ndueso Walter Okorie logged Out On 2022-05-04 02:42:50'),
(1162, 'Ndueso Walter Okorie Logged In On 2022-05-04 02:42:53'),
(1163, 'Ekom Monday Updated his Profile On 2022-05-04 02:43:41'),
(1164, '  Updated his Profile On 2022-05-04 02:44:54'),
(1165, '  logged Out On 2022-05-04 02:45:23'),
(1166, 'Ndueso ooooooo Logged In On 2022-05-04 02:45:28'),
(1167, '  logged Out On 2022-05-04 02:48:21'),
(1168, 'Ndueso ooooooo Logged In On 2022-05-04 02:48:25'),
(1169, '  Updated his Profile On 2022-05-04 02:51:31'),
(1170, ' logged Out On 2022-05-04 03:00:36'),
(1171, 'Ndueso Walter Okorie Logged In On 2022-05-04 03:00:39'),
(1172, 'Ndueso Walter Okorie logged Out On 2022-05-04 03:02:24'),
(1173, 'Ndueso Walter Okorie Logged In On 2022-05-04 03:02:28'),
(1174, 'Ndueso Walter Okorie logged Out On 2022-05-04 03:05:04'),
(1175, 'Ndueso Walter Okorie Logged In On 2022-05-04 03:05:08'),
(1176, 'Ndueso Walter  Updated his Profile On 2022-05-04 03:09:35'),
(1177, 'Ndueso Walter  Updated his Profile On 2022-05-04 03:14:20'),
(1178, '  logged Out On 2022-05-04 03:14:42'),
(1179, 'Ndueso Okorie Logged In On 2022-05-04 03:14:45'),
(1180, 'Ndueso Okorie Logged In On 2022-05-04 11:01:59'),
(1181, 'Payment by client On 2022-05-04 11:15:42'),
(1182, 'Payment by client On 2022-05-04 11:17:45'),
(1183, 'Payment by client On 2022-05-04 11:21:09'),
(1184, '  logged Out On 2022-05-04 11:21:36'),
(1185, 'Ndueso Okorie Logged In On 2022-05-04 11:21:39'),
(1186, 'Payment by client On 2022-05-04 11:22:03'),
(1187, 'Payment by client On 2022-05-04 11:22:39'),
(1188, 'Payment by client On 2022-05-04 11:22:45'),
(1189, 'Payment by client On 2022-05-04 11:23:06'),
(1190, ' Updated Website On 2022-05-04 11:28:58'),
(1191, ' Updated Website On 2022-05-04 11:29:13'),
(1192, 'Payment by client On 2022-05-04 11:30:01'),
(1193, 'Payment by client On 2022-05-04 11:32:50'),
(1194, 'Payment by client On 2022-05-04 11:35:02'),
(1195, 'Ndueso Walter Okorie Added New Property On 2022-05-04 19:03:30'),
(1196, '  logged Out On 2022-05-04 19:23:40'),
(1197, 'Ndueso Okorie Logged In On 2022-05-04 19:23:42'),
(1198, 'Ndueso Okorie Logged In On 2022-05-05 06:28:10'),
(1199, 'Payment by client On 2022-05-05 07:08:54'),
(1200, 'Ndueso Okorie Logged In On 2022-05-05 14:14:23'),
(1201, 'Payment by client On 2022-05-05 16:44:28'),
(1202, 'Payment by client On 2022-05-05 16:52:46'),
(1203, 'Ndueso Okorie Logged In On 2022-05-05 17:41:38'),
(1204, 'Payment by client On 2022-05-06 12:12:39'),
(1205, '  logged Out On 2022-05-06 12:12:57'),
(1206, 'Ndueso Okorie Logged In On 2022-05-06 12:13:00'),
(1207, 'Payment by client On 2022-05-06 12:19:49'),
(1208, 'Ndueso Okorie Logged In On 2022-05-06 12:47:46'),
(1209, 'Payment by client On 2022-05-06 13:48:32'),
(1210, 'Ndueso Walter  Logged In On 2022-05-08 04:59:20'),
(1211, 'Ndueso Walter  Updated Website On 2022-05-08 05:00:06'),
(1212, 'Ndueso Okorie Logged In On 2022-05-09 05:01:58'),
(1213, ' Added New Property On 2022-05-09 05:18:42'),
(1214, ' Added New Property On 2022-05-09 05:22:43'),
(1215, ' logged Out On 2022-05-09 05:23:14'),
(1216, 'Ndueso Walter  Logged In On 2022-05-09 05:23:19'),
(1217, 'Ndueso Walter  Added New Property On 2022-05-09 05:25:16'),
(1218, 'Ndueso Walter  Added New Property On 2022-05-09 05:25:47'),
(1219, 'Ndueso Walter  Added New Property On 2022-05-09 05:26:34'),
(1220, 'Ndueso Walter  Added New Property On 2022-05-09 05:27:10'),
(1221, 'Ndueso Walter  Updated Plot On 2022-05-09 05:43:00'),
(1222, 'Ndueso Walter  Updated Plot On 2022-05-09 05:45:08'),
(1223, 'Ndueso Okorie Logged In On 2022-05-09 05:58:31'),
(1224, 'Ndueso Okorie Logged In On 2022-05-09 06:52:16'),
(1225, '  logged Out On 2022-05-09 07:01:05'),
(1226, 'Ndueso Okorie Logged In On 2022-05-09 07:01:07'),
(1227, 'Ndueso Okorie Logged In On 2022-05-09 07:06:37'),
(1228, 'Ndueso Okorie Logged In On 2022-05-09 08:50:52'),
(1229, 'Ndueso Okorie Logged In On 2022-05-09 12:15:49'),
(1230, 'Ndueso Okorie Logged In On 2022-05-09 12:30:48'),
(1231, 'Ndueso Okorie Logged In On 2022-05-09 14:06:39'),
(1232, 'Ndueso Okorie Logged In On 2022-05-09 20:36:47'),
(1233, 'Ndueso Okorie Logged In On 2022-05-09 21:10:32'),
(1234, '  logged Out On 2022-05-09 22:14:22'),
(1235, 'Ndueso Okorie Logged In On 2022-05-09 22:14:25'),
(1236, '  logged Out On 2022-05-09 22:14:50'),
(1237, 'Ndueso Okorie Logged In On 2022-05-09 22:14:56'),
(1238, '  logged Out On 2022-05-09 21:15:53'),
(1239, 'Ndueso Okorie Logged In On 2022-05-09 21:15:56'),
(1240, 'Ndueso Walter  Logged In On 2022-05-10 06:00:03'),
(1241, 'Ndueso Walter  logged Out On 2022-05-10 06:08:24'),
(1242, 'Ndueso Walter  Logged In On 2022-05-10 06:08:40'),
(1243, 'Ndueso Walter  Updated Website On 2022-05-10 06:09:33'),
(1244, 'Ndueso Walter  logged Out On 2022-05-10 06:09:52'),
(1245, 'Ndueso Walter  Logged In On 2022-05-10 06:10:05'),
(1246, 'Ndueso Walter  Added New Property On 2022-05-10 06:16:18'),
(1247, 'Ndueso Walter  Added New Property On 2022-05-10 06:18:27'),
(1248, 'Ndueso Walter  Added New Property On 2022-05-10 06:19:04'),
(1249, 'Ndueso Walter  Added New Property On 2022-05-10 06:21:53'),
(1250, 'Ndueso Walter  Added New Property On 2022-05-10 06:23:53'),
(1251, 'Ndueso Walter  Added New Property On 2022-05-10 06:25:23'),
(1252, 'Ndueso Walter  Added New Property On 2022-05-10 06:26:03'),
(1253, 'Ndueso Walter  Added New Property On 2022-05-10 06:28:21'),
(1254, 'Ndueso Walter  Added New Property On 2022-05-10 06:29:15'),
(1255, 'Ndueso Walter  Added New Property On 2022-05-10 06:30:04'),
(1256, 'Ndueso Walter  Added New Property On 2022-05-10 06:30:14'),
(1257, 'Ndueso Walter  Added New Property On 2022-05-10 06:30:33'),
(1258, 'Ndueso Walter  Added New Property On 2022-05-10 06:32:12'),
(1259, 'Ndueso Walter  Added New Property On 2022-05-10 06:33:31'),
(1260, 'Ndueso Walter  Added New Property On 2022-05-10 06:35:36'),
(1261, 'Ndueso Walter  Added New Property On 2022-05-10 06:37:08'),
(1262, 'Ndueso Walter  Added New Property On 2022-05-10 06:37:35'),
(1263, 'Ndueso Walter  Added New Property On 2022-05-10 06:38:09'),
(1264, 'Ndueso Walter  Added New Property On 2022-05-10 06:38:36'),
(1265, 'Ndueso Walter  Added New Property On 2022-05-10 06:39:20'),
(1266, 'Ndueso Walter  Added New Property On 2022-05-10 06:40:42'),
(1267, 'Ndueso Walter  Added New Property On 2022-05-10 06:42:20'),
(1268, 'Ndueso Walter  Added New Property On 2022-05-10 06:43:40'),
(1269, 'Ndueso Walter  Added New Property On 2022-05-10 06:45:53'),
(1270, 'Ndueso Walter  Added New Property On 2022-05-10 06:46:24'),
(1271, 'Ndueso Walter  Added New Property On 2022-05-10 06:49:40'),
(1272, 'Ndueso Walter  Added New Property On 2022-05-10 06:51:13'),
(1273, 'Ndueso Walter  Added New Property On 2022-05-10 06:52:35'),
(1274, 'Ndueso Walter  Added New Property On 2022-05-10 06:53:41'),
(1275, '  logged Out On 2022-05-10 06:58:58'),
(1276, 'Ndueso Okorie Logged In On 2022-05-10 06:59:03'),
(1277, ' Updated Plot On 2022-05-10 07:07:40'),
(1278, ' Updated Plot On 2022-05-10 07:15:30'),
(1279, ' Updated Plot On 2022-05-10 07:17:44'),
(1280, ' Updated Plot On 2022-05-10 07:18:45'),
(1281, ' Updated Plot On 2022-05-10 07:20:47'),
(1282, ' Updated Plot On 2022-05-10 07:21:33'),
(1283, ' Updated Plot On 2022-05-10 07:22:36'),
(1284, ' Updated Plot On 2022-05-10 07:23:32'),
(1285, ' Updated Plot On 2022-05-10 07:24:59'),
(1286, 'Ndueso Walter  Logged In On 2022-05-10 10:51:16'),
(1287, 'Ndueso Walter  Updated Website On 2022-05-10 10:52:27'),
(1288, 'Ndueso Walter  Updated Website On 2022-05-10 10:52:31'),
(1289, 'Ndueso Walter  Updated Website On 2022-05-10 10:52:46'),
(1290, '  logged Out On 2022-05-10 10:52:53'),
(1291, 'Ndueso Okorie Logged In On 2022-05-10 10:52:57'),
(1292, ' logged Out On 2022-05-10 10:53:01'),
(1293, 'Ndueso Walter  Logged In On 2022-05-10 10:53:05'),
(1294, 'Ndueso Walter  Updated Website On 2022-05-10 10:53:13'),
(1295, 'Ndueso Walter  Updated Website On 2022-05-10 10:54:41'),
(1296, '  logged Out On 2022-05-10 10:54:51'),
(1297, 'Ndueso Okorie Logged In On 2022-05-10 10:54:54'),
(1298, '  logged Out On 2022-05-10 11:30:58'),
(1299, 'Ndueso Okorie Logged In On 2022-05-10 11:31:01'),
(1300, ' Updated Website On 2022-05-10 11:32:40'),
(1301, ' logged Out On 2022-05-10 11:32:44'),
(1302, 'Ndueso Walter  Logged In On 2022-05-10 11:32:48'),
(1303, 'Ndueso Walter  Updated Website On 2022-05-10 11:32:58'),
(1304, '  logged Out On 2022-05-10 11:33:05'),
(1305, 'Ndueso Okorie Logged In On 2022-05-10 11:33:08'),
(1306, 'Ndueso Okorie Logged In On 2022-05-10 11:36:21'),
(1307, ' Updated Website On 2022-05-10 11:36:30'),
(1308, 'Payment by client On 2022-05-10 12:12:44'),
(1309, 'Payment by client On 2022-05-10 12:19:41'),
(1310, 'Payment by client On 2022-05-10 13:11:56'),
(1311, '  Made Payment On 2022-05-10 13:23:27'),
(1312, '  Made Payment On 2022-05-10 14:08:23'),
(1313, ' Updated Website On 2022-05-10 15:06:13'),
(1314, 'Ndueso Walter  Logged In On 2022-05-10 15:06:17'),
(1315, 'Ndueso Walter  Updated Website On 2022-05-10 15:08:32'),
(1316, '  logged Out On 2022-05-10 15:16:19'),
(1317, 'Ndueso Okorie Logged In On 2022-05-10 15:16:22'),
(1318, ' Updated Website On 2022-05-10 15:33:26'),
(1319, '  logged Out On 2022-05-10 20:28:27'),
(1320, 'Ndueso Okorie Logged In On 2022-05-10 20:28:31'),
(1321, 'Payment by client On 2022-05-10 20:35:25'),
(1322, 'Payment by client On 2022-05-10 20:40:25'),
(1323, 'Payment by client On 2022-05-10 20:41:44'),
(1324, 'Payment by client On 2022-05-10 20:46:16'),
(1325, '  Made Payment On 2022-05-10 21:14:42'),
(1326, 'Payment by client On 2022-05-10 21:17:07'),
(1327, 'Payment by client On 2022-05-10 21:18:25'),
(1328, 'Payment by client On 2022-05-10 21:19:21'),
(1329, 'Payment by client On 2022-05-10 21:20:55'),
(1330, 'Payment by client On 2022-05-11 05:06:52'),
(1331, 'Payment by client On 2022-05-11 05:09:45'),
(1332, 'Payment by client On 2022-05-11 05:10:47'),
(1333, 'Payment by client On 2022-05-11 05:20:48'),
(1334, '  logged Out On 2022-05-11 05:22:24'),
(1335, 'Ndueso Okorie Logged In On 2022-05-11 05:22:27'),
(1336, 'Payment by client On 2022-05-11 05:34:40'),
(1337, 'Payment by client On 2022-05-11 05:36:04'),
(1338, 'Payment by client On 2022-05-11 05:45:15'),
(1339, 'Payment by client On 2022-05-11 05:50:57'),
(1340, '  Made Payment On 2022-05-11 06:19:53'),
(1341, '  Made Payment On 2022-05-11 06:29:06'),
(1342, 'Ndueso Okorie Logged In On 2022-05-11 08:41:13'),
(1343, '  viewed Invoice On 2022-05-11 09:06:19'),
(1344, 'Ndueso Okorie Logged In On 2022-05-11 14:54:53'),
(1345, '  logged Out On 2022-05-11 14:55:43'),
(1346, 'Ndueso Walter  Logged In On 2022-05-11 14:57:25'),
(1347, 'Ndueso Okorie Logged In On 2022-05-11 14:57:43'),
(1348, '  viewed Invoice On 2022-05-11 14:58:24'),
(1349, '  Made Payment On 2022-05-11 15:22:18'),
(1350, '  Made Payment On 2022-05-11 15:25:54'),
(1351, '  Made Payment On 2022-05-11 15:29:54'),
(1352, '  Made Payment On 2022-05-11 15:32:04'),
(1353, '  Made Payment On 2022-05-11 15:33:50'),
(1354, '  Made Payment On 2022-05-11 15:41:06'),
(1355, '  Made Payment On 2022-05-11 15:52:36'),
(1356, '  viewed Invoice On 2022-05-11 15:52:55'),
(1357, '  viewed Invoice On 2022-05-11 15:53:03'),
(1358, '  viewed Invoice On 2022-05-11 15:53:33'),
(1359, '  viewed Invoice On 2022-05-11 16:02:57'),
(1360, '  viewed Invoice On 2022-05-11 16:05:43'),
(1361, '  viewed Invoice On 2022-05-11 16:06:02'),
(1362, '  viewed Invoice On 2022-05-11 16:06:28'),
(1363, '  viewed Invoice On 2022-05-11 16:06:49'),
(1364, '  viewed Invoice On 2022-05-11 16:08:12'),
(1365, '  viewed Invoice On 2022-05-11 16:08:25'),
(1366, '  viewed Invoice On 2022-05-11 16:08:50'),
(1367, '  viewed Invoice On 2022-05-11 16:12:09'),
(1368, 'Ndueso Walter  logged Out On 2022-05-11 16:13:21'),
(1369, 'Ndueso Walter  Logged In On 2022-05-11 16:13:24'),
(1370, '  logged Out On 2022-05-11 16:35:33'),
(1371, 'Ndueso Okorie Logged In On 2022-05-11 16:35:36'),
(1372, '  logged Out On 2022-05-11 16:40:54'),
(1373, 'Ndueso Okorie Logged In On 2022-05-11 16:42:42'),
(1374, '  logged Out On 2022-05-11 16:42:44'),
(1375, 'Ndueso Okorie Logged In On 2022-05-11 16:48:52'),
(1376, '  viewed Invoice On 2022-05-11 16:48:56'),
(1377, 'Ndueso Walter  Logged In On 2022-05-11 19:34:07'),
(1378, '  Made Payment On 2022-05-11 19:33:53'),
(1379, 'Ndueso Walter  Logged In On 2022-05-12 14:10:27'),
(1380, 'Ndueso Walter  logged Out On 2022-05-12 14:10:30'),
(1381, 'Ndueso Okorie Logged In On 2022-05-12 14:28:01'),
(1382, '  Made Payment On 2022-05-12 14:39:37'),
(1383, '  logged Out On 2022-05-12 19:02:59'),
(1384, 'Ndueso Walter  Logged In On 2022-05-12 19:11:39'),
(1385, 'Ndueso Walter  logged Out On 2022-05-12 19:11:42'),
(1386, 'Ndueso Walter  Logged In On 2022-05-12 19:15:23'),
(1387, '  viewed Invoice On 2022-05-12 19:15:32'),
(1388, '  viewed Invoice On 2022-05-12 20:26:57'),
(1389, 'Ndueso Okorie Logged In On 2022-05-12 22:41:27'),
(1390, ' logged Out On 2022-05-12 22:44:41'),
(1391, 'Ndueso Walter  Logged In On 2022-05-12 22:44:52'),
(1392, '  logged Out On 2022-05-12 23:04:53'),
(1393, 'Ndueso Okorie Logged In On 2022-05-12 23:04:58'),
(1394, '  Changed Password On 2022-05-12 23:08:54'),
(1395, '  logged Out On 2022-05-12 23:08:56'),
(1396, 'Ndueso Okorie Logged In On 2022-05-12 23:12:01'),
(1397, '  Changed Password On 2022-05-12 23:12:32'),
(1398, '  logged Out On 2022-05-12 23:12:32'),
(1399, 'Ndueso Okorie Logged In On 2022-05-12 23:12:55'),
(1400, '  Updated his Profile On 2022-05-12 23:15:53'),
(1401, '  Updated his Profile On 2022-05-12 23:20:44'),
(1402, '  Updated his Profile On 2022-05-12 23:20:49'),
(1403, '  Updated his Profile On 2022-05-12 23:20:51'),
(1404, '  Updated his photo On 2022-05-12 23:24:35'),
(1405, ' logged Out On 2022-05-12 23:49:19'),
(1406, 'Ndueso Walter  Logged In On 2022-05-12 23:49:24'),
(1407, 'Ndueso Walter  Logged In On 2022-05-13 08:58:06'),
(1408, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 09:41:09'),
(1409, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 09:48:41'),
(1410, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 10:55:21'),
(1411, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 10:56:13'),
(1412, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 11:37:58'),
(1413, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 11:38:23'),
(1414, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 12:20:21'),
(1415, 'Ndueso Walter  Logged In On 2022-05-13 12:29:11'),
(1416, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 14:57:17'),
(1417, 'Ndueso Walter  Sent SMS to Client On 2022-05-13 15:45:32'),
(1418, 'Ndueso Walter  Logged In On 2022-05-13 21:11:10'),
(1419, 'Ndueso Walter  Logged In On 2022-05-14 18:08:26'),
(1420, 'Ndueso Okorie Logged In On 2022-05-14 23:11:39'),
(1421, 'Ndueso Walter Okorie logged Out On 2022-05-15 00:22:17'),
(1422, 'Ndueso Walter  Logged In On 2022-05-15 10:20:16'),
(1423, 'Ndueso Walter  Deleted client On 2022-05-15 11:06:32'),
(1424, 'Ndueso Walter Okorie Sent SMS to Client On 2022-05-15 16:07:40'),
(1425, 'Ndueso Walter  Logged In On 2022-05-16 08:49:59'),
(1426, 'Ndueso Walter  Sent SMS to Client On 2022-05-16 08:50:47'),
(1427, 'Ndueso Walter  Added New Property On 2022-05-16 09:25:27'),
(1428, 'Ndueso Okorie Logged In On 2022-05-16 10:24:19'),
(1429, '  viewed Invoice On 2022-05-16 10:45:07'),
(1430, 'Ndueso Walter  Sent SMS to Client On 2022-05-16 11:33:31'),
(1431, 'Ndueso Walter  Logged In On 2022-05-16 12:27:10'),
(1432, 'Ndueso Walter  Sent SMS to Client On 2022-05-16 12:27:26'),
(1433, 'Ndueso Okorie Logged In On 2022-05-16 12:40:03'),
(1434, '  Made Payment On 2022-05-16 12:41:07'),
(1435, 'Ndueso Walter  Sent SMS to Client On 2022-05-16 13:40:51'),
(1436, ' logged Out On 2022-05-17 12:34:30'),
(1437, 'Ndueso Walter  Logged In On 2022-05-17 12:34:35'),
(1438, '  logged Out On 2022-05-17 12:34:47'),
(1439, 'Ndueso Okorie Logged In On 2022-05-17 12:34:52'),
(1440, '  Updated his photo On 2022-05-17 12:36:46'),
(1441, '  Made Payment On 2022-05-17 12:50:14'),
(1442, '  Made Payment On 2022-05-17 12:59:08'),
(1443, '  viewed Invoice On 2022-05-17 13:02:47'),
(1444, '  viewed Invoice On 2022-05-17 13:03:02'),
(1445, '  viewed Invoice On 2022-05-17 13:03:06'),
(1446, '  Made Payment On 2022-05-17 13:20:40'),
(1447, '  Made Payment On 2022-05-17 13:36:09'),
(1448, '  viewed Invoice On 2022-05-17 13:37:40'),
(1449, '  viewed Invoice On 2022-05-17 13:40:00'),
(1450, '  viewed Invoice On 2022-05-17 13:43:44'),
(1451, '  viewed Invoice On 2022-05-17 13:50:15'),
(1452, '  viewed Invoice On 2022-05-17 13:51:23'),
(1453, '  viewed Invoice On 2022-05-17 13:51:24'),
(1454, '  viewed Invoice On 2022-05-17 13:51:26'),
(1455, '  viewed Invoice On 2022-05-17 13:51:31'),
(1456, '  viewed Invoice On 2022-05-17 13:52:07'),
(1457, '  viewed Invoice On 2022-05-17 13:54:07'),
(1458, '  viewed Invoice On 2022-05-17 13:54:07'),
(1459, ' logged Out On 2022-05-17 19:34:08'),
(1460, 'Ndueso Walter  Logged In On 2022-05-17 19:34:38'),
(1461, 'Ndueso Walter  logged Out On 2022-05-17 19:51:11'),
(1462, 'Ndueso Walter  Logged In On 2022-05-17 19:51:15'),
(1463, 'Ndueso Walter  Logged In On 2022-05-17 20:06:45'),
(1464, 'Ndueso Walter  Logged In On 2022-05-17 20:10:43'),
(1465, 'Ndueso Walter  Logged In On 2022-05-17 20:10:47'),
(1466, 'Ndueso Walter  Logged In On 2022-05-17 20:16:57'),
(1467, 'Ndueso Walter  Logged In On 2022-05-17 20:24:45'),
(1468, 'Ndueso Walter  Logged In On 2022-05-17 20:24:48'),
(1469, 'Ndueso Walter  logged Out On 2022-05-17 20:24:53'),
(1470, 'Ndueso Walter  Logged In On 2022-05-17 20:24:57'),
(1471, '  logged Out On 2022-05-17 20:30:03'),
(1472, 'Ndueso Okorie Logged In On 2022-05-17 20:35:00'),
(1473, 'Ndueso Okorie Logged In On 2022-05-17 20:37:08'),
(1474, 'Ndueso Okorie Logged In On 2022-05-17 20:38:19'),
(1475, 'Ndueso Walter  logged Out On 2022-05-21 11:57:13'),
(1476, 'Ndueso Walter  Logged In On 2022-05-21 11:57:17'),
(1477, 'Ndueso Walter  Updated Website On 2022-05-21 11:59:29'),
(1478, 'Ndueso Walter  Updated Website On 2022-05-21 11:59:49'),
(1479, 'Ndueso Walter  logged Out On 2022-05-21 12:03:37'),
(1480, 'Ndueso Walter  Logged In On 2022-05-21 12:03:40'),
(1481, 'Ndueso Walter  Logged In On 2022-05-21 12:07:54'),
(1482, ' logged Out On 2022-05-21 12:09:00'),
(1483, 'Ndueso Walter  Logged In On 2022-05-21 12:09:05'),
(1484, 'Ndueso Walter  logged Out On 2022-05-21 12:17:13'),
(1485, 'Ndueso Walter  Logged In On 2022-05-21 13:12:17'),
(1486, 'Ndueso Walter  Added New User On 2022-05-21 13:32:51'),
(1487, 'Ndueso Walter  Added New User On 2022-05-21 13:36:15'),
(1488, 'Ndueso Walter  Added New User On 2022-05-21 13:37:20'),
(1489, 'Ndueso Walter  Added New User On 2022-05-21 13:38:34'),
(1490, 'Ndueso Walter  Added New User On 2022-05-21 13:54:25'),
(1491, ' Added New User On 2022-05-21 16:45:39'),
(1492, 'Ndueso Walter  Logged In On 2022-05-21 16:45:51'),
(1493, 'Ndueso Walter  Added New User On 2022-05-21 16:47:38'),
(1494, 'Ndueso Walter  Added New User On 2022-05-21 16:51:37'),
(1495, 'Ndueso Walter  Logged In On 2022-05-21 21:38:01'),
(1496, '  Logged In On 2022-05-24 13:56:05'),
(1497, '  Logged In On 2022-05-24 13:56:58'),
(1498, '  Logged In On 2022-05-24 15:12:13'),
(1499, '  logged Out On 2022-05-24 15:57:14'),
(1500, '  Logged In On 2022-05-24 15:57:58'),
(1501, 'Dorathy Koko Changed Password On 2022-05-24 15:58:17'),
(1502, '  logged Out On 2022-05-24 15:58:18'),
(1503, '  Logged In On 2022-05-24 15:58:46'),
(1504, '  Logged In On 2022-05-24 20:02:30'),
(1505, '  Changed SIWES On 2022-05-24 20:22:58'),
(1506, '  Changed SIWES On 2022-05-24 20:23:43'),
(1507, '  Logged In On 2022-05-24 20:32:50'),
(1508, 'Dorathy Koko-Bassey Updated his Profile On 2022-05-24 20:41:25'),
(1509, 'Dorathy Koko-Bassey Updated his Profile On 2022-05-24 20:42:22'),
(1581, '  Updated his photo On 2023-08-08 09:06:58'),
(1580, 'Idara Ofonmbuk John Logged In On 2023-08-08 09:00:55'),
(1579, 'Idara Ofonmbuk John Logged In On 2023-08-08 08:42:04'),
(1578, 'Charles Samuel Logged In On 2023-08-08 08:40:49'),
(1577, '  logged Out On 2023-08-08 08:40:02'),
(1576, 'Ndueso  Walter Logged In On 2023-08-08 08:38:33'),
(1575, '  logged Out On 2023-08-08 08:38:06'),
(1574, 'Charles Samuel Updated Website On 2023-08-08 08:37:14'),
(1573, 'Charles Samuel Logged In On 2023-08-08 08:23:23'),
(1572, 'Charles Samuel logged Out On 2023-08-08 08:23:22'),
(1571, 'Charles Samuel Logged In On 2023-08-08 08:23:18'),
(1570, 'Charles Samuel logged Out On 2023-08-08 08:23:17'),
(1569, 'Charles Samuel Logged In On 2023-08-08 08:23:10'),
(1568, 'Charles Samuel logged Out On 2023-08-08 08:22:05'),
(1567, 'Charles Samuel Logged In On 2023-08-08 08:13:44'),
(1566, ' logged Out On 2023-08-08 07:54:02'),
(1565, ' logged Out On 2023-08-08 07:54:01'),
(1564, ' logged Out On 2023-08-08 07:54:01'),
(1563, ' logged Out On 2023-08-08 07:53:59'),
(1562, ' logged Out On 2023-08-08 07:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bankPIN` varchar(7) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(25) NOT NULL,
  `nextkin` varchar(50) NOT NULL,
  `company` varchar(40) NOT NULL,
  `zip` varchar(15) NOT NULL,
  `question1` varchar(100) NOT NULL,
  `question2` varchar(100) NOT NULL,
  `answer1` varchar(100) NOT NULL,
  `answer2` varchar(100) NOT NULL,
  `datecreated` varchar(15) NOT NULL,
  `accountnumber` varchar(15) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `groupname` varchar(10) NOT NULL,
  `status` varchar(14) NOT NULL,
  `balance` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `username`, `password`, `bankPIN`, `fullname`, `sex`, `phone`, `email`, `DOB`, `city`, `state`, `country`, `nextkin`, `company`, `zip`, `question1`, `question2`, `answer1`, `answer2`, `datecreated`, `accountnumber`, `photo`, `groupname`, `status`, `balance`) VALUES
(106, 'walterjnr1', 'escobar2012', '1111', 'Ndueso  Walter', 'Male', '08067361023', 'newleastpaysolution@yahoo.com', '1990-11-03', 'Ini', 'Akwa Ibom', 'Nigeria', 'Samson orok', 'Leastpay Solutions LTD', '1212', 'Nil', 'Nil', 'Nil', 'Nil', '2022-05-27 16:3', '3001215404', 'uploadImage/a1.jpg', 'user', 'Active', '2800'),
(107, 'qqqqq', 'escobar2012', '6Cbe5', 'Idara Ofonmbuk John', 'Male', '08067361023', 'support@americanlandbank.org', '1990-11-03', 'Abak', 'Akwa Ibom', 'Bangladesh', 'Samson orok', 'nil', '1343', 'Nil', 'Nil', 'Nil', 'Nil', '2022-05-27 16:3', '3033793963', 'uploadImage/passport.jpg', 'user', 'Active', '8900'),
(105, 'steco_orok', '2OAhrl', 'Az8zh', 'Manny Oduah Orok', 'Male', '08067361023', 'support@americanlandbank.org', '1990-11-03', 'Abak', 'Akwa Ibom', 'Austria', 'Samson orok', 'nil', '1212', 'Nil', 'Nil', 'Nil', 'Nil', '2022-05-27 16:3', '3021863304', 'uploadImage/default.jpg', 'user', 'Active', '0'),
(104, 'nancy_orok', 'sdffgd', '2396c', 'Nancy Orok jnr', 'Female', '08067361023', 'support@americanlandbank.org', '1990-05-03', 'Uyo', 'Akwa Ibom', 'Austria', 'Soso orok', 'nil', '1111', 'Nil', 'Nil', 'Nil', 'Nil', '2022-05-27 16:2', '3050818794', 'uploadImage/default.jpg', 'user', 'Active', '0');

-- --------------------------------------------------------

--
-- Table structure for table `fake_transaction`
--

CREATE TABLE `fake_transaction` (
  `ID` int(11) NOT NULL,
  `username` varchar(18) NOT NULL,
  `transfer_amt` varchar(25) NOT NULL,
  `depositor` varchar(25) NOT NULL,
  `transferdate` varchar(15) NOT NULL,
  `operation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fake_transaction`
--

INSERT INTO `fake_transaction` (`ID`, `username`, `transfer_amt`, `depositor`, `transferdate`, `operation`) VALUES
(1, 'walterjnr1', '4590', 'Hilary Chong', '23-09-2022', 'Credit'),
(2, 'walterjnr1', '34000', 'John Mike', '12-03-2023', 'Credit'),
(3, 'walterjnr1', '45090', 'Kwame Yung', '03-09-2022', 'Credit'),
(4, 'walterjnr1', '14000', 'Friday P. Mike', '02-04-2023', 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `ID` int(9) NOT NULL,
  `username` varchar(15) NOT NULL,
  `code1` varchar(7) NOT NULL,
  `datecreated` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `ID` int(9) NOT NULL,
  `username` varchar(15) NOT NULL,
  `transfer_amt` varchar(20) NOT NULL,
  `depositor` varchar(100) NOT NULL,
  `transferdate` varchar(20) NOT NULL,
  `operation` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaction`
--

INSERT INTO `tbltransaction` (`ID`, `username`, `transfer_amt`, `depositor`, `transferdate`, `operation`) VALUES
(225, 'walterjnr1', '1200', 'Charles Samuel', '2022-05-27 17:51:33', 'Debit'),
(224, 'id2011', '8900', 'Charles Samuel', '2022-05-27 17:51:23', 'Credit'),
(223, 'walterjnr1', '3000', 'Charles Samuel', '2022-05-27 17:50:33', 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `groupname` varchar(15) NOT NULL,
  `lastaccess` varchar(20) NOT NULL,
  `last_ip` varchar(20) NOT NULL,
  `photo` varchar(411) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `fullname`, `email`, `phone`, `groupname`, `lastaccess`, `last_ip`, `photo`) VALUES
(1, 'admin', 'admin123', 'Charles Samuel', 'admin@gmail.com', '6767676', 'Super Admin', '2023-08-08 08:23:22', '::1', 'uploadImage/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `websiteinfo`
--

CREATE TABLE `websiteinfo` (
  `ID` int(4) NOT NULL,
  `website_name` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `url` varchar(100) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `favicon` varchar(400) NOT NULL,
  `SMS_username` varchar(44) NOT NULL,
  `SMS_password` varchar(44) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websiteinfo`
--

INSERT INTO `websiteinfo` (`ID`, `website_name`, `email`, `phone1`, `phone2`, `address`, `url`, `logo`, `favicon`, `SMS_username`, `SMS_password`) VALUES
(12, 'HSBC UK Bank', 'support@hsbc.co.uk', '08088884983', '08080934538', 'UK', 'https://www.hsbc.co.uk', 'uploadImage/logo.svg', 'uploadImage/logo.svg', 'rexrolex0@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fake_transaction`
--
ALTER TABLE `fake_transaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `websiteinfo`
--
ALTER TABLE `websiteinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1582;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `fake_transaction`
--
ALTER TABLE `fake_transaction`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `websiteinfo`
--
ALTER TABLE `websiteinfo`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
