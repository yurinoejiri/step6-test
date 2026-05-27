<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location:content.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $message = $_POST["message"];
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム - 送信完了画面</title>
        <meta name="description" content="お問い合わせフォーム">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>お問い合わせフォーム - 送信完了画面</h1>
        </header>
        <main>
            <section>
                <div class="send-content">
                    <?php
                    $to = "sample@gmail.com";
                    $subject = "$name + お問い合わせ";
                    $message = "お問い合わせ内容：\n名前" . $name . "\n会社名：" . $companyName . "\n年齢：" . $age . "\nメールアドレス：" . $email . "\nお問い合わせ内容：" . $message;
                    $headers = "From: send@gmail.com";

                    if (mail($to,$subject,$message,$headers)) {
                        echo "お問い合わせが送信されました。ありがとうございます！";
                    } else {
                        echo "メールの送信に失敗しました。もう一度やり直してください。";
                    }
                    ?>
                    <br>
                    <p><a href="content.php" style="color: black;">お問い合わせフォームに戻る</a></p>
                </div>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>