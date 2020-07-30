<?php

    include_once 'database.php';

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $personality = mysqli_real_escape_string($conn,$_POST['personality']);

    $sql = "INSERT INTO users (user_name,user_pwd,user_gender,user_personality)
        VALUES('$name','$pwd','$gender','$personality');";
    $result = mysqli_query($conn,$sql);

    header("Location: ../test.html?signup=success");