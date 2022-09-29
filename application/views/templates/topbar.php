<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="headaer-title">
						<h1 class="font-w600 mb-0"><?= $admin_title ?></h1>
					</div>
				</div>
				<ul class="navbar-nav header-right">
					
					<li class="nav-item dropdown notification_dropdown">
						<a class="nav-link nav-action" role="button" data-bs-toggle="dropdown">
							<i class="bi-bell-fill" style="color: #c1c1c1;"></i>
							<span class="badge light text-white bg-primary rounded-circle"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
								<ul class="timeline">
									<li>
										<div class="timeline-panel">
											<div class="media me-2 bg-success">
												<i class="bi-receipt" style="color:#FFF;"></i>
											</div>
											<div class="media-body">
												<a href="<?= base_url().'admin/notification_detail/'.encrypt_uri('1') ?>" class="h6 mb-1">Notif</a>
												<small class="d-block"><?= cek_terakhir('2022-09-27') ?></small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<a class="all-notification" href="<?= base_url() ?>admin/notification_list">Notifications <i class="ti-arrow-end"></i></a>
						</div>
					</li>
					
				</ul>
			</div>
		</nav>
	</div>
</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->