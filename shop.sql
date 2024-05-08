
CREATE TABLE bunruis (
    id INT(11) AUTO_INCREMENT NOT NULL,
    bunrui_name  VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO `bunruis` (`id`, `bunrui_name`) 
VALUES (NULL, 'レディース'), (NULL, 'メンズ'),
(NULL, 'ベビー・キッズ'), (NULL, 'インテリア・住まい・小物'),
(NULL, '本・音楽・ゲーム'),(NULL, 'おもちゃ・ホビー・グッズ'),
(NULL, 'コスメ・香水・美容'),(NULL, '家電・スマホ・カメラ'),
(NULL, 'ハンドメイド'),(NULL, 'チケット'),(NULL, 'その他')
;
CREATE TABLE conditions (
    id INT(11) AUTO_INCREMENT NOT NULL, 
    cond_name  VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO `conditions` (`id`, `cond_name`) 
VALUES (NULL, '新品、未使用'),(NULL, '未使用に近い'),
(NULL, '目立った傷や汚れなし'),(NULL, 'やや傷や汚れあり'),
(NULL, '傷や汚れあり'),(NULL, '全体的に状態が悪い')
;
CREATE TABLE cart (
    id INT(11) AUTO_INCREMENT NOT NULL,
    custom_id INT(11) NOT NULL,
    shohin_id INT(11) NOT NULL,
    PRIMARY KEY (id) 
);
CREATE TABLE customer (
    id INT(11) AUTO_INCREMENT NOT NULL, 
    user VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE images (
    id INT(11) AUTO_INCREMENT NOT NULL,
    img_path VARCHAR(200),
    nowtime  GETDATE(),
    PRIMARY KEY (id) 
);
CREATE TABLE shohins(
    id INT(11) AUTO_INCREMENT NOT NULL,
    img_id INT(11) NOT NULL,
    name VARCHAR(200) NOT NULL,
    setumei VARCHAR(200) NOT NULL,
    bunrui_id INT(11) NOT NULL,
    cond_id INT(11) NOT NULL,
    kakaku INT(11) NOT NULL,
    PRIMARY KEY (id) 
);
CREATE TABLE sell (
    id INT(11) AUTO_INCREMENT NOT NULL, 
    custom_id INT(11) NOT NULL,
    shohin_id INT(11) NOT NULL,
    PRIMARY KEY (id)
);
