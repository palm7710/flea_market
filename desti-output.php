<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?>
<main class="text-center form-signin m-auto">
<form action="desti-submit.php" method="post">
<?php

//require 'switch-pref.php';
//3930051 諏訪郡下諏訪町 大社通141-13

if(!empty($_POST['zipcode'] && !empty($_POST['addr2']))){

    
    $_SESSION['zipcode'] = $_POST['zipcode'];
    $_SESSION['pref'] = $_POST['pref'];
    $_SESSION['addr1'] = $_POST['addr1'];
    $_SESSION['addr2'] = $_POST['addr2'];
        
        echo '<h2>内容確認</h2>';
        echo '<p>入力画面 -> <span class="badge bg-danger">確認画面</span> -> 完了画面</p>';

        echo '氏名:',$_SESSION['customer']['user'],'</br>';
        echo '〒', $_SESSION['zipcode'], '</br>';
        echo '都道府県:', $_SESSION['pref'], '</br>';
        echo '市区町村:', $_SESSION['addr1'], '</br>';
        echo '番地・マンション名:', $_SESSION['addr2'], '</br>';
 
?>
<input id="send" type="submit" value="登録する" class="w-100 btn btn-primary btn-wide">
<a href="javascript:history.back()" class="w-100 btn btn-secondary" value="修正する">修正する</a>
<?php

} else {
    echo '記入漏れがございます。';
    echo '<a href="javascript:history.back()" class="w-100 btn btn-lg btn-danger" value="戻る">戻る</a>';

}
?>
</form>
</main>
<?php require 'footer.php';?>