<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <p>Compared to executing SQL statements directly, prepared statements have three main advantages:

Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)
Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
Prepared statements are very useful against SQL injections, because parameter values, which are transmitted later using a different protocol, need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.</p>
    <?php




    //  This function binds the parameters to the SQL query and tells the database what the parameters are. The "sss" argument lists the types of data that the parameters are. The s character tells mysql that the parameter is a string.

    //  The argument may be one of four types:

    //  i - integer
    //  d - double
    //  s - string
    //  b - BLOB
    //  We must have one of these for each parameter.

    //  By telling mysql what type of data to expect, we minimize the risk of SQL injections.

    //  Note: If we want to insert any data from external sources (like user input), it is very i

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

    $stmt = $mysqli->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUE (?,?,?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    // Set parameters and execute\
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    echo "<h1>Created successfully</h1>";
    $stmt->close();
    $mysqli->close();

    ?>
</body>

</html>