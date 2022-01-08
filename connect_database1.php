<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect to database</title>
</head>
<body>
    <?php
        // echo $_SERVER['PHP_SELF'];
        // echo "<br>";
        // echo $_SERVER['SERVER_NAME'];
        // echo '<br>';
        // echo $_SERVER['HTTP_HOST'];
        // echo '<br>';
        // echo $_SERVER['HTTP_REFERER'];
        // echo '<br>';
        // echo $_SERVER['HTTP_USER_AGENT'];
        // echo '<br>';
        // echo $_SERVER['SCRIPT_NAME'];
        // echo '<br>';
       
        // $arr = array(2,4,5,"sonu");
        // echo $arr[3];

        //1. object oriented method to connect database
        $server = "localhost";
        $username = "root";
        $password = "";

        //Create connection
        $conn = new mysqli($server, $username, $password);

        //Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "Connection Successfull";

        //2. Procedural method

        $server = "localhost";
        $username = "root";
        $password = "";

        //Create connection
        $conn1 = mysqli_connect($server, $username, $password);
        //Check connection
        if (!$conn){
            die("Connection error: " . mysqli_connect_error());
        }
        echo "Connected!";

    ?>
</body>
</html>