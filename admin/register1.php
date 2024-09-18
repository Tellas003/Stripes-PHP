<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Students Profile &nbsp &nbsp
                <a href="register.php">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                        Add New Students Profile 
                    </button>
                </a>
            </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th> S.No </th>
                            <th> Course Name </th>
                            <th> Certificate No</th>
                            <th>Student Name </th>
                            <th>Seaman Book / passport No</th>
                            <th> Couse Start Date</th>
                            <th> Course End Date </th>
                            <th> Certificate Issue Date </th>
                            <th> Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "dbconfig.php"; // Include your database connection file

                        // Fetch data from the database
                        $fetchQuery = "SELECT * FROM verification1";
                        $result = $conn->query($fetchQuery);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['S.No'] . "</td>";
                                echo "<td>" . $row['courseName'] . "</td>";
                                echo "<td>" . $row['certificateStripes'] . $row['certificateCourse'] . $row['certificateNo'] . "</td>";
                                echo "<td>" . $row['participantName'] . "</td>";
                                echo "<td>" . $row['passportNo'] . "</td>";
                                echo "<td>" . $row['courseDate1'] . "</td>";
                                echo "<td>" . $row['courseDate2'] . "</td>";
                                echo "<td>" . $row['issueDate'] . "</td>";
                                echo "<td>
                                        <form action='edit.php' method='post'>
                                            <input type='hidden' name='edit_id' value='" . $row['S.No'] . "'>
                                            <button type='submit' name='edit_btn' class='btn btn-success'> EDIT</button>
                                        </form>
                                      </td>";
                                echo "<td>
                                        <form action='' method='post'>
                                            <input type='hidden' name='delete_id' value='" . $row['S.No'] . "'>
                                            <button type='submit' name='delete_btn' class='btn btn-danger'> DELETE</button>
                                        </form>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9'>No records found</td></tr>";
                        }
                        ?>
                        <!-- Add hidden input field for storing student ID -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</body>
</html>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
