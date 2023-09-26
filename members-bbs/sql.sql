
-- DB作成
CREATE DATABASE IF NOT EXISTS php_jissen;

-- userテーブル作成
use php_jissen;
CREATE TABLE IF NOT EXISTS user ( 
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
  name VARCHAR(255) NOT NULL ,
  mail VARCHAR(255) UNIQUE NOT NULL ,
  password VARCHAR(255) NOT NULL
);

-- userテーブルの初期化
TRUNCATE TABLE user;
INSERT INTO user(name,mail,password) VALUES ('佐藤圭祐','satou@yahoo.com','$2y$10$vxyMjUxUyyEQiQd2SzLe.uqatkZ73oszQEVbY3GZj6Ai5XzCk/r3u');
INSERT INTO user(name,mail,password) VALUES ('鈴木順平','suzuki@yahoo.com','$2y$10$vxyMjUxUyyEQiQd2SzLe.uqatkZ73oszQEVbY3GZj6Ai5XzCk/r3u');
INSERT INTO user(name,mail,password) VALUES ('高橋隼人','takahashi@yahoo.com','$2y$10$vxyMjUxUyyEQiQd2SzLe.uqatkZ73oszQEVbY3GZj6Ai5XzCk/r3u');




-- postテーブル作成
use php_jissen;
CREATE TABLE IF NOT EXISTS post ( 
  user_id INT(11) NOT NULL ,
  title VARCHAR(255) NOT NULL ,
  comments VARCHAR(255) NOT NULL ,
  posted_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW(), 
  FOREIGN KEY(user_id) REFERENCES user(id) -- 外部キー制約
);


-- postテーブルの初期化
TRUNCATE TABLE post;
INSERT INTO post(user_id,title,comments) VALUES ('1','こんにちは！','HTMLとCSSは少しやったことがあります。よろしくお願いいたします。');
INSERT INTO post(user_id,title,comments) VALUES ('2','始めまして','よろしくお願いいたします。');
INSERT INTO post(user_id,title,comments) VALUES ('3','ヤッホー','お元気ですか？');