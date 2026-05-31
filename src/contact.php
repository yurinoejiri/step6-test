<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty(trim($name)) || empty(trim($companyName)) || empty(trim($age)) || empty(trim($email)) || empty(trim($message))) {
        echo "<script>alert('必須項目が未入力です。入力内容をご確認ください。');</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム</title>
        <meta name="description" content="お問い合わせフォーム">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h2>お問い合わせフォーム</h2>
        </header>
        <main>
            <aside>
                <ul>
                    <li><a href="#">トップページ</a></li>
                    <li><a href="#">人気投稿</a></li>
                    <li><a href="#">エンジニアおすすめ商品</a></li>
                    <li><a href="#">エンジニアおすすめ記事</a></li>
                    <li><a href="#">投稿ページ</a></li>
                </ul>
            </aside>
            <section>
                <form action="confirm.php" method="POST" onsubmit="return validate()">
                    <table>
                        <tr>
                            <th><label for="name">お名前</label></th>
                            <td><input type="text" id="name" name="name" size="40"></td>
                        </tr>
                        <tr>
                            <th><label for="companyName">会社名</label></th>
                            <td><input type="text" id="companyName" name="companyName" size="40"></td>
                        </tr>
                        <tr>
                            <th><label for="age">年齢</label></th>
                            <td><input type="number" id="age" name="age" size="40"></td>
                        </tr>
                        <tr>
                            <th><label for="email">メールアドレス</label></th>
                            <td><input type="email" id="email" name="email" size="40"></td>
                        </tr>
                        <tr>
                            <th><label for="message">お問い合わせ内容</label></th>
                            <td><textarea id="message" name="message" size="40" placeholder="お問い合わせ内容"></textarea></td>
                        </tr>
                    </table>
                    <div class="btn-css">
                        <input type="submit" id="btn" value="送信">
                    </div>
                </form>
            </section>
        </main>
        <footer id="footer-colors">
            <p>横のボタンを押すとfooterの背景色が変わります。</p>
            <button id="footer-btn">押してみてね！</button>
        </footer>
        <script src="style.js"></script>
    </body>
</html>