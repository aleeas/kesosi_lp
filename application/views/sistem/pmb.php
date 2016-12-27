<?php $this->load->view('part/head') ?>
<!--wrapper -->
<div id="outer_wrapper">
  <div id="wrapper">
    <!--header -->
    <?php $this->load->view('header/header-menu') ?>
    <!--Menu Area -->
    <?php $this->load->view('header/menu-nav') ?>
    
     <!--content area -->
    <div id="content">
      <div id="contact_us">
          <div class="text-center" style="font-size:14px;">FORM PENDAFTARAN ONLINE (PMB)<br>
          Program S1, D3 dan NERS Sekolah TInggi Ilmu Kesehatan KESOSI</div>
          
          <div class="wrapper">
          <form id="myform" method="post">
            <div class="left-side">
               <div class="form-grp">
                  <label>Nama Lengkap *</label>
                  <input type="text" name="nama_lengkap" />
                </div>
                <div class="form-grp">
                  <label>Nama Panggilan *</label>
                  <input type="text" name="nama_panggilan" />
                </div>
                <div class="form-grp">
                  <label>No KTP/SIM *</label>
                  <input type="text" name="ktp" />
                </div>
                <div class="form-grp">
                  <label>Alamat *</label>
                  <textarea rows="6" cols="" name="alamat"></textarea>
                </div>
                <div class="form-grp">
                  <label>Desa / Kelurahan *</label>
                  <input type="text" name="kelurahan" />
                </div>
                <div class="form-grp">
                  <label>Kecamatan *</label>
                  <input type="text" name="kecamatan" />
                </div>
                <div class="form-grp">
                  <label>Kab / Kota *</label>
                  <input type="text" name="kota" />
                </div>
                <div class="form-grp">
                  <label>Kode Pos *</label>
                  <input type="text" name="kodepos" />
                </div>
                <div class="form-grp radio">
                <fieldset class="gender">
                  <legend><b>Pilih Jenis Kelamin: </b></legend>
                  
                  <input type="radio" name="jk" value="Pria" id="radio-1">
                  <label for="radio-1">Pria</label>
                  
                  <input type="radio" name="jk" value="Wanita" id="radio-2">
                  <label for="radio-2">Wanita</label>
                  
                </fieldset>
                </div>
                 <div class="form-grp">
                  <label>Agama *</label>
                  <select name="agama" >
                    <option value="" disabled selected>Silahkan Pilih Agama...</option>
                    <option>Islam</option>
                    <option>Katholik</option>
                    <option>Protestan</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Konghucu</option>
                  </select>
                </div>
                <div class="form-grp">
                  <label>Tempat Lahir *</label>
                  <input type="text" name="tempatlahir" />
                </div>
                <div class="form-grp">
                  <label>Tanggal Lahir *</label>
                  <input type="text" id="datepicker" name="tanggallahir" />
                </div>

            </div>  
            <div class="right-side">
                <div class="clearfix"></div>
                <div class="form-grp">
                  <label>Telp Rumah</label>
                  <input type="text" name="telp" />
                </div>
                <div class="form-grp">
                  <label>Nama Ayah Kandung *</label>
                  <input type="text" name="ayahkandung" />
                </div>
                <div class="form-grp">
                  <label>Nama Ibu Kandung *</label>
                  <input type="text" name="ibukandung" />
                </div>
                <div class="form-grp">
                  <label>Alamat Orang Tua (<span style="color:red;">Optional</span>)</label>
                  <textarea rows="6" cols="" name="alamat_ortu" placeholder="Harap Kosongkan jika tinggal dengan orang tua !"></textarea>
                </div>
                <div class="form-grp">
                  <label>No Hp *</label>
                  <input type="text" name="no_hp" />
                </div>
                <div class="form-grp">
                  <label>Email *</label>
                  <input type="email" name="email" />
                </div>
                <div class="form-grp">
                  <label>Status Pekerjaan *</label>
                  <select name="status_kerja">
                    <option value="" disabled selected>Silahkan Pilih</option>
                    <option>Bekerja</option>
                    <option>Belum Bekerja</option>                
                  </select>
                </div>

                <div class="form-grp">
                  <label>Nama Instansi (<span style="color:red;">Bagi yang Sudah Bekerja</span>)</label>
                  <input type="text" name="perusahaan" />
                </div>

                <div class="form-grp">
                  <label>Status Perkawinan *</label>
                  <select name="status_kawin">
                    <option value="" disabled selected>Silahkan Pilih</option>
                    <option>Menikah</option>
                    <option>Belum Menikah</option>
                    <option>Duda/Janda</option>                
                  </select>
                </div>

                <div class="form-grp">
                  <label>Program Study Pilihan *</label>
                  <select name="study_pilihan">
                    <option value="" disabled selected>Silahkan Pilih</option>
                    <option>S1 Keperawatan</option>
                    <option>Profesi Ners</option>
                    <option>D3 Analis Kesehatan</option>                
                  </select>
                </div>

                <div class="form-grp radio">
                <fieldset class="gender">
                  <legend>Ukuran Jaket: </legend>
                  
                  <input type="radio" name="ukuran_jaket" value="S" id="radio-s">
                  <label for="radio-s">S</label>
                  
                  <input type="radio" name="ukuran_jaket" value="M" id="radio-m">
                  <label for="radio-m">M</label>

                  <input type="radio" name="ukuran_jaket" value="L" id="radio-l">
                  <label for="radio-l">L</label>
                  
                  <input type="radio" name="ukuran_jaket" value="XL" id="radio-xl">
                  <label for="radio-xl">XL</label>
                  
                </fieldset>
                </div>
            </div> 
            <br class="clear"/>
            <div class="form-grp text-center">
              <input type="submit" value="Submit"/>
            </div>
          
          </form>
        </div>

        </div>
    </div>
  </div>
  <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>
 
<script type="text/javascript">

    $(document).ready(function(){
        $('#myform').on('submit',function(){
            $.ajax({
                url:'<?php echo site_url()?>/website/create_pmb',
                type:'post',
                dataType:'JSON',
                data:$('#myform').serialize(),
                success:function(e){
                    if(e.status){
                        swal({
                            title:e.msg,
                            text:null,
                            type:e.type
                        },  
                        function(){
                            location.reload();
                        });
                        console.log(e);
                    }else{
                        swal(e.msg,'Please complete the form contents',e.type);
                        console.log(e);
                    }
                },
                error:function(e){
                    console.error(e);
                }
            });
            return false;
            
        });
});
</script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui.js") ?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datepicker').datepicker( {
      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true
    });
  });
</script>