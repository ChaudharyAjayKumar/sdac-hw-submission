<?php

$fruits=["apple"=>"red","banana"=>"yellow","orange"=>"orange","mango"=>"yellow"];
// foreach($fruits as $fruit => $color){
//     echo "the fruits is {$fruit} and it color is {$color}. <br>";
// }

$index=['one','two','three','four'];
// echo count($index);

// for($i=0; $i <= count($index)-1 ;$i++){
//    echo $index[$i]  . "<br>";
// }


// array_push($index,'five');
// echo array_pop($index);

$index2=['six'];
$index3 =array_merge($index,$index2);
echo array_pop($index3);


echo array_slice($index,1,2);



?>
