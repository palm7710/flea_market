<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
<?php
if (isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);

    echo '<main class="text-center form-signin m-auto"><form>';
    echo '<h3>ログアウトしました</h3>';
    echo '</form></main>';
    //echo '<a href="login.php" class="btn btn-secondary">ログイン</a>';
    //header('Location: index.html');
    //exit;
} else {
    echo '<main class="text-center form-signin m-auto"><form>';
    echo '<h3>すでにログアウトしています。</h3>';
    echo '</form></main>';
}
?>
<?php require 'footer.php'?>