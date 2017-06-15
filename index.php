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
