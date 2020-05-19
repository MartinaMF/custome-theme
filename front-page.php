<?php get_header();?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo get_field('image1')['url'];?>" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo get_field('image1')['url'];?>" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo get_field('image3')['url'];?>" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    </div> <!-- end carousel -->
                  <div class="lcc-slogn text-center">
                      <h2>Poor customer service = poor sales.
                 <br><span>Boost your website's credibility.</span></h2>
                 </div>
                  <!-- end lcc-slogan -->
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