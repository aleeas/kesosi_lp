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
          <?php echo form_open('pmb_proses', 'class="email" id="myform"'); ?>
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
                  <input type="text" name="kodepos" />
                </div>
                <div class="form-grp radio">
                <fieldset class="gender">
                  <legend>Pilih Jenis Kelamin: </legend>
                  
                  <input type="radio" name="radio-1" id="radio-1">
                  <label for="radio-1">Pria</label>
                  
                  <input type="radio" name="radio-1" id="radio-2">
                  <label for="radio-2">Wanita</label>
                  
                </fieldset>
                </div>
                 <div class="form-grp">
                  <label>Agama *</label>
                  <select>
                    <option selected>Silahkan Pilih Agama</option>
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

                <div class="form-grp">
                  <label>Kode Pos *</label>
                  <input type="text" name="kodepos" />
                </div>

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
                  <select>
                    <option selected>Silahkan Pilih</option>
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
                  <select>
                    <option selected>Silahkan Pilih</option>
                    <option>Menikah</option>
                    <option>Belum Menikah</option>
                    <option>Duda/Janda</option>                
                  </select>
                </div>

                <div class="form-grp">
                  <label>Program Study Pilihan *</label>
                  <select>
                    <option selected>Silahkan Pilih</option>
                    <option>S1 Keperawatan</option>
                    <option>Profesi Ners</option>
                    <option>D3 Analis Kesehatan</option>                
                  </select>
                </div>

                <div class="form-grp radio">
                <fieldset class="gender">
                  <legend>Ukuran Jaket: </legend>
                  
                  <input type="radio" name="radio-1" id="radio-s">
                  <label for="radio-s">S</label>
                  
                  <input type="radio" name="radio-1" id="radio-m">
                  <label for="radio-m">M</label>

                  <input type="radio" name="radio-1" id="radio-l">
                  <label for="radio-l">L</label>
                  
                  <input type="radio" name="radio-1" id="radio-xl">
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
