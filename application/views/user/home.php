<style>

@media (min-width: 576px) {
  .div-category {
    display:none;
  }
  .store-item {
    -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%;
  }
}

@media (min-width: 768px) {
  .div-category {
    display:none;
  }
  
  .store-item {
    -ms-flex: 0 0 25%;
      flex: 0 0 25%;
      max-width: 25%;
  }
}

@media (min-width: 992px) {
  .div-category {
    display:block;
  }
  .store-item {
    -ms-flex: 0 0 25%;
      flex: 0 0 25%;
      max-width: 25%;
  }
}

@media (min-width: 1200px) {
  .div-category {
    display:block;
  }
  .store-item {
  -ms-flex: 0 0 25% !important;
    flex: 0 0 25%;
    max-width: 25%;
}
}

</style>
	<div class="content-wrapper">
		<div class="content mb-3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 offset-md-1">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="https://www.ekadiwa.da.gov.ph/wp-content/uploads/2020/04/FB-BANNER-5_GIAN-2-1200x291.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="https://www.ekadiwa.da.gov.ph/wp-content/uploads/2020/04/FB-BANNER-2_GIAN-2-1200x291.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="https://www.ekadiwa.da.gov.ph/wp-content/uploads/2020/04/FB-BANNER-9_GIAN-2-1200x291.jpg" alt="Third slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="https://www.ekadiwa.da.gov.ph/wp-content/uploads/2020/04/FB-BANNER-3_GIAN-2-1200x291.jpg" alt="Forth slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="div-category col-lg-2 offset-1">
						<div class="cat-wrapper">
							<div class="cat-menu">
								<h3 class="cat-title pl-3 pt-2 pb-2 text-success">Categories</h3>
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
						<h3 class="cat-title pl-3 pt-2 pb-2  text-success">Store</h3>
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
						<h3 class="cat-title pl-3 pt-2 pb-2  text-success">Karne</h3>
						<div class="row">
							<div class="karne-carousel owl-carousel owl-theme owl-dots-inner">
								<?php
								foreach($karne as $k){
								?>
								
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo $k['img_path'];?>" alt="Alcala Onion Growers MPC">
									</div>
									<div class="card-body">
										<h5 class="text-success text-center"><?php echo $k['commodity'];?></h5>
										<h4 class="text-success text-center text-bold">₱<?php echo number_format((float)$k['price'], 2, '.', '');?></h4>
									</div>
								</div>
								
								<?php
								}
								
								?>
							</div>
						</div>
						<h3 class="cat-title pl-3 pt-2 pb-2  text-success">Gulay</h3>
						<div class="row">
							<div class="gulay-carousel owl-carousel owl-theme owl-dots-inner">
								<?php
								foreach($gulay as $g){
								?>
								
								<div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo $g['img_path'];?>" alt="Alcala Onion Growers MPC">
									</div>
									<div class="card-body">
										<h5 class="text-success text-center"><?php echo $g['commodity'];?></h5>
										<h4 class="text-success text-center text-bold">₱<?php echo number_format((float)$g['price'], 2, '.', '');?></h4>
									</div>
								</div>
								
								<?php
								}
								
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.content -->
	</div>
  <!-- /.content-wrapper -->
