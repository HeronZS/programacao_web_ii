<?php

/**
 * @author Heron Zonta da Silva
 * @since 20/02/2025
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<h2>Dados Recebidos:</h2>";
    foreach ($_REQUEST as $key => $value) {
        echo "<strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "<br>";
    }
    
    echo "<h2>Método da Requisição:</h2>";
    echo "<p>" . $_SERVER['REQUEST_METHOD'] . "</p>";
    
    echo "<h2>Cabeçalhos da Requisição:</h2>";
    $headers = apache_request_headers();
    echo "<pre>";
    print_r($headers);
    echo "</pre>";
} else {
    echo "<p>Método não suportado.</p>";
}
?>