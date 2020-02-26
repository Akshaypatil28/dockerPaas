<?php
	session_start();
    $_SESSION['message']="";
	if(isset($_SESSION['rollno']) AND isset($_SESSION['password']) )
	{
        $userName = $_SESSION['fname']." ".$_SESSION['lname'];
        $prg = $_GET['type'];
        require 'Database Connection/db.php';
		
		$rollno = $_SESSION['rollno'];
		$sql = "select name, submissiondate from programs where rollno = '$rollno' and name regexp '$prg$'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows == 0)
        {
            $_SESSION['message']="no programs availble";
        }

        else
        {    
?>
<!DOCTYPE HTML>
    <!--
        Introspect by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
    -->
<html>

    <head>
        <title>C programs</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <!-- <link rel="stylesheet" href="./css/style.css"> -->

    </head>
    <body>

    <?php 
        require('header.php');
    ?>
    <ul>
        <?php  while($User=$result->fetch_assoc()){
            echo '<a href="openeditor.php?name='.$User['name'].'"><li >'.$User['name'].'</li></a>';
            }

}?>       
        
    </ul>
    </body>
</html>
<?php 
    }
    else
        header('location:./login.php');
?>