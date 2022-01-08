<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete data from database</title>
</head>

<body>
    <!-- Delete Data From a MySQL Table Using MySQLi 
The DELETE statement is used to delete records from a table:

DELETE FROM table_name
WHERE some_column = some_value -->
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        //Create connection
        $mysqli = new mysqli($server, $username, $password, $dbname);

        //Check connection
        if ($mysqli->connect_error)
        {
            die("Connection Error: " . $mysqli->connect_error);
        }

        $query = "DELETE FROM MyGuests WHERE id='3'";

        $result = $mysqli->query($query);

       if ($result===TRUE)
       {
           echo "Record Deleted successfully.";
        
       }
       else{
        echo "Error deleting record: " . $mysqli->error;
       }
        
    ?>
</body>

</html>