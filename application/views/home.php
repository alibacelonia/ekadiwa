<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>AdminLTE 3 | Top Navigation</title>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inconsolata:300,400,400i,700" rel="stylesheet">
<style>
* {
 font-size: 100%;
 font-family: 'Inconsolata';
}

.cat-wrapper ul{
	list-style-type: square;
    font-size: 20px;
}

.cat-wrapper .cat-menu .cat-item{
	border-top:1px solid #fff;
}

.cat-wrapper .cat-menu li:nth-child(1){
	border-top:none;
}

.cat-wrapper .cat-menu .cat-item{
	border-top:1px solid #fff;
}

.cat-wrapper .cat-menu .cat-item a{
	display: inline-block;
	width: 100%;
	text-decoration: none;
	position: relative;
	padding: 5px 0px 5px 0px;
}

.cat-wrapper .cat-menu .cat-item a span{
	font-weight: bold;
	font-size: 16px;
	padding: 12px 15px 12px 15px;
	display: inline-block;
}

@media (max-width: 576px) {
  .div-category {
    display:none;
  }
}

@media (max-width: 768px) {
  .div-category {
    display:none;
  }
}

@media (min-width: 992px) {
  .div-category {
    display:block;
  }
}

@media (min-width: 1200px) {
  .div-category {
    display:block;
  }
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
					<a class="nav-link btn btn-warning text-light register_as_vendor" href="#" >Become a vendor</a>
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
	<div class="content-wrapper">
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="div-category col-lg-2 offset-1">
						<div class="cat-wrapper">
							<div class="cat-menu">
								<h3 class="cat-title pl-3 pt-2 pb-2">Categories</h3>
								<ul class=" bg-success">
									<li class="cat-item"><a href="#" class=" text-light"><span>Gulay</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Prutas</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Processed Goods</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Karne</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Dessert</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Sea Food</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Daing</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Bigas</span></a></li>
									<li class="cat-item"><a href="#" class=" text-light"><span>Beverages</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-12">
						<h3 class="cat-title pl-3 pt-2 pb-2">Products</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/1.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/2.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/3.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/4.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/5.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/6.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/7.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/8.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/9.png">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo base_url();?>assets/dist/img/store/10.png">
									</div>
								</div>
							</div>
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
