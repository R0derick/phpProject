<?php
    if (!isset($_SESSION)){
        session_start();
    };

    function peu_pagina(){
        echo <<<EOT
            <br>
            <div>
                <div class="footer">
                        <div class="p-2 bg-secondary text-white">© 2023 ASIX-MP09-UF1</div>
                </div>
            </div>
        EOT;
    }
?>