<?php session_start();?>
<?php 
if (isset($_SESSION['customer'])) {
    require 'header_member_top.php'; 
}else{
    require 'header_form_top.php';
}
?>     

<div class="main">
  <div class="img-top">
	<video src="image/kaisya.mp4" poster="image/movie.png" style="width: 100%;" webkit-playsinline playsinline loop autoplay muted></video>
  </div>
  
<div class="blog"> 
  <div class="search-form">
  <form class="d-flex" action="search.php" methot="post">
      <input class="form-control search-text" type="text" name="keyword" placeholder="何をお探しですか？">
      <input class="btn btn-outline-success" value="Search" type="submit">
  </form>
</div>

</br>
<div class="gray-back">
<h4>カテゴリーから探す</h4>
<div id="catesea">
  <a href='search.php?keyword=レディース'><img src="image/lady.png"></br>レディース</a>
  <a href='search.php?keyword=メンズ'><img src="image/king.jpg"></br>メンズ</a>
  <a href='search.php?keyword=ベビー'><img src="image/angel.jpg"></br>ベビー</a>
  <a href='search.php?keyword=キッズ'><img src="image/girls.png"></br>キッズ</a>
  <a href='search.php?keyword=インテリア'><img src="image/home.jpg"></br>インテリア</a>
  <a href='search.php?keyword=住まい'><img src="image/rich.png"></br>住まい</a>
  <a href='search.php?keyword=本'><img src="image/books.png"></br>本</a>
  <a href='search.php?keyword=音楽'><img src="image/headphones.png"></br>音楽</a>
</div>

<div class="txt-hide">
<div id="catesea"> 
  <a href='search.php?keyword=ゲーム'><img src="image/controller.png"></br>ゲーム</a>
  <a href='search.php?keyword=おもちゃ'><img src="image/teddy.png"></br>おもちゃ</a>
  <a href='search.php?keyword=コスメ'><img src="image/affection.png"></br>コスメ</a>
  <a href='search.php?keyword=美容'><img src="image/silhouette.png"></br>美容</a>
  <a href='search.php?keyword=家電'><img src="image/cactus.png"></br>家電</a>
  <a href='search.php?keyword=ハンドメイド'><img src="image/basket.png"></br>ハンドメイド</a>
  <a href='search.php?keyword=チケット'><img src="image/money.png"></br>チケット</a>
  <a href='search.php?keyword=その他'>その他</a>
</div>
</div>
<button class="more"></button>
</div>  
</br>
  <h3>SEll&BUY blog</h3>
  <p style="color:#808080;">SELL&BUYの公式blogです</p>
  <div class="gray-back">
    <ul class="list-blog">
      <li>
      <a href="blog.php">
        <article>
        <time datetime="2023-01-20" style="color:#808080;"><img src="image/watch00.png" width=10px>2023年1月20日</time>
        <h4>天候による配送遅延について</h4>
        </article> 
      </li>
        </hr>
      <li>
      <a href="blog.php">
        <article>
        <time datetime="2023-01-01" style="color:#808080;"><img src="image/watch00.png" width=10px> 2023年1月1日</time>
        <h4>スタッフから新年のご挨拶</h4>
        </article>
      </li>
      </hr>
      <li>
      <a href="blog.php">
        <article>
        <time datetime="2022-10-09" style="color:#808080;"><img src="image/watch00.png" width=10px>2022年10月9日</time>
        <h4>ブログ開設のごあいさつ</h4>
        </article>
      </li>
    </ul>
  </div>

  </br>
  <a class="btn btn-outline-success" href="blog.php">もっとみる</a>
</div> 
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
  <a class="btn btn-outline-success" href="question.php">もっとみる</a></br></br>
</div> 
</div>
<br>
<div class="fot-box">
	<img src="image/hondana.jpg" style="width: 100%;">
  <div class="fot-txt">
  <h2>SELL＆BUYで商品を出品してみませんか？</h2>
  <p>ーーーー</p>
  <p>気軽に簡単登録♪</p>
  <a class="btn btn-warning" href="Entry.php">会員登録</a>
  <a class="btn btn-success" href="login.php">ログイン</a>
  </div>
</div>
<?php require 'footer.php'?>
