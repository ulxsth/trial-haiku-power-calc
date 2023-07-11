<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <title>HP</title>
</head>
<body>
    <h1>俳句入力</h1>
    <p>※漢字はひらがな読み、英単語はカタカナ読みなどに変換してください</p>

    <!-- 俳句入力フォーム -->
    <form action="result.php" method="post">
        <input type="text" name="kami" placeholder="上の句"><br>
        <input type="text" name="naka" placeholder="中の句"><br>
        <input type="text" name="simo" placeholder="下の句"><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
