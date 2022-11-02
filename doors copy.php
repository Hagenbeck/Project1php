<?php
$doors = array();

//array mit hundert offenen Türen
for($i = 0; $i<100; $i++){
    array_push($doors,true);
}


for($i = 2; $i<=100; $i++){             //von jeder zweiten bis zu der hundertsten Tür
    for($x= 1; $x*$i<=100; $x++){       //solange wie jeder zweite(oder auch hundertste) in das array passt, den status der tür ändern                                       
        if($doors[$x*$i-1] == true){    //wenn auf dann zu, sonst auf
            $doors[$x*$i-1] = false;  
        }
        else{
            $doors[$x*$i-1] = true;
        }
    }
}


//offene Türen durchzählen und speichern
$count = 0;
$open = array();

   for($i = 0; $i<100; $i++){
        if($doors[$i] == true){
            $count++;
            array_push($open, $i+1);
        }     
    }


//print_r($doors);
print_r($count);
print_r("<br>");
print_r($open);

?>