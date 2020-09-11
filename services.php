<?php
	session_start();

	if(isset($_SESSION['rollno']) AND isset($_SESSION['password']) )
	{
        $userName = $_SESSION['fname']." ".$_SESSION['lname'];
    
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Services</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <!-- Header -->
    <? include('header.php') ?>
    
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->

    <!-- Lists -->

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Select Your Services</h1>
                <ul id="services">
                    <li>
                        <div class="container">
                            <div class="box">
                                <img src="./img/c.jpg" height=100px width=100px>
                                <h3>C LANGUAGE</h3>
                                <p>Code in your style using c</p>
                                <form action="c11.php">
                                    <button type="submit" class="button special">CLICK HERE AND START</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="box">
                                <img src="./img/c++prg.png" height=100px width=100px>
                                <h3>C++ LANGUAGE</h3>
                                <p>Code in your style using c++</p>
                                <form action="cpp11.php">
                                    <button type="submit" class="button special">CLICK HERE AND START</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
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