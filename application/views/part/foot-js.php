<!--Js -->
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-migrate-1.2.1.min.js") ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/js/cufon-yui.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/swiss.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/hoverIntent.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/functions.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/classie.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/stack.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/lightbox-plus-jquery.min.js"); ?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.colorbox.js"); ?>"></script> -->
<script type="text/javascript" src="<?php echo base_url("assets/js/slick.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/sweetalert/sweetalert.min.js"); ?>"></script>
<script type="text/javascript">
	$('.redaksi_choice').slick({
		slidesToShow: 4,
	  	slidesToScroll: 4
	});
	$('[data-click="expand-wisuda"]').click(function(){
		$('#gal-btn-1').show();
		$('.gal-button a').css({"color": "#fff", "text-decoration": "none"});
		$('#wisuda').hide();
	});

	$('[data-click="expand-kegiatan"]').click(function(){
		$('#gal-btn-2').show();
		$('.gal-button a').css({"color": "#fff", "text-decoration": "none"});
		$('#kegiatan').hide();
	});

	$('[data-click="expand-seminar"]').click(function(){
		$('#gal-btn-3').show();
		$('.gal-button a').css({"color": "#fff", "text-decoration": "none"});
		$('#seminar').hide();
	});
</script>





</body>
</html>