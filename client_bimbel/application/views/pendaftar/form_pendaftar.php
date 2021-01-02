<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
			<small>apabila internal server erorr , tandanya kode kelas salah</small>
				<h4>Isikan data Pendaftar</h4>
				<form class="form-horizontal form-material" id="formPendaftar">
					<div class="form-group">
						<label class="col-md-12">Pilih Kelas</label>
						<div class="col-md-12">
						<label class="col-md-12">kode kelas input manual</label>
							<input type="text" placeholder="masukan kelas yang di pilih" class="form-control
							form-control-line form-user-input" name="nama_kelas" id="nama_kelas">
							

						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Nama Peserta</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan nama peserta" class="form-control
							form-control-line form-user-input" name="nama_peserta" id="nama_peserta">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Tempat Tanggal Lahir</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan tempat tanggal lahir" class="form-control
							form-control-line form-user-input" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir">
						</div>
					</div>
					<label class="col-md-12">Alamat</label>
					<div class="col-md-12">
						<input type="text" placeholder="Inputkan alamat dengan benar" class="form-control
						form-control-line form-user-input" name="alamat" id="alamat">
					</div>
					<div class="form-group">
						<label class="col-md-12">Usia</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan Usia" class="form-control
							form-control-line form-user-input" name="usia" id="usia">
						</div>
					</div>
					<label class="col-md-12">Email</label>
					<div class="col-md-12">
						<input type="text" placeholder="Inputkan Email" class="form-control
						form-control-line form-user-input" name="email" id="email">
					</div>
					<div class="form-group">
						<label class="col-md-12">No Telepon</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan No Telepon" class="form-control
							form-control-line form-user-input" name="no_telp" id="no_telp">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input class="form-user-input" type="hidden" name="id_pendaftar" id="id_pendaftar" value="">

							<button class="btn btn-success" type="submit">Simpan Data Pendaftar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$('#formPendaftar').on('submit', function(e) {
		e.preventDefault();
		sendDataPost();
	});

	function sendDataPost() {

		<?php
		if ($title == 'Form Edit Data Pendaftar') {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/pendaftar/update_action/';";
		} else {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/pendaftar/create_action/';";
		}
		?>

		var dataForm = {};
		var allInput = $('.form-user-input');

		$.each(allInput, function(i, val) {
			dataForm[val['name']] = val['value'];
		});

		$.ajax(link, {
			type: 'POST',
			data: dataForm,
			success: function(data, status, xhr) {
				var data_str = JSON.parse(data);
				alert(data_str['pesan']);
				loadMenu('<?= base_url('pendaftar') ?>');
			},
			error: function(jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		});
	}

	function getDetail(id_pendaftar) {
		var link = 'http://localhost:8080/coding_jogja/backend_bimbel/pendaftar/detail?id_pendaftar=' + id_pendaftar;

		$.ajax(link, {
			type: 'GET',
			success: function(data, status, xhr) {
				var data_obj = JSON.parse(data);
				if (data_obj['sukses'] == 'ya') {
					var detail = data_obj['detail'];
					$('#id_kelas').val(detail['id_kelas']);
					$('#nama_peserta').val(detail['nama_peserta']);
					$('#tempat_tanggal_lahir').val(detail['tempat_tanggal_lahir']);
					$('#alamat').val(detail['alamat']);
					$('#usia').val(detail['usia']);
					$('#email').val(detail['email']);
					$('#no_telp').val(detail['no_telp']);
					$('#id_pendaftar').val(detail['id_pendaftar']);

				} else {
					alert('Data Tidak Ditemukan');
				}
			},
			error: function(jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		});
	}

	<?php
	if ($title == 'Form Edit Data Pendaftar') {
		echo 'getDetail(' . $id_pendaftar . ');';
	}
	?>
</script>
