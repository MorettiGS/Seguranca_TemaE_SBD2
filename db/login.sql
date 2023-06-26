SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `login`;
USE `login`;

--
-- Table structure for table `login_details`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,

  CONSTRAINT PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `username`, `password`) VALUES
('admin@teste.com', 'admin', 'admin'),
('html@teste.com', 'html', 'css'),
('php@teste.com', 'php', 'php'),
('sql@teste.com', 'sql', 'project');