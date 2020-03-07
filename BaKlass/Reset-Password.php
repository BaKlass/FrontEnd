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
      <div class="row" id="alertDanger">
      	<div class="col-lg-12">
      		<div class="alert alert-danger text-right alert-mobile">
      			<p style="margin:0;display:inline-block"><i class="fa fa-info-circle" style="vertical-align:middle"></i>
      				نمایش پیام خطا
      			</p>
      			<button type="button" class="close float-left alert-close" onclick="alertClose(0)"><i class="fa fa-times-circle"></i>
      			</button>
      		</div>
      	</div>
      </div>
      <div class="row" id="alertSuccess">
      	<div class="col-lg-12">
      		<div class="alert alert-success text-right alert-mobile">
      			<p style="margin:0;display:inline-block"><i class="fa fa-check-circle" style="vertical-align:middle"></i>
      				نمایش پیام موفق
      			</p>
      			<button type="button" class="close float-left alert-close" onclick="alertClose(1)"><i class="fa fa-times-circle"></i>
      			</button>
      		</div>
      	</div>
      </div>
			<h1 class="header-title">بازیابی کلمه عبور</h1>
			<form method="post" id="loginForm" action="">
				<input type="password" class="login-form" name="password" dir="ltr" placeholder="رمز عبور جدید" style="text-align: center;">
				<input type="password" class="login-form" name="repassword" dir="ltr" placeholder="تکرار رمز عبور جدید" style="text-align: center;">
				<button id="login-button" type="submit" name="reset" style="display:block;margin:auto">بروزرسانی</button>
				<div class="row mt-2 justify-content-center" style="margin:auto"> <a href="Login.php" class="btn btn-outline-danger btn-sm mr-1" style="width:150px;">بازگشت به صفحه ورود</a>
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
