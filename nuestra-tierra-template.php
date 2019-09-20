<?php /* Template Name: nuestra-tierra-template */
get_header(); ?>


<div class="nuestra-tierra">


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

        <section class="full-width-img">
          <div class="container-fluid px-0">
            <div class="row no-gutters animate-element slide-up">
              <div class="col-12">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 text-center py-4 my-4">
                      <div class="quote-text mb-0">
                        <?php the_field('texto_cita') ;?>
                      </div>
                    </div><!-- .col -->
                  </div><!-- .row -->
                </div><!-- .container -->
                <img class="img-fluid" src="<?php the_field('imagen_cita') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="green-row">
          <div class="container-fluid">
            <div class="row animate-element slide-up justify-content-center">
              <div class="col-lg-6 text-center pt-3 pb-2 mt-3 mb-2">
               <p>
               <?php the_field('texto_cita_verde') ;?>
               </p>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .green-row -->

        <section class="causes a-section">
          <div class="container">
            <div class="row animate-element slide-up">
              <div class="col-md-12">
                <h2 class="text-center"><?php the_field('titulo_causas') ;?></h2>
              </div>
              <?php
                // check if the repeater field has rows of data
                if( have_rows('causas') ):
                // loop through the rows of data
                  while ( have_rows('causas') ) : the_row();?>
                <div class="col-md-4 my-5 causes-wrapper">
                  <?php the_sub_field('causa') ;?>
                </div><!-- .col -->
                  <?php endwhile;
              else :
              // no rows found
              endif;
              ?>
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .causes -->

        <section class="closer-image a-section">
          <div class="container-fluid">
            <div class="row animate-element slide-up">
              <div class="col-12 text-center">
              <img class="img-fluid" src="<?php the_field('imagen_dao_closer') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .closer-image -->



</div><!--/.home -->

<?php get_footer();?>