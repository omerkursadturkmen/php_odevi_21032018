<?php
$eposta="omerkursad@hotmail.com";
$bol=explode("@",$eposta);
if($bol[1]=="hotmail.com")
{
	header("Location: http://oys.deu.edu.tr");
}
elseif($bol[1]=="gmail.com")
{
	header("Location: http://oys2.deu.edu.tr");
}
?>