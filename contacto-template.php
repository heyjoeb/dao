<?php /* Template Name: contacto-template */
get_header(); ?>


<div class="contacto">


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

        <section class="info-contacto section-tan a-section">
          <div class="container">
            <div class="row animate-element slide-up justify-content-center">
              <div class="col-md-6 mb-5 pb-5 contact-items">
                <ul>
                  <li class="row justify-content-center">
                    <h2 class="col-3"><?php the_field('direccion_titulo') ;?></h2>
                    <span class="col-6 item-contact"><?php the_field('direccion') ;?></span>
                  </li>
                  <li class="row justify-content-center">
                    <h2 class="col-3"><?php the_field('telefono_titulo') ;?></h2>
                    <span class="col-6 item-contact align-self-"><?php the_field('telefono') ;?></span>
                  </li>
                  <li class="row justify-content-center">
                    <h2 class="col-3"><?php the_field('email_titulo') ;?></h2>
                    <span class="col-6 item-contact"><?php the_field('email') ;?></span>
                  </li>
                </ul>
              </div><!-- .col -->
              <div class="col-12 text-center animate-element slide-up">
                <img class="img-fluid" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .info-contacto -->

        <section class="map section-tan">
          <div class="container-fluid px-0">
            <div class="row no-gutters animate-element slide-up">
              <div class="col-md-12">
                <div id="map">
                  <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
                </div>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .map -->

        <section class="closer-image">
          <div class="container-fluid px-0">
            <div class="row no-gutters">
              <div class="col-md-12">
                <img class="img-fluid" src="<?php the_field('imagen_cierre') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .closer-image -->

</div><!--/.home -->

<?php get_footer();?>