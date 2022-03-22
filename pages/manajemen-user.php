<div class="section-header">
	<h1>Manajemen User</h1>
	<div class="section-header-breadcrumb">
		<div class="breadcrumb-item active"><a href="#">Home</a></div>
		<div class="breadcrumb-item">Manajemen User</div>
	</div>
</div>
<div class="section-body">
	<div class="row mx-n1">
		<div class="col-md px-1">
			<a href="?page=manajemen-user-form" class="btn btn-primary">
				Tambah User Baru
			</a>
		</div>
		<div class="col-md-auto px-1">
			<div class="form-group">
				<select name="" id="" class="form-control">
					<option value="">Semua Status</option>
					<option value="">Aktif</option>
					<option value="">Non Aktif</option>
				</select>
			</div>
		</div>
		<div class="col-md-auto px-1">
			<div class="form-group">
				<select name="" id="" class="form-control">
					<option value="">Semua Group</option>
					<option value="">Administrator</option>
					<option value="">System Analyst</option>
					<option value="">FrontEnd Designer</option>
					<option value="">Programmer</option>
					<option value="">Tester</option>
				</select>
			</div>
		</div>
		<div class="col-md-auto px-1">
			<div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Data">
					<div class="input-group-append">
						<button class="btn btn-primary"><i class="fa fa-search"></i></button>
					</div>
					<div class="input-group-append">
						<button class="btn btn-danger"><i class="fa fa-sync-alt"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body p-0">			
			<div class="table-responsive">
				<table class="table table-striped">
					<thead class="bg-light">
						<tr>
							<th width="10">No</th>
							<th class="text-center" width="10">Aksi</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Group</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td class="text-nowrap">
								<a href="?page=manajemen-user-form" class="btn btn-primary icon-left btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i></a>
								<a href="#" class="btn btn-danger icon-left btn-sm btn-delete" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></a>
								<a href="#" class="btn btn-warning icon-left btn-sm" data-toggle="tooltip" data-placement="bottom" title="Non Aktifkan"><i class="fas fa-ban"></i></a>
							</td>
							<td>tester1</td>
							<td>Tester 1</td>
							<td>Tester</td>
							<td><span class="badge badge-success">Aktif</span></td>
						</tr>	
						<tr>
							<td class="text-center">2</td>
							<td class="text-nowrap">
								<a href="?page=manajemen-user-form" class="btn btn-primary icon-left btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i></a>
								<a href="#" class="btn btn-danger icon-left btn-sm btn-delete" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></a>
								<a href="#" class="btn btn-warning icon-left btn-sm" data-toggle="tooltip" data-placement="bottom" title="Non Aktifkan"><i class="fas fa-ban"></i></a>
							</td>
							<td>fed1</td>
							<td>FronEnd</td>
							<td>FrontEnd Designer</td>
							<td><span class="badge badge-success">Aktif</span></td>
						</tr>	
						<tr>
							<td class="text-center">3</td>
							<td class="text-nowrap">
								<a href="?page=manajemen-user-form" class="btn btn-primary icon-left btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i></a>
								<a href="#" class="btn btn-danger icon-left btn-sm btn-delete" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash"></i></a>
								<a href="#" class="btn btn-success icon-left btn-sm" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="far fa-check-square"></i></a>
							</td>
							<td>os1</td>
							<td>Outsourcing</td>
							<td>Programmer</td>
							<td><span class="badge badge-warning">Tidak Aktif</span></td>
						</tr>											
					</tbody>
				</table>
			</div>
		</div>
		<div class="card-footer text-right">
			<nav class="d-inline-block">
				<ul class="pagination mb-0">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
					</li>
					<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
					</li>
				</ul>
			</nav>
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