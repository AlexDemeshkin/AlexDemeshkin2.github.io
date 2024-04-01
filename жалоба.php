<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];
$addres = $_REQUEST['addres'];
$password = $_REQUEST['password'];;
$fam = $_REQUEST['fam'];
$lang = $_REQUEST['lang'];
$prof = $_REQUEST['prof'];
$info = $_REQUEST['info'];

header("Content-type: text/html; charset=utf=8");
echo "<p>$name";
echo "<p>$fam";
echo "<p>$email";
echo "<p>$country";
echo "<p>$city";
echo "<p>$lang";
echo "<p>$addres";
echo "<p>$lang";
echo "<p>$prof";
echo "<p>$info";
?>

