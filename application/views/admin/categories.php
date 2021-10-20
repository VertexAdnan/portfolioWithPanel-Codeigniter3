		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h5 class="mb-0">Kategoriler</h5>
								<button type="button" style="position: absolute;top: 1%;right: 2%;" class="btn btn-light"><a href="<?= base_url('kategoriekle') ?>"><i class="bx bx-paper-plane"></i></a>
								</button>
							</div>
							<hr />
							<div class="table-responsive">
								<table class="table mb-0">
									<thead class="thead-light">
										<tr>
											<th>#</th>
											<th>Blog </th>
											<th>İşlem</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($categories as $row) { ?>
											<tr>
												<td><?= $row->id ?></td>
												<td><?= $row->catname ?>
												</td>
												<td>
													<div class="btn-group">
														<button type="button" class="btn btn-light">Seç</button>
														<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"> <span class="sr-only">Toggle Dropdown</span>
														</button>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"> <a class="dropdown-item" href="<?= base_url('kategoriduzenle/' . $row->id) ?>">Düzenle</a>
															<div class="dropdown-divider"></div> <a class="dropdown-item" href="<?= base_url('kategorisil/' . $row->id) ?>">Sil</a>
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