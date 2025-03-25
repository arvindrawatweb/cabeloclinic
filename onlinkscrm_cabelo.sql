-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2022 at 03:09 AM
-- Server version: 10.4.24-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinkscrm_cabelo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `content` mediumtext DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `content`, `image`) VALUES
(1, '<p>Cabelo In Today World Looks Matter You Most We Founded Cabelo In Simple Ideology Of Redefining Your Looks The Way You Want That&rsquo;s Why Cableo Is Known To Truly Re Define Eulogy Of Now Get The World Class Hair Care And Skin Care Treatments From The Land Of Turkey In India With Cabelo Skin And Hair Transplant Clinic. Don&rsquo;t Let Hair Fall And Skin Related Aesthetic Issues Took Your Confidence Anymore Cabelo Known For Giving Guaranteed Result At The Same Time Looking Into Complete Safety &amp; Well Being Of Individual Cabelo With It&rsquo;s 4D Sterilization Techniques Ensures 0% Tolerance To Infection Cabelo Has Customized Organized Best Of Hair Care And Skin Care Technology Gies From Land Of Turkey And Over The Globe Thus Offering You Best Of Diagnosis And Most Advance Medical Solution For Your Aesthetic Needs 7th Generation Advance Hair Transplant Guaranteed Hair Fall Solution Laser Hair Reduction Glutathione Skin Lightening Regimen Bio-filier Etc.</p>\r\n', 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `status` varchar(500) NOT NULL DEFAULT 'enable',
  `user_type` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `a_email` varchar(255) DEFAULT NULL,
  `a_name` varchar(255) DEFAULT NULL,
  `a_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `status`, `user_type`, `address`, `mobile`, `gender`, `designation`, `a_email`, `a_name`, `a_password`) VALUES
(1, 'enable', '1', 'delhi', '7701931014', 'Male', 'Employee', 'admin@gmail.com', 'Aakash', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `title`, `content`) VALUES
(10, 'Dr. jaya verm.jpg', 'Dr. Jaya Verma', '<p>MBBS, MD (Skin &amp; VD)</p>\r\n\r\n<p>Director - Cabelo Bikaner</p>\r\n'),
(11, 'dr saurabh.jpg', 'Dr. Saurabh Rawat', '<p>MS, MCH</p>\r\n\r\n<p>Medical Director - Cabelo</p>\r\n'),
(12, 'dr muskan.jpg', 'Dr. Musakan Mishra', '<p>MDS.</p>\r\n\r\n<p>MSC- Trichologist</p>\r\n'),
(13, 'Dr Aakansha.jpg', 'Dr. Aakansha Bhatia', '<p>MBBS . MSC - Trichologist</p>\r\n\r\n<p>MSC - Health Care&nbsp;</p>\r\n'),
(14, 'dr. rakesh.jpg', 'Dr. Rakesh Sharma', '<p>Consultant Trichologist</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `preffered_location` varchar(500) DEFAULT NULL,
  `total_experience` varchar(500) DEFAULT NULL,
  `relivant_work_experience` varchar(500) DEFAULT NULL,
  `job_category` varchar(500) DEFAULT NULL,
  `position` varchar(500) DEFAULT NULL,
  `cv` varchar(500) DEFAULT NULL,
  `cover_note` varchar(500) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `mobile`, `email`, `location`, `preffered_location`, `total_experience`, `relivant_work_experience`, `job_category`, `position`, `cv`, `cover_note`, `date`) VALUES
(1, 'Aakash', '77019321016', 'aakashvip27@gmail.com', 'delhi', 'delhi', '2.5', '2.5', 'software developer', 'php Developer', 'Hall Ticket.pdf', 'hello This side is Aakash', '2022-03-21'),
(2, 'ramu', '7777777774', 'ram@ucrp.com', 'delhi', 'delhi', '1', '1', 'software developer', 'php developer', 'bk2.jpg', 'hello im ramu', '2022-03-21'),
(3, 'amit chaudhary', '9166168537', 'chaudhary.amit786@gmail.com', 'jaipur', 'jaipur', '12', '12', 'sales head', 'sales head', 'Amit -Jaipur22.docx', '', '2022-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `usr_mbl` varchar(500) DEFAULT NULL,
  `product_id` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `qty` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `usr_mbl`, `product_id`, `price`, `qty`) VALUES
(4, '7701931016', '3', '530', '3');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `date`, `name`, `email`, `subject`, `message`) VALUES
(1, '0000-00-00', 'hello I want a therapy', 'aakashvip27@gmail.com', 'enuiry', 'hello I want a therapy'),
(2, '2022-03-21', 'ram', 'ramu@gmail.com', 'ram', 'ram'),
(3, '2022-03-25', 'das', 'asd@ff.com', 'asd', 'das'),
(4, '2022-03-28', 'It is with sad regret to inform you DataList.biz is shutting down on 31 March 2022. \r\n\r\nWe have made available databases per country for all companies available.. \r\n\r\nYou can view our samples and download databases instantly on our website DataList.biz', 'corinne', '31 March 2022', 'It is with sad regret to inform you DataList.biz is shutting down on 31 March 2022. \r\n\r\nWe have made available databases per country for all companies available.. \r\n\r\nYou can view our samples and download databases instantly on our website DataList.biz'),
(5, '2022-04-13', '\r\nIf you ever need more social audience for cabeloclinic.com, we can run Facebook Traffic campaigns with this service: https://www.seo-treff.de/product/country-targeted-traffic/', 'south.nydia76@gmail.com', 'Social Targeted Traffic', '\r\nIf you ever need more social audience for cabeloclinic.com, we can run Facebook Traffic campaigns with this service: https://www.seo-treff.de/product/country-targeted-traffic/'),
(6, '2022-04-14', 'ZippyLeads.org is running an easter special till the 18th of April.\r\n\r\nGet all the leads you need for your company with our easter special.', 'genesis@zippyleads.org', 'ZippyLeads.org Easter Special', 'ZippyLeads.org is running an easter special till the 18th of April.\r\n\r\nGet all the leads you need for your company with our easter special.'),
(7, '2022-04-20', 'Hello.\r\n\r\nIt is with sad regret to inform you TopDataList.com is shutting down.\r\n\r\nWe have made all our databases available for you for a once off fee.\r\n\r\nVisit us on TopDataList.com', 'maggie@topdatalist.com', 'TopDataList.com Shutting Down', 'Hello.\r\n\r\nIt is with sad regret to inform you TopDataList.com is shutting down.\r\n\r\nWe have made all our databases available for you for a once off fee.\r\n\r\nVisit us on TopDataList.com'),
(8, '2022-05-05', 'Hello, from CustomData.click we are a provider of unique databases that could help your business.\r\n\r\nPlease visit us at CustomData.click to see if we can help you.\r\n\r\nRegards,\r\nTheda', 'theda@customdata.click', 'Leads for your business', 'Hello, from CustomData.click we are a provider of unique databases that could help your business.\r\n\r\nPlease visit us at CustomData.click to see if we can help you.\r\n\r\nRegards,\r\nTheda'),
(9, '2022-05-07', 'Greetings\r\n\r\nIf you ever need Negative SEO or a de-rank strategy, you can hire us here\r\n\r\nhttps://www.speed-seo.net/product/negative-seo-service/\r\n\r\n', 'nicki.florance76@gmail.com', 'Negative SEO Services', 'Greetings\r\n\r\nIf you ever need Negative SEO or a de-rank strategy, you can hire us here\r\n\r\nhttps://www.speed-seo.net/product/negative-seo-service/\r\n\r\n'),
(10, '2022-05-19', 'Your go-to source for leads. We can provide business to business and business to consumer leads, custom-tailored to your needs.\r\n\r\nCustomDatabases.org', 'lincoln@customdatabases.org', 'Leads for sale', 'Your go-to source for leads. We can provide business to business and business to consumer leads, custom-tailored to your needs.\r\n\r\nCustomDatabases.org');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `address` mediumtext DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address`, `phone`, `email`) VALUES
(1, 'Kota : 2nd Floor, Plot No. 2 -CH-7, Swami Dayanand Saraswati Rd, opposite Central Bank, Dadabari, Kota, Rajasthan 324009', '7300460006', 'Cabelokota@Gmail.Com'),
(2, 'Jaipur : 1st Floor, Tagore hospital, Sector, 7, Shipra Path, Mansarovar, Jaipur, Rajasthan 302020', '7300460006', 'Cabelojaipur@Gmail.Com'),
(3, 'Udaipur: Lake City Mall, shop no. 13 2nd, Udaipur, Rajasthan 313001', '7300460006', 'Cabeloudaipur@Gmail.Com'),
(4, 'Bikaner: Lake City Mall, shop no. 13 2nd, Udaipur, Rajasthan 313001', '7300460006', 'Cabelobikaner@Gmail.Com');

-- --------------------------------------------------------

--
-- Table structure for table `current_opening`
--

