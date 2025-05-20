<?php
function procesarEmailFormulario(){
    $email = $_POST['email']??'';
    if ($email){
        echo "Email '". htmlspecialchars($email) . "' recibido con éxito"
    }else{
        echo "Por favor, envía un email en el parámetro 'email'"
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    procesarEmailFormulario();
}
?>

<form  method="post"> 
    <input type="email" name="email" placeholder=tu.email@ejemplo.com required>
    <button type="submit">Enviar Email</button>
</form>

<!-- Segundo commit donde iría la documentación del código -->