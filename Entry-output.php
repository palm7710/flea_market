<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?>
<?php
//var_dump($_REQUEST['email']);
$pdo=new PDO('mysql:host=mysql;charset=utf8','', '');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
if (isset($_SESSION['customer'])) {
	$id=$_SESSION['customer']['id'];
    $sql=$pdo->prepare('select * from customer where id !=? and email=?');
    $sql->execute([$id, $_REQUEST['email']]);
} else {
    $sql=$pdo->prepare('select * from customer where email=?');
    $sql->execute([$_REQUEST['email']]);
}
if (empty($sql->fetchAll())) {
    if (isset($_SESSION['customer'])) {
        $sql=$pdo->prepare('update customer set user=? and email=?, password=? where id=?');
        $sql->execute([
            $_REQUEST['user'], $_REQUEST['email'], $_REQUEST['password'], $id
        ]);
        $_SESSION['customer']=[
            'id'=>$id, 'user'=>$_REQUEST['user'],
             'email'=>$_REQUEST['email'], 'password'=>$_REQUEST['password']
        ];

        ?>
        <main class="text-center form-signin m-auto"><form>
        <p>お客様情報を更新しました。</p></br>
        <a href="login.php" class="w-100 btn btn-lg btn-primary">ログインしてください。</a>
        <form></main>
        <?php

    } elseif (empty($_GET['user'] || empty($_GET['email'] || empty($_GET['password'])))){
        ?>
        <main class="text-center form-signin m-auto"><form>
        <p>登録できませんでした</p></br>
        <form></main>
        <?php
    } else {
        $sql=$pdo->prepare('insert into customer values(null,?,?,?)');
        $sql->execute([
            $_REQUEST['user'], $_REQUEST['email'], $_REQUEST['password']
        ]);
        ?>
        <main class="text-center form-signin m-auto"></form>
        <p>お客様情報を登録しました。</p></br>
        <a href="login.php" class="w-100 btn btn-lg btn-primary">ログインしてください。</a>
        </form></main>
        <?php
        //header('Location: member-index.php');
        //exit;
    }
} else {
    echo 'メールアドレスが既に使用されています。';
}
?>
<?php require 'footer.php';?>
