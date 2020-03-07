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
	       content: "کداستادی";
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
		<h3 class="header-title">مدیریت اطلاعات اساتید</h3>
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
			<button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#add" name="button">افزودن استاد +</button>
		</div>
	</div>
</form>
<div class="row mt-2">
	<div class="col-lg-12 table-responsive">
		<table class="table text-center table-bordered table-hover table-sm table-striped">
			<thead>
				<tr>
					<th>ردیف</th>
					<th>کد استادی</th>
					<th>نام</th>
					<th>نام خانوادگی</th>
					<th>شماره تماس</th>
					<th>ایمیل</th>
					<th>عملیات</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>94315</td>
					<td>علی</td>
					<td>ملایی</td>
					<td>09107554839</td>
					<td>test@test.com</td>
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
				<div class="col-lg-10 col-4 text-center page-number-mobile" style="margin:auto;color:#17a2b8">صفحه 1 از 4</div>
				<div class="col-lg-1 col-4 text-left float-left"> <a class="btn btn-outline-info" href="#"><i style="vertical-align:middle" class="fas fa-arrow-left"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'bubbles.php'; ?>
<!-- Modal -->
<div class="modal fade" id="manage" tabindex="-1" role="dialog" aria-labelledby="manage" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">مدیریت اطلاعات استاد</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<input type="hidden" value="" name="id">
							<input type="hidden" value="" name="old_number">
							<p>کد استاد:
								<input type="number" dir="ltr" class="form-control" name="number" value="">
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
				<h5 class="modal-title" id="exampleModalLabel">تغییر کلمه عبور استاد</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<p>رمز عبور جدید:
								<input type="hidden" value="" name="teacher_code">
								<input type="password" dir="ltr" name="newpassword" class="form-control" value=""> <span class="text-danger" style="font-size:10px">برای تغییر رمز عبور صرفا از حروف و اعداد انگلیسی استفاده کنید</span>
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
				<h5 class="modal-title" id="exampleModalLabel">افزودن استاد</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<p>کد استاد:
								<input type="number" dir="ltr" name="number" class="form-control" value="">
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
						<div class="col-12 mt-5">
							<button type="button" class="btn btn-primary btn-sm btn-block" data-dismiss="modal" data-toggle="modal" data-target="#upload"><i class="fa fa-upload"></i> بارگذاری اطلاعات</button>
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
				<h5 class="modal-title" id="exampleModalLabel">حذف استاد</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<input type="hidden" value="" name="teacher_code">
							<p>
								<?php echo "آیا از حذف استاد علی ملایی با کداستادی 94315 مطمئن هستید؟";?>
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
<!-- Upload Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">بارگذاری اطلاعات اساتید</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<div class="custom-file mb-3">
								<input type="file" class="custom-file-input" id="customFile" name="filename">
								<label class="custom-file-label browse-label-custom" for="customFile">انتخاب فایل</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-3"> <span>فایل نمونه:</span>
								</div>
								<div class="col-9"> <a href="#">دانلود</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="submit" class="btn btn-success btn-sm btn-block" name="upload">ثبت</button>
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
<!-- End Upload Modal -->
<?php
  include 'footer.php';
?>
