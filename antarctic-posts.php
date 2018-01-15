<?php /* Template Name: Antarctic Posts */ ?>

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

<section class="vh60  center  firstvp-news  news" style="background-image:url(<?php 
	if($_GET['post']==1){ bloginfo('template_url'); echo "/antarctic/img/post10.jpg"; 
}elseif($_GET['post']==2){ bloginfo('template_url'); echo "/antarctic/img/post2.jpg"; 
}elseif($_GET['post']==3){ bloginfo('template_url'); echo "/antarctic/img/post3.jpg"; 
}elseif($_GET['post']==4){ bloginfo('template_url'); echo "/antarctic/img/post4.jpg"; 
}elseif($_GET['post']==5){ bloginfo('template_url'); echo "/antarctic/img/post5.jpg"; 
}elseif($_GET['post']==6){ bloginfo('template_url'); echo "/antarctic/img/post6.jpg"; 
}elseif($_GET['post']==7){ bloginfo('template_url'); echo "/antarctic/img/post7.jpg"; 
}else{ bloginfo('template_url'); echo "/antarctic/img/post8.jpg"; }		
?>)">
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
</section>
<br><br>
<div class="container">
	<?php
	$date = (date('d')-3)." ".date('M, Y');
	?>

	<article class="post">
		<h2 class="post-title  f2_5  center">Lorem ipsum dolor sit amet</h2>
		<span class="post-time  f_75  center  block"><?php echo $date; ?></span>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis egestas enim, ac volutpat mauris. Nam enim nisl, viverra ut molestie eu, blandit ut urna. Vestibulum auctor nec turpis ac dapibus. Duis maximus lacinia tellus, et placerat odio eleifend id. Etiam faucibus eleifend ligula vitae placerat. Morbi sit amet luctus elit. Suspendisse potenti. Cras at pulvinar turpis. Etiam at mauris tempus urna maximus dapibus tristique quis arcu. Proin sit amet lacinia ipsum. Cras vitae elit interdum, gravida magna id, pharetra nisl. </p>
		<p>Etiam in arcu ac risus pulvinar dictum. Duis ac est sit amet nibh porttitor ultricies nec vel massa. Mauris sagittis purus ac commodo tempus. Aliquam in nulla fringilla, facilisis leo eget, lacinia metus. Mauris tincidunt eros vel elit faucibus, vitae malesuada tortor tincidunt. Mauris varius augue dui, at volutpat massa fermentum at. Praesent luctus, eros vel laoreet imperdiet, felis ipsum iaculis magna, quis ornare erat urna nec turpis. Praesent cursus faucibus turpis non venenatis. Aliquam feugiat non risus ut blandit. Nulla tempus id arcu nec rhoncus. Nam sagittis malesuada ex, vitae posuere nisl laoreet porta. Praesent mattis vulputate nisl, ut tincidunt enim ultrices non. Vivamus sed laoreet magna. </p>
		<p>Donec hendrerit sed dolor at hendrerit. Donec libero augue, aliquam in volutpat sed, suscipit condimentum diam. Donec commodo mauris id magna scelerisque, a condimentum eros vehicula. Vestibulum finibus ligula finibus, volutpat massa ac, vestibulum magna. Suspendisse sem dolor, tempor et magna quis, aliquam sagittis ex. Suspendisse nisl ipsum, posuere ut accumsan lacinia, ultricies id lectus. Etiam lacinia sagittis magna dictum accumsan. Proin faucibus orci arcu, non finibus orci malesuada at. Ut eu lacinia erat, sit amet mollis ex. Sed gravida gravida tortor sit amet ornare. Integer elementum neque massa. Nulla aliquet libero vel orci ultrices semper. Quisque viverra tincidunt neque, et rhoncus enim dapibus at. Sed urna augue, mollis non dui vel, tincidunt tincidunt orci. In id varius odio, eu bibendum mauris. Fusce auctor pharetra aliquam. </p>
		<p>Nunc ut libero diam. Ut vehicula porttitor pellentesque. Aenean vehicula non tortor in suscipit. Sed vitae condimentum tortor. Nulla id diam dui. Ut placerat sollicitudin commodo. Maecenas eu enim ac enim posuere elementum. Sed augue ex, congue at dui a, rhoncus molestie lectus. </p>
	</article>
