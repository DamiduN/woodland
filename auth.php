<?php 
session_start();
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
$sql = "SELECT * FROM `user` WHERE email='$email' AND psw='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    header("Location:products.php");
}else{
    echo '
        <head>
        <title>Invalid Login</title>
        <link rel="stylesheet" href="bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        setTimeout("Redirect()", 5000);

        function Redirect() {
            location.href = "login.php";
        }
        </script>
        </head>
        <body>
        <div class="alert alert-danger" role="alert">
        Invalid Password. If you are not redirected automatically within a few seconds, click <a href="login.php">here</a>
        </div>
        </body>	
            ';
}
mysqli_close($conn);

?>