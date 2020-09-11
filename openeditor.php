<?php
session_start();
if(isset($_POST['save_program'])){
	$f=$_POST["file"]; // here we get file name
    $ext=$_POST["ext"]; // here for extension
    $data=$_POST["output"];// for content
	$file=$f.'.'.$ext; 
	$name = $_GET['name'];
	$date = date('d/m/Y H:i:s');
	$rollno = $_SESSION['rollno'];
	$sql = "Update programs Set name = '$file', program='$data', submissiondate='$date',status=3, grade=0 where rollno = '$rollno' and name = '$name'";
	$result = mysqli_query($conn, $sql);
	$location = "location:showprograms.php?type=".$ext;
	echo $location;
	// header($location);
}
if(isset($_POST['submit'])){
	$grade = $_POST['grade'];
	$status = $_POST['status'];
	$name = $_GET['name'];
	$rollno = $_SESSION['rollno'];
	$index = strripos($name,".");
	$ext = substr($name, $index+1); 
	$name = $_GET['name'];
	require 'Database Connection/db.php';
	$sql = "Update programs Set status = '$status', grade='$grade' where rollno = '$rollno' and name = '$name'";
	$result = mysqli_query($conn, $sql);
	$location = "location:showprograms.php?type=".$ext;
	header($location);
}
if(isset($_SESSION['rollno']) AND isset($_SESSION['password'])  ){
    $name = $_GET['name'];
    require 'Database Connection/db.php';
    $index = strripos($name,".");
	$ext = substr($name, $index+1); 
	$_SESSION['ext']=$ext;
	$dummy="main.".$ext;
    $nm = substr($name,0,$index);
    $rollno = $_SESSION['rollno'];
    $sql = "select program, submissiondate from programs where rollno = '$rollno' and name = '$name'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows == 0)
    {
        $_SESSION['message']="no programs availble";
    }

    else
    {    
		$row = $result->fetch_assoc();
		$data = $row['program'];
		if(file_exists($dummy)) // check if file exits or not
		{
			$fo=fopen($dummy,"w");
			fwrite($fo,$data);// write data
		}else
		{
												// if no create file 
			$fo=fopen($dummy,"w");
			fwrite($fo,$data);// write data
		}
    }
?>

<html>
	<head>
		<title>Coding Platform</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<style>
			.textarea{
				width:400px;
				height:400px;
			}
			.bntB{
				font-weight:bold;
				
				}
			.bnti{
				font-style:italic;
				
			}
			.bntu{
				text-decoration:underline;
				
			}
			#form{
					
					border-width: 1px;
					border-style:solid;
					background-color:powderblue;
			}

			header{
				border-bottom:#1c1c1c;
				background-color:#1c1c1c;
				height: 6em;
			}
			.container {
				margin-top: -8px;
				margin-left: 390px;
			}
			.logo {
				display: inline-block;
				height: ;
				left: 0;
				line-height: inherit;
				margin-top: 40px;
				margin-left: 221px;
				padding: 0;
				position: absolute;
				top: 0;
				color: #e5474b;
				font-size: 1em;
				text-transform: none;
				font-weight: normal;
				padding: 0;
			}

			.logo:hover {
				color: rgba(229, 71, 75, 0.75);
			}

			a {
				-moz-transition: color 0.2s ease-in-out;
				-webkit-transition: color 0.2s ease-in-out;
				-ms-transition: color 0.2s ease-in-out;
				transition: color 0.2s ease-in-out;
				display: inline-block;
				padding: 0 2em;
				color: #ffffff;
				text-decoration: none;
				text-transform: uppercase;
				font-weight: 700;
				font-size: .85em;
			}

		</style>

	
	
		<script>
			function load_text(){
                var prg = document.getElementById("prg").value;
				document.getElementById("output").value=prg;
			}
			function bold_text(){
				document.getElementById("output").style.fontWeight="bold";
				
			}
			function italic_text(){
				document.getElementById("output").style.fontStyle="italic";
				
			}
			function underline_text(){
				document.getElementById("output").style.textDecoration="underline";
				
			}
			function normal_text(){
				document.getElementById("output").style.textDecoration="none";
				document.getElementById("output").style.fontStyle="normal";
				document.getElementById("output").style.fontWeight="normal";
			}
			function font_family()
			{
				var e =document.getElementById("fname");
				var fontfamily=e.options[e.selectedIndex].value;
				document.getElementById("output").style.fontFamily=fontfamily;
				
			}
			function font_size()
			{
				var e =document.getElementById("fsize");
				var fontfamily=e.options[e.selectedIndex].value;
				document.getElementById("output").style.fontSize=fontfamily;
				
			}
			function text_color(){
				
				var color= document.getElementById("color").value;
				
				document.getElementById("output").style.color=color;
				
			}
		</script>
	</head>
	<body  onload="load_text();" >
		<header>
					<div class="container">
						<div id="branding">
							<h1><span class="logo">DockerPAAS</h1>
						</div>
						<nav>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="myprograms.php">My Programs</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
		</header>
        <textarea name="prg" id="prg" cols="30" rows="10"  hidden><? echo $row['program'] ?></textarea>
		<form action=<?php echo $ext.".php" ?> method="GET"> 
			<br><br>
			<div align="center">
			<textarea name ="output" id="output" cols="50" rows="50" class="textarea"> </textarea>
			</div>
			<br>
			<p align="center">
				<select name="file">
					<option value="">Select File Name </option>
					<option value=<? echo $nm ?> selected><? echo $nm ?></option> 
				</select>
				<select name="ext">
					<option value="">Select Extension </option>
					<option value=<? echo ".".$ext ?> selected><? echo $ext ?> </option>
				</select>
				<input type="submit" class="bnt btn-danger" value="compile and run" name="save">   
			</p> <br>										
		</form>
		<?php if($_SESSION['isTeacher']){?>
			<form method="POST" action=<?php echo "openeditor.php?name=".$_GET['name']?>>
				<p align="center">
					<label for="grade"></label>
					<input type="number" name="grade" id="grade" min=0 max=10>
					<select name="status" id="fsize" onchange="font_size();">
						<option value="2"> Accepted </option>
						<option value="1"> Resubmit </option>
					</select>
					<input type="submit" name="submit" value="submit grade">
				</p>		 
				</form>
		<?php }?>
	</body>


</html>
<?php
}
else{
	header('location: login.php');
}
?>
