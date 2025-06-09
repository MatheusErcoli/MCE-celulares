<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $cpf = $_POST['cpf'];
    $mensagem = $_POST['mensagem'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mcecelulares@gmail.com';
        $mail->Password   = 'mjfy vbzw vust vsmy';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

       
        $mail->setFrom('mcecelulares@gmail.com', 'Pedido');
        $mail->addAddress('mcecelulares@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Novo Pedido via Formulário';
        $mail->Body    = "
            <strong>Nome:</strong> $nome $sobrenome<br>
            <strong>Email:</strong> $email<br>
            <strong>Telefone:</strong> $numero<br>
            <strong>CPF:</strong> $cpf<br>
            <strong>Mensagem:</strong><br>$mensagem
        ";

        $mail->send();
        echo "<script>alert('Mensagem enviada com sucesso! Entraremos em contato via whatsapp para fazer sua compra'); window.location.href = 'home';</script>";
    } catch (Exception $e) {
        echo "Erro ao enviar: {$mail->ErrorInfo}";
    }
}
?>