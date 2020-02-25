<?php
if (isset($_POST['save']))// if click on save button
{
$f=$_POST["file"]; // here we get file name
$ext=$_POST["ext"]; // here for extension
$data=$_POST["output"];// for content
$file=$f.$ext; // concat file name with extension
$url = "//localhost/project/";
$links =$url.$file;
echo $links;
$aaa ="pp.php";
if(file_exists($file)) // check if file exits or not
{
	$fo=fopen($file,"w");
      fwrite($fo,$data);// write data
      echo " Your Data is Saved !";	// display msg}
	// if yes display error mssg
}else
{
                    // if no create file 
      $fo=fopen($file,"w");
      fwrite($fo,$data);// write data
      echo " Your Data is Saved !";	// display msg}
}
}
?>

<html>
<head>
<title>Coding Platform</title>
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
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<!-- jquery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script>
function load_text(){
	document.getElementById("output").value="write text here....."
	
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
<body onload="load_text();" >
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">DockerPAAS</h1>
        </div>
        <nav>
          <ul>
            <li ><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
          </ul>
        </nav>
      </div>
</header>
<form id="form" method="POST"> 


<!--

<select name="fname" id="fname"  onchange="font_family();">
<option value=""> Select Font Famliy</option>
<option value="Arial"> Arial</option>
<option value="Times"> Times </option>
<option value="Times New Roman"> Times New Roman</option>
<option value="Georgia"> Georgia</option>
<option value="Verdana"> Verdana</option>
<option value="Cursive"> Cursive</option>
<option value="Fantasy"> Fantasy</option>
<option value="Garamond"> Garamond</option>

</select>


<select name="fsize" id="fsize" onchange="font_size();">
<option value=""> Select  size</option>
<option value="12"> 12</option>
<option value="13"> 13 </option>
<option value="14"> 14 </option>
<option value="15"> 15 </option>
<option value="16"> 16 </option>
<option value="17"> 17 </option>
<option value="18"> 18 </option>

</select>
<input type="button" value="B" class="bntB" onclick="bold_text();">
<input type="button" value="i" class="bnti"  onclick="italic_text();">
<input type="button" value="u" class="bntu" onclick ="underline_text();">
<input type="button" value="N" class="bntn" onclick="normal_text();">
<input type="color" id="color" value="#ff0020" class="bntc"> -->
<hr>
    <div align="center">
<textarea name="output" id="output" cols="48" class="textarea"> </textarea>
    </div>
<br><p align="center"><input type ="text" name="file" value="main"> <select name="ext"><option value="">Select Extension </option>
<option value=".php" selected>php </option>
</select><input type="submit" class="bnt btn-danger" value="Save" name="save"><input type="reset" class="bnt btn-danger" value="Clear"></p>
<p align="center">
<a href='<?php echo $aaa; ?>' target='_blank'><input type="button" value="Compile"></a>
<a href='<?php echo $links; ?>' target='_blank'><input type="button" value="Run"></a><br/>
    <!--<a href="pp.php"><input type="button" value="RUN"></a> -->
    </p>
</form>
</body>


</html>
