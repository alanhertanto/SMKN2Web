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
      { "data": "kelas"},
      { "data": "jk"},
      { "data": "alamat"},
      { "data": "tanggal_lahir"},
      { "data": "tempat_lahir"},
      { "data": "foto",
        render:function ( data, type, row, meta ) {
          return '<img height="140px" width="140px" src="../../assets/img/soal/'+data+'"/>';
      }},
      { "data": "button"}
      ]
    });
  });
  $(document).on("click","#btnadd",function(){
        $("#modalcust").modal("show");
        $("#txtsoal").val("");
        $("#txtpilihanc").val("");
        $("#txtpilihana").val("");
        $("#txtjenis").val("");
        $("#txtpilihanb").val("");
        $("#txtfoto").val("");
        $("#txtpilihand").val("");
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
            url : "deletesoal.php",
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
      var soal = $("#txtsoal").val();
      var pilihanC = $("#txtpilihanc").val();
      var pilihanA = $("#txtpilihana").val();
      var jawaban = $("#txtjawaban").val();
      var pilihanB = $("#txtpilihanb").val();
      var jenis = $("#txtjenis").val();
      var pilihanD= $("#txtpilihand").val();
      var id_soal= $("#txtid").val();
      var crud=$("#crudmethod").val();
      var file_data = $('#txtfoto').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('file', file_data)
      form_data.append('pilihanC',pilihanC)
      form_data.append('pilihanA',pilihanA)
      form_data.append('jawaban',jawaban)
      form_data.append('pilihanB',pilihanB)
      form_data.append('jenis',jenis)
      form_data.append('soal',soal)
      form_data.append('pilihanD',pilihanD)
      form_data.append('crud',crud)
      form_data.append('id_soal',id_soal)
      if(soal == '' || soal == null ){
        swal("Warning","Silahkan isi data ini terlebih dahulu","warning");
        $("#txtsoal").focus();
        return;
      }
      var value = {
        id_soal : id_soal,
        soal:soal,
        jawaban:jawaban,
        pilihanD:pilihanD,
        pilihanC:pilihanC,
        pilihanA:pilihanA,
        pilihanB : pilihanB,
        jenis : jenis,
        crud : crud
      };
      $.ajax(
      {
        url : "simpansoal.php",
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
                $("#txtsoal").val("");
                $("#txtpilihand").val("");
                $("#txtjawaban").val("");
                $("#txtpilihanc").val("");
                $("#txtpilihanA").val("");
                $("#txtjenis").val("");
                $("#txtpilihanb").val("");
                $("#txtfoto").val("");
                $("#crudmethod").val("N");
                $("#txtid").val("0");
            }else{
              swal("Error","Tidak dapat menyimpan data akun soal, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $.notify('Berhasil update data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, true );
              $("#txtsoal").focus();
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
        url : "getDetailsoal.php",
        type: "POST",
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          $("#crudmethod").val("E");

          $("#txtsoal").focus();
          $("#txtsoal").val(data.soal);
          $("#txtpilihanc").val(data.pilihanC);
          $("#txtjawaban").val(data.jawaban);
          $("#txtpilihanA").val(data.pilihanA);
          $("#txtpilihanb").val(data.pilihanB);
          $("#txtjenis").val(data.jenis);
          $("#txtpilihand").val(data.pilihanD);
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