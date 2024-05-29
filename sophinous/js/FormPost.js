export class FormPost {
  constructor(idForm, idTextarea, ListPost) {
    this.form = document.getElementById(idForm);
    this.textarea = document.getElementById(idTextarea);
    this.listPost = document.getElementById(ListPost);
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
        const newPost = document.createElement("li");
        newPost.classList.add("post");
        const time = this.getTime();
        newPost.innerHTML = `
        <div class="infoUserPost">
          <div class="imgUserPost"><img src="img/do-utilizador.png" alt=""></div>

          <div class="nameAndHour">
            <strong>Usuário</strong>
            <p>${time}</p>
          </div>
        </div>

        <p>
         ${this.textarea.value}
        </p>

        <div class="actionBtnPost">
          <button type="button" class="filesPost like">
            <img src="img/heart.svg" alt="Curtir">
            Curtir
          </button>
          <button type="button" class="filesPost comment">
            <img src="img/comment.svg" alt="Comentar">
            Comentar
          </button>
          <button type="button" class="filesPost share">
            <img src="img/share.svg" alt="Compartilhar">
            Compartilhar
          </button>
        </div>
        `;
        this.listPost.appendChild(newPost);
        this.textarea.value = "";
      } else {
        alert("ALGUM ERRO");
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

const postForm = new FormPost("formPost", "textarea", "posts");
