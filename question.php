<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
<div class="side">
  <p>FAQ</p>
  <h3>よくある質問</h3>
  <div class="blue-back">
    <p><span style="color:#de5228;">Q</span>商品が届かない</br></br>
    <span style="color:blue;">A</span>サポートへキャンセル申請をお願いいたします。</br>
    メールアドレスにて発送通知が完了している場合、キャンセル出来かねます。</p>
  </div>
  </br>
  <div class="blue-back">
  <p><span style="color:#de5228;">Q</span>不備のある商品が届いた</br></br>
    <span style="color:blue;">A</span>サポートへトラブル報告をお願いいたします。</br>
    直接取引相手にご確認も可能です。</p>
  </div>
  </br>
  <div class="blue-back">
  <p><span style="color:#de5228;">Q</span>トラブル報告とは</br></br>
    <span style="color:blue;">A</span>解決に向けたアドバイスを受けることができます。</br>
    必ずお取引の保証をするものではございません。</p>
  </div>
  </br>

  <div class="blog"> 
  <h2><img src="image/10854.png" height=4px>お問合せ・トラブル報告</h2>
  <p style="color:#808080;">カスタマー・メールサポート</p>
  <div class="gray-back">
</br>
    <p>受付時間:24時間／年中無休</p>
    <p>回答時間：10～22時</p>
<a class="btn btn-secondary btn-lg" href="support.php">お問合せ・トラブル報告はこちらから</a>
</br></br>
</div>
</br>
  <a class="btn btn-outline-success" href="index.php">Topへ戻る</a>
</div> 

<?php require 'footer.php'?>