<?php
    $headers = apache_request_headers();

    foreach ($headers as $header => $value) {
        echo "$header: $value <br />\n";
    }

    echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>\n";
    echo "Nome: " . $_REQUEST['nome'] . "<br>\n";
    echo "Telefone: " . $_REQUEST['telefone'] . "<br>\n";
    echo "Email: " . $_REQUEST['email'] . "<br>\n";
    echo "Mensagem: " . $_REQUEST['mensagem'] . "<br>\n";

?>