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
$b_sql = 'select * from bunruis';
$c_sql = 'select * from conditions';

?>
    <div class="card offset-3 col-6" style="padding-bottom:10%; ">
        <h1 class="mt-5 mb-5 text-center">商品を出品する</h1>
        <p class="text-center"><span class="badge bg-danger">入力画面</span> -> 確認画面 -> 完了画面</p>
        <form action="insert-product-Check.php" name="insertForm" method="post" enctype="multipart/form-data">
            <div class="fixText">
                <h6>画像<font color="#ff0000">必須</font></h6>    
                <input type="file" name="img_path" onchange="previewImage(this);" multiple><br/>
                <p>Preview:</p><br>
                <img id="preview" style="max-width:400px;"></p>
                <hr width="80%"><br/>
            </div>

            <div class="fixText">
                <h6>商品名：<font color="#ff0000">必須</font></h6>
                <input type="text" name="shohin_mei"><br/>
                <hr width="80%"><br/>
            </div>

            <div class="fixText">
                <h6>商品の説明：<font color="#ff0000">必須</font></h6>
                <textarea name="setumei" id="setumei" cols="40" rows="4" maxlength="200"></textarea><br/>
                <hr width="80%"><br/>
            </div>

            <div class="fixText">
            <h6>ジャンル：<font color="#ff0000">必須</font></h6>
            <select name='bunrui' class="form-select">
            <?php
            foreach ($pdo->query($b_sql) as $b_val) {
 
                // テーブルのデータをoptionタグに整形 
                    $bunrui_list = "<option value='".$b_val['bunrui_name']."'>".$b_val['bunrui_name']."</option>";
                    echo $bunrui_list;
                    }
            ?>
                <hr width="80%"><br/>
            </select>
            </div><br/>

            <div class="fixText">
            <h6>商品の状態：<font color="#ff0000">必須</font></h6>
            <select class="form-select" name="condition">
            <?php
            foreach ($pdo->query($c_sql) as $c_val) {

                    $condition_list = "<option value='".$c_val['cond_name']."'>".$c_val['cond_name']."</option>";
                    echo $condition_list;
                    }
            ?> 
                <hr width="80%"><br/>
            </select>
            </div><br/>
            
            <div class="fixText">
                <h6>販売価格：<font color="#ff0000">必須</font></h6>
                <input type="number" name="kakaku">円<br/>
                <hr width="80%"><br/>
            </div>
            <div class="text-center">
                <button class="w-100 btn btn-lg btn-primary" name="send" type="submit">出品する</button>
            </div>
        </form>
    </div>

<script>
    function previewImage(obj)
    {
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		document.getElementById('preview').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);
    }
</script> 
<?php require 'footer.php'; ?>
