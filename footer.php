<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remont.048
 */

?>

<div class="footer row">
		    		<div class="col-footer col-md-4 col-xs-12">
		    			<h3>Карта сайта</h3>
		    			<?php wp_nav_menu('primary'); ?>
		    		</div>

		    		<div class="col-footer col-md-4 col-xs-12">
		    			<h3>Контакты</h3>
		    			<p class="contact-us-details">
	        				<b>Телефон:</b> +38 098 048 048 0<br/>
	        				<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">rem048.od.ua@gmail.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-12">
		    			<h3>Соцсети</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>

	<div id="toTop"><img alt="Прокрутить вверх" src="<?php bloginfo('template_directory'); ?>/img/up.png"></div>


	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.contenttoggle.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/accordion.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/loader.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/smoothscroll.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/excel-calc.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/pgscrl.min.js"></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/scrollup.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/collapse.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">

<?php wp_footer(); ?>
	</div>
</body>
</html>