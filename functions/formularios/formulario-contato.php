<?php
// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
require_once("PHPMailerAutoload.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();

// DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "animahabitus.com.br"; // Seu endereço de host SMTP
$mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
$mail->Port = 465; // Porta de comunicação SMTP - Mantenha o valor "587"
$mail->SMTPSecure = true; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
$mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
$mail->Username = 'contato@animahabitus.com.br'; // Conta de email existente e ativa em seu domínio
$mail->Password = '(7nj&QQupWb%'; // Senha da sua conta de email

// DADOS DO REMETENTE
$mail->Sender = "contato@animahabitus.com.br"; // Conta de email existente e ativa em seu domínio
$mail->From = "contato@animahabitus.com.br"; // Sua conta de email que será remetente da mensagem
$mail->FromName = "Formulário de Contato (Página de Contato)"; // Nome da conta de email

// DADOS DO DESTINATÁRIO
$mail->AddAddress('contato@animahabitus.com.br', 'Contato - Anima Habitus'); // Define qual conta de email receberá a mensagem
//$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
//$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
//$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta

// Definição de HTML/codificação
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "Formulário de Contato"; // Assunto da mensagem
$mail->Body .= " Nome: ".$_POST['nome']."<br>"; // Texto da mensagem
$mail->Body .= " E-mail: ".$_POST['email']."<br>"; // Texto da mensagem
$mail->Body .= " Telefone: ".$_POST['telefone']."<br>"; // Texto da mensagem
$mail->Body .= " Mensagem: ".nl2br($_POST['mensagem'])."<br>"; // Texto da mensagem

// PÁGINA QUE SERÁ EXIBIBA APÓS O ENVIO

$exibir_apos_enviar='/';

// ENVIO DO EMAIL
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();

// Exibe uma mensagem de resultado do envio (sucesso/erro)
if ($enviado) {
	echo "<script>window.location='$exibir_apos_enviar'
	alert('E-mail enviado com sucesso! Obrigado por entrar em contato conosco, em breve seu e-mail será respondido');
	</script>";
} else {
	/*echo "Não foi possível enviar o e-mail.";
	echo "<b>Detalhes do erro:</b> " . $mail->ErrorInfo;*/

	echo "<script>window.location='$exibir_apos_enviar'
		alert('Não foi possível enviar o e-mail. $mail->ErrorInfo');
		</script>";
}