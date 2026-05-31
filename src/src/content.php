<!-- エラー表示　 -->
<?php
$errors = [];

$name = "";
$companyName = "";
$email = "";
$age = "";
$message = "";

if($_SERVER["REQUEST_METHOD"]==="POST") {
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];   

    if($name === ""){
        $errors[] = "名前を入力してください";
    }
    if($companyName === ""){
        $errors[] = "会社名を入力してください";
    }
    if($email === ""){
        $errors[] = "メールアドレスを入力してください";
    }
    if($age === ""){
        $errors[] = "年齢を入力してください";
    }
    if($message === ""){
        $errors[] = "お問い合わせ内容を入力してください";
    }


    if(empty($errors)){ //エラー表示がなくなったらconfirm.phpを表示する
        require("confirm.php");
        exit;
        }
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>中間テスト</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h2>お問い合わせフォーム</h2>
        </header>

        <main>
        
            <div class="flex">
            <aside>
                <ul>
                    <li><a href="#">トップページ</a></li>
                    <li><a href="#">人気投稿</a></li>
                    <li><a href="#">エンジニアおすすめ商品</a></li>
                    <li><a href="#">エンジニアおすすめ記事</a></li>
                    <li><a href="#">投稿ページ</a></li>
                </ul>
            </aside>

            <form id="formDate" method="POST">
                <!-- エラー表示-->
                <div class="error-text">
                    <?php if(!empty($errors)): ?> <!-- エラー項目がでたら、エラー内容を１ずつ表示する-->
                    <ul style="color: red;">
                    <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>

                <div class="table">
                    <table border="3">
                        <tr>
                            <th><label for="name">お名前</label></th>
                            <td><input type="text" id="name" name="name" value="<?= htmlspecialchars($name ?? '') ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="companyName">会社名</label></th>
                            <td><input type="text" id="companyName" name="companyName" value="<?= htmlspecialchars($companyName ?? '') ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="email">メールアドレス</label></th>
                            <td><input type="email" id="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="age">年齢</label></th>
                            <td><input type="number" id="age" name="age" value="<?= htmlspecialchars($age ?? '') ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="message">お問い合わせ内容</label></th>
                            <td><textarea id="message" name="message" value="<?= htmlspecialchars($message ?? '') ?>" placeholder="お問い合わせ内容"></textarea></td>
                        </tr>
                    </table>
                    <div class="button">
                        <input type="submit" value="送信する"><br>
                    </div>
                </div>
            </form>
            </div>
        </main>

        <footer id="footer">
            <p>
                横のボタンを押すとfooterの背景色が変わります。
            </p>
            <button id="button-color">押してみてね！</button>
        </footer>
        <script src="style.js"></script>
    </body>
</html>