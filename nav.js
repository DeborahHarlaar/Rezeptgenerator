function navBar(){
	var click = document.getElementById("topNavigation");
	if (click.className === "navigation"){
		click.className += " responsive";
	}else{
		click.className= "navigation";
	}
}

function listResponsive(){
	var click = document.getElementById("listResponsive");
	if (click.className === "list"){
		click.className += " responsive";
	}else{
		click.className= "list";
	}
}