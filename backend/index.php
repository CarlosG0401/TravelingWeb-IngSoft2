<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASSWORD");
$db   = getenv("DB_NAME");

echo "DB_USER: " . $user . "<br>";
echo "DB_PASSWORD: " . $pass . "<br>";

try {
    $conn = new mysqli($host, $user, $pass, $db, 3307);
    echo "✅ Conexión exitosa a la base de datos.";
    $conn->close();
} catch (mysqli_sql_exception $e) {
    echo "❌ Conexión fallida: " . $e->getMessage();
}
?>

