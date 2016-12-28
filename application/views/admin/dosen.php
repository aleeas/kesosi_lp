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
          <table class="table-maba" border="1" width="100%" cellspacing="0" style="border:1px solid #ddd">
              <tbody bgcolor="#fff"><tr><td colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;">
              <strong>DAFTAR Dosen</strong></td>
              </tr>
              <tr>
              <td align="center">Kode Dosen</td>
              <td align="center">NIDN</td>
              <td align="center">Nama Dosen</td>               
              <td align="center" colspan="2">
                  <a href="" rel="example_group" class="link" data-toggle="modal" data-target="#myModal">
                  Tambah </a> 
              </td>
              </tr>
              
                <tr>
                  <td align="center">D001</td>  
                  <td align="center">0960011001</td>
                  <td align="center">Bondan Prakoso S.Pd M.M</td>                  
                  <td align="center" width="80">
                  <a href="http://localhost/siakad-master/admin/edit_mahasiswa/0960011001" rel="example_group" class="link" >Edit</a></td>
                  <td align="center" width="80">
                    <a href="http://localhost/siakad-master/admin/hapus_mahasiswa/0960011001" onclick="return confirm(&quot;Anda yakin...??&quot;)" class="link" >Hapus</a></td> 
                  </tr>
                <tr>
                  <td align="center">D002</td>  
                  <td align="center">0960011001</td>
                  <td align="center">Imam Hanafi S.Pd M.M</td>                  
                  <td align="center" width="80">
                  <a href="http://localhost/siakad-master/admin/edit_mahasiswa/2016200123" rel="example_group" class="link" >Edit</a></td>
                    <td align="center" width="80">
                    <a href="http://localhost/siakad-master/admin/hapus_mahasiswa/2016200123" onclick="return confirm(&quot;Anda yakin...??&quot;)" class="link" >Hapus</a>      </td> 
                  </tr>
                
                  
              </tbody>
          </table>

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Dosen</h4>
                </div>
                <div class="modal-body">
                  <form id="addMhs" method="post">
                      <div class="form-grp">
                        <label>Kode Dosen</label>
                        <input type="text" name="dsn_code">
                      </div>
                       <div class="form-grp">
                        <label>NIDN</label>
                        <input type="text" name="dsn_nidn">
                      </div>
                      <div class="form-grp">
                        <label>Nama Dosen</label>
                        <input type="text" name="dsn_name">
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