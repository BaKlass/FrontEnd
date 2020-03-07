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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="row">
		<div class="col-8 text-right">
			<h3 class="header-title">درخواست ثبت نام</h3>
		</div>
		<div class="col-4 mt-2"> <a href="Login.php" class="menu-item-small">بازگشت</a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 text-right">
			<p>نام: <span class="required">*</span>
				<input class="form-control" name="fname" id="fname" type="text" value="" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>نام خانوادگی: <span class="required">*</span>
				<input class="form-control" name="lname" type="text" value="" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>شماره دانشجویی / کداستادی: <span class="required">*</span>
				<input class="form-control" dir="ltr" id="user-number" name="number" type="text" value="" required>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 text-right">
			<p>شماره تماس: <span class="required">*</span>
				<input class="form-control" type="text" name="phone_number" dir="ltr" value="" maxlength="11" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>ایمیل: <span class="required">*</span>
				<input class="form-control" type="email" name="email" dir="ltr" value="" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>رشته (مخصوص دانشجویان):
				<select class="form-control selectfield" name="field">
					<option value="" disabled selected>لطفا رشته خود را انتخاب نمایید.</option>
				</select>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 text-right">
			<p>نوع کاربری: <span class="required">*</span>
				<select class="form-control" name="user_type" required>
					<option value="" disabled selected>لطفا نوع کاربری خود را انتخاب نمایید.</option>
					<option value="3">دانشجو</option>
					<option value="2">استاد</option>
				</select>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>کلمه عبور: <span class="required">*</span>
				<input class="form-control" name="enpassword" type="password" dir="ltr" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>تکرار کلمه عبور: <span class="required">*</span>
				<input class="form-control" name="repassword" type="password" dir="ltr" required>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<button type="submit" name="submit" id="save" class="btn btn-success btn-sm btn-block">ارسال درخواست ثبت نام</button>
		</div>
	</div>
</form>
<?php include 'bubbles.php'; ?>
<script type="text/javascript">
	function changePassword(){
	      document.getElementById('changePassword').style.display = 'flex';
	      document.getElementById('changePasswordBtn').style.display = 'none';
	    }
</script>
<?php
    include 'footer.php';
?>
