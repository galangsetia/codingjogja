
<script type="text/javascript">
function checkAkses(){
	var pass = document.getElementById("akses").value;
	if(pass == "galang"){
		loadMenu('<?= base_url('admin/form_create')?>')
		document.getElementById("exampleModal").style.display=none;
	}
	else{
		alert("Kode Akses Salah");
		document.getElementById("exampleModal").style.display=none;
	}
}
</script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Admin
</button>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <label class="col-md-12">kode akses</label>
						<div class="col-md-12">
						<form>
							<input type="password" placeholder="Inputkan kode pendaftar" class="form-control
							form-control-line form-user-input" name="akses" id="akses">
						
						</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" onclick="checkAkses();" data-dismiss="modal" class="btn btn-primary">Save changes</button>
		</form>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4> Admin Coding Jogja</h4>
				<br>
				<!-- <a href="#" onclick="loadMenu('<?= base_url('admin/form_create')?>')" class="btn btn-primary" style="float:right;"> Tambah Admin</a> -->
				<br><br>
                <table id="tabel_admin" class="table">



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
                $('#tabel_admin').html(objData.konten);
				
				reload_event();
            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error: ' + errorMsg);
            }
 
        })
    }
    loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/admin/list_admin')


	function reload_event(){
		$('.linkEditAdmin').on('click', function (){
			var hashClean = this.hash.replace('#','');
			loadMenu('<?= base_url('Admin/form_edit/')?>' + hashClean);
		}); 
		
		$('.linkHapusAdmin').on('click', function(){
		var hashClean = this.hash.replace('#','');
		hapusData(hashClean);

	});


	function hapusData(id_admin) {
		var url = 'http://localhost:8080/coding_jogja/backend_bimbel/admin/delete_data?id_admin='+id_admin;

		$.ajax(url, {
			type: 'GET',
			success: function(data, status, xhr) {
				var objData = JSON.parse(data);
				alert(objData['pesan']);
				loadKonten('http://localhost:8080/coding_jogja/backend_bimbel/admin/list_admin');

			},
			error: function(jqXHR, textStatus, erorrMsg) {
				alert('Erorr :' + erorrMsg);
			}
		})
	}

		
	}
</script>
