<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>phpクラス課題</title>
</head>
<body>
  <p>

    <?php
    class Food {
      // プロパティの定義  
      private $name;
      private $price;

      // コンストラクタの定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // show_priceメソッド
      public function show_price() {
        echo $this->price . '<br>';
      }
    }

    // Foodインスタンス生成
    $food = new Food("poteto", 250);
    print_r($food);
    echo '<br>';
    $food->show_price();

    
    class Animal {
        // プロパティの定義
        private $name;
        private $height;
        private $weight;
    
        // コンストラクタの定義
        public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    
        // show_heightメソッド
        public function show_height() {
            echo $this->height . '<br>';
        }
    }
    
    // Animalインスタンス生成
    $animal = new Animal("dog", 60, 5000);
    print_r($animal);
    echo '<br>';
    $animal->show_height();


    ?>

  </p>
</body>
</html>