<!-- Start Footer bottom Area -->
<?php foreach($identitas as $id): ?>
  <footer>

    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>
                  <?= $id->nama_sekolah ?>
                </strong>.
              </p>
            </div>
            <!-- <div class="credits"> -->
            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php endforeach; ?>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?= base_url('assets/ebusiness/') ?>lib/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/knob/jquery.knob.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/parallax/parallax.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/nivo-slider/js/jquery.nivo.slider.js"
  type="text/javascript"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/appear/jquery.appear.js"></script>
<script src="<?= base_url('assets/ebusiness/') ?>lib/isotope/isotope.pkgd.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="<?= base_url('assets/ebusiness/') ?>contactform/contactform.js"></script>

<script src="<?= base_url('assets/ebusiness/') ?>js/main.js"></script>
</body>

</html>