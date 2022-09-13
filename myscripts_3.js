function schimba()
			{
				document.getElementById('title').style.color='red';
			}
function reschimba()
			{
				document.getElementById('title').style.color="black";
			}
function aduna()
{
	 var x = document.getElementById("cronometru");
	 x.value = parseInt(x.value)+1;
}
function finalizare_formular()
{
	document.getElementById("formular_final").innerHTML="<img src='ok.png' style='width:100% height:100%'>";

}
function formular_nefinalizat()
{
	document.getElementById("formular_final").innerHTML="<img src='x.png' style='width:100% height:100%'>";
}
function timp()
{
	window.alert("Aveti 1 minut pentru a completa chestionarul! Sa incepem!");
	setInterval(function(){ aduna(); },1000);
	setTimeout(function(){ if(document.getElementById('submit').clicked != true){alert("Imi pare rau, timpul a expirat!"); formular_nefinalizat();} },60000);
	
}
function mareste(x)
{	
	x.style.fontSize="25px";
}
function miceste(x)
{
	x.style.fontSize="15px";
}

