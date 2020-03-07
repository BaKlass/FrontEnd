<?php
  include 'header.php';
?>
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
<div class="row">
	<div class="col-8 text-right">
		<h3 class="header-title">ثبت نظر، انتقاد و پیشنهادات</h3>
	</div>
	<div class="col-4 mt-2"> <a href="Dashboard.php" class="menu-item-small">بازگشت</a>
	</div>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="row">
		<div class="col-lg-4 text-right">
			<p>نام و نام خانوادگی: <span class="required">*</span>
				<input class="form-control" type="text" name="personal_name" value="" <?php if(isset($readonly)) echo $readonly ?>></p>
		</div>
		<div class="col-lg-4 text-right">
			<p>شماره تماس:
				<input class="form-control" type="text" dir="ltr" name="phone_number" value="">
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>ایمیل: <span class="required">*</span>
				<input class="form-control" type="email" dir="ltr" name="email" value="">
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 text-right">
			<p>متن پیام: <span class="required">*</span>
				<textarea class="form-control" name="text" placeholder="متن پیام موردنظر خود را بنویسید"></textarea>
			</p>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-12">
			<button type="submit" name="Save-Message" class="btn btn-success btn-sm btn-block">ارسال پیام</button>
		</div>
	</div>
</form>
<?php
  include 'bubbles.php';
?>
<?php
  include 'footer.php';
?>
