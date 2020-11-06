<?php
// ファイルを開く
//$file = fopen('./data/data.txt','r');
$file = fopen('./data/data.txt','r');
//var_dump($opneFile);

// ファイル内容を1行ずつ読み込んで出力
while($str = fgets($file)){
    echo nl2br($str);
}
fclose($file);


?>