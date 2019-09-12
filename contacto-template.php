<?php /* Template Name: contacto-template */
get_header(); ?>


<div class="contacto">


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

        <section class="info-contacto">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <ul>
                  <li>
                    <h2>Contacto</h2>
                    <?php the_field('direccion') ;?>
                  </li>
                  <li>
                    <h2>Teléfono</h2>
                    <?php the_field('telefono') ;?>
                  </li>
                  <li>
                    <h2>Email</h2>
                    <?php the_field('email') ;?>
                  </li>
                </ul>
              </div><!-- .col -->
              <div class="col-12 text-center">
                <img class="img-fluid" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .info-contacto -->

        <section class="map">
          <div class="container-fluid px-0">
            <div class="row">
              <div class="col-md-12">
                <div id="map">mapa</div>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .map -->

        <section class="closer-image">
          <div class="container-fluid px-0">
            <div class="row">
              <div class="col-md-12">
                <img class="img-fluid" src="<?php the_field('imagen_cierre') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .closer-image -->

</div><!--/.home -->

<?php get_footer();?>