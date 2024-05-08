<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
;
?> 	
	<main class="text-center form-signin w-100 m-auto">
	<form action="login-output.php" method="post">
		<div class="form-floating">
			<label>メールアドレス</label>
			<input type="email" name="email" class="form-control" placeholder="name@example.com">
		</div>
		<div class="form-floating">
			<label>パスワード</label>
			<input type="password" name="password" class="form-control" placeholder="パスワード">
		</div>
	  <p>アカウントをお持ちでない方は<a href="Entry.php">こちら</a></p>
	  <p>パスワードをお忘れの方は<a href="pass_reset.html">こちら</a></p>
      <button class="w-100 btn btn-lg btn-primary" type="submit"><img height="40" src="image/login.png"> ログイン</button>
	</form>
		
	</main>	
<?php require 'footer.php';?>
