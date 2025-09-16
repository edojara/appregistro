  
<?php  
// Configuración de la base de datos  
$host = 'localhost'; // Cambia si es diferente  
$dbname = 'tu_base_datos'; // Nombre de la DB en Donweb  
$username = 'tu_usuario_db'; // Usuario de la DB  
$password = 'tu_password_db'; // Password de la DB  

try {  
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {  
    die("Error de conexión: " . $e->getMessage());  
}  
?>  