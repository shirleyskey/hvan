<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hocvien
 */

?>

<div class="site-section subscribe bg-light" style="margin-top: 0px">
      <div class="container">
        <form action="#" class="row align-items-center">
          <div class="col-md-6 mr-auto left">
            <div class="logo-footer" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/resources/images/logo.png)"></div>
            <h2>Bảng tin Học viện An ninh Nhân dân</h2>
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Bản quyền © 2020 thuộc <a href="" target="_blank" >Học viện ANND</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
          <div class="col-md-6 ml-auto right" style="padding: 10px 30px;">
              <h2>Thông tin Liên hệ Quản trị viên</h2>
              <div>
                <p><span class="icon-mail_outline"></span> Email: 
                <?php 
                  echo (the_field('email')) ? get_field('email') : '';
                ?></p>
                <p><span class="icon-phone"></span>Số Điện Thoại: 
                <?php 
                  echo (the_field('phone-number')) ? get_field('phone-number') : '';
                ?>
                </p>
                <p><span class="icon-facebook"></span>FanPage: 
                <?php 
                  echo (the_field('fanpage')) ? get_field('fanpage') : '';
                ?>
                </p>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- .site-wrap -->
  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/jquery-ui.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/popper.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/bootstrap.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/aos.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/jquery.sticky.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/main.js"></script>	
 
<?php wp_footer(); ?>
</body>
</html>
