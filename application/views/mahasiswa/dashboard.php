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
            <div class="header-detail"><strong>Selamat Datang, Mahasiswa !</strong><hr/></div>
            
            <div class="sub-header-detail">Hai <span class="black-text">Mahasiswa</span>. Saat ini anda sudah terhubung di <em>'Sistem Online STIKES KESOSI' .</em> Anda dapat menggunakan fitur sistem melalui menu di panel bagian atas.  </div>
            <ul class="icon-mhs">
            	<li><img src="<?php echo base_url("assets/images/icon/icon-krs.png"); ?>"><br><br><a href="" class="btn btn-mhs">KRS ONLINE</a></li>
            	<li><img src="<?php echo base_url("assets/images/icon/icon-khs.png"); ?>"><br><br><a href="" class="btn btn-mhs">LIHAT KHS</a></li>
            </ul>
        </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>