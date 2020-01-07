<?php

//two types of array 1.numerative 2.associative

$b= array (5,10,"meet",50.50);
for($i=0;$i<count($b);$i++){
    echo $b[$i];
    
}
//foreach ($b as $value) {
  //  echo $value;
    
//}

//associative key and value

$c= array (
    "a"=> "meet",
    "b"=> "shah"
    
    
);
foreach ($c as $key => $value) {
    echo "<br>".$value;
    
}
?>



