<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <a href="#" onclick="loadMenu('<?= base_url('pembayaran/form_create')?>')" class="btn btn-primary col-md-3" style="float: right;"> Tambah Data Pembayaran</a>
<br>
                <br>
				<h1>Data Pembayaran</h1>
				<br>
                <table id="tabel_pembayaran" class="table">

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

                $('#tabel_pembayaran').html(objData.konten);

                reload_event();
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }
    loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/pembayaran/list_pembayaran')

    function reload_event() {
        $('.linkEditPembayaran').on('click', function () {
            var hashClean = this.hash.replace('#', '');
            loadMenu('<?= base_url('pembayaran/form_edit/') ?>' + hashClean);
        });

         $('.linkHapusPembayaran').on('click', function () {
            var hashClean = this.hash.replace('#','');
            hapusData(hashClean);
        });
    }

    function hapusData(id_pembayaran) {
        var url = 'http://localhost:8080/coding_jogja/backend_bimbel/pembayaran/soft_delete_data?id_pembayaran='+id_pembayaran;

        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);

                alert(objData['pesan']);
                loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/pembayaran/list_pembayaran');
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }
</script>
