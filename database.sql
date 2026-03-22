

CREATE TABLE messages (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100),
message TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
customer_name VARCHAR(100),
phone VARCHAR(20),
address TEXT,
delivery_date DATE,
product VARCHAR(100),
quantity INT,
payment_method VARCHAR(50),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
email VARCHAR(100),
password VARCHAR(255),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);