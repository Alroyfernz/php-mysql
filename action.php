<?php
$conn = new mysqli("localhost", "root", "", "student");
if ($conn->connect_error) {
    die("error while connecting to database");
} else {
    echo "Connection to database successfull <br>";
}

$name = $_POST["name"];
$email = $_POST["email"];
$phno = $_POST["phno"];


//create DB student
//create table students
//from phpmyadmin

//Store data in sql database
$sql = "INSERT INTO students VALUES('$name','$email','$phno');";

if ($conn->query($sql) == TRUE) {
    echo "Data stored successfull";
} else {
    echo "Error while saving data";
}