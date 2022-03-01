var botaoAdicionar = document.querySelector("#buscar-pacientes");
botaoAdicionar.addEventListener("click", function() {
    console.log("Buscando Pacientes...");
    
    const link = "https://api-pacientes.herokuapp.com/pacientes"

    var xhr = new XMLHttpRequest();

    xhr.open("GET", link);
    xhr.addEventListener("load", function() {

        var erroAjax = document.querySelector("#erro-ajax");

        if (xhr.status == 200) {
            erroAjax.classList.add("invisivel-ajax");

            var resposta = xhr.responseText;
            
            // JSON -> objeto (parse)
            var pacientes = JSON.parse(resposta);

            pacientes.forEach(function(paciente) {
                adicionaPacienteNaTabela(paciente);
            });
        }
        else {
            console.log(xhr.status);
            console.log(xhr.responseText);

            erroAjax.classList.remove("invisivel-ajax");
            erroAjax.classList.add("visivel-ajax");
        }
    });
    xhr.send();
});