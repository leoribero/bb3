let form = document.getElementById("form");
let nombreInput = document.getElementById("nombre");
let apellidosInput = document.getElementById("apellidos");
let correoeInput = document.getElementById("correoe");
let telefonoInput = document.getElementById("telefono");
let destinationInput = document.getElementById("destination");
let checkinDate = document.getElementById("check-in");
let checkoutDate = document.getElementById("check-out");
let travelRadios = document.querySelectorAll('input[name="travel"]');
let searchForRadios = document.querySelectorAll('input[name="search-for"]');

let formGroup = document.getElementsByClassName('form-group');

// console.log(form)
// console.log(destinationInput)
// console.log(checkinDate)
// console.log(checkoutDate)
// console.log(travelRadios)
// console.log(searchForRadios)
console.log(formGroup)

$(function () {
	$("#check-in").datepicker({
		minDate: 0,
		maxDate: "+1M +10D",
	});

	// $("#check-out").datepicker({
	//     minDate: 1,
	//     maxDate: "+1Y"
	// });
});

form.addEventListener("submit", validateForm);

function validateForm(e) {
	e.preventDefault();

	// destinationInputValue = destinationInput.value;


	if (nombreInput.value === "" && apellidosInput.value === "" && correoeInput.value === "" && telefonoInput.value === ""){
		formGroup[0].classList.add("error");
		
	}

	if (nombreInput.value === "") {
		formGroup[0].classList.add("error");
		nombreInput.classList.add("invalid")
	}
	else {
		nombreInput.classList.remove("invalid");
		formGroup[0].classList.remove("error");
	}

	if (apellidosInput.value === ""){
		formGroup[0].classList.add("error");
		apellidosInput.classList.add("invalid")
	} 
	else {
		apellidosInput.classList.remove("invalid");
		formGroup[0].classList.remove("error");
	}

	if (correoeInput.value === ""){
		formGroup[0].classList.add("error");
		correoeInput.classList.add("invalid")
	}
	else {
		correoeInput.classList.remove("invalid");
		formGroup[0].classList.remove("error");
	}

	if (telefonoInput.value === ""){
		formGroup[0].classList.add("error");
		telefonoInput.classList.add("invalid")
	}
	else {
		telefonoInput.classList.remove("invalid");
		formGroup[0].classList.remove("error");
	}

	if (checkinDate.value === "") {
		formGroup[1].classList.add("error");
		checkinDate.classList.add("invalid")

	} else {
		formGroup[1].classList.remove("error");
		checkinDate.classList.remove("invalid")
	}

	// if (checkoutDate.value === "") {
	//     formGroup[4].classList.add("error");
	//     checkoutDate.classList.add("invalid")


	// } else {
	//     formGroup[4].classList.remove("error");
	//     checkoutDate.classList.remove("invalid")
	// }

	// if(travelRadios[0].checked ===  false && travelRadios[1].checked === false){
	//     formGroup[8].classList.add("error");
	// } else {
	//     formGroup[8].classList.remove("error");

	// }

	// if(searchForRadios[0].checked ===  false && searchForRadios[1].checked === false && searchForRadios[2].checked === false){
	//     formGroup[9].classList.add("error");
	// } else {
	//     formGroup[9].classList.remove("error");

	// }

   if(formGroup[0].classList.contains("error") === false && formGroup[1].classList.contains("error") === false){
	   // alert("form submitted");
	   window.location.replace("https://trastering.com/step-3");
   }
}