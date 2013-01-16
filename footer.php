			<footer role="contentinfo" >
			
				<div id="nextgen-footer-logo" class="pull-right hidden-phone">
					<img src="<?php bloginfo('template_directory'); ?>/images/ngd_logo.png"/>
				</div>
				
				<div id="inner-footer" class="clearfix">
		          <div id="widget-footer" class="clearfix row-fluid">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="pull-right hidden-phone">
						<a href="http://us.linkedin.com/company/next-generation-development-llc" id="linkedin"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" style="width: 35px"/></a>
          </p>
			
					<p class="attribution hidden-phone">&copy; 2012 Next Generation Development. All rights reserved.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
