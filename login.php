  
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['credential'])) {
    $credential = $_POST['credential'];

    // Verificar JWT (simplificado, en producción usa biblioteca)
    $payload = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $credential)[1]))), true);

    if ($payload && isset($payload['email'])) {
        $_SESSION['user'] = $payload;
        header('Location: menu.php');
        exit;
    }
}
?>

<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Inicio de Sesión</title>  
    <style>  
        body {  
            display: flex;  
            justify-content: center;  
            align-items: center;  
            height: 100vh;  
            margin: 0;  
            background-color: #f0f0f0;  
        }  
        .container {  
            text-align: center;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h1>Bienvenido</h1>  
        <div id="g_id_onload"  
             data-client_id="407435070764-uc0aruvvu71fivuq5o7lnocklik857oc.apps.googleusercontent.com"  
             data-callback="handleCredentialResponse">  
        </div>  
        <div class="g_id_signin" data-type="standard"></div>  
    </div>  
    <form id="loginForm" method="POST" style="display: none;">  
        <input type="hidden" name="credential" id="credential">  
    </form>  
    <script src="https://accounts.google.com/gsi/client" async defer></script>  
    <script>  
        function handleCredentialResponse(response) {  
            document.getElementById('credential').value = response.credential;  
            document.getElementById('loginForm').submit();  
        }  
    </script>  
</body>  
</html>  