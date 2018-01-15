// Nav
(function($) {
	$(document).ready(function() {
		$('body').addClass('js');
		var $menu = $('#menu'),
		$menulink = $('.menu-link'),
		$links = $('#menu').find('a');

		$menulink.click(function() {
			$menulink.toggleClass('active');
			$menu.toggleClass('active');
			return false;
		});

		$links.click( function(){
			$menulink.toggleClass('active');
			$menu.toggleClass('active');
		});

		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
				|| location.hostname == this.hostname) {

				var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});

})(jQuery);

// Sponsors
var sponsors = document.getElementById('sponsors'),
numHijos = sponsors.children.length,
numActual = 1,
tiempo = 3000,
links = [],
images = [],
contenido = "",
nvoHijo;

function changeSponsors(){
	if(numHijos>3){
		function getImages(){
			for( var i = 0; i < numHijos; i ++ ){
				links[i] = sponsors.children[i].href;
				images[i] = sponsors.children[i].children[0].src;
			}	
		}
		getImages();

		sponsors.innerHTML="";
		contenido = "<a href='"+links[0]+"' class='animated fadeIn'><img src='"+images[0]+"'></a><a href='"+links[1]+"' class='animated fadeIn'><img src='"+images[1]+"'></a><a href='"+links[2]+"' class='animated fadeIn'><img src='"+images[2]+"'></a>";
		sponsors.innerHTML = contenido;
		numActual++;

		function timeSponsors(){
			if ( numActual < numHijos-1 ){
				sponsors.children[0].className="animated fadeOut";
				sponsors.children[1].className="animated fadeOut";
				sponsors.children[2].className="animated fadeOut";
				setTimeout(function(){
					sponsors.removeChild(sponsors.children[0]);				
					nvoHijo = document.createElement("a");
					nvoHijo.setAttribute("href", links[numActual+1] );
					nvoHijo.innerHTML = "<img src='"+images[numActual+1]+"'>";				
					nvoHijo.className="animated fadeIn";
					sponsors.children[0].className="animated fadeIn";
					sponsors.children[1].className="animated fadeIn";
					sponsors.appendChild(nvoHijo);
					numActual++;
				}, 1000);				

			}else if( numActual == numHijos-1 ){
				sponsors.children[0].className="animated fadeOut";
				sponsors.children[1].className="animated fadeOut";
				sponsors.children[2].className="animated fadeOut";
				setTimeout(function(){
					sponsors.removeChild(sponsors.children[0]);
					nvoHijo = document.createElement("a");
					nvoHijo.setAttribute("href", links[0] );
					nvoHijo.innerHTML = "<img src='"+images[0]+"'>";
					nvoHijo.className="animated fadeIn";
					sponsors.children[0].className="animated fadeIn";
					sponsors.children[1].className="animated fadeIn";
					sponsors.appendChild(nvoHijo);
					numActual=0;
				}, 1000);
				
			}
		}

		setInterval( timeSponsors, tiempo );
	}
}

window.onload = changeSponsors;