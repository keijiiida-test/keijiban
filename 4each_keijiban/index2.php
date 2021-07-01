<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>4eachblog</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>

<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");

while($row = $stmt->fetch()){
    echo $row['handlename'];
    echo $row['title'];
    echo $row['comments'];
}
?>

   <body>
        <div class="logo"><img src="4eachblog_logoのコピー.jpg"></div>

        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

        <main>
            <div class="main-container">
                <div class="left">
                    <h2>プログラミングに役立つ書籍</h2>

                    <p class="time">
                        2017年1月15日
                    </p>

                    <div class="book">
                        <img src="bookstore.jpg">
                    </div>

                    4eachはインターノウスが提供するオンラインでプログラミングが勉強できるイーラーニングシステムです。

                    <p>記事中身</p>

                    <div class="gray_box">
                        <div class="box_picture">
                            <img src="pic1.jpg">
                            <p>ドメイン取得方法</p>
                        </div>
                        <div class="box_picture">
                            <img src="pic2.jpg">
                            <p>快適な職場環境</p>
                        </div>
                        <div class="box_picture">
                            <img src="pic3.jpg">
                            <p>Linuxの基礎</p>
                        </div>
                        <div class="box_picture">
                            <img src="pic4.jpg">
                            <p>マーケティング入門</p>
                        </div>
                        <div class="box_picture">
                            <img src="pic5.jpg">
                            <p>アクティブラーニング</p>
                        </div>
                        <div class="box_picture">
                            <img src="pic6.jpg">
                            <P>CSSの効率的な勉強方法</P>
                        </div>
                        <div class="box_picture">
                            <img src="pic7.jpg">
                            <p>リーダブルコードとは</p>
                        </div>
                        <div class="box_picture">
                            <img src="pic8.jpg">
                            <p>HTML5の可能性</p>
                        </div>
                    </div>

                </div>

                <div class="right">

                    <h3>人気の記事</h3>

                    <ul>
                        <li>PHP　オススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>

                    <h3>オススメリンク</h3>

                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>

                    <h3>カテゴリ</h3>

                    <ul>
                       <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>

        <footer>copyright © internous|4each blog is the one which provides A to Z about programming.</footer>

    </body>
</html>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"type="text/css"href="style.css">
        <title>4eachblog 掲示板</title>
    </head>

<body>
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");

while($row = $stmt->fetch()){
    echo $row['handlename'];
    echo $row['title'];
    echo $row['comments'];
}
?>

<header>
<img src="4eachblog_logoのコピー.jpg">
        <br>
<ul>
    <li>トップ</li>
    <li>プロフィール</li>
    <li>4eachについて</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
</ul>
</header>

<main>
    <div class="main-container">
    <div class="left">
             <h1>プログラミングに役立つ掲示板</h1>
    <div class="toukou">
        <h3>入力フォーム</h3>
    <form method="post" action="mail_confilm.php">
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>

        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>


        <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>
        
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>

        <div class="kiji">
            <h3>タイトル</h3>
            <div class='contents'>
                記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。
                記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。
                記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。
            </div>
        </div>
        <div class="kiji">
            <h3>タイトル</h3>
            <div class='contents'>
                記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。
                記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。
                記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。 記事の中身。
            </div>
        </div>
    </div>
    </div>
    </form>
    
    </div>
    
        <div class="right">
            <h2>人気の記事</h2>
            <p>PHPオススメ本</p>
            <p>PHP MYAdminの使い方</p>
            <p>今人気のエディタ</p>
            <p>HTMLの基礎</p>
            <h2>オススメリンク</h2>
            <P>インターノウス株式会社</P>
            <P>XAMPPのダウンロード</P>
            <P>Eclipceのダウンロード</P>
            <P>Bracketsのダウンロード</P>
            <h2>カテゴリ</h2>
            <P>HTML</P>
            <P>PHP</P>
            <P>MySQL</P>
            <P>JavaScript</P>
        </div>
    </div>
</main>

<footer>
    <p>copyright(c)internous|4each blog the which provides A to Z about programming.</p>
</footer>

</body>
</html>