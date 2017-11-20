
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Students Panel</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css')?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/sb-admin.css')?>">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/plugins/morris.css')?>">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css')?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js')?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('student');?>">Students Portal</a>
            </div>
            <!-- Top Menu Items -->

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?= base_url('student');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<li >
                        <a href="<?= base_url('student/dashboad');?>"><i class="fa fa-fw fa-dashboard"></i> Add Courses</a>
                    </li>
                    <li>
                        <a href="<?= base_url('student/subjects');?>"><i class="fa fa-fw fa-dashboard"></i> Subjects</a>
                    </li>
                    <li>
                        <a href="<?= base_url('student/semesterSchedules');?>"><i class="fa fa-fw fa-dashboard"></i> Semester Schedules</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('student/edit_pass');?>"><i class="fa fa-fw fa-edit"></i> Profile</a>
                    </li>
                    <li>
                            <a href="<?php echo base_url('student/logout');?>" class="fa fa-power-off"?> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <center><h1 style="margin-bottom: 50px;" class="page-header">
                            Welcome to Students Dashboard
                        </h1></center>
                    </div>
					<?php if($error = $this->session->flashdata('item')): ?>
			 <div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="alert alert-danger alert-dismissible" data-auto-dismiss role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong><?= $error;?></strong>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if($error = $this->session->flashdata('insert_item')): ?>
			 <div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong><?= $error;?></strong>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if($error = $this->session->flashdata('subject_error')): ?>
			 <div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong><?= $error;?></strong>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if($error = $this->session->flashdata('seats')): ?>
			 <div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong><?= $error;?></strong>
					</div>
				</div>
			</div>
			<?php endif; ?>
                </div>
                