</div>
<div class="comments-gray">
	<div class="container">		

		<!-- You can start editing here. -->

		<h3 id="comments"><?php echo $_GET['lang']=="es"? "4 respuestas a ": "4 responses to "; the_title();?></h3>

		<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>

		<ol class="commentlist">
			<li class="comment byuser comment-author-marisabel bypostauthor even thread-even depth-1" id="comment-1">
				<div id="div-comment-1" class="comment-body">
					<div class="comment-author vcard">
						<img alt="" src="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=32&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=64&amp;d=mm&amp;r=g 2x" class="avatar avatar-32 photo" width="32" height="32">			<cite class="fn">Marisabel</cite> <span class="dijo"><?php echo $_GET['lang']=="es"? "dijo:": "said:";?></span>		</div>

						<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/#comment-1">
							<?php echo date('d M, Y');?></a>		</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas ante eu elit finibus consectetur. Sed nulla augue, vulputate nec arcu id, efficitur vehicula nunc. Cras in lobortis nunc. Proin tempor ex sit amet enim fringilla elementum. Morbi pharetra et lacus eget egestas.</p>

							<div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/?replytocom=1#respond" onclick="return addComment.moveForm( &quot;div-comment-1&quot;, &quot;1&quot;, &quot;respond&quot;, &quot;197&quot; )" aria-label="Responder a marisabel"><?php echo $_GET['lang']=="es"? "Responder": "Reply";?></a></div>
						</div>
					</li><!-- #comment-## -->
					<li class="comment byuser comment-author-marisabel bypostauthor odd alt thread-odd thread-alt depth-1" id="comment-2">
						<div id="div-comment-2" class="comment-body">
							<div class="comment-author vcard">
								<img alt="" src="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=32&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=64&amp;d=mm&amp;r=g 2x" class="avatar avatar-32 photo" width="32" height="32">			<cite class="fn">Michael</cite> <span class="dijo"><?php echo $_GET['lang']=="es"? "dijo:": "said:";?></span>		</div>

								<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/#comment-2">
									<?php echo date('d M, Y');?></a>		</div>

									<p>Nunc nunc purus, lacinia sit amet sapien et, euismod ornare lectus. In vel elit ut sapien placerat vehicula a id mi. Fusce fringilla, libero eget luctus tempor, neque sem rhoncus eros, non vestibulum risus orci ut augue. Fusce et suscipit nibh. Nullam ut elementum eros, vel tempor nulla. Curabitur hendrerit, urna a congue pellentesque, arcu nibh laoreet mauris, ut ultrices lorem ante quis mi. Curabitur cursus venenatis sollicitudin. Vestibulum rhoncus sollicitudin tortor eu mollis.</p>

									<div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/?replytocom=2#respond" onclick="return addComment.moveForm( &quot;div-comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;197&quot; )" aria-label="Responder a marisabel"><?php echo $_GET['lang']=="es"? "Responder": "Reply";?></a></div>
								</div>
							</li><!-- #comment-## -->
							<li class="comment byuser comment-author-marisabel bypostauthor even thread-even depth-1" id="comment-3">
								<div id="div-comment-3" class="comment-body">
									<div class="comment-author vcard">
										<img alt="" src="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=32&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=64&amp;d=mm&amp;r=g 2x" class="avatar avatar-32 photo" width="32" height="32">			<cite class="fn">Jonathan</cite> <span class="dijo"><?php echo $_GET['lang']=="es"? "dijo:": "said:";?></span>		</div>

										<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/#comment-3"><?php echo (date('d')-1)." "; echo date('M, Y');?></a>		</div>

										<p>Fusce et suscipit nibh. Nullam ut elementum eros, vel tempor nulla. Curabitur hendrerit, urna a congue pellentesque, arcu nibh laoreet mauris, ut ultrices lorem ante quis mi. Curabitur cursus venenatis sollicitudin. Vestibulum rhoncus sollicitudin tortor eu mollis.</p>

										<div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/?replytocom=3#respond" onclick="return addComment.moveForm( &quot;div-comment-3&quot;, &quot;3&quot;, &quot;respond&quot;, &quot;197&quot; )" aria-label="Responder a marisabel"><?php echo $_GET['lang']=="es"? "Responder": "Reply";?></a></div>
									</div>
								</li><!-- #comment-## -->
								<li class="comment byuser comment-author-marisabel bypostauthor odd alt thread-odd thread-alt depth-1" id="comment-4">
									<div id="div-comment-4" class="comment-body">
										<div class="comment-author vcard">
											<img alt="" src="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=32&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/e4ba34574a801931a8fc2913a12bf6f0?s=64&amp;d=mm&amp;r=g 2x" class="avatar avatar-32 photo" width="32" height="32">			<cite class="fn">Melanie</cite> <span class="dijo"><?php echo $_GET['lang']=="es"? "dijo:": "said:";?></span>		</div>

											<div class="comment-meta commentmetadata"><a href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/#comment-4">
												<?php echo (date('d')-3)." "; echo date('M, Y');?></a>		</div>

												<p>Maecenas non lacinia nisi, eu blandit massa. Etiam non condimentum turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sed lorem suscipit massa ultrices vulputate.</p>

												<div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://localhost/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/?replytocom=4#respond" onclick="return addComment.moveForm( &quot;div-comment-4&quot;, &quot;4&quot;, &quot;respond&quot;, &quot;197&quot; )" aria-label="Responder a marisabel"><?php echo $_GET['lang']=="es"? "Responder": "Reply";?></a></div>
											</div>
										</li><!-- #comment-## -->
									</ol>

									<div class="navigation">
										<div class="alignleft"></div>
										<div class="alignright"></div>
									</div>

									<div id="respond" class="comment-respond">
										<h3 id="reply-title" class="comment-reply-title"><?php echo $_GET['lang']=="es"? "Deja un comentario ": "Leave a reply ";?><small><a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress2/2017/10/02/morbi-mollis-lacus-ut-volutpat-posuere/#respond" style="display:none;">Cancelar respuesta</a></small></h3>			<form action="http://localhost/wordpress2/wp-comments-post.php" method="post" id="commentform" class="comment-form">
											<p class="comment-notes"><span id="email-notes"><?php echo $_GET['lang']=="es"? "Tu dirección de correo electrónico no será publicada. Los campos necesarios están marcados *": "Your email address will not be published. Required fields are marked *";?></p><p class="comment-form-comment"><label for="comment">Comentario</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="<?php echo $_GET['lang']=="es"? "Comentario": "Comment";?>"></textarea></p><p class="comment-form-author  ph12  md4  i-b"><label for="author">Nombre <span class="required">*</span></label> <input id="author" name="author" value="" size="30" maxlength="245" aria-required="true" required="required" placeholder="<?php echo $_GET['lang']=="es"? "Nombre": "Name";?>" type="text"></p>
											<p class="comment-form-email  ph12  md4  i-b"><label for="email">Correo electrónico <span class="required">*</span></label> <input id="email" name="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required" placeholder="<?php echo $_GET['lang']=="es"? "Correo": "Email";?>" type="text"></p>
											<p class="comment-form-url  ph12  md4  i-b"><label for="url">Web</label> <input id="url" name="url" value="" size="30" maxlength="200" placeholder="<?php echo $_GET['lang']=="es"? "Página Web": "Webpage";?>" type="text"></p>
											<p class="form-submit"><input name="submit" id="submit" class="submit" value="<?php echo $_GET['lang']=="es"? "Publicar comentario ": "Post comment";?>" type="submit"> <input name="comment_post_ID" value="197" id="comment_post_ID" type="hidden">
												<input name="comment_parent" id="comment_parent" value="0" type="hidden">
											</p>			</form>
										</div><!-- #respond -->

										<input id="wpLang" value="es" type="hidden">

									</div>
								</div>


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