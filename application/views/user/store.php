<style>

@media (min-width: 576px) {
  .div-category {
    display:none;
  }
  .store-item {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
}

@media (min-width: 768px) {
  .div-category {
    display:none;
  }
  
  .store-item {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
}

@media (min-width: 992px) {
  .div-category {
    display:block;
  }
  .store-item {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
}

@media (min-width: 1200px) {
  .div-category {
    display:block;
  }
  .store-item {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
}
}

</style>
	<div class="content-wrapper">
		<div class="content">
			
			<div class="container mb-3">
				<div class="row">
					<div class="col-12">
						<img class="img-fluid" src="https://www.ekadiwa.da.gov.ph/wp-content/uploads/2020/04/FB-BANNER-2_GIAN-2.jpg">
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="page-title-wrapper bg-success">
							<h1 class="text-center page-title">SHOP</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
			<div class="row">
				<div class="store-carousel owl-carousel owl-theme owl-dots-inner">
					<?php
					foreach($stores as $store){
					?>
					<a href="<?php echo base_url()."store/details/".$store['id']; ?>">
						<div class="card ">
							<div class="store-item">
								<img class="img-fluid row-cols-3" src="<?php echo $store['img_path']; ?>" alt="Alcala Onion Growers MPC">
							</div>
						</div>
					</a>
					
					<?php
					}
					?>
					</div>
			</div>
			</div>
		</div>
		<!-- /.content -->
	</div>