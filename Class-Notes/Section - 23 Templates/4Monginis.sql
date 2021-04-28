-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 06:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4Monginis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `timestamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'esd', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartitems`
--

INSERT INTO `cartitems` (`id`, `order_id`, `pid`, `quantity`, `product_name`, `product_price`) VALUES
(1, 1, 3, 1, 'Strawberry cakes', 30),
(2, 1, 5, 1, 'Fruit cakes', 50),
(3, 2, 4, 500, 'Heart-Shaped Cake', 40);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(6) NOT NULL,
  `cname` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `parent_id` int(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `parent_id`) VALUES
(1, 'Cakes and Pastries', 0),
(2, 'Pizzas', 0),
(3, 'Other Foods', 0),
(4, 'Selected GIFTS', 0),
(5, 'Egg', 1),
(6, 'Egg Free', 1),
(7, 'Veg', 2),
(8, 'Nonveg', 2),
(10, 'Clothes', 4),
(11, 'Accessories', 4),
(16, 'Shirts', 10),
(15, 'Jeans', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `cust_address` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `password`) VALUES
(1, 'Nikhil Narayan', 'ipeg.solutions@gmail.com', '9830662770', 'D-1105, Koyla Vihar, Vip Road', 'password'),
(2, 'Nikhil Narayan', 'ipeg.solutions@gmail.com', '9830662770', 'D-1105, Koyla Vihar, Vip Road', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `payment_info` varchar(50) NOT NULL,
  `delivery_name` varchar(50) NOT NULL,
  `delivery_phone` varchar(30) NOT NULL,
  `delivery_address` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `date`, `payment_info`, `delivery_name`, `delivery_phone`, `delivery_address`, `status`) VALUES
(1, 1, '1510233637', 'COD', 'Nikhil Narayan', '9830662770', 'D-1105, Koyla Vihar, Vip Road', 'new'),
(2, 2, '1510233736', 'COD', 'Nikhil Narayan', '9830662770', 'D-1105, Koyla Vihar, Vip Road', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `details` text COLLATE latin1_general_ci NOT NULL,
  `image` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `price` int(4) NOT NULL DEFAULT '0',
  `cid` int(6) NOT NULL DEFAULT '0',
  `sales` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `image`, `price`, `cid`, `sales`, `views`) VALUES
