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

$e_entry = $pdo->query('SELECT * FROM shohins'); //shohins

while($shohin_list = $e_entry->fetch()){  
?>
<div class="card" style="width: 18rem;">
  <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="<?php echo $['img_path'];?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
  <div class="card-body">
    <p class="card-text"><?php echo $shohin_list['name']; ?></p>
  </div>
</div>
<?php
}
?>

<?php require 'footer.php';?>
