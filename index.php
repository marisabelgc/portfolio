<?php get_header(); ?>
<section class="big-logo  center  bg-light">
	<div class="container">
		<img class="logo" src="<?php echo bloginfo('template_url'); ?>/img/logo.png" class="op6">	
		<?php 
		if( $_GET["lang"]=="es"){
			?>			
			<h1>marisabel guevara</h1>
			<h2>DISEÑADORA UI Y DESARROLLADORA WEB FULL-STACK</h2>	
			<?php
		}else{
			?>
			<h1>marisabel guevara</h1>
			<h2>UI DESIGNER AND FULL-STACK WEB DEVELOPER</h2>

			<?php
		}
		?>
		<a href="http://marisabelguevara.com/wp-content/uploads/2017/11/Marisabel-Guevara-CV.pdf">
			<img src="<?php bloginfo('template_url');?>/img/files.png" class="pdf">
		</a>
	</div>

</section>		

<section class="slider  relative" id="slider">
	<div class="container  relative" id="dispositivo">
		<script>
			if(600<=window.innerWidth||600<=document.documentElement.clientWidth){
				document.getElementById('dispositivo').innerHTML='<img id="deviceImg" name="deviceImg" class="device-img" src="<?php echo bloginfo('template_url'); ?>/img/mac.png">';
			}else{
				document.getElementById('dispositivo').innerHTML='<img id="deviceImg" name="deviceImg" class="device-img" src="<?php echo bloginfo('template_url'); ?>/img/ipad.png">';
			}
		</script>
		<div class="sliderImg  absolute" id="sliderImg1"></div>
		<div class="sliderImg  absolute" id="sliderImg2"></div>
		<div class="sliderImg  absolute" id="sliderImg3"></div>				
	</div>			
</section>

<section class="bg-coral  m-vp1  flex  flex-column  flex-nowrap  jc-flex-center  bio  m-vp1" id="bio">
	<div class="container">
		<?php
		if( $_GET["lang"]=="es"){
			?>
			<h3>Sobre mi</h3>
			<p>
				<span class="uppercase">Nombre</span> Marisabel Guevara Carbone<br>
				<span class="uppercase">Edad</span> 23 años<br>
				<span class="uppercase">Fecha de nacimiento</span> 30 de abril de 1994<br>
				<span class="uppercase">Ubicación</span> Caracas, Venezuela<br>
				<span class="uppercase">Idiomas</span> Español (nativo), Inglés (avanzado)<br>
				<span class="uppercase">Email</span> <a href="mailto:marisabelgc18@gmail.com">marisabelgc18@gmail.com</a><br>
				<span class="uppercase">Github</span> <a href="https://github.com/marisabelgc">marisabelgc</a><br>
			</p>
			<?php
		}else{
			?>
			<h3>About</h3>
			<p>
				<span class="uppercase">Name</span> Marisabel Guevara Carbone<br>
				<span class="uppercase">Age</span> 23 years old<br>
				<span class="uppercase">Birthday</span> April 30th, 1994<br>
				<span class="uppercase">Location</span> Caracas, Venezuela<br>
				<span class="uppercase">Languages</span> Spanish (native), English (advanced)<br>
				<span class="uppercase">Email</span> <a href="mailto:marisabelgc18@gmail.com">marisabelgc18@gmail.com</a><br>
				<span class="uppercase">Github</span> <a href="https://github.com/marisabelgc">marisabelgc</a><br>
			</p>

			<?php
		}
		?>				
	</div>		
</section>

