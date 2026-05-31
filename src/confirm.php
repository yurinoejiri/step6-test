<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];

if (empty(trim($name)) || empty(trim($companyName)) || empty(trim($email)) || empty(trim($age)) || empty(trim($message))) {
    echo "<script>alert('未入力の項目があります。'); location.href='contact.php';</script>";
    exit;
}
?>
<!-- if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

$name        = $_POST["name"];
$companyName = $_POST["companyName"];
$email       = $_POST["email"];
$age         = $_POST["age"];
$message     = $_POST["message"];

// ✅ 未入力チェックを追加
if (empty(trim($name)) || empty(trim($companyName)) || empty(trim($age)) || empty(trim($email)) || empty(trim($message))) {
    echo "<script>alert('未入力の項目があります。'); location.href='contact.php';</script>";
    exit;
} -->
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム - 確認画面</title>
        <meta name="description" content="お問い合わせフォーム">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h2>お問い合わせフォーム - 確認画面</h2>
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
                <div class="confirm-form">
                    <form action="send.php" method="POST">
                        <!-- 表示されないデータ -->
                        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name , ENT_QUOTES , 'UTF-8');?>">
                        <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName , ENT_QUOTES , 'UTF-8');?>">
                        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age , ENT_QUOTES , 'UTF-8');?>">
                        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email , ENT_QUOTES , 'UTF-8');?>">
                        <input type="hidden" name="message" value="<?php echo htmlspecialchars($message , ENT_QUOTES , 'UTF-8');?>">

                        <!-- 表示するデータ -->
                        <table>
                            <tr>
                                <th>お名前</th>
                                <td><?php echo htmlspecialchars($name , ENT_QUOTES , 'UTF-8');?></td>
                            </tr>
                            <tr>
                                <th>会社名</th>
                                <td><?php echo htmlspecialchars($companyName , ENT_QUOTES , 'UTF-8');?></td>
                            </tr>
                            <tr>
                                <th>年齢</th>
                                <td><?php echo htmlspecialchars($age , ENT_QUOTES , 'UTF-8');?></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><?php echo htmlspecialchars($email , ENT_QUOTES , 'UTF-8');?></td>
                            </tr>
                            <tr>
                                <th>お問い合わせ内容</th>
                                <td><?php echo htmlspecialchars($message , ENT_QUOTES , 'UTF-8');?></td>
                            </tr>
                        </table>
                        <div class="confirm-btn">
                            <button type="button" onclick="history.back()">戻る</button>
                            <input type="submit" id="btn2" value="送信">
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>