<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>業務管理システム</h1>
    <form action="kadai_receive.php" method="POST">
        <p>名前を選択してください</p>
        <label for="lf_name">名前</label>
        <select name="receivedName" id="user_name">
            <option value="社長">社長</option>
            <option value="鈴木">鈴木</option>
            <option value="高橋">高橋</option>
            <option value="山田（営業）">山田（営業）</option>
            <option value="中村">中村</option>
            <option value="山田（総務）">山田（総務）</option>
        </select>
        <p>パスワードを入力してください</p>
        <label for="lf_passwd">パスワード</label>
        <input type="text" name="receivedPasswd" id="lf_passwd">
        <input type="submit">
    </form>
</body>
</html>