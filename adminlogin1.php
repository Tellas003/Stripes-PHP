
<?php include "dbconfig.php" ?>
<?php

//session_start();

// Assuming $conn is your database connection object
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Add necessary security measures like password hashing before comparing
// For demonstration purposes, assuming plain text password in the database
$query = "SELECT * FROM adminlogin WHERE username = '$username' AND password = '$password'";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
    // Authentication successful
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    /*header('Location:admin/index '); // Redirect to the dashboard or home page
    */
    echo '<meta http-equiv="refresh" content="0;url=admin/index.php">';
    exit();
}

else{
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<script>
    // Display error message using SweetAlert
    Swal.fire({
        title: 'Error',
        
         html: '<div style="text-align: center;">' +
            '<p>Incorrect Username </p>' +
            '<p style="font-weight: bold; margin-top:-15px;">OR</p>' +
            '<p style="margin-top:-15px;">Psssword</p>' +
            '</div>',
        icon: 'error',
        confirmButtonText: 'OK'
    }).then((result) => {
        // Redirect to search.php after user clicks OK
        if (result.isConfirmed) {
            window.location.href = 'adminlogin.php';
        }
    });
</script>

</body>
</html>
<?php
   /* header("Location: adminlogin.php?error=Incorrect Username or Password");*/
    exit();
}


?>

