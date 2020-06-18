<?php

/*
function sum($max){
    $result = 0;
    
    for($i = 1; $i <= $max; $i++){
        
        $result += $i;
    }
    
    return $result;
}

echo sum(100);
*/


/*
function f($x){
    $result = 0;
    
    $result = $x * 2;
    
    return $result;
}

echo f(200);
*/


/*
function f($a, $b){
    $result = 0;
    $result = $a + $b;
    return $result;
}

echo f(400,100);
*/


/*
function f($arr){
    $result = 1;
    
   for ($i = 0;$i < count($arr); $i++){
    $result *= $arr[$i];
   }
    
    return $result;
}

echo f( array(1,3,5,7,9) );
*/

/*
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    
    return $max_number;
}

echo max_array(array(1, 2, 3, 4, 15, 6, 7, 8, 9, 10));
*/



/*$strip_tags*/
/*
$t = '<h1>test tag</he¥>';

echo strip_tags($t);
*/

/*array_push*/
/*
$array = array(2,3,4);
array_push($array,5,6);


echo count($array);
*/  

/*array_merge*/
/*
$array1 = array(1,"color" => "red",3,);
$array2 = array("color" => "blue",4,8,"fruit" =>"apple");

$result = array_merge($array1,$array2);


print_r ($result);
*/


/*$NOW = date('Y-M-j');*/
/*
$BIRTHDAY = date('Y-M-j',mktime(0,0,0,10,8,1990));

print $BIRTHDAY;
*/

/*
$NEXTDAY = time()+(24*60*60);

echo date('Y-M-j',$NEXTDAY);
*/



