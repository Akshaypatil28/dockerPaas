<?php
//echo shell_exec("sh xm.sh 2>&1");
shell_exec("sh cpp.sh 2>&1");
header('location:cppoutput.php');
?>

