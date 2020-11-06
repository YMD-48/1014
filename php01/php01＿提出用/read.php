<?php
// ファイルを開く
//$file = fopen('./data/data.txt','r');

$file = fopen('./data/data.txt','r');
//var_dump($opneFile);

// ファイル内容を1行ずつ読み込んで出力
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table border="1">
        <tr>
            <th>回答内容</th>
            <th>名前</th>
            <th>アドレス</th>
            <th>コメント</th>
            <th>評価</th>
            <th>PW</th>

        </tr>
        <?php while($str = fgets($file)){
            $array = explode(",", $str);
            ?>
                <tr>
                <td><?=$array[0]?></td>
                <td><?=$array[1]?></td>
                <td><?=$array[2]?></td>
                <td><?=$array[3]?></td>
                <td><?=$array[4]?></td>
                <td><?=$array[5]?></td>
                </tr>
            <?php
            }
            ?>
       
    </table>
    
    <li><a href="post.php">戻る</a></li>

</body>

</html>
