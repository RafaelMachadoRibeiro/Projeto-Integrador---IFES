const openModalButton = document.querySelector(".botao");
const closeModalButton = document.querySelector("#close-modal");
const closeCadastroButton = document.querySelector("#close-modalCad");
const entrar = document.querySelector("#entrar");
const openCadastroButton = document.querySelector("#but_cad");
const modal = document.querySelector("#modal");
const modalCadastro = document.querySelector("#modal_cadastro");
const form = document.querySelector(".form");
const formCadastro = document.querySelector(".form_cadastro");
const txtusuario = document.querySelector("#txtusuario");
const txtUsuario = document.querySelector("#txtUsuario");
const txtsenha = document.querySelector("#txtsenha");
const txtSenha = document.querySelector("#txtSenha");
const txtnome = document.querySelector("#txtnome");
const txtdata = document.querySelector("#txtdata");
const txtemail = document.querySelector("#txtemail");
const txtCsenha = document.querySelector("#txtCsenha");

const toggleModal = () => {
  modal.classList.toggle("hide");
};

const toggleModalCad = () => {
  modalCadastro.classList.toggle("hide");
};

[openModalButton, closeModalButton].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});

[openCadastroButton, closeCadastroButton].forEach((el) => {
  el.addEventListener("click", () => toggleModalCad());
});

// Aplica evento na submissão do formulário de login
form.addEventListener("submit", (e) => {
  e.preventDefault();
  validaEntrada();
});

function validaEntrada() {
  // Valores dos elementos
  let usuarioValor = txtusuario.value.trim();
  let senhaValor = txtsenha.value.trim();

  // Verificando usuario
  if (usuarioValor === "") {
    MostraErro(txtusuario, "Usuário deve ser preenchido!");
  } else {
    MostraSucesso(txtusuario);
  }

  // Verificando senha
  if (senhaValor === "") {
    MostraErro(txtsenha, "Senha deve ser preenchida");
  } else if (senhaValor.length < 6 || senhaValor.length > 30) {
    MostraErro(txtsenha, "Senha deve ter entre 6 a 30 caracteres");
  } else {
    MostraSucesso(txtsenha);
  }

  if (senhaValor === "123456" || usuarioValor === "admin") {
    entrar.addEventListener('click', function () {
      window.location.href = 'menu.php';
    });
  }
}

// Aplica evento na submissão do formulário de cadastro
formCadastro.addEventListener("submit", (el) => {
  el.preventDefault();
  validaCadastro();
});

function validaCadastro() {
  // Valores dos elementos
  let userValor = txtUsuario.value.trim();
  let senValor = txtSenha.value.trim();
  let nomeValor = txtnome.value.trim();
  let emailValor = txtemail.value.trim();
  let dataValor = txtdata.value.trim();
  let CsenhaValor = txtCsenha.value.trim();

  // Verificando usuario
  if (userValor === "") {
    MostraErro(txtUsuario, "Usuário deve ser preenchido!");
  } else {
    MostraSucesso(txtUsuario);
  }

  if (nomeValor === "") {
    MostraErro(txtnome, "O Nome completo deve ser preenchido!");
  } else {
    MostraSucesso(txtnome);
  }

  if (emailValor === "") {
    MostraErro(txtemail, "O E-mail deve ser preenchido!");
  } else {
    MostraSucesso(txtemail);
  }

  if (dataValor === "") {
    MostraErro(txtdata, "A data de Nascimento deve ser preenchida!");
  } else {
    MostraSucesso(txtdata);
  }

  // Verificando senha
  if (senValor === "" || CsenhaValor === "") {
    MostraErro(txtSenha, "Senha deve ser preenchida");
    MostraErro(txtCsenha, "O confirmar senha deve ser preenchido");
  } else if (senValor.length < 6 || senValor.length > 30) {
    MostraErro(txtSenha, "Senha deve ter entre 6 a 30 caracteres");
  } else if (senValor !== CsenhaValor) {
    MostraErro(txtSenha, "A senha deve ser igual a confirmar senha");
    MostraErro(txtCsenha, "A senha deve ser igual a confirmar senha");
  } else {
    MostraSucesso(txtSenha);
    MostraSucesso(txtCsenha);

    // Se todos os campos são válidos, exibe alerta de sucesso
    // Aqui você pode enviar o formulário, se necessário
    formCadastro.submit();
  }
}

// Se existe algum erro, então apresenta na tela.
function MostraErro(input, message) {
  let formControl = input.parentElement;
  formControl.className = "form-control error";
  let small = formControl.querySelector("small");
  small.innerText = message;
}

// Se NÃO existe erro, então apresenta na tela.
function MostraSucesso(input) {
  let formControl = input.parentElement;
  formControl.className = "form-control success";
}
