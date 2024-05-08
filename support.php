<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 

<div class="blog"> 
  <h2><img src="image/10854.png" height=4px>お問合せ・トラブル報告</h2>
  <p style="color:#808080;">カスタマー・メールサポート</p>
  <div class="gray-back">
</br>
    
<div class="m-auto w-50">
    <label class="form-label">ご連絡先</label>
    <input type="email" class="form-control" placeholder="name@example.com">
</div>
</br>
<div class="m-auto w-50">
  <label class="form-label">お問合せ内容を入力してください。</label>
  <textarea class="form-control" rows="3"></textarea>
</div>
</br>
    <a class="btn btn-secondary" href="toiawase.php">送信する</a>
</br></br>
    <p>受付時間:24時間／年中無休</p>
    <p>回答時間：10～22時</p>
</br></br>
<p><span style="background-color:#808080;">通話無料</span></p>
<h2>サポートダイヤル（電話窓口）</h2>
<h2>0120-XXX-XXXX</h2>
<p>※サービス向上のため、お客様との電話は録音しています。</p>
</div>
  </br>
</div> 
<?php require 'footer.php'?>