<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Students Profile &nbsp &nbsp
                <a href="staff_registration.php">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                        Add New Staff Profile 
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
                            <th> Staff Name </th>
                            <th> Staff ID</th>
                            <th>Gender </th>
                            <th>Position</th>
                            <th>Mobile No</th>
                            <th> Join Date</th>
                            <th> Address </th>

                            <th> Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "dbconfig.php"; // Include your database connection file

                        // Fetch data from the database
                        $fetchQuery = "SELECT * FROM staff_profile";
                        $result = $conn->query($fetchQuery);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['Name'] . "</td>";
                                echo "<td>" . $row['Staffid'] . "</td>";
                                echo "<td>" . $row['Gender'] . "</td>";
                                echo "<td>" . $row['Position'] . "</td>";
                                echo "<td>" . $row['Mobile'] . "</td>";
                                echo "<td>" . $row['Joindate'] . "</td>";
                                echo "<td>" . $row['Address'] . "</td>";
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
