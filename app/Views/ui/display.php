<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo SITE_NAME ;?></title>
  <link rel="icon"       href="<?= base_url('_assets/dist/img/favicon.png'); ?>">
  <!-- Tell the browser to be responsive to screen width -->  

  <link rel="stylesheet" href="<?= base_url('_assets/plugins/fontawesome-free/css/all.min.css'); ?>">  

  <link rel="stylesheet" href="<?= base_url('_assets/dist/css/adminlte.min.css'); ?>">  

  <link rel="stylesheet" href="<?= base_url('_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">    
  <link rel="stylesheet" href="<?= base_url('_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('_assets/_layout/asset.css'); ?>">  

</head>
<!-- <body class="hold-transition sidebar-mini sidebar-collapse text-sm layout-fixed accent-danger" style="background-color: #d5ecef;"> -->
<!-- <body class="hold-transition layout-top-nav accent-danger" style="background-color: #d5ecef;"> -->
<!-- <body class="hold-transition sidebar-collapse layout-top-nav accent-danger" style="background-color: #d5ecef;"> -->
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed" data-panel-auto-height-mode="height">

<script type="text/javascript">  
  var base_url        = "<?= base_url(); ?>";
  var dikeluarkan     = "<?= base_url(); ?>/login/logout";
</script>
<!-- Site wrapper -->
<div class="wrapper">  
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center navbar-dark">
    <img class="animation__shake" src="<?= base_url('_assets/dist/img/darmayu.png') ?>" alt="Logo SIM-RS" height="150" width="150">
  </div>

  <!-- <nav class="main-header navbar navbar-expand-md navbar-light"> -->  
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- <div class="container"> -->
      <?= $this->include('_layout/nav_bar') ?>
    <!-- </div>     -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success elevation-4">
    <?= $this->include('_layout/sidebar') ?>     
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper" style="background-color: #d5ecef;"> -->
  <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
      <div class="nav-item dropdown" style="border: 1px solid black;">
        <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Close</a>
        <div class="dropdown-menu mt-0">
          <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Tutup Semua</a>
          <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Tutup Semua Yang Tidak Aktif</a>
        </div>
      </div>
      <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
      <ul class="navbar-nav overflow-hidden nm_judul_panel" role="tablist">        

      </ul>
      <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
      <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
    </div>

    <div class="isi_judul_panel"> <!-- tab-content  -->
      <div class="tab-empty" style="flex-direction: column; text-align: center;">
        <img src="<?= base_url('_assets/dist/img/darmayu.png') ?>" alt="Logo SIM-RS" height="150" width="150">
        <h4 class="display-4">Tidak ada menu yang ditampilkan!</h4>
      </div>
      <div class="tab-loading">
        <div>
          <h2 class="display-4">Loading!! <i class="fa fa-sync fa-spin"></i></h2>
        </div>
      </div>
      


    </div>
  </div>
  <!-- END KONTEN WRAPPER -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>v1.0</b>
    </div>
    Copyright &copy; <?php echo date('Y') ?> <a href="#">I.T</a>. All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <aside class="control-sidebar control-sidebar-dark">    
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="<?= base_url('_assets/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('_assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="<?= base_url('_assets/ext-all.js'); ?>"></script>
<script src="<?= base_url('_assets/jquery-3.6.1.js'); ?>"></script>
<script>
//  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('_assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('_assets/dist/js/adminlte.js'); ?>"></script>
<!-- CSS Private -->
<script src="<?= base_url('_assets/dist/js/customize.js'); ?>"></script>
<!-- Datatables -->
<script src="<?= base_url('_assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function(e) { 
		var login = false;
		if (localStorage['data_user'] != null) {
			if(localStorage['timeout'] > Date.now()){
				login = true;
			}
		}
		
		if(login||true){
			
		}else{
			localStorage['data_user'] = null;
			localStorage['timeout'] = null;
			window.location.href = "login";
		}
	});
</script>
</body>
</html>
