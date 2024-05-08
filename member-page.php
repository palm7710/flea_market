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

?>                  

<div class="profile suihei">
    <div class="back-profile" style="width: 700px; padding:5px 0;background-color: #f5f5f5;">
    <form action="edit.php" method="post">

        <img src="image/profile.jpg" style="width:50%;">
        <table>
        <tr>
            <td>名前：</td>
            <td><?php echo $_SESSION['customer']['user'];?></td>
        </tr>
        <hr>
        <tr>
            <td>メールアドレス:</td>
            <td><?php echo $_SESSION['customer']['email'];?></td>
        </tr>
        <tr>
            <td>住所:</td>
            <td><?php 
            $cos_id = $_SESSION['customer']['id'];
            $in_result = $pdo->query("SELECT addr_id FROM info where cust_id = $cos_id");
            while($info = $in_result->fetch()){
                $add_id = $info['addr_id'];
                // var_dump($info['addr_id']);
            }
            if(!empty($add_id)){
            $ad_result = $pdo->query("SELECT * FROM address where ID = $add_id");
            while($address = $ad_result->fetch()){
                // var_dump($address);
                echo '〒',$address['zipcode'],$address['pref'],$address['addr1'], $address['addr2'];
            }
            }else{
                echo '<a href="destination.php">住所を登録してください</a>';
            }
            
            ?>
        </div></td>
        </tr>
        </table>
    </form>
    </div>
</div>

<?php require 'footer.php'?>
