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
	       content: "نام درس";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(3):before {
	       content: "نام استاد";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(4):before {
	       content: "محل و زمان برگزاری";
	       font-weight: bold;
	       color: #000000;
	       right: 5px;
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
		<h3 class="header-title">مدیریت اطلاعات دروس ارائه شده</h3>
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
			<button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#add" name="button">افزودن درس +</button>
		</div>
	</div>
</form>
<div class="row mt-2">
	<div class="col-lg-12 table-responsive">
		<table class="table text-center table-bordered table-hover table-sm table-striped">
			<thead>
				<tr>
					<th>ردیف</th>
					<th>نام درس</th>
					<th>نام استاد</th>
					<th>محل و زمان برگزاری</th>
					<th>عملیات</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>مبانی کامپیوتر</td>
					<td>علی میزرائی</td>
					<td>سه شنبه</td>
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
				<div class="col-lg-10 col-4 text-center page-number-mobile" style="margin:auto;color:#17a2b8">صفحه 1 از 5</div>
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
				<h5 class="modal-title" id="exampleModalLabel">مدیریت درس</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-6">
							<p>نام درس:
								<select name="lessons-name" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا نام درس را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>نام استاد:
								<select name="teacher-name" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا نام استاد را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<p>بازه زمانی اول:
								<select name="time-period1" class="form-control no-padding">
									<option value="" disabled selected>لطفا بازه زمانی را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>روز بازه زمانی اول:
								<select name="weekday1" class="form-control no-padding">
									<option value="" disabled selected>لطفا روز مورد نظر را انتخاب نمایید.</option>
									<option value="0">شنبه</option>
									<option value="1">یکشنبه</option>
									<option value="2">دوشنبه</option>
									<option value="3">سه شنبه</option>
									<option value="4">چهارشنبه</option>
									<option value="5">پنجشنبه</option>
									<option value="6">جمعه</option>
								</select>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>نوع بازه زمانی اول:
								<select name="time-type1" class="form-control no-padding">
									<option value="" disabled selected>لطفا نوع بازه زمانی را انتخاب نمایید.</option>
									<option value="0">ساعت ثابت</option>
									<option value="1">هفته فرد</option>
									<option value="2">هفته زوج</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>انتخاب کلاس:
								<select name="class-name1" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا کلاس را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<p>بازه زمانی دوم:
								<select name="time-period2" class="form-control no-padding ">
									<option value="" disabled selected>لطفا بازه زمانی را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>روز بازه زمانی دوم:
								<select name="weekday2" class="form-control no-padding">
									<option value="" disabled selected>لطفا روز مورد نظر را انتخاب نمایید.</option>
									<option value="0">شنبه</option>
									<option value="1">یکشنبه</option>
									<option value="2">دوشنبه</option>
									<option value="3">سه شنبه</option>
									<option value="4">چهارشنبه</option>
									<option value="5">پنجشنبه</option>
									<option value="6">جمعه</option>
								</select>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>نوع بازه زمانی دوم:
								<select name="time-type2" class="form-control no-padding">
									<option value="" disabled selected>لطفا نوع بازه زمانی را انتخاب نمایید.</option>
									<option value="0">ساعت ثابت</option>
									<option value="1">هفته فرد</option>
									<option value="2">هفته زوج</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>انتخاب کلاس:
								<select name="class-name2" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا کلاس را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="button" class="btn btn-danger btn-sm btn-block" data-dismiss="modal">انصراف</button>
						</div>
						<div class="col-6 float-right">
							<button type="button" class="btn btn-success btn-sm btn-block">ثبت تغییرات</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ارائه درس</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-6">
							<p>نام درس:
								<select name="lessons-name" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا نام درس را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>نام استاد:
								<select name="teacher-name" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا نام استاد را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<p>بازه زمانی اول:
								<select name="time-period1" class="form-control no-padding">
									<option value="" disabled selected>لطفا بازه زمانی را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>روز بازه زمانی اول:
								<select name="weekday1" class="form-control no-padding">
									<option value="" disabled selected>لطفا روز مورد نظر را انتخاب نمایید.</option>
									<option value="0">شنبه</option>
									<option value="1">یکشنبه</option>
									<option value="2">دوشنبه</option>
									<option value="3">سه شنبه</option>
									<option value="4">چهارشنبه</option>
									<option value="5">پنجشنبه</option>
									<option value="6">جمعه</option>
								</select>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>نوع بازه زمانی اول:
								<select name="time-type1" class="form-control no-padding">
									<option value="" disabled selected>لطفا نوع بازه زمانی را انتخاب نمایید.</option>
									<option value="0">ساعت ثابت</option>
									<option value="1">هفته فرد</option>
									<option value="2">هفته زوج</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>انتخاب کلاس:
								<select name="class-name1" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا کلاس را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<p>بازه زمانی دوم:
								<select name="time-period2" class="form-control no-padding">
									<option value="" disabled selected>لطفا بازه زمانی را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>روز بازه زمانی دوم:
								<select name="weekday2" class="form-control no-padding">
									<option value="" disabled selected>لطفا روز مورد نظر را انتخاب نمایید.</option>
									<option value="0">شنبه</option>
									<option value="1">یکشنبه</option>
									<option value="2">دوشنبه</option>
									<option value="3">سه شنبه</option>
									<option value="4">چهارشنبه</option>
									<option value="5">پنجشنبه</option>
									<option value="6">جمعه</option>
								</select>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<p>نوع بازه زمانی دوم:
								<select name="time-type2" class="form-control no-padding">
									<option value="" disabled selected>لطفا نوع بازه زمانی را انتخاب نمایید.</option>
									<option value="0">ساعت ثابت</option>
									<option value="1">هفته فرد</option>
									<option value="2">هفته زوج</option>
								</select>
							</p>
						</div>
						<div class="col-lg-6">
							<p>انتخاب کلاس:
								<select name="class-name2" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا کلاس را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="submit" name="Add-Lesson" class="btn btn-success btn-sm btn-block">ثبت</button>
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
				<h5 class="modal-title" id="exampleModalLabel">حذف درس</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<input type="hidden" value="" name="lesson_id">
							<p>
								<?php echo "آیا مایل به حذف/جایگزینی درس مبانی کامپیوتر هستید؟" ?>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-lg-4 col-12 float-right mb-btn-mobile">
							<button type="submit" name="Delete-Lesson" class="btn btn-danger btn-sm btn-block">حذف</button>
						</div>
						<div class="col-lg-4 col-6 float-right">
							<button type="button" class="btn btn-warning btn-sm btn-block" data-dismiss="modal" data-toggle="modal" data-target="#replace">جایگزینی</button>
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
<!-- End Delete Modal -->
<!-- Replace Modal -->
<div class="modal fade" id="replace" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">جایگزینی درس</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<p>نام درس:
								<input type="hidden" value="" name="lesson_id">
								<select name="lessons-name" class="form-control no-padding selectfield">
									<option value="" disabled selected>لطفا نام درس را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="submit" name="Replace-Lesson" class="btn btn-success btn-sm btn-block">جایگزینی</button>
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
<!-- End Replace Modal -->
<?php
  include 'footer.php';
?>
