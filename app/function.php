<?php

//入力値をキャスト
function cast($s){
    switch ($s){
        case "one":
            return 1;
            break;

        case "five":
            return 5;
            break;

        case "ten":
            return 10;
            break;

        default:
            echo "エラーです".PHP_EOL;
            break;
    }
}

//バリデーション
function valid(){
    if (
        filter_input(INPUT_POST,"one") ||
        filter_input(INPUT_POST,"five") ||
        filter_input(INPUT_POST,"ten")
        ){
        return true;
    }else{
        echo "失敗";
        return false;
    }
}

//投入金額の合計値を返す
function pouringMoney($drawCount){
    $pouredMoney = $drawCount * 300;
    return $pouredMoney;
}

//状態の表示
function result(){
    echo '<p>総課金額：' . $_SESSION["pouredMoney"] . '</p>';
    echo '<p>引いた回数：' . $_SESSION["totalDrawCount"] . '</p>';
}
