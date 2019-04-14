-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2019 at 07:36 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azamstco_rizqdoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'azam@gmail.com', 'ast_2016');

-- --------------------------------------------------------

--
-- Table structure for table `appliedjobseeker`
--

CREATE TABLE `appliedjobseeker` (
  `id` int(11) NOT NULL,
  `postjobid` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(70) NOT NULL,
  `coverletter` longtext NOT NULL,
  `cv` char(255) NOT NULL,
  `date_applied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedjobseeker`
--

INSERT INTO `appliedjobseeker` (`id`, `postjobid`, `name`, `email`, `phone`, `coverletter`, `cv`, `date_applied`) VALUES
(11, 57, 'imran murtaza', 'imranmurtaza07@gmail', '3469548890', 'rawalpindi', './user_cv_uploads/imranmurtazagmailcom.pdf', NULL),
(13, 59, 'adil', 'adilkhanengineer72@g', '3443444141', 'LZXJAD SFKLAJD', './user_cv_uploads/adilkhanengineergmailcom.pdf', NULL),
(17, 60, 'Muhammad Kumail mugh', 'kumail.mughal123@gma', '03125113887', 'Respected Sir/Madam:\r\nI’m writing in response to your recently advertised position for a Unity developer.I am very interested in this opportunity and believe that my qualifications, education and professional\r\nexperience would make me a strong candidate for the position.\r\nEnclosed is my resume that more fully details my background and work experience, and how they relate to your position.\r\nThank you in advance for your consideration.', './user_cv_uploads/kumailmughalgmailcom.pdf', NULL),
(23, 61, 'Adil Khan', 'adilkhanengineerswatii72@gmail.com', '3443444141', 'yutyuyt', './user_cv_uploads/adilkhanengineerswatiigmailcom.pdf', NULL),
(70, 79, 'Muhammadbilal', 'muhammadb311@gmail.com', '03445145209', 'I\'m Muhammadbilal from rwp I\'ll recently completed BSCS from Arid Agriculture University.I want to join your organisation as a interne.', './user_cv_uploads/muhammadbgmailcom.docx', NULL),
(71, 54, 'Javed Ashraf', 'javedashrafkhawaja1@gmail.com', '3337260515', 'I have got the experience of banking as Manager operation in Bank and Branch Manager for 25 years', './user_cv_uploads/javedashrafkhawajagmailcom.docx', NULL),
(72, 74, 'JAVED ASHRAF', 'javedashrafkhawaja1@gmail.com', '3337260515', 'I have got the experience of banking as Manager operation in Bank and Branch Manager since 1991', './user_cv_uploads/javedashrafkhawajagmailcom.docx', NULL),
(73, 83, 'Asif', 'fairyasif23@gmail.com', '03178524357', 'With reference to your job ad i m applying for teaching vaccancies in your org.i m experienced and qualified candidate.', './user_cv_uploads/fairyasifgmailcom.docx', NULL),
(74, 79, 'Umer Ahmed Butt', 'umerahmed.butt@yahoo.com', '03350057481', 'Hiring Manager\r\n\r\n\r\nDear Hiring Manager,\r\nThank you for the opportunity to apply for the “ Web Development Internship” role at your company. After reviewing your job description, it’s clear that you’re looking for a candidate that is extremely familiar with the responsibilities associated with the role, and can perform them confidently. Given these requirement, I am certain that I have the necessary skills to successfully do the job adeptly and perform above expectations.\r\n\r\nI am a hard-working professional who has been consistently praised as efficient by my peers. Over the course of my career, I have developed proven technical, teamwork, and planning skills, which I hope to leverage into the “Web Development  Internship” role at your company.\r\nAfter reviewing my resume, I hope you will agree that I am the type of competent and competitive candidate you are looking for. I look forward to elaborating on how my specific skills and abilities will benefits your organization. Please contact me at 03350057481 or via email at umerahmed.butt@yahoo.com to arrange for a convenient meeting time.\r\nThank you for your consideration, and I look forward to hearing from you soon.\r\n\r\nSincerely,\r\nUmer Ahmed Butt', './user_cv_uploads/umerahmedbuttyahoocom.pdf', NULL),
(75, 79, 'Hassaan', 'hassaan.niazi.hn@gmail.com', '03068842787', 'Dear Mr./Ms.,\r\n\r\nI’m writing to you regarding the Internee role that opened up recently. I came across the job description on Rizqdoor.Please find my resume attached.', './user_cv_uploads/hassaanniazihngmailcom.pdf', NULL),
(76, 49, 'Sajid shaheen', 'sajidshaheen777@gmail.com', '03425288300', 'Sajid shaheen cv', './user_cv_uploads/sajidshaheengmailcom.docx', NULL),
(77, 82, 'Sajid shaheen', 'sajidshaheen777@gmail.com', '03425288300', 'Sajidshaheen cv', './user_cv_uploads/sajidshaheengmailcom.docx', NULL),
(78, 79, 'Shah nawaz', 'shan.wazir@yahoo.com', '03018070491', 'Hello ,\r\nMy name Is Shah Nawaz I can work As Front based So I want to Start Working Under you People AS Internee', './user_cv_uploads/shanwaziryahoocom.pdf', NULL),
(79, 58, 'Muhammad Raza Hassan', 'majoka953@hotmail.com', '03335252338', 'Dear Sir,\r\n\r\nI am offering my services as a Sofware Engineer.\r\n\r\nRegards,\r\n\r\nMuhammad Raza Hassan Majoka', './user_cv_uploads/majokahotmailcom.docx', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` char(255) DEFAULT NULL,
  `paragraph` longtext,
  `blogtype` char(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `paragraph`, `blogtype`) VALUES
(3, '5 Resume Hacks to Get More Interviews', 'Do you know the average number of resumes sent for a single position in the United States? The number will come as a shock to most – 250. That’s the average number of resumes a corporate job opening attracts. Out of those 250 candidates, 4-6 will be selected for an interview and one person will be offered the job.\r\n\r\nThose numbers are pretty frightening for any jobseeker. So how do you get a leg up on the competition?\r\n\r\nThe answer is your resume which is the first impression you have on an employer. You could be the most qualified candidate but if your resume isn’t any good, you won’t land the interview. We put together a list of 5 resume hacks to get noticed by hiring managers and land more interviews.', 'Market-Insights'),
(5, '10 New Year’s Resolutions and How to Achieve Them', 'With 2018 just a few short days away, many of us are not only reflecting on the year that passed but looking forward to the new one ahead. When it comes to resolving to be better at something, or a better someone for that matter, we should own up to the fact that the journey to self-improvement is a process. We should view the road to success as a marathon rather than a sprint. For if we did, we’d have a much greater chance of sticking with it when the going gets tough', 'Our-News'),
(8, 'Tips for Staying Sane During Your Job Search', 'You’ve updated and posted your resume, signed up for job alerts, and have consistently applied to jobs. Yet, you still haven’t landed your #NewJob2017. Don’t dismay. Our internet sources tell us that it takes roughly one month to find a job for every $10,000 of the paycheck you would like to earn. For example, if you were looking for a job that pays $50,000 a year your job search could take 5 months.\r\n\r\nBelow are some ways to help take away some of your job search pain and put your mind at ease:\r\n\r\n1.  Take a Break\r\n\r\nYou don’t want to run the risk of job search burnout. Taking some time away from your job search to focus on things like your family, friends and health will help you appreciate all that’s good in your life in order to help lift your spirits.', 'Our-News'),
(9, 'Words of Wisdom: Inspiration for Your 2017 Job Search', 'Judging from all the headlines, Facebook posts and tweets 2016 has been a pretty rough year.  But rather than reflect on all the gory details, let’s look onward to 2017\r\nwith the promise and hope that we’ll be able to turn things around in a new year. That said, hope alone cannot change things. It can’t change who we are and it can’t change how we are. If we want to change we must take action. And in order to take action we need to be inspired.\r\n\r\nWhile inspiration comes from many places, today we turn to the Holstee Manifesto. Much\r\ngreater than a mission statement, the Manifesto was created by three founders of a t-shirt company who not only wanted to put their definition of success and happiness in print, but wanted to share their positive intentions with the world.\r\n\r\nIt’s a highly relevant piece of work that can be applied to almost anything in your life, especially to your pursuit for a new job. It begins like this:\r\n\r\nThis is your life. Do what you love, and do it often. If you don’t like something, change it. If you don’t like your job, quit.  If you don’t have enough time, stop watching TV.', 'Finding-a-Job');

-- --------------------------------------------------------

--
-- Table structure for table `blog-type`
--

CREATE TABLE `blog-type` (
  `id` int(11) NOT NULL,
  `admin-id` int(11) NOT NULL,
  `types` char(255) NOT NULL,
  `date_creation` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `countryid` int(11) NOT NULL,
  `cityname` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `countryid`, `cityname`) VALUES
(9, 7, 'Rawalpindi'),
(10, 8, 'Delhi'),
(11, 9, 'Washington'),
(12, 10, 'Dubayy (Dubai)'),
(13, 11, 'Kukes'),
(14, 12, 'Laghman'),
(15, 13, 'Queensland'),
(16, 13, 'Victoria'),
(17, 13, 'Western Australia'),
(18, 13, 'Northern Territory'),
(19, 7, 'Islamabad'),
(20, 7, 'Lahore'),
(21, 7, 'Karachi'),
(22, 14, 'Beijing'),
(23, 14, 'Hainan'),
(24, 15, 'Bejaia'),
(25, 16, 'Entre Rios'),
(26, 7, 'Abbaspur'),
(27, 11, 'Delvine'),
(28, 17, 'Chimbu'),
(29, 9, 'Arizona');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `employerid` int(11) NOT NULL,
  `companybranchname` char(250) NOT NULL,
  `compinfo` longtext NOT NULL,
  `howmanyemployees` char(250) NOT NULL,
  `countrycode` varchar(10) NOT NULL,
  `phone` char(20) NOT NULL,
  `companyfield` char(250) NOT NULL,
  `address` char(250) NOT NULL,
  `date_creation` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `employerid`, `companybranchname`, `compinfo`, `howmanyemployees`, `countrycode`, `phone`, `companyfield`, `address`, `date_creation`) VALUES
(4, 8, 'Azam Systems and Technologies Pvt Limited', 'Established in 2014, Azam Systems & Technologies (Pvt.) Limited is a leading software company providing affordable, reliable and user-friendly software solutions. Our approach is customer-centric and user experience is number one for us. We go to extraordinary lengths to satisfy, delight and nourish our customers.', '8', '92', '234523452352', 'IT', 'Suite No. 05, 3rd Floor, Omer Plaza, 34/35, Commercial Area, Chaklala Scheme-III, Rawalpindi-46200 Pakistan', NULL),
(5, 9, 'Rawalpindi', 'It company', '5', '92', '2345234523', 'IT', 'Chandni Chowk C-block Satellite Town  Rawalpindi.', NULL),
(6, 10, 'Islamabad', 'Established in 2014.Its  is a leading software company providing affordable, reliable and user-friendly software solutions. Our approach is customer-centric and user experience is number one for us. We go to extraordinary lengths to satisfy, delight and nourish our customers.', '20', '92', '25423212245', 'Software', 'Chandni Chowk C-block Satellite Town  Rawalpindi.', NULL),
(7, 11, 'Beijing', 'Established in 1999, Nesis Holding PrivateLimited is a leading software company providing affordable, reliable and user-friendly software solutions. Our approach is customer-centric and user experience is number one for us. We go to extraordinary lengths to satisfy, delight and nourish our customers.', '100', '92', '2345234525413', 'IT', 'Address: 75 Chongwenmennei, Dongcheng District, Beijing 100005', NULL),
(8, 12, 'Islamabad', 'do nothing man', '3', '92', '234523532', 'IT', '30 Mary Street BRISBANE QLD 4000', NULL),
(9, 13, 'Islamabad', 'nanananan', '3', '92', '2435245323452', 'Hardware\'s', 'Address: 75 Chongwenmennei, Dongcheng District, Beijing 100005', NULL),
(17, 14, 'adsf', 'jhdfg jadhsg jhfgajhk', '32', '213', '946812365', 'Building Materials', 'Muhamad Kamal House Jansahib Muhallalah Shahi Bazar Kanju Swat Kpk', NULL),
(18, 17, 'StackWiser', 'it&nbsp;', '323', '32', '3443444141', 'Broadcast Media', 'Muhamad Kamal House Jansahib Muhallalah Shahi Bazar Kanju Swat Kpk', NULL),
(19, 18, 'Silkbank', 'Dear candidates, Silkbank is hiring BSO\'s for Rawalpindi and Islamabad branches. The selected candidates have to deal the following unsecured products.\r\n1-Credit Cards\r\n2-Personal Loans\r\n3-Ready Line\r\nThe suitable candidates will sit in branches and will generate business through branches. Fixed salary and attractive incentive  will be  offered to suitable candidates. Candidates with banking experience will be preferred. Interested candidates may forward their CV \'s on ahsanzulfi77@gmail.com and will be shortlisted after complete screening', '10', '92', '3161502278', 'Banking', 'Silkbank', NULL),
(20, 19, 'Islamabad', '', '20', '92', '3125551183', 'Computer Software', 'Suite No. 05, 3rd Floor, Omer Plaza, 34/35, Commercial Area, Chaklala Scheme-III, Rawalpindi-46200 Pakistan.', NULL),
(21, 21, 'Blackstone', 'Blackstone is leading event management company located in Islamabad, Pakistan', '11', '92', '0515582367', 'Events Services', 'B2-0018 Alsafa Heights 2 F11 Islamabad', NULL),
(22, 23, 'Rehmanabad Rawalpindi', '', '25', '92', '03455556098', 'Telecommunications', 'Mid City Mall office SF7 Top Floor, near Rehmanabad Metro Station, Chandni Chowk Commercial Rawalpindi', NULL),
(23, 24, 'Islamabad', 'Infomatrix is an international computer project competition, born from a desire to bring the world’s best IT students together. The competition is not just about promoting professional excellence; it also serves to promote intercultural dialogue and cooperation, through the involvement of students and teachers from all around the world.', '55', '92', '8735203', 'Computer Software', 'Office 8, Al-Anayat Mall, G-11 Markaz Islamabad, Islamabad Capital Territory.', NULL),
(24, 25, 'Islamabad', 'We provide design, development, application, implementation, support and management of computer and non-computer based technologies for the express purpose of communicating product design intent and constructability. Design technology can be applied to the problems encountered in construction, operation and maintenance of a product.', '18', '92', '3217288131', 'Computer Software', 'I-10 Markaz Islamabad.', NULL),
(25, 26, 'Islamabad', 'We are a Research & Development organization with experienced professionals ready and committed to provide you with Innovatively Creative solutions. We design, manufacture and market a range of innovative products developed within the organization with a commitment to technology, design, user affability and environmental consciousness. We conceive, plan and deploy customized solutions according to the needs of our clients. We provide complete solutions of hardware design and firmware applications. Apart from core competencies in Software and Algorithms development, we have the ability to move a project from concept to product form by delivering our customized technologies.\r\n\r\nWe believe to conduct our interaction in a manner that promotes long-term partnerships based on mutual trust and respect. Our endeavor would be to assume responsibility for every task undertaken by us for high quality product delivery as per the expectations of our clients. We will foster and maintain relationships among staff, management, customers and suppliers that enable us to attain our corporate and personal goals.', '30', '92', '7080200', 'Computer Software', 'TeReSol (Private) Limited.  15- Sheikh Zayed Bin Sultan Road (GT Road), Sector-H, DHA, Phase-II Islamabad', NULL),
(26, 27, 'Rawalpindi', 'We provide Home tutors in Rawalpindi and Islamabad .', '70', '92', '3125551183', 'Education Management', 'Chandni Chowk C-block Satellite Town  Rawalpindi.', NULL),
(27, 28, 'IT Services', '', '192', '92', '0512303687', 'Information Technology and Services', 'House No 3 Opposite Umania Restaurant Main Muree Road Barakahu Islamabad', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `companyname` char(100) NOT NULL,
  `city` char(255) NOT NULL,
  `country` char(100) NOT NULL,
  `email` char(70) NOT NULL,
  `password` char(50) NOT NULL,
  `login_session` int(2) DEFAULT '0',
  `date_creation` datetime DEFAULT NULL,
  `date_updated_last` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `companyname`, `city`, `country`, `email`, `password`, `login_session`, `date_creation`, `date_updated_last`) VALUES
(8, 'Azam Systems and Technologies', 'Rawalpindi', 'Pakistan', 'adilkhanengineer72@gmail.com', 'pakistan', 0, NULL, NULL),
(9, 'leo solution', 'Konar', 'Afghanistan', 'yousaf@gmail.com', 'pakistan', 0, NULL, NULL),
(10, 'Binary Solutionz   Private Limited', 'islamabad', 'Pakistan', 'binary11@gmail.com', 'Pakistan', 0, NULL, NULL),
(11, 'Nesis Holding  Private Limited', 'Beijing', 'China', 'azamsystem2016@gmail.com', 'Pakistan', 0, NULL, NULL),
(12, 'Do nothing', 'Kukes', 'Albania', 'rizq.door@gmail.com', 'pakistan', 0, NULL, NULL),
(13, 'youlung', 'Djelfa', 'Algeria', 'armughan@gmail.com', 'pakistan', 0, NULL, NULL),
(14, 'StackWiser', 'Manu\'a', 'American Samoa', 'adilk@gmail.com', '12345678_aA', 0, NULL, NULL),
(17, 'Invix', 'Berat', 'Albania', 'adilkhanengineer2@gmail.com', 'pakistan_1@1', 0, NULL, NULL),
(18, 'Silkbank', 'Islamabad', 'Pakistan', 'ahsanzulfi77@gmail.com', 'ahsan1971', 0, NULL, NULL),
(19, 'Azam System and Technologies Private Limited', 'Rawalpindi', 'Pakistan', 'azamsystem2011@gmail.com', 'Pakistan_11', 0, NULL, NULL),
(20, 'teest', 'Berat', 'Albania', 'devileyepcp@gmail.com', 'test1234', 0, NULL, NULL),
(21, 'Blackstone', 'Islamabad', 'Pakistan', 'jamalahmedlota2001@gmail.com', 'kakarote', 0, NULL, NULL),
(22, 'Axcess International Education', 'Islamabad', 'Pakistan', 'naseer.axcess5@gmail.com', 'Cecos.123', 0, NULL, NULL),
(23, 'SBM Communication', 'Rawalpindi', 'Pakistan', 'khalila.stressfree@gmail.com', 'escano29', 0, NULL, NULL),
(24, 'Informatrix', 'Islamabad', 'Pakistan', 'infi.ceo@gmail.com', 'Pakistan_11', 0, NULL, NULL),
(25, 'Dera IT Solutions', 'Rawalpindi', 'Pakistan', 'hr_dera12@yahoo.com', 'Pakistan_11', 0, NULL, NULL),
(26, 'TeReSol', 'Islamabad', 'Pakistan', 'info@teresol.com', 'Pakistan_11', 0, NULL, NULL),
(27, 'Leo Solution Academy', 'Rawalpindi', 'Pakistan', 'leo1@gmail.com', 'Pakistan_11', 0, NULL, NULL),
(28, 'Stepnex Services Private Limited', 'Islamabad', 'Pakistan', 'hr@stepnexs.com', 'Wajid@786', 0, NULL, NULL),
(29, 'SOFTWARE WALK INC', 'Delaware', 'USA', 'SAGAR@SOFTWAREWALK.COM', 'SINDHU2234', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobcareerlevel`
--

CREATE TABLE `jobcareerlevel` (
  `id` int(11) NOT NULL,
  `careerlevel` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobcountry`
--

CREATE TABLE `jobcountry` (
  `id` int(11) NOT NULL,
  `countryname` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobcountry`
--

INSERT INTO `jobcountry` (`id`, `countryname`) VALUES
(7, 'Pakistan'),
(8, 'India'),
(9, 'USA'),
(10, 'United Arab Emirates'),
(11, 'Albania'),
(12, 'Afghanistan'),
(13, 'Australia'),
(14, 'China'),
(15, 'Algeria'),
(16, 'Argentina'),
(17, 'Papua New Guinea');

-- --------------------------------------------------------

--
-- Table structure for table `jobfield`
--

CREATE TABLE `jobfield` (
  `id` int(11) NOT NULL,
  `job-field` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobfield`
--

INSERT INTO `jobfield` (`id`, `job-field`) VALUES
(12, 'Marketing'),
(13, 'Software &amp; Web Development'),
(14, 'Architects &amp; Construction'),
(15, 'Accounts, Finance &amp; Financial Services'),
(16, 'Computer Networking'),
(17, 'Hotel/Restaurant Management'),
(18, 'Telemarketing'),
(19, 'Sales &amp; Business Development'),
(20, 'Project Management'),
(21, 'Operations'),
(22, 'Monitoring &amp; Evaluation'),
(23, 'Quality Assurance (QA)'),
(24, 'Writer'),
(25, 'Health &amp; Medicine'),
(26, 'Client Services &amp; Customer Support'),
(27, 'Hardware'),
(28, 'Administration'),
(29, 'Teachers/Education, Training &amp; Development'),
(30, 'Management Consulting');

-- --------------------------------------------------------

--
-- Table structure for table `logeduserappliedforjobmanytomany`
--

CREATE TABLE `logeduserappliedforjobmanytomany` (
  `id` int(11) NOT NULL,
  `userjobseekerid` int(11) NOT NULL,
  `postjobid` int(11) NOT NULL,
  `applieddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logeduserappliedforjobmanytomany`
--

INSERT INTO `logeduserappliedforjobmanytomany` (`id`, `userjobseekerid`, `postjobid`, `applieddate`) VALUES
(1, 3, 57, '2019-03-13 06:00:00'),
(2, 3, 48, '2019-03-06 07:00:00'),
(3, 3, 85, '2019-03-06 07:00:00'),
(4, 4, 73, '2019-03-07 07:00:00'),
(11, 3, 83, '2019-03-14 12:16:27'),
(12, 3, 83, '2019-03-14 12:16:35'),
(13, 3, 84, '2019-04-09 07:18:09'),
(14, 3, 84, '2019-04-09 07:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `post-job`
--

CREATE TABLE `post-job` (
  `id` int(11) NOT NULL,
  `employerid` int(11) NOT NULL,
  `jobtitle` char(255) NOT NULL,
  `email` char(100) NOT NULL,
  `discription` text NOT NULL,
  `skills` char(255) NOT NULL,
  `noposition` int(11) NOT NULL,
  `jobfield` char(150) NOT NULL,
  `city` char(100) NOT NULL,
  `country` char(100) NOT NULL,
  `exp` int(11) NOT NULL,
  `currencytype` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `dayofduaration` varchar(100) DEFAULT 'default',
  `gender` char(100) NOT NULL,
  `posteddate` char(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `jobcityid` int(11) NOT NULL,
  `jobfieldid` int(11) NOT NULL,
  `qualification` varbinary(200) NOT NULL,
  `date_updated_last` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post-job`
--

INSERT INTO `post-job` (`id`, `employerid`, `jobtitle`, `email`, `discription`, `skills`, `noposition`, `jobfield`, `city`, `country`, `exp`, `currencytype`, `salary`, `dayofduaration`, `gender`, `posteddate`, `status`, `jobcityid`, `jobfieldid`, `qualification`, `date_updated_last`) VALUES
(47, 8, 'Junior Product Manager Software Developer', 'adilkhanengineer72@gmail.com', 'we make safe, simple. We help first responders in public safety and public service, the federal government, and industrial organizations keep communities and our country safe by providing the most reliable radios and P25 communication solutions. We are a qualified and intensely committed team whose number one goal is to be an agile partner our customers can trust, in every situation.', 'campaigning,marketing', 1, 'Architects &amp; Construction', 'Delhi', 'India', 1, 'BRR', 90, '', 'both', 'Wednesday 2 January 2019', 1, 10, 14, 0x42616368656c6f72, NULL),
(48, 8, 'Accountant', 'adilkhanengineer72@gmail.com', 'Tradesy is a peer-to-peer marketplace for buying and selling luxury fashion, enabling savvy customers to unlock the value in their closet to access affordable luxury. Our mission is to make fashion resale as simple, safe and stylish as retail- at scale. We have millions of passionate members, a product that people love, and an office with an ocean view in sunny Santa Monica, California.Upon <strong>completion </strong> of  with technology that simply works. Our full stack teams build and ma', 'accounting', 1, 'Accounts, Finance &amp; Financial Services', 'Washington', 'USA', 2, '', 20, '', 'both', 'Wednesday 2 January 2019', 1, 11, 15, 0x42616368656c6f72, NULL),
(49, 8, 'NETWORK ADMINISTRATOR', 'adilkhanengineer72@gmail.com', 'The City of Hinesville is accepting applications for a Network Administrator. This position oversees data security and maintains production level servers, patches and updates and participates in the support and maintenance of all components of the network according to established specifications. The position also provides direct support to the Information Technology Director.', 'networking', 1, 'Computer Networking', 'Dubayy (Dubai)', 'United Arab Emirates', 2, 'DZD', 30, '0', 'both', 'Wednesday 2 January 2019', 1, 12, 16, 0x42616368656c6f72, NULL),
(52, 10, 'sales and marketing', 'rizq.door@gmail.com', '1) Out door marketing !\r\n2) Bachelors Must !\r\n3) Good communication Skills', 'Marketing', 2, 'Sales &amp; Business Development', 'Queensland', 'Australia', 1, 'BRR', 10000, '', 'both', 'Wednesday 9 January 2019', 1, 15, 19, 0x42616368656c6f72, NULL),
(53, 10, 'Deputy Director Special Project Marketing', 'rizq.door@gmail.com', 'Master is must for candidate .Must having 5 year experience of project management.', 'Marketing', 1, 'Project Management', 'Victoria', 'Australia', 5, 'PKR', 30000, '', 'both', 'Wednesday 9 January 2019', 1, 16, 20, 0x42616368656c6f72, NULL),
(54, 10, 'Operational Manager', 'rizq.door@gmail.com', 'It wil play a leading role in managing both raw materials and personnel. Oversight of inventory, purchasing and supplies is central to the job. Human resources tasks include determining needs, hiring employees, overseeing assignment of employees and planning staff development.', 'Managing', 2, 'Operations', 'Western Australia', 'Australia', 3, 'DZD', 20000, '', 'both', 'Wednesday 9 January 2019', 1, 17, 21, 0x42616368656c6f72, NULL),
(55, 10, 'Coordinator', 'rizq.door@gmail.com', 'Following Duties :-\r\n1)Office workflow procedures to ensure maximum efficiency. 2)Maintaining files and records with effective filing systems. 3)Supporting other teams with various administrative tasks.', 'Managing', 5, 'Monitoring &amp; Evaluation', 'Northern Territory', 'Australia', 1, 'BRR', 15000, '', 'female', 'Wednesday 9 January 2019', 1, 18, 22, 0x42616368656c6f72, NULL),
(56, 10, 'Call Center Officer Required', 'rizq.door@gmail.com', '1)Honest and hardworking .\r\n2) Fluent in English .\r\n3) Capable to work in night shift .', 'English', 8, 'Telemarketing', 'Islamabad', 'Pakistan', 1, 'BRR', 3000, '', 'female', 'Wednesday 9 January 2019', 1, 19, 18, 0x42616368656c6f72, NULL),
(57, 10, 'Web Developer', 'rizq.door@gmail.com', 'Bachelor\'s degree in Computer Science, Computer Engineering, MIS, or other related field preferred\r\nExperience with OOP in PHP, Doctrine, AJAX, JS, jQuery, JSON, Web Services.\r\nWorking knowledge of XML in a PHP programming environments\r\nFamiliarity in ReactJS, bootstrap, symphony framework, micro services.\r\nExperience with Symfony, Doctrine Unit Testing, Agile software development, SVN and GIT a plus.\r\nPHP certifications a plus', 'php', 5, 'Software &amp; Web Development', 'Lahore', 'Pakistan', 2, 'DZD', 25000, '', 'both', 'Wednesday 9 January 2019', 1, 20, 13, 0x42616368656c6f72, NULL),
(58, 10, 'Quality Assurance Analyst', 'rizq.door@gmail.com', 'Minimum of Bachelor\'s degree in computer science, engineering, and technology.\r\nThree to Five (3-5) years experience in the quality assurance software testing field.\r\nExperience in quality assurance process and procedure, test plans and test scripts.\r\nSome development experience.\r\nPC proficiency in Microsoft Office applications.\r\nMust be a quick learner.\r\nStrong oral and written communications skills.\r\nAbility to create and maintain professional relationships within all levels of the organization (peers, work groups, customers, supervisors).\r\nAbility to be self-motivated and work independently and as a member of a team.\r\nFlexibility to operate and self-driven to excel in a fast-paced environment.\r\nCapable of multi-tasking, highly organized, with excellent time management skills.\r\nDetail oriented with excellent follow-up practices\r\nKnowledge of Quality Center, Functional Tester, Automation, Performance Test, Security Test.\r\nStrong Project Management Skills.', 'Analysis', 3, 'Quality Assurance (QA)', 'Karachi', 'Pakistan', 3, 'BRR', 100000, '', 'both', 'Wednesday 9 January 2019', 1, 21, 23, 0x42616368656c6f72, NULL),
(59, 10, 'Android Developer', 'rizq.door@gmail.com', 'Understanding of new technologies and the mobile hardware industry\r\nStrong attention to detail and understanding of a startup environment\r\nExperience working with large organizations\r\nProficient understanding of code versioning tools, such as Git\r\nUnderstanding of Google’s Android design principles and interface guidelines', 'Andriod', 3, 'Software &amp; Web Development', 'Islamabad', 'Pakistan', 1, 'DZD', 10000, '', 'both', 'Wednesday 9 January 2019', 1, 19, 13, 0x42616368656c6f72, NULL),
(60, 11, 'Unity developer', 'azamsystem2016@gmail.com', 'BA/BS in Digital Media, Game Art & Design, Software Development, Computer Science, or related field. May accept additional experience in lieu of a degree.\r\nExperience is desired the following areas: game programming and scripting (AI, weapons, items, objects, particles, vehicles, scenario).\r\nSkilled with Photoshop, Illustrator, InDesign and other standard graphics applications. Web and multimedia development\r\nExperience using Dreamweaver, HTML, CSS, Flash, and Captivate is a major plus.\r\nFlexibility and ability to adapt to quickly changing circumstances and work priorities in a timely manner.\r\nStrong analytical and problem-solving skills.\r\nUnity game engine experience is highly desired.\r\nFamiliarity with Visual Studio experience is desired.\r\nExperience with immersive virtual reality such as Oculus or GearVR preferred.\r\nPost-production, including non-linear, professional editing with Adobe Premier and After Effects, motion graphics creation, color correction, audio mixing, and video compression preferred.\r\nExperience implementing software and web sites that are compliant with Section 508 Accessibility requirements preferred.\r\nSoftware development including but not limited to, Java, JavaScript, ASP.NET C#, Flex/ActionScript 3, PHP, SQL, neo4j, MongoDB preferred.', 'Unity', 5, 'Software &amp; Web Development', 'Beijing', 'China', 3, 'BRR', 82000, '', 'both', 'Wednesday 9 January 2019', 1, 22, 13, 0x42616368656c6f72, NULL),
(61, 11, 'Content Writer Required', 'azamsystem2016@gmail.com', 'Having Good Thinking and Writing Skills!', 'Writing', 1, 'Writer', 'Hainan', 'China', 1, 'PKR', 2000, '', 'both', 'Wednesday 9 January 2019', 1, 23, 24, 0x42616368656c6f72, NULL),
(73, 18, 'BSO', 'ahsanzulfi77@gmail.com', '...Dear candidates, Silkbank is hiring BSO\'s for Rawalpindi and Islamabad branches. The selected candidates have to deal the following unsecured products.\r\n1-Credit Cards\r\n2-Personal Loans\r\n3-Ready Line\r\nThe suitable candidates will sit in branches and will generate business through branches. Fixed salary and attractive incentive  will be  offered to suitable candidates. Candidates with banking experience will be preferred. Interested candidates may forward their CV \'s on ahsanzulfi77@gmail.com and will be shortlisted after complete screening', 'S', 10, 'Sales &amp; Business Development', 'Islamabad', 'Pakistan', 1, 'PKR', 16000, '7', '', 'Saturday 9 February 2019', 1, 19, 19, 0x42616368656c6f72, NULL),
(74, 19, 'Assistant  Manager', 'azamsystem2011@gmail.com', 'We are seeking a highly-motivated candidate to support our vision. In this role, the Assistant Manager motivates, instills accountability and achieves results to drive success in the position. This role provides overall leadership, supervision, and direction on strategic initiatives and operating standards to positively impact business results.', 'Management', 2, 'Operations', 'Rawalpindi', 'Pakistan', 2, 'PKR', 35000, '', 'both', 'Monday 11 February 2019', 1, 9, 21, 0x42616368656c6f72, NULL),
(76, 21, 'Female Marketer', 'jamalahmedlota2001@gmail.com', 'Female need for marketing work totally indoor office work fixed salary', 'English', 1, 'Marketing', 'Islamabad', 'Pakistan', 1, 'PKR', 15000, '15', 'female', 'Tuesday 12 February 2019', 1, 19, 12, 0x496e7465726d656469617465, NULL),
(77, 21, 'Marketing Team', 'jamalahmedlota2001@gmail.com', 'Marketing team is required for the different event promotion in outside market', 'English', 4, 'Marketing', 'Islamabad', 'Pakistan', 50000, 'PKR', 25000, '10', 'both', 'Wednesday 13 February 2019', 1, 19, 12, 0x42616368656c6f72, NULL),
(78, 23, 'Customer Service Representatives', 'khalila.stressfree@gmail.com', '...', 'CSR', 12, 'Telemarketing', 'Rawalpindi', 'Pakistan', 1, 'PKR', 35000, '6', '', 'Wednesday 13 February 2019', 1, 9, 18, 0x496e7465726d656469617465, NULL),
(79, 19, 'Web Developer Internee', 'azamsystem2011@gmail.com', 'Looking for an passionate fresh BS IT. graduate with or without experience for internship. Apply only if you\'re looking to build your career in right direction and planning long term success, we\'re offering almost all of web product = domain, hosting, ssl ... & services = web application design / development, graphic design, seo .... & SAAS Tools to our clients; that will return same benefits to you as of learning opportunities. Also you will be able to increase your communication skill due to provide technical & sale support to our client through email tickets / chat or phone.\r\n\r\nInternee will work under team leader so they will learn from the team leader in every direction of web development.', 'Html,Php,JavaScript,Css', 5, 'Software &amp; Web Development', 'Rawalpindi', 'Pakistan', 0, 'PKR', 18500, '', 'both', 'Thursday 14 February 2019', 1, 9, 13, 0x42616368656c6f72, NULL),
(80, 24, 'Business Analyst', 'aryan.armughan@yahoo.com', 'Our company is looking for a Business Analyst. The prospective candidate should be well versed in the techniques and methodologies for conducting business analysis, requirements gathering and performing system analysis and design for new and existing applications, processes and systems. The ideal candidate should possess good written and verbal communication skills. Should have worked in the area of Business Analysis for MIS applications.. Should have written Requirement specification and Functional Specificaitons. Should pocess good knowledge of Use Case Analysis, Data Flow Diagrams and different SDLC methodolgoies such a Agile, Scrum , PMI etc.', 'Marketing,Management', 2, 'Marketing', 'Islamabad', 'Pakistan', 2, 'PKR', 0, '', 'both', 'Thursday 14 February 2019', 1, 19, 12, 0x4d6173746572, NULL),
(81, 25, 'Software Engineer', 'Amir@deraitsolutions.com', '1)In depth knowledge of .NET Platform\r\n2)Practical experience on C# and ASP.NET\r\n3)Database Programming with MS SQL Server\r\n4)Strong Object Oriented Analytical skills\r\n5)Good knowledge on HTML, XHTML, AJAX, JavaScript and JQuery\r\n6)Assist and coordinate with project managers to perform project analysis, determining functional and technical business requirements, application development.\r\n7)Must have experience of working in crystal reports and other reporting softwares', 'Csharp,Database,HTML,XHTML,AJAX', 2, 'Software &amp; Web Development', 'Islamabad', 'Pakistan', 5, 'PKR', 0, '', 'both', 'Thursday 14 February 2019', 1, 19, 13, 0x42616368656c6f72, NULL),
(82, 26, 'Accounts Assistant', 'info@teresol.com', 'Experience: 2-3 Years\r\n\r\n(Experience of Audit Firm is must)\r\n\r\nACCA Affiliates / CA Inter\r\n\r\nSound Knowledge of MS Office and Quick Books is must.\r\n\r\nTASKS:-\r\n\r\nPreparing Invoices as per operations\r\nReporting Biweekly of Receivables\r\nContacting Clients for Payments and CPR\r\nRecording Invoices, Payments and discounts in Quick Books\r\nDrafting GST / PST Returns\r\nAssisting Accounts Team', 'Managing', 2, 'Accounts, Finance &amp; Financial Services', 'Islamabad', 'Pakistan', 2, 'PKR', 30000, '', 'both', 'Thursday 14 February 2019', 1, 19, 15, 0x42616368656c6f72, NULL),
(83, 27, 'Urgent Required Male and Female Teachers', 'leo1@gmail.com', 'Teacher must be bachelor .\r\nTeacher must have 2 to 3 year of teaching Experience .\r\nTeacher must be residential of Rawalpindi and Islamabad .', 'Teaching', 20, 'Teachers/Education, Training &amp; Development', 'Rawalpindi', 'Pakistan', 2, 'PKR', 25000, '', 'both', 'Friday 15 February 2019', 1, 9, 29, 0x42616368656c6f72, NULL),
(84, 23, 'Customer Service Representatives', 'khalila.stressfree@gmail.com', '...Good English Communication, Good listening, Competent, Good team player', 'CSR', 10, 'Telemarketing', 'Rawalpindi', 'Pakistan', 1, 'PKR', 1, '1', 'male', 'Friday 15 February 2019', 1, 9, 18, 0x496e7465726d656469617465, NULL),
(85, 29, 'Big data Developer', 'SAGAR@SOFTWAREWALK.COM', 'Job Description:-\r\n\r\n• 5+ years of experience owning and building data pipelines.\r\n• Extensive knowledge of data engineering tools, technologies and approaches\r\n• Ability to absorb business problems and understand how to service required data needs\r\n• Design and operation of robust distributed systems\r\n• Proven experience building data platforms from scratch for data consumption across a wide variety of use cases (e.g data science, ML, scalability etc)\r\n• Demonstrated ability to build complex, scalable systems with high quality Experience with specific AWS technologies (such as S3, Redshift, EMR, and Kinesis)\r\n• Experience with multiple data technologies and concepts such as Airflow, Kafka, Hadoop, Hive, Spark, MapReduce, SQL, NoSQL, and Columnar databases. a plus\r\n• Experience in one or more of Java, Scala, python and bash.\r\n\r\n\r\nExpected Outcomes:\r\n\r\n• Design and implement data infrastructure and processing workflows required to build a data lake in AWS to support data science, machine learning, BI and reporting also in AWS Build robust, efficient and reliable data pipelines consisting of diverse data sources\r\n• Design and develop real time streaming and batch processing pipeline solutions\r\n• Own the data expertise and data quality for the pipelines\r\n• Drive the collection of new data and refinement of existing data sources\r\n• Identify shared data needs across Advanced Auto Parts, understand their specific requirements, and build efficient and scalable pipelines to meet various needs\r\n• Build data stores for feature variables required for machine learning', 'HADOOP,COREJAVA,AWS', 10, 'Management Consulting', 'Arizona', 'USA', 5, 'USD', 70, '12', 'both', 'Friday 22 February 2019', 1, 29, 30, 0x4d6173746572, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` char(250) DEFAULT NULL,
  `city` char(250) DEFAULT NULL,
  `jobtitle` char(250) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`, `city`, `jobtitle`, `date_creation`) VALUES
(1, 'aryan.armughan@yahoo.com', 'Queensland', 'sales and marketing', NULL),
(2, 'hasanaleem4545@gmail.com', 'Rawalpindi', 'Assistant  Manager', NULL),
(3, 'jaaanjadoon@gmail.com.com', 'Islamabad', 'Accounts Assistant', NULL),
(4, 'shan.wazir@yahoo.com', 'Rawalpindi', 'Web Developer Internee', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userjobseeker`
--

CREATE TABLE `userjobseeker` (
  `id` int(11) NOT NULL,
  `profilepic` varchar(250) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dateofbirth` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `landlinenumber` varchar(40) NOT NULL,
  `countrycode` varchar(20) NOT NULL,
  `mobilenumber` varchar(40) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `industory` varchar(100) NOT NULL,
  `currencytype` varchar(20) NOT NULL,
  `currentsalery` varchar(100) NOT NULL,
  `desiredsalary` varchar(100) NOT NULL,
  `resume` varchar(250) NOT NULL,
  `password` varchar(30) NOT NULL,
  `login_session` int(2) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_updated_last` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userjobseeker`
--

INSERT INTO `userjobseeker` (`id`, `profilepic`, `email`, `name`, `dateofbirth`, `gender`, `country`, `city`, `nationality`, `landlinenumber`, `countrycode`, `mobilenumber`, `experience`, `industory`, `currencytype`, `currentsalery`, `desiredsalary`, `resume`, `password`, `login_session`, `date_creation`, `date_updated_last`) VALUES
(1, NULL, 'adil@gmail.com', 'Adil Khan', '2019-02-06', 'transgender', 'Anguilla', 'Anguilla', 'Pakistan', '23141', '1246', '3443444141', '15', 'Chemicals', 'CLP', '12', '12', 'infomalenydanceacademycom.pdf', '12121212', 0, '2019-03-12 00:00:00', ''),
(2, NULL, 'info@asdfg.com', 'Adil Khan', '2019-02-06', 'transgender', 'Azerbaijan', 'Cabrayil Rayonu', 'Pakistan', '3444141', '376', '3443444141', '15', 'Broadcast Media', 'GBP', '12', '12', 'infoasdfgcom.pdf', '12121212', 0, '2019-03-13 00:00:00', ''),
(3, 'adilkhanengineergmailcom.jpg', 'adilkhanengineer72@gmail.com', 'Adil Khan', '2019-02-14', 'male', 'Pakistan', 'Islamabad', 'Pakistan', '3444141', '92', '3443444141', '12', 'Architecture & Planning', 'PKR', '22', '22', 'adilkhanengineergmailcom.docx', '13131313', 0, '2019-03-12 00:00:00', ''),
(4, NULL, 'ceo@azam-st.com', 'contact', '2019-02-02', 'male', 'Algeria', 'Ain Defla', 'Pakistan', '8552883', '244', '29', '5', 'Alternative Medicine', 'GBP', '5', '7', 'ceoazamstcom.pdf', '12121212', NULL, '2019-03-12 00:00:00', ''),
(5, NULL, 'capritech@hotmail.com', 'qase', '2019-02-28', 'male', 'Albania', 'Kurbin', 'bangladesh', '3333', '501', '3018552886', '1', 'Civil Engineering', 'CYP', '222', '333', 'capritechhotmailcom.pdf', '12345678', NULL, '2019-03-12 00:00:00', ''),
(6, NULL, 'adf@gmail.com', 'adilkhan', '2019-01-07', 'male', 'Albania', 'Bulqize', 'Algeria', '4', '244', '8', '16', 'Apparel & Fashion', 'DZD', '-4', '-5', 'adfgmailcom.doc', '12121212', NULL, '2019-03-12 00:00:00', ''),
(7, NULL, 'majoka953@hotmail.com', 'Muhammad Raza Hassan Majoka', '1982-10-20', 'male', 'Pakistan', 'Islamabad', 'Pakistan', '0614503896', '92', '03335252338', '5', 'Information Technology and Services', 'PKR', '60000', '80000', 'majokahotmailcom.docx', 'Lmkr@ffc12', 1, '2019-03-12 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliedjobseeker`
--
ALTER TABLE `appliedjobseeker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post-job-id` (`postjobid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog-type`
--
ALTER TABLE `blog-type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types` (`types`),
  ADD KEY `admin-id` (`admin-id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_ibfk_1` (`countryid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employerid` (`employerid`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcareerlevel`
--
ALTER TABLE `jobcareerlevel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcountry`
--
ALTER TABLE `jobcountry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobfield`
--
ALTER TABLE `jobfield`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logeduserappliedforjobmanytomany`
--
ALTER TABLE `logeduserappliedforjobmanytomany`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postjobid` (`postjobid`),
  ADD KEY `userjobseekerid` (`userjobseekerid`);

--
-- Indexes for table `post-job`
--
ALTER TABLE `post-job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer-id` (`employerid`),
  ADD KEY `jobcityid` (`jobcityid`),
  ADD KEY `jobfieldid` (`jobfieldid`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userjobseeker`
--
ALTER TABLE `userjobseeker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appliedjobseeker`
--
ALTER TABLE `appliedjobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog-type`
--
ALTER TABLE `blog-type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jobcountry`
--
ALTER TABLE `jobcountry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobfield`
--
ALTER TABLE `jobfield`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `logeduserappliedforjobmanytomany`
--
ALTER TABLE `logeduserappliedforjobmanytomany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post-job`
--
ALTER TABLE `post-job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userjobseeker`
--
ALTER TABLE `userjobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appliedjobseeker`
--
ALTER TABLE `appliedjobseeker`
  ADD CONSTRAINT `appliedjobseeker_ibfk_1` FOREIGN KEY (`postjobid`) REFERENCES `post-job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blog-type`
--
ALTER TABLE `blog-type`
  ADD CONSTRAINT `blog-type_ibfk_1` FOREIGN KEY (`admin-id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `jobcountry` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`employerid`) REFERENCES `employer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logeduserappliedforjobmanytomany`
--
ALTER TABLE `logeduserappliedforjobmanytomany`
  ADD CONSTRAINT `logeduserappliedforjobmanytomany_ibfk_1` FOREIGN KEY (`postjobid`) REFERENCES `post-job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `logeduserappliedforjobmanytomany_ibfk_2` FOREIGN KEY (`userjobseekerid`) REFERENCES `userjobseeker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post-job`
--
ALTER TABLE `post-job`
  ADD CONSTRAINT `post-job_ibfk_1` FOREIGN KEY (`employerid`) REFERENCES `employer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `post-job_ibfk_3` FOREIGN KEY (`jobcityid`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `post-job_ibfk_4` FOREIGN KEY (`jobfieldid`) REFERENCES `jobfield` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
