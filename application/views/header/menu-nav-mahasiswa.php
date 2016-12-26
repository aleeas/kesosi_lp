<div id="nav">
      <ul>
        <li><a href="<?php echo site_url("auth/userpanel");?>" class="<?php if($this->uri->uri_string() == 'auth/userpanel') { echo 'active'; } ?>">Home</a></li>
        <li><a href="<?php echo site_url("mahasiswa/krs");?>" class="<?php if($this->uri->uri_string() == 'mahasiswa/krs') { echo 'active'; } ?>">Input KRS Online</a></li>
        <li><a href="<?php echo site_url("mahasiswa/khs");?>" class="<?php if($this->uri->uri_string() == 'mahasiswa/khs') { echo 'active'; } ?>">Lihat KHS</a></li>  
        <li style="float:right" class="acc-menu">
        	<a href="javascript:;">Account</a>
			<ul>
				<li><a href="<?php echo site_url("mahasiswa/mhs_detail");?>">My Account</a></li>
				<li><a href="<?php echo site_url("auth");?>">Logout</a></li>
			</ul>
        </li>      
      </ul>
</div>



