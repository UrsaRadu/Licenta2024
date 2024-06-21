
<?php
include('../includes/connect.php');
session_start();



// Verificăm dacă există parametrul 'id' în URL și dacă este un număr valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $message_id = $_GET['id'];

    // Ștergem mesajul din baza de date folosind parametri pregătiți pentru a preveni SQL Injection
    $query = "DELETE FROM user_messages WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);

    // Legăm parametrul
    mysqli_stmt_bind_param($stmt, "i", $message_id);

    // Executăm interogarea
    mysqli_stmt_execute($stmt);

    // Închidem declarația
    mysqli_stmt_close($stmt);

    // Redirecționăm înapoi la pagina de vizualizare a mesajelor
    header("Location: view_messages_admin.php");
    exit();
} else {
    // Dacă nu există parametrul 'id' valid, redirecționăm înapoi la pagina de vizualizare a mesajelor
    header("Location: view_messages_admin.php");
    exit();
}
?>
