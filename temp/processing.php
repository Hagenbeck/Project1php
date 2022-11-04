<?php 
$grades = array(
    array(0, 0),
    array(0, 0),
    array(0, 0),
    array(0, 0),
    array(0, 0),
    array(0, 0),
);

$validation = true;

    //array mit post daten belegen
    for($i = 0; $i<=5; $i++){
        for($x= 0; $x<=4; $x++){
            $grades[$i][$x] = (int)$_POST["subject{$i}_field{$x}"];
            
            if($grades[$i][$x]<0 || $grades[$i][$x]>6){     //Validierung
                $validation=false;
            }
        }
    }

if($validation==true){
    //zähler für geschriebene Arbeiten und alle geschriebenen Noten addieren

    $average = 0;
    $count = 0;

    for($i = 0; $i<=5; $i++){
        for($x= 0; $x<=4; $x++){
            $average = $average + $grades[$i][$x];

            if($grades[$i][$x]!= 0){
                $count++;
            }
        }
    }

    //Durchschnitt bilden, wenn Klassenarbeiten eingetragen
    if($count != 0){
        $average = $average / $count;
        $average = round($average, 2, PHP_ROUND_HALF_UP);
    }

    //ausgeben
    print_r("Anzahl geschriebener Arbeiten: ");
    print_r($count);
    print_r("; Notendurchschnitt: ");
    print_r($average);
}
else{
    print_r("Bitte geben sie nur Zahlenwerte zwischen 0 und 6 ein.");
}

?>