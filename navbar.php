
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand text-muted" style="font-size: 1.0em" href="#">Voting System</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav" style="font-size: 1.0em">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <?php if ($_SESSION["students"]["status"]=="admin"):?>
            <li class="nav-item">
                <a class="nav-link" href="results.php">Results</a
            </li>
            <li class="nav-item">
               <li class="nav-item">
                <a class="nav-link" href="r egister.php">Register</a
            </li>
            </li>
            <?php endif;?>

        </ul>
            <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                <a class="nav-link " href="logout.php">Log out</a>
                    </li>
                <?php /*if ($_SESSION["students"]["names"])
                    $names;
                */?>
            </ul>





    </div>
</nav>
