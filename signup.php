<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Registracija</title>
    
</head>
<body>

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
        <form action="signup.php" method="get">

            <div class="right">
                <div class="right-container">
                    <span class="close">x</span>
                    <div class="input">
                        <label for ="username">Username</label>
                        <input placeholder="Enter your user name" type="text" id="username" name="username"/>
                    </div>
                    <div class="input">
                        <label for ="email">E-mail</label>
                        <input placeholder="Enter your E-mail" type="text" id="email" name="email"/>
                    </div>
                    <div class="input">
                        <label for ="password">Password</label>
                        <input placeholder="Enter your password" type="password" id="password" name="password"/>
                    </div>
                    <div class="input">
                        <label for ="repeat-password">Repeat password</label>
                        <input placeholder="Enter your  password" type="password" id="repeat-password" name="repeat-password"/>
                    </div>

                    <div class="footer-elements">
                        <button class="btn" type="submit" name="prisijungti">Log In</button>
                        <a href="forgot.php">
                            <h6>Forgot ID or Pass</h6>
                        </a>
                    </div>
                </div>
        
            </div>
        </form>

    </div>
    
<?php 

    if(isset($_GET["prisijungti"])) {

        header("Location: login.php");

    }



    if(isset($_COOKIE["prisijungti"])) {
           
        header("Location: manopaskyra.php"); 

    }

?>


    
</body>
</html>