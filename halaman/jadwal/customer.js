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
          "type": "POST"
        },
        "columns": [
        { "data": "urutan" },
        { "data": "matpel"},
        { "data": "ujianke"},
        { "data": "mulai"},
        { "data": "selesai"},
        { "data": "jenis"},
        { "data": "kelas"},
        { "data": "button"}
        ]
      });
    });
   
    $(document).on("click","#btnadd",function(){
        $("#modalcust").modal("show");
        $("#txtke").val("");
        $("#txtmatpel").val("");
        $("#txtmulai").val("");
        $("#txtselesai").val("");
        $("#txtjenis").val("");
        $("#txtkelas").val("");
        $("#crudmethod").val("N");
        $("#txtid").val("0");
    });
    $(document).on( "click",".btnhapus", function() {
      var id_jadwal = $(this).attr("id_jadwal");
      var ujianke = $(this).attr("ujianke");
      swal({   
        title: "Hapus jadwal ujian?",   
        text: "Hapus jadwal ujian : "+ujianke+" ?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Delete",   
        closeOnConfirm: true }, 
        function(){   
          var value = {
            id_jadwal: id_jadwal
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
                $.notify('Berhasil hapus jadwal ujian');
                var table = $('#table_cust').DataTable(); 
                table.ajax.reload( null, false );
              }else{
                swal("Error","Tidak dapat menghapus jadwal ujian, error : "+data.error,"error");
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
      var ujianke= $("#txtke").val();
      var matpel= $("#txtmatpel").val();
      var jenis= $("#txtjenis").val();
      var kelas = $("#txtkelas").val();
      var mulai = $("#txtmulai").val();
      var selesai = $("#txtselesai").val();
      var id_jadwal= $("#txtid").val();
      var crud=$("#crudmethod").val();
      if(ujianke == '' || ujianke == null ){
        swal("Warning","Silahkan isi data ini terlebih dahulu","warning");
        $("#txtnama").focus();
        return;
      }
      var value = {
        id_jadwal : id_jadwal,
        ujianke:ujianke,
        matpel:matpel,
        jenis:jenis,
        kelas:kelas,
        mulai:mulai,
        selesai:selesai,
       	crud : crud
      };
      $.ajax(
      {
        url : "save.php",
        type: "POST",
        dataType: 'script',
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          if(data.crud == 'N'){
            if(data.result == 1){
              $.notify('Berhasil menyimpan data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
              $("#modalcust").modal("hide");
              $("#txtke").val("");
              $("#txtmatpel").val("");
              $("#txtjenis").val("");
              $("#txtkelas").val("");
              $("#txtmulai").val("");
              $("#txtselesai").val("");
              $("#crudmethod").val("N");
              $("#txtid").val("0");
            }else{
              swal("Error","Tidak dapat menyimpan jadwal ujian, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $.notify('Berhasil update data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
              $("#txtnama").focus();
            }else{
             swal("Error","Tidak dapat update jadwal, error : "+data.error,"error");
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
      var id_jadwal=$(this).attr("id_jadwal");
      var value = {
        id_jadwal: id_jadwal
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
          $("#txtke").focus();
          $("#txtke").val(data.ujianke);
          $("#txtmatpel").val(data.matpel);
          $("#txtmulai").val(data.mulai);
          $("#txtselesai").val(data.selesai);
          $("#txtjenis").val(data.jenis);
          $("#txtkelas").val(data.kelas);
          $("#txtid").val(data.id_jadwal);
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