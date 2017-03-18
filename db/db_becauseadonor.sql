-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 10:08 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_becauseadonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `banner_id` smallint(5) UNSIGNED NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_desc` text NOT NULL,
  `banner_btn` varchar(30) NOT NULL,
  `banner_img` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`banner_id`, `banner_title`, `banner_desc`, `banner_btn`, `banner_img`) VALUES
(1, 'Become a Donor', '', '', ''),
(2, 'Why Donate?', '', '', ''),
(3, 'See What is Possible', 'See the change you can make by registering as an organ donor.', '', ''),
(4, 'Share Your Story', 'Have a story that will inspire others to register? Share yours today.', '', ''),
(5, 'Get the Facts', 'Most Ontarians have not registered as an organ donor because they don\'t feel informed enough. We\'re here to change that.', '', ''),
(6, 'Organ Donation Statistics', '', '', ''),
(7, 'Myths vs Facts', '', '', ''),
(8, 'Share the Message', 'Have you or a loved one had an experience with organ donation? Want us to share your story? Click the button below to find out how.', '', ''),
(9, 'Tell Us Your Story', 'Help inspire Canadians to register as organ donors by sharing your story. Let us know your experience with organ donation and why people should register.', '', ''),
(10, 'Discover Their Stories', 'We have gathered the stories of donors, donor families, and organ recipients from across Ontario. See for yourself the truly profound impact organ donation has on our communities.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buttons`
--

