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
            <h2><a href="<?php echo site_url("website/fasilitas");?>">Fasilitas</a></h2>
          </div>
          <div class="blog_date">
            <p>Administrator | Minggu, 05 April 2015 - 22:54:36 WIB | dibaca: 1644 pembaca</p>
            <div class="social_panel"> <a href="#"><img src="<?php echo base_url("assets/images/bg-tweet.gif"); ?>" alt="" /></a> <a href="#"><img src="<?php echo base_url("assets/images/bg-facebook.gif"); ?>" alt="" /></a> </div>
          </div>
          <div class="blog_detail"> 
           
            <p>Untuk menunjang proses belajar mahasiswa, STIKes KESOSI menyediakan fasilitas-fasilitas yang mendukung aktifitas mahasiswa sbb :</p>
            
            <ol style="margin-left:30px;">
              <li style="margin-bottom:10px;">Ruang kuliah yang luas dan nyaman</li>
              <li style="margin-bottom:10px;">Perpustakaan dan ruang diskusi.</li>
              <li style="margin-bottom:10px;">OHP dan Proyektor untuk aktifitas mengajar.</li>
              <li style="margin-bottom:10px;">Praktek kerja lapangan dibeberapa rumah sakit ternama di Jakarta.</li>
              <li style="margin-bottom:10px;">Tenaga dosen  yang berpengalaman dan ahli dibidangnya.</li>
              <li style="margin-bottom:10px;">Pembayaran biaya uang masuk, uang kuliah, dll dapat diangsur selama 3 bulan dan bagi mahasiswa kelas karyawan yang bekerja di rumah sakit dan puskesmas uang masuk, uang kuliah, dllnya dapat dibayar perbulan paling lama tanggal 5 dalam setiap bulannya . </li>
              <li style="margin-bottom:10px;">Kegiatan ekstrakurikuler Kerohanian Islam, Non-Islam, Futsal, 
              Bahasa Inggris </li>
              <li style="margin-bottom:10px;">Membantu menyalurkan Kerja bagi Alumni yang berprestasi</li>
            </ol>
            
            <p>STIKes KESOSI telah menandatangani kesepakatan kerjasama dengan beberapa rumah sakit ternama, Puskesmas, Balai Laboratorium Kesehatan DKI Jakarta di Jakarta dan Panti Sosial Sasana Tresna Werdha Budhi Dharma Bekasi sebagai tempat praktek kerja mahasiswa antara lain</p>

            <ul style="margin-left:30px;list-style:circle">
              <li style="margin-bottom:10px;">RS. TNI-AL Mintohardjo</li>
              <li style="margin-bottom:10px;">Balai Laboratorium Kesehatan DKI Jakarta</li>
              <li style="margin-bottom:10px;">RS. Infeksi Dr. Sulianti Saroso</li>
              <li style="margin-bottom:10px;">RS. Jiwa. Dr. Soeharto Heerdjan</li>
              <li style="margin-bottom:10px;">RSUD. Koja</li>
              <li style="margin-bottom:10px;">RS.Persahabatan</li>
              <li style="margin-bottom:10px;">RSUD. Tarakan</li>
              <li style="margin-bottom:10px;">RSP. Angkatan Udara dr. Esnawan Antariksa</li>
              <li style="margin-bottom:10px;">PSTW. Budhi Dharma Bekasi</li>
              <li style="margin-bottom:10px;">Suku Dinas Kesehatan Jakarta Pusat</li>
            </ul>
            
            <p>Bagi lulusan yang berprestasi akan disalurkan melalui beberapa perusahaan yang telah melakukan kerjasama diantaranya :</p>
            <ul style="margin-left:30px;list-style:circle">
              <li style="margin-bottom:10px;">PT. Duta Ampel Mulia Jakarta</li>
              <li style="margin-bottom:10px;">PT. Amri Margatama</li>
            </ul>

            <p>Dalam rangka melaksanakan Tri Dharma Perguruan Tinggi, salah satu tujuannya adalah pengabdian kepada masyarakat, maka Yayasan Kesetiakawanan Sosial Indonesia (STIKes KESOSI) mendirikan : </p>
            <ul style="margin-left:30px;list-style:circle">
              <li style="margin-bottom:10px;">Ikatan Relawan Kesehatan & Sosial Kesosi (IRKES Kesosi).</li>
              <li style="margin-bottom:10px;">Persatuan Anti Narkoba Kesetiakawanan Sosial Indonesia (PERAN Kesosi).</li>
            </ul>



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
