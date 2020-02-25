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
                <li><a href="services.html" class="button alt">Get Started</a></li>
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

    <section id="two">
        <div class="inner">
            <article>
                <div class="content">
                    <header>
                        <h3>JAVA Programming</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/java.png" alt="" />
                    </div>
                    <p>This is Java programming language</p>
                </div>
            </article>
            <article class="alt">
                <div class="content">
                    <header>
                        <h3>php programming</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/php.jpg" alt="" />
                    </div>
                    <p>This is php programming language</p>
                </div>
            </article>

        </div>
    </section>
    <section id="two">
        <div class="inner">
            <article>
                <div class="content">
                    <header>
                        <h3>python Programming</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/python.png" alt="" />
                    </div>
                    <p>This is python programming language</p>
                </div>
            </article>
        </div>
    </section>
    <!-- Three -->
    <!-- <section id="three">
        <div class="inner">
            <article>
                <div class="content">
                    <span class="icon fa-laptop"></span>
                    <header>
                        <h3>Tempus Feugiat</h3>
                    </header>
                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna lorem ullamcorper laoreet, lectus arcu.</p>
                    <ul class="actions">
                        <li><a href="#" class="button alt">Learn More</a></li>
                    </ul>
                </div>
            </article>
            <article>
                <div class="content">
                    <span class="icon fa-diamond"></span>
                    <header>
                        <h3>Aliquam Nulla</h3>
                    </header>
                    <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed.</p>
                    <ul class="actions">
                        <li><a href="#" class="button alt">Learn More</a></li>
                    </ul>
                </div>
            </article>
            <article>
                <div class="content">
                    <span class="icon fa-laptop"></span>
                    <header>
                        <h3>Sed Magna</h3>
                    </header>
                    <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
                    <ul class="actions">
                        <li><a href="#" class="button alt">Learn More</a></li>
                    </ul>
                </div>
            </article>
        </div>
    </section> -->

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