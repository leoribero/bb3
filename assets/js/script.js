// desde aquí BB3 navegación
// Selection of HTML objects
const burger = document.querySelector('.burger i');
const nav = document.querySelector('.nav');

// Defining a function 
// en .burger i, intercambia el icono con el de inmediatamente abajo fa-times
// en .nav, añade .nav-active
function toggleNav() {
	burger.classList.toggle('fa-bars');
	burger.classList.toggle('fa-times');
	nav.classList.toggle('nav-active');
}

// Calling the function after click event occurs
burger.addEventListener('click', function() {
	toggleNav();
});
// hasta aquí BB3 navegación

