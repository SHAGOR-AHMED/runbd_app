<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
	  	<li class="nav-item nav-profile">
			<div class="nav-link">
				<div class="profile-image">
					<img src="<?= base_url('assets/admin/');?>images/avatar.jpg" alt="image"/>
				</div>
				<div class="profile-name">
					<p class="name">Welcome <?= $this->session->userdata('user_name') ?></p>
					<p class="designation">Super Admin</p>
				</div>
			</div>
	  	</li>

	  	<li class="nav-item">
			<a class="nav-link" href="<?= base_url('admin/');?>">
		  		<i class="fa fa-home menu-icon"></i>
		  		<span class="menu-title">Dashboard</span>
			</a>
	  	</li>

	  	<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#bike-layouts" aria-expanded="false" aria-controls="bike-layouts">
		  		<i class="fa fa-motorcycle menu-icon"></i>
		  		<span class="menu-title">Manage Bike</span>
		  		<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="bike-layouts">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('bike/')?>">Bikes</a></li>
					<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('bike/ReturnBike')?>">Return Bike</a></li>
				</ul>
			</div>
	  	</li>

	  	<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#Member-layouts" aria-expanded="false" aria-controls="Member-layouts">
		  		<i class="fa fa-motorcycle menu-icon"></i>
		  		<span class="menu-title">Manage Member</span>
		  		<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="Member-layouts">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('member/')?>">View Member</a></li>
					<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('member/MerbershipFees')?>">Membership Fees</a></li>
				</ul>
			</div>
	  	</li>

	  	<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
		  		<i class="fa fa-motorcycle menu-icon"></i>
		  		<span class="menu-title">Bike & Biker Info</span>
		  		<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="page-layouts">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('BikeDistribution/')?>">Bike Distribution</a></li>
				</ul>
			</div>
	  	</li>

	  	<li class="nav-item d-none d-lg-block">
			<a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
		  		<i class="fa fa-server menu-icon"></i>
		  		<span class="menu-title">Servicing Information</span>
		  		<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="sidebar-layouts">
		  		<ul class="nav flex-column sub-menu">
					<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('servicing/')?>">Check Servicing</a></li>
					<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('servicing/viewServicingStatus')?>">View Servicing</a></li>
		  		</ul>
			</div>
	  	</li>
	  
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
			  	<i class="fas fa-motorcycle menu-icon"></i>
			  	<span class="menu-title">Vehicles Section</span>
			  	<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="general-pages">
			  	<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="#"> kon kon biker chalaiche </a></li>
					<li class="nav-item"> <a class="nav-link" href="#"> koidin chalaiche </a></li>
					<li class="nav-item"> <a class="nav-link" href="#"> koto mileage chalaiche </a></li>
			  	</ul>
			</div>
		</li>


		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#daily-pages" aria-expanded="false" aria-controls="daily-pages">
			  	<i class="fas fa-money-bill-alt menu-icon"></i>
			  	<span class="menu-title">Daily Payment</span>
			  	<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="daily-pages">
			  	<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('payment/')?>"> View Payment </a></li>
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('payment/searchIndividual')?>"> Search </a></li>
			  	</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#penalty-pages" aria-expanded="false" aria-controls="penalty-pages">
			  	<i class="fas fa-money-bill-alt menu-icon"></i>
			  	<span class="menu-title">Penalty Section</span>
			  	<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="penalty-pages">
			  	<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('penalty/')?>"> View Penalty </a></li>
			  	</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#loan-pages" aria-expanded="false" aria-controls="loan-pages">
			  	<i class="fas fa-money-bill menu-icon"></i>
			  	<span class="menu-title">Loan Section</span>
			  	<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="loan-pages">
			  	<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('loan/')?>"> View Loan </a></li>
			  	</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('expense/');?>">
		  		<i class="fa fa-cart-arrow-down menu-icon"></i>
		  		<span class="menu-title">Daily Expense</span>
			</a>
	  	</li>

	  	<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#account-pages" aria-expanded="false" aria-controls="account-pages">
			  	<i class="fas fa-money-bill menu-icon"></i>
			  	<span class="menu-title">Account Section</span>
			  	<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="account-pages">
			  	<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="<?= base_url('account/')?>"> View Account </a></li>
			  	</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#report-pages" aria-expanded="false" aria-controls="report-pages">
			  	<i class="fas fa-money-bill menu-icon"></i>
			  	<span class="menu-title">Report Section</span>
			  	<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="report-pages">
			  	<ul class="nav flex-column sub-menu">
			  		<li class="nav-item"> <a class="nav-link" href="<?= base_url('report/')?>">Daily Payment Report </a></li>
			  	</ul>
			</div>
		</li>

	</ul>
</nav>