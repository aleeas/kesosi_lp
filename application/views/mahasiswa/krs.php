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
          <form id="mykrs" method="post" action="krs_info">
            <table border="0" width="100%" cellpadding="7" cellspacing="0" class="table-krs">
            <tbody>
            <tr>
              <td>NIM</td>
              <td><input name="nim" value="20162001234" type="text" readonly="readonly" size="35" class="input-read-only"></td>
              <td>Semester, Tahun Ajaran</td>
              <td><input name="smstr_thn_ajaran" value="Genap 2011 - 2012" type="text" readonly="readonly" size="35" class="input-read-only"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><input name="nama_mhs" value="Andi" type="text" readonly="readonly" size="35" class="input-read-only"></td>
              <td>IP Semester Lalu/Beban Study Maks</td>
              <td><input name="ip" value="" type="text" size="10" readonly="readonly" class="input-read-only">
              / <input name="beban_study" value="15" type="text" size="10" readonly="readonly" class="input-read-only">
              </td>
                  
            </tr>
            <tr>
              <td>Jurusan</td>
              <td><input name="jurusan" value="D3 Analis Kesehatan" type="text" readonly="readonly" size="35" class="input-read-only"></td>

              <td>Jumlah Maks SKS </td>
              <td><input name="maxsks" value="15" type="text" readonly="readonly" size="35" class="input-read-only">   
              </td>   
              
            </tr>
              <tr>
              <td>Dosen Wali</td>
              <td>  
              <input name="dosen_wali" value="Prof. Luntang Lantung Anak Lut" type="text" readonly="readonly" size="35" class="input-read-only">
              </td>

              <td>Semester yang akan ditempuh (*)</td>
              <td><input name="semester" value="1" type="text" readonly="readonly" size="35" class="input-read-only">
              </td>
            </tr>
            </tbody>
            </table>


            <table border="1" width="100%" class="table-krs" cellpadding="5">
            <tbody bgcolor="#fff">
            <tr>
              <td colspan="12" align="center" style="text-transform:uppercase;background:#003c60;color:#fff;">
                <strong>Mata Kuliah yang Ditawarkan Pada Semester Ini :</strong>
                </td>
            </tr>
            <tr>
              <th align="center">Kode MK</th>
              <th align="center">Nama Mata Kuliah</th>
              <th align="center">SKS</th>
              <th align="center" colspan="2">Dosen</th>
              <th align="center">Kelas</th>
              <th align="center">Jadwal</th>
              <th align="center">Action</th>
            </tr>
            <tr>
              <td align="center">1111305</td>
              <td id="nama_1111305" align="center">Struktur Data dan Praktikum </td>
              <td align="center" id="id1111305">4</td><td id="cell_1111305_B" align="center">D001</td>
              <td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">B</td>
              <td align="center" id="jdwl_2">Selasa / 10.00-12.00 / ruang 21</td>            
              <td align="center">
                <input type="checkbox" name="chk_1111305_2" value="ON" onchange="javascript:PilihMataKuliah(this);">
              </td>
            </tr>
            <tr>
              <td align="center">1111306</td>
              <td id="nama_1111306" align="center">DAA</td>
              <td align="center" id="id1111306">3</td><td id="cell_1111306_A" align="center">D001</td>
              <td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">A</td>
              <td align="center" id="jdwl_3">Senin / 08.00-10.00 / Ruang 3.3</td>
              <td align="center">
                <input type="checkbox" name="chk_1111306_3" value="ON" onchange="javascript:PilihMataKuliah(this);">
              </td>
            </tr>
            <tr>
              <td align="center" rowspan="2">1111201</td>
              <td rowspan="2" id="nama_1111201" align="center">Matematika 1 </td>
              <td align="center" rowspan="2" id="id1111201">3</td><td id="cell_1111201_A" align="center">D001</td><td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">A</td>
              <td align="center" id="jdwl_4">Senin / 08.00-11.00 / Ruang 2.3</td>
              <td align="center">
                <input type="checkbox" name="chk_1111201_4" value="ON" onchange="javascript:PilihMataKuliah(this);">
              </td>
              </tr>
              <tr><td id="cell_1111201_B" align="center">D001</td><td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">B</td>
              <td align="center" id="jdwl_5">Senin / 08.00-11.00 / ruang 1.3</td>
              <td align="center">
                <input type="checkbox" name="chk_1111201_5" value="ON" onchange="javascript:PilihMataKuliah(this);">
              </td>
            </tr>
            <tr>
              <td align="center">1111305</td>
              <td id="nama_1111305" align="center">Struktur Data dan Praktikum </td>
              <td align="center" id="id1111305">4</td><td id="cell_1111305_B" align="center">D001</td>
              <td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">B</td>
              <td align="center" id="jdwl_6">Jumat / 10.00 -12.00 / ruang 1.3</td>
              <td align="center">
                <input type="checkbox" name="chk_1111305_6" value="ON" onchange="javascript:PilihMataKuliah(this);">
              </td>
            </tr> 
            </tbody>
        </table>
          <br><br>
          <p class="left">
          <strong>Total Beban Study yang Akan Ditempuh </strong>
          <input id="idJumlahSKS" name="jumlahsks" value="0" type="text" size="2" style="background-color: #fff;" readonly="readonly">  
          <strong>SKS</strong>  
          </p>
          <br>
          <p class="text-center"><input name="tombolsimpan" class="btn-kirim-login" type="submit" value="Simpan Data Kartu Rencana Studi"></p>
          </form>
        </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>