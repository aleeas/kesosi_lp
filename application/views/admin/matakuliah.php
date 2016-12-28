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

          <tbody bgcolor="#fff"><tr><td colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong>DAFTAR MATA KULIAH</strong></td>
          </tr>
          <tr>
            <td align="center">No</td>
            <td align="center">Kode MK</td>
            <td align="center">Nama MK</td>
            <td align="center">Jumlah SKS</td>
            <td align="center">Semester</td>  
            <td align="center">Jurusan</td> 
            <td align="center" colspan="2" width="100">
            <a href="" rel="example_group" class="link" data-toggle="modal" data-target="#myModal">Tambah Matkul</a>  
            </td>
          </tr>
  
          <tr>
            <td align="center">1</td>
            <td align="center">1111101</td>
            <td align="center">Agama</td>
            <td align="center">3</td>
            <td align="center">3</td>
            <td align="center">S1 Keperawatan</td>  
            
            <td align="center"><a href="http://localhost/siakad-master/admin/edit_mk/1111101" rel="example_group" class="link">Edit</a>
            </td>
            <td align="center">
            <a href="http://localhost/siakad-master/admin/hapus_mk/1111101" onclick="return confirm(&quot;Anda yakin...??&quot;)" class="link">Hapus</a>
            </td>     
          </tr>
          <tr>
            <td align="center">2</td>
            <td align="center">1111102</td>
            <td align="center">Pancasila dan Kewarganegaraan </td>
            <td align="center">3</td>
            <td align="center">8</td>
            <td align="center">D3 Analis</td>  
            
            <td align="center"><a href="http://localhost/siakad-master/admin/edit_mk/1111102" rel="example_group" class="link">Edit</a>
            </td>
            <td align="center">
            <a href="http://localhost/siakad-master/admin/hapus_mk/1111102" onclick="return confirm(&quot;Anda yakin...??&quot;)" class="link">Hapus</a>
            </td>     
          </tr>
          <tr>
            <td align="center">3</td>
            <td align="center">1111103</td>
            <td align="center">Kepemimpinan </td>
            <td align="center">3</td>
            <td align="center">8</td>
            <td align="center">Profesi Ners</td>  
            
            <td align="center"><a href="http://localhost/siakad-master/admin/edit_mk/1111103" rel="example_group" class="link">Edit</a>
            </td>
            <td align="center">
            <a href="http://localhost/siakad-master/admin/hapus_mk/1111103" onclick="return confirm(&quot;Anda yakin...??&quot;)" class="link">Hapus</a>
            </td>     
          </tr>
    
      
          </tbody>
        </table>

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Mata Kuliah</h4>
                </div>
                <div class="modal-body">
                  <form id="addMatkul" method="post">
                      <div class="form-grp">
                        <label>Kode MK</label>
                        <input type="text" name="mk_code">
                      </div>
                       <div class="form-grp">
                        <label>Nama MK</label>
                        <input type="text" name="mk_name">
                      </div>
                      <div class="form-grp">
                        <label>Jumlah SKS</label>
                        <input type="text" name="mk_sks">
                      </div>
                      <div class="form-grp">
                        <label>Semester</label>
                        <input type="text" name="mk_semester">
                      </div>
                      <div class="form-grp">
                        <label>Prasyarat</label>
                        <input type="text" name="mk_semester">
                      </div>
                      <div class="form-grp">
                      <label>Jurusan</label>
                      <input type="text" name="mk_jurusan">
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