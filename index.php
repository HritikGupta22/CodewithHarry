<?php
    $insert = false;
if(isset($_POST['name'])){

    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if (!$con) {
        die("connection to this database failed due to".mysqli_connect_error());
    }
    // echo "succes connecting to DB";
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $descp=$_POST['descp'];
    $sql="INSERT INTO `tp`. `ttp` ( `name`, `age`, `gender`, `email`, `phone`, `other`,`date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$descp',current_timestamp());";
    // echo $sql;
    if ($con->query($sql)==true) {
        // echo "successfully inserted";
        $insert=true;
    }
    else{
        echo "ERRROR : $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="/CODEWITHHARRY/hostel.jpeg" alt="img">

    <div class="container">
        <h1>Welcome to IIIT Nagpur</h1>
        <p>Enter your details and submit this form to confirm your Participation in the trip</p>
        <?php
        if($insert==true){
        echo "<p class='submitMsg'>Thanks for submiting</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="descp" id="descp" cols="30" rows="5" placeholder="enter the dsciption about trip"></textarea>
            <button class="btn">Reset</button>
            <button class="btn">submit</button>
        
        </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>