$(document).ready(() => {
	listarActividades();
	if (getStartDate()) {
		console.log('Inicia sin accion');
		cronometrar();
	} else {
		
		$("#crono").change(cronometrar);
	}

});

function listarActividades() {
	$.ajax({
		url: uri + 'ajax/actividades/readAll',
		type: 'GET',
		dataType: 'json',

	}).done(function (result) {
		var item = result.data;
		var text = "<option>Selecciona una Opcion</option>";
		for (var i = item.length - 1; i >= 0; i--) {
			m = getStartDate();
			if (m) {
				if (m.t == item[i]['id']) {
					text += "<option value='" + item[i]['id'] + "' selected>" + item[i]['actividad'] + "</option>";
				}
				text += "<option value='" + item[i]['id'] + "'>" + item[i]['actividad'] + "</option>";
			} else {
				text += "<option value='" + item[i]['id'] + "'>" + item[i]['actividad'] + "</option>";
			}

		}
		document.getElementById("crono").innerHTML = text;
	}).fail(function (e) {
		console.log(e)
	});
}hora

// almacena la hora de inicio de la actividad
// almacena la opcion seleccionada
function startDt() {
	t = new Date();
	startActivity = {
		t: $("#crono :selected").val(),
		h: t.getHours(),
		m: t.getMinutes(),
		s: t.getSeconds()
	}
	console.log(startActivity);
	localStorage.setItem("startActivity", JSON.stringify(startActivity));
}

// recupera los datos almacenados
function getStartDate() {
	let l = localStorage.getItem("startActivity");
	if(l){
		l = JSON.parse(l);
	}
	console.log(l);
	return l
}

function incializar() {
	
	let m = getStartDate();
	let tiempo = null;
	if (m) {
		r = new Date()
		let _hora = r.getHours() - parseInt(m.h);
		let _mint = r.getMinutes() - parseInt(m.m); 
		let _secs = r.getSeconds() - parseInt(m.s);
		tiempo = {
			hora: _hora,
			minuto: _mint,
			segundo: _secs
		}
	} else {
		startDt();
		tiempo = {
			hora: 0,
			minuto: 0,
			segundo: 0
		}
	}
	console.log(tiempo);
	return tiempo;
}

function cronometrar() {
	t = incializar();
	timer = setInterval(() => {
		t.segundo++;
		if (t.segundo > 59) {
			t.segundo = 0;
			t.minuto++
		}
		if (t.minuto > 59) {
			t.minuto = 0;
			t.hora++
		}

    }, )
		h = t.hora < 10 ? '0' + t.hora : t.hora;
		m = t.minuto < 10 ? '0' + t.minuto : t.minuto;
		s = t.segundo < 10 ? '0' + t.segundo : t.segundo;
		document.getElementById('hms').innerHTML = h + ':' + m + ':' + s;
		console.log(h + ':' + m + ':' + s)
	}, 1000)
}