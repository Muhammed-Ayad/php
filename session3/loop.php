<?php
  
// امثله علي foreach مع array


// number 1
$var =array(1,2,3,4,5,6,8,5);
  foreach($var as $var1)
    {
        echo $var1."<br />";
    }

//number 2
$var10 = array("name"=>"Mohamed","mobile"=>"01062108321");
      foreach($var10 as $k=>$v)
      {
          echo $k." : " .$v. "<br />";
      }    


//number 3
$var = array ("gender"=>"male","name "=>"Ahmed");
           foreach($var as $k=>$v)
           {
               echo $k." : ".$v."<br />";
           }



