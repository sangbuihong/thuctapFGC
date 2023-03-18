<?php
    $servername = "localhost";
    $username = "username";
    $password = "";
    $dbname = "myDBPDO";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB",$username,$password);
        //dat PDO loi thanh ngoai le
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";

        //tao database
        $sql = "CREATE DATABASE myDBPDO";
        // su dung exec vi khong co ket qua tra ve
        $conn->exec($sql);
        echo "Database created successfully<br>";
        // tao bang
        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        $conn->exec($sql);
        echo "Table MyGuests created successfully<br>";
        //them du lieu
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";
        $conn->exec($sql);
        echo "New record created successfully";
        
        //xoa dl
        $sql = "DELETE FROM MyGuests WHERE id=3";
        $conn->exec($sql);
        echo "Record deleted successfully";
        //update du lieu
        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
    }



    // catch (PDOException){
    //     echo "Connection failed:" . $e->getMessage();
    // }
    catch(PDOException $e){
        echo $sql. "<br>" .$e->getMessage();
    }
    //dong ket noi
    $conn = null
?>