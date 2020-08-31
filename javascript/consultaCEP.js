let cep = document.getElementById('txtCEPAss');
let logradouro = document.getElementById('txtLogrAss');
let bairro = document.getElementById('txtBairroAss');
let cidade = document.getElementById('txtCidadeAss');
let estado = document.getElementById('txtEstadoAss');
let btnConsultacep = document.getElementById('btnConsultacep');

function consultacep(){
    cep.value.replace('/\D\g', '');
    
    if(cep.value !== ''){
        let validacep = /^[0-9]{8}$/;
        if(validacep.test(cep.value)){
            const settings = {
                method:'GET',
                mode:'cors',
                cache:'default',
                headers: {
                    "Content-Type":"application/json",
                }
                //body:JSON.stringify({cep})
            }
           
            fetch(`https://viacep.com.br/ws/${cep.value}/json/`, settings)
                .then(function (response){
                    return response.json()
                })
                .then(function (dados){
                    console.log(dados);
                    logradouro.value = dados.logradouro,
                    bairro.value = dados.bairro,
                    cidade.value = dados.localidade,
                    estado.value = dados.uf
                })
                .catch(function (error){
                    alert("Erro ao consultar cep" + error);
                })
        }
    }
}

btnConsultacep.addEventListener('click', function(){
    consultacep();
})