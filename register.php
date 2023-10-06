<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Nome do arquivo de texto onde os dados serão armazenados
    $arquivo = "dadosRegister.txt";

    // Abre o arquivo para escrita (modo "a" para anexar)
    $file = fopen($arquivo, "a");

    // Verifica se o arquivo foi aberto com sucesso
    if ($file) {
        // Escreve os dados no arquivo
        fwrite($file, "E-mail: " . $email . "\n");
        fwrite($file, "Senha: " . $senha . "\n");
        fwrite($file, "-------------------\n");

        // Fecha o arquivo
        fclose($file);

        echo "Dados foram gravados no arquivo com sucesso.";
    } else {
        echo "Erro ao abrir o arquivo.";
    }
}
?>
