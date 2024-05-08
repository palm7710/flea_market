<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?>     

<div class="main text-center">
<h1>会　社　概　要</h1>
<br>
<br>
<p>会社名		SELL&BUY株式会社</p>
<p>設立		2018年7月</p>
<p>所在地		渋谷区神宮前3-35-19</p>
<p>資本金		300万円</p>
<p>代表者		代表取締役 山田 早織</p>
<p>従業員数	10名（社員：7名　アルバイト：3名）</p>
<p>売上高		1,000万円</p>
<p>事業内容	フリマサイトの運営</p>
<div>
<?php require 'footer.php'?>