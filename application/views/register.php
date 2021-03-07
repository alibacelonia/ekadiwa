
<style>
.content,.content-wrapper{
	background-color:transparent;
}


.login-card-body{
    max-width:400px;
    min-width:400px;
}
</style>
<div class="content-wrapper  main-content">
  
    <div class="content">
		<div class="container">
				<div class="login-page">
					<div class="card">
						<div class="card-body login-card-body">
						  <p class="login-box-msg ml-4 mr-4">Register to have an access on site.</p>
							<?php
								if($this->session->flashdata('error')){
									?>
									<div class="row">
											<div class="col-lg-12">
												<div class="alert card bg-danger">
													<div class="card-header p-0">
														<h3 class="card-title"><i class="fas fa-exclamation-triangle"></i> Alert</h3>

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
                                if($this->session->flashdata('success')){
									?>
									    <div class="row">
											<div class="col-lg-12">
												<div class="alert card bg-success">
													<div class="card-header p-0">
														<h3 class="card-title"><i class="fas fa-check-circle"></i> Alert</h3>
														<div class="card-tools">
															<button type="button" class="btn btn-tool" data-dismiss="alert" aria-hidden="true">
																<i class="fas fa-times"></i>
															</button>
														</div>
													</div>
													<div class="card-body p-0">
														<span><?php echo $this->session->flashdata('success'); ?></span>
													</div>
												</div>
											</div>
										</div>
									<?php
								}
							?>
							<form action="<?php echo base_url(); ?>auth/do_register" method="post">
								<div class="input-group mb-3">
									<input type="text" name="username" class="form-control" placeholder="Username" required>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-user"></span>
										</div>
									</div>
                                </div>
                                <div class="input-group mb-3">
									<input type="email" name="email" class="form-control" placeholder="Email" required>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-envelope"></span>
										</div>
									</div>
								</div>
								<div class="input-group mb-3">
									<input type="password" name="password" class="form-control" placeholder="Password" required>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-lock"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<button type="submit" class="btn btn-primary btn-block">Register</button>
									</div>
									<!-- <div class="col-8 align-left"> -->
										<!-- <div class="icheck-primary"> -->
											<!-- <input type="checkbox" id="remember"> -->
											<!-- <label for="remember"> Remember Me</label> -->
										<!-- </div> -->
									<!-- </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.
                                    </div>
                                    </div>
							</form>
							<br>
							<p class="mb-0">
								Already have an account?<a href="<?php echo base_url(); ?>auth/" class="text-center"> Login now</a>
							</p>
						</div>
					</div>
				</div>
	
		</div>
	</div>
    <!-- /.content -->
</div>