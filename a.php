<?php

$servername = "Localhost";

$username = "root";

$password = "mysql";

$database = "db";

$uname=$_POST["uname"];
$pwd=$_POST["password"];
$input=$_POST["insert"];

echo($uname);

//Create connection
$conn = new mysqli($servername,$username,$password,$database);
echo "hello";


//check connection
if($conn->connect_error)
{
	die("Connection failed :".$conn->connect_error);
}

echo("Connected Successfully");

//insert 
if($input=="Insert")
{
	$sql = "insert into student values('$username','$passwordd')";
	$sql = "delete from student where username = '$username'";
	
	if($conn->query($sql))
	{
		echo("Inserted");
		
	}
	else
	{
		echo("fail".$sql.$conn->error);
	}
}

//Select
if($input=="Select")
{
	$sql="select * from student";
	
	$result=$conn->query($sql);
	
	while($row=$result->fetch_array())
	{
		echo("<br>Username :".$row ["username"]."<br> Password :".$row ["password"]);
	}

}

//Delete
if($input=="Delete")
{
	$sql = "delete from student where username = '$username'";
	
}

//Update
if($input=="Update")
{

}


?>

