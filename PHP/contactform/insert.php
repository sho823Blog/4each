<?php

mb_internal_encoding("utf8");
try {
    // PostgreSQLへの接続
    $pdo = new PDO("pgsql:host=db.xuxswlklmucuiuowdarv.supabase.co;port=5432;dbname=postgres", "postgres", ""); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // エラーモードを設定
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
    exit; // 接続失敗の場合は処理を終了
}

$sql = "INSERT INTO contactform (name, mail, age, comment) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comment']);

// 実行
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style2.css" type="text/css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>
            お問い合わせありがとうございました。<br>2~3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>
</body>

</html>
