  <?php
  if (is_home() || is_front_page()) : ?>
  <div id="main-services">
    <div class="stripes"></div>
    <div class="container">
      <div class="row main-services-title">
        <div class="col-lg-12">
          <h2><?php the_field('intro_section_title'); ?></h2>
        </div>
        <div class="col-lg-4 main-service-01 fade-bottom-up">
          <div class="icons">
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-tenant-improvements.svg" />
          </div>
          <div class="main-service-contents home-intro-service">
            <h3><?php the_field('intro_section_service_1_title'); ?></h3>
            <p><?php the_field('intro_section_service_1_description'); ?></p>
            <div class="hidden-link" style="display: none;">/projects/confidential-client/</div>
          </div>
        </div>
        <div class="col-lg-4 main-service-02 fade-bottom-up">
          <div class="icons">
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-capital-improvements.svg" />
          </div>
          <div class="main-service-contents home-intro-service">
            <h3><?php the_field('intro_section_service_2_title'); ?></h3>
            <p><?php the_field('intro_section_service_2_description'); ?></p>
            <div class="hidden-link" style="display: none;">/projects/roofstock/</div>
          </div>
        </div>
        <div class="col-lg-4 main-service-03 fade-bottom-up">
          <div class="icons">
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/icon-special-projects.svg" />
          </div>
          <div class="main-service-contents home-intro-service">
            <h3><?php the_field('intro_section_service_3_title'); ?></h3>
            <p><?php the_field('intro_section_service_3_description'); ?></p>
            <div class="hidden-link" style="display: none;">/projects/esrp/</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="home-projects">
    <div class="home-projects-description project-fade-right-to-left">
      <h2></h2>
      <div class="home-projects-description-cta">
        <a class="home-links-slider" href="<?php the_field('home_slider_link_1'); ?>"><button class="shutter-in-horizontal"><?php the_field('home_slider_button_text'); ?></button></a>
      </div>
      <div class="project-slider-navigation">
        <div class="prev">
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/left-arrow-line-symbol.svg" />
        </div>
        <div class="next">
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/right-arrow-line-symbol.svg" />
        </div>
      </div>
    </div>


    <div id="home-projects-slider">
      <div class="home-projects-01">
        <h2><?php the_field('home_slider_title_1'); ?></h2>
        <div class="hidden-link" style="display: none;"><?php the_field('home_slider_link_1'); ?></div>
      </div>
      <div class="home-projects-02">
        <h2><?php the_field('home_slider_title_2'); ?></h2>
        <div class="hidden-link" style="display: none;"><?php the_field('home_slider_link_2'); ?></div>
      </div>
      <div class="home-projects-03">
        <h2><?php the_field('home_slider_title_3'); ?></h2>
        <div class="hidden-link" style="display: none;"><?php the_field('home_slider_link_3'); ?></div>
      </div>
    </div>
  </div><?php
  endif; ?>
