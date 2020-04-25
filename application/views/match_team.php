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
        		  <form id="register-form" action="<?php echo base_url("Match/add_new_team")?>" class="form" method="post" style="width: 100%;" enctype="multipart/form-data">

        		        <legend>Add Team <br><small style="color:green;"> <?php echo $match_name; ?></small></legend>
        		    <span id="msg"> </span>
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name"> Name</label>
    		        	   <input type="text" class="form-control" id="team_name" name="team_name" required>
						   
        		      			<label for="name"> Add Image</label>
    		        	   <input type="file" class="form-control" id="team_pic" name="team_pic" accept=".jpg"  required>
							<br>
    		        		<label for="surname">update details</label>
    		        		 <textarea type="text" class="form-control" id="team_details"  name="team_details" style="resize:none;" required></textarea>
					

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
                          <th>Team Name</th>
                          <th>Team Details</th>
                          <th>Team Pic</th>
                          <th>Team Date Create</th>                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
               <?php 
			   if($match_team){
				   $i=1;
				   foreach($match_team as $row){
				$epoch = $row->team_create_time	;
				$dt = new DateTime("@$epoch"); 

					   echo "<tr>";
					   echo "<td>".$i ." </td>"; 
					   echo "<td>".$match_name ." </td>"; 
					   echo "<td>".$row->team_name ." </td>"; 
					   echo "<td>".$row->team_details ." </td>"; 
					   echo "<td> <img src='".base_url('asset/Gallery/'.$row->team_pic) ."' style='height:50px;' /> </td>"; 
					   echo "<td>". $dt->format('Y-m-d H:i:s')	." </td>"; 	echo "<td><a href='".base_url('Match/delete_match_team/'.base64_encode($row->id).'/'.base64_encode($match_id).'')."'> <button title='Delete Team' class='btn btn-success btn-xs'>&#10008;</button></a></td>";

					   echo "</tr>";
				$i++;   }
			   }
			   ?>
                      </tbody>
                        </table>

</div>

	</div> <!-- /container -->


          
</body></html>