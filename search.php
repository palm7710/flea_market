<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
<?php
if(empty($_REQUEST['keyword'])){
    echo '何も入力されていません';
}else{
echo '<h3>「', $_REQUEST['keyword'], '」の検索結果</h3>';
$pdo=new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_22109;charset=utf8','cbcgict_232022', 'CbcGict2022');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
$sea_sql= $pdo->prepare('select * from shohins where concat(name,bunrui) like ?');
$sea_sql->execute(['%'.$_REQUEST['keyword'].'%']);
foreach ($sea_sql as $row) {
    $_SESSION['id'] = $row['id'];
    //var_dump($row);
    ?>
    <form method='post'  action='branch.php'>
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
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['img_path']=$row['img_path'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['bunrui']=$row['bunrui'];
                    $_SESSION['setumei']=$row['setumei'];
                    $_SESSION['condition']=$row['condition'];
                    $_SESSION['kakaku']=$row['kakaku'];
                    //var_dump($_SESSION['id']);
                    
                    echo "<a class='btn btn-primary' id='add' href='dis-cart.php?id=".$_SESSION['id']."'>購入</a>";
                    echo "<a class='btn btn-warning' id='favo' href='dis-favo.php?id=".$_SESSION['id']."' ><img src='image/672.png' height='25'></a>";
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
}
if(empty($row)){
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">該当する商品がありませんでした。</p></main>';
}
}

?>
<?php require 'footer.php';?>