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
    $favo_sql=$pdo->prepare('DELETE FROM favorite WHERE custo_id=? AND shohin_id=?');
    if($favo_sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']])){
        echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">お気に入りから商品を削除しました。</p></main>';
        echo '</hr>';
        require 'favorite.php';
    } else {
        echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">削除に失敗しました。</p></main>';
        echo '</hr>';
    }
    
} else {
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">ログインしてください。</p></main>';
}

?>
<?php require 'footer.php';?>
