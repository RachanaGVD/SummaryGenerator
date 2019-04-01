<?php
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "/opt/lampp/htdocs/ayush/textrank/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Input type</title>
	<link rel="stylesheet" type="text/css" href="css/util.css"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body background="aaa.png" no-repeat>
	<br><br><br>
	<div>
		<center><font face="Marchy Script" size="15" color="red"><b><img src="font.png"></b></font></center>
		<br><br><center>
		<h3><b>STEPS :</b></h2></center>
		<br><center><img src="1.1.png" width=100px height=100px title="Operation to perform on input">
			<img src="2.2.png" width=100px height=100px title="Select the input data type">
			<img src="3.png" width=100px height=100px title="Enter the input and process for output">
			<img src="4.png" width=100px height=100px title="Result">
		<br><br>
		</div><center>
			<div class="wrap-login100">
				<form action="#" enctype="multipart/form-data" class="login100-form p-l-55 p-r-55 p-t-178" method="POST">
					<span class="login100-form-title">
						Upload the File
					</span>
					<h2><b><label for="fileupload"> Select a file to upload</label> </b></h2><center>
					<p>Please rename the input file as input-file.txt</p>
				    <input type="file" name="uploaded_file"  style="background: black; color: white; size=20px"></input><br /><br>
				    <input type="submit" value="Upload"  style="background: black; color: white; size=20px"></input><br><br>
				  	</form>
				  	<form action="/ayush/textrank/sum1.php" ><center>
					<input type="submit" value="VIEW SUMMARY" style="background: black; color: white; size=20px"><br><br>
					</form>
			</div>
		
	

</body>
</html>
