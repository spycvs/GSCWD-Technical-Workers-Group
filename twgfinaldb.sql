-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 08:25 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidevaluation`
--

CREATE TABLE `bidevaluation` (
  `p_id` varchar(20) NOT NULL,
  `p_title` varchar(50) NOT NULL,
  `p_location` varchar(100) NOT NULL,
  `p_budget` varchar(20) NOT NULL,
  `purchaseNo` varchar(20) NOT NULL,
  `procurement` varchar(100) NOT NULL,
  `dateOfPosting` varchar(50) NOT NULL,
  `deadlineOfInvitation` varchar(50) NOT NULL,
  `numberInvitedBidders` varchar(20) NOT NULL,
  `nameInvitedBidders` varchar(200) NOT NULL,
  `noPurchasedBid` varchar(20) NOT NULL,
  `namePurchasedBid` varchar(200) NOT NULL,
  `noBidIssued` int(20) NOT NULL,
  `deadlineOfBid` varchar(50) NOT NULL,
  `bidTime` varchar(20) NOT NULL,
  `numberBidsSubmitted` int(20) NOT NULL,
  `typeBidSec` varchar(50) NOT NULL,
  `amountBidSec` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `nameProspect` varchar(200) NOT NULL,
  `prospectBid` varchar(50) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `results` varchar(100) NOT NULL,
  `periodPostQual` varchar(100) NOT NULL,
  `grounds` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidevaluation`
--

INSERT INTO `bidevaluation` (`p_id`, `p_title`, `p_location`, `p_budget`, `purchaseNo`, `procurement`, `dateOfPosting`, `deadlineOfInvitation`, `numberInvitedBidders`, `nameInvitedBidders`, `noPurchasedBid`, `namePurchasedBid`, `noBidIssued`, `deadlineOfBid`, `bidTime`, `numberBidsSubmitted`, `typeBidSec`, `amountBidSec`, `qty`, `nameProspect`, `prospectBid`, `rank`, `qualification`, `results`, `periodPostQual`, `grounds`) VALUES
('2019-14', 'Construction of 300 cu..m Elevated Steel Tanks', 'MSU Compound, General Santos City', '12,812,890.00', '1018-119', 'Public Bidding', 'July 24, 2019', 'August 1, 2019', 'Six (6)', 'Hexamindz, Winch Mechanical Innovation & General Construction, Inc., Leighcheen Const., LHE Construction, Fastruct Design & Construction and Hanna Via Constructions', 'Two (2)', 'GJY Construction,  System Processor and Construction', 5, 'August 14, 2019', '01:30  PM', 5, 'BSD', '', '1 Lot', 'System Processor and Construction', '12,698,637.06', 'Lowest Bidder', 'Post Qualified', 'Responsive Bidder', '', 'Documents / Requirements were complete');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `type`, `image`) VALUES
(22, 'superadmin', 'adminpass', 'Admin', 'admin', 'Master', 'water_district.png'),
(24, 'admin', 'admin', 'admin', 'admin', 'Admin', 'juan11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidevaluation`
--
ALTER TABLE `bidevaluation`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
