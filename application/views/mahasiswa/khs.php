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
            <table border="1" width="100%" class="table-khs" cellpadding="5" >
            <tbody>
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
                <td colspan="8" bgcolor="#fff"><strong> Semester : 1</strong></td>
                </tr><tr>
                <td>1</td>
                <td>1111305</td>
                <td>&nbsp;Struktur Data dan Praktikum </td>
                <td align="center">1</td>
                <td align="center">4&nbsp;</td>
                <td align="center">A</td>
                <td align="center">4</td>
                <td align="center">16</td></tr><tr>
                <td>2</td>
                <td>1111201</td>
                <td>&nbsp;Matematika 1 </td>
                <td align="center">1</td>
                <td align="center">3</td>
                <td align="center">A</td>
                <td align="center">4</td>
                <td align="center">12</td>
            </tr><tr>
                <td>3</td>
                <td>1111306</td>
                <td>&nbsp;DAA</td>
                <td align="center">1</td>
                <td align="center">3</td>
                <td align="center">B</td>
                <td align="center">3</td>
                <td align="center">9</td>
            </tr>
                <tr>
                <td colspan="4"><strong> Jumlah SKS : 10</strong></td>
                <td colspan="4"><strong> IP Semester : 3.7</strong></td>
                </tr>       
            </tbody>
            </table>
        </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>