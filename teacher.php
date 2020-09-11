<?php
	session_start();

	if(isset($_SESSION['username']) AND isset($_SESSION['password']) )
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
    <? include('teacherheader.php') ?>
    
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

    <!-- One -->
    <!-- <section id="one">
        <div class="inner">
            <header>
                <h2>Magna Etiam Lorem</h2>
            </header>
            <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscin sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu,
                erisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante.</p>
            <ul class="actions">
                <li><a href="#" class="button alt">Learn More</a></li>
            </ul>
        </div>
    </section> -->

    <!-- Two -->
    <section id="two">
        <div class="inner">
            <article>
                <div class="content">
                    <header>
                        <a href="./students-list.php?year=first year">First Year Student</a>
                    </header>
                </div>
            </article>
            <article class="alt">
                <div class="content">
                    <header>
                        <a href="./students-list.php?year=second year">Second Year Student</a>
                    </header>
                </div>
            </article>
        </div>
    </section>
    <section id="two">
        <div class="inner">
            <article>
                <div class="content">
                    <header>
                        <a href="./students-list.php?year=third year">Third Year Student</a>
                    </header>
                </div>
            </article>
            <article class="alt">
                <div class="content">
                    <header>
                        <a href="./students-list.php?year=final year">Final Year Student</a>
                    </header>
                </div>
            </article>
        </div>
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
		header('location:./teacherlogin.php');
	}
?>