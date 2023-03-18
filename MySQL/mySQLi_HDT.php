<?php
    $servername = "locslhost";
    $username = "username";
    $password = "";
    // $dbname = "myDB";


    //tao ket noi
    $conn = new mysqli($servername,$username,$password);
    //kiem tra ket noi
    if($conn->connect_error){
        die("Conection failed:" . $conn->connect_error);
    }
    echo "Connected successfully";


    //tao database
    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE){
        echo "Database created successfully";
    }else{
        echo "Error createing database:" . $conn->error;
    }
    //tao bang
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPSATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE){
        echo "Table MyGuests created successfully";
    }else{
        echo "Error creating table:" . $conn->error;
    }
    //them du lieu
    $sql = "INSERT INTO MyGuests (firstname, lastname, emaill) 
    VALUE ('john','doe','john@example.com')";
    if ($conn->query($sql)===TRUE){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //truy van csdl
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    //xoa dl
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
    //update du lieu
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    //dong ket noi
    $conn->close()
?>