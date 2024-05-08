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

$s_sql = "INSERT INTO shohins values (null, ?, ?, ?, ?, ?, ?,null);";
$p_sql = "INSERT INTO images values (null,?,null);";
$e_sql = "INSERT INTO sell values (null,?,?);";

$s_result = $pdo->prepare($s_sql); //shohins
$p_result = $pdo->prepare($p_sql); //images
$e_result = $pdo->prepare($e_sql); //sell

$img_path = $_SESSION['file'];

$mei_s = $_SESSION['mei'];
$setu_s = $_SESSION['setumei'];
$bun_s = $_SESSION['bunrui'];
$cond_s = $_SESSION['condition'];
$kaka_s = $_SESSION['kakaku'];


if(!empty($mei_s)){
    
    $s_result -> execute([
        $img_path,$mei_s,$setu_s,$bun_s,$cond_s,$kaka_s
    ]);//shohins

    $shn_id = $pdo->lastInsertId();
    if (isset($_SESSION['customer'])) {
        $cos_id = $_SESSION['customer']['id'];
    }
    $e_result -> execute([
        $cos_id,$shn_id
    ]);//sell

    echo '<main class="text-center form-signin m-auto"><form>';
    echo '<h3>出品が完了しました</h3></br>';
    echo '<p>入力画面 -> 確認画面 -> <span class="badge bg-danger">完了画面</span></p></br>';
    echo '<a href="display.php" class="btn btn-primary">商品一覧</a>';
    echo '</form></main>';    
}else{
    echo '<main class="text-center form-signin m-auto"><form>';
    echo '<h3>出品に失敗しました。</h3></br>';
    echo '<p>入力画面 -> 確認画面 -> <span class="badge bg-danger">完了画面</span></p></br>';
    echo '<a href="javascript:history.back()"  class="btn btn-secondary">戻る</a>';
    echo '</form></main>'; 
}
?>
<?php require 'footer.php';?>
