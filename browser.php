<?php

// Make a MySQL Connection
$servername = "fdxxx.biz.nf";
$username = "195xxxx_cuenta";
$password = "Carpxxx#4xx1";
$dbname = "195xxx_cuenta";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE `fifa3` SET `Rankfifa` = '1' WHERE `fifa3`.`eq1` = 'Alemania' ";
if (mysqli_query($conn, $sql)) {
    echo "1";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "UPDATE `fifa3` SET `Rankfifa` = '8' WHERE `fifa3`.`eq1` = 'Polonia' ";
if (mysqli_query($conn, $sql)) {
    echo "8";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "UPDATE `fifa3` SET `Rankfifa` = '10' WHERE `fifa3`.`eq1` = 'España' ";
if (mysqli_query($conn, $sql)) {
    echo "10";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "UPDATE `fifa3` SET `Rankfifa` = '13' WHERE `fifa3`.`eq1` = 'Inglaterra' ";
if (mysqli_query($conn, $sql)) {
    echo "13";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "UPDATE `fifa3` SET `Rankfifa` = '14' WHERE `fifa3`.`eq1` = 'Uruguay' ";
if (mysqli_query($conn, $sql)) {
    echo "14";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "INSERT INTO MyGuests (firstname, lastname, email,reg_date)
VALUES ('John', 'Doe', 'john@example.com',CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
