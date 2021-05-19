
function corrigeIMG(){
    var altura= $('img#imgReferencia').height()
    console.log(altura);
    var tamanho =document.getElementsByClassName('corrige');
    console.log(tamanho);
    for(var i=0;i<tamanho.length;i++){
        tamanho.item(i).style.height=altura+'px';
    }
}