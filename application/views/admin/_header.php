<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="sidebar-header">
            <div class="d-none d-lg-flex">
                <img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
            </div>
            <div>
                <h4 class="d-none d-lg-flex logo-text">./AV</h4>
            </div>
            <a href="javascript:;" class="toggle-btn ml-lg-auto"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <div class="flex-grow-1 search-bar">
            <div class="input-group">
                <div class="input-group-prepend search-arrow-back">
                    <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                    </button>
                </div>
                <input value="Yönetim Paneli 3.1" type="text" class="form-control" readonly/>
            </div>
        </div>
        <div class="right-topbar ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item search-btn-mobile">
                    <a class="nav-link position-relative" href="javascript:;"> <i class="bx bx-search vertical-align-middle"></i>
                    </a>
                </li>

                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
                        <div class="media user-box align-items-center">
                            <div class="media-body user-info">
                                <p class="user-name mb-0"><?= $this->session->userdata('username') ?></p>
                                <p class="designattion mb-0">Online</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"> 
                        <div class="dropdown-divider mb-0"></div> 
                        <a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="bx bx-power-off"></i><span>Çıkış</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>