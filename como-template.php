<?php /* Template Name: como-template */
get_header(); ?>


<div class="como">


<section class="main-slider-container">
            <div class="main-slider">
            	<?php
		        // check if the repeater field has rows of data
		        if( have_rows('slides') ):
		        // loop through the rows of data
		        	while ( have_rows('slides') ) : the_row();?>
                	<div class="main-slider-slide">
	                  <article class="animate-element slide-up">
	                    <h1><?php the_sub_field('texto') ;?></h1>
                      <p class="autor"><?php the_sub_field('autor') ;?></p>
                      <p class="cargo"><?php the_sub_field('cargo') ;?></p>
	                  </article>
	                  <picture>
	                    <source media="(max-width: 575px)" srcset="<?php the_sub_field('imagen_sm') ;?>">
	                    <source media="(max-width: 767px)" srcset="<?php the_sub_field('imagen_md') ;?>">
                      <source media="(max-width: 991px)" srcset="<?php the_sub_field('imagen_lg') ;?>">
	                    <source media="(max-width: 1199px)" srcset="<?php the_sub_field('imagen_xl') ;?>">
	                    <img class="img-fluid" src="<?php the_sub_field('imagen_principal') ;?>" alt="">
	                  </picture>
	                </div>
		        <?php endwhile;
		    	else :
		    	// no rows found
		    	endif;
		    	?>
            </div>
            <div class="slider-nav-arrows">
                <ul>
                  <li><a href="" class="nav-arrow-slider btn-prev"></a></li>
                  <li><a href="" class="nav-arrow-slider btn-next"></a></li>
                </ul>
            </div>
        </section><!--/.main-slider-container -->

        <section class="two-col a-section">
          <div class="container">
            <div class="row animate-element slide-up justify-content-center">
              <div class="col-md-6">
                <?php the_field('texto_intro') ;?>
              </div><!-- .col -->
              <div class="col-md-4 text-center">
                <img class="img-fluid mb-4" src="<?php the_field('imagen_intro1') ;?>" alt="">
                <img class="img-fluid" src="<?php the_field('imagen_intro2') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .two-col -->

        <section class="full-width-img">
          <div class="container-fluid px-0">
            <div class="row no-gutters animate-element slide-up">
              <div class="col-12 text-center">
                <img class="img-fluid dao-absolute" src="<?php the_field('imagen_dao_circle') ;?>" alt="">
                <img class="img-fluid" src="<?php the_field('imagen_seccion') ;?>" alt="">
                <div class="container mt-5 mt-sm-0">
                  <div class="row justify-content-center">
                    <div class="col-md-8 text-center py-5 my-5 a-quote">
                      <?php the_field('texto_cita') ;?>
                    </div><!-- .col -->
                  </div><!-- .row -->
                </div><!-- .container -->
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="green-row py-5">
          <div class="container-fluid px-0">
            <div class="row no-gutters animate-element slide-up">
              <div class="col-12 text-center">
              <?php the_field('texto_cita_verde') ;?>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .green-row -->

        <section class="process a-section" style="background-image: url('<?php the_field('fondo_proceso') ;?>');">
          <div class="container">
            <div class="row justify-content-center">
              <?php
                // check if the repeater field has rows of data
                if( have_rows('pasos') ):
                // loop through the rows of data
                  while ( have_rows('pasos') ) : the_row();?>
                  <div class="col-md-4 text-center step-wrapper">
                    <button class="step-button text-center" data-toggle="modal" data-target="#<?php the_sub_field('link_paso') ;?>">
                      <span class="step-number"><?php the_sub_field('numero_paso') ;?></span>
                      <span class="step-title"><?php the_sub_field('titulo_paso') ;?></span>
                    </button>
                  </div><!-- .col -->
                  <!-- Modal -->
                  <div class="modal fade" id="<?php the_sub_field('link_paso') ;?>" tabindex="-1" role="dialog" aria-labelledby="<?php the_sub_field('link') ;?>Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="<?php the_sub_field('link_paso') ;?>Label"><?php the_sub_field('titulo_paso') ;?></h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php the_sub_field('texto_paso') ;?>
                          <div class="daoIcon"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
                else :
                // no rows found
                endif;
              ?>
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .process -->

        <section class="closer-image a-section">
          <div class="container">
            <div class="row animate-element slide-up">
              <div class="col-md-12 text-center">
                <img class="img-fluid" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .closer-image -->

</div><!--/.home -->

<?php get_footer();?>