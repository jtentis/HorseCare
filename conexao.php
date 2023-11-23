
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="HorseCare";

$conn=mysqli_connect(hostname: $server_name, username: $username, password: $password, database: $database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];

	 $sql_query = "INSERT INTO HorseCare (name, email, password)
	 VALUES ('$name','$email','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>