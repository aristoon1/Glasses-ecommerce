<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mr-5 font-weight-bold" href="index.php">Glasses Broken</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link font-weight-bold" href="about.php">About</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link font-weight-bold" href="eyeglass.php">Eyeglass frames</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link font-weight-bold" href="glasses.php">Glasses</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link font-weight-bold" href="contact.php">Contact</a>
                    </li>

                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="mycart.php"> <i class="fa fa-shopping-cart"></i> My Cart</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"> | </a>
                    </li>

                    <?php if (strlen(isset($_SESSION['login']) == 0)){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Login / Register</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Hi, <?php echo $_SESSION['login'] ?></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php"><b>Logout</b></a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </nav>
    </div>
</div>