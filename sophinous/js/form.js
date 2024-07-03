const formProfile = document.querySelector("form");
    
    formProfile.addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio do formulário padrão
        
        if (validaProfile()) {
            // Se necessário, envie o formulário aqui
            formProfile.submit();
        }
    });

function validaProfile() {
    // Valores dos elementos
    let nomeValor = document.getElementById("nome").value.trim();
    let emailValor = document.getElementById("email").value.trim();
    let contatoValor = document.getElementById("contato").value.trim();
    let nascimentoValor = document.getElementById("nascimento").value.trim();
    let ensinoValor = document.getElementById("ensino").value.trim();
    let cursoValor = document.getElementById("curso").value.trim();
    let periodoValor = document.getElementById("periodo").value.trim();
    let disciplinasValor = document.getElementById("Diciplinas").value.trim();
    let sobreValor = document.getElementById("sobre").value.trim();

    // Verifica se todos os campos estão preenchidos
    if (nomeValor === "" || emailValor === "" || contatoValor === "" || nascimentoValor === "" || 
        ensinoValor === "" || cursoValor === "" || periodoValor === "" || 
        disciplinasValor === "" || sobreValor === "") {
        alert("Todos os campos devem ser preenchidos.");
        return false;
    } else {
        return true;
    }
}