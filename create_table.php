<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    <?php

        //1. oops method
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test1";

        //Create connection
        $mysqli = new mysqli($server, $username, $password, $dbname);

        //Checkk connection
        if ($mysqli->connect_error)
        {
            die("Connection error: " . $mysqli->connect_error);
        }

        //sql to create table
        $query = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

        if ($mysqli->query($query) === TRUE)
        {
            echo "Table test1 created successfully";

        }
        else
        {
            echo "Error creating table: " . $mysqli->error;
        }

        $mysqli->close();

         //2. Procedural method
         $server = "localhost";
         $username = "root";
         $password = "";
         $dbname = "test";
 
         //Create connection
         $mysqli1 = mysqli_connect($server, $username, $password, $dbname);
 
         //Checkk connection
         if ($mysqli->connect_error)
         {
             die("Connection error: " . $mysqli->connect_error);
         }
 
         //sql to create table
         $query1 = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
 
         if (mysqli_query($mysqli1, $query1))
         {
             echo "Table test1 created successfully";
 
         }
         else
         {
             echo "Error creating table: " . mysqli_error($mysqli1);
         }
 
        mysqli_close($mysqli1);

    ?>
</body>
</html>