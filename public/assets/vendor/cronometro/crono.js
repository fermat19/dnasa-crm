$(document).ready(function () {
    var tiempo_corriendo = null;

    $("#crono").on("change", function () {
        let now = new Date();
        
        // localStorage.setItem('actividad', $("#crono").val());
        // localStorage.setItem('inicio', );
        clearInterval(tiempo_corriendo);
        var tiempo = {
            hora: 0,
            minuto: 0,
            segundo: 0,
        };

        tiempo_corriendo = setInterval(function () {
            // Segundos
            tiempo.segundo++;
            if (tiempo.segundo >= 60) {
                tiempo.segundo = 0;
                tiempo.minuto++;
            }

            // Minutos
            if (tiempo.minuto >= 60) {
                tiempo.minuto = 0;
                tiempo.hora++;
            }

            h = tiempo.hora < 10 ? "0" + tiempo.hora : tiempo.hora;
            m = tiempo.minuto < 10 ? "0" + tiempo.minuto : tiempo.minuto;
            s = tiempo.segundo < 10 ? "0" + tiempo.segundo : tiempo.segundo;
            document.getElementById("hms").innerHTML = h + ":" + m + ":" + s;
        }, 1000);
    });
});
