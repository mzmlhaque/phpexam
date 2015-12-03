-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2015 at 10:14 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE IF NOT EXISTS `add_employee` (
  `id` int(11) NOT NULL,
  `role_employee` varchar(20) NOT NULL,
  `e_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `department` varchar(10) NOT NULL,
  `salary` varchar(5) NOT NULL,
  `image` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `role_employee`, `e_id`, `name`, `age`, `department`, `salary`, `image`, `email`, `password`) VALUES
(1, 'admin', 'ct001', 'yasinfaruk', '28', 'IT', '543', 'jpg.jpg', 'rahim@mail.com', '1234'),
(2, 'employee', 'ct002', 'faruk', '29', 'Student', '343', 'faruk.JPG', 'yasin.faruk8585@gmai', '1234'),
(3, 'admin', 'ct101', 'sujan', '22', 'IT', '124', 'happy.png', 'sujan@mail.com', '1234'),
(4, 'Admin', 'CT004', 'mohammad faruk', '28', 'HR', '1313', '11401054_10340712532', 'yasinomarfaruk@gmail', '1234'),
(5, 'Employee', 'CT005', 'faruk', '44', 'Mentor', '1313', '2072-665335-Category', 'rahim@mail.com', '2'),
(6, 'Employee', 'CT007', 'Karim', '33', 'Mentor', '79782', 'aminultarofdar-2.jpg', 'karim@mail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `compnay_name` text NOT NULL,
  `recent_news` text NOT NULL,
  `compnay_details` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_profile`
--

CREATE TABLE IF NOT EXISTS `employee_profile` (
  `id` int(11) NOT NULL,
  `e_id` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `department` text NOT NULL,
  `designation` text NOT NULL,
  `sallery` int(11) NOT NULL,
  `image` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `approved_hours` int(11) NOT NULL,
  `hourly_rate` int(11) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `leave_remaining` int(11) NOT NULL,
  `earnings` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_profile`
--

INSERT INTO `employee_profile` (`id`, `e_id`, `name`, `dob`, `address`, `department`, `designation`, `sallery`, `image`, `email`, `password`, `approved_hours`, `hourly_rate`, `total_leave`, `leave_remaining`, `earnings`) VALUES
(23, '1449028694', 'Mozammel Haque', '1990-10-10', 'Dhaka, Bangladesh', 'Technology', 'PorgramOfficer', 78934, '1447100321.jpg', 'mzmlhaque61@gmail.com', 'This123Pass', 0, 0, 2, 3, 0),
(31, '1449127314', 'Tamanna Akter', '2014-03-04', 'Mymensingh, Dhaka, Bangladesh', 'Technology', 'ProgramCoordinator', 0, '1449127357.jpg', 'tamanna@gmail.com', '12345678', 0, 0, 0, 0, 0),
(32, '1449127361', 'Rakit Hasan', '2015-12-01', 'Mymensingh, Dhaka, Bangladesh', 'HR', 'OfficeAssistant', 0, '1449127392.jpg', 'rakit3232@yahoo.com', '23434', 0, 0, 0, 0, 0),
(33, '1449127403', 'Pulak Roy', '2015-12-01', 'Mymensingh, Bangladesh', 'Accounts', 'AssistantDirector', 6546, '1449127449.jpg', 'pulak@serac-bd.org', '896765', 0, 0, 2, 3, 0),
(34, '1449127544', 'Fatema Khatun', '2015-12-01', 'Mymensingh, Dhaka, Bangladesh', 'Project', 'PorgramOfficer', 0, '1449127579.jpg', 'fatema@gmail.com', '345345', 0, 0, 0, 0, 0),
(35, '1449127583', 'Mahmudul Hasan', '2015-12-01', 'Dhaka, Bangladesh', 'Management', 'ComputerOperator', 0, '1449127613.jpg', 'mahmudul@gmail.com', '345', 0, 0, 0, 0, 0),
(36, '1449128244', 'Rajib Pandit', '2015-12-01', 'Ishwargonj, Mymensingh, Bangladesh', 'Technical', 'ProjectOfficer', 0, '1449128300.jpg', 'rajib@facebook.com', '75987', 0, 0, 0, 0, 0),
(37, '1449132076', 'Reduanul Haque', '2015-12-01', 'Naomahal, Mymensingh, Bangladesh', 'Accounts', 'ComputerOperator', 0, '1449132124.jpg', 'reduan@gmail.com', '34234', 0, 0, 0, 0, 0),
(38, '1449132024', 'Nasir Hossain', '2015-12-01', 'Maskanda, Mymensingh, Bangladesh', 'SecrretDivision', 'OfficeAssistant', 0, '1449132127.jpg', 'nasir5201@gmail.com', '234534', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_time_in`
--

CREATE TABLE IF NOT EXISTS `employee_time_in` (
  `id` int(11) NOT NULL,
  `e_id` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time_in` varchar(40) NOT NULL,
  `time_out` varchar(40) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `over_time` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_time_in`
--

INSERT INTO `employee_time_in` (`id`, `e_id`, `date`, `time_in`, `time_out`, `hours`, `over_time`, `reason`) VALUES
(30, '1', '2015-12-02', '00:45:39', '00:56:45', '5', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sellery_structure`
--

CREATE TABLE IF NOT EXISTS `sellery_structure` (
  `id` int(11) NOT NULL,
  `designations` text NOT NULL,
  `hourlyRate` int(11) NOT NULL,
  `leavDays` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellery_structure`
--

INSERT INTO `sellery_structure` (`id`, `designations`, `hourlyRate`, `leavDays`) VALUES
(1, 'Technical', 5, 5),
(2, 'Accounts', 5, 5),
(3, 'Finance', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `companyName` text NOT NULL,
  `companyInfo` text NOT NULL,
  `latestNews` text,
  `companyEmail` varchar(200) NOT NULL,
  `departments` text NOT NULL,
  `designations` text NOT NULL,
  `adminName` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `companyName`, `companyInfo`, `latestNews`, `companyEmail`, `departments`, `designations`, `adminName`, `username`, `password`) VALUES
(1, 'Bangladesh Bekar Somiti', '                                                                                                                                                                &lt;p&gt;I am a Responsive Web Designer &amp; Dynamic developer. I have developed a wide range of knowledge using WordPress, WordPress Theme Development, Responsive website, W3C validated HTML5, CSS3.\r\n                &lt;br&gt;\r\n                I am also experienced in php &amp; mySQL. As a Web designer &amp; Web developer, I am properly skilled in adobe Photoshop also. I can slice any PSD files and convert them into a HTML template and then WordPress web site.\r\n                &lt;br&gt;\r\n                I enjoy coding for WordPress. I have tonnes of experience in twitter bootstrap. Now a days responsive design is must for a better Google ranking. So I maintain the Google validate responsiveness of any website I design. &lt;/p&gt;\r\n            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci blanditiis, consequuntur culpa doloribus est et, excepturi iste magni molestiae omnis praesentium quam quidem quo quos rerum sequi veniam vitae!&lt;/p&gt;\r\n            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dolorum eos magnam nisi provident qui quia quisquam repudiandae soluta unde. A accusamus accusantium ad beatae corporis ea expedita fugit hic id inventore iusto magnam modi nam natus nemo possimus quae quisquam recusandae reiciendis, sapiente sequi suscipit ut velit vero voluptas!&lt;/p&gt;\r\n            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dolorum eos magnam nisi provident qui quia quisquam repudiandae soluta unde. A accusamus accusantium ad beatae corporis ea expedita fugit hic id inventore iusto magnam modi nam natus nemo possimus quae quisquam recusandae reiciendis, sapiente sequi suscipit ut velit vero voluptas!&lt;/p&gt;                                                                                                                                                                ', 'Happy to working with php. I am extremly fond of php language. I enjoy coding in php applicatons. ', 'mzmlhaque61@gmail.com', 'Technical', 'Executive Director', 'Mozammel Haque', 'admin@gmail.com', '123456'),
(6, '', '', 'CodersTrust er studentra onek Valo. Tara ekhon onek besi besi study kore code korar jonno.', '', 'Management', 'ProgramCoordinator', '', '', ''),
(15, '', '', 'This is one new Dynamic latest News', '', 'Technology', 'AssistantDirector', '', '', ''),
(16, '', '', 'take a look here. do not make any modifications to the disk where data is stored. if you want to play around it - image it first.', '', 'HR', 'ProjectOfficer', '', '', ''),
(18, '', '', 'Find breaking news, world news and multimedia on Africa ', '', '', '', '', '', ''),
(19, '', '', 'The New York Times. Telling stories in photos. Read more: nytimes.com/instagram', '', 'Project', 'OfficeAssistant', '', '', ''),
(20, '', '', 'The New York Times (NYT) is an American daily newspaper, founded and continuously published in New York City since September 18, 1851, by the New York .', '', 'Accounts', 'ComputerOperator', '', '', ''),
(21, '', '', 'A description for this result is not available because of this site''s robots.txt – learn more', '', 'SecrretDivision', 'PorgramOfficer', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_profile`
--
ALTER TABLE `employee_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_time_in`
--
ALTER TABLE `employee_time_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellery_structure`
--
ALTER TABLE `sellery_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employee_profile`
--
ALTER TABLE `employee_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `employee_time_in`
--
ALTER TABLE `employee_time_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `sellery_structure`
--
ALTER TABLE `sellery_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
