
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();

// Funcția pentru afișarea mesajelor
function displayMessages() {
    global $con;
    $query = "SELECT um.id, um.user_id, ut.username, um.message, um.ip_address, um.timestamp FROM user_messages um
              INNER JOIN user_table ut ON um.user_id = ut.user_id";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nr Mesaj</th>";
        echo "<th>ID Utilizator</th>";
        echo "<th>Nume Utilizator</th>";
        echo "<th>Mesaj</th>";
        echo "<th>Adresa IP</th>";
        echo "<th>Data</th>";
        echo "<th>Optiune</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['user_id']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['message']}</td>";
            echo "<td>{$row['ip_address']}</td>";
            echo "<td>{$row['timestamp']}</td>";
            echo "<td><a href='delete_message.php?id={$row['id']}' class='btn btn-danger'>Sterge</a></td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p class='text-danger fw-bold'>Nu exista Mesaje !</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizare Mesaje</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-warning">Vizualizare Mesaje</h2>
        <a href="index.php" class="btn btn-danger fw-bold mb-3">Inapoi la Acasa</a>
        <!-- Apelăm funcția pentru afișarea mesajelor -->
        <?php displayMessages(); ?>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
