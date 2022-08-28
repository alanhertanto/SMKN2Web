<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Penduduk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../../assets/dt/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dt/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../assets/dt/dist/css/skins/_all-skins.min.css">

    <!-- SweetAlert  style -->
    <link rel="stylesheet" href="../../assets/dt/plugins/sweetalert/sweetalert.css">

    <!-- responsive datatables -->
     <link rel="stylesheet" href="../../assets/dt/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>
        <!-- Site wrapper -->
        <div class="wrapper" style="margin-left:-120px;">
          <!-- Left side column. contains the sidebar -->
          <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
              <!-- Default box -->

              <form action="register.php" method="post" enctype="multipart/form-data">
              <div id="modalcust" class="modal">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="../../index.php">Kembali Ke Halaman Login</a>
                      <h4 class="modal-title">Data Siswa</h4>
                    </div>
                    <!--modal header-->
                    <div class="modal-body">
                      <div class="pad" id="infopanel"></div>
                      <div class="form-horizontal">
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">NISN</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="nisn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3  control-label">Nama</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="nama">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Alamat</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="alamat">
                            </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Tanggal Lahir</label>
                          <div class="col-sm-9">
                              <input type="date" class="form-control" name="tgl">
                            </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Tempat Lahir</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" name="tempat">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Kelas</label>
                          <div class="col-sm-9">
                              <select class="form-control" name="kelas">
                                <option value="">---</option>
                                <option value="RPL1">RPL1</option>
                                <option value="RPL2">RPL2</option>
                                <option value="RPL3">RPL3</option>
                                <option value="RPL4">RPL4</option>
                                <option value="RPL5">RPL5</option>
                                <option value="RPL6">RPL6</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                                <select class="form-control" name="jk" >
                                  <option value="">---</option>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Foto</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="file">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label"></label>
                          <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary " id="btnsave"><i class="fa fa-save"></i> Save</button></div>
                        </div>
                      </div>
                      <!--modal footer-->
                    </div>
                    <!--modal-content-->
                  </div>
                  <!--modal-dialog modal-lg-->
                </div>
                <!--form-kantor-modal-->
              </div>
            </form>

            </section><!-- /.content -->

            <!-- ========================================================================================================== -->

          </div><!-- /.content-wrapper -->
          <!-- Control Sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
</section>
</div>
</div>
    <!-- jQuery 2.1.4 -->
    <script src="../../assets/dt/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../assets/dt/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../assets/dt/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../assets/dt/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dt/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/dt/dist/js/demo.js"></script>
    <!-- SweetAlert -->
    <script src="../../assets/dt/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Bootstrap-notify -->
    <script src="../../assets/dt/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="../../assets/dt/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/dt/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../../assets/dt/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript">
    $(window).on('load', function() {
        $('#modalcust').modal('show');
    });
</script>
  </body>
  </html>
