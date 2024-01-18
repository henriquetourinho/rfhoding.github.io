<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $assunto = test_input($_POST["assunto"]);
    $mensagem = test_input($_POST["mensagem"]);

    // Processar os dados, por exemplo, enviar um e-mail
    $destinatario = "henriquetourinho@Proton.me";
    $assunto_email = "Nova mensagem de contato: $assunto";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Assunto: $assunto\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Processar o arquivo enviado
    if (isset($_FILES['arquivo'])) {
        $arquivo_nome = $_FILES['arquivo']['name'];
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $caminho_destino = "uploads/" . $arquivo_nome; // Diretório onde os arquivos serão armazenados

        move_uploaded_file($arquivo_tmp, $caminho_destino);
        $corpo_email .= "\n\nArquivo enviado: $caminho_destino";
    }

    mail($destinatario, $assunto_email, $corpo_email);

    // Redirecionar de volta para a página do formulário
    header("Location: index.html");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
