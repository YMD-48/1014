<?php
// ファイルに書き込み
$str = date("Y-m-d H:i:s");
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$review = $_POST['review'];
$password = $_POST['password'];
//文字作成

if(empty($name)||empty($email)||empty($review)||empty($password)){
echo "空の値あるから、やり直してや";

}elseif(preg_match("/.*,.*/",$name)||preg_match("/.*,.*/",$email)||preg_match("/.*,.*/",$comment)||preg_match("/.*,.*/",$password)){
echo "禁止文字含めてもーてるから、やり直し";

}else{
    $file = fopen('./data/data.txt','a');
    fwrite($file,$str. ",".$name. ",".$email. ",".$comment. ",".$review. ",".$password."\n");
    echo  "書き込みしました。";
    echo "./data/data.txt を確認しましょう！";
};

fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <ul>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
