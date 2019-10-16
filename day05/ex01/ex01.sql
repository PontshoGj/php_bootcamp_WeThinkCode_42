CREATE TABLE IF NOT EXISTS ft_table(
    id  INT(255) AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) DEFAULT 'toto' NOT NULL,
    grp ENUM('staff', 'student', 'other') NOT NULL,
    creation_date DATE NOT NULL);