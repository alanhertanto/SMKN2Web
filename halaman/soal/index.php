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
                 <button type="submit" class="btn btn-primary " id="btnadd" name="btnadd"><i class="fa fa-plus"></i> Tambah Data soal</button>
                 <br>
                 <br>
                 <div class="box-body">
                  <table id="table_cust" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr class="tableheader">
                        <th>#</th>
                        <th>Soal</th>
                        <th>Pilihan A</th>
                        <th>Pilihan B</th>
                        <th>Pilihan C</th>
                        <th>Pilihan D</th>
                        <th>Jawaban</th>
                        <th>Ujian Ke</th>
                        <th>Jenis Ujian</th>
                        <th>Button</th>
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
                      <h4 class="modal-title">Data Soal</h4>
                    </div>
                    <!--modal header-->
                    <div class="modal-body">
                      <div class="pad" id="infopanel"></div>
                      <div class="form-horizontal">
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Soal</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtsoal">
                              <input type="hidden" id="crudmethod" value="N"> 
                              <input type="hidden" id="txtid" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3  control-label">Pilihan A</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtpilihana">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Pilihan B</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtpilihanb">
                            </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Pilihan C</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtpilihanc">
                            </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Pilihan D</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtpilihand">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Jawaban</label>
                          <div class="col-sm-9">
                              <select class="form-control" id="txtjawaban">
                                <option value="">---</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">jenisujian</label>
                          <div class="col-sm-9">
                              <select class="form-control" id="txtjenisujian">
                                <option value="">---</option>
                                <option value="Ulangan">Ulangan</option>
                                <option value="UTS">UTS</option>
                                <option value="UAS">UAS</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">Ulangan Ke</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtulanganke">
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
      { "data": "soal"},
      { "data": "pilihanA"},
      { "data": "pilihanB"},
      { "data": "pilihanC"},
      { "data": "pilihanD"},
      { "data": "jawaban"},
      { "data": "ulanganke"},
      { "data": "jenis_ujian"},
      { "data": "button"}
      ]
    });
  });
  $(document).on("click","#btnadd",function(){
        $("#modalcust").modal("show");
        $("#txtpilihana").val("");
        $("#txtpilihanb").val("");
        $("#txtpilihanc").val("");
        $("#txtpilihand").val("");
        $("#txtsoal").val("");
        $("#txtulanganke").val("");
        $("#txtjenisujian").val("");
        $("#txtjawaban").val("");
        $("#crudmethod").val("N");
        $("#txtid").val("0");
    });
  $(document).on( "click",".btnhapus", function() {
      var id_soal = $(this).attr("id_soal");
      var soal = $(this).attr("soal");
      swal({   
        title: "Hapus soal?",   
        text: "Hapus soal : "+soal+" ?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Delete",   
        closeOnConfirm: true }, 
        function(){   
          var value = {
            id_soal: id_soal
          };
          $.ajax(
          {
            url : "delete.php",
            type: "POST",
            data : value,
            dataType: 'script',
            success: function(data, textStatus, jqXHR)
            {
              var data = jQuery.parseJSON(data);
              if(data.result ==1){
                $.notify('Berhasil hapus data soal');
                var table = $('#table_cust').DataTable(); 
                table.ajax.reload( null, true );
              }else{
                swal("Error","Tidak dapat menghapus data soal, error : "+data.error,"error");
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
      var pilihana =  $("#txtpilihana").val();
      var pilihanb =  $("#txtpilihanb").val();
      var pilihanc = $("#txtpilihanc").val();
      var pilihand = $("#txtpilihand").val();
      var soal = $("#txtsoal").val();
      var jenisujian =   $("#txtjenisujian").val();
      var jawaban = $("#txtjawaban").val();
      var ulanganke = $("#txtulanganke").val();
      var id_soal= $("#txtid").val();
      var crud=$("#crudmethod").val();
      var value = {
        id_soal : id_soal,
        pilihana:pilihana,
        pilihanb:pilihanb,
        soal:soal,
        jenisujian:jenisujian,
        ulanganke:ulanganke,
        jawaban:jawaban,
        pilihanc : pilihanc,
        pilihand : pilihand,
        crud : crud
      };
      $.ajax(
      {
        url : "save.php",
        type: "POST",
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          if(data.crud == 'N'){
            if(data.result == 1){
              $.notify('Berhasil menyimpan data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, true );
                $("#txtpilihana").val("");
                $("#txtpilihanb").val("");
                $("#txtpilihanc").val("");
                $("#txtpilihand").val("");
                $("#txtsoal").val("");
                $("#txtulanganke").val("");
                $("#txtjenisujian").val("");
                $("#txtjawaban").val("");
                $("#crudmethod").val("N");
                $("#txtid").val("0");
                    }else{
              swal("Error","Tidak dapat menyimpan data akun soal, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result ==1){
              $.notify('Berhasil update data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, true );
              $("#txtpilihana").focus();
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
      var id_soal=$(this).attr("id_soal");
      var value = {
        id_soal: id_soal
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

          $("#txtpilihana").focus();
          $("#txtpilihana").val(data.pilihana);
          $("#txtsoal").val(data.soal);
          $("#txtjawaban").val(data.jawaban);
          $("#txtjenisujian").val(data.jenisujian);
          $("#txtpilihand").val(data.pilihand);
          $("#txtpilihanc").val(data.pilihanc);
          $("#txtpilihanb").val(data.pilihanb);
          $("#txtulanganke").val(data.ulanganke);
          $("#txtid").val(data.id_soal);
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
