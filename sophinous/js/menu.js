
function entrar() {
  document.getElementById("botaoEdi").addEventListener(window.location.href = 'perfil.php');
}
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
function mostrarUsuario() {
  document.getElementsById("us").classList.toggle("show");
}

function filterFunction() {
  const input = document.getElementById("txtBusca");
  const filter = input.value.toUpperCase();
  const div = document.getElementById("myDropdown");
  const a = div.getElementsByTagName("a");
  for (let i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

document.addEventListener('DOMContentLoaded', function () {
  var profileButton = document.getElementById('user');
  var profilePopup = document.getElementById('popuPerfil');

  profileButton.addEventListener('click', function () {
    if (profilePopup.classList.contains('hidden')) {
      profilePopup.classList.remove('hidden');
      profilePopup.style.display = 'block';
    } else {
      profilePopup.classList.add('hidden');
      profilePopup.style.display = 'none';
    }
  });

  window.addEventListener('click', function (event) {
    if (!profilePopup.contains(event.target) && !profileButton.contains(event.target)) {
      profilePopup.classList.add('hidden');
      profilePopup.style.display = 'none';
    }
  });
});

