CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

INSERT INTO `customer` (`id`, `name`) VALUES
(1, 'Bob'),
(2, 'John'),
(3, 'Dave'),
(4, 'Irene'),
(5, 'Shibi');

