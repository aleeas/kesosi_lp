<?php $this->load->view('part/head') ?>
<!--wrapper -->
<div id="outer_wrapper">
  <div id="wrapper">
    <!--header -->
    <?php $this->load->view('header/header-menu') ?>
    <!--Menu Area -->
    <?php $this->load->view('header/menu-nav-mahasiswa') ?>
    <!--content area -->
    <div id="content">
		<div class="wrapper-board">
            <div class="header-detail"><strong>Selamat Datang !</strong></div>
            <hr/>
            <p>Hai <span class="black-text">Mahasiswa</span>. Selamat datang di <em>'Sistem Online STIKES KESOSI' .</em> Anda dapat menggunakan fitur sistem melalui menu di panel bagian atas.  </p>
        </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>