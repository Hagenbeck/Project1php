<!DOCTYPE html>
<html>
    <head>
        <title>Notenformular</title>
        
        <link rel="stylesheet" href="align.css">

    </head>

    <body>
        
        <h1>Notenformular</h1>
            
        <div class = "wrapper">
            <form action="processing.php" method="post">
            
            <?php
            
            $array = [
                0 => "Deutsch",
                1 => "Mathe",
                2 => "Englisch",
                3 => "Physik",
                4 => "Geschichte",
                5 => "Geographie",
            ];

                for ($i = 0; $i<=5; $i++){ ?>
                    <div class='child<?=$i?>'>
                        <p><?= $array[$i] ?></p>
    
                  <?php for ($x = 0; $x<=4; $x++){ ?>
                            <input type='number' name='subject<?=$i?>_field<?=$x?>' value='0' size='1' maxlength='1'>

                  <?php }  ?>
                    </div>
         <?php }  ?>
           
            <p><input type="submit" /></p>

            </form>           
        </div>

        <form action="doors.php" method="post">
        <p><input type="submit" /></p>
        </form>

    </body>
</html>