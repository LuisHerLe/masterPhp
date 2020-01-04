<?php

//Capturar excepciones en código susceptible a errores
try {
    
    if(isset($_GET['id'])){
       echo "Existe el parámetro {$_GET['id']}".'<br/>'; 
    }else{
        throw new Exception("NO existe el parámetro requerido"); //Salta al catch
    }
        
} catch (Exception $e) {
    
    echo "<br/>Existen errores ".$e->getMessage();
    
} finally {
    
    echo '</p>Todo correcto</p>';
    
}