CREATE TABLE `tbl_buttons` (
  `btn_id` smallint(6) NOT NULL,
  `btn_banner` smallint(6) NOT NULL,
  `btn_name` varchar(30) NOT NULL,
  `btn_link` int(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facebook_pic`
--

CREATE TABLE `tbl_facebook_pic` (
  `fb_id` smallint(5) UNSIGNED NOT NULL,
  `fb_img` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myths_facts`
--

CREATE TABLE `tbl_myths_facts` (
  `mf_id` int(10) UNSIGNED NOT NULL,
  `mf_myth` varchar(500) NOT NULL,
  `mf_fact` varchar(500) NOT NULL,
  `mf_keywords` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_myths_facts`
--

INSERT INTO `tbl_myths_facts` (`mf_id`, `mf_myth`, `mf_fact`, `mf_keywords`) VALUES
(1, 'If I donate my organs, I can\'t have an open casket funeral.', 'Organ donors can have open casket funerals. Your body will be fully clothed, and not disfigured. All signs of organ donation will not be visible, so your body will look as it did before you donated.  If you donate bones, they will be replaced with a rod, and any skin donated is taken in thin layers from your back.', ''),
(2, '\r\nMyth: If I say yes to organ donation, they will take *all* my organs. I don\'t want an empty body.', 'When you register to become an organ donor, you will be given the option to choose which organs you would like to donate. Therefore, if you are uncomfortable with donating your liver, you can opt out.', ''),
(3, 'If I am a registered organ donor, doctors won\'t work as hard to save my life.', 'When you are treated in hospital, your life comes first. Your organ donor status is not considered by doctors until your death certificate has been signed. ', ''),
(4, 'What if I\'m not actually dead when they sign my death certificate?', 'Although there are a lot of horror stories surrounding this topic, it is very false. Doctors will in fact perform more tests to patients who are organ donors to make sure that they are in fact dead.', ''),
(5, 'I would like to donate my organs, but I think it\'s against my religion.', 'Organ donation is actually approved by most religions. These include the Roman Catholics, Islam, and most Jewish and Protestant branches. If you\'re still unsure of whether you can donate your organs, ask a member of your faith.', ''),
(6, 'I am under 18 years old, and I feel like I\'m too young to make this decision right now.', 'While being under the legal age is a reasonable concern, and thinking of your death is no fun either, it is important to consider the good you could be doing someone. There some children who are on the waiting list. If you donate your organs at a young age, you could help up to 8 younger patients live full and grateful lives.', ''),
(7, 'It seems like a lot of work to become an organ donor. I don\'t feel like doing any paperwork.', 'It only takes a couple of minutes to become an organ donor, no paperwork required! Simply go to beadonor.ca and enter your information into their secure form to register or check your status as a register.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistics`
--

CREATE TABLE `tbl_statistics` (
  `stat_id` int(10) UNSIGNED NOT NULL,
  `stat_img` varchar(130) NOT NULL,
  `stat_text` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_statistics`
--

INSERT INTO `tbl_statistics` (`stat_id`, `stat_img`, `stat_text`) VALUES
(1, 'default.jpg', 'One donor can save up to 8 lives through organ donation, and 75 more through tissue donation.'),
(2, 'default.jpg', 'Over 1500 Ontarians, of all ages, are waiting for an organ donor.'),
(3, 'default.jpg', 'Every three days, one person dies waiting for an organ donation.'),
(4, 'default.jpg', '85% of Ontarians agree with organ donation, but only 31% are actually registered donors.'),
(5, 'default.jpg', 'It only takes 2 minutes to register. This could mean a life time to someone else.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stories`
--

CREATE TABLE `tbl_stories` (
  `story_id` int(10) UNSIGNED NOT NULL,
  `story_name` varchar(100) NOT NULL,
  `story_age` varchar(5) NOT NULL,
  `story_organ` varchar(150) NOT NULL,
  `story_city` varchar(100) NOT NULL,
  `story_type` varchar(30) NOT NULL,
  `story_text` text NOT NULL,
  `story_link` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stories`
--

INSERT INTO `tbl_stories` (`story_id`, `story_name`, `story_age`, `story_organ`, `story_city`, `story_type`, `story_text`, `story_link`) VALUES
(1, 'Laura Lee', '', 'Heart Recipient', 'London, ON', 'text', 'Ryley was only two months old when she became quite ill. It was in the ER that her mother, Joanna, heard the words "enlarged heart." She remembers asking the doctor, "So you\'re telling me that my baby is going to die? And he said, \'No. But there\'s a good chance she\'s going to need a heart transplant.\'"\r\n\r\nJoanna and her husband were living in a hotel near the transplant centre when they received a 2:00 a.m. call that a heart was available for Ryley. By 9:30 p.m. that night, they were able to see their daughter after her transplant surgery. "She was on a breathing tube...but she was pink. And she just looked so wonderful."\r\n\r\nRyley hasn\'t looked back since her transplant. She\'s an active, loving and brave little girl. Having faced the fear of losing her own child, Joanna is so thankful to the donor family and would encourage all Ontarians to become registered organ donors.\r\n\r\n"If you needed an organ, would you take one? If you would...why wouldn\'t you share yours to save somebody else\'s life? It makes you a hero."', ''),
(2, 'Sda', 'as', 'sa', 'sa', 'written', 'sa', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_level` tinyint(4) NOT NULL,
  `user_status` varchar(50) NOT NULL,
  `user_time` varchar(140) NOT NULL,
  `user_attempts` tinyint(4) NOT NULL,
  `user_locked_time` int(11) NOT NULL,
  `user_ip` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_username`, `user_password`, `user_email`, `user_level`, `user_status`, `user_time`, `user_attempts`, `user_locked_time`, `user_ip`) VALUES
(1, 'Lauren', 'Koza', 'lowin', 'koza', 'lowin', 3, 'Clear', 'March 18th, 2017 5:15pm', 0, 0, '::1'),
(2, 'Liam', 'Stewart', 'leem', 'stewie', 'stew', 1, 'Clear', 'March 16th, 2017 10:24pm', 1, 0, '::1'),
(3, 'Jillian', 'Matthies', 'jill', 'matty', 'jill@gmail.com', 2, 'Clear', 'March 17th, 2017 7:52pm', 0, 0, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_facebook_pic`
--
ALTER TABLE `tbl_facebook_pic`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `tbl_myths_facts`
--
ALTER TABLE `tbl_myths_facts`
  ADD PRIMARY KEY (`mf_id`);

--
-- Indexes for table `tbl_statistics`
--
ALTER TABLE `tbl_statistics`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `tbl_stories`
--
ALTER TABLE `tbl_stories`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `banner_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_facebook_pic`
--
ALTER TABLE `tbl_facebook_pic`
  MODIFY `fb_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_myths_facts`
--
ALTER TABLE `tbl_myths_facts`
  MODIFY `mf_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_statistics`
--
ALTER TABLE `tbl_statistics`
  MODIFY `stat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_stories`
--
ALTER TABLE `tbl_stories`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
