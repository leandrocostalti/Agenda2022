<?php
    try {
        DEFINE('HOST','localhost');
        DEFINE('BD','bd_Agenda');
        DEFINE('USER','root');
        DEFINE('PASS','qwe123lti');

        $conect = new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS);
        $conect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "<strong>Erro de PDO</strong> ".$e->getMessage();
    }
