<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?>

<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=mysql;dbname=;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
$sql=$pdo->prepare('select * from customer where email=? and password=?');
$sql->execute([$_REQUEST['email'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customer']=[
        'id'=>$row['id'], 'user'=>$row['user'],
        'email'=>$row['email'], 'password'=>$row['password']
    ];
}
if (isset($_SESSION['customer'])) {
    header('Location: index.php');
    exit;
} else {
        echo '<main class="text-center form-signin m-auto"><form>';
        echo '<h5>メールアドレスまたはパスワードが</br>間違っています。</h5>';
        echo '<a href="login.php" class="btn btn-secondary">ログインする</a>';
        echo '</form></main>';
    
}
?>
<?php require 'footer.php'?>
