-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2015 at 07:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `pid` int(10) NOT NULL,
  `ans` text NOT NULL,
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`pid`, `ans`, `uid`, `aid`) VALUES
(1, 'You have to choose the ''Circle'' your acquaintance belongs to at the time of connection. These ''Circles'' enable you to keep your stuff audience-specific easily.\r\n\r\nYou can start a ''Hangout'' online. Boy, isn''t that cool?\r\n\r\nWant to convey something to a lot of people personally? Group texting was never this easy. With ''Huddle'', you can add multiple people or even circles to your conversation.\r\n\r\n''Sparks'', designed to share anything across the internet to your targeted circles, makes it easier to update yourself on those topics by clicking on terms related to it.\r\n\r\nPersonally, I think Google+ has a unique look and feel that combines creativity and professionalism perfectly.\r\n\r\nGoogle+ is an offspring of Google. And so, like every other Google service that you use (Gmail, Gtalk, YouTube, Android, Drive, etc.), Google+ is in sync with all of them. Makes life so easy, doesn''t it?', 1, 1),
(3, 'It''s not like MTV that''s for SURE. The food is fine just less of it. Ppl actually go out to eat during the summer, the campus is right in the center of Fremont. I''d compare it to a smaller YouTube not quite SFO.', 2, 2),
(2, 'Yes, sort of.\r\n\r\nThere is (or at least was) a vending machine that sells candy and various other snacks in Building 43 in Mountain View.\r\n\r\nI don''t remember the details about it, but seem to recall that it was placed there years ago by some of Google''s engineers as a joke (the pricing for the items was based on something untraditional -- the number of calories per item?)  Somehow it ended up remaining there, and someone continued to stock it.\r\n\r\nAside from that, no -- all snacks, beverages, and meals are free.', 1, 3),
(2, 'No, all food at Google is free, including the recently opened family style restaurant and the sushi cafe.', 2, 4),
(5, 'The food is decent.\r\nThey have many choices and decent prices.Always vegetarian options.\r\nThey had a special as of late 5 cents for whole fruit!\r\nYou can look up menus on line up to 1week in advance.', 1, 5),
(5, 'Food is ok to good, you have lots of variety in the main campus and then you have commons which has multiple restaurants representing many kinds of cuisines at fair prices. Most cafes have a salad bar which is well stocked. Outside vendors are also there in most cafes , they rotate on different days of the week. Some vendors are more permanent. At any time (in main campus)  you have a choice of more than 1 cafeteria so one can always lookup the menu before heading out. My team also has free snacks (chips/trail mixes/yoghurt etc. ) which is not a perk in all teams.', 2, 6),
(4, 'Having worked in Human Resources at Microsoft, I can tell you precisely why. I was in a meeting of the HR execs in which this matter was argued. Lisa Brummel listened to all sides, weighed in with her own thoughts, and decided against free food. The primary concern was, as one other here has surmised, that Microsoft is working hard to develop a healthy, sustainable work/life balance and that free cafeteria food sends a different message -- that the company is encouraging you to work longer hours because you can eat all day and night for free without leaving the campus. So the funds that could have been used for free food were put toward other employee benefits.', 2, 7),
(4, 'I''ve worked at both Microsoft and Google. They both have great food inside the campus to optimize the use of employee time.\r\n\r\nMicrosoft culturally sees food through the lens of Star Wars: a capitalist empire with many free-market options that you vote for with your wallet. They pay you enough to think with your money.\r\n\r\nGoogle culturally sees food through the lens of Star Trek: a socialist empire in search of truth, where the basics of life are made free for you to focus on the complicated. This also helps them in the competitive job market of Silicon Valley.', 1, 8),
(6, 'Interns:\r\n- I don''t think you can change offices during your internship, it is usually pretty short (3 to 6 months), so you barely have time to work on a single project.\r\n- You can apply to be an intern for any of the Google Offices, so even if you live in the country X, you can try to be an intern for country Y.\r\n\r\nFull time:\r\n- You can ask to transfer, and then transfer back, but that''s not usually good for you career (changing projects twice in a short period of time).\r\n- Sometimes you may be asked to work temporarily (6 months) in another office, but that usually happens only with senior engineers from distributed offices.\r\n- Depending on your Project/Office/Job, you may travel (for short periods of time) a lot to different places, you may travel a lot to the same places, but maybe you will rarely travel.\r\n', 2, 9),
(7, 'When I was a product manager at Google, I generally traveled about 1-3 times per quarter.  This is pretty typical for PMs, and engineers tend to travel less.  But this can vary a lot depending on your exact role and what teams you work with.  \r\n\r\nYou''d likely travel more than this if (a) you have more of a sales or client-facing role, or (b) you work very closely with a team that''s not too far away.  For example, if you''re in Mountain View, and you work closely with a team in LA, you might visit them once every few weeks.  But, if you work with a team in Tokyo, it''s probably more like once a quarter or less.  I definitely know some people that travel every few weeks though.\r\n\r\nThe inverse is also true -- if everyone you work with is in the same location, you might spend almost no time traveling, outside of the occasional conference. \r\n', 1, 10),
(8, 'kbdzjvndkjhal,scfdhhjmanb scdfhgjab sbdgcasjmn', 2, 11),
(9, 'kjagfkabksfghabsjudjbacshukdnchajskhbdhagsbf.', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE IF NOT EXISTS `comp` (
  `cid` int(10) NOT NULL,
  `chk` int(2) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`cid`, `chk`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `name` varchar(50) NOT NULL,
  `cid` int(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `cid`) VALUES
('google', 1),
('microsoft', 2),
('facebook', 3),
('flipkart', 4);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `cid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `ques` text NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`cid`,`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`cid`, `pid`, `ques`, `uid`) VALUES
(1, 1, 'What is the best thing about Google company?', 1),
(1, 2, 'Is there food at Google that isn''t free?', 2),
(1, 3, 'What is the food at Google''s Seattle office like?', 1),
(2, 4, 'Why does Microsoft not have free food like Google and Facebook?', 1),
(2, 5, 'What is the food like at Microsoft''s HQ?', 2),
(3, 8, 'ugubljnlkbjzvnzjxbkjcnam sgjhcxkjnm abnvgjxhkbxnajhkjzxcnb asjhh,cxbasgjDHhxabs nm,nxc askhmnbcas?', 2),
(4, 9, 'lshvlsndhvjsndjkfjcksdfjncjsdizkcsdihnlshvlsndhvjsndjkfjcksdfjncjsdizkcsdihn?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `uid` int(10) NOT NULL,
  `chk` int(2) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`uid`, `chk`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `luxury`
--

CREATE TABLE IF NOT EXISTS `luxury` (
  `cid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `ques` text NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`cid`,`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `luxury`
--

INSERT INTO `luxury` (`cid`, `pid`, `ques`, `uid`) VALUES
(1, 10, 'aldiakshfnb vksajfh,csnmd zxckj,mvnw eskdjm,?', 1),
(1, 11, 'ksdj,v weasjzhkjc,nas kdj,jqnwaslfcedsxvc ?', 2),
(2, 12, 'jkas,mf v smhxcfjnlasdkcewsdZFXC?', 1),
(3, 13, 'aikshjfbeiwudkjhfbyeuiahsjvfuika?', 2);

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE IF NOT EXISTS `travel` (
  `cid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `ques` text NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`cid`,`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`cid`, `pid`, `ques`, `uid`) VALUES
(1, 6, 'Can Google employees and interns actually travel to different Google headquarters all over the world and work there for several months?', 1),
(1, 7, 'How often do Google employees travel?', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pnum` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `pass`, `pnum`, `name`, `email`) VALUES
(1, 'neo', 'neo', '9650833414', 'Prashant Gupta', 'prashant.gupta1194@gmail.com'),
(2, 'mladia163', 'ladia', '9532213185', 'Mayank Ladai', 'mladai163@gmail.com'),
(3, 'prashant', 'password', '9650833414', 'prashant', 'prashnt.footballer@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
