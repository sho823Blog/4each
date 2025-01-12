<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせ内容確認</title>
    <link rel="stylesheet" type="text/css" href="style2.css"> <!-- スタイルシートのリンク -->
</head>

<body>

    <h1>お問い合わせ内容確認</h1>
    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br>
            よろしければ「送信する」ボタンを押して下さい。
        </p>
        <p>
            名前:
            <br>
            <?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '未入力'; ?>
        </p>
        <p>
            メールアドレス:
            <br>
            <?php echo isset($_POST['mail']) ? htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8') : '未入力'; ?>
        </p>
        <p>
            年齢:
            <br>
            <?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8') : '未入力'; ?>
        </p>
        <p>
            コメント:
            <br>
            <?php echo isset($_POST['comment']) ? htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8') : '未入力'; ?>
        </p>

        <div class="bottons">
            <form action="index.html">
                <input type="submit" class="button1" value="戻って修正する" />
            </form>

            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する">
                <input type="hidden" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" name="name">
                <input type="hidden" value="<?php echo htmlspecialchars($_POST['mail'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" name="mail">
                <input type="hidden" value="<?php echo htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" name="age">
                <input type="hidden" value="<?php echo htmlspecialchars($_POST['comment'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" name="comment">
            </form>
        </div>

    </div>
</body>

</html>