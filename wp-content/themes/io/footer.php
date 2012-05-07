			</section><!-- #main -->

			<footer id="footer" role="contentinfo">

				<?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with four columns of widgets.
					 */
					//get_sidebar( 'footer' );
				?>
				<br />
				<br />
				<p>
					&copy; <a target="_blank" title="adamcbrewer.com" href="http://adamcbrewer.com">Adam Brewer</a> <?php echo date('Y', time('now')); ?>. I use <a title="@adamcbrewer" target="_blank" href="http://twitter.com/adamcbrewer">Twitter</a> and <a target="_blank" title="adamcbrewer on GitHub" href="https://github.com/adamcbrewer">GitHub</a>
				</p>

			</footer><!-- footer -->

		<?php
			/* Always have wp_footer() just before the closing </body>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to reference JavaScript files.
			 */
			wp_footer();
		?>

	</div> <!-- #wrapper -->

	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-31471338-1']);
		_gaq.push(['_setDomainName', 'brewerlogic.com']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

</body>
</html>