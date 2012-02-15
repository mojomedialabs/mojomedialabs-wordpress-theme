<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->


</div><!-- #page -->

<footer id="colophon" role="contentinfo">
	<div id="colophon-content">
		<p id="mojo-description">Mojo Media Labs, a Rose Group Company, is passionate about bringing value to our clients beyond that of a traditional advertising agency. We take a holistic approach to marketing by strategically integrating campaign development through graphic design, web design and development, internet marketing, SEO (search engine optimization), SEM (search engine marketing), social media and public relations.</p>
		<?php get_search_form(); ?>
		<div id="company-descriptions">
			<div id="marketing-candy-description">
				<h1>Marketing Candy</h1>
				<p><a href="http://marketing-candy.com/">Marketing Candy</a>, a Rose Group Company, is a promotional products and print company in an industry that is technologically in the dark ages, Marketing Candy leverages smart technology along with experience to creatively solve even the toughest promotional challenges:</p>
				<p style="text-align: center;"><strong><br />Creative Product Concepts + Robust Logistical Solutions + Technology Solutions that make sense<br /><br /></strong></p>
				<p>We work where creative, logistics and technology intersect to meet our clients’ needs and have an unswerving commitment to getting it right.</p>
				<p style="text-align: center;"><a href="http://marketing-candy.com/">www.marketing-candy.com</a></p>
			</div>

			<div id="return-on-energy-description">
				<h1>Return On Energy&reg; Inc.</h1>
				<p><a href="http://roepowersroi.com/">ROE Powers ROI</a>&trade; introduces a game-changing approach to business, <a href="http://returnonenergy.com/">Return on Energy</a>&reg;, or ROE&trade;, provides a solution to the number one problem companies struggle with today—getting the right people into the right seats—and takes it one step further: to get those people communicating and thinking the right way. In other words, when the right thinkers are filling the right positions, companies experience an increase in employee productivity and genuine <a href="http://www.roepowersroi.com/why-does-it-matter/">employee engagement</a>, maximizing and organization’s success, or Return on Investment (ROI).</p>
				<p>Return on Energy&reg; Inc offers consulting and training services designed to create highly effective workplaces, as well CEO and founder, <a href="http://rmichaelrose.com/">R Michael Rose</a>, also speaks on ROE Powers ROI&trade;.</p>
				<p style="text-align: center;"><a href="http://returnonenergy.com/">www.returnonenergy.com</a></p>
			</div>
		</div>
		<p style="font-size: 10px; line-height: 12px; text-align: center;"><a href="http://maps.google.com/maps?q=400+e+las+colinas+blvd&amp;oe=utf-8&amp;um=1&amp;ie=UTF-8&amp;hq=&amp;hnear=0x864e82c75d5a895b:0xf15b8d043e22658f,400+E+Las+Colinas+Blvd,+Irving,+TX+75039&amp;gl=us&amp;ei=w_AmT-aTFuLHsQKQmOiMAg&amp;sa=X&amp;oi=geocode_result&amp;ct=title&amp;resnum=1&amp;ved=0CCAQ8gEwAA">400 E. Las Colinas Blvd. Irving, TX 75039</a><br />&copy; <?php echo date("Y"); ?> Mojo Media Labs</p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
<?php if (!current_user_can('manage_options')) { ?>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-28718561-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<?php } ?>
</body>
</html>