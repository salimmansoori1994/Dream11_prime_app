    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php  //echo base_url('asset/images/sasa.png'); ?>" alt=""> DREAM  11 </a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="<?php if($this->session->userdata('menu')=="Dashboard") {echo "active";}?>"><a href="<?php echo base_url("Dashboard"); ?>"><i class="icon-home icon-white"></i> Dashboard</a></li>                            
              <li class="<?php if($this->session->userdata('menu')=="All_user") {echo "active";}?>"><a href="<?php echo base_url("All_user"); ?>"><i class="icon-th icon-white"></i> Users</a></li>
              <li class="<?php if($this->session->userdata('menu')=="Register") {echo "active";}?>"><a href="<?php echo base_url("Register"); ?>"><i class="icon-th icon-white"></i> Create New Users</a></li>
              <li class="<?php if($this->session->userdata('menu')=="Match") {echo "active";}?>"><a href="<?php echo base_url("Match"); ?>"><i class="icon-th icon-white"></i> Match</a></li>
              <li><a href="<?php echo base_url("Dashboard/logout"); ?>"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>