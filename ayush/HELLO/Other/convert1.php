<?php
echo exec("/opt/lampp/htdocs/env/bin/python3 convert.py input-file.pdf");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#oval_parent{
		width:1350px;
		height:300px;
		overflow:hidden;
		}
		#oval{
		width: 1300px;		
		height: 270px;
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
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0; background-image: url(/ayush/Other/aaa.png);">

<div id="loader"></div>
<br><br>
<div style="display:none;" id="myDiv" class="animate-bottom">
  	<div >
		<center><font face="Marchy Script" size="15" color="red"><b><img src="/ayush/Other/font.png"></b></font></center>
		<br><center>
		<center><img src="/ayush/Other/1.1.png" width=100px height=100px title="Operation to perform on input">
			<img src="/ayush/Other/2.2.png" width=100px height=100px title="Select the input data type">
			<img src="/ayush/Other/3.3.png" width=100px height=100px title="Enter the input and process for output">
			<img src="/ayush/Other/4.4.png" width=100px height=100px title="Result">
	</div><center>
	<div id="oval_parent">
		<div id="oval">
			<div id="header"><br><br>
				<center><h1><b>Download .txt File</b></h1></center>
			</div>
			<br>
			<form action="/ayush/Other/keyword-file.php" method="post"><center>
			<a onmouseover="self.status='Downloadable file'; return true" onmouseout="self.status=''" onclick="alert('Please right click and use \'Save Target/Link As\'.'); return false"  href="/ayush/Other/input-file.txt">Download</a><br><br>
			<input type="submit" value="Keyword Extraction" style="background: black; color: white; size=20px"><br><br>
            </form>
            <form action="/ayush/Other/Summary-file.php" method="post"><center>
            <input type="submit" value="Generate Summary" style="background: black; color: white; size=20px"><br><br>
			</div>
		</div>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>

