$(document).ready(function(){
    $('select').formSelect();
    
    $(".ValoresItens").maskMoney({
        prefix: "R$",
        decimal: ",",
        thousands: "."
    });
});   

var comboMes = document.querySelector("#mes");

comboMes.addEventListener('change', () => {
    
    var valorMes = $('#mes').val();
    
    valorMes = formataValorMes(valorMes);
    
    isExisteMesCadastrado(valorMes);
   
})

function isExisteMesCadastrado(valorMes){

    let dataAtual = new Date().getFullYear();
    valorMes = valorMes+dataAtual;

    $.ajax({
        url: `../php/verificaMes.php?valorMes=${valorMes}`,
        type:'POST',
        success:(resultado) => {
            if(resultado == 1){
                mostraCampos(valorMes);
            }else{
                
            }
        }    
    });

}

function formataValorMes(valorMes){
    
    if(valorMes.length == 1){
        return "0"+valorMes; 
    } else {
        return valorMes;
    }

}

function mostraCampos(valorMes){
    $.ajax({
        url: `../php/mostraCampo.php?valorMes=${valorMes}`,
        contentType: "application/json",
        type:'POST',
        success:(resultado) => {
            var data = $.parseJSON(resultado);           
        }
    });
}