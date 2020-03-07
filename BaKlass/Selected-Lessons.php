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
		<h3 class="header-title">دروس منتخب</h3>
	</div>
	<div class="col-4 mt-2"> <a href="Dashboard.php" class="menu-item-small">بازگشت</a>
	</div>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="row mt-2">
		<div class="col-lg-11">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text rtl-field-prepend"><i class="fa fa-search"></i>
					</div>
				</div>
				<input type="text" class="form-control rtl-field-text" value="" name="insearch" placeholder="جستجو در تمامی فیلدها">
			</div>
		</div>
		<div class="col-lg-1 mobile-btn">
			<button type="submit" class="btn btn-outline-success btn-block" name="search">جستجو</button>
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
					<td>علی ملایی</td>
					<td>سه شنبه</td>
					<td class="table-btn">
						<button class="btn btn-outline-dark btn-sm col-lg-5 col-5" data-toggle="modal" title="مشاهده اطلاعات درس" data-target="#see"><i class="fa fa-eye"></i>
						</button>
						<button class="btn btn-outline-danger btn-sm col-lg-5 col-5" data-toggle="modal" data-target="#delete" title="حذف درس انتخابی"><i class="fa fa-trash-alt"></i>
						</button>
						<button class="btn btn-outline-dark btn-sm btn-block" data-toggle="modal" title="مشاهده اطلاعات درس" data-target="#see"><i class="fa fa-eye"></i>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="row mb-btn-mobile">
			<div class="col-12 p-0 d-flex justify-content-center">
				<div class="col-lg-1 col-4 text-right float-right"> <a class="btn btn-outline-info" href="#"><i style="vertical-align:middle" class="fas fa-arrow-right"></i></a>
				</div>
				<div class="col-lg-10 col-4 text-center page-number-mobile" style="margin:auto;color:#17a2b8">صفحه 1 از 10</div>
				<div class="col-lg-1 col-4 text-left float-left"> <a class="btn btn-outline-info" href="#"><i style="vertical-align:middle" class="fas fa-arrow-left"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
  include 'bubbles.php';
?>
<!-- Modal Delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">حذف درس</h5>
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
					<div class="col-lg-12">
						<p class="m-0">نام استاد: <strong class="text-primary"></strong>
						</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="col-12">
					<div class="col-lg-8 flaot-right text-lg-right d-inline-block text-center" style="margin-top:3px">
						<p class="m-0">آیا از حذف این درس مطمئن هستید؟</p>
					</div>
					<div class="col-lg-4 float-left"> <a href="#" class="btn btn-danger btn-sm btn-block">حذف درس</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="see" tabindex="-1" role="dialog" aria-labelledby="see" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">مشاهده درس</h5>
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
					<div class="col-lg-12">
						<p class="m-0">نام استاد: <strong class="text-primary"></strong>
						</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-12">
						<p class="m-0">محل و زمان برگزاری: <strong class="text-primary"></strong>
						</p>
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
<!-- End Delete Modal -->
<?php
  include 'footer.php';
?>
