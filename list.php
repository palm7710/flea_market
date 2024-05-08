
<?php
$pdo=new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_22109;charset=utf8','cbcgict_232022', 'CbcGict2022');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
$sho_sql ="SELECT * FROM shohins";
echo '<div class="row">';   
foreach($pdo->query($sho_sql) as $s_val) {
    ?>
    <ul>
    </ul>
    <div class="list-card">
        <div class="list-frame">
        <img src="<?php echo $s_val['img_path'];?>" class="img img-responsive" />
        </div>
        <div class="list-textbox">
        <div class="list-title">
        タイトルがはいります。タイトルがはいります。
        </div>
        <div class="list-view">
        概要がはいります。概要がはいります。概要がはいります。概要がはいります。
        </div>
        </div>
    </div>
    <?php

    }
    //echo $id[$i]=rand(0,$count);
?>
</div>
<!-- $count = $sho_result->rowCount();
    var_dump($count); -->

<!-- for($i=1;$i<10;$i++){
            $id[$i] =rand(1,$count);
            echo $id[$i];
            echo $a_val['name'];
            if($i%3==0){
                echo "</br>";
            }
        } -->