<?php
include '../includes/connect.php';

if(isset($_POST["name"]) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) 
&& isset($_POST['phone']) && isset($_POST['address'])){
    $name = ($_POST["name"]);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(md5($_POST['password']));
    //$password = md5($_POST['password']);
    $phone = $_POST['phone'];
    $address = htmlspecialchars($_POST['address']);
}



// Email Address and Address to be added

function number($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}


// $sql = "INSERT INTO users (name, username, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// $sql = "INSERT INTO `users` (`name`, `username`, `email`, `password`, `contact`, `address`) VALUES ('$name', '$username', '$email', '$password', '$phone', '$address');";
// var_dump(mysqli_query($food));

if($con->query($sql)){
   echo "Success";
    $user_id =  $con->insert_id;
    $sql = "INSERT INTO wallet(customer_id) VALUES ($user_id)";
    if($con->query($sql)==true){
        $wallet_id =  $con->insert_id;
        $cc_number = number(16);
        $cvv_number = number(3);
        $sql = "INSERT INTO wallet_details(wallet_id, number, cvv) VALUES ($wallet_id, $cc_number, $cvv_number)";
        $con->query($sql);
}
// } else {
    // echo "Failed";
}
 header("location: ../login.php");
?>
