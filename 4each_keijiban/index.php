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
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
            <?php echo $_POST['handlename'];?>
        </div>
        <br>
        <br>

        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
            <?php echo $_POST['title'];?>
        </div>
        <br>
        <br>

        <div>
            <label>コメント</label>
            <br>
            <textarea cols="70" rows="7" name="comments"></textarea>
            <?php echo $_POST['comments'];?>
        </div>
        <br>
        <br>
        
        <div>
        <form method="post" action="insert.php">
            <input type="submit" class="submit" value="投稿する">
            <input type="hidden" value="<?php echo $_POST['handlename'];?>" name="handlename">
            <input type="hidden" value="<?php echo $_POST['title'];?>" name="title">
            <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
        </form>
        </div>


    </div>
        <div class="kiji">
            <h4>刺激を受けました！</h4>
            <div class='contents'>
                すごい勉強になりました。私も頑張ります。
                <div class='handlename'>posted byMr.SE</div>
            </div>
        </div>

        <div class="kiji2">
            <h4>タイトル</h4>
            <div class='contents'>
                今までなかった視点です。勉強になりました。
                <div class='handlename'>posted byMs.programmer</div>
            </div>
        </div>

    </div>
    </div>
    
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
