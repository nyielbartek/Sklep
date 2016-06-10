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

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">                   
                    <a class="navbar-brand" href="../index.php">wróć</a>
                </div>
            </div>
        </nav>

        <form class="form-horizontal" role="form" action="../controller/Rejestracja.php"  method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Adres email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" value="<?php
                    if (isset($_SESSION['fEmail'])) {
                        echo $_SESSION['fEmail'];
                        unset($_SESSION['fEmail']);
                    }
                    ?>" name="email" placeholder="podaj adres email">
                </div>     
                <?php
                if (isset($_SESSION['e_email'])) {
                    echo '<div class = error>' . $_SESSION['e_email'] . '</div>';
                    unset($_SESSION['e_email']);
                }
                ?>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="login">Login:</label>
                <div class="col-sm-10">
                    <input type="login" class="form-control" id="r_login" value="<?php
                    if (isset($_SESSION['fLogin'])) {
                        echo $_SESSION['fLogin'];
                        unset($_SESSION['fLogin']);
                    }
                    ?>" name="r_login" placeholder="zaproponuj login">
                </div>     
                <?php
                if (isset($_SESSION['e_login'])) {
                    echo '<div class = error>' . $_SESSION['e_login'] . '</div>';
                    unset($_SESSION['e_login']);
                }
                ?>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="haslo1">Hasło:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="haslo1" name="haslo1" placeholder="wpisz hasło">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="haslo1">Powtórz hasło:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="haslo2" name="haslo2" placeholder="powtórz hasło">
                </div>
                <?php
                if (isset($_SESSION['e_haslo'])) {
                    echo '<div class = error>' . $_SESSION['e_haslo'] . '</div>';
                    unset($_SESSION['e_haslo']);
                }
                ?>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" placeholder="regulamin" name="regulamin" <?php
                            if (isset($_SESSION['fRegulamin'])) {
                                echo "checked";
                                unset($_SESSION['fRegulamin']);
                            }
                            ?>> Akceptuję regulamin</label> <!-- label, żeby też kliknięcie na nazwę obsługiwać-->
                    </div>
                    <?php
                    if (isset($_SESSION['e_regulamin'])) {
                        echo '<div class = error>' . $_SESSION['e_regulamin'] . '</div>';
                        unset($_SESSION['e_regulamin']);
                    }
                    ?>
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6Leg0iATAAAAAEwkfuKsOfpFo8Xcd6wqkUkehw_r"></div> <!-- google mi to dał-->
            <?php
            if (isset($_SESSION['e_captcha'])) {
                echo '<div class = error>' . $_SESSION['e_captcha'] . '</div>';
                unset($_SESSION['e_captcha']);
            }
            ?>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Zarejestruj</button>
                </div>
            </div>
        </form>





    </body>
</html>