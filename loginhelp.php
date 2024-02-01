<?php
$connection = mysqli_connect('localhost', 'root');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection is established!<br>";

mysqli_select_db($connection, 'aunthentications');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Perform any necessary validation and sanitization of user input

    $query = "SELECT * FROM credentials WHERE email = '$email' AND passwd = '$pass'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        header('Location: loginsuccessful.php');
        exit();
    } else {
        echo "Error while logging in";
    }
}

mysqli_close($connection);
?>
