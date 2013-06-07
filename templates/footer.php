<footer class="content-info footer" role="contentinfo">

<div class="footer-menubar">
  <div class="<?php echo roots_container_class(); ?>">	 
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</div>

<div class="footer-info">
  <div class="<?php echo roots_container_class(); ?>">	 
    <ul class="site_copyright">
     <li class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
     <li class="creator"><a href="#">Designed by Redfrost</a></li>
    </ul>
    
    <!-- Scroll to top -->
	<p class="back-top"><a href="#body"><span></span>Back to Top</a></p>

  </div>
</div>

</footer>

<div class="bg"></div>

<?php wp_footer(); ?>


</div><!-- /#master-wrap -->

<!-- iPad menu fix -->
<script type='text/javascript'>
$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
</script>
</body>
</html>
