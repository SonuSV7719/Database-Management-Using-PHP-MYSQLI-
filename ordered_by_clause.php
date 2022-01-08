<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select data</title>
</head>

<body>
<!-- The ORDER BY clause is used to sort the result-set in ascending or descending order.

The ORDER BY clause sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.

SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC  -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $sql = "SELECT * FROM MyGuests";
    // $sql = "SELECT id, firstname, lastname  FROM MyGuests WHERE lastname='Doe'";
    // $sql = "SELECT id, firstname, lastname  FROM MyGuests ORDER BY id";
    $sql = "SELECT id, firstname, lastname  FROM MyGuests ORDER BY firstname";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>