<section class="bg-light  education" id="education">
	<div class="container">
		<h4><?php echo $_GET['lang']=="es"? "Estudios" : "Education";?></h4>
		<div class="flex flex-row flex-wrap jc-flex-stretch">
			<div class="years  f_75  ph3  md2">2012 - 2014</div>
			<div class="ph9  md10">
				<?php echo $_GET['lang']=="es"? "Comunicación Visual " : "Visual Comunication ";?>
				<a href="https://www.cdd.com.ve/los-estudios/#comunicacion-visual"><span class="uppercase  f_75">(Centro de Diseño Digital)</span></a>
			</div>
			<div class="years  f_75  ph3  md2">2015</div>
			<div class="ph9  md10">
				<?php echo $_GET['lang']=="es"? "Curso de Marketing Digital " : "Digital Marketing Course ";?>
				<a href="http://www.shawacademy.com/es/marketing/course-details.html"><span class="uppercase  f_75">(Shaw Academy)</span></a>
			</div>
			<div class="years  f_75  ph3  md2">2016</div>
			<div class="ph9  md10"><?php echo $_GET['lang']=="es"? "Diplomado en Programación Web ": "Diploma in Web Programming "; ?> 
				<a href="https://www.uneweb.edu.ve/diplomado-de-programacion/"><span class="uppercase  f_75">(Uneweb)</span></a>
			</div>
			<div class="years  f_75  ph3  md2">2016</div>
			<div class="ph9  md10"><?php echo $_GET['lang']=="es"? "Especialización en Java ": "Java Specialization "; ?><a href="https://www.uneweb.edu.ve/especializacion-java-standard-edition-java-se/"><span class="uppercase  f_75">(Uneweb)</span></a>
			</div>
		</div>			
	</div>		
</section>

