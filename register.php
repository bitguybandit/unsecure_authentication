<?php

require "db.php";

if(isset($_POST["register"])){
    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $age = trim($_POST["age"]);
    $gender = trim($_POST["gender"]);
    $address = trim($_POST["address"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = $_POST['password'] ?? '';
    $confirm_password = trim($_POST["confirm_password"]);

    if(empty($firstname) || empty($lastname) || empty($age) || empty($gender) || empty($address) || empty($email) || empty($username) || empty($password) || empty($confirm_password)){
        die("All fields are required!");
    }

    if($password != $confirm_password){
        die("Password do not match");
    }

    $check = $conn->prepare("SELECT id FROM user WHERE email = ?");
    $check ->bind_param('s', $email);
    $check -> execute();

    $result = $check->get_result();

    if($result->num_rows > 0){
        die("Email already exist!");
    } 

    $stmt =$conn->prepare("INSERT INTO user(firstname, lastname, age, gender, address, email, username, password)value (?,?,?,?,?,?,?,?)");

    if(!$stmt){
        die("unable to prepare registration");
    }
    
    $stmt->bind_param('ssssssss',$firstname, $lastname, $age, $gender, $address, $email, $username, $password);

    if($stmt->execute()){
        header("Location: landing.html");
    }else{
        echo "Error". $stmt->error;
    }

    $check ->close();
    $stmt ->close();
    $conn->close();
}
?>