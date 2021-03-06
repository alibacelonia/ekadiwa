<style>

.subheader{
	background-image: url(https://www.ekadiwa.da.gov.ph/wp-content/uploads/2020/04/da-innerbg.jpg);
	background-repeat:no-repeat;
	background-position:55% 0%;
	min-height:300px;
}
</style>
	<div class="content-wrapper">
		<div class="content mb-3">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="subheader col-12">
						<h1 class="text-center text-gray">BANNER IMAGE HERE</h1>
					</div>
				</div>
				<div class="row bg-dark">
					<div class="col-lg-10 offset-lg-2  pb-3">
						<h4 class="pt-3 "><?php echo $store['name'];?></h4> 
						<span><i class="fas fa-map-marker-alt"></i> <?php echo $store['location'];?></span> <br>
						<span><i class="fas fa-phone"></i> <?php echo $store['phone'];?></span> 
						<span><i class="far fa-envelope"></i> <?php echo $store['email'];?></span> 
					</div>
				</div>
			</div>
		</div>
			<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-9">
						<div class="card card-primary card-outline card-outline-tabs">
							<div class="card-header p-0 border-bottom-0">
								<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="products-tab" data-toggle="pill" href="#products" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Products</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="about-tab" data-toggle="pill" href="#about" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">About</a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<div class="tab-content" id="custom-tabs-four-tabContent">
									<div class="tab-pane fade show active" id="products" role="tabpanel" aria-labelledby="products-tab">
										<div class="row">
											<?php
											foreach($products as $k){
											?>
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
												<div class="card">
													<div class="item-zoom">
														<img class="img-fluid" src="<?php echo base_url().$k['img_path'];?>" alt="Alcala Onion Growers MPC">
													</div>
													<div class="card-body">
														<h5 class="text-success text-center"><?php echo $k['commodity'];?></h5>
														<h4 class="text-success text-center text-bold">₱<?php echo number_format((float)$k['price'], 2, '.', '');?></h4>
													</div>
												</div>
											</div>
											<?php
											}
											?>
										</div>
									</div>
									<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
										<p><?php echo $store['about']; ?></p>
									</div>
								</div>
							</div>
						  <!-- /.card -->
						</div>
					</div>
				</div> 
			</div> 
		</section> 
  
		<!-- /.content -->
	</div>
  