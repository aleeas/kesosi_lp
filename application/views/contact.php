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
        <h1>Contact Us</h1>
        <div class="addressbox">
          <div class="postal_address">
            <h2>Alamat Kampus</h2>
            <ul>
              <li> <span class="imgbox"><img src="<?php echo base_url("assets/images/img-a1.png") ?>" alt="" /></span>
                <div class="desc">
                  <p>Kampus Utama - A <br>
                  Jl. Bojong Raya No. 58 Kel. Rawa Buaya Kec. Cengkareng Jakarta Barat 11740 <br>
                  </p>
                </div>
              </li>
              <li> <span class="imgbox"><img src="<?php echo base_url("assets/images/img-a1.png") ?>" alt="" /></span>
                <div class="desc">
                  <p>Kampus - B (Kelas Karyawan) 
                  Jl. Kramat II no. 13 Kwitang Jakarta Pusat <br> 
                  </p>
                </div>
              </li>
              <li> <span class="imgbox"><img src="<?php echo base_url("assets/images/img-a2.png") ?>" alt="" /></span>
                <div class="desc">
                  <p><strong>Call: (021) 58354799 <br> Hp: Bpk. Teguh 0857 19 777 432</strong></p>
                </div>
              </li>
              <li> <span class="imgbox"><img src="<?php echo base_url("assets/images/img-a3.png") ?>" alt="" /></span>
                <div class="desc">
                  <p><strong>FAX: (021) 58354781</strong></p>
                </div>
              </li>
              <li> <span class="imgbox"><img src="<?php echo base_url("assets/images/img-a4.png") ?>" alt="" /></span>
                <div class="desc">
                  <p>info@stikeskesosi.ac.id</p>
                  <p>www.stikeskesosi.ac.id</p>
                </div>
              </li>
            </ul>
          </div>
         
          <div class="map_address" style="float:left;width:400px;">
            <div class="inquiry_form" style="padding: 0; border:none">
            <h2>Quick Inquiry</h2>
            <ul>
              <li>
                <div class="left">
                  <input type="text" value="Name" onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" />
                  <input type="text" value="Email" onfocus="if(this.value == 'Email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email'; }" />
                  <input type="text" value="Phone Number" onfocus="if(this.value == 'Phone Number') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Phone Number'; }" />
                </div>
                <div class="right">
                  <textarea rows="5" cols=""></textarea>
                </div>
              </li>
              <li>
                <input type="submit" value="Submit" class="btn_submit" style="padding:0" />
              </li>
            </ul>
          </div>
          
          <br class="clear" />
          </div>
        </div>
        <div class="quickinquiry">
          
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7071446659734!2d106.7339816528778!3d-6.169954359875306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7851a9d0733%3A0xf697641b33eb87e1!2sSTIKES+KESOSI!5e0!3m2!1sen!2sid!4v1482562708476" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            <br class="clear" />
        </div>
      </div>
      <br class="clear" />
    </div>

  </div>
  <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>
