-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 03:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'active',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`user_id`, `fname`, `lname`, `email`, `phone_no`, `dept`, `status`, `createdAt`, `updatedAt`) VALUES
(4, 'John', 'Doe', 'john.doe@example.com', '555-1234', 'HR', 'inactive', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(5, 'Jane', 'Smithy', 'jane.smith@example.com', '555-5678', 'Finance', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(6, 'Michael', 'Johnson', 'michael.johnson@example.com', '555-8765', 'IT', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(7, 'Emily', 'Davis', 'emily.davis@example.com', '555-43247', 'Marketing', 'active', '2024-08-02 05:31:47', '2024-08-02 05:32:29'),
(8, 'Chris', 'Brown', 'chris.brown@example.com', '555-8765', 'Sales', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(9, 'Patricia', 'Miller', 'patricia.miller@example.com', '555-3456', 'Operations', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(10, 'Robert', 'Wilson', 'robert.wilson@example.com', '555-7890', 'HT', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(12, 'David', 'Anderson', 'david.anderson@example.com', '555-9876', 'IT', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(13, 'Barbara', 'Thomas', 'barbara.thomas@example.com', '555-4567', 'Marketing', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(14, 'James', 'Jackson', 'james.jackson@example.com', '555-2345', 'Sales', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(15, 'Mary', 'White', 'mary.white@example.com', '555-3457', 'Operations', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(16, 'William', 'Harris', 'william.harris@example.com', '555-5670', 'HR', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(17, 'Elizabeth', 'Martin', 'elizabeth.martin@example.com', '555-89015', 'Finance', 'active', '2024-08-02 05:31:47', '2024-08-02 05:34:00'),
(18, 'Richard', 'Thompson', 'richard.thompson@example.com', '555-6781', 'IT', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(19, 'Susan', 'Garcia', 'susan.garcia@example.com', '555-7891', 'Marketing', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(20, 'Joseph', 'Martinez', 'joseph.martinez@example.com', '555-8902', 'Sales', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(21, 'Jessica', 'Robinson', 'jessica.robinson@example.com', '555-3458', 'Operations', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(22, 'Bipul', 'Sardar', 'trial@gmail.com', '1234', 'Demo', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(23, 'Demo', 'Demo', 'demo@gmail.com', '1234567', 'Demo', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(24, 'Bipul', 'Sardar', 'bipul@gmail.com', '12345', 'IT', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(25, 'Xyz1', 'Xyz2', 'abc@gmail.com', '123456789', 'Manager', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(26, 'New', 'Record', 'new@new.com', '123456', 'Super HR', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(27, 'Bipul', 'Sardar', 'bipul@gmail.com', '1234', 'IT', 'inactive', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(28, 'Bipul', 'Sardar New', 'bipulsardar21@gmail.com', '1231235125', 'CEO', 'active', '2024-08-02 05:31:47', '2024-08-02 05:31:47'),
(29, 'Bipul', 'Sardar', 'test243@gmail.com', '1234', 'Marketing', 'active', '2024-08-02 12:13:20', '2024-08-02 12:13:20'),
(30, 'Bipul', 'Sardar', 'test243@gmail.com', '1234', 'Marketing', 'active', '2024-08-02 12:14:05', '2024-08-02 12:14:05'),
(31, 'Test 100', 'Test ', 'test@gmaill.com', '1123', 'HR', 'active', '2024-08-02 12:19:25', '2024-08-02 12:19:25'),
(32, 'asdfasd', 'adsfasdf', 'cigevac67s8@fuzitea.com', '1234', 'HR', 'active', '2024-08-02 12:21:23', '2024-08-02 12:21:23'),
(33, 'test', 'full', 'bipul@test.com', '1234', 'HR', 'active', '2024-08-02 12:38:48', '2024-08-02 12:38:48'),
(34, 'full', 'test', 'gmail@gmail.com', '1232', 'HRM', 'active', '2024-08-02 12:51:07', '2024-08-02 12:51:07'),
(35, 'Bipul', 'Sardar Test 2', 'gmail@gmail.com', '13456788', 'IT', 'active', '2024-08-02 13:06:57', '2024-08-02 13:06:57'),
(36, 'Emily', 'Wilsom 2', 'bipulsardar534@gmail.com', '1234567890', 'IT', 'active', '2024-08-02 13:12:56', '2024-08-02 13:12:56'),
(37, 'Bipul 2', 'Sardar', 'bipulsardar421@hotmail.com', '1234567890', 'IT', 'active', '2024-08-05 04:45:41', '2024-08-05 04:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `employees_address`
--

CREATE TABLE `employees_address` (
  `sl_no` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees_address`
--

INSERT INTO `employees_address` (`sl_no`, `user_id`, `type`, `address`, `city`, `country`, `post_code`) VALUES
(1, 33, 'Distant', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048),
(2, 34, 'Full Time', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048),
(3, 34, '', '', '', '', 0),
(4, 36, 'Full Time', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048),
(5, 36, 'Full Time', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048),
(6, 36, 'Full Time', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048),
(7, 36, 'Full Time', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048),
(8, 36, 'Full Time', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048),
(9, 37, 'Permanent', 'Reclamation Colony', 'Near Tina Garage', 'India', 764048);

-- --------------------------------------------------------

--
-- Table structure for table `employees_details_extended`
--

CREATE TABLE `employees_details_extended` (
  `sl_no` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `maritial_status` varchar(20) DEFAULT NULL,
  `physically_handicapped` varchar(3) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees_details_extended`
--

INSERT INTO `employees_details_extended` (`sl_no`, `user_id`, `gender`, `dob`, `maritial_status`, `physically_handicapped`, `blood_group`, `nationality`) VALUES
(1, 33, 'Male', '0000-00-00', 'Single', 'No', 'O+ve', 'Indian'),
(2, 34, 'Male', '16/07/1999', 'Unmarried', 'No', 'O+ve', 'Indian'),
(3, 34, 'Male', '16/07/1999', 'Unmarried', 'No', 'O+ve', 'Indian'),
(4, 36, 'Female', '16/07/1999', 'Married', 'No', 'O+ve', 'Indian'),
(5, 36, 'Female', '16/07/1999', 'Married', 'No', 'O+ve', 'Indian'),
(6, 36, 'Female', '16/07/1999', 'Married', 'No', 'O+ve', 'Indian'),
(7, 36, 'Female', '16/07/1999', 'Married', 'No', 'O+ve', 'Indian'),
(8, 36, 'Female', '16/07/1999', 'Married', 'No', 'O+ve', 'Indian'),
(9, 37, 'Male', '16/07/1999', 'Single', 'No', 'O+ve', 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `employees_education`
--

CREATE TABLE `employees_education` (
  `sl_no` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `cgpa` varchar(255) DEFAULT NULL,
  `yop` int(11) DEFAULT NULL,
  `yoj` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees_education`
--

INSERT INTO `employees_education` (`sl_no`, `user_id`, `type`, `branch`, `cgpa`, `yop`, `yoj`) VALUES
(1, 33, 'Distant', 'CSE', '7.79', 2022, 2017),
(2, 34, 'Full Time', 'CSE', '7.79', 2022, 2017),
(3, 34, '', 'CSE', '7.79', 2022, 2017),
(4, 36, 'Full Time', 'CSE', '7.79', 2022, 2017),
(5, 36, 'Full Time', 'CSE', '7.79', 2022, 2017),
(6, 36, 'Full Time', 'CSE', '7.79', 2022, 2017),
(7, 36, 'Full Time', 'CSE', '7.79', 2022, 2017),
(8, 36, 'Full Time', 'CSE', '7.79', 2022, 2017),
(9, 37, 'Permanent', 'CSE', '7.79', 2022, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `employees_personal_contact_details`
--

CREATE TABLE `employees_personal_contact_details` (
  `sl_no` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `personal_mobile_number` varchar(20) DEFAULT NULL,
  `personal_email` varchar(100) DEFAULT NULL,
  `residence_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees_personal_contact_details`
--

INSERT INTO `employees_personal_contact_details` (`sl_no`, `user_id`, `personal_mobile_number`, `personal_email`, `residence_number`) VALUES
(1, 33, '123456456', 'bipul@email.com', '123456789'),
(2, 34, '12345', 'gmail@gmail.com', '123456'),
(3, 34, '12345', 'bipul@email.com', '123456'),
(4, 36, '12345', 'gmail@gmail.com', '123456'),
(5, 36, '12345', 'gmail@gmail.com', '123456'),
(6, 36, '12345', 'gmail@gmail.com', '123456'),
(7, 36, '12345', 'gmail@gmail.com', '123456'),
(8, 36, '12345', 'gmail@gmail.com', '123456'),
(9, 37, '12345', 'glue@glue.com', '789456123');

-- --------------------------------------------------------

--
-- Table structure for table `otpvalidation`
--

CREATE TABLE `otpvalidation` (
  `sl_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otpvalidation`
--

INSERT INTO `otpvalidation` (`sl_no`, `email`, `otp`, `status`, `createdAt`, `updatedAt`) VALUES
(24, 'cigevac678@fuzitea.com', '$2y$10$X9d.ILFZ6F7oMYV9HEb/L.XexwSrmJHXLX3sHdhOh/LhYVVmtja8q', 'inactive', '2024-08-01 11:05:09', '2024-08-01 11:05:46'),
(25, 'yayov26838@alientex.com', '$2y$10$kzVSHm77B2cs.TpdvRnxDO/VWboMTpSKwPcP2R3L/Ze.zCuSZWeUi', 'inactive', '2024-08-02 12:58:20', '2024-08-02 12:58:32'),
(26, 'yayov26838@alientex.com', '$2y$10$t651ucFKs5/8TpPTGluna.vZWqyy/rOiy35byDw.UCvcpROo6328S', 'inactive', '2024-08-02 12:58:46', '2024-08-02 13:03:48'),
(27, 'koyabe1170@alientex.com', '$2y$10$uF0t5/GnGMmP5o9GjM9VS.3FF6rZvt1Fxnn/nZxe1XWJdQ0SYsJfe', 'inactive', '2024-08-02 13:00:21', '2024-08-02 13:03:48'),
(28, 'koyabe1170@alientex.com', '$2y$10$QIvnoZ0sXhnycDcpuJWwH.TbxHgzQnKBLE/3FK8bhyr3zZbN3FKxO', 'inactive', '2024-08-02 13:01:24', '2024-08-02 13:03:48'),
(29, 'koyabe1170@alientex.com', '$2y$10$SZCTIfNJuL7/sLEhZTBmGu5TpEapno7H8GKu4YSN5SwWa1Wbc1pOi', 'inactive', '2024-08-02 13:02:13', '2024-08-02 13:03:48'),
(30, 'giliver235@biowey.com', '$2y$10$bjc3BjZvNHGpgm01l2Lx0OOE7JaNZWvG8ybKjKsRCKTbXbMbB60IC', 'inactive', '2024-08-02 13:03:35', '2024-08-02 13:03:48'),
(31, 'yolegic762@biscoine.com', '$2y$10$hZw5sfCBb1FJcbz0E8gv9eHd.NNUmipRfZTHLtYAj35oPfEJbUKFi', 'inactive', '2024-08-02 13:05:15', '2024-08-02 13:05:28'),
(32, 'hawok45743@biowey.com', '$2y$10$lBC3QD.R4ktLaczQ1nufPu/3jSI9ofDLsCx5mEw15EEixMJUs.BD.', 'inactive', '2024-08-02 13:10:27', '2024-08-02 13:10:43'),
(33, 'hawok45743@biowey.com', '$2y$10$/rzoXbjyUY78s9RCW2ks1O5PRiYyru5LDc6bWnJVCUx6EO9.X3w2e', 'inactive', '2024-08-02 13:11:20', '2024-08-02 13:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `sl_no` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`sl_no`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'test24', 'test24', 'test24@gmail.com', '$2y$10$iVLmrT9V2twzHBqWdVNZreLLP7VMjMvgwaAkVUixOlxomOHcU69g.'),
(4, 'bipul', 'sardar', 'test244@gmail.com', '$2y$10$q24wrJdDBM38SdnV0j9F2uGMVImehP7uql4BUGqG5dYaSEPyofg9i'),
(5, 'bipul', 'sardar', 'pocono8379@hisotyr.com', '$2y$10$oFYRzLq10kLxn1uBRatD3OZtft5o4u2mlL89Pd87sIDM3Mk6cdnVa'),
(6, 'bipul', 'sardar', 'pocono839@hisotyr.com', '$2y$10$xzpg5ArolNgReQAb2LoJ1O0DyviQltoxX9VaU1sY746Bfh51q3ql.'),
(7, 'bipul', 'sardar', 'pocono83@hisotyr.com', '$2y$10$I11L0AT2ay1eK1Rc8dKmh.9hOb7dqjnHm5MxgF7./hRy2q6l4sKD6'),
(8, 'bipul', 'sardar', 'pocono8@hisotyr.com', '$2y$10$d/v7cgqxiLdjSlEjT2icOescj5IEez8/2DihlByNpsAzBmWnVeoEa'),
(9, 'bipul', 'test2', 'bipul12@gmail.com', '$2y$10$mPHpjkeQe6kvRsQ611ReXuJLPEARRmHmuuQy5sLipYFbAlUyvaKte'),
(10, 'Bipul', 'Sardar', 'test243@gmail.com', '$2y$10$oopJEvyHRefrCZL17VaZwup8iKCuhAxS7Xk17uuYrFI0jEOCPRzV6'),
(11, 'test24', 'test24', 'bipulsardar421@gmail.com', '$2y$10$t3g6q3HFn3TpIJZXH8M3RuW0IpX5.eZ77RGedMmnd2TvVBBkLF56u'),
(12, 'Bipul', 'Sardar', 'bipul@gmail.com', '$2y$10$fyag1aahN6mikaG..4sJ0e/PK6ul3VOwFmeHEUedrlBQ0DLdpyroK'),
(13, 'Trial', 'Demo', 'trial@gmail.com', '$2y$10$xz718UG0ozmEBgdhE15seOdCBIrLk6v8j1hIKNW5Lzl1y6MnYuhTO'),
(14, 'Admin1', 'Admin2', 'admin@gmail.com', '$2y$10$a.WQY48eWGUUbBCWw1f5heIYUwKqwfrlmTKRPuIAiCTlyuQB7CY9y'),
(15, 'bipul', 'sardar', 'test234@gmail.com', '$2y$10$IPS0wNW0ZgePZ85HbWdn5eUQTFaXP3MoxMvZ60fx51CcMr7SaVrVG'),
(16, 'xyz', 'abc', 'abc@abc.com', '$2y$10$VBrTRg5F49Wv7FmbT6JM0ucmkcVAKGZpSa0UaDA6/xtEuXRC3c3ka'),
(17, 'Bhargavi', 'B', 'bhargavi@gmail.com', '$2y$10$da244b8idrVpcy29wBTUfuTFR.dmQ6BC/IFq9Wt6wh9QGLXfRZ28y'),
(18, 'bipul_test', 'sardar_test', 'bipulsardar@gmail.com', '$2y$10$aghUaSJ/oZ74NuRusWa5Cu4LvyhS1c4KNCUR4IQDt0qlaI4hu9LtO'),
(20, 'asdfasdf', 'sardar', 'test254@gmail.com', '$2y$10$Ink.YkfHm4x8H6SkuaBhv.u94coruRkGW5NHPkwFHj3tDZNkR9joi'),
(21, 'bipul', 'sardar', 'trial333@gmail.com', '$2y$10$5GAlZasqytt30uuagrZ8vesl36RNoGH/MbsASa6hmfnpK3GzXTeiu'),
(22, 'bipul', 'sardar', 'trial3333@gmail.com', '$2y$10$gHV6NL0BE6qA.LYDT238E.PVn6o37/0q.f5y6zMfeVJ.whEgVkxti'),
(23, 'bipul', 'sardar', 'trial33333@gmail.com', '$2y$10$JirEsr47aS9cs..cYTFibOyt0DRRcDVkR5bgW8JBoJ/3qSC3aUSHu'),
(24, 'bipul', 'sardar', 'trial333233@gmail.com', '$2y$10$4fumG//9QJZBB15hszoBPujWVF5pylw0VB3rnS2hvuTYKNbJkrAJ6'),
(25, 'Bipul', 'Sardar', 'test2224@gmail.com', '$2y$10$Gj/D.nVzjGrmhr.zK3ItZO7SnnhaEM1o8PaDYj9sDzcY7kR1.aLH2'),
(26, 'tavemej395@digdy.com', 'tavemej395@digdy.com', 'tavemej395@digdy.com', '$2y$10$Du6tp8ks8Ta9k0QH73S4EuwQl..j1P2Yy639qYPvfW.L7FYixGP8y'),
(27, 'Bipul', 'Sardar', 'maleko1452@fuzitea.com', '$2y$10$NJOS1VR0Uj2A7gxowALtWOUBwaRe0h/R3kH32.L1YrUWmZseDFPEW'),
(28, 'cigevac678@fuzitea.com', 'cigevac678@fuzitea.com', 'cigevac678@fuzitea.com', '$2y$10$Vh6VA/0O1lHhK7JPnZkMmuM1QwLRxk935ZdIRiu34IRU7fndi.hIW'),
(29, 'yayov26838@alientex.com', 'yayov26838@alientex.com', 'yayov26838@alientex.com', '$2y$10$r3QZ8.0b3pR0m0MTI2jhJOtl60Pho4Hjn9Y02x1Bn901c1cS50sN.'),
(30, 'koyabe1170@alientex.com', 'koyabe1170@alientex.com', 'koyabe1170@alientex.com', '$2y$10$GzfaOpdZRfEkEhocx4fAFuPTRX9CkvNJz1uYaBFPuTpXUcrRZ3ls.'),
(31, 'giliver235@biowey.com', 'giliver235@biowey.com', 'giliver235@biowey.com', '$2y$10$Z1C9uuMLEdWGlTL5Gt6XWeF9PvI0wh3bJuL0xNLjWw1ZsLaNi64Q2'),
(32, 'yolegic762@biscoine.com', 'yolegic762@biscoine.com', 'yolegic762@biscoine.com', '$2y$10$.bU5.0aTZTcqbLmFYkulveaZgXK5FxFvT5zo.HmU2A5QxpGp8vzFm'),
(33, 'hawok45743@biowey.com', 'hawok45743@biowey.com', 'hawok45743@biowey.com', '$2y$10$WqtubcISaDTUIdyYYcOJR.wunPUQ2a3eHsemN77862FLIl6dICUG.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `employees_address`
--
ALTER TABLE `employees_address`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employees_details_extended`
--
ALTER TABLE `employees_details_extended`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employees_education`
--
ALTER TABLE `employees_education`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employees_personal_contact_details`
--
ALTER TABLE `employees_personal_contact_details`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `otpvalidation`
--
ALTER TABLE `otpvalidation`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `employees_address`
--
ALTER TABLE `employees_address`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees_details_extended`
--
ALTER TABLE `employees_details_extended`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees_education`
--
ALTER TABLE `employees_education`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees_personal_contact_details`
--
ALTER TABLE `employees_personal_contact_details`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `otpvalidation`
--
ALTER TABLE `otpvalidation`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees_address`
--
ALTER TABLE `employees_address`
  ADD CONSTRAINT `employees_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `employees` (`user_id`);

--
-- Constraints for table `employees_details_extended`
--
ALTER TABLE `employees_details_extended`
  ADD CONSTRAINT `employees_details_extended_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `employees` (`user_id`);

--
-- Constraints for table `employees_education`
--
ALTER TABLE `employees_education`
  ADD CONSTRAINT `employees_education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `employees` (`user_id`);

--
-- Constraints for table `employees_personal_contact_details`
--
ALTER TABLE `employees_personal_contact_details`
  ADD CONSTRAINT `employees_personal_contact_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `employees` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
