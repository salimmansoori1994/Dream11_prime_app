<!doctype html>
<html><head>
<?php 
  $this->session->set_userdata("menu","Register");
$this->load->view("common/common_files"); ?>
   <link href="<?php  echo base_url('asset/css/font-style.css'); ?>" rel="stylesheet">
    <link href="<?php  echo base_url('asset/css/register.css'); ?>" rel="stylesheet">
	</head>


  <body style="background:url('<?php  echo base_url('asset/images/9od0mSo.jpg'); ?>') no-repeat ;    background-size: 100%;">

  	<!-- NAVIGATION MENU -->

<div>
<?php $this->load->view("common/common_nevigetion"); ?>
</div>

    <div class="container">
        <div class="row">

    

        	<div class="col-sm-12 col-lg-12">
        		<div id="register-wraper">
        		    <form id="register-form" class="form" method="post" >

        		        <legend>User Register</legend>
        		    <span id="msg"> </span>
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name">First name</label>
    		        	   <input type="text" class="form-control" id="name" name="name" required>
        		        	<!-- last name -->
    		        		<label for="surname">Number</label>
    		        		 <input type="number" class="form-control" id="number"  name="number" required>
        		        	<!-- username -->
        		        	<label>Username</label>
        		        	 <input type="text" class="form-control" id="username"  name="username" required>
							 
							   	<label>Password</label>
        		        	 <input type="password" class="form-control" id="password"  name="password" required>
        		        	<!-- email -->
        		        	<label>Select Package</label>
        		          <select  class="form-control" name="pakage_day" id="pakage_day"  required>
						<option value="">Select</option>
						<option value="30"> 1 Month</option>
						<option value="90"> 3 Month</option>
						<option value="365"> 1 year </option>
						</select>
        		        	<!-- password -->
        		        	<label>Start Date</label>
        		        	   <input type="date" class="form-control" id="select_pakage_date"  name="select_pakage_date" required>
							   
							   <label>Sort Details</label>
        		        	 <input type="text" class="form-control" id="details"   name="details" required>

        		        </div>
        		    
        		        <div class="footer">
        		            <button type="submit" class="btn btn-success btn-xs">Register</button>
        		        </div>
        		    </form>
        		</div>
        	</div>

        </div>
    </div>
<script>
var base_path='<?php echo base_url(); ?>';
$("#register-form").submit(function(event){
							$.ajax({
							type:"POST",
							url:base_path+"Register/add_new",
							data: $("#register-form").serialize() ,
							success:function (data) {
						if($.trim(data)=="no"){
							$("#msg").html("<span style='color:red;'>Not Add User</span>");
						}else if($.trim(data)=="yes"){
								$("#msg").html("<span style='color:green;'> Add User Succsesfully </span>");
								$("#number,#details,#select_pakage_date,#pakage_day,#password,#username,#name").val("");
								
						}else if($.trim(data)=="exists"){
								$("#msg").html("<span style='color:red;'> User Already Exists</span>");
						}
							}
							});	
							event.preventDefault();	
});
</script>
	<div id="footerwrap">
	<?php $this->load->view("common/common_footer"); ?>
	</div><!-- /footerwrap -->
</body></html>