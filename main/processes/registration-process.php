<!-- ________________DEFAULT CONTENT FOR NEW FILE main/processes/registration-process.php -->
<!-- ________________THIS IS ALL BEFORE MAKING DATABASE CONNECTIONS OR OTHER MODIFICATIONS -->
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $confirmPassword = $_POST['confirm-password'];

//     if (empty($username) || empty($password) || empty($confirm_password)) {
//             echo "All fields are required.";
//     } elseif ($password !== $confirmPassword) {
//             echo "Passwords do not match.";
//     } else {
//             echo "Registration successful for user: $username";
//     }
// } else {
//     echo "Invalid request method.";
// }
?>

<!-- ________________AFTER DATABASE CONNECTIONS OR OTHER MODIFICATIONS USE THIS: -->
<?php
include('../config/db.php');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method.');
    }
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm-password'] ?? '';

    if (empty($username) || empty($password) || empty($confirmPassword)) {
        throw new Exception('All fields are required.');
    }
    
    if ($password !== $confirmPassword) {
        throw new Exception('Passwords do not match.');
    }
   
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    if (!$stmt) {
        throw new Exception('Prepare failed: ' . $conn->error);
    }
    
    $stmt->bind_param("ss", $username, $hashed_password);
    
    if (!$stmt->execute()) {
        throw new Exception('Execute failed: ' . $stmt->error);
    }
    
    echo "Registration successful for user: $username";
    $stmt->close();
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conn->close();
}
?>