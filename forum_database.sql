CREATE TABLE IF NOT EXISTS topic (topic_id INT NOT NULL AUTO_INCREMENT,
              title VARCHAR(150) NOT NULL,
              user_email VARCHAR(80) NOT NULL,
              date DATETIME NOT NULL,
              PRIMARY KEY (topic_id))ENGINE = INNODB;


CREATE TABLE IF NOT EXISTS reply (reply_id INT NOT NULL AUTO_INCREMENT,
             post_content text NOT NULL,
             user_email VARCHAR(80) NOT NULL,
             date DATETIME NOT NULL,
             topic INT NOT NULL,
             PRIMARY KEY (reply_id),
             FOREIGN KEY (topic) REFERENCES topic(topic_id))ENGINE = INNODB;
