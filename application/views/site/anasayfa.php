  <!-- Home-->
  <section class="home-area element-cover-bg" id="home" style="background-image:url(<?= base_url('assets/site/img/' . getsitebackground()->background) ?>)">
      <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center">
              <div class="col-12 col-lg-8 home-content text-center">
                  <h1 class="home-name"><span><?= getmyname()->myname ?></span></h1>

                  <h4 class="cd-headline clip home-headline">Ben, <span class="cd-words-wrapper single-headline">
                          <?php
                            foreach ($slidertext as $row) {
                                $t1 = $row->text1;
                                $t2 = $row->text2;
                                $t3 = $row->text3;
                            }
                            ?>
                          <b class="is-visible"> <?= $t1 ?></b>
                          <b><?= $t2 ?></b>
                          <b><?= $t3 ?></b>
                      </span>
                  </h4>
              </div>
          </div>
      </div>
      <div class="fixed-wrapper">
          <!-- Social media icons-->
          <div class="fixed-block block-right">
              <ul class="list-unstyled social-icons">
                  <li><a href="<?= getsocialmedia()->facebook ?>"><i class="icon ion-logo-facebook"></i></a></li>
                  <li><a href="<?= getsocialmedia()->behance ?>"><i class="icon ion-logo-linkedin"></i></a></li>
                  <li><a href="<?= getsocialmedia()->instagram ?>"><i class="icon ion-logo-instagram"></i></a></li>
              </ul>
          </div>
      </div>
  </section>
  <!-- About lightbox-->
  <div class="lightbox-wrapper" id="about" data-simplebar>
      <div class="container">
          <div class="lightbox-close">
              <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="lightbox-content">
                      <div class="row">
                          <div class="col-12">
                              <div class="section-heading page-heading">
                                  <h2 class="section-title">Hakkımda</h2>
                                  <div class="animated-bar"></div>
                              </div>
                          </div>
                      </div>
                      <!-- Info section-->
                      <div class="info-section single-section">
                          <div class="row align-items-center">
                              <!-- Picture part-->
                              <div class="col-12 col-lg-5 info-img"><img class="img-fluid img-thumbnail" src="<?= base_url('assets/site/') ?>img/<?= getaboutme()->image ?>" alt="About Picture"></div>
                              <!-- Content part-->
                              <div class="col-12 col-lg-7 info-content">
                                  <div class="content-block">
                                      <h2 class="content-subtitle">Ben kimim?</h2>
                                      <div class="content-description">
                                          <p><?= getaboutme()->abouttext ?></p>
                                      </div>
                                      <address class="content-info">
                                          <div class="row">
                                              <div class="col-12 col-md-6 single-info"><span>Adım:</span>
                                                  <p><?= getmyname()->myname ?></p>
                                              </div>
                                              <div class="col-12 col-md-6 single-info"><span>Email:</span>
                                                  <p><a href="mailto:<?= getaboutme()->email ?>"><?= getaboutme()->email ?></a></p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-12 col-md-6 single-info"><span>Yaş:</span>
                                                  <p><?= getaboutme()->age ?></p>
                                              </div>
                                              <div class="col-12 col-md-6 single-info"><span>Telefon:</span>
                                                  <p><?= getaboutme()->tel ?></p>
                                              </div>
                                          </div>
                                      </address>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Resume lightbox-->
  <div class="lightbox-wrapper" id="resume" data-simplebar>
      <div class="container">
          <div class="lightbox-close">
              <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="lightbox-content">
                      <div class="row">
                          <div class="col-12">
                              <div class="section-heading page-heading">
                                  <p class="section-description">Programlar ve deneyimlerim</p>
                                  <h2 class="section-title">Deneyim</h2>
                                  <div class="animated-bar"></div>
                              </div>
                          </div>
                      </div>
                      <!-- Skills section-->
                      <div class="skills-section single-section">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section-heading">
                                      <h2 class="section-title">Yetenekler</h2>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12 col-md-6">
                                  <?php foreach ($experience as $row) {
                                        if ($row->id % 2 == 0) {
                                    ?>
                                          <div class="single-skill" data-percentage="<?= $row->exp ?>">
                                              <div class="skill-info"><span class="skill-name"><?= $row->name ?></span><span class="skill-percentage"></span></div>
                                              <div class="progress skill-progress">
                                                  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                  <?php
                                        }
                                    } ?>
                              </div>
                              <div class="col-12 col-md-6">
                                  <?php foreach ($experience as $row) {
                                        if ($row->id % 2 == 1) {
                                    ?>
                                          <div class="single-skill" data-percentage="<?= $row->exp ?>">
                                              <div class="skill-info"><span class="skill-name"><?= $row->name ?></span><span class="skill-percentage"></span></div>
                                              <div class="progress skill-progress">
                                                  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                  <?php }
                                    } ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Portfolio lightbox-->
  <div class="lightbox-wrapper" id="portfolio" data-simplebar>
      <div class="container">
          <div class="lightbox-close">
              <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="lightbox-content">
                      <div class="row">
                          <div class="col-12">
                              <div class="section-heading page-heading">
                                  <p class="section-description">Yaptığım bazı çalışmalar</p>
                                  <h2 class="section-title">Çalışmalar</h2>
                                  <div class="animated-bar"></div>
                              </div>
                          </div>
                      </div>
                      <!-- Portfolio section-->
                      <div class="portfolio-section single-section">
                          <div class="row">
                              <!-- Filter nav-->
                              <div class="col-12">
                                  <ul class="list-inline filter-control" role="group" aria-label="Filter Control">
                                      <li class="list-inline-item tab-active" data-filter="*">Tümü</li>
                                      <?php foreach ($categories as $row) {
                                            echo '<li class="list-inline-item" data-filter=".' . $row->catname . '">' . $row->catname . '</li>' ?>
                                      <?php } ?>
                                  </ul>
                              </div>
                          </div>
                          <!-- Thumbnail list-->
                          <div class="portfolio-grid row"> <?php foreach ($works as $row) { ?>
                                  <!-- Single item-->
                                  <div class="single-item col-6 col-lg-4 <?= $row->catname ?>"><a class="portfolio-item" href="<?= base_url('assets/site/img/') . $row->image ?>" data-lightbox>
                                          <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="<?= base_url('assets/site/img/' . $row->image) ?>">
                                              <div class="item-content">
                                                  <h6 class="content-title"><?= $row->name ?></h6><span class="content-more">Detay</span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              <?php } ?>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  <!-- Blog lightbox-->
  <div class="lightbox-wrapper" id="blog" data-simplebar>
      <div class="container">
          <div class="lightbox-close">
              <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="lightbox-content">
                      <div class="row">
                          <div class="col-12">
                              <div class="section-heading page-heading">
                                  <p class="section-description">Makaleler</p>
                                  <h2 class="section-title">Blog</h2>
                                  <div class="animated-bar"></div>
                              </div>
                          </div>
                      </div>
                      <!-- Blog section-->
                      <div class="blog-section single-section">
                          <div class="row justify-content-center">
                              <!-- Creating result about blogs -->
                              <?php foreach ($blogs as $row) { ?>
                                  <div class="col-12 col-sm-8 col-lg-4">
                                      <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="<?= base_url('assets/site/img/' . $row->bimage) ?>" alt="Blog post"><span class="content-date"><?= $row->date ?></span></a>
                                          <div class="card-body post-content"><a href="#0">
                                                  <h5 class="card-title content-title"><?= $row->blogname ?></h5>
                                              </a>
                                              <p class="card-text content-description"><?= $row->blogdesc ?></p>
                                          </div>
                                      </div>
                                  </div>
                              <?php } ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Contact lightbox-->
  <div class="lightbox-wrapper" id="contact" data-simplebar>
      <div class="container">
          <div class="lightbox-close">
              <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="lightbox-content">
                      <div class="row">
                          <div class="col-12">
                              <div class="section-heading page-heading">
                                  <h2 class="section-title">Benimle iletişime geçin</h2>
                                  <div class="animated-bar"></div>
                              </div>
                          </div>
                      </div>
                      <!-- Contact section-->
                      <div class="contact-section single-section">
                          <div class="row">
                              <!-- Contact form-->
                              <div class="col-12 col-lg-7">
                                  <form class="contact-form" method="post" action="<?= base_url('gonder') ?>">
                                      <h4 class="content-title">İletişim formu</h4>
                                      <div class="row">
                                          <div class="col-12 col-md-6 form-group"><input class="form-control" type="text" name="name" placeholder="Adınız" required=""></div>
                                          <div class="col-12 col-md-6 form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
                                          <div class="col-12 form-group"><input class="form-control" type="text" name="subject" placeholder="Konu" required=""></div>
                                          <div class="col-12 form-group">
                                              <?php echo $captcha['image'] ?>
                                              <input class="form-control" type="text" name="captcha" placeholder="Güvenlik Sorgusu" required="">
                                          </div>
                                          <div class="col-12 form-group form-message"><textarea class="form-control" name="message" placeholder="Mesaj" rows="5" required=""></textarea></div>
                                          <div class="col-12 form-submit">
                                              <button class="btn button-main button-scheme" name="docontact" type="submit">Gönder</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                              <!-- Contact info-->
                              <div class="col-12 col-lg-5">
                                  <div class="contact-info">
                                      <h4 class="content-title">İletişim Bilgileri</h4>
                                      <ul class="list-unstyled list-info">
                                          <li>
                                              <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                                                  <div class="media-body info-details">
                                                      <h6 class="info-type"></h6><span class="info-value"><?= getmyname()->myname ?></span>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                                                  <div class="media-body info-details">
                                                      <h6 class="info-type"></h6><span class="info-value"><?= getaboutme()->tel ?></span>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                                                  <div class="media-body info-details">
                                                      <h6 class="info-type"></h6><span class="info-value"><a href="mailto:getaboutme()->email"><?= getaboutme()->email ?></a></span>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>