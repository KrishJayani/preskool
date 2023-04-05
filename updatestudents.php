<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set student_id='" . $_POST['student_id'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', number1='" . $_POST['number1'] . "', email='" . $_POST['email'] . "' ,address='" . $_POST['address'] . "', medical_info='" . $_POST['medical_info'] . "', gender='" . $_POST['gender'] . "', dob='" . $_POST['dob'] . "' WHERE student_id='" . $_POST['student_id'] . "'");
 header("Location: allstudents.php", true, 301);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE student_id='" . $_GET['student_id'] . "'");
$row= mysqli_fetch_array($result);
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

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-sub-header">
<h3 class="page-title">Update Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Update Students</li>
</ul>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card comman-shadow">
<div class="card-body">
<form action=" " method="post">
<div class="row">
<div class="col-12">
<h5 class="form-title student-info">Student Information Update <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Student Id <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter Student Id" name="student_id"> 
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>First Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter First Name" name="fname" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Last Name <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter Last Name" name="lname"> 
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Gender <span class="login-danger">*</span></label>
<select class="form-control select" name="gender">
<option>Select Gender</option>
<option>Female</option>
<option>Male</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms calendar-icon">
<label>Date Of Birth <span class="login-danger">*</span></label>
<input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY" name="dob" required>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Mobile Number: </label>
<input class="form-control" type="text" placeholder="Enter Mobile Number" name="number1">
</div>
</div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <textarea class="form-control" rows="5" name="address"></textarea>
                                            </div>
                                        </div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>Blood Group <span class="login-danger">*</span></label>
<select class="form-control select" name="medical_info">
<option>Please Select Group </option>
<option>B+</option>
<option>A+</option>
<option>O+</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group local-forms">
<label>E-Mail <span class="login-danger">*</span></label>
<input class="form-control" type="text" placeholder="Enter Email Address" name="email">
</div>
</div>

<div class="col-12">
<div class="student-submit">
<button type="submit" class="btn btn-primary">Update</button>
</div>
</div>
</div>
</form>
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

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>