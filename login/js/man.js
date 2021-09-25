/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function calcula(valor) {
    $("#campoDoCalculo").html(valor); //use jquery para mostrar o valor digitado ao clicar no botão
}

function calcula2(valor2) {
    $("#campoDoCalculo2").html(valor2); //use jquery para mostrar o valor digitado ao clicar no botão
}

function calcula3(valor3) {
    $("#campoDoCalculo3").html(valor3); //use jquery para mostrar o valor digitado ao clicar no botão
}

function calcula4(valor4) {
    $("#campoDoCalculo4").html(valor4); //use jquery para mostrar o valor digitado ao clicar no botão
}

function media(){
    var media = calcula() + calcula2() + calcula3() + calcula4() / 4;
   $("#media").html(media);
}

function enviar(){
 
var nota = document.getElementById("nota1");
 
var texto = nota; // como quiser formatar
 
return true(texto);
 
}