-- phpMyAdmin SQL Dump
-- version 4.0.10.19
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 11:59 AM
-- Server version: 5.6.36-log
-- PHP Version: 5.6.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `m6project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `procSaveJob`(IN `id` INT(11), IN `Title` VARCHAR(50), IN `Salary` VARCHAR(30), IN `JobDescription` VARCHAR(1000), IN `Location` VARCHAR(100), IN `Qualification` VARCHAR(500), IN `Employer` VARCHAR(100), IN `website` VARCHAR(200))
BEGIN
    insert into jobs(id,Title,Salary,Job_Description,Location,Qualifications,Employer,website) values (id,Title,Salary,JobDescription,Location,Qualification,Employer,website);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procSaveUser`(id int(5),firstname char(50),lastname char(50),upemail char(50),upassword char(20), job char(30),companyname char(30),city char(30),country char(30))
BEGIN
    if(id=0) then
      insert into tb_user(id,firstname,lastname,email,upassword,job,companyname,city,country) values(id,firstname,lastname,upemail,upassword,job,companyname,city,country);
    Else
	   update tb_user set firstname=firstname,lastname=lastname,job=job,companyname=companyname,city=city,country=country where email = upemail;
    end if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procUpdateInsert`(IN `id` INT(5), IN `firstname` CHAR(50), IN `lastname` CHAR(50), IN `upemail` CHAR(50), IN `upassword` CHAR(20), IN `job` CHAR(30), IN `companyname` CHAR(30), IN `city` CHAR(30), IN `country` CHAR(30))
BEGIN
   
	   update tb_user set upassword=upassword where email = upemail;
   
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `chat_info`
--

CREATE TABLE IF NOT EXISTS `chat_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `chat_info`
--

INSERT INTO `chat_info` (`id`, `name`, `msg`, `date`) VALUES
(1, 'divyanshu', 'Hello divyanshu !', '2016-08-25 13:45:54'),
(2, 'siddharth', 'hey ! siddharth !', '2016-08-25 13:45:54'),
(27, 'rani', 'Hi all', '2018-03-16 19:32:02'),
(28, 'heaven', 'hi', '2018-03-17 04:54:50'),
(29, 'nannose', 'Hi deAR', '2018-03-17 05:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Salary` varchar(30) DEFAULT NULL,
  `Job_Description` mediumtext,
  `Location` varchar(100) DEFAULT NULL,
  `Qualifications` varchar(500) DEFAULT NULL,
  `Employer` varchar(100) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Title`, `Salary`, `Job_Description`, `Location`, `Qualifications`, `Employer`, `website`) VALUES
(50, 'System engineer ', '100000', 'kdsnfjksfnkjd', 'singapore', 'BCA', 'Wipro', 'www.wipro.com'),
(51, 'Software Enginerr', '1000000', 'lkdsmflkdsmflk', 'USA', 'MCA', 'TCS', 'www.TCS.com'),
(57, 'Developer', '200000', 'System analyst', 'Singapore', 'MCA', 'ABC pvt ltd', 'www.abc.com'),
(58, 'System engneer', '10000000', 'sdvhjdvshdvsghdvshj', 'singapore', 'BCA', 'wipro', 'www.wipro.com'),
(59, 'System engneer', '10000000', 'sdvhjdvshdvsghdvshj', 'singapore', 'BCA', 'wipro', 'www.wipro.com'),
(60, 'System engneer', '10000000', 'sdvhjdvshdvsghdvshj', 'singapore', 'BCA', 'wipro', 'www.wipro.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(5) NOT NULL,
  `firstname` varchar(30) NOT NULL COMMENT 'admin firstname',
  `lastname` varchar(30) NOT NULL COMMENT 'adminlastname',
  `email` varchar(30) NOT NULL COMMENT 'admin email',
  `password` varchar(30) NOT NULL COMMENT 'admin password',
  PRIMARY KEY (`email`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Smitha', 'Devaraj', 'smitha@gmail.com', 'smitha123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` char(45) NOT NULL,
  `lastname` char(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `upassword` char(255) NOT NULL,
  `job` char(45) NOT NULL,
  `companyname` char(45) NOT NULL,
  `city` char(45) NOT NULL,
  `country` char(45) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `upassword_UNIQUE` (`upassword`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `firstname`, `lastname`, `email`, `upassword`, `job`, `companyname`, `city`, `country`) VALUES
(19, 'Heaven', 'Senthil', 'devsmisen@gmail.com', 'heaven123', 'developer', 'asian', 'Delhi', 'india'),
(18, 'Smitha', 'Devaraj', 'smitha12lithan@gmail.com', 's', 'developer', 'Wipro', 'Singapore', 'Singapore');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `thread_id` int(11) NOT NULL COMMENT 'Primary key',
  `thread_topic` varchar(255) NOT NULL COMMENT 'Title of the thread',
  PRIMARY KEY (`thread_id`),
  KEY `topic` (`thread_topic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `threadattach`
--

CREATE TABLE IF NOT EXISTS `threadattach` (
  `threadattach_id` int(11) NOT NULL,
  `attachment` blob NOT NULL,
  `fk_threadmessage_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`threadattach_id`),
  KEY `thread_Messsge_id_idx` (`fk_threadmessage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `threadmessage`
--

CREATE TABLE IF NOT EXISTS `threadmessage` (
  `threadmessage_id` int(11) NOT NULL,
  `thread_content` text NOT NULL,
  `fk_thread_id` int(11) NOT NULL,
  PRIMARY KEY (`threadmessage_id`),
  KEY `thread_id_idx` (`fk_thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `threadreply`
--

CREATE TABLE IF NOT EXISTS `threadreply` (
  `thread_reply-id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Thread reply Id',
  `thread_id` int(10) NOT NULL,
  `thread_reply_userid` int(10) NOT NULL,
  PRIMARY KEY (`thread_reply-id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`, `ip`) VALUES
(1, 'shiam', 'a@aasdf.com', '143143', '2013-11-18 16:00:00', '13:18:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
