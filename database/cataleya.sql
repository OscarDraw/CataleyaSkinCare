-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 13:59:09
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cataleya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `brand_info` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_info`) VALUES
(1, 'PielPerfectta', '100% Artesanales FABRICANTE\r\nNo IMITACIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `cart_user_id` bigint(20) NOT NULL,
  `cart_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `cart_user_id`, `cart_date`) VALUES
(1, 1, '2020-11-30 11:44:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_image` text CHARACTER SET utf8,
  `category_description` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`, `category_description`) VALUES
(1, 'Jabones', 'assets/products/jabon-romero.jpg', 'Jabones naturales al alcance de tu mano.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `comments_user` bigint(20) NOT NULL,
  `comments_content` text CHARACTER SET utf8 NOT NULL,
  `comments_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments_starts` tinyint(1) DEFAULT NULL,
  `comments_product_id` bigint(20) DEFAULT NULL,
  `comments_post_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `post_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_content` text CHARACTER SET utf8 NOT NULL,
  `post_image` text CHARACTER SET utf8,
  `post_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_price` bigint(20) NOT NULL DEFAULT '0',
  `product_discount` float NOT NULL DEFAULT '0',
  `product_info` text CHARACTER SET utf8,
  `product_stock` int(11) NOT NULL DEFAULT '0',
  `product_category` bigint(20) DEFAULT NULL,
  `product_brand` bigint(20) DEFAULT NULL,
  `product_status` tinyint(1) NOT NULL DEFAULT '1',
  `product_image` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_discount`, `product_info`, `product_stock`, `product_category`, `product_brand`, `product_status`, `product_image`) VALUES
(1, 'Jabón de romero', 20000, 50, 'Nuestro jabón de Romero en su nueva edición.\r\nHecho a base de Romero vitamina E,árbol de té.\r\nNuestro jabón es ideal para pieles grasas elimina y controla el exceso de grasa en tu rostro.', 20, 1, 1, 1, 'assets\\img\\products\\jabon-romero.jpg'),
(2, 'Aceite de Argán', 28900, 20, 'Aceite de Argán', 30, 1, 1, 1, 'assets\\img\\products\\2.jpg'),
(3, 'Arcilla Mineral', 50000, 10, 'Arcilla Mineral', 12, 1, 1, 1, 'assets\\img\\products\\3.jpg'),
(4, 'Kit piel perfecta', 89500, 30, 'Tu piel y tú merecen lo mejor\r\n\r\n', 15, 1, 1, 1, 'assets\\img\\products\\1.jpg'),
(5, 'Kit Olor de Rosas', 80000, 30, 'Huele a belleza', 47, 1, 1, 1, 'assets\\img\\products\\4.jpg'),
(6, 'Crema Piel Perfecta', 39900, 35, 'Crema Piel Perfecta', 10, 1, 1, 1, 'assets\\img\\products\\6.jpg'),
(7, 'Jabon de Coco', 18920, 20, 'Jabon de Coco', 28, 1, 1, 1, 'assets\\img\\products\\8.jpg'),
(8, 'Spray Maravillas', 38900, 30, 'Spray Maravillas', 24, 1, 1, 1, 'assets\\img\\products\\9.jpg'),
(9, 'Jabon de Otoño', 47500, 10, 'Jabon de Otoño', 1, 1, 1, 1, 'assets\\img\\products\\10.jpg');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_cart`
--

CREATE TABLE `product_cart` (
  `id` bigint(20) NOT NULL,
  `product_cart_cart_id` bigint(20) NOT NULL,
  `product_cart_product_id` bigint(20) NOT NULL,
  `product_cart_quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_cart`
--

INSERT INTO `product_cart` (`id`, `product_cart_cart_id`, `product_cart_product_id`, `product_cart_quantity`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_password`, `user_email`, `user_address`, `user_is_admin`) VALUES
(1, 'OScar Pulido', 'oscar', 'oscar', NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user_id` (`cart_user_id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id` (`comments_post_id`),
  ADD KEY `comments_product_id` (`comments_product_id`),
  ADD KEY `comments_user` (`comments_user`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_id` (`post_user_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category` (`product_category`),
  ADD KEY `product_brand` (`product_brand`);

--
-- Indices de la tabla `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cart_cart_id` (`product_cart_cart_id`),
  ADD KEY `product_cart_product_id` (`product_cart_product_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cart_user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`comments_post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`comments_product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`comments_user`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`post_user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_brand`) REFERENCES `brand` (`id`);

--
-- Filtros para la tabla `product_cart`
--
ALTER TABLE `product_cart`
  ADD CONSTRAINT `product_cart_ibfk_1` FOREIGN KEY (`product_cart_cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `product_cart_ibfk_2` FOREIGN KEY (`product_cart_product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
