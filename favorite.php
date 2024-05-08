<?php session_start();?>
<?php

$cos_id = $_SESSION['customer']['id'];
$favo_result = $pdo->query("SELECT * FROM favorite where custo_id = $cos_id");
//$sho_result = $pdo->query("SELECT * FROM shohins where id = $sho_id");

while($resister = $favo_result->fetch()){
$custom_id=$resister['custo_id'];
//var_dump($resister['shohin_id']);
}
if (isset($_SESSION['customer'])) {
$pdo=new PDO('mysql:host=mysql;dbname=;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
$favo_result = $pdo->query("SELECT * FROM favorite where custo_id = $cos_id");

        while($favorite = $favo_result->fetch()){
        $sho_id =$favorite['shohin_id'];
        //var_dump($sho_id);
        $sho_result = $pdo->query("SELECT * FROM shohins where id = $sho_id");
        //var_dump($sho_result);
        foreach($sho_result as $row) {
            //var_dump($row);
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
                    <p>価格：<?php echo $row['kakaku']; ?>円</p>
                    <?php
                    $_SESSION['id'] =$id;
                    echo '<a class="btn btn-primary" href="dis-cart.php?id='.$_SESSION['id'].'">購入</a>';
                    echo'<a class="btn btn-warning" id='.$id.' href="dis-saku.php?id='.$_SESSION['id'].'">削除</a>';
                    
                    ?>
                    
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
