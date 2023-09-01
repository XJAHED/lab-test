<?php

// NO :-1
echo "<u>Checking Marriage Age</u> <br>";

function marriage($man=0, $women=0){

  if($man >= 20){
    echo "He is marriageable age <br>";
  }elseif($man < 19){
    echo"He is not marriageable age<br>";
  }

  if($women >= 18){
    echo "She is marriageable age <br>";
  }elseif($women < 17){
    echo"She is not marriageable age <br>";
  }
  
}

marriage(20, 18);
echo "<br>";
marriage(18,16);
echo "<br>";




// NO:- 2
echo " <u> Temperature calculate </u> <br>";

function Temperature($celsius=0, $fahrenthit=0){
  
  if($celsius){
    $result = ($fahrenthit - 32) * 0.55;
    echo "CELSIUS = $result <br>";    
  }
  if($fahrenthit){
    $result_fahrenthit = ($celsius * 1.8) + 32;
    echo " FAHRENTHIT = $result_fahrenthit ";
  }

}

Temperature(30,90);
echo "<br>";
echo "<br>";



// NO :-3
echo "<u> GPA calculate</u> <br>";

function GPA($num=0){

   if($num >= 80){
    echo "Congratulations, You got A+ ";
   }elseif ($num >= 70 ){
     echo "Congratulations, You got A-";
   }elseif($num >= 60){
    echo "Congratulations, You got A";
   }elseif($num >= 50){
    echo "Congratulations, You got B ";
   }elseif($num >= 40){
    echo "Congratulations, You got C";
   }elseif($num >= 1 ){
    echo "Sorry, You got F";
   }

}

GPA(85);
echo "<br>";
GPA(50);
echo "<br>";
GPA(39);
echo "<br>";
echo "<br>";



// NO:-5
echo"<u>Password vaild check </u><br>";
function password($number){

  if( strlen($number) >=6 ){
    echo password_hash($number, PASSWORD_BCRYPT);
    echo "<br>";
     echo "Your password is valid";
  }else{
    echo "Your password is not valid";
  }

}
password(123456);
echo "<br>";
password(12345);


?>