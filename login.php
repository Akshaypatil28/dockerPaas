<?php
    session_start();
    if(isset($_REQUEST['rollno']) and isset($_REQUEST['pass'])){
        $rollno = $_POST['rollno'];
        $pass = $_POST['pass'];
        
        require './Database Connection/db.php';

        $sql = "SELECT * FROM students WHERE rollno='$rollno' and password='$pass' ";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);

        if($num_rows == 0)
        {
            $_SESSION['message'] = "Invalid User Credentials!";
            // header("location: error.php");
        }

        else
        {
            $User = $result->fetch_assoc();

                $_SESSION['rollno'] = $User['rollno'];
                $_SESSION['fname'] = $User['fname'];
                $_SESSION['lname'] = $User['lname'];
                $_SESSION['year'] = $User['year'];
                $_SESSION['password'] = $User['password'];
                header('location:./index.php');
           
        }
    }
    else {
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>DockerPAAS : Login</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>

    <body class="subpage">

       

    <form method="POST" action="./login.php">
        <section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
            <div class="inner">
                <div class="box">
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="rollno" id="rollno" value="" placeholder="rollno" required/>
                            <br />
                        </div>
                        <div class="col-xs-12">
                            <input type="password" name="pass" id="pass" value="" placeholder="Password" required/>
                            <br />
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="actions">
                                    <li><input type="submit" name="submit" class = "button special" value="Login" /></li>
                                </ul>
                            </div>
                        </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-3">
                            <a href="SignUp.php" class="button alt">SIGN UP</a>
                        </div>
                        <div class="col-xs-3">
                            <center>
                                <a href="#" class="btn btn-danger">Forget Password</a>
                            </center>
                        </div>
                        <div class="col-xs-3"></div>
                    </div>
                </div>
            </div>
        </section>
    </form>


    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    </body>
</html>
<?php } ?>
