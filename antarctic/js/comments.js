var wpLang = document.getElementById("wpLang").value;
if(wpLang == "es"){
	document.getElementById("comment").placeholder="Comentario";
	document.getElementById("author").placeholder="Nombre";
	document.getElementById("email").placeholder="Correo";
	document.getElementById("url").placeholder="Página web";
}else{
	document.getElementById("comment").placeholder="Comment";
	document.getElementById("author").placeholder="Name";
	document.getElementById("email").placeholder="Email";
	document.getElementById("url").placeholder="Website";
}

document.getElementsByClassName("comment-form-author")[0].className="comment-form-author  ph12  md4  i-b";
document.getElementsByClassName("comment-form-email")[0].className="comment-form-email  ph12  md4  i-b";
document.getElementsByClassName("comment-form-url")[0].className="comment-form-url  ph12  md4  i-b"
