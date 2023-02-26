
<!-- Brand Logo -->
<a href="#" class="brand-link">
  <img src="<?= base_url('_assets/dist/img/darmayu.png') ?>" class="brand-image img-circle elevation-3" style="opacity: .8" alt="Logo SIM-RS">
  <span class="brand-text font-weight-light">SIM-RS</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?= base_url('_assets/dist/img/user3.jpg') ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Administrator</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->


  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item" style="border-top: 1px solid #4f5962;">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Inst. Gawat Darurat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendIGD" class="nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Pend. Inst. Gawat Darurat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pentjasaIGD" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Penata Jasa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kasirIGD" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Kasir IGD</p>
                </a>
              </li>  
            </ul>
          </li>

          <li class="nav-item" style="border-top: 1px solid #4f5962;">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Inst. Rawat Jalan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendRWJ" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Pend. Rawat Jalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pentjasaRWJ" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Penata Jasa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kasirRWJ" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Kasir Rawat Jalan</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="ermRWJ" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Rekam Medis Rawat Jalan</p>
                </a>
              </li>              
            </ul>
          </li>

          <li class="nav-item" style="border-top: 1px solid #4f5962;">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>
                Inst. Rawat Inap
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendRWI" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Pend. Rawat Inap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pentjasaRWI" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Penata Jasa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kasirRWI" class="click nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Kasir Rawat Inap</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item" style="border-top: 1px solid #4f5962;">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-medkit"></i>
              <p>
                Apotik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="eresepRWJ" class="nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Resep Rawat Jalan / IGD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="eresepRWI" class="nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Resep Rawat Inap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="returresepRWJ" class="nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Retur Rawat Jalan / IGD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="returresepRWI" class="nav-link">
                  <i class="fa fa-pencil-alt nav-icon"></i>
                  <p>Retur Rawat Inap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rwytpemberianobat" class="nav-link">
                  <i class="fa fa-list nav-icon"></i><br>
                  <p>Riwayat Pemberian Obat</p>
                </a>
              </li>              
            </ul>
          </li>

          <!-- <li class="nav-item">
            <a href="./Rawatjalan/pendaftaranRWJ/" class="nav-link" id="pendaftaranRWJ">
              <i class="far fa-file nav-icon"></i>
              <p>Pendf. Rawat Jalan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./Rawatjalan/pendaftaranRWI/" class="nav-link" id="pendaftaranRWI">
              <i class="far fa-file nav-icon"></i>
              <p>Pendf. Rawat Inap</p>
            </a>
          </li>    -->       
          
          <li class="nav-header">SETUP</li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

<!-- <div class="tab-pane fade active show" id="panel-Rawatjalan-pendaftaranRWI-" role="tabpanel" aria-labelledby="tab-Rawatjalan-pendaftaranRWI-">
  <iframe src="./Rawatjalan/pendaftaranRWI/" style="height: 792px;"></iframe>
</div> -->
