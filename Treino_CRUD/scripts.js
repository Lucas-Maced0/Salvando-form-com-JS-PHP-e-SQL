// Aguarda o evento de envio do formulário
let form = document.getElementById("meuFormulario");

form.addEventListener("submit", (event) => {
  event.preventDefault(); // Evita o envio padrão do formulário

  // Pega os valores dos campos de entrada
  var nome = document.getElementById("nome").value;
  var email = document.getElementById("email").value;

  // Cria um objeto FormData para enviar os dados
  var formData = new FormData();
  formData.append("nome", nome);
  formData.append("email", email);

  // Cria uma requisição AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "seu_arquivo_php.php", true);

  // Define o callback para tratar a resposta
  xhr.onload = function () {
    if (xhr.status === 200) {
      // A requisição foi bem-sucedida
      console.log(xhr.responseText); // Exibe a resposta do PHP (opcional)
    } else {
      // Ocorreu um erro na requisição
      console.log("Erro na requisição. Status: " + xhr.status);
    }
  };

  // Envia a requisição com os dados do formulário
  xhr.send(formData);
});
