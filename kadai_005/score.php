<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>5章課題</title>
</head>

<body>
  <p>
    <?php
    // 変数に値を代入
    $score1=80;
    $score2=60;
    $score3=55;
    $score4=40;
    $score5=100;
    $score6=25;
    $score7=80;
    $score8=95;
    $score9=30;
    $score10=60;

    // scoreを合計する
    $total_score=$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;

    // scoreの平均を出す
    echo $total_score/10;
    ?>
  </p>
</body>

</html>