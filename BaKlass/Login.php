<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/BaKlass-Logo.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="JikoPik Team">
	<meta name="robots" content="index, follow" />
	<meta name="description" content="سامانه اطلاع رسانی آموزشی دانشگاه آزاد اسلامی استان قم">
	<meta property="og:image" content="images/BaKlass-Logo.png" />
	<meta property="og:title" content="باکلاس | BaKlass" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content="سامانه اطلاع رسانی آموزشی دانشگاه آزاد اسلامی استان قم" />
	<meta property="og:url" content="http://baklass.ir/" />
	<meta property="og:site_name" content="باکلاس | BaKlass" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>سامانه باکلاس |</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1 class="header-title">با کلاس، در کلاس (:</h1>
			<form method="post" id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input type="text" class="login-form" name="username" placeholder="نام کاربری" style="text-align: center;" value="">
				<input type="password" class="login-form" name="password" placeholder="کلمه عبور" style="text-align: center;">
				<button id="login-button" type="submit" name="submit" style="display:block;margin:auto">ورود</button>
				<div class="row mt-2 justify-content-center" style="margin:auto"> <a href="Forgot-Password.php" class="text-dark" style="font-size:12px">بازیابی کلمه عبور</a>
				</div>
				<div class="row mt-2 justify-content-center" style="margin:auto"> <a href="Register.php" class="btn btn-outline-dark btn-sm ml-1">درخواست ثبت نام</a>
					<button name="guest" class="btn btn-outline-danger btn-sm mr-1" style="width:135px;">ورود به عنوان مهمان</button>
				</div>
			</form>
		</div>
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
<?php
    include 'footer.php';
?>
