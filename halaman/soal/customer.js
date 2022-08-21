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
        { "data": "soal"},
        { "data": "pilihanA"},
        { "data": "pilihanB"},
        { "data": "pilihanC"},
        { "data": "pilihanD"},
        { "data": "jawaban"},
        { "data": "jenis"},
        { "data": "guru"},
        { "data": "kelas"},
        { "data": "button"}
        ]
      });
    });
   
    $(document).on("click","#btnadd",function(){
        $("#modalcust").modal("show");
        $("#txtke").val("");
        $("#txtsoal").val("");
        $("#txtpilihana").val("");
        $("#txtpilihanb").val("");
        $("#txtpilihanc").val("");
        $("#txtpilihand").val("");
        $("#txtjawaban").val("");
        $("#txtjenis").val("");
        $("#txtkelas").val("");
        $("#crudmethod").val("N");
        $("#txtid").val("0");
    });
    $(document).on( "click",".btnhapus", function() {
      var id_soal = $(this).attr("id_soal");
      var soal = $(this).attr("soal");
      swal({   
        title: "Hapus guru?",   
        text: "Hapus guru : "+soal+" ?",   
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
                table.ajax.reload( null, false );
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
      var ujianke= $("#txtke").val();
      var soal= $("#txtsoal").val();
      var matpel= $("#txtmatpel").val();
      var jenis= $("#txtjenis").val();
      var kelas = $("#txtkelas").val();
      var jawaban = $("#txtjawaban").val();
      var pilihanA = $("#txtpilihana").val();
      var pilihanB = $("#txtpilihanb").val();
      var pilihanC = $("#txtpilihanc").val();
      var pilihanD = $("#txtpilihand").val();
      var id_soal= $("#txtid").val();
      var crud=$("#crudmethod").val();
      if(soal == '' || soal == null ){
        swal("Warning","Silahkan isi data ini terlebih dahulu","warning");
        $("#txtnama").focus();
        return;
      }
      var value = {
        id_soal : id_soal,
        ujianke:ujianke,
        soal:soal,
        pilihanA:pilihanA,
        pilihanB:pilihanB,
        pilihanC:pilihanC,
        pilihanD:pilihanD,
        matpel:matpel,
        jenis:jenis,
        kelas:kelas,
        jawaban:jawaban,
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
              $("#txtsoal").val("");
              $("#txtpilihana").val("");
              $("#txtpilihanb").val("");
              $("#txtpilihanc").val("");
              $("#txtpilihand").val("");
              $("#txtjawaban").val("");
              $("#txtjenis").val("");
              $("#txtkelas").val("");
              $("#crudmethod").val("N");
              $("#txtid").val("0");
            }else{
              swal("Error","Tidak dapat menyimpan data guru, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $.notify('Berhasil update data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
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
          $("#txtsoal").focus();
          $("#txtke").val(data.ujianke);
          $("#txtsoal").val(data.soal);
          $("#txtpilihana").val(data.pilihanA);
          $("#txtpilihanb").val(data.pilihanB);
          $("#txtpilihanc").val(data.pilihanC);
          $("#txtpilihand").val(data.pilihanD);
          $("#txtjawaban").val(data.jawaban);
          $("#txtjenis").val(data.jenis);
          $("#txtkelas").val(data.kelas);
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