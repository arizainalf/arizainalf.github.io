<!-- Start Blog Area -->
<div id="kegiatan" class="blog-area">
  <div class="blog-inner area-padding mt-5">
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
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <img src="<?= base_url('assets/img/kegiatan/') ?><?= $kegiatan->foto ?>" alt="<?= $kegiatan->foto ?>">
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                  <i class="fa fa-home"></i>
                  <?= $kegiatan->tempat ?>
                </span>
                <span class="date-type">
                  <i class="fa fa-calendar"></i>
                  <?= $kegiatan->tanggal ?>
                </span>
              </div>
              <div class="blog-text">
                <h4>
                  <?= $kegiatan->kegiatan ?>
                </h4>
                <p>
                  <?= $kegiatan->deskripsi ?>
                </p>
              </div>
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