const campoSenha = document.getElementById('senha');
const botaMostra = document.getElementById('mostraSenha');


botaMostra.addEventListener('click', function(){
    if(campoSenha.type === 'password'){
        campoSenha.type = 'text';
        botaMostra.textContent = '🙈 Ocultar';
    }else{
        campoSenha.type = 'password';
        botaMostra.textContent = '👁️ Mostrar';
    }
});

// Bloqueia caracteres inválidos no campo telefone
const telefone = document.querySelector("telefone");
telefone.addEventListener('input', function() {
this.value = this.value.replace(/[^0-9]/g, '');
});

