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
    if ($mysqli->connect_error) {
        die("Connection error: " . $mysqli->connect_error);
    }

    $query = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
    $query .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
    $query .= "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";


    if ($mysqli->multi_query($query) === TRUE) {
        $insert_id = $mysqli->insert_id;
        echo "New record created successfully " . "Last if: " . $insert_id;
    } else {
        echo "Error: " . $mysqli . "<br>" . $mysqli->error;
    }

    $mysqli->close();

    ?>
</body>

</html>