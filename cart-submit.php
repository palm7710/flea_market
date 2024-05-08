<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
<?php
//var_dump($_SESSION['id']);
$sql=$pdo->prepare('select * from favorite where shohin_id=?');
$sql->execute([$_SESSION['id']]);
$pdo=new PDO('mysql:host=mysql.jp;dbname=;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
    $cart_sql=$pdo->prepare('insert into cart values(null,?,?)');
    $cart_sql->execute([$_SESSION['customer']['id'], $_SESSION['id']]);
    if (empty($sql->fetchAll())) {
    if(!empty($_SESSION['id'])){
        echo '<main class="text-center form-signin m-auto"><form>';
        echo '<h3>購入が完了しました</h3></br>';
        echo '<p>確認画面 -> <span class="badge bg-danger">購入完了</span></p></br>';
        echo '<a href="mypage.php" class="btn btn-secondary">マイページへ</a>';
        echo '</form></main>'; 
    }else{
        echo '<main class="text-center form-signin m-auto"><form>';
        echo '<h3>購入に失敗しました</h3></br>';
        echo '<a href="index.php" class="btn btn-secondary">ホームへ戻る</a>';
        echo '</form></main>'; 
    }
}else{
    echo '<main class="form w-300 m-auto"><p style="text-align:center;margin: 0 auto;">申し訳ございません。既に商品が購入されています。</p></main>';
    echo '</hr>'; 
}
    ?>

<?php require 'footer.php';?>
