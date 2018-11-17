CREATE TABLE `product_categories` (
  `id` int(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_date`) VALUES
(1, 'Peralatan Mandi', '2014-11-22 12:45:34'),
(2, 'Minuman Kemasan', '2014-11-22 12:46:34'),
(3, 'Produk Susu', '2014-11-22 12:47:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_categories`
--

ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);


CREATE TABLE `products` (
  `id` int(3) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `created_date`) VALUES
(1, 'Sabun Wangi', 1, '2014-12-22 12:45:34'),
(2, 'Minuman Cola', 2, '2014-12-22 12:45:36'),
(3, 'Prenagon Gold', 3, '2014-12-22 12:46:34'),
(5, 'Aquaa', 2, '2014-12-22 12:47:34'),
(6, 'The Botol', 2, '2014-12-22 12:48:34'),
(7, 'Sampo', 1, '2014-12-22 12:48:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

ALTER TABLE products ADD FOREIGN KEY (category_id) REFERENCES product_categories(id);




-- Menampilkan Data
SELECT product_categories.id AS id, product_categories.name AS name, GROUP_CONCAT(products.name SEPARATOR ',') AS name_product FROM product_categories LEFT JOIN products ON product_categories.id=products.category_id GROUP BY product_categories.id