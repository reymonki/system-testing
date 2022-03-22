<div class="section-body">
	<div class="hero text-white bg-dark">
		<div class="hero-inner">
			<h2>Hi, <?=$loginName;?></h2>
			<p class="lead">Total Bug yang terdeteksi saat ini adalah</p>
			<h2>10</h2>
		</div>
	</div>
	<br>
	<div class="card">
		<div class="card-body p-0">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead class="bg-light">
						<tr>
							<th width="10">No</th>
							<th>Tanggal</th>
							<th class="text-center" width="10">Aksi</th>
							<th>Nama Projek</th>
							<th>Nama Bug</th>
							<th>Jenis</th>
							<th class="text-center" width="10">Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>13 Maret 2022</td>
							<td>
								<a href="?page=bug_detail" class="btn btn-dark btn-sm">View</a>
							</td>
							<td>Aplikasi Historia</td>
							<td>User Admin Masih Bisa di Non-Aktifkan</td>
							<td>System</td>
							<td>
								<button class="btn btn-warning btn-block btn-sm">Pending</button>		
							</td>
						</tr>	
						<tr>
							<td class="text-center">2</td>
							<td>13 Maret 2022</td>
							<td>
								<a href="?page=bug_detail" class="btn btn-dark btn-sm">View</a>
							</td>
							<td>Aplikasi Historia</td>
							<td>Belum Bisa Ganti Password</td>
							<td>System</td>
							<td>
								<button class="btn btn-info btn-block btn-sm">Accepted</button>		
							</td>
						</tr>	
						<tr>
							<td class="text-center">3</td>
							<td>13 Maret 2022</td>
							<td>
								<a href="?page=bug_detail" class="btn btn-dark btn-sm">View</a>
							</td>
							<td>Aplikasi Historia</td>
							<td>Gambar Thumbnail Tokoh Belum Muncul</td>
							<td>Responsive</td>
							<td>
								<button class="btn btn-primary btn-block btn-sm">Done</button>		
							</td>
						</tr>	
						<tr>
							<td class="text-center">4</td>
							<td>13 Maret 2022</td>
							<td>
								<a href="?page=bug_detail" class="btn btn-dark btn-sm">View</a>
							</td>
							<td>Aplikasi Historia</td>
							<td>Flipbook Konten Peristiwa</td>
							<td>System</td>
							<td>
								<button class="btn btn-danger btn-block btn-sm">Drop</button>		
							</td>
						</tr>	
						<tr>
							<td class="text-center">5</td>
							<td>13 Maret 2022</td>
							<td>
								<a href="?page=bug_detail" class="btn btn-dark btn-sm">View</a>
							</td>
							<td>Aplikasi Historia</td>
							<td>Tidak Bisa Simpan Konten Peristiwa</td>
							<td>System</td>
							<td>
								<button class="btn btn-success btn-block btn-sm">Clear</button>		
							</td>
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

<script type="text/javascript">
	$(function(){
		$('.main-navigation .navbar-nav > .nav-item > .nav-link:contains("Home")').parent().addClass('active');
	})
</script>