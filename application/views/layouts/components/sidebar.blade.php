<?php $CI = &get_instance(); ?>
<aside class="app-aside app-aside-expand-md app-aside-light">
	<!-- .aside-content -->
	<div class="aside-content">
		<!-- .aside-header -->
		<header class="aside-header d-block d-md-none">
			<!-- .btn-account -->
			<button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span
					class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span
					class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
					class="account-summary"><span class="account-name">Beni Arisandi</span> <span
						class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
			<!-- .dropdown-aside -->
			<div id="dropdown-aside" class="dropdown-aside collapse">
				<!-- dropdown-items -->
				<div class="pb-3">
					<a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span>
						Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span
							class="dropdown-icon oi oi-account-logout"></span> Logout</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a
						class="dropdown-item" href="#">Keyboard Shortcuts</a>
				</div><!-- /dropdown-items -->
			</div><!-- /.dropdown-aside -->
		</header><!-- /.aside-header -->
		<!-- .aside-menu -->
		<div class="aside-menu overflow-hidden ps ps--active-y">
			<!-- .stacked-menu -->
			<nav id="stacked-menu" class="stacked-menu stacked-menu-has-collapsible">
				<!-- .menu -->
				<ul class="menu">
                    <?php if($CI->ion_auth->in_group('Admin')): ?>
					<li class="menu-header">SUPERADMIN</li><!-- /.menu-header -->
					<!-- .menu-item -->
					<li class="menu-item has-child">
						<a href="#" class="menu-link">
							<span class="menu-icon far fa-user"></span>
							<span class="menu-text">User Management</span>
						</a> <!-- child menu -->
						<ul class="menu">
							<li class="menu-item">
								<a href="{{ site_url("admin/user-management/internal") }}" class="menu-link">Users</a>
							</li>
							<li class="menu-item">
								<a href="{{ site_url("admin/user/groups") }}" class="menu-link">User Gorup</a>
							</li>
						</ul><!-- /child menu -->
					</li><!-- /.menu-item -->

					<li class="menu-item has-child">
						<a href="#" class="menu-link">
							<span class="menu-icon fas fa-globe"></span>
							<span class="menu-text">Regional Management</span>
						</a> <!-- child menu -->
						<ul class="menu">
							<li class="menu-item">
								<a href="{{ site_url("/admin/province") }}" class="menu-link">Provinces</a>
							</li>
							<li class="menu-item">
								<a href="{{ site_url("/admin/region") }}" class="menu-link">Regional</a>
							</li>
							<li class="menu-item">
								<a href="{{ site_url("/admin/city") }}" class="menu-link">Cities</a>
							</li>
						</ul><!-- /child menu -->
					</li><!-- /.menu-item -->

					<li class="menu-item has-child">
						<a href="#" class="menu-link">
							<span class="menu-icon fas fa-handshake"></span>
							<span class="menu-text">Vendor Management</span>
						</a> <!-- child menu -->
						<ul class="menu">
							<li class="menu-item">
								<a href="{{ site_url("admin/vendor/index") }}" class="menu-link">Vendor</a>
							</li>
							<li class="menu-item">
								<a href="{{ site_url("/admin/uservendor/index") }}" class="menu-link">User Vendor</a>
							</li>
						</ul><!-- /child menu -->
					</li><!-- /.menu-item -->
                    <?php endif ?>



                    <?php if ($CI->ion_auth->in_group('PIC Vendor')): ?>
					<li class="menu-header">Vendor</li><!-- /.menu-header -->
						<li class="menu-item">
							<a href="{{ site_url('vendor/comsitac/index') }}" class="menu-link"><span
										class="menu-icon oi oi-browser"></span> <span class="menu-text">COM SITAC</span></a>
						</li>
					<li class="menu-item">
						<a href="{{ site_url('/vendor/project/index') }}" class="menu-link"><span
								class="menu-icon fas fa-clipboard-check"></span> <span
								class="menu-text">Projects</span></a>
					</li><!-- /.menu-item -->
                    <?php endif?>



                    <?php if ($CI->ion_auth->in_group('Project Admin')): ?>

					<!-- .menu-item -->
					<li class="menu-item">
						<a href="{{ site_url('project/initiate') }}" class="menu-link"><span
								class="menu-icon fas fa-clipboard-check"></span> <span
								class="menu-text">Initiate Projects</span></a>
					</li><!-- /.menu-item -->
                    <?php endif?>



                    <?php if($CI->ion_auth->in_group('Procurement')): ?>
					<li class="menu-header">Procurement</li><!-- /.menu-header -->
					<!-- .menu-item -->
					<li class="menu-item">
						<a href="{{ site_url('procurement/project') }}" class="menu-link"><span
								class="menu-icon fas fa-clipboard-check"></span> <span
								class="menu-text">Register WBS ID</span></a>
					</li><!-- /.menu-item -->
						
					<li class="menu-header">Assignment</li><!-- /.menu-header -->
					<!-- .menu-item -->
					<li class="menu-item">
						<a href="{{ site_url('procurement/assignToVendor/add') }}" class="menu-link"><span
								class="menu-icon fas fa-clipboard-check"></span> <span
								class="menu-text">Vendor to Project</span></a>
					</li><!-- /.menu-item -->

					<!-- .menu-item -->
					<li class="menu-item">
						<a href="{{ site_url('procurement/assignToProject/add') }}" class="menu-link"><span
								class="menu-icon fas fa-clipboard-check"></span> <span
								class="menu-text">Project to vendor</span></a>
					</li><!-- /.menu-item -->

                    <?php endif; ?>

                    <?php if($CI->ion_auth->in_group('Project')): ?>
						<li class="menu-header">Project Admin</li><!-- /.menu-header -->
						<li class="menu-item">
							<a href="{{ site_url('project/comsitac/index') }}" class="menu-link"><span
									class="menu-icon oi oi-browser"></span> <span class="menu-text">COM SITAC</span></a>
						</li><!-- /.menu-item -->
				<!-- .menu-item -->
					<li class="menu-header">Project</li><!-- /.menu-header -->
					<!-- .menu-item -->
					<li class="menu-item">
							<a href="{{ site_url('project/survey') }}" class="menu-link">
								<span class="menu-icon fas fa-check-double"></span> <span
								class="menu-text">Choose Candidate</span></a>
					</li>

					<li class="menu-item">
						<a href="{{ site_url('project/tsa/candidate') }}" class="menu-link"><span
								class="menu-icon oi oi-bar-chart"></span> <span
								class="menu-text">Shortlisted Candidates</span></a>
					</li>
					<li class="menu-item">
						<a href="{{ site_url('project/tsa/index') }}" class="menu-link"><span
								class="menu-icon oi oi-list-rich"></span> <span
								class="menu-text">TSA Document</span></a>
					</li>


                    <?php endif?>

                    <?php if($CI->ion_auth->in_group('Vendor')): ?>
					<li class="menu-header">Vendor</li><!-- /.menu-header -->

					<li class="menu-item has-child">
						<a href="#" class="menu-link">
							<span class="menu-icon fas fa-file-invoice"></span>
							<span class="menu-text">Project</span>
						</a> <!-- child menu -->
						<ul class="menu">
							<li class="menu-item">
								<a href="{{ site_url("admin/user-management/internal") }}" class="menu-link">Project</a>
							</li>
							<li class="menu-item">
								<a href="{{ site_url("admin/user-management/internal") }}" class="menu-link">Running</a>
							</li>
							<li class="menu-item">
								<a href="{{ site_url("admin/user/groups") }}" class="menu-link">Done</a>
							</li>
						</ul><!-- /child menu -->
					</li><!-- /.menu-item -->


                    <?php endif; ?>
				</ul><!-- /.menu -->
			</nav><!-- /.stacked-menu -->

		</div><!-- /.aside-menu -->
	</div>
</aside>
