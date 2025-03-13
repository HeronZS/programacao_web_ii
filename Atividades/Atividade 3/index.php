<?php

require_once 'vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

echo "<p>Iniciando o timer...</p>";

$timer = new Timer();
$timer->start();

$startTime = microtime(true);

echo '<p>Tempo decorrido: <span id="timer">0.00</span> segundos</p>';

echo "<script>
        function atualizarTempo() {
            let inicio = " . $startTime . ";
            let elemento = document.getElementById('timer');

            setInterval(() => {
                let agora = performance.now() / 1000; // Tempo atual em segundos
                let tempoDecorrido = (agora + inicio - performance.timing.navigationStart / 1000).toFixed(2);
                elemento.textContent = tempoDecorrido;
            }, 100);
        }
        atualizarTempo();
    </script>";

sleep(5);

$duration = $timer->stop();

