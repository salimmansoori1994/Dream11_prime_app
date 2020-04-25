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
        		    <form id="register-form" action="<?php echo base_url("Match/add_new")?>" class="form" method="post" style="    width: 100%;" enctype="multipart/form-data">

        		        <legend>Add Match</legend>
        		    <span id="msg"> </span>
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name"> Name</label>
    		        	   <input type="text" class="form-control" id="name" name="name" required>
        		        	<!-- last name -->
    		        		<label for="surname">Team1</label>
    		        		 <input type="text" class="form-control" id="team1"  name="team1" required>
							 
							 		<label for="surname">Icon Image Team1</label>
    		        		 <input type="file" class="form-control" id="icon_img_team1"  name="icon_img_team1" required>
        		        	<!-- username -->
        		        	<label>Team2</label>
        		        	 <input type="text" class="form-control" id="team2"  name="team2" required>
							 
							 
							 		<label for="surname">Icon Image Team2</label>
    		        		 <input type="file" class="form-control" id="icon_img_team2"  name="icon_img_team2" required>
							 
							   	<label>Match Date</label>
        		        	 <input type="date" class="form-control" id="match_date"  name="match_date" required>
        		        	<!-- email -->
							
							
							   	<label>Match Time</label>
        		        	 <input type="time" class="form-control" id="match_time"  name="match_time" required>
        		        	<!-- email -->
							
        		        	<label>Match 	Type</label>
        		          <select  class="form-control" name="match_type" id="match_type"  required>
						<option value="">Select</option>
						<option value="cricket"> cricket</option>
						<option value="football"> football</option>
						</select>

							   <label> Details</label>
        		        	 <input type="text" class="form-control" id="details"   name="details" required>

        		        </div>
        		    
        		        <div class="footer">
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
                          <th>Name</th>
                          <th>team1</th>
                          <th>team2</th>
                          <th>match_date</th>
                          <th>match_time</th>
                          <th>type</th>
                          <th>details</th>
                          <th>create_date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
               <?php 
			   if($match_all){
				   $i=1;
				   foreach($match_all as $row){
				$epoch = $row->create_date	;
				$dt = new DateTime("@$epoch"); 

					   echo "<tr>";
					   echo "<td>".$i ." </td>"; 
					   echo "<td>".$row->name ." </td>"; 
					   echo "<td>".$row->team1 ."<br> <img src='".base_url('asset/Gallery/team_icon/'.$row->icon_img_team1.'')."' style='height:50px;width:60px;' ></td>"; 
					   echo "<td>".$row->team2 ." <br><img src='".base_url('asset/Gallery/team_icon/'.$row->icon_img_team2.'')."' style='height:50px;width:60px;' > </td>"; 
					   echo "<td>".$row->match_date ." </td>"; 
					   echo "<td>".$row->match_time ." </td>"; 
					   echo "<td>".$row->type ." </td>"; 
					   echo "<td>".$row->details ." </td>"; 
					   echo "<td>".$dt->format('Y-m-d H:i:s') ." </td>"; 
					   echo "<td><a href='".base_url('Match/match_update/'.base64_encode($row->id).'')."'> <button title='Update' class='btn btn-success btn-xs'>Update</button></a><a href='".base_url('Match/match_team/'.base64_encode($row->id).'')."'> <button title='Add Team' class='btn btn-success btn-xs'>Team</button></a><a href='".base_url('Match/delete_match/'.base64_encode($row->id).'')."'> <button title='Delete Team' class='btn btn-success btn-xs'>&#10008;</button></a></td>"; 

					   echo "</tr>";
				$i++;   }
			   }
			   ?>
                      </tbody>
                        </table>

</div>

	</div> <!-- /container -->


          
</body></html>