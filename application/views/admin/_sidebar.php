		<!--navigation-->
		<div class="nav-container">
			<div class="mobile-topbar-header">
				<div class="">
					<img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Syntrans</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<nav class="topbar-nav">
				<ul class="metismenu" id="menu">
					<li>
						<a href="<?= base_url('home') ?>" class="has-arrow">
							<div class="parent-icon"><i class="bx bx-home-alt"></i>
							</div>
							<div class="menu-title">Anasayfa</div>
						</a>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="bx bx-donate-blood"></i>
							</div>
							<div class="menu-title">Blog</div>
						</a>
						<ul>
							<li> <a href="<?= base_url('bloglar') ?>"><i class="bx bx-right-arrow-alt"></i>Bloglar</a>
							</li>
							<li> <a href="<?= base_url('blogekle') ?>"><i class="bx bx-right-arrow-alt"></i>Blog Ekle</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="bx bx-donate-blood"></i>
							</div>
							<div class="menu-title">Çalışmalar</div>
						</a>
						<ul>
							<li> <a href="<?= base_url('calismalar') ?>"><i class="bx bx-right-arrow-alt"></i>Tümü</a>
							</li>
							<li> <a href="<?= base_url('calismaekle') ?>"><i class="bx bx-right-arrow-alt"></i>Yeni Ekle</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="bx bx-donate-blood"></i>
							</div>
							<div class="menu-title">Tecrübe</div>
						</a>
						<ul>
							<li>
								<a href="<?= base_url('tecrube') ?>"><i class="bx bx-right-arrow-alt"></i>Genel</a>
							</li>
							<li>
								<a href="<?= base_url('tecrubeekle') ?>"><i class="bx bx-right-arrow-alt"></i>Yeni Ekle</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="bx bx-donate-blood"></i>
							</div>
							<div class="menu-title">Ayarlar</div>
						</a>
						<ul>
							<li>
								<a href="<?= base_url('ayarlar') ?>"><i class="bx bx-right-arrow-alt"></i>Genel</a>
							</li>
							<li>
								<a href="<?= base_url('sosyalmedya') ?>"><i class="bx bx-right-arrow-alt"></i>Sosyal Medya</a>
							</li>
							<li>
								<a href="<?= base_url('arkaplandegis') ?>"><i class="bx bx-right-arrow-alt"></i>Arka Plan Değiştir</a>
							</li>
							<li>
								<a href="<?= base_url('logodegis') ?>"><i class="bx bx-right-arrow-alt"></i>Logo Değiştir</a>
							</li>
							<li>
								<a href="<?= base_url('hakkimda') ?>"><i class="bx bx-right-arrow-alt"></i>Hakkımda</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<!--end navigation-->