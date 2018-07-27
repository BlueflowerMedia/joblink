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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
      <!-- navbar left -->
			<div class="nav-left">
				<p>JOB LINK</p>
      </div>

      <!-- navbar right -->
      <div class="nav-right">

			<a href="#">Our Mission</a>
			<a href="#">How it works</a>
			<a href="#">Post a Job</a>
			<a href="#">Find a Job</a>
			<a href="#">Contact</a>

				<!-- hamburger -->
				<div class="hamburger" id="hamburger-9">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>

      </div>

			<!-- dropdown -->
			<div id="dropdown-menu" class="dropdown">
				<ul>
					<li>JOB LINK</li>
					<li><a href="#">Our Mission</a></li>
					<li><a href="#">How it works</a></li>
					<li><a href="#">Post a Job</a></li>
					<li><a href="#">Find a Job</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>



		</nav>
	</header>
	<div id="content" class="site-content">
