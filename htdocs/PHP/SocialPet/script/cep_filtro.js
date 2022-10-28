const limparFormulario = (endereco) =>{
    document.getElementById('cidade').value = '';
}
const preecherFormulario = (endereco) =>{
    document.getElementById('cidade').value = endereco.localidade;
}

const eNumero = (numero) => /^[0-9]+$/.test(numero);
const cepValido = (cep) => cep.length == 8 && eNumero(cep);
const pesquisarcep = async() => {
    limparFormulario();
    const cep = document.getElementById('cep').value;
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    if (cepValido(cep)) {
        const dados = await fetch(url);
        const endereco = await dados.json();
        if (endereco.hasOwnProperty('erro')) {
            document.getElementById('cep').value = 'CEP não encontrado!';
        } else{
            preecherFormulario(endereco);
        }
    }else {
        document.getElementById('cep').value = 'CEP não encontrado!';
    }
    
}
