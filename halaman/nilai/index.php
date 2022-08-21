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
              <div class="box">
                <div class="box-body">
                 <div class="box-body">
                  <table id="table_cust" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr class="tableheader">
                        <th>#</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                        <th>Ulangan Ke</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div id="modalcust" class="modal">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <h4 class="modal-title">Data Siswa</h4>
                    </div>
                    <!--modal header-->
                    <div class="modal-body">
                      <div class="pad" id="infopanel"></div>
                      <div class="form-horizontal">
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">NISN</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtnisn">
                              <input type="hidden" id="crudmethod" value="N"> 
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3  control-label">Nama</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtnama">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Alamat</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtalamat">
                            </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Tanggal Lahir</label>
                          <div class="col-sm-9">
                              <input type="date" class="form-control" id="txttgl">
                            </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Tempat Lahir</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txttempat">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Kelas</label>
                          <div class="col-sm-9">
                              <select class="form-control" id="txtkelas">
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
                                <select class="form-control" id="txtjk" >
                                  <option value="">---</option>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Foto</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" id="txtfoto">
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
    $(document).ready( function () {
    $('#table_cust').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "responsive": true,
      "autoWidth": false,
      "pageLength": 10,
      "ajax": {
        "url": "data.php",
        "type": "GET"
      },
      "columns": [
      { "data": "urutan" },
      { "data": "nisn"},
      { "data": "nama"},
      { "data": "nilai"},
      { "data": "ulanganke"},
      ]
    });
  });
  $(document).on("click","#btnadd",function(){
        $("#modalcust").modal("show");
        $("#txtnama").val("");
        $("#txalamat").val("");
        $("#txttgl").val("");
        $("#txttempat").val("");
        $("#txtnisn").val("");
        $("#txtkelas").val("");
        $("#txtjk").val("");
        $("#crudmethod").val("N");
        $("#txtid").val("0");
    });
  $(document).on( "click",".btnhapus", function() {
      var id_siswa = $(this).attr("id_siswa");
      var siswa = $(this).attr("siswa");
      swal({   
        title: "Hapus siswa?",   
        text: "Hapus siswa : "+siswa+" ?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Delete",   
        closeOnConfirm: true }, 
        function(){   
          var value = {
            id_siswa: id_siswa
          };
          $.ajax(
          {
            url : "deletesiswa.php",
            type: "POST",
            data : value,
            dataType: 'script',
            success: function(data, textStatus, jqXHR)
            {
              var data = jQuery.parseJSON(data);
              if(data.result ==1){
                $.notify('Berhasil hapus data siswa');
                var table = $('#table_cust').DataTable(); 
                table.ajax.reload( null, true );
              }else{
                swal("Error","Tidak dapat menghapus data siswa, error : "+data.error,"error");
              }

            },
            error: function(jqXHR, textStatus, errorThrown)
            {
             swal("Error!", textStatus, "error");
            }
          });
        });
    });
    $(document).on("click","#btnsave",function(){
      var nama =  $("#txtnama").val();
      var alamat =  $("#txtalamat").val();
      var tgl = $("#txttgl").val();
      var tempat = $("#txttempat").val();
      var nisn = $("#txtnisn").val();
      var kelas =   $("#txtkelas").val();
      var jk = $("#txtjk").val();
      var id_siswa= $("#txtid").val();
      var crud=$("#crudmethod").val();
      var file_data = $('#txtfoto').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('file', file_data)
      form_data.append('nama',nama)
      form_data.append('alamat',alamat)
      form_data.append('tempat',tempat)
      form_data.append('nisn',nisn)
      form_data.append('tgl',tgl)
      form_data.append('kelas',kelas)
      form_data.append('jk',jk)
      form_data.append('crud',crud)
      form_data.append('id_siswa',id_siswa)
      if(nama == '' || nama == null ){
        swal("Warning","Silahkan isi data ini terlebih dahulu","warning");
        $("#txtnama").focus();
        return;
      }
      var value = {
        id_siswa : id_siswa,
        nama:nama,
        alamat:alamat,
        nisn:nisn,
        kelas:kelas,
        jk:jk,
        tgl : tgl,
        tempat : tempat,
        crud : crud
      };
      $.ajax(
      {
        url : "save.php",
        type: "POST",
        dataType: 'script',
        data : form_data,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          if(data.crud == 'N'){
            if(data.result == 1){
              $.notify('Berhasil menyimpan data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, true );
                $("#txtnama").val("");
                $("#txalamat").val("");
                $("#txttgl").val("");
                $("#txttempat").val("");
                $("#txtnisn").val("");
                $("#txtkelas").val("");
                $("#txtjk").val("");
                $("#txtfoto").val("");
                $("#crudmethod").val("N");
                $("#txtid").val("0");
            }else{
              swal("Error","Tidak dapat menyimpan data akun siswa, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result ==1){
              $.notify('Berhasil update data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, true );
              $("#txtnama").focus();
            }else{
             swal("Error","Tidak dapat update data, error : "+data.error,"error");
            }
          }else{
            swal("Error","Terjadi Kesalahan dalam penyimpanan"+data.error,"error");
          }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
           swal("Error!", textStatus, "error");
        }
      });
    });
    $(document).on("click",".btnedit",function(){
      var id_siswa=$(this).attr("id_siswa");
      var value = {
        id_siswa: id_siswa
      };
      $.ajax(
      {
        url : "get_cust.php",
        type: "POST",
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          $("#crudmethod").val("E");

          $("#txtnama").focus();
          $("#txtnama").val(data.nama);
          $("#txtnisn").val(data.nisn);
          $("#txtjk").val(data.jk);
          $("#txtkelas").val(data.kelas);
          $("#txttempat").val(data.tempat_lahir);
          $("#txttgl").val(data.tanggal_lahir);
          $("#txtalamat").val(data.alamat);
          $("#txtid").val(data.id_siswa);
          $("#modalcust").modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
          swal("Error!", textStatus, "error");
        }
      });
    });
    $.notifyDefaults({
      type: 'success',
      delay: 500
    });
    </script>
  </body>
  </html>
