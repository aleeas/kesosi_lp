<div id="nav">
      <ul>
        <li><a href="<?php echo site_url("auth/financepanel");?>" class="<?php if($this->uri->uri_string() == 'auth/financepanel') { echo 'active'; } ?>">Home</a></li>

        <li><a href="<?php echo site_url("finance/keuangan");?>" class="<?php if($this->uri->uri_string() == 'finance/keuangan') { echo 'active'; } ?>">Keuangan</a></li>

        <li style="float:right" class="acc-menu">
        	<a href="javascript:;">Account</a>
			<ul>
				<li><a href="#">My Account</a></li>
				<li><a href="<?php echo site_url("auth");?>">Logout</a></li>
			</ul>
        </li>      
      </ul>
</div>



