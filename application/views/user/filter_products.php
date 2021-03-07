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
							<h1 class="text-center page-title"><?php echo $category['name'];?></h1>
						</div>
					</div>
				</div>
			</div>
			
                    <?php
                        if(count($products) > 0){
                            echo "<div class='container mb-5 mt-3'><div class='grid-row'>";
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
                            echo "</div> </div>";
                        }
                        else{
                            echo "<div class='row'><div class='col-lg-12'><h4 class='text-center'>No products yet</h4></div></div>";
                        }
                    ?>
		</div>
		<!-- /.content -->
	</div>