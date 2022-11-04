<?php
    $myfile2 = fopen("account.txt", 'w') or die("Unable to open file!");
    fwrite($myfile2, '10000');
    fclose($myfile2);
?>