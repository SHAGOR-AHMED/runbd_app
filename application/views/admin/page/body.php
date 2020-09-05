<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				Dashboard
			</h3>
		</div>
	  
		<div class="row grid-margin">
			<div class="col-12">
				<div class="card card-statistics">
					<div class="card-body">
						<div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
							<div class="statistics-item">
								<p>
									<i class="icon-sm fa fa-user mr-2"></i>
									Total Member's
								</p>
								<h2><?= count($all_members);?>+</h2>
							</div>
							
							<div class="statistics-item">
								<p>
									<i class="icon-sm fa fa-user mr-2"></i>
									Total Biker's
								</p>
								<h2><?= count($bikes);?>+</h2>
							</div>
						  
							<div class="statistics-item">
								<p>
									<i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
									Total Bike's
								</p>
								<h2><?= count($all_biker);?>+</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							<i class="fas fa-calendar-alt"></i>
							Calendar
						</h4>
						<div id="inline-datepicker-example" class="datepicker"></div>
					</div>
				</div>
			</div>
		</div>
	  
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">
							<i class="fas fa-thumbtack"></i>
							Todo
						</h4>
						
						<div class="add-items d-flex">
							<input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
							<button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
						</div>
						<div class="list-wrapper">
							<ul class="d-flex flex-column-reverse todo-list">
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Meeting with Alisa
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Call John
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Create invoice
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Print Statements
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Prepare for presentation
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Pick up kids from school
										</label>
									</div>
									<i class="remove fa fa-times-circle"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	  
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="d-md-flex justify-content-between align-items-center">
							<div class="d-flex align-items-center mb-3 mb-md-0">
								<button class="btn btn-social-icon btn-facebook btn-rounded">
									<i class="fab fa-facebook-f"></i>
								</button>
								<div class="ml-4">
									<h5 class="mb-0">Facebook</h5>
									<p class="mb-0">813 friends</p>
								</div>
							</div>
							
							<div class="d-flex align-items-center mb-3 mb-md-0">
								<button class="btn btn-social-icon btn-twitter btn-rounded">
									<i class="fab fa-twitter"></i>
								</button>
								<div class="ml-4">
									<h5 class="mb-0">Twitter</h5>
									<p class="mb-0">9000 followers</p>
								</div>
							</div>
							
							<div class="d-flex align-items-center mb-3 mb-md-0">
								<button class="btn btn-social-icon btn-google btn-rounded">
									<i class="fab fa-google-plus-g"></i>
								</button>
								<div class="ml-4">
									<h5 class="mb-0">Google plus</h5>
									<p class="mb-0">780 friends</p>
								</div>
							</div>
							
							<div class="d-flex align-items-center">
								<button class="btn btn-social-icon btn-linkedin btn-rounded">
									<i class="fab fa-linkedin-in"></i>
								</button>
								<div class="ml-4">
									<h5 class="mb-0">Linkedin</h5>
									<p class="mb-0">1090 connections</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- content-wrapper ends -->
	<!-- partial:partials/_footer.html -->
	<footer class="footer">
		<div class="d-sm-flex justify-content-center justify-content-sm-between">
			<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018</span>
		</div>
	</footer>
	<!-- partial -->
</div>