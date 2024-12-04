<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題016</title>
 </head>
 
 <body>
     <p>
     <?php
     class Food {
        // $nameプロパティを定義する
        public $name;
        // $priceプロパティを定義する
        public $price;

     // コンストラクタを定義する
     public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
       // メソッドを定義する
       public function show_price() {
        echo $this->price. '<br>';
        // $this->name = $name;
        // $this->price = $price;
        // 中身やっていることはコンストラクタとかわらないため
    }

    // プロパティへのアクセス
        // $potato->set_name('potato');
        // $potato->show_name();
        // // メソッドへのアクセス
        // $potato->set_name('potato');
        // $potato->show_name();

        // インスタンス$userの各プロパティの値を出力する
        // メソッドを定義したものを呼び出している
        // print_r($potato);
        // echo $potato->show_price();
  }
   

     class Animal {
        // $nameプロパティを定義する
        public $name;
        // $heightプロパティを定義する
        public $height;
        // $weightプロパティを定義する
        public $weight;

        // メソッドを定義する
       public function set_name(string $height) {
        $this->show_height = $height;
        
  }
      
    }

    // コンストラクタを定義する
      public function__construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;

      // インスタンス化する
      $cat= new Animal('ねこ',40,15);
 
      // メソッドにアクセスして実行する
      $animal->set_name('ねこ',40,15);

      // プロパティへのアクセス
        // $cat->set_name
        // $cat->show_name();
        // // メソッドへのアクセス
        // $cat->set_name
        // $cat->show_name();

        // インスタンス$userの各プロパティの値を出力する
        // メソッドを定義したものを呼び出している
        // print_r($cat);
        // echo $potato->show_price();

  }

  print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';
        
        $potato->show_price();
        // echo '<br>';
        $cat->show_height();
        // echo '<br>';

        ?>
     </p>
 </body>
 
 </html>