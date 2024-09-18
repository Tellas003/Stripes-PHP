<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<?php
include "dbconfig.php"; // Include your database connection file
if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];

    $selectQuery = "SELECT * FROM verification_1 WHERE id = '$id'";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $courseName = $row['courseName'];
        $certificateCourse = $row['certificateCourse'];
        $certificateNo = $row['certificateNo'];
        $participantName = $row['participantName'];
        $lastName = $row['lastName'];
        $passportNo = $row['passportNo'];
        $courseDate1 = $row['courseDate1'];
        $courseDate2 = $row['courseDate2'];
        $issueDate = $row['issueDate'];
    } else {
        echo "Error: Record not found.";
    }
}


if (isset($_POST['update_btn'])) {
    // Retrieve updated data
    $id = $_POST['edit_id'];
    $updatedCourseName = $_POST['updated_courseName'];
    $updatedcertificateCourse = $_POST['updated_certificateCourse'];
    $updatedcertificateNo = $_POST['updated_certificateNo'];
    $updatedparticipantName = $_POST['updated_participantName'];
    $updatedlastName = $_POST['updated_lastName'];
    $updatedpassportNo = $_POST['updated_passportNo'];
    $updatedcourseDate1 = $_POST['updated_courseDate1'];
    $updatedcourseDate2 = $_POST['updated_courseDate2'];
    $updatedissueDate = $_POST['updated_issueDate'];

    // Update the record in the database
    $updateQuery = "UPDATE verification SET 
        courseName = '$updatedCourseName',
        certificateCourse = '$updatedcertificateCourse',
        certificateNo = '$updatedcertificateNo',
        participantName = '$updatedparticipantName',
        lastName = '$updatedlastName',
        passportNo = '$updatedpassportNo',
        courseDate1 = '$updatedcourseDate1',
        courseDate2 = '$updatedcourseDate2',
        issueDate = '$updatedissueDate'
        WHERE certificateCourse = '$certificateCourse' AND certificateNo = '$certificateNo'";

    $query_run = $conn->query($updateQuery);

    if ($query_run) {
        ?>
        <script>
            swal({
                title: "Success!",
                text: "Your Data Updated!",
                icon: "success",
            }).then(() => {
                // Redirect to the home page after the alert is closed
                window.location.href = "register1.php";
            });
        </script>
        <?php
        // Do not use header here, as output has already started
        exit(0);
    } else {
        ?>
        <script>
            swal({
                title: "Error!",
                text: "Data with this Certificate No already exists in the database. Please enter a different Certificate No.",
                icon: "error",
            }).then(() => {
                // Redirect to the registration form after the alert is closed
                window.location.href = "register1.php";
            });
        </script>
        <?php
        // Do not use header here, as output has already started
        exit(0);
    }
}
?>

<!-- HTML Form to edit data -->


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
            <h2 class="text-center mb-4">Update Student Data</h2>
            <form action="#" method="post">
            <div class="form-group">
                <label for="updated_courseName">Course Name:</label>
                <input type="text" class="form-control" id="updated_courseName" name="updated_courseName" value="<?php echo $courseName; ?>" required>
            </div>

                <div class="form-group">
                    <label for="certificateNo">Certificate No:</label>
                    <div style="display: flex; align-items: center;">
        <span id="certificateStripes" name="certificateStripes"style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; background-color: #eee;">Stripes</span>
          <span id="certificateStripes" name="certificateStripes"style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; background-color: #eee;">/</span>
        <select id="updated_certificateCourse" name="updated_certificateCourse"value="<?php echo $certificateCourse; ?>" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; background-color: #eee;">
        <option value="Stripes">Select Course</option>
        <option value="BTRM">BTRM</option>
        <option value="PCCW">PCCW</option>
         <option value="SSBT">SSBT</option>
          <option value="ES">ES</option>
           <option value="SCALE">SCALE</option>
            <option value="VERC">VERC</option>
             <option value="EEAC">EEAC</option>
              <option value="FRAMO">FRAMO</option>
               <option value="BWTS-NK">BWTS-NK</option>
                <option value="ME">ME</option>
                 <option value="BWTS-SP">BWTS-SP</option>
                  <option value="INST">INST</option>
                   <option value="VECME">VECME</option>
                     <option value="SSSHT">SSSHT</option>
      </select>
        <span id="certificateStripes" name="certificateStripes"style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; background-color: #eee;">/</span>
                    <input type="text" class="form-control" id="updated_certificateNo" name="updated_certificateNo" value="<?php echo $certificateNo; ?>" required>
                </div></div>
                <div class="form-group">
                    <label for="updated_participantName">Student First Name:</label>
                    <input type="text" class="form-control" id="updated_participantName" name="updated_participantName"value="<?php echo $participantName; ?>"required>
                </div>
                <div class="form-group">
                    <label for="updated_lastName">Student Last Name:</label>
                    <input type="text" class="form-control" id="updated_lastName" name="updated_lastName" value="<?php echo $lastName; ?>"required>
                </div>
                <div class="form-group">
                    <label for="updated_passportNumber">Seminar Book/Passport Number:</label>
                    <input type="text" class="form-control" id="updated_passportNo" name="updated_passportNo" value="<?php echo $passportNo; ?>"required>
                </div>
                <div class="form-group">
                    <label for="startDate">Course Start Date:</label>
                    <input type="date" class="form-control" id="courseDate1" name="courseDate1" value="<?php echo $courseDate1; ?>"required>
                </div>
                <div class="form-group">
                    <label for="endDate">Course End Date:</label>
                    <input type="date" class="form-control" id="updated_courseDate2" name="updated_courseDate2" value="<?php echo $courseDate2; ?>"required>
                </div>
                <div class="form-group">
                    <label for="certificateIssue">Certificate Issue Date:</label>
                    <input type="date" class="form-control" id="updated_issueDate" name="updated_issueDate" value="<?php echo $issueDate; ?>"required>
                </div>
                <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
