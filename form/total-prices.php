<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$totalPrice = 0; // 金額の合計値を入れるための変数 
foreach ($prices as $price) {            
// 各金額を$totalPriceに足していく            
$totalPrice += $price;            
}
echo '合計金額は'.$totalPrice.'円です'

?>