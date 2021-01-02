<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4>Isikan data kelas dengan lengkap</h4>
			
				<form class="form-horizontal form-material" id="formKelas">
					<div class="form-group">
						<label class="col-md-12">Nama Kelas</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan nama kelas" class="form-control
							form-control-line form-user-input" name="nama_kelas" id="nama_kelas">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Nama Pengajar</label>
						<div class="col-md-12">
							<textarea rows="5" class="form-control form-control-line form-user-input"
							name="nama_pengajar" id="nama_pengajar" placeholder="Inputkan Nama Pengajar"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Jadwal Bimbel</label>
						<div class="col-md-12">
							<textarea rows="5" class="form-control form-control-line form-user-input"
							name="jadwal_bimbel" id="jadwal_bimbel" placeholder="Inputkan Jadwal Bimbel"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Jumlah Pertemuan</label>
						<div class="col-md-12">
							<textarea rows="5" class="form-control form-control-line form-user-input"
							name="jumlah_pertemuan" id="jumlah_pertemuan" placeholder="Inputkan Jumlah Pertemuan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Harga Kelas</label>
						<div class="col-md-12">
							<textarea rows="5" class="form-control form-control-line form-user-input"
							name="harga_kelas" id="harga_kelas" placeholder="Inpukan Harga Kelas"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Ruang Kelas</label>
						<div class="col-md-12">
							<textarea rows="5" class="form-control form-control-line form-user-input"
							name="ruang_kelas" id="ruang_kelas" placeholder="Inputkan Ruang Kelas"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input class="form-user-input" type="hidden" name="id_kelas" id="id_kelas" value="">
							<button class="btn btn-success" type="submit">Simpan Data Kelas</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	$('#formKelas').on('submit', function (e){
		e.preventDefault();
		sendDataPost();
	});

	function sendDataPost(){

		<?php 
		if ($title == 'Form Edit Data Kelas') {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/kelas/update_action/';";
		} else {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/kelas/create_action/';";
		}
		?>

		var dataForm = {};
		var allInput = $('.form-user-input');

		$.each(allInput, function (i, val) {
			dataForm[val['name']] = val['value'];
		});

		$.ajax(link, {
			type: 'POST',
			data: dataForm,
			success: function (data, status, xhr) {
				var data_str = JSON.parse(data);
				alert(data_str['pesan']);
				loadMenu('<?= base_url('kelas')?>');
			},
			error: function (jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		});
	}

	function getDetail(id_kelas) {
		var link = 'http://localhost:8080/coding_jogja/backend_bimbel/kelas/detail?id_kelas='+id_kelas;

		$.ajax(link, {
			type: 'GET',
			success: function (data, status, xhr) {
				var data_obj = JSON.parse(data);
				if (data_obj['sukses'] == 'ya') {
					var detail = data_obj['detail'];
					$('#nama_kelas').val(detail['nama_kelas']);
					$('#nama_pengajar').val(detail['nama_pengajar']);
					$('#jadwal_bimbel').val(detail['jadwal_bimbel']);
					$('#jumlah_pertemuan').val(detail['jumlah_pertemuan']);
					$('#harga_kelas').val(detail['harga_kelas']);
					$('#ruang_kelas').val(detail['ruang_kelas']);
					$('#id_kelas').val(detail['id_kelas']);
				} else {
					alert('Data Tidak Ditemukan');
				}
			},
			error: function (jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		});
	}

	<?php 
	if ($title == 'Form Edit Data Kelas') {
		echo 'getDetail('.$id_kelas.');';

	}
	?>

</script>
