CREATE TABLE IF NOT EXISTS `phpvms_credits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
INSERT INTO `phpvms_credits` (`id`, `name`, `description`, `image`, `link`, `active`) VALUES
(1, 'Simpilotgroup', 'Virtual airline site designs, custom modules, and scheduling applications.', 'http://www.simpilotgroup.com/simpilotgroup2.png', 'http://www.simpilotgroup.com', 1),
(2, 'phpvms', 'phpVMS is the most popular, free, virtual airline software, with support for various ACARS applications (kACARS, FSACARS, XAcars, FS Flight Keeper, and FSPassengers), AJAX-driven administration panel, complete with financial reports, schedule management and various other features designed for realistic operation of your virtual airline.', 'http://www.phpvms.net/images/logo.jpg', 'http://www.phpvms.net', 1);
