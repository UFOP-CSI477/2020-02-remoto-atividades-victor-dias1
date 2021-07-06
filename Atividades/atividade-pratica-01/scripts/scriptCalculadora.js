var primeiroNumero;
var segundoNumero;
var operador;

function adicionaNumero(num) {
    let input = document.getElementById("inputCalculadora");
    if (operador === undefined) {
        if (primeiroNumero !== undefined) {
            primeiroNumero = String(primeiroNumero + num);
        } else {
            primeiroNumero = String(num);
        }
        input.value = primeiroNumero;
    } else {
        if (segundoNumero !== undefined) {
            segundoNumero = String(segundoNumero + num);
        } else {
            segundoNumero = String(num);
        }
        input.value = primeiroNumero + operador + segundoNumero;
    }
}

function adicionaOperador(op) {
    let input = document.getElementById("inputCalculadora");
    operador = op;
    input.value = primeiroNumero + operador;
}

function calcular() {
    let input = document.getElementById("inputResultado");
    let result = 0;
    switch (operador) {
        case '+':
            result = Number(primeiroNumero) + Number(segundoNumero);
            break;
        case '-':
            result = Number(primeiroNumero) - Number(segundoNumero);
            break;
        case '*':
            result = Number(primeiroNumero) * Number(segundoNumero);
            break;
        case '/':
            result = Number(primeiroNumero) / Number(segundoNumero);
            break;
    }
    input.value = String(result);
}