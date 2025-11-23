<!-- ________________DEFAULT CONTENT FOR NEW FILE main/processes/contact-process.php -->
<!-- ________________THIS IS ALL BEFORE MAKING DATABASE CONNECTIONS OR OTHER MODIFICATIONS -->
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     if (empty($name) || empty($email) || empty($message)) {
//         echo "All fields are required.";
//     } else {
//         echo "Thank you, $name. Your message has been received.";
//     }
// } else {
//     echo "Invalid request method.";
// }
?>

<!-- ________________AFTER DATABASE CONNECTIONS OR OTHER MODIFICATIONS USE THIS: -->
<?php
include('../config/db.php'); // This loads your DB connection

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method.');
    }

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        throw new Exception('All fields are required.');
    }

    $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if (!$stmt->execute()) {
        throw new Exception("Database error: " . $stmt->error);
    }

    echo "Thank you, $name. Your message has been received and saved.";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>