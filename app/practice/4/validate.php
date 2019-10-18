<?php
//ポスト内容を取得し、入力値が正しいか検証する。
?>

<html>
<head>
<style type="text.css">
.center{text-align:center;}
input{margin:5px;}
</style>
</head>
<body>
    <div class="center">
        <h1>入力フォームを検証しよう。</h1>
        <p>
            <?php
            //入力内容に誤りがあればエラーメッセージを、正しければ「あなたの好きな映画は〜です」と表示する
            ?>
        </p>
        <form action="" method="POST">
        <label>好きな映画</label>
        <input type="text" name="movie"><br>
        <input type="submit">
        </form>
    </div>
</body>
</html>