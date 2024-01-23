<?php foreach($identitas as $id) { ?>
  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?= base_url('assets/img/foto/') ?><?= $id->slider1 ?>" alt="" title="#slider-direction-1" />
        <img src="<?= base_url('assets/img/foto/') ?><?= $id->slider2 ?>" alt="" title="#slider-direction-2" />
        <img src="<?= base_url('assets/img/foto/') ?><?= $id->slider3 ?>" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sekolah Kreatif Inovatif Berlandaskan Iman dan Taqwa.</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Selamat Datang di Web Informasi MI Al-Musthofa Karim</h1>
                </div>
                <!-- layer 3 -->
                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sekolah Kreatif Inovatif Berlandaskan Iman dan Taqwa.</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Selamat Datang di Web Informasi MI Al-Musthofa Karim</h1>
                </div>
                <!-- layer 3 -->
                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sekolah Kreatif Inovatif Berlandaskan Iman dan Taqwa.</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Selamat Datang di Web Informasi MI Al-Musthofa Karim</h1>
                </div>
                <!-- layer 3 -->
                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="sambutan" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Sambutan Kepala Sekolah
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well text-center">
              <img src="<?= base_url('assets/img/identitas/') ?><?= $id->foto_kepsek ?>" width="200" alt="">
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <p>
                <?= $id->sambutan_kepsek ?>
              </p>
              <h5>
                <?= $id->nama_kepsek ?>
              </h5>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm" id="visi">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <h3 class="progress-h4">Visi</h3>
                  <h5 class="progress-h4">
                    <?= $id->visi ?>
                  </h5>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Start About area -->
  <div id="visi" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Misi
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well end-->
        <div class="col-md-auto col-sm-auto col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <ul>
                <?php foreach($misi as $ms) { ?>
                  <li>
                    <i class="fa fa-circle"></i>
                    <?= $ms->misi ?>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm" id="visi">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <h3 class="progress-h4">Tentang Sekolah</h3>
                  <h6 class="progress-h4">
                    <?= $id->tentang_sekolah ?>
                  </h6>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Start Blog Area -->
  <div id="kegiatan" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 mb-2">
            <div class="section-headline text-center">
              <a href="<?= base_url('kegiatan') ?>">
                <h2>Kegiatan</h2>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          foreach($kegiatan as $kegiatan) { ?>
            <!-- Start Left Blog -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center">
              <div class="single-blog">
                <div class="single-blog-img">
                  <!--<a href="blog.html">-->
                    <img src="<?= base_url('assets/img/kegiatan/') ?><?= $kegiatan->foto ?>" alt="" width="250px">
                  <!--</a>-->
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-home"></i>
                    <!--<a href="#">-->
                      <?= $kegiatan->tempat ?>
                    <!--</a>-->
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>
                    <?= $kegiatan->tanggal ?>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <!--<a href="blog.html">-->
                      <?= $kegiatan->kegiatan ?>
                    <!--</a>-->
                  </h4>
                  <p>
                    <?= $kegiatan->deskripsi ?>
                  </p>
                </div>
                <span>
                  <a href="<?= base_url('') ?>kegiatan/detail/<?= $kegiatan->id ?>" class="ready-btn">Selengkapnya</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
          <?php } ?>
            <!-- End Left Blog-->

        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm" id="visi">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <h3 class="progress-h4">Bersama Kami</h3>
                  <h4 class="progress-h4">
                    Membangun Negeri
                  </h4>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

  <!-- Start portfolio Area -->
  <div id="prestasi" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Prestasi</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <?php
          foreach($prestasi as $prestasi) { ?>
            <div class="col-md-4 col-sm-4 col-xs-12 design development">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#"><img src="<?= base_url('assets/img/prestasi/') ?><?= $prestasi->foto ?>"
                      alt="<?= $prestasi->foto ?>" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="venobox" data-gall="myGallery"
                        href="<?= base_url('assets/img/prestasi/') ?><?= $prestasi->foto ?>">
                        <h4>
                          <?= $prestasi->prestasi ?>
                        </h4>
                        <span>
                          <?= $prestasi->tingkat ?>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->

  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <div class="quate"><i class="fa fa-quote-right"></i></div>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <?php foreach($quotes as $quote) { ?>
                  <div class="single-testi">
                    <div class="testi-text">
                      <p>
                        <?= $quote->quotes ?>
                      </p>
                      <h6>
                        <?= $quote->tokoh ?>
                      </h6>
                    </div>
                  </div>
                <?php } ?>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->

  <!-- Start team Area -->
  <div id="pengajar" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Staff Dan Pengajar</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <?php foreach($pengajar as $guru) { ?>
            <div class="col-md-3 col-sm-3 col-xs-12 text-center">
              <div class="single-team-member">
                <div class="team-img">
                  <img src="<?= base_url('assets/img/pengajar/') ?><?= $guru->foto ?>" alt="">
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="<?= $guru->facebook ?>">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://wa.me/<?= $guru->kontak ?>">
                          <i class="fa fa-phone"></i>
                        </a>
                      </li>
                      <li>
                        <a href="<?= $guru->ig ?>">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h5>
                    <?= $guru->nama ?>
                  </h5>
                  <p>
                    <?= $guru->jabatan ?>
                  </p>
                </div>
              </div>
            </div>
            <!-- End column -->
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  <?= $id->telepon ?><br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  <?= $id->email ?><br>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  <?= $id->alamat_sekolah ?><br>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start Map -->
            <!-- <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
              width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            <iframe src="<?= $id->google_maps ?>" width="100%" height="380" frameborder="0" style="border:0;"
              allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <!-- <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required"
                    data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div> -->
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
<?php } ?>