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
              <tbody bgcolor="#fff">
                <?php
                  foreach ($listdata->result_array() as $value) {
                ?>
                <tr style="text-align:center">
                  <td><?php echo $value['id']?></td>
                  <td><?php echo $value['nama_lengkap']?></td>
                  <td><?php echo $value['no_ktp']?></td>
                  <td><?php echo $value['alamat']?></td>
                  <td><?php echo $value['no_hp']?></td>
                  <td><?php echo $value['status_kawin']?></td>
                  <td><?php echo $value['prog_study']?></td>
                  <td><a href="<?php echo site_url()."/admin/mabadetail/".$value['id'] ?>">Detail</a></td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
          </table>
      </div>
    </div>
   </div>
   <?php $this->load->view('part/foot') ?>
</div>
<?php $this->load->view('part/foot-js') ?>