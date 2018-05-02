DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS reply;
DROP TABLE IF EXISTS topic;


CREATE TABLE topic (topic_id INT NOT NULL AUTO_INCREMENT,
              title VARCHAR(150) NOT NULL,
              date DATETIME NOT NULL,
              created_by_user_id INT NOT NULL,
              PRIMARY KEY (topic_id),
              FOREIGN KEY (created_by_user_id) REFERENCES users(user_id))ENGINE = INNODB;


CREATE TABLE post (post_id INT NOT NULL AUTO_INCREMENT,
             post_content text NOT NULL,
             date DATETIME NOT NULL,
             posted_by_user_id INT NOT NULL,
             topic INT NOT NULL,
             PRIMARY KEY (post_id),
             FOREIGN KEY (posted_by_user_id) REFERENCES users(user_id),
             FOREIGN KEY (topic) REFERENCES topic(topic_id))ENGINE = INNODB;

CREATE TABLE reply (reply_id INT NOT NULL AUTO_INCREMENT,
              reply_content TEXT NOT NULL,
              date DATETIME NOT NULL,
              posted_by_user_id INT NOT NULL,
              post_id INT NOT NULL,
              PRIMARY KEY (reply_id),
              FOREIGN KEY (posted_by_user_id) REFERENCES users(user_id),
              FOREIGN KEY (post_id) REFERENCES post(post_id))ENGINE = INNODB;
