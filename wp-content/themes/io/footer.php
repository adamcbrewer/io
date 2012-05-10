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
					&copy; <a target="_blank" title="adamcbrewer.com" href="http://adamcbrewer.com">Adam Brewer</a> <?php echo date('Y', time('now')); ?>. I &#8220;&#9835; &#9834;&#8221; on <a title="@adamcbrewer" target="_blank" href="http://twitter.com/adamcbrewer">Twitter</a>, &#10084; <a target="_blank" title="adamcbrewer on GitHub" href="https://github.com/adamcbrewer">GitHub</a> and <span class="html-char lrg">&#9997;</span> <a title="if all-else fails" href="mailto:adamcbrewer@gmail.com">Gmail</a>
				</p>

			</footer><!-- footer -->

		<?php wp_footer(); ?>

	</div> <!-- #wrapper -->

	<script type="text/javascript" charset="utf-8">
		/*
		 * Init global object (for creating base_url methods, etc.)
		 */
		var IO = {
			basePath: "<?php echo $_SERVER['HTTP_HOST']; ?>"
		};

		/*
		 * Add a data-attribute of the user-agent to <html>
		 *
		 * Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
		 */
		var b = document.documentElement;
		b.setAttribute("data-useragent",  navigator.userAgent);
		b.setAttribute("data-platform", navigator.platform );
	</script>

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