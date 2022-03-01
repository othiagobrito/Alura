var botaoAdicionar = document.querySelector("#adicionar-paciente");
botaoAdicionar.addEventListener("click", function(event) {
    event.preventDefault();
    
    var form = document.querySelector("#form-adiciona");

    // Extraindo info dos pacientes do form
    var paciente = obtemPacienteFormulario(form);

    var erros = validaPaciente(paciente);
   
    if(erros.length > 0) {
        exibeMensagensErro(erros);
        return;
    }

    adicionaPacienteNaTabela(paciente);

    // Limpar campos form
    form.reset();
    var mensagensErro = document.querySelector("#mensagens-erro");
    mensagensErro.innerHTML = "";

});

function adicionaPacienteNaTabela(paciente) {
    // Cria TR e TD do paciente
    var pacienteTr = montaTr(paciente);

    // Adicionando paciente na tabela
    var tabela = document.querySelector("#tabela-pacientes");
    tabela.appendChild(pacienteTr);

}

function exibeMensagensErro(erros) {
    var ul = document.querySelector("#mensagens-erro");

    ul.innerHTML = "";
    
    erros.forEach(function(erro) {
        var li = document.createElement("li");
        li.textContent = erro;
        ul.appendChild(li);
    });
}

function obtemPacienteFormulario(form) {

    var paciente = {
        nome: form.nome.value,
        peso: form.peso.value,
        altura: form.altura.value,
        gordura: form.gordura.value,
        imc: calculaImc(form.peso.value, form.altura.value)
    }

    return paciente;
}

function montaTr(paciente) {

    var pacienteTr = document.createElement("tr");
    pacienteTr.classList.add("paciente");
    
    pacienteTr.appendChild(montaTd(paciente.nome, "info-nome"));
    pacienteTr.appendChild(montaTd(paciente.peso, "info-peso"));
    pacienteTr.appendChild(montaTd(paciente.altura, "info-altura"));
    pacienteTr.appendChild(montaTd(paciente.gordura, "info-gordura"));
    pacienteTr.appendChild(montaTd(paciente.imc, "info-imc"));

    return pacienteTr;
}

function montaTd(dado, classe) {

    var td = document.createElement("td");

    td.textContent = dado;
    td.classList.add(classe);

    return td;
}

function validaPaciente(paciente) {

    var erros = [];

    if (paciente.nome.length == 0) {
        erros.push("*O nome não pode ficar em branco!");
    }
    
    if (!validaPeso(paciente.peso)) {
        erros.push("*Peso inválido!");
    }

    if (!validaAltura(paciente.altura)){
        erros.push("*Altura inválida!");
    }

    if (paciente.gordura.length == 0) {
        erros.push("*Gordura não pode ficar em branco!");
    }

    if (paciente.peso.length == 0) {
        erros.push("*Peso não pode ficar em branco!");
    }

    if (paciente.altura.length == 0) {
        erros.push("*Altura não pode ficar em branco!");
    }

    return erros;
}