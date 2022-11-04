<!DOCTYPE html>
<html>
    <head>
        <title>Gluecksspiel</title>

        <link rel="stylesheet" href="align2.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    </head>
    <body> 
        <div class="test">
        <div class="container">
        
        <p>
        <?php
            
            $myfile = fopen("account.txt", 'r') or die("Unable to open file!");
            $data = (int)fgets($myfile);
            
            $betV = (int)$_POST["betValue"];
            $betN = (int)$_POST["betNumber"];

            $win = False;

        if($data>0 && $betV<=$data){
            $rand = rand(0,9);
            if($rand == $betN){
                $data = $data+$betV*9;
                $win = True;
            }
            else{
                $data = $data-$betV;
                $win = False;
            }
            
            $myfile2 = fopen("account.txt", 'w') or die("Unable to open file!");
            fwrite($myfile2, $data);
            fclose($myfile2);
            ?>

            <p>Guthaben:
            <?php 
                $myfile = fopen("account.txt", "r") or die("Unable to open file!");
                echo fgets($myfile);
                fclose($myfile);
            ?>
        </p>

        <?php   
        }
        elseif($data<=0){
            echo 'dein Guthaben ist leider aufgebraucht';
        }
        else{
            echo 'du kannst nicht mehr guthaben setzen, als du besitzt';
        }
        ?>
        </p>

        
        <form action="index.php" method="post">
            <p>Einsatz</p>
            <input type='number' name='betValue' value='100' size='1' maxlength='8'>
            <p>Zahl</p>
            <input type='number' name='betNumber' value='1' size='1' maxlength='1'>

            <p><input type="submit"/></p>
        </form>

        <p>Zufallszahl: 
            <?php 
                echo $rand;
            ?>
        </p>


        <form method="post" action="reset.php">
            
            <input type="submit" value="reset" name="reset">
        </form>

        <br>

        <?php
        if($win == true){
        ?>
        <div class="alert alert-success" role="alert">
            Gewonnen
        </div>
        <div class="Win">
            <p>
                Gewonnen
            </p>
        </div>
        
        <?php
        }
        else{
        ?>
        <div class="alert alert-danger" role="alert">
            Leider verloren
        </div>
        <div class="Loss">
            <p>
                Verloren
            </p>
        </div>
        <?php
        }
        ?>
        </div>
        </div>
    </body>
</html>