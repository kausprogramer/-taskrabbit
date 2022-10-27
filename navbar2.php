<?php session_start(); ?>
<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
        </button>
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" class="logo logo-scrolled" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="jobs.php"><i class="fa fa-briefcase"></i>Jobs</a></li>
                <?php

                if(isset($_SESSION['username']))
                {
                    echo "<li><a href='dashboard.php'><i class='fa fa-dashboard'></i>Your Account</a></li>";
                    echo "<li><a href='backend/logout.php'><i class='fa fa-sign-out'></i>Logout</a></li>";
                }
                else
                {
                    echo "<li><a href='register.php'><i class='fa fa-user-plus'></i>Register</a></li>";
                    echo '<li class="left-br"><a href="login.php" class="signin">Log In</a></li>';
                }
                ?>
                </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>