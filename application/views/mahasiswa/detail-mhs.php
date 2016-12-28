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
          <fieldset class="three hover">
            <div class="left hover">
                <h1 class="">Foto Mahasiswa</h1>
                <div class="center hover">
                    <img style="box-shadow: #333 0px 0px 8px; -moz-box-shadow: #333 0px 0px 8px; -webkit-box-shadow: #333 0px 0px 8px; border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px;" width="200" height="" src="<?php echo base_url("assets/images/default.png") ?>" class=""></div>
                <div class="command-group">
                    <a href="http://localhost/sinilugos/index.php/user/ganti_password" class="button">Ganti Password</a>    
                </div>
            </div>
            <div class="center">
                <div class="">
                    <label class="">NIM</label>
                    <div>20171400100 </div>
                </div>
                <div class="">
                    <label class="">Nama Mahasiswa</label>
                    <div>Ahmad Suhaili</div>
                </div>                
                <div>
                    <label>Program Studi</label>
                    <div>Profesi Ners</div>
                </div>
                <div>                    
                    <label>Tahun Akademik</label>
                     <div>2017</div>
                </div>
                <div>
                    <label>Nama Kaprodi Mahasiswa</label>
                    <div>Ibu Apriyani</div>
                </div>
                <div>
                    <label>Alamat Mahasiswa</label>
                    <div>jl kalibata pulo</div>
                </div>
                <div>                    
                    <label>Status</label>
                     <div>Menikah</div>
                </div>
            </div>
            <div class="right">
                <div>
                    <label>Email Address</label>
                    <div>ahmadsuhaili244@gmail.com</div>
                </div>
                <div>                    
                    <label>Agama</label>
                     <div>Islam</div>
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
                    <label>No Identitas</label>
                     <div>3174000283823</div>
                </div>
                <div>                    
                    <label>Status Pekerjaan</label>
                     <div>Bekerja</div>
                </div>
                <div>                    
                    <label>Nama Intansi</label>
                     <div>PT Asia Quattro Net</div>
                </div>

            </div>
        </fieldset>
      </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>