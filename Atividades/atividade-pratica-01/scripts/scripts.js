var array;

function populateOverallOverview() {
    var table = document.getElementById("table");

    while (table.hasChildNodes()) {
        table.removeChild(table.firstChild);
    }

    // helper function        
    function addCell(tr, text) {
        var td = tr.insertCell();
        td.textContent = text;
        return td;
    }

    // insert data
    array.forEach(function (item, index) {
        var row = table.insertRow();
        addCell(row, index + 1);
        addCell(row, item.largada);
        addCell(row, item.nome);
        addCell(row, item.tempo);
    })
}

function cadastraCompetidor() {
    const nome = document.formCompetidor.nome.value;
    const tempo = document.formCompetidor.tempo.value;
    const largada = document.formCompetidor.largada.value;

    if (array === undefined) {
        array = []
    }
    array.push({ nome, tempo, largada });
    array.sort(function (a, b) {
        if (a.tempo < b.tempo) {
            return -1;
        }
        else {
            return 1;
        }
    })
    console.log(array);
    populateOverallOverview();
}

function preventDefault() {
    return false;
}