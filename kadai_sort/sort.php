<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order){
      $nums=[15, 4, 18, 23, 10 ];

      if ($order)  {
        echo "昇順にソートします。<br>";
        sort($nums,$flags=SORT_NUMERIC);
        foreach($nums as $array) {
          echo $array.'<br>';
        }
      } else {
        echo "降順にソートします。<br>";
        rsort($nums,$flags=SORT_NUMERIC);
        foreach($nums as $array) {
          echo $array.'<br>';
        }
      }
    }

    sort_2way(0, TRUE);
    sort_2way(0, FALSE);
    ?>
  </p>
  </body>
