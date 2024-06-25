-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 09:22 AM
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
-- Database: `bridspedia_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_dokumen`
--

CREATE TABLE `db_dokumen` (
  `id` int(11) NOT NULL,
  `nomor_ketentuan` varchar(255) NOT NULL,
  `judul_ketentuan` varchar(255) NOT NULL,
  `jenis_ketentuan` int(11) NOT NULL,
  `tanggal_terbit` varchar(255) NOT NULL,
  `last_review` varchar(255) NOT NULL,
  `next_review` varchar(255) NOT NULL,
  `divisi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `info_doc` int(11) NOT NULL,
  `searchdoc` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_dokumen`
--

INSERT INTO `db_dokumen` (`id`, `nomor_ketentuan`, `judul_ketentuan`, `jenis_ketentuan`, `tanggal_terbit`, `last_review`, `next_review`, `divisi`, `status`, `info_doc`, `searchdoc`, `file`, `is_active`) VALUES
(40, 'SOP-RM-09', 'PEMANTAUAN SAHAM KELUAR LIST MARJIN', 3, '2021-01-21', '2021-01-21', '2025-01-21', 19, 1, 1, '', 'SOP-RM-09 Pemantauan saham marjin keluar dari list marjin.pdf', 1),
(41, 'SOP-RM-08', 'REVIEW HAIRCUT SAHAM REGULER DAN MARJIN DALAM KONDISI KHUSUS', 3, '2020-05-29', '2020-05-29', '2024-05-29', 19, 3, 1, '', 'SOP-RM-08-Review Haircut Saham Reguler dan Marjin Dalam Kondisi Khusus.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_formriskregister`
--

CREATE TABLE `db_formriskregister` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `periode` varchar(60) NOT NULL,
  `divisi` int(11) NOT NULL,
  `status_rr` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_formriskregister`
--

INSERT INTO `db_formriskregister` (`id`, `date`, `periode`, `divisi`, `status_rr`, `is_active`) VALUES
(34, '2024-06-11', '1', 1, 1, 1),
(35, '2024-06-12', 'baru', 1, 1, 1),
(36, '2024-06-12', 'Periode', 6, 2, 1),
(37, '0000-00-00', '', 8, 1, 1),
(38, '0000-00-00', '', 1, 1, 1),
(39, '0000-00-00', '', 1, 1, 1),
(40, '0000-00-00', '', 9, 1, 1),
(41, '0000-00-00', '', 1, 1, 1),
(42, '0000-00-00', '', 1, 1, 1),
(43, '0000-00-00', '', 1, 1, 1),
(44, '2024-06-13', 'baru', 5, 1, 1),
(45, '0000-00-00', '', 1, 1, 1),
(46, '0000-00-00', '', 1, 1, 1),
(47, '0000-00-00', '', 1, 1, 1),
(48, '0000-00-00', '', 1, 1, 1),
(49, '2024-06-19', '', 6, 1, 1),
(50, '2024-06-19', '', 1, 1, 1),
(51, '2024-06-20', '', 1, 1, 1),
(52, '2024-06-20', 'Periode', 1, 1, 1),
(53, '0000-00-00', '', 1, 1, 1),
(54, '2024-06-20', 'baru', 1, 1, 1),
(55, '0000-00-00', '', 1, 1, 1),
(56, '2024-06-20', '', 1, 1, 1),
(57, '0000-00-00', '', 1, 1, 1),
(58, '0000-00-00', '', 1, 1, 1),
(59, '0000-00-00', '', 1, 1, 1),
(60, '0000-00-00', '', 19, 1, 1),
(61, '0000-00-00', '', 19, 1, 1),
(62, '0000-00-00', '', 1, 1, 1),
(63, '0000-00-00', '', 18, 1, 1),
(64, '0000-00-00', '', 18, 1, 1),
(65, '2024-06-19', '', 16, 1, 1),
(66, '0000-00-00', '', 1, 1, 1),
(67, '2024-06-21', '1', 1, 1, 1),
(68, '2024-06-25', '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_login`
--

CREATE TABLE `db_login` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `emails` varchar(255) NOT NULL,
  `usernames` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `level` enum('admin','RM','kepala divisi','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_login`
--

INSERT INTO `db_login` (`id`, `names`, `emails`, `usernames`, `passwords`, `level`) VALUES
(1, 'syakira', 'syakiraraihana5@gmail.com', 'admin', 'admin', 'admin'),
(2, 'nabela', 'nabela@gmail.com', 'nabelarm', 'nabelarm', 'RM'),
(3, 'user', 'user@gmail.com', 'user', 'user', 'user'),
(4, 'kadiv', 'kadiv@gmail.com', 'kadiv', 'kadiv', 'kepala divisi');

-- --------------------------------------------------------

--
-- Table structure for table `db_riskregister`
--

CREATE TABLE `db_riskregister` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `divisi` int(11) NOT NULL,
  `status` int(10) NOT NULL,
  `no` int(8) NOT NULL,
  `risk_code` varchar(100) NOT NULL,
  `risk_category` int(11) NOT NULL,
  `risk_event` varchar(256) NOT NULL,
  `scrpro` int(8) NOT NULL,
  `scrimp` int(8) NOT NULL,
  `scrttl` int(8) NOT NULL,
  `risk_treatment` varchar(256) NOT NULL,
  `rrpro` int(8) NOT NULL,
  `rrimp` int(8) NOT NULL,
  `rrttl` int(8) NOT NULL,
  `document` varchar(256) NOT NULL,
  `verified` varchar(100) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_riskregister`
--

INSERT INTO `db_riskregister` (`id`, `date`, `periode`, `divisi`, `status`, `no`, `risk_code`, `risk_category`, `risk_event`, `scrpro`, `scrimp`, `scrttl`, `risk_treatment`, `rrpro`, `rrimp`, `rrttl`, `document`, `verified`, `comment`, `is_active`) VALUES
(1, '22/12/2023', 'Semester 1', 4, 2, 1, 'DR-01-11', 5, 'Contoh Risk Event', 1, 2, 2, 'Contoh Risk Treatment', 1, 2, 2, 'Contoh Judul Dokumen', 'Y', '-', 1),
(2, '2024-05-28', '2', 1, 1, 1, '11', 1, 'ri', -1, 0, 0, '', 0, 0, 0, '', '', '', 1),
(3, '2024-05-08', '1', 1, 1, 1, '11', 1, '', 0, 0, 0, '', 0, 0, 0, '', '', '', 1),
(5, '2024-05-08', '1', 1, 1, 1, '11', 1, '', 1, 0, 0, '', 0, 0, 0, '', '', '', 1),
(7, '2024-05-27', '1', 4, 3, 1, 'DR-01-01', 1, '', 0, 0, 0, '', 0, 0, 0, '', '', '', 1),
(9, '2024-05-27', '1', 4, 3, 1, 'DR-01-01', 1, '', 0, 0, 0, '', 0, 0, 0, '', '', '', 1),
(10, '2024-05-27', '1', 4, 3, 2, '', 1, '', 0, 0, 0, '', 0, 0, 0, '', '', '', 1),
(11, '2022-01-01', 'Semester 1', 3, 1, 1, 'CS-01-01', 1, 'Risk_Event', 2, 3, 6, 'Risk_Treatment	Residual_Risk	Supporting_Document	Verified	Comment	Action Probability	Impact	Total_Score	', 2, 1, 2, '', '', '', 1),
(12, '2022-01-01', 'Semester 1', 3, 1, 2, 'CS-01-02', 2, 'Risk_Event', 3, 1, 3, 'Risk_Treatment	Residual_Risk	Supporting_Document	Verified	Comment	Action Probability	Impact	Total_Score	', 3, 2, 6, '', '', '', 1),
(13, '2024-01-28', 'Semester 2', 6, 3, 1, 'DR-01-01', 2, 'Risk_Event', 2, 2, 4, 'Risk_Treatment', 1, 2, 2, 'Supporting_Document', 'y', 'n', 1),
(14, '2024-01-28', 'Semester 2', 6, 3, 2, 'CS-01-01', 1, 'Risk_Event', 0, 0, 0, '', 0, 0, 0, '', '', '', 1),
(15, '2024-05-31', '', 1, 1, 0, '', 1, '', 0, 0, 0, '', 0, 0, 0, '', '', '', 1),
(16, '2024-05-31', '', 1, 1, 0, '', 1, '', 0, 0, 0, '', 0, 0, 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_div` int(11) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `kode_divisi` varchar(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_div`, `divisi`, `kode_divisi`, `is_active`) VALUES
(1, 'Business Operation & Custody Division', 'BOC', 1),
(2, 'Business Strategy & Product Development Division', 'BSD', 1),
(3, 'Coorporate Secretary', 'CSE', 1),
(4, 'Debt Research', 'FIR', 1),
(5, 'Equity Research', 'EQR', 1),
(6, 'Finance, Accounting & Treasury Division', 'FAT', 1),
(7, 'General Affair & Purchasing Procurement Division', 'GAP', 1),
(8, 'Human Capital Division', 'HCD', 1),
(9, 'Information Technology Division', 'IT', 1),
(10, 'Institutional Debt Sales & Trading Division', 'DST', 1),
(11, 'Institutional Equity Sales & Trading Division', 'EST', 1),
(12, 'Internal Audit Division', 'INA', 1),
(13, 'Investment Banking Advisory Division', 'IBAS', 1),
(14, 'Investment Banking Capital Market Division', 'IBCM', 1),
(15, 'Legal, Compliance, & KYC-AML Division', 'LGL', 1),
(16, 'QMR & Steering Committee', '', 1),
(17, 'Retail Product & Services', 'RPS', 1),
(18, 'Retail Sales Distribution', 'RSD', 1),
(19, 'Risk Management Division', 'RMA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_risk`
--

CREATE TABLE `form_risk` (
  `id` int(11) NOT NULL,
  `form_risk` int(11) NOT NULL,
  `risk_code` varchar(255) NOT NULL,
  `risk_category` int(11) NOT NULL,
  `risk_event` varchar(255) NOT NULL,
  `risk_factor` varchar(255) NOT NULL,
  `risk_indicator` varchar(255) NOT NULL,
  `impact` varchar(255) NOT NULL,
  `scr_pro` int(11) NOT NULL,
  `scr_imp` int(11) NOT NULL,
  `scr_ttl` int(11) NOT NULL,
  `risk_treatment` varchar(255) NOT NULL,
  `date_identification` date NOT NULL,
  `rr_pro` int(11) NOT NULL,
  `rr_imp` int(11) NOT NULL,
  `rr_ttl` int(11) NOT NULL,
  `document` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_risk`
--

INSERT INTO `form_risk` (`id`, `form_risk`, `risk_code`, `risk_category`, `risk_event`, `risk_factor`, `risk_indicator`, `impact`, `scr_pro`, `scr_imp`, `scr_ttl`, `risk_treatment`, `date_identification`, `rr_pro`, `rr_imp`, `rr_ttl`, `document`, `verified`, `comment`, `is_active`) VALUES
(119, 67, 'KODE', 1, 'EVENT', 'FACTOR', 'INDICATOR', 'IMPACT', 2, 2, 4, 'TREATMENT', '2024-06-21', 2, 3, 6, 'DOCUMENT', 'OK', 'OK', 1),
(120, 67, 'KODE2', 2, 'EVENT2', 'FACTOR2', 'INDICATOR2', 'IMPACT2', 1, 3, 3, 'TREATMENT2', '2024-06-22', 2, 1, 2, 'DOCUMENT2', 'OK', 'OK', 1),
(121, 68, 'KODE', 1, 'EVENT', 'FACTOR', 'INDICATOR', 'IMPACT', 2, 2, 4, 'TREATMENT', '2024-06-25', 2, 2, 4, 'DOCUMENT', 'OK', 'OK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `info_doc`
--

CREATE TABLE `info_doc` (
  `id_info` int(11) NOT NULL,
  `info_doc` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_doc`
--

INSERT INTO `info_doc` (`id_info`, `info_doc`, `is_active`) VALUES
(1, 'Dokumen Masih Relevan', 1),
(2, 'Update Dokumen', 1),
(3, 'Mencabut Dokumen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ketentuan`
--

CREATE TABLE `jenis_ketentuan` (
  `id_jk` int(11) NOT NULL,
  `jenis_ketentuan` varchar(255) NOT NULL,
  `kode_jk` varchar(30) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_ketentuan`
--

INSERT INTO `jenis_ketentuan` (`id_jk`, `jenis_ketentuan`, `kode_jk`, `is_active`) VALUES
(1, 'Kebijakan Umum (SK Direksi)', 'SK Direksi', 1),
(2, 'Pedoman Pelaksanaan (SK Komite)', 'SK Komite', 1),
(3, 'Standar Operasional Prosedur (SOP)', 'SOP', 1),
(4, 'Instruksi Kerja (IK)', 'IK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `risk_category`
--

CREATE TABLE `risk_category` (
  `id` int(11) NOT NULL,
  `code_rc` int(11) NOT NULL,
  `risk_category` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `risk_category`
--

INSERT INTO `risk_category` (`id`, `code_rc`, `risk_category`, `is_active`) VALUES
(1, 4, 'Risiko Operasional', 1),
(2, 1, 'Risiko Kredit', 1),
(3, 2, 'Risiko Pasar', 1),
(4, 3, 'Risiko Likuiditas', 1),
(5, 8, 'Risiko Kepatuhan', 1),
(6, 5, 'Risiko Hukum', 1),
(7, 6, 'Risiko Reputasi', 1),
(8, 7, 'Risiko Strategis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_sts` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_sts`, `status`, `is_active`) VALUES
(1, 'Berlaku', 1),
(2, 'Tidak Berlaku', 1),
(3, 'Terkait untuk diperiksa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_rr`
--

CREATE TABLE `status_rr` (
  `id_stsrr` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_rr`
--

INSERT INTO `status_rr` (`id_stsrr`, `status`, `is_active`) VALUES
(1, 'New', 1),
(2, 'In Progress', 1),
(3, 'Done', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dbdokumen`
-- (See below for the actual view)
--
CREATE TABLE `view_dbdokumen` (
`id` int(11)
,`nomor_ketentuan` varchar(255)
,`judul_ketentuan` varchar(255)
,`id_jk` int(11)
,`jenis_ketentuan` varchar(255)
,`kode_jk` varchar(30)
,`tanggal_terbit` varchar(255)
,`last_review` varchar(255)
,`next_review` varchar(255)
,`id_div` int(11)
,`divisi` varchar(255)
,`kode_divisi` varchar(11)
,`id_sts` int(11)
,`status` varchar(255)
,`id_info` int(11)
,`info_doc` varchar(255)
,`searchdoc` varchar(255)
,`file` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dbformriskregister`
-- (See below for the actual view)
--
CREATE TABLE `view_dbformriskregister` (
`id_dfr` int(11)
,`date` date
,`periode` varchar(60)
,`divisi_id` int(11)
,`divisi` varchar(255)
,`status_rr_id` int(11)
,`status` varchar(255)
,`id_fr` int(11)
,`risk_code` varchar(255)
,`id_rc` int(11)
,`risk_category` varchar(255)
,`risk_event` varchar(255)
,`risk_factor` varchar(255)
,`risk_indicator` varchar(255)
,`impact` varchar(255)
,`scr_pro` int(11)
,`scr_imp` int(11)
,`scr_ttl` int(11)
,`risk_treatment` varchar(255)
,`date_identification` date
,`rr_pro` int(11)
,`rr_imp` int(11)
,`rr_ttl` int(11)
,`document` varchar(255)
,`verified` varchar(255)
,`comment` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dbriskregister`
-- (See below for the actual view)
--
CREATE TABLE `view_dbriskregister` (
`id` int(11)
,`date` varchar(100)
,`periode` varchar(100)
,`id_div` int(11)
,`divisi` varchar(255)
,`id_stsrr` int(11)
,`status` varchar(255)
,`no` int(8)
,`risk_code` varchar(100)
,`id_cat` int(11)
,`risk_category` varchar(255)
,`risk_event` varchar(256)
,`scrpro` int(8)
,`scrimp` int(8)
,`scrttl` int(8)
,`risk_treatment` varchar(256)
,`rrpro` int(8)
,`rrimp` int(8)
,`rrttl` int(8)
,`document` varchar(256)
,`verified` varchar(100)
,`comment` varchar(256)
);

-- --------------------------------------------------------

--
-- Structure for view `view_dbdokumen`
--
DROP TABLE IF EXISTS `view_dbdokumen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dbdokumen`  AS SELECT `db_dokumen`.`id` AS `id`, `db_dokumen`.`nomor_ketentuan` AS `nomor_ketentuan`, `db_dokumen`.`judul_ketentuan` AS `judul_ketentuan`, `jenis_ketentuan`.`id_jk` AS `id_jk`, `jenis_ketentuan`.`jenis_ketentuan` AS `jenis_ketentuan`, `jenis_ketentuan`.`kode_jk` AS `kode_jk`, `db_dokumen`.`tanggal_terbit` AS `tanggal_terbit`, `db_dokumen`.`last_review` AS `last_review`, `db_dokumen`.`next_review` AS `next_review`, `divisi`.`id_div` AS `id_div`, `divisi`.`divisi` AS `divisi`, `divisi`.`kode_divisi` AS `kode_divisi`, `status`.`id_sts` AS `id_sts`, `status`.`status` AS `status`, `info_doc`.`id_info` AS `id_info`, `info_doc`.`info_doc` AS `info_doc`, `db_dokumen`.`searchdoc` AS `searchdoc`, `db_dokumen`.`file` AS `file` FROM ((((`db_dokumen` join `jenis_ketentuan` on(`db_dokumen`.`jenis_ketentuan` = `jenis_ketentuan`.`id_jk`)) join `divisi` on(`db_dokumen`.`divisi` = `divisi`.`id_div`)) join `status` on(`db_dokumen`.`status` = `status`.`id_sts`)) join `info_doc` on(`db_dokumen`.`info_doc` = `info_doc`.`id_info`)) WHERE `db_dokumen`.`is_active` = 1 AND `jenis_ketentuan`.`is_active` = 1 AND `divisi`.`is_active` = 1 AND `status`.`is_active` = 1 AND `info_doc`.`is_active` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `view_dbformriskregister`
--
DROP TABLE IF EXISTS `view_dbformriskregister`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dbformriskregister`  AS SELECT `dfr`.`id` AS `id_dfr`, `dfr`.`date` AS `date`, `dfr`.`periode` AS `periode`, `divisi`.`id_div` AS `divisi_id`, `divisi`.`divisi` AS `divisi`, `status_rr`.`id_stsrr` AS `status_rr_id`, `status_rr`.`status` AS `status`, `fr`.`id` AS `id_fr`, `fr`.`risk_code` AS `risk_code`, `risk_category`.`id` AS `id_rc`, `risk_category`.`risk_category` AS `risk_category`, `fr`.`risk_event` AS `risk_event`, `fr`.`risk_factor` AS `risk_factor`, `fr`.`risk_indicator` AS `risk_indicator`, `fr`.`impact` AS `impact`, `fr`.`scr_pro` AS `scr_pro`, `fr`.`scr_imp` AS `scr_imp`, `fr`.`scr_ttl` AS `scr_ttl`, `fr`.`risk_treatment` AS `risk_treatment`, `fr`.`date_identification` AS `date_identification`, `fr`.`rr_pro` AS `rr_pro`, `fr`.`rr_imp` AS `rr_imp`, `fr`.`rr_ttl` AS `rr_ttl`, `fr`.`document` AS `document`, `fr`.`verified` AS `verified`, `fr`.`comment` AS `comment` FROM ((((`db_formriskregister` `dfr` left join `divisi` on(`dfr`.`divisi` = `divisi`.`id_div`)) left join `status_rr` on(`dfr`.`status_rr` = `status_rr`.`id_stsrr`)) left join `form_risk` `fr` on(`dfr`.`id` = `fr`.`form_risk`)) left join `risk_category` on(`fr`.`risk_category` = `risk_category`.`id`)) WHERE `dfr`.`is_active` = 1 AND `divisi`.`is_active` = 1 AND `status_rr`.`is_active` = 1 AND `fr`.`is_active` = 1 AND `risk_category`.`is_active` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `view_dbriskregister`
--
DROP TABLE IF EXISTS `view_dbriskregister`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dbriskregister`  AS SELECT `db_riskregister`.`id` AS `id`, `db_riskregister`.`date` AS `date`, `db_riskregister`.`periode` AS `periode`, `divisi`.`id_div` AS `id_div`, `divisi`.`divisi` AS `divisi`, `status_rr`.`id_stsrr` AS `id_stsrr`, `status_rr`.`status` AS `status`, `db_riskregister`.`no` AS `no`, `db_riskregister`.`risk_code` AS `risk_code`, `risk_category`.`id` AS `id_cat`, `risk_category`.`risk_category` AS `risk_category`, `db_riskregister`.`risk_event` AS `risk_event`, `db_riskregister`.`scrpro` AS `scrpro`, `db_riskregister`.`scrimp` AS `scrimp`, `db_riskregister`.`scrttl` AS `scrttl`, `db_riskregister`.`risk_treatment` AS `risk_treatment`, `db_riskregister`.`rrpro` AS `rrpro`, `db_riskregister`.`rrimp` AS `rrimp`, `db_riskregister`.`rrttl` AS `rrttl`, `db_riskregister`.`document` AS `document`, `db_riskregister`.`verified` AS `verified`, `db_riskregister`.`comment` AS `comment` FROM (((`db_riskregister` join `divisi` on(`db_riskregister`.`divisi` = `divisi`.`id_div`)) join `status_rr` on(`db_riskregister`.`status` = `status_rr`.`id_stsrr`)) join `risk_category` on(`db_riskregister`.`risk_category` = `risk_category`.`id`)) WHERE `db_riskregister`.`is_active` = 1 AND `divisi`.`is_active` = 1 AND `status_rr`.`is_active` = 1 AND `risk_category`.`is_active` = 1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_dokumen`
--
ALTER TABLE `db_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jk` (`jenis_ketentuan`),
  ADD KEY `id_div` (`divisi`),
  ADD KEY `status` (`status`),
  ADD KEY `info_doc` (`info_doc`),
  ADD KEY `searchdoc` (`searchdoc`),
  ADD KEY `searchdoc_2` (`searchdoc`);

--
-- Indexes for table `db_formriskregister`
--
ALTER TABLE `db_formriskregister`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisi` (`divisi`),
  ADD KEY `status_rr` (`status_rr`);

--
-- Indexes for table `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_riskregister`
--
ALTER TABLE `db_riskregister`
  ADD PRIMARY KEY (`id`),
  ADD KEY `risk_category` (`risk_category`),
  ADD KEY `status` (`status`),
  ADD KEY `divisi` (`divisi`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_div`);

--
-- Indexes for table `form_risk`
--
ALTER TABLE `form_risk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `risk_category` (`risk_category`),
  ADD KEY `formriskregister_id` (`form_risk`);

--
-- Indexes for table `info_doc`
--
ALTER TABLE `info_doc`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jenis_ketentuan`
--
ALTER TABLE `jenis_ketentuan`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `risk_category`
--
ALTER TABLE `risk_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_sts`);

--
-- Indexes for table `status_rr`
--
ALTER TABLE `status_rr`
  ADD PRIMARY KEY (`id_stsrr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_dokumen`
--
ALTER TABLE `db_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `db_formriskregister`
--
ALTER TABLE `db_formriskregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_riskregister`
--
ALTER TABLE `db_riskregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `form_risk`
--
ALTER TABLE `form_risk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `info_doc`
--
ALTER TABLE `info_doc`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_ketentuan`
--
ALTER TABLE `jenis_ketentuan`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `risk_category`
--
ALTER TABLE `risk_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_sts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_rr`
--
ALTER TABLE `status_rr`
  MODIFY `id_stsrr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_dokumen`
--
ALTER TABLE `db_dokumen`
  ADD CONSTRAINT `db_dokumen_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`id_sts`),
  ADD CONSTRAINT `db_dokumen_ibfk_5` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_div`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `db_dokumen_ibfk_6` FOREIGN KEY (`jenis_ketentuan`) REFERENCES `jenis_ketentuan` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `db_formriskregister`
--
ALTER TABLE `db_formriskregister`
  ADD CONSTRAINT `db_formriskregister_ibfk_2` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_div`),
  ADD CONSTRAINT `db_formriskregister_ibfk_3` FOREIGN KEY (`status_rr`) REFERENCES `status_rr` (`id_stsrr`);

--
-- Constraints for table `db_riskregister`
--
ALTER TABLE `db_riskregister`
  ADD CONSTRAINT `db_riskregister_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_rr` (`id_stsrr`),
  ADD CONSTRAINT `db_riskregister_ibfk_2` FOREIGN KEY (`risk_category`) REFERENCES `risk_category` (`id`),
  ADD CONSTRAINT `db_riskregister_ibfk_3` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_div`);

--
-- Constraints for table `form_risk`
--
ALTER TABLE `form_risk`
  ADD CONSTRAINT `form_risk_ibfk_1` FOREIGN KEY (`risk_category`) REFERENCES `risk_category` (`id`),
  ADD CONSTRAINT `form_risk_ibfk_2` FOREIGN KEY (`form_risk`) REFERENCES `db_formriskregister` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
