<form action="des-send.php" method="post">
<?php
$pdo=new PDO('mysql:host=mysql;dbname=;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
// $item = $s_entry where('costom_id', $cos_id)->first();

$cos_id = $_SESSION['customer']['id'];
$se_result = $pdo->query("SELECT * FROM sell where custom_id = $cos_id");
//$sho_result = $pdo->query("SELECT * FROM shohins where id = $sho_id");

while($resister = $se_result->fetch()){
$custom_id=$resister['custom_id'];
//var_dump($resister['shohin_id']);
}

//var_dump($sho_list);
if($custom_id == true){
    echo $_SESSION['customer']['user'], 'さんの商品リスト<br>'; 

        $sell_result = $pdo->query("SELECT * FROM sell where custom_id = $cos_id");

        while($sell = $sell_result->fetch()){
        $sho_id =$sell['shohin_id'];
        //var_dump($sho_id);
        $sho_result = $pdo->query("SELECT * FROM shohins where id = $sho_id");
        //var_dump($sho_result);
        foreach($sho_result as $e_val) {
            //var_dump($e_val);
        }
        $id=$e_val['id'];
        ?>
        <div class="card mb-3" width=240px>
            <div class="row no-gutters">
                <div class="col-md-4 my-auto">
                <img class="card-img" src="<?php echo $e_val['img_path'];?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $e_val['name']; ?></h5>
                    <p style="color:#808080;"><?php echo $e_val['bunrui']; ?></p>
                    <p>説明：<?php echo $e_val['setumei']; ?></p>
                    <p>状態：<?php echo $e_val['condition']; ?></p>
                    <p>価格：<?php echo $e_val['kakaku']; ?>円</p>
                    <?php
                    $_SESSION['id'] =$id;
                    // echo'<a class="btn btn-primary" href="dis-henko.php?id='.$_SESSION['id'].'">変更</a>';
                    echo '<a class="btn btn-danger" href="dis-sakuz.php?id='.$_SESSION['id'].'">削除</a>';
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    
    } else {
        echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">出品した商品はありません。</br>';
        echo '商品を<a href="insert-product.php">出品</a>してみてください。</p></main>';
        echo '</hr>';
    }
?>
</form>
