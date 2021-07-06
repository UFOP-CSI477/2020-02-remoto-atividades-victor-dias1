var array;
var combustivelTotal = 0;
var kmTotal = 0;
var mediaTotal = 0;
var mediaKm = 0;
var mediaDesempenho = 0;
var count = 0;

function cadastraConsumo() {
    const qtdCombustivel = document.formConsumo.combustivel.value;
    const quilometros = document.formConsumo.km.value;
    const media = qtdCombustivel / quilometros;

    if (array === undefined) {
        array = []
    }
    array.push({ qtdCombustivel, quilometros, media });

    window.alert(`Qtd de combustível: ${qtdCombustivel}
                Quilômetros rodados: ${quilometros}
                Desempenho médio (km/l): ${media}`);
    count++;
}

function finalizar() {
    array.forEach(element => {
        combustivelTotal += element.qtdCombustivel;
        kmTotal += element.quilometros;
        mediaTotal = element.media;
    });
    mediaKm = kmTotal / count;
    mediaDesempenho = mediaTotal / count;
    window.alert(`Qtd total de combustível: ${combustivelTotal}
                Qtd total de quilômetros rodados: ${kmTotal}
                Média de consumo (km/l): ${mediaTotal}
                Média de quilômetros rodados: ${mediaKm}
                Média de desempenho (km/l): ${mediaDesempenho}`);


}