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

        height: 11.8889rem;
    }

    .left-container {
       
        height: 8.5556rem;
              
    }

    .input {
            margin-bottom: 1rem ;
        }


    </style>
    
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
        <div class="right">
            <div class="right-container">
                <span class="close">x</span>
                
                <div class="input">
                    <label for ="email">E-mail</label>
                    <input placeholder="Enter your E-mail" type="text" id="email" name="email"/>
                </div>

                <div class="footer-elements">

                <button class="btn" type="submit" name="prisijungti">Send</button>
                
                <a href="login.php">
                    <h6>Log In</h6>
                </a>

                <a href="signup.php">
                    <h6>Sign up</h6>
                </a>
                
                </div>
            </div>
    
        </div>

    </div>


<?php 

    if(isset($_COOKIE["prisijungti"])) {
           
        header("Location: manopaskyra.php"); 

    }

?>


    
</body>
</html>