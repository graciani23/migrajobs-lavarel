let cep = document.querySelector('#cep')
let rua = document.querySelector('#rua')
let complemento = document.querySelector('#complemento')
let cidade = document.querySelector('#city')
let uf = document.querySelector('#uf')

cep.onkeyup = async (event)=> {

    if(cep.value.length == 8) {
        console.log("Faz a pesquisa na api")
        let resposta = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`)
        let dadosDoCep = await resposta.json()

        rua.value = dadosDoCep.logradouro
        complemento.value = dadosDoCep.complemento
        cidade.value = dadosDoCep.localidade
        uf.value = dadosDoCep.uf
    }
}
