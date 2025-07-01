
CREATE TABLE contacts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  message TEXT NOT NULL
);
CREATE TABLE `users` (
    `id` int( 11) NOT NULL AUTO_INCREMENT,
    'first_name' VARCHAR(50),
    'last_name' VARCHAR(50),
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `otp` varchar(6) NOT NULL,
    PRIMARY KEY (`id`)
);
CREATE TABLE get_started (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone VARCHAR(20),
    city VARCHAR(50),
    capital VARCHAR(50),
    experience VARCHAR(50),
    batch VARCHAR(50),
    payment VARCHAR(50),
    terms VARCHAR(10)
);
CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(20),
    course VARCHAR(50)
);
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(100),
    message TEXT
);
CREATE TABLE comments (
    id INT AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    comment TEXT,
    PRIMARY KEY (id)
);
CREATE TABLE enrollments (
    id INT AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    PRIMARY KEY (id)
);
CREATE TABLE messages (
    id INT AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    message TEXT,
    PRIMARY KEY (id)
);