<section class="container  works" id="works">
	<h4><?php echo $_GET['lang']=="es"? "Trabajos" : "Work Experience";?></h4>
	<div class="trabajos  flex flex-row flex-wrap jc-flex-stretch">

		<div class="years  f_75  ph3  md2  uppercase">2016 - <?php echo $_GET['lang']=="es"? "Presente" : "Present";?></div>
		<div class="ph9  md10">
			<?php echo $_GET['lang']=="es"? "Diseñadora y Desarrolladora Web ":"Designer and full-stack web developer ";?>
			<a href="http://www.marisabelguevara.com"><span class="uppercase  f_75">(MarisabelGuevara.com)</span></a>
		</div>

		<div class="years  f_75  ph3  md2  uppercase">2017</div>
		<div class="ph9  md10">
			<?php echo $_GET['lang']=="es"? "Diseñadora y Desarrolladora Web ":"Designer and full-stack web developer ";?>
			<span class="uppercase  f_75">(OddityLab)</span>
		</div>

		<div class="years  f_75  ph3  md2">2014 - 2016</div>
		<div class="ph9  md10">
			<?php echo $_GET['lang']=="es"? "Adaptación de webs a responsive design ": "Adapting webs into responsive design "; ?>
			<span class="uppercase  f_75">(Freelance)</span>
		</div>

		<div class="years  f_75  ph3  md2">2014</div>
		<div class="ph9  md10">
			<?php echo $_GET['lang']=="es"? "Ensamblaje y contabilidad de empaques de regalo ": "Gift packages assembly and accounting "; ?>
			<span class="uppercase  f_75">(Coingra)</span></div>
		</div>
	</section>

	<section class="bg-light  skills" id="skills">
		<div class="container">
			<div class="flex  flex-column  md-flex-row flex-nowrap">
				<div class="ph12 md6">
					<h4><?php echo $_GET['lang']=="es"? "Conocimientos" : "Skills";?></h4>
					<p>HTML5, CSS3, Sass, Git</p>
					<p>Javascript, jQuery</p>
					<p>PHP, MySQL, PostgreSQL, PHPMyAdmin</p>
					<p>Wordpress</p>
					<p>Bootstrap, Materialize, Responsimple</p>
					<p>Responsive Design, WPO, UI/UX</p>
					<p>Wireframes, Mockups</p>
					<p>Java, qBasic, Visual Basic</p>
				</div>
				<div class="ph12 md6">
					<h4 class="softwares"><?php echo $_GET['lang']=="es"? "Programas" : "Softwares";?></h4>
					<p>Adobe Photoshop</p>
					<p>Adobe Illustrator</p>
					<p>Adobe Experience Design</p>
					<p>Adobe InDesign</p>
					<p>Adobe After Effects</p>
					<p>Adobe Dreamweaver</p>
					<p>Sublime text 3, Netbeans</p>
					<p>Microsoft Office Suite</p>
				</div>
			</div>
		</div>
	</section>

	<section class="container  projects" id="projects">
		<h3 class="center"><?php echo $_GET['lang']=="es"? "Proyectos" : "Projects";?></h3>
		<div class="each-work flex  flex-column  md-flex-row  flex-wrap">
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/unik.jpg');"></div>
					<p class="center  f1_25"><a href="http://unik.gg/">Unik</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Desarrollo Web en Wordpress" : "Wordpress Web Development";?></p>
				</div>				
			</div>
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/playmakers.jpg');"></div>
					<p class="center  f1_25"><a href="http://playmakersgg.com/">PlayMakers</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Diseño y Desarrollo web en Wordpress" : "Design and Wordpress Web Development";?></p>
				</div>
			</div>
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/atherlace.png');"></div>
					<p class="center  f1_25"><a href="http://atherlace.com/">Atherlace</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Desarrollo Web en Wordpress" : "Wordpress Web Development";?></p>
				</div>
			</div>
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/marisabel web.jpg');"></div>
					<p class="center  f1_25"><a href="http://marisabelguevara.com/">MarisabelGuevara.com</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Diseño y Desarrollo web en Wordpress" : "Design and Wordpress Web Development";?></p>
				</div>
			</div>
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/bookmarks and tours.jpg');"></div>
					<p class="center  f1_25"><a>Bookmarks and Tours</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Diseño y Desarrollo Web" : "Design and Web Development";?></p>
				</div>
			</div>
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/flamingo.jpg');"></div>
					<p class="center  f1_25"><a>Flamingo</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Illustración" : "Illustration";?></p>
				</div>
			</div>
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/mg logo.png');"></div>
					<p class="center  f1_25"><a>Marisabel Guevara</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Diseño de logo" : "Logo Design";?></p>
				</div>
			</div>
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/dingox.png');"></div>
					<p class="center  f1_25"><a>Dingox</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Diseño de logo" : "Logo Design";?></p>
				</div>
			</div>			
			<div class="awork  ph12  md4">
				<div class="bg">
					<div class="picture" style="background-image:url('<?php bloginfo('template_url');?>/img/chen.png');"></div>
					<p class="center  f1_25"><a>Chen</a></p>
					<p class="center"><?php echo $_GET['lang']=="es"? "Diseño de logo" : "Logo Design";?></p>
				</div>
			</div>			
		</div>

	</section>
	<section class="wordpress-theme" id="wordpress">		
		<div class="container">
			<div class="bg  theme-img  <cen></cen>ter">
				<h3 class="center"><?php echo $_GET['lang']=="es"? "Themes de Wordpress" : "Wordpress Theme";?></h3>
				<img src="<?php bloginfo('template_url'); ?>/antarctic/img/screenshot.png">
				<p class="center  f1_25">Antarctic: <?php echo $_GET['lang']=="es"? "theme para equipos de eSports" : "an eSport Theme";?></p>
				<p class="center">
					<?php if($_GET['lang']=="es"){
						echo '<a href="http://marisabelguevara.com/antarctic-mas-informacion/" class="f_75 uppercase">Más información</a>';
					}else{
						echo '<a href="http://marisabelguevara.com/antarctic-more-info/" class="f_75 uppercase">More Info</a>';
					}?>
					<a href="<?php home_url();?>/antarctic" class="f_75  uppercase"><?php echo $_GET['lang']=="es"? "Vista Previa" : "Preview";?></a>
				</p>
			</div>			
		</div>
	</section>  

	<section class="contact  span-light  flex  flex-column  flex-nowrap  jc-flex-center m-vp1" id="contact">
		<div class="container  contact-flex">
			<div class="info">				
				<?php
				if($_GET["lang"]=="es"){
					?>
					<h3>Contacto</h3>
					<p class="md-f_75">•	¿Quieres una web a tu medida?<br>
						•	¿Tu página tienes errores?<br>
						•	¿Deseas editar el aspecto a tu sitio o agregarle nuevas funcionabilidades?<br>
						•	¿Tienes el diseño y necesitas un programador que lo lleve a código?<br>
						¡Escríbeme! Puedes llenar el formulario, o si prefieres enviarme archivos, adjúntalos por <a href="mailto:marisabelgc18@gmail.com">email</a>.
					</p>
					<?php
				}else{
					?>
					<h3>Contact</h3>
					<p class="md-f_75">• Would you like a custom web page?<br>
						• Are there any errors or anything that need to be fixed in your web page?<br>
						• Do you wish to change the appearance of your site or add new functionality to it?<br>
						• Do you have a design and need a programmer to implement it and make it to work the way you want?<br>
						Contact me! … You can fill out the form, or if you prefer to send me any files, attach them to an <a href="mailto:marisabelgc18@gmail.com">email</a>.
					</p>
					<?php
				}
				?>			
			</div>

			<?php

			// Verifica los campos y envia el email
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				if( isset($_POST['client']) && isset($_POST['email']) && isset($_POST['budget']) && isset($_POST['details'])){

					$client = $_POST['client'];					
					$email = $_POST['email'];
					$budget = $_POST['budget'];
					$moneda = $_POST['moneda'];
					$details = $_POST['details'];

					if (empty($client) || empty($email) || empty($budget) || empty($details)){
						if($_GET['lang']){
							printf('<p class="send  center">Debes rellenar todos los campos</p>');
						}else{
							printf('<p class="send  center">You must fill in all the fields</p>');
						}
					}else{
						if( isset( $_POST['type']) ){
							if( count($_POST['type']) == 2 ){
								$proj_type = "Diseño y programación";
							}elseif( count($_POST['type']) == 1){
								if( $_POST['type'][0] == "d" ){
									$proj_type = "Diseño";
								}else{
									$proj_type = "Programación";
								}
							}
						}else{
							$proj_type = "No especificado";
						}

						$destino = utf8_encode("marisabelgc18@gmail.com");
						$titulo = "Trabajo ".$moneda." ".$budget;
						$titulo = utf8_decode( $titulo );
						$titulo = utf8_encode( $titulo );
						$contenido = "Nombre: ".$_POST['client']."\nEmail: ".$_POST['email']."\nPresupuesto: ".$_POST['moneda']." ".$_POST['budget']."\nTipo de proyecto: ".$proj_type."\nDescripcion: ".$_POST['details'];
						$contenido = utf8_decode( $contenido );
						$contenido = utf8_encode( $contenido );
						mail( $destino, $titulo, $contenido );

						if($_GET['lang']){
							printf('<div class="send">¡Mensaje enviado! Le respondé lo más pronto posible.</div>');
						}else{
							printf('<div class="send">I will reply to your e-mail as soon as I can.</div>');
						}

					}
				}
			}else{
				?>

				<form action="<?php get_the_permalink();?>#contact" method="post" class="form-contact">
					<div class="m-6">
						<input type="hidden" id="lang" value="<?php if($_GET["lang"]){ echo $_GET["lang"];}?>">
						<input type="text" id="client" name="client" placeholder="<?php echo $_GET['lang']=="es"? "Nombre" :"Name";	?>" class="d-b s12">
						<input type="text" id="email" name="email" placeholder="Email" class="d-b s12" >
						<div class="d-b s12 clear budget-border">
							<input type="text" id="budget" name="budget" placeholder="<?php echo $_GET['lang']=="es"? "Presupuesto" : "Budget"; ?>" class="budget  absolute">
							<select name="moneda" id="moneda">
								<option value="$">$</option>
								<option value="€">€</option>
								<option value="£">£</option>
							</select>						
						</div>					
						<label class="control  block  control--checkbox"><?php echo $_GET['lang']=="es"? "Diseño Web" : "Web Design"; ?>
						<input type="checkbox" name="type" id="type" value="Diseño">
						<div class="control__indicator"></div>
					</label>
					<label class="control  block  control--checkbox"><?php echo $_GET['lang']=="es"? "Programación Web": "Web Development";	?>
					<input type="checkbox" name="type" id="type" value="Programacion">
					<div class="control__indicator"></div>
				</label>						
			</div>

			<div class="m-6">
				<textarea name="details" id="details" placeholder="<?php echo $_GET['lang']=="es"? 
				"Detalles del proyecto" :"Project Details";?>" class="d-b s12"></textarea>
			</div>		

			<input type="submit" value="<?php echo $_GET['lang']=="es"? "Enviar" : "Send";?>" class="d-b s12" id="sendBtn">
		</form>	

		<?php
	}
	?>	

