<?php get_header();?>
                  <div class="page-banner">
                      <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                  </div>
                  <div class="lcc-inner-slogn justify-content-center text-center">
                      <h3><?php the_title();?></h3>
                 </div>
                    <div class="container lcc-content">
                     <?php
                     while(have_posts()){
                         the_post();
                         the_content();
                     }
                     ?>
                    </div>
                  
                  <!-- end container lcc-content -->
                
<?php get_footer();?>