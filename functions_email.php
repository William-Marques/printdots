<?
$enviado = 1;
if(mail("$destinatario","$assunto","$mensagem","$headers")){
	$enviado = 1;
}else{
	require("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP(); // mandar via SMTP
	$mail->Host = "mail.newdoor.com.br"; // Seu servidor smtp
	$mail->SMTPAuth = true; // smtp autenticado
	$mail->Username = $from; // usu�rio deste servidor smtp
	$mail->Password = "plextor"; // senha
	
	$mail->From = "$from";
	$mail->FromName = "$fromname";
	$mail->AddAddress("$destinatario");
	$mail->AddBCC("$from","$fromname");
	$mail->IsHTML(true); // send as HTML
	
	$mail->Subject = "$assunto";
	$mail->Body = "$mensagem";
	
	
	if($mail->Send()){
		$enviado = 1;
	}#else{
		#echo "A mensagem n�o pode ser enviada";
		#echo "Erro: " . $mail->ErrorInfo;
		#exit;
	#}
}
?>