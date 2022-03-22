<div class="section-header">
	<h6 style="vertical-align: middle;">Edit Akun</h6>
	<div class="section-header-breadcrumb">
		<div class="breadcrumb-item active"><a href="#">Home</a></div>
		<div class="breadcrumb-item">Ganti Password</div>
	</div>
</div>
<div class="section-body">
	<div class="row">
		<div class="col-md-6 mb-4 mb-md-0">
			<div class="card shadow-sm p-3 mb-5 bg-white rounded">
				<div class="card-body" style="margin-bottom: -17px;">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"><b>Nama User</b></label>
						<div class="col-sm-8">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"><b>Username</b></label>
						<div class="col-sm-8">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"><b>Password Lama</b></label>
						<div class="col-sm-8">
							<input type="password" class="form-control">
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card shadow-sm p-3 mb-5 bg-white rounded">
				<div class="card-body" style="margin-bottom: -19px;">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"><b>Password Baru</b></label>
						<div class="col-sm-8">
							<input type="password" class="form-control">
						</div>
					</div>	
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"><b>Ulangi Password Baru</b></label>
						<div class="col-sm-8">
							<input type="password" class="form-control">
						</div>
					</div>	
					<div class="form-group row">
						<button class="btn btn-block btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css">
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
	$(function(){
		$('.main-navigation .navbar-nav > .nav-item > .nav-link:contains("Manajemen User")').parent().addClass('active');

		$('.btn-delete').on('click',function(){
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak dapat mengembalikan data ini lagi!",
                icon: 'warning',
                reverseButtons:true,
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus data!'
                }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        title:'Success',
                        text:'Data berhasil dihapus',
                        icon:'success',
                    })
                }
            })
        });
	})
</script>