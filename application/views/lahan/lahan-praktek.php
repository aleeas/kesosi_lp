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
            <h2><a href="<?php echo site_url("website/praktek");?>">Lahan Praktek</a></h2>
          </div>
          <div class="blog_date">
            <p>Administrator | Minggu, 05 April 2015 - 23:09:08 WIB | dibaca: 1656 pembaca</p>
            <div class="social_panel"> <a href="#"><img src="<?php echo base_url("assets/images/bg-tweet.gif"); ?>" alt="" /></a> <a href="#"><img src="<?php echo base_url("assets/images/bg-facebook.gif"); ?>" alt="" /></a> </div>
          </div>
          <div class="blog_detail"> 
            <div>
              <p>STIKes KESOSI telah mengadakan kesepakatan kerjasama dengan beberapa rumah sakit ternama di Jakarta sebagai tempat praktek kerja lapangan bagi para mahasiwanya. Rumah sakit tersebut antara lain :</p>
              <ul class="praktek-kerja">
                  <li>
                    <div><img src="<?php echo base_url("assets/images/rsud-koja.jpg") ?>"></div>
                    <div style="font-size:14px;"><strong>RSUD KOJA </strong><br> 
                    Jl. Deli No.1 Tanjung Priok 
                    Jakarta Utara</div>
                  </li>
                  <li>
                    <div><img src="<?php echo base_url("assets/images/Slide-Welcome-BBLK-Jakarta.jpg") ?>"></div>
                    <div style="font-size:14px;"><strong>Balai Laboratorium Kesehatan DKI Jakarta</strong><br>
                    Jl. Percetakan Negara, 
                    Jakarta Pusat <br>

                    SK Kerjasama  
                    Ks.01.02.02.55 Tgl.16/02/04</div>
                  </li>
                  <li>
                    <div><img src="<?php echo base_url("assets/images/Rumah Sakit Penyakit Infeksi Prof. Dr. Sulianti Saroso.jpg") ?>"></div>
                    <div style="font-size:14px;"><strong>RS. Infeksi DR. Sulianti Saroso</strong><br>
                    Jl. Baru Sunter Permai Raya
                    Jakarta Utara</div>
                  </li>
                  <li>
                    <div><img src="<?php echo base_url("assets/images/rsjiwa.jpg") ?>"></div>
                    <div style="font-size:14px;"><strong>RS. Jiwa DR. Soeharto Heerdjan</strong><br>
                    Jl. Prof. DR. Latumenten No.1 Jakarta 11450</div>
                  </li>
                  <li>
                    <div><img src="<?php echo base_url("assets/images/rsud-budi-asih.jpg") ?>"></div>
                    <div style="font-size:14px;"><strong>RSUD Budhi Asih</strong><br>
                    Jl. Dewi Sartika No. 200 Jakarta Timur</div>
                  </li>
                  
              </ul>
            </div>
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
