<form id="meuFormulario">
   <label for="nome">Nome:</label>
   <input type="text" id="nome" name="nome">

   <label for="email">E-mail:</label>
   <input type="email" id="email" name="email">

   <!-- Adicione outros campos conforme necessário -->

   <input type="button" value="Enviar" onclick="enviarDados()">
</form>


<script>
// Exemplo de código utilizando a API do Google Sheets
// Certifique-se de configurar a API no Console de Desenvolvedor do Google e obter suas credenciais

// Código para autenticar e enviar dados para a planilha
function enviarDados() {
   var nome = document.getElementById("nome").value;
   var email = document.getElementById("email").value;

   // Configurar dados para enviar para a planilha
   var dados = {
      values: [[nome, email]],
   };

   // Configurar a URL da sua planilha do Google Sheets
   var url = 'https://sheets.googleapis.com/v4/spreadsheets/{1d4pviO3tNOpmGQBMWNc3RpOmxcbrw3O6R0jJRCFHPwI}/values/{01 JANEIRO 2024}:append';

   // Configurar a chave de API e enviar a requisição
   fetch(url, {
      method: 'POST',
      headers: {
         'Authorization': 'Bearer {YOUR_ACCESS_TOKEN}',
         'Content-Type': 'application/json',
      },
      body: JSON.stringify(dados),
   })
   .then(response => response.json())
   .then(data => {
      console.log('Dados enviados com sucesso:', data);
      // Adicionar lógica adicional conforme necessário
   })
   .catch(error => console.error('Erro ao enviar dados:', error));
}

</script>

<style>
   h1{
      color: blue;
   }

   *::selection{
      background-color: red;
      color: #fff;
   }
</style>
<h1>Teste</h1>