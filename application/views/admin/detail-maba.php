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
          <fieldset class="three hover">
            <div class="left hover">
                <div class="center hover">
                    <img style="box-shadow: #333 0px 0px 8px; -moz-box-shadow: #333 0px 0px 8px; -webkit-box-shadow: #333 0px 0px 8px; border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px;" width="200" height="" src="<?php echo base_url("assets/images/default.png") ?>" class=""></div>
            </div>
            <div class="center">
                <div>
                    <label>Nama Lengkap</label>
                    <div>Ahmad Suhaili</div>
                </div>
                <div>
                    <label>Nama Panggilan</label>
                    <div>Ali</div>
                </div> 
                <div>                    
                    <label>No Identitas</label>
                     <div>3174000283823</div>
                </div>
                <div>
                    <label>Alamat Mahasiswa</label>
                    <div>jl kalibata pulo</div>
                </div>
                <div>
                    <label>Kelurahan</label>
                    <div>Kalibata</div>
                </div> 
                <div>
                    <label>Kota</label>
                    <div>Jakarta Selatan</div>
                </div>
                <div>
                    <label>Kecamatan</label>
                    <div>Pancoran</div>
                </div>
                <div>
                    <label>Kode Pos</label>
                    <div>12740</div>
                </div>
                <div>
                    <label>Jenis Kelamin</label>
                    <div>Pria</div>
                </div>
                <div>                    
                    <label>Agama</label>
                     <div>Islam</div>
                </div>
                

            </div>
            <div class="right">
                
                <div>
                    <label>Tempat &amp; Tanggal Lahir</label>
                    <div>Jakarta, 05 November 1990</div>
                </div>
                
                <div>                    
                    <label>Telp Rumah</label>
                     <div>021 7988827</div>
                </div>

                <div>                    
                    <label>Nama Ibu Kandung</label>
                     <div>Munawaroh</div>
                </div>

                <div>                    
                    <label>No Hp</label>
                     <div>087786407337</div>
                </div>
                <div>
                    <label>Email Address</label>
                    <div>ahmadsuhaili244@gmail.com</div>
                </div>               
                
                <div>                    
                    <label>Status Pekerjaan</label>
                     <div>Bekerja</div>
                </div>
                <div>                    
                    <label>Nama Intansi</label>
                     <div>PT Asia Quattro Net</div>
                </div>

                <div>                    
                    <label>Status Pernikahan</label>
                     <div>Menikah</div>
                </div>

                <div>                    
                    <label>Program Studi</label>
                     <div>Profesi Ners</div>
                </div>

                <div>                    
                    <label>Ukuran Jaket</label>
                     <div>XL</div>
                </div>

            </div>
        </fieldset>
      </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>