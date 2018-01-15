<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Designer and full-stack web developer" />
	<meta name="robots" content="Index, Follow">
	<meta name="theme-color" content="#ffffff">
	<!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
	<!--[if IE]><link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>ico32.ico"><![endif]-->
	<!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 
	<link rel="apple-touch-icon-precomposed" href="<?php echo bloginfo('template_url'); ?>ico180.ico">
	<!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
	<link rel="icon" href="<?php echo bloginfo('template_url'); ?>ico196.ico">
	<style>
		@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v18/0eC6fl06luXEYWpBSJvXCBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0460-052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v18/Fl4y0QdOxyyTHEGMXX8kcRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v18/-L14Jk06m6pUHB-5mXQQnRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v18/I3S1wsgSg9YCurV6PUkTORJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v18/NYDWBdD4gIq26G5XYbHsFBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v18/Pru33qjShpZSmG3z6VYwnRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(https://fonts.gstatic.com/s/roboto/v18/Hgo13k-tfSpn0qi1SFdUfVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}
	</style>
	<?php wp_head(); ?>

</head>
<body>
	<header>
		<div class="container  flex  flex-row  flex-nowrap  jc-flex-strech">
			<div class="relative  md1  small-logo-container">
				<a href="<?php home_url(); ?>">
					<h1 class="small-logo" style="background-image:url(<?php bloginfo( 'template_url' );?>/img/small-logo.png);"></h1>
				</a>
			</div>
			<a href="#menu" class="menu-link"><div class="hamburger  round"></div><div class="hamburger  round"></div><div class="hamburger  round"></div></a>
			<nav class="item  ph12  p0  md11  menu  left  md-left" id="menu" role="navigation">
				<ul>						
					<?php if($_GET['lang'] == "es"){?>
					<li class="nobullet"><a href="<?php home_url();?>#bio" class="item  f_75 smoothScroll  uppercase">Sobre mi</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#education" class="item  f_75 smoothScroll  uppercase">Estudios</a></li>		
					<li class="nobullet"><a href="<?php home_url();?>#projects" class="item  f_75 smoothScroll  uppercase">Trabajos</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#skills" class="item  f_75 smoothScroll  uppercase">Conocimientos</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#projects" class="item  f_75 smoothScroll  uppercase">Proyectos</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#contact" class="item  f_75 smoothScroll  uppercase">Contacto</a></li>
					<li class="nobullet  md-none"><a href="?lang=en" class="item"><b  class="f_75  md-f0  uppercase">English</b></a></li>
					<?php }else{?>
					<li class="nobullet"><a href="<?php home_url();?>#bio" class="item  f_75 smoothScroll  uppercase">About</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#education" class="item  f_75 smoothScroll  uppercase">Education</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#works" class="item  f_75 smoothScroll  uppercase">Works</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#skills" class="item  f_75 smoothScroll  uppercase">Skills</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#projects" class="item  f_75 smoothScroll  uppercase">Projects</a></li>
					<li class="nobullet"><a href="<?php home_url();?>#contact" class="item  f_75 smoothScroll  uppercase">Contact</a></li>
					<li class="nobullet  md-none"><a href="?lang=es" class="item"><b  class="f_75  md-f0 smoothScroll  uppercase">Español</b></a></li>
					<?php } ?>						
				</ul>
			</nav>
			<ul class="none  md-block  md-fleft  md1  flex  flex-row  flex-nowrap">
				<?php if($_GET['lang'] == "es"){?>
				<li class="nobullet  i-b"><a href="?lang=en" class="item  uppercase"><b  class="md-f_75">en</b></a></li>
				<?php }else{ ?>
				<li class="nobullet  i-b"><a href="?lang=es" class="item  uppercase"><b  class="md-f_75">es</b></a></li>
				<?php } ?>
			</ul>
		</div>
	</header>