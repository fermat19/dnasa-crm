class Crono {

	constructor() {
		this.opt = null;
		this.hora = 0;
		this.minuto = 0;
		this.segundo = 0;
		this.data = localStorage.getItem('dataCrono');
	}

	reloadData() {
		if (this.data) {
			let hora = new Date();
			this.hora = this.data.hora - hora.getHours();
			this.minuto = this.data.minuto - hora.getMinutes();
			this.segundo = this.data.segundo - hora.getSeconds();
		}
	}

	setLSData() {
		let hora = new Date();
		let dataCrono = {
			opt: this.opt,
			hora: this.hora,
			minuto: this.minuto,
			segundo: this.segundo
		}
	}

	imprimir() {
		let h = this.hora < 10 ? '0' + this.hora : this.hora;
		let m = this.minuto < 10 ? '0' + this.minuto : this.minuto;
		let s = this.segundo < 10 ? '0' + this.segundo : this.segundo;
		document.getElementById('hms').innerHTML = `${h}:${m}:${s}`;
	}

	contador() {
		this.segundo++;
		if (this.segundo > 59) {
			this.segundo = 0;
			this.minuto++
		}

		if (this.minuto > 59) {
			this.minuto = 0;
			this.hora++
		}
	}

	selectData() {
		$.ajax({
			url: uri + 'ajax/actividades/readAll',
			type: 'GET',
			dataType: 'json',
	
		}).done(function (result) {
			var item = result.data;
			var text = "<option>Selecciona una Opcion</option>";
			for (var i = item.length - 1; i >= 0; i--) {
				if (this.data) {
					if (this.data.opt == item[i]['id']) {
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
	}

	ejecutar(){
		this.selectData();
		this.reloadData();
		if(this.data){
			setInterval(() => {
				this.contador();
				this.imprimir();
			}, 1000);
		} else{
			this.setLSData();
			$("#crono").change( () => { 
				setInterval(() => {
					this.contador();
					this.imprimir();
				}, 1000);
			});
		}
		
		
	}
}