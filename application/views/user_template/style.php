<style>
* {
 font-size: 100%;
 font-family: 'Inconsolata';
}

.content,.content-wrapper{
	background-color:#ffffff;
}

.main-content{
	background-image: url('<?php echo base_url(); ?>assets/dist/img/bg/Masaganang-Ani-2048x1365.png') !important;
	background-repeat: no-repeat !important;
	background-position: top center !important;
	background-size: cover !important;
}

.login-page,
.register-page {
  -ms-flex-align: center;
  align-items: center;
  background: transparent;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 80vh;
  -ms-flex-pack: center;
  justify-content: center;
}

.error-wrapper{
  max-width:300px;
}


.cat-wrapper ul{
	list-style-type: square;
    font-size: 20px;
}

.cat-wrapper .cat-menu .cat-item{
	border-top:1px solid #fff;
}

.cat-wrapper .cat-menu li:nth-child(1){
	border-top:none;
}

.cat-wrapper .cat-menu .cat-item{
	border-top:1px solid #fff;
}

.cat-wrapper .cat-menu .cat-item a{
	display: inline-block;
	width: 100%;
	text-decoration: none;
	position: relative;
	padding: 5px 0px 5px 0px;
}

.cat-wrapper .cat-menu .cat-item a span{
	font-weight: bold;
	font-size: 16px;
	padding: 12px 15px 12px 15px;
	display: inline-block;
}

.cat-title{
  font-family:'Roboto';
}

.all-caps{
	text-transform: uppercase;
}

@media (max-width: 576px) {
  .div-category {
    display:none;
  }
}

@media (max-width: 768px) {
  .div-category {
    display:none;
  }
}

@media (min-width: 992px) {
  .div-category {
    display:block;
  }
}

@media (min-width: 1200px) {
  .div-category {
    display:block;
  }
}

.item-zoom {
	position: relative;
	overflow: hidden;
	min-height: 200px !important;
	max-height: 200px !important;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.item-zoom img {
	vertical-align: top;
	max-width: 100%;
	min-height: 200px !important;
	max-height: 200px !important;
	-moz-transition: all 0.3s;
	-webkit-transition: all 0.3s;
	transition: all 0.3s;
}

.item-zoom:hover img {
	-moz-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}

/* my account styles */

.subheader{
	background-image: url(https://www.ekadiwa.da.gov.ph/wp-content/uploads/2020/04/da-innerbg.jpg);
	background-repeat:no-repeat;
	background-position:55% 0%;
	
}
.subheader h1{
    font-size: 5rem;
	padding-top:3.5rem;
	padding-bottom:3.5rem;
}  

@media (max-width: 768px) {
    .subheader h1{font-size: 14px;}
}

@media (max-width: 576px) {
    .subheader h1{font-size: 2.5rem;}
}

.sidebar-item{
	border:1px solid #adb5bd;
	padding:10px 20px;
	margin-bottom:2px;
}

.sidebar-item.active{
	background-color:#006837;
}

.sidebar-item.active span{
	color:#fff;
}

form label{
	font-weight:bold;
}
</style>

</head>