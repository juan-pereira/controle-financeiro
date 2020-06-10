$(document).ready(function(){
    $('select').formSelect();    
    $(".ValoresItens").maskMoney({
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
    
    $.ajax({
        url: `../php/verificaMes.php?valorMes=${valorMes}`,
        type:'POST',
        success:(resultado) => {
            if(resultado == 1){
                mostraCampos(valorMes);
            }else{
                $('#calculos').removeClass('mostra').addClass('esconde');
            }
        }    
    });

}

function formataValorMes(valorMes){
    
    let dataAtual = new Date().getFullYear();

    if(valorMes.length == 1){
        return "0"+valorMes+dataAtual; 
    } else {
        return valorMes+dataAtual;
    }

}

function mostraCampos(valorMes){
    $.ajax({
        url: `../php/mostraCampo.php?valorMes=${valorMes}`,
        contentType: "application/json",
        type:'POST',
        success:(resultado) => {

            resultado = $.parseJSON(resultado);

            var salario = resultado.salario;
            var fixo = resultado.gastoFixo;
            var temporario = resultado.gastoTemporario;

            salario = parseFloat(salario);
            fixo = parseFloat(fixo);
            temporario = parseFloat(temporario);

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);      
            function drawChart() {
      
              var data = google.visualization.arrayToDataTable([
                ['Gastos', 'Dinheiro gasto'],
                ['Fixo', fixo],
                ['Temporario', temporario]
            ]);
      
              var options = {
                title: `Porcentagem de Gasto`
              };
      
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      
              chart.draw(data, options);
            }

            $('#calculos').removeClass('esconde').addClass('mostra');

            var mes = valorMes.substring(0,2);

            $('#salario_resultado').html(formataValorToReal(salario));
            $('#fixo_resultado').html(formataValorToReal(fixo));
            $('#temporario_resultado').html(formataValorToReal(temporario));
            $('#nomeMes').html(nomeMes(mes)); 
            $('#sobras_resultado').html(calculaSobra(salario, fixo, temporario) );
            

            $('#mes').val(mes);
            $('#salario').val('');
            $('#fixos').val('');
            $('#temporarios').val('');

        }
    });
}

$('#form').submit(function(){
   
    var valorMes = formataValorMes($('#mes').val());

    var valorSalario = formataValorMoedaToNumber($('#salario').val());
    var valorFixo = formataValorMoedaToNumber($('#fixos').val());
    var valorTemporario = formataValorMoedaToNumber($('#temporarios').val());

    if(isVerificaCampoObrigatorio(valorMes, valorSalario, valorFixo, valorTemporario)){
        $.ajax({
            url: `../php/gravaMes.php?valorMes=${valorMes}&valorSalario=${valorSalario}&valorFixo=${valorFixo}&valorTemporario=${valorTemporario}`,
            type:'POST',
            success:() => {
                mostraCampos(valorMes);
            }
        });
    }

    return false;

});

function formataValorMoedaToNumber(valor){
    var valorFormatado =valor.replace(".","");
    valorFormatado = valorFormatado.replace(",",".");
    return valorFormatado;
}

function isVerificaCampoObrigatorio(valorMes, valorSalario, valorFixo, valorTemporario){

    var count = 0;
    var array = [valorMes,valorSalario,valorFixo,valorTemporario];

    for(var i = 0 ; i < array.length; i++){
        if(isBrancoOuNull(array[i],i)){
            count++;
        }
    }

    if(count == 0){
        return true;
    } else {
        return false;
    }

}

function isBrancoOuNull(valor, tipo){

    var nomeCampo = pegaNomeDoCampo(tipo);

    if(valor == null || valor == ""){
        alert(`O campo ${nomeCampo} não pode ser vazio`);
        return true;
    }

    return false;

}

function pegaNomeDoCampo(tipo){

    var nomeCampo = "";

    if(tipo == 0){
        nomeCampo = "Mês";
    } else if (tipo == 1){
        nomeCampo = "Salário";
    } else if (tipo == 2){
        nomeCampo = "Gastos Fixos";
    } else {
        nomeCampo = "Gastos Temporários";
    }

    return nomeCampo;

}


function nomeMes(mes){

    var valor = '';

    switch (mes) {
        case "01":
          valor = "Janeiro";
          break;
        case "02":
            valor = "Fevereiro";
          break;
        case "03":
            valor = "Março";
          break;
        case "04":
            valor = "Abril";
          break;
        case "05":
            valor = "Maio";
          break;
        case "06":
            valor = "Junho";
          break;
        case "07":
            valor = "Julho";
        break;
        case "08":
            valor = "Agosto";
        break;
        case "09":
            valor = "Setembro";
        break;
        case "10":
            valor = "Outubro";
        break;
        case "11":
            valor = "Novembro";
        break;
        case "12":
            valor = "Dezembro";
        break;
      }

      return valor;

}

function formataValorToReal(valor){    
    return valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
}

function calculaSobra(salario, fixo, temporario){    
    var sobra = salario - fixo - temporario;
    return formataValorToReal(sobra);
}