</div>		

</section>
<?php wp_footer(); ?>
<script>
	if(600<=window.innerWidth||600<=document.documentElement.clientWidth){
		var deviceWidth=document.getElementById("dispositivo").clientWidth;
		var deviceHeight=deviceWidth*562/975+"px";
		document.getElementById("sliderImg1").style.height=deviceHeight;
		document.getElementById("sliderImg2").style.height=deviceHeight;
		document.getElementById("sliderImg3").style.height=deviceHeight;
	}else{
		var deviceWidth=document.getElementById("deviceImg").clientWidth+"px";
		var deviceHeight=document.getElementById("deviceImg").clientHeight-1+"px";
		document.getElementById("sliderImg1").style.width=deviceWidth;		
		document.getElementById("sliderImg2").style.width=deviceWidth;
		document.getElementById("sliderImg3").style.width=deviceWidth;
		document.getElementById("sliderImg1").style.height=deviceHeight;
		document.getElementById("sliderImg2").style.height=deviceHeight;
		document.getElementById("sliderImg3").style.height=deviceHeight;
	}

	function create_custom_dropdowns(){$("select").each(function(a,b){if(!$(this).next().hasClass("dropdown")){$(this).after('<div class="dropdown '+($(this).attr("class")||"")+'" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');var d=$(this).next(),e=$(b).find("option"),c=$(this).find("option:selected");d.find(".current").html(c.data("display-text")||c.text());e.each(function(a,b){var c=$(b).data("display-text")||"";d.find("ul").append('<li class="option '+($(b).is(":selected")?
		"selected":"")+'" data-value="'+$(b).val()+'" data-display-text="'+c+'">'+$(b).text()+"</li>")})}})}$(document).on("click",".dropdown",function(a){$(".dropdown").not($(this)).removeClass("open");$(this).toggleClass("open");$(this).hasClass("open")?($(this).find(".option").attr("tabindex",0),$(this).find(".selected").focus()):($(this).find(".option").removeAttr("tabindex"),$(this).focus())});
	$(document).on("click",function(a){0===$(a.target).closest(".dropdown").length&&($(".dropdown").removeClass("open"),$(".dropdown .option").removeAttr("tabindex"));a.stopPropagation()});$(document).on("click",".dropdown .option",function(a){$(this).closest(".list").find(".selected").removeClass("selected");$(this).addClass("selected");a=$(this).data("display-text")||$(this).text();$(this).closest(".dropdown").find(".current").text(a);$(this).closest(".dropdown").prev("select").val($(this).data("value")).trigger("change")});
	$(document).on("keydown",".dropdown",function(a){var b=$($(this).find(".list .option:focus")[0]||$(this).find(".list .option.selected")[0]);if(32==a.keyCode||13==a.keyCode)return $(this).hasClass("open")?b.trigger("click"):$(this).trigger("click"),!1;if(40==a.keyCode)return $(this).hasClass("open")?b.next().focus():$(this).trigger("click"),!1;if(38==a.keyCode)return $(this).hasClass("open")?(b=$($(this).find(".list .option:focus")[0]||$(this).find(".list .option.selected")[0]),b.prev().focus()):$(this).trigger("click"),
		!1;if(27==a.keyCode)return $(this).hasClass("open")&&$(this).trigger("click"),!1});$(document).ready(function(){create_custom_dropdowns()});
	window.jQuery||alert("The jQuery library must be included before the smoothscroll.js file.  The plugin will not work propery.");
