<?php
include ('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
    <link href="css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style>
    .modal-full {
      min-width: 100%;
      margin: 0;
    }
    .modal-full .modal-content {
      min-height: 100vh;
    }
    .modal-fix {
      min-width: 1024px;
      margin: 0;
    }
    .modal-fix .modal-content {
      min-height: 100vh;
    }
    .modal .tab-content {
      min-height: 50vh;
    }
    .nav-pills.nav-wizard > li {
      position: relative;
      overflow: visible;
      border-right: 8px solid transparent;
      border-left: 8px solid transparent;
    }

    .nav-pills.nav-wizard > li + li {
      margin-left: 0;
    }

    .nav-pills.nav-wizard > li:first-child {
      border-left: 0;
    }

    .nav-pills.nav-wizard > li:first-child a {
      border-radius: 5px 0 0 5px;
    }

    .nav-pills.nav-wizard > li:last-child {
      border-right: 0;
    }

    .nav-pills.nav-wizard > li:last-child a {
      border-radius: 0 5px 5px 0;
    }

    .nav-pills.nav-wizard > li a {
      border-radius: 0;
      background-color: #eee;
    }

    .nav-pills.nav-wizard > li:not(:last-child) a:after {
      position: absolute;
      content: "";
      top: 0px;
      right: -20px;
      width: 0px;
      height: 0px;
      border-style: solid;
      border-width: 20px 0 20px 20px;
      border-color: transparent transparent transparent #eee;
      z-index: 150;
    }

    .nav-pills.nav-wizard > li:not(:first-child) a:before {
      position: absolute;
      content: "";
      top: 0px;
      left: -20px;
      width: 0px;
      height: 0px;
      border-style: solid;
      border-width: 20px 0 20px 20px;
      border-color: #eee #eee #eee transparent;
      z-index: 150;
    }

    .nav-pills.nav-wizard > li:hover:not(:last-child) a:after {
      border-color: transparent transparent transparent #aaa;
    }

    .nav-pills.nav-wizard > li:hover:not(:first-child) a:before {
      border-color: #aaa #aaa #aaa transparent;
    }

    .nav-pills.nav-wizard > li:hover a {
      background-color: #aaa;
      color: #fff;
    }

    .nav-pills.nav-wizard > li:not(:last-child) a.active:after {
      border-color: transparent transparent transparent #428bca;
    }

    .nav-pills.nav-wizard > li:not(:first-child) a.active:before {
      border-color: #428bca #428bca #428bca transparent;
    }

    .nav-pills.nav-wizard > li a.active {
      background-color: #428bca;
    }
    </style>
	 <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>APM</title>
  </head>
  <body>
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-2"><a href="antrian.php">APM</a></h1>
      <h3 class="display-6">Anjungan Pasien Mandiri Pelayanan Rawat Jalan</h3>
      <h2 class="display-5"><?php echo $dataSettings['nama_instansi']; ?></h2>
    </div>
    <br><br>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm" data-toggle="modal" data-target="#antrian">
          <div class="card-body btn btn-lg btn-success">
            <ul class="list-unstyled mt-3 mb-4">
              <span style="font-size: 120px; color: white;"><i class="fas fa-question"></i></span>
            </ul>
            <a href="#" style="text-decoration: none; color: white;"><h1 class="display-4">ANTRIAN</h1></a>
          </div>
        </div>
     
      </div>
    </div>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center text-danger">
      <h3 class="display-6">Silahkan hubungi petugas jika anda mengalami kesulitan.</h3>
    </div>

    <!-- Modal Antrian -->
	
    <div  class="modal fade" id="antrian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg  modal-fix" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalCenterTitle">Antrian poli, Kasir dan Apotek</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>		
          </div>
          <div class="modal-body">
            <div class="row" class="col-md-12">
			<div class="col-4 pt-1 pb-1">
              <div id="printAntrianLoket" style="display: none;" class="cetak">
                <div style="width: 180px; font-family: Tahoma; margin-top: 10px; margin-right: 5px; margin-bottom: 100px; margin-left: 15px; font-size: 21px !important;">
                  <div id="print_nomor_loket"></div>
                 PENDAFTARAN
                </div>
              </div>
              <div id="display_nomor_loket"></div>
              <form role="form" id="formloket" name="formloket">
                <button type="submit" class="btn btn-lg btn-danger btn-block" id="btnKRM" value="Submit" name="btnKRM" onclick="printDiv('printAntrianLoket');">PENDAFTARAN</button>
              </form>
            </div>
    
            <div class="col-4 pt-1 pb-1">
              <div id="printAntrianCS" style="display: none;" class="cetak">
                <div style="width: 180px; font-family: Tahoma; margin-top: 10px; margin-right: 5px; margin-bottom: 100px; margin-left: 15px; font-size: 21px !important;">
                  <div id="print_nomor_cs"></div>
                  ANTRIAN KASIR
                </div>
              </div>
              <div id="display_nomor_cs"></div>
              <form role="form" id="formcs" name="formcs">
                <button type="submit" class="btn btn-lg btn-danger btn-block" id="btnKRMCS" value="Submit" name="btnKRMCS" onclick="printDiv('printAntrianCS');">ANTRIAN KASIR</button>
              </form>
            </div>
            <div class="col-4 pt-1 pb-1">
              <div id="printAntrianpr" style="display: none;" class="cetak">
                <div style="width: 180px; font-family: Tahoma; margin-top: 10px; margin-right: 5px; margin-bottom: 100px; margin-left: 15px; font-size: 21px !important;">
                  <div id="print_nomor_pr"></div>
                  ANTRIAN APOTEK
                </div>
              </div>
              <div id="display_nomor_pr"></div>
              <form role="form" id="formpr" name="formpr">
                <button type="submit" class="btn btn-lg btn-danger btn-block" id="btnKRMpr" value="Submit" name="btnKRMpr" onclick="printDiv('printAntrianpr');">ANTRIAN APOTEK</button>
              </form>
            </div>
			</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
    </div>
 </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/gijgo.min.js" type="text/javascript"></script>

    <script>
    $(document).ready(function() {
      $("#display_nomor_loket").load("get-antrian.php?aksi=tampilloket");
      $("#print_nomor_loket").load("get-antrian.php?aksi=printloket");
      $("#display_nomor_cs").load("get-antrian.php?aksi=tampilcs");
      $("#print_nomor_cs").load("get-antrian.php?aksi=printcs");
      $("#display_nomor_pr").load("get-antrian.php?aksi=tampilapotek");
      $("#print_nomor_pr").load("get-antrian.php?aksi=printapotek");
    })
    </script>
    <script>
    function printDiv(eleId){
        var PW = window.open('', '_blank', 'Print content');
        //Use css for print style
        //PW.document.write('<style>.cetak {width: 250px; font-family: Tahoma; margin-top: 10px; margin-right: 5px; margin-bottom: 50px; margin-left: 5px; font-size: 11px !important;}</style>');
        PW.document.write(document.getElementById(eleId).innerHTML);
        PW.document.close();
        PW.focus();
        PW.print();
        PW.close();
        // Redirect after close
        window.location.href = "index.php";
    }
    </script>

    <script>
    function printSEP(eleId){
        var PW = window.open('', '_blank', 'Print content');
        //Use css for print style
        PW.document.write('<link rel="stylesheet" href="../css/bootstrap.min.css">');
        PW.document.write(document.getElementById(eleId).innerHTML);
        PW.document.close();
        PW.focus();
        PW.print();
        PW.close();
        // Redirect after close
        window.location.href = "index.php";
    }
    </script>

    <script>
    $(function () {

      $('#infoContinue').click(function (e) {
        var no_rkm_medis_daftar = $('#no_rm').val();
        $.ajax({
          type:'POST',
          url:'get-daftar.php',
          dataType: "json",
          data: {no_rkm_medis_daftar:no_rkm_medis_daftar},
          success:function(data){
            if(data.status == 'ok'){
              e.preventDefault();
              $('.progress-bar').css('width', '70%');
              $('.progress-bar').html('Step 2 of 3');
              $('#myTab a[href="#poli"]').tab('show');
              $('#no_rkm_medis_daftar').val(data.result.no_rkm_medis);
              $('#nm_pasien_daftar').val(data.result.nm_pasien);
              $('#alamat_daftar').val(data.result.alamat);
            }else{
              alert("Detail nomor rekam medik tidak ditemukan...");
              document.getElementById("no_rm").value = "";
            }
          }
        });

        setTimeout(function() { window.location.href = "<?php echo URL; ?>"; }, 500000);

      });

      $('input[name="datepicker"]').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd',
        modal: true,
        change: function (e) {
          var no_rkm_medis_daftar = $('#no_rkm_medis_daftar').val();
          var tgl_registrasi_daftar = $('#tgl_registrasi_daftar').val();
          $.ajax({
            type:'POST',
            url:'get-poli.php',
            dataType: "json",
            data: {no_rkm_medis:no_rkm_medis_daftar, tgl_registrasi:tgl_registrasi_daftar},
            success:function(data){
              if(data.status == 'ok'){
                $("#pilih_poli_daftar").empty();
                var div_data = '<option value="">Pilih Poli</option>';
                $.each(data.result,function(i,data) {
                  div_data +="<option value="+data.kd_poli+">"+data.nm_poli+"</option>";
                });
                $(div_data).appendTo('#pilih_poli_daftar');
              } else if(data.status == 'exist'){
                alert("Anda sudah terdaftar...");
                document.getElementById("tgl_registrasi_daftar").value = "";
              } else {
                alert("Detail poli tidak ditemukan...");
                document.getElementById("tgl_registrasi_daftar").value = "";
              }
            }
          });
        }
      });

      $('select#pilih_poli_daftar').on('change',function(){
        var kd_poli_daftar = this.value;
        var tgl_registrasi_daftar = $('#tgl_registrasi_daftar').val();
        $.ajax({
          type:'POST',
          url:'get-dokter.php',
          dataType: "json",
          data: {kd_poli:kd_poli_daftar, tgl_registrasi:tgl_registrasi_daftar},
          success:function(data){
            if(data.status == 'ok'){
              $("#pilih_dokter_daftar").empty();
              $.each(data.result,function(i,data) {
                var div_data="<option value="+data.kd_dokter+">"+data.nm_dokter+"</option>";
                $(div_data).appendTo('#pilih_dokter_daftar');
              });
            }else{
              $("#pilih_dokter_daftar").empty();
              alert("Dokter tidak ditemukan...");
            }
          }
        });
      });

      $('#finish').click(function (e) {
        var no_rkm_medis_daftar = $('#no_rkm_medis_daftar').val();
        var nm_pasien_daftar = $('#nm_pasien_daftar').val();
        var alamat_daftar = $('#alamat_daftar').val();
        var tgl_registrasi_daftar = $('#tgl_registrasi_daftar').val();
        var kd_poli_daftar = $('#pilih_poli_daftar').val();
        var kd_dokter_daftar = $('#pilih_dokter_daftar').val();

        $('#no_rkm_medis_cetak').text(no_rkm_medis_daftar);
        $('#nm_pasien_cetak').text(nm_pasien_daftar);
        $('#alamat_cetak').text(alamat_daftar);
        $('#tgl_registrasi_cetak').text(tgl_registrasi_daftar);
        $('#kd_poli_cetak').text(kd_poli_daftar);
        $('#kd_dokter_cetak').text(kd_dokter_daftar);

        $.ajax({
            url:'get-poli_nama.php',
            type:'POST',
            dataType: "json",
            data:{
                kd_poli:kd_poli_daftar
            },
           success:function(data){
             if(data.status == 'ok'){
               $('#nm_poli_cetak').text(data.result.nm_poli);
             } else {
               alert('error');
             }
           }
        });

        $.ajax({
            url:'get-dokter_nama.php',
            type:'POST',
            dataType: "json",
            data:{
                kd_dokter:kd_dokter_daftar
            },
           success:function(data){
             if(data.status == 'ok'){
               $('#nm_dokter_cetak').text(data.result.nm_dokter);
             } else {
               alert('error');
             }
           }
        });

        $.ajax({
            url:'post-registrasi.php',
            type:'POST',
            dataType: "json",
            data:{
                no_rkm_medis:no_rkm_medis_daftar,
                tgl_registrasi:tgl_registrasi_daftar,
                kd_poli:kd_poli_daftar,
                kd_dokter:kd_dokter_daftar
            },
           success:function(data){
             if(data.status == 'ok'){
               //alert(data);
               $('#tgl_registrasi_final').text(data.result.tgl_registrasi);
               $('#jam_reg_final').text(data.result.jam_reg);
               $('#no_reg_final').text(data.result.no_reg);
               $('#nm_pasien_final').text(data.result.nm_pasien);
               $('#no_rkm_medis_final').text(data.result.no_rkm_medis);
               $('#alamat_final').text(data.result.alamat);
               $('#nm_dokter_final').text(data.result.nm_dokter);
               $('#nm_poli_final').text(data.result.nm_poli);
               $('#cara_bayar_final').text(data.result.png_jawab);
             } else {
               alert('error');
             }
           }
        });
        $('.progress-bar').css('width', '100%');
        $('.progress-bar').html('Step 3 of 3');
        $('#myTab a[href="#reviewPrint"]').tab('show');
        setTimeout(function() { window.location.href = "<?php echo URL; ?>"; }, 500000);
      });

    });
    </script>

    <script>
    $(function () {

      $('#infoPendaftaran').click(function (e) {
        var no_rawat = $('#no_rawat').val();
        $.ajax({
          type:'POST',
          url:'get-sep.php',
          dataType: "json",
          data: {no_rawat:no_rawat},
          success:function(data){
            if(data.status == 'ok'){
              //alert(data);
              e.preventDefault();
              var tgl_lahir = new Date(data.result.tanggal_lahir);
              var dd = String(tgl_lahir.getDate()).padStart(2, '0');
              var mm = String(tgl_lahir.getMonth() + 1).padStart(2, '0'); //January is 0!
              var yyyy = tgl_lahir.getFullYear();
              tanggal_lahir = dd + '/' + mm + '/' + yyyy;

              $('.progress-bar').css('width', '70%');
              $('.progress-bar').html('Step 2 of 3');
              $('#myTab a[href="#reviewsep"]').tab('show');
              $('#sep_no_sep').text(data.result.no_sep);
              $('#sep_tglsep').text(data.result.tglsep);
              $('#sep_no_kartu').text(data.result.no_kartu);
              $('#sep_jkel').text(data.result.jkel);
              $('#sep_nama_pasien').text(data.result.nama_pasien);
              $('#sep_no_rawat').text(data.result.no_rawat);
              $('#sep_tanggal_lahir').text(tanggal_lahir);
              $('#sep_notelep').text(data.result.notelep);
              $('#sep_peserta').text(data.result.peserta);
              $('#sep_nmpolitujuan').text(data.result.nmpolitujuan);
              $('#sep_cob').text(data.result.cob);
              $('#sep_nmppkrujukan').text(data.result.nmppkrujukan);
              $('#sep_jnspelayanan').text(data.result.jnspelayanan);
              $('#sep_nmdiagnosaawal').text(data.result.nmdiagnosaawal);
              $('#sep_klsrawat').text(data.result.klsrawat);
              $('#sep_penjamin').text(data.result.penjamin);
              $('#sep_catatan').text(data.result.catatan);
            }else{
              alert("Detail nomor perawatan tidak ditemukan...");
              document.getElementById("no_rawat").value = "";
            }
          }
        });

        setTimeout(function() { window.location.href = "<?php echo URL; ?>"; }, 500000);

      });

      $('#cetak').click(function (e) {
        var no_rawat = $('#no_rawat').val();
        $.ajax({
          type:'POST',
          url:'get-sep.php',
          dataType: "json",
          data: {no_rawat:no_rawat},
          success:function(data){
            if(data.status == 'ok'){
              //alert(data);
              e.preventDefault();
              var tgl_lahir = new Date(data.result.tanggal_lahir);
              var dd = String(tgl_lahir.getDate()).padStart(2, '0');
              var mm = String(tgl_lahir.getMonth() + 1).padStart(2, '0'); //January is 0!
              var yyyy = tgl_lahir.getFullYear();
              tanggal_lahir = dd + '/' + mm + '/' + yyyy;

              $('.progress-bar').css('width', '100%');
              $('.progress-bar').html('Step 3 of 3');
              $('#myTab a[href="#reviewCetak"]').tab('show');
              $('#_sep_no_sep').text(data.result.no_sep);
              $('#_sep_tglsep').text(data.result.tglsep);
              $('#_sep_no_kartu').text(data.result.no_kartu);
              $('#_sep_jkel').text(data.result.jkel);
              $('#_sep_nama_pasien').text(data.result.nama_pasien);
              $('#_sep_no_rawat').text(data.result.no_rawat);
              $('#_sep_tanggal_lahir').text(tanggal_lahir);
              $('#_sep_notelep').text(data.result.notelep);
              $('#_sep_peserta').text(data.result.peserta);
              $('#_sep_nmpolitujuan').text(data.result.nmpolitujuan);
              $('#_sep_cob').text(data.result.cob);
              $('#_sep_nmppkrujukan').text(data.result.nmppkrujukan);
              $('#_sep_jnspelayanan').text(data.result.jnspelayanan);
              $('#_sep_nmdiagnosaawal').text(data.result.nmdiagnosaawal);
              $('#_sep_klsrawat').text(data.result.klsrawat);
              $('#_sep_penjamin').text(data.result.penjamin);
              $('#_sep_catatan').text(data.result.catatan);

              $('#__sep_no_sep').text(data.result.no_sep);
              $('#__sep_tglsep').text(data.result.tglsep);
              $('#__sep_no_kartu').text(data.result.no_kartu);
              $('#__sep_jkel').text(data.result.jkel);
              $('#__sep_nama_pasien').text(data.result.nama_pasien);
              $('#__sep_no_rawat').text(data.result.no_rawat);
              $('#__sep_tanggal_lahir').text(tanggal_lahir);
              $('#__sep_notelep').text(data.result.notelep);
              $('#__sep_peserta').text(data.result.peserta);
              $('#__sep_nmpolitujuan').text(data.result.nmpolitujuan);
              $('#__sep_cob').text(data.result.cob);
              $('#__sep_nmppkrujukan').text(data.result.nmppkrujukan);
              $('#__sep_jnspelayanan').text(data.result.jnspelayanan);
              $('#__sep_nmdiagnosaawal').text(data.result.nmdiagnosaawal);
              $('#__sep_klsrawat').text(data.result.klsrawat);
              $('#__sep_penjamin').text(data.result.penjamin);
              $('#__sep_catatan').text(data.result.catatan);

            }else{
              alert("Detail nomor perawatan tidak ditemukan...");
              document.getElementById("no_rawat").value = "";
            }
          }
        });
        setTimeout(function() { window.location.href = "<?php echo URL; ?>"; }, 500000);
      });

    });
    </script>

  </body>
</html>
