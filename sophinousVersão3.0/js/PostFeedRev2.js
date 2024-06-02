document.addEventListener("DOMContentLoaded", function () {
    // Criar e adicionar inputs de arquivo dinamicamente
    const imageInput = createFileInput('image', 'image/*');
    const gifInput = createFileInput('gif', 'image/gif');
    const videoInput = createFileInput('video', 'video/*');
    const pdfInput = createFileInput('pdf', '.pdf');

    // Adicionar event listeners para os botões
    document.getElementById('btnImage').addEventListener('click', () => imageInput.click());
    document.getElementById('btnGif').addEventListener('click', () => gifInput.click());
    document.getElementById('btnVideo').addEventListener('click', () => videoInput.click());
    document.getElementById('btnPDF').addEventListener('click', () => pdfInput.click());

    // Adicionar event listeners para os inputs de arquivo
    imageInput.addEventListener('change', (event) => handleFileSelect(event, 'image'));
    gifInput.addEventListener('change', (event) => handleFileSelect(event, 'gif'));
    videoInput.addEventListener('change', (event) => handleFileSelect(event, 'video'));
    pdfInput.addEventListener('change', (event) => handleFileSelect(event, 'pdf'));
});

function createFileInput(id, accept) {
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = accept;
    input.style.display = 'none';
    input.id = `${id}Input`;
    document.body.appendChild(input);
    return input;
}

function handleFileSelect(event, fileType) {
    const file = event.target.files[0];
    if (file) {
        const textarea = document.getElementById('textarea');
        const reader = new FileReader();

        reader.onload = function (e) {
            let preview;
            if (fileType === 'image' || fileType === 'gif') {
                preview = `<img src="${e.target.result}" alt="Imagem" style="max-width: 100%;"/>`;
            } else if (fileType === 'video') {
                preview = `<video controls style="max-width: 100%;"><source src="${e.target.result}" type="${file.type}">Seu navegador não suporta a tag de vídeo.</video>`;
            } else if (fileType === 'pdf') {
                preview = `<embed src="${e.target.result}" type="application/pdf" style="width:100%; height:500px;" />`;
            }

            textarea.value += `\n${preview}\n`; // Adiciona quebra de linha antes e depois do preview
        };

        reader.readAsDataURL(file);
    }
}

class FormPost {
    constructor(idForm, idTextarea, ListPost) {
        this.form = document.getElementById(idForm);
        this.textarea = document.getElementById(idTextarea);
        this.listPost = document.getElementById(ListPost);
        this.template = document.getElementById('post-template').content;
        this.addSubmit();
        this.selectedFile = null;
    }

    formValidate(value) {
        return value && value.length >= 3;
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
                newPost.querySelector('.postContent').innerHTML = this.textarea.value.replace(/\n/g, '<br>'); // Substitui quebras de linha por <br>

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


function likePost() {
    alert('Você curtiu esta postagem!');
}

function commentPost() {
    let comment = prompt('Digite seu comentário:');
    if (comment) {
        alert('Seu comentário foi adicionado!');
    }
}
document.addEventListener("DOMContentLoaded", function () {
    const formPost = new FormPost('formPost', 'textarea', 'posts');
});