CREATE TABLE `current_opening` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_opening`
--

INSERT INTO `current_opening` (`id`, `title`, `content`) VALUES
(2, 'SALES HEAD', '<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>\r\n'),
(3, 'PHYSIOTHERAPIST', '<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `service_name` varchar(500) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `gender`, `mobile`, `email`, `message`, `city`, `service_name`, `date`) VALUES
(1, 'Aakash', 'Male', '7701931016', 'aakashvip27@gmail.com', 'I want to treatment of hair fall solution ', 'Kota', 'Hair Fall Solutions', '2022-03-14'),
(2, 'Aakash', 'Male', '7701931016', 'aakashvi27@gmail.com', 'Hello I want a Pigmentation treatment for my skin.', 'Jaipur', 'Pigmentation Treatment', '2022-03-14'),
(3, 'Abhishek', 'Male', '987487455', 'abhisharma1420a@gmail.com', 'Hello I want a laser hair Reduction for my hair', 'Jaipur', 'Laser Hair Reduction', '2022-03-14'),
(4, 'ram charan', 'Male', '9874587455', 'ram@gmail.com', 'hello I wannt ', 'Jaipur', 'Hair Transplant', '2022-03-14'),
(5, 'Aakash', 'Male', '7701931016', 'akashvip27@gmail.com', 'I want a Underams laser Treatment in udaipur\r\n', 'Udaipur', 'Underarms Laser', '2022-03-14'),
(6, 'Akaash', 'Male', '9999999999', 'aakashvip27@gmail.com', 'hello', 'Jaipur', 'Hair Transplant', '2022-03-14'),
(7, 'Aakash', 'Male', '77777777777', 'abhis@gmail.ocm', 'hello', 'Udaipur', 'Underarms Laser', '2022-03-14'),
(8, 'Aakash', 'Male', '7701931016', 'aakashvip27@gmail.com', 'GHello', 'Kota', 'Meso Therapy', '2022-03-16'),
(9, 'Akash', '', '7701931016', 'onlinkswebservices@gmail.com', NULL, 'Kota', 'Hair Fall', '2022-03-24'),
(10, 'Akash', 'male', '7777777777', 'aakashvip27@gmail.com', NULL, 'Kota', 'Hair Fall', '2022-03-24'),
(11, 'Josephesorn', 'Male', '', 'carole.chapman@ymail.com', '1500 powerful links from premium quality Google domains https://telegra.ph/1500-trusted-powerful-backlinks-to-your-website-from-premium-quality-Google-domains-03-28-5?34373', 'Jaipur', 'Hair Transplant', '2022-03-28'),
(12, 'Mike Nathan\r\n', 'Male', '', 'no-replyrah@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Nathan\r\n \r\nsupport@digital-x-press.com', 'Jodhpur', 'Tattoo Removal', '2022-03-28'),
(13, 'Jarodgus', 'Male', '', 'lorenzo-bera@alice.it', 'Top SMM Panel https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2FccgQZt&sa=D&sntz=1&usg=AOvVaw07lL_kc7zZcksNSSYY3kMA', 'Jodhpur', 'Hair Transplant', '2022-03-29'),
(14, 'TyreeorIft', 'Male', '', 'aziz.ess.99@hotmail.fr', 'The Best SMM- The world largest and cheapest SMM panel https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2FccgQZt&sa=D&sntz=1&usg=AOvVaw07lL_kc7zZcksNSSYY3kMA', 'Udaipur', 'Scar Revision', '2022-03-30'),
(15, 'Jasonwharm', 'Male', '', 'dia-bol-ico@live.it', 'More than 70,000+ targeted visitors per day from YouTube https://telegra.ph/How-to-get-more-than-1000-customers-per-day-to-any-business-from-YouTube-03-31-3?22175', 'Jaipur', 'Medical Facial / HydraFacial', '2022-04-01'),
(16, 'Stevegah', 'Male', '', 'renaud_tissier@hotmail.com', 'Revenu passif a partir de 1500 euros par jour https://telegra.ph/Derni%C3%A8res-nouvelles--Alors-que-les-prix-augmentent-les-Europ%C3%A9ens-commencent-%C3%A0-arr%C3%AAter-de-fumer-en-masse-et-gagnent-en-plus-%C3%A0-par-04-01?kja', 'Jaipur', 'Tattoo Removal', '2022-04-01'),
(17, 'Stevegah', 'Male', '', 'silvia81ss@yahoo.it', 'Your balance is 1586 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02-2?enf', 'Udaipur', 'Scar Revision', '2022-04-02'),
(18, 'Mohit Kashyap ', 'Male', '7689999799', 'ankiteon@gmail.com', '', 'Udaipur', 'Skin Lightning', '2022-04-03'),
(19, 'Stevegah', 'Male', '', 'lina_2413@yahoo.es', 'Gift for you 1585 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02-2?afe', 'Udaipur', 'Tattoo Removal', '2022-04-04'),
(20, 'ThomasVap', 'Male', '', 'xaripoter1979@yahoo.es', 'Passive income on the Trading Robot from 1500 USDT per day https://telegra.ph/More-than-1500-USDT-per-day-on-automated-cryptocurrency-trading-04-02-3?0fe', 'Jodhpur', 'Tattoo Removal', '2022-04-04'),
(21, 'Davidgox', 'Male', '', 'brok.steven@yahoo.com.au', 'Best Crypto Trading Bots for Automated Trading in Australia, UK, Canada and Europe https://telegra.ph/New-trend-in-Australia-UK-Canada-and-Europe-A-little-known-automated-trading-crypto-exchange-is-gaining-popularity-all-over-the--04-06-3?tgw', 'Udaipur', 'Skin Lightning', '2022-04-06'),
(22, 'Williamhaw', 'Male', '', 'controban@hotmail.co.uk', 'Over $50 million in affiliate marketing with Twitter https://telegra.ph/55-million-a-year-in-affiliate-marketing-with-twitter-04-07?3qs1', 'Udaipur', 'Anti Ageing', '2022-04-07'),
(23, 'Michaelemifs', 'Male', '', 'hjuifssdqffs32@gmail.com', 'Over $55 million in affiliate marketing with Twitter https://telegra.ph/55-million-a-year-in-affiliate-marketing-with-twitter-04-07-2?1wxz', 'Udaipur', 'Scar Revision', '2022-04-08'),
(24, 'Kaymqederurl', 'Male', '', 'sanja.filatov.yg9.9s@gmail.com', 'Hi Joy. Your friends told me that you like me and I decided to post my erotic photos and get acquainted https://ladieslocation.life/?u=wh5kd06&o=qxpp80k', 'Jodhpur', 'Laser Hair Reduction', '2022-04-08'),
(25, 'Mike Chesterton\r\n', 'Male', '', 'no-replyrah@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your cabeloclinic.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Chesterton\r\n', 'Bikaner', 'Skin Lightning', '2022-04-13'),
(26, 'Mike ', 'Male', '', 'no-replyrah@gmail.com', 'Hello \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', 'Jaipur', 'Hair Transplant', '2022-04-14'),
(27, 'Kailash vaishnav ', '', '8619237899', 'kailashvaishnav732@gmail.com', '', 'Kota', 'Hair Transplant', '2022-04-15'),
(28, 'Kailash vaishnav', 'Male', '8619237899', 'kailashvaishnav732@gmail.com', '', 'Kota', 'Hair Transplant', '2022-04-15'),
(29, 'Kundan singh', 'Male', '9549008445', '7773kundansingh@gmail.com', '', 'Kota', 'Skin Lightning', '2022-04-17'),
(30, 'Mahesh', '', '6375590206', 'maheshbhaitehriya@gmail.com', 'Yes', 'Kota', 'Skin Lightning', '2022-04-19'),
(31, 'Smith  Perez', 'Male', '', 'info@phoenix-ida.net', 'Greetings! \r\n \r\nMy name is Smith H. Perez. \r\nI have a client that has an urgent need for an Investment partner with whom to venture into a profitable but a classified monetary transaction. \r\n \r\nIf your company has credible projects in need of funding or an established businesses in need of expansion, please indicate your interest for more information through my official email:-  anleytrustees@anleytrustees.com \r\n \r\n \r\nBest regards, \r\nSmith H. Perez \r\nPrivate Investment Trust', 'Bikaner', 'Anti Ageing', '2022-04-20'),
(32, 'Sandeep', 'Male', '7300358626', 'sandeepkumarsharma8626@gmail.com', '', 'Jaipur', 'Hair Transplant', '2022-04-21'),
(33, 'MichaelWooda', 'Male', '', 'KsenofontMaidanov+5s1x@mail.ru', '<html> \r\n<a href=\"https://google.com\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEgXM4xrSRAnQQOLZImSaLdACcB-BosbLfsYEsXB-lLBl71Ma4AFA4xbB22ruqkub9W8nQCJVUXuXvJQeNLG2yoUL-OxTbhSvuyduxRSQI5RsQSu6DbfkMCVMuCuRB1uzs4KNkp3gZjcKQeubD_3RZ6p3xDAEpOwy6LnNnGhSa3h4V04dq3zc3oZajp_=s16000\"></a> \r\n</br> \r\ncabeloclinic.com griufheufhruifejyut5784467489rfugrgjedw0ooegjokoeghtitg3r94tuirjgoerfkeoghiytgjierjtirhyj \r\n</html>', 'Jaipur', 'Acne Treatment', '2022-04-25'),
(34, 'Mike Croftoon\r\n', 'Male', '', 'no-replyrah@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Croftoon\r\n \r\nsupport@digital-x-press.com', 'Udaipur', 'Acne Treatment', '2022-04-28'),
(35, 'Akram khan', 'Male', '7976072409', 'akrambhiyani@gmail.com', '', 'Bikaner', 'Hair Transplant', '2022-04-29'),
(36, 'Vaishnav kailash', 'Male', '8619237899', 'kailashvaishnav732@gmail.com', '', 'Kota', 'Hair Transplant', '2022-04-29'),
(37, 'preetam ashrmiya', 'Male', '9352208596', 'preetamashrmiya786@gmail.com', 'yes ', 'Kota', 'Hair Fall', '2022-05-03'),
(38, 'Rajesh jat', 'Male', '7230982779', 'rajeshrajesh7257@gmail.com', '', 'Jaipur', 'Hair Transplant', '2022-05-03'),
(39, 'Kayleigh', 'Male', '72 987 00 03', 'sales@tokarprofi.com', 'Hello \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KINGâ„¢. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://thawking.store\r\n \r\nHave a great time, \r\n \r\nKayleigh', 'Udaipur', 'Full Body Laser ', '2022-05-05'),
(40, 'Vicky sindhiya ', 'Male', '9588908843', 'gurjarrajesh9255@gmail.com', '', 'Jaipur', 'Hair Fall', '2022-05-06'),
(41, 'Vicky sindhiya ', 'Male', '9588908843', 'gurjarrajesh9255@gmail.com', '', 'Jaipur', 'Hair Fall', '2022-05-06'),
(42, 'Ceybbyderurl', 'Male', '', 'sanja.fila.tov.y.g.99s@gmail.com', 'Fuck me right now. How much longer to wait here https://ladies-location.life/?u=wh5kd06&o=qxpp80k', 'Jaipur', 'Hair Transplant', '2022-05-06'),
(43, 'Kadverierurl', 'Male', '', 'sanja.fila.tov.y.g.99.s@gmail.com', 'My cunt is wet. Fuck me https://ladies-location.life/?u=wh5kd06&o=qxpp80k', 'Jaipur', 'Laser Hair Reduction', '2022-05-06'),
(44, 'Shahrukh ', '', '9870846341', 'shahrukhkhan987084@gmail.com', '', 'Jaipur', 'Hair Fall', '2022-05-07'),
(45, 'Bablu dangi', 'Male', '9587055421', 'dangibablu96@gmail.com', 'Yes', 'Kota', 'Hair Transplant', '2022-05-07'),
(46, 'Robbavj', 'Male', '', 'ro.b.e.r.tbrow.nm.o.o.n.m.a.n.s@gmail.com\r\n', '<a href=https://bit.ly/3we9uwW>A new video is waiting! Click to watch!</a> \r\n<a href=https://bit.ly/3we9uwW><img src=\"https://i.ibb.co/qyXwBDc/beautiful-people-2.png\"></a>', 'Jodhpur', 'Stretch Marks', '2022-05-08'),
(47, 'Robniyv', 'Male', '', 'r.o.b.e.r.tb.r.o.wnmo.o.nmans@gmail.com\r\n', '<a href=https://ali.ski/uR-0A>Best Fat Freezing Machine with Discount 40%! Free Shipping. Summer is coming!</a>', 'Jodhpur', 'Skin Lightning', '2022-05-08'),
(48, 'Mike ', 'Male', '', 'no-replyrah@gmail.com', 'Howdy \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', 'Udaipur', 'Medical Facial / HydraFacial', '2022-05-09'),
(49, 'RAVI', 'Male', '9929614131', 'ravipersendia@gmail.com', '', 'Kota', 'Laser Hair Reduction', '2022-05-12'),
(50, 'Mike Farrell\r\n', 'Male', '', 'no-replyrah@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your cabeloclinic.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Farrell\r\n', 'Jodhpur', 'Scar Revision', '2022-05-12'),
(51, 'Robcse', 'Male', '', '', '<a href=https://ukrainatoday.com.ua/s/VOJMN>Interactive map of Hostilities in Ukraine on May 4, 2022 Update every Day</a> \r\n<a href=https://ukrainatoday.com.ua/s/VOJMN><img src=\"https://i.ibb.co/BsVRk5b/karta-boevyh-dejstvij-5maya-1.jpg\"></a>', 'Jodhpur', 'Pigmentation Treatment', '2022-05-15'),
(52, 'Olisaoq', '', '', 'ro.dri.g.ue.zol.iv.i.a1.972@gmail.com\r\n', '<a href=https://sylnaukraina.com.ua/d/wEaes>Russian combat losses in Ukraine officially Update Every Day. Comparison with other wars</a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes><img src=\"https://i.ibb.co/XXzR4tg/voina.png\"></a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes>Read more...</a>', 'Jaipur', 'Scar Revision', '2022-05-16'),
(53, 'Arianahry', '', '', 'rob.e.r.tb.r.o.wn.mo.on.man.s@gmail.com\r\n', '<a href=https://bit.ly/3ysjeX0>Painful or pleasant? Which do we choose today?</a> \r\n<a href=https://bit.ly/3ysjeX0><img src=\"https://i.ibb.co/JjxTKwd/946358.jpg\"></a>', 'Jaipur', 'Pigmentation Treatment', '2022-05-16'),
(54, 'Charlotzus', '', '', 'c.h.ar.lottea.nder.so.n.3.67@gmail.com\r\n', '<a href=https://bit.ly/3Mm7oBC>Are You tired? Because youâ€™ve been running through my mind all day</a> \r\n<a href=https://bit.ly/3Mm7oBC><img src=\"https://i.ibb.co/DzWWmV0/1610211656-8-p-ochen-krasivie-obnazhennie-devushki-erotik-21.jpg\"></a>', 'Udaipur', 'Laser Hair Reduction', '2022-05-17'),
(55, 'Mukesh Kumar ', 'Male', '8741852267', 'mukeshkumarsadakpur@gmail.com', '', 'Jaipur', 'Hair Fall', '2022-05-17'),
(56, 'Mukesh Kumar ', 'Male', '8741852267', 'mukeshkumarsadakpur@gmail.com', '', 'Jaipur', 'Hair Fall', '2022-05-17'),
(57, 'Josephiaisfk', '', '', 'jo.s.e.phi.ne.g.u.ti.er.re.z.1.9.90@gmail.com\r\n', '<a href=https://bit.ly/3sD3aOw>A Site where Women write First!!!</a> \r\n<a href=https://bit.ly/3sD3aOw><img src=\"https://i.ibb.co/m0zMVq0/807305.jpg\"></a>', 'Bikaner', 'Acne Treatment', '2022-05-19'),
(58, 'Charlottekgd', '', '', 'c.h.a.r.lo.t.teande.rs.on.3.6.7@gmail.com\r\n', '<a href=https://bit.ly/3L7KkFE>I know what to offer you tonight. Do you want this night to be unforgettable?</a>', 'Jaipur', 'Tattoo Removal', '2022-05-24'),
(59, 'Charlotbos', '', '', 'c.harlot.t.ea.nd.e.rson3.67@gmail.com\r\n', '<a href=https://bit.ly/3adeHNX>I figured out how to get revenge on the neighbors. Make me scream as loud as You can today, You always do well!!!</a>', 'Udaipur', 'Pigmentation Treatment', '2022-05-27'),
(60, 'Elizaqia', '', '', 'eliz.a.b.et.h.he.r.na.n.d.ez.3.w3@gmail.com\r\n', '<a href=https://goo.su/vENeldz>Fuck me in the Ass!!! I am waiting...</a> \r\n<a href=https://goo.su/vENeldz><img src=\"https://i.ibb.co/WtpTJWr/a11a61daa09ca6321a4678e76eb4a848.jpg\"></a>', 'Jodhpur', 'Anti Ageing', '2022-05-28'),
(61, 'Olisjyx', '', '', 'r.o.d.r.igue.zoli.via197.2@gmail.com\r\n', '<a href=https://sylnaukraina.com.ua/d/wEaes>Russian combat losses in Ukraine officially Update Every Day. Comparison with other wars</a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes><img src=\"https://i.ibb.co/XXzR4tg/voina.png\"></a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes>Read more...</a>', 'Jodhpur', 'Laser Hair Reduction', '2022-05-28'),
(62, 'Dorotfip', '', '', 'an.d.ersond.o.rot.hy.6.7.1.2@gmail.com\r\n', '<a href=https://goo.su/K89z>Today at our meeting we really need Your firm and resilient Friend, will You take it?</a> \r\n<a href=https://goo.su/K89z><img src=\"https://i.ibb.co/1zxbjMm/6a57cd7176bea16c490db8096d1e108a.webp\"></a>', 'Jodhpur', 'Skin Lightning', '2022-05-29'),
(63, 'Lida', 'Male', '06-87227805', 'info@imagessalonspa.com', 'Hello,\r\n\r\nIf you are one of the sufferers of the common problems nails have, then you are in luck! Our Toenail Clippers is here to help. It has a specially designed clip that can help those with troubles with winding nails, hard nails, two nails, nail cracks, deep nails, and thickened nails.\r\n\r\nWe are confident that our Toenail Clippers will provide you with the results you are looking for.\r\n\r\nGet yours today with 60% OFF: https://thepodiatrist.shop\r\n\r\nAll the best,\r\n\r\nLida', 'Udaipur', 'Full Body Laser ', '2022-05-29'),
(64, 'Robchv', 'Male', '', '', '<a href=https://ukrainatoday.com.ua/s/lvhfW>32,340 Burgers And Counting: Man In US Celebrates 50 Years Of Eating Big Macs</a> \r\n<a href=https://ukrainatoday.com.ua/s/lvhfW><img src=\"https://i.ibb.co/23vY8rw/bigmak6.jpg\"></a> \r\n<a href=https://ukrainatoday.com.ua/s/lvhfW>Read More...</a>', 'Jaipur', 'Acne Treatment', '2022-05-30'),
(65, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(66, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(67, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(68, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(69, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(70, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(71, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(72, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(73, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(74, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(75, 'Ashok kumar damor', '', '9145985710', 'ashokkumardamorashokkumar86@gmail.com', '', 'Udaipur', 'Hair Fall', '2022-05-30'),
(76, 'Luann', 'Male', '06-64552600', 'jeff.hall@greatsouthernclub.com', 'EASE YOUR PAIN IN 10 MINUTES EFFORTLESSLY\r\n\r\nBe Free from Neck Pain\r\nTry NeckFlexer & Relieve Neck Pain Effortlessly In 10 Min!\r\nSave 50% OFF + FREE Worldwide Shipping\r\n\r\nShop Now: neckflexer.online\r\n\r\nLuann \r\ncabeloclinic', 'Udaipur', 'Full Body Laser ', '2022-06-03'),
(77, 'Raj Mahawar', 'Male', '7690937471', 'mahawarr727@gmail.com', '', 'Jaipur', 'Hair Fall', '2022-06-04'),
(78, 'Punit ', 'Male', '7665461842', 'ptchoudhary430@gmail.com', '', 'Jaipur', 'Hair Fall', '2022-06-04'),
(79, 'Josephiaiebf', '', '', 'josep.h.i.ne.gu.t.i.e.rrez1990@gmail.com\r\n', '<a href=https://goo.su/WDRYI>If you see me naked in the bedroom, what will you do to me?</a>', 'Bikaner', 'Acne Treatment', '2022-06-05'),
(80, 'Margaretwvr', '', '', 'mar.g.arelo.ve.t.r.o.b.erts@gmail.com\r\n', '<a href=https://is.gd/ds0hp6>I strongly suggest that you become an actor in my first porn film.</a> \r\n<a href=https://is.gd/ds0hp6><img src=\"https://i.ibb.co/m0zMVq0/807305.jpg\"></a>', 'Jaipur', 'Tattoo Removal', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `frenchise`
--

CREATE TABLE `frenchise` (
  `id` int(11) NOT NULL,
  `content` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frenchise`
