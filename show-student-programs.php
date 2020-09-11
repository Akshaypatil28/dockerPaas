<?php
	session_start();
    $_SESSION['message']="";
	if(isset($_SESSION['username']) AND isset($_SESSION['password']) )
	{
        $prg = $_GET['type'];
        $rollno = $_SESSION['rollno'];
        require 'Database Connection/db.php';
		
        $rollno = $_SESSION['rollno'];
        $sql = "select name, submissiondate, status, grade from programs where rollno = '$rollno' and name regexp '$prg$'";
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
        <style>
            table{
                color:black;
            }
            a{
                color:black;
            }
        </style>

    </head>
    <body>
        <?php include('./teacherheader.php') ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>date of submission</th>
                    <th>Status</th>
                    <th>Grade(/10)</th>
                </tr>
            </thead>
            <tbody>
                <?php  while($User=$result->fetch_assoc()){ ?>
                <tr>
                    <td>
                        <?php echo '<a href="openeditor.php?name='.$User['name'].'">'.$User['name'].'</a>';?>
                    </td>
                    <td>
                        <?php echo '<a href="openeditor.php?name='.$User['name'].'">'.$User['submissiondate'].'</a>';?>
                    </td>
                    <td >
                        <?php 
                            if($User['status']==0)
                                echo '<a style="color:orange;font-weight:bold" href="openeditor.php?name='.$User['name'].'">Pending</a>';
                            if($User['status']==1)
                                echo '<a style="color:Red;font-weight:bold" href="openeditor.php?name='.$User['name'].'">Resubmit</a>';
                            if($User['status']==2)
                                echo '<a style="color:green;font-weight:bold" href="openeditor.php?name='.$User['name'].'">Accepted</a>';
                            if($User['status']==3)
                                echo '<a style="color:dark-orange;font-weight:bold" href="openeditor.php?name='.$User['name'].'">Submitted</a>';
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($User['grade']==0)
                                echo '<a href="openeditor.php?name='.$User['name'].'">Not Graded</a>';
                            else
                                echo '<a href="openeditor.php?name='.$User['name'].'">'.$User['grade'].'</a>';
                        ?>
                    </td>
                </tr>
                <?php }?>
            </tbody>       
        </table>
    </body>
</html>
<?php 
    }
}
    else
        header('location:./login.php');
?>