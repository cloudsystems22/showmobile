let strCPF = document.getElementById("txtCPFAss");
function validaCPF() {
    let Soma;
    let Resto;
    Soma = 0;
    if (strCPF.value == "00000000000" ||
        strCPF.value == "11111111111" ||
        strCPF.value == "22222222222" ||
        strCPF.value == "33333333333" ||
        strCPF.value == "44444444444" ||
        strCPF.value == "55555555555" ||
        strCPF.value == "66666666666" ||
        strCPF.value == "77777777777" ||
        strCPF.value == "88888888888" ||
        strCPF.value == "99999999999") return document.getElementById("msgCPFAss").innerHTML = "inválido!";
    //$("#txtCPFAss").focus();

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.value.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.value.substring(9, 10))) return document.getElementById("msgCPFAss").innerHTML = "inválido!";

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.value.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.value.substring(10, 11))) return document.getElementById("msgCPFAss").innerHTML = "inválido!";

    return document.getElementById("msgCPFAss").innerHTML = "";
};

strCPF.addEventListener('blur', function(){
    validaCPF();
})