class FormPost {
  constructor(idForm, idTextarea, ListPost) {
    this.form = document.getElementById(idForm);
    this.textarea = document.getElementById(idTextarea);
    this.listPost = document.getElementById(ListPost);
    this.template = document.getElementById('post-template').content;
    this.addSubmit();
  }

  formValidate(value) {
    if (
      value === "" ||
      value === null ||
      value === undefined ||
      value.length < 3
    ) {
      return false;
    }
    return true;
  }

  onSubmit(func) {
    this.form.addEventListener("submit", func);
  }

  addSubmit() {
    const handleSubmit = (event) => {
      event.preventDefault();
      if (this.formValidate(this.textarea.value)) {
        const newPost = document.importNode(this.template, true);
        newPost.querySelector('.time').textContent = this.getTime();
        newPost.querySelector('.postContent').textContent = this.textarea.value;
        this.listPost.appendChild(newPost);
        this.textarea.value = "";
      } else {
        alert("Por favor, insira um texto válido com pelo menos 3 caracteres.");
      }
    };

    this.onSubmit(handleSubmit);
  }

  getTime() {
    const time = new Date();
    const hour = time.getHours();
    const minutes = time.getMinutes();
    return `${hour}h ${minutes}min`;
  }
}

// script.js

function likePost() {
  alert('Você curtiu esta postagem!');
}

function commentPost() {
  let comment = prompt('Digite seu comentário:');
  if (comment) {
    alert('Seu comentário foi adicionado!');
  }
}

const postForm = new FormPost("formPost", "textarea", "posts");
