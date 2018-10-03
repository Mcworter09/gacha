<?php

class Gacha
{
    //受け取った回数分ガチャを回す
    public function playGacha($count)
    {
        $draws = array();
        for($i = 0; $i < $count; $i++){
            $draws[] = mt_rand(1, 1000);
        }
        return $draws;
    }

    //景品を返す
    public function selectPrize($draws)
    {
        foreach($draws as $draw){
            if($draw >= 995){
                $prizes[] = ["とても強そうな三角" => "img/とても強そうな三角.jpg"];
            }elseif($draw < 995 && $draw >= 960){
                $prizes[] = ["強そうな鉄球" => "img/強そうな鉄球.jpg"];
            }elseif($draw < 960 && $draw >= 850){
                $prizes[] = ["エアガン" => "img/エアガン.jpg"];
            }elseif ($draw < 850 && $draw >= 700){
                $prizes[] = ["石の斧" => "img/石の斧.jpg"];
            }elseif ($draw < 700 && $draw >= 555){
                $prizes[] = ["木の剣" => "img/木の剣.jpg"];
            }elseif ($draw < 550 && $draw >= 300){
                $prizes[] = ["石" => "img/石.jpg"];
            }elseif ($draw < 300) {
                $prizes[] = ["木の枝" => "img/木の枝.jpg"];
            }
        }
    return $prizes;
    }

    //獲得した景品を表示
    public function gachaResult($prizes)
    {
        foreach ($prizes as $prize) {
            echo '<p>'.implode(array_keys($prize)).'を手に入れた！</p>',PHP_EOL;
            echo '<img src = "'.implode(array_values($prize)).'" alt = "'.implode(array_keys($prize)).'"width="200" height="200">';
        }
    }
}
