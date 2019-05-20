<footer>
  <nav class="container">
  <?php 
      $args = ['theme_location' => 'footer_menu'];
      wp_nav_menu($args); 
      ?>
  </nav>
  <div class="foot-copy">
    <p>&copy; CopyLeft <?php bloginfo('name'); 
      echo(' By <a href="">havus</a>' . " - " . date("Y")); ?>
    </p>
  </div>
</footer>


  <?php 
    /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer(); 
  ?>
  <script src="assets/js/jquery-3.4.0.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
</body>
</html>