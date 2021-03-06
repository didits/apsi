  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>FOTO BUKTI PEMBAYARAN</h4>
      <p>Silahkan masukan foto bukti transfer pembayaran dengan format .jpg atau .png</p>
      <form >
        <div class="input-field col s12">
                <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
        </div>
    </form>
    <span>Setelah Anda menekan tombol submit maka Admin segera mengonfirmasi melalui sms</span>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">SUBMIT</a>
    </div>
  </div>
  
<!-- SLIDER -->
<div class="col s12">
  <div class="parallax-container">
 <div class="parallax"><img src="<?php echo base_url();?>assets/assets/lap_futsal.JPG"></div>
  </div>
</div>

<div class="container">
	<div class="row">
        <div class="col s12 m12">
        <h3>KONFIRMASI PEMBAYARAN</h3>
         <p>Setelah Anda melakuakan transfer silakan masukkan token pembayaran!</p>
        </div>
        <div class="col s12 l12 hide-on-med-and-down">
		<div class="border margin-bottom">
			<div class="padding">
				<h5 align="center">- INPUT TOKEN -</h5>
				<form >
					<div class="input-field col s12">
						<input placeholder="Token" id="icon_prefix" type="text" class="validate">
					</div>
                    <div class="center">
						<a href="#modal1" class="modal-trigger btn margin-top" style="width:100%;">submit</a>
					</div>
				</form>
			</div>
		</div>
	</div>
      </div>
      </div>
            

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('.parallax').parallax();
	$(".button-collapse").sideNav();
	$('.modal-trigger').leanModal();
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
