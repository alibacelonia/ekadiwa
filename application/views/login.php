
<style>
.content,.content-wrapper{
	background-color:transparent;
}

</style>
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
							<p class="mb-1 register_as_vendor"> <a href="#">I forgot my password</a> </p>
							<p class="mb-0 register_as_vendor">
								<a href="#" class="text-center">Register a new membership</a>
							</p>
						</div>
					</div>
				</div>
	
		</div>
	</div>
    <!-- /.content -->
</div>