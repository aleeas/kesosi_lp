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
            
          <table border="1" width="100%" class="table-krs" cellpadding="5"  style="border:1px solid #ddd">
            <tbody bgcolor="#fff">
            <tr>
              <td colspan="12" align="center" style="text-transform:uppercase;background:#003c60;color:#fff;">
                <strong>MATA KULIAH YANG AKAN DITEMPUH PADA SEMESTER INI :</strong>
                </td>
            </tr>
            <tr>
              <th align="center">Kode MK</th>
              <th align="center">Nama Mata Kuliah</th>
              <th align="center">SKS</th>
              <th align="center" colspan="2">Dosen</th>
              <th align="center">Kelas</th>
              <th align="center">Jadwal</th>
              <th align="center" colspan="2">
                <a href="" rel="example_group" class="link" data-toggle="modal" data-target="#myModal">
                Tambah Jadwal</a>   
              </th>
            </tr>
            <tr>
              <td align="center">1111305</td>
              <td id="nama_1111305" align="center">Struktur Data dan Praktikum </td>
              <td align="center" id="id1111305">4</td><td id="cell_1111305_B" align="center">D001</td>
              <td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">B</td>
              <td align="center" id="jdwl_2">Selasa / 10.00-12.00 / ruang 21</td>            
              <td align="center"><a href="" rel="example_group" class="link">Edit</a> </td> 
              <td align="center"><a href="" rel="example_group" class="link">Hapus</a> </td>
            </tr>
            <tr>
              <td align="center">1111306</td>
              <td id="nama_1111306" align="center">DAA</td>
              <td align="center" id="id1111306">3</td><td id="cell_1111306_A" align="center">D001</td>
              <td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">A</td>
              <td align="center" id="jdwl_3">Senin / 08.00-10.00 / Ruang 3.3</td>
              <td align="center"><a href="" rel="example_group" class="link">Edit</a> </td> 
              <td align="center"><a href="" rel="example_group" class="link">Hapus</a> </td>
            </tr>
            <tr>
              <td align="center" rowspan="2">1111201</td>
              <td rowspan="2" id="nama_1111201" align="center">Matematika 1 </td>
              <td align="center" rowspan="2" id="id1111201">3</td><td id="cell_1111201_A" align="center">D001</td><td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">A</td>
              <td align="center" id="jdwl_4">Senin / 08.00-11.00 / Ruang 2.3</td>
              <td align="center"><a href="" rel="example_group" class="link">Edit</a> </td> 
              <td align="center"><a href="" rel="example_group" class="link">Hapus</a> </td>
              </tr>
              <tr><td id="cell_1111201_B" align="center">D001</td><td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">B</td>
              <td align="center" id="jdwl_5">Senin / 08.00-11.00 / ruang 1.3</td>
              <td align="center"><a href="" rel="example_group" class="link">Edit</a> </td> 
              <td align="center"><a href="" rel="example_group" class="link">Hapus</a> </td>
            </tr>
            <tr>
              <td align="center">1111305</td>
              <td id="nama_1111305" align="center">Struktur Data dan Praktikum </td>
              <td align="center" id="id1111305">4</td><td id="cell_1111305_B" align="center">D001</td>
              <td align="center">Prof. Luntang Lantung Anak Lut</td>
              <td align="center">B</td>
              <td align="center" id="jdwl_6">Jumat / 10.00 -12.00 / ruang 1.3</td>
              <td align="center"><a href="" rel="example_group" class="link">Edit</a> </td> 
              <td align="center"><a href="" rel="example_group" class="link">Hapus</a> </td>
            </tr> 
            </tbody>
          </table>

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Jadwal</h4>
                </div>
                <div class="modal-body">
                  <form id="addform" method="post">
                    <div class="form-grp">
                        <label>Mata Kuliah</label>
                        <select>
                          <option>MKI 121 - Agama</option>
                          <option>MKI 122 - Pendidikan Pancasila</option>
                        </select>
                      </div>
                       <div class="form-grp">
                      <label>SKS</label>
                      <input type="text" name="jamstart">
                      </div>
                      <div class="form-grp">
                        <label>Nama Dosen</label>
                        <select>
                          <option>D001 - Prof. Dr. Dosen A Plus</option>
                          <option>D002 - Prof. Dr. Dosen A</option>
                        </select>
                      </div>
                      <div class="form-grp">
                        <label>Hari</label>
                        <select>
                          <option>Senin</option>
                          <option>Selasa</option>
                          <option>Rabu</option>
                          <option>Kamis</option>
                          <option>Jumat</option>
                          
                        </select>
                      </div>

                      <div class="form-grp">
                      <label>Jam Mulai</label>
                      <input type="text" name="jamstart">
                      </div>
                      <div class="form-grp">
                      <label>Jam Berakhir</label>
                      <input type="text" name="jamakhir">
                      </div>

                      <div class="form-grp">
                      <label>Ruang</label>
                      <input type="text" name="jamstart">
                      </div>       
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success">Save</button>
                </div>
              </div>
              
            </div>
          </div>
        
        </div>
    </div>
   </div>

   <?php $this->load->view('part/foot') ?>
</div>

<?php $this->load->view('part/foot-js') ?>



