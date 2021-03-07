<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function(){
	$(".karne-carousel").owlCarousel({
		items: 4,
		itemsDesktop: [1400, 3],//1400:screen size, 3: number if items in the slide
		itemsDesktopSmall: [1100, 2],
		itemsTablet: [700, 1],
		itemsMobile: [500, 1],
		margin:12,
		loop:true,
		autoplay:true,
		dots:false,
		autoplayTimeout:3000
	});
	$(".gulay-carousel").owlCarousel({
		items: 4,
		itemsDesktop: [1400, 3],//1400:screen size, 3: number if items in the slide
		itemsDesktopSmall: [1100, 2],
		itemsTablet: [700, 1],
		itemsMobile: [500, 1],
		margin:12,
		loop:true,
		autoplay:true,
		dots:false,
		autoplayTimeout:2500
	});
  
  $(".register_as_vendor").click(function(){
	const Toast = Swal.mixin({
	  toast: true,
	  position: 'top',
	  showConfirmButton: false,
	  timer: 2000,
	  timerProgressBar: true,
	  didOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	  }
	})

	Toast.fire({
	  icon: 'error',
	  title: 'This feature is disabled by the administrator.'
	})
});

});



</script>
</body>
</html>
