<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <a href="#" onclick="loadMenu('<?= base_url('peserta/form_create')?>')" class="btn btn-primary"> Tambah Data Peserta</a>

                
                <h4>Dibawah ini Adalah Data Peserta</h4>
                <table id="tabel_peserta" class="table">

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

                $('#tabel_peserta').html(objData.konten);

                reload_event();
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }
    loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/peserta/list_peserta')

    function reload_event() {
        $('.linkEditPeserta').on('click', function () {
            var hashClean = this.hash.replace('#', '');
            loadMenu('<?= base_url('peserta/form_edit/') ?>' + hashClean);
        });

        $('.linkHapusPeserta').on('click', function () {
            var hashClean = this.hash.replace('#', '');
            hapusData(hashClean);
        });
    }

    function hapusData(id_peserta) {
        var url = 'http://localhost:8080/coding_jogja/backend_bimbel/peserta/delete_data?id_peserta='+id_peserta;

        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);

                alert(objData['pesan']);
                loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/peserta/list_peserta');
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }
</script>
