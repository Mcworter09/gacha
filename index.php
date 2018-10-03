<?php
session_start();
require "app/app.php";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>武器ガチャ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="gacha">
    <div class="wrapper">
        <div class="gacha-head">
            <?php if (isset($_SESSION["pouredMoney"])) :
                result();
            endif ?>
            <p id="banner">ガチャを回して武器を手に入れよう！</p>
            <form action="index.php" method="post">
                <button class="btn" type="submit" name="gachaActionCount" value="one">1回引く</button>
                <button class="btn" type="submit" name="gachaActionCount" value="five">５回引く</button>
                <button class="btn" type="submit" name="gachaActionCount" value="ten">10回引く</button>
                <button class="btn" type="submit" name="init" value="init">リセット</button>
            </form>
            </div>
        <?php if (!empty($_SESSION["pouredMoney"])) : ?>
        <div class="gacha-result">
            <?php $gacha->gachaResult($gacha->selectPrize($gacha->playGacha(cast($_POST["gachaActionCount"])))); ?>
        </div>
        <?php endif ?>
    </div>
</body>
</html>
