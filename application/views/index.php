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
      <!--banner section -->
      <div id="banner_wrapp">
        <div id="banner"><img src="<?php echo base_url("assets/images/album/P_20161210_090107.jpg"); ?>" alt="" /></div>
      </div>
      <!--News and spotlight container -->
      <div class="outer_row">
        <div class="col-left">
          <div class="spotlight_slider">
            <h2>Home Beranda</h2>
            <div class="box_spotlight"> <img src="<?php echo base_url("assets/images/89Gambar 2.jpg"); ?>" alt="" />
              <div class="spot_desc">
                <h3><a href="#">PELATIHAN KEPERAWATAN LUKA (2)</a></h3>
                <p>Sambungan dari PELATIHAN KEPERAWATAN ... <a href="#">Read More</a></p>
              </div>
            </div>
            <div class="box_spotlight"> <img src="<?php echo base_url("assets/images/79Gambar 1.jpg"); ?>" alt="" />
              <div class="spot_desc">
                <h3><a href="#">PELATIHAN KEPERAWATAN LUKA (1)</a></h3>
                <p>STIKes Kesetiakawanan Sosial Indonesia bekerjasama dengan WOCARE mengadakan Â PELATIHAN KEPERAWATAN LUKA Â CWCCA (Certified Wound Care Clinicion ... <a href="#">Read More</a></p>
              </div>
            </div>
            <div class="box_spotlight"> <img src="<?php echo base_url("assets/images/729.jpg"); ?>" alt="" />
              <div class="spot_desc">
                <h3><a href="#">PERATURAN &amp; TATA TERTIB MAHASISWA STIKes KESOSI</a></h3>
                <p>PERATURAN &amp; TATA TERTIB MAHASISWA STIKes KESOSI   1)      PAKAIAN   Mahasiswa kelas regular harus memakai seragam   Mahasiswa kelas karyawan yaitu : 1. ... <a href="#">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="news_slider">
            <h2>News and Events</h2>
            <div class="news_box"> <span class="date"> <img src="<?php echo base_url("assets/images/img-ico-calendar.gif"); ?>" alt="" /> <strong>14 Juli</strong> </span>
              <div class="news_desc">
                <h3><a href="#">Kerjasama Lahan Praktek</a></h3>
                <p>'STIKes KESOSI akan bekerjasama dengan berbagai Rumah Sakit Guna mendukung proses ...' <a href="#">Read More</a></p>
              </div>
            </div>
            <div class="news_box"> <span class="date"> <img src="<?php echo base_url("assets/images/img-ico-calendar.gif"); ?>" alt="" /> <strong>14 Agt</strong> </span>
              <div class="news_desc">
                <h3><a href="#">Kerjasama Lahan Praktek</a></h3>
                <p>'STIKes KESOSI akan bekerjasama dengan berbagai Rumah Sakit Guna mendukung proses ...' <a href="#">Read More</a></p>
              </div>
            </div>
            <div class="news_box"> <span class="date"> <img src="<?php echo base_url("assets/images/img-ico-calendar.gif"); ?>" alt="" /> <strong>14 Des</strong> </span>
              <div class="news_desc">
                <h3><a href="#">Seminar Nasional Juli 2015</a></h3>
                <p>'STIKes KESOSI, akan mengadakan seminar nasional yang berikutnya pada bulan Juli 2015 yang bekerjasama dengan BPJS dan Rumah ...' <a href="#">Read More</a></p>
              </div>
            </div>
            
            
          </div>
        </div>
       <div class="col-right">
          <div class="spaceAds"><img src="<?php echo base_url("assets/images/472259dapatkan-voucherS1.jpg"); ?>"></div>
       </div>
      </div>
      <br class="clear" />
      <div class="study_programs">
      <div class="title">
        <h2>Pilihan Redaksi</h2>
      </div>
      <div class="redaksi_choice">
      	<div>
      		<a href="#"><img src="<?php echo base_url("assets/images/89Gambar 2.jpg"); ?>" alt="" /></a>
      		<div class="programdetail">
              <div class="headingprogram">
                <a href="" class="titleArt"><h2>PELATIHAN KEPERAWATAN LUKA (2)</h2></a>
              </div>
              
            </div>      		
      	</div>
      	<div>
      		<a href="#"><img src="<?php echo base_url("assets/images/79Gambar 1.jpg"); ?>" alt="" /></a>
      		<div class="programdetail">
              <div class="headingprogram">
                <a href="" class="titleArt"><h2>PELATIHAN KEPERAWATAN LUKA (1)</h2></a>
              </div>
              
            </div>
      	</div>
      	<div>
      		<a href="#"><img src="<?php echo base_url("assets/images/729.jpg"); ?>" alt="" /></a>
      		<div class="programdetail">
              <div class="headingprogram">
                <a href="" class="titleArt"><h2>PERATURAN &amp; TATA TERTIB MAHASISWA STIKes KESOSI</h2></a>
              </div>
              
            </div>
      	</div>
      	<div>
      		<a href="#"><img src="<?php echo base_url("assets/images/73IMAGE0001.jpg"); ?>" alt="" /></a>
      		<div class="programdetail">
              <div class="headingprogram">
                <a href="" class="titleArt"><h2>PENERIMAAN MAHASISWA BARU 2015/2016</h2></a>
              </div>
              
            </div>
      	</div>
		<div>
      		<a href="#"><img src="<?php echo base_url("assets/images/24fk1.jpg"); ?>" alt="" /></a>
      		<div class="programdetail">
              <div class="headingprogram">
                <a href="" class="titleArt"><h2>Mengapa Memilih STIKes KESOSI</h2></a>
              </div>
              
            </div>
      	</div>
      	
      </div>
      
      </div>
     
      
    </div>
  </div>
  <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>


<!--  <div class="col-right">
          <div class="newsletter">
            <h2>University NewsLetter</h2>
            <input type="text" value="Enter Email Address" onfocus="if(this.value == 'Enter Email Address') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Enter Email Address'; }"  />
            <a href="#">Submit</a> </div>
          <div class="coursesearch">
            <h2>Course Finder</h2>
            <ul>
              <li>
                <label>Enter a Keyword</label>
                <input type="text" value="Search you any keyword"  class="txt1"  onfocus="if(this.value == 'Search you any keyword') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search you any keyword'; }" />
              </li>
              <li> <span class="left">
                <label>Degree Type</label>
                <select>
                  <option>Undergraduate</option>
                </select>
                </span> <span class="right">
                <label>Session</label>
                <select>
                  <option>2011-12</option>
                </select>
                </span> </li>
              <li> <span class="left">
                <label>Campus</label>
                <select>
                  <option>Undergraduate</option>
                </select>
                </span> <span class="right">
                <label>Resident Type</label>
                <span class="groupradio">
                <label>
                <input type="radio" name="city" checked="checked" />
                Uk </label>
                <label>
                <input type="radio" name="city"  />
                Wales</label>
                </span> </span> </li>
              <li><a href="#" class="btn_search"><span>Search</span></a></li>
            </ul>
          </div>
        </div> -->