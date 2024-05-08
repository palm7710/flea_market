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
?>
<h3>マイページトップ</h3>
<div class="row row-cols-1 row-cols-md-2 g-4">
  
  <div class="col">
    <div class="DivLink">
      <div class="card-body page-h5">
      <img src="image/5371.png" class="card-img-top">
          <?php
            echo '<h5 class="card-title">',$_SESSION['customer']['user'], 'さんの会員ページ</h5>';
          ?>
        <p class="card-text">お客様の登録情報をご確認いただけます。</p>
        <a href="member-page.php" class="ALink"></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="DivLink">
      
      <div class="card-body page-h5">
      <img src="image/1035.png" class="card-img-top">
        <h5 class="card-title">お届け先登録・変更</h5>
        <p class="card-text">ご住所の登録や変更を行います。</p>
        <a href="destination.php" class="ALink"></a>
      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="DivLink">
      
      <div class="card-body page-h5">
      <img src="image/672.png" class="card-img-top">
        <h5 class="card-title">お気に入り・履歴</h5>
        <p class="card-text">お気に入り登録された商品をご確認頂けます。</p>
        <a href="favorite-page.php" class="ALink"></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="DivLink">
      
      <div class="card-body page-h5">
      <img src="image/1483.png" class="card-img-top">
        <h5 class="card-title">購入した商品</h5>
        <p class="card-text">購入履歴をご確認頂けます。</p>
        <a href="cart-page.php" class="ALink"></a>
      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="DivLink">
      
      <div class="card-body page-h5">
      <img src="image/10811.png" class="card-img-top">
        <h5 class="card-title">出品する</h5>
        <p class="card-text">こちらから商品をご出品頂けます。</p>
        <a href="insert-product.php" class="ALink"></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="DivLink">
      
      <div class="card-body page-h5">
      <img src="image/2982.png" class="card-img-top">
        <h5 class="card-title">出品した商品</h5>
        <p class="card-text">出品した商品をご確認頂けます。</p>
        <a href="display.php" class="ALink"></a>
      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="DivLink">
      
      <div class="card-body page-h5">
      <img src="image/pig.png" class="card-img-top">
        <h5 class="card-title">購入された商品</h5>
        <p class="card-text">こちらから商品をご確認頂けます。</p>
        <a href="buy-product.php" class="ALink"></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="DivLink">
      
      <div class="card-body page-h5">
      <img src="image/10854.png" class="card-img-top">
        <h5 class="card-title">お問合せ・トラブル報告</h5>
        <p class="card-text">カスタマー・メールサポートです。</p>
        <a href="support.php" class="ALink"></a>
      </div>
    </div>
  </div>
</div>

<?php
} else {
    echo '<main class="text-center form-signin m-auto"><form>';
    echo '<h5>ログインしてください</h5>';
    echo '<a href="login.php" class="btn btn-secondary">ログインする</a>';
    echo '</form></main>';
}
?>
<?php require 'footer.php';?>
