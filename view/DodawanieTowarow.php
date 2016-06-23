<?php
session_start();
?>
<!DOCTYPE html>

<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome = 1"/>
        <meta name="author" content="Bartłomiej Nykiel"/>
        <title>Dodajemy nowy towar</title>
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

        <form class="form-horizontal" role="form" action="../controller/DodawanieTowarow.php"  method="post">
            <div class="form-group">
                <label for="usr">Nazwa:</label>
                <input type="text" class="form-control" id="nazwa" name="nazwa">
            </div>  
            <div class="form-group">
                <label for="usr">Cena:</label>
                <input type="text" class="form-control" id="cena" name="cena">
            </div> 
            <div class="form-group">
                <label for="usr">Cena zakupu:</label>
                <input type="text" class="form-control" id="cena_zak" name="cena_zak">
            </div> 
            <div class="form-group">
                <label for="usr">Marża:</label>
                <input type="text" class="form-control" id="marza" name="marza">
            </div>             
            <div class="form-group">
                <label for="usr">Ilość:</label>
                <input type="text" class="form-control" id="ilosc" name="ilosc">
            </div>
            <div class="form-group">
                <label for="comment">Opis:</label>
                <textarea class="form-control" rows="5" id="opis" name="opis"></textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Dodaj nowy towar</button>
                </div>
            </div>
        </form>





    </body>
</html>