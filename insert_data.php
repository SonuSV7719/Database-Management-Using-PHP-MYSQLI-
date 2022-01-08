<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'test';

        //Create connection
        $mysqli = new mysqli($server, $username, $password, $dbname);

        //check connection
        if ($mysqli->connect_error)
        {
            die("Connection error: " . $mysqli->connect_error);
        }

        $query = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('sonu','vis','sonu@gamil.com')";

        if ($mysqli->query($query)===TRUE){
            echo "New record created successfully";
        }else{
            echo "Error: " . $mysqli->error;
        }

        $mysqli->close();

    ?>
</body>
</html>