<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>
    <h1>BMI結果</h1>
    <div>你的身高：<?=$_GET['height'];?>公分</div>
    <div>你的體重：<?=$_GET['weight'];?>公斤</div>
    <?php
    $h=$_GET['height']/100;
    $w=$_GET['weight'];
    $bmi=round($w/($h*$h),2);
    ?>
    <div>你的BMI為：<?=$bmi;?></div>
<?php
if($bmi<18.5){
    $level="體重過輕";
}elseif($bmi<24){
    $level="健康體位";
}elseif($bmi<27){
    $level="過重";
}elseif($bmi<30){
    $level="輕度肥胖";
}elseif($bmi<35){
    $level="中度肥胖";
}else{
    $level="重度肥胖";
}
?>
    <div>體位判定為：<?=$level;?></div>
    <div>
        <a href="index.php">回首頁/重新量測</a>
    </div>

</body>
</html>