function validar() {
    var nome = formCadastro.nome;
    var endereco = formCadastro.endereco;
    var cpf = formCadastro.cpf;
    var tel = formCadastro.tel;

    if (nome.value == "") {
        alert("Nome não informado!");
        nome.focus();
    }
    else if (endereco.value == "") {
        alert("Endereço não informado!");
        endereco.focus();
    }
    else if (cpf.value == "") {
        alert("CPF não informado!");
        cpf.focus();
    }
    else if (tel.value == "") {
        alert("Telefone não informado!");
        tel.focus();
    }

    if (cpf.length < 11 || isNaN(parseInt(cpf.value))) {
        alert("CPF inválido!");
        cpf.value = "";
        cpf.focus();
    }

    if (tel.length < 11 || isNaN(parseInt(tel.value))) {
        alert("Formato de telefone incorreto!");
        tel.value = "";
        tel.focus();
    }
}