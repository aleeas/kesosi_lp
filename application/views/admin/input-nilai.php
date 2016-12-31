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
              <strong>MATA KULIAH YANG AKAN DIINPUTKAN NILAINYA :</strong></td>
              </tr>
              <tr>
                <th align="center">Kode MK</th>
                <th align="center">Nama Mata Kuliah</th>
                <th align="center">SKS</th>
                <th align="center">Dosen</th>
                <th align="center">Kelas</th>
                <th align="center">Jadwal</th>
                <th align="center">Action</th>
              </tr>
              
              <tr>
                <td align="center">1111305</td>
                <td id="nama_1111305" align="center">Agama I </td>
                <td align="center" id="id1111305">4</td>
                <td align="center">Prof. Luntang Lantung Anak Lut</td>
                <td align="center">Reguler</td>
                <td align="center" id="jdwl_2">Selasa / 10.00-12.00 / ruang 21</td>  
                <td align="center">
                  <a href="" rel="example_group" class="link" data-toggle="modal" data-target="#myModal">
                  Input</a> 
                </td>                   
              </tr>

              <tr>
                <td align="center">11113052</td>
                <td id="nama_1111305" align="center">Pendidikan Pancasila </td>
                <td align="center" id="id1111305">4</td>
                <td align="center">Prof. Luntang Lantung Anak Lut</td>
                <td align="center">Karyawan</td>
                <td align="center" id="jdwl_2">Selasa / 10.00-12.00 / ruang 21</td>  
                <td align="center">
                  <a href="" rel="example_group" class="link" data-toggle="modal" data-target="#myModal">
                  Input</a> 
                </td>                   
              </tr>

              <tr>
                <td align="center">11113056</td>
                <td id="nama_1111305" align="center">Agama I </td>
                <td align="center" id="id1111305">4</td>
                <td align="center">Prof. Luntang Lantung Anak Lut</td>
                <td align="center">Reguler</td>
                <td align="center" id="jdwl_2">Selasa / 10.00-12.00 / ruang 21</td>  
                <td align="center">
                  <a href="" rel="example_group" class="link" data-toggle="modal" data-target="#myModal">
                  Input</a> 
                </td>                   
              </tr>
                  
              </tbody>
          </table>

          <br>

          <table class="table-krs" border="1" width="100%" cellspacing="0" style="border:1px solid #ddd">
            <tbody>
              <tr><td colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;">
                <strong>Mata Kuliah yang Tersimpan :</strong></td>
              </tr>
              <tr style="background-color:#003c60; color:#FFFFFF;">
                <td align="center">No</td>
                <td align="center">Kode Mata Kuliah</td>
                <td align="center">Mata Kuliah</td>
                <td align="center">Semester</td>
                <td align="center">SKS</td>
                <td align="center">Nilai</td> 
                <td align="center">Bobot</td>
                <td align="center">SKS x Bobot</td>
                <td colspan="2" align="center">Aksi</td>
              </tr>
              <tr>
                <td colspan="10" align="center">Belum ada nilai yang di input</td>
              </tr>    
              <tr>
                <td colspan="6">&nbsp;<strong>Jumlah SKS : 0</strong></td>
                <td colspan="6">&nbsp;<strong>IP Semester : 0</strong></td>
              </tr>   
            </tbody>
          </table>



          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content" style="width:90%;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Input Nilai</h4>
                </div>
                <div class="modal-body">
                  <form method="post" action="">
                      <table class="table-krs">

                      <tbody><tr>
                      <td width="180">NIM</td>
                      <td width="50">:</td>
                      <td><input type="text" name="nim" size="50" class="input-read-only" value="0960011001" readonly="true"></td>
                      </tr>

                      <tr>
                      <td width="180">Nama Mahasiswa</td>
                      <td width="50">:</td>
                      <td><input type="text" size="50" class="input-read-only" value="Bondan Galau"></td>
                      </tr>

                      <tr>
                      <td width="180">Kode Mata Kuliah</td>
                      <td width="50">:</td>
                      <td><input type="text" name="kd_mk" size="50" class="input-read-only" value="1111306" readonly="true"></td>
                      </tr>

                      <tr>
                      <td width="180">Mata Kuliah</td>
                      <td width="50">:</td>
                      <td><input type="text" size="50" class="input-read-only" value="DAA"></td>
                      </tr>

                      <tr>
                      <td width="180">Kode Dosen</td>
                      <td width="50">:</td>
                      <td><input type="text" name="kd_dosen" size="50" class="input-read-only" value="D001"></td>
                      </tr>

                      <tr>
                      <td width="180">Nama Dosen</td>
                      <td width="50">:</td>
                      <td><input type="text" size="50" class="input-read-only" value="Prof. Luntang Lantung Anak Lut"></td>
                      </tr>

                      <tr>
                      <td width="180">Kode Tahun Ajaran</td>
                      <td width="50">:</td>
                      <td><input type="text" name="kd_tahun" size="50" class="input-read-only" value="gnp-11/12"></td>
                      </tr>

                      <tr>
                      <td width="180">Semester Ditempuh</td>
                      <td width="50">:</td>
                      <td><input type="text" name="semester_ditempuh" size="50" class="input-read-only" value="1"></td>
                      </tr>

                      <tr>
                      <td width="180">Nilai</td>
                      <td width="50">:</td>
                      <td><input type="text" name="grade" size="50" class="input-read-only"></td>
                      </tr>

                      <tr>
                      <td width="180"></td>
                      <td width="50"></td>
                      <td>
                      <input type="submit" value="Simpan Nilai" class="btn btn-success" style="margin-top: 0">
                      <input type="reset" value="Batal" class="btn btn-default">
                      <input type="hidden" name="stts" value="tambah"></td>
                      </tr>

                      </tbody></table>


                  </form>
                </div>
                <!-- <div class="modal-body">
                  <form id="addform" method="post">
                    
                    <div class="form-grp">
                      <label>NIM</label>
                      <input type="text" name="nim" value="11212321" readonly>
                    </div>

                    <div class="form-grp">
                      <label>Nama Mahasiswa</label>
                      <input type="text" name="name_mahasiswa" value="Abdul Ghani" readonly>
                    </div>
                    
                    <div class="form-grp">
                      <label>Kode MK</label>
                      <input type="text" name="mk_code" value="MKI12029" readonly>
                    </div>

                    <div class="form-grp">
                      <label>Matakuliah</label>
                      <input type="text" name="mk_kul" value="Agama I" readonly>
                    </div>

                    <div class="form-grp">
                      <label>Kode Dosen</label>
                      <input type="text" name="dosen_code" value="D001" readonly>
                    </div>

                    <div class="form-grp">
                      <label>Nama Dosen</label>
                      <input type="text" name="dosen_name" value="Apriyani S.Bio M.Pd" readonly>
                    </div>

                    <div class="form-grp">
                      <label>Kode Tahun Ajaran</label>
                      <input type="text" name="tahun_ajaran" value="Genap/16-17" readonly>
                    </div>

                    <div class="form-grp">
                      <label>Semester Ditempuh</label>
                      <input type="text" name="semester" value="1" readonly>
                    </div>

                    <div class="form-grp">
                      <label>Nilai</label>
                      <input type="text" name="input_nilai">
                    </div>
                     
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success">Save</button>
                </div> -->
              </div>
              
            </div>
          </div>

      </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>