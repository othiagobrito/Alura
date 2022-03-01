var campoFiltro = document.querySelector("#filtrar-tabela");

campoFiltro.addEventListener("input", function() {
    console.log(this.value);

    var pacientes = document.querySelectorAll(".paciente");

    if (this.value.length > 0) {
        for (var i = 0; i < pacientes.length; i++) {
            var paciente = pacientes[i];
            var nome = paciente.querySelector(".info-nome").textContent;
            
            // Procura expressão na string
            var expressao = new RegExp(this.value, "i"); // "i" para insentive (vai buscar sem case sensitive)

            if (!expressao.test(nome)) {
                paciente.classList.add("invisivel");
            }
            else {
                paciente.classList.remove("invisivel");
            }
        }
    }
    else {
        for (let i = 0; i < pacientes.length; i++) {
            var paciente = pacientes[i].classList.remove("invisivel");
            
        }
}
});