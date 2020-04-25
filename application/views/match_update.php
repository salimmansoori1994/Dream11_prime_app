<!doctype html>
<html><head>
<?php 
  $this->session->set_userdata("menu","Match");
$this->load->view("common/common_files"); ?>
     <link href="<?php  echo base_url('asset/css/font-style.css'); ?>" rel="stylesheet">
    <link href="<?php  echo base_url('asset/css/register.css'); ?>" rel="stylesheet">
	  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="<?php  echo base_url('asset/js/datatables/jquery.dataTables.js'); ?>"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#datatables-example').dataTable();
  			    });
	</script>
   <link href="<?php  echo base_url('asset/css/table.css'); ?>" rel="stylesheet">
  </head>
  <body style="background:url('<?php  echo base_url('asset/images/9od0mSo.jpg'); ?>') no-repeat ;    background-size:100% 100%;color:white;">
  
  	<!-- NAVIGATION MENU -->
<div>
<?php $this->load->view("common/common_nevigetion"); ?>
</div>

 

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row" style="padding:0px 10px;">

<div class="col-sm-3 col-md-3 col-xs-12 ">
  		<div id="register-wraper">
        		  <form id="register-form" action="<?php echo base_url("Match/add_new_update")?>" class="form" method="post" style="width: 100%;" >

        		        <legend>Add UPDATE <br><small style="color:green;"> <?php echo $match_name; ?></small></legend>
        		    <span id="msg"> </span>
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name"> Name</label>
    		        	   <input type="text" class="form-control" id="update_name" name="update_name" required>
        		        	<!-- last name -->
    		        		<label for="surname">Update Details</label>
    		        		 <textarea type="text" class="form-control" id="update_details"  name="update_details" style="resize:none;" required></textarea>


        		        </div>
        		    
        		        <div class="footer">
        		              <input type="hidden"  name="match_id" value="<?php echo $match_id ; ?>"  readonly required>
							  <button type="submit" class="btn btn-success btn-xs">Register</button>
        		        </div>
        		    </form>
        		</div>

</div>
<div class="col-sm-9 col-md-9 col-xs-12 ">

    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0" style="color:black;" >
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Match Name</th>
                          <th>Update Name</th>
                          <th>Update Details</th>
                          <th>Update Date</th>                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
               <?php 
			   if($match_update){
				   $i=1;
				   foreach($match_update as $row){
				$epoch = $row->update_date;
				$dt = new DateTime("@$epoch"); 

					   echo "<tr>";
					   echo "<td>".$i ." </td>"; 
					   echo "<td>".$match_name ." </td>"; 
					   echo "<td>".$row->update_name ." </td>"; 
					   echo "<td>".$row->update_details ." </td>"; 
					   echo "<td>". $dt->format('Y-m-d H:i:s')	." </td>"; 			echo "<td><a href='".base_url('Match/delete_match_update/'.base64_encode($row->id).'/'.base64_encode($match_id).'')."'> <button title='Delete Team' class='btn btn-success btn-xs'>&#10008;</button></a></td>"; 

					   echo "</tr>";
				$i++;   }
			   }
			   ?>
                      </tbody>
                        </table>

</div>

	</div> <!-- /container -->


          
</body></html>