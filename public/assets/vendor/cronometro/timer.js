$(document).ready(()=>{
	$("#crono").on("change", startDt);
	window.onload = getStartDate
});



function startDt() {
	t = new Date();
	startTiempo = {
		t: $("#crono :selected").val(),
		h: t.getHours(),
		m: t.getMinutes(),
		s: t.getSeconds()
	}
	localStorage.setItem("startTiempo", JSON.stringify(startTiempo));

}

function getStartDate(){
	let l = localStorage.getItem("startTiempo");
	if(l != null){
		$("#crono").val(l.t);
		console.log(l);
	}
}