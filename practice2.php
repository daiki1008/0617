<?php


$name ="Daiki";
if ($name = "Daiki"){
    echo "私はあなたの名前です";
}else{
    echo "あなたの名前ではありません";
}



for($i=0; $i<=10000; $i++){
    $total += $i;
}

echo $total;



$fruites = array("appl","banana","grape","strobery","peach");

foreach($fruites as $fruite){
     echo "要素は".$fruite;
     echo "\n";
}


$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
    
    if($i % 5 == 0 ){
        echo $i;
        echo "\n";
    }
}
