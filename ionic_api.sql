-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2019 at 02:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ionic_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ci_sessions`
--

CREATE TABLE `tbl_ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ci_sessions`
--

INSERT INTO `tbl_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('081jsj1dch430olm9p3ba4fo7enpvsrk', '127.0.0.1', 1560298149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239383134393b),
('0egp7dpb3g0bo18ufs56copeuu3vq9v4', '127.0.0.1', 1560281979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238313937393b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('0hnoadej23dekfl7tbvvkosldm461iau', '127.0.0.1', 1560295865, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239353836343b),
('1k8vfp697vrhjis57muju244a8qibv55', '127.0.0.1', 1560278549, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237383534393b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b),
('3grl03ol0blbl384ngibpmghl0ud6ffc', '127.0.0.1', 1560288625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238383632353b),
('3v7lmhai75hq935jumcsmkb7e53edoka', '127.0.0.1', 1560283812, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238333831323b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('438aemihbl3lcg3l09hpeu0n8vm04tj9', '127.0.0.1', 1560291645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239313634353b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303834223b),
('5u3h38um5dq4t5k1sf2tong1jva06pck', '127.0.0.1', 1560296028, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239363032373b),
('5u90kt2gh234mocsbgqr87smu3sgc45l', '127.0.0.1', 1560291105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239313130353b),
('6kjkske57h0urc66ummu4pq6v81577od', '127.0.0.1', 1560275627, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237353632333b),
('85s0l663tfu68o2aks2us24qao8dtspb', '127.0.0.1', 1560295993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239353939333b),
('8bnbnvdqg4c2obkaovsjs0de5g5r0me0', '127.0.0.1', 1560296892, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239363839313b),
('b3hba38sdt666mkrrg3lu4mpifej94q6', '127.0.0.1', 1560276725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237363732353b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303735223b),
('b61pk6hdmabagk4fl4dah90kc6k6k4ue', '127.0.0.1', 1560295985, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239353938353b),
('c2ea80fagtts7qjcth218uebth2rpost', '127.0.0.1', 1560279320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237393332303b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b),
('cf930ohcpe2gfb1stufme9t0j0qaqd1q', '127.0.0.1', 1560273685, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237333638333b),
('cunoqs53of1o7b4ivl5e3bqutbdr7j0j', '127.0.0.1', 1560284702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238343730323b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('d2nct2la4li8445s9cfehsraet7naulh', '127.0.0.1', 1560296704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239363730343b),
('dh568sjicohs40d4uji8pqcjnofo00bl', '127.0.0.1', 1560298266, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239383134393b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303835223b),
('fltevod6avnglmr2a0lruoc1gqak4tfv', '127.0.0.1', 1560297938, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239373933373b),
('grs1s4fn2ahnuoagvno9v489fqf08q67', '::1', 1560316739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303331363733393b),
('h89f9ai2vqrnhvc68bdlah9f2nde67k6', '127.0.0.1', 1560278993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237383939333b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b),
('hl82r273qhrlso8mt8iuqgbj2k8s0j9i', '127.0.0.1', 1560295048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239353034383b),
('iehh0sohg7lnge70h8p7t6hdga6ktpfq', '127.0.0.1', 1560313222, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303331333232323b),
('jiuq1smq421ff3p2ft990coeb67vh3rv', '127.0.0.1', 1560312279, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303331323237383b),
('jrb4lpndt65a7ihil7h7np040g2as8kk', '127.0.0.1', 1560296087, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239363038373b),
('kp7e4fjillhe84ekj3tp3ud2q2ti4jrc', '127.0.0.1', 1560283172, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238333137323b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('kqsbgnsnl6e287ussbdrg7bs30nhg4ro', '::1', 1560316739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303331363733393b),
('ktsbuaqc5s2ehk4jsvb90kb7u1c40ben', '127.0.0.1', 1560282810, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238323831303b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('kvdkhlldlko3qdecu64p5aq6hm8kr05c', '::1', 1560316293, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303331363239333b),
('li1vhbaeejuna0dhno2182cn4s5049t1', '127.0.0.1', 1560296068, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239363036383b),
('m71o8pc3vmjstll2dbsino4uoh72a2f1', '127.0.0.1', 1560295787, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239353738363b),
('ms0dt0vc00n0b4d97dlqqq3rpdivojds', '127.0.0.1', 1560295956, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239353935363b),
('o66pmm4cl9c28ouorq02o53elg146mv7', '127.0.0.1', 1560296757, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239363735373b),
('p5l37cfmj9i975g5bvv4er42c9r9ci31', '127.0.0.1', 1560296524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239363532333b),
('ptqdg74ft6skkp3j9qn7c0l1jt09mlnd', '127.0.0.1', 1560286112, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238363131323b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303738223b),
('pub6tt93ocv9tv0d73rst86tsn66iktu', '127.0.0.1', 1560295851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239353835313b),
('qot30kcoe85v633sq113vth3g288vkm9', '127.0.0.1', 1560284121, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238343132313b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('quqcla75rh15er2bdu3sotnn2fi5rfb7', '127.0.0.1', 1560276341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237363334313b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303735223b),
('r8r6u5s3nkgppecg3ke6ouhhep0ktif4', '127.0.0.1', 1560278122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237383132323b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b),
('rf602j10d5pe6mdei6dgt5q447hrsg03', '127.0.0.1', 1560282351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238323335313b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('si8h6l84dduc91ak9drah25sl3anro5r', '127.0.0.1', 1560297944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239373934343b),
('tge01k7lt3vu4uueiscl4pjihqi9h0bm', '127.0.0.1', 1560297096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303239373039363b),
('uvu4l2g4msnjdsunvrnjbni4i6pr81np', '127.0.0.1', 1560277800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303237373830303b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303735223b),
('v1lb1v832shjbb80bi9igpultuo0sgln', '127.0.0.1', 1560283486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238333438363b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303736223b69645f757365727c733a323a223332223b6175746f7269746174696f6e7c693a3737373b69645f63757272656e63797c693a313b69645f747261636b7c733a31313a2249432d3334322d37393432223b6d6f6e65797c733a363a22323232323232223b747970655f6163636f756e747c733a31303a22496e646566696e69646f223b6163636f756e745f6e756d6265727c4e3b62616e6b7c733a31303a22496e646566696e69646f223b),
('viuoev4lakkmki2uccc39845vrhs3el0', '127.0.0.1', 1560289257, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536303238393235373b757365725f69647c733a323a223332223b757365726e616d657c733a31303a2238303936373833343133223b7374617475737c733a313a2231223b69645f61637469766974797c733a343a2231303833223b);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`) VALUES
(1, 'superuser', '202cb962ac59075b964b07152d234b70', 'Richard', 'mazda@gmail.com'),
(2, 'master', '202cb962ac59075b964b07152d234b70', 'Jeff', 'asdlo@yahoo.com'),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(5, 'azura', '202cb962ac59075b964b07152d234b70', 'Azuramasa', 'asura@gmail.com'),
(6, 'username', '202cb962ac59075b964b07152d234b70', 'User full name', 'user_email@yahoo.com'),
(7, 'thanos', '202cb962ac59075b964b07152d234b70', 'Thanos Car', 'thanosmcu@gmail.com'),
(8, 'stroop', '202cb962ac59075b964b07152d234b70', 'Storm Trooper', 'stormtp@gmail.com'),
(9, 'legend', 'e10adc3949ba59abbe56e057f20f883e', 'mike rico', 'michael12@hotmail.es');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ci_sessions`
--
ALTER TABLE `tbl_ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;