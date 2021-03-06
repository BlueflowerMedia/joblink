<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script type="text/javascript">
	// Stopping animation before all elements are loaded (for header banner)
	function jsloading() {
		document.body.className += " js-loading";
		window.addEventListener("load", showPage, false);
		function showPage() {
			document.body.className = document.body.className.replace("js-loading", "");
		}
	}
	jsloading();
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">

    <!-- navbar left -->
		<div class="nav-left">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="logo-header" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Joblink logo"></a>
    </div>

    <!-- navbar right -->
    <div class="nav-right">
			<a href="#mission">Our Mission</a>
			<a href="#works">How it works</a>
			<a href="#postjob">Post a Job</a>
			<a href="#register">Find a Job</a>
			<a href="#testimonials">Testimonials</a>
			<a href="#colophon">Contact</a>
    </div>

		<!-- hamburger -->
		<div class="hamburger" id="hamburger-9">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>

		<!-- dropdown -->
		<div id="dropdown-menu" class="dropdown">
			<ul>
				<li>JOB LINK</li>
				<li><a href="#mission" onclick="closeHamburger()">Our Mission</a></li>
				<li><a href="#worksm" onclick="closeHamburger()">How it works</a></li>
				<li><a href="#postjob" onclick="closeHamburger()">Post a Job</a></li>
				<li><a href="#register" onclick="closeHamburger()">Find a Job</a></li>
				<li><a href="#testimonials" onclick="closeHamburger()">Testimonials</a></li>
				<li><a href="#colophon" onclick="closeHamburger()">Contact</a></li>
			</ul>
		</div>
	</header>
</div>
</body>
</html>
