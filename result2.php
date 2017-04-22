<?php

$link=mysqli_connect(
	'localhost',
	'yoyowen1114',
	'lala77663210',
	'php_hw8');

if ($link) {
	echo "DB connected!";
}else{
	echo "DB failed!";
}

$uname=$_POST["uname"];
$upwd=$_POST["upwd"];
$gender=$_POST["gender"];
$date=$_POST["date"];
$ID=$_POST["ID"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$emergency=$_POST["emergency"];
$relationship=$_POST["relationship"];
$tel2=$_POST["tel2"];
$address=$_POST["address"];
$eat=$_POST["eat"];
$disease=$_POST["disease"];
$list=$_POST["list"];
$text=$_POST["text"];

$sql2="INSERT INTO php_hw8 (uname,upwd,gender,date,ID,email,tel,emergency,relationship,tel2,address,eat,disease,list,text) VALUES ('$uname','$upwd','$gender','$date','$ID','$email','$tel','$emergency','$relationship','$tel2','$address','$eat','$disease','$list','text')";

$result=mysqli_query($link,$sql2);

$result=mysqli_query($link,"SELECT * FROM php_hw8");

echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){

	echo "<tr>";;
	echo "<td>";
	echo $row["uname"];
	echo "</td><td>";
	echo $row["upwd"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["date"];
	echo "</td><td>";
	echo $row["ID"];
	echo "</td><td>";
	echo $row["email"];
	echo "</td><td>";
	echo $row["tel"];
	echo "</td><td>";
	echo $row["emergency"];
	echo "</td><td>";
	echo $row["relationship"];
	echo "</td><td>";
	echo $row["tel2"];
	echo "</td><td>";
	echo $row["address"];
	echo "</td><td>";
	echo $row["eat"];
	echo "</td><td>";
	echo $row["disease"];
	echo "</td><td>";
	echo $row["list"];
	echo "</td><td>";
	echo $row["text"];
	echo "</td>";
	echo "</tr>";
}

echo "<table>";

mysqli_close($link);

?>