<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        // ソート関数
        function sort_2way($array, $order) {
          if ($order) {
            echo '昇順にソートします。<br>';
            array_multisort($array, SORT_ASC);
          } else {
            echo '降順にソートします。<br>';
            array_multisort($array, SORT_DESC);
          }

          // ソート後の配列のデータを表示
          foreach ($array as $data) {
            echo "{$data}<br>";
          }

        }

        // ソートする配列
        $nums = [15, 4, 18, 23, 10];

        // ソート関数を呼び出す
        sort_2way($nums, TRUE); // 昇順
        sort_2way($nums, FALSE); // 降順

        ?>
    </p>
</body>

</html>