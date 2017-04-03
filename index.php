<?php
define("DATABASE", "host=ec2-54-83-49-44.compute-1.amazonaws.com port=5432 dbname=dekono9ngjih35 user=sedjlmulcvnfpf password=fa2bf0358fa9ac7eb9370076fc15023dd058ce6aceade8427dafdf890ea4f893");

echo "Ola";
 
$db = pg_connect (DATABASE);
$consulta = pg_query($db, "SELECT * FROM usuario");
        
        while ($row = pg_fetch_assoc($consulta)) {   
          echo "Login: " $row['login'] "<br>";
           echo "Senha: " $row['senha'] "<br>";
        }

?>
