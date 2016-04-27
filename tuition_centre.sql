-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 09:54 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuition_centre`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(255) NOT NULL,
  `amount_fee` varchar(255) NOT NULL,
  `paid_fee` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `date_edit` varchar(500) NOT NULL,
  `updateby` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `amount_fee`, `paid_fee`, `date_added`, `date_edit`, `updateby`, `student_id`) VALUES
(11, '100', '50', '01-Mar-2016', '', '', 0),
(12, '200', '100', '02-Mar-2016', '', '', 0),
(13, '300', '150', '03-Mar-2016', '', '', 0),
(14, '400', '200', '04-Mar-2016', '', '', 0),
(15, '500', '250', '05-Mar-2016', '', '', 0),
(16, '600', '300', '06-Mar-2016', '', '', 0),
(17, '700', '350', '07-Mar-2016', '', '', 0),
(18, '800', '400', '08-Mar-2016', '', '', 0),
(19, '900', '450', '09-Mar-2016', '', '', 0),
(20, '1000', '500', '10-Mar-2016', '', '', 0),
(21, '1100', '550', '11-Mar-2016', '', '', 0),
(22, '1200', '600', '12-Mar-2016', '', '', 0),
(23, '1300', '650', '13-Mar-2016', '', '', 0),
(24, '1400', '700', '14-Mar-2016', '', '', 0),
(25, '1500', '750', '15-Mar-2016', '', '', 0),
(26, '1400', '700', '16-Mar-2016', '', '', 0),
(27, '1500', '750', '17-Mar-2016', '', '', 0),
(28, '1600', '800', '18-Mar-2016', '', '', 0),
(29, '1700', '850', '19-Mar-2016', '', '', 0),
(30, '1800', '900', '20-Mar-2016', '', '', 0),
(31, '19000', '850', '21-Mar-2016', '', '', 0),
(32, '2000', '100', '22-Mar-2016', '', '', 0),
(33, '2100', '1050', '23-Mar-2016', '', '', 0),
(34, '2200', '1100', '24-Mar-2016', '', '', 0),
(51, '2000', '500', '', '', '', 0),
(52, '50000', '4000', '', '', '', 0),
(53, 'saasas', 'asas', 'Tue-Apr-2016', '', '', 0),
(54, '4000', '3000', 'Tue-Apr-2016', '', '', 0),
(55, '5000', '3000', 'Tue-Apr-2016', '', '', 0),
(56, '200', '100', 'Mon-Apr-2016', '', '', 0),
(57, 'asdf', 'asdf', 'Mon-Apr-2016', '', '', 0),
(58, 'asdf', 'asdf', 'Mon-Apr-2016', '', '', 0),
(59, '30000', '20000', 'Sat-Apr-2016', '', '', 0),
(60, '1000', '100', 'Tue-Apr-2016', '', '', 0),
(61, '100', '10000', 'Tue-Apr-2016', '', '', 0),
(62, '50', '5000', 'Tue-Apr-2016', '', '', 0),
(63, '100000', '1000', 'Tue-Apr-2016', '', '', 0),
(64, 'asdfasd', 'asdfasd', 'Tue-Apr-2016', '', '', 0),
(65, '5555', '555555', 'Tue-Apr-2016', '', '', 103),
(66, '200', '100', 'Tue-Apr-2016', '', '', 104),
(67, '5000', '2000', 'Tue-Apr-2016', '', '', 105);

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `s.no` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`s.no`, `student_name`, `father_name`, `contact_no`, `email`, `address`, `course`, `amount`, `paid`) VALUES
(25, 'ab', 'bb', 'cb', 'db', 'eb', '12', 'fb', 'gb');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_timing` varchar(255) NOT NULL,
  `course_fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `student_id`, `course_name`, `course_timing`, `course_fee`) VALUES
(11, 0, 'maths', '2pm to 4pm', '5000'),
(12, 0, 'engl', '2pm to 6pm', '5000'),
(13, 0, 'Chemistry', '2pm to 6pm s', '20000'),
(14, 0, 'somename', '2pm to 6pm', '20000'),
(16, 0, 'Chemistry1', '2pm to 4pm', '20000'),
(17, 0, 'maths', '2pm to 4pm', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `s.no` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_fee` varchar(255) NOT NULL,
  `received` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`s.no`, `name`, `total_fee`, `received`) VALUES
