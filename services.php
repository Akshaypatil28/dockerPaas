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
                                <form action="./pages/c/c11.php">
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
                    <li>
                        <div class="container">
                            <div class="box">
                                <img src="./img/java.png" height=100px width=100px>
                                <h3>JAVA LANGUAGE</h3>
                                <p>Code in your style using java</p>
                                <form action="java11.php">
                                    <button type="submit" class="button special">CLICK HERE AND START</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="box">
                                <img src="./img/python.png" height=100px width=100px>
                                <h3>PYTHON LANGUAGE</h3>
                                <p>Code in your style using python</p>
                                <form action="py111.php">
                                    <button type="submit" class="button special">CLICK HERE AND START</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="box">
                                <img src="./img/php.jpg" height=100px width=100px>
                                <h3>PHP LANGUAGE</h3>
                                <p>Code in your style using php</p>
                                <form action="heart.php">
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
        <!-- <div class="inner">
            <header>
                <h2>Get in Touch</h2>
            </header>
            <form method="post" action="#">
                <div class="field half first">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="6"></textarea>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="alt" /></li>
                </ul>
            </form>
            <div class="copyright">
                &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
            </div>
        </div> -->
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