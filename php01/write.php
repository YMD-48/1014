<?php
// ファイルに書き込み
$str = date("Y-m-d H:i:s");
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$review = $_POST['review'];
$password = $_POST['password'];
//文字作成


$file = fopen('./data/data.txt','a');
fwrite($file,"\n"."日付:".$str."\n"."名前:".$name."/アドレス:".$email. "\n"."コメント:".$comment. "\n"."評価:".$review. "\n"."PW:".$password);

fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>



    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>
    <p><?=$name?></p>
    <p><?=$email?></p>
    <p><?=$comment?></p>
    <p><?=$review?></p>
    <p><?=$password?></p>
    <ul>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
