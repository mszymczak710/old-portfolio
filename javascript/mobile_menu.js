function Menu() {
	document.getElementById("myMenu").classList.toggle("show");
	var sections = document.getElementsByTagName('section');
	for(var i = 0; i < sections.length; i++){
		sections[i].classList.toggle('down');
	}
	document.getElementsByTagName('footer')[0].classList.toggle('down');
}

window.onclick = function(event) {
	if (!event.target.matches('.button_menu')) {
		var dropdowns = document.getElementsByClassName("menu_content");
		var sections = document.getElementsByTagName('section');
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		var openMenu = dropdowns[i];
			if (openMenu.classList.contains('show') && sections[i].classList.contains('down')) {
				openMenu.classList.remove('show');
				sections[i].classList.remove('down');
			}
		}
		document.getElementsByTagName('footer')[0].classList.remove('down');
	}
}
