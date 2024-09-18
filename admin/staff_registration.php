
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Registration Form</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Staff Registration</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="Name">Full Name:</label>
                    <input type="text" class="form-control" id="courseName" name="Name" required>
                </div>
                <div class="form-group">
                    <label for="staffid">Staff Id:</label>
                    <input type="text" class="form-control" id="courseName" name="staffid" required>
                </div>
                <div class="form-group">
                    <label for="Gender">Gender:</label><br>
                    <input type="radio" id="male" name="Gender" value="male">
                    <label for="male">Male</label> &nbsp &nbsp&nbsp
                    <input type="radio" id="female" name="Gender" value="female">
                    <label for="female">Female</label><br>
                </div>
                 <div class="form-group">
                    <label for="Position">Position:</label>
                    <input type="text" class="form-control" id="courseName" name="Position" required>
                </div>
                <div class="form-group">
                    <label for="joindate">Join Date:</label>
                    <input type="date" class="form-control" id="courseDate1" name="joinedate" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="courseName" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php include "dbconfig.php" ?>
<?php

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["Name"];
    $staffid = $_POST["Staffid"];
   
    $gender = $_POST["Gender"];
    $Position = $_POST["Position"];
    $joindate = $_POST["Joindate"];
    $address = $_POST["Address"];
    $mobile = $_POST["Mobile"];
   

    // Check if certificate number already exists in the database
   // $checkExistingQuery = "SELECT * FROM verification WHERE certificateNo = '$certificateNo'";
    $checkExistingQuery = "SELECT * FROM staff_profile WHERE Staffid = '$Staffid' ";

    $result = $conn->query($checkExistingQuery);

    if ($result->num_rows > 0) {
        ?>
        <script>
        swal({
            title: "Error!",
            text: "Data with this Certificate No already exists in the database. Please enter a different Certificate No.",
            icon: "error",
        });
        </script>
        <?php
        exit();
    }

    // Insert data into the database
    $insertQuery = "INSERT INTO staff_profile (Name,Staffid,Gender,Joindate, Address, Mobileno,Position )
                    VALUES ('$Name', '$Staffid','$Gender','$Joindate', '$Address', '$Mobileno','$Position' )";

    if ($conn->query($insertQuery) === TRUE) {
        ?>
        <script>
        swal({
            title: "Success!",
            text: "Your Data Inserted!",
            icon: "success",
        });
        </script>
        <?php
        exit();
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>
