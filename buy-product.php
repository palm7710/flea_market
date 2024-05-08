<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
<?php
$pdo=new PDO('mysql:host=mysql;dbname='';charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');

//カートテーブルから商品リストを抽出したい
$ca_result = $pdo->query("SELECT * FROM cart where shohin_id");

    while($resister = $ca_result->fetch()){
    $shohin_id=$resister['shohin_id'];
    //var_dump($resister['shohin_id']);
    
//カートテーブルから抽出した商品と、出品テーブルの""ログインしている顧客のIDの""商品を抽出したい
$cus_id = $_SESSION['customer']['id'];
//var_dump($cus_id);
$sell_result = $pdo->query("SELECT * FROM sell where custom_id = $cus_id and shohin_id = $shohin_id");
//var_dump($sell_result);
        while($sell = $sell_result->fetch()){
        $sho_id =$sell['shohin_id'];
        //var_dump($sho_id);
        $sho_result = $pdo->query("SELECT * FROM shohins where id = $sho_id");
        //var_dump($sho_result);
        
        foreach($sho_result as $row) {
            //var_dump($e_val);
        
    $id=$row['id'];
    ?>
    <div class="card mb-3" width=240px>
            <div class="row no-gutters">
                <div class="col-md-4 my-auto">
                <img class="card-img" src="<?php echo $row['img_path'];?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <p style="color:#808080;"><?php echo $row['bunrui']; ?></p>
                    <p>説明：<?php echo $row['setumei']; ?></p>
                    <p>状態：<?php echo $row['condition']; ?></p>
                    <p>お取引金額：<?php echo $row['kakaku']; ?>円</p>
                    
                    <!-- <a class="btn btn-primary" href="dis-cart.php">購入</a>
                    <?php echo'<a class="btn btn-warning" href="favo-delete.php?id=',$id,'">削除</a>';?> -->
                    </div>
                </div>
            </div>
        </div>
    <?php

}
}
}
if(!isset($sho_id)){
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">購入された商品はありません。</br>';
    echo '他にも商品を出品してみてください。</p></main>';
    echo '</hr>';
}

//}else{
    
//}
//}
// }else{
//     echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">ログインしてください。</p></main>';

// }
//}else{
    //echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">エラーが発生しました。</p></main>';
    //echo '</hr>';
//}
?>
<?php require 'footer.php';?>
