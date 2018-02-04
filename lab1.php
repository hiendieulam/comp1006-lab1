<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>LAB1-SELECTING DATA</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab1selectingdata";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT city, nickname, division FROM teams";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>city</th><th>nickname</th><th>division</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["city"]. "</td><td>" . $row["nickname"]. "</td><td> " . $row["division"]. "</td></tr>";
        }
        echo "</table>";
    } else {
    echo "Connected successfully.";
    }
    $conn->close();
    ?>
</body>
</html>