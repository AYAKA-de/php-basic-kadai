<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP KADAI_011</title>
</head>
<body>
  <?php
// 連想配列
$food_datas = ['名前' => '玉ねぎ', '値段' => 200,  '産地' => '産地'];

//  値を1つずつ順番に出力する
foreach ($food_datas as $key => $value) {
  echo "{$key}：{$value}<br>";
}
?>

</body>
</html>