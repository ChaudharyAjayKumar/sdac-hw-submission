<?php 

// a
$single='ajay';
$double="kumar";

echo $single ."<br>";
echo $double ;

// b
$car='mahindra';
$price =20000;
echo " <br> the car model {$car} is of price {$price}.";

// c
$desp="    Lorem ipsum dolor sit Amet consectetur, adipisicing elit. Perferendis quia quaerat ipsum. Est quas quis architecto harum iusto, cumque iure?                  .";
echo "<br>" .strpos($desp,'sit');

// d  str_replace(what,with,inwhich)
// $return=str_replace("Lorem","ram ram ",$desp);
// echo  "<br>" . $return;

// e
// echo "<br>" .  strlen($desp)  ;
//  echo "<br>" .  strtolower($desp) ;
//  echo "<br>" . strtoupper($desp)  ;
// echo "<br>" .  trim($desp)  ;
 echo "<br>" .  substr($desp,2,4) ;

?>