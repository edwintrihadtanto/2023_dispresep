<div class="container">
  <a href="<?php echo base_url(); ?>" class="navbar-brand" target="_parent" title="Memuat Ulang Halaman Utaman">
    <img src="<?= base_url('_assets/dist/img/logoRSSM.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><strong>Display Antrian Obat</strong></span>
  </a>  

  <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse order-3" id="navbarCollapse">
  
   
  </div>

  <!-- Right navbar links -->
  <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item">
      <a class="nav-link" href="#"title="Informasi Tanggal Hari Ini">
        <h5><?php echo longdate_indo(date('Y-m-d')); ?></h5>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</div>