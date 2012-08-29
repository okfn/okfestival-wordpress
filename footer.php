		</div><!-- End Main row -->
		
		<footer id="content-info" role="contentinfo">
			<div class="row">
				<?php dynamic_sidebar("Footer"); ?>
			</div>
			
		</footer>
			
	</div><!-- Container End -->
	
	<!-- Included JS Files of Foundation -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>
  
  <!-- Visulisation -->
  <div id="logoVizContainer">
    <![if gte IE 9]>
      <div id="OKfestContainer" style="display:none;">
        <div id="LogoVizLinks"></div>
        <div id="LogoVizNodes"></div>
        <div id="LogoVizLoose"></div>
      </div>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/d3.js"></script>
      <?php echo do_shortcode("[vis]"); ?>
    <![endif]>
    <!--[if lt IE 9]>
    <style type="text/css">
      body > #container {
        background-image: url(<?php echo get_template_directory_uri(); ?>/images/header.png);
        background-repeat: repeat-x;
        background-position: center -1px;
      }
    </style>
    <![endif]-->
  </div>
  
</body>
</html>