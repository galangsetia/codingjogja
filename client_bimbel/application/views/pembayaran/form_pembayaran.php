<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
			<small>apabila internal server erorr , tandanya kode kelas salah</small>
				<h4>Isikan data Pembayaran</h4>
				<form class="form-horizontal form-material" id="formPembayaran">
					<label class="col-md-12">Tanggal Pembayaran</label>
						<div class="col-md-12">
							<input type="date" placeholder="Inputkan tanggal pembayaran" class="form-control
							form-control-line form-user-input" name="tanggal_pembayaran" id="tanggal_pembayaran">
						</div>
						<br><br>
						<label class="col-md-12">Masukan No Pendaftar</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan kode pendaftar" class="form-control
							form-control-line form-user-input" name="id_pendaftar" id="id_pendaftar">
						</div>
						<br><br>
						<label class="col-md-12">Masukan kode kelas</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan kode pendaftar" class="form-control
							form-control-line form-user-input" name="id_kelas" id="id_kelas">
						</div>
						<br><br>
					<div class="form-group">
						<div class="col-sm-12">
							<input class="form-user-input" type="hidden" name="id_pembayaran" id="id_pembayaran" value="">
							<button class="btn btn-success" type="submit">Simpan Data Pembayaran</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	$('#formPembayaran').on('submit', function (e){
		e.preventDefault();
		sendDataPost();
	});

	function sendDataPost(){

		<?php 
		if ($title == 'Form Edit Data Pembayaran') {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/pembayaran/update_action/';";
		} else {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/pembayaran/create_action/';";
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
				loadMenu('<?= base_url('pembayaran')?>');
			},
			error: function (jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		});
	}

	function getDetail(id_pembayaran) {
		var link = 'http://localhost:8080/coding_jogja/backend_bimbel/pembayaran/detail?id_pembayaran='+id_pembayaran;

		$.ajax(link, {
			type: 'GET',
			success: function (data, status, xhr) {
				var data_obj = JSON.parse(data);
				if (data_obj['sukses'] == 'ya') {
					var detail = data_obj['detail'];
					$('#tanggal_pembayaran').val(detail['tanggal_pembayaran']);
					$('#id_pendaftar').val(detail['id_pendaftar']);
					$('#id_pembayaran').val(detail['id_pembayaran']);
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
	if ($title == 'Form Edit Data Pembayaran') {
		echo 'getDetail('.$id_pembayaran.');';

	}
	?>
</script>
