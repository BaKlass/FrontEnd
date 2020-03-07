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
	       content: "کد استادی";
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
	       content: "وضعیت استاد";
	       font-weight: bold;
	       margin-top:5px;
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
		<h3 class="header-title">تایید اطلاعات اساتید</h3>
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
					<th>کد استادی</th>
					<th>نام</th>
					<th>نام خانوادگی</th>
					<th>شماره تماس</th>
					<th>ایمیل</th>
					<th>وضعیت استاد</th>
					<th>عملیات</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>123</td>
					<td>علی</td>
					<td>احمدی</td>
					<td>09104886248</td>
					<td>test@test.com</td>
					<td>
						<button class="btn btn-outline-danger btn-sm btn-block"><i class="fa fa-user-times"></i>
						</button>
						<button class="btn btn-outline-success btn-sm btn-block"><i class="fa fa-user-check"></i>
						</button>
					</td>
					<td class="table-btn"> <a href="#" class="btn btn-outline-success btn-sm col-lg-5 col-5"><i class="fa fa-user-check"></i></a>
						<a href="#" class="btn btn-outline-danger btn-sm col-lg-5 col-5"><i class="fa fa-user-times"></i></a>
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
<?php
  include 'bubbles.php';
?>
<?php
  include 'footer.php';
?>
