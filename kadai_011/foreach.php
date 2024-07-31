<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP_11章課題</title>
</head>

<boody>
  <p>
    <?php
    $product_datum=['名前'=>'玉ねぎ', '値段'=>'200', '産地'=>'北海道'];

    foreach ($product_datum as $key=>$value){
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
</body>

</html>