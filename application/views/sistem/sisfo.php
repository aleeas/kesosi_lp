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
          <div class="text-center" style="font-size:14px;">SISTEM ONLINE STIKES KESOSI<br>
          Program S1, D3 dan NERS Sekolah TInggi Ilmu Kesehatan KESOSI</div>
          
          <div class="wrapper" style="max-width:400px">
          <?php echo form_open('auth/checklogin', 'class="email" id="myform"'); ?>
            
            <div class="form-grp">
              <label>Username / NIM *</label>
              <input type="text" name="usernim" />
            </div>

            <div class="form-grp">
              <label>Password *</label>
              <input type="password" name="password" />
            </div>
           
            <br class="clear"/>
            <div class="form-grp text-center">
              <input type="submit" value="LOGIN"/>
            </div>
          
          </form>
        </div>

        </div>
    </div>
  </div>
  <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>
