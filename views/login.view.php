
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/libs/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/public/css/style.css"/>
	<style > body {
		background: url(./libs/images/login.jpg);
		background-position: left;
		background-size: cover
	}
	</style>
</head>
</head>
<body>
<?php require './views/partials/nav.php' ?>
</form>
<div style="padding-top: 200px" class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="color: black">Sign In</h3>
			</div>
			<div class="card-body">
				<form action="/loginsucess" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<!-- <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Nếu mày chưa có acc?<a href="#">Đăng ký đi</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Nếu mày đã quên pass?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
<br>	
