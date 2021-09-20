<?php

$conn = mysqli_connect("localhost", "root", "", "test1") or die("Connection Failed.!");

    $name = $_POST['fullname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO user(name, age, email, country, gender)  VALUES('{$name}',
    {$age},'{$email}','{$country}','{$gender}')";
    if (mysqli_query($conn, $sql)) {
        echo $name . " Your Record has saved";
    } else {
        echo $name . " Your Record has not saved";

    }


?>