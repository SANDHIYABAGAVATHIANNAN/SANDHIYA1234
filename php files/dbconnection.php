<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="fd";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
   die("connection failed:".mysqli_connect_error());
}
if(isset($_GET['save']))
{
    $name=$_GET['cus_name'];
    $dob=$_GET['dob'];
    $email=$_GET['email'];
    $pasword=$_GET['email_password'];
    $phone=$_GET['phone'];
    
    $sql_query="INSERT INTO reg(cus_name,dob,email,email_password,phone)VALUES('$name','$dob','$email','$pasword','$phone')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "New details entry inserted successfully!";
    }
    else{
        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>