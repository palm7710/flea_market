<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?>
<main class="text-center form-signin m-auto">
<form action="insert-product-submit.php" method="post">
<?php
    
//var_dump($_REQUEST['shohin_mei']);
$pdo=new PDO('mysql:host=mysql;dbname=;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');


if (is_uploaded_file($_FILES['img_path']['tmp_name'])) {
    $file='upload/'.basename($_FILES['img_path']['name']);
        if (move_uploaded_file($_FILES['img_path']['tmp_name'],$file)) {
            
        }else{
            echo 'アップロードに失敗しました。';
        }
        //var_dump($file);

$_SESSION['file'] = $file;

$mei = $_POST['shohin_mei'];
$setumei = $_POST['setumei'];
$bunrui = $_POST['bunrui'];
$condition = $_POST['condition'];
$kakaku = $_POST['kakaku'];

if(!empty($_POST['shohin_mei'] && !empty($_POST['kakaku']))){
    //$sql=$pdo->prepare("insert into shohins values(null,'$file','$mei','$setumei','$bunrui','$condition','$kakaku')");
        
        echo '<h2>確認ページ</h2>';
        echo '<p>入力画面 -> <span class="badge bg-danger">確認画面</span> -> 完了画面</p>';
        if (isset($_SESSION['customer'])) {
            echo '<p>ユーザー名:',$_SESSION['customer']['user'], 'さん</p>';
        }
        echo '<img alt="image" src="', $file, '" width="240"></br>';
        echo '<p>商品名:', $mei, '</p>';
        echo '<p>商品の説明:', $setumei, '</p>';
        echo '<p>カテゴリー:', $bunrui, '</p>';
        echo '<p>状態:', $condition, '</>';
        echo '<p>販売価格:', $kakaku, '円</p></br>';

        $_SESSION['mei'] = $mei;
        $_SESSION['setumei'] = $setumei;
        $_SESSION['bunrui'] = $bunrui;
        $_SESSION['condition'] = $condition;
        $_SESSION['kakaku'] = $kakaku;
 
?>
<a href="javascript:history.back()" class="w-100 btn btn-lg btn-danger" value="修正する">修正する</a>
<input id="send" type="submit" value="出品" class="w-100 btn btn-lg btn-primary">
<?php

} else {
    echo '<p>記入漏れがございます。</p>';
    echo '<a href="javascript:history.back()" class="w-100 btn btn-lg btn-danger" value="戻る">戻る</a>';

}

}else {
    echo '<p>記入漏れがございます。</p>';
    echo '<a href="javascript:history.back()" class="w-100 btn btn-lg btn-danger" value="戻る">戻る</a>';
}

?>
</form>
</main>
<?php require 'footer.php';?>
