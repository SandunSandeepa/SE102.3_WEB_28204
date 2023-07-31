<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>
    <?php
    // Check if the form is submitted || If we need we can use GET Method
    // if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    //     // Retrieve form data
    //     $firstname = $_POST["fname"];
    //     $lastname = $_POST["lname"];
    //     $username = $_POST["uname"];
    //     $password = $_POST["pass"];


    $firstname = $_REQUEST['fname'];
    $lastname = $_REQUEST['lname'];
    $username = $_REQUEST['uname'];

    ?>

    <table border="1">

        <tr>
            <td>First Name: </td>
            <td><?php echo $firstname ?></td>
        </tr>


        <tr>
            <td>Last Name: </td>
            <td><?php echo $lastname ?></td>
        </tr>


        <tr>
            <td>User Name: </td>
            <td><?php echo $username ?></td>
        </tr>

        <tr>
            <td>User Name: </td>
            <td><?php echo $_REQUEST['username'] ?></td>
        </tr>

    </table>

        
        <!-- echo "<h2><p><strong>Username:</strong> " . $username . "</p></h2>";
        echo "<h2><p><strong>First Name:</strong> " . $firstname . "</p></h2>";
        echo "<h2><p><strong>Last Name:</strong> " . $lastname . "</p></h2>";
        echo "<h2><p><strong>Password:</strong> " . $password . "</p></h2>";

        
    } else {
        echo "<h2>Error: Form not submitted</h2>";
    }
    ?> -->
</body>
</html>
