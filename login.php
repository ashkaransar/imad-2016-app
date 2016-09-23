<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$username = $_GET['fname'];
$password = $_GET['fpass'];
$con=mysqli_connect("mysql","database_user","database_password","mydatabase");
// Check connection
if(mysqli_connect_errno()){

echo"Failed to connect to MySQL: ". mysqli_connect_error();
}
$qz ="SELECT id FROM members where username='".$username."' and password='".$password."'";
$qz = str_replace("\'","",$qz);
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
{
echo $row['id'];
}
mysqli_close($con);
?>

</body>
</html>