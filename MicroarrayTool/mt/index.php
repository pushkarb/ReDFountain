<?php

?>

<html>
<title>
Microarray tool
</title>
<head>
	<p>
	<h1 align="center">Microarray Analysis Tool</h1>
	<hr />
	</p>
<link href="mt.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<p>
	Input raw zipped data files here </br>
	Example: filename.zip or filename.tar.gz
	</br>
<!--	<input type="file" name="Browse"> 
	</br> -->
	<form action="uploadFile.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" accept="image/*" id="fileID"> </br></br>
		<input type="submit" name="Submit" class="browsebutton">
	</form>
	</br>
	</p>	
</br></br>
<hr />
	<p>
	<font size="2" color="indigo">
	Created by Smitha M Shankar
	</font>
	</p>
</body>
</html>