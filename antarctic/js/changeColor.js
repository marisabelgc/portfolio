var blue = document.getElementById('colorBlue');
var red = document.getElementById('colorRed');
var purple = document.getElementById('colorPurple');
var green = document.getElementById('colorGreen');
var turquoise = document.getElementById('colorTurquoise');
var black = document.getElementById('colorBlack');

blue.addEventListener('click', changeBlue );
red.addEventListener('click', changeRed );
green.addEventListener('click', changeGreen );
purple.addEventListener('click', changePurple );
turquoise.addEventListener('click', changeTurquoise );
black.addEventListener('click', changeBlack );

function changeBlue(){
	document.body.className="js animated fadeOut";
	setTimeout(function(){
		document.head.children[7].href="http://localhost/wordpress/wp-content/themes/portafolio/antarctic/css/style-blue.css";	
		document.body.className="js animated fadeIn";		
	}, 1000);
}

function changeRed(){
	document.body.className="js animated fadeOut";
	setTimeout(function(){
		document.head.children[7].href="http://localhost/wordpress/wp-content/themes/portafolio/antarctic/css/style-red.css";	
		document.body.className="js animated fadeIn";		
	}, 1000);
}

function changeGreen(){
	document.body.className="js animated fadeOut";
	setTimeout(function(){
		document.head.children[7].href="http://localhost/wordpress/wp-content/themes/portafolio/antarctic/css/style-green.css";	
		document.body.className="js animated fadeIn";		
	}, 1000);
}

function changePurple(){
	document.body.className="js animated fadeOut";
	setTimeout(function(){
		document.head.children[7].href="http://localhost/wordpress/wp-content/themes/portafolio/antarctic/css/style-purple.css";	
		document.body.className="js animated fadeIn";		
	}, 1000);
}

function changeTurquoise(){
	document.body.className="js animated fadeOut";
	setTimeout(function(){
		document.head.children[7].href="http://localhost/wordpress/wp-content/themes/portafolio/antarctic/css/style-turquoise.css";	
		document.body.className="js animated fadeIn";		
	}, 1000);
}

function changeBlack(){
	document.body.className="js animated fadeOut";
	setTimeout(function(){
		document.head.children[7].href="http://localhost/wordpress/wp-content/themes/portafolio/antarctic/css/style-black.css";	
		document.body.className="js animated fadeIn";		
	}, 1000);
}

