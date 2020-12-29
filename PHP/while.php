<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 変数$iを定義してください
    $i = 2;
    
    // while文を書いてください
    
    while($i <= 100)  {
      //$iが偶数であるということは、$iを2で割った時の余りが0であると等価です
      if($i % 2 == 0)
      echo $i;
      echo '<br>';
      $i++;
    }
  ?>

</body>
</html>