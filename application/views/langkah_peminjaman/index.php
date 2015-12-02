<!-- SLIDER -->
<div class="col s12">
  <div class="parallax-container">
 <div class="parallax"><img src="<?php echo base_url();?>assets/assets/lap_futsal.JPG"></div>
  </div>
</div>
<div class="container">
<h3>LANGKAH - LANGKAH PEMINJAMAN FASOR</h3>
<?php for($i=1;$i<=10;$i++){?>
	<div class="row">
        <div class="col s12 m12">
          <div class="card darken-1" style="background-color:#00796b ">
            <div class="card-content white-text" style="padding:30px; ">
              <span class="card-title" style="font-size:24px"><?php echo $i;?>. Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
      </div>
            

<!--Import jQuery before materialize.js--> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script> 
<script type="text/javascript">
	  $(document).ready(function(){
		$('.parallax').parallax();
		$(".button-collapse").sideNav();
	  });
	  </script>
</body>
</html>
