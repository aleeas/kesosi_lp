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
          <table class="table-maba" border="1" width="100%" cellspacing="0">
              <thead>
                <tr style="background-color:#003c60; color:#FFFFFF;">
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>No Identitas</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
                  <th>Status</th>
                  <th>Prodi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center">
                  <td>1</td>
                  <td>Ahmad Suhaili</td>
                  <td>3174000283823</td>
                  <td>Jl Raya Citayam </td>
                  <td>087786407337</td>
                  <td>Menikah</td>
                  <td>Profesi Ners</td>
                  <td><a href="<?php echo site_url("admin/mabadetail"); ?>">Detail</a></td>
                </tr>
              </tbody>
          </table>
      </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>