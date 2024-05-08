<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
<title>SELL&BUY | ネット通販</title>
</head>

<body>
<div class="nav-on z-index-1">
<nav class="navbar navbar-expand-sm mb-3" style="width: 100%;">
<a class="navbar-brand" href="index.php"><img height="50" src="image/logo.png"></a>
     <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
                <li class="nav-item active">
                    <a href="mypage.php"><img height="40" src="image/6123.png"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color:#fff;"><img height="40" src="image/logout.png">ログアウト</a>
                </li>
      <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
              <form class="d-flex" role="search" action="search.php" methot="post">
                <div class="dropdown">
                  <button type="button" id="dropdown1"
                          class="btn btn-info dropdown-toggle"
                          data-toggle="dropdown">
                  カテゴリー
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdown1">
                  <?php
                  $pdo=new PDO('mysql:host=mysql1203b.xserver.jp;dbname=cbcgict_22109;charset=utf8','cbcgict_232022', 'CbcGict2022');
                  //$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'PASSWORD');
                  $b_sql = 'select * from bunruis';
                  foreach ($pdo->query($b_sql) as $b_val) { 
                    $bunrui_item = "<a class='dropdown-item' href='search.php?keyword=".$b_val['bunrui_name']."' aria-label='Search'>".$b_val['bunrui_name']."</a>";
                    echo $bunrui_item;
                    }
                  ?>
                  </div>
                </div>       
      		<input class="form-control me-2" type="text" name="keyword" placeholder="何をお探しですか？" aria-label="Search">
          <input class="btn btn-outline-success" value="Search" type="submit">
        </form>
         </ul>
     </div>
</nav>
</div>
