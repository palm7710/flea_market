<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
<?php

$pdo=new PDO('mysql:host=mysql;dbname=;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
if (isset($_SESSION['customer'])) {
    $sea_sql= $pdo->prepare('select * from shohins where id=?');
    $sea_sql->execute([$_REQUEST['id']]);
    foreach ($sea_sql as $row) {
    ?> 
    <div class="card mb-3" style="text-align:center;margin: 0 auto;" width=240px>
                <?php
                $id = $_row['id'];
                $img_path=$row['img_path'];
                $name = $row['name'];
                $bunrui = $row['bunrui'];
                $setumei = $row['setumei'];
                $condition = $row['condition'];
                $kakaku = $row['kakaku'];
                ?>
                <div class="card-body"> 
                                    
                    <p><span class="badge bg-danger">確認画面</span> -> 購入完了</p></br>
                    <div class="row no-gutters">
                    <div class="col-md-4 my-auto">
                        <img class="card-img" src="<?php echo $img_path;?>">
                    </div>    
                <div class="col-md-8">
                <h5 class="card-title"><?php echo $name; ?><p style="color:#808080;"><?php echo $bunrui; ?></p></h5>
                    <p>説明：<?php echo $setumei; ?></br>
                    状態：<?php echo $condition; ?></p>
                    <p>価格：<?php echo $kakaku; ?>円</p>
                    
                    <h3>合計：<?php echo $kakaku+500; ?>円</h3>
                    <p>＊送料：全国一律500円</p>
                    
                </div>       
                </div>
                <hr>     
                <h4>お客様情報</h4>
                <p>名前：<?php echo $_SESSION['customer']['user'];?></p>
                <p>住所:
                <?php 
                    $cos_id = $_SESSION['customer']['id'];
                    $in_result = $pdo->query("SELECT addr_id FROM info where cust_id = $cos_id");
                    while($info = $in_result->fetch()){
                    $add_id = $info['addr_id'];
                    // var_dump($info['addr_id']);
                    }
                    if(!empty($add_id)){
                    $ad_result = $pdo->query("SELECT * FROM address where ID = $add_id");
                    while($address = $ad_result->fetch()){
                    // var_dump($address);
                    echo '〒',$address['zipcode'],$address['pref'],$address['addr1'], $address['addr2'];
                    }
                    ?>
                    
                </p> 
                <hr>
                    <a class="btn btn-primary" href="cart-submit.php">購入する</a>
                    <a class="btn btn-danger" href="javascript:history.back()">戻る</a>
                    <?php
                }else{
                    echo '<a href="destination.php">住所を登録してください</a>';
                    ?>
                    </p> 
                    <hr>
                    <a class="btn btn-primary" href="destination.php">住所を登録する</a>
                    <a class="btn btn-danger" href="javascript:history.back()">戻る</a>
                    <?php
                    }?>
                </div>   
    <?php
    $_REQUEST['id'] = $id;
                }
} else {
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">ログインしてください。</p></main>';
}

?>
<?php require 'footer.php';?>
