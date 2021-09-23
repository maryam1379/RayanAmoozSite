-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 02:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rayanamooz`
--

-- --------------------------------------------------------

--
-- Table structure for table `ertebat1`
--

CREATE TABLE `ertebat1` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ertebat1`
--

INSERT INTO `ertebat1` (`id`, `name`, `subject`, `text`, `date`) VALUES
(1, 'مریم شیرمحمدی', 'گزارش خرابی', 'قسمت فرم ها در HTML مطالب غلط املائی زیاد دارن \r\nلطفا این مشکل رو رفع کنید', '2021-09-01 14:20:06'),
(2, 'حسام', 'مثبت', 'ممنون از مطالب خوبتون', '2021-09-01 14:20:52'),
(3, 'زهرا', 'فیلمها', 'لطفا فیلم آموزشی هارو با کیفیت بالاتر قرار بدین', '2021-09-03 16:56:31'),
(4, 'محمد', 'بخش CSS', 'لطفا آموزش انیمیشن هم به آموزش هاتون اضافه کنید.\r\nسپاس از مطالب خوبتون:)', '2021-09-03 17:26:01'),
(5, 'سمانه مرادی', 'تشکر', 'عالیییییییییییییییییییییییییییییییییین مطالبتون :)))))))))))))))))', '2021-09-03 17:29:37'),
(9, 'ali', '.....', ' قسمت آموزش js هم اضافه کنید', '2021-09-03 17:35:47'),
(11, 'mehran', '....', 'فیلم های بیشتری قرار بدین\"-\" \r\nممنون از سایت خوبتون:)', '2021-09-04 12:31:01'),
(14, 'محدثه', 'مشکل', 'قسمت فرم ها در HTML مطالب غلط املائی زیاد دارن ', '2021-09-07 22:25:32'),
(15, 'مهسا', 'کتاب', 'ممنون از کتابهایی که معرفی کردین. \r\nمیشه کتابهایی هم برای JS معرفی کنید', '2021-09-10 00:32:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ertebat1`
--
ALTER TABLE `ertebat1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ertebat1`
--
ALTER TABLE `ertebat1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
