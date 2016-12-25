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
            <h2><a href="<?php echo site_url("website/praktek");?>">Lapangan Pekerjaan</a></h2>
          </div>
          <div class="blog_date">
            <p>Administrator | Senin, 06 April 2015 - 00:23:52 WIB | dibaca: 890 pembaca</p>
            <div class="social_panel"> <a href="#"><img src="<?php echo base_url("assets/images/bg-tweet.gif"); ?>" alt="" /></a> <a href="#"><img src="<?php echo base_url("assets/images/bg-facebook.gif"); ?>" alt="" /></a> </div>
          </div>
          <div class="blog_detail"> 
            <div>
              <p>Setelah tamat pendidikan, peserta didik dapat bekerja pada instansi pemerintah maupun swasta, 
              antara lain :</p>
              <ol style="margin-left:20px;line-height:1.5">
                <li>Departemen Kesehatan</li>
                <li>Rumah Sakit / Laboratorium Kesehatan </li>
                <li>Balai POM (Pemeriksaan Obat dan Makanan) </li>
                <li>Perusahaan Farmasi / Obat (QC)</li>
                <li>Perusahaan Kosmetik (QC) </li>
                <li>Perusahaan Jamu Tradisional (QC) </li>
                <li>Lembaga Penelitian (LITBANG)</li>
                <li>Bagian-bagian dilingkungan Fakultas Kedokteran dan FMIPA </li>
                <li>Puskesmas, Klinik Kesehatan, dll.</li>
              </ol>
              <br>
              <p>STIKes KESOSI juga telah melakukan kerjasama dengan beberapa perusahaan dalam rangka menyalurkan tenaga kerja lulusan mahasiswa STIKes KESOSI antara lain melalui : </p>
              <ol style="margin-left:20px;line-height:1.5">
                <li><strong>PT. Duta Ampel Mulia, Jakarta </strong></li>
                <li><strong>PT. Amri Margatama </strong></li>
              </ol>
              <br>

               <p>Melalui kedua perusahaan tersebut, para lulusan STIKes KESOSI yang berprestasi dapat disalurkan 
               bekerja ke :</p>

               <ul style="list-style:circle; margin-left:20px; line-height:1.5">
                 <li>Rumah Sakit SAUDI ARABIA</li>
                 <li>Rumah Sakit KUWAIT</li>
                 <li>Rumah Sakit QATAR</li>
                 <li>Rumah Sakit BRUNEI DARUSSALAM</li>
                 <li>Rumah Sakit MALAYSIA</li>
                 <li>Rumah Sakit AMERIKA SERIKAT</li>
                 <li>Rumah Sakit BELANDA</li>
                 <li>Rumah sakit Lainnya</li>
               </ul>
              <br>
              <p>Catatan</p>
               
               <ul style="list-style:lower-alpha; margin-left:20px; line-height:1.5">
                 <li>Minimal sudah bekerja di Rumah Sakit di Indonesia selama 1 tahun. </li>
                 <li>Memenuhi Standar TOEFL Bahasa Inggris, sesuai dengan persyaratan yang ditentukan oleh Negara Penerima Tenaga Kerja.</li>
                 <li>Sehat Jasmani dan Rohani. </li>
                 <li>Telah Tamat Sarjana Keperawatan dan Ners </li>
                 <li>Telah Tamat Diploma III Analis Kesehatan dan memiliki ijazah </li>
               </ul>
              <br>
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