--

INSERT INTO `frenchise` (`id`, `content`) VALUES
(1, '<h3><strong>Franchise Fee and Royalties</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>The calculations for Franchise Fee and Royalty are simple and transparent.</li>\r\n	<li>Franchise Fee is based on the potential of a location / city.</li>\r\n	<li>Monthly Royalty payments equal to a fixed fee of the collections.</li>\r\n</ul>\r\n\r\n<p>Royalty Fee</p>\r\n\r\n<ul>\r\n	<li>As mentioned above, it is a fixed fee of the net monthly sales realized, and is payable each month by the Franchise to the Franchisor.</li>\r\n</ul>\r\n\r\n<p>Franchise Fee</p>\r\n\r\n<ul>\r\n	<li>It is a one time payment in consideration for the granting of the Franchise.</li>\r\n	<li>Franchise is granted for an initial period of five years.</li>\r\n	<li>This covers the cost of Location Approval as well as Initial Training of the Staff and Management of the Franchisee.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `frenchise_enquiry`
--

CREATE TABLE `frenchise_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `number` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `category` varchar(500) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frenchise_enquiry`
--

INSERT INTO `frenchise_enquiry` (`id`, `name`, `gender`, `number`, `email`, `category`, `service`, `city`, `date`) VALUES
(1, 'akash', 'Male', '7701931016', 'aakashvip27@gmail.com', 'facial', 'Hair Fall', 'Kota', '2022-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `frenchise_header_image`
--

CREATE TABLE `frenchise_header_image` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frenchise_header_image`
--

INSERT INTO `frenchise_header_image` (`id`, `image`) VALUES
(1, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_head`
--

CREATE TABLE `gallery_head` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_head`
--

INSERT INTO `gallery_head` (`id`, `image`, `url`) VALUES
(1, 'rrr.webp', 'https://www.youtube.com/embed/KaozVSsLlps');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_header_image`
--

CREATE TABLE `gallery_header_image` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_header_image`
--

INSERT INTO `gallery_header_image` (`id`, `image`) VALUES
(1, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `header_pages`
--

CREATE TABLE `header_pages` (
  `id` int(11) NOT NULL,
  `video_link` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `banner_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_pages`
--

INSERT INTO `header_pages` (`id`, `video_link`, `image`, `title`, `description`, `banner_image`) VALUES
(1, '', '62.jpg', '', '', '2.jpg'),
(2, '', 'hindi.jpg', '', '', '2.jpg'),
(3, 'https://www.youtube.com/embed/79v3LLVn7nE', '472.jpg', '', '', '2.jpg'),
(4, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Hair fall Laser.jpg', 'Hair fall Laser Therapy', '<p>Cabelo Hair Growth Treatment is Natural, Safe and Effective with Long Lasting Results. 6,00,000 Happy Hair Patients | 400+ Doctors | 225 Global Clinics. Consult Hair Expert Now! Internationally Approved. Safe Treatment. No Side Effects. 225+ Clinics Globally.</p>\r\n', '2.jpg'),
(5, 'https://www.youtube.com/embed/79v3LLVn7nE', 'FUE.jpg', 'FUE HAIR TRANSPLANT', '<p>Follicular unit extraction (FUE) is a type of hair transplant done by taking individual hair follicles from your skin and moving them to another part of your body where hair&rsquo;s thinner or absent. FUE has become more popular than the follicular unit transplantation (FUT) procedure, which led to the &ldquo;hair plugs&rdquo; look. Surgeons use micropunches to extract single follicles and move them, leaving behind almost no signs of extraction.</p>\r\n', NULL),
(6, 'https://www.youtube.com/embed/79v3LLVn7nE', 'bio fue.jpg', 'BIO FUE HAIR TRANSPLANT', '<p>Bio FUE is a trademarked procedure of FUE hair transplant developed by our own team of doctors at Cabelo Clinics. It is a long term customized plan of hair restoration for our patients. It takes into account the fact that hair loss is a progressive condition &amp; different patients have different hair characteristics or different patterns of hair loss. In Bio FUE technique, the hair follicles or grafts are extracted by our special technique along with administration of growth factors into the scalp, making hair stronger, longer and healthier.</p>\r\n', NULL),
(7, 'https://www.youtube.com/embed/79v3LLVn7nE', 'FUT.jpg', 'FUT HAIR TRANSPLANT', '<p>Follicular Unit Transplant (FUT) is a strip procedure of hair transplant. It involves removing a linear strip of hair from the donor region of the scalp and implanting it in the recipient region. The strip containing hair follicles is dissected under a stereo-microscope and divided into grafts of 1-3 follicles grafts. These grafts are then placed into incisions made on the recipient region.</p>\r\n', NULL),
(8, 'https://www.youtube.com/embed/79v3LLVn7nE', '4.jpg', 'DIRECT IMPLANT', '<p>The direct extension idea proposes that endometriosis arises from the invasion of endometrium via the uterine musculature. This idea was once primarily based on the remark that glandular buildings of adenomyosis had been in direct contact with eutopic endometrium.</p>\r\n', NULL),
(9, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Facial hair reduction.jpg', 'FACIAL HAIR REDUCTION', '<p>Unlike hair on the other body parts, facial hair are quite visible, and can make or break your look. If you find it tedious to visit Cabelo Clinic every few weeks.</p>\r\n', '3.jpg'),
(10, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Under arms.jpg', 'UNDER ARM HAIR LASER', '<p>Laser hair removal is one of the most commonly done cosmetic procedures in the U.S. It beams highly concentrated light into hair.Lasers are useful for removing unwanted hair.</p>\r\n', '3.jpg'),
(11, 'https://www.youtube.com/embed/79v3LLVn7nE', 'full body laser.jpg', 'FULL BODY LASER', '<p><br />\r\nSay hi there to easy smooth pores and skin with Cabelo Full Body Laser Hair reduction. A US-FDA authorized treatment, Cabelo everlasting hair discount lets you continue to be easy with no time spent on each day salon journeys to eliminate undesirable hair. Now be in spring or the festive season, your physique is geared up to costume and exhibit up as you like with no 2nd thoughts. A extremely good effortless and speedy way to put off undesirable hair, Cabelo everlasting hair discount is performed through specialists the use of the today&#39;s technological know-how that continues your pores and skin smooth and harm free by using solely focusing on the hair follicles and stopping them from developing any hair.</p>\r\n\r\n<p>Now forget about painful waxing classes that strip your pores and skin of the defensive barrier as properly as shaving that can lead to cuts and infections &ndash; Cabelo everlasting hair discount is a value nice replacement that approves you to keep time, cash and maintains you happy. Assisted by means of more moderen technology, laser remedy at Cabelo has solely superior to emerge as extra nice and efficient, and saves extra than a hundred hours of your existence in any other case wasted in shaving, waxing or tweezing. You are simply one step away from getting the clean and silky pores and skin of your dreams</p>\r\n\r\n<p><strong>FUN FACTS Cheaper Than Waxing:</strong> Ever calculated the quantity of cash you spend in salons for waxing? You&rsquo;d be amazed to know, however a learn about says &ldquo;An International full physique waxing carrier levels between INR 2000 to 3000 per month, main to a spending of about INR 24,000 to 36,000 each year.&rdquo; &ndash; Laser Treatments? &ndash; Much cheaper. Plus, checkout our ultra-modern bargain and watch your jaw drop.</p>\r\n\r\n<p><strong>Painless and Joyful: Waxing uses bloodless wax and strips of fabric &ndash; </strong>that strips out the shielding layers of your pores and skin and are very painful. Hot wax can frequently burn the pores and skin and reason rashes and infections. Hair elimination is a essential evil, however it truly does no longer have to be painful. Get smarter, begin with Laser Hair Removal at Cabelo and watch your world radically change inside a few sessions.&nbsp;</p>\r\n', '3.jpg'),
(12, 'https://www.youtube.com/embed/79v3LLVn7nE', 'bikini laser.jpg', 'BIKNI LINE LASER', '<p>Both bikini and Brazilian laser hair elimination contain the use of laser technology. The laser sends mild pulses into the follicle of every hair, destroying the root so that hair can no longer grow.</p>\r\n\r\n<p>Individual hairs develop at one-of-a-kind rates, so laser elimination requires a number of redress to take away all of the hair completely.</p>\r\n\r\n<p>The hair increase cycle includes three stages, and the laser is solely wonderful when the hair is in the lively boom stage. Multiple cure periods (spaced out with the aid of a few weeks) make certain that every hair is destroyed when it&rsquo;s growing.</p>\r\n\r\n<p>Laser hair elimination works for human beings of all pores and skin types, however these with honest pores and skin and darkish hair have a tendency to see the satisfactory results.&nbsp;</p>\r\n\r\n<h2>How to Prepare for Laser Bikini Treatments</h2>\r\n\r\n<p>The first step of therapy is to time table a session with a licensed technician.</p>\r\n\r\n<p>During the consultation, your technician will provide you an estimate of how many remedies you&rsquo;ll need. They&rsquo;ll additionally give an explanation for how the procedure works and what to do earlier than and after every one.</p>\r\n\r\n<p>To limit facet outcomes and see the satisfactory results, it is essential to do what your technician says in the days and weeks main up to treatment.</p>\r\n\r\n<p>About six weeks earlier than treatment, you&rsquo;ll want to give up plucking and waxing, as the hair follicle wishes to be intact for the laser to work. You&rsquo;ll additionally want to end tanning so that your pores and skin has herbal stages of melanin at some point of treatment.</p>\r\n\r\n<p>In the days main up to your treatment, you&rsquo;ll want to keep away from positive medications, such as blood thinners and ache relievers. Your technician may additionally additionally ask you to shave the location the day earlier than your first session.</p>\r\n\r\n<p>To study the whole lot you need to and shouldn&rsquo;t do earlier than the procedure, test out our full information on How to Prepare for Laser Hair Removal.&nbsp;</p>\r\n', '3.jpg'),
(13, 'https://www.youtube.com/embed/79v3LLVn7nE', 'skin lightnning.jpg', 'SKIN LIGHTNING', '<p>Skin-lightening tactics work by using decreasing the awareness or manufacturing of melanin in the skin. Melanin is the pigment that offers pores and skin its coloration and helps defend it from the sun.</p>\r\n\r\n<p>The major strategies used to lighten the pores and skin include:</p>\r\n\r\n<p>skin-lightening creams<br />\r\nlaser treatment<br />\r\nTrying a skin-lightening system is a important decision. It can be expensive, time-consuming, and the outcomes can&#39;t be guaranteed.</p>\r\n\r\n<p>If you are questioning of going ahead, be sincerely certain about your motives for looking to attempt it and do no longer rush into it.</p>\r\n\r\n<p>It&#39;s a properly thinking to talk about your plans with a GP first. They may discuss to you about your motives for looking to lighten your skin, and there would possibly be a clinical purpose why the manner is now not splendid for you.</p>\r\n\r\n<p>Skin-lightening methods can end result in serious facet consequences and complications. People with darkish pores and skin tones are especially at threat of these problems.&nbsp;</p>\r\n', '1.jpg'),
(14, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Acne treatment.jpg', 'ACNE TREATMENT', '<p>If you have tried over-the-counter (nonprescription) pimples merchandise for numerous weeks and they have not helped, ask your physician about prescription-strength medications. A dermatologist can assist you:</p>\r\n\r\n<ul>\r\n	<li>Control your acne</li>\r\n	<li>Avoid scarring or different harm to your skin</li>\r\n	<li>Make scars much less noticeable</li>\r\n</ul>\r\n\r\n<p><br />\r\nAcne medicines work by using lowering oil manufacturing and swelling or with the aid of treating bacterial infection. With most prescription pimples drugs, you can also no longer see effects for 4 to eight weeks. It can take many months or years for your zits to clear up completely.</p>\r\n\r\n<p>The cure routine your health practitioner recommends relies upon on your age, the kind and severity of your acne, and what you are inclined to commit to. For example, you may additionally want to wash and follow medicinal drugs to the affected pores and skin twice a day for countless weeks. Topical medicinal drugs and capsules you take through mouth (oral medication) are frequently used in combination. Treatment picks for pregnant female are restrained due to the threat of aspect effects.</p>\r\n\r\n<p>Talk with your physician about the dangers and advantages of medicines and different remedies you are considering. And make follow-up appointments with your health practitioner each three to six months till your pores and skin improves.&nbsp;</p>\r\n', '1.jpg'),
(15, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Lip lightinning.jpg', 'LIP LIGHTING', '<p>Dark lips are the most frequent difficulty confronted by using majority of guys in India. It takes place due to a number motives such as smoking, heredity, genetics, or in reality due to more melanin deposition in the lip area.</p>\r\n\r\n<p>It is the most commonplace trouble confronted via majority of guys of all ages, however can be successfully cured, however the duration or extent for which darkish lips has its effect.&nbsp;</p>\r\n\r\n<h3><strong>What&rsquo;s at Cabelo</strong></h3>\r\n\r\n<p><br />\r\n1. Lip Peeling: Mild natural peels containing argenine, sugarcane and milk extracts are used to lighten the coloration of lips. Visible effects can be accomplished in 4-6 sittings, every carried out inside an interval of 15 days.</p>\r\n\r\n<p>2. Micro Pigmentation: Organic pigments of exclusive colorings of herbal red are used to suit ur lip pores and skin tone. These vegetable derived pigments are then caused in the pores and skin of lips to create a everlasting hue of herbal and lighter lip color.</p>\r\n\r\n<p>3. Laser Lip Lightening: For darkly pigmented lips that have a color of brown or black due to greater melanin deposition, Laser mild is used to deal with the lip area, which selectively blasts the melanin pigment of the lip skin. 3-6 classes possibly required relying on the darkness of the lips.</p>\r\n\r\n<p>4. Lip Skin Resurfacing: Treatment to enhance the texture and colour of the lips. It works fine for dry and difficult lips with uneven pores and skin tone and coloration tone.It offers a smoother texture and lighter shade to the lips.&nbsp;</p>\r\n', '1.jpg'),
(16, 'https://www.youtube.com/embed/79v3LLVn7nE', 'mole removal.jpg', 'MOLES TAG REMOVAL', '<p>Moles are pores and skin growths made up of cells that produce shade (pigment). A mole can show up somewhere on the skin, on my own or in groups. Most humans get a few moles at some stage in their first 20 years of life. They are commonly brown in shade however can be blue, black, or flesh-coloured. Most moles are innocent and do not reason ache or different signs except you rub them or they bump in opposition to something.</p>\r\n\r\n<p>Skin tags are small, tender portions of pores and skin that stick out on a skinny stem. They most regularly show up on the neck, armpits, top trunk, and physique folds. The purpose of pores and skin tags is now not known. They are harmless.&nbsp;</p>\r\n', '1.jpg'),
(17, 'https://www.youtube.com/embed/79v3LLVn7nE', 'hydrafacial.jpg', 'HYDRA FACIAL', '<p>Everyone wishes smooth, bright, and youthful-looking skin. Instead of spending a fortune on oils, creams, essences, and serums in a multistep skin-care routine, you may also be capable to attain a herbal glow with a facial that some say is rising in popularity.</p>\r\n\r\n<p>Proponents of the modern day treatment, known as the HydraFacial, consignment it as a way to pursue and hold long-term pores and skin health, which makes it extra than your normal spa treatment. According to the HydraFacial website, a HydraFacial is carried out each 15 seconds, and it is presently handy in greater than eighty countries, such as the United States.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', '4.jpg'),
(18, 'https://www.youtube.com/embed/79v3LLVn7nE', 'C2O2 facial.jpg', 'CO2O2 FACIAL', '<p>When Carbon Dioxide in the Facial Gel is absorbed with the aid of the pores and skin cells, hemoglobin in pink blood cells releases Oxygen and takes in Carbon Dioxide. This system offers Oxygen to the pores and skin and additionally stimulates blood circulation.This response eliminates Stretch marks, Cellulite, Acne, irritation and enhances pores and skin tone, elasticity and moisture/oil balance.</p>\r\n\r\n<p>Carboxytherapy refers to the cutaneous and subcutaneous administration of carbon dioxide fuel [CO2] for therapeutic purposes. Carboxytherapy originated at the Royal Spas of France in 1932 with the therapy of sufferers bothered by way of peripheral arterial occlusive disease. In South America and Europe, carbon dioxide remedy has been utilized to the remedy of stretch marks, cellulite, and hypertrophic scars with astonishing results. Studies have validated that carboxytherapy improves pores and skin elasticity, improves circulation, encourages collagen repair, improves the look of satisfactory strains and wrinkles, and destroys localized fatty deposits. Carbon dioxide is a herbal constituent of our very being. We breathe in oxygen, and we exhale carbon dioxide. Plants take up the carbon dioxide, and in flip provide us the oxygen that we need. There are no regarded dangers related with carboxytherapy.&nbsp;</p>\r\n', '4.jpg'),
(19, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Carbon Facial.jpg', 'CARBON FACIAL', '<p>Let&rsquo;s discuss about approaches to limit massive pores, stupid complexion, blackheads or acne. With this non-invasive treatment, you will find a new glow to your skin. Also recognised as a &ldquo;Hollywood Facial&rdquo; or a &ldquo;China Doll&rdquo; treatment, this carbon laser facial reduces the look of marks, imperfections and pleasant strains / wrinkles and improves the firmness and universal look of the skin. It is a terrific anti-ageing cure for the face, neck, back, palms and chest.</p>\r\n\r\n<p>Advanced technology. Outstanding results. The Laser Peel operates at a secure but high-quality power degree for remarkable, long-lasting results. It is high quality for all pores and skin colorings and best for sun-damaged skin. In fact, medical practitioner have mentioned that the Laser Facial exfoliates the skin&rsquo;s floor layers so you will experience your pores and skin is tighter and greater supple.&nbsp;</p>\r\n', '4.jpg'),
(20, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Daimond derma brasion.jpg', 'DIAMOND DERMABRASION', '<p>This is an exfoliating cure which is pretty secure and effective. The diamond tip probe helps in elimination of outer layer of useless pores and skin cells starting out fresh, gentle and clean skin.</p>\r\n\r\n<p>This is a very mild technique with no downtime .It can be used no longer solely face however additionally back, neck, chest, hands or any physique section .Multiple classes are required to obtain the preferred results.</p>\r\n\r\n<ul>\r\n	<li><strong>Indications:-</strong></li>\r\n	<li>Acne scars &amp; pits.</li>\r\n	<li>Tanning</li>\r\n	<li>Uneven skin tone</li>\r\n	<li>Dull complexion</li>\r\n	<li>Age spots</li>\r\n	<li>Any kind of scars like suture marks, injury marks etc.</li>\r\n	<li>Skin resurfacing</li>\r\n</ul>\r\n\r\n<p>The results of treatment depend upon the severity of problem, skin&rsquo;s condition etc.</p>\r\n\r\n<p>3 &ndash; four days prior to therapy stopping lotions containing retinoids, glycolic acid, salicylic acid or anti getting older would possibly cream.</p>\r\n\r\n<p>After the method shield your pores and skin from solar exposure through carrying sunscreen spf 30 -50. You can additionally want to put on a appropriate moistourizer human beings with very skinny textured, dry flaky pores and skin need to now not decide for this process additionally now not appropriate for humans having eczema, rosacea energetic pimples or pores and skin infections.&nbsp;</p>\r\n', '4.jpg'),
(21, 'https://www.youtube.com/embed/79v3LLVn7nE', 'vampire face lift.jpg', 'Vampire face lift', '<p>A Vampire Facelift is a process for facial rejuvenation which makes use of the patient&rsquo;s personal blood. This modern therapy is accompanied by means of brilliant anti-aging effects such as pores and skin tightening, lifting, volumizing, collagen redesigning and basic brightening of the face and neck. It is a painless and minimally invasive system which combines the science at the back of injecting the pay attention of increase elements with the dermal fillers.</p>\r\n\r\n<p>Many of the sufferers confuse this time period with &lsquo;face-lift&rsquo;, however each the approaches are different. A vampire facelift does now not reposition or restructure the underlying tissue and can&#39;t reshape your neck, jawline or decrease neck like a surgical manner of facelift.&nbsp;</p>\r\n', '5.jpg'),
(22, 'https://www.youtube.com/embed/79v3LLVn7nE', 'botox.jpg', 'BOTOX', '<p>A mix of elements can cause facial lines. Not just about the cell changes might happen, or decrease of collagen, or harm brought about by free extremists from the sun and the climate.</p>\r\n\r\n<p>Rehashed muscle compressions from grimacing, squinting, or causing a commotion make skin wrinkle and crease, progressively bringing about the arrangement of facial lines. BOTOX&reg; Cosmetic works underneath the surface and briefly diminishes the hidden muscle movement that makes moderate extreme scowl lines, crow&#39;s feet and temple lines in grown-ups - to assist them with looking noticeably smoother.</p>\r\n', '5.jpg'),
(23, 'https://www.youtube.com/embed/79v3LLVn7nE', 'filler.jpg', 'FILLERS', '<p>Filler reestablish the skin volume in a manner so unobtrusive that everybody will see, yet nobody will at any point be aware of them.</p>\r\n\r\n<p>Hyaluronic corrosive fillers are so like our own tissue that there is no requirement for an awareness test.The treatment assists with topping off and smooth away lines or kinks, skin inflammation scars and upgrade the lip size and shape.</p>\r\n', '5.jpg'),
(24, 'https://www.youtube.com/embed/79v3LLVn7nE', 'rf micro.jpg', 'RF MICRO NEEDLING', '<p>Fragmentary RF miniature needling framework is useful in stretch imprints, skin inflammation scarring &amp;amp; enormous pores. It treats the objective region through quick infiltration of protected miniature needles anyway it makes no broad harm the epidermis.</p>\r\n\r\n<p>After meeting with the dermatologist and appraisal of stretch imprints it is chosen if just MNRF laser will be performed or it could be trailed by Collagen Induction Therapy.</p>\r\n\r\n<p>Miniature needles works with recuperating development factors come right into it which supports regular recuperation alongside a high strain RF beat is produced to the objective region which deteriorates the collagen filaments and advances development of new collagen by excitement of fibro impacts. It is a protected strategy with insignificant torment just focuses on the area underneath epidermis. It is a proficient methodology to invigorate fibro impacts and advance creation of new collagen.</p>\r\n', '5.jpg'),
(25, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Peels.jpg', 'Chemical Peels', '<p>Chemical Peels additionally work to supply glowing pores and skin through exfoliating and getting rid of the pinnacle layers of pores and skin to expose the younger, greater radiant layers of pores and skin below. This is extraordinary for revitalizing stupid skin, eliminating zits and pimples scars, tightening free skin, and enhancing the look of age spots.</p>\r\n\r\n<p>There are distinct kinds and power of chemical peels available. The dermatologist will find out about your trouble and advocate you with the most appropriate peel for most protected results. The electricity of the peel determines each the closing effect and the restoration time.</p>\r\n\r\n<p>Different sorts of Chemical Peels are:</p>\r\n\r\n<p><strong>LIGHT CHEMICAL PEELS:</strong>These are moderate chemical peels and are perfect for all pores and skin tone and texture. It is a speedy procedure. A moderate peel makes use of a more desirable chemical answer to assist exfoliate the pores and skin and resource in collagen production. It&rsquo;s superior than a mild chemical peel however barely much less sturdy than the medium peel.</p>\r\n\r\n<p><strong>MEDIUM PEELS:</strong> These are improved and require sedatives prior to the therapy. After a few days, the pores and skin flakes off naturally. For few days, your pores and skin will be red, however you ought to be blissful returning to your every day activities.</p>\r\n\r\n<p><strong>DEEP CHEMICAL PEELS: </strong>These are the most severe chemical peels. They are required for greater serious pores and skin problems, such as age spots, scars, and wrinkles. You are given a sedative or neighborhood anesthesia for this procedure. After a deep peel, your pores and skin will appear and experience very sensitive. Expect at least a week earlier than the pores and skin begins to peel off. Redness can closing a few months.</p>\r\n\r\n<p>The herbal amino acids existing in glutathione get rid of the free radicals and toxins from the physique and reduces the cellphone injury which in any other case can lead to serious pores and skin troubles such as solar spots, hyperpigmentation and melasma. It is additionally really useful in getting rid of minor pores and skin imperfections like crimson spots and difficult patches and additionally offers smoother and glowing skin. It additionally helps in treating pimples breakouts and cystic acne.&nbsp;</p>\r\n', '6.jpg'),
(26, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Q switch laser.jpg', 'Q-Switch laser', '<p>Q -Switch laser creates an invisible beam of mild that in particular goals the brown pigment or melanin existing in the darkish spots besides having any have an effect on on the surrounding skin. The pigment absorbs the laser strength and receives fragmented inside the skin&#39;s tissues, thereby giving you easy and even pores and skin tone. The laser reaches difficult to attain deeper areas the place merchandise or peels and many others do now not reach.<br />\r\nIt commonly takes about 6-8 classes for the provider to work effectively. It&#39;s a no down-time provider and you can also return to work or play without delay after.<br />\r\nInsta Clarity Laser when mixed with our quite efficacious pores and skin care products, lightens, stimulates and protects your skin, to assist provide you a smooth, flawless complexion that you have constantly desired.&nbsp;</p>\r\n', '6.jpg'),
(27, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Derma planning.jpg', 'Dermaplaning', '<p><strong>Get lovely sparkling skin with imaginative and most up to date method for example Dermaplaning!</strong></p>\r\n\r\n<p>Dermaplaning is a famous skin treatment that utilizes a peeling edge to give skin a smoother and more brilliant appearance. It utilizes a specific cutting edge to eliminate shallow dead skin layers, extremely fine hair, and other trash present on the skin surface. This corrective strategy eliminates the top layer of the skin and expects to make the skin&amp;rsquo;s surface look smooth. It plans to give a young, smooth, brilliant appearance and eliminates peach fluff also. To seek the best Dermaplaning Treatment in Rajasthan one can visit Cabelo Clinic.</p>\r\n', '6.jpg'),
(28, 'https://www.youtube.com/embed/79v3LLVn7nE', 'Crystal.jpg', 'Crystal Dermabrasion', '<p>Crystal Dermabrasion is the customary type of these peeling medicines. Crystal Dermabrasion utilizes a gem transmitting handpiece to blow a fine stream of precious stones against the skin. The precious stones release the dead and dry skin cells so they can undoubtedly be separated. The esthetician then, at that point, utilizes a vacuum like gadget to eliminate the dead skin and uncovers crisp sparkling, sound skin under.</p>\r\n', '6.jpg'),
(29, 'https://www.youtube.com/embed/komIGYSi5pQ', 'WhatsApp Image 2022-04-12 at 5.52.55 PM (4).jpeg', 'Tattoo Removal', '<p>Now humans do now not want to have awful tattoos for lifestyles like horrific scars. Thanks to texchnological advances one can get rid of their tattoo successfully and safely. Cosmotree Clinic is imparting high-quality everlasting tattoo</p>\r\n\r\n<p>&bull; Tattoo elimination or everlasting tattoo elimination is the procedure by using which the pigment which the tattoos are made of is damaged down and removed.</p>\r\n\r\n<p>&bull; Tattoo elimination is an complicated method as the tattoo ink is positioned below your first layer, so getting rid of it absolutely requires very knowledgeable professionals.</p>\r\n\r\n<p>CABELO CLINIC brings to you the pleasant tattoo elimination in Rajasthan with exceedingly educated personnel and doctors.</p>\r\n\r\n<p>Before getting your tattoo removed, positive matters must be stored in mind:</p>\r\n\r\n<p>&bull; All tattoos are no longer equally created consequently time, strategies and effects may additionally fluctuate in accordance to that.</p>\r\n\r\n<p>&bull; Dark shades are much less difficult than colours like lighter ones like yellow and orange as these are most hard to get rid of which are very tough to deal with.</p>\r\n\r\n<p>&bull; If your tattoo is older, it is simpler to eliminate than a pretty clean one as there is extra ink to eliminate from the skin.<br />\r\n&nbsp;</p>\r\n', '7.jpg'),
(30, 'https://www.youtube.com/embed/79v3LLVn7nE', 'WhatsApp Image 2022-04-12 at 5.52.55 PM (1).jpeg', 'Stretch Marks', '<p>Skin extended by fast extension because of pregnancy, weight gain, or outrageous weight reduction can bring about a type of scarring called stretch imprints, or &quot;striae distensae&quot;. Stretch checks by and large structure as rosy or purplish in variety, and afterward blur to polished silver or white shade. Stretch imprints happen in the dermis. Stretch imprints can frame anyplace on the body, yet generally happen where bigger measures of fat structure, like the stomach region, hips, bosoms, upper arms, underarms, thighs (both internal and external), hips, and hindquarters. or on the other hand lower back.</p>\r\n', '7.jpg'),
(31, 'https://www.youtube.com/embed/79v3LLVn7nE', 'WhatsApp Image 2022-04-12 at 5.52.55 PM.jpeg', 'skin Lightning', '<p>Full skin Lightning has been one of the most looked for system that needs great clinical outcome. It is a monotonous interaction and a considerable lot of us could even go for the least expensive method for getting the best skin easing up impact.</p>\r\n\r\n<p>Skin specialists going from skin easing up moisturizers had been a craze and the vast majority of us are as yet utilizing them due to cost reasons. However we just realize that it makes a shallow difference, we just end up baffled with a tiny noticeable outcome or even none. Skin stripping has been one of corrective dermatologist&#39;s unmistakable advantage of Full body Lightning. It can give you a moment shine and perfection of the skin however not absolute skin easing up for the entire skin in lengthy span of time. We would prefer to say, you want one more arrangement of treatment following a half year in light of skin bluntness.</p>\r\n', '7.jpg'),
(32, 'https://www.youtube.com/embed/79v3LLVn7nE', 'WhatsApp Image 2022-04-12 at 5.52.55 PM (3).jpeg', 'Hyperhidrosis', '<p>Hyperhidrosis makes your body sweat an excess to, some of the time for reasons unknown. Perspiring can be awkward and humiliating, which is the reason many individuals never look for help. Hyperhidrosis medicines (like exceptional antiperspirants and innovative treatments) offer you choices. You can lessen your side effects and recapture command over your life.</p>\r\n', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `index_banner`
--

CREATE TABLE `index_banner` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_banner`
--

INSERT INTO `index_banner` (`id`, `banner_image`) VALUES
(2, 'slider-img1.jpg'),
(3, 'slider-img2.jpg'),
(4, 'slider-img3.jpg'),
(5, 'slider-img4.jpg'),
(6, 'slider-img5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_header_image`
--

CREATE TABLE `job_header_image` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_header_image`
--

INSERT INTO `job_header_image` (`id`, `image`) VALUES
(1, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_top_content`
--

CREATE TABLE `job_top_content` (
  `content` mediumtext DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_top_content`
--

INSERT INTO `job_top_content` (`content`, `id`) VALUES
('<p>In last three decades Cabeloclinic has not only revolutionized the way the beauty and wellness Industry works, the company&rsquo;s workforce management is also something that is to be taken a note of. From nurturing talent to retaining talent, Cabeloclinic knows how to take care.</p>\r\n\r\n<p>We are one of the most gender neutral employers that there is. Our policies and recruitment takes great care in equal opportunity.</p>\r\n\r\n<p>Equal pay, equal opportunity and zero cases of sexual harassment is what we are proud of.</p>\r\n\r\n<p>We invite you to work with us and experience the difference.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer_banner`
--

CREATE TABLE `offer_banner` (
  `id` int(11) NOT NULL,
  `offer_banner` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_banner`
--

INSERT INTO `offer_banner` (`id`, `offer_banner`) VALUES
(1, 'slider-img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offer_this_month`
--

CREATE TABLE `offer_this_month` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_this_month`
--

INSERT INTO `offer_this_month` (`id`, `title`, `image`, `description`) VALUES
(6, 'Hair Transplant ', 'Hair Transplant.jpg', ''),
(7, 'Acne Treatment', 'Acne Treatment.jpg', ''),
(8, 'Dark UnderArms ', 'Dark underarms.jpg', ''),
(9, 'Full Body Laser ', 'Full Body Laser.jpg', ''),
(10, 'HydraFacial', 'Hydra Facial.jpg', ''),
(11, 'Laser Full Body', 'Laser full body.jpg', ''),
(12, 'Laser Tattoo Removal', 'Laser Tattoo Removal.jpg', ''),
(13, 'Laser Hair Removal Treatment', 'laser.jpg', ''),
(14, 'Pigmentation Treatment', 'Pigmantation.jpg', ''),
(15, 'PRP Therapy ', 'PRP Therapy.jpg', ''),
(16, 'Scar Removal', 'Scar Removal.jpg', ''),
(17, 'Skin Brightning ', 'Skin Brightining.jpg', ''),
(18, 'UnderArms Hair Removal', 'Under arms 2.jpg', ''),
(19, 'UnderArms Laser', 'Underarms Laser.jpg', ''),
(20, 'Hair Removal Treatment', 'Unwanted Hair Removal.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `our_photo_gallery`
--

CREATE TABLE `our_photo_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_photo_gallery`
--

INSERT INTO `our_photo_gallery` (`id`, `image`, `city`) VALUES
(3, 'kooaa.jpg', 'Kota'),
(9, 'bk3.jpg', 'Bikaner'),
(10, 'bk2.jpg', 'Bikaner'),
(11, 'bk1.jpg', 'Bikaner'),
(12, 'bk1.jpg', 'Jaipur'),
(13, '1.jpeg', 'Jaipur'),
(14, '2.jpeg', 'Jaipur'),
(15, '3.jpg', 'Jaipur'),
(16, '4.jpeg', 'Jaipur'),
(17, '2.jpg', 'Kota'),
(18, 'cabelo clinic ..jpeg', 'Kota'),
(19, '6.jpeg', 'Kota'),
(20, '1.jpeg', 'Kota');

-- --------------------------------------------------------

--
-- Table structure for table `our_products`
--

CREATE TABLE `our_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `product_price` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_products`
--

INSERT INTO `our_products` (`id`, `product_name`, `product_price`, `image`, `description`) VALUES
(1, 'Retexturing Activators', '180', 'product8.jpg', '<p>Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain&#39;s anti-oxidant is gluta and that low level of it results</p>\r\n'),
(3, 'test', '530', '2 (1).jpg', '<p>emsisos</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `our_product_header_image`
--

CREATE TABLE `our_product_header_image` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_product_header_image`
--

INSERT INTO `our_product_header_image` (`id`, `image`) VALUES
(1, '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `our_services_header_image`
--

CREATE TABLE `our_services_header_image` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_services_header_image`
--

INSERT INTO `our_services_header_image` (`id`, `image`) VALUES
(1, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `our_video`
--

CREATE TABLE `our_video` (
  `id` int(11) NOT NULL,
  `video_link` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_video`
--

INSERT INTO `our_video` (`id`, `video_link`, `image`, `title`) VALUES
(22, 'https://www.youtube.com/watch?v=TXo--o9W1xQ', '3.jpg', 'Laser Hair Reduction'),
(23, 'https://www.youtube.com/watch?v=MaE6Bwq02vU&t=10s', '4.jpg', 'HydraFacial'),
(26, 'https://www.youtube.com/watch?v=wmodS204CJQ', '5.jpg', 'Hair Fall Treatment');

-- --------------------------------------------------------

--
-- Table structure for table `our_video_gallery`
--

CREATE TABLE `our_video_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `vedio_link` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_video_gallery`
--

INSERT INTO `our_video_gallery` (`id`, `image`, `vedio_link`, `city`) VALUES
(2, 'vd1.jpg', 'https://www.youtube.com/embed/xIWXC_TFBI4', 'Kota'),
(3, 'vd2.jpg', 'https://www.youtube.com/embed/KaozVSsLlps', 'Kota'),
(4, 'Laser_Beard (1).jpg', 'https://www.youtube.com/embed/H6zpANP3QyU', 'Kota'),
(7, 'video_img.jpg', 'https://www.youtube.com/embed/xIWXC_TFBI4', 'Jodhpur');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` int(11) NOT NULL,
  `product_id` varchar(500) DEFAULT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `quantity` varchar(500) DEFAULT NULL,
  `subtotal` varchar(500) DEFAULT NULL,
  `user_mobile` varchar(500) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`id`, `product_id`, `product_name`, `price`, `quantity`, `subtotal`, `user_mobile`, `date`) VALUES
(1, '1', 'Retexturing Activators', '180', '3', '540', '7701931016', '2022-03-24'),
(2, '3', 'test', '530', '4', '2120', '7701931016', '2022-03-24'),
(5, '1', 'Retexturing Activators', '180', '2', '360', '1111111111', '2022-03-25'),
(6, '1', 'Retexturing Activators', '180', '5', '900', '1111111111', '2022-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `regsiter`
--

CREATE TABLE `regsiter` (
  `id` int(11) NOT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regsiter`
--

INSERT INTO `regsiter` (`id`, `mobile`, `name`, `password`) VALUES
(1, '77777777777', 'Aaas', '1234'),
(2, '8745874587', 'Viksas', '1234'),
(4, '7701931016', 'Aakash', '1234'),
(5, '1111111111', '123', '1111111111');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `image`, `title`) VALUES
(8, '777.jpg', 'Hair Transplant'),
(11, '1 (1).jpg', 'Hair Transplant'),
(13, 'hair transplant 2.jpg', 'Hair Transplant '),
(25, 'hair transplant 4.jpg', 'Hair Transplant'),
(26, 'hair transplant 5.jpg', 'Hair Transplant'),
(27, 'hair transplant 6.jpg', 'Hair Transplant'),
(28, 'hair transplant 7.jpg', 'Hair Transplant'),
(29, 'hair transplant 8.jpg', 'Hair Transplant'),
(30, 'hair transplant 9.jpg', 'Hair Transplant'),
(31, 'hair transplant 10.jpg', 'Hair Transplant'),
(32, 'hair transplant 11.jpg', 'Hair Transplant'),
(33, 'hair transplant 12.jpg', 'Hair Transplant'),
(34, 'hair transplant 13.jpg', 'Hair Transplant'),
(35, 'hair transplant 14.jpg', 'Hair Transplant');

-- --------------------------------------------------------

--
-- Table structure for table `reward_and_recogenization`
--

CREATE TABLE `reward_and_recogenization` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `broucher` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward_and_recogenization`
--

INSERT INTO `reward_and_recogenization` (`id`, `title`, `image`, `description`, `broucher`) VALUES
(4, 'Hair Transplant', 'hair_transplant.jpg', '<ul>\r\n	<li>Time:&nbsp;Tue / 14:00-18:00 , Fri / 9:00-15:00</li>\r\n	<li>Staff:&nbsp;Dania Landy</li>\r\n	<li>Price:&nbsp;$70</li>\r\n	<li>Duration:&nbsp;1.3 Hour</li>\r\n</ul>\r\n\r\n<p>Cabelo brings you most amazing Hair transplant with its Global expertise Technology from land of turkey, We offer 100% Natural &amp; Guaranteed Results, become BOLD from BALD with Cabelo . Cabelo Truly redefining yourself. Cabelo0 was known to give COMPLETE HAIR SOLUTION with its 360 degree approach.</p>\r\n', '1p.png'),
(5, 'Laser Hair Reduction', 'Laser_Hair.jpg', '<ul>\r\n	<li>Underarm Laser Trial</li>\r\n	<li>Laser Hair Reduction</li>\r\n	<li>Full Body Laser</li>\r\n	<li>Laser Hair Reduction</li>\r\n</ul>\r\n\r\n<p>Get Rid of unwanted hairs permanently by Cabelo Laser Hair Reduction, Why to wax &amp; shave when you can rid of unwanted hairs permanently. Cabelo offers best results at most affordable price. Treatment is well suited for both Men&rsquo;s &amp; Women&rsquo;s. Cabelo with its latest Diod Laser from Korea offers treatment with NO PAIN &amp; 100% patient comp', NULL),
(6, 'Skin Lightning', 'Skin_Lightning.jpg', '<ul>\r\n	<li>Skin Lightning</li>\r\n	<li>Medical / Hair Facial</li>\r\n	<li>Anti Ageing</li>\r\n	<li>Taking Treatment</li>\r\n	<li>Stretch Mask</li>\r\n	<li>Tattoo Removal</li>\r\n</ul>\r\n\r\n<p>Everybody Dreams for Fairer, Glowing&amp; Fresh skin, Cabelo making your wish come true with its customized Skin Lightning treatment. Cabelo have world&rsquo;s most effective skin lightning solution such as Glutathione Regime, Part Peels, Radiance Peel , Dermamelan treatment etc.</p>\r\n', NULL),
(7, 'Anti Ageing', 'Anti-ageing.jpg', '<ul>\r\n	<li>Time:&nbsp;Tue / 14:00-18:00 , Fri / 9:00-15:00</li>\r\n	<li>Staff:&nbsp;Dania Landy</li>\r\n	<li>Price:&nbsp;$70</li>\r\n	<li>Duration:&nbsp;1.3 Hour</li>\r\n</ul>\r\n\r\n<p>Let aging no more took your confidence, Look 5 to 10 years younger with Cabelo Ant-Ageing Solutions. Cabelo had best of Anti-ageing solutions like Botox, Filler, Vampire Face , Fractional Co2 ,Rf-Microneedling ,Hifu etc . We are committed for reversing Since of Ageing &amp; giving you the desired results.</p>\r\n', NULL),
(8, 'Pigmentation Treatment', 'pigmentation_treatment.jpg', '<ul>\r\n	<li>Time:&nbsp;Tue / 14:00-18:00 , Fri / 9:00-15:00</li>\r\n	<li>Staff:&nbsp;Dania Landy</li>\r\n	<li>Price:&nbsp;$70</li>\r\n	<li>Duration:&nbsp;1.3 Hour</li>\r\n</ul>\r\n\r\n<p>Get rid of all kind of pigmentation with Cabelo Pigmentation treatment. We had most advance treatments like Yellow Pell , Q Switch laser , Derma Melan. Pigmentation like Melesma, Freckles ,Age spot ,Sunspot can all be treated efficiently .</p>\r\n', NULL),
(11, 'Certificate Of Appreciation', '1.0.jpg', '', 'final brochure FINAL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `reward_recogniztion`
--

CREATE TABLE `reward_recogniztion` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward_recogniztion`
--

INSERT INTO `reward_recogniztion` (`id`, `image`) VALUES
(12, '1.0.jpg'),
(13, '2.0.jpg'),
(16, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `content`, `name`) VALUES
(5, '1.0.jpg', 'I must thank you from the bottom of my heart for the great job you have done on me. My results of Hair Transplant have been fantastic, and everyone who is meeting me after a few months are surprised to see the change in my face. It has brought so much of confidence in my life, and I am a changed personality.', 'Dev'),
(6, '2.0.jpg', 'Very nice Hair transplant experience at Cabelo Clinic. Dr Dushyant Singh Rathore is very nice person & very humble.He explained me in briefly about Transplant before my transplant done & short out all my doubts.also all staffs are very nice& supporting persons .quite satisfied .I done fue transplant.', 'Sahil'),
(7, '3.0.jpg', 'Good results Nice experience with Cabelo clinic thank you Dr Dushyant sir & OT Team.', 'Imtiyaz'),
(8, '4.jpg', 'Best experience in first session with Cabelo hair transplant Clinic. Keep it up.', 'Dhanraj'),
(9, '9.0.jpg', 'I would strongly suggest going for hair transplant under Dr. Dushyant Singh Rathore as he is an amazing personality with a golden heart and exceptional skills. I am impressed by his art to design hairline as it looks absolutely natural and I look way much younger and appealing now.', 'Ramesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_opening`
--
ALTER TABLE `current_opening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frenchise`
--
ALTER TABLE `frenchise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frenchise_enquiry`
--
ALTER TABLE `frenchise_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frenchise_header_image`
--
ALTER TABLE `frenchise_header_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_head`
--
ALTER TABLE `gallery_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_header_image`
--
ALTER TABLE `gallery_header_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_pages`
--
ALTER TABLE `header_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_banner`
--
ALTER TABLE `index_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_header_image`
--
ALTER TABLE `job_header_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_top_content`
--
ALTER TABLE `job_top_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_banner`
--
ALTER TABLE `offer_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_this_month`
--
ALTER TABLE `offer_this_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_photo_gallery`
--
ALTER TABLE `our_photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_products`
--
ALTER TABLE `our_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_product_header_image`
--
ALTER TABLE `our_product_header_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services_header_image`
--
ALTER TABLE `our_services_header_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_video`
--
ALTER TABLE `our_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_video_gallery`
--
ALTER TABLE `our_video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regsiter`
--
ALTER TABLE `regsiter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward_and_recogenization`
--
ALTER TABLE `reward_and_recogenization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward_recogniztion`
--
ALTER TABLE `reward_recogniztion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `current_opening`
--
ALTER TABLE `current_opening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `frenchise`
--
ALTER TABLE `frenchise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frenchise_enquiry`
--
ALTER TABLE `frenchise_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frenchise_header_image`
--
ALTER TABLE `frenchise_header_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_head`
--
ALTER TABLE `gallery_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_header_image`
--
ALTER TABLE `gallery_header_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_pages`
--
ALTER TABLE `header_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `index_banner`
--
ALTER TABLE `index_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_header_image`
--
ALTER TABLE `job_header_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_top_content`
--
ALTER TABLE `job_top_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_banner`
--
ALTER TABLE `offer_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_this_month`
--
ALTER TABLE `offer_this_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `our_photo_gallery`
--
ALTER TABLE `our_photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `our_products`
--
ALTER TABLE `our_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_product_header_image`
--
ALTER TABLE `our_product_header_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_services_header_image`
--
ALTER TABLE `our_services_header_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_video`
--
ALTER TABLE `our_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `our_video_gallery`
--
ALTER TABLE `our_video_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regsiter`
--
ALTER TABLE `regsiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reward_and_recogenization`
--
ALTER TABLE `reward_and_recogenization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reward_recogniztion`
--
ALTER TABLE `reward_recogniztion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
