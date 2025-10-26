<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題016</title>
</head>

<body>
   <p>
    <?php

    class Food {

      // プロパティ
      private $name;
      private $price;

      // コンストラクタ
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // 出力関数
      public function show_price() {
        echo $this->price . '<br>';
      }
    }

    class Animal {

      // プロパティ
      private $name;
      private $height;
      private $weight;

      // コンストラクタ
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // 出力関数
      public function show_height() {
        echo $this->height . '<br>';
      }
    }

    // インスタンスを作成
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // 作成したインスタンスを出力
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // 各クラスのメソッドを実行
    $food->show_price();
    $animal->show_height();

    ?>
   </p>
</body>

</html>