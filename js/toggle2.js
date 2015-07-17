function toggleOverlay(){
	var overlay = document.getElementById('overlay');
	var specialBox = document.getElementById('specialBox');
	overlay.style.opacity = .8;
	if(overlay.style.display == "none"){
		overlay.style.display = "block";
		
	} else {
		overlay.style.display = "none";
		
	}
}