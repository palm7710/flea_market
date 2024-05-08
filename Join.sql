SELECT 
sell.custom_id,
customer.id
FROM  sell
INNER JOIN customer
ON sell.custom_id = customer.id

[結果]
se.cus_id	cost.id
        3          3
        3          3
        3          3
        3          3

SELECT 
sell.shohin_id,
shohins.id
FROM  sell
INNER JOIN shohins
ON sell.shohin_id = shohins.id

[結果]
se.sho_id sho.id	
        1       1
        2       2
        3       3
        4       4


[[sellテーブル(合体)]]
出品ID  cos_id  sho_id  
    1       3       1
    2       3       2
    3       3       3
    4       1       4
    5       1       5



[stockテーブル]  
id	name kakaku

[shohins テーブル]
id	img_id	name  setumei  bunrui_id  cond_id  kakaku

SELECT 
stock.id,
shohins.id
FROM  stock
INNER JOIN shohins
ON stock.id = shohins.id

SELECT stock.name, shohins.name FROM stock INNER JOIN shohins ON stock.name = shohins.name;
SELECT stock.kakaku, shohins.kakaku FROM stock INNER JOIN shohins ON stock.kakaku = shohins.kakaku;

shohinsをコピーしてviewshohinを作成
CREATE TABLE viewshohin AS SELECT * FROM shohins


[viewshohin.img.id<-images] 結合
SELECT * FROM viewshohin INNER JOIN images ON viewshohin.img_id = images.id;

id	img_id	name  setumei  bunrui_id cond_id kakaku	"id	img_path  uptime" <-new	

[×]
SELECT
viewshohin.id,
viewshohin.img_id as images.id,
viewshohin.name,
viewshohin.setumei,
viewshohin.bunrui_id,
viewshohin.cond_id,
viewshohin.kakaku,
images.img_path,
images.uptime
FROM
    viewshohin
JOIN
    images
ON
    viewshohin.img_id = images.id;

ALTER TABLE `viewshohin` CHANGE `uptime` `uptime` DATETIME(11) NOT NULL;
ALTER TABLE `images` CHANGE `uptime` `uptime` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;    

[viewshohin_bunsui.id<-bunruis] 結合
SELECT * FROM viewshohin LEFT OUTER JOIN bunruis ON viewshohin.bunrui_id = bunruis.id;

id	img_id	name	setumei	bunrui_id	cond_id	kakaku	id	bunrui_name


SELECT mastershohin.img_path, images.img_path FROM mastershohin INNER JOIN images 
ON mastershohin.img_path = images.img_path;

[結合]
img_path	img_path	
upload/img_01.jpg upload/img_01.jpg
upload/25201495_s.jpg upload/25201495_s.jpg
upload/4542560_s.jpg upload/4542560_s.jpg
upload/25280197_s.jpg upload/25280197_s.jpg
upload/25256332_s.jpg upload/25256332_s.jpg

SELECT mastershohin.uptime, images.uptime FROM mastershohin INNER JOIN images 
ON mastershohin.uptime = images.uptime;

[結合]
OK

[[mastershohin結合確認]]
id -> ok
img_id -> ok
img_path ->OK	
uptime ->ok	
name ->	ok
setumei	->ok
bunrui_id ->ok
cond_id	->ok
kakaku ->ok

[[stock結合]]
id->ok
name->ok
kakaku->ok

upload/img_01.jpg
2023-01-23 17:42:54
2
upload/25201495_s.jpg
2023-01-23 19:21:46
3
upload/4542560_s.jpg
2023-01-23 19:22:21
4
upload/25280197_s.jpg
2023-01-23 19:23:02
5
upload/25369906_s.jpg
2023-01-24 12:59:22
6
upload/25256332_s.jpg
2023-01-24 13:00:04
7
upload/25336897_s.jpg
2023-01-24 16:54:24
8
upload/25377563_s.jpg
2023-01-26 02:19:05
9
upload/25303126_s.jpg
2023-01-26 02:20:12
10
upload/25185737_s.jpg



