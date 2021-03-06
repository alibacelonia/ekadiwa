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
					<a class="nav-link <?php echo $current_page == "home" ? "active" : "";?>" href="<?php echo base_url(); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo $current_page == "store" ? "active" : "";?>" href="<?php echo base_url();?>store">Shop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn btn-warning text-light register_as_vendor" href="#" >Become a vendor</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo ($current_page == "login" || $current_page == "register" || $current_page == "register_as_vendor") ? "active" : "";?>" href="<?php echo base_url();?>auth">Login/Register</a>
				</li>
			</ul>

		</div>
		
		<!-- <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"> -->
			<!-- <form class="form-inline ml-auto"> -->
				<!-- <div class="input-group input-group-sm"> -->
					<!-- <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> -->
					<!-- <div class="input-group-append"> -->
						<!-- <button class="btn btn-navbar" type="submit"> -->
							<!-- <i class="fas fa-search"></i> -->
						<!-- </button> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </form> -->
		<!-- </div> -->
		
    </div>
  </nav>
  <!-- /.navbar -->