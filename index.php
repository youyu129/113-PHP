<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h1>計算BMI</h1>
    <form action="result.php" method="get">
        <!-- 換行：<br>是早期的用法 現在多用<div> -->
        <div>
            <label for="height">身高：</label>
            <input type="number" name="height" id="height" step="0.1">cm
        </div>
        <div>
            <label for="weight">體重：</label>
            <input type="number" name="weight" id="weight" step="0.1">kg
        </div>
        <div>
            <!-- 輸入input:submit+input+reset -->
            <input type="submit" value="計算">
            <input type="reset" value="清空/重置">
        </div>
    </form>
</body>
</html>