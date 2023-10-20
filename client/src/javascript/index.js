// função mascara do login
function mascara(i) {
  var v = i.value;

  if (isNaN(v[v.length - 1])) {
    // impede entrar outro caractere que não seja número
    i.value = v.substring(0, v.length - 1);
    return;
  }

  i.setAttribute("maxlength", "14");
  if (v.length == 3 || v.length == 7) i.value += ".";
  if (v.length == 11) i.value += "-";
}

// funções checkbox

function mostrarCheckboxes() {
  var checkboxesAdicionais = document.getElementById("checkboxesAdicionais");
  var checkboxPrincipal = document.getElementById("checkboxPrincipal");

  if (checkboxPrincipal.checked) {
    checkboxesAdicionais.style.display = "block";
  } else {
    checkboxesAdicionais.style.display = "none";
  }
}

// mostrar checkboxes

function mostrarCheckboxes() {
  var checkboxesAdicionais = document.getElementById("checkboxesAdicionais");
  var checkboxPrincipal = document.getElementById("checkboxPrincipal");

  if (checkboxPrincipal.checked) {
    checkboxesAdicionais.style.display = "block";
  } else {
    checkboxesAdicionais.style.display = "none";
  }
}

// checkboxes adcionais

function showAdditionalCheckboxes() {
  // Toggle the visibility of additional checkboxes
  var additionalCheckboxes = document.getElementById("additionalCheckboxes");
  additionalCheckboxes.style.display =
    additionalCheckboxes.style.display === "none" ? "block" : "none";
}

//Oxigenioterapia

function toggleInput() {
  var oxigenioterapiaCheckbox = document.getElementById("Oxigenioterapia");
  var lpmInput = document.getElementById("LPM");
  var lpmLabel = document.getElementById("LPMLabel");

  if (oxigenioterapiaCheckbox.checked) {
    lpmInput.style.display = "block";
    lpmLabel.style.display = "block";
  } else {
    lpmInput.style.display = "none";
    lpmLabel.style.display = "none";
  }
}

//Mais checkbox

// Adiciona um ouvinte de evento à checkbox
document.getElementById("UsoDeColar").addEventListener("change", function () {
  // Obtém o elemento de input de texto
  var tamanhoInput = document.getElementById("Tamanho");
  // Obtém o elemento da label
  var tamanhoLabel = document.getElementById("TamanhoLabel");

  // Se a checkbox estiver marcada, exibe o input de texto, caso contrário, oculta
  if (this.checked) {
    tamanhoInput.style.display = "block";
    tamanhoLabel.style.display = "block";
  } else {
    tamanhoInput.style.display = "none";
    tamanhoLabel.style.display = "none";
  }
});
