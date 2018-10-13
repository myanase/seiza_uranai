<?php require_once('dataOfSeiza.php') ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>星座占い</title>
  <style type="text/css">
  <!--
  a:link{color: #fefaf4; text-decoration: underline;}
  a:visited{color: #fefaf4; text-decoration: underline;}
  a:hover{color: #fefaf4; text-decoration: underline;}
  a:active{color: #fefaf4; text-decoration: underline;}
  -->
  </style>
</head>
<body>
  <header>
    <link rel="stylesheet" href="default_seiza.css">
    <div class="lace"></div>
    <h1>今日の運勢は・・・</h1>
  </header>
  <section>
    <table border="0" class="ranking">
      <?php
      for($i=1; $i<=12; $i++){
        echo '<tr class="rank"><td><span>'.$i.'</span>位</td></tr>';
      }
      ?>
    </table>
      <table border="0" class="seiza">
      <?php shuffle($seiza) ?>
      <?php foreach ($seiza as $value): ?>
        <tr class="eachSeiza">
        <td>
        <h2><?php echo $value->name ?></h2>
        <p><?php echo $value->birthday ?></p>
        <img src ="<?php echo $value->image ?>">
        <?php endforeach ?>
        </td>
        </tr>
      </table>

      <table border="0" class="lucky">
      <?php foreach ($lucky as $peason=>$place): ?>
        <tr class="eachlucky">
        <td>
        <p><?php echo 'Lucky Peason：'.$peason ?></p>
        <p><?php echo 'Lucky Place：'.$place ?></p>
        </td>
        </tr>
        <?php endforeach ?>
      </table>
  </section>
  <footer>
    <div class="footer-logo">星座占い</div>
    <div class="portfolio"><a href="https://myanase.github.io/" target="_blank">制作者のPortfolioへ</a></div>
    <div class="c_mark">©2018 MYanase</div>
  </footer>
</body>
</html>
