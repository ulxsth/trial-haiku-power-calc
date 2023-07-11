<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/style.css">
    <title>結果表示</title>
    <?php
    // モデルクラスの読み込み
    require_once('../models/Haiku.php');
    ?>
</head>
<body>
    <h1>俳句入力結果</h1>
    <p>
        上の句：
        <?php
        echo $_POST['kami'], ' (', mb_strlen($_POST['kami']), '文字)';
         ?>
    </p>
    <p>
        中の句：
        <?php
        echo $_POST['naka'], ' (', mb_strlen($_POST['naka']), '文字)';
         ?>
    </p>
    <p>
        下の句：
        <?php
        echo $_POST['simo'], ' (', mb_strlen($_POST['simo']), '文字)';
         ?>
    </p>
    <br>

    <?php
    // モデルクラスのインスタンス化
    $haiku = new Haiku($_POST['kami'], $_POST['naka'], $_POST['simo']);

    // 俳句が正しいかどうかを判定
    echo '<p>判定：';
    if ($haiku->isPerfectHaiku()) {
        echo '<span class="emphasize">俳句です</span>(5-7-5の音節である)</p>';
    } else if ($haiku->isLacking() || $haiku->isOverflowing()) {
        echo '<span class="emphasize">俳句です</span>(字余り・字足らずが発生しています)</p>';
    } else {
        echo '俳句ではありません</p>';
        exit;
    }
    ?>
</body>
</html>
