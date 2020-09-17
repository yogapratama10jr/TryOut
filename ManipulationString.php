<?php 
function stringmanipulation($kalimat){

$data = explode(" " , $kalimat);
print_r($data);
 
echo "<br/>";
echo "<br/>";

for($i=0;$x<count($data);$i++){	
  echo $data[$i]."<br/>";
    }
}
stringmanipulation("Burger Fries Fries Chicken Pizza Sandwich Milkshake Coke")
?>