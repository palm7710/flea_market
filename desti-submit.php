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

$info_entry = $pdo->query('SELECT * FROM info');//info
foreach($info_entry as $i_val) { 
    $cust_id = $i_val['cust_id'];
    $ID = $i_val['addr_id'];
};


    $zipcode = $_SESSION['zipcode'];
    $pref = $_SESSION['pref'];
    $addr1 = $_SESSION['addr1'];
    $addr2 = $_SESSION['addr2'] ;

    $cos_id = $_SESSION['customer']['id'];

    if ($cos_id == $cust_id ){
        $ad_sql = "UPDATE address SET zipcode=$zipcode, pref='$pref', addr1='$addr1', addr2='$addr2' where ID=$ID";
        $ad_result = $pdo->prepare($ad_sql);
        $ad_result->execute();


        echo '<main class="text-center form-signin m-auto"><form>';
        echo '<h3>お客様情報を</br>更新しました</h3></br>';
        echo '<p>入力画面 -> 確認画面 -> <span class="badge bg-danger">完了画面</span></p></br>';
        echo '<a href="mypage.php" class="btn btn-secondary">マイページへ</a>';
        echo '</form></main>'; 
    
    } else {
    
        $ad_sql = "INSERT INTO address values (null,?, ?, ?, ?);";
        $ad_result = $pdo->prepare($ad_sql); //address
        $ad_result -> execute([
            $zipcode,$pref,$addr1,$addr2
        ]);//address
        $shn_id = $pdo->lastInsertId();
        $e_sql = "INSERT INTO info values (null,?,?);";
        $e_result = $pdo->prepare($e_sql); //info
        
        $e_result -> execute([
            $cos_id,$shn_id
        ]);//info
    
        echo '<main class="text-center form-signin m-auto"><form>';
        echo '<h3>登録が完了しました</h3></br>';
        echo '<p>入力画面 -> 確認画面 -> <span class="badge bg-danger">完了画面</span></p></br>';
        echo '<a href="mypage.php" class="btn btn-secondary">マイページへ</a>';
        echo '</form></main>'; 
    
    }

  require 'footer.php';
?>
