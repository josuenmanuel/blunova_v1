-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2016 a las 07:23:21
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dev_blunovadogshow_com`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blunova_session`
--

CREATE TABLE `blunova_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blunova_session`
--

INSERT INTO `blunova_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('fb527305b7aff010c4e966e06a7820cdb580620d', '::1', 1481415821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313431353532393b),
('8b5c9ad7091f7ca549b40949080a68a63977a36f', '::1', 1481415965, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313431353833373b),
('43e56c9dc6ca1d3a7c433719c85f8146610d28d3', '::1', 1481415987, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313431353938373b),
('1429b90b39293f64be2f3ee4788e872302a44d00', '::1', 1481416962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313431363731313b),
('4d77a23a7e20ece05a6dacc758719fa9d0d6336d', '::1', 1481417094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313431373034353b),
('3f5255adbca71e01e6637551dc7477794d7cda51', '::1', 1481417957, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313431373736343b),
('27df0ef0d71b8e0d5766e7a331a4b89f076d6227', '::1', 1481418129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313431383131393b),
('8987c3f45631aff8cf31c550cda239f832c5b95f', '::1', 1481429060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313432383939393b),
('6e709dd54669e61993a494960ac1d5dc84141ff0', '::1', 1481429677, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313432393532393b),
('fc9e187e20d268593634aad1775548c3d9d625cc', '::1', 1481431903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433313630393b),
('43a6d42e22c358bfb67a70a2fc3639615b97a961', '::1', 1481432219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433313932393b),
('7c0bb7b6150f19a608656330c67c31d29fed86fa', '::1', 1481432389, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433323238313b),
('9f1c31c733d24d4935900317d372d12e27c11e9f', '127.0.0.1', 1481432633, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433323436343b),
('6a653083d7751a2cc67c056cd660e83d639c34fb', '::1', 1481432925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433323633383b),
('a138509ab1493693f6af7a60323afbdb50b0be4d', '127.0.0.1', 1481432872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433323731303b),
('0aac54ef8dc955ee26c3ece4476e6dbb49b5f103', '::1', 1481433127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433323935373b),
('1d3b3ec255996d1503ce33c71864238f13f8ed84', '::1', 1481435546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433353434333b),
('7cbf919d3d8e72a52b5061f0fc69b85a6d22f62a', '::1', 1481436254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433353936383b),
('4f3a439b6fc1248a0c213ba35fd79590635e4d27', '::1', 1481436574, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433363237363b),
('5f4ea99136b7e3c543852dbca4e23f8b76ead17c', '::1', 1481436967, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433363732323b),
('aee49f2f82d256a3701de62d525478979214daaa', '::1', 1481437193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313433373033353b),
('ca2d02d64628bc8a3cd69ce7cf6f8c792808072f', '::1', 1481472230, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437323231353b),
('e40a865bbcdb245802a4799b7ff6810806aebcb7', '::1', 1481474358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437343133353b),
('5b01561ae781faa3d43243fe40e7474f2ff04c60', '::1', 1481474676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437343436323b),
('32025cda2dbb9779cc11b947bd584a625611f335', '::1', 1481475088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437343832353b),
('cea2edd4a965f4dda38d827972c67d1a2fa15f28', '::1', 1481475416, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437353134333b),
('6b9ccc79eba0053dcd060ad26a701c3cc0936aa0', '::1', 1481475627, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437353435393b),
('eb5409f5c6b89355c927e2ab78884f00165d496d', '::1', 1481475926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437353830303b),
('3f7cb5ce62b1062a2ec95378a93c3e9268d82802', '::1', 1481476341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437363334313b),
('d1f8d5172a92400c660c5b55fe9ecf338dd83780', '::1', 1481477405, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437373131353b),
('41101aa4f5159746f63888105b1e898832c4e373', '::1', 1481477752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437373435323b),
('39f18f948cc43bc5e3e822fb6863ef108e6dd4d8', '::1', 1481478116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437373832353b),
('09c15bb0d7d8566de6e82a50c550063fa278deda', '::1', 1481478638, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437383336323b),
('899aa0092b8c8c176dfa7508a9f2dc4522b14481', '::1', 1481478925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313437383732323b),
('b9b5a29e5e5927246374f843f93141f2dc9828ec', '::1', 1481500087, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313439393938373b),
('d8de690e0348dc989031ba00450ea2c4c890eb05', '::1', 1481500413, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530303430333b),
('11970caaeb1d73d7510d9d395d342726a8a2378c', '::1', 1481501825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530313830383b),
('c91d7659586c04222f0d26ecf69268c3f93da55b', '::1', 1481502702, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530323539333b),
('2faf85f05924415482619e1cdc53082dbf0588e5', '::1', 1481503091, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530323937303b),
('35b5c0346ad322ef2c197e6f82b8a949403157e9', '::1', 1481503532, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530333237363b),
('1a058718a799f02b75e4062f098105bca45bab38', '::1', 1481503879, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530333538343b),
('25a3be56a7c85bd2a2a3bc6939aa7a412df67bcb', '::1', 1481504057, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530333931313b),
('81104b6db06413da810890f12a23fc59244524fe', '::1', 1481504436, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530343232383b),
('b3d3c1ddf4b29dc5dfa660015b70888a29a17432', '::1', 1481504814, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530343533323b),
('a0823ccea580a826dc08d317de8d927fce121907', '::1', 1481505094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530343835363b),
('0c477d9302a9dce15ab9059599648acee8efbeff', '::1', 1481505291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313530353234323b),
('2f6fc83d7f2420d6c795a6b2c57da2b40676b445', '::1', 1481512422, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313531323330373b),
('9920aff64923ba780cdcae260945c6cd9627efac', '::1', 1481513676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313531333636303b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`idcategory`, `name`) VALUES
(1, 'Bundles'),
(2, 'Luxury Line'),
(3, 'Desing Services'),
(4, 'Dog Show');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `idimagen` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `main` tinyint(1) DEFAULT NULL,
  `idproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`idimagen`, `name`, `main`, `idproduct`) VALUES
