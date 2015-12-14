<div class="container">

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Pemesanan Lapangan</h4>
      <p>Lapangan : Futsal | Tanggal : 22/09/2015</p>
      <p>Isikan data identitas Anda untuk memesan lapangan!</p>
      <form >
                <div class="input-field col s12">
						<input placeholder="Nama" id="icon_prefix" type="text" class="validate">
				</div>
                <div class="input-field col s12">
						<input placeholder="Nomor Telepon" id="icon_prefix" type="text" class="validate">
				</div>
                <div class="input-field col s12">
						<input placeholder="Email" id="icon_prefix" type="text" class="validate">
				</div>
                <div class="input-field col s12">
						<input placeholder="Nomor Identitas" id="icon_prefix" type="text" class="validate">
				</div>
				</form>
    </div>
    <div class="modal-footer">
      <a href="#modal2" class="modal-trigger modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
    </div>
  </div>
  
  
    <!-- Modal Structure -->
  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Token Anda :</h4>
      <br /><br /><br /><br /><br />
      <h3 align="center" style="color:#03F">098ij21019</h3>
    </div>
    <div class="modal-footer">
    <span>Transfer ke Bank Mandiri : 900-00-3210652 a.n. Rara Amilia Shofia TAW</span>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
    </div>
  </div>
  
<div class="row margin-bottom" style="margin-top:15px">
	<!-- LIST THUMB-->
	<div class="col s12 l12 hide-on-med-and-down">
    <h4>LAPANGAN FUTSAL</h4>
    <h5>TANGGAL : 22/09/2015</h5>
		<div class="border margin-bottom">
			<div class="padding" style="background-color:#f1f1f1">
				     <table>
        <thead>
          <tr>
              <th data-field="id">No</th>
              <th data-field="name">Jam Awal</th>
              <th data-field="price">Jam Akhir</th>
              <th data-field="price">Harga</th>
              <th data-field="price">Status</th>
              <th data-field="price">Pesan</th>
          </tr>
        </thead>

        <tbody>
        <?php $j= 8; $k= 9; for($i=1; $i<=3; $i++){?>
          <tr>
            <td style="color:#F00"><?php echo $i; ?></td>
            <td style="color:#F00"><?php echo $j++; ?>.00</td>
            <td style="color:#F00"><?php echo $k++; ?>.00</td>
            <td style="color:#F00">Rp.300.000</td>
            <td style="color:#F00">BELUM TERSEDIA</td>
            <td>
            	<div class="center" style="visibility:hidden">
						<a href="#modal1" class="btn margin-top modal-trigger" style="width:100%;">PESAN</a>
				</div>
            </td>
          </tr>
          <?php } ?>
        <?php $j= 11; $k= 12; for($i=4; $i<=15; $i++){?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $j++; ?>.00</td>
            <td><?php echo $k++; ?>.00</td>
            <td>Rp.300.000</td>
            <td>TERSEDIA</td>
            <td>
            	<div class="center">
						<a href="#modal1" class="btn margin-top modal-trigger" style="width:100%;">PESAN</a>
				</div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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