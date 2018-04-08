<?php
/**
 * footer.php
 *
 * Author: Adam Victor
 *
 * The footer of the page
 * Jquery library as well as all other scripts are included here
 *
 */
?>
<!-- Footer -->
<footer>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
			<p><span id="year-copy"></span> &copy;
				Built <i class="fa fa-desktop"></i> by 
					<a href="http://www.amvwebsolutions.com/" target="_blank">
					Adam Victor</a>
			</p>
		</div>
	</div>
</footer>
<!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Scroll to top link, check main.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Get Jquery library from Google but if something goes wrong get Jquery from local file - Remove 'http:' if you have SSL -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.11.0.min.js"%3E%3C/script%3E'));</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79919410-1', 'auto');
  ga('send', 'pageview');

</script>