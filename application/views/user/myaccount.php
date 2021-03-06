
	<div class="content-wrapper">
		<div class="content mb-3">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="subheader col-12 pt-5 pb-5">
						<h1 class="text-center text-secondary">My Account</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 mt-5">
						<a href="<?php echo base_url(); ?>home/my_account">
							<div class="sidebar-item active">
								<span >Account Details</span>
							</div>
						</a>
						<?php
						if($user_details['type'] == "V"){
						?>
						<a href="<?php echo base_url(); ?>home/mystore">
							<div class="sidebar-item">
								<span >My Store</span>
							</div>
						</a>
						<?php
						}
						?>
						<a href="<?php echo base_url(); ?>auth/logout">
							<div class="sidebar-item">
								<span>Log Out</span>
							</div>
						</a>
					</div>
					
					<div class="col-lg-9 mt-5 mb-5">
						<form action="<?php echo base_url();?>home/save_changes" method="post">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>First Name <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="firstname" required value="<?php echo $user_details['firstname']; ?>">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Middle Name <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="middlename" required value="<?php echo $user_details['middlename']; ?>">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Last Name <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="lastname" required value="<?php echo $user_details['lastname']; ?>">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Gender <sup class="text-danger">*</sup></label>
										<select class="form-control" name="gender" required>
											<option selected disabled></option>
											<option value="Male" <?php echo $user_details['gender'] == "Male" ? "selected" : ""; ?>>Male</option>
											<option value="Female" <?php echo $user_details['gender'] == "Female" ? "selected" : ""; ?>>Female</option>
										</select>
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Birthdate <sup class="text-danger">*</sup></label>
										<input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="birthdate" required value="<?php echo $user_details['birthdate']; ?>">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Phone <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="phone" required value="<?php echo $user_details['phone']; ?>">
									</div>
								</div>
								
								<div class="col-sm-12">
								
									<label>Password Change</label>
									<div class="form-group">
										<label>Current password (leave blank to leave unchanged)</label>
										<input type="password" class="form-control" placeholder="" name="current_password">
									</div>
									<div class="form-group">
										<label>New password (leave blank to leave unchanged)</label>
										<input type="password" class="form-control" placeholder="" name="new_password">
									</div>
									<div class="form-group">
										<label>Confirm new password</label>
										<input type="password" class="form-control" placeholder="" name="confirm_password">
									</div>
									<button type="submit" class="btn btn-flat btn-success">Save Changes</button>
								</div>
							</div>
						</form>
              
					</div>
				</div>
			</div>
		</div>
		<!-- /.content -->
	</div>
 