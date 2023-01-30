<?php
session_start();

 include 'config.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Aplikasi Absensi</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/LOGO_UNUHA.PNG" type="image/x-icon"/>

	<!-- huruf dan icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">

			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="dashboard.php" class="logo">
					<b class="text-white">Universitas Nurul Huda</b>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
			<center>
				<img style="border:0px; width:75px; height:100px; margin-top:5px;" src="assets/img/LOGO_UNUHA.PNG"/>
			</center>		
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="index.php" class="collapsed">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>							
						</li>

						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-folder-open"></i>
								<p>Data Umum</p>
								<span class="caret"></span>
							</a>
							
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=master&act=prodi">
											<span class="sub-item">prodi</span>
										</a>
									</li>

									<li>
										<a href="?page=master&act=semester">
											<span class="sub-item">Semester</span>
										</a>
									</li>

									<li>
										<a href="?page=master&act=tahun_ajaran">
											<span class="sub-item">Tahun Ajaran</span>
										</a>
									</li>

									<li>
										<a href="?page=matakuliah">
											<span class="sub-item">Matakuliah</span>
										</a>
									</li>
							
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebar">
								<i class="fas fa-clipboard-list"></i>
								<p>Jadwal Mengajar</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebar">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=jadwal&act=tambah ">
											<span class="sub-item"> Tambah Jadwal </span>
										</a>
									</li>

									<li>
										<a href="?page=jadwal">
											<span class="sub-item"> Daftar Mengajar </span>
										</a>
									</li>
								</ul>
							</div>
						</li>
				
						<li class="nav-item">
							<a data-toggle="collapse" href="#dosen">
								<i class="fas fa-user-tie"></i>
								<p>Data Dosen</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dosen"> 
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=dosen&act=tambah ">
											<span class="sub-item"> Tambah Dosen </span>
										</a>
									</li>
									<li>
										<a href="?page=dosen">
											<span class="sub-item"> Daftar Dosen </span>
										</a>
									</li>
								</ul> 
							</div>
						</li>

						<li class="nav-item">
							<a data-toggle="collapse" href="#mahasiswa">
								<i class="fas fa-user-friends"></i>
								<p>Data mahasiswa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="mahasiswa">
								<ul class="nav nav-collapse">
									<li>
										<a href="?page=mahasiswa&act=tambah ">
											<span class="sub-item"> Tambah mahasiswa </span>
										</a>
									</li>
									<li>
										<a href="?page=mahasiswa">
											<span class="sub-item"> Daftar mahasiswa </span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item active mt-3">
							<a href="logout.php" class="collapsed">
								<i class="fas fa-arrow-alt-circle-left"></i>
								<p>Logout</p>
							</a>							
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">

				<!-- Halaman dinamis -->
				<?php 
				error_reporting();
				$page= @$_GET['page'];
				$act = @$_GET['act'];

				if ($page=='matakuliah') {
						if ($act=='') {
							include 'matakuliah/tampil.php'; 
						}elseif ($act=='tambah') {
								include 'matakuliah/tambah.php'; 
						}elseif ($act=='edit') {
							include 'matakuliah/edit.php'; 
						}elseif ($act=='hapus') {
								include 'matakuliah/hapus.php'; 
						}elseif ($act=='proses') {
								include 'matakuliah/proses.php'; 
					}	
					// dosen
					}elseif ($page=='dosen') {
					if ($act=='') {
						include 'dosen/tampil.php'; 
					}elseif ($act=='tambah') {
							include 'dosen/tambah.php'; 
					}elseif ($act=='edit') {
						include 'dosen/edit.php'; 
					}elseif ($act=='hapus') {
							include 'dosen/hapus.php'; 
					}elseif ($act=='proses') {
							include 'dosen/proses.php'; 
					}
					//mahasiswa
					}elseif ($page=='mahasiswa') {
					if ($act=='') {
						include 'mahasiswa/tampil.php'; 
					}elseif ($act=='tambah') {
							include 'mahasiswa/tambah.php'; 
					}elseif ($act=='edit') {
						include 'mahasiswa/edit.php'; 
					}elseif ($act=='hapus') {
							include 'mahasiswa/hapus.php'; 
					}elseif ($act=='proses') {
							include 'mahasiswa/proses.php'; 
					}  
					//jadwal 
					}		
					elseif ($page=='jadwal') {
					if ($act=='') {
						include 'jadwal/tampil.php';
					}elseif ($act=='tambah') {
						include 'jadwal/tambah.php';
					}elseif ($act=='cancel') {
						include 'jadwal/cancel.php';
					}	

					}
				?>
				<!-- end -->
			</div>
		</div>
	</div>

	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js"></script> 
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// tambah Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>