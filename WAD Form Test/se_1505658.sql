CREATE TABLE se_1505408_student(
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  studentId VARCHAR(3) UNIQUE NOT NULL,
  name VARCHAR(25) NOT NULL,
  email VARCHAR(30) UNIQUE NOT NULL
);
INSERT INTO se_1505408_student(studentId,name,email)
VALUES ("702", "Aaron Chia", "aaron@school.my");
INSERT INTO se_1505408_student(studentId,name,email)
VALUES ("712", "Samuel Issac", "samuel@school.my");
INSERT INTO se_1505408_student(studentId,name,email)
VALUES ("777", "Allia Hassan", "allia@school.my");
INSERT INTO se_1505408_student(studentId,name,email)
VALUES ("789", "Vinoth Kumar", "vinoth@school.my");
INSERT INTO se_1505408_student(studentId,name,email)
VALUES ("795", "Daphne Ong", "daphne@school.my");
INSERT INTO se_1505408_student(studentId,name,email)
VALUES ("798", "Yong Wai Mun", "yongwm@school.my");
