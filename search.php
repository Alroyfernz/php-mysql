<?php
$search_term = $_GET['search_term'];
$conn = new mysqli("localhost", "root", "", "student");
if ($conn->connect_error) {
    die("error while connecting to database");
} else {
    echo "Connection to database successfull <br>";
}
$sql = "SELECT name,email FROM students WHERE name='$search_term'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"] . ",Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();