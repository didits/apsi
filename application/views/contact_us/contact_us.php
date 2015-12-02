<div class="row">
	<div class="col s12 l12 wow fadeInDown" >
		<h4 align="center"><b>CONTACT US</b></h4>
		<h6 align="center">We Will Appreciate This Very Much.</h6>
		<br>
	</div>
</div>
<div class="row margin-bottom">
	<!-- LIST THUMB-->
	<div class="col l1" style="overflow:hidden">
		<div class="hide-on-med-and-down">
			<img style="margin-top:200px; width:100%" src="<?php echo base_url();?>assets/assets/line.svg">
			<img style="margin-top:100px; width:100%" src="<?php echo base_url();?>assets/assets/line.svg">
		</div>
	</div>
	<div class="col s12 l7">
		<div class="card" >
			<div class="card-image" >
				<div class="hide-on-med-and-down" style="position:absolute; right:0; bottom:0; z-index:10"><img style="width:250px"src="<?php echo base_url();?>assets/assets/bingkai_2.svg"></div>
				<div  style="position:absolute; left:0; top:0; z-index:10"><img style="width:250px"src="<?php echo base_url();?>assets/assets/bingkai.svg"></div>
				<div style="position:absolute; left:10px; top:0px; z-index:11"><img style="width:100px"src="<?php echo base_url();?>assets/assets/pin.svg"></div>
				<div style="position:absolute; right:55px; bottom:20px; z-index:11"><img style="width:30px"src="<?php echo base_url();?>assets/assets/back.svg"></div>
				<div style="position:absolute; right:20px; bottom:20px; z-index:11"><img style="width:30px"src="<?php echo base_url();?>assets/assets/nect.svg"></div>
				<img class="activator" src="<?php echo base_url();?>assets/assets/bromo.jpg">
			</div>
		</div>
	</div>
	<div class="col s12 l4">
		<div class="border margin-bottom" style="margin-top:7px">
			<div class="padding">
				<form>
					<div class="input-field col s6">
						<input placeholder="Name" id="icon_prefix" type="text" class="validate">
					</div>
					<div class="input-field col s6">
						<input placeholder="Email" id="icon_prefix" type="email" class="validate">
					</div>
					<div class="input-field col s12">
						<input placeholder="Subject" id="icon_prefix" type="text" class="validate">
					</div>
					<div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
						<label for="textarea1">Message</label>
					</div>


					<div class="center">
						<a class="btn margin-top" style="width:100%;">submit</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var tinggi = $(window).height();
	$('body').css('background-color','#fedc00');
	$('.row').css('min-height',$(tinggi));});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.parallax').parallax();
	$(".button-collapse").sideNav();
});
</script>
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script>
lala = new WOW(
{
	boxClass:     'wow', 
	animateClass: 'animated',
	offset:       100,
	callback:     function(box) {
	}
}
);
lala.init();
</script>