(function(d){function e(d){return"object"==typeof d?d:{top:d,left:d}}var l=d.scrollTo=function(a,b,c){d(window).scrollTo(a,b,c)};l.defaults={axis:"xy",duration:1.3<=parseFloat(d.fn.jquery)?0:1,limit:!0};l.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){if(this.nodeName&&-1==d.inArray(this.nodeName.toLowerCase(),["iframe","#document","html","body"]))return this;var a=(this.contentWindow||this).document||this.ownerDocument||this;return/webkit/i.test(navigator.userAgent)||
"BackCompat"==a.compatMode?a.body:a.documentElement})};d.fn.scrollTo=function(a,b,c){"object"==typeof b&&(c=b,b=0);"function"==typeof c&&(c={onAfter:c});"max"==a&&(a=9E9);c=d.extend({},l.defaults,c);b=b||c.duration;c.queue=c.queue&&1<c.axis.length;c.queue&&(b/=2);c.offset=e(c.offset);c.over=e(c.over);return this._scrollable().each(function(){function h(d){n.animate(f,b,c.easing,d&&function(){d.call(this,a,c)})}if(null!=a){var m=this,n=d(m),g=a,f={},t=n.is("html,body");switch(typeof g){case "number":case "string":if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(g)){g=
e(g);break}g=d(g,this);if(!g.length)return;case "object":if(g.is||g.style)var p=(g=d(g)).offset()}d.each(c.axis.split(""),function(b,d){var a="x"==d?"Left":"Top",e=a.toLowerCase(),k="scroll"+a,q=m[k],r=l.max(m,d);p?(f[k]=p[e]+(t?0:q-n.offset()[e]),c.margin&&(f[k]-=parseInt(g.css("margin"+a))||0,f[k]-=parseInt(g.css("border"+a+"Width"))||0),f[k]+=c.offset[e]||0,c.over[e]&&(f[k]+=g["x"==d?"width":"height"]()*c.over[e])):(a=g[e],f[k]=a.slice&&"%"==a.slice(-1)?parseFloat(a)/100*r:a);c.limit&&/^\d+$/.test(f[k])&&
(f[k]=0>=f[k]?0:Math.min(f[k],r));!b&&c.queue&&(q!=f[k]&&h(c.onAfterFirst),delete f[k])});h(c.onAfter)}}).end()};l.max=function(a,b){var c="x"==b?"Width":"Height",h="scroll"+c;if(!d(a).is("html,body"))return a[h]-d(a)[c.toLowerCase()]();c="client"+c;var m=a.ownerDocument.documentElement,e=a.ownerDocument.body;return Math.max(m[h],e[h])-Math.min(m[c],e[c])}})(jQuery);
(function(d){function e(b,c,a){var e=c.hash.slice(1),h=document.getElementById(e)||document.getElementsByName(e)[0];if(h){b&&b.preventDefault();var g=d(a.target);if(!(a.lock&&g.is(":animated")||a.onBefore&&!1===a.onBefore(b,h,g))){a.stop&&g._scrollable().stop(!0);if(a.hash){b=h.id==e?"id":"name";var f=d("<a> </a>").attr(b,e).css({position:"absolute",top:d(window).scrollTop(),left:d(window).scrollLeft()});h[b]="";d("body").prepend(f);location=c.hash;f.remove();h[b]=e}g.scrollTo(h,a).trigger("notify.serialScroll",
[h])}}}var l=location.href.replace(/#.*/,""),a=d.localScroll=function(b){d("body").localScroll(b)};a.defaults={duration:1E3,axis:"y",event:"click",stop:!0,target:window,reset:!0};a.hash=function(b){if(location.hash){b=d.extend({},a.defaults,b);b.hash=!1;if(b.reset){var c=b.duration;delete b.duration;d(b.target).scrollTo(0,b);b.duration=c}e(0,location,b)}};d.fn.localScroll=function(b){function c(){return!!this.href&&!!this.hash&&this.href.replace(this.hash,"")==l&&(!b.filter||d(this).is(b.filter))}
b=d.extend({},a.defaults,b);return b.lazy?this.bind(b.event,function(a){var h=d([a.target,a.target.parentNode]).filter(c)[0];h&&e(a,h,b)}):this.find("a,area").filter(c).bind(b.event,function(a){e(a,this,b)}).end().end()}})(jQuery);jQuery(function(d){d.localScroll({filter:".smoothScroll"})});

	</script>
</body>
</html>