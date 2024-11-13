<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
    $pdo=new PDO ($dsn,'root','');

    if (!isset($_POST['acc'])){
        header("location:login2.php");
        exit();
    }

    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    
    $sql="select * from `member` where `acc`='$acc' && `pw`='$pw'";
    $row=$pdo->query($sql)>(PDO::FETCH_ASSOC);

    // 用來檢查
    echo"<pre>";
    print_r($row);
    echo"</pre>";

    $pdo->query($sql);

    if($acc==$row['acc'] && $pw==$row['pw']){
        echo"帳密正確，登入成功";
        echo "<br><a href='login2,php'>回首頁</a>";
        }else{
            echo "帳密錯誤，登入失敗";
    }
    ?>

</body>
</html> 