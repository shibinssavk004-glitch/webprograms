<!DOCTYPE html>
<html>
<head>
<title>ODD or even</title>
</head>
<body>
<h2>check odd or even</h2>
<form method ="get">
	enter a number:
	<input type="number"name="num"required>
	<input type="submit"name="submit"value="check">
</form>

<?php
if (isset($_GET['submit']))
{
$num=$_GET['num'];
if ($num%2==0)
{
echo "$num is even ";
}
else
{
echo "$num is odd";
}
}
?>
</body>
</html>
