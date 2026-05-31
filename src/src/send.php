<?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name = $_POST["name"];
        $companyName = $_POST["companyName"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $message = $_POST["message"];
        
        $to  = "example.com";
        $subject = "お問い合わせ:" . $name;
        $body = "名前:" . $name . "\n会社名:" . $companyName . "\nメール:" . $email . "\n年齢:" . $age . "\n内容:" .$message;
    if(mail($to,$subject,$body)){
        echo "お問い合わせが送信されました。ありがとうございます！";
    }else{
        echo "送信に失敗しました。再度送信してください。";
    }
}
?>
<DOCTYPE! html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム-送信完了画面</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
        <h1>お問い合わせフォーム-送信完了画面</h1>
        </header>
        <div class="send-content">
            <P><a href="content.php">お問い合わせフォームに戻る</a></p>
        </div>
    </body>
    <footer></footer>
</html>