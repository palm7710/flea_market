<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
	<main class="text-center form-signin w-100 m-auto">
	<form>
      <h3>ログアウト</h3>
      <p>本当にログアウトしますか？</p>
      <a class="w-100 btn btn-primary" href='logout-output.php'>ログアウト</a>
      <a class="w-100 btn btn-danger" href='mypage.php'>キャンセル</a>
	</form>
		
	</main>	
<?php require 'footer.php';?>
