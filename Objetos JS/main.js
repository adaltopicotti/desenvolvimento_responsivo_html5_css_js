let cores = ["azul", "vermelho", "verde"];

let carro = {
    marca: "Fiat",
    modelo: "147",
    cor: "Branca",
    ligado: false,
    km: 0,
    ligar: function(){
        this.ligado = true;
    },
    andar: function(distancia){
        this.ligar();
        this.km = this.km + distancia;
        return this.km;
    }
};

console.log(carro.andar(10));
console.log(carro.andar(20));
console.log(carro.andar(16));
console.log(carro.andar(13));
console.log(carro.km);