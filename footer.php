<footer class="main-footer container-fluid">
  <div class="row align-items-center animate-element slide-up">
    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 text-center text-md-left">
      <img class="img-fluid" src="<?php the_field('logo_footer', 'option'); ?>" alt="dao">
    </div>
    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 text-center text-md-right text-lg-left">
      <?php the_field('columna_texto_footer', 'option'); ?>
    </div>
    <div class="col-md-6 col-lg-3 mb-sm-5 text-center text-md-left mb-md-0 links-footer d-md-flex">
      <ul class="links-footer-list">
        <?php

                // check if the repeater field has rows of data
                if( have_rows('menu_links', 'option') ):
                // loop through the rows of data
                  while ( have_rows('menu_links', 'option') ) : the_row();
                  ?>

                  <li class="links-footer-item">
                  <?php

                  $link = get_sub_field('menu_link', 'option');

                  if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                  <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                </li><!-- .li -->
                <?php endwhile;
                else :
                // no rows found
                endif;
        ?>
      </ul>
      <ul class="links-footer-list">
        <?php
                // check if the repeater field has rows of data
                if( have_rows('menu_links2', 'option') ):
                // loop through the rows of data
                  while ( have_rows('menu_links2', 'option') ) : the_row();?>
                  <li class="links-footer-item">
                  <?php

                  $link = get_sub_field('menu_link', 'option');

                  if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                  <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                </li><!-- .li -->
                <?php endwhile;
                else :
                // no rows found
                endif;
        ?>
      </ul>
    </div><!-- .col -->
    <div class="col-md-6 col-lg-3">
    <ul class="social text-center text-md-right">
        <?php
                // check if the repeater field has rows of data
                if( have_rows('social_links', 'option') ):
                // loop through the rows of data
                  while ( have_rows('social_links', 'option') ) : the_row();?>
                  <li class="link-footer <?php the_sub_field('social_link_name', 'option') ;?>">
                    <a target="_blank" href="<?php the_sub_field('social_link', 'option') ;?>"><?php the_sub_field('social_link_name', 'option') ;?></a>
                  </li><!-- .li -->
                <?php endwhile;
                else :
                // no rows found
                endif;
        ?>
      </ul>
    </div>
  </div><!-- .row -->
</footer><!-- .container-fluid -->


    <?php wp_footer(); ?>
  </body>
</html>