<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 関数helloを定義してください
   function hello() {
     echo 'Hello, world!';
   }
    
    // 関数helloを呼び出してください
    hello();
    
    echo '<br>';
    // 関数printRectangleAreaを定義してください
    //function　関数の定義を忘れないこと
    function printRectangleArea($height, $width) {
      echo $height * $width;
    }
    // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
    printRectangleArea(5, 10);
    
  ?>

</body>
</html>