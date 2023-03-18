<?php
    $servername = "localhost";
    $username = "username";
    $passwoord = "";
    
    //tao ket noi
    $conn = mysqli_connect($servername,$username,$passwoord);
    //kiem tra ket noi
    if(!$conn){
        die("connection failed:" . mysqli_connect_error());
    }
    echo "Connected sucessfully";


    //tao database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn,$sql)){
        echo "Database created successfully";
    }else{
        echo "Error creating database:" . mysqli_error($conn);
    }
    //tao bang
    $sql = "CREATE TABLE MyGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn,$sql)){
        echo "Table MyGuests created successfully";
    } else {
         echo "Error creating table: " . mysqli_error($conn);
    }
    //them du lieu
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //truy van csdl
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else {
        echo "0 results";
    }
    //xoa doi tuong
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }
    //update du lieu
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }
    //dong ket noi
    mysqli_close($conn);
?>