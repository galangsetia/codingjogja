<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4>Isikan data Admin</h4>
				<form class="form-horizontal form-material" id="formadmin">
					<div class="form-group">
						<label class="col-md-12">Nama Admin</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan nama Admin" class="form-control
							form-control-line form-user-input" name="nama_admin" id="nama_admin" value="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Username</label>
						<div class="col-md-12">
							<input type="text" placeholder="Inputkan Username admin" class="form-control
							form-control-line form-user-input" name="username" id="username" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12">Password</label>
						<div class="col-md-12">
							<input type="password" placeholder="Inputkan Password admin" class="form-control
							form-control-line form-user-input" name="password" id="password" >
						</div>
					</div>
				
				
					<div class="form-group">
						<div class="col-sm-12">
							<input class="form-user-input" type="hidden" name="id_admin" id="id_admin">
							<button class="btn btn-success" type="submit">Simpan Data Admin</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	$('#formadmin').on('submit', function (e){
		e.preventDefault();
		sendDataPost();
	});

	function sendDataPost(){

		<?php 
		if ($title == 'Form Edit Data Admin') {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/admin/update_action/';";
		} else {
			echo "var link = 'http://localhost:8080/coding_jogja/backend_bimbel/admin/create_action/';";
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
				loadMenu('<?= base_url('admin')?>');
			},
			error: function (jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		});
	}

	function getDetail(id_admin) {
		var link = 'http://localhost:8080/coding_jogja/backend_bimbel/admin/detail?id_admin='+id_admin;

		$.ajax(link, {
			type: 'GET',
			success: function (data, status, xhr) {
				var data_obj = JSON.parse(data);

				if (data_obj['sukses'] == 'ya') {
					var detail = data_obj['detail'];
					$('#nama_admin').val(detail['nama_admin']);
					$('#username').val(detail['username']);
					$('#password').val(detail['password']);
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
		if ($title == 'Form Edit Data Admin') {
			echo 'getDetail('.$id_admin.');';
		}
	?>





</script>
