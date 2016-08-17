<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif; ?>

<div><img style="display:block; margin: 0 auto;" src="//k12.blackbaud.com/wp-content/uploads/2016/05/spectrum-full-width.png"></div>

<?php
if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
						<p>&copy; Copyright <?php echo date('Y'); ?> Blackbaud, Inc.</p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<script src="/wp-content/themes/Divi-child/js/retina.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="//fast.fonts.net/jsapi/84a0e415-cd12-4d5c-9bd1-f657eb8f6ce5.js"></script>

	<!-- Begin Munchkin Script --> 
	<script type="text/javascript"> 
	(function() { var didInit = false; function initMunchkin() { if(didInit === false) { didInit = true; Munchkin.init('053-MXJ-131'); } } var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//munchkin.marketo.net/munchkin.js'; s.onreadystatechange = function() { if (this.readyState == 'complete' || this.readyState == 'loaded') { initMunchkin(); } }; s.onload = initMunchkin; document.getElementsByTagName('head')[0].appendChild(s);})(); 
	</script>

	<!-- RTP tag --> 
<script type='text/javascript'>
(function(c,h,a,f,i){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
c[a].a=i;var g=h.createElement("script");g.async=true;g.type="text/javascript";
g.src=f+'?rh='+c.location.hostname+'&aid='+i;var b=h.getElementsByTagName("script")[0];b.parentNode.insertBefore(g,b);
})(window,document,"rtp","//sjrtp2-cdn.marketo.com/rtp-api/v1/rtp.js","blackbaud1");
rtp('send','view');
rtp('get', 'campaign',true);
</script>
<!-- End of RTP tag -->


</body>
</html>