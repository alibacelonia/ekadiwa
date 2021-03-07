

<style>
.store-item {
	position: relative;
	overflow: hidden;
	min-height: 200px !important;
	max-height: 200px !important;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.store-item img {
	vertical-align: top;
	max-width: 100%;
	min-height: 200px !important;
	max-height: 200px !important;
	-moz-transition: all 0.3s;
	-webkit-transition: all 0.3s;
	transition: all 0.3s;
}

.store-item:hover img {
	-moz-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}

/* Product Slider */

.product-row {
  display: flex;
  flex-flow: row nowrap;
  justify-content: flex-start;
}

.product-item {
    height: 350px;
    flex-basis: 20%;
    -ms-flex: auto;
    width: 230px;
    position: relative;
    padding: 10px;
    box-sizing: border-box;
}

.product-item-content {
  padding: 0px 10px 10px 10px;
}

.product-item-wrapper {
    -webkit-box-sizing: initial;
    -moz-box-sizing: initial;
    box-sizing: initial;
    background: #fff;
    margin: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
    -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
    transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
    position: relative;
	cursor: pointer;
	border:1px solid #ccc;
}

.product-item-container {
  height: 100%;
  width: 100%;
  position: relative;
}

.product-image-top {
  height: 55%;
  width: 120%;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
  left: -10.5%;
  top: -4.5%;
}


.item-category {
  display: block;
  font-weight: bold;
  font-size: 17px;
  margin-bottom: 10px;
}

.item-excerpt {
  display: block;
  font-size: 17px;
  margin-bottom: 10px;
}

/* Store CSS */

@import url("https://fonts.googleapis.com/css?family=Roboto:400,700");


.container {
  max-width: 1335px;
  margin: 0 auto;
}

.grid-row {
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
}

.grid-item {
    height: 250px;
    flex-basis: 20%;
    -ms-flex: auto;
    width: 259px;
    position: relative;
    padding: 10px;
    box-sizing: border-box;
}

.grid-row a {
  text-decoration: none;
}

.wrapping-link {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  color: currentColor;
}

.grid-item-wrapper {
    -webkit-box-sizing: initial;
    -moz-box-sizing: initial;
    box-sizing: initial;
    background-color:#fff;
    margin: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
    -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
    transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
    position: relative;
}

.grid-item-container {
  height: 100%;
  width: 100%;
  position: relative;
}

.grid-image-top {
  height: 100%;
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
  left: -10.5%;
  top: -4.5%;
}


@media(max-width: 1333px) {
  .grid-item {
    flex-basis: 33.33%;
  }
}

@media(max-width: 1073px) {
   .grid-item {
    flex-basis: 33.33%;
  }
}

@media(max-width: 815px) {
  .grid-item {
    flex-basis: 50%;
  }
}

@media(max-width: 555px) {
  .grid-item {
    flex-basis: 100%;
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
								<h4 class="cat-title pl-3 pt-2 pb-2 text-bold  text-success">Categories</h4>
								<ul class=" bg-success">
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/TVE9PQ==" class=" text-light"><span>Gulay</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/TWc9PQ==" class=" text-light"><span>Prutas</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/TXc9PQ==" class=" text-light"><span>Processed Goods</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/TkE9PQ==" class=" text-light"><span>Karne</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/TlE9PQ==" class=" text-light"><span>Dessert</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/Tmc9PQ==" class=" text-light"><span>Sea Food</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/Tnc9PQ==" class=" text-light"><span>Daing</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/T0E9PQ==" class=" text-light"><span>Bigas</span></a></li>
									<li class="cat-item"><a href="<?php echo base_url();?>products/filter/T1E9PQ==" class=" text-light"><span>Beverages</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-12">
						<h4 class="cat-title pl-3 pt-2 pb-2 text-bold  text-success">Shop</h4>
						<div class="row">
							<div class="container">
								<div class="grid-row">
									<?php
										foreach($stores as $store){
									?>
											
										<div class="grid-item">
											<a class="wrapping-link" href="<?php echo base_url()."store/details/".$store['id']; ?>"></a>
											<div class="grid-item-wrapper">
												<div class="grid-item-container">
													<div class="grid-image-top rex-ray" style="background-image:url(<?php echo $store['img_path'];?>);"></div>
												</div>
											</div>
										</div>
									
									<?php
										}
									?>
								</div>
							</div>
						</div>
						<h4 class="cat-title pl-3 pt-2 pb-2 text-bold  text-success">Karne</h4>
						<div class="row">
							<div class="karne-carousel owl-carousel owl-theme owl-dots-inner">
								<?php
								foreach($karne as $k){
								?>
								
								<!-- <div class="card">
									<div class="item-zoom">
										<img class="img-fluid" src="<?php echo $k['img_path'];?>" alt="Alcala Onion Growers MPC">
									</div>
									<div class="card-body">
										<h6 class="text-success text-left"><?php echo $k['commodity'];?></h6>
										<h6 class="text-success text-left text-bold">₱<?php echo number_format((float)$k['price'], 2, '.', '');?></h6>
									</div>
								</div> -->
								
								<div class="product-item">	   
									<div class="product-item-wrapper">
										<div class="product-item-container">
											<div class="product-image-top" style="background-image: url(<?php echo base_url().$k['img_path'];?>);"></div>
											<div class="product-item-content">
												<span class="item-category text-dark"><?php echo $k['commodity'];?></span>
												<span class="item-excerpt text-dark">₱<?php echo number_format((float)$k['price'], 2, '.', '');?></span>
											</div>
										</div>
									</div>
								</div>

								<?php
								}
								
								?>
							</div>
						</div>
						<h4 class="cat-title pl-3 pt-2 pb-2 text-bold text-success">Beverages</h4>
						<div class="row">
							<div class="gulay-carousel owl-carousel owl-theme owl-dots-inner">
								<?php
								foreach($gulay as $g){
								?>
								
								<div class="product-item">	   
									<div class="product-item-wrapper">
										<div class="product-item-container">
											<div class="product-image-top" style="background-image: url(<?php echo base_url().$g['img_path'];?>);"></div>
											<div class="product-item-content">
												<span class="item-category text-dark"><?php echo $g['commodity'];?></span>
												<span class="item-excerpt text-dark">₱<?php echo number_format((float)$g['price'], 2, '.', '');?></span>
											</div>
										</div>
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