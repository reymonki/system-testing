<div class="section-header">
	<h6 style="vertical-align: middle;">Tambah Bug Baru</h6>
	<div class="section-header-breadcrumb">
		<div class="breadcrumb-item active"><a href="#">Home</a></div>
		<div class="breadcrumb-item"><a href="?page=project">Project on Going</a></div>
		<div class="breadcrumb-item"><a href="?page=project_detail">Detail Project</a></div>
		<div class="breadcrumb-item">Form Bug Baru</div>
	</div>
</div>
<div class="section-body">
	<div class="row">
		<div class="col-md-6 mb-4 mb-md-0">
			<div class="card shadow-sm p-3 mb-5 bg-white rounded">
				<div class="card-header">
					<h4>Entry Bug Baru</h4>
				</div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Nama Projek</b></label>
						<div class="col-sm-9">
							<select name="" id="" class="select2" style="width:100%;" data-placeholder="Pilih Projek">
								<option value=""> </option>
								<option value="1">R/2021/I/0034 - AR Museum</option>
								<option value="2">R/2021/I/0033 - Aplikasi Historia</option>
								<option value="3">N/2021/I/0027 - Aplikasi Pemetaan Dakwah</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Nama Klien</b></label>
						<label class="col-sm-9 col-form-label">Dinas Kebudayaan Yogyakarta</label>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Nama Bug</b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center" style="vertical-align: middle;">
						<label class="col-sm-3 col-form-label"><b>Jenis Bug</b></label>
						<div class="col-sm-9"  style="vertical-align: middle;">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="decimal" name="jenis-koordinat" checked value="decimal">
								<label class="form-check-label" for="decimal">System</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" id="dms" name="jenis-koordinat" value="dms">
								<label class="form-check-label" for="dms">Responsive</label>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card shadow-sm p-3 mb-5 bg-white rounded">
				<div class="card-body" style="margin-bottom: -30px;">					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Deskripsi</b></label>
						<div class="col-sm-9">
							<textarea name="" id="" cols="30" rows="3" class="form-control h-auto"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Link / Path</b></label>
						<div class="col-sm-9">
							<textarea name="" id="" cols="30" rows="2" class="form-control h-auto"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Gambar</b></label>
						<div class="col-sm-9">
							<form>
  								<div class="custom-file">
    								<input type="file" class="custom-file-input" id="customFile">
   									<label class="custom-file-label" for="customFile">Choose file</label>
  								</div>
							</form>
						</div>
					</div>
					<br>
					<div class="form-group row">
						<button class="btn btn-block btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<link rel="stylesheet" href="assets/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/select2/select2.min.css">
<script src="assets/plugins/select2/select2.min.js"></script>

<script type="text/javascript">
	$(function(){
		$('.main-navigation .navbar-nav > .nav-item > .nav-link:contains("Pengajuan")').parent().addClass('active');

		$('.select2').select2();

		var selected = $('input[name=jenis-koordinat]:checked').val();
		if(selected == 'decimal'){
			$('.form-decimal').show();
			$('.form-dms').hide();
		} else{
			$('.form-decimal').hide();
			$('.form-dms').show();
		}
		$('input[name=jenis-koordinat]').on('change',function(){
			if($(this).val() == 'decimal'){
				$('.form-decimal').show();
				$('.form-dms').hide();
			} else {
				$('.form-decimal').hide();
				$('.form-dms').show();
			}
		});
	})
</script>