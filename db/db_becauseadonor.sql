-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 04:56 AM
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
  `banner_desc` varchar(400) NOT NULL,
  `banner_img` varchar(150) NOT NULL,
  `banner_page` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`banner_id`, `banner_title`, `banner_desc`, `banner_img`, `banner_page`) VALUES
(1, 'Become a Donor', '', 'checkmark.svg', 'home'),
(2, 'Why Donate?', '', 'book.svg', 'home'),
(3, 'See What is Possible', 'See the change you can make by registering as an organ donor.', '', 'home'),
(4, 'Share Your Story', 'Share your story and inspire others to register today.<br>', '', 'home'),
(5, 'Get the Facts', 'Surveys have found that the majority of non-donors have not registered because they feel as though they arenâ€™t informed enough.<br>Letâ€™s fix that.', 'lightbulb.svg', 'learn'),
(6, 'Organ Donation Statistics', '', '', 'learn'),
(7, 'Myths vs Facts', '', 'myth.svg', 'learn'),
(8, 'Share the Message!', 'Have you or a loved one had an experience with organ donation?<br>Want us to share your story? Click the button below to find our how to share your video or written story to help raise awareness.', 'speech.svg', 'share'),
(9, 'Tell Us Your Story', 'Help inspire Canadians to register as organ donors by sharing your story. Let us know your experience with organ donation and why people should register.', 'speech.svg', 'share'),
(10, 'Discover Their Stories', 'We have gathered the stories of donors, donor families, and organ recipients from across Ontario. See for yourself the truly profound impact organ donation has on our communities.', 'feather.svg', 'stories');

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
-- Table structure for table `tbl_learnlinks`
--

