<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  echo "<table border='1'>";
    echo "<tr>";
    $fn=$_REQUEST["fname"];
        echo"<td>First Name</td>";
        echo"<td> $fn</td>";
    echo "</tr>";
    echo "<tr>";
    $ln=$_REQUEST["lname"];
        echo"<td>Last Name</td>";
        echo"<td> $ln</td>";
    echo "</tr>";
    echo "<tr>";
    $un=$_REQUEST["uname"];
        echo"<td>User Name</td>";
        echo"<td> $un</td>";
    echo "</tr>";
    echo "<tr>";
    $pw=$_REQUEST["pw"];
        echo"<td>Password</td>";
        echo"<td> $pw</td>";
    echo "</tr>";
    echo "<tr>";
    $gn=$_REQUEST["g"];
        echo"<td>Gender</td>";
        echo"<td> $gn</td>";
    echo "</tr>";
    echo "<tr>";
    $yr=$_REQUEST["year"];
        echo"<td>Academic Year</td>";
        echo"<td> $yr</td>";
    echo "</tr>";
    echo "<tr>";
    $pn=$_REQUEST["pno"];
        echo"<td>Phone No</td>";
        echo"<td> $pn</td>";
    echo "</tr>";
  echo "</table>";
    
    ?>
</body>
</html>