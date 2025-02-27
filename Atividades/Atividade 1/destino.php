<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<h2>Dados Recebidos:</h2>";
    foreach ($_REQUEST as $key => $value) {
        echo "<strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "<br>";
    }

} else {
    echo "<p>Método não suportado.</p>";
}
?>