ALTER DATABASE store CHARACTER SET utf8 COLLATE utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE products (
    product_id int(11) PRIMARY KEY auto_increment,
    name varchar(255),
    image varchar(500) ,
    price double
)ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE users (
    user_id integer(11) PRIMARY KEY not null auto_increment,
    name varchar(255) ,
    email varchar(255) ,
    password varchar(255) ,
    contact varchar(255) ,
    address varchar(255),
    role varchar(255) not null
)ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE orders(
	order_id integer(11) PRIMARY KEY auto_increment ,
	user_id int(11),
	name varchar(255) ,
	phone varchar(255) ,
	address varchar(255) ,
	method varchar(255) ,
	total double  ,
	created_at varchar(255),
    status varchar(255) ,
    FOREIGN KEY (user_id) REFERENCES users(user_id) on delete cascade on update cascade
)ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE carts(
    cart_id integer (11) not null auto_increment primary key,
    user_id integer(11) ,
    product_id integer(11),
    quantity integer(11) ,
    order_id int(11) ,
    size integer(11) ,
    color varchar(255) ,
    totalPrice double,
    status varchar(255)  ,
    FOREIGN KEY (user_id) REFERENCES users(user_id) on delete cascade on update cascade ,
    FOREIGN KEY (product_id) REFERENCES products(product_id) on delete cascade on update cascade,
    FOREIGN KEY (order_id) REFERENCES orders(order_id) on delete cascade on update cascade
)ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



--
-- Dumping data for table `products`
--

INSERT INTO `products`(`product_id`, `name`,`image`, `price`) VALUES
(1, 'W300', 'images/1.jpg', 1950000),
(2, 'W122', 'images/2.jpg', 2650000),
(3, 'W443', 'images/3.jpg', 2900000),
(4, 'W312', 'images/4.jpg', 1800000),
(5, 'W081', 'images/5.jpg', 2930000),
(6, 'W937', 'images/6.jpg', 1990000),
(7, 'W912', 'images/7.jpg', 2700000),
(8, 'W422', 'images/8.jpg', 1990000),
(9, 'W917', 'images/9.jpg', 2000000),
(10, 'W234', 'images/10.jpg', 1480000),
(11, 'W611', 'images/11.jpg', 3600000),
(12, 'W061', 'images/12.jpg', 5100000),
(13, 'W236', 'images/13.jpg', 4100000),
(14, 'W717', 'images/14.jpg', 2500000),
(15, 'W474', 'images/15.jpg', 2900000);




--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `contact`, `address`, `role`) VALUES
