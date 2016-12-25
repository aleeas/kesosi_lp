<?php $this->load->view('part/head') ?>
<!--wrapper -->
<div id="outer_wrapper">
  <div id="wrapper">
    <!--header -->
    <?php $this->load->view('header/header-menu') ?>
    <!--Menu Area -->
    <?php $this->load->view('header/menu-nav') ?>
    <!--content area -->
    <div id="content">
      <!--News and spotlight container -->
      <!--Left Content -->
      <div id="left_content">
        
        <div class="blog_box">
          <div class="blog_heading">
            <h2><a href="<?php echo site_url("website/yayasan");?>">Pengurus Yayasan</a></h2>
          </div>
          <div class="blog_date">
            <p>Administrator | Senin, 06 April 2015 - 01:09:22 WIB | dibaca: 949 pembaca</p>
            <div class="social_panel"> <a href="#"><img src="<?php echo base_url("assets/images/bg-tweet.gif"); ?>" alt="" /></a> <a href="#"><img src="<?php echo base_url("assets/images/bg-facebook.gif"); ?>" alt="" /></a> </div>
          </div>
          <div class="blog_detail"> 
            <div><img src="<?php echo base_url("assets/images/79Gambar 1.jpg") ?>"></div>
            <div class="header-detail"><strong>Pengurus Yayasan</strong></div>
            <div class="list-view"><span class="text-title">Ketua Yayasan </span> <span class="text-value">: M.Rakhman Nasution, SE,MM </span></div>
            <div class="list-view"><span class="text-title">Sekretaris  </span> <span class="text-value">: Zaenah Alatas, S.Ag, M.Ag </span></div>
            <div class="list-view"><span class="text-title">Bendahara </span> <span class="text-value">: Aminah Alatas, SE,MM </span></div> 
            <div class="list-view"><span class="text-title">Pengawas / Pemeriksa </span><span class="text-value">: Maudin Kadir Nasution, Amak</span></div>
            <div class="list-view"><span class="text-title">Anggota </span> <span class="text-value">: a.Ismail Hasan Nasution <br> &nbsp; b.Yesi Atmaningsih, Amd.Keb</span> </div>  
             
              

          </div>
        </div>
      </div>

       <div id="right_content">
        
        <div class="category_box">
          <div class="heading_box">
            <h2>Dokumentasi</h2>
          </div>
          <div class="content_box_rss">           
              <?php $this->load->view('part/side-gallery') ?>
          </div>
        </div>
        <div class="category_box">
          <div class="heading_box">
            <h2>Agenda</h2>
          </div>
          <div class="content_box">
            <ul>
              <li><a href="#" class="active">Seminar Nasional Juli 2015</a></li>
              <li><a href="#">Kerjasama Lahan Praktek</a></li>
              
            </ul>
          </div>
        </div>
        
      </div>

    </div>
  </div>
  <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>
