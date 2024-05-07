-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 03:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slp`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `thumb_nail_pic` varchar(191) NOT NULL COMMENT 'articles thumbnail pic',
  `thumb_nail_title` varchar(191) NOT NULL,
  `thumb_nail_summary` text NOT NULL,
  `content` longtext NOT NULL,
  `published_date` date NOT NULL DEFAULT current_timestamp(),
  `featured` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=False\r\n1=True'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `project_id`, `thumb_nail_pic`, `thumb_nail_title`, `thumb_nail_summary`, `content`, `published_date`, `featured`) VALUES
(5, 43, '1714899528.jpg', 'Xavier Ateneo\'s Service Learning Program (SLP): Forging Collaborative Partnerships for the School Year\'s Social Engagements ', ' Forging Collaborative Partnerships for the School ', ' Xavier Ateneo Service Learning Program (SLP) held its ceremonial MOU signing on 18 October 2023. The event was attended by representatives from the local government units of Alubijid, Laguindingan, Malitbog, Tagoloan, and the XU VP for Administration Cluster and the Xavier University Canteen Multi-Purpose Cooperative.\r\n\r\n“Xavier University is really committed to the transformative learning experience of our students, faculty and partners”, said Engr Dexter S Lo, Vice-President for Social Development, in his Opening Message.\r\n\r\nThis MOU signing formalized the partnership and collaborative efforts of various academic disciplines for the first semester of the academic year 2023-2024. Ms Gail P dela Rita, Service Learning Program Director, presented the milestones and engagements of the program highlighting the relevance of the service learning partnership which is to “co-create solutions” with and for communities.\r\n\r\n“Service learning cannot work on its own to be sustainable, we have to work with you, our partners, so that sustainability can be our common agenda; when we partner and synergize, we can do a lot of work for communities”.', '2024-05-05', 1),
(6, 40, '1714899653.png', 'XU President leads ceremonial signing of MOU between XU and SLP partners ', ' XU President leads ceremonial signing of MOU between XU and SLP partners', ' XU President Fr Mars P Tan, SJ led the ceremonial signing of the Memorandum of Understanding with Xavier Ateneo’s Service Learning Program (SLP) partners on April 19, 2023 at the Engineering Drawing Room in the XU main campus. The event formalized and signified the commitment of the SLP stakeholders for better collaboration and cooperation leading to better outcomes for their respective units/organizations.\r\n\r\nIn his opening message, Fr Mars emphasized the relevance of service learning in allowing the students to experience real-world situations and gaining deeper understanding of the social issues that can develop the students’ sense of social responsibility to the community and the nation as a whole. “I am filled with gratitude for everyone present here who all play a crucial role in our shared mission,” Fr Mars said.', '2024-05-05', 1),
(7, 42, '1714899706.jpg', 'Xavier Ateneans among delegates at AJCU-AP SLP 2018 in Tokyo, Japan ', ' AJCU-AP Service Learning Program 2018 delegates from Instituto Sao Joao de Brito (East Timor), Sogang University (Korea), Sophia University (Japan), Sanata Dharma University (Indonesia), Ateneo de Manila, Ateneo de Davao, Ateneo de Zamboanga and Xavier University – Ateneo de Cagayan, Philippines.', ' Xavier Ateneo\'s Civil Engineering student Garnelo Jose A Cupay and Psychology student Khessa Mari T Obuta, together with Service Learning Program (SLP) formator Jerome L Torres, joined the 2018 Association of Jesuit Colleges and Universities - Asia Pacific (AJCU-AP) SLP Assembly from August 1 to 14, hosted by Sophia University in Tokyo, Japan.\r\n\r\nThis year’s SLP assembly centered on post-disaster community recovery in Japan. The students were provided with the opportunities to visit Kamaishi and Ofunato in Tohoku Region and learned the social services offered to the affected areas of the 2011 magnitude-9 earthquake.\r\n\r\nAJCU-AP is an association of Jesuit higher educational institutions (HEIs) and Jesuit higher educational endeavors (HEEs) functioning within the territory the Jesuit Conference for East Asia and Oceania (JCEAO).\r\n\r\nSLP, one of many programs of the AJCU-AP, focuses on providing a place for Jesuit university students to apply Ignatian Pedagogy in their everyday life and provide a learning experience for students through tangible community service.\r\n\r\nEach year, member universities send students and faculty members to a three-week program hosted by a member institution.\r\n\r\nThe program was participated by 28 students and five mentors from the different Jesuit universities, namely, Instituto Sao Joao de Brito (East Timor), Sogang University (Korea), Sophia University (Japan), Sanata Dharma University (Indonesia), and Ateneo de Manila, Ateneo de Davao, Ateneo de Zamboanga, and Xavier University - Ateneo de Cagayan (Philippines).', '2024-05-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`) VALUES
(1, 'HTML', 'html-tutorial', 'Nigga', 'asdasd', ' sadsad', ' asdad', 0, 0, '2024-02-05 06:08:47'),
(3, 'PHP', 'php', 'php ', 'php', 'php ', 'php ', 0, 0, '2024-02-06 05:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `dean_id` int(11) DEFAULT NULL COMMENT 'faculty id of dean',
  `logo_image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `dean_id`, `logo_image`) VALUES
(1, 'College of Computer Studies', 14, '1714640756.jpg'),
(2, 'College of Nursing', 13, NULL),
(3, 'College of Engineering', 12, '1714640590.jpg'),
(5, 'College of Agriculture', 11, '1714640218.png'),
(6, 'College of Arts and Sciences', 10, '1714640015.jpg'),
(7, 'School of Business and Management', 9, '1714640001.jpg'),
(8, 'School of Education', 8, '1714639968.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `college_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `college_id`, `college_name`) VALUES
(1, 'Information Technology', 1, 'College of Computer Studies'),
(2, 'Computer Science', 1, 'College of Computer Studies'),
(3, 'Electronics Communication Engineering', 3, ''),
(4, 'Information Systems', 1, 'College of Computer Studies'),
(7, 'Entertainment and Multimedia Computing', 1, ''),
(8, 'Elementary Education', 8, ''),
(9, 'Early Childhood Education', 8, ''),
(10, 'Special Needs Education', 8, ''),
(11, 'Secondary Education', 8, ''),
(16, 'Business Administration', 7, ''),
(17, 'Industrial Engineering', 3, ''),
(18, 'Chemical Engineering', 3, ''),
(19, 'Mechanical Engineering', 3, ''),
(20, 'Chemistry', 6, ''),
(21, 'Marine Biology', 6, ''),
(22, 'Psychology', 6, ''),
(23, 'Economics', 6, ''),
(24, 'Sociology-Anthropology', 6, ''),
(25, 'Agriculture', 5, ''),
(26, 'Nursing', 2, ''),
(27, 'Civil Engineering', 3, ''),
(28, 'Electrical Engineering', 3, ''),
(29, 'Development Communication', 5, ''),
(30, 'Agriculture and Biosystems Engineering', 5, ''),
(31, 'Food Technology', 5, ''),
(32, 'Biology', 6, ''),
(33, 'Philosophy', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `drive_files`
--

CREATE TABLE `drive_files` (
  `id` int(11) NOT NULL,
  `google_drive_file_id` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `mime_type` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drive_files`
--

INSERT INTO `drive_files` (`id`, `google_drive_file_id`, `file_name`, `mime_type`, `created`) VALUES
(1, '10pihoEI5L7McHi1OgD9It1YsJXuNtXS2', 'DATA DICTIONARY DRAFT.xlsx', 'application/vnd.openxmlformats-officedocument.spre', '2024-02-27 14:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '0-Faculty\r\n1-Coordinator\r\n2-Department_Head\r\n3-Dean',
  `image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `email`, `college_id`, `department_id`, `role`, `image`) VALUES
(8, 'Dr Edralin', 'C Manla', 'EdralinCManla@gmail.com', 8, 7, 3, '1714635528.jpg'),
(9, 'Ruth Love', 'Russel', 'ruthloverussel@gmail.com', 7, 7, 3, '1714639808.jpg'),
(10, 'Judy', 'Sendaydiego', 'JudySendaydiego@gmail.com', 6, 8, 3, '1714640125.jpg'),
(11, 'Maria', 'R. Mosqueda', 'MariaRMosqueda@gmail.com', 5, 8, 3, '1714640911.png'),
(12, 'Hercules', 'Cascon', 'HerculesCascon@gmail.com', 3, 3, 3, '1714640575.jpg'),
(13, 'Grace', 'Paayas', 'GracePaayas@gmail.com', 2, 8, 3, '1714640653.png'),
(14, 'Meldie', 'Apag', 'MedlieApag@gmail.com', 1, 2, 3, '1714640858.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `project_id`, `name`) VALUES
(15, 39, 'Gallery for  Community Health Nursing: Social Responsibility Project with Integration of Leadership and Management'),
(16, 40, 'Gallery for   Improving DRRM documentation through mapping of various hazards of selected barangays in the Municipality of Tagoloan'),
(17, 41, 'Gallery for Social Awareness-Raising among children in Malitbog, Bukidnon through Puppet Show medium'),
(18, 42, 'Gallery for   Inventory and Assessment of Biological Resources (Terrestrial) in Mt Pina, Malitbog, Bukidnon'),
(19, 43, 'Gallery for Development of a DICT-aligned LGU Alubijid Website'),
(20, 44, 'Gallery for  Development of a Marketing Plan and Promotional Materials for Sardines, rags, hollowblocks, silkworm by-product'),
(21, 45, 'Gallery for Assessment and Intervention on different educational issues');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photos`
--

CREATE TABLE `gallery_photos` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `file_name` varchar(191) NOT NULL,
  `file_type` varchar(191) NOT NULL,
  `file_size` varchar(191) NOT NULL,
  `file_path` varchar(191) NOT NULL,
  `date_uploaded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_photos`
--

INSERT INTO `gallery_photos` (`id`, `gallery_id`, `project_id`, `file_name`, `file_type`, `file_size`, `file_path`, `date_uploaded`) VALUES
(7, 21, 45, '20221013_090540.jpg', '', '', '../uploads/gallery_photos/20221013_090540.jpg', '2024-05-04 13:36:57'),
(8, 21, 45, '20221108_075308.jpg', '', '', '../uploads/gallery_photos/20221108_075308.jpg', '2024-05-04 13:36:57'),
(9, 21, 45, '20230317_103646.jpg', '', '', '../uploads/gallery_photos/20230317_103646.jpg', '2024-05-04 13:36:57'),
(10, 21, 45, '20230325_091557.jpg', '', '', '../uploads/gallery_photos/20230325_091557.jpg', '2024-05-04 13:36:57'),
(11, 21, 45, '20230429_093823.jpg', '', '', '../uploads/gallery_photos/20230429_093823.jpg', '2024-05-04 13:36:57'),
(12, 21, 45, '20231014_100604.jpg', '', '', '../uploads/gallery_photos/20231014_100604.jpg', '2024-05-04 13:36:57'),
(13, 21, 45, '20231129_111126.jpg', '', '', '../uploads/gallery_photos/20231129_111126.jpg', '2024-05-04 13:36:57'),
(14, 20, 44, '359751623_2066705703667299_8217547395484354221_n.jpg', '', '', '../uploads/gallery_photos/359751623_2066705703667299_8217547395484354221_n.jpg', '2024-05-04 13:37:10'),
(15, 20, 44, '364175975_826312628808260_639883421013563205_n.jpg', '', '', '../uploads/gallery_photos/364175975_826312628808260_639883421013563205_n.jpg', '2024-05-04 13:37:10'),
(16, 20, 44, 'DSC00469.JPG', '', '', '../uploads/gallery_photos/DSC00469.JPG', '2024-05-04 13:37:10'),
(17, 20, 44, 'DSC00483.JPG', '', '', '../uploads/gallery_photos/DSC00483.JPG', '2024-05-04 13:37:10'),
(18, 20, 44, 'DSC00485.JPG', '', '', '../uploads/gallery_photos/DSC00485.JPG', '2024-05-04 13:37:10'),
(19, 19, 43, 'IMG_0990.JPG', '', '', '../uploads/gallery_photos/IMG_0990.JPG', '2024-05-04 13:37:23'),
(20, 19, 43, 'IMG-22da45ec26566c156dc073cf0896945c-V.jpg', '', '', '../uploads/gallery_photos/IMG-22da45ec26566c156dc073cf0896945c-V.jpg', '2024-05-04 13:37:23'),
(21, 19, 43, 'IMG-187fe06af6ccc1ef0e0648cd2f657a82-V.jpg', '', '', '../uploads/gallery_photos/IMG-187fe06af6ccc1ef0e0648cd2f657a82-V.jpg', '2024-05-04 13:37:23'),
(22, 19, 43, 'IMG-776d718857247ea6b36ca488e1f712d2-V.jpg', '', '', '../uploads/gallery_photos/IMG-776d718857247ea6b36ca488e1f712d2-V.jpg', '2024-05-04 13:37:23'),
(23, 18, 42, 'IMG-1532a42eccfe9bf78f83954954716039-V.jpg', '', '', '../uploads/gallery_photos/IMG-1532a42eccfe9bf78f83954954716039-V.jpg', '2024-05-04 13:37:36'),
(24, 18, 42, 'IMG-6714d8ef798128a5a15a81174a8b8016-V.jpg', '', '', '../uploads/gallery_photos/IMG-6714d8ef798128a5a15a81174a8b8016-V.jpg', '2024-05-04 13:37:36'),
(25, 18, 42, 'IMG20221124163644_01.jpg', '', '', '../uploads/gallery_photos/IMG20221124163644_01.jpg', '2024-05-04 13:37:36'),
(26, 15, 39, 'IMG20221207153235.jpg', '', '', '../uploads/gallery_photos/IMG20221207153235.jpg', '2024-05-04 13:37:46'),
(27, 15, 39, 'IMG20230329093547.jpg', '', '', '../uploads/gallery_photos/IMG20230329093547.jpg', '2024-05-04 13:37:46'),
(28, 15, 39, 'IMG-a539ebaf4e272a79f247bd6b6d09b6f6-V.jpg', '', '', '../uploads/gallery_photos/IMG-a539ebaf4e272a79f247bd6b6d09b6f6-V.jpg', '2024-05-04 13:37:46'),
(29, 15, 39, 'IMG-f070c174398894584d52ad35b372cdf4-V.jpg', '', '', '../uploads/gallery_photos/IMG-f070c174398894584d52ad35b372cdf4-V.jpg', '2024-05-04 13:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `logo_image` varchar(191) DEFAULT NULL,
  `address` varchar(191) NOT NULL,
  `contact_person` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `contact_number` varchar(191) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=False\r\n1=True',
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `logo_image`, `address`, `contact_person`, `email`, `contact_number`, `featured`, `type_id`) VALUES
(7, 'BLGU Indahag', '1714723468.jpg', 'Cagayan de Oro City, Indahag', 'Indahag Contact Person', 'Indahag@gmail.com', '01234567890', 1, 1),
(8, 'BLGU Macasandig', '1714723485.jpg', 'Cagayan de Oro City, Macasandig', 'Macasandig Contact Person', 'Macasandig@gmail.com', '01234567890', 1, 1),
(9, 'Xavier Heights Subdivision Homeownes Association', '1714723503.png', 'Cagayan de Oro City, Xavier Heights', 'Xavier Heights Contact Person', 'Xavierheights@gmail.com', '01234567890', 1, 2),
(10, 'Brgy Natumolan', '1714723658.jpg', 'Tagoloan, Misamis Oriental', ' Natumolan Contact Person', ' Natumolan@gmail.com', '01234567890', 1, 1),
(11, 'DRRMO Tagoloan', '1714724059.jpg', 'Tagoloan, Misamis Oriental', 'Tagoloan Contact Person', 'Tagoloan@gmail.com', '01234567890', 1, 7),
(12, 'Brgy Casinglot', '1714723964.jpg', 'Tagoloan, Misamis Oriental', 'Casinglot Contact Person', 'Casinglot@gmail.com', '01234567890', 1, 1),
(13, 'MLGU Tagoloan', '1714724406.jpg', 'Tagoloan, Misamis Oriental', 'Tagoloan Contact Person', 'Tagoloan@gmail.com', '01234567890', 1, 1),
(14, 'XUVP Admin Office', '1714724444.png', 'Xavier University, Corrales Avenue, Cagayan de Oro City', 'XUVP Admin Office', 'eyonson@xu.edu.ph', '0888539800', 1, 6),
(15, 'LGU Malitbog', '1714726702.jpg', 'Bukidnon, Malitbog', 'Malitbog Contact Person', 'mpdcmalitbog@gmail.com', '09201037227', 1, 1),
(16, 'XUCMPC', '1714726122.png', 'Xavier Unviersity - Ateneo de Cagayan, Corrales Avenue, Cagayan de Oro City', 'XUCMPC Contact Person', 'xucmpc_2010@yahoo.com', '8575507', 1, 6),
(17, 'Higaonon community of Impahanong', '1714726566.jpg', 'Bukidnon', 'Higaonon Contact Person', 'Higaonon@gmail.com', '01234567890', 1, 2),
(18, 'MLGU Laguindingan', '1714726665.png', 'Laguindingan, Purok 11', 'Laguindingan Contact Person', 'Laguindingan@gmail.com', '01234567890', 1, 1),
(19, 'VP Admin Office', '1714726789.png', 'Xavier Unviersity - Ateneo de Cagayan, Corrales Avenue, Cagayan de Oro City', 'VP Admin Office Contact Person', 'vpadmin@xu.edu.ph', '8539800', 1, 6),
(20, 'LGU Alubijid', '1714726899.jpg', 'Alubijid, Misamis Oriental', 'Alubijid Contact Person', 'lgu_alubijidmisor@yahoo.com', '8825706', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(1, 1, 'HTML CRUD 2', 'HTML CRUD', '     HTML IS COOL    ', '1707222078.png', 'HTML IS COOL', '  HTML IS COOL', '  HTML IS COOL    ', 0, '2024-02-05 14:32:14'),
(9, 3, 'PHP TEST', 'PHP', 'PHP ', '1707202674.png', 'PHP', 'PHP ', 'PHP ', 0, '2024-02-06 06:57:54'),
(12, 3, 'a', 'a', 'a ', '1707493554.png', 'a', ' a', ' a', 0, '2024-02-09 15:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(191) NOT NULL,
  `subject_hosted` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sd_coordinator_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `school_year_id` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-in Progress\r\n1-Finished\r\n2-TBD\r\n3-Cancelled',
  `number_of_students` int(11) DEFAULT NULL,
  `sdgs` varchar(191) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=False\r\n1=True'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `type`, `subject_hosted`, `college_id`, `department_id`, `sd_coordinator_id`, `partner_id`, `school_year_id`, `semester`, `status`, `number_of_students`, `sdgs`, `featured`) VALUES
(39, ' Community Health Nursing: Social Responsibility Project with Integration of Leadership and Management', 'Community Health Nursing: Social Responsibility Project with Integration of Leadership and Management', 'Service', 'ITCC 42', 2, 26, 0, 7, 1, 1, 1, NULL, NULL, 1),
(40, '  Improving DRRM documentation through mapping of various hazards of selected barangays in the Municipality of Tagoloan', ' \r\nImproving DRRM documentation through mapping of various hazards of selected barangays in the Municipality of Tagoloan', 'Service', 'CEM 1 Disaster Resilience Management', 3, 27, 0, 10, 1, 1, 1, NULL, NULL, 1),
(41, 'Social Awareness-Raising among children in Malitbog, Bukidnon through Puppet Show medium', 'Social Awareness-Raising among children in Malitbog, Bukidnon through Puppet Show medium', 'Outreach', 'DC 32 Development and Folk Media', 5, 29, 0, 15, 1, 1, 1, NULL, NULL, 1),
(42, '  Inventory and Assessment of Biological Resources (Terrestrial) in Mt Pina, Malitbog, Bukidnon', ' \r\nInventory and Assessment of Biological Resources (Terrestrial) in Mt Pina, Malitbog, Bukidnon', 'Service', 'BIO 128 L Biological Resource Management', 6, 32, 0, 15, 1, 1, 1, NULL, NULL, 1),
(43, 'Development of a DICT-aligned LGU Alubijid Website', 'Development of a DICT-aligned LGU Alubijid Website', 'Service', 'ITCC 42', 1, 2, 0, 15, 1, 1, 1, NULL, NULL, 1),
(44, ' Development of a Marketing Plan and Promotional Materials for Sardines, rags, hollowblocks, silkworm by-product', ' Development of a Marketing Plan and Promotional Materials for Sardines, rags, hollowblocks, silkworm by-product', 'Output', '  BA 20 Good Governance and Corporate Social Responsibility', 7, 16, 0, 20, 1, 1, 1, NULL, NULL, 1),
(45, 'Assessment and Intervention on different educational issues', ' \r\nAssessment and Intervention on different educational issues and trends faced by school-age children ion selected schools and institutions', 'Service', 'ED 15 Issues and Trends in Education', 8, 8, 0, 7, 1, 1, 1, NULL, NULL, 1);

--
-- Triggers `projects`
--
DELIMITER $$
CREATE TRIGGER `create_gallery_after_insert` AFTER INSERT ON `projects` FOR EACH ROW BEGIN
    SET @gallery_name = CONCAT('Gallery for ', NEW.name);
    INSERT INTO gallery (project_id, name) VALUES (NEW.id, @gallery_name);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `project_documents`
--

CREATE TABLE `project_documents` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(191) NOT NULL,
  `file_size` varchar(191) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_faculty`
--

CREATE TABLE `project_faculty` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_faculty`
--

INSERT INTO `project_faculty` (`id`, `project_id`, `faculty_id`) VALUES
(5, 29, 7),
(6, 29, 1),
(7, 29, 1),
(8, 29, 5),
(9, 29, 5),
(10, 34, 7),
(11, 35, 0),
(12, 36, 0),
(13, 37, 0),
(20, 38, 7),
(21, 27, 7),
(22, 27, 5),
(23, 39, 13),
(24, 40, 12),
(25, 41, 11),
(26, 42, 10),
(27, 43, 14),
(28, 44, 9),
(29, 45, 8);

-- --------------------------------------------------------

--
-- Table structure for table `project_sdgs`
--

CREATE TABLE `project_sdgs` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `sdg` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_sdgs`
--

INSERT INTO `project_sdgs` (`id`, `project_id`, `sdg`) VALUES
(66, 38, 'sdg_1'),
(67, 38, 'sdg_2'),
(68, 38, 'sdg_5'),
(69, 38, 'sdg_6'),
(70, 38, 'sdg_9'),
(71, 39, 'sdg_4'),
(72, 39, 'sdg_17'),
(73, 40, 'sdg_7'),
(74, 40, 'sdg_9'),
(75, 40, 'sdg_11'),
(76, 41, 'sdg_3'),
(77, 41, 'sdg_4'),
(78, 41, 'sdg_11'),
(79, 42, 'sdg_8'),
(80, 42, 'sdg_9'),
(81, 42, 'sdg_11'),
(82, 43, 'sdg_9'),
(83, 43, 'sdg_10'),
(84, 43, 'sdg_11'),
(85, 44, 'sdg_1'),
(86, 44, 'sdg_8'),
(87, 44, 'sdg_10'),
(88, 44, 'sdg_17'),
(89, 45, 'sdg_4'),
(90, 45, 'sdg_9'),
(91, 45, 'sdg_17');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `id` int(11) NOT NULL,
  `school_year` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`id`, `school_year`) VALUES
(1, '2023-2024'),
(2, '2022-2023'),
(3, '2021-2022'),
(4, '2020-2021'),
(5, '2019-2020'),
(6, '2018-2019'),
(7, '2017-2018'),
(8, '2016-2017'),
(9, '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `year_level` tinyint(1) NOT NULL,
  `student_number` varchar(191) NOT NULL,
  `project_id` int(11) NOT NULL COMMENT 'To know what project they were on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `college_id`, `department_id`, `year_level`, `student_number`, `project_id`) VALUES
(1, 'Johnny', 'Test', 1, 2, 3, '1', 1),
(2, 'Test', 'Subject', 1, 1, 4, '00000000001', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sustainable_development_goals`
--

CREATE TABLE `sustainable_development_goals` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `logo` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type_name`) VALUES
(1, 'Local Government Units'),
(2, 'Civil Society Organizations'),
(3, 'Industry'),
(4, 'Non - Government'),
(5, 'Private Sector'),
(6, 'In - XU'),
(7, 'Government Agencies'),
(8, 'Schools');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(1, 'Vinni', 'Uba', 'vinniuba1@gmail.com', '1234', 1, 1, '2024-02-04 07:38:18'),
(2, 'users', 'user', 'user@gmail.com', 'user', 0, 0, '2024-02-04 08:15:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drive_files`
--
ALTER TABLE `drive_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_photos`
--
ALTER TABLE `gallery_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_documents`
--
ALTER TABLE `project_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_faculty`
--
ALTER TABLE `project_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_sdgs`
--
ALTER TABLE `project_sdgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sustainable_development_goals`
--
ALTER TABLE `sustainable_development_goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `drive_files`
--
ALTER TABLE `drive_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_photos`
--
ALTER TABLE `gallery_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `project_documents`
--
ALTER TABLE `project_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_faculty`
--
ALTER TABLE `project_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `project_sdgs`
--
ALTER TABLE `project_sdgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sustainable_development_goals`
--
ALTER TABLE `sustainable_development_goals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_documents`
--
ALTER TABLE `project_documents`
  ADD CONSTRAINT `project_documents_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
