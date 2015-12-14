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
    <h3>JADWAL FASOR ITS</h3>
    <p>Untuk mengetahui jadwal FASOR Anda dapat melihatnya dengan menginputkan kategori lapangan dan tanggal.</p>
		<div class="border margin-bottom">
			<div class="padding">
				<h5 align="center">- JADWAL FASOR -</h5>
				<form >
                <div class="input-field col s12">
						<input class='dropdown-button' data-activates='dropdown1' placeholder="Kategori" id="icon_prefix" type="text" class="validate">
					</div>
					<div class="input-field col s12">
						<input placeholder="Tanggal" id="icon_prefix" type="date" class="datepicker">
					</div>
					<div class="center">
						<a href="<?php echo base_url();?>jadwal/detail_jadwal" class="btn margin-top" style="width:100%;">submit</a>
					</div>
				</form>
			</div>
		</div>
        </div>
</div>
</div>
 <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!" style="padding-left:20px"> Futsal</a></li>
    <li><a href="#!" style="padding-left:20px"> Tenis</a></li>
    <li><a href="#!" style="padding-left:20px"> Volley</a></li>
  </ul>
        
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.parallax').parallax();
	$(".button-collapse").sideNav();
	$(".datepicker").pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
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