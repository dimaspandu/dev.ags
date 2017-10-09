/*DATABASE: ags_content*/

CREATE TABLE `admin`(
	admin_ID INT NOT NULL AUTO_INCREMENT primary key,
	username varchar(150) DEFAULT NULL,
	password varchar(100) DEFAULT NULL
);
INSERT INTO `admin` VALUES('', 'admin', md5('admin123'));

CREATE TABLE about_us_main(
	aum_ID INT NOT NULL AUTO_INCREMENT primary key,
	aum_image blob DEFAULT NULL,
	title varchar(150) DEFAULT NULL,
	paragraph text DEFAULT NULL
);
INSERT INTO about_us_main VALUES('', 'http://placehold.it/470x400', 'Suspendisse convallis, dolor ac eleifend faucibus, arcu massa pellentesque justo', 'Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Nunc facilisis id nunc blandit interdum. Sed convallis vel enim sit amet dictum. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lobortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue. Morbi arcu ante, vestibulum ac metus sed, commodo sollicitudin ligula. Duis justo massa, rutrum vel lectus sit amet, cursus pretium nulla.');
INSERT INTO about_us_main VALUES('', 'http://placehold.it/500x380', 'Nunc facilisis id nunc blandit interdum', 'Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Nunc facilisis id nunc blandit interdum. Sed convallis vel enim sit amet dictum. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lobortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue. Morbi arcu ante, vestibulum ac metus sed, commodo sollicitudin ligula. Duis justo massa, rutrum vel lectus sit amet, cursus pretium nulla.');
INSERT INTO about_us_main VALUES('', 'http://placehold.it/470x320', 'Maecenas hendrerit purus tincidunt feugiat iaculis', 'Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lobortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue.');

CREATE TABLE about_us_videos(
	auv_ID INT NOT NULL AUTO_INCREMENT primary key,
	link varchar(150) DEFAULT NULL
);
ALTER TABLE about_us_videos add thumbnail_image blob;
INSERT INTO about_us_videos VALUES('', 'https://www.youtube.com/watch?v=L1bruVSY8LE&amp;fs=1&amp;autoplay=1', 'http://placehold.it/292x176');

CREATE TABLE contact_us(
	cu_ID INT NOT NULL AUTO_INCREMENT primary key,
	information varchar(255) DEFAULT NULL,
	address varchar(255) DEFAULT NULL,
	email varchar(150) DEFAULT NULL,
	phone varchar(150) DEFAULT NULL,
	business_hours mediumtext DEFAULT NULL,
	lat_x varchar(150) DEFAULT NULL,
	lat_y varchar(150) DEFAULT NULL
);
INSERT INTO  contact_us VALUES(
	'', 
	'Quisque leo velit, laoreet vel turpis id', 
	'Lorem Ipsum, Dolor, Jakarta, Indonesia', 
	'artha.guna@ags.com', 
	'(765)-130-7804', 
	'<p>Monday-Friday: 8am to 6pm</p><p>Saturday: 10am to 2pm</p><p>Sunday: Closed</p><p>Support 24/7</p>', 
	'40.440128', 
	'-79.974326'
);

CREATE TABLE category(
	ct_ID INT NOT NULL AUTO_INCREMENT primary key,
	category_name varchar(150) DEFAULT NULL
);
INSERT INTO category VALUES('', 'CATEGORY 1');
INSERT INTO category VALUES('', 'CATEGORY 2');
INSERT INTO category VALUES('', 'CATEGORY 3');
INSERT INTO category VALUES('', 'CATEGORY 4');
INSERT INTO category VALUES('', 'CATEGORY 5');

CREATE TABLE catalog_special_deals(
	csd_ID INT NOT NULL AUTO_INCREMENT primary key,
	status enum('0', '1') DEFAULT NULL,
	title varchar(150) DEFAULT NULL,
	sub_title varchar(150) DEFAULT NULL,
	special_product_image blob DEFAULT NULL
);
INSERT INTO catalog_special_deals VALUES(
	'',
	'1',
	'TREASURE COMING',
	'NEW ITEM',
	'asset/special-item.png'
);

CREATE TABLE product(
	product_ID INT NOT NULL AUTO_INCREMENT primary key,
	ct_ID INT NOT NULL,
	product_name varchar(150) DEFAULT NULL,
	product_image_1 blob DEFAULT NULL,
	product_image_2 blob DEFAULT NULL,
	product_image_3 blob DEFAULT NULL,
	product_image_4 blob DEFAULT NULL,
	description text DEFAULT NULL
);
INSERT INTO product VALUES(
	'',
	'2',
	'Product Name',
	'asset/product/290-327-1.png',
	'asset/product/290-327-2.png',
	'asset/product/290-327-3.png',
	'asset/product/290-327-4.png',
	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, debitis, autem, aspernatur sapiente velit minus vitae tempora nemo optio possimus necessitatibus ex earum aperiam illum soluta obcaecati reprehenderit provident facere. Celit minus vitae tempora nemo optio possimus necessitatibus ex earum aperiam illum soluta obcaecati reprehenderit provident facere. Atque, neque, dolorum dolore est distinctio omnis architecto vel. Quis, ratione, neque, maiores quas facilis nam laborum fuga odio a deserunt error iure facere exercitationem dolorem numquam reprehenderit assumenda pariatur quidem deleniti ducimus porro labore quod veniam. Dolore, totam sunt architecto possimus consectetur consequuntur.'
);

CREATE TABLE product_feature(
	pf_ID INT NOT NULL AUTO_INCREMENT primary key,
	product_ID INT NOT NULL,
	label varchar(150) DEFAULT NULL,
	field varchar(255) DEFAULT NULL
);
INSERT INTO product_feature VALUES('', '1', 'Lorem', '4 Lorem');
INSERT INTO product_feature VALUES('', '1', 'Sit', '101N5000 (sit)');
INSERT INTO product_feature VALUES('', '1', 'Ipsum', '62/6000 Ipsum');
INSERT INTO product_feature VALUES('', '1', 'Amet (ml)', '1000 Amet');
INSERT INTO product_feature VALUES('', '1', 'Dolor', '2 Dolor');

CREATE TABLE product_reviews(
	pr_ID INT NOT NULL AUTO_INCREMENT primary key,
	product_ID INT NOT NULL,
	name varchar(150) DEFAULT NULL,
	rate int(1) DEFAULT NULL,
	review mediumtext DEFAULT NULL
);
INSERT INTO product_reviews VALUES('', '1', 'Guna Saputra', '4', 'Praesent libero dui, consequat nec placerat id, cursus at metus. 
Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque. 
Ut tincidunt magna sit amet felis dictum efficitur.');
INSERT INTO product_reviews VALUES('', '1', 'Guna Saputra', '4', 'Praesent libero dui, consequat nec placerat id, cursus at metus. 
Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque. 
Ut tincidunt magna sit amet felis dictum efficitur.');
INSERT INTO product_reviews VALUES('', '1', 'Guna Saputra', '4', 'Praesent libero dui, consequat nec placerat id, cursus at metus. 
Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque. 
Ut tincidunt magna sit amet felis dictum efficitur.');
INSERT INTO product_reviews VALUES('', '1', 'Guna Saputra', '4', 'Praesent libero dui, consequat nec placerat id, cursus at metus. 
Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque. 
Ut tincidunt magna sit amet felis dictum efficitur.');