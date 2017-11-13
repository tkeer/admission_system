
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
	<script src="<?= base_url('assets/js/responsiveslides.min.js')?>"></script>
	<script src="<?= base_url('assets/js/validations.js');?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.weekDays-selector input {
  display: none!important;
}

.weekDays-selector input[type=checkbox] + label {
  display: inline-block;
  border-radius: 6px;
  background: #dddddd;
  height: 40px;
  width: 30px;
  margin-right: 3px;
  line-height: 40px;
  text-align: center;
  cursor: pointer;
}

.weekDays-selector input[type=checkbox]:checked + label {
  background: #2AD705;
  color: #ffffff;
}
.but_pri {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    inline-size: -1px;
    line-height: 37px;
}
	</style>
</head>

<body>  
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
                <a class="navbar-brand" href="<?php echo base_url('admin');?>">Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>   
							<a class="tablinks fa fa-dashboard" href="<?= base_url().'admin';?>" > Home</a>
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Sessions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a class="tablinks fa  fa-file" href="<?= base_url().'admin/Add_session' ?>"> Add New Session</a>
                            </li>
                            <li>
                                <a href="<?= base_url().'admin/List_session' ?>"><i class="fa fa-fw fa-list"></i> List Sessions</a>
                            </li>
                        </ul>
						
							
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Departments <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a class="tablinks fa  fa-file" href="<?= base_url().'admin/add_view' ?>"> Add New Department</a>
                            </li>
                            <li>
								<a class="tablinks fa  fa-list" href="<?= base_url().'admin/List_dep'; ?>" > List department</a>
							</li>
                        </ul>
						
							
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Instructors <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a class="tablinks fa  fa-file" href="<?= base_url().'admin/teach' ?>"> Add New Instructor</a>
                            </li>
                            <li>
								<a class="tablinks fa  fa-list" href="<?= base_url().'admin/List_teach'; ?>" > List Instructor</a>
							</li>
                        </ul>	
					</li>
                    <li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-arrows-v"></i> Rooms <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a class="tablinks fa  fa-file" href="<?= base_url().'admin/room';?>"> Add New Romm</a>
                            </li>
                            <li>
								<a class="tablinks fa  fa-list" href="<?= base_url().'admin/List_room';?>" > List Room</a>
							</li>
                        </ul>	
					</li>
                    <li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-fw fa-arrows-v"></i> Subjects <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a class="tablinks fa  fa-file" href="<?= base_url('admin/sub');?>"> Add New Subject</a>
                            </li>
                            <li>
								<a class="tablinks fa  fa-list" href="<?= base_url('admin/List_sub');?>" > List Subjects</a>
							</li>
                        </ul>
						
							
					</li>
					
                    <li>
                        <a href="<?= base_url().'admin/pass';?>"><i class="fa fa-fw fa-edit"></i> Change Password</a>
                    </li>
                    <li>
                            <a href="<?php echo base_url('admin/logout');?>" class="fa fa-power-off"?> Logout</a>
                    </li>
                </ul>                  
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		
	<div class="container" style="background-color:white;">	
		<!-- nav tabing -->
		
		<div class="row" >
			  <div class="col-lg-12">
                        <center>
							<h1 style="margin-bottom: 50px;" class="page-header">
								Welcome to Admin Dashboard 
							</h1>
						</center>
              </div>
		</div>
		
			  <div class="row">
				<div class="col-md-5 col-md-offset-3">
					<h3 style="margin-bottom: 50px;">
								   For Admition Open
					</h3>
				</div>
				<div class="col-md-4">
				<?php $i=1;?>
					<?php  echo anchor("admin/ad_open/1",'OPEN',['class'=>'btn btn-primary but_pri']);?>
					<?php  echo anchor("admin/ad_close/0",'CLOSE',['class'=>'btn btn-primary but_pri']);?>
				</div>
			</div>
			<div class="row">
					<?php if($error = $this->session->flashdata('add_session')): ?>
					 <div class="row">
						<div class="col-md-4 col-md-offset-2">
							<div class="alert alert-success alert-dismissible" data-auto-dismiss role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong><?= $error;?></strong>
							</div>
						</div>
					</div>
			<?php endif; ?>
			</div>
			<div class="row">
					<?php if($error = $this->session->flashdata('faild_session')): ?>
					 <div class="row">
						<div class="col-md-4 col-md-offset-2">
							<div class="alert alert-danger alert-dismissible" data-auto-dismiss role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong><?= $error;?></strong>
							</div>
						</div>
					</div>
			<?php endif; ?>
			</div>
			<div class="row">
					<?php if($error = $this->session->flashdata('add_dep')): ?>
					 <div class="row">
						<div class="col-md-4 col-md-offset-2">
							<div class="alert alert-success alert-dismissible" data-auto-dismiss role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong><?= $error;?></strong>
							</div>
						</div>
					</div>
			<?php endif; ?>
			</div>
			<div class="row">
					<?php if($error = $this->session->flashdata('faild_dep')): ?>
					 <div class="row">
						<div class="col-md-4 col-md-offset-2">
							<div class="alert alert-danger alert-dismissible" data-auto-dismiss role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong><?= $error;?></strong>
							</div>
						</div>
					</div>
			<?php endif; ?>
			</div>
		
	

            