(1, 'Crate _Cover_1_Black.png', NULL, 1),
(2, 'Crate _Cover_1_Blue.png', 1, 1),
(3, 'Crate _Cover_1_Pink.png', NULL, 1),
(4, 'Crate_Cover_1_Navy.png', NULL, 1),
(5, 'Crate_Cover_1_Purple.png', NULL, 1),
(6, 'Crate_Cover_1_Red.png', NULL, 1),
(7, 'Crate_Cover_1_Teal.png', NULL, 1),
(8, 'Crate_Cover_1_Violet.png', NULL, 1),
(9, 'Crate_Cover_1_White.png', NULL, 1),
(10, 'Crate_Cover_2_Black.png', 1, 2),
(11, 'Crate_Cover_2_Blue.png', NULL, 2),
(12, 'Crate_Cover_2_Navy.png', NULL, 2),
(13, 'Crate_Cover_2_Pink.png', NULL, 2),
(14, 'Crate_Cover_2_Purple.png', NULL, 2),
(15, 'Crate_Cover_2_Red.jpeg', NULL, 2),
(16, 'Crate_Cover_2_Teal.png', NULL, 2),
(17, 'Crate_Cover_2_Violet.png', NULL, 2),
(18, 'Crate_Cover_2_White.png', NULL, 2),
(19, 'Crate_Cover_3_Black.png', NULL, 3),
(20, 'Crate_Cover_3_Blue.png', 1, 3),
(21, 'Crate_Cover_3_Navy.png', NULL, 3),
(22, 'Crate_Cover_3_Pink.png', NULL, 3),
(23, 'Crate_Cover_3_Purple.png', NULL, 3),
(24, 'Crate_Cover_3_Red.png', NULL, 3),
(25, 'Crate_Cover_3_Teal.png', NULL, 3),
(26, 'Crate_Cover_3_Violet.png', NULL, 3),
(27, 'Crate_Cover_3_White.png', NULL, 3),
(28, 'Sueter_1_Black.png', NULL, 4),
(29, 'Sueter_Atras_Black.png', NULL, 4),
(30, 'Sueter_1_Blue.png', NULL, 4),
(31, 'Sueter_Atras_Blue.png', NULL, 4),
(32, 'Sueter_1_Navy.png', NULL, 4),
(33, 'Sueter_Atras_Navy.png', NULL, 4),
(34, 'Sueter_1_Pink.png', NULL, 4),
(35, 'Sueter_Atras_Pink.png', NULL, 4),
(36, 'Sueter_1_Purple.png', 1, 4),
(37, 'Sueter_Atras_Purple.png', NULL, 4),
(38, 'Sueter_1_Red.png', NULL, 4),
(39, 'Sueter_Atras_Red.png', NULL, 4),
(40, 'Sueter_1_Teal.png', NULL, 4),
(41, 'Sueter_Atras_Teal.png', NULL, 4),
(42, 'Sueter_1_Violet.png', NULL, 4),
(43, 'Sueter_Atras_Violet.png', NULL, 4),
(44, 'Sueter_1_White.png', NULL, 4),
(45, 'Sueter_Atras_White.png', NULL, 4),
(46, 'Camisa_Polo_Black.png', NULL, 5),
(47, 'Camisa_Polo_Blue.png', 1, 5),
(48, 'Camisa_Polo_Blue.png', NULL, 5),
(49, 'Camisa_Polo_Pink.png', NULL, 5),
(50, 'Camisa_Polo_Purple.png', NULL, 5),
(51, 'Camisa_Polo_Red.png', NULL, 5),
(52, 'Camisa_Polo_Red.png', NULL, 5),
(53, 'Camisa_Polo_Violet.png', NULL, 5),
(54, 'Camisa_Polo_White,png', NULL, 5),
(55, 'Camisa_Black.png', NULL, 6),
(56, 'Camisa_Blue.png', NULL, 6),
(57, 'Camisa_Navy.png', NULL, 6),
(58, 'Camisa_Pink.png', NULL, 6),
(59, 'Camisa_Purple.png', 1, 6),
(60, 'Camisa_Red.png', NULL, 6),
(61, 'Camisa_Teal.png', NULL, 6),
(62, 'Camisa_Violet.png', NULL, 6),
(63, 'Camisa_White.png', NULL, 6),
(64, 'Garment_Bag_Black.png', NULL, 7),
(65, 'Garment_Bag_Blue.png', NULL, 7),
(66, 'Garment_Bag_Navy.png', NULL, 7),
(67, 'Garment_Bag_Pink.png', NULL, 7),
(68, 'Garment_Bag_Purple.png', NULL, 7),
(69, 'Garment_Bag_Red.png', 1, 7),
(70, 'Garment_Bag_Teal.png', NULL, 7),
(71, 'Garment_Bag_Violet.png', NULL, 7),
(72, 'Garment_Bag_White.png', NULL, 7),
(73, 'Gorra_Black.png', NULL, 8),
(74, 'Gorra_Blue.png', NULL, 8),
(75, 'Gorra_Navy.png', 1, 8),
(76, 'Gorra_Pink.png', NULL, 8),
(77, 'Gorra_Purple.png', NULL, 8),
(78, 'Gorra_Red.png', NULL, 8),
(79, 'Gorra_Teal.png', NULL, 8),
(80, 'Gorra_Violet.png', NULL, 8),
(81, 'Gorra_White.png', NULL, 8),
(82, 'Grooming_Apron_Black.png', NULL, 9),
(83, 'Grooming_Apron_Blue.png', NULL, 9),
(84, 'Grooming_Apron_Navy.png', NULL, 9),
(85, 'Grooming_Apron_Pink', NULL, 9),
(86, 'Grooming_Apron_Purple.png', NULL, 9),
(87, 'Grooming_Apron_Purple2.png', 1, 9),
(88, 'Grooming_Apron_Red.png', NULL, 9),
(89, 'Grooming_Apron_Teal.png', NULL, 9),
(90, 'Grooming_Apron_Violet.png', NULL, 9),
(91, 'Laptop_Sleeve_Black,png', 1, 10),
(92, 'Laptop_Sleeve_Blue.png', NULL, 10),
(93, 'Laptop_Sleeve_Navy.png', NULL, 10),
(94, 'Laptop_Sleeve_Pink.png', NULL, 10),
(95, 'Laptop_Sleeve_Purple.png', NULL, 10),
(96, 'Laptop_Sleeve_Red.png', NULL, 10),
(97, 'Laptop_Sleeve_Teal.png', NULL, 10),
(98, 'Laptop_Sleeve_Violet.png', NULL, 10),
(99, 'Laptop_Sleeve_White.png', NULL, 10),
(100, 'Table_Cover_Black.png', NULL, 11),
(101, 'Table_Cover_Blue', NULL, 11),
(102, 'Table_Cover_Navy.png', NULL, 11),
(103, 'Table_Cover_Pink.png', NULL, 11),
(104, 'Table_Cover_Purple.png', NULL, 11),
(105, 'Table_Cover_Red.png', NULL, 11),
(106, 'Table_Cover_Teal.png', 1, 11),
(107, 'Table_Cover_Violet.png', NULL, 11),
(108, 'Table_Cover_White.png', NULL, 11),
(109, 'Toalla_Black.png', NULL, 12),
(110, 'Toalla_Blue.png', NULL, 12),
(111, 'Toalla_Navy.png', NULL, 12),
(112, 'Toalla_Pink.png', NULL, 12),
(113, 'Toalla_Purple.png', NULL, 12),
(114, 'Toalla_Red.png', 1, 12),
(115, 'Toalla_Teal.png', NULL, 12),
(116, 'Toalla_Violet.png', NULL, 12),
(117, 'Toalla_White.png', NULL, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount` tinyint(1) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `fabric` varchar(100) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`idproduct`, `name`, `description`, `price`, `discount`, `discount_percentage`, `discount_price`, `sale`, `size`, `color`, `fabric`, `warranty`, `tags`, `idcategory`) VALUES
(1, 'Crate Cover 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'cover', 4),
(2, 'Crate Cover 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'cover', 4),
(3, 'Crate Cover 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'cover', 4),
(4, 'Sweater', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'sweater', 2),
(5, 'Polo Shirt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'shirt', 2),
(6, 'T-shirt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'shirt', 2),
(7, 'Garment Bag', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'bag', 1),
(8, 'Caps', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'caps', 2),
(9, 'Grooming Apron', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Purple2,Red,Teal,Violet', NULL, NULL, 'apron', 2),
(10, 'Laptop Sleeve', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'sleeve', 3),
(11, 'Table Cover', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'cover', 2),
(12, 'Towel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Black,Blue,Navy,Pink,Purple,Red,Teal,Violet,White', NULL, NULL, 'towel', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blunova_session`
--
ALTER TABLE `blunova_session`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idimagen`),
  ADD KEY `fk_image_product1_idx` (`idproduct`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`),
  ADD KEY `fk_producto_category1_idx` (`idcategory`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_product1` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_producto_category1` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
