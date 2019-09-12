<?php /* Template Name: productos-template */
get_header(); ?>


<div class="productos">


        <section class="main-slider-container">
            <ul class="main-slider">
            	<?php
		        // check if the repeater field has rows of data
		        if( have_rows('slides') ):
		        // loop through the rows of data
		        	while ( have_rows('slides') ) : the_row();?>
                	<li>
	                  <article>
	                    <h1><?php the_sub_field('texto') ;?></h1>
	                    <p class="autor"><?php the_sub_field('autor') ;?></p>
	                  </article>
	                  <picture>
	                    <source media="(max-width: 575px)" srcset="<?php the_sub_field('imagen_sm') ;?>">
	                    <source media="(max-width: 767px)" srcset="<?php the_sub_field('imagen_md') ;?>">
                      <source media="(max-width: 991px)" srcset="<?php the_sub_field('imagen_lg') ;?>">
	                    <source media="(max-width: 1199px)" srcset="<?php the_sub_field('imagen_xl') ;?>">
	                    <img class="img-fluid" src="<?php the_sub_field('imagen_principal') ;?>" alt="">
	                  </picture>
	                </li>
		        <?php endwhile;
		    	else :
		    	// no rows found
		    	endif;
		    	?>
            </ul>
            <div class="slider-nav-arrows">
                <ul>
                  <li><a href="" class="nav-arrow-slider btn-prev"></a></li>
                  <li><a href="" class="nav-arrow-slider btn-next"></a></li>
                </ul>
            </div>
        </section><!--/.main-slider-container -->

        <section class="intro-col">
          <div class="container">
            <div class="row">
              <?php
              // check if the repeater field has rows of data
              if( have_rows('columnas') ):
              // loop through the rows of data
                while ( have_rows('columnas') ) : the_row();?>
                <div class="col-md-4">
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
            <div class="row no-gutters">
              <div class="col-12">
                <img class="img-fluid" src="<?php the_field('imagen_seccion') ;?>" alt="">
                <img class="img-fluid" src="<?php the_field('imagen_seccion2') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="quote-with-image">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <img class="img-fluid" src="<?php the_field('imagen_cita') ;?>" alt="">
              </div><!-- .col -->
              <div class="col-md-8">
                <?php the_field('texto_cita') ;?>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- quote-with-image -->

        <section class="quote">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <?php the_field('texto_cita2') ;?>
              </div><!-- col-12 -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .quote -->

        <section class="three-col">
          <div class="container">
            <div class="row">
              <?php
              // check if the repeater field has rows of data
              if( have_rows('imagenes_caracteristicas') ):
              // loop through the rows of data
                while ( have_rows('imagenes_caracteristicas') ) : the_row();?>
                <div class="col-md-4">
                  <img class="img-fluid" src="<?php the_sub_field('imagen_caracteristica') ;?>" alt="">
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

        <section class="closer-image">
          <div class="container-fluid px-0">
            <div class="row">
              <div class="col-12 text-center">
              <img class="img-fluid" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .closer-image -->

</div><!--/.home -->

<?php get_footer();?>