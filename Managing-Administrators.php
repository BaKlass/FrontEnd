<?php
  include 'header.php';
?>
<style>
	@media screen and (max-width: 700px){
	     table tbody tr td:nth-child(1):before {
	       content: "ردیف";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(2):before {
	       content: "کد پرسنلی";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(3):before {
	       content: "نام";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(4):before {
	       content: "نام خانوادگی";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(5):before {
	       content: "شماره تماس";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(6):before {
	       content: "ایمیل";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(7):before {
	       content: "سطح مدیریت";
	       font-weight: bold;
	       color: #000000;
	       margin-top: 5px;
	     }
	   }
</style>
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
		<h3 class="header-title">مدیریت اطلاعات مدیران سیستم</h3>
	</div>
	<div class="col-4 mt-2"> <a href="Dashboard.php" class="menu-item-small">بازگشت</a>
	</div>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="row mt-2">
		<div class="col-lg-9">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text rtl-field-prepend"><i class="fa fa-search"></i>
					</div>
				</div>
				<input type="text" class="form-control rtl-field-text" value="" name="insearch" placeholder="جستجو در تمامی فیلدها">
			</div>
		</div>
		<div class="col-lg-1 desktop-btn-padding mobile-btn">
			<button type="submit" class="btn btn-outline-success btn-block" name="search">جستجو</button>
		</div>
		<div class="col-lg-2 mobile-btn">
			<button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#add" name="button">افزودن مدیر سیستم +</button>
		</div>
	</div>
</form>
<div class="row mt-2">
	<div class="col-lg-12 table-responsive">
		<table class="table text-center table-bordered table-hover table-sm table-striped">
			<thead>
				<tr>
					<th>ردیف</th>
					<th>کد پرسنلی</th>
					<th>نام</th>
					<th>نام خانوادگی</th>
					<th>شماره تماس</th>
					<th>ایمیل</th>
					<th>سطح مدیریت</th>
					<th>عملیات</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>134</td>
					<td>محمد</td>
					<td>ملایی</td>
					<td>09107575268</td>
					<td>test@test.com</td>
					<td>
						<p class="btn btn-outline-dark btn-sm btn-block m-0">سطح یک</p>
					</td>
					<td class="table-btn">
						<button class="btn btn-outline-primary btn-sm col-lg-5 col-5" data-toggle="modal" data-target="#manage"><i class="fa fa-pencil-alt"></i>
						</button>
						<button class="btn btn-outline-danger btn-sm col-lg-5 col-5" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="row mb-btn-mobile">
			<div class="col-12 p-0 d-flex justify-content-center">
				<div class="col-lg-1 col-4 text-right float-right"> <a class="btn btn-outline-info" href="#"><i style="vertical-align:middle" class="fas fa-arrow-right"></i></a>
				</div>
				<div class="col-lg-10 col-4 text-center page-number-mobile" style="margin:auto;color:#17a2b8">صفحه 1 از 20</div>
				<div class="col-lg-1 col-4 text-left float-left"> <a class="btn btn-outline-info" href="#"><i style="vertical-align:middle" class="fas fa-arrow-left"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
  include 'bubbles.php';
?>
<!-- Modal -->
<?php $select_5="" ; $select_6="" ; $select_7="" ; ?>
<div class="modal fade" id="manage" tabindex="-1" role="dialog" aria-labelledby="manage" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">مدیریت اطلاعات مدیر سیستم</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-6">
							<p>کد پرسنلی:
								<input type="number" dir="ltr" name="number" class="form-control" value="">
							</p>
						</div>
						<div class="col-lg-6">
							<input type="hidden" value="" name="current-type">
							<p>سطح مدیریت:
								<select class="form-control no-padding" name="user-type">
									<option value="" selected disabled>لطفا سطح مدیریت را انتخاب نمایید.</option>
									<option value="5" <?php echo $select_5 ?>>مدیر سطح یک</option>
									<option value="6" <?php echo $select_6 ?>>مدیر سطح دو</option>
									<option value="7" <?php echo $select_7 ?>>مدیر سطح سه</option>
								</select>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>نام:
								<input type="text" class="form-control" name="fname" value="">
							</p>
						</div>
						<div class="col-lg-6">
							<p>نام خانوادگی:
								<input type="text" class="form-control" name="lname" value="">
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>شماره تماس:
								<input type="text" dir="ltr" class="form-control" name="phone_number" value="">
							</p>
						</div>
						<div class="col-lg-6">
							<p>ایمیل:
								<input type="email" dir="ltr" class="form-control" name="email" value="">
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-lg-4 col-12 float-right mb-btn-mobile">
							<button type="button" class="btn btn-warning btn-sm btn-block" data-dismiss="modal" data-toggle="modal" data-target="#changePassword">تغییر رمز عبور</button>
						</div>
						<div class="col-lg-4 col-6 float-right">
							<button type="submit" name="Update-User" class="btn btn-success btn-sm btn-block">ذخیره تغییرات</button>
						</div>
						<div class="col-lg-4 col-6 float-right">
							<button type="button" class="btn btn-secondary btn-sm btn-block" data-dismiss="modal">انصراف</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal -->
<!-- Change Password Modal -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">تغییر کلمه عبور مدیر سیستم</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<p>رمز عبور جدید:
								<input type="hidden" value="" name="personnel_code">
								<input type="password" name="newpassword" dir="ltr" class="form-control" value=""> <span class="text-danger" style="font-size:10px">برای تغییر رمز عبور صرفا از حروف و اعداد انگلیسی استفاده کنید</span>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="submit" name="Change-Password" class="btn btn-success btn-sm btn-block">ذخیره تغییرات</button>
						</div>
						<div class="col-6 float-right">
							<button type="button" class="btn btn-secondary btn-sm btn-block" data-dismiss="modal">انصراف</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Change Password Modal -->
<!-- Add User Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">افزودن مدیر سیستم</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-6">
							<p>کد پرسنلی:
								<input type="number" dir="ltr" name="number" class="form-control" value="">
							</p>
						</div>
						<div class="col-lg-6">
							<p>سطح مدیریت:
								<select class="form-control no-padding" name="user-type">
									<option value="" selected disabled>لطفا سطح مدیریت را انتخاب نمایید.</option>
									<option value="5">مدیر سطح یک</option>
									<option value="6">مدیر سطح دو</option>
									<option value="7">مدیر سطح سه</option>
								</select>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>نام:
								<input type="text" name="fname" class="form-control" value="">
							</p>
						</div>
						<div class="col-lg-6">
							<p>نام خانوادگی:
								<input type="text" name="lname" class="form-control" value="">
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>شماره تماس:
								<input type="text" dir="ltr" name="phone_number" class="form-control" value="">
							</p>
						</div>
						<div class="col-lg-6">
							<p>ایمیل:
								<input type="text" dir="ltr" name="email" class="form-control" value="">
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>کلمه عبور:
								<input type="password" dir="ltr" name="enpassword" class="form-control" value="">
							</p>
						</div>
						<div class="col-lg-6">
							<p>تکرار کلمه عبور:
								<input type="password" dir="ltr" name="repassword" class="form-control" value="">
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="submit" name="Add-User" class="btn btn-success btn-sm btn-block">ثبت</button>
						</div>
						<div class="col-6 float-right">
							<button type="button" class="btn btn-secondary btn-sm btn-block" data-dismiss="modal">انصراف</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Add User Modal -->
<!-- Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">حذف مدیر سیستم</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<input type="hidden" value="" name="personnel_code">
							<p>
								<?php echo "آیا از حذف مدیرسیستم محمد ملایی با کدپرسنلی 134 مطمئن هستید؟";?>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="submit" name="Delete-User" class="btn btn-warning btn-sm btn-block">حذف</button>
						</div>
						<div class="col-6 float-right">
							<button type="button" class="btn btn-secondary btn-sm btn-block" data-dismiss="modal">انصراف</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Delete Modal -->
<?php
  include 'footer.php';
?>
