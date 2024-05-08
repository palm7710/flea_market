<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?>
<?php
$zipcode=$pref=$addr1=$addr2='';
if (isset($_SESSION['address'])) {
	$zipcode=$_SESSION['address']['zipcode'];
    $pref=$_SESSION['address']['pref'];
	$addr1=$_SESSION['address']['addr1'];
    $addr2=$_SESSION['address']['addr2'];
    
}

$pdo=new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_22109;charset=utf8','cbcgict_232022', 'CbcGict2022');
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
$pref_sql = 'select * from pref';
?>

<main class="form-signin w-auto m-auto">
	<form action="desti-output.php" method="post" enctype="multipart/form-data">
		<h2>お客様情報の入力</h2>
        <p><span class="badge bg-danger">入力画面</span> -> 確認画面 -> 完了画面</p>
        <div class="form-row">
		<div class="form-floating">
			<label for="floatingInput">郵便番号</label>
            <div class="input-group-prepend w-50">
            <span class="input-group-text">〒</span>
			<input  type="text" name="zipcode" value="<?php echo $zipcode; ?>" class="form-control" id="zipcode" placeholder="0000000">
            </div>
        </div>
		<div class="form-floating">
			<label for="floatingInput">都道府県</label>
			<select name="pref" id="pref" class="form-control col-xs-2">
            <?php
            foreach ($pdo->query($pref_sql) as $p_val) {
 
                // テーブルのデータをoptionタグに整形 
                    $pref_list = "<option value='".$p_val['name']."'>".$p_val['name']."</option>";
                    echo $pref_list;
                    }
            ?>
            </select>
            <small class="text-warning">選択してください。</small>
		</div>
        </div>
		<div class="form-floating">
        <label for="floatingInput">市区町村</label>
			<input type="text" name="addr1" value="<?php echo $pref; ?>" class="form-control" id="addr1" placeholder="市区町村">
		</div>
        <div class="form-floating">
			<label for="floatingInput">番地・マンション名</label>
			<input type="text" name="addr2" value="<?php echo $addr1; ?>" class="form-control" id="addr2" placeholder="番地・マンション名">
        </div>
        </br>
      <div class="text-center">
      <button class="btn btn-primary" type="submit">内容確認画面へ</button>
      <p><a href="mypage.php" class="btn-outline-secondary">マイページへ戻る</a></p>  
      </div>
	</form>
		
</main>

<?php require 'footer.php';?>