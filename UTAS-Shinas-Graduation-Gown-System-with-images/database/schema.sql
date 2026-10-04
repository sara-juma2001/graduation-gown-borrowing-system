CREATE DATABASE graduation_gown_system;
USE graduation_gown_system;

CREATE TABLE graduates (
  graduate_id INT AUTO_INCREMENT PRIMARY KEY,
  student_id VARCHAR(50) UNIQUE NOT NULL,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(120) UNIQUE NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  is_eligible BOOLEAN DEFAULT TRUE
);

CREATE TABLE admins (
  admin_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(120) UNIQUE NOT NULL,
  password_hash VARCHAR(255) NOT NULL
);

CREATE TABLE gowns (
  gown_id INT AUTO_INCREMENT PRIMARY KEY,
  size ENUM('Small','Medium','Large') NOT NULL,
  quantity INT NOT NULL DEFAULT 0,
  available_quantity INT NOT NULL DEFAULT 0
);

CREATE TABLE borrowing_requests (
  request_id INT AUTO_INCREMENT PRIMARY KEY,
  graduate_id INT NOT NULL,
  gown_id INT NOT NULL,
  request_date DATETIME DEFAULT CURRENT_TIMESTAMP,
  status ENUM('Pending','Approved','Rejected') DEFAULT 'Pending',
  FOREIGN KEY (graduate_id) REFERENCES graduates(graduate_id),
  FOREIGN KEY (gown_id) REFERENCES gowns(gown_id)
);

CREATE TABLE returns (
  return_id INT AUTO_INCREMENT PRIMARY KEY,
  request_id INT NOT NULL,
  return_date DATETIME NULL,
  status ENUM('Pending','Returned') DEFAULT 'Pending',
  FOREIGN KEY (request_id) REFERENCES borrowing_requests(request_id)
);

CREATE TABLE notifications (
  notification_id INT AUTO_INCREMENT PRIMARY KEY,
  graduate_id INT NOT NULL,
  message VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  is_read BOOLEAN DEFAULT FALSE,
  FOREIGN KEY (graduate_id) REFERENCES graduates(graduate_id)
);

INSERT INTO gowns(size,quantity,available_quantity) VALUES
('Small',10,10),('Medium',15,15),('Large',8,8);
