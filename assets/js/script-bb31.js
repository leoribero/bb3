// BB321 SORT ACCORDION
let triggers_BB321 = document.querySelectorAll('.trigger_BB321');
for(i = 0; i < triggers_BB321.length; i++){
  triggers_BB321[i].onclick = function(){
	this.classList.toggle('active');
	let box = this.nextElementSibling;
	if(box.style.maxHeight){
	  box.style.maxHeight = null;
	} else {
	  box.style.maxHeight = box.scrollHeight + 'px'
	}
	for(j = 0; j < triggers_BB321.length; j++){
	  if(triggers_BB321[j] !== this ){
		triggers_BB321[j].classList.remove('active');
		triggers_BB321[j].nextElementSibling.style.maxHeight = null;
	  }
	}
  }
}

// /BB321
// BB322  FILTER ACCORDION
let triggers_BB322 = document.querySelectorAll('.trigger_BB322');
for(i = 0; i < triggers_BB322.length; i++){
  triggers_BB322[i].onclick = function(){
	this.classList.toggle('active');
	let box = this.nextElementSibling;
	if(box.style.maxHeight){
	  box.style.maxHeight = null;
	} else {
	  box.style.maxHeight = box.scrollHeight + 'px'
	}
	for(j = 0; j < triggers_BB322.length; j++){
	  if(triggers_BB322[j] !== this ){
		triggers_BB322[j].classList.remove('active');
		triggers_BB322[j].nextElementSibling.style.maxHeight = null;
	  }
	}
  }
}

// /BB322

// BB32 RADIO BUTTONS ORDENAR
function displayRadioValueS() {
  document.getElementById("resultS").innerHTML = "";
  var ele = document.getElementsByTagName('input');
  for (i = 0; i < ele.length; i++) {
	  if (ele[i].type = "radio") {

		  if (ele[i].checked)
			  document.getElementById("resultS").innerHTML
				  += ele[i].name + " Value: "
				  + ele[i].value + "<br>";
				  for(j = 0; j < triggers_BB321.length; j++){
					if(triggers_BB321[j] !== this ){
					  triggers_BB321[j].classList.remove('active');
					  triggers_BB321[j].nextElementSibling.style.maxHeight = null;
					}
				  }
				  
	  }
  }
}
// /BB32 RADIO BUTTONS ORDENAR


function displayRadioValueF() {
  document.getElementById("resultF").innerHTML = "";
  var ele = document.getElementsByTagName('input');
  for (i = 0; i < ele.length; i++) {
	  if (ele[i].type = "radio") {

		  if (ele[i].checked)
			  document.getElementById("resultF").innerHTML
				  += ele[i].name + " Value: "
				  + ele[i].value + "<br>";
				  for(k = 0; k < triggers_BB322.length; k++){
					if(triggers_BB322[k] !== this ){
					  triggers_BB322[k].classList.remove('active');
					  triggers_BB322[k].nextElementSibling.style.maxHeight = null;
					}
				  }
				  
	  }
  }
}

// BB32 RADIO BUTTONS FILTRAR
// document.querySelector('button').addEventListener('click', function() {
//   let result = document.getElementById('result')
//   result.value = document.querySelector('[name="x"]:checked').value
// })

// /BB32 RADIO BUTTONS FILTRAR

const tabButtons = document.querySelectorAll('.tabs__pills .btn');
const tabContents = document.querySelectorAll('.tabs__panels > div');

if (tabButtons && tabContents) {
  tabButtons.forEach((tabBtn) => {
	tabBtn.addEventListener('click', () => {
	  const tabId = tabBtn.getAttribute('data-id');

	  tabButtons.forEach((btn) => btn.classList.remove('active'));
	  tabBtn.classList.add('active');

	  tabContents.forEach((content) => {
		content.classList.remove('active');

		if (content.id === tabId) {
		  content.classList.add('active');
		}
	  });
	});
  });
}