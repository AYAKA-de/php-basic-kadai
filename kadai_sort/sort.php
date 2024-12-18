<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>
  <body>
  <body>
    <p>
    <?php
          // ソートする配列を宣言（関数の外で）
          $nums = [15, 4, 18, 23, 10];
          
          function sort_2way($array, $order) {
            if($order) {
              echo '昇順にソートします。<br>';
              sort($array);
              foreach($array as $num) { // ループ変数の名前を変更
                echo "{$num}<br>";
              }
            } else {
              echo '降順にソートします。<br>';
              rsort($array);
              foreach($array as $num) { // ループ変数の名前を変更
                echo "{$num}<br>";
              }
            }
          }

          sort_2way($nums, true); // 正しく配列を渡す
          sort_2way($nums, false);
        ?>
    </p>
  </body>
</html>