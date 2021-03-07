<style>
/* Store CSS */

@import url("https://fonts.googleapis.com/css?family=Roboto:400,700");

.container {
  margin: 0 auto;
}

.grid-row {
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
}

.grid-item {
    height: 400px;
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
    background: #fff;
    margin: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
    -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
    transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
    position: relative;
    cursor: pointer;
}

.grid-item-container {
  height: 100%;
  width: 100%;
  position: relative;
}

.grid-image-top {
  height: 60%;
  width: 120%;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
  left: -10.5%;
  top: -4.5%;
}

.grid-item-content {
  padding: 0px 10px 10px 10px;
}

.item-category {
  text-transform: uppercase;
  display: block;
  font-weight: bold;
  font-size: 17px;
  margin-bottom: 10px;
  text-align: center;
}

.item-excerpt {
  display: block;
  font-weight: bold;
  font-size: 18px;
  font-family:'Roboto';
  margin-bottom: 10px;
  text-align: center;
}

.more-info {
  position: absolute;
  bottom: 0;
  margin-bottom: 25px;
  padding-left: 0;
  transition-duration: .5s;
  font-size: 12px;
  display: flex;
}

.more-info i {
  padding-left: 5px;
  transition-duration: .5s;
}

.grid-item:hover .more-info i {
  padding-left: 20px;
  transition-duration: .5s;
}

.more-info i::before {
  font-size: 16px;
}

.grid-item:hover .grid-item-wrapper {
  padding: 2% 2%;
  margin: -2% -2%;
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


.widget-user-header{
	background-repeat:no-repeat;
	background-position:bottom center;
	background-size:cover;
	min-height:300px;
}

.widget-user .widget-user-image {
    left: 20%;
    margin-left: -45px;
    position: absolute;
    top: 200px;
}
.widget-user .widget-user-image img {
	min-width:150px;
	max-width:150px;
	min-height:150px;
	max-height:150px;
}
</style>
</style>
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-widget widget-user">
					<div class="widget-user-header text-white" style="background-image: url('<?php echo $store['banner'] == "" ? base_url()."assets/dist/img/bg/Masaganang-Ani-2048x1365.png" : base_url().$store['banner']; ?>');">
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="<?php echo base_url().$store['img_path']; ?>" alt="User Avatar">
					</div>
					<div class="card-footer bg-dark">
					<div class="row ">
						<div class="col-lg-10 offset-lg-2  pb-3">
							<h4 class="pt-3 "><?php echo $store['name'];?></h4> 
							<span><i class="fas fa-map-marker-alt"></i> <?php echo $store['location'];?></span> <br>
							<span><i class="fas fa-phone"></i> <?php echo $store['phone'];?></span> 
							<span><i class="far fa-envelope"></i> <?php echo $store['email'];?></span> 
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
			<!-- <div class="content mb-3">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="subheader col-12 pt-5 pb-5">
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
			</div> -->
			<section class="container">
			<div class="row">
					<!-- <div class="col-lg-3"></div> -->
					<div class="col-lg-12 mt-2 mb-5">
                        <div class="card card-success card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="ct-products-tab" data-toggle="pill" href="#ct-products" role="tab" aria-controls="ct-products" aria-selected="true">PRODUCTS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ct-about-tab" data-toggle="pill" href="#ct-about" role="tab" aria-controls="ct-about" aria-selected="false">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ct-policies-tab" data-toggle="pill" href="#ct-policies" role="tab" aria-controls="ct-policies" aria-selected="false">POLICIES</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="ct-reviews-tab" data-toggle="pill" href="#ct-reviews" role="tab" aria-controls="ct-reviews" aria-selected="false">REVIEWS</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="ct-products" role="tabpanel" aria-labelledby="ct-products-tab">
                                        <div class="row">
                                            <div class="container mb-5 mt-3">
                                                <div class="grid-row">
													<?php
														if(count($products) > 0){
                                                        	foreach ($products as $product){
                                                    ?>
                                                    <div class="grid-item">	   
                                                        <div class="grid-item-wrapper">
                                                            <div class="grid-item-container">
                                                                <div class="grid-image-top rex-ray" style="background-image: url(<?php echo base_url().$product['img_path'];?>);"></div>
                                                                <div class="grid-item-content">
                                                                    <span class="item-category text-success"><?php echo $product['commodity'];?></span>
                                                                    <span class="item-excerpt text-success">₱ <?php echo number_format((float)$product['price'], 2, '.', '');?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        	}

														}
														else{
															echo "No products yet";
														}
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ct-about" role="tabpanel" aria-labelledby="ct-about-tab">
									<div class="row">
											<div class="col-lg-12">
												<?php echo strlen($store['about']) == 0 ? "No information about the store available." : $store['about'] ;?>
											</div>
										</div>
                                    </div>
                                    <div class="tab-pane fade" id="ct-policies" role="tabpanel" aria-labelledby="ct-policies-tab">
										<div class="row">
											<div class="col-lg-12">
												<?php echo strlen($store['policy']) == 0 ? "No policies yet." : $store['policy'] ;?>
											</div>
										</div>
                                    </div>
                                    <!-- <div class="tab-pane fade" id="ct-reviews" role="tabpanel" aria-labelledby="ct-reviews-tab">
                                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                                    </div> -->
                                </div>
                            </div>
                        </div>
					</div>
				</div>  
		</section> 
  
		<!-- /.content -->
	</div>
  