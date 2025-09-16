  
<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Hola Mundo</title>  
</head>  
<body>
    <h1>Registro de Eventos</h1>
    <div id="g_id_onload"
         data-client_id="407435070764-uc0aruvvu71fivuq5o7lnocklik857oc.apps.googleusercontent.com"
         data-callback="handleCredentialResponse">
    </div>
    <div class="g_id_signin" data-type="standard"></div>
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