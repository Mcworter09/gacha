<?php

require_once "Gacha.php";
require_once "function.php";

//ガチャスタート
if(filter_input(INPUT_POST, "gachaActionCount")){

    $gacha = new Gacha;

    $_SESSION["totalDrawCount"] += cast($_POST["gachaActionCount"]);

    $_SESSION["pouredMoney"] += pouringMoney(cast($_POST["gachaActionCount"]));

 //初期化
}else if(filter_input(INPUT_POST,"init")){

    $_SESSION["pouredMoney"] = $_SESSION["totalDrawCount"] = 0;
    header("Location:".$_SERVER["REQUEST_URI"]);

}