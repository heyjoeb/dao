<?php /* Template Name: productos-template */
get_header(); ?>


<div class="productos">



<section class="main-slider-container">
            <div class="main-slider">
            	<?php
		        // check if the repeater field has rows of data
		        if( have_rows('slides') ):
		        // loop through the rows of data
		        	while ( have_rows('slides') ) : the_row();?>
                	<div class="main-slider-slide">
	                  <article class="animate-element slide-up">
	                    <div class="article-wrapper">
                      <h1><?php the_sub_field('texto') ;?></h1>
                      <p class="autor"><?php the_sub_field('autor') ;?></p>
                      <p class="cargo"><?php the_sub_field('cargo') ;?></p>
                      </div>
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


        <section class="intro-col a-section">
          <div class="container">
            <div class="row animate-element slide-up">
              <?php
              // check if the repeater field has rows of data
              if( have_rows('columnas') ):
              // loop through the rows of data
                while ( have_rows('columnas') ) : the_row();?>
                <div class="col-lg-4">
                  <?php the_sub_field('texto') ;?>
                </div><!-- .col -->
              <?php endwhile;
              else :
              // no rows found
              endif;
              ?>
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .intro-col -->

        <section class="full-width-img">
          <div class="container-fluid px-0">
            <div class="row no-gutters animate-element slide-up">
              <div class="col-12 text-center">
                <img class="img-fluid mb-4" src="<?php the_field('imagen_seccion') ;?>" alt="">
                <img class="img-fluid" src="<?php the_field('imagen_seccion2') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="quote-with-image white">
          <div class="container">
            <div class="row animate-element slide-up text-center text-md-left justify-content-center align-items-center">
              <div class="col-md-3">
                <img class="img-fluid mb-5 mb-md-0" src="<?php the_field('imagen_cita') ;?>" alt="">
              </div><!-- .col -->
              <div class="col-md-7">
                <?php the_field('texto_cita') ;?>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- quote-with-image -->

        <section class="quote section-tan py-5">
          <div class="container">
            <div class="row justify-content-center animate-element slide-up">
              <div class="col-lg-8 text-center">
                <?php the_field('texto_cita2') ;?>
              </div><!-- col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .quote -->

        <section class="three-col section-tan py-5">
          <div class="container">
            <div class="row animate-element slide-up">
              <?php
              // check if the repeater field has rows of data
              if( have_rows('imagenes_caracteristicas') ):
              // loop through the rows of data
                while ( have_rows('imagenes_caracteristicas') ) : the_row();?>
                <div class="col-md-4 text-center">
                  <a target="_blank" href="<?php the_sub_field('link_caracteristica') ;?>">
                    <img class="img-fluid mb-5 mb-md-0" src="<?php the_sub_field('imagen_caracteristica') ;?>" alt="">
                  </a>
                </div><!-- .col -->
              <?php endwhile;
              else :
              // no rows found
              endif;
              ?>
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .three-col -->

        <section class="full-width-img">
          <div class="container-fluid px-0">
            <div class="row no-gutters">
              <div class="col-12">
                <img class="img-fluid" src="<?php the_field('imagen_seccion3') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="closer-image a-section">
          <div class="container-fluid">
            <div class="row animate-element slide-up">
              <div class="col-12 text-center">
              <img class="img-fluid" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .closer-image -->

</div><!--/.home -->

<?php get_footer();?>