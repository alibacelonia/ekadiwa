<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>AdminLTE 3 | Top Navigation</title>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inconsolata:300,400,400i,700" rel="stylesheet">
<style>
* {
 font-size: 100%;
 font-family: 'Inconsolata';
}

.login-page,
.register-page {
  -ms-flex-align: center;
  align-items: center;
  background: transparent;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 80vh;
  -ms-flex-pack: center;
  justify-content: center;
}

.main-content{
	background-image: url('<?php echo base_url(); ?>assets/dist/img/bg/Masaganang-Ani-2048x1365.png');
	background-repeat: no-repeat;
	background-position: top center;
	background-size: cover;
}
.error-wrapper{
	
  max-width:300px;
}
</style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

	<nav class="main-header navbar navbar-expand-md navbar-success navbar-dark">
    <div class="container-fluid">
		<a href="<?php echo base_url(); ?>" class="navbar-brand">
			<img src="<?php echo base_url(); ?>assets/dist/img/DALogo.png" alt="DA Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
        <span class="brand-text font-weight-light">eKadiwa ni Ani at Kita</span>
		</a>
      
		<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		&emsp;
		&emsp;
		<div class="collapse navbar-collapse order-1" id="navbarCollapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>store">Shop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn bg-warning register_as_vendor" href="#" >Become a vendor</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?php echo base_url();?>auth">Login/Register</a>
				</li>
			</ul>

		</div>
		
		<div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
			
			<!-- SEARCH FORM -->
			<form class="form-inline ml-auto">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
		
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper  main-content">
  
    <div class="content">
		<div class="container">
				<div class="login-page">
					<div class="card">
						<div class="card-body login-card-body">
						  <p class="login-box-msg ml-4 mr-4">Login to start your session</p>
							<?php
								if($this->session->flashdata('error')){
									?>
									<div class="row">
										<div class="col-12">
											<div class="alert error-wrapper card bg-danger">
												<div class="card-header p-0">
													<h3 class="card-title"><i class="fas fa-exclamation-triangle"></i> Oops!</h3>

													<div class="card-tools">
														<button type="button" class="btn btn-tool" data-dismiss="alert" aria-hidden="true">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</div>
												<div class="card-body p-0">
													<span><?php echo $this->session->flashdata('error'); ?></span>
												</div>
											</div>
										</div>
									</div>
									<?php
								}
							?>
							<form action="<?php echo base_url(); ?>Auth/do_login" method="post">
								<div class="input-group mb-3">
									<input type="text" name="email" class="form-control" placeholder="Username or Email">
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-user"></span>
										</div>
									</div>
								</div>
								<div class="input-group mb-3">
									<input type="password" name="password" class="form-control" placeholder="Password">
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-lock"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<button type="submit" class="btn btn-primary btn-block">Login</button>
									</div>
									<!-- <div class="col-8 align-left"> -->
										<!-- <div class="icheck-primary"> -->
											<!-- <input type="checkbox" id="remember"> -->
											<!-- <label for="remember"> Remember Me</label> -->
										<!-- </div> -->
									<!-- </div> -->
								</div>
							</form>
							<br>
							<p class="mb-1"> <a href="<?php echo base_url(); ?>auth/forgot">I forgot my password</a> </p>
							<p class="mb-0">
								<a href="register.html" class="text-center">Register a new membership</a>
							</p>
						</div>
					</div>
				</div>
	
		</div>
	</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

 <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      MBA | v1.0.0.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a class="text-success" href="http://ilocos.da.gov.ph">Department of Agriculture Regional Field Office 1</a>.</strong> All rights reserved.
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(".register_as_vendor").click(function(){
	const Toast = Swal.mixin({
	  toast: true,
	  position: 'top',
	  showConfirmButton: false,
	  timer: 2000,
	  timerProgressBar: true,
	  didOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	  }
	})

	Toast.fire({
	  icon: 'error',
	  title: 'This feature is disabled by the administrator.'
	})
});

</script>
</body>
</html>
