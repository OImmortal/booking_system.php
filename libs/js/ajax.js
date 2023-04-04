// Pega o formulário pelo ID
const form = document.querySelector('#login-form');

// Adiciona um listener para quando o formulário for enviado
form.addEventListener('submit', (event) => {
  // Previne o comportamento padrão do formulário, que é recarregar a página
  event.preventDefault();

  // Pega os valores dos campos do formulário
  const email = document.querySelector('#email-login').value;
  const password = document.querySelector('#senha-login').value;

  // Cria um objeto FormData com os dados do formulário
  const formData = new FormData();
  formData.append('email', email);
  formData.append('senha', password);

  // Envia uma requisição POST para a página Classe.php com os dados do formulário
  fetch('Classe.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    // Se a resposta da requisição for "success", seta a variável de sessão
    if (data === 'success') {
      sessionStorage.setItem('online', 'true');
    }
  })
  .catch(error => console.error(error));
});