(5, 'rehman ali1', '3000', '2000'),
(6, 'amjad', '5000', '3500'),
(10, 'salman khan', '2000', '2000'),
(14, 'akram', '4000', '3500'),
(15, 'salo khan', '4000', '3000'),
(17, 'ali jamadar', '3000', '2000'),
(18, ' macho wala', '4000', '3500'),
(19, 'ali khan macho wala', '3000', '3000'),
(20, 'akram', '4000', '2000'),
(22, 'junaid', '4000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `recieved_form`
--

CREATE TABLE `recieved_form` (
  `s.no` int(255) NOT NULL,
  `checkbox` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `teacher_percentage` varchar(255) NOT NULL,
  `Date` text NOT NULL,
  `select_option` varchar(255) NOT NULL,
  `option_month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recieved_form`
--

INSERT INTO `recieved_form` (`s.no`, `checkbox`, `email`, `discount`, `teacher_percentage`, `Date`, `select_option`, `option_month`) VALUES
(1, '', 'abc@yahoo.com', '12', 'jhsdqwj', '0000-00-00', 'Biology Sir Rizwan @6000', ''),
(2, 'SOMETHING1', 'FWEGWEG@FEV', '59SDAGAWEG', '654DSFGEG', '0000-00-00', 'maths_sir_Bilal_6000', 'Select Month'),
(5, 'on', 'yasirkhalidn@yahoo.com', '30', 'salo', '2016-03-10', 'maths sir Bilal@6000', 'november'),
(6, '', 'zxc@yahoo.com', '34', 'sfsaFD', '0000-00-00', '', ''),
(7, '', 'salmantanha200@yahoo.com', '566', '55', '0000-00-00', 'English sir waqas @6000', ''),
(8, '', 'salmantanha200@yahoo.com', '566', '55', '0000-00-00', 'English sir waqas @6000', ''),
(9, '', 'salmantanha200@yahoo.com', '231', '4124', '0000-00-00', 'English sir waqas @6000', 'Febuary'),
(10, '', 'jcsac@yhoo.com', 'dwnqbd', '867', '0000-00-00', 'green', 'september'),
(11, 'on', 'yasirkhalidn@yahoo.com', '50%', '20&', '0000-00-00', 'Urdu sir Gulzar @6000', 'April'),
(12, 'on', 'yasirkhalidn@yahoo.com', '50%', '20&', '0000-00-00', 'Urdu sir Gulzar @6000', 'April'),
(13, '', 'yasirkhalidn@yahoo.com', 'adq', 'adfwqfwq', '0000-00-00', 'English sir waqas @6000', 'October'),
(14, '', 'yasirkhalidn@yahoo.com', 'adq', 'adfwqfwq', '0000-00-00', 'English sir waqas @6000', 'October'),
(15, 'on', 'zxc@yahoo.coms', 'q22', 'hjdgaHD', '0000-00-00', 'Urdu sir Gulzar @6000', 'December'),
(16, 'on', 'zxc@yahoo.coms', 'q22', 'hjdgaHD', '0000-00-00', 'Urdu sir Gulzar @6000', 'December'),
(17, 'on', '', '', '', '0000-00-00', 'Select Course and Teacher', 'SELECT MONTH'),
(18, 'on', '', '', '', '0000-00-00', 'Select Course and Teacher', 'SELECT MONTH'),
(20, 'on', 'yasirkhalidn@yahoo.com', '20%', 'SATTAR', '0000-00-00', 'Urdu sir Gulzar @6000', 'August'),
(21, 'on', 'salmantanha200@yahoo.com', '34', '56', '0000-00-00', 'English sir waqas @6000', 'October'),
(22, 'on', 'salmantanha200@yahoo.com', '34', '56', '0000-00-00', 'English sir waqas @6000', 'October'),
(23, 'on', 'zxc@yahoo.com', 'kjahxsm,', '24%', '0000-00-00', 'Biology Sir Rizwan @6000', 'September'),
(24, 'on', 'zxc@yahoo.com', 'kjahxsm,', '24%', '0000-00-00', 'Biology Sir Rizwan @6000', 'September'),
(25, 'on', 'asdjk@yahoo.com', '34', '23', '0000-00-00', 'English sir waqas @6000', 'August'),
(26, 'on', 'asdjk@yahoo.com', '34', '23', '0000-00-00', 'English sir waqas @6000', 'August'),
(27, 'on', 'yasirkhalidn@yahoo.com', '34', '24%', '0000-00-00', 'English sir waqas @6000', 'May'),
(28, 'on', 'yasirkhalidn@yahoo.com', '34', '24%', '0000-00-00', 'English sir waqas @6000', 'May'),
(29, 'on', 'abc@yahoo.com', 'dF', 'ASFW', '0000-00-00', 'English sir waqas @6000', 'July'),
(30, 'on', 'abc@yahoo.com', 'dF', 'ASFW', '0000-00-00', 'English sir waqas @6000', 'July'),
(31, 'on', 'zxc@yahoo.com', '34', '23', '', 'Biology Sir Rizwan @6000', 'September'),
(32, 'on', 'zxc@yahoo.com', '34', '23', '', 'Biology Sir Rizwan @6000', 'September'),
(33, 'on', 'mail@mail.com', 'wd', 'ASDASasa', '', 'Biology Sir Rizwan @6000', 'August'),
(34, 'on', 'mail@mail.com', 'wd', 'ASDASasa', '2016-03-17', 'Biology Sir Rizwan @6000', 'August'),
(35, 'on', 'sulemantanha66@yahoo.com', '12', '24%', '2016-03-23', 'Biology Sir Rizwan @6000', 'October'),
(36, 'on', 'sulemantanha66@yahoo.com', '12', '24%', '2016-03-10', 'Urdu sir Gulzar @6000', 'November');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `s.no` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`s.no`, `name`, `salary`) VALUES
(1, 'akram1', '3000'),
(4, 'aslam', '2000'),
(5, 'akram', '3000'),
(12, 'salo khan', '3000'),
(13, 'salo khan', '3000'),
(14, 'rehman ali1', '2000'),
(15, 'ali jamadar', '2500'),
(16, 'ali khan macho wala', '3500'),
(17, 'salo khan', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_adress` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `father_name`, `contact_no`, `email_adress`, `address`) VALUES
(79, 'ashfaq', 'khakm2', '031598699802', 'jkjfgfhgd@jhg', 'mardan2'),
(80, 'adnan', 'khakm', '03159869980', 'suleman38@gmail.com', 'mardan'),
(82, 'ali', 'akram101', '7546546435', ';ldfjfjgkfjgkfg@', 'erytjuuykuk'),
(85, 'ashfaq', 'khakm', '7546546435', 'suleman38@gmail.com', 'mardan'),
(86, 'adnan1', 'ahmad1', '031598699801', 'suleman38@gmail.com1', 'mardan1'),
(88, 'ashfaq1', 'khakm', '0315986998011', 'dkuhgel@rtur', 'mardan'),
(89, 'adnan', 'akram', '7546546435', 'suleman38@gmail.com1', 'mardan12'),
(91, 'adf', 'asdf', 'sadf', 'mjks4545@gmail.com', 'sadfasdf'),
(94, 'akram', 'ahmaad', '03158293298', 'sjkdfajkldsfj@1223', 'ajksdfhdjshfajksdhfsdjkhf'),
(95, 'ali1', 'akram1', '0314768786551', 'gfdfgsddfgs@hgrfrt', 'fjfgjhgjhgfffd1'),
(96, 'ashfaq12', 'khan', '03018989553', 'mjks4545@gmail.com', 'address'),
(97, 'adnan1', 'akram', '031598699801', 'yutuytryurytr23@f', 'mardan12'),
(98, 'junaid', 'khan', '03018989553', 'mjks4545@gmail.com', 'some address'),
(99, 'another', 'another', '555555555555', 'mjks4545@gmail.com', 'sp,eaddress'),
(100, 'asdfa', 'asdf', 'asdf', 'asdf@asdfa.com', 'asdfasdf'),
(101, 'asdsa', 'asdsa', 'asd', 'asdas@gmail.com', 'sadfasdf'),
(102, 'asdf', 'asdf', 'asdfa', 'mjks4545@gmail.com', 'afasdf'),
(103, 'asdf', 'asdf', 'asdfasd', 'asdf@asdfa.com', 'asdfasdf'),
(104, 'asdf', 'asdf', 'asdf', 'asdf@gmail.com', 'asdfasdf'),
(105, 'junaid', 'khan', 'sadomsad', 'somename@gmail.com', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_join`
--

CREATE TABLE `student_course_join` (
  `student_course_join_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course_join`
--

INSERT INTO `student_course_join` (`student_course_join_id`, `student_id`, `course_id`) VALUES
(27, 103, 12),
(28, 104, 11),
(29, 105, 11);

-- --------------------------------------------------------

--
-- Table structure for table `teacher1`
--

CREATE TABLE `teacher1` (
  `s.no` int(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_timing` varchar(255) NOT NULL,
  `teacher_salary` varchar(255) NOT NULL,
  `teacher_grad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher1`
--

INSERT INTO `teacher1` (`s.no`, `teacher_name`, `teacher_timing`, `teacher_salary`, `teacher_grad`) VALUES
(8, 'fawad ali', '2:00pm to 4:00pm', '20000', '18'),
(9, 'imran khan', '3:00pm to 5:00pm', '200000', '17'),
(13, 'akram khan', '2:00pm to 5:00pm1', '30000', '19'),
(14, 'imran khan', '3:00pm to 5:00pm1', '35000', '20'),
(15, 'fawad khan', '2:00pm to 5:00pm1', '10000', '9'),
(17, 'imran khan1', '2:00pm to 5:00pm1', '10000', '9'),
(19, 'fawad ali', '2:00pm to 4:00pm', '20000', '18'),
(20, 'asas', 'asa', '3000', '9'),
(21, 'sdsd', '2:00pm to 5:00pm1', '30000', '9'),
(22, 'fawad khan', '3:00pm to 5:00pm1', '60000', '17'),
(23, 'navaz sharif', '3:00pm to 5:00pm1', '30000', '17'),
(24, 'imran khan', '3:00pm to 5:00pm1', '3000', '19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'test', 'test@testmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'junaid', 'mjks4545@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `recieved_form`
--
ALTER TABLE `recieved_form`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_course_join`
--
ALTER TABLE `student_course_join`
  ADD PRIMARY KEY (`student_course_join_id`);

--
-- Indexes for table `teacher1`
--
ALTER TABLE `teacher1`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `recieved_form`
--
ALTER TABLE `recieved_form`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `student_course_join`
--
ALTER TABLE `student_course_join`
  MODIFY `student_course_join_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `teacher1`
--
ALTER TABLE `teacher1`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
