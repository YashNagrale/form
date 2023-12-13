<?php

$server ="localhost";
$username ="root";
$password ="";
$dbname ="cr";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

else 
{
    echo "Connected Sucessfully";
}

//Start

$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO `crtable`(`Name`, `Emali`) VALUES ('$name','$email')";
// $sql = "INSERT INTO `cr`(`name`, `email`) VALUES ('$name','$email')";

$result = mysqli_query($con, $sql);

if($result)

{
    echo "Data Submited Sucessfully";
}

else

{
    echo "Failed To Submit The Data..!";
}

?>