(1, 'Plain Creamy Cake', 'This is a very good product of Monginis and also very healthy and testy.', 'products/1.jpg', 10, 5, 0, 0),
(2, 'Pineapple cakes', 'This is a very good product of Monginis and also very healthy and testy.', 'products/2.jpg', 20, 5, 0, 0),
(3, 'Strawberry cakes', 'This is a very good product of Monginis and also very healthy and testy.', 'products/3.jpg', 30, 5, 1, 0),
(4, 'Heart-Shaped Cake', 'This is a very good product of Monginis and also very healthy and testy.', 'products/4.jpg', 40, 5, 500, 1),
(5, 'Fruit cakes', 'This is a very good product of Monginis and also very healthy and testy.', 'products/5.jpg', 50, 5, 1, 5),
(8, 'Chocolate(egg free)', 'This is a very good product of Monginis and also very healthy and testy.', 'products/8.jpg', 80, 6, 0, 0),
(9, 'Vanilla(egg free)', 'This is a very good product of Monginis and also very healthy and testy.', 'products/9.jpg', 90, 6, 0, 0),
(10, 'Capsicum Pizza', 'Pizzas are of good quality.', 'products/10.jpg', 100, 7, 0, 0),
(11, 'Onion Pizza', 'Pizzas are of good quality.', 'products/11.jpg', 110, 7, 0, 7),
(12, 'Chicken Pizza', 'Pizzas are of good quality.', 'products/12.jpg', 120, 8, 0, 0),
(13, 'Fish Pizza', 'Pizzas are of good quality.', 'products/13.jpg', 130, 8, 0, 0),
(14, 'Egg Patties', 'Patties are soft and fresh.', 'products/14.jpg', 140, 3, 0, 0),
(15, 'Aloo Patties', 'Patties are soft and fresh.', 'products/15.jpg', 150, 3, 0, 0),
(17, 'Vanilla Ice Creams', 'Fresh and Yummy.', 'products/17.jpg', 170, 3, 0, 0),
(49, 'Popcorn', 'Crispy & Salty', 'products/6.jpg', 490, 3, 0, 0),
(19, 'Aloo Fries', 'Served Hot.', 'products/20.jpg', 190, 3, 0, 0),
(63, 'Red Flared Skirt', 'Increase your glam quotient by wearing this red coloured skirt from the house of Faballey. Made of knit, this skirt is comfortable to wear and skin friendly as well.', 'products/red_skirt.jpg', 630, 10, 0, 0),
(54, 'Black Geometric Print Dress ', 'If you believe in a classy and modish dressing style, then this black coloured dress from Alia Bhatt''s exclusive collection for Jabong is meant for you. Fashioned from rayon, this dress will ensure a comfortable fit. Team this dress with high heels and a neckpiece for a stunning look.', 'products/black_dress.jpg', 540, 10, 0, 0),
(55, 'Pink Polyurethane (Pu) Handbag', 'Cute and trendy, this pink coloured handbag by Next will tempt you to buy it instantly. It is compact yet can store your important things with ease. Made from polyurethane (pu), it will convince you of its good quality in no time. Fetch a catchy look by just carrying this bag with a simple top and a pair of jeans.', 'products/pink_bag.jpg', 550, 11, 0, 0),
(56, 'Black Tee Shirt', ' Look like an absolute stunner as you make your way to the party wearing this navy blue T-shirt from MANGO. Made from viscose spandex, this T-shirt features a round neck and will be comfortable all day long. This T-shirt can be teamed up with a pair of sequined shorts and stilettos to complete your stylish look.', 'products/black_tee.jpg', 560, 10, 0, 0),
(57, 'Saree', 'Classy, sensuous and versatile are the perfect words to describe this brown coloured saree from Vishal. The chiffon fabric makes this 6.0 m saree easy to drape and carry all day long. Club it with golden danglers and heels to highlight your personality on any occasion.', 'products/saree.jpg', 570, 10, 0, 0),
(58, 'Watch', 'If you have it, flaunt it! If this is your mantra then hit the streets in style wearing this black coloured analog watch for women from the house of Custom. The casing adds more appeal to this timepiece that can be worn on a rainy day, all thanks to its water resistance upto 10 atm.', 'products/watch.jpg', 580, 11, 0, 0),
(59, 'Blue Tee (Mens)', 'Fall in love with the soft texture of the fabric wearing this regular-fit T-shirt by United Colors of Benetton. Your skin will love the feel of this T-shirt as it is fashioned using the material that is famous for comfort – cotton. Live the moment wearing this T-shirt with casual trousers and flip-flops as you hit the street with best buds.', 'products/blue_tee.jpg', 590, 10, 0, 0),
(60, 'Mens Watch', 'Keep up with time wearing this black coloured analog watch from the house of Fossil. The stainless steel dial and leather strap make this watch for men quite high on quality. Designed with a difference, this watch will be a fantastic addition to your accessory collection.', 'products/mens_watch.jpg', 600, 11, 0, 0),
(61, 'Scarf', 'Charmingly gorgeous is what you’d be once you team up this multicoloured scarf with a sexy top and a pair of denims. While its modal adds to its appeal by making it soft to the touch, its attractive print accentuates its visual appeal. Furthermore, you can also wrap it in varied styles with different outfits and sport a new look every day.', 'products/scarf.jpg', 610, 10, 0, 0),
(62, 'Perfume', 'A refreshing fragrance that uplifts your mood and takes you to a blissful territory is here from Nike. The new gen women can now bask in the subtlety of the scent.\r\n\r\nLong Lasting Protection\r\n\r\nStart your day on a jovial note and stay fresh all day with Up or Down Eau de Toilette that gives you a long lasting protection.', 'products/perfume.jpg', 620, 11, 0, 0),
(72, 'MatchBox', '', '', 720, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cartitems`
--
ALTER TABLE `cartitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
