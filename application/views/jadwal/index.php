<!-- SLIDER -->
<div class="col s12">
  <div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url();?>assets/assets/lap_futsal.JPG"></div>
  </div>
</div>
<div class="container">
<div class="row margin-bottom" style="margin-top:15px">
	<!-- LIST THUMB-->
	<div class="col s12 l12 hide-on-med-and-down">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<div class="border margin-bottom">
			<div class="padding">
				<h5 align="center">- JADWAL FASOR -</h5>
				<form >
                <div class="input-field col s12">
						<input placeholder="Kategori" id="icon_prefix" type="text" class="validate">
					</div>
					<div class="input-field col s12">
						<input placeholder="Tanggal" id="icon_prefix" type="text" class="validate">
					</div>
					<div class="center">
						<a class="btn margin-top" style="width:100%;">submit</a>
					</div>
				</form>
			</div>
		</div>
        </div>
</div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.js"></script>
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