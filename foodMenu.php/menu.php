<?php
class Menu {
  public $name;
  // $priceというプロパティを定義してください
  public $price;
  // $imageというプロパティを定義してください
  public $image;
  
  // コンストラクタの引数に$price, $imageを追加してください
  public function __construct($name, $price, $image) {
    $this->name = $name;
    // priceプロパティに引数の$priceを代入してください
    $this->price = $price;
    // imageプロパティに引数の$imageを代入してください
    $this->image = $image;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }

   // getNameメソッドを定義してください
   public function getName() {
    return $this->name;
  }
  
  // getImageメソッドを定義してください
   public function getImage() {
    return $this->image;
  }

    // getTaxIncludedPriceメソッドを定義してください
    public function getTaxIncludedPrice() {
      return floor($this->price * 1.08);
}
}
?>