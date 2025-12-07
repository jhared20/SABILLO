-- Create the registration_db database if it doesn't exist
CREATE DATABASE IF NOT EXISTS registration_db;

-- Use the registration_db database
USE registration_db;

-- Create the sales table
CREATE TABLE IF NOT EXISTS sales (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer VARCHAR(255) NOT NULL,
  product VARCHAR(255) NOT NULL,
  quantity FLOAT NOT NULL,
  price FLOAT NOT NULL,
  total FLOAT NOT NULL,
  payment_mode VARCHAR(255),
  member_type VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
