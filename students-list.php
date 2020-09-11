<?php
    session_start();
    if(isset($_SESSION['username']) and isset($_SESSION['password'])){
        $year = $_GET['year'];
        require './Database Connection/db.php';

        $sql = "SELECT rollno, fname, lname FROM students WHERE year='$year' ";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);

        if($num_rows == 0)
        {
            $_SESSION['message'] = "Invalid User Credentials!";
            // header("location: error.php");
        }
    }
?>
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
            <?php 
                while($User = $result->fetch_assoc()){ ?>
                <div class="content">
                    <header>
                       <a href=<?php echo "./student-programs.php?rollno=".$User['rollno'] ?> ><?php echo $User['rollno']."-".$User['fname']." ".$User['lname'] ?></a>
                    </header>
                </div>
                <?php } ?>
            </article>
        </div>
    </section>
</body>
</html>