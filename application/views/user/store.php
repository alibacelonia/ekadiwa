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
			<div class="container mb-5 mt-3">
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
		<!-- /.content -->
	</div>