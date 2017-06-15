<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Is It Time To Pack?</title>
style type="text/css" media="screen"><!--
* { box-sizing: border-box; }
body {margin: 0; padding: 0; font-family: Verdana,Geneva,sans-serif;}
#outer { position: absolute; display: table; width: 100%; height: 99%; margin: 0 auto; }
#upper { display: table-row; width: 100%; height: 85%; }
#lower { display: table-row; width: 100%; height: 15%; max-height: 90px; }
#content { position: relative; display: table-cell; vertical-align: middle; text-align: center; }
#footer { position: relative; display: table-cell; vertical-align: bottom; text-align: center; }
.big { font-size: 36pt; }
--></style>
</head>

	<body bgcolor="#ffffff">
	<div id="outer">
		<div id="upper">
			<div id="content">
<?php
if (!empty($_GET)) {
$answer=$_GET['answer'];
}else{
$answer='';
}

if ($answer = 'yes'){
?>
Too late, you'll buy things there.
<?php
}
else if ($answer = 'no'){
?>
Plenty of time left!
<?php
}
else {
?>
<form action="/index.php" method="get">
  Did you leave yet ?
  <button name="answer" type="submit" value="yes">Yes</button>
  <button name="answer" type="submit" value="no">No</button>
</form>
<?php
}
?>
			</div>		
		</div>
	</body>
</html>
