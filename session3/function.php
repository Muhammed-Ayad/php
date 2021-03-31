<?php


// function Mohamed($var1 ,$var2){
//       $var= $var1*$var2;
//       echo $var;
// }

// Mohamed(12,2);

 $var1 =10;
function sum ($var1 ){
    global $var1;
     $var1=20;


}

sum($var1);
echo $var1;
