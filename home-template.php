<?php /* Template Name: home-template */
get_header(); ?>


<div class="home">


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
                      <div class="author-wrapper">
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

        <section class="a-section intro-col">
          <div class="container">
            <div class="row animate-element slide-up">
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

        <section class="full-width-img section-tan">
          <div class="container-fluid px-0">
            <div class="row no-gutters">
              <div class="col-12">
                <img class="img-fluid" src="<?php the_field('imagen_seccion') ;?>" alt="">
                <div class="container">
                  <div class="row animate-element slide-up justify-content-center">
                    <div class="col-lg-8 py-5 my-5 text-center">
                      <p class="quote-text mb-0">
                        <?php the_field('texto_cita') ;?>
                        <span class="txt-highlight"><?php the_field('texto_cita_resaltado') ;?></span>
                      </p>
                    </div><!-- .col -->
                  </div><!-- .row -->
                </div><!-- .container -->
                <img class="img-fluid" src="<?php the_field('imagen_seccion2') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- full-width-img -->

        <section class="updates a-section" style="background-image: url('<?php the_field('fondo_noticias') ;?>');">
          <div class="container">
            <div class="row px-3 animate-element slide-up">
              <div class="col-md-12 text-center py-5">
                <h2 class=""><?php the_field('titulo_noticias') ;?></h2>
              </div><!-- .col -->
              <div class="col-md-6 px-4">
                  <img class="img-full-width mb-4" src="<?php the_field('imagen_noticia1') ;?>" alt="">
                  <?php the_field('texto_noticia1') ;?>
              </div>
              <div class="col-md-6 px-4">
                  <img class="img-full-width mb-4" src="<?php the_field('imagen_noticia2') ;?>" alt="">
                  <?php the_field('texto_noticia2') ;?>
              </div>
              <div class="col-md-12 text-center mt-4">
                <img class="img-fluid mb-4" src="<?php the_field('imagen_dao') ;?>" alt="">
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .container -->
        </section><!-- .updates -->

</div><!--/.home -->

<?php get_footer();?>