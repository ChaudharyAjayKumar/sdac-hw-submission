<?php 
$cars=['Toyota' => 'coralla','honda'=>'accord','tesla'=>'model 3','ford'=>'mustang','mahindra'=>'that'];
$index=['one','two','three','four'];
$index4=[1,2,3,4,5];
// a
// for ($i=0; $i < count($index) ; $i++) { 
//     echo $index[$i] . "<br>";
// }

// b
// foreach($cars as $company => $model){
//        echo "the car company {$company} and its model is {$model}. <br>";
// }

// c
//array_push
// array_push($index,'five');
// for ($i=0; $i < count($index) ; $i++) { 
//     echo $index[$i] . "<br>";
// }

// array_pop 
// echo array_pop($index) . "<br>";

//array_merge
// $index2=['six'];
// $index3=array_merge($index,$index2);
// for ($i=0; $i < count($index3) ; $i++) { 
//     echo $index3[$i] . "<br>";
// }

//array_slice(array,start,length,preserve key) last value is used in assocarive array
//  $array= array_slice($index,2,2);
//   for ($i=0; $i < count($array) ; $i++) { 
//     echo $array[$i] . "<br>";
// }

// array_keys
 $array2= array_keys($cars);
  for ($i=0; $i < count($array2) ; $i++) { 
    echo $array2[$i] . "<br>";
}

?>