<div class="container">
<div class="row margin-bottom" style="margin-top:15px">
	<!-- LIST THUMB-->
	<div class="col s12 l12 hide-on-med-and-down">
    <h4>LAPANGAN FUTSAL</h4>
    <h5>TANGGAL : 22/09/2015</h5>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<div class="border margin-bottom">
			<div class="padding" style="background-color:#f1f1f1">
				     <table>
        <thead>
          <tr>
              <th data-field="id">No</th>
              <th data-field="name">Jam Awal</th>
              <th data-field="price">Jam Akhir</th>
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
            <td style="color:#F00">BELUM TERSEDIA</td>
            <td>
            	<div class="center" style="visibility:hidden">
						<a class="btn margin-top" style="width:100%;">PESAN</a>
				</div>
            </td>
          </tr>
          <?php } ?>
        <?php $j= 11; $k= 12; for($i=4; $i<=15; $i++){?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $j++; ?>.00</td>
            <td><?php echo $k++; ?>.00</td>
            <td>TERSEDIA</td>
            <td>
            	<div class="center">
						<a class="btn margin-top" style="width:100%;">PESAN</a>
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