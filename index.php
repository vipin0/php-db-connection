<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP db connection Test</title>
</head>
<body>
    <center>
    <h1>PHP DB connection Test!!</h1>
    <?php
        $servername = getenv('DB_HOST');
        $database = getenv('DB_NAME');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');
        // echo $servername;
        // echo $database;
        // echo $username;
        // echo $password;
//         echo $_ENV["DB_HOST"];
//         $servername = "vipin-rds.cdxhhswkgl8b.us-east-2.rds.amazonaws.com";
//         $database = "testdb";
//         $username = "vipin";
//         $password = "vipin123";
        // Create connection
        $conn = @new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . mysqli_connect_error());
        }else{
          echo "Connected successfully";
        }

        phpinfo();
    ?>  
</center>
</body>
</html>
