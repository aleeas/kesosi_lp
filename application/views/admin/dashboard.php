<?php $this->load->view('part/head') ?>
<!--wrapper -->
<div id="outer_wrapper">
  <div id="wrapper">
    <!--header -->
    <?php $this->load->view('header/header-menu') ?>
    <!--Menu Area -->
    <?php $this->load->view('header/menu-nav-admin') ?>
    <!--content area -->
    <div id="content">
		<div class="wrapper-board">
            <div class="header-detail"><strong>Selamat Datang, Admin !</strong><hr/></div>
            
            <div class="sub-header-detail">Hai <span class="black-text">Administrator</span>. Saat ini anda sudah terhubung di <em>'Sistem Online STIKES KESOSI' .</em> Anda dapat menggunakan fitur sistem melalui menu di panel bagian atas.  </div>
            
        </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>