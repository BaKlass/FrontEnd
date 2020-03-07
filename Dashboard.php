<?php 
  include 'header.php'; 
?>
<div class="col-lg-12 text-right">
	<h3 class="header-title">دانشجو باکلاسی عزیز محمد زارعی خوش آمدید.</h3>
</div>
<div class="col-12 menu text-center">
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Courses-offered.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-clipboard-list"></i> دروس ارائه شده</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Selected-Lessons.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-file-medical"></i> دروس منتخب</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Send-Message.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-paper-plane"></i> مشاهده و ارسال پیام</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="View-Received-Messages.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-envelope-open-text"></i> پیام های دریافتی</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Student-Information-Management.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-user-graduate"></i> مدیریت دانشجویان</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Management-of-courses-offered.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-book"></i> مدیریت دروس ارائه شده</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Teacher-Information-Management.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-chalkboard-teacher"></i> مدیریت اساتید</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Confirmation-of-Teachers-Information.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-check"></i> تایید اطلاعات اساتید</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Management-Classes.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-chalkboard"></i> مدیریت کلاس ها</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Managing-Time-Periods.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-clock"></i> مدیریت بازه های زمانی</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Managing-Administrators.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-user-shield"></i> مدیریت مدیران سیستم</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Lessons-Information-Management.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-book-open"></i> مدیریت دروس</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Fields-Information-Management.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fas fa-brain"></i> مدیریت رشته ها</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Manage-Sent-Messages.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fas fa-brain"></i> مدیریت پیام ها</div>
		</a>
	</div>
	<div class="col-lg-3 float-right mobile-menu">
		<a href="Opinions.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-comment"></i> ثبت نظر، انتقاد و پیشنهادات</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-6 float-right mobile-menu">
		<a href="Profile.php" style="text-decoration: none;">
			<div class="menu-item"> <i class="fa fa-address-card"></i> پروفایل کاربری</div>
		</a>
	</div>'
	<div class="col-lg-3 float-right exit-mobile mobile-menu"> <a href="Logout.php" class="menu-item"><i class="fa fa-sign-out-alt"></i> خروج</a>
	</div>
</div>
<?php include 'bubbles.php'; ?>
<!-- Modal -->
<div class="modal fade" id="unreadMessage" tabindex="-1" role="dialog" aria-labelledby="see" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-right">
				<div class="row">
					<div class="col-lg-12 text-center"> <span>شما <strong class="text-danger">2 پیام</strong> خوانده نشده دارید</span>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="col-12">
					<div class="col-12">
						<div class="col-6 float-right"> <a href="View-Received-Messages.php" class="btn btn-success btn-sm btn-block">مشاهده پیام ها </a>
						</div>
						<div class="col-6 float-right">
							<button type="button" class="btn btn-dark btn-sm btn-block" data-dismiss="modal">بستن</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
<?php 
  include 'footer.php'; 
?>