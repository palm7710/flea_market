<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?>
<?php
$user=$email=$password='';
if (isset($_SESSION['customer'])) {
	$user=$_SESSION['customer']['user'];
	$email=$_SESSION['customer']['email'];
	$password=$_SESSION['customer']['password'];
}
?>
	<main class="text-center form-signin w-100 m-auto">
	<form action="Entry-output.php" method="get">
		<p>当サービスをご利用するために、<br>次のフォームへご記入ください。</p>
		<div class="form-floating">
			<label for="floatingInput">アカウント名</label>
			<input type="text" name="user" value="<?php echo $user; ?>" class="form-control" id="floatingInput" placeholder="買物　太郎">
		</div>
		<div class="form-floating">
			<label for="floatingInput">メールアドレス</label>
			<input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="floatingInput" placeholder="name@example.com">
		</div>
		<div class="form-floating">
			<label for="floatingPassword">パスワード</label>
			<input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="floatingPassword" placeholder="パスワード">
		</div>
	  <p>アカウントをすでにお持ちの方は<a href="login.php">こちら</a></p>
      <button class="w-100 btn btn-lg btn-primary" type="submit">新規会員登録</button>
	</form>
		
</main>
<?php require 'footer.php';?>