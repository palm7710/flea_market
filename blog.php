<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member.php'; 
}else{
    require 'header_form.php';
}
?> 
<div class="blog"> 
  <h3>SEll&BUY blog</h3>
  <p style="color:#808080;">SELL&BUYの公式blogです</p>
  <div class="gray-back">
    <h3>天候による配送遅延について</h3>
    <p style="color:#808080;"><img src="image/watch00.png" width=16px> 2023年1月20日</p>
    <img src="image/news.jpg">
    <p>いつもご利用いただきありがとうございます。</br>
    現在、北日本などで雪が強まっております。</br>こちらの地域にお住まいの方は、</br>大雪の影響により一部地域でお届けの遅れの可能性がございます。</br>
    何卒ご理解の程宜しくお願い致します。

 </p>
 </br>
  <a href="https://www.kuronekoyamato.co.jp/ytc/chien/chien_hp.html">お荷物の集配および営業所の営業状況</br></a>
  </br>
</div>
  </br>
  <div class="blog"> 
  <div class="gray-back">
    <h3>スタッフから新年のご挨拶</h3>
    <p style="color:#808080;"><img src="image/watch00.png" width=16px> 2023年1月1日</p>
    <img src="image/Daruma.jpg" width=368px>
    <p>
      新年明けましておめでとうございます。</br>今年も何卒よろしくお願い申し上げます。</br>
      昨年もSELL&BUYの公式blogをご覧になっていただき、ありがとうございました。</br>
      今年もみなさまに最新の情報をお届けしてまいります。</br>
      どうかみなさま、よいお年をお迎えください。
    </p>
  </div>
  </br>
  <div class="blog"> 
  <div class="gray-back">
    <h3>ブログ開設のごあいさつ</h3>
    <p style="color:#808080;"><img src="image/watch00.png" width=16px> 2022年10月9日</p>
    <img src="image/news2.jpg" width=368px>
    <p>
    はじめまして、こんにちは</br>
    SELL&BUYです。</br></br>
    
    この度、ブログを始めることにしました！</br>
    最新情報やニュースをお届けいたします。</br>
    これからも、どうぞよろしくお願いします。
    </p>
  </div>
  </br>
  <a class="btn btn-outline-success" href="index.php">Topへ戻る</a>
</div> 
<?php require 'footer.php'?>