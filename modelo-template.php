<?php /* Template Name: modelo-template */
get_header(); ?>


<div class="modelo">
      <section class="main-slider-container">
            <div class="main-slider">
            	<?php
		        // check if the repeater field has rows of data
		        if( have_rows('slides') ):
		        // loop through the rows of data
		        	while ( have_rows('slides') ) : the_row();?>
                	<div class="main-slider-slide">
	                  <article>
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
            <div class="row">
              <div class="col-md-8">
                <?php the_field('texto_intro') ;?>
              </div><!-- .col -->
              <div class="col-md-4 section-tan text-center pt-5">
                <img class="img-fluid pb-4" src="<?php the_field('imagen_intro') ;?>" alt="">
                <?php the_field('texto_imagen_intro') ;?>
              </div><!-- .col -->
              <div class="col-md-12 text-center">
                <p class="txt-highlight mb-0 pt-5"><?php the_field('texto_intro_cierre') ;?></p>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .two-col -->


        <section class="full-width-img">
          <div class="container-fluid px-0">
            <div class="row no-gutters">
              <div class="col-12">
                <img class="img-fluid" src="<?php the_field('imagen_seccion') ;?>" alt="">
                <div class="container">
                  <div class="row">
                    <div class="col-12 py-5 my-5 text-center">
                      <div class="quote-text mb-0">
                        <?php the_field('texto_cita') ;?>
                        <span class="txt-highlight"><?php the_field('texto_cita_resaltado') ;?></span>
                      </div>

                    </div><!-- .col -->
                  </div><!-- .row -->
                </div><!-- .container -->
                <img class="img-fluid" src="<?php the_field('imagen_seccion2') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="quote-with-image green text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <img class="img-fluid" src="<?php the_field('imagen_cita_verde') ;?>" alt="">
              </div><!-- .col -->
              <div class="col-md-8">
                <?php the_field('texto_cita_verde') ;?>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- quote-with-image -->

        <section class="closing-quote">
          <div class="container-fluid px-0">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img class="img-fluid" src="<?php the_field('imagen_cita') ;?>" alt="">
              </div><!-- .col -->
              <div class="col-md-6 text-center">
                <?php the_field('texto_cita') ;?>
                <img class="img-fluid" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
              <div class="col-md-3">
                <img class="img-fluid" src="<?php the_field('imagen_cita2') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- closing-quote -->



</div><!--/.home -->

<?php get_footer();?>