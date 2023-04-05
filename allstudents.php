<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Students</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<div class="menu-toggle">
<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-bars"></i>
</a>
</div>

<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>




</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
<li class="submenu">
 <a href="#"><i class="feather-grid"></i> <span> Parents</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="allparents.php">All Parents</a></li>
<li><a href="addparents.php">Add Parents</a></li>
<li><a href="updateparents.php">Update Parents</a></li>
<li><a href="allparents.php">Delete Parents</a></li>
</ul>
</li>
<li class="submenu active">
<a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="allstudents.php">All Students</a></li>
<li><a href="index.php">Add Students</a></li>
<li><a href="updatestudents.php">Update Students</a></li>
<li><a href="allstudents.php">Delete Students</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="allteachers.php">All Teachers</a></li>
<li><a href="addteachers.php">Add Teachers</a></li>
<li><a href="updateteachers.php">Update Teachers</a></li>
<li><a href="allteachers.php">Delete Teachers</a></li>
</ul>
</li>

</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">All Students</li>
</ul>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-12">
<div class="card card-table comman-shadow">
<div class="card-body">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Students</h3>
</div>

</div>
</div>
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                ?>
<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
 <th>Student Id</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Address</th>
<th>Date of Birth</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tr>
                                            <?php
                                            $i=0;
                                            while($row = mysqli_fetch_array($result)) {
                                            ?>
<td><strong><?php echo $row["student_id"]; ?></strong></td>
                                                        <td><?php echo $row["fname"]; ?> <span></span><?php echo $row["lname"]; ?></a>
                                                        </td>
                                                        <td><?php echo $row["number1"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                        <td><?php echo $row["address"]; ?></a></td>
                                                        <td><?php echo $row["dob"]; ?></td>
                                                        <td>
                                                            <a href="updatestudents.php" class="btn btn-sm btn-primary">Update</a><span></span></td>
                                                            <td><a href="deletestudents.php?student_id=<?php echo $row["student_id"]; ?>" class="btn btn-sm btn-danger">Delete</a>
                                                        </td>                                               
                                                    </tr>
                                                    
                                                    
                                                    <?php
                                                        $i++;
                                                        }
                                                    }
                                                ?>
</a>
</div>
</td>
</tr>
<tr>
<td>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>



</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>