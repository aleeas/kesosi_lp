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
            <h2><a href="<?php echo site_url("website/sejarah");?>">Sejarah</a></h2>
          </div>
          <div class="blog_date">
            <p>Administrator | Minggu, 05 April 2015 - 22:32:09 WIB | dibaca: 1008 pembaca</p>
            <div class="social_panel"> <a href="#"><img src="<?php echo base_url("assets/images/bg-tweet.gif"); ?>" alt="" /></a> <a href="#"><img src="<?php echo base_url("assets/images/bg-facebook.gif"); ?>" alt="" /></a> </div>
          </div>
          <div class="blog_detail"> <img src="<?php echo base_url("assets/images/79Gambar 1.jpg"); ?>" alt="" class="align_left" />
            <p>Ditengah derasnya kemajuan teknologi dalam dunia kesehatan menuntut adanya tenaga kerja yang profesional dan kompeten dibidangnya. </p>
            <p>Menghadapi kondisi tersebut diatas Yayasan Kesetiakawanan Sosial Indonesia memulai kiprahnya dengan mendirikan Sekolah Tinggi Ilmu Kesehatan Kesetiakawanan Sosial Indonesia (STIKes KESOSI)
            selaras dengan nama yayasan yang mengelolanya. Berdiri sejak 11 Agustus
            2004 sesuai keputusan Menteri Pendidikan No.123/D/O/2004 STIKes KESOSI 
            merupakan lembaga pendidikan yang memfokuskan diri pada bidang ilmu 
            kesehatan dengan membuka dua bidang studi Sarjana (S-1) Keperawatan dan Diploma III (D-3) Analis Kesehatan, serta Jalur Profesi (Ners). 
            </p>
            <p>Selain itu dalam rangka melaksanakan Tri Dharma Perguruan Tinggi, salah satu tujuannya adalah pengabdian kepada masyarakat, maka Yayasan Kesetiakawanan Sosial Indonesia (STIKes KESOSI) juga mendirikan :</p>

            <ul style="list-style-type:circle;">
              <li style="margin-left:50px;margin-bottom:10px;font-weight:bold">Ikatan Relawan Kesehatan &amp; Sosial Kesosi (IRKES Kesosi)</li>  
              <li style="margin-left:50px;margin-bottom:10px;font-weight:bold">Persatuan Anti Narkoba Kesosi (PERAN Kesosi)</li>
            </ul>
            <div class="clear"></div>
            <p>STIKes KESOSI dalam kegiatannya didukung oleh tenaga pengajar Dokter dan 
            Perawat yang berpengalaman dan ahli dibidangnya serta ditunjang sarana 
            praktek di rumah sakit ternama di Jakarta. Dilandasi komitmen sebagai 
            lembaga pendidikan yang mampu menjadi sarana membangun manusia Indonesia
            yang berdaya guna STIKes KESOSI mampu mencetak lulusan-lulusan yang 
            terampil dan mampu menjadi tenaga kerja yang ahli dan profesional dan 
            dibidangnya.
            </p>
            
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
<!-- <div id="comments">
          <div class="comment_heading">
            <h2>64 Responses to <a href="#">Admin</a></h2>
            <a href="#" class="btn_replay"><span>Leave a Reply </span></a> </div>
          <div class="comment_main">
            <div class="comment_box"> <span class="imguser"> <img src="<?php echo base_url("assets/images/img-user1.jpg"); ?>" alt="" /> </span>
              <div class="comment_description">
                <div class="userinfo">
                  <h3>Martin Deperto Says</h3>
                  <span>April 6, 2011</span> </div>
                <p>In hac habitasse platea dictumst. Curabitur condimentum neque a metus vulputate sagittis. Pellentesque placerat pretium augue at ultrices. Morbi auctor luctus porta. Integer tortor ante, blandit ullamcorper venenatis nec, aliquet et massa. Cras porta, magna id sagittis consectetur, leo magna lobortis sem, at dignissim mi arcu id diam. Praesent aliquam viverra bibendum. Ut at nisl vel lacus placerat auctor. Cras ultrices tortor diam</p>
              </div>
            </div>
            <div class="comment_box2"> <span class="imguser"> <img src="<?php echo base_url("assets/images/img-user2.jpg"); ?>" alt="" /> </span>
              <div class="comment_description">
                <div class="userinfo">
                  <h3>Martin Deperto Says</h3>
                  <span>April 6, 2011</span> </div>
                <p>In hac habitasse platea dictumst. Curabitur condimentum neque a metus vulputate sagittis. Pellentesque placerat pretium augue at ultrices. Morbi auctor luctus porta. Integer tortor ante, blandit ullamcorper venenatis nec, aliquet et massa. Cras porta, magna id sagittis consectetur, leo magna lobortis sem, at dignissim mi arcu id diam. Praesent aliquam viverra bibendum. Ut at nisl vel lacus placerat auctor. Cras ultrices tortor diam</p>
              </div>
            </div>
            <div class="comment_box2"> <span class="imguser"> <img src="<?php echo base_url("assets/images/img-user3.jpg"); ?>" alt="" /> </span>
              <div class="comment_description">
                <div class="userinfo">
                  <h3>Martin Deperto Says</h3>
                  <span>April 6, 2011</span> </div>
                <p>In hac habitasse platea dictumst. Curabitur condimentum neque a metus vulputate sagittis. Pellentesque placerat pretium augue at ultrices. Morbi auctor luctus porta. Integer tortor ante, blandit ullamcorper venenatis nec, aliquet et massa. Cras porta, magna id sagittis consectetur, leo magna lobortis sem, at dignissim mi arcu id diam. Praesent aliquam viverra bibendum. Ut at nisl vel lacus placerat auctor. Cras ultrices tortor diam</p>
              </div>
            </div>
            <div class="comment_box3"> <span class="imguser"> <img src="<?php echo base_url("assets/images/img-user4.jpg"); ?>" alt="" /> </span>
              <div class="comment_description">
                <div class="userinfo">
                  <h3>Martin Deperto Says</h3>
                  <span>April 6, 2011</span> </div>
                <p>In hac habitasse platea dictumst. Curabitur condimentum neque a metus vulputate sagittis. Pellentesque placerat pretium augue at ultrices.</p>
              </div>
            </div>
            <br class="clear" />
          </div>
          <div class="comment_main">
            <div class="comment_box"> <span class="imguser"> <img src="<?php echo base_url("assets/images/img-user5.jpg"); ?>" alt="" /> </span>
              <div class="comment_description">
                <div class="userinfo">
                  <h3>Martin Deperto Says</h3>
                  <span>April 6, 2011</span> </div>
                <p>In hac habitasse platea dictumst. Curabitur condimentum neque a metus vulputate sagittis. Pellentesque placerat pretium augue at ultrices. Morbi auctor luctus porta. Integer tortor ante, blandit ullamcorper venenatis nec, aliquet et massa. Cras porta, magna id sagittis consectetur, leo magna lobortis sem, at dignissim mi arcu id diam. Praesent aliquam viverra bibendum. Ut at nisl vel lacus placerat auctor. Cras ultrices tortor diam In hac habitasse platea dictumst. Curabitur condimentum neque a metus vulputate sagittis. Pellentesque placerat pretium augue at ultrices. Morbi auctor luctus porta. Integer tortor ante, blandit ullamcorper venenatis nec, aliquet et massa. Cras porta, magna id sagittis consectetur, leo magna lobortis sem, at dignissim mi arcu id diam. Praesent aliquam viverra bibendum. Ut at nisl vel lacus placerat auctor. Cras ultrices tortor diam</p>
              </div>
            </div>
            <br class="clear" />
          </div>
        </div>
        <div class="pager">
          <ul>
            <li>Page</li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
          </ul>
          <div class="pager_arrow"> <a href="#" class="pagerleft">Prev Page</a> <a href="#" class="pagerright">Next Page</a> </div>
        </div>
        <br class="clear" /> -->