let logradouro = document.querySelector('#logradouro');
let complemento = document.querySelector('#complemento');
let bairro = document.querySelector('#bairro');
let UF = document.querySelector('#uf');

cep.onkeyup = async (event) => {

            if ($('.cep').cleanVal().length == 8) {
                let resposta = await fetch(`https://viacep.com.br/ws/${$('.cep').cleanVal()}/json/
`);
                let dadosDoCep = await resposta.json();
                //console.log(dadosDoCep);

                logradouro.value = dadosDoCep.logradouro;
                complemento.value = dadosDoCep.complemento;
                bairro.value = dadosDoCep.bairro;
                uf.value = dadosDoCep.uf;

            }
        }
