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
