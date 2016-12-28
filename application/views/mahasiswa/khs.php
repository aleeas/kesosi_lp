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
			<ul class="list-nm">
                <li><span class="title-text">NIM</span><span class="title-value">122320399230</span></li>
                <li><span class="title-text">NAMA</span><span class="title-value">AHMAD SUHAILI</span></li>
                <li><span class="title-text">PRODI</span><span class="title-value">S1 KEPERAWATAN</span></li>
			</ul>
            <table border="1" width="100%" class="table-khs" cellpadding="5" style="border:1px solid #ddd">
            <tbody bgcolor="#fff">
                <tr style="background-color:#003c60; color:#FFFFFF;">
                <td align="center">No</td>
                <td align="center">Kode Mata Kuliah</td>
                <td align="center">Mata Kuliah</td>
                <td align="center">Semester</td>
                <td align="center">SKS</td>
                <td align="center">Nilai</td>   
                <td align="center">Bobot</td>
                <td align="center">SKS x Bobot</td>
                </tr>
                <tr>
                <td colspan="8" bgcolor="#fff">&nbsp;<strong> Semester : 1</strong></td>
                </tr>
            <tr>
                <td align="center">1</td>
                <td >MKI 121</td>
                <td>&nbsp;Agama </td>
                <td align="center">1</td>
                <td align="center">2&nbsp;</td>
                <td align="center">A</td>
                <td align="center">4</td>
                <td align="center">8</td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td >MKI 122</td>
                <td>&nbsp;Pendidikan Pancasila </td>
                <td align="center">1</td>
                <td align="center">2</td>
                <td align="center">A</td>
                <td align="center">4</td>
                <td align="center">8</td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td >MKI 1232</td>
                <td>&nbsp;Kewarganegaraan </td>
                <td align="center">1</td>
                <td align="center">2</td>
                <td align="center">B</td>
                <td align="center">3</td>
                <td align="center">6</td>
            </tr>

            <tr>
                <td align="center">4</td>
                <td >MKI 123</td>
                <td>&nbsp;Bahasa Indonesia </td>
                <td align="center">1</td>
                <td align="center">2</td>
                <td align="center">B</td>
                <td align="center">3</td>
                <td align="center">6</td>
            </tr>
			
			<tr>
                <td align="center">5</td>
                <td >MKI 134</td>
                <td>&nbsp;Ilmu Keperawatan Dasar I </td>
                <td align="center">1</td>
                <td align="center">3</td>
                <td align="center">B+</td>
                <td align="center">3</td>
                <td align="center">9</td>
            </tr>

            <tr>
                <td align="center">6</td>
                <td >MKI 145</td>
                <td>&nbsp;Ilmu Dasar Keperawatan I </td>
                <td align="center">1</td>
                <td align="center">4</td>
                <td align="center">C+</td>
                <td align="center">3</td>
                <td align="center">9</td>
            </tr>
            
            <tr>
                <td align="center">7</td>
                <td >MKI 136</td>
                <td>&nbsp;Bahasa Inggris Keperawatan I </td>
                <td align="center">1</td>
                <td align="center">3</td>
                <td align="center">B</td>
                <td align="center">3</td>
                <td align="center">9</td>
            </tr>
            

            <tr>
                <td align="center">8</td>
                <td >MKI 127</td>
                <td>&nbsp;Ilmu Sosial Dasar</td>
                <td align="center">1</td>
                <td align="center">2</td>
                <td align="center">B-</td>
                <td align="center">3</td>
                <td align="center">6</td>
            </tr>
			
			 <tr>
                <td align="center">9</td>
                <td >MKL 121</td>
                <td>&nbsp;Kesetiakawanan Sosial Indonesia</td>
                <td align="center">1</td>
                <td align="center">2</td>
                <td align="center">B</td>
                <td align="center">3</td>
                <td align="center">6</td>
            </tr>
            


            <tr>
                <td colspan="4">&nbsp;<strong> Jumlah SKS : 22</strong></td>
                <td colspan="4">&nbsp;<strong> IP Semester : 3.7</strong></td>
             </tr>       
            </tbody>
            </table>
            <br>
            <div class="text-right"><a href="" class="button">Cetak Nilai</a></div>
        </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>