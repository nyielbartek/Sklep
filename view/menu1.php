<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">O nas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"> Submit</button>
            </form>
            <ul class="nav navbar-right">
                <li><a href="view/Rejestracja.php">Rejestracja</a></li>
            </ul>
            <form action="controller/login.php" method="post">
            <ul class="nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logowanie <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Login" name="login">
                            <input type="password" class="form-control" placeholder="Hasło" name="haslo">
                        </div>        
                        <button type="submit" class="btn btn-default" >Zaloguj</button>
                    </ul>
                </li>
            </ul>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

