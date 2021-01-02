<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4>Isikan data peserta dengan lengkap</h4>
				<form class="form-horizontal form-material" id="formPeserta">
					<div class="form-group">
						<label class="col-md-12">ID Pendaftar</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan nama peserta" class="form-control
							form-control-line form-user-input" name="id_pendaftar" id="id_pendaftar">
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
						<div class="col-sm-12">
							<input class="form-user-input" type="hidden" name="id_peserta" id="id_peserta" value="">
							<button class="btn btn-success" type="submit">Simpan Data Pendafar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	$('#formPeserta').on('submit', function (e){
		e.preventDefault();
		sendDataPost();
	});

	function sendDataPost(){

		<?php 
		if ($title == 'Form Edit Data Peserta') {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/peserta/update_action/';";
		} else {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/peserta/create_action/';";
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
				loadMenu('<?= base_url('peserta')?>');
			},
			error: function (jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		});
	}

	function getDetail(id_peserta) {
		var link = 'http://localhost:8080/coding_jogja/backend_bimbel/peserta/detail?id_peserta='+id_peserta;

		$.ajax(link, {
			type: 'GET',
			success: function (data, status, xhr) {
				var data_obj = JSON.parse(data);
				if (data_obj['sukses'] == 'ya') {
					var detail = data_obj['detail'];
					$('#nama_peserta').val(detail['nama_peserta']);
					$('#id_peserta').val(detail['id_peserta']);
					$('#id_pendaftar').val(detail['id_pendaftar']);
				
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
	if ($title == 'Form Edit Data Peserta') {
		echo 'getDetail('.$id_peserta.');';

	}
	?>

</script>
