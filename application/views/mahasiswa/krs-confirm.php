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
          <form id="mykrsinfo" method="post" action="krs_confirm">
            <table border="1" width="100%" class="table-krs" cellpadding="5">
                <tbody bgcolor="#fff">
                <tr>
                  <td colspan="12" align="center" style="text-transform:uppercase;background:#003c60;color:#fff;">
                    <strong>Mata Kuliah yang Diambil</strong>
                    </td>
                </tr>
                <tr>
                  <th align="center">No</th>
                  <th align="center">Kode MK</th>
                  <th align="center">Nama Mata Kuliah</th>
                  <th align="center">SKS</th>
                  <th align="center">Jadwal</th>
                  
                </tr>
                <tr>
                  <td align="center">1</td>
                  <td align="center">1111305</td>
                  <td id="nama_1111305" align="center">Struktur Data dan Praktikum </td>
                  <td align="center" id="id1111305">4</td>
                  <td align="center" id="jdwl_2">Selasa / 10.00-12.00 / ruang 21</td>            
                  
                </tr>
                <tr>
                  <td align="center">2</td>
                  <td align="center">1221305</td>
                  <td id="nama_1111305" align="center">Matematika I </td>
                  <td align="center" id="id1111305">4</td>
                  <td align="center" id="jdwl_2">Rabu / 10.00-12.00 / ruang 11</td>            
                  
                </tr>

                <tr>
                  <td align="center">3</td>
                  <td align="center">1331305</td>
                  <td id="nama_1111305" align="center">Bahasa Inggris </td>
                  <td align="center" id="id1111305">4</td>
                  <td align="center" id="jdwl_2">Jumat / 13.00-15.00 / ruang 3</td>            
                  
                </tr>
                
                </tbody>
            </table>
            <br class="clear">
            <div class="f-left sub-header-detail">
              <ul>
                <li>Jumlah Mata Kuliah yang diambil: 3 Mata Kuliah</li>
                <li>Total SKS yang diambil: 12 SKS  </li>
              </ul> 
            </div>
          
            <div class="f-right">
              <a href="" class="buttons">Ubah KRS</a>
              <a href="<?php echo site_url("mahasiswa/print_krs"); ?>" class="buttons">Cetak KRS</a>
            </div>
          </form>
            <br class="clear">
            
            
        </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>