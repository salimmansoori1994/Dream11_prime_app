<!doctype html>
<html><head>
<?php $this->load->view("common/common_files"); ?>

</head>

<style>

    .pbfooter {
        position:relative;
    }

</style>

  <body style="background:url('<?php  echo base_url('asset/images/9od0mSo.jpg'); ?>') no-repeat ;    background-size: 100%;">

    <div class="container">
        <div class="row">
   		<div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
   			<div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
   				<img src="<?php  echo base_url('asset/images/sasa.png'); ?>" alt="" class="" style='height: 176px;   width: 73%;'>
   				<br>
   				<br>
					        <form class="form-signin" method="post" action="<?php  echo base_url("Login/login"); ?>">
						  <?php if($this->input->get()){
			echo "<span style='color:#0a0a0a;font-size: 16px;font-weight: 900;'>".base64_decode($this->input->get('msg')) ."</span>";  
				  } ?>
						<fieldset>
							<p>
								<input id="username" name="username" class="form-control" type="text" placeholder="Username"required>
								<input id="password" name="password"  class="form-control" type="password" placeholder="Password" required>
							</p>
								<input class="submit btn-success btn " type="submit" value="Login">
						</fieldset>
					</form>
   			</div>

   		</div>


        </div>
    </div>

	  	<!-- Jquery Validate Script - Validation Fields -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

 <?php $this->load->view("common/common_footer_file"); ?>
 
</body></html>