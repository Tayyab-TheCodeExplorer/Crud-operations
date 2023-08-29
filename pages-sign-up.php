<?php 
include("./index.php");

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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body inmaintabuse="1" cz-shortcut-listen="true">
<div class="wrapper">
		<?php
include("./partials/sidenav.php")
		?>

		<div class="main">
			<?php
include("./partials/navbar.php")
			?>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Start creating the best possible user experience for you customers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input placeholder="Enter your name" name="name" type="text" class="form-control form-control-lg">
											<p name="nameerror"><?php echo $nameerror?></p>
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
											<p name="emailerror"><?php echo $emailerror?></p>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="pass" placeholder="Enter password">
											<p name="passerror"><?php echo $passerror?></p>
										</div>
										<div class="mb-3">
											<label class="form-label">Image</label>
											<input class="form-control form-control-lg" type="file" name="img">
											<p name="imgerror"><?php echo $imgerror?></p>
										</div>
										<div class="text-center mt-3">
											<p name="submiterror"><?php echo $submiterror?></p>
											<button type="submit" name="submit" class="btn btn-lg btn-primary">Sign Up</button>											
										</div>
										<div>
											<h5 class="text-center mt-3">If you already have account <a href="./sign_in_se.php"> "Sign-in"</a></h5>
										</div>
									</form>
								</div>
							</div>
						</div>

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

</html>