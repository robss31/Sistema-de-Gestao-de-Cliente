'use strict';
const myForm = document.getElementById('myForm');
myForm.addEventListener("submit", cadastrar);

function cadastrar(e){
    e.preventDe3fault();

    const formData = new FormData(this);
    const searchParams = new URLSearchParams();

    for(const par of formData){
        searchParams.append(par[0], par[1], par[2], par[3], par[4], par[5]);
    }

    fetch('cadastrodecliente.php',{
        method: 'POST',
        body: formData
    }).then(function(response){
        document.getElementById('nome').value = " ";
        document.getElementById('endereco').value= " ";
        document.getElementById('contato').value= " ";
        document.getElementById('idade').value=" ";
        document.getElementById('genero').value=" ";
        document.getElementById('cpf').value=" ";
        return alert('dados enserido no banco de dados!');

    }).catch(function(error){
        console.log(error);
    });
}