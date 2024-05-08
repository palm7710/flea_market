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

$c_id=$_SESSION['customer']['id'];
$sql=$pdo->prepare('select * from favorite where custo_id !=? and shohin_id=?');
$sql->execute([$c_id, $_REQUEST['id']]);
//var_dump($_REQUEST['id']);
if (empty($sql->fetchAll())) {
if (isset($_SESSION['customer'])) {
    $favo_sql=$pdo->prepare('insert into favorite values(?,?)');
    $favo_sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
        echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">お気に入りに商品を追加しました。</p></main>';
        echo '</hr>';
        require 'favorite.php';
} else {
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">ログインしてください。</p></main>';
}
}else{
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">既にお気に入りに商品がされています。</p></main>';
    echo '</hr>'; 
}

?>
<?php require 'footer.php';?>
