// JavaScript Document

function showContacto(){
	var showContacto = document.getElementById('contact');             
    showContacto.style.visibility="visible";
	document.getElementById('cerrar').style.visibility="visible";
}

function dontShowContacto(){
	var showContacto = document.getElementById('contact');             
    showContacto.style.visibility="hidden";
	document.getElementById('cerrar').style.visibility="hidden";
	document.getElementById('mensaje').style.visibility="hidden";
}