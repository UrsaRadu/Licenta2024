
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();



$messageSent = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message'];
    $username = $_SESSION['username'];
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Get user ID
    $user_query = "SELECT user_id FROM user_table WHERE username = '$username'";
    $user_result = mysqli_query($con, $user_query);
    $user_row = mysqli_fetch_assoc($user_result);
    $user_id = $user_row['user_id'];

    // Insert message into database
    $insert_query = "INSERT INTO user_messages (user_id, ip_address, message) VALUES ('$user_id', '$ip_address', '$message')";
    mysqli_query($con, $insert_query);

    $messageSent = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacteaza Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-warning fw-bold">
        <h2>Contacteaza Admin</h2>
        <form action="contact.php" method="post">
            <div class="form-group">
                <label for="message" class="text-warning fw-bold">Mesaj:</label>
                <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger mt-2">Trimite Mesajul</button>
            <a href="profile.php" class="btn btn-danger mt-2">Inapoi la Profil</a>
        </form>

        <?php 
        // Afisăm mesajul de confirmare doar dacă mesajul a fost trimis
        if ($messageSent) {
            echo "<p class='mt-3 text-warning fw-bold'>Mesajul a fost trimis cu Succes!</p>";
        }
        ?>
    </div>
</body>
</html>
