<?php
foreach ($identitas as $id) {
  ?>
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
                  <h4 class="progress-h4">
                    <?= $id->visi ?>
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
                <?php foreach ($misi as $ms) { ?>
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
<?php } ?>