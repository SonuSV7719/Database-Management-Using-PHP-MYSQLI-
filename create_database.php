<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to database</title>
</head>
<body>
    <?php
    //1. Using OOP method
        $server = "localhost";
        $user = "root";
        $password = "";

        //Create connection
        $conn = new mysqli($server, $user, $password);

        //Check connection
        if ($conn->connect_error)
        {
            die("Connection error: " . $conn->connect_error);
        }

        //Create database
        $sql = "CREATE DATABASE test12";
        if ($conn->query($sql)===TRUE){
            echo "Database created successfully";
        }
        else
        {
            echo "Error creating database: " . $conn->error;
        }

        $conn->close();


        //2.Using procedural method
        $server = "localhost";
        $user = "root";
        $password = "";

        //Create connection
        $conn1 = mysqli_connect($server, $user, $password);

        //Check connection
        if (!$conn1)
        {
            die("Connection error: " . mysqli_connect_error());
        }

        //Create database
        $sql1 = "CREATE DATABASE test1";
        if (mysqli_query($conn1, $sql1)){
            echo "Database created successfully";
        }
        else
        {
            echo "Error creating database: " . mysqli_error($conn1);
        }

        mysqli_close($conn1);
    ?>
</body>
</html>