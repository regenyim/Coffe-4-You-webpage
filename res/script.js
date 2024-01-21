//KAPCSOLATOK-RESZLETEK
var details = document.querySelector(".details");

if(details)
{
	details.style.display = "none";

	var intro = document.querySelector(".IntroOfDetails");

	intro.innerHTML += ' <span class="ShowMore">Egyeb reszletek...</span>'

	var more = document.querySelector(".ShowMore");

	function ShowDetails()
	{
		more.style.display = "none";
		details.style.display = "block";
	}

	more.onclick = ShowDetails;
}


//REFEREMCIAK-KEPMEGJELENITO
var items = document.querySelectorAll(".gallery a");
var viewer = document.querySelector(".imageViewer");
var preview = document.querySelector(".imageViewer img");

if(items.length > 0)
{
	function GalleryClick(evt)
	{
		evt.preventDefault();
		/*Alapaertelmezett viselkedes tiltasa*/
		
		
		var href = this.getAttribute("href");
		
		preview.setAttribute("src", href);
		//viewer.style.display = "flex";
		viewer.classList.add("visible");
	}
	
	for(var i=0; i<items.length; i++)
	{
		items[i].onclick = GalleryClick;
	}
	
	function CloseViewer()
	{
		//viewer.style.display = "none";
		viewer.classList.remove("visible");
	}
	viewer.onclick = CloseViewer;
}








