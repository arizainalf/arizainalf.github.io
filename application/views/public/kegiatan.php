<!-- Start Blog Area -->
<div id="kegiatan" class="blog-area">
  <div class="blog-inner area-padding">
    <div class="blog-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Kegiatan</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        foreach ($kegiatan as $kegiatan) { ?>
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
                  <img src="<?= base_url('assets/img/kegiatan/') ?><?= $kegiatan->foto ?>" alt="<?= $kegiatan->foto ?>">
                </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                  <i class="fa fa-home"></i>
                  <a href="#">
                    <?= $kegiatan->tempat ?>
                  </a>
                </span>
                <span class="date-type">
                  <i class="fa fa-calendar"></i>
                  <?= $kegiatan->tanggal ?>
                </span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="blog.html">
                    <?= $kegiatan->kegiatan ?>
                  </a>
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
          <!-- End Left Blog-->
        <?php } ?>

      </div>
    </div>
  </div>
</div>
<!-- End Blog -->