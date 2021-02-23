<?php

$conn = mysqli_connect('localhost', 'admin@root', 'admin@123');
if (!$conn) {
    die('could not connect to DB  ' . mysqli_connect_error());
} else {

    $db = 'CREATE DATABASE IF NOT EXISTS internethiopia';
    if (!mysqli_query($conn, $db)) {
        echo ' internethiopia database creation failed' . mysqli_error($conn);
    }

    mysqli_select_db($conn, "internethiopia");

    $users_table = "CREATE TABLE IF NOT EXISTS USERS  (
        ID INT NOT NULL AUTO_INCREMENT,
        Name varchar(100)NOT NULL,
        Email varchar(100)NOT NULL,
        Password varchar(50)NOT NULL,
        isManager BOOLEAN NOT NULL DEFAULT FALSE,
        created_at DATETIME NOT NULL,
       primary key(ID) )";
    if (!mysqli_query($conn, $users_table)) {
        echo 'error while creating the table' . mysqli_error($conn);
    }

    $jobs_table = "CREATE TABLE IF NOT EXISTS JOBS  (
        ID INT NOT NULL AUTO_INCREMENT,
        Position varchar(100)NOT NULL,
        Division varchar(100)NOT NULL,
        Duration varchar(150)NOT NULL,
        Address varchar(150)NOT NULL,
        Contact varchar(150)NOT NULL,
        Qualification varchar(150)NOT NULL,
        Payment varchar(150)NOT NULL,
        Transport varchar(150)NOT NULL,
        Description varchar(250)NOT NULL,
        created_at DATETIME NOT NULL,
       primary key(ID) )";
    if (!mysqli_query($conn, $jobs_table)) {
        echo 'error while creating the table' . mysqli_error($conn);
    }

}