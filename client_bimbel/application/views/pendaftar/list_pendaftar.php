<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
      
<!-- 
<br><br>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <label>Nama Peserta</label> <br/>
                        <input type="name" name="cari_peserta" id="cari_peserta" class="form-control form-input-cari">
                    </div>
                    <div class="col-md-3">
                        <label>Email</label> <br/>
                        <input type="text" name="cari_email" id="cari_email" class="form-control form-input-cari">
                    </div>
                    <div class="col-md-3">
                        <br/>
                        <button class="btn btn-info" id="btn-cari">Cari Pendaftar</button>
                    </div>
                </div>
                 <hr/> -->
                
                <h4>Dibawah ini Adalah Data Pendaftar</h4>
                <table id="tabel_pendaftar" class="table">

                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function loadKonten(url) {
        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);

                $('#tabel_pendaftar').html(objData.konten);

                reload_event();
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }
    loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/pendaftar/list_pendaftar')

    function reload_event() {
        $('.linkEditPendaftar').on('click', function () {
            var hashClean = this.hash.replace('#', '');
            loadMenu('<?= base_url('pendaftar/form_edit/') ?>' + hashClean);
        });

         $('.linkHapusPendaftar').on('click', function () {
            var hashClean = this.hash.replace('#','');
            hapusData(hashClean);
        });
    }

    function hapusData(id_pendaftar) {
        var url = 'http://localhost:8080/coding_jogja/backend_bimbel/pendaftar/delete_data?id_pendaftar='+id_pendaftar;

        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);

                alert(objData['pesan']);
                loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/pendaftar/list_pendaftar');
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }

    function cariData(){

        var url = 'http://localhost:8080/coding_jogja/backend_bimbel/pendaftar/cari_pendaftar';
        var dataForm = {};
        var allInput = $('.form-input-cari');

        $.each(allInput, function (i, val) {
            dataForm[val['name']] = val['value'];
        });

        $.ajax(url, {
            type: 'POST',
            data: dataForm,
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);
                $('#tabel_pendaftar').html(objData.konten);

                reload_event();
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }

    $('#btn-cari').on('click', function () {
        cariData();
    });
</script>
