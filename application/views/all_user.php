<!doctype html>
<html><head>
<?php 
  $this->session->set_userdata("menu","All_user");
$this->load->view("common/common_files"); ?>
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
  
<style>
.table-bordered {
    border: 4px solid #0e0d0d;
}
</style>

  	<!-- NAVIGATION MENU -->
<div>
<?php $this->load->view("common/common_nevigetion"); ?>
</div>

     <div class="container" style="min-height:565px;">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>All Users</strong> &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url("Register"); ?>"><button class="btn btn-primary btn-xs "> Create  New Users </button></a></h4>

    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0" style="color:black;" >
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Number</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Start date</th>
                          <th>Days</th>
                          <th>End Date</th>
                          <th>Remaining Days </th>
                          <th>Details</th>
                        </tr>
                      </thead>
                      <tbody>
               <?php 
			   if($user){
				   $i=1;
				   foreach($user as $row){
					   if(strtotime(date("Y-m-d")) < strtotime($row->end_pakage_date)){
$date1=date_create($row->end_pakage_date);
			$date2=date_create(date('Y-m-d'));
			$diff=date_diff($date1,$date2);
			$remaning = $diff->format("%R%a days");

					   echo "<tr>";
					   echo "<td>".$i ." </td>"; 
					   echo "<td>".$row->name ." </td>"; 
					   echo "<td>".$row->number ." </td>"; 
					   echo "<td>".$row->username ." </td>"; 
					   echo "<td>". $this->encrypt->decode($row->password) ." </td>"; 
					   echo "<td>".$row->select_pakage_date ." </td>"; 
					   echo "<td>".$row->pakage_day ." </td>"; 
					   echo "<td>".$row->end_pakage_date ." </td>"; 
					   echo "<td>". $remaning." </td>"; 
					   echo "<td>".$row->details ." </td>"; 

					   echo "</tr>";
				$i++;   }
				   }
			   }
			   ?>
                      </tbody>
                        </table>
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	<br>	

	<div id="footerwrap">
	<?php $this->load->view("common/common_footer"); ?>
	</div><!-- /footerwrap -->

</body></html>