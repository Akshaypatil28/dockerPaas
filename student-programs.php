<?php
	session_start();

	if(isset($_SESSION['username']) AND isset($_SESSION['password']) )
	{
        $_SESSION['rollno'] = $_GET['rollno'];
    
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

        <?php 
            require('teacherheader.php');
        ?>
        <ul>
            <li><a href="show-student-programs.php?type=c">C Programs</a></li>
            <li><a href="show-student-programs.php?type=cpp">C++ Programs</a></li>
        </ul>
    </body>
    </html>
<?php 
    }
	else
	{
		header('location:./teacherlogin.php');
	}
?>