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
    <div id="gallery">
        <ul class="stack-gallery">
          <li>
            <section>
              <h2>Wisuda</h2>
               <div id="gal-btn-1" style="display:none" class="gal-button"><a href="<?php echo site_url("website/gal_wisuda");?>" class="view-gallery-btn">View All Gallery</a></div>
              <button class="gal-button" data-click="expand-wisuda" id="wisuda">Expand Gallery</button>
             
              <figure class="stack stack-randomrot">
                <img src="<?php echo base_url("assets/images/album/P_20161210_085837.jpg") ?>" alt="img01"/>
                <img src="<?php echo base_url("assets/images/album/P_20161210_085941.jpg") ?>" alt="img02"/>
                <img src="<?php echo base_url("assets/images/album/P_20161210_114335.jpg") ?>" alt="img03"/>
              </figure>
            </section>
          </li>
          <li>
            <section>
              <h2>Kegiatan</h2>
              <div id="gal-btn-2" style="display:none" class="gal-button"><a href="<?php echo site_url("website/gal_kegiatan");?>" class="view-gallery-btn">View All Gallery</a></div>
              <button class="gal-button" data-click="expand-kegiatan" id="kegiatan">Expand Gallery</button>
              <figure class="stack stack-fanout">
                <img src="<?php echo base_url("assets/images/album/P_20160820_151513.jpg") ?>" alt="img01"/>
                <img src="<?php echo base_url("assets/images/album/P_20160820_150811.jpg") ?>" alt="img02"/>
                <img src="<?php echo base_url("assets/images/album/P_20160820_103218.jpg") ?>" alt="img03"/>
              </figure>
            </section>
          </li>
          <li>
            <section>
              <h2>Seminar</h2>
              <div id="gal-btn-3" style="display:none" class="gal-button"><a href="<?php echo site_url("website/gal_seminar");?>" class="view-gallery-btn">View All Gallery</a></div>
              <button class="gal-button" data-click="expand-seminar" id="seminar">Expand Gallery</button>
              <figure class="stack stack-sideslide">
                <img src="<?php echo base_url("assets/images/album/P_20160830_145407.jpg") ?>" alt="img01"/>
                <img src="<?php echo base_url("assets/images/album/P_20161210_090107.jpg") ?>" alt="img02"/>
                <img src="<?php echo base_url("assets/images/album/P_20160909_110346.jpg") ?>" alt="img03"/>
              </figure>
            </section>
          </li>
        </ul>
      </div>
      <br class="clear" />
    </div>

  </div>
  <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>
