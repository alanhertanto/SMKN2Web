<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data guru</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- SweetAlert  style -->
    <link rel="stylesheet" href="../../plugins/sweetalert/sweetalert.css">

    <!-- responsive datatables -->
     <link rel="stylesheet" href="../../plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>
        <!-- Site wrapper -->
        <div class="wrapper">
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
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
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
                      <h4 class="modal-title">Data guru</h4>
                    </div>
                    <!--modal header-->
                    <div class="modal-body">
                      <div class="pad" id="infopanel"></div>
                      <div class="form-horizontal">
                        <div class="form-group"> 
                          <label class="col-sm-3  control-label">NIP</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="txtnik" readonly>
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
                          <label class="col-sm-3  control-label">Mata Pelajaran</label>
                          <div class="col-sm-9">
                                <select class="form-control" id="txtmatpel" >
                                  <option value="SIMULASI INFORMASI DAN KOMUNIKASI DIGITAL">SIMULASI INFORMASI DAN KOMUNIKASI DIGITAL</option>
                                </select>
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

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- SweetAlert -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Bootstrap-notify -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../../plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript">
 $(document).ready( function () 
    {
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
          "type": "POST"
        },
        "columns": [
        { "data": "urutan" },
        { "data": "nip" },
        { "data": "nama" },
        { "data": "matpel" },
        { "data": "button" },
        ]
      });


    });
    $(document).on( "click",".btnhapus", function() {
      var id_guru = $(this).attr("id_guru");
      var nama = $(this).attr("nama");
      swal({   
        title: "Delete Data?",   
        text: "Delete Data : "+nama+" ?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Hapus",   
        closeOnConfirm: true }, 
        function(){   
          var value = {
            id_guru: id_guru
          };
          $.ajax(
          {
            url : "delete.php",
            type: "POST",
            data : value,
            success: function(data, textStatus, jqXHR)
            {
              var data = jQuery.parseJSON(data);
              if(data.result ==1){
                $.notify('Berhasil Hapus Data guru');
                var table = $('#table_cust').DataTable(); 
                table.ajax.reload( null, false );
              }else{
                swal("Error","Tidak dapat hapus data guru, error : "+data.error,"error");
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
      var id_guru = $("#txtid").val();
      var nip =  $("#txtnip").val();
      var nama =  $("#txtnama").val();
      var matpel =  $("#txtmatpel").val();
      var crud = $("#crudmethod").val();

      var value = {
        id_guru : id_guru,
        nama : nama,
        nip : nip,
        matpel : matpel,
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
              table.ajax.reload( null, false );
              $("#modalcust").modal('hide');
              $("#txtnip").focus();
              $("#txtnip").val("");
              $("#txtnama").val("");
              $("#txtmatpel").val("");
              $("#crudmethod").val("N");
              $("#txtid").val("0");
            }else{
              swal("Error","Tidak dapat menyimpan data guru, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $("#modalcust").modal('hide');
              $.notify('Berhasil update nilai');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, true );
              $("#txtnama").focus();
            }else{
             swal("Error","Tidak dapat update data guru, error : "+data.error,"error");
            }
          }else{
            swal("Error","urutan salah","error");
          }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
           swal("Error!", textStatus, "error");
        }
      });
    });
    $(document).on("click",".btnedit",function(){
      var id_guru=$(this).attr("id_guru");
      var value = {
        id_guru: id_guru
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
          $("#txtid").val(data.id_guru);
          $("#txtnip").val(data.nip);
          $("#txtnama").val(data.nama);
          $("#txtmatpel").val(data.matpel);

          $("#modalcust").modal('show');
          $("#txtnama").focus();
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
    });    </script>
  </body>
  </html>
