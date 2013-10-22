<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" >
		
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
        
		<link rel="shortcut icon" href="<?php echo bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<!--[if lte IE 8]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
		
		<script type="text/javascript">
			Shadowbox.init();
			
			function showSearchbar(){
				var showsearchprop = $('#searchform').css('display');
				if(showsearchprop === 'block'){
					document.getElementById('searchform').style.display='none';
				}else{
					document.getElementById('searchform').style.display='block';
				}                     
			}
			
			$(document).ready(function () {
				 $(document).foundation();
				 
				$('.dropdown-toggle').dropdown();
				
				$('#mega-menu-1').dcMegaMenu({
                                    rowItems: '5',
                                    speed: 0,
                                    effect: 'slide',
                                    event: 'click',
                                    fullWidth: true
                                });
			});
			
			$(document).ready(function(){
				var title = document.getElementById('banner').offsetHeight;
				var menu = document.getElementById('navbarMegaWrap').offsetHeight;
				
				var content = document.getElementById('content');
				
				if(content == null){
					var content = document.getElementById('desktopWrapper');
				}
				
				content = content.offsetHeight;
				
				var screenSize = window.innerHeight;
				var setThis = title + menu + content;

				var pushHeight = (screenSize - setThis ) - document.getElementById('footer').offsetHeight;

				if(setThis < screenSize){
					document.getElementById('push').style.height = pushHeight + 'px'
				}
			});
			
			$(document).ready(function(){
				var originalSize = 13;
				
				$(".resetMe").click(function(){
					$('*').css('font-size', originalSize); 
				});

				$(".increase").click(function(){
					var currentSize = $('*').css('font-size');
					var currentSize = parseFloat(currentSize)*1.2;
					$('*').css('font-size', currentSize);

					return false;
				});

				$(".decrease").click(function(){
					var currentFontSize = $('*').css('font-size');
					var currentSize = $('*').css('font-size');
					var currentSize = parseFloat(currentSize)*0.8;
					$('*').css('font-size', currentSize);

					return false;
				});
			});
			
			$(window).resize(function(){
				var title = document.getElementById('banner').offsetHeight;
				var menu = document.getElementById('navbarMegaWrap').offsetHeight;
				
				var content = document.getElementById('content');
				
				if(content == null){
					var content = document.getElementById('desktopWrapper');
				}
				
				content = content.offsetHeight;
				
				var screenSize = window.innerHeight;
				var setThis = title + menu + content;

				var pushHeight = (screenSize - setThis ) - document.getElementById('footer').offsetHeight;

				if(setThis < screenSize){
					document.getElementById('push').style.height = pushHeight + 'px'
				}
			});
		</script>
		<!--Include Gumby Support for Modernizr-->
		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/libs/modernizr-2.6.2.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

	</head>
	<body>
	
		<!--Used to push footer to bottom-->
		<div id="wrap">
			<!-- data-spy="affix" data-offset-top="200"  -->
			<div class="navbar hidden-desktop">
				<div class="navbar-inner">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand hidden-desktop" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
					<div class="nav-collapse collapse">
						<?php wp_nav_menu( array(
							'menu'       => 'Mega Menu',
							'depth'      => 1,
							'container'  => false,
							'menu_class' => 'nav',
							'fallback_cb' => false)
						); ?>
					</div>
				</div>
			</div>
                    
            <!-- Universal responsive header -->
			<header id="header" class="container-fluid">
				<div id="banner" class="row-fluid">
					<div id="college" class="college span5 offset1">
						<a href="<?php echo get_option('home'); ?>" id="collegeLogo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Military and Veterans Resource Center" />
						</a>
					</div>
					<div id="uwm" class="uwm span5">
						<a id="uwmLogo" href="http://www.uwm.edu"></a>
					</div>
				</div>
			</header>
			
			<!-- Navigation bar mega menu responsive desktop -->
			<div id="navbarMegaWrap" class="row-fluid">
				<div id="megaMenu" class="container-fluid visible-desktop span10 offset1">
					<ul id="mega-menu-1" class="mega-menu">
							<?php
									wp_nav_menu(array(
									'theme_location' => 'megadropdown-menu',
									'items_wrap' => '%3$s',
									'container' => ''));
							?>
					</ul>
					<div class="btn-group dropdownLinks">
						<a class="btn dropdown-toggle quicklinkImage" data-toggle="dropdown" href="#"></a>
							<ul class="dropdown-menu">
								<?php
										  wp_nav_menu(array(
										  'theme_location' => 'quick-links',
										  'items_wrap' => '%3$s',
										  'container' => ''));
								  ?>
							</ul>
					</div>
					<b id='searchbarTop' onclick="showSearchbar()" style="background:url('<?php bloginfo( 'template_directory' ); ?>/images/searchicon.png');"></b>
					<form action="http://www4.uwm.edu/search.cfm" method="get"><input type="text" id="searchform" name="q"></form>
				</div>
			</div>
			