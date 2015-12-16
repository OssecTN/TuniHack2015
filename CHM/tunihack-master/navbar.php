   <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        ☰
    </button>
    <a class="navbar-brand" href="#">Hi <?php echo $_SESSION['name'];?> </a>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="send.php">Send</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="receive.php" >Receive</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="setting.php" >Setting</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="logout.php" >Log out</a>
            </li>
        </ul>
    </div>
</nav>