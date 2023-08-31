window.addEventListener('load', function () {
	/*
		Accordions open/close
	**/
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          	var panel = this.nextElementSibling;
          
          	if (panel.style.maxHeight) {
            	panel.style.maxHeight = null;
            	this.children[1].classList.remove('rotate-180')
				console.log(panel.scrollHeight)
            	// this.children[1].innerHTML = "+";
          	} else {
            	panel.style.maxHeight = panel.scrollHeight + "px";
            	this.children[1].classList.add('rotate-180')
				console.log(panel.scrollHeight)
            	// this.children[1].innerHTML = "-"; 
          	}
        });
    }
	/*
		Video Models
	**/
	// Open Modals
    const modalBtns = document.querySelectorAll('.modal-button');
	modalBtns.forEach((btn) => {
		btn.addEventListener("click", function() {
			let theId = btn.id
			let theCode = theId.split('-');
			let modalId = "modal-" + theCode[1];
			let modal = document.getElementById(modalId);
			modal.classList.remove('hidden')
		})
	})
	// Close Modals
	const closeModals = document.querySelectorAll('.close-modal');
	closeModals.forEach((close) => {
		close.addEventListener("click", function() {
			close.parentElement.parentElement.classList.add('hidden')
		})
	})
	/*
		Scroll Up Button
	**/
	scrollUp = document.getElementById("scrollUp");
	scrollUp.addEventListener('click', function() {
		scrollTo(0,0)
	})
  	window.addEventListener("scroll", function () {
      	var y = window.scrollY;
      	if (y >= 750) {
			scrollUp.classList.remove("hidden");
		} else {
			scrollUp.classList.add("hidden")
      	}
    });
})