<?php
/*
 Template Name: Trang Chủ
 */
  ?>
<?php get_header(); ?>
<div class="container info-tab">
      <ul class="nav nav-tabs">
        <li class="active"><a class="active show" data-toggle="tab" href="#home">Bảng tin Nội bộ</a></li>
        <li><a data-toggle="tab" href="#menu1">Nội quy Sử dụng mạng</a></li>
        <li><a data-toggle="tab" href="#menu2">Hướng dẫn ATTT</a></li>
      </ul>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active show">
          <h3>
          <?php 
              echo (the_field('title_bangtin')) ? get_field('title_bangtin') : '';
          ?>
          </h3>
          <p>
          <?php 
                echo (the_field('description_bangtin')) ? get_field('description_bangtin') : '';
            ?>
           </p>
          <div class="site-section py-0">
            <div class="owl-carousel hero-slide owl-style">
            <?php 
                $loop = new WP_Query( array( 'post_type' => 'bang-tin' ) ); 
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="site-section">
                  <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                    <?php 
                      $image = get_field('image');
                      if( !empty( $image ) ): ?>
                          <div class="contents" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
                    <?php endif; ?>
                      
                      </div>
                    </div>
                  </div>
                </div>
                <?php 
                  endwhile;
                  wp_reset_postdata(); 
            ?>
            <!-- End Huong Dan  -->
            </div>
          </div>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>
          <?php 
              echo (the_field('title_noiquy')) ? get_field('title_noiquy') : '';
          ?>
          </h3>
          <p>
          <?php 
              echo (the_field('description_noiquy')) ? get_field('description_noiquy') : '';
          ?>
          </p>
          <div class="site-section py-0">
            <div class="owl-carousel hero-slide owl-style">
            <?php 
                $loop = new WP_Query( array( 'post_type' => 'noi-quy' ) ); 
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="site-section">
                  <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                    <?php 
                      $image = get_field('image');
                      if( !empty( $image ) ): ?>
                          <div class="contents" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
                    <?php endif; ?>
                      
                      </div>
                    </div>
                  </div>
                </div>
                <?php 
                  endwhile;
                  wp_reset_postdata(); 
            ?>
            <!-- End Nội Quy  -->
            </div>
          </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3> <?php 
              echo (the_field('title_huongdan')) ? get_field('title_huongdan') : '';
          ?></h3>
          <p><?php 
              echo (the_field('description_huongdan')) ? get_field('description_huongdan') : '';
          ?></p>
          <div class="site-section py-0">
            <div class="owl-carousel hero-slide owl-style">
            <?php 
                $loop = new WP_Query( array( 'post_type' => 'huong-dan' ) ); 
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="site-section">
                  <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                    <?php 
                      $image = get_field('image');
                      if( !empty( $image ) ): ?>
                          <div class="contents" style="background-image: url('<?php echo esc_url($image['url']); ?>')">
                    <?php endif; ?>
                      
                      </div>
                    </div>
                  </div>
                </div>
                <?php 
                  endwhile;
                  wp_reset_postdata(); 
            ?>
            <!-- End Hướng Dẫn -->
            </div>
          </div>
        </div>
      </div>
    </div>
   
<?php get_footer(); ?>