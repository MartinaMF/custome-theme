<?php get_header();?>
                  
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