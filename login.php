<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            display: block;
            margin:auto;
            padding: 10px 20px;
            background-color: #0072E3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
<?php
if(isset($_GET['login'])){
?>
    <div class="login-container">
        <h2>登入</h2>
    <form action="check_acc.php" method="post">
        <div>
            <label for="帳號">帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="密碼">密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <P></P>
        <div>
            <input type="submit" value="登入">
        </div>
    </form>
    <div>

    </div>

    <?php
    }else{
?>
<div>
    你已登入
</div>
<?php
    }
?>

</body>
</html>