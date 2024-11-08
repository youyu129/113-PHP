<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>資料庫連線</h1>
    <?php
    // $dsn通常都用這個變數
    // dbname資料庫名稱
    // port 資料庫用3306 web用80 可以不用寫
    // charset=utf8 編碼方式
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    // 帳號密碼
    $pdo=new PDO($dsn,'root','');

    $sql="select * from classes";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo $row['id']."-".$row['name']."-".$row['tutor']."<br>";
    }

    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
    ?>
</body>
</html>