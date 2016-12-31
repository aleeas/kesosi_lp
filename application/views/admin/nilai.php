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

          <table class="table-krs" border="1" width="100%" cellspacing="0" style="border:1px solid #ddd">
              <tbody bgcolor="#fff"><tr><td colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;">
              <strong>INPUT NILAI MAHASISWA</strong></td>
              </tr>
              <tr>
              <td align="center">No</td>
              <td align="center">NIM</td>
              <td align="center">Nama Mahasiswa</td>
              <td align="center">Jurusan</td> 
              <td align="center">Kelas Program</td>
              <td align="center">Masukan Nilai</td>
              </tr>
              
                <tr>
                  <td align="center">1</td>
                  <td align="center">0960011001</td>  
                  <td align="center">Bondan Galau</td>
                  <td align="center">S1 Keperawatan</td>                  
                  <td align="center">Reguler</td>  
                  <td align="center">
                    <a class="link" href="<?php echo site_url("admin/input_nilai_mhs");?>">Masukkan Nilai</a>
                  </td>                   
                </tr>
                <tr>
                  <td align="center">2</td>
                  <td align="center">2016200123</td>  
                  <td align="center">Ahmad Suhaili</td>
                  <td align="center">Profesi Ners</td>
                  <td align="center">Karyawan</td>  
                  <td align="center">
                    <a class="link" href="<?php echo site_url("admin/input_nilai_mhs");?>">Masukkan Nilai</a>
                  </td>  
                  </tr>
                <tr>
                  <td align="center">3</td>
                  <td align="center">20162001234</td> 
                  <td align="center">Andi</td>
                  <td align="center">D3 Analis Kesehatan</td>
                  <td align="center">Reguler</td>  
                  <td align="center">
                    <a class="link" href="<?php echo site_url("admin/input_nilai_mhs");?>">Masukkan Nilai</a>
                  </td>  
                </tr>
                  
              </tbody>
          </table>

      </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>