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
	<section class="allvh  home  center" id="home">
		<div class="firstvp" style="<?php echo "background-image: url('"; bloginfo( "template_url" ); echo "/antarctic/img/home-img.jpg"; echo "');"; ?>"></div>
		<div class="home-color-opacity"></div>
		<div class="gradient-home  gradient-left"></div>
		<div class="gradient-home  gradient-right"></div>

		<header class="container-fluid  header">
			<div class="container">
				<div class="relative">
					<h1 class="logo" style="<?php echo "background-image: url('"; bloginfo( "template_url" ); echo "/antarctic/img/logo.svg"; echo "');"; ?>">Antarctic</h1>
				</div>
				<a href="#menu" class="menu-link"><div class="hamburger  round"></div><div class="hamburger  round"></div><div class="hamburger  round"></div></a>
				<nav class="item  ph12  p0  menu  center" id="menu" role="navigation">
					<ul>
						<li class="nobullet"><a href="<?php bloginfo('url');?>antarctic#home" class="item  f_75"><?php if($_GET['lang']=="es"){ echo "Inicio";}else{ echo "Home";}?></a></li>
						<li class="nobullet"><a href="<?php bloginfo('url');?>antarctic#news" class="item  f_75"><?php if($_GET['lang']=="es"){ echo "Noticias";}else{ echo "News";}?></a></li>
						<li class="nobullet"><a href="<?php bloginfo('url');?>antarctic#teams" class="item  f_75"><?php if($_GET['lang']=="es"){ echo "Equipos";}else{ echo "Teams";}?></a></li>
						<li class="nobullet"><a href="<?php bloginfo('url');?>antarctic#contact" class="item  f_75"><?php if($_GET['lang']=="es"){ echo "Contacto";}else{ echo "Contact";}?></a></li>		
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

		<div class="container  home-title">
			<h2>Antarctic</h2>
			<h3>Let's Play</h3>
		</div>	
	</section>

	<section class="container  allvh  p1  center  flex  flex-column  flex-wrap  jc-flex-center  news" id="news">
		<div class="flex  flex-column lg-flex-row  flex-nowrap  lg-jc-flex-stretch  lg-ai-flex-center">
			<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=1<?php if($_GET['lang']){echo "&lang=es";} ?>" class="posts  sm12  md4  p2  flex  flex-column  flex-nowrap  jc-flex-end  left" style="background: transparent url(<?php bloginfo('template_url');?>/antarctic/img/post10.jpg) no-repeat center; background-size: cover;">
				<article>
					<h4>Lorem ipsum dolor sit amet</h4>
					<p class="justify  f_75">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
				</article>
			</a>
			<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=2<?php if($_GET['lang']){echo "&lang=es";} ?>" class="posts  sm12  md4  p2  flex  flex-column  flex-nowrap  jc-flex-end  left" style="background: transparent url(<?php bloginfo('template_url');?>/antarctic/img/post2.jpg) no-repeat center; background-size: cover;">
				<article>
					<h4>Lorem ipsum dolor sit amet</h4>
					<p class="justify  f_75">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
				</article>
			</a>
			<a href="http://marisabelguevara.com/antarctic/lorem-ipsum-dolor-sit-amet/?post=3<?php if($_GET['lang']){echo "&lang=es";} ?>" class="posts  sm12  md4  p2  flex  flex-column  flex-nowrap  jc-flex-end  left" style="background: transparent url(<?php bloginfo('template_url');?>/antarctic/img/post4.jpg) no-repeat center; background-size: cover;">
				<article>
					<h4>Lorem ipsum dolor sit amet</h4>
					<p class="justify  f_75">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse beatae labore voluptate tempore dolores, eos dolore modi tenetur nobis perspiciatis.</p>
				</article>	
			</a>		
		</div>		
		<a href="<?php bloginfo('url');?>/antarctic/news<?php if($_GET['lang']=='es' ){echo '?lang=es'; } ?>" class="button  block"><?php if($_GET['lang']=="es"){ echo "Más noticias";}else{ echo "More news";}?></a>
	</section>

	<section class="allvh  teams" id="teams">
		<div class="container  p1  center">
			<input id="cod" type="radio" name="input-equipos" checked>
			<label for="cod"><img class="tab-img" src="<?php bloginfo('template_url');?>/antarctic/img/games/callofduty1.png" /></label>

			<input id="cr" type="radio" name="input-equipos">
			<label for="cr"><img class="tab-img" src="<?php bloginfo('template_url');?>/antarctic/img/games/clashroyale1.png" /></label>

			<input id="nba" type="radio" name="input-equipos">
			<label for="nba"><img class="tab-img" src="<?php bloginfo('template_url');?>/antarctic/img/games/nba1.png" /></label>

			<input id="overwatch" type="radio" name="input-equipos">
			<label for="overwatch"><img class="tab-img" src="<?php bloginfo('template_url');?>/antarctic/img/games/overwatch1.png" /></label>

			<input id="wow" type="radio" name="input-equipos">
			<label for="wow"><img class="tab-img" src="<?php bloginfo('template_url');?>/antarctic/img/games/wow1.png" /></label>

			<div class="content  flex  flex-row  flex-wrap jc-flex-start  f1_5" id="content-callofduty">
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/1.jpg');"></div>		
					</div>
					<h4>M@rk</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/2.jpg');"></div>						
					</div>
					<h4>Sam258</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/3.png');"></div>				
					</div>
					<h4>W!lding</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/4.jpg');"></div>
					</div>
					<h4>Jofrey</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/5.jpg');"></div>
					</div>
					<h4>Krizz4</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/6.png');"></div>
					</div>
					<h4>Pz58!</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/7.jpg');"></div>
					</div>
					<h4>Baratheon1</h4>
				</div>

			</div>

			<div class="content-equipos  flex  flex-row  flex-wrap jc-flex-start  f1_5" id="content-clashroyale">
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/8.jpg');"></div>		
					</div>
					<h4>Jackson12</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/9.jpg');"></div>						
					</div>
					<h4>JuniOr</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/10.jpg');"></div>				
					</div>
					<h4>Rav3n</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/11.png');"></div>
					</div>
					<h4>Johnzz</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/12.jpg');"></div>
					</div>
					<h4>Robert8</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/13.jpg');"></div>
					</div>
					<h4>Jase</h4>
				</div>
			</div>

			<div class="content-equipos  flex  flex-row  flex-wrap jc-flex-start  f1_5" id="content-nba">
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/14.jpg');"></div>
					</div>
					<h4>Tr3vOr</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/15.jpg');"></div>
					</div>
					<h4>MaTT</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/16.jpg');"></div>
					</div>
					<h4>Tigger</h4>
				</div>
			</div>

			<div class="content-equipos  flex  flex-row  flex-wrap jc-flex-start  f1_5" id="content-overwatch">
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/3.png');"></div>
					</div>
					<h4>Severus22</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/7.jpg');"></div>
					</div>
					<h4>Albus</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/5.jpg');"></div>
					</div>
					<h4>Potter</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/8.jpg');"></div>
					</div>
					<h4>Weasley</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/11.png');"></div>
					</div>
					<h4>Malfoy</h4>
				</div>
			</div>

			<div class="content-equipos  flex  flex-row  flex-wrap jc-flex-start  f1_5" id="content-wow">
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/12.jpg');"></div>
					</div>
					<h4>Draco!</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/2.jpg');"></div>
					</div>
					<h4>Lucius</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/6.png');"></div>
					</div>
					<h4>Hagrid01</h4>
				</div>
				<div class="item  ph12  md3  p_75">
					<div class="player">
						<div class="portrait" style="background-image:url('<?php bloginfo('template_url');?>/antarctic/img/team imgs/15.jpg');"></div>
					</div>
					<h4>Ron</h4>
				</div>
			</div>
			
		</div>
	</section>
	<section class="allvh  contact" id="contact">
		<div class="contact-bg" style="
		<?php echo "background-image: url('"; bloginfo( "template_url" ); echo "/antarctic/img/post3.jpg"; echo "');"; ?>"></div>
		<div class="container  flex  flex-column lg-flex-row flex-nowrap  jc-flex-space-around lg-jc-flex-center ai-flex-center  height100  contact-text  allvh">
			<article class="about  ph12  lg6  md-p2">
				<h4 class="center lg-left"><?php if($_GET['lang']=="es"){ echo "Sobre Nosotros";}else{ echo "About Us";}?></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque voluptate quia voluptatum numquam aut eveniet sunt explicabo, rem in pariatur esse alias, sed reiciendis, vero ad qui ullam enim. Repellat?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe hic dolorum, quia cum asperiores, cupiditate autem officia enim totam eius. Vel ratione dolorem pariatur ex voluptatum praesentium saepe, nemo provident.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe hic dolorum, quia cum asperiores, cupiditate autem officia enim totam eius. Vel ratione dolorem pariatur ex voluptatum praesentium saepe, nemo provident.</p>
			</article>
			<div class="contact-form  ph12  lg6  center  lg-right">
				<form class="ajax" action="<?php bloginfo('template_url');?>/contact-process.php" method="post">				
					<h4><?php if($_GET['lang']=="es"){ echo "Conáctanos";}else{ echo "Contact";}?></h4>
					<input name="name" type="text" placeholder="<?php if($_GET['lang']=="es"){ echo "Nombre";}else{ echo "Name";}?>">
					<input name="email" type="email" placeholder="Email">
					<textarea name="message" placeholder="<?php if($_GET['lang']=="es"){ echo "Mensaje";}else{ echo "Message";}?>" rows="5"></textarea>
					<input type="submit" value="<?php if($_GET['lang']=="es"){ echo "Enviar";}else{ echo "Send";}?>">
				</form>				
			</div>

		</div>
		<div class="container  relative">
			<div class="social-media">
				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/antarctic/img/facebook2.png" alt="">
				</a>

				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/antarctic/img/twitter2.png" alt="">
				</a>

				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/antarctic/img/twitch2.png" alt="">
				</a>

				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/antarctic/img/instagram2.png" alt="">
				</a>

				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/antarctic/img/youtube2.png" alt="">
				</a>
			</div>
		</div>		
	</section>
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
	<script src="<?php bloginfo('template_url');?>/antarctic/js/contact-form.js"></script>
	<script src="<?php bloginfo('template_url');?>/antarctic/js/changeColor.js"></script>
</body>
</html>