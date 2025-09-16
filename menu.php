  
<?php  
session_start();  
if (!isset($_SESSION['user'])) {  
    header('Location: login.php');  
    exit;  
}  
$user = $_SESSION['user'];  
?>  

<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Menú</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            margin: 0;  
            padding: 0;  
        }  
        .header {  
            display: flex;  
            justify-content: flex-end;  
            align-items: center;  
            padding: 10px;  
            background-color: #f0f0f0;  
        }  
        .user-info {  
            display: flex;  
            align-items: center;  
        }  
        .user-icon {  
            width: 40px;  
            height: 40px;  
            border-radius: 50%;  
            margin-right: 10px;  
        }  
        .logout-btn {  
            margin-left: 10px;  
            padding: 5px 10px;  
            background-color: #dc3545;  
            color: white;  
            border: none;  
            cursor: pointer;  
        }  
        .nav {
            background-color: #e9ecef;
            padding: 10px;
        }
        .nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #007bff;
        }
        .content {
            padding: 20px;
        }
    </style>  
</head>  
<body>  
    <div class="header">
        <div class="user-info">
            <img class="user-icon" src="<?php echo htmlspecialchars($user['picture']); ?>" alt="Icono">
            <span><?php echo htmlspecialchars($user['email']); ?></span>
            <form method="POST" action="logout.php" style="display: inline;">
                <button class="logout-btn" type="submit">Cerrar Sesión</button>
            </form>
        </div>
    </div>
    <nav class="nav">
        <a href="menu.php">Inicio</a>
        <a href="usuarios.php">Usuarios</a>
    </nav>
    <div class="content">
        <h1>Menú Principal</h1>
        <p>Bienvenido, <?php echo htmlspecialchars($user['name']); ?>.</p>
    </div>
</body>  
</html>  