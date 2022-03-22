<?php
	$loginGroup = $_SESSION['loginGroup'];
	$loginUsername = $_SESSION['loginUsername'];
	$loginName = $_SESSION['loginName'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
		<title>JMC - System & Software Testing</title>
		<!-- General CSS Files -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<!-- CSS Libraries -->
		<!-- Template CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/components.css">
		<!-- General JS Scripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
		<script src="assets/js/stisla.js"></script>
		<!-- JS Libraies -->
		<!-- Template JS File -->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/custom.js"></script>
	</head>
	<body class="layout-3">
		<div id="app">
			<div class="main-wrapper container">
				<div class="navbar-bg"></div>
				<nav class="navbar navbar-expand-lg main-navbar">
					<a href="index.html" class="navbar-brand sidebar-gone-hide d-flex align-items-center">
						<div class="logo">
							<img src="assets/images/logo_jmc_white.png" alt="" height="40">
						</div>
						<div class="text ml-3">
							System & Software Testing
						</div>
					</a>
					<div class="navbar-nav">
						<a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
					</div>
					<ul class="navbar-nav navbar-right ml-md-auto">
						
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
							<div class="d-sm-none d-lg-inline-block">Hi, <?=$loginName;?></div></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="?page=edit_akun" class="dropdown-item has-icon">
									<i class="fas fa-lock"></i> Edit Akun
								</a>
								<div class="dropdown-divider"></div>
								<a href="logout.php" class="dropdown-item has-icon text-danger">
									<i class="fas fa-sign-out-alt"></i> Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>
				<nav class="navbar navbar-secondary navbar-expand-lg main-navigation">
					<div class="container">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="index.php" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a>
							</li>						
							<li class="nav-item">
								<a href="?page=project" class="nav-link"><i class="fas fa-hourglass-half"></i><span>Project On Going</span></a>
							</li>
							<li class="nav-item">
								<a href="?page=history" class="nav-link"><i class="fas fa-history"></i><span>History</span></a>
							</li>
							<?php if($loginGroup == 'admin'):?>
							<li class="nav-item">
								<a href="?page=manajemen-user" class="nav-link"><i class="fas fa-users"></i><span>Manajemen User</span></a>
							</li>
							<?php endif;?>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Main Content -->
		<div class="main-content">
			<section class="section">
				<?php
				if (isset($_GET['page']) && $_GET['page']) {
				require_once 'pages/'.$_GET['page'] . '.php';
				} else {
				require_once 'pages/home.php';
				}
				?>
			</section>
			
		</div>
		<footer class="main-footer">
			<div class="footer-left">
				Copyright &copy; 2022 <div class="bullet"></div> Powered by <a href="https://jmc.co.id">JMC Indonesia</a>
			</div>
		</footer>
	</div>
</body>
</html>