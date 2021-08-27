CREATE TABLE cats(
  id int unsigned not null AUTO_INCREMENT,
  `name` varchar(255) not null,
  created_at datetime not null Default now(),
  primary key (id)
);

CREATE TABLE products(
  id int unsigned not null AUTO_INCREMENT,
  `name` varchar(255) not null,
  `desc` text not null,
  price decimal(8,2) not null,
  pieces_no smallint not null,
  img varchar(255) not null,
  cat_id int unsigned,
  created_at datetime not null Default now(),
  primary key (id),
  foreign key (cat_id) references cats(id) on delete set null
);

CREATE TABLE orders(
  id int unsigned not null AUTO_INCREMENT,
  `name` varchar(255) not null,
  email varchar(255),
  phone varchar(255) not null,
  `address` varchar(255),
  `status` enum('pending' , 'approved' , 'canceled') not null default 'pending',
  created_at datetime not null Default now(),
  primary key (id)
);

CREATE TABLE order_details(
  id int unsigned not null AUTO_INCREMENT,
  order_id int unsigned,
  product_id int unsigned,
  qty int not null,
  primary key (id),
  foreign key (order_id) references orders(id) on delete set null,
  foreign key (product_id) references products(id) on delete set null
);

CREATE TABLE admins(
  id int unsigned not null AUTO_INCREMENT,
  `name` varchar(255) not null,
  email varchar(255) not null,
  `password` varchar(255) not null,
  is_super enum('yes' , 'no') not null default 'no',
  created_at datetime not null Default now(),
  primary key (id)
);