<!--
  BEGIN: Footer
-->
	<div class="footer-container container-fluid">
		<div class="container">
			<div class="row pad60">
				<div class="col-sm-2">
					<div class="row mar20-bot">
						<a href="http://gearlearning.org"><img class="footer-logo center-block" src="<?php echo get_template_directory_uri(); ?>/img/gear-logo-text.svg"/></a>
					</div>
				</div>

				<div class="col-sm-3 pad10">
					<div class="row">
						<p class="text-lblue small">
							Gear Learning is part of the <a href="http://www.wcer.wisc.edu/" taget="_blank">Wisconsin Center for Education Research</a> in the <a href="http://www.wisc.edu/" target="_blank">University of Wisconsin-Madison's</a> <a href="http://www.education.wisc.edu/" target="_blank">School of Education</a>.
						</p>
					</div>
				</div>

				<div class="col-sm-3 pad10">
					<div class="row mar20-bot">
						<p class="text-lblue small">
							Educational Sciences Room 146,<br /> 1025 West Johnson Street Madison, WI 53706
							<!-- <i class="fa fa-circle small-icon" aria-hidden="true"></i> Ph: 555-555-5555 -->
						</p>
					</div>
				</div>

				<div class="col-sm-4 pad10">
					<div class="row">
						<nav>
							<ul>
								<?php include ('nav-links.php'); ?>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-sm-12">
					<p class="text-center text-lblue"><small><small>
						COPYRIGHT ©2017 THE BOARD OF REGENTS OF THE UNIVERSITY OF WISCONSIN SYSTEM
					</small></small></p>
				</div>
			</div>

		</div><!-- /.container -->
	</div><!-- /.footer-container -->
<!-- END: Footer -->


	<?php wp_footer(); ?>
	<!-- Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-89927946-1', 'auto');
	  ga('send', 'pageview');
	</script>

</body>
</html>
