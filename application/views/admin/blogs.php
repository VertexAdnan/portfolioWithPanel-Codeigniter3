		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
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
											<th>İşlem</th>
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
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-light">Seç</button>
														<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"> <span class="sr-only">Toggle Dropdown</span>
														</button>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"> <a class="dropdown-item" href="<?= base_url('blogedit/' . $row->id) ?>">Düzenle</a>
															<div class="dropdown-divider"></div> <a class="dropdown-item" href="<?= base_url('blogsil/' . $row->id) ?>">Sil</a>
														</div>
													</div>
												</td>
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