<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    
    <h1>〈注意〉,は絶対に使わないでね。</h1>
    <form action="write.php" method="post">
        <font color="red">[必須] </font>お名前: <input type="text" name="name">
        <br>
        <font color="red">[必須] </font>EMAIL: <input type="text" name="email">
        <br>
        <font color="blue">[任意] </font>コメント:<input type="text" name="comment">
        <br>
        <font color="red">[必須] </font>評価:<input type="radio" name="review" value="1">1 <input type="radio" name="review" value="2">2 <input type="radio" name="review" value="3">3 <input type="radio" name="review" value="4">4 <input type="radio" name="review" value="5">5
        <!-- パスワード欄を追加してみる。 -->
        <br>
        <font color="red">[必須] </font>パスワード:<input type="password" name="password">
        <br>
        <br>
        <input type="submit" value="送信">
    </form>
</body>

</html>
