<?php  
 session_start();
 ?>
<!DOCTYPE html>

<html lang="pl">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome = 1"/>
    <meta name="author" content="Bartłomiej Nykiel"/>
    <title>Załóż nowe konto</title>
    <script src='https://www.google.com/recaptcha/api.js'></script> <!-- google mi to dał jak się na reCAPTCHA zarejestrowałem -->
    <style>
        .error
        {
            color: red;
            margin-top: 10px;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>        
    </head>
    <body>
        <form action="../controller/Rejestracja.php"  method="post" >
            adres e-mail:  
            <?php if (isset($_SESSION['e_email']))
            {
                echo '<div class = error>'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);
            }?>
            <input type="text" class="form-control" placeholder="Email" name="email"><br/><br/>
            Login: 
            <?php if (isset($_SESSION['e_login']))
            {
                echo '<div class = error>'.$_SESSION['e_login'].'</div>';
                unset($_SESSION['e_login']);
            }?>
 
            <input type="text" class="form-control" placeholder="Login" name="r_login"><br/><br/>
            Hasło:
            <?php if (isset($_SESSION['e_haslo']))
            {
                echo '<div class = error>'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }?>
            <!-- typ password maskuje znaki-->
            <input type="password" class="form-control" placeholder="Hasło" name="haslo1"><br/><br/>
            Powtórz hasło:
            <input type="password" class="form-control" placeholder="Hasło2" name="haslo2"><br/><br/>
            <label> <!-- etykieta label pozwala na połączenie również nazwy, Ergo, kliknięcie na nazwę zaznaczy boxa -->          
            <input type="checkbox" class="form-control" placeholder="regulamin" name="regulamin"> Akceptuję regulamin
            </label> 
            <?php if (isset($_SESSION['e_regulamin']))
            {
                echo '<div class = error>'.$_SESSION['e_regulamin'].'</div>';
                unset($_SESSION['e_regulamin']);
            }?>
            <br />
            <div class="g-recaptcha" data-sitekey="6Leg0iATAAAAAEwkfuKsOfpFo8Xcd6wqkUkehw_r"></div> <!-- google mi to dał-->
            <?php if (isset($_SESSION['e_captcha']))
            {
                echo '<div class = error>'.$_SESSION['e_captcha'].'</div>';
                unset($_SESSION['e_captcha']);
            }?>
            <button type="submit" class="btn btn-default" >Zarejestruj</button>
        </form>
        
    </body>
</html>