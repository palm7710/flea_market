<?php session_start();?>
<?php
$cos_id = $_SESSION['customer']['id'];
$cart_result = $pdo->query("SELECT * FROM cart where custom_id = $cos_id");
//$sho_result = $pdo->query("SELECT * FROM shohins where id = $sho_id");

while($resister = $cart_result->fetch()){
$custom_id=$resister['custom_id'];
//var_dump($resister['shohin_id']);
}
if (isset($_SESSION['customer'])) {
$pdo=new PDO('mysql:host=mysql;dbname=;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
$cart_result = $pdo->query("SELECT * FROM cart where custom_id = $cos_id");

        while($cart = $cart_result->fetch()){
        $sho_id =$cart['shohin_id'];
        //var_dump($sho_id);
        $sho_result = $pdo->query("SELECT * FROM shohins where id = $sho_id");
        //var_dump($sho_result);
        foreach($sho_result as $row) {
            //var_dump($e_val);
        }
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
                    <p>お支払い金額：<?php echo $row['kakaku']+500; ?>円</p>
                    
                    <!-- <a class="btn btn-primary" href="dis-cart.php">購入</a>
                    <?php echo'<a class="btn btn-warning" href="favo-delete.php?id=',$id,'">削除</a>';?> -->
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}else{
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">ログインしてください。</p></main>';

}
?>
