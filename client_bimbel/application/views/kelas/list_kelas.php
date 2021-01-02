<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="#" onclick="loadMenu('<?= base_url('kelas/form_create')?>')" class="btn btn-primary" style="float: right;" > Tambah Data Kelas</a>
<br>
                
				<h4>Dibawah ini Adalah Data Kelas</h4>
				<small> Nama Kelas akan tampil di homepage dan daftar kelas</small>
				<br><br>
                <table id="tabel_kelas" class="table">

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

                $('#tabel_kelas').html(objData.konten);

                reload_event();
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }
    loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/kelas/list_kelas')

    function reload_event() {
        $('.linkEditKelas').on('click', function () {
            var hashClean = this.hash.replace('#', '');
            loadMenu('<?= base_url('kelas/form_edit/') ?>' + hashClean);
        });

        $('.linkHapusKelas').on('click', function () {
            var hashClean = this.hash.replace('#','');
            hapusData(hashClean);
        });
    }

    function hapusData(id_kelas) {
        var url = 'http://localhost:8080/coding_jogja/backend_bimbel/kelas/soft_delete_data?id_kelas='+id_kelas;

        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);

                alert(objData['pesan']);
                loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/kelas/list_kelas');
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }

        })
    }

</script>
