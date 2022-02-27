<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
include('include/db_conn.php');
include('include/header.php');
include('include/sidebar.php');

?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Manage Customer</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">

                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Doctor Name</th>
                                <th>Doctor Number</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                                $sql = "select * from customers";
                                $table = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($table)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['NAME']; ?></td>
                                <td><?php echo $row['CONTACT_NUMBER']; ?></td>
                                <td><?php echo $row['ADDRESS']; ?></td>
                                <td><?php echo $row['DOCTOR_NAME']; ?></td>
                                <td><?php echo $row['DOCTOR_NUMBER']; ?></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit_customer.php?id=<?php echo $row['ID']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="delete_customer.php?id=<?php echo $row['ID']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                            
                            
                         
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/Chart.bundle.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from preclinic.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jan 2021 14:17:55 GMT -->

</html>