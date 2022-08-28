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
        { "data": "no_kk" },
        { "data": "nik" },
        { "data": "nama" },
        { "data": "alamat" },
        { "data": "alamat_usaha" },
        { "data": "penghasilan" },
        { "data": "pengeluaran" },
        { "data": "tanggungan" },
        { "data": "kelayakan_hunian" },
        { "data": "surat_rekomendasi" },
        { "data": "button" },
        ]
      });


    });
    $(document).on( "click",".btnhapus", function() {
      var id_penduduk = $(this).attr("id_penduduk");
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
            id_penduduk: id_penduduk
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
                $.notify('Berhasil Hapus Data Penduduk');
                var table = $('#table_cust').DataTable(); 
                table.ajax.reload( null, false );
              }else{
                swal("Error","Tidak dapat hapus data penduduk, error : "+data.error,"error");
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
      var id_penduduk = $("#txtid").val();
      var nik =  $("#txtnik").val();
      var kk =  $("#txtkk").val();
      var nama =  $("#txtnama").val();
      var alamat = $("#txtalamat").val();
      var alamat_usaha =  $("#txtalamat_usaha").val();
      var penghasilan =  $("#txtpenghasilan").val();
      var pengeluaran =  $("#txtpengeluaran").val();
      var tanggungan =  $("#txttanggungan").val();
      var kelayakan_hunian =  $("#txtkelayakan_hunian").val();
      var surat_rekomendasi =  $("#txtsurat_rekomendasi").val();
      var crud = $("#crudmethod").val();

      var value = {
        id_penduduk : id_penduduk,
        nik : nik,
        kk : kk,
        nama : nama,
        alamat : alamat,    
        alamat_usaha : alamat_usaha,
        penghasilan : penghasilan,
        pengeluaran : pengeluaran,
        tanggungan : tanggungan,
        kelayakan_hunian : kelayakan_hunian,
        surat_rekomendasi : surat_rekomendasi,
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
              $("#txtnik").focus();
              $("#txtkk").val("");
              $("#txtnama").val("");
              $("#txtalamat").val("");
              $("#txtalamat_usaha").val("");
              $("#txtpenghasilan").val("");
              $("#txtpengeluaran").val("");
              $("#txtkelayakan_hunian").val("");
              $("#txttanggungan").val("");
              $("#txtsurat_rekomendasi").val("");
              $("#crudmethod").val("N");
              $("#txtid").val("0");
            }else{
              swal("Error","Tidak dapat menyimpan nilai siswa, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $.notify('Berhasil update nilai');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
              $("#txtnama").focus();
            }else{
             swal("Error","Tidak dapat update nilai, error : "+data.error,"error");
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
      var id_penduduk=$(this).attr("id_penduduk");
      var value = {
        id_penduduk: id_penduduk
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
          $("#txtid").val(data.id_penduduk);
          $("#txtnik").val(data.nik);
          $("#txtkk").val(data.kk);
          $("#txtnama").val(data.nama);
          $("#txtalamat").val(data.alamat);
          $("#txtnama").val(data.alamat_usaha);
          $("#txtalamat_usaha").val(data.penghasilan);
          $("#txtpenghasilan").val(data.pengeluaran);
          $("#txtpengeluaran").val(data.tanggungan);
          $("#txtkelayakan_hunian").val(data.kelayakan_hunian);
          $("#txttanggungan").val(data.tanggungan);
          $("#txtsurat_rekomendasi").val(data.surat_rekomendasi);

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
    });