<?php
session_start();
if(isset($_SESSION['rollno']) AND isset($_SESSION['password']) ){
	if (isset($_POST['compile'])){// if click on save button
		$f=$_POST["file"]; // here we get file name
		$ext=$_POST["ext"]; // here for extension
		$data=$_POST["output"];// for content
		$file=$f.'.'.$ext; // concat file name with extension
		$url = "//localhost:8080/dockerPaas/";
		$dummy="main.c";
		$ans="coutput.php";
		require 'Database Connection/db.php';
		$date = date('d/m/Y H:i:s');
		$rollno = $_SESSION['rollno'];
		$sql = "Insert into programs Values('$rollno','$file','$data','$date', 3, 0)";
		$result = mysqli_query($conn, $sql);
		$links = $url.$ans;
		$bbb="c.php";
		if(file_exists($dummy)) // check if file exits or not
		{
			$fo=fopen($dummy,"w");
			fwrite($fo,$data);// write data
			echo " Your Data is Saved !";	// display msg}
			// if yes display error mssg
		}else
		{
												// if no create file 
			$fo=fopen($dummy,"w");
			fwrite($fo,$data);// write data
			echo " Your Data is Saved !";	// display msg}
		}
		header('location:c.php');
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
					margin-top: 19px;
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
				document.getElementById("output").value="write program here....."
				
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
						</nav>
					</div>
		</header>
		<form id="form" method="POST"> 


			
			<br><br>
			<div align="center">
			<textarea name ="output" id="output" cols="50" rows="50" class="textarea"> </textarea>
			</div>
			<br>
			<p align="center">
				<input type="text" name="file" placeholder="filename">
				<input type="text" name="ext" placeholder="extension">
				<!-- <input type="submit" class="bnt btn-danger" value="Save" name="save">   
				<input type="reset" class="bnt btn-danger" value="Clear"> -->
			</p> <br>
			<p align="center">
				
					<input type="submit" name="compile" value="Compile and run">
			</p>
										
		</form>
	</body>


</html>
<?php
}
else{
	header('location:login.php');
}
?>
