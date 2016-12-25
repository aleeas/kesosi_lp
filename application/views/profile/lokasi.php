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
            <h2><a href="<?php echo site_url("website/lokasi");?>">Lokasi</a></h2>
          </div>
          <div class="blog_date">
            <p>Administrator | Senin, 06 April 2015 - 00:39:22 WIB | dibaca: 3404 pembaca</p>
            <div class="social_panel"> <a href="#"><img src="<?php echo base_url("assets/images/bg-tweet.gif"); ?>" alt="" /></a> <a href="#"><img src="<?php echo base_url("assets/images/bg-facebook.gif"); ?>" alt="" /></a> </div>
          </div>
          <div class="blog_detail"> 
            <div>
            <p>Kampus Utama - A 
            Jl. Bojong Raya No. 58 Kel. Rawa Buaya Kec. Cengkareng Jakarta Barat 11740 <br>
            Call: (021) 58354799 | FAX: (021) 58354781 </p>
            <p>Kampus - B (Kelas Karyawan) 
            Jl. Kramat II no. 13 Kwitang Jakarta Pusat <br> 
            Hp: Bpk. Teguh 0857 19 777 432</p>
            </div>
            <div><img src="<?php echo base_url("assets/images/12Denah Kampus.jpg"); ?>" width="100%"></div>
            
            <span><img src="<?php echo base_url("assets/images/denah.png"); ?>"></span>

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
