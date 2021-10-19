		<!--page-wrapper-->
		<div class="page-wrapper">
		    <!--page-content-wrapper-->
		    <div class="page-content-wrapper">
		        <div class="page-content">
		            <div class="row">
		                <div class="col-12 col-lg-4">
		                    <div class="card radius-15">
		                        <div class="card-body">
		                            <div class="d-flex mb-2">
		                                <div>
		                                    <p class="mb-0 font-weight-bold text-white">Toplam Çalışma</p>
		                                    <h2 class="mb-0 text-white"><?php echo $numworks  ?></h2>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-12 col-lg-4">
		                    <div class="card radius-15">
		                        <div class="card-body">
		                            <div class="d-flex mb-2">
		                                <div>
		                                    <p class="mb-0 font-weight-bold text-white">Toplam Blog</p>
		                                    <h2 class="mb-0 text-white"><?php echo $numblogs  ?></h2>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-12 col-lg-4">
		                    <div class="card radius-15">
		                        <div class="card-body">
		                            <div class="d-flex mb-2">
		                                <div>
		                                    <p class="mb-0 font-weight-bold text-white">Ziyaret Sayısı</p>
		                                    <h2 class="mb-0 text-white"><?= $numvisitors ?></h2>
		                                </div>
		                                <button type="button" style="position: absolute;top: 1%;right: 2%;" class="btn btn-light"><a href="<?= base_url('ziyarettemizle') ?>"><i class="bx bx-paper-plane"></i></a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <!--end row-->

		            <div class="card radius-15">
		                <div class="card-body">
		                    <div class="card-title">
		                        <h5 class="mb-0">Bloglar</h5>
		                        <button type="button" style="position: absolute;top: 1%;right: 2%;" class="btn btn-light"><a href="<?= base_url('blogekle') ?>"><i class="bx bx-paper-plane"></i></a>
		                        </button>
		                    </div>
		                    <hr />
		                    <div class="table-responsive">
		                        <table class="table mb-0">
		                            <thead class="thead-light">
		                                <tr>
		                                    <th>#</th>
		                                    <th>Görsel</th>
		                                    <th>Blog </th>
		                                    <th>Açıklama </th>
		                                    <th>Tarih</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <?php foreach ($blogs as $row) { ?>
		                                    <tr>
		                                        <td><?= $row->id ?></td>
		                                        <td><img style="max-width:200px" src="<?= base_url('assets/site/img/' . $row->bimage) ?>" alt=""></td>
		                                        <td><?= $row->blogname ?>
		                                        </td>
		                                        <td><?= $row->blogdesc ?></td>
		                                        <td><?= $row->date ?></td>
		                                    </tr>
		                                <?php } ?>
		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		            </div>

		            <div class="card radius-15">
		                <div class="card-body">
		                    <div class="card-title">
		                        <h5 class="mb-0">Çalışmalar</h5>
		                        <button type="button" style="position: absolute;top: 1%;right: 2%;" class="btn btn-light"><a href="<?= base_url('calismaekle') ?>"><i class="bx bx-paper-plane"></i></a>
		                        </button>
		                    </div>
		                    <hr />
		                    <div class="table-responsive">
		                        <table class="table mb-0">
		                            <thead class="thead-light">
		                                <tr>
		                                    <th>#</th>
		                                    <th>Görsel</th>
		                                    <th>Adı </th>
		                                    <th>Kategori </th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <?php foreach ($works as $row) { ?>
		                                    <tr>
		                                        <td><?= $row->id ?></td>
		                                        <td><img style="max-width:200px" src="<?= base_url('assets/site/img/' . $row->image) ?>" alt=""></td>
		                                        <td><?= $row->name ?>
		                                        </td>
		                                        <td><?= $row->catname ?></td>
		                                    </tr>
		                                <?php } ?>
		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <!--end page-content-wrapper-->
		</div>