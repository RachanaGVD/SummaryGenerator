<?php
	if(isset($_POST['submit']))
	{
	$name=$_POST['comment'];
	$file=fopen('/opt/lampp/htdocs/ayush/Other/test.txt','w+') or die("file not open");
    $s=$name."\n";
	fputs($file,$s) or die("data not write");
	fclose($file);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Input</title>
	<link rel="stylesheet" type="text/css" href="css/util.css"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		#oval_parent{
		width:1350px;
		height:570px;
		overflow:hidden;
		}
		#oval{
		width: 1300px;		
		height: 550px;
	    	margin:10px 0 0 -10px;  
		background: white;
		-moz-border-radius: 50px / 50px;
		-webkit-border-radius: 100px / 50px;
		border-radius: 25px / 25px;
		}
		#header{
		-webkit-border-radius: 25px 25px 0 0;
		border-radius: 25px 25px 0 0;
		height:120px;
		background: black;
		color: white;
		}
		.slider {
  		-webkit-appearance: none;
		 width: 1100px;
		 height: 15px;
		 border-radius: 5px;   
		 background: #d3d3d3;
  		opacity: 0.7;
		-webkit-transition: .2s;
		 transition: opacity .2s;
		}
		.slider::-webkit-slider-thumb {
		-webkit-appearance: none;
		 appearance: none;
		 width: 25px;
		 height: 25px;
		 border-radius: 50%; 
		 background: #4CAF50;
		 cursor: pointer;
		}
		.slider::-moz-range-thumb {
		  width: 25px;
		  height: 25px;
		  border-radius: 50%;
		  background: #4CAF50;
		  cursor: pointer;
		}
        .mytext{
           width:900px;
            height:400px;
        }
	</style>
</head>
<body background="bg.jpg">
	<div>
		<center><font size="15" color="red"><b>Summary Generator</b></font></center>
		<br><center>
		<!--	<h3><b>STEPS :</b></h2></center>     -->
		<center><img src="1.1.png" width=100px height=100px title="Operation to perform on input">
			<img src="2.2.png" width=100px height=100px title="Select the input data type">
			<img src="3.png" width=100px height=100px title="Enter the input and process for output">
			<img src="4.png" width=100px height=100px title="Result">
	</div><center>
	<div id="oval_parent">
		<div id="oval">
			<div id="header"><br><br>
				<center><h1><b>Enter the text</b></h1></center>
			</div>
			<b><h3 style="text-align: left">Paste your text here</h3></b><br>
			<form action="#" method="post"><center>
	        <textarea rows="20" cols="150" name="comment" style="border:double 5px black;">
			</textarea><center>
            <div class="slidecontainer"><input type="range" min="1" max="100" value="50" class="slider" id="myRange">
			</div>	
			<input type="submit" name="submit" value="PROCEED" style="background: black; color: white; size=20px">		
            </form>
			</div>
		</div>
</body>
</html>
