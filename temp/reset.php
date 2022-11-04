<?php
    $myfile2 = fopen("account.txt", 'w') or die("Unable to open file!");
    fwrite($myfile2, '10000');
    fclose($myfile2);
    print_r("Ihr Guthaben wurde auf 10000 gesetzt");

?>