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
	       content: "نام فرستنده";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(4):before {
	       content: "عنوان پیام";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(5):before {
	       content: "متن پیام";
	       font-weight: bold;
	       color: #000000;
	     }
	     table tbody tr td:nth-child(6):before {
	       content: "زمان ارسال";
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
		<h3 class="header-title">مشاهده و ارسال پیام</h3>
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
			<button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#add" name="button">ایجاد پیام جدید +</button>
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
					<th>نام فرستنده</td>
						<th>عنوان پیام</th>
						<th>متن پیام</th>
						<th>زمان ارسال</th>
						<th>عملیات</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>مبانی کامپیوتر</td>
					<td>علی میرزائی</td>
					<td>تاخیر</td>
					<td>تاخیر</td>
					<td>1398</td>
					<td class="table-btn">
						<button class="btn btn-outline-dark btn-sm btn-block" data-toggle="modal" title="مشاهده پیام" data-target="#see"><i class="fa fa-eye"></i>
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
<div class="modal fade" id="see" tabindex="-1" role="dialog" aria-labelledby="see" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">مشاهده پیام</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-right">
				<div class="row">
					<div class="col-lg-12">
						<p class="m-0">نام درس: <strong class="text-primary"></strong>
						</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6">
						<p class="m-0">نام فرستنده: <strong class="text-primary"></strong>
						</p>
					</div>
					<div class="col-lg-6">
						<p class="m-0">زمان ارسال: <strong class="text-primary"></strong>
						</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6">
						<p class="m-0">عنوان پیام: <strong class="text-primary"></strong>
						</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-12">
						<p class="m-0">متن پیام:</p> <strong class="text-primary"></strong>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="col-12">
					<div class="col-12">
						<button type="button" class="btn btn-dark btn-sm btn-block" data-dismiss="modal">بستن</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
<!-- Add User Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ارسال پیام</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="modal-body text-right">
					<div class="row">
						<div class="col-lg-12">
							<p>عنوان پیام: <span class="required">*</span>
								<input type="text" class="form-control" name="message_title" maxlength="200" required>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<p>نام درس: <span class="required">*</span>
								<select class="form-control no-padding" name="lesson" required>
									<option value="" disabled selected>لطفا درس مورد نظر خود را انتخاب نمایید.</option>
								</select>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<p>متن پیام: <span class="required">*</span>
								<textarea class="form-control" rows="3" placeholder="متن پیام موردنظر خود را بنویسید" name="message_text" maxlength="1000" required></textarea>
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-12">
						<div class="col-6 float-right">
							<button type="submit" name="submit" class="btn btn-success btn-sm btn-block">ارسال پیام</button>
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
<?php
  include 'footer.php';
?>
