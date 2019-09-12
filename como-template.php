<?php /* Template Name: como-template */
get_header(); ?>


<div class="como">


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

        <section class="two-col">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <?php the_field('texto_intro') ;?>
              </div><!-- .col -->
              <div class="col-md-4">
                <img class="img-fluid" src="<?php the_field('imagen_intro1') ;?>" alt="">
                <img class="img-fluid" src="<?php the_field('imagen_intro2') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .two-col -->

        <section class="full-width-img">
          <div class="container-fluid px-0">
            <div class="row no-gutters">
              <div class="col-12">
                <img class="img-fluid" src="<?php the_field('imagen_dao_circle') ;?>" alt="">
                <img class="img-fluid" src="<?php the_field('imagen_seccion') ;?>" alt="">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <?php the_field('texto_cita') ;?>
                    </div><!-- .col -->
                  </div><!-- .row -->
                </div><!-- .container -->
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="green-row">
          <div class="container-fluid px-0">
            <div class="row">
              <div class="col-12 text-center">
              <?php the_field('texto_cita_verde') ;?>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .green-row -->

        <section class="process">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img class="img-fluid" src="<?php the_field('imagen_proceso') ;?>" alt="">
              </div><!-- .col -->
              <div class="col-md-10">
                <?php the_field('texto_proceso') ;?>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .process -->

        <section class="closer-image">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <img class="img-fluid" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .closer-image -->

</div><!--/.home -->

<?php get_footer();?>