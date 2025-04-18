<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order)
        {
            if ($order === true) {
                sort($array);
                echo '昇順にソートします。<br>';
            } elseif ($order === false) { 
                rsort($array);
                echo '降順にソートします。<br>';
            }
            
            foreach ($array as $num) {
                echo $num . "<br>";
            }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

         // 昇順にソートして出力
         sort_2way($nums, true);
        
         // 降順にソートして出力
         sort_2way($nums, false);
        
        ?>
    </p>
</body>

</html>