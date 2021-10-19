		<!--page-wrapper-->
		<div class="page-wrapper">
		    <!--page-content-wrapper-->
		    <div class="page-content-wrapper">
		        <div class="page-content">

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
		                                    <th>İşlem</th>
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
		                                        <td>
		                                            <div class="btn-group">
		                                                <button type="button" class="btn btn-light">Seç</button>
		                                                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"> <span class="sr-only">Toggle Dropdown</span>
		                                                </button>
		                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"> 
                                                            <a class="dropdown-item" href="<?= base_url('calismasil/' . $row->id) ?>">Sil</a>
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