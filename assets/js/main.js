window.addEventListener('load', function () {
	// Scroll Up Button
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