CREATE TABLE `tbl_learnlinks` (
  `ll_id` smallint(5) UNSIGNED NOT NULL,
  `ll_title` varchar(150) NOT NULL,
  `ll_img` varchar(150) NOT NULL,
  `ll_link` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myths_facts`
--

CREATE TABLE `tbl_myths_facts` (
  `mf_id` int(10) UNSIGNED NOT NULL,
  `mf_myth` varchar(500) NOT NULL,
  `mf_fact` varchar(500) NOT NULL,
  `mf_keywords` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_myths_facts`
--

INSERT INTO `tbl_myths_facts` (`mf_id`, `mf_myth`, `mf_fact`, `mf_keywords`) VALUES
(2, 'If I say yes to organ donation, they will take *all* my organs. I don\'t want an empty body.', 'When you register to become an organ donor, you will be given the option to choose which organs you would like to donate. Therefore, if you are uncomfortable with donating your liver, you can opt out.', 'open casket funeral coffin death organ all harvest empty body no organs'),
(3, 'If I am a registered organ donor, doctors won\'t work as hard to save my life.', 'When you are treated in hospital, your life comes first. Your organ donor status is not considered by doctors until your death certificate has been signed.', 'die in hospital too early young soon before i am dead death sick ill unexpected unexpectedly nurse doctor on purpose'),
(4, 'What if I\'m not actually dead when they sign my death certificate?', 'Although there are a lot of horror stories surrounding this topic, it is very false. Doctors will in fact perform more tests to patients who are organ donors to make sure that they are in fact dead.', 'dead too soon die not really work hard kill me on purpose death certificate'),
(5, 'I would like to donate my organs, but I think it\'s against my religion.', 'Organ donation is actually approved by most religions. These include the Roman Catholics, Islam, and most Jewish and Protestant branches. If you\'re still unsure of whether you can donate your organs, ask a member of your faith.', 'religion faith against pope god bible angel spiritual spirituality muslim islam jewish jew catholic christian priest pastor imam kohen protestant hell heaven'),
(6, 'I am under 18 years old, and I feel like I\'m too young to make this decision right now.', 'While being under the legal age is a reasonable concern, and thinking of your death is no fun either, it is important to consider the good you could be doing someone. There some children who are on the waiting list. If you donate your organs at a young age, you could help up to 8 younger patients live full and grateful lives.', 'am I too young under aged underaged highschool graduate decide decision legal age'),
(7, 'It seems like a lot of work to become an organ donor. I don\'t feel like doing any paperwork.', 'It only takes a couple of minutes to become an organ donor, no paperwork required! Simply go to beadonor.ca and enter your information into their secure form to register or check your status as a register.', 'complicated how hard is it to sign up how when where');

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
(1, 'Apr_03_2017_233803.svg', 'One donor can save up to 8 lives through organ donation, and 75 more through tissue donation.'),
(2, 'Apr_03_2017_233842.svg', 'It only takes two minutes to register to be an organ donor. It could mean a lifetime for someone else.'),
(3, 'Apr_03_2017_234603.svg', 'Over 1500 Ontarians are in need of a life saving organ. Every three days, one person dies on the waiting list.'),
(4, 'Apr_03_2017_234524.svg', '85% of Ontarians agree with organ donation, but only 31% are actually registered donors.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stories`
--

CREATE TABLE `tbl_stories` (
  `story_id` int(10) UNSIGNED NOT NULL,
  `story_name` varchar(100) NOT NULL,
  `story_email` varchar(150) NOT NULL,
  `story_organ` varchar(150) NOT NULL,
  `story_city` varchar(100) NOT NULL,
  `story_type` varchar(30) NOT NULL,
  `story_text` varchar(60000) NOT NULL,
  `story_link` varchar(500) NOT NULL,
  `story_photo` varchar(150) NOT NULL,
  `story_status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stories`
--

INSERT INTO `tbl_stories` (`story_id`, `story_name`, `story_email`, `story_organ`, `story_city`, `story_type`, `story_text`, `story_link`, `story_photo`, `story_status`) VALUES
(27, 'Carol S.', 'carol@mail.com', 'Heart Recipient', 'Toronto,ON', 'written', 'It started with a bout of pneumonia that Carol thought would eventually go away. Unfortunately it didn\'t.<br><br>"It\'s like, \'What is happening to me? What is this?\' Especially when you consider yourself still young."<br><br>Carol\'s doctors determined that she needed a double lung transplant. It was a difficult time for her and her family as they waited for a donor. Fortunately, Carol received that life-changing call and her transplant in June of 2009. Since then she\'s been able to live on her own again. She\'s thankful for the opportunity to play with her grandchildren and to win a silver medal at the Transplant Games.<br><br>Carol greatly appreciates the gift her donor\'s family gave her. "I can honestly say - my friends, my family, my Mom, my Dad, my children couldn\'t have given me this. They did...How do you thank somebody that has given you life?"', '', 'Apr_04_2017_005222.JPG', 'posted'),
(59, 'Ryley', 'ryley@gmail.com', 'Heart Recipient', 'London, ON', 'video', '', 'https://vimeo.com/trilliumgift/meet-ryley', 'Apr_03_2017_232437.JPG', 'posted'),
(29, 'Kathleen', 'kathleen@mail.com', 'Double Lung Recipient', 'Toronto,ON', 'written', 'My name is Kathleen and I have Cystic Fibrosis.  I was diagnosed with CF at 4 months of age.  I am the oldest of 3 children, and share this disease with my younger brother, Clayton.<br><br>I was managing the disease fairly well as a child.  I went to school, played soccer and hung out with friends.  This started to change when I was around 16 years old.  I was at war with the bugs in my lungs and they were slowly beginning to win the battle.  Hospital admissions were necessary every 3-4 months to treat the infections with IV antibiotics.  Despite this, I was able to continue my school work and maintain a part-time job, all the while fighting this disease.<br><br>At 18, I was really struggling to keep afloat.  Hospital stays were every month now.  My lung function was at 30% and I was no longer able to keep up with my soccer team, as running was too difficult. <br><br>By 20 years old my lung function was hovering around 17%.  I was in end-stage lung disease and my only option left was a double lung transplant.  My first tele-health meeting to discuss lung transplant was on my 21st birthday.<br><br>In February 2016, I was admitted to St. Michael\'s hospital in Toronto and officially listed to receive donor lungs.  My parents moved to Toronto to assist me as I was now on oxygen 24 hours/day, on 2 high-dose IV antibiotics and required a wheelchair to get around.  I attended 90 minute pre-transplant exercise classes 3 times a week at Toronto General Hospital in order to be strong enough for a 10-12 hour double lung transplant operation.<br><br>I was one of the lucky ones.  My call for new lungs came almost 2 months after being listed.  On April 6, 2016, because a selfless stranger took the time to sign up as an organ and tissue donor, I received the gift of life.<br><br>My surgery was a huge success.  I was up walking the next day and discharged from hospital 3 weeks later.  That is actually a shorter hospital stay than being admitted to treat a CF lung infection (pulmonary exacerbations).<br><br>I was able to return home to Ottawa in July, 2016.  I have now returned to work part-time and am enrolled in college courses. I am living my life, all due to my organ donor.  A lung transplant saved my life.  My organ donor saved my life!  <br>I am forever grateful to my hero donor and to their family for respecting their wishes.', '', 'Apr_04_2017_005508.JPG', 'posted'),
(52, 'Andrea', 'andrea@gmail.com', 'Heart Recipient', 'Brampton, ON', 'written', 'It started with some weird symptoms. Trouble with her peripheral vision. Trouble opening small packages. A shooting pain down her left side. Andrea knew there was something going on. "When I was wheeled into the hospital, I had a heart rate of 130 at rest. And that was the day that they diagnosed me with dilated cardiomyopathy."<br><br>Andrea soon realized that only a heart transplant would bring her "real life back". Thankfully, and fortunately, she received the call.<br><br>After the transplant, she noticed the changes right away. "The first thing that I noticed was that I had a heartbeat and it was so loudâ€¦ I knew I had a strong heart in there."<br><br>Though it was a joyous time for her and her family, Andrea thinks often of her donor\'s family and their grief. "Every moment a thought goes out to them. I want to make them proud by living and taking care of what\'s been given to me."', '', 'Apr_03_2017_232208.JPG', 'posted'),
(85, 'Mohan', 'mohan@mail.com', 'Cornea Recipient', 'Waterloo, ON', 'written', 'â€œI really couldn\'t read. It was just a blur.<br />Life was not that good.â€<br /><br />When he was not able to perform at work, Mohan realized his sight problems were not going to go away. "My vision would have continued to deteriorate over time and would have led to blindness." Only at this point did a corneal transplant begin to come into view.<br /><br />Unsure if it would help him regain his sight, Mohan remembers asking his doctor about the possible outcomes. "So what happens if the surgery does not work, what do we do? And he calmly looked at me and said, \'We will do it again.\'"<br /><br />After two successful transplants, Mohan values his life even more than before and his family has a greater sense of togetherness. He also holds a deep appreciation for his donors and their families.<br /><br />"The greatest gift that anyone can give is the gift of an organ or tissue. It has enabled me to live a full life, just like any other normal human being."', '', 'Apr_03_2017_232757.JPG', 'posted'),
(76, 'Gene', '', 'Kidney', 'Gregor', 'video', '', '<iframe src="https://player.vimeo.com/video/24894938?color=019f47&title=0&byline=0&portrait=0" width="640" height="332" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/24894938">Meet Ryley</a> from <a href="https://vimeo.com/trilliumgift">Trillium Gift of Life Network</a> on <a href="https://vimeo.com">Vimeo</a>.</p>', 'Mar_31_2017_105351.jpg', 'pending'),
(86, 'Justin R.', 'jr@mail.com', 'Kidney Recipient', 'Paris, ON', 'written', 'At 10 years old the hospital determined that the strep bacterial Justin contracted had triggered an autoimmune disease, which started to attack his kidneys. He clearly remembers the day his mother told him he would have to go on dialysis. Life is not fun on dialysis. Without functioning kidneys you canâ€™t even drink water. Itâ€™s difficult when you donâ€™t have control over your life.<br /><br />In 1984, Justin received his first life saving kidney transplant. He has seen firsthand, the new life transplant brings for those in need.<br /><br />Justin says, "To give an organ to save someone\'s life, to me, is the ultimate expression of caring and unconditional love. Words can\'t describe what this means to me, to my life and the lives of my daughters."', '', 'Apr_03_2017_233134.JPG', 'posted');

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
(1, 'Lauren', 'Koza', 'superadmin', 'superadmin', 'becauseadonor@gmail.com', 3, 'Clear', 'March 31st, 2017 10:44am', 0, 0, '::1'),
(2, 'Liam', 'Stewart', 'editor', 'editor', 'becauseadonor@gmail.com', 1, 'Clear', 'April 1st, 2017 11:09pm', 0, 1490910678, '::1'),
(3, 'Jillian', 'Matthies', 'admin', 'admin', 'becauseadonor@gmail.com', 2, 'Clear', 'April 3rd, 2017 10:28pm', 0, 0, '::1');

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
-- Indexes for table `tbl_learnlinks`
--
ALTER TABLE `tbl_learnlinks`
  ADD PRIMARY KEY (`ll_id`);

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
  MODIFY `banner_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_facebook_pic`
--
ALTER TABLE `tbl_facebook_pic`
  MODIFY `fb_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_learnlinks`
--
ALTER TABLE `tbl_learnlinks`
  MODIFY `ll_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_myths_facts`
--
ALTER TABLE `tbl_myths_facts`
  MODIFY `mf_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_statistics`
--
ALTER TABLE `tbl_statistics`
  MODIFY `stat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_stories`
--
ALTER TABLE `tbl_stories`
  MODIFY `story_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
