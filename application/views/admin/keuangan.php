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
	    <div class="wrapper-board" style="float:left;width:100%; max-width:920px;">
      <div class="f-left" style="width:65%">
        <table class="table-krs" border="1" class="table-krs" cellpadding="5" width="100%" style="border:1px solid #ddd; min-height:263px;">
              <tbody bgcolor="#fff">
                  <tr class="success"><th colspan="3">Data Mahasiswa </th></tr>
                  <tr><td width="120">&nbsp;NIM Mahasiswa</td>
                  <td><div class="f-left">
                      &nbsp;<input type="text" name="nim" placeholder="Masukan Nim .."  required="required" value="">&nbsp;
                      </div> 
                      &nbsp;<input type="submit" value="Submit" name="submit" onclick="return showDiv();" class="btn btn-danger" style="margin: 0;  padding: 6px 12px;line-height: 1.42857143;font-size: 14px;"> 
                      &nbsp;<a href="http://localhost/sysfo/index.php/keuangan/reset" class="btn btn-danger">Reset</a>&nbsp;</td>
                      <td wisth="90" align="center" rowspan="3">
                        &nbsp;<img src="http://localhost/sysfo/assets/images/noprofile.gif" width="85">&nbsp;
                      </td>
                  </tr>
                  <tr><td>&nbsp;Nama</td>
                    <td> &nbsp;</td>
                  </tr>
                  <tr><td>&nbsp;Prodi /Konsentrasi</td>
                    <td> &nbsp;</td>
                  </tr>
               
              </tbody>
          </table>
       </div>
       <div class="f-right" style="width:35%">
          <table class="table-krs" border="1" class="table-krs" cellpadding="5" width="100%" style="border:1px solid #ddd; min-height:263px;">
            <tbody bgcolor="#fff">
            <tr class="success">
              <th colspan="2">Form Transaksi</th>
            </tr>
            <tr>
            <td width="130">&nbsp; Jenis Pembayaran <br><a href="" class="link" data-toggle="modal" data-target="#myModal" style="margin-left:2px;"> &nbsp; Add Jenis Bayar</a></td>
            <td>
              <div style="padding:10px;">
                &nbsp; <select name="jenis" class="form-control" id="jenis_pembayaran" style="float:left;width:165px;margin-right: 10px;margin-top:-45px;"> 
                  <option value="1">PENDAFTARAN</option> 
                  <option value="2">PEKA</option> 
                  <option value="3">SPP</option> 
                  <option value="9">DSP</option> 
                  <option value="10">KEMAHASISWAAN</option> 
                  <option value="11">ASURANSI</option> 
                  <option value="19">WISUDA</option> 
                  <option value="22">XZXZXDSD</option>
                </select>

                <select name="semester" id="semester" class="form-control" style="display: none; width:165px; float:left;margin-bottom:10px;">
                    <option value="1">SEMESTER 1</option>
                    <option value="2">SEMESTER 2</option>
                    <option value="3">SEMESTER 3</option>
                    <option value="4">SEMESTER 4</option>
                    <option value="5">SEMESTER 5</option>
                    <option value="6">SEMESTER 6</option>
                    <option value="7">SEMESTER 7</option>
                    <option value="8">SEMESTER 8</option>
                </select>

                </div>
              
              </td>
              </tr>
           
              <tr><td>&nbsp; Jumlah Bayar</td><td>
              <div style="padding:10px;">
                &nbsp; <input type="text" name="jumlah" placeholder="Jumlah .." data-thousands="." data-prefix="Rp " data-currency="amount" required="required" value="">
                 &nbsp; <input type="submit" name="submit2" value="Simpan" class="btn btn-danger" style="margin:0">
                 </div></td></tr>
              </tbody>
          </table>
          <br>
        </div>
        <br>
        <div id="table-form" style="display:none">
            <table border="1" width="100%" class="table-krs" cellpadding="5"  style="border:1px solid #ddd">
              <tbody bgcolor="#fff">
              <tr>
                <td colspan="12" align="center" style="text-transform:uppercase;background:#003c60;color:#fff;">
                  <strong>Riwayat Transaksi</strong>
                  </td>
              </tr>
              <tr>
                <th align="center">No</th>
                <th align="center">Jenis Pembayaran</th>
                <th align="center">Harus Dibayar</th>
                <th align="center">Sudah Dibayar</th>
                <th align="center">Sisa</th>
                <th align="center">Keterangan</th>
              </tr>
              <tr>
                <td align="center">1</td>
                <td align="center">Pendaftaran</td>
                <td align="center">Rp 4000000</td>
                <td align="center">Rp 2000000</td>
                <td align="center">Rp 2000000</td>            
                <td align="center">Tunggakan Rp 2000000</td>                 
              </tr>
              <tr>
                <td align="center">2</td>
                <td align="center">Kemahasiswaan</td>
                <td align="center">Rp 4000000</td>
                <td align="center">Rp 2000000</td>
                <td align="center">Rp 2000000</td>            
                <td align="center">Tunggakan Rp 2000000</td>                 
              </tr>
              <tr>
                <td align="center">3</td>
                <td align="center">SPP Semester I</td>
                <td align="center">Rp 4000000</td>
                <td align="center">Rp 2000000</td>
                <td align="center">Rp 2000000</td>            
                <td align="center">Tunggakan Rp 2000000</td>                 
              </tr>
               <tr>
                <td align="center">4</td>
                <td align="center">Wisuda</td>
                <td align="center">Rp 4000000</td>
                <td align="center">Rp 2000000</td>
                <td align="center">Rp 2000000</td>            
                <td align="center">Tunggakan Rp 2000000</td>                 
              </tr>
               <tr>
                <td align="center">5</td>
                <td align="center">Ujian Semester</td>
                <td align="center">Rp 4000000</td>
                <td align="center">Rp 2000000</td>
                <td align="center">Rp 2000000</td>            
                <td align="center">Tunggakan Rp 2000000</td>                 
              </tr>
              </tbody>
            </table>
    
            <br>
            <table border="1" width="100%" class="table-krs" cellpadding="5"  style="border:1px solid #ddd">
              <tbody bgcolor="#fff">
              <tr>
                <td colspan="12" align="center" style="text-transform:uppercase;background:#003c60;color:#fff;">
                  <strong>Riwayat Transaksi Detail</strong>
                  </td>
              </tr>
              <tr>
                <th align="center">No</th>
                <th align="center">Jenis Pembayaran</th>
                <th align="center">Tgl Transaksi</th>
                <th align="center">Jumlah</th>
                <th align="center">Petugas</th>
                <th align="center">Operasi</th>
              </tr>
              <tr>
                <td align="center">1</td>
                <td align="center">Pendaftaran</td>
                <td align="center">28/12/2016</td>
                <td align="center">Rp 2000000</td>
                <td align="center">Admin</td>            
                <td align="center"><a href="" class="btn btn-danger">Hapus</a></td>                
              </tr>
              
              </tbody>
            </table>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Jenis Pembayaran</h4>
                </div>
                <div class="modal-body">
                  <form id="addform" method="post">
                    
                      <div class="form-grp">
                      <label>Jenis Pembayaran</label>
                      <input type="text" name="payment_type">
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
<script type="text/javascript">

  document.getElementById('jenis_pembayaran').addEventListener('change', function () {
        if(this.value == 3){
            document.getElementById('semester').style.display = 'block';
           
        }else{
            document.getElementById('semester').style.display = 'none';
            
        }
    });
  function showDiv() {
    document.getElementById('table-form').style.display = 'block';
        return false;
  }
  
</script>
<?php $this->load->view('part/foot-js') ?>
