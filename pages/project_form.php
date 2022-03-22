<div class="section-header">
	<h6 style="vertical-align: middle;">Tambah Projek Baru</h6>
	<div class="section-header-breadcrumb">
		<div class="breadcrumb-item active"><a href="#">Home</a></div>
		<div class="breadcrumb-item"><a href="?page=project">Project on Going</a></div>
		<div class="breadcrumb-item">Form Projek Baru</div>
	</div>
</div>
<div class="section-body">
	<div class="row">
		<div class="col-md-6 mb-4 mb-md-0">
			<div class="card shadow-sm p-3 mb-5 bg-white rounded">
				<div class="card-header">
					<h4>Entry Projek Baru</h4>
				</div>
				<div class="card-body" style="margin-bottom: -17px;">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Kode Projek</b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Nama Projek</b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>					
					<div class="form-group row">
						<label class="col-sm-3 col-form-label"><b>Nama Klien</b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card shadow-sm p-3 mb-5 bg-white rounded">
				<div class="card-header">
					<h4>Pihak Terkait</h4>
				</div>
				<div class="card-body" style="margin-bottom: -30px;">
					<div class="form-group row">					
						<label class="col-sm-3 col-form-label"><b>Tester</b></label>
						<div class="col-sm-9">
							<select name="" id="" class="select2" style="width:100%;" data-placeholder="Pilih Tester" multiple>
								<option value=""> </option>
								<option value="1">Tester 1</option>
								<option value="2">Tester 2</option>
							</select>
						</div>
					</div>
					<div class="form-group row">					
						<label class="col-sm-3 col-form-label"><b>Programer</b></label>
						<div class="col-sm-9">
							<select name="" id="" class="select2" style="width:100%;" data-placeholder="Pilih Programer" multiple>
								<option value=""> </option>
								<option value="1">Programer 1</option>
								<option value="2">Programer 2</option>
							</select>
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