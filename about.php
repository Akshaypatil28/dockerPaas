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
    <title>About</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

</head>

<body>

    <!-- Header -->
    <? include('header.php') ?>
   
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->
    <section id="main">
        <div class="inner">
            <header class="major special">
                <h1>Developers</h1>
                <!-- <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p> -->
            </header>

    </section>
    <section id="two">
        <div class="inner">
            <article>
                <div class="content">
                    <header>
                        <h3>Switi Mhaiske(2016BTECS00039)</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/img.png" alt="Switi" />
                    </div>
                    <!-- <p>2016bte</p> -->
                </div>
            </article>
            <article class="alt">
                <div class="content">
                    <header>
                        <h3>Ravikumar Navale(2016BTECS00009)</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/img.jpg" alt="Ravikumar" />
                    </div>
                    <!-- <p>2016BTECS00009</p> -->
                </div>
            </article>
            <article class="alt">
                <div class="content">
                    <header>
                        <h3>Akshay Patil(2016BTECS00021)</h3>
                    </header>
                    <div class="image fit">
                        <img src="img/img.jpg" alt="Akshay" />
                    </div>
                    <p></p>
                </div>
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