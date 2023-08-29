<?php
include("./show.php");
session_start();
if(!$_SESSION['email']){

	header("location: pages-sign-in.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
	<nav id="sidebar" class="sidebar js-sidebar">
			<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
				<img src="<?php echo $_SESSION['img']?>" style="border-radius: 50%; " height="150px" width="150px" class="" alt="Charles Hall">
				 <div class="text-white"><?php echo $_SESSION['name'] ?></div>
				 <div class="text-white"><?php echo $_SESSION['email'] ?></div>
			</a>
			<div class="sidebar-content js-simplebar" data-simplebar="init">
				<div class="simplebar-wrapper" style="margin: 0px;">
					<div class="simplebar-height-auto-observer-wrapper">
						<div class="simplebar-height-auto-observer"></div>
					</div>
					<div class="simplebar-mask">
						<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
							<div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
								<div class="simplebar-content" style="padding: 0px;">
									<a class="sidebar-brand" href="index.html">
										<span class="align-middle">Registration And Conformation.</span>
									</a>

									<ul class="sidebar-nav">
										<li class="sidebar-header">
											Pages
										</li>

										<li class="sidebar-item active">
											<a class="sidebar-link" href="index.html">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders align-middle">
													<line x1="4" y1="21" x2="4" y2="14"></line>
													<line x1="4" y1="10" x2="4" y2="3"></line>
													<line x1="12" y1="21" x2="12" y2="12"></line>
													<line x1="12" y1="8" x2="12" y2="3"></line>
													<line x1="20" y1="21" x2="20" y2="16"></line>
													<line x1="20" y1="12" x2="20" y2="3"></line>
													<line x1="1" y1="14" x2="7" y2="14"></line>
													<line x1="9" y1="8" x2="15" y2="8"></line>
													<line x1="17" y1="16" x2="23" y2="16"></line>
												</svg> <span class="align-middle">Dashboard</span>
											</a>
										</li>

										<li class="sidebar-item">
											<a class="sidebar-link" href="pages-profile.html">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle">
													<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
													<circle cx="12" cy="7" r="4"></circle>
												</svg> <span class="align-middle">Profile</span>
											</a>
										</li>

										<li class="sidebar-item">
											<a class="sidebar-link" href="./sign_in_se.php">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in align-middle">
													<path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
													<polyline points="10 17 15 12 10 7"></polyline>
													<line x1="15" y1="12" x2="3" y2="12"></line>
												</svg><span class="align-middle">Sign In</span>
											</a>
										</li>

										<li class="sidebar-item">
											<a class="sidebar-link" href="./sign_up.php">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus align-middle">
													<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
													<circle cx="8.5" cy="7" r="4"></circle>
													<line x1="20" y1="8" x2="20" y2="14"></line>
													<line x1="23" y1="11" x2="17" y2="11"></line>
												</svg> <span class="align-middle">Sign Up</span>
											</a>
										</li>

										<li class="sidebar-item">
											<a class="sidebar-link" href="pages-blank.html">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book align-middle">
													<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
													<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
												</svg> <span class="align-middle">Blank</span>
											</a>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<div class="simplebar-placeholder" style="width: auto; height: 957px;"></div>
				</div>
				<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
					<div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
				</div>
				<div class="simplebar-track simplebar-vertical" style="visibility: visible;">
					<div class="simplebar-scrollbar" style="height: 456px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
				</div>
			</div>
		</nav>

		<div class="main">
			<?php
include("./partials/navbar.php")
			?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">


								</div>
							</div>
						</div>


					</div>


					<div class="row">
						<div class="col-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Latest Updates</h5>
								</div>
								<?php
								$sql = "SELECT * FROM `login_tb`";
								$result = mysqli_query($con, $sql);
								if (mysqli_num_rows($result) > 0) {


								?>
									<table class="table table-hover my-0">
										<thead>
											<tr>
												<th>Id</th>
												<th class="d-none d-xl-table-cell">Name</th>
												<th class="d-none d-xl-table-cell">Email</th>
												<th>Password</th>
												<th class="d-none d-md-table-cell">Images</th>
												<th>Date</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
											<tbody>
										<?php
										while ($data = mysqli_fetch_assoc($result)) {
											// print_r($data);
										?>
												<tr>
													<td><?php echo $data['id'] ?></td>
													<td class=""><?php echo $data['name'] ?></td>
													<td class="d-none d-xl-table-cell"><?php echo $data['email'] ?></td>
													<td class="badge bg-success"><?php echo $data['password'] ?></td>
													<td class="d-none d-xl-table-cell"><img src="<?php echo $data['image'] ?>" height="50px" width="50px" alt="" ></td>
													<td class="d-none d-xl-table-cell"><?php echo $data['date'] ?></td>
													<td><a href="./edit_f.php?edid=<?php echo $data['id']?>" class="btn btn-primary">Edit</a></td>
													<td><a href="./delete.php?delid=<?php echo $data['id']?>" class="btn btn-danger">Delete</a></td>
												</tr>
							<?php

										};
									} else {
										echo "No Data Found";
									}

							?>
											</tbody>
									</table>
							</div>
						</div>

					</div>
				</div>
			</main>

			<?php
include("./partials/footer.php");
			?>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>



	<div class="jvm-tooltip"></div>
</body>

</html>