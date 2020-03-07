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
		<h3 class="header-title">پروفایل کاربری</h3>
	</div>
	<div class="col-4 mt-2"> <a href="Dashboard.php" class="menu-item-small">بازگشت</a>
	</div>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="row">
		<div class="col-lg-4 text-right">
			<p>شماره دانشجویی:
				<input class="form-control" dir="ltr" type="text" value="" readonly>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>نام: <span class="required">*</span>
				<input class="form-control" name="fname-edited" type="text" value="" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>نام خانوادگی: <span class="required">*</span>
				<input class="form-control" name="lname-edited" type="text" value="" required>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 text-right">
			<p>شماره تماس: <span class="required">*</span>
				<input class="form-control" name="phonenumber-edited" value="" type="text" dir="ltr" maxlength="11" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>ایمیل: <span class="required">*</span>
				<input class="form-control" name="email-edited" value="" type="email" dir="ltr" required>
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>رشته تحصیلی: <span class="required">*</span>
				<select class="form-control selectfield" name="field">
					<option value="" disabled selected>لطفا رشته خود را انتخاب نمایید.</option>
				</select>
			</p>
		</div>
	</div>
	<div class="row mb-2" id="changePasswordBtn">
		<div class="col-lg-12">
			<button type="button" onclick="changePassword()" name="ch-pass" class="btn btn-warning btn-sm btn-block">تغییر رمز عبور</button>
		</div>
	</div>
	<div class="row" id="changePassword" style="display:none">
		<div class="col-lg-4 text-right">
			<p>رمز عبور فعلی: <span class="required">*</span>
				<input class="form-control" name="current-password" type="password" dir="ltr">
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>رمز عبور جدید: <span class="required">*</span>
				<input class="form-control" name="enpassword-edited" type="password" dir="ltr">
			</p>
		</div>
		<div class="col-lg-4 text-right">
			<p>تکرار رمز عبور جدید: <span class="required">*</span>
				<input class="form-control" name="repassword-edited" type="password" dir="ltr">
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<button type="submit" name="update" class="btn btn-success btn-sm btn-block">به روزرسانی</button>
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
