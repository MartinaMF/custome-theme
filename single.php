<?php get_header();?>
                  <div class="page-banner">
                      <img src="<?php echo get_field('page_banner_image')['url']?>" alt="">
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