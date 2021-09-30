# App Send Mail
<p>
  
  Desenvolvimento do website Send Mail com o objetivo de praticar paradigma de orientação a objetos e praticar tratamento de erros com try catch.
  O objetivo do projeto foi ter uma tela simples que futuramente possa ser implementada em um projeto maior com o objetivo de enviar e-mail através da aplicação.
  Foi utilizado nesse desenvolvimento a Biblioteca PHPMailer
  
</p>

<h3>Tela Principal</h3>
<div>
  <img src="https://user-images.githubusercontent.com/84480805/135284677-6db60ccd-1170-4c03-a513-f5af77fddbd7.png" width="700px">
</div>
</br></br>

<h3>Tela Êxito</h3>
<div>
  <img src="https://user-images.githubusercontent.com/84480805/135284945-901f2188-a38c-46fb-9ae6-4cc3a7b28cf8.png" width="700px">
</div>
</br></br>

<h3>Tela Erro</h3>
<div>
  <img src="https://user-images.githubusercontent.com/84480805/135284250-f7a400fd-9b30-4941-8b3e-c55a0acb9fdc.png" width="700px" >
</div>
</br></br>


# Instalação

<p>
  Na aplicação é necessário utilizar um Email e senha válidos do gmail.
  Para fazer a inserção dos dados válidos entre em  processa_envio.php e mude as seguintes configurações:
</p>

<div>
  <img src="https://user-images.githubusercontent.com/84480805/135285335-30b99af2-d35c-4d4f-a862-ad3e70bbf625.png" width="500px" >
</div>

<p>Linha 35: $mail->Username = 'coloque_seu_email@gmail.com';</p>
<p>Linha 36: $mail->Password = ColoqueSuaSenha;</p>
<p>Linha 41:  $mail->setFrom('coloque_seu_email@gmail.com', 'App Mail');</p>
</br></br>

# IMPORTANTE - Ajustando as configurações de acesso ao SMTP do Gmail

<p> 1) Acesse a conta do Gmail utilizada para o envio de e-mails, na sequência clique sobre o ícone de usuário e acesse a opção <b>"Gerenciar Sua Conta do Google"</b>: </p>
<div>
  <img src="https://user-images.githubusercontent.com/84480805/135285483-dd0cc3c2-f524-4e43-a326-9f3000953930.png" width="200px" >
</div>
</br></br>
<p> 2) Em <b>"Google Conta"</b> acesse a opção <b>"Segurança"</b>:</p>
<div>
  <img src="https://user-images.githubusercontent.com/84480805/135285615-ada9f49a-ba9d-44e2-a9f4-761eba624390.png" width="200px" >
</div>
</br></br>
<p> 3) Na página <b>"Segurança"</b> procure pela opção <b>"Acesso a app menos seguro"</b> e clique no link <b>"Ativar acesso (não recomendado)"</b>:</p>
<div>
  <img src="https://user-images.githubusercontent.com/84480805/135285712-0fe111ce-77c2-4807-b497-1e494e8106ad.png" width="700px" >
</div>
</br></br>
<p> 4) Ao acessar o link do passo anterior, clique sobre o botão <b>"Ativada/Desativada"</b> para marcar opção <b>"Acesso a app menos seguro"</b> como <b>"Ativada"</b>:</p>
<div>
  <img src="https://user-images.githubusercontent.com/84480805/135285789-99aaffe5-74cc-4f07-bc61-65c61173f5a1.png" width="400px" >
</div>
 </br></br>
Lembre-se, para acessar a conta do Gmail através do serviço smtp é necessário habilitar a baixa segurança da conta, dessa forma outras aplicações poderão se comunicar com a conta para utilização deste serviço.
