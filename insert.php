<?php 
$first_name = $_REQUEST["fname"];
$last_name= $_REQUEST["lname"];
$username= $_REQUEST["un"];
$email= $_REQUEST["email"];
$password= $_REQUEST["psw"];



$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbname="registration";

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO user(fname,lname,un,email, psw) VALUES ('$first_name','$last_name', '$username', '$email', '$password')";



if($conn->query($sql)){
   
    header("Location:login.php");
     echo '<script>alert("Welcome to Woodland Automobiles")</script>'; 
  
}



else{
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>