<!doctype html>
<html><head>
<?php 
  $this->session->set_userdata("menu","Dashboard");
$this->load->view("common/common_files"); ?>
  
  </head>
    <body>
  
  	<!-- NAVIGATION MENU -->
<div>
<?php $this->load->view("common/common_nevigetion"); ?>
</div>

    <div class="container" style="    height: 585px;">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-6 col-lg-6">
      		<div class="dash-unit">
	      		<dtitle>User Profile</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img src="<?php  echo base_url('asset/images/17241-200.png'); ?>" alt="Marcel Newman" class="img-circle" style="    height: 120px;">
				</div><!-- /thumbnail -->
				<h1>Admin</h1>
				<h3>Dream 11 Team</h3>
				<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>
					</div>
				</div>
        </div>
		
		      	<div class="col-sm-6 col-lg-6">
	  <!-- TOTAL SUBSCRIBERS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Total Users</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold><?php if($user){echo count($user);}else{ echo "0";				} ?></bold></p>
      			<p> Users Are Available </p>
	      		</div>
      		</div>
      		
	  <!-- FOLLOWERS BLOCK -->     
      			<div class="half-unit">
	      		<dtitle>Total Match </dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold><?php if($match){echo count($match);}else{ echo "0";				} ?></bold></p>
      			<p> Match Are Available </p>
	      		</div>
      		</div>
      	</div>

	</div> <!-- /container -->
	</div> <!-- /container -->
	<div id="footerwrap">
	<?php $this->load->view("common/common_footer"); ?>
	</div><!-- /footerwrap -->
          
</body></html>