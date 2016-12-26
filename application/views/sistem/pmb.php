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
                  <input type="text" name="nama" />
                </div>
                <div class="form-grp">
                  <label>Nama Panggilan *</label>
                  <input type="text" name="panggilan" />
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
                  <input type="text" name="desa" />
                </div>
                <div class="form-grp">
                  <label>Kab / Kota *</label>
                  <input type="text" name="kabupaten" />
                </div>
                <div class="form-grp">
                  <label>Kecamatan *</label>
                  <input type="text" name="kecamatan" />
                </div>
                <div class="form-grp">
                  <label>Kode Pos *</label>
                  <input type="text" name="kodepos1" />
                </div>
                <div class="form-grp radio">
                <fieldset class="gender">
                  <legend>Pilih Jenis Kelamin: </legend>
                  
                  <input type="radio" name="jk" id="radio-1">
                  <label for="radio-1">Pria</label>
                  
                  <input type="radio" name="jk" id="radio-2">
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

            </div>  
            <div class="right-side">
             
                <div class="form-grp">
                  <label>Tempat Lahir *</label>
                  <input type="text" name="tempatlahir" />
                </div>

                <div class="form-grp" style="float:left">
                  <label>Tanggal Lahir *</label>
                  <span class="tdmt">
                    <select name="tgl_l" required="">
                      <option value="">-- DD --</option>
                      
                      <option>1</option>
                      
                      <option>2</option>
                      
                      <option>3</option>
                      
                      <option>4</option>
                      
                      <option>5</option>
                      
                      <option>6</option>
                      
                      <option>7</option>
                      
                      <option>8</option>
                      
                      <option>9</option>
                      
                      <option>10</option>
                      
                      <option>11</option>
                      
                      <option>12</option>
                      
                      <option>13</option>
                      
                      <option>14</option>
                      
                      <option>15</option>
                      
                      <option>16</option>
                      
                      <option>17</option>
                      
                      <option>18</option>
                      
                      <option>19</option>
                      
                      <option>20</option>
                      
                      <option>21</option>
                      
                      <option>22</option>
                      
                      <option>23</option>
                      
                      <option>24</option>
                      
                      <option>25</option>
                      
                      <option>26</option>
                      
                      <option>27</option>
                      
                      <option>28</option>
                      
                      <option>29</option>
                      
                      <option>30</option>
                      
                      <option>31</option>
                      
                    </select>
                  </span>
                  <span class="tdmt" style="margin:0 5%">
                    <select name="bln_l" required="">
                      <option value="">-- MM --</option>
                      
                      <option>1</option>
                      
                      <option>2</option>
                      
                      <option>3</option>
                      
                      <option>4</option>
                      
                      <option>5</option>
                      
                      <option>6</option>
                      
                      <option>7</option>
                      
                      <option>8</option>
                      
                      <option>9</option>
                      
                      <option>10</option>
                      
                      <option>11</option>
                      
                      <option>12</option>
                      
                    </select>
                  </span>
                  <span class="tdmt">
                    <select name="thn_l" required="">
                        <option value="">-- YY --</option>
                        
                        <option>1960</option>
                        
                        <option>1961</option>
                        
                        <option>1962</option>
                        
                        <option>1963</option>
                        
                        <option>1964</option>
                        
                        <option>1965</option>
                        
                        <option>1966</option>
                        
                        <option>1967</option>
                        
                        <option>1968</option>
                        
                        <option>1969</option>
                        
                        <option>1970</option>
                        
                        <option>1971</option>
                        
                        <option>1972</option>
                        
                        <option>1973</option>
                        
                        <option>1974</option>
                        
                        <option>1975</option>
                        
                        <option>1976</option>
                        
                        <option>1977</option>
                        
                        <option>1978</option>
                        
                        <option>1979</option>
                        
                        <option>1980</option>
                        
                        <option>1981</option>
                        
                        <option>1982</option>
                        
                        <option>1983</option>
                        
                        <option>1984</option>
                        
                        <option>1985</option>
                        
                        <option>1986</option>
                        
                        <option>1987</option>
                        
                        <option>1988</option>
                        
                        <option>1989</option>
                        
                        <option>1990</option>
                        
                        <option>1991</option>
                        
                        <option>1992</option>
                        
                        <option>1993</option>
                        
                        <option>1994</option>
                        
                        <option>1995</option>
                        
                        <option>1996</option>
                        
                        <option>1997</option>
                        
                        <option>1998</option>
                        
                        <option>1999</option>
                        
                        <option>2000</option>
                        
                        <option>2001</option>
                        
                      </select>
                  </span>
                </div>
                <div class="clearfix"></div>
                <div class="form-grp">
                  <label>Telp Rumah</label>
                  <input type="text" name="telp" />
                </div>

                <div class="form-grp">
                  <label>Nama Ibu Kandung *</label>
                  <input type="text" name="ibukandung" />
                </div>

                <div class="form-grp">
                  <label>No Hp *</label>
                  <input type="text" name="handphone" />
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
                  <label>Nama Instansi (Bagi yang Sudah Bekerja)</label>
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
                  
                  <input type="radio" name="ukuran_jaket" id="radio-s">
                  <label for="radio-s">S</label>
                  
                  <input type="radio" name="ukuran_jaket" id="radio-m">
                  <label for="radio-m">M</label>

                  <input type="radio" name="ukuran_jaket" id="radio-l">
                  <label for="radio-l">L</label>
                  
                  <input type="radio" name="ukuran_jaket" id="radio-xl">
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
    })
</script>