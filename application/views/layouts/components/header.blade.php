<?php $CI = &get_instance(); ?>
<header class="app-header app-header-dark">
	<!-- .top-bar -->
	<div class="top-bar">
		<!-- .top-bar-brand -->
		<div class="top-bar-brand">
			<a href="">
				DMS - IBS TOWER
			</a>
		</div><!-- /.top-bar-brand -->
		<!-- .top-bar-list -->
		<div class="top-bar-list">
			<!-- .top-bar-item -->
			<div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
				<!-- toggle menu -->
				<button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu">
					<span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
				<!-- /toggle menu -->
			</div><!-- /.top-bar-item -->
			<!-- .top-bar-item -->
			<div class="top-bar-item top-bar-item-full">
				<!-- .top-bar-search -->
				<!-- /.top-bar-search -->
			</div><!-- /.top-bar-item -->
			<!-- .top-bar-item -->
			<div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
				<!-- .nav -->
				<ul class="header-nav nav">
					<!-- .nav-item -->

					<!-- .nav-item -->
					<li class="nav-item dropdown header-nav-dropdown has-notified">
						<a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
						   aria-expanded="false"><span class="oi oi-envelope-open"></span></a> <!-- .dropdown-menu -->
						<div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
							<div class="dropdown-arrow"></div>
							<h6 class="dropdown-header stop-propagation">
								<span>Messages</span> <a href="#">Mark all as read</a>
							</h6><!-- .dropdown-scroll -->
							<div class="dropdown-scroll perfect-scrollbar ps">
								<!-- .dropdown-item -->
								<a href="#" class="dropdown-item unread">
									<div class="user-avatar">
										<img src="/assets/images/avatars/team1.jpg" alt="">
									</div>
									<div class="dropdown-item-body">
										<p class="subject"> Stilearning </p>
										<p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p><span
											class="date">2 hours ago</span>
									</div>
								</a> <!-- /.dropdown-item -->
								<!-- .dropdown-item -->
								<a href="#" class="dropdown-item">
									<div class="user-avatar">
										<img src="/assets/images/avatars/team3.png" alt="">
									</div>
									<div class="dropdown-item-body">
										<p class="subject"> Openlane </p>
										<p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span
											class="date">23 hours ago</span>
									</div>
								</a> <!-- /.dropdown-item -->
								<!-- .dropdown-item -->
								<a href="#" class="dropdown-item">
									<div class="tile tile-circle bg-green"> GZ</div>
									<div class="dropdown-item-body">
										<p class="subject"> Gogo Zoom </p>
										<p class="text text-truncate"> Live healthy with this wireless sensor. </p><span
											class="date">1 day ago</span>
									</div>
								</a> <!-- /.dropdown-item -->
								<!-- .dropdown-item -->
								<a href="#" class="dropdown-item">
									<div class="tile tile-circle bg-teal"> GD</div>
									<div class="dropdown-item-body">
										<p class="subject"> Gold Dex </p>
										<p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p><span
											class="date">1 day ago</span>
									</div>
								</a> <!-- /.dropdown-item -->
								<!-- .dropdown-item -->
								<a href="#" class="dropdown-item">
									<div class="user-avatar">
										<img src="/assets/images/avatars/team2.png" alt="">
									</div>
									<div class="dropdown-item-body">
										<p class="subject"> Creative Division </p>
										<p class="text text-truncate"> Need some feedback on this please </p><span
											class="date">2 days ago</span>
									</div>
								</a> <!-- /.dropdown-item -->
								<!-- .dropdown-item -->
								<a href="#" class="dropdown-item">
									<div class="tile tile-circle bg-pink"> LD</div>
									<div class="dropdown-item-body">
										<p class="subject"> Lab Drill </p>
										<p class="text text-truncate"> Our UX exercise is ready </p><span class="date">6 days ago</span>
									</div>
								</a> <!-- /.dropdown-item -->
								<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
									<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
								</div>
								<div class="ps__rail-y" style="top: 0px; right: 0px;">
									<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
								</div>
							</div><!-- /.dropdown-scroll -->
							<a href="page-messages.html" class="dropdown-footer">All messages <i
									class="fas fa-fw fa-long-arrow-alt-right"></i></a>
						</div><!-- /.dropdown-menu -->
					</li><!-- /.nav-item -->
					<!-- .nav-item -->

				</ul><!-- /.nav -->
				<!-- .btn-account -->
				<div class="dropdown d-flex">
					<button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> <span
							class="account-summary pr-lg-4 d-none d-lg-block"><span
								class="account-name">{{ $CI->ion_auth->user()->row()->username }} </span>
							<span class="account-description">{{$CI->ion_auth->user()->row()->email}}</span></span>
					</button> <!-- .dropdown-menu -->
					<div class="dropdown-menu">
						<div class="dropdown-arrow ml-3"></div>
						<h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ $CI->ion_auth->user()->row()->username }} </h6>
						<a class="dropdown-item" href="{{site_url('auth/logout')}}"><span
								class="dropdown-icon oi oi-account-logout"></span> Logout</a>

					</div><!-- /.dropdown-menu -->
				</div><!-- /.btn-account -->
			</div><!-- /.top-bar-item -->
		</div><!-- /.top-bar-list -->
	</div><!-- /.top-bar -->
</header>
