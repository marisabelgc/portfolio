<?php /* Template Name: Antarctic: News */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta charset="UTF-8">
	<title>Antarctic</title>
	<meta name="description" content="eSports Wordpress Theme">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/antarctic/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/antarctic/css/style-blue.css">
</head>
<body>
	<style>
	.form-buy{ position: absolute;top: 14px;right: 3rem; }
	.form-buy input{ border: 0px solid transparent !important;width: auto;height: 41px;padding: 0; }
	.form-buy img{width: 0;height: 0;}
</style>
<div class="change-color" id="changeColor">
	<div class="each-color green" id="colorGreen"></div>
	<div class="each-color turquoise" id="colorTurquoise"></div>
	<div class="each-color blue " id="colorBlue"></div>
	<div class="each-color purple" id="colorPurple"></div>	
	<div class="each-color red " id="colorRed"></div>	
	<div class="each-color black" id="colorBlack"></div>
</div>

<section class="vh60  center  firstvp-news  news" style="<?php echo "background-image: url('"; bloginfo( "template_url" ); echo "/antarctic/img/post1.jpg"; echo "');"; ?>">
	<header class="container-fluid  header  center">
		<div class="container">
			<div class="relative">
				<h1 class="logo" style="
				<?php echo "background-image: url('";
				bloginfo( "template_url" );
				echo "/antarctic/img/logo.svg";
				echo "');"; ?>">Antarctic</h1>
			</div>
			<a href="#menu" class="menu-link"><div class="hamburger  round"></div><div class="hamburger  round"></div><div class="hamburger  round"></div></a>
			<nav class="item  ph12  p0  menu  center" id="menu" role="navigation">
				<ul>
					<?php if($_GET['lang'] == "es"){?>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#home" class="item  f_75">Inicio</a></li>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#news" class="item  f_75">Noticias</a></li>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#teams" class="item  f_75">Equipos</a></li>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#contact" class="item  f_75">Contacto</a></li>
					<?php }else{?>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#home" class="item  f_75">Home</a></li>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#news" class="item  f_75">News</a></li>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#teams" class="item  f_75">Teams</a></li>
					<li class="nobullet"><a href="<?php bloginfo('url');?>/antarctic/#contact" class="item  f_75">Contact</a></li>
					<?php } ?>						
				</ul>
			</nav>
			<form class="form-buy" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="PHSLULPQLWX7N">
				<input type="image" src="<?php if($_GET['lang']=="es"){echo "http://marisabelguevara.com/wp-content/uploads/2017/10/boton-paypal-blanco-es.png";}else{ echo "http://marisabelguevara.com/wp-content/uploads/2017/10/boton-paypal-blanco-en.png";}?>" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" id="buyImage">
				<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</header>

	<div class="container">
		<h2><?php if($_GET['lang'] == "es"){echo "Noticias";}else{echo "News";}?></h2>
	</div>
</section>
<br><br>
<div class="container  flex  flex-wrap  flex-row  jc-flex-start">
	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=1<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post10.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>

	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=2<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post2.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>

	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=3<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post4.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>

	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=4<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post5.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>

	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=5<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post6.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>

	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=6<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post7.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>

	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=7<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post8.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>

	<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=8<?php if($_GET['lang']){echo "&lang=es";} ?>" class="ph12  md6  lg4  list-posts">
		<div class="bg-img" style="background-image: url('<?php bloginfo( 'template_url' );?>/antarctic/img/post9.jpg');"></div>
		<div class="text">
			<h4 class="justify">Lorem ipsum dolor sit amet</h4>
			<p class="extracto  justify"><time class="f_75"><?php echo (date('d')-3)." ".date('M, Y'); ?></time> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
		</div>				    		
	</a>
</div>
<br><br>

<footer>
	<div class="container  flex  flex-row  flex-wrap  md-flex-nowrap  p1 ai-flex-center">
		<div class="footer-logo  ph12  md1  center  md-left m_5 sm-m0">
			<img src="<?php bloginfo('template_url');?>/antarctic/img/logo.svg">
		</div>			
		<div class="copyright  ph12  md5  center  md-left">
			Antarctic  © <?php the_time('Y'); ?>
			<br>
			<a href="<?php bloginfo('url');?>/antarctic#home" class="f_75"><?php if($_GET['lang']=="es"){ echo "INICIO";}else{ echo "HOME";}?> &nbsp;-</a> 
			<a href="<?php bloginfo('url');?>/antarctic#news" class="f_75"> &nbsp;<?php if($_GET['lang']=="es"){ echo "NOTICIAS";}else{ echo "NEWS";}?>&nbsp; -</a>
			<a href="<?php bloginfo('url');?>/antarctic#teams" class="f_75"> &nbsp;<?php if($_GET['lang']=="es"){ echo "EQUIPOS";}else{ echo "TEAMS";}?>&nbsp; -</a>
			<a href="<?php bloginfo('url');?>/antarctic#contact" class="f_75"> &nbsp;<?php if($_GET['lang']=="es"){ echo "CONTACTO";}else{ echo "CONTACT";}?></a>
		</div>
		<div class="sponsors  ph12  md6  flex  flex-row  flex-nowrap  jc-flex-end  center  md-right" id="sponsors">
			<a href="#">
				<img src="<?php bloginfo('template_url');?>/antarctic/img/sponsor1.png">
			</a>&nbsp;
			<a href="#">
				<img src="<?php bloginfo('template_url');?>/antarctic/img/sponsor2.png">
			</a>&nbsp;
			<a href="#">
				<img src="<?php bloginfo('template_url');?>/antarctic/img/sponsor3.png">
			</a>&nbsp;
			<a href="#">
				<img src="<?php bloginfo('template_url');?>/antarctic/img/sponsor4.png">
			</a>&nbsp;
			<a href="#">
				<img src="<?php bloginfo('template_url');?>/antarctic/img/sponsor5.png">
			</a>&nbsp;
			<a href="#">
				<img src="<?php bloginfo('template_url');?>/antarctic/img/sponsor6.png">
			</a>&nbsp;
		</div>			
	</div>		
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/antarctic/js/scripts.js"></script>
<script src="<?php bloginfo('template_url');?>/antarctic/js/changeColor.js"></script>
</body>
</html>