<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Registracija</title>


    <style> 

    .right {

        height: 16.8889rem;
    }

    .left-container {
       
        height: 13.5556rem;
              
    }

    .fraze {
           text-align: center;
           color: red;
           margin-top: 15px;
           font-weight: 700;
        }

        .textas {
            text-align: center;
        }

        .div {
            margin-top: 30px;
            
        }


        .btn {
            font: normal normal normal 1rem/1.1667rem Gill Sans MT;
            color: #FFFFFF;
            background-color: #FFC0CB;
            border: none;
            padding-left: 2.2222rem;
            padding-top: 0.5556rem;
            padding-right: 2.2222rem;
            padding-bottom: 0.5556rem;
            border-radius: 20px;
            box-shadow: 0 4px 8px darkgrey;
 
        }

    </style>
    
</head>
<body>

        
    
<?php 

        if(isset($_GET["prisijungti"])) {

            $registruotiVartotojai = array (

                array(
                    "vardas" => "admin", 
                    "slaptazodis" => "admin", 
                    "teises" => 0
                ),
                array(
                    "vardas" => "admin1", 
                    "slaptazodis" => "admin1", 
                    "teises" => 1
                ),
                array(
                    "vardas" => "admin2", 
                    "slaptazodis" => "admin2", 
                    "teises" => 2
                ),
                

            );

            if(isset($_GET["vardas"]) && !empty($_GET["vardas"]) && isset($_GET["slaptazodis"]) && !empty($_GET["slaptazodis"])) 
            {
                $vardas = $_GET["vardas"];
                $slaptazodis = $_GET["slaptazodis"];

                foreach($registruotiVartotojai as $elementas) {

                    $teisingasDuomuo = false;
                    $laikinasis_vardas = "";
                    $laikinasis_teises = "";
        
                    if($vardas == $elementas["vardas"] && $slaptazodis == $elementas["slaptazodis"]) {
                        
                        $teisingasDuomuo = true;
                        $laikinasis_vardas = $elementas["vardas"];
                        $laikinasis_teises = $elementas["teises"];
                        break;
                    }
                }

                if($teisingasDuomuo) {

                    setcookie("prisijungti", $laikinasis_vardas, time() + 3600 * 24, "/");
                    setcookie("teises", $laikinasis_teises, time() + 3600 * 24, "/"); 
                    
                    header("Location: login.php");


                } else {

                    $message = "Blogas vartotojo vardas arba slaptazodis";
                }

            } else {

               $text = "Iveskite vartotoja ir slaptazodi ";
            }

        }

?>

<?php if(!isset($_COOKIE["prisijungti"])) { ?>
    <div class="container">
        <div class="left">
            <div class="left-container">
                <h1>Singn up</h1>

                <div class="nuorodos">
                    <a href="#">Privacy policy</a>
                    <p>&</p>
                    <a href="#">terms of service</a>
                </div>

            </div>
        </div>
    <form action="login.php" method="get">
        <div class="right">
            <div class="right-container">
                <span class="close">x</span>
                <div class="input">
                    <label for ="username">Username</label>
                        <input type="text" name="vardas" placeholder="Suveskite varda"/>
                    </div>
                    
                        <div class="input">
                            <label for ="password">Password</label>
                            <input type="password" name="slaptazodis" placeholder="Suveskite slaptazodi"/>
                        </div>

                        <div class="footer-elements">
                        <button class="btn" type="submit" name="prisijungti">Log In</button>
                            <p>or</p>
                            <a href="forgot.php">Forgot ID or Password</a>
                        </div>

                        <div class="fraze">
                            <?php
                                if(isset($message)) {
                                    echo $message;
                                } 

                                if(isset($text)) {
                                    echo $text;  
                                }
                            ?>
                        </div>
            
                    </div>


                </div>

            </form>
    </div>
    
<?php } else {?> 

    
<?php

echo '<div class="container">
<div class="left">
    <div class="left-container">
        <h1>Singn up</h1>

        <div class="nuorodos">
            <a href="#">Privacy policy</a>
            <p>&</p>
            <a href="#">terms of service</a>
        </div>
    </div>
</div>
<form action="login.php" method="get">
<div class="right">
    <div class="right-container">
        <span class="close">x</span>
        

    </form>

</div>';

?>


<div class="textas">
    <?php

        if(isset($_COOKIE["prisijungti"]) && isset($_COOKIE["teises"])){
            echo "Sveikas atvykes". " ". ($_COOKIE["prisijungti"]). " suteiktos teises: ". ($_COOKIE["teises"]);

            ?>

            <div class="div">

                <form action="login.php" method="get">
                                            
                    <button class="btn" type="submit" name="atsijungti">Atsijungti</button>
                                                            
                </form>

            </div>
           
                
            <?php
                    

                if(isset($_GET["atsijungti"])) {

                    setcookie("prisijungti", "", time() -3600, "/");
                    setcookie("teises", "", time() -3600, "/");

                    header("Location: login.php");
                } 

        } else {


            header("Location: manopaskyra.php");

                
                    

        }

                
    ?>




</div>


<?php } ?> 

 
</body>
</html>

