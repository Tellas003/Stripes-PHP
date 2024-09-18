<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Visitor Profile &nbsp 
            </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th> S.No </th>
                            <th> Date </th>
                            
                            <th>Ip Address</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "dbconfig.php"; // Include your database connection file

                        // Fetch data from the database
                        $fetchQuery = "SELECT * FROM website_visitors";
                        $result = $conn->query($fetchQuery);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                
                                echo "<td>" . $row['date']."</td>";
                                echo "<td>" . $row['ip_address'] . "</td>";
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
