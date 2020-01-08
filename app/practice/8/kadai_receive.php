<?php
$infos = array(
    'admin' => array(
        'name' => '社長',
        'team' => '社長',
        'passwd' => '1234'
    ),
    'user1' => array(
        'name' => '鈴木',
        'team' => '営業',
        'passwd' => '1111'
    ),
    'user2' => array(
        'name' => '高橋',
        'team' => '経理',
        'passwd' => '2222'
    ),
    'user3' => array(
        'name' => '山田（営業）',
        'team' => '営業',
        'passwd' => '3333'
    ),
    'user4' => array(
        'name' => '中村',
        'team' => '経理',
        'passwd' => '4444'
    ),
    'user5' => array(
        'name' => '山田（総務）',
        'team' => '総務',
        'passwd' => '5555'
    )
);

$tasks = array(
    'user1' => array(
        'name' => '鈴木',
        'team' => '営業',
        'task' => array('A社訪問','B社資料送付')
    ),
    'user2' => array(
        'name' => '高橋',
        'team' => '経理',
        'task' => array('帳簿処理','請求書発行')
    ),
    'user3' => array(
        'name' => '山田（営業）',
        'team' => '営業',
        'task' => array('C社訪問','D社資料送付','E社資料送付')
    ),
    'user4' => array(
        'name' => '中村',
        'team' => '経理',
        'task' => array('請求書発行','先月の締め')
    ),
    'user5' => array(
        'name' => '山田（総務）',
        'team' => '総務',
        'task' => array('求人開始','退職予定者の処理作業')
    )
);

$receivedName = $_POST['receivedName'];
$receivedPasswd = $_POST['receivedPasswd'];

?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>業務管理システム</h1>

    <?php
    foreach($infos as $userkey1 => $info):
        if($receivedName === $info['name'] && $receivedPasswd !== $info['passwd']){
        ?>
            <p>パスワードが間違っています</p>
        <?php
        }elseif($receivedName === $info['name'] && $receivedPasswd === $info['passwd']){
        ?>
            <p>●社員名<br><?php echo $info['name']?></p>
            <p>●チーム<br><?php echo $info['team']?></p>
            <p>●タスク一覧</p>
            <?php
            if($receivedName === $infos['admin']['name']){
                foreach($tasks as $userkey2 => $task):
            ?>
            <p><?php echo $task['name']?>さん</p>
            <ul>
                <?php
                foreach($task['task'] as $var):
                ?>
                <li><?php echo $var ?></li>
                <?php endforeach;?>
            </ul>
            <?php endforeach;?>
            <?php
            }else{
                foreach($tasks as $userkey2 => $task):
                    if($userkey1 === $userkey2):
                    ?>
                        <ul>
                            <?php
                            foreach($task['task'] as $var):
                            ?>
                            <li><?php echo $var ?></li>
                        <?php
                        endforeach;
                    endif;
                endforeach;
            }
        }
    endforeach;
?>
</body>
</html>