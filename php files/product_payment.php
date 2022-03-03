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
if(isset($_GET['sumbits']))
{
    $name=$_GET['full_name'];
    $email=$_GET['Email'];
    $add=$_GET['cus_Address'];
    $city=$_GET['City'];
    $state=$_GET['States'];
    $zipcode=$_GET['Zip_Code'];
    $cardname=$_GET['Name_On_Card'];
    $cardno=$_GET['Credit_no'];
    $exp_month=$_GET['Exp_Month'];
    $exp_year=$_GET['Exp_Year'];
    $cvv=$_GET['CVV'];
    
    
    $sql_query="INSERT INTO billing_address(full_name,Email,cus_Address,City,States,Zip_Code,Name_on_Card,Credit_no,Exp_Month,Exp_Year,CVV)VALUES('$name','$email','$add','$city','$state','$zipcode','$cardname','$cardno','$exp_month','$exp_year','$cvv')";
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