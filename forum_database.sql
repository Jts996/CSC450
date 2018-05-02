DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS reply;


CREATE TABLE post (post_id INT NOT NULL AUTO_INCREMENT,
             subject VARCHAR(1000) NOT NULL,
             date DATETIME NOT NULL,
             user_id INT NOT NULL,
             PRIMARY KEY (post_id),
             FOREIGN KEY (user_id) REFERENCES users(user_id))ENGINE = INNODB;

CREATE TABLE reply (reply_id INT NOT NULL AUTO_INCREMENT,
              subject VARCHAR(1000) NOT NULL,
              date DATETIME NOT NULL,
              user_id INT NOT NULL,
              post_id INT NOT NULL,
              PRIMARY KEY (reply_id),
              FOREIGN KEY (user_id) REFERENCES users(user_id),
              FOREIGN KEY (post_id) REFERENCES post(post_id))ENGINE = INNODB;
