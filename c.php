<?php
//echo shell_exec("sh xm.sh 2>&1");
shell_exec("sh c.sh 2>&1");
header('location:coutput.php');
//echo "<script> window.location=`./coutput.php`</script>";
//echo "done";
?>

