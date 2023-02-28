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
<body class="layout-top-nav" data-panel-auto-height-mode="height">

<script type="text/javascript">  
  var base_url        = "<?= base_url(); ?>";
  var dikeluarkan     = "<?= base_url(); ?>/login/logout";
</script>
<!-- Site wrapper -->
<div class="wrapper">  
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center navbar-dark">
    <img class="animation__shake" src="<?= base_url('_assets/dist/img/logoRSSM.png') ?>" alt="Logo SIM-RS">
  </div>

  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <?= $this->include('_layout/nav_bar') ?>
  </nav>

  <div class="content-wrapper" style="padding: 10px; min-height: 833px;">
       <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-danger card-outline" style="text-align: center; border-left: 3px solid #dc3545; border-bottom: 3px solid #dc3545; border-right: 3px solid #dc3545;">
              <div class="card-header" style="background-color: #dc3545; border-bottom: 5px solid rgb(0 0 0); border-top-left-radius: 0; border-top-right-radius: 0;">
                <h1>OBAT RACIKAN</h1>
              </div>
              <div class="card-body" style="height: 250px; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 150px;">
                <span>R-001</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card card-success card-outline" style="text-align: center; border-left: 3px solid #28a745; border-bottom: 3px solid #28a745; border-right: 3px solid #28a745;">
              <div class="card-header" style="background-color: #28a745; border-bottom: 5px solid rgb(0 0 0); border-top-left-radius: 0; border-top-right-radius: 0;">
                <h1>OBAT NON RACIKAN</h1>
              </div>
              <div class="card-body" style="height: 250px; display: flex; justify-content: center; flex-direction: column; align-items: center; font-size: 150px;">
                <span>A-001</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6" style="max-height: 29rem; overflow: auto; font-size: 15px;">
            <table id="table" class="table table-striped table-sm" style="border-collapse: inherit;">
              <thead>
                <tr>
                  <th width="5">#</th>
                  <th width="150">No Antrian</th>
                  <th width="150">Medrek</th>
                  <th>Poliklinik</th>
                  <th width="50">Act</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>

          <div class="col-lg-6" style="max-height: 29rem; overflow: auto; font-size: 15px;">
            <table id="table" class="table table-striped table-sm" style="border-collapse: inherit;">
              <thead>
                <tr>
                  <th width="5">#</th>
                  <th width="150">No Antrian</th>
                  <th width="150">Medrek</th>
                  <th>Poliklinik</th>
                  <th width="50">Act</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <aside class="control-sidebar control-sidebar-dark" style="display: none;"></aside>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>v1.0</b>
    </div>
    Copyright &copy; <?php echo date('Y') ?> <a href="#">I.T</a>. All rights reserved.
  </footer>

 
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

  tampilkan_isi_tindakan();
  function tampilkan_isi_tindakan() {
    var Baris = '<tr>';
    for (var i = 0; i < 15; i++) {
      var no = i + 1;
      Baris += '<td>' + no + '</td>';
      Baris += '<td>R-00' + no + '</td>';
      Baris += '<td>0-00-00-0' + no + '</td>';
      Baris += '<td>Jantung ' + no + '</td>';      
      Baris += '<td><i class="fa fa-edit"></i> <i class="fa fa-save"></i></td>';
      Baris += "</tr>";
    }
    $('#table tbody').append(Baris);
  }

</script>
</body>
</html>
