const form = document.querySelector('form#formVeiculo');
const inputAno = form.querySelector('input#ano');
const inputPreco = form.querySelector('input#preco');

// Aplicamos as máscaras
VMasker(inputAno).maskPattern('9999');
VMasker(inputPreco).maskMoney();

// quando o formulário for submetido
form.addEventListener('submit', () => {
    event.preventDefault(); // bloqueia o recarregamento
    const inputMarca = form.querySelector('#marca');
    const inputModelo = form.querySelector('#modelo');
    const inputCor = form.querySelector('#cor');
    const inputFoto = form.querySelector('#foto');
    const inputDescricao = form.querySelector('#descricao');

    if (validarCampos(inputMarca, inputModelo, inputAno, inputPreco, inputCor, inputDescricao)) {
        // cadastra o veículo
        const listaDeCarros = JSON.parse(localStorage.getItem('listaCarrosStorage')) ?? [];
        const carro = {
            marca: inputMarca.value,
            modelo: inputModelo.value,
            ano: inputAno.value,
            preco: inputPreco.value,
            cor: inputCor.value,
            foto: inputFoto.value,
            descricao: inputDescricao.value
        }
        listaDeCarros.push(carro);
        localStorage.setItem('listaCarrosStorage', JSON.stringify(listaDeCarros));
        alert('Carro cadastrado com sucesso!');
        form.reset();
    }
});

function validarCampos(...campos)
{
    let status = true;
    const corrigeNumero = function(valor) {
        return Number(valor.replaceAll('.', '').replaceAll(',', '.'));
    }

    campos.forEach(campo => {
        if (
            campo.value.length <= 1 ||
            campo.id == 'ano' && campo.value < 1900 ||
            campo.id == 'preco' && corrigeNumero(campo.value) > 100000000
        ) {
            campo.nextElementSibling.classList.remove('d-none');
            status = false;
        }
        else {
            campo.nextElementSibling.classList.add('d-none');
        }
    });

    return status;
}