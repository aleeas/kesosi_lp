<div id="nav">
      <ul>
        <li><a href="<?php echo site_url("auth/userpanel");?>" class="<?php if($this->uri->uri_string() == 'auth/userpanel') { echo 'active'; } ?>">Home</a></li>
        <li><a href="<?php echo site_url("mahasiswa/krs");?>" class="<?php if($this->uri->uri_string() == 'mahasiswa/krs') { echo 'active'; } ?>">Input KRS Online</a></li> 
        <li><a href="<?php echo site_url("auth");?>" ">Logout</a></li>      
      </ul>
    </div>



