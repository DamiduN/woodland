<?php

function show_data($type)
{
    $host = "localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registration";

    //$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);


    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $retive = "select * from items where type = '".$type."'";
    $qury = mysqli_query($conn,$retive);
    if (mysqli_num_rows($qury) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($qury)) {
            $item_id = $row["id"];
            $name = $row["code"];
            $img = $row["image"];
            $price =$row["prices"];
            $wrnty = $row["warennty"];
            if (isset($_SESSION['email'])) {
                 $user = $_SESSION['email'];
            }
           

            echo "
<tr>
<td>
    <div class='container11'></div>
    <div class='column'>
        <figure>
            <img src=$img alt='DUNLOP tyre' style='width:300px;height:300px;' class='image' usemap='#DUNLOPtyre' style='width:100%'>
            <figcaption align='center'><b>$name</b></figcaption>
            
            <figcaption align='center'><i>Price: $price/=</i></figcaption>
        </figure>
        <p align='center'>$wrnty months guarentee</p>
        <div class='middle'>
            ";
            if (isset($_SESSION['email'])) {
                if ($_SESSION["email"]) {
                    echo "
                 
            <form action='' method='post'>
                <input type='hidden' name='user_email' value=$user>
                <input type='hidden' name='item_id' value=$item_id>
                <input type='hidden' name='price' value=$price>
                <button type='submit' class='btbt' align='center' name='button1' >
                    ADD TO CART
                </button class='btbt'>
            </form>
            ";
            }
        }
            echo "
            <map name='#DUNLOPtyre'>
                <area shape='rect' coords='0,0,400,400' alt='CEAT tyre'>
            </map>
        </div>
    </div>
    </div>
</td>
</tr>

";


        }
    } else {
        echo "0 results";
    }


}

if(isset($_POST['button1'])) {


    $host = "localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registration";

    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $user = $_POST['user_email'];
    $id = $_POST['item_id'];
    $price = $_POST['price'];

    $insert_to_cart = "insert into cart(user_email,item_id,price,quantity) values('".$user."','".$id."','".$price."',1)";
    $qury_1 = mysqli_query($conn, $insert_to_cart);
    if ($qury_1)
    {
        echo "
        <script>alert('success');</script>
        ";
    }else{
        echo "
        <script>alert('error');</script>
        ";
    }


}


function show_cart()
{
    $email =  $_SESSION['email'];
    $host = "localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="registration";

    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $get_cart = "select * from cart where user_email='".$email."'";
    $query = mysqli_query($conn,$get_cart);
    if (mysqli_num_rows($query) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($query)) {
            $item = $row['item_id'];
            $retive = "select * from items where id='".$item."'";
            $qury = mysqli_query($conn,$retive);
            if (mysqli_num_rows($qury) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($qury)) {
                    $item_id = $row["id"];
                    $name = $row["code"];
                    $img = $row["image"];
                    $price =$row["prices"];
                    $wrnty = $row["warennty"];
                    $user = $_SESSION['email'];

                    echo "
<tr>
<td>
    <div class='container11'></div>
    <div class='column'>
        <figure>
            <img src=$img alt='DUNLOP tyre' style='width:300px;height:300px;' class='image' usemap='#DUNLOPtyre' style='width:100%'>
            <figcaption align='center'><b>$name</b></figcaption>
            
            <figcaption align='center'><i>Price: $price/=</i></figcaption>
        </figure>
        <p align='center'>$wrnty months guarentee</p>
        <div class='middle'>
            ";
                    if ($_SESSION["email"]) {
                        echo "
                 
            <form action='' method='post'>
                <input type='hidden' name='user_email' value=$user>
                <input type='hidden' name='item_id' value=$item_id>
                <input type='hidden' name='price' value=$price>
                <button type='submit' class='btbt' align='center' name='button1' >
                    ADD TO CART
                </button class='btbt'>
            </form>
            ";
                    }
                    echo "
            <map name='#DUNLOPtyre'>
                <area shape='rect' coords='0,0,400,400' alt='CEAT tyre'>
            </map>
        </div>
    </div>
    </div>
</td>
</tr>

";


                }
            } else {
                echo "0 results";
            }


        }
    }






}


?>

