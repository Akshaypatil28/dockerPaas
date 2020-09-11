<?php
	session_start();

	if(isset($_SESSION['rollno']) AND isset($_SESSION['password']) )
	{
        $userName = $_SESSION['fname']." ".$_SESSION['lname'];
    
?>

<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>DockerPAAS | welocme</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <!-- Header -->
    <? include('header.php') ?>
    
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1>DockerPAAS: <span>Gives you a platform  <br />
					</span></h1>
            <ul class="actions">
                <li><a href="services.php" class="button alt">Get Started</a></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two">
        <div class="inner">
            <article>
                <div class="content">
                    <header>
                        <h3>C Programming</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/c.jpg" alt="" />
                    </div>
                    <p>This is C programming language</p>
                </div>
            </article>
            <article class="alt">
                <div class="content">
                    <header>
                        <h3>C++ programming</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/c++.jpg" alt="" />
                    </div>
                    <p>This is C++ programming language</p>
                </div>
            </article>

        </div>
    </section>

    
  
    <!-- Footer -->
    <section id="footer">
    </section>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
<?php 
    }
	else
	{
		header('location:./login.php');
	}
?>