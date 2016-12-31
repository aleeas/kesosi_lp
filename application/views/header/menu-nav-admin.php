<div id="nav">
      <ul>
        <li><a href="<?php echo site_url("auth/adminpanel");?>" class="<?php if($this->uri->uri_string() == 'auth/adminpanel') { echo 'active'; } ?>">Home</a></li>

        <li><a href="<?php echo site_url("admin/jadwal");?>" class="<?php if($this->uri->uri_string() == 'admin/jadwal') { echo 'active'; } ?>">Input Jadwal</a></li>

        <li><a href="<?php echo site_url("admin/nilai");?>" class="<?php if($this->uri->uri_string() == 'admin/nilai') { echo 'active'; } ?>">Input Nilai</a></li>

        <li><a href="<?php echo site_url("admin/dosen");?>" class="<?php if($this->uri->uri_string() == 'admin/dosen') { echo 'active'; } ?>">Input Dosen</a></li>

        <li><a href="<?php echo site_url("admin/matkul");?>" class="<?php if($this->uri->uri_string() == 'admin/matkul') { echo 'active'; } ?>">Input Mata Kuliah</a></li>

        <li><a href="<?php echo site_url("admin/mahasiswa");?>" class="<?php if($this->uri->uri_string() == 'admin/mahasiswa') { echo 'active'; } ?>">Mahasiswa</a></li>

        <li><a href="<?php echo site_url("admin/maba");?>" class="<?php if($this->uri->uri_string() == 'admin/maba') { echo 'active'; } ?>">List PMB ONLINE</a></li> 

        <li style="float:right" class="acc-menu">
        	<a href="javascript:;">Account</a>
			<ul>
				<li><a href="#">My Account</a></li>
				<li><a href="<?php echo site_url("auth");?>">Logout</a></li>
			</ul>
        </li>      
      </ul>
</div>



